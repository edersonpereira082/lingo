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
$salaId = (int) ($_GET['sala'] ?? $entrada['sala'] ?? 0);

if ($salaId <= 0) {
    json_resposta(['ok' => false, 'erro' => 'Sala inválida.'], 400);
}

$st = $conexao->prepare('SELECT id FROM conversas_salas WHERE id = ? AND ativo = 1 LIMIT 1');
$st->bind_param('i', $salaId);
$st->execute();
if (!$st->get_result()->fetch_assoc()) {
    json_resposta(['ok' => false, 'erro' => 'Sala não encontrada.'], 404);
}

$euId = (int) $aluno['id'];
conversa_marcar_presenca($conexao, $euId, $salaId);

if ($acao === 'enviar') {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        json_resposta(['ok' => false, 'erro' => 'Método inválido'], 405);
    }
    if (!csrf_valido($entrada['csrf'] ?? null)) {
        json_resposta(['ok' => false, 'erro' => 'Sessão expirada.'], 403);
    }
    $agora = microtime(true);
    $ultimo = (float) ($_SESSION['conversa_ultimo'] ?? 0);
    if ($agora - $ultimo < 1.5) {
        json_resposta(['ok' => false, 'erro' => 'Aguarde um instante para enviar de novo.'], 429);
    }
    $mensagem = conversa_limpar_mensagem((string) ($entrada['mensagem'] ?? ''));
    if ($mensagem === '') {
        json_resposta(['ok' => false, 'erro' => 'Escreva uma mensagem.'], 422);
    }
    $ins = $conexao->prepare('INSERT INTO conversas_mensagens (sala_id, usuario_id, mensagem) VALUES (?, ?, ?)');
    $ins->bind_param('iis', $salaId, $euId, $mensagem);
    $ins->execute();
    $_SESSION['conversa_ultimo'] = $agora;
}

$depois = (int) ($_GET['depois'] ?? $entrada['depois'] ?? 0);
if ($depois > 0) {
    $msg = $conexao->prepare(
        'SELECT m.id, m.usuario_id, m.mensagem, m.criado_em, u.nome, u.avatar, u.foto
         FROM conversas_mensagens m
         JOIN usuarios u ON u.id = m.usuario_id
         WHERE m.sala_id = ? AND m.id > ?
         ORDER BY m.id ASC
         LIMIT 80'
    );
    $msg->bind_param('ii', $salaId, $depois);
} else {
    $msg = $conexao->prepare(
        'SELECT m.id, m.usuario_id, m.mensagem, m.criado_em, u.nome, u.avatar, u.foto
         FROM conversas_mensagens m
         JOIN usuarios u ON u.id = m.usuario_id
         WHERE m.sala_id = ?
         ORDER BY m.id DESC
         LIMIT 80'
    );
    $msg->bind_param('i', $salaId);
}
$msg->execute();
$linhas = $msg->get_result()->fetch_all(MYSQLI_ASSOC);
if ($depois <= 0) {
    $linhas = array_reverse($linhas);
}

$mensagens = array_map(static fn ($linha) => conversa_formatar_mensagem($linha, $euId), $linhas);
$online = conversa_online($conexao, $salaId);

json_resposta([
    'ok' => true,
    'mensagens' => $mensagens,
    'online' => array_map(static function ($p) {
        return [
            'id' => (int) $p['id'],
            'nome' => explode(' ', $p['nome'])[0],
        ];
    }, $online),
]);
