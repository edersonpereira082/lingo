<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        flash('erro', 'Sessão expirada.');
        redirecionar('cursos.php');
    }
    $cursoId = (int) ($_POST['curso_id'] ?? 0);
    $curso = $conexao->query('SELECT * FROM cursos WHERE id = ' . $cursoId . ' AND ativo = 1')->fetch_assoc();
    if (!$curso) {
        flash('erro', 'Curso inválido.');
        redirecionar('cursos.php');
    }
    $stMat = $conexao->prepare('SELECT id FROM inscricoes WHERE usuario_id = ? AND curso_id = ? LIMIT 1');
    $stMat->bind_param('ii', $aluno['id'], $cursoId);
    $stMat->execute();
    $jaMatriculado = (bool) $stMat->get_result()->fetch_assoc();
    if (!$jaMatriculado) {
        salvar_matricula($conexao, (int) $aluno['id'], $cursoId, 'A1', 'completa');
    } else {
        $up = $conexao->prepare('UPDATE usuarios SET curso_atual_id = ? WHERE id = ?');
        $up->bind_param('ii', $cursoId, $aluno['id']);
        $up->execute();
    }
    recarregar_aluno($conexao);
    flash('ok', 'Você está estudando ' . $curso['nome'] . '.');
    redirecionar('painel.php');
}

$cursos = $conexao->query('SELECT * FROM cursos WHERE ativo = 1 ORDER BY ordem, nome')->fetch_all(MYSQLI_ASSOC);
$inscritos = [];
$st = $conexao->prepare('SELECT curso_id, xp, nivel_inicio, modo_trilha FROM inscricoes WHERE usuario_id = ?');
$st->bind_param('i', $aluno['id']);
$st->execute();
foreach ($st->get_result()->fetch_all(MYSQLI_ASSOC) as $linha) {
    $inscritos[(int) $linha['curso_id']] = $linha;
}

$layout = 'aluno';
$tituloPagina = 'Cursos — Lingo';
require __DIR__ . '/includes/cabecalho.php';
?>
<p class="olho">Catálogo</p>
<h1>Escolha o idioma</h1>
<?php
$assinaturaCursos = assinatura_atual($conexao, (int) $aluno['id']);
$idiomasLista = lista_idiomas_planos($conexao);
?>
<p class="intro"><?php if ($assinaturaCursos): ?>
    Seu plano <strong><?= e($assinaturaCursos['plano_nome']) ?></strong> vale em <?= e($idiomasLista) ?>. Troque quando quiser.
<?php else: ?>
    Todos os idiomas estão liberados. A assinatura (a partir de R$ 9,99) vale na conta inteira — não precisa pagar de novo para cada curso.
<?php endif; ?></p>
<div class="grade">
    <?php foreach ($cursos as $curso): ?>
        <article class="card">
            <?= html_bandeira($curso['codigo']) ?>
            <h3><?= e($curso['nome']) ?></h3>
            <p><?= e($curso['descricao']) ?></p>
            <?= html_pills_niveis() ?>
            <?php if (isset($inscritos[(int) $curso['id']])):
                $matCurso = $inscritos[(int) $curso['id']];
                $nivelMat = codigo_cefr((string) ($matCurso['nivel_inicio'] ?? 'A1'));
                $modoMat = modo_trilha_valido($matCurso['modo_trilha'] ?? 'completa');
                ?>
                <p class="pill"><?= (int) $matCurso['xp'] ?> XP neste curso</p>
                <p class="intro"><?= $modoMat === 'nivel'
                    ? 'Matrícula só em ' . e(etiqueta_etapa($nivelMat))
                    : ($nivelMat === 'A1' ? 'Trilha desde o A1' : 'Trilha a partir de ' . e(etiqueta_etapa($nivelMat))) ?></p>
            <?php endif; ?>
            <div class="acoes">
                <form method="post">
                    <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                    <input type="hidden" name="curso_id" value="<?= (int) $curso['id'] ?>">
                    <button class="botao botao-principal" type="submit">Continuar</button>
                </form>
                <a class="botao botao-claro" href="curso.php?id=<?= (int) $curso['id'] ?>">Ajustar nível</a>
            </div>
        </article>
    <?php endforeach; ?>
</div>
<?php require __DIR__ . '/includes/rodape.php'; ?>
