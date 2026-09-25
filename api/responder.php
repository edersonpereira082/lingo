<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_resposta(['ok' => false, 'erro' => 'Método inválido'], 405);
}
if (!usuario_logado()) {
    json_resposta(['ok' => false, 'erro' => 'Faça login.'], 401);
}
$entrada = json_decode(file_get_contents('php://input'), true) ?: $_POST;
if (!csrf_valido($entrada['csrf'] ?? null)) {
    json_resposta(['ok' => false, 'erro' => 'Sessão expirada.'], 403);
}

$exercicioId = (int) ($entrada['exercicio_id'] ?? 0);
$resposta = $entrada['resposta'] ?? '';
$conexao = db();
$stmt = $conexao->prepare('SELECT * FROM exercicios WHERE id = ? LIMIT 1');
$stmt->bind_param('i', $exercicioId);
$stmt->execute();
$ex = $stmt->get_result()->fetch_assoc();
if (!$ex) {
    json_resposta(['ok' => false, 'erro' => 'Exercício não encontrado.'], 404);
}

$correta = false;
$gabaritoVisivel = $ex['resposta_correta'];

switch ($ex['tipo']) {
    case 'emparelhar':
        $pares = json_decode((string) $ex['resposta_correta'], true) ?: json_decode((string) $ex['alternativas'], true) ?: [];
        $enviado = is_array($resposta) ? $resposta : (json_decode((string) $resposta, true) ?: []);
        $mapa = [];
        foreach ($pares as $par) {
            if (isset($par[0], $par[1])) {
                $mapa[normalizar_resposta((string) $par[0])] = normalizar_resposta((string) $par[1]);
            }
        }
        $correta = $mapa !== [] && count($enviado) === count($mapa);
        if ($correta) {
            foreach ($enviado as $esq => $dir) {
                $chave = normalizar_resposta((string) $esq);
                if (!isset($mapa[$chave]) || $mapa[$chave] !== normalizar_resposta((string) $dir)) {
                    $correta = false;
                    break;
                }
            }
        }
        $gabaritoVisivel = implode(', ', array_map(static fn ($p) => $p[0] . ' → ' . $p[1], $pares));
        break;
    case 'verdadeiro_falso':
        $valor = normalizar_resposta(is_string($resposta) ? $resposta : '');
        if (in_array($valor, ['verdadeiro', 'true', '1', 'v'], true)) {
            $valor = 'verdadeiro';
        }
        if (in_array($valor, ['falso', 'false', '0', 'f'], true)) {
            $valor = 'falso';
        }
        $correta = $valor === normalizar_resposta((string) $ex['resposta_correta']);
        $gabaritoVisivel = $ex['resposta_correta'] === 'verdadeiro' ? 'Verdadeiro' : 'Falso';
        break;
    case 'ordem':
        $texto = is_array($resposta) ? implode(' ', $resposta) : (string) $resposta;
        $correta = resposta_correta($texto, $ex['resposta_correta']);
        break;
    default:
        $texto = is_array($resposta) ? implode(' ', $resposta) : (string) $resposta;
        $correta = resposta_correta($texto, $ex['resposta_correta']);
}

json_resposta([
    'ok' => true,
    'correta' => $correta,
    'gabarito' => $gabaritoVisivel,
    'dica' => $ex['dica'],
]);
