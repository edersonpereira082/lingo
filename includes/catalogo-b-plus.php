<?php

if (!function_exists('aula_plus')) {
    function aula_plus(string $titulo, string $resumo, string $teoria, array $exercicios): array
    {
        return [
            'titulo' => $titulo,
            'resumo' => $resumo,
            'teoria' => $teoria,
            'xp' => 13,
            'exercicios' => $exercicios,
        ];
    }
}

function unidades_b_plus_por_codigo(string $codigo): array
{
    $mapa = [
        'en' => b_plus_en(),
        'es' => b_plus_es(),
        'fr' => b_plus_fr(),
        'it' => b_plus_it(),
        'de' => b_plus_de(),
    ];

    return $mapa[$codigo] ?? ['palavras' => [], 'unidades' => []];
}

function b_plus_en(): array
{
    return [
        'palavras' => [
            ['Used to', 'Costumava', 'I used to live near the sea.', 'B1'],
            ['Therefore', 'Portanto', 'The train was late; therefore I called a taxi.', 'B1'],
            ['Complaint', 'Reclamação', 'I would like to make a complaint.', 'B1'],
            ['Although', 'Embora', 'Although it was expensive, we stayed.', 'B1'],
            ['Ambition', 'Ambição', 'My ambition is to work abroad.', 'B1'],
            ['Would have', 'Teria', 'I would have passed if I had studied.', 'B2'],
            ['Despite', 'Apesar de', 'Despite the rain, we went out.', 'B2'],
            ['Reported', 'Relatado', 'She said she was exhausted.', 'B2'],
            ['Give up', 'Desistir', 'Do not give up now.', 'B2'],
            ['On the other hand', 'Por outro lado', 'It is cheap. On the other hand, it is slow.', 'B2'],
        ],
        'unidades' => [
            [
                'titulo' => 'B1: dois passados',
                'descricao' => 'O que aconteceu uma vez × o que era hábito.',
                'nivel' => 'B1',
                'aulas' => [
                    aula_plus('Pontual ou hábito', 'went, used to, would', "Last year I went to Rome. = uma vez, pontual.\nI used to live in Rome. = hábito no passado.\nI didn't use to cook. Now I cook every day.", [
                        m('I used to live in Rome descreve:', ['um hábito antigo', 'um plano futuro', 'uma regra de gramática só'], 'um hábito antigo', 'Used to = costumava.'),
                        t('Traduza: I used to live near the sea', 'eu costumava morar perto do mar|eu morava perto do mar'),
                        c('Complete: Last year I _____ to Rome. (go no passado)', 'went'),
                        vf('Went e used to dizem a mesma coisa sempre.', false, 'Went é pontual; used to é hábito.'),
                        emp('Una.', [['went', 'fui / foi (uma vez)'], ['used to', 'costumava'], ['last year', 'ano passado'], ['now', 'agora']]),
                        ordena('Monte:', 'I used to live in Rome'),
                    ]),
                    aula_plus('Contar o contraste', 'then, now, not anymore', "I used to work nights. Then I changed jobs.\nI don't work nights anymore.\nWhen I was a child, I would visit my grandmother every Sunday.", [
                        t('Traduza: I don\'t work nights anymore', 'nao trabalho mais a noite|não trabalho mais à noite'),
                        c('Complete: I used to work nights. _____ I changed jobs.', 'Then'),
                        m('Would visit my grandmother every Sunday é:', ['hábito no passado', 'ordem no restaurante', 'futuro de ontem'], 'hábito no passado'),
                        vf('Anymore indica que a situação mudou.', true),
                        t('Traduza: When I was a child', 'quando eu era crianca|quando eu era criança'),
                        ordena('Monte:', 'I do not work nights anymore'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B1: intenções e previsões',
                'descricao' => 'Projetos, vontades e o que provavelmente acontece.',
                'nivel' => 'B1',
                'aulas' => [
                    aula_plus('Vou fazer', 'going to, planning to, I intend', "I am going to change jobs next year. = plano.\nI intend to study German.\nWe are planning to move in June.", [
                        m('Going to aqui marca:', ['um plano', 'um pedido de conta', 'um alfabeto'], 'um plano'),
                        t('Traduza: I intend to study German', 'pretendo estudar alemao|eu pretendo estudar alemão'),
                        c('Complete: We are planning to _____ in June.', 'move'),
                        ordena('Monte:', 'I am going to change jobs'),
                        vf('Intend to expressa intenção.', true),
                        t('Traduza: We are planning to move', 'estamos planejando nos mudar|vamos nos mudar'),
                    ]),
                    aula_plus('Provavelmente', 'will, might, probably', "It will probably rain tomorrow. = previsão.\nI think they will offer me the job.\nIt might be delayed. I am not sure.", [
                        m('Might be delayed significa:', ['pode atrasar', 'já saiu', 'é grátis'], 'pode atrasar'),
                        t('Traduza: It will probably rain tomorrow', 'provavelmente vai chover amanha|provavelmente vai chover amanhã'),
                        c('Complete: I think they _____ offer me the job.', 'will'),
                        vf('Will probably é mais certeza que might.', true),
                        emp('Una.', [['probably', 'provavelmente'], ['might', 'pode ser que'], ['will', 'vai (previsão)'], ['sure', 'certo']]),
                        t('Traduza: I am not sure', 'nao tenho certeza|não tenho certeza'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B1: se eu tiver tempo',
                'descricao' => 'Hipótese simples: se + presente, will.',
                'nivel' => 'B1',
                'aulas' => [
                    aula_plus('Condicional 1', 'if, will, unless', "If I have time, I will call you.\nIf it rains, we will stay in.\nUnless you hurry, we will miss the train.", [
                        m('A estrutura de If I have time, I will call you é:', ['se + presente, will', 'se + passado, will', 'só presente'], 'se + presente, will', 'Hipótese realista.'),
                        t('Traduza: If I have time, I will call you', 'se eu tiver tempo eu te ligo|se eu tiver tempo, vou te ligar'),
                        c('Complete: If it rains, we _____ stay in.', 'will'),
                        ordena('Monte:', 'If I have time I will call you'),
                        vf('Unless you hurry ≈ se você não se apressar.', true),
                        t('Traduza: Unless you hurry', 'a menos que voce se apresse|a menos que você se apresse'),
                    ]),
                    aula_plus('Justificar o plano', 'if, because, so that', "If I get the job, I will move to Lisbon.\nI am saving money so that I can travel.\nI will go, because I already bought the ticket.", [
                        t('Traduza: If I get the job, I will move', 'se eu conseguir o emprego vou me mudar|se eu pegar o trabalho, vou me mudar'),
                        c('Complete: I am saving money so _____ I can travel.', 'that'),
                        m('So that introduz:', ['finalidade', 'cor', 'nacionalidade'], 'finalidade'),
                        vf('Because justifica uma decisão.', true),
                        ordena('Monte:', 'I will go because I already bought the ticket'),
                        t('Traduza: I am saving money', 'estou poupando dinheiro|estou juntando dinheiro'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B1: a ação, não a pessoa',
                'descricao' => 'Voz passiva inicial: foi escrito, foi limpo.',
                'nivel' => 'B1',
                'aulas' => [
                    aula_plus('Foi feito', 'was written, is cleaned, by', "The book was written in 1920.\nThe room is cleaned every day.\nThe email was sent yesterday.\nWe do not always say who did it.", [
                        m('The book was written in 1920 foca:', ['no livro / na ação', 'no nome do autor só', 'no futuro'], 'no livro / na ação', 'Passiva: a ação importa mais que o agente.'),
                        t('Traduza: The book was written in 1920', 'o livro foi escrito em 1920'),
                        c('Complete: The email was _____ yesterday.', 'sent'),
                        vf('Na passiva, o objeto vira o sujeito da frase.', true),
                        emp('Una.', [['was written', 'foi escrito'], ['is cleaned', 'é limpo / limpam'], ['was sent', 'foi enviado'], ['every day', 'todo dia']]),
                        ordena('Monte:', 'The room is cleaned every day'),
                    ]),
                    aula_plus('Reclamação com passiva', 'was not cleaned, was promised', "The room was not cleaned this morning.\nWe were promised a quiet room.\nMy bag was taken to the wrong floor.", [
                        t('Traduza: The room was not cleaned', 'o quarto nao foi limpo|o quarto não foi limpo'),
                        c('Complete: We were _____ a quiet room.', 'promised'),
                        m('Were promised a quiet room significa:', ['prometeram um quarto silencioso', 'pagamos o quarto', 'o quarto é enorme'], 'prometeram um quarto silencioso'),
                        vf('Was taken to the wrong floor descreve o que aconteceu com a mala.', true),
                        t('Traduza: My bag was taken to the wrong floor', 'minha mala foi levada ao andar errado|minha bolsa foi levada para o andar errado'),
                        ordena('Monte:', 'The room was not cleaned this morning'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B1: além disso, portanto',
                'descricao' => 'Juntar ideias: although, therefore, besides, because of.',
                'nivel' => 'B1',
                'aulas' => [
                    aula_plus('Conectores', 'although, therefore, besides, because of', "Although the hotel was expensive, it was worth it.\nThe flight was cancelled; therefore we stayed an extra night.\nBesides, the staff was helpful.\nBecause of the strike, the metro was full.", [
                        m('Although introduz:', ['contraste', 'um preço em euros', 'um cumprimento'], 'contraste'),
                        t('Traduza: Therefore we stayed an extra night', 'portanto ficamos mais uma noite|por isso ficamos uma noite a mais'),
                        c('Complete: _____ of the strike, the metro was full.', 'Because'),
                        emp('Una.', [['although', 'embora'], ['therefore', 'portanto'], ['besides', 'além disso'], ['because of', 'por causa de']]),
                        vf('Besides adiciona um argumento.', true),
                        t('Traduza: Because of the strike', 'por causa da greve'),
                    ]),
                    aula_plus('Reclamação educada', 'complaint, besides, therefore', "I would like to make a complaint. The air conditioning does not work. Besides, the Wi-Fi is very slow. Therefore I would like a discount.", [
                        m('Make a complaint é:', ['fazer uma reclamação', 'pedir sobremesa', 'marcar consulta'], 'fazer uma reclamação'),
                        t('Traduza: I would like to make a complaint', 'eu gostaria de fazer uma reclamacao|gostaria de fazer uma reclamação'),
                        c('Complete: Therefore I would like a _____.', 'discount'),
                        ordena('Monte:', 'The air conditioning does not work'),
                        vf('Besides acrescenta um segundo problema.', true),
                        t('Traduza: The Wi-Fi is very slow', 'o wifi esta muito lento|o Wi-Fi está muito lento'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B1: filme, notícia, ambição',
                'descricao' => 'Resumir uma história e falar de sonhos.',
                'nivel' => 'B1',
                'aulas' => [
                    aula_plus('Um filme', 'about, I would recommend, moving', "The film is about two friends in Lisbon.\nIt is moving, but a bit slow.\nI would recommend it if you like quiet stories.", [
                        t('Traduza: The film is about two friends', 'o filme e sobre dois amigos|o filme é sobre dois amigos'),
                        c('Complete: I would _____ it if you like quiet stories.', 'recommend'),
                        m('Moving aqui significa:', ['emocionante / comovente', 'de caminhão', 'barato'], 'emocionante / comovente'),
                        vf('Would recommend é uma opinião com justificativa.', true),
                        ordena('Monte:', 'The film is about two friends in Lisbon'),
                        t('Traduza: It is a bit slow', 'e um pouco lento|é um pouco lento'),
                    ]),
                    aula_plus('Sonhos', 'ambition, I would like, goal', "My ambition is to work abroad.\nI would like to study architecture.\nIn five years I hope I will have more freedom.", [
                        t('Traduza: My ambition is to work abroad', 'minha ambicao e trabalhar no exterior|minha ambição é trabalhar no exterior'),
                        c('Complete: I would like to study _____.', 'architecture'),
                        m('Abroad significa:', ['no exterior', 'no porão', 'de graça'], 'no exterior'),
                        vf('Hope I will have expressa um desejo de longo prazo.', true),
                        emp('Una.', [['ambition', 'ambição'], ['goal', 'objetivo'], ['abroad', 'no exterior'], ['freedom', 'liberdade']]),
                        t('Traduza: In five years', 'em cinco anos|daqui a cinco anos'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B2: se eu tivesse estudado',
                'descricao' => 'Hipótese sobre o passado que não aconteceu.',
                'nivel' => 'B2',
                'aulas' => [
                    aula_plus('Condicional 3', 'if I had, would have', "If I had studied more, I would have passed.\nIf we had left earlier, we would have caught the train.\nI would have called you if I had known.", [
                        m('If I had studied more, I would have passed fala de:', ['um passado irreal', 'um hábito de hoje', 'um pedido no café'], 'um passado irreal', 'Não estudou — e não passou.'),
                        t('Traduza: If I had studied more, I would have passed', 'se eu tivesse estudado mais teria passado|se eu tivesse estudado mais, eu teria passado'),
                        c('Complete: If we had left earlier, we would have _____ the train.', 'caught'),
                        ordena('Monte:', 'I would have called you if I had known'),
                        vf('Would have + particípio descreve o resultado que não ocorreu.', true),
                        t('Traduza: If I had known', 'se eu soubesse|se eu tivesse sabido'),
                    ]),
                    aula_plus('Arrependimento', 'I wish, if only, should have', "I wish I had taken the other job.\nIf only we had checked the reviews.\nYou should have told me sooner.", [
                        t('Traduza: I wish I had taken the other job', 'queria ter aceitado o outro emprego|tomara que eu tivesse pegado o outro trabalho'),
                        c('Complete: You should have _____ me sooner.', 'told'),
                        m('If only we had checked expressa:', ['arrependimento', 'um preço', 'um cumprimento'], 'arrependimento'),
                        vf('Should have told me aponta uma crítica educada ao passado.', true),
                        ordena('Monte:', 'I wish I had taken the other job'),
                        t('Traduza: You should have told me sooner', 'voce deveria ter me dito antes|você deveria ter me contado mais cedo'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B2: ela disse que',
                'descricao' => 'Discurso indireto e mudança de tempo.',
                'nivel' => 'B2',
                'aulas' => [
                    aula_plus('Reportar', 'she said, he told me, was', "Direct: I am tired.\nReported: She said she was tired.\nHe told me to wait.\nThey asked if the office was open.", [
                        m('She said she was tired veio de:', ['I am tired', 'I will be tired', 'Open the office'], 'I am tired', 'Presente vira passado no indireto.'),
                        t('Traduza: She said she was tired', 'ela disse que estava cansada'),
                        c('Complete: He told me _____ wait.', 'to'),
                        vf('Told me to wait relata uma ordem/pedido.', true),
                        emp('Una.', [['said', 'disse (sem objeto)'], ['told', 'disse a alguém'], ['asked if', 'perguntou se'], ['to wait', 'para esperar']]),
                        t('Traduza: They asked if the office was open', 'eles perguntaram se o escritorio estava aberto|perguntaram se o escritório estava aberto'),
                    ]),
                    aula_plus('Detalhe', 'the day before, would', "She said she would arrive the next day.\nHe claimed he had already paid.\nI explained that we had left the day before.", [
                        t('Traduza: She said she would arrive the next day', 'ela disse que chegaria no dia seguinte'),
                        c('Complete: He claimed he had already _____.', 'paid'),
                        m('Had already paid no indireto vem de:', ['I have already paid / I paid', 'I will pay', 'Pay now'], 'I have already paid / I paid'),
                        vf('The day before no indireto substitui yesterday.', true),
                        ordena('Monte:', 'She said she would arrive the next day'),
                        t('Traduza: I explained that we had left', 'expliquei que ja tinhamos saido|expliquei que tínhamos saído'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B2: tom formal e informal',
                'descricao' => 'E-mail de trabalho × conversa no bar.',
                'nivel' => 'B2',
                'aulas' => [
                    aula_plus('Dois registros', 'Dear, Hi, I would be grateful, anyway', "Formal: Dear Ms Alves, I would be grateful if you could send the report.\nInformal: Hi Ana, can you send the report when you can?\nAnyway, see you at the bar.", [
                        m('I would be grateful if you could é:', ['pedido formal', 'gíria de bar', 'preço'], 'pedido formal'),
                        t('Traduza: I would be grateful if you could send the report', 'eu ficaria grato se voce pudesse enviar o relatorio|ficaria grato se pudesse enviar o relatório'),
                        c('Complete: Dear _____ Alves,', 'Ms|Ms.'),
                        vf('Hi Ana serve para um e-mail informal.', true),
                        emp('Una.', [['Dear', 'prezado/a'], ['grateful', 'grato'], ['anyway', 'enfim / de qualquer forma'], ['report', 'relatório']]),
                        t('Traduza: See you at the bar', 'te vejo no bar|a gente se vê no bar'),
                    ]),
                    aula_plus('Ênfase', 'what I mean, it is the delay that', "What I need is a clear deadline.\nIt is the delay that bothers me, not the price.\nI do believe we can fix this.", [
                        t('Traduza: What I need is a clear deadline', 'o que eu preciso e um prazo claro|o que preciso é um prazo claro'),
                        c('Complete: It is the delay _____ bothers me.', 'that'),
                        m('It is the delay that bothers me enfatiza:', ['o atraso', 'o café', 'o alfabeto'], 'o atraso'),
                        vf('Do believe reforça a afirmação.', true),
                        ordena('Monte:', 'What I need is a clear deadline'),
                        t('Traduza: I do believe we can fix this', 'eu realmente acredito que podemos resolver isso'),
                    ]),
                ],
            ],
            [
                'titulo' => 'B2: temas atuais e conectores',
                'descricao' => 'Ambiente, tecnologia e apesar de / em contrapartida.',
                'nivel' => 'B2',
                'aulas' => [
                    aula_plus('Argumentar', 'despite, given that, on the other hand', "Despite the cost, renewable energy is worth it.\nGiven that cities are growing, we need better transport.\nCars are convenient. On the other hand, they pollute.", [
                        m('On the other hand introduz:', ['contraponto', 'um cumprimento', 'um número de telefone'], 'contraponto'),
                        t('Traduza: Despite the cost, it is worth it', 'apesar do custo vale a pena|apesar do custo, vale a pena'),
                        c('Complete: _____ that cities are growing, we need better transport.', 'Given'),
                        emp('Una.', [['despite', 'apesar de'], ['given that', 'visto que'], ['on the other hand', 'por outro lado'], ['pollute', 'poluir']]),
                        vf('Given that apresenta uma premissa.', true),
                        t('Traduza: They pollute', 'eles poluem|poluem'),
                    ]),
                    aula_plus('Soar natural', 'look after, give up, keep up with', "We should look after the local river.\nDo not give up on public debate.\nIt is hard to keep up with the news.", [
                        m('Look after the river é:', ['cuidar do rio', 'procurar o rio no mapa só', 'atravessar o rio'], 'cuidar do rio', 'Phrasal: look after = cuidar.'),
                        t('Traduza: Do not give up', 'nao desista|não desista'),
                        c('Complete: It is hard to keep _____ with the news.', 'up'),
                        vf('Keep up with = acompanhar o ritmo.', true),
                        ordena('Monte:', 'We should look after the local river'),
                        t('Traduza: It is hard to keep up with the news', 'e dificil acompanhar as noticias|é difícil acompanhar as notícias'),
                    ]),
                ],
            ],
        ],
    ];
}
