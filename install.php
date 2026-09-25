<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/semente.php';

$lock = __DIR__ . '/config/install.lock';
if (is_file($lock)) {
    http_response_code(403);
    echo 'Instalação já concluída. Apague o arquivo install.php do servidor.';
    exit;
}

if (PHP_VERSION_ID < 80000) {
    echo 'Este sistema precisa de PHP 8.0 ou superior. No cPanel, use MultiPHP / PHP Selector.';
    exit;
}

$mensagens = [];
$ok = false;

function php_define_string(string $valor): string
{
    return "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $valor) . "'";
}

function gravar_config_banco(string $host, string $porta, string $nome, string $user, string $pass): void
{
    $arquivo = __DIR__ . '/config/config.php';
    $config = file_get_contents($arquivo);
    $trocas = [
        'DB_HOST' => $host,
        'DB_PORT' => $porta,
        'DB_NAME' => $nome,
        'DB_USER' => $user,
        'DB_PASS' => $pass,
    ];
    foreach ($trocas as $chave => $valor) {
        $config = preg_replace(
            "/define\\('" . $chave . "',\\s*'.*?'\\);/",
            "define('" . $chave . "', " . php_define_string($valor) . ");",
            $config,
            1
        );
    }
    $config = preg_replace("/define\\('APP_DEBUG',\\s*.*?\\);/", "define('APP_DEBUG', false);", $config, 1);
    file_put_contents($arquivo, $config);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        flash('erro', 'Sessão expirada. Tente novamente.');
        redirecionar('install.php');
    }

    $host = limpar_texto($_POST['db_host'] ?? 'localhost', 120);
    $porta = limpar_texto($_POST['db_port'] ?? '3306', 6);
    $nome = limpar_texto($_POST['db_name'] ?? '', 80);
    $user = limpar_texto($_POST['db_user'] ?? '', 80);
    $pass = (string) ($_POST['db_pass'] ?? '');

    try {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $conexao = new mysqli($host, $user, $pass, $nome, (int) $porta);
            $conexao->set_charset('utf8mb4');
        } catch (Throwable $e) {
            $conexao = new mysqli($host, $user, $pass, '', (int) $porta);
            $conexao->set_charset('utf8mb4');
            $dbNome = $conexao->real_escape_string($nome);
            $conexao->query("CREATE DATABASE IF NOT EXISTS `$dbNome` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            $conexao->select_db($nome);
        }

        $sql = file_get_contents(__DIR__ . '/sql/hostgator.sql');
        if ($sql === false) {
            throw new RuntimeException('Arquivo sql/hostgator.sql não encontrado.');
        }
        if (!$conexao->multi_query($sql)) {
            throw new RuntimeException($conexao->error);
        }
        do {
            if ($resultado = $conexao->store_result()) {
                $resultado->free();
            }
            if ($conexao->errno) {
                throw new RuntimeException($conexao->error);
            }
        } while ($conexao->more_results() && $conexao->next_result());

        $hash = password_hash(bin2hex(random_bytes(16)), PASSWORD_DEFAULT);
        $stmt = $conexao->prepare(
            'INSERT INTO admins (usuario, senha, perfil, senha_pendente) VALUES (?, ?, ?, 1)
             ON DUPLICATE KEY UPDATE senha_pendente = 1'
        );
        $usuarioAdmin = ADMIN_USUARIO;
        $perfilAdmin = 'admin';
        $stmt->bind_param('sss', $usuarioAdmin, $hash, $perfilAdmin);
        $stmt->execute();

        $demo = $conexao->query("SELECT id FROM usuarios WHERE email = 'demo@lingo.local' LIMIT 1")->fetch_assoc();
        if (!$demo) {
            $hashDemo = password_hash('demo123', PASSWORD_DEFAULT);
            $nomeDemo = 'Aluno Demo';
            $emailDemo = 'demo@lingo.local';
            $meta = META_DIARIA_PADRAO;
            $insDemo = $conexao->prepare(
                'INSERT INTO usuarios (nome, email, senha, meta_diaria) VALUES (?, ?, ?, ?)'
            );
            $insDemo->bind_param('sssi', $nomeDemo, $emailDemo, $hashDemo, $meta);
            $insDemo->execute();
        }

        popular_conteudo($conexao);
        require_once __DIR__ . '/includes/assinatura.php';
        garantir_assinatura($conexao);
        gravar_config_banco($host, $porta, $nome, $user, $pass);
        file_put_contents($lock, date('c') . PHP_EOL);

        $ok = true;
        $mensagens[] = 'Instalação concluída. Apague agora o arquivo install.php.';
    } catch (Throwable $e) {
        $mensagens[] = 'Não foi possível instalar: ' . $e->getMessage();
    }
}

$layout = 'publico';
$tituloPagina = 'Instalação — Lingo';
$flash = $mensagens ? ['tipo' => $ok ? 'ok' : 'erro', 'mensagem' => $mensagens[0]] : pegar_flash();
require __DIR__ . '/includes/cabecalho.php';
?>
<section class="card card-estreito">
    <p class="olho">Configuração</p>
    <h1>Instalar o Lingo</h1>
    <p class="intro">Na HostGator, crie o banco e o usuário no <strong>cPanel &gt; Bancos de Dados MySQL</strong> antes de instalar. No XAMPP, o instalador cria o banco se ele ainda não existir.</p>

    <?php if ($ok): ?>
        <div class="aviso aviso-ok">
            <p><strong>Administrador:</strong> usuário <code>admin</code> — defina a senha no primeiro acesso.</p>
            <p><strong>Aluno de teste:</strong> <code>demo@lingo.local</code> / senha <code>demo123</code></p>
            <p>Apague o arquivo <strong>install.php</strong> do servidor depois de definir a senha.</p>
        </div>
        <div class="acoes">
            <a class="botao botao-principal" href="index.php">Abrir o site</a>
            <a class="botao botao-claro" href="admin/definir-senha.php">Senha do admin</a>
            <a class="botao botao-claro" href="login.php">Entrar como aluno</a>
        </div>
    <?php else: ?>
        <form method="post" class="formulario">
            <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
            <label>
                Servidor
                <input type="text" name="db_host" value="localhost" required>
            </label>
            <label>
                Porta
                <input type="text" name="db_port" value="3306" required>
            </label>
            <label>
                Nome do banco
                <input type="text" name="db_name" value="lingo" placeholder="conta_lingo" required>
            </label>
            <label>
                Usuário MySQL
                <input type="text" name="db_user" value="root" required>
            </label>
            <label>
                Senha MySQL
                <input type="password" name="db_pass" value="" autocomplete="new-password">
            </label>
            <button class="botao botao-principal" type="submit">Instalar banco e conteúdo</button>
        </form>
    <?php endif; ?>
</section>
<?php require __DIR__ . '/includes/rodape.php'; ?>
