<?php
$config = dirname(__DIR__) . '/config/config.php';
if (is_file($config)) {
    require_once $config;
}

if (session_status() !== PHP_SESSION_ACTIVE) {
    $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => $https,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

date_default_timezone_set(defined('APP_TIMEZONE') ? APP_TIMEZONE : 'America/Sao_Paulo');

if (defined('APP_DEBUG') && APP_DEBUG) {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(E_ALL);
    ini_set('log_errors', '1');
}

if (!headers_sent()) {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}

function e(?string $valor): string
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf'];
}

function csrf_valido(?string $token): bool
{
    return is_string($token) && isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token);
}

function redirecionar(string $caminho): void
{
    header('Location: ' . $caminho);
    exit;
}

function limpar_texto(?string $valor, int $limite = 255): string
{
    $texto = trim((string) $valor);
    $texto = preg_replace('/\s+/u', ' ', $texto) ?? $texto;

    if (function_exists('mb_substr')) {
        return mb_substr($texto, 0, $limite, 'UTF-8');
    }

    return substr($texto, 0, $limite);
}

function flash(string $tipo, string $mensagem): void
{
    $_SESSION['flash'] = ['tipo' => $tipo, 'mensagem' => $mensagem];
}

function pegar_flash(): ?array
{
    if (empty($_SESSION['flash'])) {
        return null;
    }
    $flash = $_SESSION['flash'];
    unset($_SESSION['flash']);

    return $flash;
}

function ip_cliente(): string
{
    return limpar_texto($_SERVER['REMOTE_ADDR'] ?? '', 45);
}

function registrar_log(mysqli $conexao, string $usuario, string $acao, ?string $detalhe = null): void
{
    try {
        $stmt = $conexao->prepare('INSERT INTO logs (criado_em, usuario, acao, detalhe, ip) VALUES (NOW(), ?, ?, ?, ?)');
        $ip = ip_cliente();
        $stmt->bind_param('ssss', $usuario, $acao, $detalhe, $ip);
        $stmt->execute();
    } catch (Throwable $e) {
        // Log opcional.
    }
}

function usuario_logado(): ?array
{
    return $_SESSION['aluno'] ?? null;
}

function admin_logado(): ?array
{
    return $_SESSION['admin'] ?? null;
}

function exigir_login(): array
{
    $usuario = usuario_logado();
    if (!$usuario) {
        flash('erro', 'Entre na sua conta para continuar.');
        redirecionar('login.php');
    }

    return $usuario;
}

function exigir_admin(): array
{
    $admin = admin_logado();
    if (!$admin) {
        flash('erro', 'Faça login na área administrativa.');
        $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
        redirecionar(strpos($script, '/admin/') !== false ? 'login.php' : 'admin/login.php');
    }

    return $admin;
}

function recarregar_aluno(mysqli $conexao): ?array
{
    $atual = usuario_logado();
    if (!$atual) {
        return null;
    }
    $stmt = $conexao->prepare('SELECT * FROM usuarios WHERE id = ? AND ativo = 1 LIMIT 1');
    $stmt->bind_param('i', $atual['id']);
    $stmt->execute();
    $aluno = $stmt->get_result()->fetch_assoc();
    if ($aluno) {
        $aluno['tem_senha'] = conta_tem_senha($aluno['senha'] ?? null);
        unset($aluno['senha']);
        $_SESSION['aluno'] = $aluno;
    }

    return $aluno ?: $atual;
}

function iniciar_sessao_aluno(array $aluno): void
{
    $aluno['tem_senha'] = conta_tem_senha($aluno['senha'] ?? null);
    unset($aluno['senha']);
    $_SESSION['aluno'] = $aluno;
}

function conta_tem_senha(?string $hash): bool
{
    $hash = (string) $hash;

    return $hash !== '' && password_get_info($hash)['algo'] !== 0;
}

function nivel_por_xp(int $xp): int
{
    return (int) floor(sqrt($xp / 20)) + 1;
}

function cor_unidade(int $ordem): string
{
    $cores = ['coral', 'tinta', 'teal', 'ouro'];

    return $cores[($ordem - 1) % 4] ?? 'verde';
}

function catalogo_etapas(): array
{
    return [
        'A1' => [
            'codigo' => 'A1',
            'nome' => 'Iniciante',
            'usuario' => 'basico',
            'lead' => 'No nível A1, você dá os primeiros passos na nova língua.',
            'descricao' => 'Primeiros passos: compreende e usa expressões cotidianas muito simples, apresenta-se e fala de dados pessoais — se a outra pessoa falar devagar e com clareza.',
            'faz' => 'Compreende e usa expressões cotidianas muito simples.',
            'comunicacao' => 'Consegue se apresentar, dizer onde mora e fazer perguntas básicas sobre dados pessoais.',
            'interacao' => 'Fala com pessoas se elas falarem devagar e com clareza.',
            'horas' => 'Cerca de 90 a 100 horas de estudo dedicado.',
        ],
        'A2' => [
            'codigo' => 'A2',
            'nome' => 'Básico / Elementar',
            'usuario' => 'basico',
            'lead' => 'No nível A2, você amplia sua capacidade de lidar com o cotidiano.',
            'descricao' => 'Cotidiano: entende frases isoladas sobre compras, família, trabalho e rotina; descreve origem, ambiente e necessidades imediatas em tarefas habituais.',
            'faz' => 'Entende frases isoladas e expressões frequentes sobre temas diretos (compras, família, trabalho e rotina).',
            'comunicacao' => 'Descreve de forma simples sua origem, seu ambiente e suas necessidades imediatas.',
            'interacao' => 'Troca informações simples sobre tarefas habituais e rotineiras.',
            'horas' => 'Cerca de 200 horas acumuladas de estudo.',
        ],
        'B1' => [
            'codigo' => 'B1',
            'nome' => 'Intermediário',
            'usuario' => 'independente',
            'descricao' => 'Limiar da autonomia: viajar com independência, justificar opiniões, falar de planos, sentimentos e hipóteses simples (se eu tiver tempo…). Passados, futuro, passiva inicial e conectores.',
        ],
        'B2' => [
            'codigo' => 'B2',
            'nome' => 'Intermediário Superior',
            'usuario' => 'independente',
            'descricao' => 'Fluência efetiva: conversar com nativos sem grande esforço, argumentar, hipotetizar o passado, discurso indireto, registro formal/informal e temas abstratos (ambiente, tecnologia, ética).',
        ],
        'C1' => [
            'codigo' => 'C1',
            'nome' => 'Operativo Eficaz',
            'usuario' => 'proficiente',
            'descricao' => 'Eficácia profissional e acadêmica: vocabulário abstrato, ironia, artigos e relatórios coesos, e fala de improviso sobre temas difíceis — com precisão, não só fluência.',
        ],
        'C2' => [
            'codigo' => 'C2',
            'nome' => 'Domínio Pleno',
            'usuario' => 'proficiente',
            'descricao' => 'Domínio quase nativo: registros jurídico e coloquial, textos densos, reconstruir argumentos de várias fontes, variações regionais e eliminar vícios que denunciam o estrangeiro.',
        ],
    ];
}

function catalogo_faixas(): array
{
    return [
        'basico' => [
            'chave' => 'basico',
            'nome' => 'Básico',
            'titulo' => 'Usuário Básico (A)',
            'subtitulo' => 'A1 Iniciante · A2 Básico / Elementar',
            'niveis' => ['A1', 'A2'],
            'descricao' => 'Primeiros passos e o cotidiano: apresentação, dados pessoais e tarefas habituais.',
        ],
        'independente' => [
            'chave' => 'independente',
            'nome' => 'Independente',
            'titulo' => 'Usuário Independente (B)',
            'subtitulo' => 'B1 Intermediário · B2 Intermediário Superior',
            'niveis' => ['B1', 'B2'],
            'descricao' => 'Viagens, trabalho, lazer, opiniões e conversa autônoma com nativos.',
        ],
        'proficiente' => [
            'chave' => 'proficiente',
            'nome' => 'Proficiente',
            'titulo' => 'Usuário Proficiente (C)',
            'subtitulo' => 'C1 Operativo Eficaz · C2 Domínio Pleno',
            'niveis' => ['C1', 'C2'],
            'descricao' => 'Fluência espontânea, textos técnicos e precisão em qualquer situação complexa.',
        ],
    ];
}

function codigo_cefr(string $nivel): string
{
    $n = mb_strtoupper(trim($nivel), 'UTF-8');
    if (preg_match('/^C2/', $n)) {
        return 'C2';
    }
    if (preg_match('/^C1/', $n)) {
        return 'C1';
    }
    if (preg_match('/^A4|^B2/', $n)) {
        return 'B2';
    }
    if (preg_match('/^A3|^B1/', $n)) {
        return 'B1';
    }
    if (preg_match('/^A2/', $n)) {
        return 'A2';
    }

    return 'A1';
}

function chave_faixa(string $nivel): string
{
    return catalogo_etapas()[codigo_cefr($nivel)]['usuario'] ?? 'basico';
}

function chave_faixa_pedido(string $pedido): string
{
    $pedido = trim($pedido);
    $alias = [
        'intermediario' => 'independente',
        'avancado' => 'proficiente',
    ];

    return $alias[$pedido] ?? $pedido;
}

function etiqueta_faixa(string $nivel): string
{
    return catalogo_faixas()[chave_faixa($nivel)]['nome'] ?? 'Básico';
}

function etiqueta_etapa(string $nivel): string
{
    $etapa = catalogo_etapas()[codigo_cefr($nivel)] ?? catalogo_etapas()['A1'];

    return $etapa['codigo'] . ' ' . $etapa['nome'];
}

function etiqueta_nivel_completo(string $nivel): string
{
    $faixa = catalogo_faixas()[chave_faixa($nivel)] ?? catalogo_faixas()['basico'];

    return $faixa['nome'] . ' · ' . etiqueta_etapa($nivel);
}

function html_detalhe_etapa(array $etapa, bool $comTitulo = true): string
{
    $lead = (string) ($etapa['lead'] ?? $etapa['descricao'] ?? '');
    $html = '';
    if ($comTitulo) {
        $html .= '<p class="etapa-lead"><strong>'
            . e((string) ($etapa['codigo'] ?? '') . ' · ' . (string) ($etapa['nome'] ?? ''))
            . '.</strong> ' . e($lead) . '</p>';
    } elseif ($lead !== '') {
        $html .= '<p class="etapa-lead">' . e($lead) . '</p>';
    }

    $itens = [
        'O que você faz' => (string) ($etapa['faz'] ?? ''),
        'Comunicação' => (string) ($etapa['comunicacao'] ?? ''),
        'Interação' => (string) ($etapa['interacao'] ?? ''),
        'Tempo estimado' => (string) ($etapa['horas'] ?? ''),
    ];
    $lista = '';
    foreach ($itens as $rotulo => $texto) {
        if ($texto === '') {
            continue;
        }
        $lista .= '<li><strong>' . e($rotulo) . ':</strong> ' . e($texto) . '</li>';
    }
    if ($lista !== '') {
        $html .= '<ul class="etapa-lista">' . $lista . '</ul>';
    }

    return $html;
}

function html_pills_niveis(): string
{
    $itens = '';
    foreach (catalogo_faixas() as $faixa) {
        $itens .= '<li>' . e($faixa['nome']) . '</li>';
    }

    return '<ul class="pills-niveis">' . $itens . '</ul>';
}

function niveis_cefr(): array
{
    $lista = [];
    foreach (catalogo_etapas() as $codigo => $etapa) {
        $lista[$codigo] = $codigo . ' · ' . $etapa['nome'];
    }

    return $lista;
}

function ordem_cefr(string $nivel): int
{
    $mapa = ['A1' => 1, 'A2' => 2, 'B1' => 3, 'B2' => 4, 'C1' => 5, 'C2' => 6];

    return $mapa[codigo_cefr($nivel)] ?? 1;
}

function codigo_cefr_opcional(?string $nivel): string
{
    $n = strtoupper(trim((string) $nivel));

    return isset(niveis_cefr()[$n]) ? $n : '';
}

function modo_trilha_valido(?string $modo): string
{
    return $modo === 'nivel' ? 'nivel' : 'completa';
}

function html_bandeira(string $codigo): string
{
    $codigo = strtolower($codigo);

    return '<span class="flag flag-' . e($codigo) . '" title="' . e(strtoupper($codigo)) . '"></span>';
}

function svg_icone(string $tipo): string
{
    $icones = [
        'estrela' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.6 14.7 9l6.8.6-5.2 4.5 1.6 6.6L12 17.2 6.1 20.7 7.7 14.1 2.5 9.6 9.3 9z"/></svg>',
        'check' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.3 16.3 4.8 11.8l1.7-1.7 2.8 2.8 8.2-8.2 1.7 1.7z"/></svg>',
        'cadeado' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="6" y="10.5" width="12" height="9.5" rx="2"/><path d="M8.4 10.5V8.2a3.6 3.6 0 0 1 7.2 0v2.3" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round"/></svg>',
        'bau' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 9.5h18v8.2A2.3 2.3 0 0 1 18.7 20H5.3A2.3 2.3 0 0 1 3 17.7V9.5z"/><path d="M2.5 6.8h19l1 2.7H1.5l1-2.7z"/><rect x="10.2" y="10.2" width="3.6" height="3.2" rx="0.6"/></svg>',
        'livro' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4.5A2.5 2.5 0 0 1 7.5 2H21v16.5H7.8c-1.5 0-2.8 1-2.8 2.2V4.5z"/><path d="M5 19.2c.4-1 1.5-1.7 2.8-1.7H21" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>',
        'gema' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10l5 7-10 12L2 10z"/><path d="M2 10h20M7 3l5 7 5-7" fill="none" stroke="#fff" stroke-width="1.4"/></svg>',
        'fogo' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.4c1.6 2.2 2.4 4 2.4 6.1 0 1.4-.4 2.6-1.1 3.5.9-.3 1.7-1.1 2.2-2.2 1.4 2 2.1 3.7 2.1 5.3A5.6 5.6 0 0 1 12 20.6 5.6 5.6 0 0 1 6.4 15c0-3.2 2.1-5.8 4.2-8.2.4 1.6 1.2 2.7 2.2 3.3C12.2 7.8 12 5.4 12 2.4z"/></svg>',
        'vida' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20.4 10.4 19C5.4 14.4 2.2 11.5 2.2 8A4.4 4.4 0 0 1 12 5.4 4.4 4.4 0 0 1 21.8 8c0 3.5-3.2 6.4-8.2 11z"/></svg>',
        'ouvir' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 9.2h3.4L12 5.5v13l-4.6-3.7H4z"/><path d="M16 8.4a4 4 0 0 1 0 7.2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M18.5 6.2a7 7 0 0 1 0 11.6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>',
    ];

    return $icones[$tipo] ?? '';
}

function liga_por_xp(int $xp): string
{
    if ($xp >= 400) {
        return 'Esmeralda';
    }
    if ($xp >= 150) {
        return 'Ouro';
    }
    if ($xp >= 50) {
        return 'Prata';
    }

    return 'Bronze';
}

function xp_proximo_nivel(int $nivel): int
{
    return (int) ($nivel * $nivel * 20);
}

function atualizar_ofensiva(mysqli $conexao, array $aluno): void
{
    $hoje = date('Y-m-d');
    $ultimo = $aluno['ultimo_estudo'] ?? null;
    $ofensiva = (int) $aluno['ofensiva'];
    $recorde = (int) $aluno['recorde_ofensiva'];

    if ($ultimo === $hoje) {
        return;
    }

    if ($ultimo === date('Y-m-d', strtotime('-1 day'))) {
        $ofensiva++;
    } else {
        $ofensiva = 1;
    }

    if ($ofensiva > $recorde) {
        $recorde = $ofensiva;
    }

    $stmt = $conexao->prepare('UPDATE usuarios SET ofensiva = ?, recorde_ofensiva = ?, ultimo_estudo = ? WHERE id = ?');
    $stmt->bind_param('iisi', $ofensiva, $recorde, $hoje, $aluno['id']);
    $stmt->execute();
}

function somar_xp(mysqli $conexao, array $aluno, int $xp, ?int $cursoId = null): void
{
    $hoje = date('Y-m-d');
    $xpHoje = (int) $aluno['xp_hoje'];
    if (($aluno['data_xp'] ?? '') !== $hoje) {
        $xpHoje = 0;
    }
    $xpHoje += $xp;
    $total = (int) $aluno['xp'] + $xp;

    $stmt = $conexao->prepare('UPDATE usuarios SET xp = ?, xp_hoje = ?, data_xp = ? WHERE id = ?');
    $stmt->bind_param('iisi', $total, $xpHoje, $hoje, $aluno['id']);
    $stmt->execute();

    if ($cursoId) {
        $up = $conexao->prepare('UPDATE inscricoes SET xp = xp + ? WHERE usuario_id = ? AND curso_id = ?');
        $up->bind_param('iii', $xp, $aluno['id'], $cursoId);
        $up->execute();
    }

    atualizar_ofensiva($conexao, array_merge($aluno, ['ultimo_estudo' => $aluno['ultimo_estudo'] ?? null]));
}

function json_resposta(array $dados, int $codigo = 200): void
{
    http_response_code($codigo);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dados, JSON_UNESCAPED_UNICODE);
    exit;
}

function normalizar_resposta(string $texto): string
{
    $texto = trim(mb_strtolower($texto, 'UTF-8'));
    $mapa = [
        'á' => 'a', 'à' => 'a', 'ã' => 'a', 'â' => 'a', 'ä' => 'a',
        'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
        'í' => 'i', 'ì' => 'i', 'î' => 'i', 'ï' => 'i',
        'ó' => 'o', 'ò' => 'o', 'õ' => 'o', 'ô' => 'o', 'ö' => 'o',
        'ú' => 'u', 'ù' => 'u', 'û' => 'u', 'ü' => 'u',
        'ç' => 'c', 'ñ' => 'n', 'ß' => 'ss',
    ];
    $texto = strtr($texto, $mapa);
    $texto = preg_replace('/[^\p{L}\p{N}\s]/u', '', $texto) ?? $texto;

    return trim(preg_replace('/\s+/u', ' ', $texto) ?? $texto);
}

function respostas_aceitas(?string $gabarito): array
{
    $lista = [];
    foreach (explode('|', (string) $gabarito) as $item) {
        $norm = normalizar_resposta($item);
        if ($norm !== '') {
            $lista[] = $norm;
        }
    }

    return $lista;
}

function resposta_correta(string $enviada, ?string $gabarito): bool
{
    $enviada = normalizar_resposta($enviada);
    if ($enviada === '') {
        return false;
    }

    return in_array($enviada, respostas_aceitas($gabarito), true);
}

function garantir_matricula_nivel(mysqli $conexao): void
{
    static $feito = false;
    if ($feito) {
        return;
    }
    $feito = true;

    try {
        $temInicio = false;
        $temModo = false;
        $cols = $conexao->query('SHOW COLUMNS FROM inscricoes');
        if ($cols) {
            while ($col = $cols->fetch_assoc()) {
                $nome = strtolower((string) $col['Field']);
                if ($nome === 'nivel_inicio') {
                    $temInicio = true;
                }
                if ($nome === 'modo_trilha') {
                    $temModo = true;
                }
            }
        }
        if (!$temInicio) {
            $conexao->query("ALTER TABLE inscricoes ADD nivel_inicio VARCHAR(2) NOT NULL DEFAULT 'A1'");
        }
        if (!$temModo) {
            $conexao->query("ALTER TABLE inscricoes ADD modo_trilha VARCHAR(12) NOT NULL DEFAULT 'completa'");
        }
    } catch (Throwable $e) {
        // Instalação ainda sem tabela.
    }
}

function matricula_padrao(): array
{
    return ['nivel_inicio' => 'A1', 'modo_trilha' => 'completa'];
}

function matricula_do_curso(mysqli $conexao, int $usuarioId, int $cursoId): array
{
    static $cache = [];
    $chave = $usuarioId . ':' . $cursoId;
    if (isset($cache[$chave])) {
        return $cache[$chave];
    }

    garantir_matricula_nivel($conexao);
    $st = $conexao->prepare(
        'SELECT nivel_inicio, modo_trilha FROM inscricoes WHERE usuario_id = ? AND curso_id = ? LIMIT 1'
    );
    $st->bind_param('ii', $usuarioId, $cursoId);
    $st->execute();
    $linha = $st->get_result()->fetch_assoc();
    if (!$linha) {
        return $cache[$chave] = matricula_padrao();
    }

    return $cache[$chave] = [
        'nivel_inicio' => codigo_cefr((string) ($linha['nivel_inicio'] ?? 'A1')),
        'modo_trilha' => modo_trilha_valido($linha['modo_trilha'] ?? 'completa'),
    ];
}

function salvar_matricula(mysqli $conexao, int $usuarioId, int $cursoId, string $nivelInicio, string $modo): void
{
    garantir_matricula_nivel($conexao);
    $nivelInicio = codigo_cefr($nivelInicio);
    $modo = modo_trilha_valido($modo);
    $st = $conexao->prepare(
        'INSERT INTO inscricoes (usuario_id, curso_id, nivel_inicio, modo_trilha)
         VALUES (?, ?, ?, ?)
         ON DUPLICATE KEY UPDATE nivel_inicio = VALUES(nivel_inicio), modo_trilha = VALUES(modo_trilha)'
    );
    $st->bind_param('iiss', $usuarioId, $cursoId, $nivelInicio, $modo);
    $st->execute();
    $up = $conexao->prepare('UPDATE usuarios SET curso_atual_id = ? WHERE id = ?');
    $up->bind_param('ii', $cursoId, $usuarioId);
    $up->execute();
}

function unidade_na_matricula(array $matricula, string $nivelUnidade): bool
{
    $nivel = codigo_cefr($nivelUnidade);
    $inicio = codigo_cefr((string) ($matricula['nivel_inicio'] ?? 'A1'));
    if (($matricula['modo_trilha'] ?? 'completa') === 'nivel') {
        return $nivel === $inicio;
    }

    return true;
}

function aula_na_trilha_principal(array $matricula, string $nivelUnidade): bool
{
    $nivel = codigo_cefr($nivelUnidade);
    $inicio = codigo_cefr((string) ($matricula['nivel_inicio'] ?? 'A1'));
    if (($matricula['modo_trilha'] ?? 'completa') === 'nivel') {
        return $nivel === $inicio;
    }

    return ordem_cefr($nivel) >= ordem_cefr($inicio);
}

function unidade_esta_completa(array $aulas, array $prog): bool
{
    if ($aulas === []) {
        return false;
    }
    foreach ($aulas as $aula) {
        if (empty($prog[(int) $aula['id']]['concluida'])) {
            return false;
        }
    }

    return true;
}

function estados_unidades_trilha(array $unidades, array $aulasPorUnidade, array $prog, array $matricula): array
{
    $estados = [];
    $ultimaFeita = 0;
    $atualOk = false;
    $proximaOk = false;
    foreach ($unidades as $unidade) {
        $id = (int) ($unidade['id'] ?? 0);
        if ($id <= 0) {
            continue;
        }
        if (!unidade_na_matricula($matricula, (string) ($unidade['nivel'] ?? 'A1'))) {
            $estados[$id] = 'fora';
            continue;
        }
        if (!aula_na_trilha_principal($matricula, (string) ($unidade['nivel'] ?? 'A1'))) {
            $estados[$id] = 'revisao';
            continue;
        }
        $completa = unidade_esta_completa($aulasPorUnidade[$id] ?? [], $prog);
        if ($completa) {
            $estados[$id] = 'feita';
            $ultimaFeita = $id;
            continue;
        }
        if (!$atualOk) {
            $estados[$id] = 'atual';
            $atualOk = true;
            continue;
        }
        if (!$proximaOk) {
            $estados[$id] = 'proxima';
            $proximaOk = true;
            continue;
        }
        $estados[$id] = 'oculta';
    }
    foreach ($estados as $id => $estado) {
        if ($estado === 'feita' && $id !== $ultimaFeita) {
            $estados[$id] = 'feita_oculta';
        }
    }

    return $estados;
}

function ids_aulas_trilha(mysqli $conexao, int $cursoId, array $matricula): array
{
    static $cache = [];
    $inicio = codigo_cefr((string) ($matricula['nivel_inicio'] ?? 'A1'));
    $modo = modo_trilha_valido($matricula['modo_trilha'] ?? 'completa');
    $chave = $cursoId . ':' . $modo . ':' . $inicio;
    if (isset($cache[$chave])) {
        return $cache[$chave];
    }

    $linhas = $conexao->query(
        'SELECT a.id, u.nivel FROM aulas a
         JOIN unidades u ON u.id = a.unidade_id
         WHERE u.curso_id = ' . (int) $cursoId . '
         ORDER BY u.ordem, a.ordem, a.id'
    );
    $ids = [];
    if ($linhas) {
        while ($linha = $linhas->fetch_assoc()) {
            if (aula_na_trilha_principal(['nivel_inicio' => $inicio, 'modo_trilha' => $modo], (string) $linha['nivel'])) {
                $ids[] = (int) $linha['id'];
            }
        }
    }
    $cache[$chave] = $ids;

    return $ids;
}

function carregar_aulas_por_unidade(mysqli $conexao, int $cursoId): array
{
    $mapa = [];
    $linhas = $conexao->query(
        'SELECT a.id, a.unidade_id, a.titulo, a.ordem, a.xp_recompensa
         FROM aulas a
         JOIN unidades u ON u.id = a.unidade_id
         WHERE u.curso_id = ' . (int) $cursoId . '
         ORDER BY u.ordem, a.ordem, a.id'
    );
    if ($linhas) {
        while ($aula = $linhas->fetch_assoc()) {
            $mapa[(int) $aula['unidade_id']][] = $aula;
        }
    }

    return $mapa;
}

function aula_esta_livre(int $aulaId, string $nivelAula, array $matricula, array $idsTrilha, array $prog): bool
{
    $nivelAula = codigo_cefr($nivelAula);
    if (!unidade_na_matricula($matricula, $nivelAula)) {
        return false;
    }
    if (!empty($prog[$aulaId]['concluida'])) {
        return true;
    }
    if (
        ($matricula['modo_trilha'] ?? 'completa') === 'completa'
        && ordem_cefr($nivelAula) < ordem_cefr($matricula['nivel_inicio'] ?? 'A1')
    ) {
        return true;
    }
    $pos = array_search($aulaId, $idsTrilha, true);
    if ($pos === false) {
        return false;
    }
    if ($pos === 0) {
        return true;
    }

    return !empty($prog[$idsTrilha[$pos - 1]]['concluida']);
}

function aula_desbloqueada(mysqli $conexao, int $usuarioId, int $aulaId): bool
{
    $aula = $conexao->query(
        'SELECT a.id, a.ordem, a.unidade_id, u.curso_id, u.nivel
         FROM aulas a
         JOIN unidades u ON u.id = a.unidade_id
         WHERE a.id = ' . (int) $aulaId
    )->fetch_assoc();
    if (!$aula) {
        return false;
    }

    $matricula = matricula_do_curso($conexao, $usuarioId, (int) $aula['curso_id']);
    $nivelAula = codigo_cefr((string) $aula['nivel']);
    if (!unidade_na_matricula($matricula, $nivelAula)) {
        return false;
    }

    if (
        ($matricula['modo_trilha'] ?? 'completa') === 'completa'
        && ordem_cefr($nivelAula) < ordem_cefr($matricula['nivel_inicio'])
    ) {
        return true;
    }

    $ids = ids_aulas_trilha($conexao, (int) $aula['curso_id'], $matricula);
    $pos = array_search((int) $aulaId, $ids, true);
    if ($pos === false) {
        return false;
    }
    if ($pos === 0) {
        return true;
    }

    $anterior = $ids[$pos - 1];
    $ok = $conexao->prepare('SELECT concluida FROM progresso_aulas WHERE usuario_id = ? AND aula_id = ? LIMIT 1');
    $ok->bind_param('ii', $usuarioId, $anterior);
    $ok->execute();
    $prog = $ok->get_result()->fetch_assoc();

    return $prog && (int) $prog['concluida'] === 1;
}

function iniciais(string $nome): string
{
    $partes = preg_split('/\s+/', trim($nome)) ?: [];
    $letras = '';
    foreach (array_slice($partes, 0, 2) as $parte) {
        $letras .= mb_strtoupper(mb_substr($parte, 0, 1, 'UTF-8'), 'UTF-8');
    }

    return $letras ?: 'L';
}

function primeiro_nome(string $nome): string
{
    $partes = preg_split('/\s+/u', trim($nome)) ?: [];
    $primeiro = (string) ($partes[0] ?? '');

    return $primeiro !== '' ? $primeiro : 'Aluno';
}

function catalogo_avatares(): array
{
    return [
        'lino-classico' => 'Clássico',
        'lino-coral' => 'Coral',
        'lino-tinta' => 'Tinta',
        'lino-oceano' => 'Oceano',
        'lino-sol' => 'Sol',
        'lino-floresta' => 'Floresta',
        'lino-rosa' => 'Rosa',
        'lino-noite' => 'Noite',
        'lino-oculos' => 'Óculos',
        'lino-chapeu' => 'Chapéu',
        'lino-cachecol' => 'Cachecol',
        'lino-livro' => 'Livro',
        'lino-esporte' => 'Esporte',
        'lino-chef' => 'Chef',
        'lino-sono' => 'Soninho',
        'lino-festa' => 'Festa',
    ];
}

function chave_avatar(?string $chave): string
{
    $chave = preg_replace('/[^a-z0-9\-]/', '', strtolower((string) $chave)) ?: '';
    $lista = catalogo_avatares();

    return isset($lista[$chave]) ? $chave : 'lino-classico';
}

function url_app(string $caminho = ''): string
{
    $caminho = ltrim(str_replace('\\', '/', $caminho), '/');
    $script = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? '/'));
    $dir = dirname($script);
    if (preg_match('#/(admin|api)$#', $dir)) {
        $dir = dirname($dir);
    }
    $base = rtrim(str_replace('\\', '/', $dir), '/');
    if ($base === '.' || $base === '/') {
        $base = '';
    }

    return ($base === '' ? '' : $base) . '/' . $caminho;
}

function url_absoluta(string $caminho = ''): string
{
    $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
    $host = (string) ($_SERVER['HTTP_HOST'] ?? 'localhost');
    $esquema = $https ? 'https' : 'http';

    return $esquema . '://' . $host . url_app($caminho);
}

function url_avatar_lino(?string $chave): string
{
    return url_app('assets/img/avatares/' . chave_avatar($chave) . '.svg');
}

function url_foto_aluno(?string $arquivo): ?string
{
    $arquivo = basename((string) $arquivo);
    if ($arquivo === '' || !preg_match('/^[0-9]+(-social)?\.(jpe?g|png|webp)$/i', $arquivo)) {
        return null;
    }
    $abs = dirname(__DIR__) . '/uploads/alunos/' . $arquivo;
    if (!is_file($abs)) {
        return null;
    }

    return url_app('uploads/alunos/' . $arquivo);
}

function url_foto_social(?array $usuario): ?string
{
    $valor = trim((string) ($usuario['foto_social'] ?? ''));
    if ($valor === '') {
        return null;
    }
    $local = url_foto_aluno($valor);
    if ($local) {
        return $local;
    }
    if (!preg_match('#^https://[^\s]+$#i', $valor)) {
        return null;
    }
    $host = strtolower((string) (parse_url($valor, PHP_URL_HOST) ?? ''));
    $ok = [
        'lh3.googleusercontent.com',
        'lh4.googleusercontent.com',
        'lh5.googleusercontent.com',
        'lh6.googleusercontent.com',
        'googleusercontent.com',
        'graph.facebook.com',
        'platform-lookaside.fbsbx.com',
        'scontent.xx.fbcdn.net',
        'fbcdn.net',
    ];
    foreach ($ok as $permitido) {
        if ($host === $permitido || str_ends_with($host, '.' . $permitido)) {
            return $valor;
        }
    }

    return null;
}

function modo_foto_usuario(?array $usuario): string
{
    $usuario = $usuario ?: [];
    $modo = strtolower(trim((string) ($usuario['foto_modo'] ?? '')));
    if (in_array($modo, ['upload', 'social', 'avatar'], true)) {
        return $modo;
    }
    if (url_foto_aluno($usuario['foto'] ?? '')) {
        return 'upload';
    }
    if (url_foto_social($usuario)) {
        return 'social';
    }

    return 'avatar';
}

function url_avatar_usuario(?array $usuario): string
{
    $usuario = $usuario ?: [];
    $modo = modo_foto_usuario($usuario);
    if ($modo === 'upload') {
        $foto = url_foto_aluno($usuario['foto'] ?? '');
        if ($foto) {
            return $foto;
        }
    }
    if ($modo === 'social') {
        $social = url_foto_social($usuario);
        if ($social) {
            return $social;
        }
    }
    $foto = url_foto_aluno($usuario['foto'] ?? '');
    if ($foto && $modo !== 'avatar') {
        return $foto;
    }

    return url_avatar_lino($usuario['avatar'] ?? 'lino-classico');
}

function html_avatar(?array $usuario, string $classe = 'avatar'): string
{
    $usuario = $usuario ?: [];
    $nome = (string) ($usuario['nome'] ?? 'Aluno');
    $url = url_avatar_usuario($usuario);

    return '<span class="' . e($classe) . '" title="' . e($nome) . '">'
        . '<img src="' . e($url) . '" alt="' . e($nome) . '" referrerpolicy="no-referrer">'
        . '</span>';
}

function garantir_perfil_avatar(mysqli $conexao): void
{
    static $feito = false;
    if ($feito) {
        return;
    }
    $feito = true;

    try {
        $tem = [];
        $cols = $conexao->query('SHOW COLUMNS FROM usuarios');
        if ($cols) {
            while ($col = $cols->fetch_assoc()) {
                $tem[strtolower((string) $col['Field'])] = true;
            }
        }
        if (empty($tem['avatar'])) {
            $conexao->query("ALTER TABLE usuarios ADD avatar VARCHAR(40) NOT NULL DEFAULT 'lino-classico'");
        }
        if (empty($tem['foto'])) {
            $conexao->query('ALTER TABLE usuarios ADD foto VARCHAR(120) NULL DEFAULT NULL');
        }
        if (empty($tem['google_id'])) {
            $conexao->query('ALTER TABLE usuarios ADD google_id VARCHAR(80) NULL DEFAULT NULL');
        }
        if (empty($tem['facebook_id'])) {
            $conexao->query('ALTER TABLE usuarios ADD facebook_id VARCHAR(80) NULL DEFAULT NULL');
        }
        if (empty($tem['foto_social'])) {
            $conexao->query('ALTER TABLE usuarios ADD foto_social VARCHAR(1000) NULL DEFAULT NULL');
        }
        if (empty($tem['foto_modo'])) {
            $conexao->query("ALTER TABLE usuarios ADD foto_modo VARCHAR(16) NOT NULL DEFAULT 'avatar'");
        }
        if (!empty($tem['senha'])) {
            $conexao->query('ALTER TABLE usuarios MODIFY senha VARCHAR(255) NULL');
        }
        try {
            $conexao->query('CREATE UNIQUE INDEX uq_usuarios_google ON usuarios (google_id)');
        } catch (Throwable $e) {
        }
        try {
            $conexao->query('CREATE UNIQUE INDEX uq_usuarios_facebook ON usuarios (facebook_id)');
        } catch (Throwable $e) {
        }
    } catch (Throwable $e) {
        // A tabela ainda pode não existir na instalação.
    }
}

function pasta_fotos_alunos(): string
{
    $dir = dirname(__DIR__) . '/uploads/alunos';
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    $ht = $dir . '/.htaccess';
    if (!is_file($ht)) {
        file_put_contents(
            $ht,
            "Options -Indexes\n<FilesMatch \"\\.(php|phtml|php[0-9]?|phar)$\">\nDeny from all\n</FilesMatch>\n"
        );
    }

    return $dir;
}

function apagar_foto_aluno(?string $arquivo): void
{
    $arquivo = basename((string) $arquivo);
    if ($arquivo === '' || !preg_match('/^[0-9]+\.(jpe?g|png|webp)$/i', $arquivo)) {
        return;
    }
    $path = pasta_fotos_alunos() . '/' . $arquivo;
    if (is_file($path)) {
        @unlink($path);
    }
}

function processar_foto_aluno(array $arquivo, int $usuarioId, ?string $anterior): ?string
{
    $erro = (int) ($arquivo['error'] ?? UPLOAD_ERR_NO_FILE);
    if ($erro === UPLOAD_ERR_NO_FILE || empty($arquivo['tmp_name'])) {
        return null;
    }
    if ($erro !== UPLOAD_ERR_OK || !is_uploaded_file($arquivo['tmp_name'])) {
        throw new RuntimeException('Não foi possível enviar a foto.');
    }
    if ((int) ($arquivo['size'] ?? 0) > 2 * 1024 * 1024) {
        throw new RuntimeException('A foto deve ter no máximo 2 MB.');
    }

    $mime = '';
    if (class_exists('finfo')) {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = (string) $finfo->file($arquivo['tmp_name']);
    } else {
        $info = @getimagesize($arquivo['tmp_name']);
        $mime = (string) ($info['mime'] ?? '');
    }
    $extensoes = [
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/webp' => 'webp',
    ];
    if (!isset($extensoes[$mime])) {
        throw new RuntimeException('Use uma foto JPG, PNG ou WEBP.');
    }
    if (!@getimagesize($arquivo['tmp_name'])) {
        throw new RuntimeException('Arquivo de imagem inválido.');
    }

    $dir = pasta_fotos_alunos();
    $nome = $usuarioId . '.jpg';
    $destino = $dir . '/' . $nome;
    $origem = lingo_abrir_imagem($arquivo['tmp_name'], $mime);

    if ($origem && function_exists('imagecreatetruecolor') && function_exists('imagejpeg')) {
        $largura = imagesx($origem);
        $altura = imagesy($origem);
        $lado = min($largura, $altura);
        $sx = (int) (($largura - $lado) / 2);
        $sy = (int) (($altura - $lado) / 2);
        $saida = imagecreatetruecolor(400, 400);
        imagecopyresampled($saida, $origem, 0, 0, $sx, $sy, 400, 400, $lado, $lado);
        imagejpeg($saida, $destino, 86);
        imagedestroy($origem);
        imagedestroy($saida);
    } else {
        $nome = $usuarioId . '.' . $extensoes[$mime];
        $destino = $dir . '/' . $nome;
        if (!move_uploaded_file($arquivo['tmp_name'], $destino)) {
            throw new RuntimeException('Não foi possível salvar a foto.');
        }
    }

    foreach (glob($dir . '/' . $usuarioId . '.*') ?: [] as $velho) {
        if (basename($velho) !== $nome) {
            @unlink($velho);
        }
    }
    if ($anterior && basename($anterior) !== $nome) {
        apagar_foto_aluno($anterior);
    }

    return $nome;
}

function lingo_abrir_imagem(string $caminho, string $mime)
{
    if (!is_file($caminho)) {
        return null;
    }
    try {
        if ($mime === 'image/jpeg' && function_exists('imagecreatefromjpeg')) {
            return @imagecreatefromjpeg($caminho) ?: null;
        }
        if ($mime === 'image/png' && function_exists('imagecreatefrompng')) {
            return @imagecreatefrompng($caminho) ?: null;
        }
        if ($mime === 'image/webp' && function_exists('imagecreatefromwebp')) {
            return @imagecreatefromwebp($caminho) ?: null;
        }
    } catch (Throwable $e) {
        return null;
    }

    return null;
}

function idioma_fala(string $codigo): string
{
    $mapa = [
        'en' => 'en-US',
        'es' => 'es-ES',
        'fr' => 'fr-FR',
        'it' => 'it-IT',
        'de' => 'de-DE',
        'pt' => 'pt-BR',
    ];

    return $mapa[$codigo] ?? 'en-US';
}

function codigo_tts(string $idioma): string
{
    $idioma = strtolower(str_replace('_', '-', $idioma));
    $mapa = [
        'en' => 'en',
        'en-us' => 'en',
        'en-gb' => 'en-GB',
        'es' => 'es',
        'es-es' => 'es',
        'es-mx' => 'es-MX',
        'fr' => 'fr',
        'fr-fr' => 'fr',
        'it' => 'it',
        'it-it' => 'it',
        'de' => 'de',
        'de-de' => 'de',
        'pt' => 'pt-BR',
        'pt-br' => 'pt-BR',
        'pt-pt' => 'pt-PT',
    ];
    if (isset($mapa[$idioma])) {
        return $mapa[$idioma];
    }
    $curto = explode('-', $idioma)[0] ?: 'en';

    return $mapa[$curto] ?? 'en';
}

function parece_portugues(string $texto): bool
{
    $t = mb_strtolower(trim($texto), 'UTF-8');
    if ($t === '') {
        return false;
    }
    if (preg_match('/[ãõ]/u', $t)) {
        return true;
    }
    if (preg_match('/ção\b|ções\b|ões\b|ães\b/u', $t)) {
        return true;
    }
    if (preg_match('/\b(bom dia|boa tarde|boa noite|de nada|tudo bem|com licen[cç]a|por favor|at[eé] logo|ate logo|eu sou|eu estou|eu tenho|eu gosto|estou bem|meu nome)\b/u', $t)) {
        return true;
    }

    if (preg_match('/^(água|agua|leite|caf[eé]|vinho|p[aã]o|queijo|ma[cç][aã]|arroz|carne|peixe|fruta|sim|n[aã]o|nao|casa|homem|mulher|menino|menina|amigo|amiga)$/u', $t)) {
        return true;
    }

    return (bool) preg_match(
        '/\b(voc[eê]|voce|n[aã]o|nao|obrigad[oa]|desculpa|desculpe|ol[aá]|tchau|\boi\b|água|agua|amanh[aã]|amanha|hoje|ontem|tamb[eé]m|tambem|por que|porque|muito bem|como se diz|o que significa|traduza|tradu[cç][aã]o|complete|preencha|verdadeiro|falso|escolha|op[cç][aã]o|correta|significa|quer dizer|em portugu[eê]s|emparelhe|ou[cç]a|escute)\b/u',
        $t
    );
}

function eh_frase_idioma_estudo(string $texto): bool
{
    $t = trim($texto);
    if ($t === '') {
        return false;
    }
    $baixo = mb_strtolower($t, 'UTF-8');
    if (in_array($baixo, ['verdadeiro', 'falso', 'true', 'false', 'v', 'f'], true)) {
        return false;
    }

    return !parece_portugues($t);
}

function extrair_citacao_audio(string $texto): string
{
    if (preg_match('/["«“„]([^"»”]+)["»”]/u', $texto, $m)) {
        return trim($m[1]);
    }
    if (preg_match("/'([^']+)'/u", $texto, $m)) {
        return trim($m[1]);
    }

    return '';
}

function frase_audio_exercicio(array $ex): string
{
    $tipo = (string) ($ex['tipo'] ?? '');
    $enun = trim((string) ($ex['enunciado'] ?? ''));
    $resp = (string) ($ex['resposta_correta'] ?? '');
    $alts = $ex['alternativas'] ?? [];

    $citado = extrair_citacao_audio($enun);
    if ($citado !== '' && eh_frase_idioma_estudo($citado)) {
        return $citado;
    }

    if (preg_match('/^(Traduza|Complete|Completa|Complète|Complétez|Completi|Listen|Ouça|Escuche|Écoutez|Ascolta|Hören Sie)[:\s]+(.+)$/iu', $enun, $m)) {
        $corpo = trim($m[2]);
        $citadoCorpo = extrair_citacao_audio($corpo);
        if ($citadoCorpo !== '' && eh_frase_idioma_estudo($citadoCorpo)) {
            return $citadoCorpo;
        }
        if ($tipo === 'completar' || preg_match('/_{2,}/', $corpo)) {
            $gab = trim(explode('|', $resp)[0] ?? '');
            if ($gab !== '' && eh_frase_idioma_estudo($gab)) {
                $corpo = preg_replace('/_{2,}/', $gab, $corpo) ?? $corpo;
            } else {
                $corpo = preg_replace('/_{2,}/', '…', $corpo) ?? $corpo;
            }
        }
        $corpo = trim(preg_replace('/\s*\([^)]*\)\s*$/u', '', $corpo) ?? $corpo);
        $corpo = trim(preg_replace('/\s*(Significa|Quer dizer|Em português).*$/iu', '', $corpo) ?? $corpo);
        return eh_frase_idioma_estudo($corpo) ? $corpo : '';
    }

    if ($tipo === 'emparelhar' && is_array($alts)) {
        foreach ($alts as $par) {
            if (!is_array($par)) {
                continue;
            }
            foreach ($par as $lado) {
                if (eh_frase_idioma_estudo((string) $lado)) {
                    return trim((string) $lado);
                }
            }
        }
    }

    return '';
}

function limpar_prefixo_clone_exercicio(string $enunciado): string
{
    $limpo = preg_replace('/^(Prática|Revisão|Mais atividades|Fixação|Pratique)\s*:\s*/iu', '', trim($enunciado));

    return trim((string) ($limpo ?? $enunciado));
}

function enunciado_exercicio_claro(string $tipo, string $enunciado): string
{
    $e = limpar_prefixo_clone_exercicio($enunciado);
    $chave = mb_strtolower(trim($e, " \t.:"), 'UTF-8');
    $mapa = [
        'una' => 'Una cada termo à tradução em português.',
        'monte' => 'Toque nas palavras e monte a frase.',
        'monte a frase' => 'Toque nas palavras e monte a frase.',
        'pergunta correta' => 'Qual pergunta está escrita corretamente?',
        'qual está correta' => 'Qual frase está correta?',
        'qual esta correta' => 'Qual frase está correta?',
        'negativa' => 'Qual é a forma negativa correta?',
        'forma correta' => 'Qual é a forma correta?',
        'afirmativa' => 'Qual é a forma afirmativa correta?',
        'revise a teoria desta aula antes de responder' => 'Com base na teoria, esta afirmação é verdadeira?',
        'traduza a ideia principal da aula' => 'Traduza a ideia principal da aula para o português.',
        'revise' => 'Responda com o que você viu na teoria desta aula.',
    ];
    if (isset($mapa[$chave])) {
        return $mapa[$chave];
    }
    if ($tipo === 'emparelhar' && mb_strlen($e, 'UTF-8') <= 10) {
        return 'Una cada termo à tradução em português.';
    }
    if ($tipo === 'ordem' && mb_strlen($e, 'UTF-8') <= 14) {
        return 'Toque nas palavras e monte a frase.';
    }
    if ($tipo === 'multipla' && preg_match('/^.{2,48}:\s*$/u', $e) && !str_contains($e, '?')) {
        return rtrim($e, " \t:") . ' — escolha a opção correta.';
    }

    return $e !== '' ? $e : 'Responda com o que você viu na teoria.';
}

function etiqueta_tarefa_exercicio(string $tipo): string
{
    $mapa = [
        'multipla' => 'Escolha',
        'verdadeiro_falso' => 'Verdadeiro ou falso',
        'completar' => 'Ouça e complete',
        'traducao' => 'Traduza',
        'ordem' => 'Monte a frase',
        'emparelhar' => 'Emparelhe',
    ];

    return $mapa[$tipo] ?? 'Pratique';
}

function instrucao_exercicio(string $tipo): string
{
    $mapa = [
        'multipla' => 'Toque na opção certa. As teclas 1 a 4 também escolhem.',
        'verdadeiro_falso' => 'Leia a afirmação e escolha se é verdadeira ou falsa.',
        'completar' => 'Toque em Ouvir a frase, escute e escreva a palavra que falta. Enter confirma.',
        'traducao' => 'Escreva a tradução em português. Enter confirma.',
        'ordem' => 'Toque nas palavras na ordem certa. Toque de novo numa palavra para desfazer.',
        'emparelhar' => 'Toque num termo à esquerda e depois na tradução à direita, até ligar todos.',
    ];

    return $mapa[$tipo] ?? 'Use a teoria da aula para responder.';
}

function preparar_exercicio_aula(array $ex): array
{
    $tipo = (string) ($ex['tipo'] ?? '');
    $alts = $ex['alternativas'] ?? [];
    if (!is_array($alts)) {
        $alts = [];
    }
    if ($tipo === 'verdadeiro_falso' && count($alts) < 2) {
        $alts = ['Verdadeiro', 'Falso'];
    }
    if ($tipo === 'ordem' && count($alts) < 2) {
        $palavra = trim((string) ($alts[0] ?? ''));
        $tipo = 'completar';
        $ex['enunciado'] = 'Complete: _____';
        $alts = [];
        if ($palavra !== '' && trim((string) ($ex['resposta_correta'] ?? '')) === '') {
            $ex['resposta_correta'] = $palavra;
        }
    }
    $ex['tipo'] = $tipo;
    $ex['enunciado'] = enunciado_exercicio_claro($tipo, (string) ($ex['enunciado'] ?? ''));
    $ex['tarefa'] = etiqueta_tarefa_exercicio($tipo);
    $ex['instrucao'] = instrucao_exercicio($tipo);
    $ex['alternativas'] = $alts;

    return $ex;
}
