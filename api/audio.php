<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';

if (!usuario_logado()) {
    http_response_code(401);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Faça login.';
    exit;
}

$idioma = strtolower(str_replace('_', '-', limpar_texto($_GET['lang'] ?? 'en', 12)));
$texto = trim((string) ($_GET['texto'] ?? ''));
$texto = preg_replace('/\s+/u', ' ', $texto) ?? $texto;
if (function_exists('mb_substr')) {
    $texto = mb_substr($texto, 0, 180, 'UTF-8');
} else {
    $texto = substr($texto, 0, 180);
}

$codigo = codigo_tts($idioma);
if ($texto === '') {
    http_response_code(400);
    exit;
}

$pasta = dirname(__DIR__) . '/storage/audio';
if (!is_dir($pasta) && !mkdir($pasta, 0775, true) && !is_dir($pasta)) {
    http_response_code(500);
    exit;
}

$arquivo = $pasta . '/' . $codigo . '_' . sha1($codigo . '|' . $texto) . '.mp3';
if (!is_file($arquivo) || filesize($arquivo) < 200) {
    $url = 'https://translate.googleapis.com/translate_tts?ie=UTF-8&client=gtx&tl='
        . rawurlencode($codigo) . '&q=' . rawurlencode($texto);
    $mp3 = baixar_audio($url);
    if ($mp3 === null || strlen($mp3) < 200) {
        $url = 'https://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&tl='
            . rawurlencode($codigo) . '&q=' . rawurlencode($texto);
        $mp3 = baixar_audio($url);
    }
    if ($mp3 === null || strlen($mp3) < 200) {
        http_response_code(502);
        header('Content-Type: text/plain; charset=utf-8');
        echo 'Áudio indisponível.';
        exit;
    }
    file_put_contents($arquivo, $mp3);
}

header('Content-Type: audio/mpeg');
header('Cache-Control: private, max-age=86400');
header('Content-Length: ' . filesize($arquivo));
readfile($arquivo);
exit;

function baixar_audio(string $url): ?string
{
    if (function_exists('curl_init')) {
        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CONNECTTIMEOUT => 8,
            CURLOPT_TIMEOUT => 12,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
        ]);
        $dados = curl_exec($curl);
        $codigo = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        if ($codigo === 200 && is_string($dados) && $dados !== '') {
            return $dados;
        }
    }

    $contexto = stream_context_create([
        'http' => [
            'method' => 'GET',
            'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n",
            'timeout' => 12,
        ],
        'https' => [
            'method' => 'GET',
            'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n",
            'timeout' => 12,
        ],
    ]);
    $dados = @file_get_contents($url, false, $contexto);
    return is_string($dados) && $dados !== '' ? $dados : null;
}
