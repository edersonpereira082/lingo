<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

exigir_admin();
$conexao = db();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && csrf_valido($_POST['csrf'] ?? null)) {
    $id = (int) ($_POST['id'] ?? 0);
    if (($_POST['acao'] ?? '') === 'toggle') {
        $conexao->query('UPDATE usuarios SET ativo = 1 - ativo WHERE id = ' . $id);
        flash('ok', 'Status do aluno atualizado.');
    }
    redirecionar('usuarios.php');
}

$lista = $conexao->query(
    'SELECT u.*, c.nome AS curso FROM usuarios u LEFT JOIN cursos c ON c.id = u.curso_atual_id ORDER BY u.xp DESC, u.nome'
)->fetch_all(MYSQLI_ASSOC);
$layout = 'admin';
$tituloPagina = 'Alunos — Admin';
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<h1>Alunos</h1>
<table class="tabela">
    <thead><tr><th>Nome</th><th>E-mail</th><th>Conta</th><th>XP</th><th>Ofensiva</th><th>Curso</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($lista as $item): ?>
        <?php
        $vias = [];
        if (!empty($item['google_id'])) {
            $vias[] = 'Google';
        }
        if (!empty($item['facebook_id'])) {
            $vias[] = 'Facebook';
        }
        if (conta_tem_senha($item['senha'] ?? null)) {
            $vias[] = 'E-mail';
        }
        ?>
        <tr>
            <td><?= e($item['nome']) ?></td>
            <td><?= e($item['email']) ?></td>
            <td><?= e($vias ? implode(' · ', $vias) : 'E-mail') ?></td>
            <td><?= (int) $item['xp'] ?></td>
            <td><?= (int) $item['ofensiva'] ?></td>
            <td><?= e($item['curso'] ?? '—') ?></td>
            <td>
                <?= (int) $item['ativo'] ? 'Ativo' : 'Inativo' ?>
                <form method="post" style="display:inline">
                    <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                    <input type="hidden" name="acao" value="toggle">
                    <input type="hidden" name="id" value="<?= (int) $item['id'] ?>">
                    <button class="botao botao-claro botao-pequeno" type="submit"><?= (int) $item['ativo'] ? 'Desativar' : 'Ativar' ?></button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
