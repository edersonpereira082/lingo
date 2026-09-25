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
    flash('erro', 'Escolha um idioma para entrar nas aulas de conversação.');
    redirecionar('cursos.php');
}

$idioma = (string) $curso['codigo'];
$aba = (string) ($_GET['aba'] ?? 'turma');
if ($aba !== 'privado') {
    $aba = 'turma';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && csrf_valido($_POST['csrf'] ?? null) && ($_POST['acao'] ?? '') === 'privado') {
    $modo = (($_POST['modo'] ?? 'chat') === 'video') ? 'video' : 'chat';
    $salaPriv = conversa_privada_abrir($conexao, (int) $aluno['id'], (int) ($_POST['aluno'] ?? 0), $idioma);
    if (!$salaPriv) {
        flash('erro', 'Não foi possível abrir o chat privado.');
        redirecionar('conversa.php?aba=privado');
    }
    redirecionar('conversa-privada.php?id=' . (int) $salaPriv['id'] . '&modo=' . $modo);
}

$salas = [];
$stSalas = $conexao->prepare(
    'SELECT id, codigo, nome, idioma, descricao, topico, frases
     FROM conversas_salas
     WHERE idioma = ? AND ativo = 1
     ORDER BY ordem, id'
);
$stSalas->bind_param('s', $idioma);
$stSalas->execute();
foreach ($stSalas->get_result()->fetch_all(MYSQLI_ASSOC) as $linha) {
    $linha['frases'] = json_decode((string) $linha['frases'], true) ?: [];
    $salas[] = $linha;
}

$salaId = (int) ($_GET['sala'] ?? 0);
$sala = null;
foreach ($salas as $item) {
    if ((int) $item['id'] === $salaId) {
        $sala = $item;
        break;
    }
}
if (!$sala && $salas) {
    $sala = $salas[0];
    $salaId = (int) $sala['id'];
}

$online = [];
if ($sala) {
    conversa_marcar_presenca($conexao, (int) $aluno['id'], $salaId);
    $online = conversa_online($conexao, $salaId);
}

$layout = 'aluno';
$tituloPagina = 'Conversação — Lingo';
$scriptJs = $aba === 'privado' ? null : 'conversa.js';
require __DIR__ . '/includes/cabecalho.php';

$payload = [
    'csrf' => csrf_token(),
    'salaId' => $salaId,
    'idioma' => idioma_fala($idioma),
    'euId' => (int) $aluno['id'],
];
?>
<p class="olho">Falar</p>
<h1>Aulas de conversação</h1>
<?= html_abas_falar($aba) ?>
<?= html_aviso_monitoramento() ?>
<p class="intro">Pratique frases do <?= e($curso['nome']) ?> e converse com outros alunos. O botão de ouvir fala só o idioma que você está estudando.</p>

<?php if ($aba === 'privado'): ?>
    <?php
    $privadas = conversa_privadas_do_aluno($conexao, (int) $aluno['id'], $idioma);
    $colegas = conversa_colegas($conexao, (int) $aluno['id'], (int) $curso['id']);
    ?>
    <div class="conversa-grade">
        <aside class="conversa-salas card">
            <h2>Seus privados</h2>
            <?php if (!$privadas): ?>
                <p class="intro">Nenhum chat privado ainda.</p>
            <?php else: ?>
                <nav class="lista-salas">
                    <?php foreach ($privadas as $item): ?>
                        <a class="sala-link" href="conversa-privada.php?id=<?= (int) $item['id'] ?>">
                            <strong><?= e(explode(' ', $item['outro_nome'])[0]) ?></strong>
                            <small>Chat e vídeo privados</small>
                        </a>
                    <?php endforeach; ?>
                </nav>
            <?php endif; ?>
        </aside>
        <section class="card">
            <h2>Alunos de <?= e($curso['nome']) ?></h2>
            <p class="intro">Abra um chat ou uma aula em vídeo só com outra pessoa cadastrada. A aula pode ser monitorada.</p>
            <?php if (!$colegas): ?>
                <p>Ainda não há outros alunos neste idioma.</p>
            <?php else: ?>
                <ul class="lista-colegas">
                    <?php foreach ($colegas as $colega): ?>
                        <li>
                            <?= html_avatar($colega) ?>
                            <div>
                                <strong><?= e($colega['nome']) ?></strong>
                                <small><?= (int) $colega['xp'] ?> XP</small>
                            </div>
                            <form method="post" class="acoes-colega">
                                <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                                <input type="hidden" name="acao" value="privado">
                                <input type="hidden" name="aluno" value="<?= (int) $colega['id'] ?>">
                                <button class="botao botao-claro botao-pequeno" name="modo" value="chat" type="submit">Chat</button>
                                <button class="botao botao-principal botao-pequeno" name="modo" value="video" type="submit">Vídeo</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </div>
<?php elseif (!$salas): ?>
    <div class="card"><p>Ainda não há salas neste idioma.</p></div>
<?php else: ?>
<div class="conversa-grade">
    <aside class="conversa-salas card">
        <h2>Salas de <?= e($curso['nome']) ?></h2>
        <nav class="lista-salas">
            <?php foreach ($salas as $item): ?>
                <a class="sala-link <?= (int) $item['id'] === $salaId ? 'ativo' : '' ?>" href="conversa.php?sala=<?= (int) $item['id'] ?>">
                    <strong><?= e($item['nome']) ?></strong>
                    <small><?= e($item['descricao']) ?></small>
                </a>
            <?php endforeach; ?>
        </nav>
    </aside>

    <?php if ($sala): ?>
    <section class="conversa-aula card" id="conversa-app" data-payload="<?= e(json_encode($payload, JSON_UNESCAPED_UNICODE)) ?>">
        <p class="olho"><?= html_bandeira($idioma) ?> <?= e($sala['nome']) ?></p>
        <h2><?= e($sala['topico']) ?></h2>
        <p class="intro">Ouça o modelo, repita em voz alta e use as frases no chat com a turma.</p>
        <ul class="frases-modelo">
            <?php foreach ($sala['frases'] as $frase): ?>
                <?php $fala = (string) ($frase['texto'] ?? ''); ?>
                <?php if ($fala === '') { continue; } ?>
                <li>
                    <button type="button" class="btn-falante btn-ouvir-frase" aria-label="Ouvir" data-fala="<?= e($fala) ?>"><?= svg_icone('ouvir') ?></button>
                    <div>
                        <strong><?= e($fala) ?></strong>
                        <?php if (!empty($frase['sentido'])): ?>
                            <small><?= e($frase['sentido']) ?></small>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="botao botao-claro botao-pequeno btn-usar-frase" data-frase="<?= e($fala) ?>">Usar</button>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="chat-cabeca">
            <h3>Chat da sala</h3>
            <p class="chat-online">
                <?php if ($online): ?>
                    <?= count($online) ?> aluno<?= count($online) === 1 ? '' : 's' ?> agora:
                    <?= e(implode(', ', array_map(static fn ($p) => explode(' ', $p['nome'])[0], $online))) ?>
                <?php else: ?>
                    Você está sozinho nesta sala — deixe uma mensagem para os próximos.
                <?php endif; ?>
            </p>
        </div>
        <div class="chat-caixa" id="chat-mensagens" aria-live="polite"></div>
        <form class="chat-form" id="chat-form" autocomplete="off">
            <label class="sr-only" for="chat-texto">Mensagem</label>
            <textarea id="chat-texto" maxlength="400" rows="2" placeholder="Escreva no <?= e($curso['nome']) ?>…"></textarea>
            <button class="botao botao-principal" type="submit">Enviar</button>
        </form>
        <p class="campo-resposta-ajuda">Só alunos cadastrados entram neste chat. Seja respeitoso — é um espaço de prática.</p>
    </section>
    <?php endif; ?>
</div>
<?php endif; ?>
<?php require __DIR__ . '/includes/rodape.php'; ?>
