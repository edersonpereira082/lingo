<?php

function catalogo_salas_conversa(): array
{
    $salas = [];
    $temas = [
        'en' => [
            'hello' => [
                'nome' => 'Apresentações',
                'descricao' => 'Cumprimente e fale de você com outros alunos.',
                'topico' => 'Diga quem você é e de onde vem.',
                'frases' => [
                    ['texto' => 'Hello, nice to meet you.', 'sentido' => 'Olá, prazer em conhecer você.'],
                    ['texto' => 'My name is Ana.', 'sentido' => 'Meu nome é Ana.'],
                    ['texto' => 'I am from Brazil.', 'sentido' => 'Eu sou do Brasil.'],
                    ['texto' => 'How are you today?', 'sentido' => 'Como você está hoje?'],
                    ['texto' => 'I am learning English.', 'sentido' => 'Estou aprendendo inglês.'],
                ],
            ],
            'cafe' => [
                'nome' => 'No café',
                'descricao' => 'Peça comida e converse no balcão.',
                'topico' => 'Simule um pedido e um bate-papo curto.',
                'frases' => [
                    ['texto' => 'A coffee, please.', 'sentido' => 'Um café, por favor.'],
                    ['texto' => 'Can I see the menu?', 'sentido' => 'Posso ver o cardápio?'],
                    ['texto' => 'How much is it?', 'sentido' => 'Quanto custa?'],
                    ['texto' => 'This is delicious.', 'sentido' => 'Isto está delicioso.'],
                    ['texto' => 'Could we sit by the window?', 'sentido' => 'Podemos sentar perto da janela?'],
                ],
            ],
            'trip' => [
                'nome' => 'Viagem',
                'descricao' => 'Peça indicações e resolva o caminho.',
                'topico' => 'Ajude um colega a chegar ao destino.',
                'frases' => [
                    ['texto' => 'Where is the station?', 'sentido' => 'Onde fica a estação?'],
                    ['texto' => 'I need a ticket.', 'sentido' => 'Preciso de uma passagem.'],
                    ['texto' => 'What time does it leave?', 'sentido' => 'A que horas parte?'],
                    ['texto' => 'Can you help me, please?', 'sentido' => 'Você pode me ajudar, por favor?'],
                    ['texto' => 'I am looking for the museum.', 'sentido' => 'Estou procurando o museu.'],
                ],
            ],
            'views' => [
                'nome' => 'Opiniões',
                'descricao' => 'Concorde, discuta e explique o porquê.',
                'topico' => 'Dê sua opinião sobre um filme, um livro ou a cidade.',
                'frases' => [
                    ['texto' => 'I think so.', 'sentido' => 'Eu acho que sim.'],
                    ['texto' => 'I do not agree.', 'sentido' => 'Eu não concordo.'],
                    ['texto' => 'In my opinion, it is great.', 'sentido' => 'Na minha opinião, é ótimo.'],
                    ['texto' => 'That sounds good.', 'sentido' => 'Isso parece bom.'],
                    ['texto' => 'Why do you think that?', 'sentido' => 'Por que você pensa isso?'],
                ],
            ],
            'livre' => [
                'nome' => 'Sala livre',
                'descricao' => 'Chat aberto com quem estuda o mesmo idioma.',
                'topico' => 'Fale do que quiser — tente usar o idioma de estudo.',
                'frases' => [
                    ['texto' => 'What are you studying today?', 'sentido' => 'O que você está estudando hoje?'],
                    ['texto' => 'Can we practice together?', 'sentido' => 'Podemos praticar juntos?'],
                    ['texto' => 'See you later!', 'sentido' => 'Até mais!'],
                ],
            ],
        ],
        'es' => [
            'hello' => [
                'nome' => 'Presentaciones',
                'descricao' => 'Salude y cuéntese quién es.',
                'topico' => 'Diga su nombre y de dónde viene.',
                'frases' => [
                    ['texto' => 'Hola, mucho gusto.', 'sentido' => 'Olá, prazer.'],
                    ['texto' => 'Me llamo Ana.', 'sentido' => 'Meu nome é Ana.'],
                    ['texto' => 'Soy de Brasil.', 'sentido' => 'Sou do Brasil.'],
                    ['texto' => '¿Cómo estás hoy?', 'sentido' => 'Como você está hoje?'],
                    ['texto' => 'Estoy aprendiendo español.', 'sentido' => 'Estou aprendendo espanhol.'],
                ],
            ],
            'cafe' => [
                'nome' => 'En el café',
                'descricao' => 'Pida algo y converse en el mostrador.',
                'topico' => 'Simule un pedido corto.',
                'frases' => [
                    ['texto' => 'Un café, por favor.', 'sentido' => 'Um café, por favor.'],
                    ['texto' => '¿Puedo ver el menú?', 'sentido' => 'Posso ver o cardápio?'],
                    ['texto' => '¿Cuánto cuesta?', 'sentido' => 'Quanto custa?'],
                    ['texto' => 'Está delicioso.', 'sentido' => 'Está delicioso.'],
                    ['texto' => '¿Podemos sentarnos cerca de la ventana?', 'sentido' => 'Podemos sentar perto da janela?'],
                ],
            ],
            'trip' => [
                'nome' => 'Viaje',
                'descricao' => 'Pida direcciones y resuelva el camino.',
                'topico' => 'Ayude a un compañero a llegar.',
                'frases' => [
                    ['texto' => '¿Dónde está la estación?', 'sentido' => 'Onde fica a estação?'],
                    ['texto' => 'Necesito un billete.', 'sentido' => 'Preciso de uma passagem.'],
                    ['texto' => '¿A qué hora sale?', 'sentido' => 'A que horas parte?'],
                    ['texto' => '¿Puede ayudarme, por favor?', 'sentido' => 'Pode me ajudar, por favor?'],
                    ['texto' => 'Busco el museo.', 'sentido' => 'Procuro o museu.'],
                ],
            ],
            'views' => [
                'nome' => 'Opiniones',
                'descricao' => 'Concorde, discuta y explique por qué.',
                'topico' => 'Opine sobre una película o la ciudad.',
                'frases' => [
                    ['texto' => 'Creo que sí.', 'sentido' => 'Acho que sim.'],
                    ['texto' => 'No estoy de acuerdo.', 'sentido' => 'Não concordo.'],
                    ['texto' => 'En mi opinión, es genial.', 'sentido' => 'Na minha opinião, é ótimo.'],
                    ['texto' => 'Suena bien.', 'sentido' => 'Soa bem.'],
                    ['texto' => '¿Por qué piensas eso?', 'sentido' => 'Por que você pensa isso?'],
                ],
            ],
            'livre' => [
                'nome' => 'Sala libre',
                'descricao' => 'Chat abierto con quien estudia español.',
                'topico' => 'Hable de lo que quiera en el idioma de estudio.',
                'frases' => [
                    ['texto' => '¿Qué estudias hoy?', 'sentido' => 'O que você estuda hoje?'],
                    ['texto' => '¿Practicamos juntos?', 'sentido' => 'Praticamos juntos?'],
                    ['texto' => 'Hasta luego.', 'sentido' => 'Até logo.'],
                ],
            ],
        ],
        'fr' => [
            'hello' => [
                'nome' => 'Présentations',
                'descricao' => 'Saluez et dites qui vous êtes.',
                'topico' => 'Présentez-vous en quelques phrases.',
                'frases' => [
                    ['texto' => 'Bonjour, enchanté.', 'sentido' => 'Olá, prazer.'],
                    ['texto' => 'Je m’appelle Ana.', 'sentido' => 'Meu nome é Ana.'],
                    ['texto' => 'Je viens du Brésil.', 'sentido' => 'Venho do Brasil.'],
                    ['texto' => 'Comment allez-vous aujourd’hui ?', 'sentido' => 'Como vai você hoje?'],
                    ['texto' => 'J’apprends le français.', 'sentido' => 'Estou aprendendo francês.'],
                ],
            ],
            'cafe' => [
                'nome' => 'Au café',
                'descricao' => 'Commandez et parlez au comptoir.',
                'topico' => 'Simulez une commande courte.',
                'frases' => [
                    ['texto' => 'Un café, s’il vous plaît.', 'sentido' => 'Um café, por favor.'],
                    ['texto' => 'Je peux voir la carte ?', 'sentido' => 'Posso ver o cardápio?'],
                    ['texto' => 'Ça fait combien ?', 'sentido' => 'Quanto fica?'],
                    ['texto' => 'C’est délicieux.', 'sentido' => 'Está delicioso.'],
                    ['texto' => 'On peut s’asseoir près de la fenêtre ?', 'sentido' => 'Podemos sentar perto da janela?'],
                ],
            ],
            'trip' => [
                'nome' => 'Voyage',
                'descricao' => 'Demandez le chemin et un billet.',
                'topico' => 'Aidez un camarade à arriver.',
                'frases' => [
                    ['texto' => 'Où est la gare ?', 'sentido' => 'Onde fica a estação?'],
                    ['texto' => 'J’ai besoin d’un billet.', 'sentido' => 'Preciso de uma passagem.'],
                    ['texto' => 'À quelle heure ça part ?', 'sentido' => 'A que horas parte?'],
                    ['texto' => 'Vous pouvez m’aider, s’il vous plaît ?', 'sentido' => 'Pode me ajudar, por favor?'],
                    ['texto' => 'Je cherche le musée.', 'sentido' => 'Procuro o museu.'],
                ],
            ],
            'views' => [
                'nome' => 'Opinions',
                'descricao' => 'Donnez votre avis et expliquez.',
                'topico' => 'Parlez d’un film, d’un livre ou de la ville.',
                'frases' => [
                    ['texto' => 'Je pense que oui.', 'sentido' => 'Acho que sim.'],
                    ['texto' => 'Je ne suis pas d’accord.', 'sentido' => 'Não concordo.'],
                    ['texto' => 'À mon avis, c’est super.', 'sentido' => 'Na minha opinião, é ótimo.'],
                    ['texto' => 'Ça a l’air bien.', 'sentido' => 'Parece bom.'],
                    ['texto' => 'Pourquoi penses-tu ça ?', 'sentido' => 'Por que você pensa isso?'],
                ],
            ],
            'livre' => [
                'nome' => 'Salle libre',
                'descricao' => 'Chat ouvert avec les élèves de français.',
                'topico' => 'Parlez de ce que vous voulez dans la langue d’étude.',
                'frases' => [
                    ['texto' => 'Qu’est-ce que tu étudies aujourd’hui ?', 'sentido' => 'O que você estuda hoje?'],
                    ['texto' => 'On peut pratiquer ensemble ?', 'sentido' => 'Podemos praticar juntos?'],
                    ['texto' => 'À plus tard !', 'sentido' => 'Até mais!'],
                ],
            ],
        ],
        'it' => [
            'hello' => [
                'nome' => 'Presentazioni',
                'descricao' => 'Saluti e dite chi siete.',
                'topico' => 'Presentatevi in poche frasi.',
                'frases' => [
                    ['texto' => 'Ciao, piacere di conoscerti.', 'sentido' => 'Olá, prazer em conhecer você.'],
                    ['texto' => 'Mi chiamo Ana.', 'sentido' => 'Meu nome é Ana.'],
                    ['texto' => 'Vengo dal Brasile.', 'sentido' => 'Venho do Brasil.'],
                    ['texto' => 'Come stai oggi?', 'sentido' => 'Como você está hoje?'],
                    ['texto' => 'Sto imparando l’italiano.', 'sentido' => 'Estou aprendendo italiano.'],
                ],
            ],
            'cafe' => [
                'nome' => 'Al bar',
                'descricao' => 'Ordinate e parlate al banco.',
                'topico' => 'Simulate un ordine breve.',
                'frases' => [
                    ['texto' => 'Un caffè, per favore.', 'sentido' => 'Um café, por favor.'],
                    ['texto' => 'Posso vedere il menù?', 'sentido' => 'Posso ver o cardápio?'],
                    ['texto' => 'Quanto costa?', 'sentido' => 'Quanto custa?'],
                    ['texto' => 'È delizioso.', 'sentido' => 'Está delicioso.'],
                    ['texto' => 'Possiamo sederci vicino alla finestra?', 'sentido' => 'Podemos sentar perto da janela?'],
                ],
            ],
            'trip' => [
                'nome' => 'Viaggio',
                'descricao' => 'Chiedete indicazioni e un biglietto.',
                'topico' => 'Aiutate un compagno ad arrivare.',
                'frases' => [
                    ['texto' => 'Dov’è la stazione?', 'sentido' => 'Onde fica a estação?'],
                    ['texto' => 'Ho bisogno di un biglietto.', 'sentido' => 'Preciso de uma passagem.'],
                    ['texto' => 'A che ora parte?', 'sentido' => 'A que horas parte?'],
                    ['texto' => 'Può aiutarmi, per favore?', 'sentido' => 'Pode me ajudar, por favor?'],
                    ['texto' => 'Cerco il museo.', 'sentido' => 'Procuro o museu.'],
                ],
            ],
            'views' => [
                'nome' => 'Opinioni',
                'descricao' => 'Date la vostra opinione e spiegate.',
                'topico' => 'Parlate di un film, un libro o della città.',
                'frases' => [
                    ['texto' => 'Penso di sì.', 'sentido' => 'Acho que sim.'],
                    ['texto' => 'Non sono d’accordo.', 'sentido' => 'Não concordo.'],
                    ['texto' => 'Secondo me è fantastico.', 'sentido' => 'Na minha opinião, é ótimo.'],
                    ['texto' => 'Sembra una buona idea.', 'sentido' => 'Parece uma boa ideia.'],
                    ['texto' => 'Perché pensi così?', 'sentido' => 'Por que você pensa isso?'],
                ],
            ],
            'livre' => [
                'nome' => 'Sala libera',
                'descricao' => 'Chat aperto con chi studia italiano.',
                'topico' => 'Parlate di quello che volete nella lingua di studio.',
                'frases' => [
                    ['texto' => 'Cosa studi oggi?', 'sentido' => 'O que você estuda hoje?'],
                    ['texto' => 'Possiamo praticare insieme?', 'sentido' => 'Podemos praticar juntos?'],
                    ['texto' => 'A dopo!', 'sentido' => 'Até já!'],
                ],
            ],
        ],
        'de' => [
            'hello' => [
                'nome' => 'Vorstellen',
                'descricao' => 'Begrüßen und sagen, wer Sie sind.',
                'topico' => 'Stellen Sie sich in wenigen Sätzen vor.',
                'frases' => [
                    ['texto' => 'Hallo, schön dich kennenzulernen.', 'sentido' => 'Olá, prazer em conhecer você.'],
                    ['texto' => 'Ich heiße Ana.', 'sentido' => 'Meu nome é Ana.'],
                    ['texto' => 'Ich komme aus Brasilien.', 'sentido' => 'Venho do Brasil.'],
                    ['texto' => 'Wie geht es dir heute?', 'sentido' => 'Como você está hoje?'],
                    ['texto' => 'Ich lerne Deutsch.', 'sentido' => 'Estou aprendendo alemão.'],
                ],
            ],
            'cafe' => [
                'nome' => 'Im Café',
                'descricao' => 'Bestellen und am Tresen sprechen.',
                'topico' => 'Simulieren Sie eine kurze Bestellung.',
                'frases' => [
                    ['texto' => 'Einen Kaffee, bitte.', 'sentido' => 'Um café, por favor.'],
                    ['texto' => 'Kann ich die Karte sehen?', 'sentido' => 'Posso ver o cardápio?'],
                    ['texto' => 'Was kostet das?', 'sentido' => 'Quanto custa?'],
                    ['texto' => 'Das ist lecker.', 'sentido' => 'Isto está gostoso.'],
                    ['texto' => 'Können wir am Fenster sitzen?', 'sentido' => 'Podemos sentar na janela?'],
                ],
            ],
            'trip' => [
                'nome' => 'Reise',
                'descricao' => 'Nach dem Weg und einem Ticket fragen.',
                'topico' => 'Helfen Sie einem Mitschüler anzukommen.',
                'frases' => [
                    ['texto' => 'Wo ist der Bahnhof?', 'sentido' => 'Onde fica a estação?'],
                    ['texto' => 'Ich brauche ein Ticket.', 'sentido' => 'Preciso de uma passagem.'],
                    ['texto' => 'Wann fährt es ab?', 'sentido' => 'Quando parte?'],
                    ['texto' => 'Können Sie mir bitte helfen?', 'sentido' => 'Pode me ajudar, por favor?'],
                    ['texto' => 'Ich suche das Museum.', 'sentido' => 'Procuro o museu.'],
                ],
            ],
            'views' => [
                'nome' => 'Meinungen',
                'descricao' => 'Meine Meinung sagen und erklären.',
                'topico' => 'Sprechen Sie über einen Film, ein Buch oder die Stadt.',
                'frases' => [
                    ['texto' => 'Ich denke schon.', 'sentido' => 'Acho que sim.'],
                    ['texto' => 'Ich bin nicht einverstanden.', 'sentido' => 'Não concordo.'],
                    ['texto' => 'Meiner Meinung nach ist das toll.', 'sentido' => 'Na minha opinião, é ótimo.'],
                    ['texto' => 'Das klingt gut.', 'sentido' => 'Isso soa bem.'],
                    ['texto' => 'Warum denkst du das?', 'sentido' => 'Por que você pensa isso?'],
                ],
            ],
            'livre' => [
                'nome' => 'Offener Raum',
                'descricao' => 'Offener Chat mit Deutschlernenden.',
                'topico' => 'Sprechen Sie frei in der Lernsprache.',
                'frases' => [
                    ['texto' => 'Was lernst du heute?', 'sentido' => 'O que você estuda hoje?'],
                    ['texto' => 'Können wir zusammen üben?', 'sentido' => 'Podemos praticar juntos?'],
                    ['texto' => 'Bis später!', 'sentido' => 'Até mais!'],
                ],
            ],
        ],
    ];

    $ordem = 0;
    foreach ($temas as $idioma => $lista) {
        foreach ($lista as $chave => $sala) {
            $ordem++;
            $salas[] = [
                'codigo' => $idioma . '-' . $chave,
                'nome' => $sala['nome'],
                'idioma' => $idioma,
                'descricao' => $sala['descricao'],
                'topico' => $sala['topico'],
                'frases' => $sala['frases'],
                'ordem' => $ordem,
            ];
        }
    }

    return $salas;
}

function garantir_conversa(mysqli $conexao): void
{
    static $feito = false;
    if ($feito) {
        return;
    }
    $feito = true;

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS conversas_salas (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          codigo VARCHAR(40) NOT NULL UNIQUE,
          nome VARCHAR(120) NOT NULL,
          idioma VARCHAR(8) NOT NULL,
          descricao VARCHAR(255) NOT NULL DEFAULT '',
          topico VARCHAR(180) NOT NULL DEFAULT '',
          frases TEXT NOT NULL,
          ordem INT UNSIGNED NOT NULL DEFAULT 0,
          ativo TINYINT(1) NOT NULL DEFAULT 1,
          INDEX idx_conv_idioma (idioma, ativo, ordem)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS conversas_mensagens (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          sala_id INT UNSIGNED NOT NULL,
          usuario_id INT UNSIGNED NOT NULL,
          mensagem VARCHAR(400) NOT NULL,
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          INDEX idx_conv_msg_sala (sala_id, id),
          CONSTRAINT fk_conv_msg_sala FOREIGN KEY (sala_id) REFERENCES conversas_salas(id) ON DELETE CASCADE,
          CONSTRAINT fk_conv_msg_user FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS conversas_presenca (
          usuario_id INT UNSIGNED NOT NULL PRIMARY KEY,
          sala_id INT UNSIGNED NOT NULL,
          visto_em DATETIME NOT NULL,
          INDEX idx_conv_presenca (sala_id, visto_em),
          CONSTRAINT fk_conv_pre_user FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
          CONSTRAINT fk_conv_pre_sala FOREIGN KEY (sala_id) REFERENCES conversas_salas(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $st = $conexao->prepare(
        'INSERT INTO conversas_salas (codigo, nome, idioma, descricao, topico, frases, ordem, ativo)
         VALUES (?, ?, ?, ?, ?, ?, ?, 1)
         ON DUPLICATE KEY UPDATE nome = VALUES(nome), descricao = VALUES(descricao),
         topico = VALUES(topico), frases = VALUES(frases), ordem = VALUES(ordem), ativo = 1'
    );

    foreach (catalogo_salas_conversa() as $sala) {
        $codigo = $sala['codigo'];
        $nome = $sala['nome'];
        $idioma = $sala['idioma'];
        $descricao = $sala['descricao'];
        $topico = $sala['topico'];
        $frases = json_encode($sala['frases'], JSON_UNESCAPED_UNICODE);
        $ordem = (int) $sala['ordem'];
        $st->bind_param('ssssssi', $codigo, $nome, $idioma, $descricao, $topico, $frases, $ordem);
        $st->execute();
    }

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS conversas_privadas (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          codigo VARCHAR(64) NOT NULL UNIQUE,
          idioma VARCHAR(8) NOT NULL,
          aluno_a INT UNSIGNED NOT NULL,
          aluno_b INT UNSIGNED NOT NULL,
          status ENUM('ativa','encerrada') NOT NULL DEFAULT 'ativa',
          monitorada TINYINT(1) NOT NULL DEFAULT 1,
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          UNIQUE KEY uk_conv_par (aluno_a, aluno_b, idioma),
          INDEX idx_conv_priv_status (status, atualizado_em),
          CONSTRAINT fk_conv_priv_a FOREIGN KEY (aluno_a) REFERENCES usuarios(id) ON DELETE CASCADE,
          CONSTRAINT fk_conv_priv_b FOREIGN KEY (aluno_b) REFERENCES usuarios(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS conversas_privadas_mensagens (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          privada_id INT UNSIGNED NOT NULL,
          usuario_id INT UNSIGNED NOT NULL,
          mensagem VARCHAR(400) NOT NULL,
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          INDEX idx_conv_priv_msg (privada_id, id),
          CONSTRAINT fk_conv_priv_msg_sala FOREIGN KEY (privada_id) REFERENCES conversas_privadas(id) ON DELETE CASCADE,
          CONSTRAINT fk_conv_priv_msg_user FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS conversas_privadas_sinais (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          privada_id INT UNSIGNED NOT NULL,
          de_id INT UNSIGNED NOT NULL,
          para_id INT UNSIGNED NOT NULL,
          tipo VARCHAR(20) NOT NULL,
          payload MEDIUMTEXT NOT NULL,
          lido TINYINT(1) NOT NULL DEFAULT 0,
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          INDEX idx_conv_sinal (privada_id, para_id, lido, id),
          CONSTRAINT fk_conv_sinal_sala FOREIGN KEY (privada_id) REFERENCES conversas_privadas(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $conexao->query(
        "CREATE TABLE IF NOT EXISTS conversas_privadas_eventos (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          privada_id INT UNSIGNED NOT NULL,
          usuario_id INT UNSIGNED DEFAULT NULL,
          tipo VARCHAR(40) NOT NULL,
          detalhe VARCHAR(255) NOT NULL DEFAULT '',
          criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          INDEX idx_conv_evt (privada_id, id),
          CONSTRAINT fk_conv_evt_sala FOREIGN KEY (privada_id) REFERENCES conversas_privadas(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );
}

function conversa_marcar_presenca(mysqli $conexao, int $usuarioId, int $salaId): void
{
    $st = $conexao->prepare(
        'INSERT INTO conversas_presenca (usuario_id, sala_id, visto_em)
         VALUES (?, ?, NOW())
         ON DUPLICATE KEY UPDATE sala_id = VALUES(sala_id), visto_em = NOW()'
    );
    $st->bind_param('ii', $usuarioId, $salaId);
    $st->execute();
}

function conversa_online(mysqli $conexao, int $salaId): array
{
    $st = $conexao->prepare(
        'SELECT u.id, u.nome
         FROM conversas_presenca p
         JOIN usuarios u ON u.id = p.usuario_id
         WHERE p.sala_id = ? AND p.visto_em >= DATE_SUB(NOW(), INTERVAL 2 MINUTE) AND u.ativo = 1
         ORDER BY u.nome'
    );
    $st->bind_param('i', $salaId);
    $st->execute();

    return $st->get_result()->fetch_all(MYSQLI_ASSOC);
}

function conversa_limpar_mensagem(string $texto): string
{
    $texto = strip_tags($texto);
    $texto = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/u', '', $texto) ?? $texto;
    $texto = preg_replace('/\s+/u', ' ', $texto) ?? $texto;

    return trim(mb_substr($texto, 0, 400, 'UTF-8'));
}

function conversa_formatar_mensagem(array $linha, int $euId): array
{
    return [
        'id' => (int) $linha['id'],
        'nome' => $linha['nome'],
        'iniciais' => iniciais($linha['nome']),
        'avatar' => url_avatar_usuario($linha),
        'mensagem' => $linha['mensagem'],
        'quando' => date('H:i', strtotime((string) $linha['criado_em'])),
        'eu' => (int) $linha['usuario_id'] === $euId,
    ];
}

function conversa_aviso_monitoramento(): string
{
    return 'As aulas de conversação — inclusive chats privados e vídeos privados — podem ser monitoradas pela equipe Lingo para segurança, qualidade e respeito às regras.';
}

function conversa_par_ids(int $a, int $b): array
{
    return $a < $b ? [$a, $b] : [$b, $a];
}

function conversa_privada_participa(array $sala, int $usuarioId): bool
{
    return (int) $sala['aluno_a'] === $usuarioId || (int) $sala['aluno_b'] === $usuarioId;
}

function conversa_privada_outro(array $sala, int $euId): int
{
    return (int) $sala['aluno_a'] === $euId ? (int) $sala['aluno_b'] : (int) $sala['aluno_a'];
}

function conversa_privada_buscar(mysqli $conexao, int $id): ?array
{
    $st = $conexao->prepare(
        'SELECT p.*, ua.nome AS nome_a, ub.nome AS nome_b
         FROM conversas_privadas p
         JOIN usuarios ua ON ua.id = p.aluno_a
         JOIN usuarios ub ON ub.id = p.aluno_b
         WHERE p.id = ? LIMIT 1'
    );
    $st->bind_param('i', $id);
    $st->execute();
    $sala = $st->get_result()->fetch_assoc();

    return $sala ?: null;
}

function conversa_privada_evento(mysqli $conexao, int $privadaId, int $usuarioId, string $tipo, string $detalhe = ''): void
{
    $st = $conexao->prepare(
        'INSERT INTO conversas_privadas_eventos (privada_id, usuario_id, tipo, detalhe) VALUES (?, ?, ?, ?)'
    );
    $st->bind_param('iiss', $privadaId, $usuarioId, $tipo, $detalhe);
    $st->execute();
}

function conversa_privada_abrir(mysqli $conexao, int $euId, int $outroId, string $idioma): ?array
{
    if ($euId === $outroId || $outroId <= 0) {
        return null;
    }
    $stOutro = $conexao->prepare('SELECT id FROM usuarios WHERE id = ? AND ativo = 1 LIMIT 1');
    $stOutro->bind_param('i', $outroId);
    $stOutro->execute();
    if (!$stOutro->get_result()->fetch_assoc()) {
        return null;
    }

    [$a, $b] = conversa_par_ids($euId, $outroId);
    $busca = $conexao->prepare(
        'SELECT id FROM conversas_privadas WHERE aluno_a = ? AND aluno_b = ? AND idioma = ? LIMIT 1'
    );
    $busca->bind_param('iis', $a, $b, $idioma);
    $busca->execute();
    $existe = $busca->get_result()->fetch_assoc();
    if ($existe) {
        $id = (int) $existe['id'];
        $up = $conexao->prepare("UPDATE conversas_privadas SET status = 'ativa' WHERE id = ?");
        $up->bind_param('i', $id);
        $up->execute();
        conversa_privada_evento($conexao, $id, $euId, 'entrou', 'Reabriu a sala privada');
        return conversa_privada_buscar($conexao, $id);
    }

    $codigo = bin2hex(random_bytes(16));
    $ins = $conexao->prepare(
        'INSERT INTO conversas_privadas (codigo, idioma, aluno_a, aluno_b, status, monitorada)
         VALUES (?, ?, ?, ?, \'ativa\', 1)'
    );
    $ins->bind_param('ssii', $codigo, $idioma, $a, $b);
    $ins->execute();
    $id = (int) $conexao->insert_id;
    conversa_privada_evento($conexao, $id, $euId, 'criou', 'Abriu chat e vídeo privados');

    return conversa_privada_buscar($conexao, $id);
}

function conversa_privadas_do_aluno(mysqli $conexao, int $euId, string $idioma): array
{
    $st = $conexao->prepare(
        'SELECT p.id, p.idioma, p.status, p.atualizado_em,
                CASE WHEN p.aluno_a = ? THEN ub.nome ELSE ua.nome END AS outro_nome,
                CASE WHEN p.aluno_a = ? THEN p.aluno_b ELSE p.aluno_a END AS outro_id
         FROM conversas_privadas p
         JOIN usuarios ua ON ua.id = p.aluno_a
         JOIN usuarios ub ON ub.id = p.aluno_b
         WHERE (p.aluno_a = ? OR p.aluno_b = ?) AND p.idioma = ? AND p.status = \'ativa\'
         ORDER BY p.atualizado_em DESC'
    );
    $st->bind_param('iiiis', $euId, $euId, $euId, $euId, $idioma);
    $st->execute();

    return $st->get_result()->fetch_all(MYSQLI_ASSOC);
}

function conversa_colegas(mysqli $conexao, int $euId, int $cursoId): array
{
    $st = $conexao->prepare(
        'SELECT u.id, u.nome, u.xp, u.avatar, u.foto
         FROM usuarios u
         WHERE u.ativo = 1 AND u.id <> ? AND u.curso_atual_id = ?
         ORDER BY u.nome
         LIMIT 60'
    );
    $st->bind_param('ii', $euId, $cursoId);
    $st->execute();

    return $st->get_result()->fetch_all(MYSQLI_ASSOC);
}

function html_aviso_monitoramento(): string
{
    return '<div class="aviso aviso-monitor" role="note"><strong>Monitoramento:</strong> '
        . e(conversa_aviso_monitoramento())
        . '</div>';
}

function html_abas_falar(string $ativa): string
{
    $itens = [
        'turma' => ['conversa.php', 'Turma'],
        'tutor' => ['tutor.php', 'Tutor Lino'],
        'privado' => ['conversa.php?aba=privado', 'Privado'],
    ];
    $html = '<nav class="abas-falar">';
    foreach ($itens as $id => $item) {
        $cls = $id === $ativa ? ' ativo' : '';
        $html .= '<a class="aba-falar' . $cls . '" href="' . e($item[0]) . '">' . e($item[1]) . '</a>';
    }
    $html .= '</nav>';

    return $html;
}
