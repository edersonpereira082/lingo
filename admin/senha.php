<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

$admin = exigir_admin();
$conexao = db();
$erro = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && csrf_valido($_POST['csrf'] ?? null)) {
    $atual = (string) ($_POST['atual'] ?? '');
    $nova = (string) ($_POST['nova'] ?? '');
    $confirma = (string) ($_POST['confirma'] ?? '');
    $st = $conexao->prepare('SELECT senha FROM admins WHERE id = ?');
    $st->bind_param('i', $admin['id']);
    $st->execute();
    $hash = $st->get_result()->fetch_assoc()['senha'] ?? '';
    if (!password_verify($atual, $hash)) {
        $erro = 'Senha atual incorreta.';
    } elseif (strlen($nova) < 6) {
        $erro = 'A nova senha precisa ter pelo menos 6 caracteres.';
    } elseif ($nova !== $confirma) {
        $erro = 'As senhas não coincidem.';
    } else {
        $novo = password_hash($nova, PASSWORD_DEFAULT);
        $up = $conexao->prepare('UPDATE admins SET senha = ?, senha_pendente = 0 WHERE id = ?');
        $up->bind_param('si', $novo, $admin['id']);
        $up->execute();
        flash('ok', 'Senha alterada.');
        redirecionar('senha.php');
    }
}

$layout = 'admin';
$tituloPagina = 'Senha — Admin';
$flash = $erro ? ['tipo' => 'erro', 'mensagem' => $erro] : pegar_flash();
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<h1>Trocar senha</h1>
<section class="card card-estreito" style="margin:0">
    <form method="post" class="formulario">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <label>Senha atual <input type="password" name="atual" required></label>
        <label>Nova senha <input type="password" name="nova" required minlength="6"></label>
        <label>Confirmar <input type="password" name="confirma" required minlength="6"></label>
        <button class="botao botao-principal" type="submit">Salvar</button>
    </form>
</section>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
