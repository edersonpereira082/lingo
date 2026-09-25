<?php

require_once __DIR__ . '/catalogo-extra.php';
require_once __DIR__ . '/catalogo-a2a4.php';
require_once __DIR__ . '/catalogo-mais.php';
require_once __DIR__ . '/catalogo-pro.php';
require_once __DIR__ . '/catalogo-c.php';
require_once __DIR__ . '/catalogo-volume.php';
require_once __DIR__ . '/catalogo-dobra.php';
require_once __DIR__ . '/catalogo-onda.php';
require_once __DIR__ . '/catalogo-pico.php';
require_once __DIR__ . '/catalogo-alta.php';

function catalogo_lingo(): array
{
    $cursos = [
        curso_ingles(),
        curso_espanhol(),
        curso_frances(),
        curso_italiano(),
        curso_alemao(),
    ];

    foreach ($cursos as &$curso) {
        $extra = unidades_extra_por_codigo($curso['codigo']);
        $avancado = unidades_a2_a4_por_codigo($curso['codigo']);
        $mais = unidades_mais_por_codigo($curso['codigo']);
        $pro = unidades_pro_por_codigo($curso['codigo']);
        $proficiente = unidades_c_por_codigo($curso['codigo']);
        $volume = unidades_volume_por_codigo($curso['codigo']);
        $dobra = unidades_dobra_por_codigo($curso['codigo']);
        $onda = unidades_onda_por_codigo($curso['codigo']);
        $pico = unidades_pico_por_codigo($curso['codigo']);
        $alta = unidades_alta_por_codigo($curso['codigo']);
        $curso['unidades'] = array_merge(
            $curso['unidades'],
            $extra['unidades'] ?? [],
            $avancado['unidades'] ?? [],
            $mais['unidades'] ?? [],
            $pro['unidades'] ?? [],
            $proficiente['unidades'] ?? [],
            $volume['unidades'] ?? [],
            $dobra['unidades'] ?? [],
            $onda['unidades'] ?? [],
            $pico['unidades'] ?? [],
            $alta['unidades'] ?? []
        );
        $curso['palavras'] = array_merge(
            $curso['palavras'],
            $extra['palavras'] ?? [],
            $avancado['palavras'] ?? [],
            $mais['palavras'] ?? [],
            $pro['palavras'] ?? [],
            $proficiente['palavras'] ?? [],
            $volume['palavras'] ?? [],
            $dobra['palavras'] ?? [],
            $onda['palavras'] ?? [],
            $pico['palavras'] ?? [],
            $alta['palavras'] ?? []
        );
        $curso['descricao'] = 'QECR completo: Básico (A1–A2), Independente (B1–B2) e Proficiente (C1–C2).';

        $peso = [];
        $indice = [];
        foreach ($curso['unidades'] as $i => $unidade) {
            $n = strtoupper(trim((string) ($unidade['nivel'] ?? 'A1')));
            $peso[] = match (true) {
                str_starts_with($n, 'C2') => 6,
                str_starts_with($n, 'C1') => 5,
                str_starts_with($n, 'B2'), str_starts_with($n, 'A4') => 4,
                str_starts_with($n, 'B1'), str_starts_with($n, 'A3') => 3,
                str_starts_with($n, 'A2') => 2,
                default => 1,
            };
            $indice[] = $i;
        }
        array_multisort($peso, SORT_ASC, $indice, SORT_ASC, $curso['unidades']);
        foreach ($curso['unidades'] as &$unidade) {
            $unidade = catalogo_expandir_unidade($unidade);
        }
        unset($unidade);
    }
    unset($curso);

    return $cursos;
}

function m(string $enunciado, array $alts, string $resposta, ?string $dica = null): array
{
    return ['tipo' => 'multipla', 'enunciado' => $enunciado, 'alts' => $alts, 'resposta' => $resposta, 'dica' => $dica];
}

function c(string $enunciado, string $resposta, ?string $dica = null): array
{
    return ['tipo' => 'completar', 'enunciado' => $enunciado, 'resposta' => $resposta, 'dica' => $dica];
}

function t(string $enunciado, string $resposta, ?string $dica = null): array
{
    return ['tipo' => 'traducao', 'enunciado' => $enunciado, 'resposta' => $resposta, 'dica' => $dica];
}

function vf(string $enunciado, bool $verdadeiro, ?string $dica = null): array
{
    return [
        'tipo' => 'verdadeiro_falso',
        'enunciado' => $enunciado,
        'resposta' => $verdadeiro ? 'verdadeiro' : 'falso',
        'alts' => ['Verdadeiro', 'Falso'],
        'dica' => $dica,
    ];
}

function emp(string $enunciado, array $pares, ?string $dica = null): array
{
    return ['tipo' => 'emparelhar', 'enunciado' => $enunciado, 'alts' => $pares, 'resposta' => json_encode($pares, JSON_UNESCAPED_UNICODE), 'dica' => $dica];
}

function ordena(string $enunciado, string $frase, ?string $dica = null): array
{
    $palavras = preg_split('/\s+/', $frase) ?: [];

    return ['tipo' => 'ordem', 'enunciado' => $enunciado, 'alts' => $palavras, 'resposta' => $frase, 'dica' => $dica];
}

function catalogo_minimo_aulas(): int
{
    return 4;
}

function catalogo_minimo_exercicios(): int
{
    return 8;
}

function catalogo_completar_exercicios(array $aula): array
{
    $ex = array_values($aula['exercicios'] ?? []);
    $min = catalogo_minimo_exercicios();
    if ($ex === []) {
        $aula['exercicios'] = [
            vf('Revise a teoria desta aula antes de responder.', true),
            t('Traduza a ideia principal da aula.', (string) ($aula['resumo'] ?? 'ok')),
        ];
        $ex = $aula['exercicios'];
    }
    $base = $ex;
    $i = 0;
    while (count($ex) < $min && $base) {
        $ex[] = $base[$i % count($base)];
        $i++;
        if ($i > 20) {
            break;
        }
    }
    $aula['exercicios'] = $ex;

    return $aula;
}

function catalogo_aula_pratica(array $aula, string $rotulo): array
{
    $ex = array_values($aula['exercicios'] ?? []);
    if (count($ex) > 2) {
        $ex = array_merge(array_slice($ex, 2), array_slice($ex, 0, 2));
    } else {
        $ex = array_reverse($ex);
    }

    return catalogo_completar_exercicios([
        'titulo' => $rotulo . ' · ' . ($aula['titulo'] ?? 'Atividades'),
        'resumo' => 'Mais atividades: ' . ($aula['resumo'] ?? $aula['titulo'] ?? ''),
        'teoria' => $aula['teoria'] ?? '',
        'xp' => $aula['xp'] ?? 10,
        'exercicios' => $ex,
    ]);
}

function catalogo_expandir_unidade(array $unidade): array
{
    $aulas = array_values($unidade['aulas'] ?? []);
    foreach ($aulas as $i => $aula) {
        $aulas[$i] = catalogo_completar_exercicios($aula);
    }
    $min = catalogo_minimo_aulas();
    $rotulos = ['Prática', 'Revisão', 'Mais atividades', 'Fixação'];
    $fonte = $aulas;
    $n = 0;
    while (count($aulas) < $min && $fonte) {
        $base = $fonte[$n % count($fonte)];
        $aulas[] = catalogo_aula_pratica($base, $rotulos[$n] ?? ('Atividade ' . ($n + 1)));
        $n++;
        if ($n > 8) {
            break;
        }
    }
    $unidade['aulas'] = $aulas;

    return $unidade;
}

function curso_ingles(): array
{
    return [
        'nome' => 'Inglês',
        'codigo' => 'en',
        'bandeira' => '🇬🇧',
        'descricao' => 'Do zero às conversas do dia a dia: saudações, família, números, comida, rotina e viagem.',
        'cor' => '#2563eb',
        'palavras' => [
            ['Hello', 'Olá', 'Hello, my name is Ana.', 'A1'],
            ['Hi', 'Oi', 'Hi! How are you?', 'A1'],
            ['Good morning', 'Bom dia', 'Good morning, class.', 'A1'],
            ['Goodbye', 'Tchau', 'Goodbye! See you tomorrow.', 'A1'],
            ['Please', 'Por favor', 'A coffee, please.', 'A1'],
            ['Thank you', 'Obrigado', 'Thank you very much.', 'A1'],
            ['Sorry', 'Desculpa', 'Sorry, I don’t understand.', 'A1'],
            ['Yes', 'Sim', 'Yes, I am Brazilian.', 'A1'],
            ['No', 'Não', 'No, I am not tired.', 'A1'],
            ['Name', 'Nome', 'What is your name?', 'A1'],
            ['Friend', 'Amigo', 'This is my friend.', 'A1'],
            ['Family', 'Família', 'I love my family.', 'A1'],
            ['Mother', 'Mãe', 'My mother is a teacher.', 'A1'],
            ['Father', 'Pai', 'My father cooks well.', 'A1'],
            ['Water', 'Água', 'I drink water every day.', 'A1'],
            ['Bread', 'Pão', 'I eat bread for breakfast.', 'A1'],
            ['Coffee', 'Café', 'I like coffee.', 'A1'],
            ['Today', 'Hoje', 'Today is Monday.', 'A1'],
            ['Tomorrow', 'Amanhã', 'See you tomorrow.', 'A1'],
            ['House', 'Casa', 'This is my house.', 'A1'],
            ['Station', 'Estação', 'Where is the station?', 'A1'],
            ['Ticket', 'Bilhete', 'One ticket, please.', 'A1'],
            ['Help', 'Ajuda', 'Can you help me?', 'A1'],
            ['Left', 'Esquerda', 'Turn left.', 'A1'],
            ['Right', 'Direita', 'Turn right.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Saudações',
                'descricao' => 'Cumprimente, apresente-se e se despeça.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Olá e tchau',
                        'resumo' => 'Hello, Hi, Good morning e Goodbye',
                        'teoria' => "Hello é o olá padrão. Hi é mais informal, entre amigos.\nGood morning = bom dia (até meio-dia).\nGood afternoon = boa tarde.\nGood evening = boa noite ao chegar.\nGood night = boa noite ao ir dormir.\nGoodbye / Bye / See you later = tchau.",
                        'exercicios' => [
                            m('Como se diz "olá" de forma mais formal?', ['Hi', 'Hello', 'Bye', 'Please'], 'Hello'),
                            m('Qual expressão usamos de manhã?', ['Good night', 'Good evening', 'Good morning', 'Goodbye'], 'Good morning'),
                            t('Traduza: Goodbye', 'tchau|adeus|até logo|ate logo'),
                            vf('"Hi" é mais informal do que "Hello".', true),
                            c('Complete: Good ______ (boa tarde)', 'afternoon'),
                            ordena('Monte a despedida:', 'See you later'),
                            emp('Una cada expressão.', [['Hello', 'Olá'], ['Bye', 'Tchau'], ['Good morning', 'Bom dia'], ['Good night', 'Boa noite']]),
                            m('O que dizemos ao ir dormir?', ['Good evening', 'Good night', 'Good afternoon', 'Hello'], 'Good night'),
                            m('Ouça e escolha: "See you tomorrow."', ['Até ontem', 'Até amanhã', 'Bom dia', 'Por favor'], 'Até amanhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Como vai você?',
                        'resumo' => 'How are you? e respostas',
                        'teoria' => "How are you? = Como vai você?\nI'm fine, thank you. / I'm good. / I'm great.\nNot bad. = Mais ou menos.\nAnd you? = E você?\nNice to meet you. = Prazer em conhecê-lo.",
                        'exercicios' => [
                            m('O que significa "How are you?"', ['Qual é o seu nome?', 'Como vai você?', 'Onde você mora?', 'Quantos anos você tem?'], 'Como vai você?'),
                            t('Traduza: I am fine', 'estou bem|eu estou bem|eu to bem'),
                            c('Complete: Nice to _____ you.', 'meet', 'Prazer em conhecê-lo.'),
                            vf('"And you?" significa "E você?"', true),
                            ordena('Monte a pergunta:', 'How are you'),
                            m('Resposta natural para "How are you?"', ['I am a student', 'I am fine, thank you', 'My name is John', 'Good night'], 'I am fine, thank you'),
                            emp('Una as frases.', [['How are you?', 'Como vai?'], ["I'm great", 'Estou ótimo'], ['Thank you', 'Obrigado'], ['And you?', 'E você?']]),
                            m('"Nice to meet you" se usa quando:', ['Pedimos a conta', 'Conhecemos alguém', 'Vamos dormir', 'Pedimos água'], 'Conhecemos alguém'),
                        ],
                    ],
                    [
                        'titulo' => 'Apresentações',
                        'resumo' => 'Nome, origem e nacionalidade',
                        'teoria' => "My name is Ana. / I'm Ana.\nWhat is your name?\nI am from Brazil. = Sou do Brasil.\nI am Brazilian. = Sou brasileiro(a).\nThis is my friend. = Este é meu amigo.\nNice to meet you. — Nice to meet you too.",
                        'exercicios' => [
                            m('Como perguntar o nome?', ['How are you?', 'Where are you from?', 'What is your name?', 'How old are you?'], 'What is your name?'),
                            c('Complete: My name _____ Carla.', 'is'),
                            t('Traduza: I am from Brazil', 'eu sou do brasil|sou do brasil'),
                            vf('"I am Brazilian" e "I am from Brazil" falam da origem.', true),
                            ordena('Toque nas palavras e monte a frase.', 'What is your name'),
                            m('Qual frase apresenta outra pessoa?', ['I am tired', 'This is my friend', 'See you later', 'Good morning'], 'This is my friend'),
                            c('Complete: I _____ from Brazil.', 'am'),
                            m('Where are you from? pergunta:', ['A idade', 'O nome', 'O país / a cidade', 'A hora'], 'O país / a cidade'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Pessoas e família',
                'descricao' => 'Família e o verbo to be.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'A família',
                        'resumo' => 'mother, father, brother, sister',
                        'teoria' => "mother / father / parents\nbrother / sister\nson / daughter\nhusband / wife\ngrandmother / grandfather\nbaby · uncle / aunt · cousin",
                        'exercicios' => [
                            m('Como se diz "mãe"?', ['father', 'sister', 'mother', 'brother'], 'mother'),
                            t('Traduza: brother', 'irmao|irmão'),
                            emp('Una cada termo à tradução.', [['father', 'pai'], ['sister', 'irmã'], ['son', 'filho'], ['wife', 'esposa']]),
                            vf('"Parents" significa pai e mãe.', true),
                            c('Complete: My _____ is a teacher. (pai)', 'father'),
                            m('O contrário de "son" é:', ['brother', 'husband', 'daughter', 'uncle'], 'daughter'),
                            ordena('Toque nas palavras e monte a frase.', 'This is my family'),
                            m('"Grandmother" é:', ['Tia', 'Avó', 'Prima', 'Sogra'], 'Avó'),
                        ],
                    ],
                    [
                        'titulo' => 'O verbo to be',
                        'resumo' => 'I am, you are, he is',
                        'teoria' => "I am / I'm · You are / You're\nHe/She/It is · We/They are\nNegativa: I'm not · she isn't · they aren't\nPergunta: Are you a student? Is she from Spain?",
                        'exercicios' => [
                            m('Qual forma está correta?', ['I is happy', 'I am happy', 'I are happy', 'I be happy'], 'I am happy'),
                            c('Complete: She _____ a doctor.', 'is'),
                            vf('A contração de "they are" é "they\'re".', true),
                            t('Traduza: We are friends', 'somos amigos|nós somos amigos|nos somos amigos'),
                            m('A negativa de "He is tall":', ['He not is tall', "He isn't tall", 'He no tall', 'He are not tall'], "He isn't tall"),
                            ordena('Toque nas palavras e monte a frase.', 'Are you a student'),
                            c('Complete: They _____ from Italy.', 'are'),
                            m('Qual pergunta está escrita corretamente?', ['Is you Brazilian?', 'Are you Brazilian?', 'You are Brazilian?', 'Do you Brazilian?'], 'Are you Brazilian?'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Números e tempo',
                'descricao' => 'Contar, dias e horas.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Números de 1 a 20',
                        'resumo' => 'one … twenty',
                        'teoria' => "1 one · 2 two · 3 three · 4 four · 5 five\n6 six · 7 seven · 8 eight · 9 nine · 10 ten\n11 eleven · 12 twelve · 13 thirteen · 15 fifteen · 20 twenty\nCuidado: thirteen (13) × thirty (30).",
                        'exercicios' => [
                            m('Como se escreve 8?', ['seven', 'nine', 'eight', 'eighteen'], 'eight'),
                            t('Traduza: fifteen', 'quinze'),
                            c('Complete: 12 = ______', 'twelve'),
                            vf('"Thirteen" é 30.', false, 'Thirteen é 13. Thirty é 30.'),
                            emp('Una cada termo à tradução.', [['one', '1'], ['five', '5'], ['ten', '10'], ['twenty', '20']]),
                            m('Qual é o 11?', ['twelve', 'eleven', 'seven', 'sixteen'], 'eleven'),
                            c('Complete: 3 = ______', 'three'),
                            m('How old are you? pergunta:', ['A hora', 'A idade', 'O nome', 'O preço'], 'A idade'),
                        ],
                    ],
                    [
                        'titulo' => 'Dias e horas',
                        'resumo' => 'Dias da semana e What time is it?',
                        'teoria' => "Monday … Sunday (em inglês começam com maiúscula).\nToday · Tomorrow · Yesterday\nWhat time is it?\nIt's three o'clock. · It's half past two. = duas e meia.",
                        'exercicios' => [
                            m('Depois de Monday vem:', ['Sunday', 'Tuesday', 'Friday', 'Saturday'], 'Tuesday'),
                            t('Traduza: Tomorrow', 'amanha|amanhã'),
                            c('Complete: What _____ is it?', 'time'),
                            vf('Friday é sexta-feira.', true),
                            ordena('Toque nas palavras e monte a frase.', 'What time is it'),
                            m("It's three o'clock significa:", ['São duas horas', 'São três horas', 'São três e meia', 'Que horas são?'], 'São três horas'),
                            emp('Una os dias.', [['Monday', 'segunda'], ['Friday', 'sexta'], ['Sunday', 'domingo'], ['Saturday', 'sábado']]),
                            m('"Yesterday" é:', ['Hoje', 'Amanhã', 'Ontem', 'Agora'], 'Ontem'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Comida e bebida',
                'descricao' => 'Pedir no café e dizer o que você gosta.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'No café',
                        'resumo' => 'Pedidos: water, coffee, menu',
                        'teoria' => "water · coffee · tea · juice · milk\nbread · apple · rice · chicken\nI would like… = Eu gostaria de…\nA coffee, please. · Can I have the menu, please?\nThe bill, please. = A conta, por favor.",
                        'exercicios' => [
                            m('Como se diz "água"?', ['water', 'wine', 'waiter', 'weather'], 'water'),
                            t('Traduza: I would like a coffee', 'eu gostaria de um cafe|gostaria de um café|eu gostaria de um café'),
                            c('Complete: A sandwich, ______.', 'please'),
                            emp('Una cada termo à tradução.', [['bread', 'pão'], ['apple', 'maçã'], ['tea', 'chá'], ['milk', 'leite']]),
                            vf('"Chicken" significa frango.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Can I have the menu please'),
                            m('Pedido correto:', ['I want coffee please the', 'A coffee, please', 'Coffee I please', 'Please coffee a'], 'A coffee, please'),
                            m('The bill, please pede:', ['O cardápio', 'A conta', 'Água', 'Um táxi'], 'A conta'),
                        ],
                    ],
                    [
                        'titulo' => 'Eu gosto / não gosto',
                        'resumo' => 'I like / I don’t like',
                        'teoria' => "I like pizza.\nI don't like onions.\nDo you like chocolate? Yes, I do. / No, I don't.\nI love… é mais forte que I like…",
                        'exercicios' => [
                            m('Como dizer que você gosta de café?', ['I like coffee', 'I am coffee', 'I have like coffee', 'Coffee I like not'], 'I like coffee'),
                            c("Complete: I _____ like onions.", "don't|do not"),
                            t('Traduza: Do you like chocolate?', 'voce gosta de chocolate|você gosta de chocolate'),
                            vf('"I love tea" é mais forte do que "I like tea".', true),
                            ordena('Toque nas palavras e monte a frase.', 'I like pizza'),
                            m('Negativa para "Do you like fish?"', ['Yes, I do', "No, I don't", 'I am not', 'No I not'], "No, I don't"),
                            emp('Una cada termo à tradução.', [['I like', 'Eu gosto'], ["I don't like", 'Eu não gosto'], ['I love', 'Eu amo'], ['I hate', 'Eu odeio']]),
                            m('Qual pergunta está escrita corretamente?', ['Like you coffee?', 'Do you like coffee?', 'You like do coffee?', 'Does you like coffee?'], 'Do you like coffee?'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Rotina',
                'descricao' => 'O dia a dia e o present simple.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'O meu dia',
                        'resumo' => 'wake up, eat, go, work, sleep',
                        'teoria' => "wake up / get up\nhave breakfast / lunch / dinner\ngo to work / go to school\nstudy · work · cook · watch TV · read · sleep\nI wake up at seven o'clock.",
                        'exercicios' => [
                            m('O que significa "wake up"?', ['dormir', 'acordar', 'trabalhar', 'cozinhar'], 'acordar'),
                            t('Traduza: I go to school', 'eu vou para a escola|vou para a escola|eu vou a escola'),
                            c('Complete: I _____ breakfast at 8.', 'have|eat'),
                            emp('Una cada termo à tradução.', [['sleep', 'dormir'], ['cook', 'cozinhar'], ['study', 'estudar'], ['work', 'trabalhar']]),
                            vf('"Have dinner" significa jantar.', true),
                            ordena('Toque nas palavras e monte a frase.', 'I wake up at seven'),
                            m('Qual descreve uma rotina?', ['I am a book', 'I watch TV in the evening', 'This is TV', 'Good evening TV'], 'I watch TV in the evening'),
                            m('"Get up" é:', ['Sentar', 'Levantar da cama', 'Viajar', 'Ligar'], 'Levantar da cama'),
                        ],
                    ],
                    [
                        'titulo' => 'Present simple',
                        'resumo' => 'Hábitos: I work / She works',
                        'teoria' => "Hábitos e rotinas.\nI/you/we/they work.\nHe/she/it works.\nNegativa: I don't · She doesn't\nPergunta: Do you work? Does he work?",
                        'exercicios' => [
                            m('Qual frase está correta?', ['She work here', 'She works here', 'She working here', 'She do work here'], 'She works here'),
                            c("Complete: He _____ (not) eat meat.", "doesn't|does not"),
                            vf('Depois de he/she/it, o verbo ganha -s.', true),
                            t('Traduza: Do you work?', 'voce trabalha|você trabalha'),
                            ordena('Toque nas palavras e monte a frase.', 'She works in a hospital'),
                            m('Qual pergunta está escrita corretamente?', ['Does they study?', 'Do she study?', 'Do they study?', 'Does you study?'], 'Do they study?'),
                            emp('Una cada termo à tradução.', [['I work', 'Eu trabalho'], ['She works', 'Ela trabalha'], ["I don't work", 'Eu não trabalho'], ['Does he work?', 'Ele trabalha?']]),
                            m('Para he/she usamos:', ['Do', 'Does', 'Are', 'Is'], 'Does'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Na cidade',
                'descricao' => 'Pedir informação, caminho e ajuda.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Onde fica?',
                        'resumo' => 'Where is…? left, right, station',
                        'teoria' => "Where is the station / bathroom / hotel?\nTurn left. · Turn right. · Go straight.\nIt's near here. · It's over there.\nExcuse me… = Com licença…",
                        'exercicios' => [
                            m('Como perguntar onde fica a estação?', ['What is the station?', 'Where is the station?', 'Who is the station?', 'How is the station?'], 'Where is the station?'),
                            t('Traduza: Turn left', 'vire a esquerda|vire à esquerda|vá à esquerda|vira a esquerda'),
                            c('Complete: Go ______ (em frente).', 'straight'),
                            emp('Una cada termo à tradução.', [['left', 'esquerda'], ['right', 'direita'], ['station', 'estação'], ['hotel', 'hotel']]),
                            vf('"Excuse me" serve para chamar atenção com educação.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Where is the bathroom'),
                            m('"It\'s near here" significa:', ['Está longe', 'Está perto', 'Está fechado', 'Está caro'], 'Está perto'),
                            m('Com licença, em inglês:', ['Sorry night', 'Excuse me', 'See you', 'Good luck'], 'Excuse me'),
                        ],
                    ],
                    [
                        'titulo' => 'Não entendi',
                        'resumo' => 'Help, slowly, I don’t understand',
                        'teoria' => "I don't understand.\nCan you repeat, please?\nCan you speak slowly?\nCan you help me?\nHow much is it? = Quanto custa?\nI need a ticket / a taxi / a doctor.",
                        'exercicios' => [
                            m('Como dizer que não entendeu?', ["I don't understand", 'I am understand', 'No understand I', 'I not'], "I don't understand"),
                            t('Traduza: Can you help me?', 'voce pode me ajudar|você pode me ajudar|pode me ajudar'),
                            c('Complete: How _____ is it?', 'much'),
                            emp('Una cada termo à tradução.', [['ticket', 'bilhete'], ['taxi', 'táxi'], ['doctor', 'médico'], ['help', 'ajuda']]),
                            vf('"Can you repeat, please?" pede para repetir.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Can you speak slowly'),
                            m('How much is it? pergunta:', ['A hora', 'O preço', 'O nome', 'O caminho'], 'O preço'),
                            m('I need a doctor. é para:', ['Pedir café', 'Emergência / saúde', 'Comprar bilhete', 'Dizer oi'], 'Emergência / saúde'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function curso_espanhol(): array
{
    return [
        'nome' => 'Espanhol',
        'codigo' => 'es',
        'bandeira' => '🇪🇸',
        'descricao' => 'Saudações, família, números, comida e frases para viajar.',
        'cor' => '#dc2626',
        'palavras' => [
            ['Hola', 'Olá', '¡Hola! ¿Cómo estás?', 'A1'],
            ['Adiós', 'Tchau', 'Adiós, hasta mañana.', 'A1'],
            ['Gracias', 'Obrigado', 'Muchas gracias.', 'A1'],
            ['Por favor', 'Por favor', 'Un café, por favor.', 'A1'],
            ['Perdón', 'Desculpa', 'Perdón, no entiendo.', 'A1'],
            ['Sí', 'Sim', 'Sí, soy brasileño.', 'A1'],
            ['No', 'Não', 'No, no estoy cansado.', 'A1'],
            ['Agua', 'Água', 'Quiero agua.', 'A1'],
            ['Amigo', 'Amigo', 'Él es mi amigo.', 'A1'],
            ['Casa', 'Casa', 'Esta es mi casa.', 'A1'],
            ['Buenos días', 'Bom dia', 'Buenos días, clase.', 'A1'],
            ['Madre', 'Mãe', 'Mi madre es médica.', 'A1'],
            ['Pan', 'Pão', 'Quiero pan, por favor.', 'A1'],
            ['Hoy', 'Hoje', 'Hoy es lunes.', 'A1'],
            ['Mañana', 'Amanhã', 'Hasta mañana.', 'A1'],
            ['Estación', 'Estação', '¿Dónde está la estación?', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Saudações',
                'descricao' => 'Cumprimentos e cortesia.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Hola y adiós',
                        'resumo' => 'Hola, buenos días, gracias',
                        'teoria' => "Hola = olá\nBuenos días / Buenas tardes / Buenas noches\nAdiós · Chao · Hasta luego · Hasta mañana\nPor favor · Gracias · De nada · Perdón",
                        'exercicios' => [
                            m('Como se diz "olá"?', ['Adiós', 'Hola', 'Gracias', 'Perdón'], 'Hola'),
                            t('Traduza: Gracias', 'obrigado|obrigada'),
                            c('Complete: Buenos ______', 'dias|días'),
                            vf('"Hasta luego" significa até logo.', true),
                            emp('Una cada termo à tradução.', [['Hola', 'Olá'], ['Adiós', 'Tchau'], ['Por favor', 'Por favor'], ['De nada', 'De nada']]),
                            ordena('Toque nas palavras e monte a frase.', 'Muchas gracias'),
                            m('De manhã dizemos:', ['Buenas noches', 'Buenos días', 'Hasta mañana', 'Perdón'], 'Buenos días'),
                            m('Ouça: "De nada." Significa:', ['Por favor', 'De nada', 'Desculpa', 'Tchau'], 'De nada'),
                        ],
                    ],
                    [
                        'titulo' => '¿Cómo estás?',
                        'resumo' => 'Como você está? e o nome',
                        'teoria' => "¿Cómo estás? (tú) / ¿Cómo está usted?\nEstoy bien. · Más o menos. · Estoy mal.\n¿Y tú?\nMe llamo Ana. · ¿Cómo te llamas?\nMucho gusto.",
                        'exercicios' => [
                            m('"¿Cómo estás?" significa:', ['Qual é o seu nome?', 'Como você está?', 'De onde você é?', 'Quantos anos?'], 'Como você está?'),
                            c('Complete: Me _____ Ana.', 'llamo'),
                            t('Traduza: Estoy bien', 'estou bem|eu estou bem'),
                            vf('"¿Cómo te llamas?" pergunta o nome.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Como te llamas'),
                            m('Resposta para "¿Cómo estás?"', ['Me llamo Pedro', 'Estoy bien', 'Soy casa', 'Hasta luego'], 'Estoy bien'),
                            emp('Una cada termo à tradução.', [['¿Cómo estás?', 'Como vai?'], ['Estoy bien', 'Estou bem'], ['¿Y tú?', 'E você?'], ['Me llamo', 'Meu nome é']]),
                            m('"Mucho gusto" se usa:', ['Para pedir a conta', 'Ao conhecer alguém', 'Para pedir água', 'Para dizer tchau'], 'Ao conhecer alguém'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Família e ser',
                'descricao' => 'Parentes e o verbo ser.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'La familia',
                        'resumo' => 'madre, padre, hermano',
                        'teoria' => "madre · padre · hermano/a\nhijo/a · abuelo/a\nmarido · esposa · amigo/a\nEn español, o gênero muda a palavra: amigo / amiga.",
                        'exercicios' => [
                            m('Como se diz "pai"?', ['madre', 'padre', 'primo', 'tío'], 'padre'),
                            t('Traduza: hermana', 'irma|irmã'),
                            emp('Una cada termo à tradução.', [['madre', 'mãe'], ['hijo', 'filho'], ['abuela', 'avó'], ['amigo', 'amigo']]),
                            c('Complete: Mi _____ es médica. (mãe)', 'madre'),
                            vf('"Hermanos" pode significar irmãos em geral.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Esta es mi familia'),
                            m('"Hija" é:', ['Filho', 'Filha', 'Tia', 'Prima'], 'Filha'),
                            m('Ouça: "Mi padre."', ['Minha mãe', 'Meu pai', 'Meu irmão', 'Meu avô'], 'Meu pai'),
                        ],
                    ],
                    [
                        'titulo' => 'El verbo ser',
                        'resumo' => 'Yo soy, tú eres, él es',
                        'teoria' => "yo soy · tú eres · él/ella es\nnosotros somos · ellos son\nSoy de Brasil. · Ella es profesora.\nNegativa: No soy italiano.\n¿De dónde eres?",
                        'exercicios' => [
                            m('Qual frase está correta?', ['Yo eres Ana', 'Yo soy Ana', 'Yo es Ana', 'Yo somo Ana'], 'Yo soy Ana'),
                            c('Complete: Ella _____ profesora.', 'es'),
                            t('Traduza: Somos amigos', 'somos amigos|nós somos amigos'),
                            vf('"Tú eres" é informal para "você é".', true),
                            ordena('Toque nas palavras e monte a frase.', 'Soy de Brasil'),
                            m('Negativa correta:', ['Yo no soy italiano', 'Yo soy no italiano', 'No yo italiano', 'Yo no es italiano'], 'Yo no soy italiano'),
                            emp('Una cada termo à tradução.', [['yo soy', 'eu sou'], ['tú eres', 'você é'], ['ella es', 'ela é'], ['nosotros somos', 'nós somos']]),
                            m('¿De dónde eres? pergunta:', ['A idade', 'A origem', 'A hora', 'O nome'], 'A origem'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Números e dias',
                'descricao' => 'Contar e falar do tempo.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Números 1 a 20',
                        'resumo' => 'uno, dos, tres…',
                        'teoria' => "1 uno · 2 dos · 3 tres · 4 cuatro · 5 cinco\n6 seis · 7 siete · 8 ocho · 9 nueve · 10 diez\n11 once · 12 doce · 15 quince · 20 veinte",
                        'exercicios' => [
                            m('Como se diz 8?', ['siete', 'ocho', 'nueve', 'once'], 'ocho'),
                            t('Traduza: quince', 'quinze'),
                            c('Complete: 10 = ______', 'diez'),
                            emp('Una cada termo à tradução.', [['uno', '1'], ['cinco', '5'], ['diez', '10'], ['veinte', '20']]),
                            vf('"Once" é 11.', true),
                            m('Qual é o 3?', ['tres', 'trece', 'treinta', 'seis'], 'tres'),
                            c('Complete: 2 = ______', 'dos'),
                            m('¿Cuántos años tienes? pergunta:', ['A hora', 'A idade', 'O preço', 'O nome'], 'A idade'),
                        ],
                    ],
                    [
                        'titulo' => 'Dias e horas',
                        'resumo' => 'lunes… domingo e ¿Qué hora es?',
                        'teoria' => "lunes, martes, miércoles, jueves, viernes, sábado, domingo.\nhoy · mañana · ayer\n¿Qué hora es? · Son las tres. · Es la una.",
                        'exercicios' => [
                            m('Depois de lunes vem:', ['domingo', 'martes', 'viernes', 'sábado'], 'martes'),
                            t('Traduza: mañana', 'amanha|amanhã'),
                            c('Complete: ¿Qué _____ es?', 'hora'),
                            vf('Viernes é sexta-feira.', true),
                            emp('Una cada termo à tradução.', [['lunes', 'segunda'], ['viernes', 'sexta'], ['domingo', 'domingo'], ['sábado', 'sábado']]),
                            m('Son las tres significa:', ['É uma hora', 'São três horas', 'São treze horas', 'Que horas são?'], 'São três horas'),
                            ordena('Toque nas palavras e monte a frase.', 'Que hora es'),
                            m('"Ayer" é:', ['Hoje', 'Amanhã', 'Ontem', 'Agora'], 'Ontem'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Comida',
                'descricao' => 'Pedir no bar e falar o que gosta.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'En el bar',
                        'resumo' => 'agua, café, la cuenta',
                        'teoria' => "agua · café · té · jugo · pan\nQuiero un café, por favor.\nLa carta, por favor. · La cuenta, por favor.\n¿Algo más?",
                        'exercicios' => [
                            m('Como se diz "água"?', ['agua', 'fuego', 'aire', 'vino'], 'agua'),
                            t('Traduza: Un café, por favor', 'um cafe por favor|um café, por favor|um café por favor'),
                            c('Complete: La ______, por favor. (a conta)', 'cuenta'),
                            emp('Una cada termo à tradução.', [['pan', 'pão'], ['café', 'café'], ['té', 'chá'], ['leche', 'leite']]),
                            vf('"La carta" no restaurante é o cardápio.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Quiero un cafe por favor'),
                            m('Pedido correto:', ['Café yo quiero el', 'Quiero un café, por favor', 'Por café quiero', 'Un por favor café'], 'Quiero un café, por favor'),
                            m('¿Algo más? pergunta se:', ['Você tem fome', 'Quer mais alguma coisa', 'Já pagou', 'Fala espanhol'], 'Quer mais alguma coisa'),
                        ],
                    ],
                    [
                        'titulo' => 'Me gusta',
                        'resumo' => 'Gostar e não gostar',
                        'teoria' => "Me gusta el café. · No me gusta el pescado.\n¿Te gusta el chocolate?\nMe encanta… é mais forte que me gusta.",
                        'exercicios' => [
                            m('Como dizer que gosta de café?', ['Me gusta el café', 'Yo soy café', 'Gusto café yo', 'El café me no'], 'Me gusta el café'),
                            c('Complete: No me _____ el pescado.', 'gusta'),
                            t('Traduza: ¿Te gusta el chocolate?', 'voce gosta de chocolate|você gosta de chocolate'),
                            vf('"Me encanta" é mais forte que "me gusta".', true),
                            emp('Una cada termo à tradução.', [['me gusta', 'eu gosto'], ['no me gusta', 'eu não gosto'], ['me encanta', 'eu amo'], ['chocolate', 'chocolate']]),
                            m('Qual pergunta está escrita corretamente?', ['¿Gusta te café?', '¿Te gusta el café?', '¿Tú gusto café?', '¿Gustas el?'], '¿Te gusta el café?'),
                            ordena('Toque nas palavras e monte a frase.', 'Me gusta la pizza'),
                            m('Resposta negativa:', ['Sí, me gusta', 'No me gusta', 'Yo soy no', 'Nada café'], 'No me gusta'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Na cidade',
                'descricao' => 'Caminho, preço e ajuda.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => '¿Dónde está?',
                        'resumo' => 'Estação, esquerda e direita',
                        'teoria' => "¿Dónde está la estación / el baño / el hotel?\nA la izquierda. · A la derecha. · Todo recto.\nEstá cerca. · Perdón…",
                        'exercicios' => [
                            m('Onde fica a estação?', ['¿Qué es la estación?', '¿Dónde está la estación?', '¿Quién es la estación?', '¿Cómo está la estación?'], '¿Dónde está la estación?'),
                            t('Traduza: A la izquierda', 'a esquerda|à esquerda|na esquerda'),
                            c('Complete: A la ______ (direita)', 'derecha'),
                            emp('Una cada termo à tradução.', [['estación', 'estação'], ['baño', 'banheiro'], ['cerca', 'perto'], ['lejos', 'longe']]),
                            vf('"Todo recto" significa siga em frente.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Donde esta el bano'),
                            m('"Está cerca" é:', ['Está caro', 'Está perto', 'Está fechado', 'Está tarde'], 'Está perto'),
                            m('Perdón serve para:', ['Pedir café', 'Pedir desculpas / atenção', 'Dizer oi', 'Contar até 10'], 'Pedir desculpas / atenção'),
                        ],
                    ],
                    [
                        'titulo' => 'No entiendo',
                        'resumo' => 'Repetir, devagar, quanto custa',
                        'teoria' => "No entiendo. · ¿Puede repetir, por favor?\nMás despacio, por favor.\n¿Cuánto cuesta? · Necesito un taxi / un médico / un billete.",
                        'exercicios' => [
                            m('Como dizer que não entendeu?', ['No entiendo', 'Yo entiendo no', 'No soy entiendo', 'Nada yo'], 'No entiendo'),
                            t('Traduza: ¿Cuánto cuesta?', 'quanto custa|quanto custa?'),
                            c('Complete: Más ______, por favor. (devagar)', 'despacio'),
                            emp('Una cada termo à tradução.', [['billete', 'bilhete'], ['médico', 'médico'], ['taxi', 'táxi'], ['ayuda', 'ajuda']]),
                            vf('"¿Puede repetir?" pede para repetir.', true),
                            m('Necesito un médico. é para:', ['Pedir sobremesa', 'Problema de saúde', 'Comprar pão', 'Dizer tchau'], 'Problema de saúde'),
                            ordena('Toque nas palavras e monte a frase.', 'Necesito un taxi'),
                            m('¿Habla inglés? pergunta se a pessoa:', ['Mora na Inglaterra', 'Fala inglês', 'Gosta de inglês', 'É professora'], 'Fala inglês'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function curso_frances(): array
{
    return [
        'nome' => 'Francês',
        'codigo' => 'fr',
        'bandeira' => '🇫🇷',
        'descricao' => 'Cumprimentos, família, números, café e sobrevivência na cidade.',
        'cor' => '#1d4ed8',
        'palavras' => [
            ['Bonjour', 'Bom dia / Olá', 'Bonjour, madame.', 'A1'],
            ['Salut', 'Oi', 'Salut ! Ça va ?', 'A1'],
            ['Merci', 'Obrigado', 'Merci beaucoup.', 'A1'],
            ['Au revoir', 'Tchau', 'Au revoir et à bientôt.', 'A1'],
            ['Oui', 'Sim', 'Oui, je suis brésilien.', 'A1'],
            ['Non', 'Não', 'Non, merci.', 'A1'],
            ['S\'il vous plaît', 'Por favor', 'Un café, s\'il vous plaît.', 'A1'],
            ['Eau', 'Água', "Je voudrais de l'eau.", 'A1'],
            ['Mère', 'Mãe', 'Ma mère est professeure.', 'A1'],
            ['Pain', 'Pão', 'Je voudrais du pain.', 'A1'],
            ['Aujourd\'hui', 'Hoje', "Aujourd'hui c'est lundi.", 'A1'],
            ['Demain', 'Amanhã', 'À demain.', 'A1'],
            ['Gare', 'Estação', 'Où est la gare ?', 'A1'],
            ['Pardon', 'Desculpa', 'Pardon, je ne comprends pas.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Saudações',
                'descricao' => 'Olá, tchau e educação.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Bonjour',
                        'resumo' => 'Bonjour, salut, merci',
                        'teoria' => "Bonjour = olá / bom dia (o mais seguro)\nSalut = oi (informal)\nBonsoir = boa noite ao chegar\nAu revoir · À bientôt\nMerci · S'il vous plaît · De rien · Pardon",
                        'exercicios' => [
                            m('Cumprimento formal:', ['Salut', 'Bonjour', 'Ciao', 'Bye'], 'Bonjour'),
                            t('Traduza: Merci', 'obrigado|obrigada'),
                            c('Complete: Au ______', 'revoir'),
                            vf('"Salut" é informal.', true),
                            emp('Una cada termo à tradução.', [['Bonjour', 'Olá'], ['Merci', 'Obrigado'], ['Au revoir', 'Tchau'], ['De rien', 'De nada']]),
                            m('"Por favor" formal:', ["S'il vous plaît", 'De rien', 'Pardon', 'Voilà'], "S'il vous plaît"),
                            m('Ouça: "À bientôt."', ['Até logo', 'Bom dia', 'Obrigado', 'Água'], 'Até logo'),
                            vf('"Bonsoir" se usa ao chegar à noite, não para ir dormir.', true),
                        ],
                    ],
                    [
                        'titulo' => 'Comment ça va ?',
                        'resumo' => 'Como vai? e o nome',
                        'teoria' => "Comment ça va ? / Ça va ?\nÇa va bien. · Comme ci, comme ça. · Ça ne va pas.\nJe m'appelle Marie. · Comment tu t'appelles ?\nEnchanté(e).",
                        'exercicios' => [
                            m('"Comment ça va ?" significa:', ['Qual é o seu nome?', 'Como vai?', 'Onde você mora?', 'Que horas são?'], 'Como vai?'),
                            c("Complete: Je m'______ Paul.", 'appelle'),
                            t('Traduza: Ça va bien', 'vai bem|estou bem|isso vai bem'),
                            vf('"Enchanté" se usa ao conhecer alguém.', true),
                            m('Resposta positiva:', ['Au revoir', 'Ça va bien', "S'il vous plaît", 'Bonsoir'], 'Ça va bien'),
                            emp('Una cada termo à tradução.', [['Ça va ?', 'Como vai?'], ['Je m\'appelle', 'Meu nome é'], ['Enchanté', 'Prazer'], ['Oui', 'Sim']]),
                            m('"Comment tu t\'appelles ?" pergunta:', ['A idade', 'O nome', 'A origem', 'A hora'], 'O nome'),
                            m('Comme ci, comme ça significa:', ['Ótimo', 'Mais ou menos', 'Péssimo', 'Obrigado'], 'Mais ou menos'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Família e être',
                'descricao' => 'Parentes e o verbo être.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'La famille',
                        'resumo' => 'mère, père, frère, sœur',
                        'teoria' => "mère · père · parents\nfrère · sœur · fils · fille\ngrand-mère · grand-père\nami / amie",
                        'exercicios' => [
                            m('Como se diz "mãe"?', ['père', 'mère', 'frère', 'sœur'], 'mère'),
                            t('Traduza: frère', 'irmao|irmão'),
                            emp('Una cada termo à tradução.', [['père', 'pai'], ['sœur', 'irmã'], ['fille', 'filha'], ['ami', 'amigo']]),
                            c('Complete: Ma _____ est professeure. (mãe)', 'mere|mère'),
                            vf('"Parents" em francês também é pai e mãe.', true),
                            m('"Fils" é:', ['Filha', 'Filho', 'Tio', 'Primo'], 'Filho'),
                            ordena('Toque nas palavras e monte a frase.', 'Cest ma famille'),
                            m('Ouça: "mon père"', ['minha mãe', 'meu pai', 'meu irmão', 'minha tia'], 'meu pai'),
                        ],
                    ],
                    [
                        'titulo' => 'Le verbe être',
                        'resumo' => 'je suis, tu es, il est',
                        'teoria' => "je suis · tu es · il/elle est\nnous sommes · vous êtes · ils/elles sont\nJe suis brésilien. · Elle est professeure.\nJe ne suis pas italien.\nTu es d'où ?",
                        'exercicios' => [
                            m('Qual frase está correta?', ['Je es Marie', 'Je suis Marie', 'Je est Marie', 'Je som Marie'], 'Je suis Marie'),
                            c('Complete: Elle _____ professeure.', 'est'),
                            t('Traduza: Nous sommes amis', 'somos amigos|nós somos amigos'),
                            vf('"Tu es" é a forma informal de "você é".', true),
                            emp('Una cada termo à tradução.', [['je suis', 'eu sou'], ['tu es', 'você é'], ['elle est', 'ela é'], ['nous sommes', 'nós somos']]),
                            m('Qual é a forma negativa correta?', ['Je ne suis pas italien', 'Je suis ne italien', 'Je pas suis', 'Je no suis'], 'Je ne suis pas italien'),
                            m('Tu es d\'où ? pergunta:', ['A hora', 'A origem', 'O nome', 'A idade'], 'A origem'),
                            c('Complete: Nous ______ brésiliens.', 'sommes'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Números e dias',
                'descricao' => 'Contar e falar do calendário.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Números 1 a 20',
                        'resumo' => 'un, deux, trois…',
                        'teoria' => "1 un · 2 deux · 3 trois · 4 quatre · 5 cinq\n6 six · 7 sept · 8 huit · 9 neuf · 10 dix\n11 onze · 12 douze · 15 quinze · 20 vingt",
                        'exercicios' => [
                            m('Como se diz 8?', ['sept', 'huit', 'neuf', 'onze'], 'huit'),
                            t('Traduza: quinze', 'quinze'),
                            c('Complete: 10 = ______', 'dix'),
                            emp('Una cada termo à tradução.', [['un', '1'], ['cinq', '5'], ['dix', '10'], ['vingt', '20']]),
                            vf('"Onze" é 11.', true),
                            m('Qual é o 3?', ['trois', 'treize', 'trente', 'six'], 'trois'),
                            c('Complete: 2 = ______', 'deux'),
                            m('Quel âge as-tu ? pergunta:', ['A hora', 'A idade', 'O preço', 'O nome'], 'A idade'),
                        ],
                    ],
                    [
                        'titulo' => 'Jours et heures',
                        'resumo' => 'lundi… dimanche e Quelle heure',
                        'teoria' => "lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche.\naujourd'hui · demain · hier\nQuelle heure est-il ? · Il est trois heures.",
                        'exercicios' => [
                            m('Depois de lundi vem:', ['dimanche', 'mardi', 'vendredi', 'samedi'], 'mardi'),
                            t('Traduza: demain', 'amanha|amanhã'),
                            c('Complete: Quelle _____ est-il ?', 'heure'),
                            vf('Vendredi é sexta-feira.', true),
                            emp('Una cada termo à tradução.', [['lundi', 'segunda'], ['vendredi', 'sexta'], ['dimanche', 'domingo'], ['samedi', 'sábado']]),
                            m('Il est trois heures significa:', ['É uma hora', 'São três horas', 'São treze', 'Que horas?'], 'São três horas'),
                            m('"Hier" é:', ['Hoje', 'Amanhã', 'Ontem', 'Agora'], 'Ontem'),
                            ordena('Toque nas palavras e monte a frase.', 'Il est trois heures'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Café',
                'descricao' => 'Pedir comida e dizer o que gosta.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Au café',
                        'resumo' => 'eau, café, l’addition',
                        'teoria' => "eau · café · thé · pain\nJe voudrais un café, s'il vous plaît.\nL'addition, s'il vous plaît. = a conta\nLa carte, s'il vous plaît. = o cardápio",
                        'exercicios' => [
                            m('Como se diz "água"?', ['eau', 'feu', 'vin', 'lait'], 'eau'),
                            t('Traduza: Je voudrais un café', 'eu gostaria de um cafe|gostaria de um café|eu gostaria de um café'),
                            c("Complete: L'______, s'il vous plaît. (a conta)", 'addition'),
                            emp('Una cada termo à tradução.', [['pain', 'pão'], ['café', 'café'], ['thé', 'chá'], ['lait', 'leite']]),
                            vf('"La carte" no restaurante é o cardápio.', true),
                            m('Pedido correto:', ['Café je veux le', "Un café, s'il vous plaît", 'Café s il', 'Un s il café'], "Un café, s'il vous plaît"),
                            m('Ouça: "pain"', ['pão', 'pai', 'água', 'peixe'], 'pão'),
                            ordena('Toque nas palavras e monte a frase.', 'Je voudrais de leau'),
                        ],
                    ],
                    [
                        'titulo' => 'J’aime',
                        'resumo' => 'Gostar e não gostar',
                        'teoria' => "J'aime le chocolat. · Je n'aime pas le poisson.\nTu aimes le café ?\nJ'adore… é mais forte que j'aime.",
                        'exercicios' => [
                            m('Como dizer que gosta de café?', ["J'aime le café", 'Je suis café', 'Aime je café', 'Le café j aime pas'], "J'aime le café"),
                            c("Complete: Je n'_____ pas le poisson.", 'aime'),
                            t('Traduza: Tu aimes le chocolat ?', 'voce gosta de chocolate|você gosta de chocolate'),
                            vf('"J\'adore" é mais forte que "j\'aime".', true),
                            emp('Una cada termo à tradução.', [["j'aime", 'eu gosto'], ["je n'aime pas", 'eu não gosto'], ["j'adore", 'eu amo'], ['poisson', 'peixe']]),
                            m('Qual pergunta está escrita corretamente?', ['Aimes tu le ?', 'Tu aimes le café ?', 'Tu aime café ?', 'Aime tu café'], 'Tu aimes le café ?'),
                            m('Resposta negativa:', ["Oui, j'aime", "Non, je n'aime pas", 'Je suis non', 'Pas café moi'], "Non, je n'aime pas"),
                            ordena('Toque nas palavras e monte a frase.', 'Jaime le chocolat'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Na cidade',
                'descricao' => 'Caminho, preço e “não entendi”.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Où est… ?',
                        'resumo' => 'Gare, gauche, droite',
                        'teoria' => "Où est la gare / les toilettes / l'hôtel ?\nÀ gauche. · À droite. · Tout droit.\nC'est près. · Pardon…",
                        'exercicios' => [
                            m('Onde fica a estação?', ['Qu\'est-ce que la gare ?', 'Où est la gare ?', 'Qui est la gare ?', 'Comment est la gare ?'], 'Où est la gare ?'),
                            t('Traduza: À gauche', 'a esquerda|à esquerda|na esquerda'),
                            c('Complete: À ______ (direita)', 'droite'),
                            emp('Una cada termo à tradução.', [['gare', 'estação'], ['toilettes', 'banheiro'], ['près', 'perto'], ['loin', 'longe']]),
                            vf('"Tout droit" significa em frente.', true),
                            m('"C\'est près" é:', ['Está caro', 'Está perto', 'Está fechado', 'Está tarde'], 'Está perto'),
                            m('Pardon serve para:', ['Pedir vinho', 'Pedir desculpas / atenção', 'Contar', 'Dizer oi'], 'Pedir desculpas / atenção'),
                            ordena('Toque nas palavras e monte a frase.', 'Ou est la gare'),
                        ],
                    ],
                    [
                        'titulo' => 'Je ne comprends pas',
                        'resumo' => 'Repetir, devagar, preço',
                        'teoria' => "Je ne comprends pas.\nVous pouvez répéter, s'il vous plaît ?\nPlus lentement, s'il vous plaît.\nC'est combien ? · J'ai besoin d'un taxi / d'un médecin.",
                        'exercicios' => [
                            m('Não entendi:', ['Je ne comprends pas', 'Je comprends ne', 'Pas je suis', 'Je no'], 'Je ne comprends pas'),
                            t('Traduza: C\'est combien ?', 'quanto custa|quanto é|quanto custa?'),
                            c('Complete: Plus ______, s\'il vous plaît. (devagar)', 'lentement'),
                            emp('Una cada termo à tradução.', [['billet', 'bilhete'], ['médecin', 'médico'], ['taxi', 'táxi'], ['aide', 'ajuda']]),
                            vf('"Vous pouvez répéter ?" pede para repetir.', true),
                            m('J\'ai besoin d\'un médecin. é para:', ['Pedir sobremesa', 'Saúde / emergência', 'Comprar pão', 'Dizer tchau'], 'Saúde / emergência'),
                            m('Parlez-vous anglais ? pergunta se:', ['Mora na Inglaterra', 'Fala inglês', 'Gosta de inglês', 'É professor'], 'Fala inglês'),
                            ordena('Toque nas palavras e monte a frase.', 'Je ne comprends pas'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function curso_italiano(): array
{
    return [
        'nome' => 'Italiano',
        'codigo' => 'it',
        'bandeira' => '🇮🇹',
        'descricao' => 'Do ciao ao pedido no bar: família, números, comida e a cidade.',
        'cor' => '#16a34a',
        'palavras' => [
            ['Ciao', 'Oi / Tchau', 'Ciao! Come stai?', 'A1'],
            ['Buongiorno', 'Bom dia', 'Buongiorno, signora.', 'A1'],
            ['Grazie', 'Obrigado', 'Grazie mille.', 'A1'],
            ['Prego', 'De nada / Pois não', 'Prego, si accomodi.', 'A1'],
            ['Per favore', 'Por favor', 'Un caffè, per favore.', 'A1'],
            ['Scusa', 'Desculpa', 'Scusa, non capisco.', 'A1'],
            ['Sì', 'Sim', 'Sì, sono brasiliano.', 'A1'],
            ['Acqua', 'Água', "Vorrei dell'acqua.", 'A1'],
            ['Madre', 'Mãe', 'Mia madre è insegnante.', 'A1'],
            ['Pane', 'Pão', 'Vorrei del pane.', 'A1'],
            ['Oggi', 'Hoje', 'Oggi è lunedì.', 'A1'],
            ['Domani', 'Amanhã', 'A domani.', 'A1'],
            ['Stazione', 'Estação', "Dov'è la stazione?", 'A1'],
            ['Casa', 'Casa', 'Questa è casa mia.', 'A1'],
            ['Amico', 'Amigo', 'Lui è il mio amico.', 'A1'],
            ['Caffè', 'Café', 'Un caffè, per favore.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Saudações',
                'descricao' => 'Ciao, grazie e as primeiras frases.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Ciao e grazie',
                        'resumo' => 'Ciao, buongiorno, prego',
                        'teoria' => "Ciao = oi e tchau (informal)\nBuongiorno = bom dia\nBuonasera = boa tarde/noite ao chegar\nBuonanotte = boa noite para dormir\nArrivederci = tchau formal\nGrazie · Prego · Per favore · Scusa",
                        'exercicios' => [
                            m('Como se diz "obrigado"?', ['Prego', 'Grazie', 'Ciao', 'Scusa'], 'Grazie'),
                            t('Traduza: Buongiorno', 'bom dia'),
                            vf('"Ciao" serve para olá e para tchau.', true),
                            emp('Una cada termo à tradução.', [['Ciao', 'Oi'], ['Grazie', 'Obrigado'], ['Prego', 'De nada'], ['Per favore', 'Por favor']]),
                            c('Complete: Buona______', 'sera'),
                            m('Despedida mais formal:', ['Ciao', 'Arrivederci', 'Grazie', 'Sì'], 'Arrivederci'),
                            m('Ouça: "Grazie." Significa:', ['De nada', 'Oi', 'Obrigado', 'Água'], 'Obrigado'),
                            m('"Scusa" é:', ['Por favor', 'Desculpa', 'Bom dia', 'Até logo'], 'Desculpa'),
                        ],
                    ],
                    [
                        'titulo' => 'Come stai?',
                        'resumo' => 'Como você está? e o nome',
                        'teoria' => "Come stai? (informal) / Come sta? (formal)\nSto bene. · Così così. · Non sto bene.\nMi chiamo Luca. · Come ti chiami?\nPiacere. · Di dove sei?",
                        'exercicios' => [
                            m('"Come stai?" significa:', ['Como você se chama?', 'Como você está?', 'Onde você mora?', 'Quantos anos?'], 'Como você está?'),
                            c('Complete: Mi _____ Giulia.', 'chiamo'),
                            t('Traduza: Sto bene', 'estou bem|eu estou bem'),
                            vf('"Piacere" se usa em apresentações.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Come ti chiami'),
                            emp('Una cada termo à tradução.', [['Come stai?', 'Como vai?'], ['Sto bene', 'Estou bem'], ['Mi chiamo', 'Meu nome é'], ['Piacere', 'Prazer']]),
                            m('Resposta para "Come stai?"', ['Mi chiamo Paolo', 'Sto bene', 'Sono casa', 'Arrivederci'], 'Sto bene'),
                            m('"Di dove sei?" pergunta:', ['A idade', 'A origem', 'A hora', 'O preço'], 'A origem'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Família e essere',
                'descricao' => 'Parentes e o verbo essere.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'La famiglia',
                        'resumo' => 'madre, padre, fratello',
                        'teoria' => "madre · padre · fratello / sorella\nfiglio / figlia · nonno / nonna\nmarito · moglie · amico / amica",
                        'exercicios' => [
                            m('Como se diz "pai"?', ['madre', 'padre', 'zio', 'cugino'], 'padre'),
                            t('Traduza: sorella', 'irma|irmã'),
                            emp('Una cada termo à tradução.', [['madre', 'mãe'], ['figlio', 'filho'], ['nonna', 'avó'], ['amico', 'amigo']]),
                            c('Complete: Mia _____ è insegnante. (mãe)', 'madre'),
                            vf('"Fratelli" pode significar irmãos em geral.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Questa e la mia famiglia'),
                            m('"Figlia" é:', ['Filho', 'Filha', 'Tia', 'Prima'], 'Filha'),
                            m('Ouça: "mio padre"', ['minha mãe', 'meu pai', 'meu irmão', 'meu avô'], 'meu pai'),
                        ],
                    ],
                    [
                        'titulo' => 'Il verbo essere',
                        'resumo' => 'io sono, tu sei, lei è',
                        'teoria' => "io sono · tu sei · lui/lei è\nnoi siamo · voi siete · loro sono\nSono brasiliano. · Lei è insegnante.\nNon sono italiano.\nDi dove sei?",
                        'exercicios' => [
                            m('Qual frase está correta?', ['Io sei Anna', 'Io sono Anna', 'Io è Anna', 'Io siamo Anna'], 'Io sono Anna'),
                            c('Complete: Lei _____ insegnante.', 'e|è'),
                            t('Traduza: Siamo amici', 'somos amigos|nós somos amigos'),
                            vf('"Tu sei" é informal para "você é".', true),
                            ordena('Toque nas palavras e monte a frase.', 'Sono del Brasile'),
                            m('Negativa correta:', ['Io non sono italiano', 'Io sono non italiano', 'Non io italiano', 'Io no è italiano'], 'Io non sono italiano'),
                            emp('Una cada termo à tradução.', [['io sono', 'eu sou'], ['tu sei', 'você é'], ['lei è', 'ela é'], ['noi siamo', 'nós somos']]),
                            c('Complete: Noi ______ brasiliani.', 'siamo'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Números e dias',
                'descricao' => 'Contar e falar do tempo.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Numeri 1-20',
                        'resumo' => 'uno, due, tre…',
                        'teoria' => "1 uno · 2 due · 3 tre · 4 quattro · 5 cinque\n6 sei · 7 sette · 8 otto · 9 nove · 10 dieci\n11 undici · 12 dodici · 15 quindici · 20 venti",
                        'exercicios' => [
                            m('Como se diz 8?', ['sette', 'otto', 'nove', 'undici'], 'otto'),
                            t('Traduza: quindici', 'quinze'),
                            c('Complete: 10 = ______', 'dieci'),
                            emp('Una cada termo à tradução.', [['uno', '1'], ['cinque', '5'], ['dieci', '10'], ['venti', '20']]),
                            vf('"Undici" é 11.', true),
                            m('Qual é o 3?', ['tre', 'tredici', 'trenta', 'sei'], 'tre'),
                            c('Complete: 2 = ______', 'due'),
                            m('Quanti anni hai? pergunta:', ['A hora', 'A idade', 'O preço', 'O nome'], 'A idade'),
                        ],
                    ],
                    [
                        'titulo' => 'Giorni e ore',
                        'resumo' => 'lunedì… domenica e Che ora è?',
                        'teoria' => "lunedì, martedì, mercoledì, giovedì, venerdì, sabato, domenica.\noggi · domani · ieri\nChe ora è? · Sono le tre. · È l'una.",
                        'exercicios' => [
                            m('Depois de lunedì vem:', ['domenica', 'martedì', 'venerdì', 'sabato'], 'martedì'),
                            t('Traduza: domani', 'amanha|amanhã'),
                            c('Complete: Che _____ è?', 'ora'),
                            vf('Venerdì é sexta-feira.', true),
                            emp('Una cada termo à tradução.', [['lunedì', 'segunda'], ['venerdì', 'sexta'], ['domenica', 'domingo'], ['sabato', 'sábado']]),
                            m('Sono le tre significa:', ['É uma hora', 'São três horas', 'São treze', 'Que horas?'], 'São três horas'),
                            m('"Ieri" é:', ['Hoje', 'Amanhã', 'Ontem', 'Agora'], 'Ontem'),
                            ordena('Toque nas palavras e monte a frase.', 'Che ora e'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Comida',
                'descricao' => 'No bar e o que você gosta.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Al bar',
                        'resumo' => 'acqua, caffè, il conto',
                        'teoria' => "acqua · caffè · tè · pane · pizza\nVorrei un caffè, per favore.\nIl conto, per favore.\nIl menù, per favore.\nUn caffè espresso è il caffè italiano classico.",
                        'exercicios' => [
                            m('Como se diz "água"?', ['acqua', 'fuoco', 'aria', 'vino'], 'acqua'),
                            t('Traduza: Un caffè, per favore', 'um cafe por favor|um café, por favor|um café por favor'),
                            c('Complete: Il ______, per favore. (a conta)', 'conto'),
                            emp('Una cada termo à tradução.', [['pane', 'pão'], ['caffè', 'café'], ['tè', 'chá'], ['latte', 'leite']]),
                            vf('"Il menù" é o cardápio.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Vorrei un caffe per favore'),
                            m('Pedido correto:', ['Caffè io voglio il', 'Vorrei un caffè, per favore', 'Per caffè vorrei', 'Un per favore caffè'], 'Vorrei un caffè, per favore'),
                            m('Ouça: "pizza"', ['peixe', 'pizza', 'pão', 'pai'], 'pizza'),
                        ],
                    ],
                    [
                        'titulo' => 'Mi piace',
                        'resumo' => 'Gostar e não gostar',
                        'teoria' => "Mi piace il caffè. · Non mi piace il pesce.\nTi piace la pizza?\nMi piacciono (plural): Mi piacciono le mele.\nAdoro… é mais forte.",
                        'exercicios' => [
                            m('Como dizer que gosta de café?', ['Mi piace il caffè', 'Io sono caffè', 'Piace io caffè', 'Il caffè mi no'], 'Mi piace il caffè'),
                            c('Complete: Non mi _____ il pesce.', 'piace'),
                            t('Traduza: Ti piace la pizza?', 'voce gosta de pizza|você gosta de pizza'),
                            vf('"Adoro" é mais forte que "mi piace".', true),
                            emp('Una cada termo à tradução.', [['mi piace', 'eu gosto'], ['non mi piace', 'eu não gosto'], ['adoro', 'eu adoro'], ['pesce', 'peixe']]),
                            m('Qual pergunta está escrita corretamente?', ['Piace ti caffè?', 'Ti piace il caffè?', 'Tu piaci caffè?', 'Piaci il?'], 'Ti piace il caffè?'),
                            m('Resposta negativa:', ['Sì, mi piace', 'Non mi piace', 'Io sono no', 'Niente caffè'], 'Non mi piace'),
                            ordena('Toque nas palavras e monte a frase.', 'Mi piace la pizza'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Na cidade',
                'descricao' => 'Caminho, preço e ajuda.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Dov\'è…?',
                        'resumo' => 'Stazione, sinistra, destra',
                        'teoria' => "Dov'è la stazione / il bagno / l'hotel?\nA sinistra. · A destra. · Sempre dritto.\nÈ vicino. · Scusi…",
                        'exercicios' => [
                            m('Onde fica a estação?', ['Che cos\'è la stazione?', "Dov'è la stazione?", 'Chi è la stazione?', 'Come è la stazione?'], "Dov'è la stazione?"),
                            t('Traduza: A sinistra', 'a esquerda|à esquerda|na esquerda'),
                            c('Complete: A ______ (direita)', 'destra'),
                            emp('Una cada termo à tradução.', [['stazione', 'estação'], ['bagno', 'banheiro'], ['vicino', 'perto'], ['lontano', 'longe']]),
                            vf('"Sempre dritto" significa siga em frente.', true),
                            m('"È vicino" é:', ['Está caro', 'Está perto', 'Está fechado', 'Está tarde'], 'Está perto'),
                            m('Scusi serve para:', ['Pedir vinho', 'Chamar atenção com educação', 'Contar', 'Dizer oi'], 'Chamar atenção com educação'),
                            ordena('Toque nas palavras e monte a frase.', 'Dove e il bagno'),
                        ],
                    ],
                    [
                        'titulo' => 'Non capisco',
                        'resumo' => 'Ripetere, piano, quanto costa',
                        'teoria' => "Non capisco. · Può ripetere, per favore?\nPiù piano, per favore.\nQuanto costa? · Ho bisogno di un taxi / un medico / un biglietto.\nParla inglese?",
                        'exercicios' => [
                            m('Não entendi:', ['Non capisco', 'Io capisco non', 'Non sono capisco', 'Niente io'], 'Non capisco'),
                            t('Traduza: Quanto costa?', 'quanto custa|quanto custa?'),
                            c('Complete: Più ______, per favore. (devagar)', 'piano'),
                            emp('Una cada termo à tradução.', [['biglietto', 'bilhete'], ['medico', 'médico'], ['taxi', 'táxi'], ['aiuto', 'ajuda']]),
                            vf('"Può ripetere?" pede para repetir.', true),
                            m('Ho bisogno di un medico. é para:', ['Pedir sobremesa', 'Problema de saúde', 'Comprar pão', 'Dizer tchau'], 'Problema de saúde'),
                            m('Parla inglese? pergunta se:', ['Mora na Inglaterra', 'Fala inglês', 'Gosta de inglês', 'É professor'], 'Fala inglês'),
                            ordena('Toque nas palavras e monte a frase.', 'Ho bisogno di un taxi'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function curso_alemao(): array
{
    return [
        'nome' => 'Alemão',
        'codigo' => 'de',
        'bandeira' => '🇩🇪',
        'descricao' => 'Hallo, família, números, café e as frases que você usa na rua.',
        'cor' => '#ca8a04',
        'palavras' => [
            ['Hallo', 'Olá', 'Hallo! Wie geht’s?', 'A1'],
            ['Guten Morgen', 'Bom dia', 'Guten Morgen, Frau Klein.', 'A1'],
            ['Danke', 'Obrigado', 'Danke schön.', 'A1'],
            ['Bitte', 'Por favor / De nada', 'Bitte schön.', 'A1'],
            ['Ja', 'Sim', 'Ja, ich bin Brasilianer.', 'A1'],
            ['Nein', 'Não', 'Nein, danke.', 'A1'],
            ['Wasser', 'Água', 'Ein Wasser, bitte.', 'A1'],
            ['Mutter', 'Mãe', 'Meine Mutter ist Lehrerin.', 'A1'],
            ['Brot', 'Pão', 'Ich möchte Brot.', 'A1'],
            ['Heute', 'Hoje', 'Heute ist Montag.', 'A1'],
            ['Morgen', 'Amanhã / manhã', 'Bis morgen.', 'A1'],
            ['Bahnhof', 'Estação', 'Wo ist der Bahnhof?', 'A1'],
            ['Entschuldigung', 'Desculpa', 'Entschuldigung, ich verstehe nicht.', 'A1'],
            ['Freund', 'Amigo', 'Das ist mein Freund.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Saudações',
                'descricao' => 'Hallo, Danke e as primeiras frases.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Hallo und Danke',
                        'resumo' => 'Hallo, Guten Tag, Bitte',
                        'teoria' => "Hallo = olá\nGuten Morgen / Guten Tag / Guten Abend\nAuf Wiedersehen = tchau formal · Tschüss = tchau informal\nDanke · Bitte (por favor e de nada) · Entschuldigung",
                        'exercicios' => [
                            m('Como se diz "obrigado"?', ['Bitte', 'Danke', 'Hallo', 'Ja'], 'Danke'),
                            t('Traduza: Guten Morgen', 'bom dia'),
                            vf('"Bitte" pode ser por favor e de nada.', true),
                            emp('Una cada termo à tradução.', [['Hallo', 'Olá'], ['Danke', 'Obrigado'], ['Nein', 'Não'], ['Wasser', 'Água']]),
                            c('Complete: Guten ______ (olá formal / boa tarde)', 'tag|Tag'),
                            m('Despedida formal:', ['Hallo', 'Auf Wiedersehen', 'Ja', 'Wasser'], 'Auf Wiedersehen'),
                            m('Ouça: "Danke."', ['De nada', 'Olá', 'Obrigado', 'Água'], 'Obrigado'),
                            m('"Tschüss" é:', ['Formal', 'Informal para tchau', 'Bom dia', 'Por favor'], 'Informal para tchau'),
                        ],
                    ],
                    [
                        'titulo' => 'Wie geht’s?',
                        'resumo' => 'Como vai? e o nome',
                        'teoria' => "Wie geht’s? / Wie geht es Ihnen?\nMir geht’s gut. · Nicht so gut.\nIch heiße Anna. · Wie heißt du?\nFreut mich. · Woher kommst du?",
                        'exercicios' => [
                            m('"Wie geht’s?" significa:', ['Qual é o seu nome?', 'Como vai?', 'Onde fica?', 'Que horas?'], 'Como vai?'),
                            c('Complete: Ich _____ Max.', 'heisse|heiße|heisse'),
                            t('Traduza: Mir geht’s gut', 'estou bem|vai bem|comigo vai bem'),
                            vf('"Wie heißt du?" pergunta o nome.', true),
                            ordena('Toque nas palavras e monte a frase.', 'Wie heisst du'),
                            emp('Una cada termo à tradução.', [['Wie geht’s?', 'Como vai?'], ['Ich heiße', 'Meu nome é'], ['Danke', 'Obrigado'], ['Freut mich', 'Prazer']]),
                            m('Resposta para "Wie geht’s?"', ['Ich heiße Anna', 'Mir geht’s gut', 'Ich bin Haus', 'Auf Wiedersehen'], 'Mir geht’s gut'),
                            m('Woher kommst du? pergunta:', ['A idade', 'A origem', 'A hora', 'O preço'], 'A origem'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Família e sein',
                'descricao' => 'Parentes e o verbo sein.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Die Familie',
                        'resumo' => 'Mutter, Vater, Bruder',
                        'teoria' => "Mutter · Vater · Eltern\nBruder · Schwester · Sohn · Tochter\nOma · Opa · Freund / Freundin\nEm alemão, os substantivos têm maiúscula: die Mutter.",
                        'exercicios' => [
                            m('Como se diz "pai"?', ['Mutter', 'Vater', 'Onkel', 'Cousin'], 'Vater'),
                            t('Traduza: Schwester', 'irma|irmã'),
                            emp('Una cada termo à tradução.', [['Mutter', 'mãe'], ['Sohn', 'filho'], ['Oma', 'avó'], ['Freund', 'amigo']]),
                            c('Complete: Meine _____ ist Lehrerin. (mãe)', 'Mutter'),
                            vf('Em alemão, Mutter se escreve com M maiúsculo.', true),
                            m('"Tochter" é:', ['Filho', 'Filha', 'Tia', 'Prima'], 'Filha'),
                            ordena('Toque nas palavras e monte a frase.', 'Das ist meine Familie'),
                            m('Ouça: "Vater"', ['mãe', 'pai', 'irmão', 'avô'], 'pai'),
                        ],
                    ],
                    [
                        'titulo' => 'Das Verb sein',
                        'resumo' => 'ich bin, du bist, sie ist',
                        'teoria' => "ich bin · du bist · er/sie/es ist\nwir sind · ihr seid · sie sind\nIch bin Brasilianer. · Sie ist Lehrerin.\nIch bin nicht Italiener.\nWoher kommst du?",
                        'exercicios' => [
                            m('Qual frase está correta?', ['Ich bist Anna', 'Ich bin Anna', 'Ich ist Anna', 'Ich sind Anna'], 'Ich bin Anna'),
                            c('Complete: Sie _____ Lehrerin.', 'ist'),
                            t('Traduza: Wir sind Freunde', 'somos amigos|nós somos amigos'),
                            vf('"Du bist" é informal para "você é".', true),
                            ordena('Toque nas palavras e monte a frase.', 'Ich bin aus Brasilien'),
                            m('Qual é a forma negativa correta?', ['Ich bin nicht Italiener', 'Ich nicht bin Italiener', 'Ich no bin', 'Ich bin no'], 'Ich bin nicht Italiener'),
                            emp('Una cada termo à tradução.', [['ich bin', 'eu sou'], ['du bist', 'você é'], ['sie ist', 'ela é'], ['wir sind', 'nós somos']]),
                            c('Complete: Wir ______ Brasilianer.', 'sind'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Números e dias',
                'descricao' => 'Contar e o calendário.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Zahlen 1–20',
                        'resumo' => 'eins, zwei, drei…',
                        'teoria' => "1 eins · 2 zwei · 3 drei · 4 vier · 5 fünf\n6 sechs · 7 sieben · 8 acht · 9 neun · 10 zehn\n11 elf · 12 zwölf · 15 fünfzehn · 20 zwanzig",
                        'exercicios' => [
                            m('Como se diz 8?', ['sieben', 'acht', 'neun', 'elf'], 'acht'),
                            t('Traduza: fünfzehn', 'quinze'),
                            c('Complete: 10 = ______', 'zehn'),
                            emp('Una cada termo à tradução.', [['eins', '1'], ['fünf', '5'], ['zehn', '10'], ['zwanzig', '20']]),
                            vf('"Elf" é 11.', true),
                            m('Qual é o 3?', ['drei', 'dreizehn', 'dreißig', 'sechs'], 'drei'),
                            c('Complete: 2 = ______', 'zwei'),
                            m('Wie alt bist du? pergunta:', ['A hora', 'A idade', 'O preço', 'O nome'], 'A idade'),
                        ],
                    ],
                    [
                        'titulo' => 'Tage und Uhrzeit',
                        'resumo' => 'Montag… Sonntag e Wie spät?',
                        'teoria' => "Montag, Dienstag, Mittwoch, Donnerstag, Freitag, Samstag, Sonntag.\nheute · morgen · gestern\nWie spät ist es? · Es ist drei Uhr.",
                        'exercicios' => [
                            m('Depois de Montag vem:', ['Sonntag', 'Dienstag', 'Freitag', 'Samstag'], 'Dienstag'),
                            t('Traduza: morgen', 'amanha|amanhã|de manha|de manhã'),
                            c('Complete: Wie _____ ist es?', 'spat|spät'),
                            vf('Freitag é sexta-feira.', true),
                            emp('Una cada termo à tradução.', [['Montag', 'segunda'], ['Freitag', 'sexta'], ['Sonntag', 'domingo'], ['Samstag', 'sábado']]),
                            m('Es ist drei Uhr significa:', ['É uma hora', 'São três horas', 'São treze', 'Que horas?'], 'São três horas'),
                            m('"Gestern" é:', ['Hoje', 'Amanhã', 'Ontem', 'Agora'], 'Ontem'),
                            ordena('Toque nas palavras e monte a frase.', 'Es ist drei Uhr'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Comida',
                'descricao' => 'Pedir no café e dizer o que gosta.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Im Café',
                        'resumo' => 'Wasser, Kaffee, die Rechnung',
                        'teoria' => "Wasser · Kaffee · Tee · Brot\nIch möchte einen Kaffee, bitte.\nDie Rechnung, bitte. = a conta\nDie Speisekarte, bitte. = o cardápio",
                        'exercicios' => [
                            m('Como se diz "água"?', ['Wasser', 'Feuer', 'Wein', 'Milch'], 'Wasser'),
                            t('Traduza: Einen Kaffee, bitte', 'um cafe por favor|um café, por favor|um café por favor'),
                            c('Complete: Die ______, bitte. (a conta)', 'Rechnung'),
                            emp('Una cada termo à tradução.', [['Brot', 'pão'], ['Kaffee', 'café'], ['Tee', 'chá'], ['Milch', 'leite']]),
                            vf('"Die Speisekarte" é o cardápio.', true),
                            m('Pedido correto:', ['Kaffee ich will den', 'Einen Kaffee, bitte', 'Bitte Kaffee einen', 'Ein bitte Kaffee'], 'Einen Kaffee, bitte'),
                            m('Ouça: "Brot"', ['pão', 'irmão', 'marrom', 'cerveja'], 'pão'),
                            ordena('Toque nas palavras e monte a frase.', 'Ich mochte einen Kaffee'),
                        ],
                    ],
                    [
                        'titulo' => 'Ich mag',
                        'resumo' => 'Gostar e não gostar',
                        'teoria' => "Ich mag Kaffee. · Ich mag keinen Fisch.\nMagst du Schokolade?\nIch liebe… é mais forte que ich mag.",
                        'exercicios' => [
                            m('Como dizer que gosta de café?', ['Ich mag Kaffee', 'Ich bin Kaffee', 'Mag ich Kaffee der', 'Kaffee nicht ich'], 'Ich mag Kaffee'),
                            c('Complete: Ich mag _____ Fisch. (nenhum)', 'keinen'),
                            t('Traduza: Magst du Schokolade?', 'voce gosta de chocolate|você gosta de chocolate'),
                            vf('"Ich liebe" é mais forte que "ich mag".', true),
                            emp('Una cada termo à tradução.', [['ich mag', 'eu gosto'], ['ich mag nicht', 'eu não gosto'], ['ich liebe', 'eu amo'], ['Fisch', 'peixe']]),
                            m('Qual pergunta está escrita corretamente?', ['Mag du Kaffee?', 'Magst du Kaffee?', 'Du mag Kaffee?', 'Magen du?'], 'Magst du Kaffee?'),
                            m('Resposta negativa:', ['Ja, ich mag', 'Nein, ich mag nicht', 'Ich bin nein', 'Kein ich'], 'Nein, ich mag nicht'),
                            ordena('Toque nas palavras e monte a frase.', 'Ich mag Pizza'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Na cidade',
                'descricao' => 'Caminho, preço e “não entendi”.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Wo ist…?',
                        'resumo' => 'Bahnhof, links, rechts',
                        'teoria' => "Wo ist der Bahnhof / die Toilette / das Hotel?\nLinks. · Rechts. · Geradeaus.\nEs ist in der Nähe. · Entschuldigung…",
                        'exercicios' => [
                            m('Onde fica a estação?', ['Was ist der Bahnhof?', 'Wo ist der Bahnhof?', 'Wer ist der Bahnhof?', 'Wie ist der Bahnhof?'], 'Wo ist der Bahnhof?'),
                            t('Traduza: Links', 'esquerda|à esquerda|a esquerda'),
                            c('Complete: ______ (direita)', 'Rechts'),
                            emp('Una cada termo à tradução.', [['Bahnhof', 'estação'], ['Toilette', 'banheiro'], ['nahe', 'perto'], ['weit', 'longe']]),
                            vf('"Geradeaus" significa em frente.', true),
                            m('"Es ist in der Nähe" é:', ['Está caro', 'Está perto', 'Está fechado', 'Está tarde'], 'Está perto'),
                            m('Entschuldigung serve para:', ['Pedir cerveja', 'Pedir desculpas / atenção', 'Contar', 'Dizer oi'], 'Pedir desculpas / atenção'),
                            ordena('Toque nas palavras e monte a frase.', 'Wo ist die Toilette'),
                        ],
                    ],
                    [
                        'titulo' => 'Ich verstehe nicht',
                        'resumo' => 'Wiederholen, langsam, Preis',
                        'teoria' => "Ich verstehe nicht.\nKönnen Sie das wiederholen, bitte?\nLangsamer, bitte.\nWas kostet das? · Ich brauche ein Taxi / einen Arzt / ein Ticket.\nSprechen Sie Englisch?",
                        'exercicios' => [
                            m('Não entendi:', ['Ich verstehe nicht', 'Ich nicht verstehe', 'Verstehe ich nein', 'Ich no'], 'Ich verstehe nicht'),
                            t('Traduza: Was kostet das?', 'quanto custa|quanto custa isso|quanto custa?'),
                            c('Complete: ______, bitte. (mais devagar)', 'Langsamer'),
                            emp('Una cada termo à tradução.', [['Ticket', 'bilhete'], ['Arzt', 'médico'], ['Taxi', 'táxi'], ['Hilfe', 'ajuda']]),
                            vf('"Können Sie das wiederholen?" pede para repetir.', true),
                            m('Ich brauche einen Arzt. é para:', ['Pedir sobremesa', 'Problema de saúde', 'Comprar pão', 'Dizer tchau'], 'Problema de saúde'),
                            m('Sprechen Sie Englisch? pergunta se:', ['Mora na Inglaterra', 'Fala inglês', 'Gosta de inglês', 'É professor'], 'Fala inglês'),
                            ordena('Toque nas palavras e monte a frase.', 'Ich brauche ein Taxi'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}
