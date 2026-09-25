<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_resposta(['ok' => false, 'erro' => 'Método inválido'], 405);
}
$aluno = usuario_logado();
if (!$aluno) {
    json_resposta(['ok' => false, 'erro' => 'Faça login.'], 401);
}
$entrada = json_decode(file_get_contents('php://input'), true) ?: $_POST;
if (!csrf_valido($entrada['csrf'] ?? null)) {
    json_resposta(['ok' => false, 'erro' => 'Sessão expirada.'], 403);
}

$aulaId = (int) ($entrada['aula_id'] ?? 0);
$acertos = max(0, (int) ($entrada['acertos'] ?? 0));
$erros = max(0, (int) ($entrada['erros'] ?? 0));
$conexao = db();

$aula = $conexao->query(
    'SELECT a.*, u.curso_id FROM aulas a JOIN unidades u ON u.id = a.unidade_id WHERE a.id = ' . $aulaId
)->fetch_assoc();
if (!$aula) {
    json_resposta(['ok' => false, 'erro' => 'Aula não encontrada.'], 404);
}

$total = $conexao->query('SELECT COUNT(*) AS n FROM exercicios WHERE aula_id = ' . $aulaId)->fetch_assoc()['n'] ?? 0;
$total = (int) $total;
if ($total === 0) {
    json_resposta(['ok' => false, 'erro' => 'Aula sem exercícios.'], 400);
}
$acertos = min($acertos, $total);
$percentual = (int) round($acertos / $total * 100);
$concluiu = $percentual >= 70;

$st = $conexao->prepare('SELECT * FROM progresso_aulas WHERE usuario_id = ? AND aula_id = ? LIMIT 1');
$st->bind_param('ii', $aluno['id'], $aulaId);
$st->execute();
$prog = $st->get_result()->fetch_assoc();

$xp = 0;
$percent = xp_percentual_aluno($conexao, (int) $aluno['id']);
if ($concluiu && (!$prog || !(int) $prog['concluida'])) {
    $xp = aplicar_xp_plano((int) $aula['xp_recompensa'] + ($acertos * XP_POR_ACERTO), $percent);
    somar_xp($conexao, $aluno, $xp, (int) $aula['curso_id']);
} elseif ($concluiu) {
    $xp = aplicar_xp_plano(5, $percent);
    somar_xp($conexao, $aluno, $xp, (int) $aula['curso_id']);
} else {
    atualizar_ofensiva($conexao, $aluno);
}

if ($prog) {
    $tentativas = (int) $prog['tentativas'] + 1;
    $xpGanho = (int) $prog['xp_ganho'] + $xp;
    $feita = $concluiu || (int) $prog['concluida'] ? 1 : 0;
    $up = $conexao->prepare(
        'UPDATE progresso_aulas
         SET percentual = GREATEST(percentual, ?), acertos = ?, erros = ?, xp_ganho = ?, tentativas = ?,
             concluida = ?, concluida_em = IF(? = 1 AND concluida_em IS NULL, NOW(), concluida_em)
         WHERE id = ?'
    );
    $up->bind_param('iiiiiiii', $percentual, $acertos, $erros, $xpGanho, $tentativas, $feita, $feita, $prog['id']);
    $up->execute();
} else {
    $feita = $concluiu ? 1 : 0;
    $ins = $conexao->prepare(
        'INSERT INTO progresso_aulas (usuario_id, aula_id, percentual, acertos, erros, xp_ganho, tentativas, concluida, concluida_em)
         VALUES (?, ?, ?, ?, ?, ?, 1, ?, IF(? = 1, NOW(), NULL))'
    );
    $ins->bind_param('iiiiiiii', $aluno['id'], $aulaId, $percentual, $acertos, $erros, $xp, $feita, $feita);
    $ins->execute();
}

$aluno = recarregar_aluno($conexao) ?? $aluno;
json_resposta([
    'ok' => true,
    'concluiu' => $concluiu,
    'percentual' => $percentual,
    'xp' => $xp,
    'xp_total' => (int) $aluno['xp'],
    'ofensiva' => (int) $aluno['ofensiva'],
    'curso_id' => (int) $aula['curso_id'],
]);
