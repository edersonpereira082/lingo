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
        $nome = limpar_texto($_POST['nome'] ?? '', 80);
        $codigo = limpar_texto($_POST['codigo'] ?? '', 10);
        $bandeira = limpar_texto($_POST['bandeira'] ?? '', 8);
        $descricao = limpar_texto($_POST['descricao'] ?? '', 255);
        $cor = limpar_texto($_POST['cor'] ?? '#0e7c7b', 20);
        $ordem = (int) ($_POST['ordem'] ?? 0);
        $ativo = isset($_POST['ativo']) ? 1 : 0;
        if ($id) {
            $st = $conexao->prepare('UPDATE cursos SET nome=?, codigo=?, bandeira=?, descricao=?, cor=?, ordem=?, ativo=? WHERE id=?');
            $st->bind_param('sssssiii', $nome, $codigo, $bandeira, $descricao, $cor, $ordem, $ativo, $id);
        } else {
            $st = $conexao->prepare('INSERT INTO cursos (nome, codigo, bandeira, descricao, cor, ordem, ativo) VALUES (?,?,?,?,?,?,?)');
            $st->bind_param('sssssii', $nome, $codigo, $bandeira, $descricao, $cor, $ordem, $ativo);
        }
        $st->execute();
        flash('ok', 'Curso salvo.');
    }
    if ($acao === 'excluir') {
        $id = (int) ($_POST['id'] ?? 0);
        $conexao->query('DELETE FROM cursos WHERE id = ' . $id);
        flash('ok', 'Curso excluído.');
    }
    redirecionar('cursos.php');
}

$editar = null;
if (!empty($_GET['editar'])) {
    $editar = $conexao->query('SELECT * FROM cursos WHERE id = ' . (int) $_GET['editar'])->fetch_assoc();
}
$lista = $conexao->query('SELECT * FROM cursos ORDER BY ordem, nome')->fetch_all(MYSQLI_ASSOC);
$layout = 'admin';
$tituloPagina = 'Cursos — Admin';
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<h1>Cursos</h1>
<section class="card" style="margin-bottom:18px">
    <h2><?= $editar ? 'Editar curso' : 'Novo curso' ?></h2>
    <form method="post" class="formulario">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" value="<?= (int) ($editar['id'] ?? 0) ?>">
        <label>Nome <input name="nome" required value="<?= e($editar['nome'] ?? '') ?>"></label>
        <label>Código (en, es...) <input name="codigo" required value="<?= e($editar['codigo'] ?? '') ?>"></label>
        <label>Bandeira (emoji) <input name="bandeira" value="<?= e($editar['bandeira'] ?? '') ?>"></label>
        <label>Descrição <input name="descricao" value="<?= e($editar['descricao'] ?? '') ?>"></label>
        <label>Cor <input name="cor" value="<?= e($editar['cor'] ?? '#0e7c7b') ?>"></label>
        <label>Ordem <input type="number" name="ordem" value="<?= (int) ($editar['ordem'] ?? 0) ?>"></label>
        <label><input type="checkbox" name="ativo" <?= !isset($editar['ativo']) || (int) $editar['ativo'] === 1 ? 'checked' : '' ?>> Ativo</label>
        <button class="botao botao-principal" type="submit">Salvar</button>
    </form>
</section>
<table class="tabela">
    <thead><tr><th>Idioma</th><th>Código</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($lista as $curso): ?>
        <tr>
            <td><?= e($curso['bandeira'] . ' ' . $curso['nome']) ?></td>
            <td><?= e($curso['codigo']) ?></td>
            <td>
                <a href="cursos.php?editar=<?= (int) $curso['id'] ?>">Editar</a>
                <form method="post" style="display:inline" data-confirmar="Excluir este curso e todas as aulas?">
                    <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                    <input type="hidden" name="acao" value="excluir">
                    <input type="hidden" name="id" value="<?= (int) $curso['id'] ?>">
                    <button class="botao botao-perigo botao-pequeno" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
