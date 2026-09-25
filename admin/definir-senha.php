<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

$conexao = db();
$erro = null;
$ok = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        $erro = 'Sessão expirada.';
    } else {
        $usuario = limpar_texto($_POST['usuario'] ?? ADMIN_USUARIO, 60);
        $senha = (string) ($_POST['senha'] ?? '');
        $confirma = (string) ($_POST['confirma'] ?? '');
        if (strlen($senha) < 6) {
            $erro = 'A senha precisa ter pelo menos 6 caracteres.';
        } elseif ($senha !== $confirma) {
            $erro = 'As senhas não coincidem.';
        } else {
            $stmt = $conexao->prepare('SELECT * FROM admins WHERE usuario = ? LIMIT 1');
            $stmt->bind_param('s', $usuario);
            $stmt->execute();
            $admin = $stmt->get_result()->fetch_assoc();
            if (!$admin) {
                $erro = 'Administrador não encontrado. Rode a instalação.';
            } elseif ((int) $admin['senha_pendente'] !== 1 && !admin_logado()) {
                $erro = 'A senha já foi definida. Entre pelo login.';
            } else {
                $hash = password_hash($senha, PASSWORD_DEFAULT);
                $up = $conexao->prepare('UPDATE admins SET senha = ?, senha_pendente = 0 WHERE id = ?');
                $up->bind_param('si', $hash, $admin['id']);
                $up->execute();
                $admin['senha_pendente'] = 0;
                unset($admin['senha']);
                $_SESSION['admin'] = $admin;
                $ok = true;
            }
        }
    }
}

$layout = 'publico';
$tituloPagina = 'Definir senha — Lingo';
$flash = $erro ? ['tipo' => 'erro', 'mensagem' => $erro] : ($ok ? ['tipo' => 'ok', 'mensagem' => 'Senha definida.'] : pegar_flash());
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<section class="card card-estreito">
    <p class="olho">Primeiro acesso</p>
    <h1>Definir senha do admin</h1>
    <?php if ($ok): ?>
        <a class="botao botao-principal" href="index.php">Abrir o painel</a>
    <?php else: ?>
        <form method="post" class="formulario">
            <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
            <label>Usuário
                <input type="text" name="usuario" value="<?= e(ADMIN_USUARIO) ?>" required>
            </label>
            <label>Nova senha
                <input type="password" name="senha" required minlength="6">
            </label>
            <label>Confirmar
                <input type="password" name="confirma" required minlength="6">
            </label>
            <button class="botao botao-principal" type="submit">Salvar senha</button>
        </form>
    <?php endif; ?>
</section>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
