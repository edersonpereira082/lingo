<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

$admin = exigir_admin();
$conexao = db();
$alunos = (int) ($conexao->query('SELECT COUNT(*) n FROM usuarios')->fetch_assoc()['n'] ?? 0);
$aulas = (int) ($conexao->query('SELECT COUNT(*) n FROM aulas')->fetch_assoc()['n'] ?? 0);
$cursos = (int) ($conexao->query('SELECT COUNT(*) n FROM cursos')->fetch_assoc()['n'] ?? 0);
$exercicios = (int) ($conexao->query('SELECT COUNT(*) n FROM exercicios')->fetch_assoc()['n'] ?? 0);
$concluidas = (int) ($conexao->query('SELECT COUNT(*) n FROM progresso_aulas WHERE concluida = 1')->fetch_assoc()['n'] ?? 0);
$plusAtivas = (int) ($conexao->query("SELECT COUNT(*) n FROM assinaturas WHERE status = 'ativa' AND (expira_em IS NULL OR expira_em >= NOW())")->fetch_assoc()['n'] ?? 0);

$layout = 'admin';
$tituloPagina = 'Painel admin — Lingo';
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<p class="olho">Administração</p>
<h1>Olá, <?= e($admin['usuario']) ?></h1>
<div class="stats">
    <article class="stat"><span>Alunos</span><strong><?= $alunos ?></strong></article>
    <article class="stat"><span>Cursos</span><strong><?= $cursos ?></strong></article>
    <article class="stat"><span>Aulas</span><strong><?= $aulas ?></strong></article>
    <article class="stat"><span>Exercícios</span><strong><?= $exercicios ?></strong></article>
    <article class="stat"><span>Assinaturas</span><strong><?= $plusAtivas ?></strong></article>
</div>
<div class="card card-estatico">
    <p><?= $concluidas ?> aulas já foram concluídas pelos alunos.</p>
    <div class="acoes">
        <a class="botao botao-principal" href="cursos.php">Gerenciar cursos</a>
        <a class="botao botao-claro" href="assinaturas.php">Assinaturas</a>
        <a class="botao botao-claro" href="usuarios.php">Ver alunos</a>
        <a class="botao botao-claro" href="../index.php">Abrir o site</a>
    </div>
</div>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
