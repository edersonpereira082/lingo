<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/oauth.php';

if (usuario_logado()) {
    redirecionar('painel.php');
}

$erro = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        $erro = 'Sessão expirada. Tente novamente.';
    } else {
        $email = mb_strtolower(limpar_texto($_POST['email'] ?? '', 150));
        $senha = (string) ($_POST['senha'] ?? '');
        $conexao = db();
        $stmt = $conexao->prepare('SELECT * FROM usuarios WHERE email = ? AND ativo = 1 LIMIT 1');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $aluno = $stmt->get_result()->fetch_assoc();
        $hash = is_array($aluno) ? (string) ($aluno['senha'] ?? '') : '';
        if (!$aluno || !conta_tem_senha($hash) || !password_verify($senha, $hash)) {
            if ($aluno && !conta_tem_senha($hash) && (!empty($aluno['google_id']) || !empty($aluno['facebook_id']))) {
                $erro = 'Esta conta entra com Google ou Facebook. Use o botão abaixo ou defina uma senha no perfil.';
            } else {
                $erro = 'E-mail ou senha inválidos.';
            }
        } else {
            iniciar_sessao_aluno($aluno);
            registrar_log($conexao, $aluno['email'], 'login', 'aluno');
            redirecionar($aluno['curso_atual_id'] ? 'painel.php' : 'cursos.php');
        }
    }
}

$layout = 'publico';
$tituloPagina = 'Entrar — Lingo';
$flash = $erro ? ['tipo' => 'erro', 'mensagem' => $erro] : pegar_flash();
require __DIR__ . '/includes/cabecalho.php';
?>
<div class="auth-grid">
    <aside class="auth-visual">
        <img src="assets/img/mascote.svg?v=5" alt="Lino">
        <h2>De volta à trilha</h2>
        <p>Continue de onde parou, com o papagaio Lino.</p>
    </aside>
    <section class="card card-estreito card-estatico">
        <p class="olho">Bem-vindo de volta</p>
        <h1>Entrar</h1>
        <?php html_botoes_oauth('entrar'); ?>
        <form method="post" class="formulario">
            <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
            <label>E-mail
                <input type="email" name="email" required autocomplete="email" autofocus value="<?= e($_POST['email'] ?? '') ?>">
            </label>
            <label>Senha
                <input type="password" name="senha" required autocomplete="current-password">
            </label>
            <button class="botao botao-principal" type="submit" data-espera="Entrando…">Entrar</button>
        </form>
        <p class="intro">Novo por aqui? <a href="cadastro.php">Criar conta</a></p>
    </section>
</div>
<?php require __DIR__ . '/includes/rodape.php'; ?>
