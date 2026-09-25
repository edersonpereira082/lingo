<?php

if (!defined('GOOGLE_CLIENT_ID')) {
    define('GOOGLE_CLIENT_ID', '');
}
if (!defined('GOOGLE_CLIENT_SECRET')) {
    define('GOOGLE_CLIENT_SECRET', '');
}
if (!defined('FACEBOOK_APP_ID')) {
    define('FACEBOOK_APP_ID', '');
}
if (!defined('FACEBOOK_APP_SECRET')) {
    define('FACEBOOK_APP_SECRET', '');
}

function oauth_provedores(): array
{
    return [
        'google' => [
            'nome' => 'Google',
            'id' => GOOGLE_CLIENT_ID,
            'secreto' => GOOGLE_CLIENT_SECRET,
        ],
        'facebook' => [
            'nome' => 'Facebook',
            'id' => FACEBOOK_APP_ID,
            'secreto' => FACEBOOK_APP_SECRET,
        ],
    ];
}

function oauth_provedor_valido(string $provedor): string
{
    $provedor = strtolower(trim($provedor));

    return isset(oauth_provedores()[$provedor]) ? $provedor : '';
}

function oauth_configurado(string $provedor): bool
{
    $dados = oauth_provedores()[$provedor] ?? null;

    return $dados && trim((string) $dados['id']) !== '' && trim((string) $dados['secreto']) !== '';
}

function oauth_url_retorno(): string
{
    return url_absoluta('oauth-retorno.php');
}

function oauth_rotulo_conta(?array $usuario): string
{
    $usuario = $usuario ?: [];
    $partes = [];
    if (!empty($usuario['google_id'])) {
        $partes[] = 'Google';
    }
    if (!empty($usuario['facebook_id'])) {
        $partes[] = 'Facebook';
    }
    if (conta_tem_senha($usuario['senha'] ?? null) || isset($usuario['tem_senha']) && $usuario['tem_senha']) {
        $partes[] = 'e-mail';
    }

    return $partes ? implode(' e ', $partes) : 'e-mail';
}

function html_botoes_oauth(string $contexto = 'entrar'): void
{
    $texto = $contexto === 'criar' ? 'Cadastrar' : 'Continuar';
    ?>
    <div class="auth-social">
        <a class="botao botao-oauth botao-google" href="oauth.php?provedor=google">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.4h6.5c-.3 1.5-1.2 2.8-2.5 3.6v3h4c2.4-2.2 3.5-5.4 3.5-8.7z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-4-3c-1.1.8-2.5 1.2-3.9 1.2-3 0-5.6-2-6.5-4.8H1.4v3.1C3.4 21.3 7.4 24 12 24z"/><path fill="#FBBC05" d="M5.5 14.5c-.2-.7-.4-1.4-.4-2.1s.1-1.4.4-2.1V7.2H1.4C.5 8.9 0 10.4 0 12.4s.5 3.5 1.4 5.2l4.1-3.1z"/><path fill="#EA4335" d="M12 4.8c1.7 0 3.3.6 4.5 1.8l3.4-3.4C17.9 1.2 15.2 0 12 0 7.4 0 3.4 2.7 1.4 7.2l4.1 3.1C6.4 7.5 9 4.8 12 4.8z"/></svg>
            <?= e($texto) ?> com Google
        </a>
        <a class="botao botao-oauth botao-facebook" href="oauth.php?provedor=facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M24 12.07C24 5.41 18.63 0 12 0S0 5.41 0 12.07C0 18.1 4.39 23.09 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.7 4.54-4.7 1.31 0 2.69.24 2.69.24v2.97h-1.52c-1.5 0-1.96.93-1.96 1.89v2.26h3.34l-.53 3.49h-2.81V24C19.61 23.09 24 18.1 24 12.07z"/></svg>
            <?= e($texto) ?> com Facebook
        </a>
    </div>
    <p class="auth-dividir" role="separator"><span>ou com e-mail</span></p>
    <?php
}

function oauth_http(string $url, array $opcoes = []): string
{
    $metodo = strtoupper((string) ($opcoes['metodo'] ?? 'GET'));
    $campos = $opcoes['campos'] ?? null;
    $cabecalhos = $opcoes['cabecalhos'] ?? [];
    $corpo = '';
    $codigo = 0;

    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        $opts = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_USERAGENT => 'LingoAuth/1.0',
        ];
        if ($metodo === 'POST') {
            $opts[CURLOPT_POST] = true;
            if (is_array($campos)) {
                $opts[CURLOPT_POSTFIELDS] = http_build_query($campos);
            }
        } elseif (is_array($campos) && $campos) {
            $url .= (str_contains($url, '?') ? '&' : '?') . http_build_query($campos);
            curl_setopt($ch, CURLOPT_URL, $url);
        }
        if ($cabecalhos) {
            $opts[CURLOPT_HTTPHEADER] = $cabecalhos;
        }
        curl_setopt_array($ch, $opts);
        $corpo = (string) curl_exec($ch);
        $codigo = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    } else {
        $headerStr = '';
        foreach ($cabecalhos as $linha) {
            $headerStr .= $linha . "\r\n";
        }
        $ctx = stream_context_create([
            'http' => [
                'method' => $metodo,
                'header' => $headerStr . "User-Agent: LingoAuth/1.0\r\n",
                'content' => $metodo === 'POST' && is_array($campos) ? http_build_query($campos) : '',
                'timeout' => 20,
                'ignore_errors' => true,
            ],
        ]);
        if ($metodo === 'GET' && is_array($campos) && $campos) {
            $url .= (str_contains($url, '?') ? '&' : '?') . http_build_query($campos);
        }
        $corpo = (string) @file_get_contents($url, false, $ctx);
        if (!empty($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $m)) {
            $codigo = (int) $m[1];
        }
    }

    if ($corpo === '' || $codigo >= 400) {
        throw new RuntimeException('Não foi possível falar com o serviço de login.');
    }

    return $corpo;
}

function oauth_json(string $url, array $opcoes = []): array
{
    $bruto = oauth_http($url, $opcoes);
    $dados = json_decode($bruto, true);

    return is_array($dados) ? $dados : [];
}

function oauth_iniciar(string $provedor): void
{
    $provedor = oauth_provedor_valido($provedor);
    if ($provedor === '') {
        flash('erro', 'Provedor de login inválido.');
        redirecionar('login.php');
    }
    if (!oauth_configurado($provedor)) {
        $nome = oauth_provedores()[$provedor]['nome'];
        flash('erro', 'O login com ' . $nome . ' ainda não foi configurado neste servidor. Use o cadastro com e-mail.');
        redirecionar('login.php');
    }

    $estado = bin2hex(random_bytes(16));
    $_SESSION['oauth_estado'] = $estado;
    $_SESSION['oauth_provedor'] = $provedor;
    $retorno = oauth_url_retorno();

    if ($provedor === 'google') {
        $url = 'https://accounts.google.com/o/oauth2/v2/auth?' . http_build_query([
            'client_id' => GOOGLE_CLIENT_ID,
            'redirect_uri' => $retorno,
            'response_type' => 'code',
            'scope' => 'openid email profile',
            'state' => $estado,
            'prompt' => 'select_account',
            'access_type' => 'online',
        ]);
        redirecionar($url);
    }

    $url = 'https://www.facebook.com/v21.0/dialog/oauth?' . http_build_query([
        'client_id' => FACEBOOK_APP_ID,
        'redirect_uri' => $retorno,
        'state' => $estado,
        'scope' => 'email,public_profile',
        'response_type' => 'code',
    ]);
    redirecionar($url);
}

function oauth_perfil_google(string $codigo): array
{
    $token = oauth_json('https://oauth2.googleapis.com/token', [
        'metodo' => 'POST',
        'campos' => [
            'code' => $codigo,
            'client_id' => GOOGLE_CLIENT_ID,
            'client_secret' => GOOGLE_CLIENT_SECRET,
            'redirect_uri' => oauth_url_retorno(),
            'grant_type' => 'authorization_code',
        ],
    ]);
    $acesso = (string) ($token['access_token'] ?? '');
    if ($acesso === '') {
        throw new RuntimeException('O Google não devolveu o acesso.');
    }
    $info = oauth_json('https://openidconnect.googleapis.com/v1/userinfo', [
        'cabecalhos' => ['Authorization: Bearer ' . $acesso],
    ]);

    return [
        'id' => (string) ($info['sub'] ?? ''),
        'nome' => (string) ($info['name'] ?? ''),
        'email' => (string) ($info['email'] ?? ''),
        'foto' => (string) ($info['picture'] ?? ''),
    ];
}

function oauth_perfil_facebook(string $codigo): array
{
    $token = oauth_json('https://graph.facebook.com/v21.0/oauth/access_token', [
        'campos' => [
            'client_id' => FACEBOOK_APP_ID,
            'client_secret' => FACEBOOK_APP_SECRET,
            'redirect_uri' => oauth_url_retorno(),
            'code' => $codigo,
        ],
    ]);
    $acesso = (string) ($token['access_token'] ?? '');
    if ($acesso === '') {
        throw new RuntimeException('O Facebook não devolveu o acesso.');
    }
    $info = oauth_json('https://graph.facebook.com/v21.0/me', [
        'campos' => [
            'fields' => 'id,name,email,picture.width(400).height(400)',
            'access_token' => $acesso,
        ],
    ]);

    return [
        'id' => (string) ($info['id'] ?? ''),
        'nome' => (string) ($info['name'] ?? ''),
        'email' => (string) ($info['email'] ?? ''),
        'foto' => (string) ($info['picture']['data']['url'] ?? ''),
    ];
}

function oauth_salvar_foto_social(int $usuarioId, string $url): ?string
{
    $url = trim($url);
    if ($url === '' || !preg_match('#^https://#i', $url)) {
        return null;
    }
    try {
        $bin = oauth_http($url);
        if ($bin === '' || strlen($bin) > 2 * 1024 * 1024) {
            return $url;
        }
        $tmp = tempnam(sys_get_temp_dir(), 'lingo');
        if ($tmp === false) {
            return $url;
        }
        file_put_contents($tmp, $bin);
        $mime = '';
        if (class_exists('finfo')) {
            $mime = (string) (new finfo(FILEINFO_MIME_TYPE))->file($tmp);
        } else {
            $info = @getimagesize($tmp);
            $mime = (string) ($info['mime'] ?? '');
        }
        $origem = lingo_abrir_imagem($tmp, $mime);
        @unlink($tmp);
        if (!$origem || !function_exists('imagecreatetruecolor') || !function_exists('imagejpeg')) {
            return $url;
        }
        $largura = imagesx($origem);
        $altura = imagesy($origem);
        $lado = min($largura, $altura);
        $sx = (int) (($largura - $lado) / 2);
        $sy = (int) (($altura - $lado) / 2);
        $saida = imagecreatetruecolor(400, 400);
        imagecopyresampled($saida, $origem, 0, 0, $sx, $sy, 400, 400, $lado, $lado);
        $nome = $usuarioId . '-social.jpg';
        imagejpeg($saida, pasta_fotos_alunos() . '/' . $nome, 86);
        imagedestroy($origem);
        imagedestroy($saida);

        return $nome;
    } catch (Throwable $e) {
        return strlen($url) > 12 ? $url : null;
    }
}

function oauth_buscar_usuario(mysqli $conexao, string $provedor, string $uid, string $email): ?array
{
    $campo = $provedor === 'facebook' ? 'facebook_id' : 'google_id';
    if ($uid !== '') {
        $st = $conexao->prepare("SELECT * FROM usuarios WHERE {$campo} = ? LIMIT 1");
        $st->bind_param('s', $uid);
        $st->execute();
        $aluno = $st->get_result()->fetch_assoc();
        if ($aluno) {
            return $aluno;
        }
    }
    if ($email !== '') {
        $st = $conexao->prepare('SELECT * FROM usuarios WHERE email = ? LIMIT 1');
        $st->bind_param('s', $email);
        $st->execute();
        return $st->get_result()->fetch_assoc() ?: null;
    }

    return null;
}

function oauth_entrar(mysqli $conexao, string $provedor, array $perfil): array
{
    $uid = limpar_texto($perfil['id'] ?? '', 80);
    $email = mb_strtolower(limpar_texto($perfil['email'] ?? '', 150));
    $nome = mb_strtoupper(limpar_texto($perfil['nome'] ?? '', 120), 'UTF-8');
    $fotoRemota = limpar_texto($perfil['foto'] ?? '', 1000);
    $campo = $provedor === 'facebook' ? 'facebook_id' : 'google_id';

    if ($uid === '') {
        throw new RuntimeException('Não recebemos a identificação da conta.');
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new RuntimeException('O ' . oauth_provedores()[$provedor]['nome'] . ' não enviou o e-mail. Libere o e-mail na conta ou cadastre-se direto na plataforma.');
    }
    if (mb_strlen($nome) < 2) {
        $nome = mb_strtoupper(explode('@', $email)[0], 'UTF-8');
    }

    $aluno = oauth_buscar_usuario($conexao, $provedor, $uid, $email);
    $novo = $aluno === null;

    if ($novo) {
        $meta = META_DIARIA_PADRAO;
        $avatar = 'lino-classico';
        $modo = $fotoRemota !== '' ? 'social' : 'avatar';
        $ins = $conexao->prepare(
            "INSERT INTO usuarios (nome, email, senha, meta_diaria, avatar, {$campo}, foto_social, foto_modo) VALUES (?, ?, NULL, ?, ?, ?, ?, ?)"
        );
        $ins->bind_param('ssissss', $nome, $email, $meta, $avatar, $uid, $fotoRemota, $modo);
        $ins->execute();
        $id = (int) $ins->insert_id;
        $social = null;
        if ($fotoRemota !== '') {
            try {
                $social = oauth_salvar_foto_social($id, $fotoRemota);
            } catch (Throwable $e) {
                $social = $fotoRemota;
            }
        }
        if ($social && $social !== $fotoRemota) {
            $up = $conexao->prepare('UPDATE usuarios SET foto_social = ? WHERE id = ?');
            $up->bind_param('si', $social, $id);
            $up->execute();
        }
        $st = $conexao->prepare('SELECT * FROM usuarios WHERE id = ? LIMIT 1');
        $st->bind_param('i', $id);
        $st->execute();
        $aluno = $st->get_result()->fetch_assoc();
        registrar_log($conexao, $email, 'cadastro', $provedor);
    } else {
        if ((int) ($aluno['ativo'] ?? 1) !== 1) {
            throw new RuntimeException('Esta conta está desativada.');
        }
        $id = (int) $aluno['id'];
        $atualUid = (string) ($aluno[$campo] ?? '');
        $fotoSocial = (string) ($aluno['foto_social'] ?? '');
        if ($atualUid === '') {
            $up = $conexao->prepare("UPDATE usuarios SET {$campo} = ? WHERE id = ?");
            $up->bind_param('si', $uid, $id);
            $up->execute();
        }
        if ($fotoSocial === '' && $fotoRemota !== '') {
            $salvo = oauth_salvar_foto_social($id, $fotoRemota) ?: $fotoRemota;
            $up = $conexao->prepare('UPDATE usuarios SET foto_social = ? WHERE id = ?');
            $up->bind_param('si', $salvo, $id);
            $up->execute();
        }
        $st = $conexao->prepare('SELECT * FROM usuarios WHERE id = ? LIMIT 1');
        $st->bind_param('i', $id);
        $st->execute();
        $aluno = $st->get_result()->fetch_assoc();
        registrar_log($conexao, $email, 'login', $provedor);
    }

    if (!$aluno) {
        throw new RuntimeException('Não foi possível abrir a conta.');
    }

    iniciar_sessao_aluno($aluno);

    return ['aluno' => $aluno, 'novo' => $novo];
}

function oauth_concluir(): void
{
    $erroGet = limpar_texto($_GET['error'] ?? $_GET['error_description'] ?? '', 180);
    if ($erroGet !== '') {
        unset($_SESSION['oauth_estado'], $_SESSION['oauth_provedor']);
        flash('erro', 'Login social cancelado.');
        redirecionar('login.php');
    }

    $estado = (string) ($_GET['state'] ?? '');
    $codigo = (string) ($_GET['code'] ?? '');
    $esperado = (string) ($_SESSION['oauth_estado'] ?? '');
    $provedor = oauth_provedor_valido((string) ($_SESSION['oauth_provedor'] ?? ''));
    unset($_SESSION['oauth_estado'], $_SESSION['oauth_provedor']);

    if ($provedor === '' || $esperado === '' || $estado === '' || !hash_equals($esperado, $estado) || $codigo === '') {
        flash('erro', 'Sessão de login social expirada. Tente de novo.');
        redirecionar('login.php');
    }

    try {
        $perfil = $provedor === 'facebook' ? oauth_perfil_facebook($codigo) : oauth_perfil_google($codigo);
        $conexao = db();
        $resultado = oauth_entrar($conexao, $provedor, $perfil);
        $aluno = $resultado['aluno'];
        if ($resultado['novo']) {
            flash('ok', 'Conta criada. Você pode trocar a foto ou o avatar quando quiser, no perfil.');
            redirecionar($aluno['curso_atual_id'] ? 'painel.php' : 'cursos.php');
        }
        redirecionar($aluno['curso_atual_id'] ? 'painel.php' : 'cursos.php');
    } catch (Throwable $e) {
        flash('erro', $e->getMessage());
        redirecionar('login.php');
    }
}
