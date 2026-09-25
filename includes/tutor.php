<?php

function garantir_tutor(mysqli $conexao): void
{
    static $feito = false;
    if ($feito) {
        return;
    }
    $feito = true;

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS tutor_mensagens (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          usuario_id INT UNSIGNED NOT NULL,
          curso_id INT UNSIGNED NOT NULL,
          papel ENUM('aluno','lino') NOT NULL,
          mensagem TEXT NOT NULL,
          audio VARCHAR(255) NOT NULL DEFAULT '',
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          INDEX idx_tutor_hist (usuario_id, curso_id, id),
          CONSTRAINT fk_tutor_user FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
          CONSTRAINT fk_tutor_curso FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );
}

function tutor_tokens(string $texto): array
{
    $norm = normalizar_resposta($texto);
    $partes = preg_split('/\s+/', $norm) ?: [];
    $parar = [
        'o', 'a', 'os', 'as', 'de', 'da', 'do', 'das', 'dos', 'em', 'no', 'na', 'um', 'uma',
        'que', 'como', 'se', 'diz', 'fala', 'digo', 'significa', 'quer', 'dizer', 'me', 'te',
        'explica', 'explique', 'ensinar', 'ensine', 'qual', 'quais', 'e', 'eh', 'por', 'para',
        'com', 'eu', 'voce', 'voces', 'quero', 'saber', 'sobre', 'the', 'is', 'what', 'how',
        'please', 'ola', 'oi', 'hey', 'lino', 'tutor', 'pode', 'podes', 'pra', 'pro',
    ];
    $lista = [];
    foreach ($partes as $p) {
        if (mb_strlen($p) >= 2 && !in_array($p, $parar, true)) {
            $lista[] = $p;
        }
    }

    return array_values(array_unique($lista));
}

function tutor_extrair_alvo(string $pergunta): string
{
    if (preg_match('/["«“]([^"»”]+)["»”]/u', $pergunta, $m)) {
        return trim($m[1]);
    }
    if (preg_match('/como se (diz|fala)\s+(.+?)\s*\??$/iu', $pergunta, $m)) {
        return trim($m[2], " .!?");
    }
    if (preg_match('/o que significa\s+(.+?)\s*\??$/iu', $pergunta, $m)) {
        return trim($m[1], " .!?");
    }
    if (preg_match('/traduz(a|e|ir)?\s+(.+?)\s*\??$/iu', $pergunta, $m)) {
        return trim($m[2], " .!?");
    }

    return '';
}

function tutor_pontuar(string $texto, array $tokens, string $alvoNorm): int
{
    $norm = normalizar_resposta($texto);
    if ($norm === '') {
        return 0;
    }
    $pts = 0;
    if ($alvoNorm !== '' && $norm === $alvoNorm) {
        $pts += 80;
    } elseif ($alvoNorm !== '' && str_contains($norm, $alvoNorm)) {
        $pts += 50;
    }
    foreach ($tokens as $tok) {
        if ($tok !== '' && str_contains($norm, $tok)) {
            $pts += 12;
        }
    }

    return $pts;
}

function tutor_contexto(mysqli $conexao, int $cursoId, string $idioma, string $pergunta): array
{
    $tokens = tutor_tokens($pergunta);
    $alvo = tutor_extrair_alvo($pergunta);
    $alvoNorm = $alvo !== '' ? normalizar_resposta($alvo) : '';
    $likes = [];
    foreach (array_slice($alvo !== '' ? array_merge([$alvo], $tokens) : $tokens, 0, 5) as $tok) {
        $likes[] = '%' . $conexao->real_escape_string($tok) . '%';
    }
    $palavras = [];
    $aulas = [];
    $frases = [];

    $sugestoes = [];
    $rand = $conexao->query(
        'SELECT termo, traducao FROM palavras WHERE curso_id = ' . $cursoId . ' ORDER BY RAND() LIMIT 8'
    );
    if ($rand) {
        $sugestoes = $rand->fetch_all(MYSQLI_ASSOC);
    }

    if (!$likes) {
        $stF0 = $conexao->prepare('SELECT nome, topico, frases FROM conversas_salas WHERE idioma = ? AND ativo = 1 LIMIT 3');
        $stF0->bind_param('s', $idioma);
        $stF0->execute();
        foreach ($stF0->get_result()->fetch_all(MYSQLI_ASSOC) as $sala) {
            foreach (json_decode((string) $sala['frases'], true) ?: [] as $frase) {
                $frases[] = [
                    'texto' => (string) ($frase['texto'] ?? ''),
                    'sentido' => (string) ($frase['sentido'] ?? ''),
                    'sala' => $sala['nome'],
                    'pts' => 1,
                ];
            }
        }
        $frases = array_slice($frases, 0, 5);

        return [
            'tokens' => $tokens,
            'alvo' => $alvo,
            'palavras' => $palavras,
            'aulas' => $aulas,
            'frases' => $frases,
            'sugestoes' => $sugestoes,
        ];
    }

    $sqlPal = 'SELECT termo, traducao, exemplo, nivel FROM palavras WHERE curso_id = ' . $cursoId . ' AND (';
    $partes = [];
    foreach ($likes as $like) {
        $partes[] = "termo LIKE '$like' OR traducao LIKE '$like' OR exemplo LIKE '$like'";
    }
    $sqlPal .= implode(' OR ', $partes) . ') LIMIT 20';
    foreach ($conexao->query($sqlPal)->fetch_all(MYSQLI_ASSOC) as $p) {
        $p['pts'] = max(
            tutor_pontuar($p['termo'], $tokens, $alvoNorm),
            tutor_pontuar($p['traducao'], $tokens, $alvoNorm),
            tutor_pontuar((string) $p['exemplo'], $tokens, $alvoNorm)
        );
        if ($p['pts'] > 0) {
            $palavras[] = $p;
        }
    }
    usort($palavras, static fn ($a, $b) => $b['pts'] <=> $a['pts']);
    $palavras = array_slice($palavras, 0, 6);

    $aulas = [];
    $sqlAula = 'SELECT a.titulo, a.resumo, a.teoria, u.titulo AS unidade, u.nivel
        FROM aulas a JOIN unidades u ON u.id = a.unidade_id
        WHERE u.curso_id = ' . $cursoId . ' AND (';
    $partes = [];
    foreach ($likes as $like) {
        $partes[] = "a.titulo LIKE '$like' OR a.resumo LIKE '$like' OR a.teoria LIKE '$like' OR u.titulo LIKE '$like'";
    }
    $sqlAula .= implode(' OR ', $partes) . ') ORDER BY u.ordem, a.ordem LIMIT 8';
    foreach ($conexao->query($sqlAula)->fetch_all(MYSQLI_ASSOC) as $a) {
        $bloco = $a['titulo'] . ' ' . $a['resumo'] . ' ' . $a['unidade'] . ' ' . mb_substr((string) $a['teoria'], 0, 400);
        $a['pts'] = tutor_pontuar($bloco, $tokens, $alvoNorm);
        if ($a['pts'] > 0) {
            $aulas[] = $a;
        }
    }
    usort($aulas, static fn ($a, $b) => $b['pts'] <=> $a['pts']);
    $aulas = array_slice($aulas, 0, 4);

    $frases = [];
    $stF = $conexao->prepare('SELECT nome, topico, frases FROM conversas_salas WHERE idioma = ? AND ativo = 1');
    $stF->bind_param('s', $idioma);
    $stF->execute();
    foreach ($stF->get_result()->fetch_all(MYSQLI_ASSOC) as $sala) {
        $lista = json_decode((string) $sala['frases'], true) ?: [];
        foreach ($lista as $frase) {
            $texto = (string) ($frase['texto'] ?? '');
            $sentido = (string) ($frase['sentido'] ?? '');
            $pts = max(tutor_pontuar($texto, $tokens, $alvoNorm), tutor_pontuar($sentido, $tokens, $alvoNorm));
            if ($pts > 0) {
                $frases[] = [
                    'texto' => $texto,
                    'sentido' => $sentido,
                    'sala' => $sala['nome'],
                    'pts' => $pts,
                ];
            }
        }
    }
    usort($frases, static fn ($a, $b) => $b['pts'] <=> $a['pts']);
    $frases = array_slice($frases, 0, 5);

    return [
        'tokens' => $tokens,
        'alvo' => $alvo,
        'palavras' => $palavras,
        'aulas' => $aulas,
        'frases' => $frases,
        'sugestoes' => $sugestoes,
    ];
}

function tutor_texto_contexto(array $ctx, string $cursoNome): string
{
    $linhas = ['Conteúdo do curso ' . $cursoNome . ':'];
    foreach ($ctx['palavras'] as $p) {
        $linhas[] = '- Palavra: ' . $p['termo'] . ' = ' . $p['traducao']
            . ($p['exemplo'] ? ' | ex: ' . $p['exemplo'] : '');
    }
    foreach ($ctx['frases'] as $f) {
        $linhas[] = '- Frase (' . $f['sala'] . '): ' . $f['texto'] . ' = ' . $f['sentido'];
    }
    foreach ($ctx['aulas'] as $a) {
        $teoria = trim(preg_replace('/\s+/', ' ', (string) $a['teoria']));
        $linhas[] = '- Lição ' . $a['unidade'] . ' / ' . $a['titulo'] . ' (' . $a['nivel'] . '): '
            . mb_substr($teoria, 0, 280);
    }

    return implode("\n", $linhas);
}

function tutor_resposta_local(array $ctx, string $pergunta, string $cursoNome, ?array $espera): array
{
    $baixa = mb_strtolower(trim($pergunta), 'UTF-8');

    if ($espera && !empty($espera['esperado'])) {
        $ok = resposta_correta($pergunta, (string) $espera['esperado']);
        if (!$ok) {
            similar_text(normalizar_resposta($pergunta), normalizar_resposta((string) $espera['esperado']), $pct);
            $ok = $pct >= 72;
        }
        if ($ok) {
            return [
                'texto' => 'Isso! "' . $espera['frase'] . '" está certo.'
                    . (!empty($espera['sentido']) ? ' Significa: ' . $espera['sentido'] . '.' : '')
                    . "\n\nQuer tentar outra? Diga “pratique comigo”.",
                'audio' => (string) $espera['frase'],
                'espera' => null,
            ];
        }

        return [
            'texto' => 'Quase. No ' . $cursoNome . ' a forma do conteúdo é: "' . $espera['frase'] . '".'
                . (!empty($espera['sentido']) ? ' (' . $espera['sentido'] . ')' : '')
                . "\nTente escrever de novo, ou peça outra frase.",
            'audio' => (string) $espera['frase'],
            'espera' => $espera,
        ];
    }

    if (preg_match('/\b(oi|olá|ola|hey|bom dia|boa tarde|e ai|eae)\b/u', $baixa)
        && mb_strlen($baixa) < 28) {
        $ex = $ctx['sugestoes'][0]['termo'] ?? '';

        return [
            'texto' => 'Oi! Eu sou o Lino, seu tutor. Respondo com o conteúdo da trilha de ' . $cursoNome . ".\n\n"
                . 'Pergunte “como se diz…”, “o que significa…” ou peça “pratique comigo”.'
                . ($ex ? "\nPor exemplo: como se diz " . ($ctx['sugestoes'][0]['traducao'] ?? $ex) . '?' : ''),
            'audio' => $ex,
            'espera' => null,
        ];
    }

    if (preg_match('/\b(pratique|praticar|treinar|treino|conversar comigo|roleplay)\b/u', $baixa)) {
        $frase = $ctx['frases'][0] ?? null;
        if (!$frase && $ctx['sugestoes']) {
            $p = $ctx['sugestoes'][0];
            $frase = ['texto' => $p['termo'], 'sentido' => $p['traducao'], 'sala' => 'vocabulário'];
        }
        if (!$frase) {
            return [
                'texto' => 'Ainda não achei uma frase para treinar neste idioma. Estude uma lição e volte.',
                'audio' => '',
                'espera' => null,
            ];
        }

        return [
            'texto' => 'Vamos treinar com o conteúdo de ' . $frase['sala'] . ".\n\nComo se diz: **" . $frase['sentido'] . "**?\nEscreva no idioma que você está estudando.",
            'audio' => $frase['texto'],
            'espera' => [
                'esperado' => $frase['texto'],
                'frase' => $frase['texto'],
                'sentido' => $frase['sentido'],
            ],
        ];
    }

    if ($ctx['palavras'] || $ctx['frases'] || $ctx['aulas']) {
        $partes = [];
        $audio = '';
        if ($ctx['palavras']) {
            $p = $ctx['palavras'][0];
            $audio = $p['termo'];
            $partes[] = 'No vocabulário de ' . $cursoNome . ': **' . $p['termo'] . '** = ' . $p['traducao'] . '.';
            if (!empty($p['exemplo'])) {
                $partes[] = 'Exemplo da trilha: *' . $p['exemplo'] . '*.';
                if ($audio === '') {
                    $audio = $p['exemplo'];
                }
            }
            if (isset($ctx['palavras'][1])) {
                $q = $ctx['palavras'][1];
                $partes[] = 'Também aparece: **' . $q['termo'] . '** (' . $q['traducao'] . ').';
            }
        }
        if ($ctx['frases']) {
            $f = $ctx['frases'][0];
            if ($audio === '') {
                $audio = $f['texto'];
            }
            $partes[] = 'Frase da aula de conversação (' . $f['sala'] . '): **' . $f['texto'] . '** — ' . $f['sentido'] . '.';
        }
        if ($ctx['aulas']) {
            $a = $ctx['aulas'][0];
            $teoria = trim((string) $a['teoria']);
            $linhas = array_values(array_filter(array_map('trim', preg_split('/\n+/', $teoria) ?: [])));
            $trecho = implode(' · ', array_slice($linhas, 0, 3));
            $partes[] = 'Isso entra na lição **' . $a['titulo'] . '** (' . $a['unidade'] . ', ' . $a['nivel'] . ').'
                . ($trecho !== '' ? "\n" . $trecho : '');
        }
        $partes[] = 'Toque em Ouvir para escutar no idioma de estudo. Quer praticar? Diga “pratique comigo”.';

        return [
            'texto' => implode("\n\n", $partes),
            'audio' => $audio,
            'espera' => null,
        ];
    }

    $dicas = [];
    foreach (array_slice($ctx['sugestoes'], 0, 3) as $p) {
        $dicas[] = $p['termo'] . ' (' . $p['traducao'] . ')';
    }

    return [
        'texto' => 'Não encontrei isso na trilha de ' . $cursoNome . ' ainda. Eu só respondo com o conteúdo das suas lições e do vocabulário.'
            . ($dicas ? "\n\nPosso explicar, por exemplo: " . implode(', ', $dicas) . '.' : ''),
        'audio' => $ctx['sugestoes'][0]['termo'] ?? '',
        'espera' => null,
    ];
}

function tutor_via_api(string $pergunta, string $contexto, string $cursoNome, array $historico): ?string
{
    $chave = defined('IA_API_KEY') ? trim((string) IA_API_KEY) : '';
    if ($chave === '') {
        return null;
    }
    $url = defined('IA_API_URL') ? (string) IA_API_URL : 'https://api.openai.com/v1/chat/completions';
    $modelo = defined('IA_MODELO') ? (string) IA_MODELO : 'gpt-4o-mini';
    $mensagens = [
        [
            'role' => 'system',
            'content' => 'Você é Lino, papagaio tutor do aplicativo Lingo. Responda em português, curto (até 90 palavras). '
                . 'Use SOMENTE o conteúdo do curso de ' . $cursoNome . ' abaixo. Inclua a frase no idioma de estudo. '
                . 'Se não estiver no conteúdo, diga que ainda não está nesta trilha e sugira o que há. Não invente vocabulário.'
                . "\n\n" . $contexto,
        ],
    ];
    foreach (array_slice($historico, -6) as $h) {
        $mensagens[] = [
            'role' => ($h['papel'] ?? '') === 'aluno' ? 'user' : 'assistant',
            'content' => (string) $h['mensagem'],
        ];
    }
    $mensagens[] = ['role' => 'user', 'content' => $pergunta];
    $corpo = json_encode([
        'model' => $modelo,
        'temperature' => 0.3,
        'max_tokens' => 350,
        'messages' => $mensagens,
    ], JSON_UNESCAPED_UNICODE);

    $resposta = null;
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $chave,
            ],
            CURLOPT_POSTFIELDS => $corpo,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 14,
        ]);
        $resposta = curl_exec($ch);
        curl_close($ch);
    } else {
        $ctx = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/json\r\nAuthorization: Bearer $chave\r\n",
                'content' => $corpo,
                'timeout' => 14,
            ],
        ]);
        $resposta = @file_get_contents($url, false, $ctx);
    }
    if (!is_string($resposta) || $resposta === '') {
        return null;
    }
    $json = json_decode($resposta, true);
    $texto = trim((string) ($json['choices'][0]['message']['content'] ?? ''));

    return $texto !== '' ? $texto : null;
}

function tutor_audio_de_texto(string $texto, array $ctx): string
{
    if (preg_match('/\*\*([^*]+)\*\*/u', $texto, $m) && eh_frase_idioma_estudo($m[1])) {
        return trim($m[1]);
    }
    if (preg_match('/"([^"]+)"/u', $texto, $m) && eh_frase_idioma_estudo($m[1])) {
        return trim($m[1]);
    }
    if (!empty($ctx['frases'][0]['texto'])) {
        return (string) $ctx['frases'][0]['texto'];
    }
    if (!empty($ctx['palavras'][0]['termo'])) {
        return (string) $ctx['palavras'][0]['termo'];
    }

    return '';
}

function tutor_responder(mysqli $conexao, array $curso, int $usuarioId, string $pergunta): array
{
    $cursoId = (int) $curso['id'];
    $idioma = (string) $curso['codigo'];
    $nome = (string) $curso['nome'];
    $ctx = tutor_contexto($conexao, $cursoId, $idioma, $pergunta);
    $espera = $_SESSION['tutor_espera'][$cursoId] ?? null;
    $historico = [];
    $stH = $conexao->prepare(
        'SELECT papel, mensagem FROM tutor_mensagens WHERE usuario_id = ? AND curso_id = ? ORDER BY id DESC LIMIT 8'
    );
    $stH->bind_param('ii', $usuarioId, $cursoId);
    $stH->execute();
    $historico = array_reverse($stH->get_result()->fetch_all(MYSQLI_ASSOC));

    $local = tutor_resposta_local($ctx, $pergunta, $nome, $espera);
    $textoApi = null;
    if (!$espera) {
        $textoApi = tutor_via_api($pergunta, tutor_texto_contexto($ctx, $nome), $nome, $historico);
    }
    $texto = $textoApi ?: $local['texto'];
    $audio = $textoApi ? tutor_audio_de_texto($texto, $ctx) : $local['audio'];
    $_SESSION['tutor_espera'][$cursoId] = $textoApi ? null : ($local['espera'] ?? null);

    return [
        'texto' => $texto,
        'audio' => $audio,
        'com_modelo' => $textoApi !== null,
    ];
}

function tutor_salvar(mysqli $conexao, int $usuarioId, int $cursoId, string $papel, string $mensagem, string $audio = ''): void
{
    $st = $conexao->prepare(
        'INSERT INTO tutor_mensagens (usuario_id, curso_id, papel, mensagem, audio) VALUES (?, ?, ?, ?, ?)'
    );
    $st->bind_param('iisss', $usuarioId, $cursoId, $papel, $mensagem, $audio);
    $st->execute();
}

function tutor_historico(mysqli $conexao, int $usuarioId, int $cursoId): array
{
    $st = $conexao->prepare(
        'SELECT id, papel, mensagem, audio, criado_em
         FROM tutor_mensagens
         WHERE usuario_id = ? AND curso_id = ?
         ORDER BY id DESC
         LIMIT 40'
    );
    $st->bind_param('ii', $usuarioId, $cursoId);
    $st->execute();
    $linhas = $st->get_result()->fetch_all(MYSQLI_ASSOC);

    return array_reverse($linhas);
}
