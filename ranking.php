<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;
$ranking = $conexao->query(
    'SELECT id, nome, xp, ofensiva, avatar, foto FROM usuarios WHERE ativo = 1 ORDER BY xp DESC, ofensiva DESC, nome LIMIT 20'
)->fetch_all(MYSQLI_ASSOC);

$layout = 'aluno';
$tituloPagina = 'Ligas — Lingo';
require __DIR__ . '/includes/cabecalho.php';
?>
<p class="olho">Liga <?= e(liga_por_xp((int) $aluno['xp'])) ?></p>
<h1>Classificação da semana</h1>
<p class="intro">Suba de liga ganhando XP nas lições. Os 20 primeiros aparecem aqui.</p>
<?php if (count($ranking) >= 3): ?>
<div class="podio">
    <?php
    $ordemPodio = [$ranking[1], $ranking[0], $ranking[2]];
    $lugares = [2, 1, 3];
    foreach ($ordemPodio as $i => $linha):
        ?>
        <div class="podio-col lugar-<?= $lugares[$i] ?> <?= (int) $linha['id'] === (int) $aluno['id'] ? 'eu' : '' ?>">
            <?= html_avatar($linha, 'podio-avatar') ?>
            <strong><?= e($linha['nome']) ?></strong>
            <small><?= (int) $linha['xp'] ?> XP</small>
            <em><?= $lugares[$i] ?>º</em>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
<div class="card">
    <table class="tabela">
        <thead><tr><th>#</th><th>Aluno</th><th>XP</th><th>Liga</th><th>Ofensiva</th></tr></thead>
        <tbody>
        <?php foreach ($ranking as $i => $linha): ?>
            <tr <?= (int) $linha['id'] === (int) $aluno['id'] ? 'style="background:#ddf4ff"' : '' ?>>
                <td><?= $i + 1 ?></td>
                <td><?= e($linha['nome']) ?></td>
                <td><?= (int) $linha['xp'] ?></td>
                <td><?= e(liga_por_xp((int) $linha['xp'])) ?></td>
                <td><?= (int) $linha['ofensiva'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require __DIR__ . '/includes/rodape.php'; ?>
