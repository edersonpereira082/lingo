<?php
/**
 * Copie este arquivo para config.php e ajuste os dados do banco.
 */
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'lingo');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

define('SITE_NOME', 'Lingo');
define('SITE_TITULO', 'Lingo — aprenda idiomas');
define('ADMIN_USUARIO', 'admin');
define('APP_TIMEZONE', 'America/Sao_Paulo');
define('APP_DEBUG', false);
define('XP_POR_ACERTO', 2);
define('XP_AULA', 10);
define('XP_PLUS_MULT', 2);
define('VIDAS_INICIAIS', 5);
define('META_DIARIA_PADRAO', 20);

// Tutor Lino (opcional). Vazio = respostas só com o vocabulário e as lições.
define('IA_API_KEY', '');
define('IA_API_URL', 'https://api.openai.com/v1/chat/completions');
define('IA_MODELO', 'gpt-4o-mini');

// Login social (opcional). Vazio = só cadastro com e-mail.
// URI de redirecionamento nos dois painéis: .../oauth-retorno.php
define('GOOGLE_CLIENT_ID', '');
define('GOOGLE_CLIENT_SECRET', '');
define('FACEBOOK_APP_ID', '');
define('FACEBOOK_APP_SECRET', '');
