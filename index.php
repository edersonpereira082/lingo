<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

if (usuario_logado()) {
    redirecionar('painel.php');
}

$conexao = tentar_db();
$cursos = [];
if ($conexao) {
    $cursos = $conexao->query('SELECT * FROM cursos WHERE ativo = 1 ORDER BY ordem, nome')->fetch_all(MYSQLI_ASSOC);
}

$layout = 'publico';
$tituloPagina = 'Lingo — aprenda idiomas com método e personalidade';
require __DIR__ . '/includes/cabecalho.php';
?>
<section class="hero">
    <div class="hero-mascote">
        <img class="mascote" src="assets/img/mascote.svg?v=5" alt="Lino, o papagaio brasileiro do Lingo">
    </div>
    <div>
        <p class="olho">Plataforma de idiomas</p>
        <h1>Um método claro para falar de verdade.</h1>
        <p class="intro">Lições curtas, áudio no idioma de estudo e uma trilha que só avança quando você conclui. Comece grátis — um plano vale em todos os idiomas.</p>
        <div class="hero-acoes">
            <a class="botao botao-principal" href="cadastro.php">Começar agora</a>
            <a class="botao botao-claro" href="planos.php">Ver planos</a>
        </div>
        <ul class="hero-provas">
            <li><strong>5</strong> idiomas</li>
            <li><strong>A1 a C2</strong></li>
            <li><strong>PIX</strong> e cartão</li>
        </ul>
        <div class="hero-idiomas">
            <?php foreach ($cursos as $curso): ?>
                <span class="pill pill-idioma"><?= html_bandeira($curso['codigo']) ?> <?= e($curso['nome']) ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="secao" id="idiomas">
    <p class="olho secao-olho">Catálogo</p>
    <h2>Escolha o idioma e entre na trilha</h2>
    <p class="secao-lead">Inglês, espanhol, francês, italiano e alemão no QECR: Básico (A1–A2), Independente (B1–B2) e Proficiente (C1–C2).</p>
    <div class="grade">
        <?php foreach ($cursos as $curso): ?>
            <a class="idioma-card" href="cadastro.php">
                <?= html_bandeira($curso['codigo']) ?>
                <h3><?= e($curso['nome']) ?></h3>
                <p><?= e($curso['descricao']) ?></p>
                <?= html_pills_niveis() ?>
                <span class="card-link">Começar este idioma</span>
            </a>
        <?php endforeach; ?>
        <?php if (!$cursos): ?>
            <div class="card card-estatico">
                <p>O conteúdo ainda não foi instalado. Abra <a href="install.php">install.php</a>.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="secao" id="niveis">
    <p class="olho secao-olho">QECR</p>
    <h2>Do básico ao proficiente</h2>
    <p class="secao-lead">Três tipos de usuário, seis etapas: A1–A2, B1–B2 e C1–C2 — o mesmo recorte de um curso profissional.</p>
    <div class="grade grade-niveis">
        <?php foreach (catalogo_faixas() as $faixa): ?>
            <article class="card card-estatico">
                <p class="olho"><?= e($faixa['titulo']) ?></p>
                <h3><?= e($faixa['subtitulo']) ?></h3>
                <p><?= e($faixa['descricao']) ?></p>
                <?php foreach ($faixa['niveis'] as $codigo):
                    $etapa = catalogo_etapas()[$codigo] ?? null;
                    if (!$etapa) {
                        continue;
                    }
                    ?>
                    <?= html_detalhe_etapa($etapa) ?>
                <?php endforeach; ?>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="secao" id="como">
    <p class="olho secao-olho">Método</p>
    <h2>Como o Lingo funciona</h2>
    <div class="passos">
        <article class="passo">
            <span>01</span>
            <h3>Estude 10 minutos</h3>
            <p>Exercícios de ouvir, traduzir e montar frase — com o sotaque certo em cada idioma.</p>
        </article>
        <article class="passo">
            <span>02</span>
            <h3>Ganhe XP e ofensiva</h3>
            <p>Cada aula conta. Missões do dia e ligas da semana mantêm o hábito sem enrolação.</p>
        </article>
        <article class="passo">
            <span>03</span>
            <h3>Um plano, todos os idiomas</h3>
            <p>Bronze, Prata, Ouro ou Diamante: a assinatura vale em inglês, espanhol, francês, italiano e alemão.</p>
        </article>
    </div>
</section>

<section class="faixa-plus">
    <div>
        <p class="olho">Planos</p>
        <h2>Uma assinatura para todos os idiomas</h2>
        <p>A partir de R$ 9,99. PIX ou cartão. Cancele quando quiser.</p>
    </div>
    <a class="botao botao-principal" href="planos.php">Ver planos</a>
</section>
<?php require __DIR__ . '/includes/rodape.php'; ?>
