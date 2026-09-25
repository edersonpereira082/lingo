<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aulaId = (int) ($_GET['id'] ?? 0);
$aula = $conexao->query(
    'SELECT a.*, u.titulo AS unidade, u.descricao AS situacao, u.nivel, c.codigo, c.nome AS curso, c.id AS curso_id
     FROM aulas a
     JOIN unidades u ON u.id = a.unidade_id
     JOIN cursos c ON c.id = u.curso_id
     WHERE a.id = ' . $aulaId
)->fetch_assoc();

if (!$aula) {
    flash('erro', 'Aula não encontrada.');
    redirecionar('painel.php');
}

if (!aula_desbloqueada($conexao, (int) $aluno['id'], $aulaId)) {
    $ja = $conexao->prepare('SELECT concluida FROM progresso_aulas WHERE usuario_id = ? AND aula_id = ?');
    $ja->bind_param('ii', $aluno['id'], $aulaId);
    $ja->execute();
    $prog = $ja->get_result()->fetch_assoc();
    if (!$prog || !(int) $prog['concluida']) {
        flash('erro', 'Esta lição não está na sua matrícula. Ajuste o nível em Idiomas ou conclua a aula anterior.');
        redirecionar('painel.php');
    }
}

$exercicios = $conexao->query(
    'SELECT id, tipo, enunciado, dica, alternativas, resposta_correta FROM exercicios WHERE aula_id = ' . $aulaId . ' ORDER BY ordem, id'
)->fetch_all(MYSQLI_ASSOC);

foreach ($exercicios as &$ex) {
    $ex['alternativas'] = $ex['alternativas'] ? json_decode($ex['alternativas'], true) : [];
    $ex = preparar_exercicio_aula($ex);
    $ex['audio'] = frase_audio_exercicio($ex);
    unset($ex['resposta_correta']);
    if ($ex['tipo'] === 'emparelhar' && is_array($ex['alternativas'])) {
        $esq = array_column($ex['alternativas'], 0);
        $dir = array_column($ex['alternativas'], 1);
        shuffle($esq);
        shuffle($dir);
        $ex['esquerda'] = $esq;
        $ex['direita'] = $dir;
        unset($ex['alternativas']);
    } elseif ($ex['tipo'] === 'ordem' && is_array($ex['alternativas'])) {
        shuffle($ex['alternativas']);
    } elseif ($ex['tipo'] === 'multipla' && is_array($ex['alternativas'])) {
        shuffle($ex['alternativas']);
    }
}
unset($ex);

$vidas = vidas_do_aluno($conexao, (int) $aluno['id']);
$ilimitado = $vidas >= 99;
$payload = [
    'id' => (int) $aula['id'],
    'titulo' => $aula['titulo'],
    'unidade' => $aula['unidade'],
    'nivel' => etiqueta_nivel_completo((string) ($aula['nivel'] ?? 'A1')),
    'teoria' => (string) ($aula['teoria'] ?? ''),
    'resumo' => (string) ($aula['resumo'] ?? ''),
    'situacao' => (string) ($aula['situacao'] ?? ''),
    'xp' => (int) $aula['xp_recompensa'],
    'idioma' => idioma_fala($aula['codigo']),
    'curso' => (string) ($aula['curso'] ?? ''),
    'vidas' => $vidas,
    'plus' => $ilimitado,
    'csrf' => csrf_token(),
    'exercicios' => $exercicios,
];

$layout = 'aula';
$tituloPagina = $aula['titulo'] . ' — Lingo';
$scriptJs = 'aula.js';
require __DIR__ . '/includes/cabecalho.php';
?>
<div class="aula-shell" id="aula-app" data-payload="<?= e(json_encode($payload, JSON_UNESCAPED_UNICODE)) ?>">
    <div class="aula-topo">
        <a class="aula-fechar" href="painel.php" id="aula-sair" aria-label="Sair da lição">×</a>
        <div class="aula-progresso">
            <div class="barra" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-label="Progresso da lição" id="barra-aula-caixa">
                <span id="barra-aula" style="width:0%"></span>
            </div>
            <span class="aula-passo" id="aula-passo">Introdução</span>
        </div>
        <div class="vidas" id="vidas" aria-live="polite"></div>
    </div>
    <div id="area-pergunta" hidden></div>
    <div class="aula-rodape" id="aula-rodape" hidden>
        <button class="botao botao-claro" type="button" id="btn-pular" title="Pular esta pergunta">Pular</button>
        <p class="aula-atalhos">Enter confirma · 1 a 4 escolhe</p>
        <button class="botao botao-principal" type="button" id="btn-check" disabled>Verificar</button>
    </div>
    <div class="aula-feedback" id="aula-feedback" hidden role="status" aria-live="polite">
        <div>
            <strong id="fb-titulo"></strong>
            <p id="fb-texto"></p>
        </div>
        <button class="botao botao-principal" type="button" id="btn-continuar">Continuar</button>
    </div>
</div>
<?php require __DIR__ . '/includes/rodape.php'; ?>
