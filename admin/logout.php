<?php
require_once dirname(__DIR__) . '/includes/funcoes.php';
unset($_SESSION['admin']);
header('Location: login.php');
exit;
