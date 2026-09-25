<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;

$feitasHoje = 0;
$st = $conexao->prepare(
    'SELECT COUNT(*) n FROM progresso_aulas WHERE usuario_id = ? AND concluida = 1 AND DATE(concluida_em) = CURDATE()'
);
$st->bind_param('i', $aluno['id']);
$st->execute();
$feitasHoje = (int) ($st->get_result()->fetch_assoc()['n'] ?? 0);

$missoes = [
    [
        'titulo' => 'Ganhe ' . (int) $aluno['meta_diaria'] . ' XP hoje',
        'atual' => (int) $aluno['xp_hoje'],
        'meta' => (int) $aluno['meta_diaria'],
    ],
    [
        'titulo' => 'Conclua 1 lição',
        'atual' => min(1, $feitasHoje),
        'meta' => 1,
    ],
    [
        'titulo' => 'Mantenha a ofensiva',
        'atual' => ((int) $aluno['ofensiva'] > 0 && ($aluno['ultimo_estudo'] ?? '') === date('Y-m-d')) ? 1 : 0,
        'meta' => 1,
    ],
];

$layout = 'aluno';
$tituloPagina = 'Missões — Lingo';
require __DIR__ . '/includes/cabecalho.php';
?>
<p class="olho">Diárias</p>
<h1>Missões</h1>
<p class="intro">Cumpra as três para manter o ritmo, como na trilha do dia.</p>
<div class="grade">
    <?php foreach ($missoes as $missao):
        $pct = min(100, (int) round($missao['atual'] / max(1, $missao['meta']) * 100));
        ?>
        <article class="card">
            <h3><?= e($missao['titulo']) ?></h3>
            <div class="barra"><span style="width:<?= $pct ?>%"></span></div>
            <p><?= (int) $missao['atual'] ?> / <?= (int) $missao['meta'] ?><?= $pct >= 100 ? ' · concluída' : '' ?></p>
        </article>
    <?php endforeach; ?>
</div>
<div class="acoes">
    <a class="botao botao-principal" href="painel.php">Voltar a aprender</a>
</div>
<?php require __DIR__ . '/includes/rodape.php'; ?>
