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
        $nome = mb_strtoupper(limpar_texto($_POST['nome'] ?? '', 120), 'UTF-8');
        $email = mb_strtolower(limpar_texto($_POST['email'] ?? '', 150));
        $senha = (string) ($_POST['senha'] ?? '');
        $confirma = (string) ($_POST['confirma'] ?? '');

        if (mb_strlen($nome) < 2) {
            $erro = 'Informe o seu nome.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro = 'E-mail inválido.';
        } elseif (strlen($senha) < 6) {
            $erro = 'A senha precisa ter pelo menos 6 caracteres.';
        } elseif ($senha !== $confirma) {
            $erro = 'As senhas não coincidem.';
        } else {
            $conexao = db();
            $existe = $conexao->prepare('SELECT id FROM usuarios WHERE email = ? LIMIT 1');
            $existe->bind_param('s', $email);
            $existe->execute();
            if ($existe->get_result()->fetch_assoc()) {
                $erro = 'Este e-mail já está cadastrado.';
            } else {
                $hash = password_hash($senha, PASSWORD_DEFAULT);
                $meta = META_DIARIA_PADRAO;
                $ins = $conexao->prepare('INSERT INTO usuarios (nome, email, senha, meta_diaria) VALUES (?, ?, ?, ?)');
                $ins->bind_param('sssi', $nome, $email, $hash, $meta);
                $ins->execute();
                $id = (int) $ins->insert_id;
                $st = $conexao->prepare('SELECT * FROM usuarios WHERE id = ? LIMIT 1');
                $st->bind_param('i', $id);
                $st->execute();
                $aluno = $st->get_result()->fetch_assoc();
                iniciar_sessao_aluno($aluno ?: [
                    'id' => $id,
                    'nome' => $nome,
                    'email' => $email,
                    'xp' => 0,
                    'ofensiva' => 0,
                    'recorde_ofensiva' => 0,
                    'ultimo_estudo' => null,
                    'meta_diaria' => $meta,
                    'xp_hoje' => 0,
                    'data_xp' => null,
                    'curso_atual_id' => null,
                    'ativo' => 1,
                    'avatar' => 'lino-classico',
                    'foto_modo' => 'avatar',
                ]);
                registrar_log($conexao, $email, 'cadastro', $nome);
                flash('ok', 'Conta criada. Escolha o idioma para começar.');
                redirecionar('cursos.php');
            }
        }
    }
}

$layout = 'publico';
$tituloPagina = 'Criar conta — Lingo';
$flash = $erro ? ['tipo' => 'erro', 'mensagem' => $erro] : pegar_flash();
require __DIR__ . '/includes/cabecalho.php';
?>
<div class="auth-grid">
    <aside class="auth-visual">
        <img src="assets/img/mascote.svg?v=5" alt="Lino">
        <h2>Crie sua conta em um minuto</h2>
        <p>O plano gratuito já inclui todos os idiomas. Bronze, Prata, Ouro e Diamante são opcionais.</p>
    </aside>
    <section class="card card-estreito card-estatico">
        <p class="olho">Comece agora</p>
        <h1>Criar conta</h1>
        <?php html_botoes_oauth('criar'); ?>
        <form method="post" class="formulario">
            <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
            <label>Nome
                <input type="text" name="nome" class="campo-maiusculo" required autocomplete="name" autocapitalize="characters" spellcheck="false" value="<?= e(isset($_POST['nome']) ? mb_strtoupper((string) $_POST['nome'], 'UTF-8') : '') ?>">
            </label>
            <label>E-mail
                <input type="email" name="email" required autocomplete="email" value="<?= e($_POST['email'] ?? '') ?>">
            </label>
            <label>Senha
                <input type="password" name="senha" required minlength="6" autocomplete="new-password">
            </label>
            <label>Confirmar senha
                <input type="password" name="confirma" required minlength="6" autocomplete="new-password">
            </label>
            <button class="botao botao-principal" type="submit" data-espera="Criando conta…">Começar</button>
        </form>
        <p class="intro">Já tem conta? <a href="login.php">Entrar</a></p>
    </section>
</div>
<?php require __DIR__ . '/includes/rodape.php'; ?>
