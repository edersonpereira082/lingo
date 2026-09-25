<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;

if (($aluno['data_xp'] ?? '') !== date('Y-m-d')) {
    $hoje = date('Y-m-d');
    $zero = 0;
    $up = $conexao->prepare('UPDATE usuarios SET xp_hoje = ?, data_xp = ? WHERE id = ?');
    $up->bind_param('isi', $zero, $hoje, $aluno['id']);
    $up->execute();
    $aluno = recarregar_aluno($conexao) ?? $aluno;
}

$curso = null;
if (!empty($aluno['curso_atual_id'])) {
    $stmt = $conexao->prepare('SELECT * FROM cursos WHERE id = ? AND ativo = 1');
    $stmt->bind_param('i', $aluno['curso_atual_id']);
    $stmt->execute();
    $curso = $stmt->get_result()->fetch_assoc();
}

$matricula = $curso ? matricula_do_curso($conexao, (int) $aluno['id'], (int) $curso['id']) : matricula_padrao();
$proxima = null;
$unidades = [];
$prog = [];
$aulasFeitas = 0;
$totalAulas = 0;

if ($curso) {
    $unidades = $conexao->query(
        'SELECT * FROM unidades WHERE curso_id = ' . (int) $curso['id'] . ' ORDER BY ordem, id'
    )->fetch_all(MYSQLI_ASSOC);
    $st = $conexao->prepare('SELECT aula_id, concluida, percentual FROM progresso_aulas WHERE usuario_id = ?');
    $st->bind_param('i', $aluno['id']);
    $st->execute();
    foreach ($st->get_result()->fetch_all(MYSQLI_ASSOC) as $linha) {
        $prog[(int) $linha['aula_id']] = $linha;
        if ((int) $linha['concluida'] === 1) {
            $aulasFeitas++;
        }
    }
}

$aulasPorUnidade = $curso ? carregar_aulas_por_unidade($conexao, (int) $curso['id']) : [];
$idsTrilha = $curso ? ids_aulas_trilha($conexao, (int) $curso['id'], $matricula) : [];
$desvios = [0, 42, 70, 42, 0, -42, -70, -42];
$indiceNo = 0;
foreach ($unidades as $unidade) {
    $idUnidade = (int) $unidade['id'];
    $nivelUnidade = (string) ($unidade['nivel'] ?? 'A1');
    if (!unidade_na_matricula($matricula, $nivelUnidade)) {
        continue;
    }
    $naPrincipal = aula_na_trilha_principal($matricula, $nivelUnidade);
    foreach ($aulasPorUnidade[$idUnidade] ?? [] as $aula) {
        $totalAulas++;
        $aulaId = (int) $aula['id'];
        $feita = !empty($prog[$aulaId]['concluida']);
        $livre = aula_esta_livre($aulaId, $nivelUnidade, $matricula, $idsTrilha, $prog);
        if (!$proxima && $livre && !$feita && $naPrincipal) {
            $proxima = $aula;
        }
    }
}
$estadosUnidade = $curso
    ? estados_unidades_trilha($unidades, $aulasPorUnidade, $prog, $matricula)
    : [];
$mostrarFeitas = isset($_GET['feitas']);
$unidadeFoco = (int) ($_GET['unidade'] ?? 0);
$feitasOcultas = 0;
$ocultasAFrente = 0;
foreach ($estadosUnidade as $estadoU) {
    if ($estadoU === 'feita_oculta') {
        $feitasOcultas++;
    }
    if ($estadoU === 'oculta') {
        $ocultasAFrente++;
    }
}

$liga = liga_por_xp((int) $aluno['xp']);
$pctMeta = min(100, (int) round(((int) $aluno['xp_hoje'] / max(1, (int) $aluno['meta_diaria'])) * 100));
$ranking = $conexao->query(
    'SELECT id, nome, xp, avatar, foto FROM usuarios WHERE ativo = 1 ORDER BY xp DESC, nome LIMIT 5'
)->fetch_all(MYSQLI_ASSOC);

$faixas = catalogo_faixas();
$faixaFiltro = chave_faixa_pedido(limpar_texto((string) ($_GET['faixa'] ?? 'todos'), 20));
if ($faixaFiltro !== 'todos' && !isset($faixas[$faixaFiltro])) {
    $faixaFiltro = 'todos';
}
$nivelFiltro = codigo_cefr_opcional((string) ($_GET['nivel'] ?? ''));
if ($nivelFiltro === '' && ($matricula['modo_trilha'] ?? '') === 'nivel') {
    $nivelFiltro = $matricula['nivel_inicio'];
    $faixaFiltro = chave_faixa($nivelFiltro);
}
$progressoFaixa = [];
foreach ($faixas as $chave => $info) {
    $progressoFaixa[$chave] = ['aulas' => 0, 'feitas' => 0];
}
foreach ($unidades as $unidade) {
    $chave = chave_faixa((string) ($unidade['nivel'] ?? 'A1'));
    foreach ($aulasPorUnidade[(int) $unidade['id']] ?? [] as $aulaCheck) {
        $progressoFaixa[$chave]['aulas']++;
        if (!empty($prog[(int) $aulaCheck['id']]['concluida'])) {
            $progressoFaixa[$chave]['feitas']++;
        }
    }
}

$layout = 'aluno';
$tituloPagina = 'Aprender — Lingo';
$prefetchUrl = $proxima ? 'aula.php?id=' . (int) $proxima['id'] : null;
require __DIR__ . '/includes/cabecalho.php';
?>
<?php if (!$curso): ?>
    <section class="card card-estreito">
        <h1>Qual idioma você quer aprender?</h1>
        <p class="intro">Escolha um curso para abrir a trilha de lições.</p>
        <a class="botao botao-principal" href="cursos.php">Ver idiomas</a>
    </section>
<?php else: ?>
<div class="aprender-grid">
    <section>
        <nav class="niveis-curso" aria-label="Níveis do curso">
            <?php foreach ($faixas as $chave => $faixa):
                $feito = (int) $progressoFaixa[$chave]['feitas'];
                $total = max(1, (int) $progressoFaixa[$chave]['aulas']);
                $pct = (int) round(($feito / $total) * 100);
                ?>
                <a class="nivel-card <?= $faixaFiltro === $chave ? 'ativo' : '' ?>" href="painel.php?faixa=<?= e($chave) ?>">
                    <p class="olho"><?= e($faixa['titulo']) ?></p>
                    <strong><?= e($faixa['subtitulo']) ?></strong>
                    <p class="nivel-card-desc"><?= e($faixa['descricao']) ?></p>
                    <div class="barra"><span style="width:<?= $pct ?>%"></span></div>
                    <small><?= $feito ?> / <?= (int) $progressoFaixa[$chave]['aulas'] ?> lições</small>
                </a>
            <?php endforeach; ?>
        </nav>
        <?php if ($faixaFiltro !== 'todos'): ?>
            <p class="intro nivel-filtro-ajuda"><a href="painel.php">Voltar à unidade atual</a> · <?= e($faixas[$faixaFiltro]['titulo']) ?>.</p>
        <?php endif; ?>
        <div class="card card-matricula">
            <?php if ($matricula['modo_trilha'] === 'nivel'): ?>
                <p>Você está matriculado só em <strong><?= e(etiqueta_etapa($matricula['nivel_inicio'])) ?></strong>.</p>
            <?php elseif ($matricula['nivel_inicio'] === 'A1'): ?>
                <p>Uma unidade de cada vez. Conclua as atividades para abrir a próxima.</p>
            <?php else: ?>
                <p>Trilha a partir de <strong><?= e(etiqueta_etapa($matricula['nivel_inicio'])) ?></strong>. Uma unidade de cada vez.</p>
            <?php endif; ?>
            <a class="botao botao-claro botao-pequeno" href="curso.php?id=<?= (int) $curso['id'] ?>">Mudar matrícula</a>
        </div>
        <?php if ($proxima): ?>
            <div class="continuar-estudo">
                <div>
                    <p class="olho">Próxima lição</p>
                    <strong><?= e($proxima['titulo']) ?></strong>
                    <p>Retome exatamente de onde parou.</p>
                </div>
                <a class="botao botao-principal" href="aula.php?id=<?= (int) $proxima['id'] ?>">Estudar agora</a>
            </div>
        <?php endif; ?>
        <?php if ($feitasOcultas > 0 && !$mostrarFeitas): ?>
            <p class="intro"><a href="painel.php?feitas=1<?= $faixaFiltro !== 'todos' ? '&faixa=' . e($faixaFiltro) : '' ?>">Ver <?= (int) $feitasOcultas ?> unidade<?= $feitasOcultas === 1 ? '' : 's' ?> já concluída<?= $feitasOcultas === 1 ? '' : 's' ?></a></p>
        <?php elseif ($mostrarFeitas): ?>
            <p class="intro"><a href="painel.php">Esconder unidades concluídas</a></p>
        <?php endif; ?>
        <div class="trilha">
        <?php
        $faixaAnterior = '';
        $etapaAnterior = '';
        $unidadesNaTela = 0;
        foreach ($unidades as $unidade):
            $idUnidade = (int) $unidade['id'];
            $chaveUnidade = chave_faixa((string) ($unidade['nivel'] ?? 'A1'));
            $codigoUnidade = codigo_cefr((string) ($unidade['nivel'] ?? 'A1'));
            if ($faixaFiltro !== 'todos' && $chaveUnidade !== $faixaFiltro) {
                continue;
            }
            if (!unidade_na_matricula($matricula, $codigoUnidade)) {
                continue;
            }
            if ($nivelFiltro !== '' && $codigoUnidade !== $nivelFiltro) {
                continue;
            }
            $estadoU = $estadosUnidade[$idUnidade] ?? 'oculta';
            if ($unidadeFoco === $idUnidade && in_array($estadoU, ['feita', 'feita_oculta'], true)) {
                $estadoU = 'atual';
            }
            if ($estadoU === 'feita_oculta' && !$mostrarFeitas) {
                continue;
            }
            if (in_array($estadoU, ['oculta', 'fora'], true)) {
                continue;
            }
            if ($estadoU === 'revisao' && !$mostrarFeitas) {
                continue;
            }
            if ($chaveUnidade !== $faixaAnterior) {
                $faixaAnterior = $chaveUnidade;
                $etapaAnterior = '';
                $infoFaixa = $faixas[$chaveUnidade] ?? $faixas['basico'];
                ?>
                <div class="nivel-bloco nivel-<?= e($chaveUnidade) ?>">
                    <p class="olho"><?= e($infoFaixa['titulo']) ?></p>
                    <h2><?= e($infoFaixa['subtitulo']) ?></h2>
                    <p><?= e($infoFaixa['descricao']) ?></p>
                </div>
            <?php }
            if ($codigoUnidade !== $etapaAnterior && $estadoU === 'atual') {
                $etapaAnterior = $codigoUnidade;
                $infoEtapa = catalogo_etapas()[$codigoUnidade] ?? catalogo_etapas()['A1'];
                ?>
                <div class="etapa-bloco">
                    <p class="olho"><?= e($infoEtapa['codigo'] . ' · ' . $infoEtapa['nome']) ?></p>
                    <?= html_detalhe_etapa($infoEtapa, false) ?>
                </div>
            <?php }
            $aulasUnidade = $aulasPorUnidade[$idUnidade] ?? [];
            $feitasUnidade = 0;
            foreach ($aulasUnidade as $aulaCheck) {
                if (!empty($prog[(int) $aulaCheck['id']]['concluida'])) {
                    $feitasUnidade++;
                }
            }
            $unidadeCompleta = $feitasUnidade === count($aulasUnidade) && count($aulasUnidade) > 0;
            $cor = cor_unidade((int) $unidade['ordem']);
            $unidadesNaTela++;
            if ($estadoU === 'proxima'):
                ?>
                <div class="unidade-faixa u-<?= e($cor) ?> unidade-bloqueada">
                    <div>
                        <small>Próxima unidade</small>
                        <h2><?= e($unidade['titulo']) ?></h2>
                        <p>Conclua as atividades da unidade atual para abrir esta. São <?= count($aulasUnidade) ?> lições.</p>
                    </div>
                    <span class="guia"><?= svg_icone('cadeado') ?></span>
                </div>
                <span class="trilha-no bloqueada" style="--desvio: 0" title="Ainda bloqueada"><?= svg_icone('cadeado') ?></span>
                <?php continue; ?>
            <?php endif; ?>
            <?php if (in_array($estadoU, ['feita', 'feita_oculta'], true) && $unidadeFoco !== $idUnidade): ?>
                <a class="unidade-faixa u-<?= e($cor) ?> unidade-compacta" href="painel.php?unidade=<?= $idUnidade ?>">
                    <div>
                        <small><?= e(etiqueta_etapa((string) $unidade['nivel'])) ?> · concluída</small>
                        <h2><?= e($unidade['titulo']) ?></h2>
                    </div>
                    <span class="guia"><?= svg_icone('check') ?></span>
                </a>
                <?php continue; ?>
            <?php endif; ?>
            <div class="unidade-faixa u-<?= e($cor) ?>">
                <div>
                    <small><?= e(etiqueta_nivel_completo((string) $unidade['nivel'])) ?> · <?= count($aulasUnidade) ?> lições</small>
                    <h2><?= e($unidade['titulo']) ?></h2>
                </div>
                <span class="guia" title="<?= e($unidade['descricao'] ?: 'Guia da unidade: ' . $unidade['titulo']) ?>"><?= svg_icone('livro') ?></span>
            </div>
            <?php foreach ($aulasUnidade as $aula):
                $aulaIdNo = (int) $aula['id'];
                $feita = !empty($prog[$aulaIdNo]['concluida']);
                $livre = aula_esta_livre($aulaIdNo, $codigoUnidade, $matricula, $idsTrilha, $prog);
                $atual = $proxima && (int) $proxima['id'] === $aulaIdNo;
                $classe = $feita ? 'feita' : ($atual ? 'atual' : ($livre ? '' : 'bloqueada'));
                $desvio = $desvios[$indiceNo % 8];
                $indiceNo++;
                $rotulo = $aula['titulo'] . ($feita ? ' — concluída' : ($livre ? '' : ' — bloqueada'));
                $tag = $livre ? 'a' : 'span';
                $href = $livre ? ' href="aula.php?id=' . $aulaIdNo . '"' : ' aria-disabled="true"';
                ?>
                <<?= $tag ?> class="trilha-no <?= e($classe) ?>"<?= $href ?> style="--desvio: <?= (int) $desvio ?>px" title="<?= e($aula['titulo']) ?>" aria-label="<?= e($rotulo) ?>">
                    <?php if ($atual): ?>
                        <span class="trilha-balao"><?= $aulasFeitas > 0 ? 'Continuar' : 'Começar' ?></span>
                        <img class="trilha-mascote" src="assets/img/mascote.svg?v=5" alt="">
                    <?php endif; ?>
                    <?= $feita ? svg_icone('check') : ($livre ? svg_icone('estrela') : svg_icone('cadeado')) ?>
                    <?php if ($estadoU === 'atual'): ?>
                        <span class="trilha-no-nome"><?= e($aula['titulo']) ?></span>
                    <?php endif; ?>
                </<?= $tag ?>>
            <?php endforeach; ?>
            <?php
            $desvioBau = $desvios[$indiceNo % 8];
            $indiceNo++;
            ?>
            <span class="trilha-no bau <?= $unidadeCompleta ? 'feita' : 'bloqueada' ?>" style="--desvio: <?= (int) $desvioBau ?>px" title="<?= $unidadeCompleta ? 'Baú da unidade' : 'Conclua as atividades da unidade para abrir o baú' ?>">
                <?= svg_icone('bau') ?>
            </span>
        <?php endforeach; ?>
        <?php if ($unidadesNaTela === 0): ?>
            <div class="card card-estreito">
                <h2>Esta faixa ainda está fechada</h2>
                <p>Conclua a unidade em que você está para ir avançando. As próximas só aparecem depois.</p>
                <a class="botao botao-principal" href="painel.php">Ir à unidade atual</a>
            </div>
        <?php elseif ($ocultasAFrente > 0 && !$mostrarFeitas): ?>
            <p class="intro trilha-frente">Mais unidades na frente — termine esta para desbloquear a próxima.</p>
        <?php endif; ?>
        </div>
    </section>
    <aside class="painel-lado">
        <article class="card">
            <h3>Missão do dia</h3>
            <div class="missao">
                <span>Ganhe <?= (int) $aluno['meta_diaria'] ?> XP</span>
                <div class="barra"><span style="width:<?= $pctMeta ?>%"></span></div>
                <small><?= (int) $aluno['xp_hoje'] ?> / <?= (int) $aluno['meta_diaria'] ?> XP</small>
            </div>
            <a class="botao botao-claro botao-pequeno" href="missoes.php">Ver missões</a>
        </article>
        <article class="card">
            <p class="olho">Falar</p>
            <h3>Conversação e chat</h3>
            <p>Aulas da turma, tutor com IA no conteúdo e chats ou vídeos privados.</p>
            <div class="acoes">
                <a class="botao botao-principal botao-pequeno" href="conversa.php">Turma</a>
                <a class="botao botao-claro botao-pequeno" href="tutor.php">Tutor Lino</a>
            </div>
        </article>
        <article class="card">
            <h3>Liga <?= e($liga) ?></h3>
            <?php if (count($ranking) >= 3): ?>
            <div class="podio podio-mini">
                <?php
                $ordemPodio = [$ranking[1] ?? null, $ranking[0] ?? null, $ranking[2] ?? null];
                $lugares = [2, 1, 3];
                foreach ($ordemPodio as $i => $linha):
                    if (!$linha) {
                        continue;
                    }
                    ?>
                    <div class="podio-col lugar-<?= $lugares[$i] ?> <?= (int) $linha['id'] === (int) $aluno['id'] ? 'eu' : '' ?>">
                        <?= html_avatar($linha, 'podio-avatar') ?>
                        <strong><?= e(explode(' ', $linha['nome'])[0]) ?></strong>
                        <small><?= (int) $linha['xp'] ?> XP</small>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php foreach ($ranking as $i => $linha): ?>
                <?php if (count($ranking) >= 3 && $i < 3) {
                    continue;
                } ?>
                <div class="liga-item <?= (int) $linha['id'] === (int) $aluno['id'] ? 'eu' : '' ?>">
                    <span><?= $i + 1 ?>. <?= e($linha['nome']) ?></span>
                    <span><?= (int) $linha['xp'] ?> XP</span>
                </div>
            <?php endforeach; ?>
            <div class="acoes"><a class="botao botao-claro botao-pequeno" href="ranking.php">Ver liga</a></div>
        </article>
        <article class="card">
            <h3><?= e($curso['nome']) ?></h3>
            <p><?= e($curso['descricao']) ?></p>
            <?= html_pills_niveis() ?>
            <p><strong><?= $aulasFeitas ?></strong> / <?= $totalAulas ?> lições</p>
        </article>
        <?php
        $assinaturaPainel = function_exists('assinatura_atual') ? assinatura_atual($conexao, (int) $aluno['id']) : null;
        ?>
        <article class="card card-plus <?= $assinaturaPainel ? 'ativo' : '' ?>">
            <?php if ($assinaturaPainel): ?>
                <p class="olho"><?= e($assinaturaPainel['plano_nome']) ?> ativo</p>
                <h3>Válido em todos os idiomas</h3>
                <p>Troque de curso quando quiser. Seu plano vale até <?= e(date('d/m/Y', strtotime($assinaturaPainel['expira_em']))) ?>.</p>
                <a class="botao botao-claro botao-pequeno" href="planos.php">Gerenciar</a>
            <?php else: ?>
                <p class="olho">Planos</p>
                <h3>Um plano, todos os idiomas</h3>
                <p>Bronze a partir de R$ 9,99/mês. Vale em inglês, espanhol, francês, italiano e alemão.</p>
                <a class="botao botao-principal botao-pequeno" href="planos.php">Ver planos</a>
            <?php endif; ?>
        </article>
    </aside>
</div>
<?php endif; ?>
<?php require __DIR__ . '/includes/rodape.php'; ?>
