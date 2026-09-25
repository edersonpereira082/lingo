<?php

require_once __DIR__ . '/funcoes.php';
require_once __DIR__ . '/catalogo.php';

function limpar_catalogo(mysqli $conexao): void
{
    $conexao->query('SET FOREIGN_KEY_CHECKS = 0');
    foreach (['exercicios', 'progresso_aulas', 'aulas', 'unidades', 'palavras', 'inscricoes', 'cursos'] as $tabela) {
        $conexao->query('DELETE FROM ' . $tabela);
        $conexao->query('ALTER TABLE ' . $tabela . ' AUTO_INCREMENT = 1');
    }
    $conexao->query("DELETE FROM configuracoes WHERE chave = 'semente'");
    $conexao->query('UPDATE usuarios SET curso_atual_id = NULL');
    $conexao->query('SET FOREIGN_KEY_CHECKS = 1');
}

function dica_pedagogica(array $ex, string $resumo): string
{
    $existente = trim((string) ($ex['dica'] ?? ''));
    if ($existente !== '') {
        return $existente;
    }

    $tema = trim($resumo) !== '' ? $resumo : 'a teoria desta aula';

    switch ($ex['tipo'] ?? '') {
        case 'completar':
            return 'Complete com a palavra da teoria (' . $tema . '). Acentos e maiúsculas importam.';
        case 'traducao':
            return 'Traduza o sentido da aula. Variações comuns (com ou sem acento) são aceitas.';
        case 'multipla':
            return 'Escolha a opção que aparece na teoria: ' . $tema . '.';
        case 'ordem':
            return 'Toque nas palavras na ordem da frase da teoria.';
        case 'emparelhar':
            return 'Una cada termo do idioma de estudo à tradução desta aula.';
        case 'verdadeiro_falso':
            return 'Relia a teoria (' . $tema . ') antes de decidir.';
        default:
            return 'Use o diálogo da aula antes de responder.';
    }
}

function popular_conteudo(mysqli $conexao, bool $forcar = false): void
{
    $inscricoesSalvas = [];
    $cursosAtuais = [];
    if ($forcar) {
        $linhas = $conexao->query(
            'SELECT u.email, c.codigo, i.nivel_inicio, i.modo_trilha
             FROM inscricoes i
             JOIN usuarios u ON u.id = i.usuario_id
             JOIN cursos c ON c.id = i.curso_id'
        );
        if ($linhas) {
            $inscricoesSalvas = $linhas->fetch_all(MYSQLI_ASSOC);
        }
        $linhas2 = $conexao->query(
            'SELECT u.email, c.codigo
             FROM usuarios u
             JOIN cursos c ON c.id = u.curso_atual_id'
        );
        if ($linhas2) {
            $cursosAtuais = $linhas2->fetch_all(MYSQLI_ASSOC);
        }
        limpar_catalogo($conexao);
    }

    $ok = $conexao->query("SELECT valor FROM configuracoes WHERE chave = 'semente'")->fetch_assoc();
    if ($ok && $ok['valor'] === '1') {
        return;
    }

    $conexao->begin_transaction();
    try {
        $cursos = catalogo_lingo();

        $insCurso = $conexao->prepare(
            'INSERT INTO cursos (nome, codigo, bandeira, descricao, cor, ordem, ativo) VALUES (?, ?, ?, ?, ?, ?, 1)'
        );
        $insUnidade = $conexao->prepare(
            'INSERT INTO unidades (curso_id, titulo, descricao, nivel, ordem) VALUES (?, ?, ?, ?, ?)'
        );
        $insAula = $conexao->prepare(
            'INSERT INTO aulas (unidade_id, titulo, resumo, teoria, ordem, xp_recompensa) VALUES (?, ?, ?, ?, ?, ?)'
        );
        $insEx = $conexao->prepare(
            'INSERT INTO exercicios (aula_id, tipo, enunciado, dica, resposta_correta, alternativas, ordem) VALUES (?, ?, ?, ?, ?, ?, ?)'
        );
        $insPal = $conexao->prepare(
            'INSERT INTO palavras (curso_id, termo, traducao, exemplo, nivel) VALUES (?, ?, ?, ?, ?)'
        );

        $ordemCurso = 1;
        foreach ($cursos as $curso) {
            $insCurso->bind_param(
                'sssssi',
                $curso['nome'],
                $curso['codigo'],
                $curso['bandeira'],
                $curso['descricao'],
                $curso['cor'],
                $ordemCurso
            );
            $insCurso->execute();
            $cursoId = $insCurso->insert_id;
            $ordemCurso++;

            foreach ($curso['palavras'] as $palavra) {
                $nivelP = codigo_cefr((string) ($palavra[3] ?? 'A1'));
                $insPal->bind_param('issss', $cursoId, $palavra[0], $palavra[1], $palavra[2], $nivelP);
                $insPal->execute();
            }

            $ordemUnidade = 1;
            foreach ($curso['unidades'] as $unidade) {
                $descU = $unidade['descricao'] ?? '';
                $nivelU = codigo_cefr((string) ($unidade['nivel'] ?? 'A1'));
                $insUnidade->bind_param('isssi', $cursoId, $unidade['titulo'], $descU, $nivelU, $ordemUnidade);
                $insUnidade->execute();
                $unidadeId = $insUnidade->insert_id;
                $ordemUnidade++;

                $ordemAula = 1;
                foreach ($unidade['aulas'] as $aula) {
                    $resumo = $aula['resumo'] ?? '';
                    $teoria = $aula['teoria'] ?? '';
                    $xp = $aula['xp'] ?? 12;
                    $insAula->bind_param('isssii', $unidadeId, $aula['titulo'], $resumo, $teoria, $ordemAula, $xp);
                    $insAula->execute();
                    $aulaId = $insAula->insert_id;
                    $ordemAula++;

                    $ordemEx = 1;
                    foreach ($aula['exercicios'] as $ex) {
                        $dica = dica_pedagogica($ex, $resumo);
                        $gabarito = $ex['resposta'] ?? null;
                        $alts = isset($ex['alts']) ? json_encode($ex['alts'], JSON_UNESCAPED_UNICODE) : null;
                        $insEx->bind_param('isssssi', $aulaId, $ex['tipo'], $ex['enunciado'], $dica, $gabarito, $alts, $ordemEx);
                        $insEx->execute();
                        $ordemEx++;
                    }
                }
            }
        }

        $conexao->query("INSERT INTO configuracoes (chave, valor) VALUES ('semente', '1') ON DUPLICATE KEY UPDATE valor = '1'");

        $insInsc = $conexao->prepare(
            'INSERT IGNORE INTO inscricoes (usuario_id, curso_id, nivel_inicio, modo_trilha)
             SELECT u.id, c.id, ?, ? FROM usuarios u JOIN cursos c ON c.codigo = ? WHERE u.email = ?'
        );
        foreach ($inscricoesSalvas as $item) {
            $nivelIn = codigo_cefr((string) ($item['nivel_inicio'] ?? 'A1'));
            $modoIn = modo_trilha_valido($item['modo_trilha'] ?? 'completa');
            $insInsc->bind_param('ssss', $nivelIn, $modoIn, $item['codigo'], $item['email']);
            $insInsc->execute();
        }
        $upAtual = $conexao->prepare(
            'UPDATE usuarios u JOIN cursos c ON c.codigo = ? SET u.curso_atual_id = c.id WHERE u.email = ?'
        );
        foreach ($cursosAtuais as $item) {
            $upAtual->bind_param('ss', $item['codigo'], $item['email']);
            $upAtual->execute();
        }

        $it = $conexao->query("SELECT id FROM cursos WHERE codigo = 'it' LIMIT 1")->fetch_assoc();
        if ($it) {
            $cursoIt = (int) $it['id'];
            $st = $conexao->prepare('UPDATE usuarios SET curso_atual_id = ? WHERE email = ? AND curso_atual_id IS NULL');
            $emailDemo = 'demo@lingo.local';
            $st->bind_param('is', $cursoIt, $emailDemo);
            $st->execute();
            $conexao->query(
                'INSERT IGNORE INTO inscricoes (usuario_id, curso_id)
                 SELECT id, ' . $cursoIt . " FROM usuarios WHERE email = 'demo@lingo.local'"
            );
        }

        $conexao->commit();
    } catch (Throwable $e) {
        $conexao->rollback();
        throw $e;
    }
}
