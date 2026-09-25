<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

if (admin_logado()) {
    redirecionar('index.php');
}

$erro = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        $erro = 'Sessão expirada.';
    } else {
        $usuario = limpar_texto($_POST['usuario'] ?? '', 60);
        $senha = (string) ($_POST['senha'] ?? '');
        $conexao = db();
        $stmt = $conexao->prepare('SELECT * FROM admins WHERE usuario = ? LIMIT 1');
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $admin = $stmt->get_result()->fetch_assoc();
        if (!$admin || !password_verify($senha, $admin['senha']) || (int) $admin['senha_pendente'] === 1) {
            if ($admin && (int) $admin['senha_pendente'] === 1) {
                $erro = 'Defina a senha inicial em Definir senha.';
            } else {
                $erro = 'Usuário ou senha inválidos.';
            }
        } else {
            unset($admin['senha']);
            $_SESSION['admin'] = $admin;
            registrar_log($conexao, $admin['usuario'], 'login', 'admin');
            redirecionar('index.php');
        }
    }
}

$layout = 'publico';
$tituloPagina = 'Admin — Lingo';
$flash = $erro ? ['tipo' => 'erro', 'mensagem' => $erro] : pegar_flash();
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<section class="card card-estreito">
    <p class="olho">Administração</p>
    <h1>Entrar</h1>
    <form method="post" class="formulario">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <label>Usuário
            <input type="text" name="usuario" required value="<?= e($_POST['usuario'] ?? 'admin') ?>">
        </label>
        <label>Senha
            <input type="password" name="senha" required>
        </label>
        <button class="botao botao-principal" type="submit">Entrar</button>
    </form>
    <p class="intro"><a href="definir-senha.php">Definir senha do primeiro acesso</a></p>
</section>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
