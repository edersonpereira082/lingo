<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

if (!usuario_logado()) {
    json_resposta(['ok' => false, 'erro' => 'Faça login.'], 401);
}

$aluno = usuario_logado();
$conexao = db();
$entrada = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$acao = (string) ($_GET['acao'] ?? $entrada['acao'] ?? 'mensagens');
$privadaId = (int) ($_GET['id'] ?? $entrada['id'] ?? 0);
$euId = (int) $aluno['id'];

if ($privadaId <= 0) {
    json_resposta(['ok' => false, 'erro' => 'Sala inválida.'], 400);
}

$sala = conversa_privada_buscar($conexao, $privadaId);
if (!$sala || !conversa_privada_participa($sala, $euId)) {
    json_resposta(['ok' => false, 'erro' => 'Sala privada não encontrada.'], 404);
}
if (($sala['status'] ?? '') === 'encerrada' && $acao !== 'mensagens') {
    json_resposta(['ok' => false, 'erro' => 'Esta aula privada foi encerrada.'], 403);
}

$outroId = conversa_privada_outro($sala, $euId);
$toque = $conexao->prepare('UPDATE conversas_privadas SET atualizado_em = NOW() WHERE id = ?');
$toque->bind_param('i', $privadaId);
$toque->execute();

if ($acao === 'enviar') {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        json_resposta(['ok' => false, 'erro' => 'Método inválido'], 405);
    }
    if (!csrf_valido($entrada['csrf'] ?? null)) {
        json_resposta(['ok' => false, 'erro' => 'Sessão expirada.'], 403);
    }
    $agora = microtime(true);
    $ultimo = (float) ($_SESSION['conversa_priv_ultimo'] ?? 0);
    if ($agora - $ultimo < 1.5) {
        json_resposta(['ok' => false, 'erro' => 'Aguarde um instante para enviar de novo.'], 429);
    }
    $mensagem = conversa_limpar_mensagem((string) ($entrada['mensagem'] ?? ''));
    if ($mensagem === '') {
        json_resposta(['ok' => false, 'erro' => 'Escreva uma mensagem.'], 422);
    }
    $ins = $conexao->prepare(
        'INSERT INTO conversas_privadas_mensagens (privada_id, usuario_id, mensagem) VALUES (?, ?, ?)'
    );
    $ins->bind_param('iis', $privadaId, $euId, $mensagem);
    $ins->execute();
    $_SESSION['conversa_priv_ultimo'] = $agora;
}

if ($acao === 'sinal') {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        json_resposta(['ok' => false, 'erro' => 'Método inválido'], 405);
    }
    if (!csrf_valido($entrada['csrf'] ?? null)) {
        json_resposta(['ok' => false, 'erro' => 'Sessão expirada.'], 403);
    }
    $tipo = preg_replace('/[^a-z]/', '', strtolower((string) ($entrada['tipo'] ?? ''))) ?: '';
    if (!in_array($tipo, ['description', 'ice'], true)) {
        json_resposta(['ok' => false, 'erro' => 'Sinal inválido.'], 422);
    }
    $payload = json_encode($entrada['payload'] ?? null, JSON_UNESCAPED_UNICODE);
    if (!$payload || $payload === 'null' || strlen($payload) > 200000) {
        json_resposta(['ok' => false, 'erro' => 'Sinal vazio.'], 422);
    }
    $ins = $conexao->prepare(
        'INSERT INTO conversas_privadas_sinais (privada_id, de_id, para_id, tipo, payload) VALUES (?, ?, ?, ?, ?)'
    );
    $ins->bind_param('iiiss', $privadaId, $euId, $outroId, $tipo, $payload);
    $ins->execute();
    json_resposta(['ok' => true]);
}

if ($acao === 'evento') {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        json_resposta(['ok' => false, 'erro' => 'Método inválido'], 405);
    }
    if (!csrf_valido($entrada['csrf'] ?? null)) {
        json_resposta(['ok' => false, 'erro' => 'Sessão expirada.'], 403);
    }
    $tipo = preg_replace('/[^a-z_]/', '', strtolower((string) ($entrada['tipo'] ?? ''))) ?: 'evento';
    if (!in_array($tipo, ['video_inicio', 'video_fim', 'entrou'], true)) {
        $tipo = 'evento';
    }
    $detalhe = limpar_texto((string) ($entrada['detalhe'] ?? ''), 180);
    conversa_privada_evento($conexao, $privadaId, $euId, $tipo, $detalhe);
}

$depois = (int) ($_GET['depois'] ?? $entrada['depois'] ?? 0);
if ($depois > 0) {
    $msg = $conexao->prepare(
        'SELECT m.id, m.usuario_id, m.mensagem, m.criado_em, u.nome, u.avatar, u.foto
         FROM conversas_privadas_mensagens m
         JOIN usuarios u ON u.id = m.usuario_id
         WHERE m.privada_id = ? AND m.id > ?
         ORDER BY m.id ASC
         LIMIT 80'
    );
    $msg->bind_param('ii', $privadaId, $depois);
} else {
    $msg = $conexao->prepare(
        'SELECT m.id, m.usuario_id, m.mensagem, m.criado_em, u.nome, u.avatar, u.foto
         FROM conversas_privadas_mensagens m
         JOIN usuarios u ON u.id = m.usuario_id
         WHERE m.privada_id = ?
         ORDER BY m.id DESC
         LIMIT 80'
    );
    $msg->bind_param('i', $privadaId);
}
$msg->execute();
$linhas = $msg->get_result()->fetch_all(MYSQLI_ASSOC);
if ($depois <= 0) {
    $linhas = array_reverse($linhas);
}

$sinais = [];
$sg = $conexao->prepare(
    'SELECT id, tipo, payload FROM conversas_privadas_sinais
     WHERE privada_id = ? AND para_id = ? AND lido = 0
     ORDER BY id ASC LIMIT 40'
);
$sg->bind_param('ii', $privadaId, $euId);
$sg->execute();
foreach ($sg->get_result()->fetch_all(MYSQLI_ASSOC) as $sinal) {
    $sinais[] = [
        'id' => (int) $sinal['id'],
        'tipo' => $sinal['tipo'],
        'payload' => json_decode((string) $sinal['payload'], true),
    ];
    $lid = (int) $sinal['id'];
    $marcar = $conexao->prepare('UPDATE conversas_privadas_sinais SET lido = 1 WHERE id = ? AND para_id = ?');
    $marcar->bind_param('ii', $lid, $euId);
    $marcar->execute();
}

json_resposta([
    'ok' => true,
    'status' => $sala['status'],
    'mensagens' => array_map(static fn ($linha) => conversa_formatar_mensagem($linha, $euId), $linhas),
    'sinais' => $sinais,
    'monitorada' => true,
    'aviso' => conversa_aviso_monitoramento(),
]);
