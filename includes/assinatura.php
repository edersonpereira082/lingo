<?php

function catalogo_planos(): array
{
    return [
        [
            'codigo' => 'bronze',
            'nome' => 'Bronze',
            'descricao' => 'Uma assinatura para todos os idiomas, com mais vidas nas lições.',
            'preco_centavos' => 999,
            'ciclo' => 'mensal',
            'dias' => 30,
            'destaque' => 0,
            'ativo' => 1,
            'ordem' => 1,
            'vidas' => 8,
            'xp_percent' => 150,
            'beneficios' => [
                'Todos os idiomas inclusos',
                '8 vidas por lição',
                'XP 1,5× em cada aula',
                'Selo Bronze no perfil',
            ],
        ],
        [
            'codigo' => 'prata',
            'nome' => 'Prata',
            'descricao' => 'Todos os idiomas, com vidas infinitas para estudar sem pausa.',
            'preco_centavos' => 1999,
            'ciclo' => 'mensal',
            'dias' => 30,
            'destaque' => 0,
            'ativo' => 1,
            'ordem' => 2,
            'vidas' => 99,
            'xp_percent' => 200,
            'beneficios' => [
                'Todos os idiomas inclusos',
                'Vidas ilimitadas nas lições',
                'XP em dobro em cada aula',
                'Selo Prata no perfil',
            ],
        ],
        [
            'codigo' => 'ouro',
            'nome' => 'Ouro',
            'descricao' => 'Todos os idiomas, com o melhor equilíbrio entre preço e XP.',
            'preco_centavos' => 2999,
            'ciclo' => 'mensal',
            'dias' => 30,
            'destaque' => 1,
            'ativo' => 1,
            'ordem' => 3,
            'vidas' => 99,
            'xp_percent' => 250,
            'beneficios' => [
                'Todos os idiomas inclusos',
                'Vidas ilimitadas nas lições',
                'XP 2,5× em cada aula',
                'Selo Ouro no perfil e nas ligas',
            ],
        ],
        [
            'codigo' => 'diamante',
            'nome' => 'Diamante',
            'descricao' => 'Todos os idiomas, com o máximo de XP para subir de liga.',
            'preco_centavos' => 4999,
            'ciclo' => 'mensal',
            'dias' => 30,
            'destaque' => 0,
            'ativo' => 1,
            'ordem' => 4,
            'vidas' => 99,
            'xp_percent' => 300,
            'beneficios' => [
                'Todos os idiomas inclusos',
                'Vidas ilimitadas nas lições',
                'XP em triplo em cada aula',
                'Selo Diamante no perfil e nas ligas',
            ],
        ],
    ];
}

function tabela_tem_coluna(mysqli $conexao, string $tabela, string $coluna): bool
{
    $tabela = preg_replace('/[^a-z0-9_]/i', '', $tabela) ?: 'planos';
    $coluna = preg_replace('/[^a-z0-9_]/i', '', $coluna) ?: 'id';
    $res = $conexao->query("SHOW COLUMNS FROM `$tabela` LIKE '$coluna'");

    return $res && $res->num_rows > 0;
}

function garantir_assinatura(mysqli $conexao): void
{
    static $feito = false;
    if ($feito) {
        return;
    }
    $feito = true;

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS planos (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          codigo VARCHAR(40) NOT NULL UNIQUE,
          nome VARCHAR(80) NOT NULL,
          descricao VARCHAR(255) NOT NULL,
          preco_centavos INT UNSIGNED NOT NULL,
          ciclo ENUM('mensal','anual') NOT NULL,
          dias INT UNSIGNED NOT NULL,
          destaque TINYINT(1) NOT NULL DEFAULT 0,
          ativo TINYINT(1) NOT NULL DEFAULT 1,
          ordem INT UNSIGNED NOT NULL DEFAULT 0,
          vidas INT UNSIGNED NOT NULL DEFAULT 5,
          xp_percent INT UNSIGNED NOT NULL DEFAULT 100
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS assinaturas (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          usuario_id INT UNSIGNED NOT NULL,
          plano_id INT UNSIGNED NOT NULL,
          status ENUM('pendente','ativa','cancelada','expirada') NOT NULL DEFAULT 'pendente',
          metodo VARCHAR(20) DEFAULT NULL,
          inicia_em DATETIME DEFAULT NULL,
          expira_em DATETIME DEFAULT NULL,
          cancelada_em DATETIME DEFAULT NULL,
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          INDEX idx_ass_user_status (usuario_id, status),
          CONSTRAINT fk_ass_user FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
          CONSTRAINT fk_ass_plano FOREIGN KEY (plano_id) REFERENCES planos(id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS pagamentos (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          assinatura_id INT UNSIGNED NOT NULL,
          valor_centavos INT UNSIGNED NOT NULL,
          metodo VARCHAR(20) NOT NULL,
          status ENUM('pendente','pago','falhou') NOT NULL DEFAULT 'pendente',
          referencia VARCHAR(80) DEFAULT NULL,
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          CONSTRAINT fk_pag_ass FOREIGN KEY (assinatura_id) REFERENCES assinaturas(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    if (!tabela_tem_coluna($conexao, 'planos', 'vidas')) {
        $conexao->query('ALTER TABLE planos ADD COLUMN vidas INT UNSIGNED NOT NULL DEFAULT 5');
    }
    if (!tabela_tem_coluna($conexao, 'planos', 'xp_percent')) {
        $conexao->query('ALTER TABLE planos ADD COLUMN xp_percent INT UNSIGNED NOT NULL DEFAULT 100');
    }

    $st = $conexao->prepare(
        'INSERT INTO planos (codigo, nome, descricao, preco_centavos, ciclo, dias, destaque, ativo, ordem, vidas, xp_percent)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
         ON DUPLICATE KEY UPDATE nome = VALUES(nome), descricao = VALUES(descricao),
         preco_centavos = VALUES(preco_centavos), ciclo = VALUES(ciclo), dias = VALUES(dias),
         destaque = VALUES(destaque), ativo = VALUES(ativo), ordem = VALUES(ordem),
         vidas = VALUES(vidas), xp_percent = VALUES(xp_percent)'
    );

    foreach (catalogo_planos() as $plano) {
        $codigo = $plano['codigo'];
        $nome = $plano['nome'];
        $descricao = $plano['descricao'];
        $preco = (int) $plano['preco_centavos'];
        $ciclo = $plano['ciclo'];
        $dias = (int) $plano['dias'];
        $destaque = (int) $plano['destaque'];
        $ativo = (int) $plano['ativo'];
        $ordem = (int) $plano['ordem'];
        $vidas = (int) $plano['vidas'];
        $xpPercent = (int) $plano['xp_percent'];
        $st->bind_param(
            'sssisiiiiii',
            $codigo,
            $nome,
            $descricao,
            $preco,
            $ciclo,
            $dias,
            $destaque,
            $ativo,
            $ordem,
            $vidas,
            $xpPercent
        );
        $st->execute();
    }

    $conexao->query("UPDATE planos SET ativo = 0 WHERE codigo IN ('plus_mes', 'plus_ano', 'lingo')");
    $conexao->query(
        "UPDATE assinaturas a
         INNER JOIN planos antigo ON antigo.id = a.plano_id
         INNER JOIN planos novo ON novo.codigo = 'diamante'
         SET a.plano_id = novo.id
         WHERE antigo.codigo IN ('plus_mes', 'plus_ano')"
    );
}

function formatar_brl(int $centavos): string
{
    return 'R$ ' . number_format($centavos / 100, 2, ',', '.');
}

function planos_ativos(mysqli $conexao): array
{
    garantir_assinatura($conexao);

    return $conexao->query('SELECT * FROM planos WHERE ativo = 1 ORDER BY ordem, id')->fetch_all(MYSQLI_ASSOC);
}

function plano_por_codigo(mysqli $conexao, string $codigo): ?array
{
    garantir_assinatura($conexao);
    $st = $conexao->prepare('SELECT * FROM planos WHERE codigo = ? AND ativo = 1 LIMIT 1');
    $st->bind_param('s', $codigo);
    $st->execute();

    return $st->get_result()->fetch_assoc() ?: null;
}

function expirar_assinaturas(mysqli $conexao, int $usuarioId = 0): void
{
    if ($usuarioId > 0) {
        $st = $conexao->prepare(
            "UPDATE assinaturas SET status = 'expirada'
             WHERE usuario_id = ? AND status = 'ativa' AND expira_em IS NOT NULL AND expira_em < NOW()"
        );
        $st->bind_param('i', $usuarioId);
        $st->execute();
        return;
    }

    $conexao->query(
        "UPDATE assinaturas SET status = 'expirada'
         WHERE status = 'ativa' AND expira_em IS NOT NULL AND expira_em < NOW()"
    );
}

function assinatura_atual(mysqli $conexao, int $usuarioId): ?array
{
    garantir_assinatura($conexao);
    expirar_assinaturas($conexao, $usuarioId);
    $st = $conexao->prepare(
        'SELECT a.*, p.nome AS plano_nome, p.codigo AS plano_codigo, p.ciclo, p.preco_centavos, p.dias, p.vidas, p.xp_percent
         FROM assinaturas a
         JOIN planos p ON p.id = a.plano_id
         WHERE a.usuario_id = ? AND a.status = \'ativa\'
         ORDER BY a.expira_em DESC
         LIMIT 1'
    );
    $st->bind_param('i', $usuarioId);
    $st->execute();

    return $st->get_result()->fetch_assoc() ?: null;
}

function eh_plus(mysqli $conexao, int $usuarioId): bool
{
    return assinatura_atual($conexao, $usuarioId) !== null;
}

function vidas_do_aluno(mysqli $conexao, int $usuarioId): int
{
    $atual = assinatura_atual($conexao, $usuarioId);
    if (!$atual) {
        return VIDAS_INICIAIS;
    }

    return max(VIDAS_INICIAIS, (int) ($atual['vidas'] ?? VIDAS_INICIAIS));
}

function vidas_ilimitadas(mysqli $conexao, int $usuarioId): bool
{
    return vidas_do_aluno($conexao, $usuarioId) >= 99;
}

function xp_percentual_aluno(mysqli $conexao, int $usuarioId): int
{
    $atual = assinatura_atual($conexao, $usuarioId);
    if (!$atual) {
        return 100;
    }

    return max(100, (int) ($atual['xp_percent'] ?? 100));
}

function aplicar_xp_plano(int $xp, int $percent): int
{
    return (int) round($xp * $percent / 100);
}

function xp_multiplicador(mysqli $conexao, int $usuarioId): float
{
    return xp_percentual_aluno($conexao, $usuarioId) / 100;
}

function codigo_pix_demo(array $plano, int $usuarioId): string
{
    $ref = strtoupper(substr(hash('sha256', $usuarioId . '|' . $plano['codigo'] . '|' . date('Ymd')), 0, 12));
    $codigo = strtoupper((string) $plano['codigo']);

    return 'LINGO*' . $codigo . '*' . $ref . '*' . str_pad((string) $plano['preco_centavos'], 6, '0', STR_PAD_LEFT);
}

function encerrar_assinaturas_abertas(mysqli $conexao, int $usuarioId): void
{
    $st = $conexao->prepare(
        "UPDATE assinaturas SET status = 'cancelada', cancelada_em = NOW()
         WHERE usuario_id = ? AND status IN ('ativa', 'pendente')"
    );
    $st->bind_param('i', $usuarioId);
    $st->execute();
}

function ativar_assinatura(mysqli $conexao, int $usuarioId, array $plano, string $metodo, string $referencia): int
{
    garantir_assinatura($conexao);
    encerrar_assinaturas_abertas($conexao, $usuarioId);

    $planoId = (int) $plano['id'];
    $dias = (int) $plano['dias'];
    $ins = $conexao->prepare(
        "INSERT INTO assinaturas (usuario_id, plano_id, status, metodo, inicia_em, expira_em)
         VALUES (?, ?, 'ativa', ?, NOW(), DATE_ADD(NOW(), INTERVAL ? DAY))"
    );
    $ins->bind_param('iisi', $usuarioId, $planoId, $metodo, $dias);
    $ins->execute();
    $assId = (int) $ins->insert_id;

    $valor = (int) $plano['preco_centavos'];
    $pag = $conexao->prepare(
        "INSERT INTO pagamentos (assinatura_id, valor_centavos, metodo, status, referencia)
         VALUES (?, ?, ?, 'pago', ?)"
    );
    $pag->bind_param('iiss', $assId, $valor, $metodo, $referencia);
    $pag->execute();

    return $assId;
}

function cancelar_assinatura(mysqli $conexao, int $usuarioId): bool
{
    $st = $conexao->prepare(
        "UPDATE assinaturas SET status = 'cancelada', cancelada_em = NOW()
         WHERE usuario_id = ? AND status = 'ativa'"
    );
    $st->bind_param('i', $usuarioId);
    $st->execute();

    return $st->affected_rows > 0;
}

function validar_cartao(string $numero, string $nome, string $validade, string $cvv): ?string
{
    $digitos = preg_replace('/\D+/', '', $numero) ?? '';
    if (strlen($digitos) < 13 || strlen($digitos) > 19) {
        return 'Número do cartão inválido.';
    }
    if (mb_strlen(trim($nome)) < 3) {
        return 'Informe o nome impresso no cartão.';
    }
    if (!preg_match('/^(0[1-9]|1[0-2])\/(\d{2})$/', $validade, $m)) {
        return 'Validade deve estar no formato MM/AA.';
    }
    $ano = 2000 + (int) $m[2];
    $mes = (int) $m[1];
    if ($ano < (int) date('Y') || ($ano === (int) date('Y') && $mes < (int) date('n'))) {
        return 'Este cartão está vencido.';
    }
    if (!preg_match('/^\d{3,4}$/', $cvv)) {
        return 'CVV inválido.';
    }

    return null;
}

function beneficios_do_plano(array $plano): array
{
    foreach (catalogo_planos() as $item) {
        if ($item['codigo'] === ($plano['codigo'] ?? '')) {
            return $item['beneficios'];
        }
    }

    return [
        'Todos os idiomas inclusos',
        'Trilha completa e áudio nativo',
    ];
}

function lista_idiomas_planos(?mysqli $conexao): string
{
    $nomes = [];
    if ($conexao) {
        $res = $conexao->query('SELECT nome FROM cursos WHERE ativo = 1 ORDER BY ordem, nome');
        if ($res) {
            $nomes = array_column($res->fetch_all(MYSQLI_ASSOC), 'nome');
        }
    }
    if (!$nomes) {
        $nomes = ['Inglês', 'Espanhol', 'Francês', 'Italiano', 'Alemão'];
    }
    $ultimo = array_pop($nomes);

    return ($nomes ? implode(', ', $nomes) . ' e ' : '') . $ultimo;
}

function texto_vidas_plano(int $vidas): string
{
    return $vidas >= 99 ? '♥ ∞' : '♥ ' . $vidas;
}
