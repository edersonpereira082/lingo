<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once __DIR__ . '/funcoes.php';

$tituloPagina = $tituloPagina ?? SITE_TITULO;
$layout = $layout ?? 'publico';
$ehAdmin = strpos(str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? ''), '/admin/') !== false;
$ehApi = strpos(str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? ''), '/api/') !== false;
$baseAssets = $baseAssets ?? ($ehAdmin || $ehApi ? '../assets' : 'assets');
$baseHref = $ehAdmin ? '../' : '';
$scriptAtual = basename($_SERVER['SCRIPT_NAME'] ?? '');
$aluno = usuario_logado();
$admin = admin_logado();
$flash = $flash ?? pegar_flash();
$cursoTopo = $cursoTopo ?? null;
$prefetchUrl = $prefetchUrl ?? null;
$plusAtivo = false;
$assinaturaTopo = null;
$vidasTopo = defined('VIDAS_INICIAIS') ? (int) VIDAS_INICIAIS : 5;
$vidasInfinitas = false;
$nomePlanoTopo = '';
$dbTopo = null;
if (($layout === 'aluno' || $layout === 'aula') && $aluno && function_exists('tentar_db')) {
    $dbTopo = tentar_db();
    if ($dbTopo && function_exists('assinatura_atual')) {
        $assinaturaTopo = assinatura_atual($dbTopo, (int) $aluno['id']);
        $plusAtivo = $assinaturaTopo !== null;
        $nomePlanoTopo = $assinaturaTopo['plano_nome'] ?? '';
        $vidasTopo = function_exists('vidas_do_aluno') ? vidas_do_aluno($dbTopo, (int) $aluno['id']) : $vidasTopo;
        $vidasInfinitas = $vidasTopo >= 99;
    }
    if ($dbTopo && $layout === 'aluno' && !empty($aluno['curso_atual_id'])) {
        $cursoTopo = $dbTopo->query('SELECT codigo, nome, bandeira FROM cursos WHERE id = ' . (int) $aluno['curso_atual_id'])->fetch_assoc() ?: $cursoTopo;
    }
}

function nav_icone(string $tipo): string
{
    $icones = [
        'aprender' => '<svg viewBox="0 0 32 32" fill="none"><path d="M6 14 16 6l10 8v12a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V14z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/><path d="M12 28V18h8v10" stroke="currentColor" stroke-width="2.4"/></svg>',
        'ligas' => '<svg viewBox="0 0 32 32" fill="none"><path d="M8 6h16v6a8 8 0 0 1-16 0V6z" stroke="currentColor" stroke-width="2.4"/><path d="M8 8H5a4 4 0 0 0 4 8M24 8h3a4 4 0 0 1-4 8M12 22h8v6H12z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/></svg>',
        'missoes' => '<svg viewBox="0 0 32 32" fill="none"><rect x="7" y="10" width="18" height="14" rx="3" stroke="currentColor" stroke-width="2.4"/><path d="M7 16h18M16 10v14M12 10V8h8v2" stroke="currentColor" stroke-width="2.4"/></svg>',
        'praticar' => '<svg viewBox="0 0 32 32" fill="none"><path d="M8 10h10a6 6 0 0 1 0 12H8V10z" stroke="currentColor" stroke-width="2.4"/><circle cx="22" cy="16" r="3" fill="currentColor"/></svg>',
        'falar' => '<svg viewBox="0 0 32 32" fill="none"><path d="M7 10h12a4 4 0 0 1 4 4v4a4 4 0 0 1-4 4h-3l-5 5v-5H7a4 4 0 0 1-4-4v-4a4 4 0 0 1 4-4z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/><path d="M26 11c1.6 1.4 2.5 3.2 2.5 5s-.9 3.6-2.5 5" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg>',
        'perfil' => '<svg viewBox="0 0 32 32" fill="none"><circle cx="16" cy="12" r="5" stroke="currentColor" stroke-width="2.4"/><path d="M7 26c2-5 5-7 9-7s7 2 9 7" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg>',
        'plus' => '<svg viewBox="0 0 32 32" fill="none"><path d="M16 5 19.2 12.2 27 13.1 21.2 18.4 22.8 26 16 22.1 9.2 26 10.8 18.4 5 13.1 12.8 12.2 16 5z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"/></svg>',
    ];

    return $icones[$tipo] ?? '';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#2c2158">
    <title><?= e($tituloPagina) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e($baseAssets) ?>/css/estilo.css?v=42">
    <link rel="icon" href="<?= e($baseAssets) ?>/img/favicon.svg" type="image/svg+xml">
    <?php if (!empty($prefetchUrl)): ?>
    <link rel="prefetch" href="<?= e($prefetchUrl) ?>">
    <?php endif; ?>
</head>
<body class="layout-<?= e($layout) ?>">
<a class="pular-conteudo" href="#conteudo">Ir ao conteúdo</a>
<?php if ($layout === 'publico'): ?>
<header class="topo-publico">
    <div class="topo-interno">
        <a class="marca" href="<?= e($baseHref) ?>index.php">
            <span class="marca-icone" aria-hidden="true"></span>
            <strong>Lingo</strong>
        </a>
        <nav class="menu-publico" aria-label="Principal">
            <a class="menu-link" href="<?= e($baseHref) ?>index.php#como">Como funciona</a>
            <a class="menu-link menu-planos" href="<?= e($baseHref) ?>planos.php">Planos</a>
            <?php if ($aluno): ?>
                <a class="menu-login" href="<?= e($baseHref) ?>logout.php">Sair</a>
                <a class="botao botao-principal botao-pequeno" href="<?= e($baseHref) ?>painel.php">Ir ao app</a>
            <?php else: ?>
                <a class="menu-login" href="<?= e($baseHref) ?>login.php">Entrar</a>
                <a class="botao botao-principal botao-pequeno" href="<?= e($baseHref) ?>cadastro.php">Começar</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
<main class="conteudo-publico" id="conteudo">
<?php elseif ($layout === 'aula'): ?>
<main class="conteudo-app" id="conteudo">
<?php elseif ($layout === 'aluno'): ?>
<div class="app">
    <aside class="lateral">
        <a class="marca" href="painel.php">
            <span class="marca-icone" aria-hidden="true"></span>
            <strong>Lingo</strong>
        </a>
        <nav aria-label="Estudo">
            <a href="painel.php" <?= in_array($scriptAtual, ['painel.php', 'curso.php'], true) ? 'class="ativo" aria-current="page"' : '' ?>><?= nav_icone('aprender') ?> Aprender</a>
            <a href="ranking.php" <?= $scriptAtual === 'ranking.php' ? 'class="ativo" aria-current="page"' : '' ?>><?= nav_icone('ligas') ?> Ligas</a>
            <a href="missoes.php" <?= $scriptAtual === 'missoes.php' ? 'class="ativo" aria-current="page"' : '' ?>><?= nav_icone('missoes') ?> Missões</a>
            <a href="conversa.php" <?= in_array($scriptAtual, ['conversa.php', 'conversa-privada.php', 'tutor.php'], true) ? 'class="ativo" aria-current="page"' : '' ?>><?= nav_icone('falar') ?> Falar</a>
            <a href="vocabulario.php" <?= $scriptAtual === 'vocabulario.php' ? 'class="ativo" aria-current="page"' : '' ?>><?= nav_icone('praticar') ?> Praticar</a>
            <a href="perfil.php" <?= $scriptAtual === 'perfil.php' ? 'class="ativo" aria-current="page"' : '' ?>><?= nav_icone('perfil') ?> Perfil</a>
            <a href="planos.php" class="nav-plus <?= in_array($scriptAtual, ['planos.php', 'assinar.php'], true) ? 'ativo' : '' ?>" <?= in_array($scriptAtual, ['planos.php', 'assinar.php'], true) ? 'aria-current="page"' : '' ?>><?= nav_icone('plus') ?> <?= $plusAtivo ? e($nomePlanoTopo) : 'Assinar' ?></a>
        </nav>
        <?php if ($aluno): ?>
        <div class="lateral-usuario">
            <?= html_avatar($aluno) ?>
            <div>
                <strong><?= e($aluno['nome']) ?></strong>
                <small><?= (int) $aluno['xp'] ?> XP<?= $plusAtivo ? ' · ' . e($nomePlanoTopo) : '' ?></small>
            </div>
        </div>
        <?php endif; ?>
        <a class="sair" href="logout.php">Sair da conta</a>
    </aside>
    <div class="app-principal">
        <header class="topo-app">
            <div class="status-estudo">
                <span class="status-ofensiva" title="Dias seguidos de estudo"><?= svg_icone('fogo') ?> <?= (int) ($aluno['ofensiva'] ?? 0) ?></span>
                <span class="status-gemas" title="Experiência"><?= svg_icone('gema') ?> <?= (int) ($aluno['xp'] ?? 0) ?></span>
                <span class="status-vidas<?= $vidasInfinitas ? ' plus' : '' ?>" title="Vidas"><?= svg_icone('vida') ?> <?= $vidasInfinitas ? '∞' : (int) $vidasTopo ?></span>
                <a class="btn-trocar-idioma" href="cursos.php" title="Trocar de idioma">
                    <?php if ($cursoTopo): ?><?= html_bandeira($cursoTopo['codigo']) ?><?php endif; ?>
                    <span class="btn-trocar-rotulo">Idioma</span>
                </a>
                <a class="status-plus <?= $plusAtivo ? e(strtolower($assinaturaTopo['plano_codigo'] ?? '')) : '' ?>" href="planos.php"><?= $plusAtivo ? e($nomePlanoTopo) : 'Assinar' ?></a>
            </div>
            <div class="topo-acoes">
                <?php if ($aluno): ?>
                <a class="topo-usuario" href="perfil.php" title="<?= e($aluno['nome']) ?>">
                    <?= html_avatar($aluno, 'avatar avatar-topo') ?>
                    <span class="topo-usuario-dados">
                        <strong><?= e(primeiro_nome((string) $aluno['nome'])) ?></strong>
                        <small><?= (int) ($aluno['xp'] ?? 0) ?> XP</small>
                    </span>
                </a>
                <?php endif; ?>
                <a href="cursos.php">Idiomas</a>
                <a class="sair" href="logout.php">Sair</a>
            </div>
        </header>
        <main class="conteudo-app" id="conteudo">
<?php else: ?>
<div class="app">
    <aside class="lateral lateral-admin">
        <a class="marca" href="index.php">
            <span class="marca-icone" aria-hidden="true"></span>
            <strong>Admin</strong>
        </a>
        <nav aria-label="Administração">
            <a href="index.php" class="<?= $scriptAtual === 'index.php' ? 'ativo' : '' ?>">Painel</a>
            <a href="cursos.php" class="<?= $scriptAtual === 'cursos.php' ? 'ativo' : '' ?>">Cursos</a>
            <a href="unidades.php" class="<?= $scriptAtual === 'unidades.php' ? 'ativo' : '' ?>">Unidades</a>
            <a href="aulas.php" class="<?= $scriptAtual === 'aulas.php' ? 'ativo' : '' ?>">Aulas</a>
            <a href="exercicios.php" class="<?= $scriptAtual === 'exercicios.php' ? 'ativo' : '' ?>">Exercícios</a>
            <a href="usuarios.php" class="<?= $scriptAtual === 'usuarios.php' ? 'ativo' : '' ?>">Alunos</a>
            <a href="assinaturas.php" class="<?= $scriptAtual === 'assinaturas.php' ? 'ativo' : '' ?>">Assinaturas</a>
            <a href="senha.php" class="<?= $scriptAtual === 'senha.php' ? 'ativo' : '' ?>">Senha</a>
        </nav>
        <a class="sair" href="logout.php">Sair</a>
    </aside>
    <div class="app-principal">
        <main class="conteudo-app" id="conteudo">
<?php endif; ?>
<?php if (!empty($flash) && $layout !== 'aula'): ?>
<div class="aviso aviso-<?= e($flash['tipo'] ?? 'ok') ?>"><?= e($flash['mensagem'] ?? '') ?></div>
<?php endif; ?>
