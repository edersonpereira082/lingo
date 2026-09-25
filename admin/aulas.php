<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

exigir_admin();
$conexao = db();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && csrf_valido($_POST['csrf'] ?? null)) {
    $acao = $_POST['acao'] ?? '';
    if ($acao === 'salvar') {
        $id = (int) ($_POST['id'] ?? 0);
        $unidadeId = (int) ($_POST['unidade_id'] ?? 0);
        $titulo = limpar_texto($_POST['titulo'] ?? '', 120);
        $resumo = limpar_texto($_POST['resumo'] ?? '', 255);
        $teoria = trim((string) ($_POST['teoria'] ?? ''));
        $ordem = (int) ($_POST['ordem'] ?? 0);
        $xp = max(5, (int) ($_POST['xp_recompensa'] ?? 10));
        if ($id) {
            $st = $conexao->prepare('UPDATE aulas SET unidade_id=?, titulo=?, resumo=?, teoria=?, ordem=?, xp_recompensa=? WHERE id=?');
            $st->bind_param('isssiii', $unidadeId, $titulo, $resumo, $teoria, $ordem, $xp, $id);
        } else {
            $st = $conexao->prepare('INSERT INTO aulas (unidade_id, titulo, resumo, teoria, ordem, xp_recompensa) VALUES (?,?,?,?,?,?)');
            $st->bind_param('isssii', $unidadeId, $titulo, $resumo, $teoria, $ordem, $xp);
        }
        $st->execute();
        flash('ok', 'Aula salva.');
    }
    if ($acao === 'excluir') {
        $conexao->query('DELETE FROM aulas WHERE id = ' . (int) $_POST['id']);
        flash('ok', 'Aula excluída.');
    }
    redirecionar('aulas.php');
}

$unidades = $conexao->query(
    'SELECT u.id, u.titulo, c.nome AS curso FROM unidades u JOIN cursos c ON c.id = u.curso_id ORDER BY c.ordem, u.ordem'
)->fetch_all(MYSQLI_ASSOC);
$editar = !empty($_GET['editar']) ? $conexao->query('SELECT * FROM aulas WHERE id = ' . (int) $_GET['editar'])->fetch_assoc() : null;
$lista = $conexao->query(
    'SELECT a.*, u.titulo AS unidade, c.nome AS curso
     FROM aulas a JOIN unidades u ON u.id = a.unidade_id JOIN cursos c ON c.id = u.curso_id
     ORDER BY c.ordem, u.ordem, a.ordem'
)->fetch_all(MYSQLI_ASSOC);
$layout = 'admin';
$tituloPagina = 'Aulas — Admin';
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<h1>Aulas</h1>
<section class="card" style="margin-bottom:18px">
    <form method="post" class="formulario">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" value="<?= (int) ($editar['id'] ?? 0) ?>">
        <label>Unidade
            <select name="unidade_id" required>
                <?php foreach ($unidades as $unidade): ?>
                    <option value="<?= (int) $unidade['id'] ?>" <?= (int) ($editar['unidade_id'] ?? 0) === (int) $unidade['id'] ? 'selected' : '' ?>>
                        <?= e($unidade['curso'] . ' — ' . $unidade['titulo']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Título <input name="titulo" required value="<?= e($editar['titulo'] ?? '') ?>"></label>
        <label>Resumo <input name="resumo" value="<?= e($editar['resumo'] ?? '') ?>"></label>
        <label>Teoria <textarea name="teoria" rows="6"><?= e($editar['teoria'] ?? '') ?></textarea></label>
        <label>Ordem <input type="number" name="ordem" value="<?= (int) ($editar['ordem'] ?? 0) ?>"></label>
        <label>XP <input type="number" name="xp_recompensa" value="<?= (int) ($editar['xp_recompensa'] ?? 10) ?>"></label>
        <button class="botao botao-principal" type="submit">Salvar</button>
    </form>
</section>
<table class="tabela">
    <thead><tr><th>Curso</th><th>Aula</th><th>XP</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($lista as $item): ?>
        <tr>
            <td><?= e($item['curso']) ?></td>
            <td><?= e($item['unidade'] . ' · ' . $item['titulo']) ?></td>
            <td><?= (int) $item['xp_recompensa'] ?></td>
            <td>
                <a href="aulas.php?editar=<?= (int) $item['id'] ?>">Editar</a>
                <a href="exercicios.php?aula=<?= (int) $item['id'] ?>">Exercícios</a>
                <form method="post" style="display:inline" data-confirmar="Excluir aula?">
                    <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                    <input type="hidden" name="acao" value="excluir">
                    <input type="hidden" name="id" value="<?= (int) $item['id'] ?>">
                    <button class="botao botao-perigo botao-pequeno" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
