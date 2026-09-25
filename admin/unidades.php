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
        $cursoId = (int) ($_POST['curso_id'] ?? 0);
        $titulo = limpar_texto($_POST['titulo'] ?? '', 120);
        $descricao = limpar_texto($_POST['descricao'] ?? '', 255);
        $nivel = limpar_texto($_POST['nivel'] ?? 'A1', 10);
        if (!preg_match('/^(A[12]|B[12]|C[12])$/', $nivel)) {
            $nivel = codigo_cefr($nivel);
        }
        $ordem = (int) ($_POST['ordem'] ?? 0);
        if ($id) {
            $st = $conexao->prepare('UPDATE unidades SET curso_id=?, titulo=?, descricao=?, nivel=?, ordem=? WHERE id=?');
            $st->bind_param('isssii', $cursoId, $titulo, $descricao, $nivel, $ordem, $id);
        } else {
            $st = $conexao->prepare('INSERT INTO unidades (curso_id, titulo, descricao, nivel, ordem) VALUES (?,?,?,?,?)');
            $st->bind_param('isssi', $cursoId, $titulo, $descricao, $nivel, $ordem);
        }
        $st->execute();
        flash('ok', 'Unidade salva.');
    }
    if ($acao === 'excluir') {
        $conexao->query('DELETE FROM unidades WHERE id = ' . (int) $_POST['id']);
        flash('ok', 'Unidade excluída.');
    }
    redirecionar('unidades.php');
}

$cursos = $conexao->query('SELECT id, nome FROM cursos ORDER BY ordem')->fetch_all(MYSQLI_ASSOC);
$editar = !empty($_GET['editar']) ? $conexao->query('SELECT * FROM unidades WHERE id = ' . (int) $_GET['editar'])->fetch_assoc() : null;
$lista = $conexao->query(
    'SELECT u.*, c.nome AS curso FROM unidades u JOIN cursos c ON c.id = u.curso_id ORDER BY c.ordem, u.ordem'
)->fetch_all(MYSQLI_ASSOC);
$layout = 'admin';
$tituloPagina = 'Unidades — Admin';
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<h1>Unidades</h1>
<section class="card" style="margin-bottom:18px">
    <form method="post" class="formulario">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" value="<?= (int) ($editar['id'] ?? 0) ?>">
        <label>Curso
            <select name="curso_id" required>
                <?php foreach ($cursos as $curso): ?>
                    <option value="<?= (int) $curso['id'] ?>" <?= (int) ($editar['curso_id'] ?? 0) === (int) $curso['id'] ? 'selected' : '' ?>><?= e($curso['nome']) ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Título <input name="titulo" required value="<?= e($editar['titulo'] ?? '') ?>"></label>
        <label>Descrição <input name="descricao" value="<?= e($editar['descricao'] ?? '') ?>"></label>
        <label>Nível
            <select name="nivel">
                <?php
                $nivelEditar = codigo_cefr((string) ($editar['nivel'] ?? 'A1'));
                $opcoesNivel = [];
                foreach (catalogo_etapas() as $codigo => $etapa) {
                    $faixa = catalogo_faixas()[$etapa['usuario']] ?? null;
                    $opcoesNivel[$codigo] = ($faixa['titulo'] ?? $etapa['usuario']) . ' · ' . $codigo . ' ' . $etapa['nome'];
                }
                foreach ($opcoesNivel as $codigo => $rotulo):
                    ?>
                    <option value="<?= e($codigo) ?>" <?= $nivelEditar === $codigo ? 'selected' : '' ?>><?= e($rotulo) ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Ordem <input type="number" name="ordem" value="<?= (int) ($editar['ordem'] ?? 0) ?>"></label>
        <button class="botao botao-principal" type="submit">Salvar</button>
    </form>
</section>
<table class="tabela">
    <thead><tr><th>Curso</th><th>Unidade</th><th>Nível</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($lista as $item): ?>
        <tr>
            <td><?= e($item['curso']) ?></td>
            <td><?= e($item['titulo']) ?></td>
            <td><?= e(etiqueta_nivel_completo((string) $item['nivel'])) ?></td>
            <td>
                <a href="unidades.php?editar=<?= (int) $item['id'] ?>">Editar</a>
                <form method="post" style="display:inline" data-confirmar="Excluir unidade?">
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
