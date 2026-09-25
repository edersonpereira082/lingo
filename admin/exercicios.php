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
        $aulaId = (int) ($_POST['aula_id'] ?? 0);
        $tipo = limpar_texto($_POST['tipo'] ?? 'multipla', 30);
        $enunciado = trim((string) ($_POST['enunciado'] ?? ''));
        $dica = limpar_texto($_POST['dica'] ?? '', 255);
        $resposta = trim((string) ($_POST['resposta_correta'] ?? ''));
        $altsTexto = trim((string) ($_POST['alternativas'] ?? ''));
        $ordem = (int) ($_POST['ordem'] ?? 0);
        $alts = null;
        if ($altsTexto !== '') {
            if ($tipo === 'emparelhar') {
                $pares = [];
                foreach (preg_split('/\r\n|\n/', $altsTexto) as $linha) {
                    if (strpos($linha, '=') !== false) {
                        [$a, $b] = array_map('trim', explode('=', $linha, 2));
                        $pares[] = [$a, $b];
                    }
                }
                $alts = json_encode($pares, JSON_UNESCAPED_UNICODE);
                if ($resposta === '') {
                    $resposta = $alts;
                }
            } else {
                $lista = array_values(array_filter(array_map('trim', preg_split('/\r\n|\n/', $altsTexto))));
                $alts = json_encode($lista, JSON_UNESCAPED_UNICODE);
            }
        }
        if ($id) {
            $st = $conexao->prepare('UPDATE exercicios SET aula_id=?, tipo=?, enunciado=?, dica=?, resposta_correta=?, alternativas=?, ordem=? WHERE id=?');
            $st->bind_param('isssssii', $aulaId, $tipo, $enunciado, $dica, $resposta, $alts, $ordem, $id);
        } else {
            $st = $conexao->prepare('INSERT INTO exercicios (aula_id, tipo, enunciado, dica, resposta_correta, alternativas, ordem) VALUES (?,?,?,?,?,?,?)');
            $st->bind_param('isssssi', $aulaId, $tipo, $enunciado, $dica, $resposta, $alts, $ordem);
        }
        $st->execute();
        flash('ok', 'Exercício salvo.');
        redirecionar('exercicios.php?aula=' . $aulaId);
    }
    if ($acao === 'excluir') {
        $aulaId = (int) ($_POST['aula_id'] ?? 0);
        $conexao->query('DELETE FROM exercicios WHERE id = ' . (int) $_POST['id']);
        flash('ok', 'Exercício excluído.');
        redirecionar('exercicios.php?aula=' . $aulaId);
    }
}

$aulaFiltro = (int) ($_GET['aula'] ?? 0);
$aulas = $conexao->query(
    'SELECT a.id, a.titulo, c.nome AS curso FROM aulas a JOIN unidades u ON u.id = a.unidade_id JOIN cursos c ON c.id = u.curso_id ORDER BY c.ordem, a.ordem'
)->fetch_all(MYSQLI_ASSOC);
$editar = !empty($_GET['editar']) ? $conexao->query('SELECT * FROM exercicios WHERE id = ' . (int) $_GET['editar'])->fetch_assoc() : null;
$sql = 'SELECT e.*, a.titulo AS aula FROM exercicios e JOIN aulas a ON a.id = e.aula_id';
if ($aulaFiltro) {
    $sql .= ' WHERE e.aula_id = ' . $aulaFiltro;
}
$sql .= ' ORDER BY e.aula_id, e.ordem, e.id';
$lista = $conexao->query($sql)->fetch_all(MYSQLI_ASSOC);

$altsValor = '';
if ($editar && $editar['alternativas']) {
    $decoded = json_decode($editar['alternativas'], true);
    if (isset($decoded[0]) && is_array($decoded[0])) {
        $altsValor = implode("\n", array_map(static fn ($p) => $p[0] . ' = ' . $p[1], $decoded));
    } elseif (is_array($decoded)) {
        $altsValor = implode("\n", $decoded);
    }
}

$layout = 'admin';
$tituloPagina = 'Exercícios — Admin';
$scriptJs = 'admin.js';
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<h1>Exercícios</h1>
<section class="card" style="margin-bottom:18px">
    <form method="post" class="formulario">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" value="<?= (int) ($editar['id'] ?? 0) ?>">
        <label>Aula
            <select name="aula_id" required>
                <?php foreach ($aulas as $aula): ?>
                    <option value="<?= (int) $aula['id'] ?>" <?= (int) ($editar['aula_id'] ?? $aulaFiltro) === (int) $aula['id'] ? 'selected' : '' ?>>
                        <?= e($aula['curso'] . ' — ' . $aula['titulo']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Tipo
            <select name="tipo" id="tipo-exercicio">
                <?php foreach (['multipla','completar','traducao','verdadeiro_falso','emparelhar','ordem'] as $tipo): ?>
                    <option value="<?= $tipo ?>" <?= ($editar['tipo'] ?? '') === $tipo ? 'selected' : '' ?>><?= $tipo ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Enunciado <textarea name="enunciado" rows="3" required><?= e($editar['enunciado'] ?? '') ?></textarea></label>
        <label>Dica <input name="dica" value="<?= e($editar['dica'] ?? '') ?>"></label>
        <label>Resposta correta (use | para aceitar várias)
            <input name="resposta_correta" value="<?= e($editar['resposta_correta'] ?? '') ?>">
        </label>
        <label data-tipo="todos">Alternativas (uma por linha). Emparelhar: esquerda = direita
            <textarea name="alternativas" rows="5"><?= e($altsValor) ?></textarea>
        </label>
        <label>Ordem <input type="number" name="ordem" value="<?= (int) ($editar['ordem'] ?? 0) ?>"></label>
        <button class="botao botao-principal" type="submit">Salvar</button>
    </form>
</section>
<table class="tabela">
    <thead><tr><th>Aula</th><th>Tipo</th><th>Enunciado</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($lista as $item): ?>
        <tr>
            <td><?= e($item['aula']) ?></td>
            <td><?= e($item['tipo']) ?></td>
            <td><?= e(mb_substr($item['enunciado'], 0, 70)) ?></td>
            <td>
                <a href="exercicios.php?editar=<?= (int) $item['id'] ?>&aula=<?= (int) $item['aula_id'] ?>">Editar</a>
                <form method="post" style="display:inline" data-confirmar="Excluir exercício?">
                    <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                    <input type="hidden" name="acao" value="excluir">
                    <input type="hidden" name="id" value="<?= (int) $item['id'] ?>">
                    <input type="hidden" name="aula_id" value="<?= (int) $item['aula_id'] ?>">
                    <button class="botao botao-perigo botao-pequeno" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
