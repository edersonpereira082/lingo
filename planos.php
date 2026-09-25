<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$conexao = tentar_db();
$planos = $conexao ? planos_ativos($conexao) : [];
$aluno = usuario_logado();
$assinatura = ($conexao && $aluno) ? assinatura_atual($conexao, (int) $aluno['id']) : null;
$idiomas = lista_idiomas_planos($conexao);

$layout = $aluno ? 'aluno' : 'publico';
$tituloPagina = 'Planos Lingo';
require __DIR__ . '/includes/cabecalho.php';
?>
<section class="planos-hero">
    <p class="olho">Assinatura</p>
    <h1><?= $assinatura ? 'Seu plano: ' . e($assinatura['plano_nome']) : 'Um plano, todos os idiomas' ?></h1>
    <p class="intro">Bronze, Prata, Ouro e Diamante valem em <?= e($idiomas) ?>. Troque de curso quando quiser — a assinatura é da sua conta, não de um idioma só.</p>
</section>

<div class="planos-grade">
    <article class="plano-card">
        <p class="olho">Gratuito</p>
        <h2>Lingo</h2>
        <p class="plano-preco">R$ 0</p>
        <small>Para sempre · todos os idiomas</small>
        <ul class="plano-lista">
            <li>Todos os idiomas inclusos</li>
            <li><?= (int) VIDAS_INICIAIS ?> vidas por lição</li>
            <li>XP padrão e missões diárias</li>
            <li>Áudio com sotaque nativo</li>
        </ul>
        <?php if ($aluno && !$assinatura): ?>
            <span class="botao botao-claro" aria-disabled="true">Plano atual</span>
        <?php elseif (!$aluno): ?>
            <a class="botao botao-claro" href="cadastro.php">Começar grátis</a>
        <?php else: ?>
            <a class="botao botao-claro" href="painel.php">Continuar estudando</a>
        <?php endif; ?>
    </article>

    <?php foreach ($planos as $plano):
        $destaque = (int) $plano['destaque'] === 1;
        $classe = preg_replace('/[^a-z]/', '', strtolower((string) $plano['codigo']));
        $href = $aluno ? 'assinar.php?plano=' . urlencode($plano['codigo']) : 'cadastro.php';
        ?>
        <article class="plano-card <?= e($classe) ?> <?= $destaque ? 'destaque' : '' ?>">
            <?php if ($destaque): ?><span class="selo-plano">Mais escolhido</span><?php endif; ?>
            <p class="olho">Mensal</p>
            <h2><?= e($plano['nome']) ?></h2>
            <p class="plano-preco"><?= e(formatar_brl((int) $plano['preco_centavos'])) ?></p>
            <small>por mês · todos os idiomas</small>
            <ul class="plano-lista">
                <?php foreach (beneficios_do_plano($plano) as $item): ?>
                    <li><?= e($item) ?></li>
                <?php endforeach; ?>
            </ul>
            <?php if ($assinatura && $assinatura['plano_codigo'] === $plano['codigo']): ?>
                <span class="botao botao-principal" aria-disabled="true">Assinatura ativa</span>
            <?php else: ?>
                <a class="botao <?= $destaque ? 'botao-principal' : 'botao-destaque' ?>" href="<?= e($href) ?>">
                    <?= $aluno ? ($assinatura ? 'Mudar para este' : 'Assinar agora') : 'Criar conta e assinar' ?>
                </a>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</div>

<?php if ($assinatura): ?>
<section class="card card-estreito card-estatico">
    <h2>Gerenciar plano</h2>
    <p>Seu <?= e($assinatura['plano_nome']) ?> vale em todos os idiomas até <strong><?= e(date('d/m/Y', strtotime($assinatura['expira_em']))) ?></strong>.</p>
    <form method="post" action="assinar.php" onsubmit="return confirm('Cancelar o plano agora? Os benefícios encerram na hora, em todos os idiomas.');">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <input type="hidden" name="acao" value="cancelar">
        <button class="botao botao-claro" type="submit">Cancelar assinatura</button>
    </form>
</section>
<?php endif; ?>
<?php require __DIR__ . '/includes/rodape.php'; ?>
