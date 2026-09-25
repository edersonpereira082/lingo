<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

if (!usuario_logado()) {
    json_resposta(['ok' => false, 'erro' => 'Faça login.'], 401);
}

$aluno = usuario_logado();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;
$entrada = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$acao = (string) ($_GET['acao'] ?? $entrada['acao'] ?? 'historico');
$euId = (int) $aluno['id'];
$cursoId = (int) ($aluno['curso_atual_id'] ?? 0);

if ($cursoId <= 0) {
    json_resposta(['ok' => false, 'erro' => 'Escolha um idioma primeiro.'], 400);
}

$curso = $conexao->query('SELECT * FROM cursos WHERE id = ' . $cursoId . ' AND ativo = 1')->fetch_assoc();
if (!$curso) {
    json_resposta(['ok' => false, 'erro' => 'Curso não encontrado.'], 404);
}

if ($acao === 'enviar') {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        json_resposta(['ok' => false, 'erro' => 'Método inválido'], 405);
    }
    if (!csrf_valido($entrada['csrf'] ?? null)) {
        json_resposta(['ok' => false, 'erro' => 'Sessão expirada.'], 403);
    }
    $agora = microtime(true);
    $ultimo = (float) ($_SESSION['tutor_ultimo'] ?? 0);
    if ($agora - $ultimo < 1.2) {
        json_resposta(['ok' => false, 'erro' => 'Aguarde um instante.'], 429);
    }
    $mensagem = conversa_limpar_mensagem((string) ($entrada['mensagem'] ?? ''));
    if ($mensagem === '') {
        json_resposta(['ok' => false, 'erro' => 'Escreva uma pergunta.'], 422);
    }
    tutor_salvar($conexao, $euId, $cursoId, 'aluno', $mensagem, '');
    $resposta = tutor_responder($conexao, $curso, $euId, $mensagem);
    tutor_salvar($conexao, $euId, $cursoId, 'lino', $resposta['texto'], $resposta['audio']);
    $_SESSION['tutor_ultimo'] = $agora;
}

$historico = tutor_historico($conexao, $euId, $cursoId);
$saida = [];
foreach ($historico as $linha) {
    $saida[] = [
        'id' => (int) $linha['id'],
        'papel' => $linha['papel'],
        'mensagem' => $linha['mensagem'],
        'audio' => $linha['audio'],
        'quando' => date('H:i', strtotime((string) $linha['criado_em'])),
    ];
}

json_resposta([
    'ok' => true,
    'mensagens' => $saida,
    'comModelo' => defined('IA_API_KEY') && trim((string) IA_API_KEY) !== '',
]);
