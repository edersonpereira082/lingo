<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once __DIR__ . '/assinatura.php';
require_once __DIR__ . '/conversa.php';
require_once __DIR__ . '/tutor.php';

function tentar_db(): ?mysqli
{
    static $conexao = null;
    static $tentou = false;

    if ($tentou) {
        return $conexao;
    }

    $tentou = true;
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $conexao = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, (int) DB_PORT);
        $conexao->set_charset(DB_CHARSET);
        garantir_assinatura($conexao);
        garantir_conversa($conexao);
        garantir_tutor($conexao);
        garantir_perfil_avatar($conexao);
        garantir_matricula_nivel($conexao);
    } catch (Throwable $e) {
        $conexao = null;
        return null;
    }

    return $conexao;
}

function db(): mysqli
{
    $conexao = tentar_db();
    if (!$conexao) {
        http_response_code(500);
        echo 'Banco de dados indisponível. Confira os dados em config/config.php.';
        exit;
    }

    return $conexao;
}

function executar_sql_arquivo(mysqli $conexao, string $arquivo): void
{
    $sql = file_get_contents($arquivo);
    if ($sql === false) {
        throw new RuntimeException('Arquivo SQL não encontrado: ' . $arquivo);
    }

    $conexao->multi_query($sql);
    while ($conexao->more_results()) {
        $conexao->next_result();
    }
}
