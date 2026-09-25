<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        flash('erro', 'Sessão expirada.');
        redirecionar('perfil.php');
    }
    $nome = limpar_texto($_POST['nome'] ?? '', 120);
    $meta = max(10, min(200, (int) ($_POST['meta_diaria'] ?? 20)));
    $senhaAtual = (string) ($_POST['senha_atual'] ?? '');
    $nova = (string) ($_POST['nova_senha'] ?? '');
    $avatar = chave_avatar((string) ($_POST['avatar'] ?? ($aluno['avatar'] ?? 'lino-classico')));
    $aparencia = strtolower(limpar_texto($_POST['aparencia'] ?? '', 16));

    if (mb_strlen($nome) < 2) {
        flash('erro', 'Informe um nome válido.');
        redirecionar('perfil.php');
    }

    $st = $conexao->prepare('SELECT senha, foto, foto_social, google_id, facebook_id FROM usuarios WHERE id = ?');
    $st->bind_param('i', $aluno['id']);
    $st->execute();
    $atualDb = $st->get_result()->fetch_assoc() ?: [];
    $hash = $atualDb['senha'] ?? '';
    $fotoAtual = $atualDb['foto'] ?? null;
    $fotoNova = $fotoAtual;
    $temSocial = url_foto_social($atualDb + $aluno) !== null;

    try {
        if (!empty($_FILES['foto']['tmp_name'])) {
            $fotoNova = processar_foto_aluno($_FILES['foto'], (int) $aluno['id'], $fotoAtual);
            $aparencia = 'upload';
        }
    } catch (Throwable $e) {
        flash('erro', $e->getMessage());
        redirecionar('perfil.php');
    }

    if (!in_array($aparencia, ['upload', 'social', 'avatar'], true)) {
        $aparencia = modo_foto_usuario($aluno);
    }
    if ($aparencia === 'social' && !$temSocial) {
        $aparencia = $fotoNova ? 'upload' : 'avatar';
    }
    if ($aparencia === 'upload' && !$fotoNova) {
        $aparencia = $temSocial ? 'social' : 'avatar';
    }
    $fotoBind = $fotoNova ?: null;

    if ($nova !== '') {
        if (conta_tem_senha($hash) && !password_verify($senhaAtual, $hash)) {
            flash('erro', 'Senha atual incorreta.');
            redirecionar('perfil.php');
        }
        if (strlen($nova) < 6) {
            flash('erro', 'A nova senha precisa ter pelo menos 6 caracteres.');
            redirecionar('perfil.php');
        }
        $novoHash = password_hash($nova, PASSWORD_DEFAULT);
        $up = $conexao->prepare('UPDATE usuarios SET nome = ?, meta_diaria = ?, senha = ?, avatar = ?, foto = ?, foto_modo = ? WHERE id = ?');
        $up->bind_param('sissssi', $nome, $meta, $novoHash, $avatar, $fotoBind, $aparencia, $aluno['id']);
        $up->execute();
    } else {
        $up = $conexao->prepare('UPDATE usuarios SET nome = ?, meta_diaria = ?, avatar = ?, foto = ?, foto_modo = ? WHERE id = ?');
        $up->bind_param('sisssi', $nome, $meta, $avatar, $fotoBind, $aparencia, $aluno['id']);
        $up->execute();
    }
    flash('ok', 'Perfil atualizado.');
    redirecionar('perfil.php');
}

$aluno = recarregar_aluno($conexao) ?? $aluno;
$assinatura = assinatura_atual($conexao, (int) $aluno['id']);
$feitas = $conexao->query(
    'SELECT COUNT(*) AS n FROM progresso_aulas WHERE usuario_id = ' . (int) $aluno['id'] . ' AND concluida = 1'
)->fetch_assoc()['n'] ?? 0;
$temFoto = url_foto_aluno($aluno['foto'] ?? '') !== null;
$fotoSocial = url_foto_social($aluno);
$modoFoto = modo_foto_usuario($aluno);
$temSenha = !empty($aluno['tem_senha']);
$contaSocial = !empty($aluno['google_id']) || !empty($aluno['facebook_id']);
$rotuloConta = [];
if (!empty($aluno['google_id'])) {
    $rotuloConta[] = 'Google';
}
if (!empty($aluno['facebook_id'])) {
    $rotuloConta[] = 'Facebook';
}
if ($temSenha) {
    $rotuloConta[] = 'e-mail';
}

$layout = 'aluno';
$tituloPagina = 'Perfil — Lingo';
require __DIR__ . '/includes/cabecalho.php';
?>
<p class="olho">Sua conta<?= $rotuloConta ? ' · ' . e(implode(' e ', $rotuloConta)) : '' ?></p>
<h1><?= e($aluno['nome']) ?></h1>
<div class="perfil-topo">
    <?= html_avatar($aluno, 'avatar avatar-grande') ?>
    <div class="stats">
        <article class="stat"><span>XP</span><strong><?= (int) $aluno['xp'] ?></strong></article>
        <article class="stat"><span>Nível</span><strong><?= nivel_por_xp((int) $aluno['xp']) ?></strong></article>
        <article class="stat"><span>Liga</span><strong><?= e(liga_por_xp((int) $aluno['xp'])) ?></strong></article>
        <article class="stat"><span>Aulas</span><strong><?= (int) $feitas ?></strong></article>
        <article class="stat"><span>Recorde</span><strong><?= (int) $aluno['recorde_ofensiva'] ?></strong></article>
    </div>
</div>
<section class="card card-plus <?= $assinatura ? 'ativo' : '' ?>">
    <?php if ($assinatura): ?>
        <p class="olho">Assinatura</p>
        <h2><?= e($assinatura['plano_nome']) ?></h2>
        <p>Ativa até <strong><?= e(date('d/m/Y', strtotime($assinatura['expira_em']))) ?></strong> · <?= e($assinatura['metodo'] ?: 'cortesia') ?>. Vale em todos os idiomas.</p>
        <div class="acoes">
            <a class="botao botao-claro botao-pequeno" href="planos.php">Gerenciar plano</a>
        </div>
    <?php else: ?>
        <p class="olho">Planos</p>
        <h2>Plano gratuito</h2>
        <p>Você já pode estudar todos os idiomas. Assine a partir de R$ 9,99 para mais vidas e XP extra em qualquer curso.</p>
        <div class="acoes">
            <a class="botao botao-principal botao-pequeno" href="planos.php">Ver planos</a>
        </div>
    <?php endif; ?>
</section>
<section class="card card-estreito card-estatico" style="margin:0">
    <form method="post" class="formulario" enctype="multipart/form-data">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <p class="olho">Como você aparece</p>
        <p class="intro">Mesmo com Google ou Facebook, você escolhe foto própria ou um avatar do Lino. A escolha fica salva e o próximo login social não a substitui.</p>
        <label class="matricula-opcao">
            <input type="radio" name="aparencia" value="upload" <?= $modoFoto === 'upload' ? 'checked' : '' ?>>
            <span>
                <strong>Foto enviada</strong>
                <small>JPG, PNG ou WEBP, até 2 MB<?= $temFoto ? ' · já há uma foto salva' : '' ?>.</small>
            </span>
        </label>
        <label>Enviar outra foto
            <input type="file" name="foto" id="campo-foto" accept="image/jpeg,image/png,image/webp">
        </label>
        <?php if ($fotoSocial): ?>
            <label class="matricula-opcao">
                <input type="radio" name="aparencia" value="social" <?= $modoFoto === 'social' ? 'checked' : '' ?>>
                <span>
                    <strong>Foto da conta <?= e(!empty($aluno['google_id']) ? 'Google' : 'Facebook') ?></strong>
                    <small>Usa a imagem do login social. Você pode trocar quando quiser.</small>
                    <img class="preview-social" src="<?= e($fotoSocial) ?>" alt="Foto da conta social" referrerpolicy="no-referrer">
                </span>
            </label>
        <?php endif; ?>
        <label class="matricula-opcao">
            <input type="radio" name="aparencia" value="avatar" <?= $modoFoto === 'avatar' ? 'checked' : '' ?>>
            <span>
                <strong>Avatar do Lino</strong>
                <small>Escolha um papagaio abaixo. Vale para contas sociais e cadastro direto.</small>
            </span>
        </label>
        <p class="olho">Avatares do Lino</p>
        <div class="grade-avatares">
            <?php foreach (catalogo_avatares() as $chave => $rotulo): ?>
                <label class="avatar-opcao">
                    <input type="radio" name="avatar" value="<?= e($chave) ?>" <?= chave_avatar($aluno['avatar'] ?? '') === $chave ? 'checked' : '' ?>>
                    <img src="<?= e(url_avatar_lino($chave)) ?>" alt="<?= e($rotulo) ?>">
                    <span><?= e($rotulo) ?></span>
                </label>
            <?php endforeach; ?>
        </div>
        <label>Nome
            <input type="text" name="nome" required value="<?= e($aluno['nome']) ?>">
        </label>
        <label>E-mail
            <input type="email" value="<?= e($aluno['email']) ?>" disabled>
        </label>
        <label>Meta diária (XP)
            <input type="number" name="meta_diaria" min="10" max="200" value="<?= (int) $aluno['meta_diaria'] ?>">
        </label>
        <?php if ($temSenha): ?>
            <label>Senha atual (só para trocar a senha)
                <input type="password" name="senha_atual" autocomplete="current-password">
            </label>
            <label>Nova senha
                <input type="password" name="nova_senha" minlength="6" autocomplete="new-password">
            </label>
        <?php else: ?>
            <p class="intro">Sua conta entra com <?= e(implode(' ou ', array_values(array_filter([
                !empty($aluno['google_id']) ? 'Google' : null,
                !empty($aluno['facebook_id']) ? 'Facebook' : null,
            ]))) ?: 'login social') ?>. Se quiser, crie uma senha para também entrar com e-mail.</p>
            <label>Criar senha (opcional)
                <input type="password" name="nova_senha" minlength="6" autocomplete="new-password">
            </label>
        <?php endif; ?>
        <button class="botao botao-principal" type="submit">Salvar</button>
    </form>
</section>
<section class="card card-estreito card-estatico perfil-sair">
    <p class="olho">Sessão</p>
    <h2>Sair da conta</h2>
    <p>Você pode entrar de novo a qualquer momento, com e-mail, Google ou Facebook.</p>
    <a class="botao botao-claro" href="logout.php">Sair da conta</a>
</section>
<script>
document.getElementById('campo-foto')?.addEventListener('change', () => {
  const el = document.querySelector('input[name="aparencia"][value="upload"]');
  if (el) el.checked = true;
});
document.querySelectorAll('.grade-avatares input').forEach((el) => {
  el.addEventListener('change', () => {
    const av = document.querySelector('input[name="aparencia"][value="avatar"]');
    if (av) av.checked = true;
  });
});
</script>
<?php require __DIR__ . '/includes/rodape.php'; ?>
