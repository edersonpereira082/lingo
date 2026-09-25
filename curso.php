<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;
$cursoId = (int) ($_GET['id'] ?? $_POST['curso_id'] ?? 0);
$curso = $cursoId
    ? $conexao->query('SELECT * FROM cursos WHERE id = ' . $cursoId . ' AND ativo = 1')->fetch_assoc()
    : null;

if (!$curso) {
    flash('erro', 'Curso inválido.');
    redirecionar('cursos.php');
}

$matricula = matricula_do_curso($conexao, (int) $aluno['id'], $cursoId);
$jaInscrito = false;
$stJa = $conexao->prepare('SELECT id FROM inscricoes WHERE usuario_id = ? AND curso_id = ? LIMIT 1');
$stJa->bind_param('ii', $aluno['id'], $cursoId);
$stJa->execute();
$jaInscrito = (bool) $stJa->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        flash('erro', 'Sessão expirada.');
        redirecionar('curso.php?id=' . $cursoId);
    }
    $caminho = limpar_texto((string) ($_POST['caminho'] ?? 'completa_a1'), 20);
    $nivelEscolhido = codigo_cefr((string) ($_POST['nivel'] ?? 'A1'));
    if ($caminho === 'nivel') {
        $modo = 'nivel';
        $nivel = $nivelEscolhido;
    } elseif ($caminho === 'completa') {
        $modo = 'completa';
        $nivel = $nivelEscolhido;
    } else {
        $modo = 'completa';
        $nivel = 'A1';
    }
    salvar_matricula($conexao, (int) $aluno['id'], $cursoId, $nivel, $modo);
    $aluno = recarregar_aluno($conexao) ?? $aluno;
    $faixa = chave_faixa($nivel);
    if ($modo === 'nivel') {
        flash('ok', 'Matrícula em ' . $curso['nome'] . ' — só o nível ' . etiqueta_etapa($nivel) . '.');
        redirecionar('painel.php?faixa=' . rawurlencode($faixa) . '&nivel=' . rawurlencode($nivel));
    }
    if ($nivel === 'A1') {
        flash('ok', 'Você vai estudar ' . $curso['nome'] . ' desde o A1.');
        redirecionar('painel.php?faixa=' . rawurlencode($faixa));
    }
    flash('ok', 'Trilha de ' . $curso['nome'] . ' a partir de ' . etiqueta_etapa($nivel) . '.');
    redirecionar('painel.php?faixa=' . rawurlencode($faixa));
}

$caminhoAtual = 'completa_a1';
if ($jaInscrito && $matricula['modo_trilha'] === 'nivel') {
    $caminhoAtual = 'nivel';
} elseif ($jaInscrito && $matricula['nivel_inicio'] !== 'A1') {
    $caminhoAtual = 'completa';
}

$layout = 'aluno';
$tituloPagina = $curso['nome'] . ' — matrícula — Lingo';
require __DIR__ . '/includes/cabecalho.php';
?>
<p class="olho">Matrícula</p>
<h1><?= html_bandeira($curso['codigo']) ?> <?= e($curso['nome']) ?></h1>
<p class="intro">Escolha se quer a trilha inteira desde o A1 ou se matricula em um nível QECR. Você pode mudar depois.</p>
<?= html_pills_niveis() ?>

<form method="post" class="formulario matricula-form">
    <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
    <input type="hidden" name="curso_id" value="<?= (int) $curso['id'] ?>">

    <label class="matricula-opcao">
        <input type="radio" name="caminho" value="completa_a1" <?= $caminhoAtual === 'completa_a1' ? 'checked' : '' ?>>
        <span>
            <strong>Começar do A1</strong>
            <small>Trilha completa, uma lição após a outra, até o C2.</small>
        </span>
    </label>

    <label class="matricula-opcao">
        <input type="radio" name="caminho" value="completa" <?= $caminhoAtual === 'completa' ? 'checked' : '' ?>>
        <span>
            <strong>Começar neste nível</strong>
            <small>Libera este nível agora. Os anteriores ficam abertos para revisão.</small>
        </span>
    </label>

    <label class="matricula-opcao">
        <input type="radio" name="caminho" value="nivel" <?= $caminhoAtual === 'nivel' ? 'checked' : '' ?>>
        <span>
            <strong>Matricular só neste nível</strong>
            <small>Estuda apenas o nível escolhido, separado da trilha inteira.</small>
        </span>
    </label>

    <label>Nível QECR
        <select name="nivel">
            <?php foreach (niveis_cefr() as $codigo => $rotulo): ?>
                <option value="<?= e($codigo) ?>" <?= $matricula['nivel_inicio'] === $codigo ? 'selected' : '' ?>><?= e($rotulo) ?></option>
            <?php endforeach; ?>
        </select>
    </label>

    <div class="acoes">
        <button class="botao botao-principal" type="submit"><?= $jaInscrito ? 'Atualizar matrícula' : 'Confirmar matrícula' ?></button>
        <a class="botao botao-claro" href="cursos.php">Voltar aos idiomas</a>
    </div>
</form>
<?php require __DIR__ . '/includes/rodape.php'; ?>
