<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/funcoes.php';
require_once dirname(__DIR__) . '/includes/db.php';

$admin = exigir_admin();
$conexao = db();
garantir_assinatura($conexao);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && csrf_valido($_POST['csrf'] ?? null)) {
    $acao = $_POST['acao'] ?? '';
    if ($acao === 'conceder') {
        $email = mb_strtolower(limpar_texto($_POST['email'] ?? '', 150));
        $codigo = limpar_texto($_POST['plano'] ?? 'bronze', 40);
        $plano = plano_por_codigo($conexao, $codigo);
        $st = $conexao->prepare('SELECT id, email FROM usuarios WHERE email = ? LIMIT 1');
        $st->bind_param('s', $email);
        $st->execute();
        $aluno = $st->get_result()->fetch_assoc();
        if (!$aluno || !$plano) {
            flash('erro', 'Aluno ou plano não encontrado.');
        } else {
            ativar_assinatura($conexao, (int) $aluno['id'], $plano, 'cortesia', 'admin-' . $admin['usuario']);
            registrar_log($conexao, $admin['usuario'], 'plus_cortesia', $aluno['email'] . '/' . $plano['codigo']);
            flash('ok', 'Plano concedido para ' . $aluno['email'] . '.');
        }
    } elseif ($acao === 'cancelar') {
        $id = (int) ($_POST['usuario_id'] ?? 0);
        if ($id && cancelar_assinatura($conexao, $id)) {
            flash('ok', 'Assinatura cancelada.');
        } else {
            flash('erro', 'Não foi possível cancelar.');
        }
    }
    redirecionar('assinaturas.php');
}

$ativas = (int) ($conexao->query("SELECT COUNT(*) n FROM assinaturas WHERE status = 'ativa' AND (expira_em IS NULL OR expira_em >= NOW())")->fetch_assoc()['n'] ?? 0);
$receita = (int) ($conexao->query("SELECT COALESCE(SUM(valor_centavos),0) n FROM pagamentos WHERE status = 'pago'")->fetch_assoc()['n'] ?? 0);
$lista = $conexao->query(
    "SELECT a.*, u.nome, u.email, p.nome AS plano_nome, p.codigo AS plano_codigo
     FROM assinaturas a
     JOIN usuarios u ON u.id = a.usuario_id
     JOIN planos p ON p.id = a.plano_id
     ORDER BY a.criado_em DESC
     LIMIT 80"
)->fetch_all(MYSQLI_ASSOC);
$planos = planos_ativos($conexao);

$layout = 'admin';
$tituloPagina = 'Assinaturas — Admin';
require dirname(__DIR__) . '/includes/cabecalho.php';
?>
<p class="olho">Assinaturas</p>
<h1>Planos e assinaturas</h1>
<div class="stats">
    <article class="stat"><span>Ativas</span><strong><?= $ativas ?></strong></article>
    <article class="stat"><span>Receita demo</span><strong><?= e(formatar_brl($receita)) ?></strong></article>
</div>

<section class="card card-estatico">
    <h2>Conceder plano</h2>
    <form method="post" class="formulario formulario-inline">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <input type="hidden" name="acao" value="conceder">
        <label>E-mail do aluno
            <input type="email" name="email" required placeholder="aluno@email.com">
        </label>
        <label>Plano
            <select name="plano">
                <?php foreach ($planos as $plano): ?>
                    <option value="<?= e($plano['codigo']) ?>"><?= e($plano['nome']) ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <button class="botao botao-principal" type="submit">Ativar</button>
    </form>
</section>

<table class="tabela">
    <thead>
        <tr>
            <th>Aluno</th>
            <th>Plano</th>
            <th>Status</th>
            <th>Método</th>
            <th>Expira</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($lista as $item): ?>
        <tr>
            <td><?= e($item['nome']) ?><br><small><?= e($item['email']) ?></small></td>
            <td><?= e($item['plano_nome']) ?></td>
            <td><?= e($item['status']) ?></td>
            <td><?= e($item['metodo'] ?: '—') ?></td>
            <td><?= $item['expira_em'] ? e(date('d/m/Y', strtotime($item['expira_em']))) : '—' ?></td>
            <td>
                <?php if ($item['status'] === 'ativa'): ?>
                <form method="post">
                    <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                    <input type="hidden" name="acao" value="cancelar">
                    <input type="hidden" name="usuario_id" value="<?= (int) $item['usuario_id'] ?>">
                    <button class="botao botao-claro botao-pequeno" type="submit">Cancelar</button>
                </form>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php if (!$lista): ?>
        <tr><td colspan="6">Nenhuma assinatura ainda.</td></tr>
    <?php endif; ?>
    </tbody>
</table>
<?php require dirname(__DIR__) . '/includes/rodape.php'; ?>
