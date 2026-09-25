<?php
require_once __DIR__ . '/includes/funcoes.php';

$_SESSION = [];
if (ini_get('session.use_cookies')) {
    $p = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
}
session_destroy();

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
flash('ok', 'Você saiu da conta.');
redirecionar('login.php');
