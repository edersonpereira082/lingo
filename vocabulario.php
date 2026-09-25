<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;

$cursoId = (int) ($_GET['curso'] ?? $aluno['curso_atual_id'] ?? 0);
$curso = $cursoId ? $conexao->query('SELECT * FROM cursos WHERE id = ' . $cursoId)->fetch_assoc() : null;
if (!$curso) {
    $curso = $conexao->query('SELECT * FROM cursos WHERE ativo = 1 ORDER BY ordem LIMIT 1')->fetch_assoc();
}

$palavras = [];
if ($curso) {
    $palavras = $conexao->query(
        'SELECT * FROM palavras WHERE curso_id = ' . (int) $curso['id'] . ' ORDER BY id'
    )->fetch_all(MYSQLI_ASSOC);
}

$faixaFiltro = chave_faixa_pedido(limpar_texto((string) ($_GET['faixa'] ?? 'todos'), 20));
$faixas = catalogo_faixas();
if ($faixaFiltro !== 'todos' && !isset($faixas[$faixaFiltro])) {
    $faixaFiltro = 'todos';
}
if ($faixaFiltro !== 'todos') {
    $palavras = array_values(array_filter(
        $palavras,
        static fn (array $item): bool => chave_faixa((string) ($item['nivel'] ?? 'A1')) === $faixaFiltro
    ));
}
foreach ($palavras as &$palavra) {
    $palavra['faixa'] = etiqueta_nivel_completo((string) ($palavra['nivel'] ?? 'A1'));
}
unset($palavra);

$cursos = $conexao->query('SELECT id, nome, bandeira FROM cursos WHERE ativo = 1 ORDER BY ordem')->fetch_all(MYSQLI_ASSOC);
$payload = [
    'idioma' => $curso ? idioma_fala($curso['codigo']) : 'en-US',
    'palavras' => $palavras,
];

$layout = 'aluno';
$tituloPagina = 'Praticar — Lingo';
$scriptJs = 'vocabulario.js';
require __DIR__ . '/includes/cabecalho.php';
?>
<p class="olho">Praticar</p>
<h1>Palavras do idioma</h1>
<p class="intro">O botão Ouvir fala só o termo no idioma que você está estudando. Filtre por básico, intermediário ou avançado.</p>
<form method="get" class="formulario formulario-vocab" style="max-width:520px;margin-bottom:16px">
    <label>Idioma
        <select name="curso" onchange="this.form.submit()">
            <?php foreach ($cursos as $item): ?>
                <option value="<?= (int) $item['id'] ?>" <?= $curso && (int) $item['id'] === (int) $curso['id'] ? 'selected' : '' ?>>
                    <?= e($item['bandeira'] . ' ' . $item['nome']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>Nível
        <select name="faixa" onchange="this.form.submit()">
            <option value="todos" <?= $faixaFiltro === 'todos' ? 'selected' : '' ?>>Todos os níveis</option>
            <?php foreach ($faixas as $chave => $faixa): ?>
                <option value="<?= e($chave) ?>" <?= $faixaFiltro === $chave ? 'selected' : '' ?>><?= e($faixa['nome']) ?></option>
            <?php endforeach; ?>
        </select>
    </label>
</form>

<?php if (!$palavras): ?>
    <div class="card"><p>Ainda não há palavras neste curso.</p></div>
<?php else: ?>
    <div id="vocab-app" data-payload="<?= e(json_encode($payload, JSON_UNESCAPED_UNICODE)) ?>">
        <div class="flashcard" id="card">
            <div class="flashcard-face" id="face">
                <small id="faixa-vocab">Toque para virar</small>
                <strong id="termo"></strong>
                <p id="exemplo"></p>
            </div>
        </div>
        <div class="acoes" style="justify-content:center">
            <button class="botao botao-claro" type="button" id="ouvir">Ouvir</button>
            <button class="botao botao-claro" type="button" id="anterior">Anterior</button>
            <button class="botao botao-principal" type="button" id="proximo">Próxima</button>
        </div>
        <p class="intro" id="contador" style="text-align:center"></p>
    </div>
<?php endif; ?>
<?php require __DIR__ . '/includes/rodape.php'; ?>
