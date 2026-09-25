<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;
$privadaId = (int) ($_GET['id'] ?? 0);
$modo = (($_GET['modo'] ?? 'chat') === 'video') ? 'video' : 'chat';

$sala = $privadaId ? conversa_privada_buscar($conexao, $privadaId) : null;
if (!$sala || !conversa_privada_participa($sala, (int) $aluno['id'])) {
    flash('erro', 'Sala privada não encontrada.');
    redirecionar('conversa.php?aba=privado');
}
if (($sala['status'] ?? '') === 'encerrada') {
    flash('erro', 'Esta aula privada foi encerrada.');
    redirecionar('conversa.php?aba=privado');
}

$euId = (int) $aluno['id'];
$outroId = conversa_privada_outro($sala, $euId);
$outroNome = $outroId === (int) $sala['aluno_a'] ? $sala['nome_a'] : $sala['nome_b'];
conversa_privada_evento($conexao, (int) $sala['id'], $euId, 'entrou', 'Entrou na aula privada');

$layout = 'aluno';
$tituloPagina = 'Aula privada — Lingo';
$scriptJs = 'conversa-privada.js';
require __DIR__ . '/includes/cabecalho.php';

$payload = [
    'csrf' => csrf_token(),
    'id' => (int) $sala['id'],
    'euId' => $euId,
    'outroId' => $outroId,
    'modo' => $modo,
    'idioma' => idioma_fala((string) $sala['idioma']),
];
?>
<p class="olho">Privado</p>
<h1>Aula com <?= e(explode(' ', $outroNome)[0]) ?></h1>
<?= html_abas_falar('privado') ?>
<?= html_aviso_monitoramento() ?>
<p class="intro">Chat e vídeo são só entre vocês dois. A equipe Lingo pode revisar o histórico do chat e os registros da aula.</p>

<div class="privada-grade" id="privada-app" data-payload="<?= e(json_encode($payload, JSON_UNESCAPED_UNICODE)) ?>">
    <section class="card video-card">
        <div class="chat-cabeca">
            <h2>Vídeo privado</h2>
            <p class="chat-online" id="video-status">Câmera desligada. Toque em entrar para começar a aula ao vivo.</p>
        </div>
        <div class="video-grade">
            <div class="video-caixa">
                <video id="video-local" autoplay muted playsinline></video>
                <span class="video-tag">Você</span>
            </div>
            <div class="video-caixa">
                <video id="video-remoto" autoplay playsinline></video>
                <span class="video-tag"><?= e(explode(' ', $outroNome)[0]) ?></span>
            </div>
        </div>
        <div class="acoes video-acoes">
            <button class="botao botao-principal" type="button" id="btn-video">Entrar no vídeo</button>
            <button class="botao botao-claro" type="button" id="btn-mic" hidden>Microfone</button>
            <button class="botao botao-claro" type="button" id="btn-cam" hidden>Câmera</button>
            <button class="botao botao-claro" type="button" id="btn-sair-video" hidden>Encerrar vídeo</button>
        </div>
        <p class="campo-resposta-ajuda">O vídeo usa a câmera do seu aparelho e só começa se você autorizar. Não gravamos a imagem automaticamente; o chat e o horário da aula ficam registrados para monitoramento.</p>
    </section>

    <section class="card">
        <div class="chat-cabeca">
            <h2>Chat privado</h2>
            <p class="chat-online">Só vocês dois veem estas mensagens no app. Elas podem ser monitoradas pela equipe.</p>
        </div>
        <div class="chat-caixa" id="chat-mensagens" aria-live="polite"></div>
        <form class="chat-form" id="chat-form" autocomplete="off">
            <label class="sr-only" for="chat-texto">Mensagem privada</label>
            <textarea id="chat-texto" maxlength="400" rows="2" placeholder="Escreva em privado…"></textarea>
            <button class="botao botao-principal" type="submit">Enviar</button>
        </form>
        <p class="campo-resposta-ajuda"><a href="conversa.php?aba=privado">Voltar aos privados</a></p>
    </section>
</div>
<?php require __DIR__ . '/includes/rodape.php'; ?>
