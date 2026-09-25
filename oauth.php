<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/oauth.php';

if (usuario_logado()) {
    redirecionar('painel.php');
}

oauth_iniciar((string) ($_GET['provedor'] ?? ''));
