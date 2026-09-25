<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;

$curso = null;
if (!empty($aluno['curso_atual_id'])) {
    $st = $conexao->prepare('SELECT * FROM cursos WHERE id = ? AND ativo = 1');
    $st->bind_param('i', $aluno['curso_atual_id']);
    $st->execute();
    $curso = $st->get_result()->fetch_assoc();
}
if (!$curso) {
    flash('erro', 'Escolha um idioma para conversar com o Tutor Lino.');
    redirecionar('cursos.php');
}

$sugestoes = [];
$temaAula = trim((string) ($_GET['aula'] ?? ''));
if ($temaAula !== '') {
    $sugestoes[] = 'Vamos praticar a aula: ' . $temaAula;
}
$stP = $conexao->prepare('SELECT termo, traducao FROM palavras WHERE curso_id = ? ORDER BY RAND() LIMIT 3');
$cid = (int) $curso['id'];
$stP->bind_param('i', $cid);
$stP->execute();
foreach ($stP->get_result()->fetch_all(MYSQLI_ASSOC) as $p) {
    $sugestoes[] = 'Como se diz ' . $p['traducao'] . '?';
}
$sugestoes[] = 'Pratique comigo';
$stA = $conexao->prepare(
    'SELECT u.titulo FROM unidades u WHERE u.curso_id = ? ORDER BY u.ordem LIMIT 1'
);
$stA->bind_param('i', $cid);
$stA->execute();
$uni = $stA->get_result()->fetch_assoc();
if ($uni) {
    $sugestoes[] = 'Explique a unidade ' . $uni['titulo'];
}

$layout = 'aluno';
$tituloPagina = 'Tutor Lino — Lingo';
$scriptJs = 'tutor.js';
require __DIR__ . '/includes/cabecalho.php';
$payload = [
    'csrf' => csrf_token(),
    'idioma' => idioma_fala((string) $curso['codigo']),
    'avatar_aluno' => url_avatar_usuario($aluno),
    'avatar_lino' => url_app('assets/img/mascote.svg?v=5'),
];
?>
<p class="olho">Falar</p>
<h1>Tutor Lino</h1>
<?= html_abas_falar('tutor') ?>
<p class="intro">Chat com IA treinado no conteúdo da sua trilha de <?= e($curso['nome']) ?>: vocabulário, lições e frases de conversação. O Ouvir fala só o idioma de estudo.</p>
<?php if (defined('IA_API_KEY') && trim((string) IA_API_KEY) !== ''): ?>
    <p class="campo-resposta-ajuda">Modelo externo ligado — as respostas continuam limitadas ao material do Lingo.</p>
<?php else: ?>
    <p class="campo-resposta-ajuda">O tutor responde com o material das suas aulas. Para um modelo mais fluente, dá para ligar uma chave de API em config.php, sempre usando este conteúdo como base.</p>
<?php endif; ?>

<section class="card tutor-card" id="tutor-app" data-payload="<?= e(json_encode($payload, JSON_UNESCAPED_UNICODE)) ?>">
    <div class="chat-caixa tutor-caixa" id="chat-mensagens" aria-live="polite"></div>
    <div class="tutor-sugestoes" id="tutor-sugestoes">
        <?php foreach ($sugestoes as $s): ?>
            <button type="button" class="pill tutor-chip" data-texto="<?= e($s) ?>"><?= e($s) ?></button>
        <?php endforeach; ?>
    </div>
    <form class="chat-form" id="chat-form" autocomplete="off">
        <label class="sr-only" for="chat-texto">Pergunta ao tutor</label>
        <textarea id="chat-texto" maxlength="400" rows="2" placeholder="Ex.: como se diz obrigado?"></textarea>
        <button class="botao botao-principal" type="submit">Perguntar</button>
    </form>
</section>
<?php require __DIR__ . '/includes/rodape.php'; ?>
