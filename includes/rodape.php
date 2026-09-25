<?php
$layout = $layout ?? 'publico';
$scriptJs = $scriptJs ?? null;
$ehAdmin = strpos(str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? ''), '/admin/') !== false;
$baseAssets = $baseAssets ?? ($ehAdmin ? '../assets' : 'assets');
$scriptAtual = basename($_SERVER['SCRIPT_NAME'] ?? '');
?>
<?php if ($layout === 'publico'): ?>
</main>
<footer class="rodape">
    <div class="rodape-interno">
        <div>
            <strong>Lingo</strong>
            <p>Aprenda idiomas com o papagaio Lino.</p>
        </div>
        <nav class="rodape-nav">
            <a href="<?= e($ehAdmin ? '../planos.php' : 'planos.php') ?>">Planos</a>
            <a href="<?= e($ehAdmin ? '../index.php#como' : 'index.php#como') ?>">Como funciona</a>
            <a href="<?= e($ehAdmin ? 'login.php' : 'admin/login.php') ?>">Admin</a>
        </nav>
    </div>
</footer>
<?php elseif ($layout === 'aula'): ?>
</main>
<?php elseif ($layout === 'aluno'): ?>
        </main>
        <nav class="menu-mobile">
            <a href="painel.php" class="<?= in_array($scriptAtual, ['painel.php', 'curso.php'], true) ? 'ativo' : '' ?>"><?= nav_icone('aprender') ?><span>Aprender</span></a>
            <a href="ranking.php" class="<?= $scriptAtual === 'ranking.php' ? 'ativo' : '' ?>"><?= nav_icone('ligas') ?><span>Ligas</span></a>
            <a href="missoes.php" class="<?= $scriptAtual === 'missoes.php' ? 'ativo' : '' ?>"><?= nav_icone('missoes') ?><span>Missões</span></a>
            <a href="conversa.php" class="<?= in_array($scriptAtual, ['conversa.php', 'conversa-privada.php', 'tutor.php'], true) ? 'ativo' : '' ?>"><?= nav_icone('falar') ?><span>Falar</span></a>
            <a href="vocabulario.php" class="<?= $scriptAtual === 'vocabulario.php' ? 'ativo' : '' ?>"><?= nav_icone('praticar') ?><span>Praticar</span></a>
            <a href="perfil.php" class="<?= $scriptAtual === 'perfil.php' ? 'ativo' : '' ?>"><?= nav_icone('perfil') ?><span>Perfil</span></a>
        </nav>
    </div>
</div>
<?php else: ?>
        </main>
    </div>
</div>
<?php endif; ?>
<script src="<?= e($baseAssets) ?>/js/app.js?v=23"></script>
<?php if ($scriptJs): ?>
<script src="<?= e($baseAssets) ?>/js/<?= e($scriptJs) ?>?v=32"></script>
<?php endif; ?>
</body>
</html>
