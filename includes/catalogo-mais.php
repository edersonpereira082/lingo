<?php

function unidades_mais_por_codigo(string $codigo): array
{
    $mapa = [
        'en' => mais_ingles(),
        'es' => mais_espanhol(),
        'fr' => mais_frances(),
        'it' => mais_italiano(),
        'de' => mais_alemao(),
    ];

    return $mapa[$codigo] ?? ['palavras' => [], 'unidades' => []];
}

function mais_ingles(): array
{
    return [
        'palavras' => [
            ['Sunny', 'Ensolarado', 'It is sunny today.', 'A1'],
            ['Rain', 'Chuva', 'It is going to rain.', 'A1'],
            ['Headache', 'Dor de cabeça', 'I have a headache.', 'A1'],
            ['Tall', 'Alto', 'My brother is tall.', 'A1'],
            ['Bill', 'Conta', 'Can I have the bill?', 'A2'],
            ['Message', 'Mensagem', 'I sent you a message.', 'A2'],
            ['Tired', 'Cansado', 'I am tired today.', 'B1'],
            ['Broken', 'Quebrado', 'The air con is broken.', 'B2'],
        ],
        'unidades' => [
            unidade_clima_en(),
            unidade_saude_en(),
            unidade_pessoas_en(),
            unidade_restaurante_en(),
            unidade_sentimentos_en(),
            unidade_problemas_en(),
        ],
    ];
}

function unidade_clima_en(): array
{
    return [
        'titulo' => 'Tempo e clima',
        'descricao' => 'Sol, chuva, frio e o que vestir.',
        'nivel' => 'A1',
        'aulas' => [
            [
                'titulo' => 'Como está o tempo?',
                'resumo' => 'sunny, rainy, cold, hot, windy',
                'teoria' => "What's the weather like?\nIt's sunny / cloudy / rainy / windy.\nIt's hot. · It's cold. · It's 22 degrees.",
                'exercicios' => [
                    m('Como perguntar o tempo?', ["What's the weather like?", 'How old is the weather?', 'Where is sunny?', 'Who is cold?'], "What's the weather like?"),
                    t('Traduza: It is sunny', 'esta ensolarado|está ensolarado|faz sol|esta sol'),
                    c('Complete: It is _____. (frio)', 'cold'),
                    emp('Una.', [['sunny', 'ensolarado'], ['rainy', 'chuvoso'], ['windy', 'ventoso'], ['cloudy', 'nublado']]),
                    vf('"It\'s 22 degrees" fala da temperatura.', true),
                    ordena('Monte:', 'It is very hot today'),
                    m('Rainy descreve:', ['chuva', 'neve só', 'vento só', 'sol'], 'chuva'),
                    t('Traduza: It is cloudy', 'esta nublado|está nublado|esta nuvens'),
                    c('Complete: What\'s the _____ like?', 'weather'),
                ],
            ],
            [
                'titulo' => 'Roupa e clima',
                'resumo' => 'coat, umbrella, take, wear',
                'teoria' => "Take a coat. It's cold.\nTake an umbrella. It might rain.\nI wear a T-shirt when it's hot.",
                'exercicios' => [
                    m('Se vai chover, leve:', ['an umbrella', 'a menu', 'a ticket only', 'a pillow'], 'an umbrella'),
                    t('Traduza: Take a coat', 'leve um casaco|pega um casaco|leve o casaco'),
                    c('Complete: Take an _____. (guarda-chuva)', 'umbrella'),
                    emp('Una.', [['coat', 'casaco'], ['umbrella', 'guarda-chuva'], ['T-shirt', 'camiseta'], ['boots', 'botas']]),
                    vf('When it is hot, people often wear a T-shirt.', true),
                    ordena('Monte:', 'Take a coat with you'),
                    m('Boots combinam com:', ['chuva ou frio', 'praia só', 'escritório de terno só', 'piscina'], 'chuva ou frio'),
                    c('Complete: I _____ a coat when it is cold.', 'wear|take'),
                    t('Traduza: It might rain', 'pode chover|talvez chova|pode ser que chova'),
                ],
            ],
        ],
    ];
}

function unidade_saude_en(): array
{
    return [
        'titulo' => 'Saúde',
        'descricao' => 'Dores, farmácia e marcar consulta.',
        'nivel' => 'A1',
        'aulas' => [
            [
                'titulo' => 'Não me sinto bem',
                'resumo' => 'headache, fever, stomach, tired',
                'teoria' => "I don't feel well.\nI have a headache / a fever / a stomachache.\nMy throat hurts.\nI need to rest.",
                'exercicios' => [
                    m('Como dizer que está mal?', ["I don't feel well", 'I feel weather', 'I am a doctor', 'I have a house'], "I don't feel well"),
                    t('Traduza: I have a headache', 'estou com dor de cabeca|tenho dor de cabeça|estou com dor de cabeça'),
                    c('Complete: I have a _____. (febre)', 'fever'),
                    emp('Una.', [['headache', 'dor de cabeça'], ['fever', 'febre'], ['throat', 'garganta'], ['rest', 'descansar']]),
                    vf('"My throat hurts" é dor de garganta.', true),
                    ordena('Monte:', 'I need to rest'),
                    m('Stomachache é:', ['dor de estômago', 'dor no joelho', 'tosse', 'alergia de pele'], 'dor de estômago'),
                    c('Complete: My throat _____.', 'hurts'),
                    t('Traduza: I need to rest', 'preciso descansar|eu preciso descansar'),
                ],
            ],
            [
                'titulo' => 'Farmácia e médico',
                'resumo' => 'pharmacy, appointment, medicine, allergy',
                'teoria' => "Where is the pharmacy?\nI need an appointment.\nI am allergic to penicillin.\nTake this medicine twice a day.",
                'exercicios' => [
                    m('Farmácia em inglês:', ['pharmacy', 'farm', 'school', 'library'], 'pharmacy'),
                    t('Traduza: I need an appointment', 'preciso de uma consulta|eu preciso marcar consulta|preciso marcar uma consulta'),
                    c('Complete: I am _____ to penicillin.', 'allergic'),
                    emp('Una.', [['pharmacy', 'farmácia'], ['appointment', 'consulta'], ['medicine', 'remédio'], ['allergy', 'alergia']]),
                    vf('"Twice a day" significa duas vezes ao dia.', true),
                    ordena('Monte:', 'Where is the pharmacy'),
                    m('Take this medicine. é:', ['instrução de remédio', 'pedido de café', 'preço', 'saudação'], 'instrução de remédio'),
                    c('Complete: Take this medicine twice a _____.', 'day'),
                    t('Traduza: Where is the pharmacy?', 'onde fica a farmacia|onde é a farmácia|onde fica a farmácia'),
                ],
            ],
        ],
    ];
}

function unidade_pessoas_en(): array
{
    return [
        'titulo' => 'Pessoas',
        'descricao' => 'Aparência, idade e personalidade simples.',
        'nivel' => 'A1',
        'aulas' => [
            [
                'titulo' => 'Aparência',
                'resumo' => 'tall, short, hair, eyes',
                'teoria' => "She is tall / short / young / old.\nHe has short hair and brown eyes.\nShe wears glasses.",
                'exercicios' => [
                    m('Tall significa:', ['alto', 'baixo', 'novo', 'rápido'], 'alto'),
                    t('Traduza: She wears glasses', 'ela usa oculos|ela usa óculos|ela usa oculos de grau'),
                    c('Complete: He has brown _____.', 'eyes|hair'),
                    emp('Una.', [['tall', 'alto'], ['short', 'baixo / curto'], ['young', 'jovem'], ['glasses', 'óculos']]),
                    vf('"Short hair" é cabelo curto.', true),
                    ordena('Monte:', 'She has long hair'),
                    m('Young é o oposto de:', ['old', 'tall', 'blue', 'near'], 'old'),
                    c('Complete: She is very _____. (alta)', 'tall'),
                    t('Traduza: He is young', 'ele e jovem|ele é jovem|ele é novo'),
                ],
            ],
            [
                'titulo' => 'Personalidade',
                'resumo' => 'kind, funny, quiet, friendly',
                'teoria' => "He is kind and funny.\nShe is a bit quiet.\nThey are very friendly.\nI am shy at first.",
                'exercicios' => [
                    m('Kind significa:', ['gentil', 'bravo', 'caro', 'vazio'], 'gentil'),
                    t('Traduza: They are friendly', 'eles sao simpaticos|eles são simpáticos|eles são amigáveis'),
                    c('Complete: She is a bit _____. (quieta)', 'quiet'),
                    emp('Una.', [['kind', 'gentil'], ['funny', 'engraçado'], ['quiet', 'quieto'], ['shy', 'tímido']]),
                    vf('"Friendly" descreve alguém simpático.', true),
                    ordena('Monte:', 'He is kind and funny'),
                    m('Shy at first. significa:', ['tímido no começo', 'alto demais', 'sempre bravo', 'sem nome'], 'tímido no começo'),
                    c('Complete: They are very _____.', 'friendly'),
                    t('Traduza: He is funny', 'ele e engraçado|ele é engraçado|ele é divertido'),
                ],
            ],
        ],
    ];
}

function unidade_restaurante_en(): array
{
    return [
        'titulo' => 'No restaurante',
        'descricao' => 'Cardápio, pedido, conta e alergias.',
        'nivel' => 'A2',
        'aulas' => [
            [
                'titulo' => 'O pedido',
                'resumo' => 'menu, starter, main, still water',
                'teoria' => "A table for two, please.\nCan I see the menu?\nI'll have the grilled fish.\nStill water or sparkling water?",
                'exercicios' => [
                    m('Pedir mesa:', ['A table for two, please', 'A ticket for two', 'Two rooms please', 'Two umbrellas'], 'A table for two, please'),
                    t('Traduza: Can I see the menu?', 'posso ver o cardapio|posso ver o cardápio|me mostra o cardápio'),
                    c("Complete: I'll _____ the grilled fish.", 'have'),
                    emp('Una.', [['starter', 'entrada'], ['main', 'prato principal'], ['dessert', 'sobremesa'], ['bill', 'conta']]),
                    vf('"Sparkling water" é água com gás.', true),
                    ordena('Monte:', 'Can I see the menu'),
                    m('Still water é:', ['água sem gás', 'água quente', 'suco', 'vinho'], 'água sem gás'),
                    c('Complete: A table for _____, please.', 'two|three|four'),
                    t('Traduza: The food is delicious', 'a comida esta deliciosa|a comida é deliciosa|esta uma delicia'),
                ],
            ],
            [
                'titulo' => 'A conta',
                'resumo' => 'bill, split, tip, allergic',
                'teoria' => "Could we have the bill, please?\nCan we split the bill?\nService is included.\nI am allergic to nuts.",
                'exercicios' => [
                    m('Pedir a conta:', ['Could we have the bill?', 'Could we have the bed?', 'Where is left?', 'How old is it?'], 'Could we have the bill?'),
                    t('Traduza: Can we split the bill?', 'podemos dividir a conta|a gente divide a conta|podemos splittar a conta'),
                    c('Complete: I am allergic to _____.', 'nuts|gluten|milk'),
                    emp('Una.', [['bill', 'conta'], ['tip', 'gorjeta'], ['split', 'dividir'], ['included', 'incluído']]),
                    vf('"Service is included" significa que o serviço já está na conta.', true),
                    ordena('Monte:', 'Could we have the bill please'),
                    m('Nuts aqui são:', ['castanhas / nozes', 'parafusos só', 'sapatos', 'nuvens'], 'castanhas / nozes'),
                    c('Complete: Can we _____ the bill?', 'split'),
                    t('Traduza: Service is included', 'o servico esta incluso|o serviço está incluído|taxa de serviço inclusa'),
                ],
            ],
        ],
    ];
}

function unidade_sentimentos_en(): array
{
    return [
        'titulo' => 'Sentimentos',
        'descricao' => 'Como você está e como apoiar alguém.',
        'nivel' => 'B1',
        'aulas' => [
            [
                'titulo' => 'Como me sinto',
                'resumo' => 'stressed, excited, worried, proud',
                'teoria' => "I feel stressed at work.\nI'm excited about the trip.\nShe looks worried.\nI'm proud of you.",
                'exercicios' => [
                    m('Excited significa:', ['animado / empolgado', 'com sono', 'com fome só', 'atrasado'], 'animado / empolgado'),
                    t('Traduza: I am proud of you', 'tenho orgulho de voce|estou orgulhoso de você|tenho orgulho de você'),
                    c('Complete: I feel _____ at work.', 'stressed'),
                    emp('Una.', [['stressed', 'estressado'], ['worried', 'preocupado'], ['proud', 'orgulhoso'], ['excited', 'empolgado']]),
                    vf('"She looks worried" descreve a expressão da pessoa.', true),
                    ordena('Monte:', 'I am excited about the trip'),
                    m('Worried é:', ['preocupado', 'feliz', 'alto', 'barato'], 'preocupado'),
                    c('Complete: She looks _____.', 'worried|tired|happy'),
                    t('Traduza: I feel stressed', 'estou estressado|eu me sinto estressado|me sinto estressado'),
                ],
            ],
            [
                'titulo' => 'Apoiar alguém',
                'resumo' => 'cheer up, don\'t worry, I\'m here',
                'teoria' => "Don't worry. It will be fine.\nCheer up!\nI'm here if you need to talk.\nThat sounds difficult.",
                'exercicios' => [
                    m('Frase de apoio:', ["Don't worry. It will be fine.", 'How much is it?', 'Turn left.', 'I am a table.'], "Don't worry. It will be fine."),
                    t('Traduza: I am here if you need to talk', 'estou aqui se voce precisar conversar|estou aqui se precisar falar'),
                    c("Complete: Don't _____. It will be fine.", 'worry'),
                    emp('Una.', [['cheer up', 'anima / anima-se'], ["don't worry", 'não se preocupe'], ['talk', 'conversar'], ['difficult', 'difícil']]),
                    vf('"That sounds difficult" mostra empatia.', true),
                    ordena('Monte:', 'I am here if you need to talk'),
                    m('Cheer up! é:', ['um incentivo', 'um preço', 'uma despedida formal só', 'um endereço'], 'um incentivo'),
                    c('Complete: That sounds _____.', 'difficult|great|good'),
                    t('Traduza: Cheer up', 'anima|anima-se|fica bem|vai ficar tudo bem'),
                ],
            ],
        ],
    ];
}

function unidade_problemas_en(): array
{
    return [
        'titulo' => 'Problemas',
        'descricao' => 'Reclamar com educação e pedir solução.',
        'nivel' => 'B2',
        'aulas' => [
            [
                'titulo' => 'Há um problema',
                'resumo' => 'wrong, broken, missing, delay',
                'teoria' => "There is a problem with my order.\nThis is the wrong room.\nThe Wi-Fi is not working.\nMy bag is missing.",
                'exercicios' => [
                    m('Reclamação educada:', ['There is a problem with my order', 'You are a problem order', 'Give food now', 'I hate this always'], 'There is a problem with my order'),
                    t('Traduza: The Wi-Fi is not working', 'o wifi nao funciona|o wi-fi não está funcionando|a internet nao pega'),
                    c('Complete: This is the _____ room.', 'wrong'),
                    emp('Una.', [['wrong', 'errado'], ['broken', 'quebrado'], ['missing', 'sumiu / faltando'], ['delay', 'atraso']]),
                    vf('"My bag is missing" significa que a mala não apareceu.', true),
                    ordena('Monte:', 'There is a problem with my order'),
                    m('Broken descreve:', ['algo que não funciona', 'algo novo', 'algo barato', 'alguém alto'], 'algo que não funciona'),
                    c('Complete: My bag is _____.', 'missing'),
                    t('Traduza: This is the wrong room', 'este e o quarto errado|este é o quarto errado|esse não é o meu quarto'),
                ],
            ],
            [
                'titulo' => 'Pedir solução',
                'resumo' => 'could you, replace, refund, manager',
                'teoria' => "Could you replace it, please?\nI'd like a refund.\nCan I speak to the manager?\nThank you for your help.",
                'exercicios' => [
                    m('Pedir troca:', ['Could you replace it, please?', 'Could you rain it?', 'Replace me the sky', 'Give manager food'], 'Could you replace it, please?'),
                    t('Traduza: I would like a refund', 'eu gostaria de um reembolso|quero reembolso|gostaria de reembolso'),
                    c('Complete: Can I speak to the _____?', 'manager'),
                    emp('Una.', [['replace', 'trocar'], ['refund', 'reembolso'], ['manager', 'gerente'], ['help', 'ajuda']]),
                    vf('"Could you… please?" deixa o pedido mais educado.', true),
                    ordena('Monte:', 'Can I speak to the manager'),
                    m('Refund é:', ['devolução do dinheiro', 'gorjeta', 'sobremesa', 'senha do Wi-Fi'], 'devolução do dinheiro'),
                    c('Complete: Thank you for your _____.', 'help'),
                    t('Traduza: Could you replace it please', 'pode trocar por favor|você poderia trocar isso por favor'),
                ],
            ],
        ],
    ];
}

function mais_espanhol(): array
{
    return [
        'palavras' => [
            ['Soleado', 'Ensolarado', 'Hoy está soleado.', 'A1'],
            ['Lluvia', 'Chuva', 'Va a llover.', 'A1'],
            ['Dolor', 'Dor', 'Tengo dolor de cabeza.', 'A1'],
            ['Alto', 'Alto', 'Mi hermano es alto.', 'A1'],
            ['Cuenta', 'Conta', 'La cuenta, por favor.', 'A2'],
            ['Mensaje', 'Mensagem', 'Te envié un mensaje.', 'A2'],
            ['Cansado', 'Cansado', 'Hoy estoy cansado.', 'B1'],
            ['Roto', 'Quebrado', 'El aire está roto.', 'B2'],
        ],
        'unidades' => [
            [
                'titulo' => 'Tiempo y clima',
                'descricao' => 'Sol, lluvia, frío y qué llevar.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => '¿Qué tiempo hace?',
                        'resumo' => 'soleado, lluvia, frío, calor',
                        'teoria' => "¿Qué tiempo hace?\nHace sol / frío / calor.\nEstá nublado. · Está lloviendo.\nHace 22 grados.",
                        'exercicios' => [
                            m('Como perguntar o tempo?', ['¿Qué tiempo hace?', '¿Cuántos años hace?', '¿Dónde sol?', '¿Quién frío?'], '¿Qué tiempo hace?'),
                            t('Traduza: Hace sol', 'faz sol|esta ensolarado|está ensolarado'),
                            c('Complete: Hace _____. (frio)', 'frio|frío'),
                            emp('Una.', [['sol', 'sol'], ['lluvia', 'chuva'], ['viento', 'vento'], ['nublado', 'nublado']]),
                            vf('"Hace 22 grados" fala da temperatura.', true),
                            ordena('Monte:', 'Hoy hace mucho calor'),
                            m('Está lloviendo descreve:', ['chuva agora', 'sol', 'neve só', 'vento só'], 'chuva agora'),
                            c('Complete: ¿Qué _____ hace?', 'tiempo'),
                            t('Traduza: Está nublado', 'esta nublado|está nublado'),
                        ],
                    ],
                    [
                        'titulo' => 'Ropa y clima',
                        'resumo' => 'abrigo, paraguas, llevar',
                        'teoria' => "Lleva un abrigo. Hace frío.\nLleva un paraguas. Puede llover.\nCuando hace calor, llevo una camiseta.",
                        'exercicios' => [
                            m('Se vai chover, leve:', ['un paraguas', 'un menú', 'un billete sólo', 'una almohada'], 'un paraguas'),
                            t('Traduza: Lleva un abrigo', 'leve um casaco|leva um casaco'),
                            c('Complete: Lleva un _____. (guarda-chuva)', 'paraguas'),
                            emp('Una.', [['abrigo', 'casaco'], ['paraguas', 'guarda-chuva'], ['camiseta', 'camiseta'], ['botas', 'botas']]),
                            vf('Con calor mucha gente lleva camiseta.', true),
                            ordena('Monte:', 'Lleva un abrigo contigo'),
                            m('Botas combinam com:', ['chuva ou frio', 'praia só', 'piscina', 'sobremesa'], 'chuva ou frio'),
                            c('Complete: Cuando hace frío _____ un abrigo.', 'llevo'),
                            t('Traduza: Puede llover', 'pode chover|talvez chova'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Salud',
                'descricao' => 'Dolores, farmacia y cita médica.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'No me encuentro bien',
                        'resumo' => 'cabeza, fiebre, estómago',
                        'teoria' => "No me encuentro bien.\nTengo dolor de cabeza / fiebre / dolor de estómago.\nMe duele la garganta.\nNecesito descansar.",
                        'exercicios' => [
                            m('Como dizer que está mal?', ['No me encuentro bien', 'Hace sol', 'Soy médico', 'Tengo casa'], 'No me encuentro bien'),
                            t('Traduza: Tengo dolor de cabeza', 'estou com dor de cabeca|tenho dor de cabeça'),
                            c('Complete: Tengo _____. (febre)', 'fiebre'),
                            emp('Una.', [['cabeza', 'cabeça'], ['fiebre', 'febre'], ['garganta', 'garganta'], ['descansar', 'descansar']]),
                            vf('"Me duele la garganta" é dor de garganta.', true),
                            ordena('Monte:', 'Necesito descansar'),
                            m('Dolor de estómago é:', ['dor de estômago', 'dor no joelho', 'tosse', 'alergia'], 'dor de estômago'),
                            c('Complete: Me duele la _____.', 'garganta|cabeza'),
                            t('Traduza: Necesito descansar', 'preciso descansar'),
                        ],
                    ],
                    [
                        'titulo' => 'Farmacia y médico',
                        'resumo' => 'farmacia, cita, medicina, alergia',
                        'teoria' => "¿Dónde está la farmacia?\nNecesito una cita.\nSoy alérgico a la penicilina.\nTome este medicamento dos veces al día.",
                        'exercicios' => [
                            m('Farmácia:', ['farmacia', 'granja', 'escuela', 'biblioteca'], 'farmacia'),
                            t('Traduza: Necesito una cita', 'preciso de uma consulta|preciso marcar consulta'),
                            c('Complete: Soy _____ a la penicilina.', 'alergico|alérgico'),
                            emp('Una.', [['farmacia', 'farmácia'], ['cita', 'consulta'], ['medicamento', 'remédio'], ['alergia', 'alergia']]),
                            vf('"Dos veces al día" é duas vezes ao dia.', true),
                            ordena('Monte:', 'Donde esta la farmacia'),
                            m('Tome este medicamento. é:', ['instrução de remédio', 'pedido de café', 'preço', 'oi'], 'instrução de remédio'),
                            c('Complete: Tome este medicamento dos veces al _____.', 'dia'),
                            t('Traduza: ¿Dónde está la farmacia?', 'onde fica a farmacia|onde é a farmácia'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Personas',
                'descricao' => 'Apariencia y carácter.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Apariencia',
                        'resumo' => 'alto, pelo, ojos, gafas',
                        'teoria' => "Es alta / baja / joven / mayor.\nTiene el pelo corto y los ojos marrones.\nLleva gafas.",
                        'exercicios' => [
                            m('Alto significa:', ['alto', 'baixo', 'novo', 'rápido'], 'alto'),
                            t('Traduza: Lleva gafas', 'usa oculos|ela usa óculos|usa óculos'),
                            c('Complete: Tiene los ojos _____.', 'marrones|azules|verdes'),
                            emp('Una.', [['alto', 'alto'], ['bajo', 'baixo'], ['joven', 'jovem'], ['gafas', 'óculos']]),
                            vf('"Pelo corto" é cabelo curto.', true),
                            ordena('Monte:', 'Tiene el pelo largo'),
                            m('Joven é o oposto de:', ['mayor', 'alto', 'azul', 'cerca'], 'mayor'),
                            c('Complete: Ella es muy _____. (alta)', 'alta'),
                            t('Traduza: Él es joven', 'ele e jovem|ele é jovem'),
                        ],
                    ],
                    [
                        'titulo' => 'Carácter',
                        'resumo' => 'amable, gracioso, callado',
                        'teoria' => "Es amable y gracioso.\nEs un poco callada.\nSon muy simpáticos.\nAl principio soy tímido.",
                        'exercicios' => [
                            m('Amable significa:', ['gentil', 'bravo', 'caro', 'vazio'], 'gentil'),
                            t('Traduza: Son simpáticos', 'eles sao simpaticos|eles são simpáticos'),
                            c('Complete: Es un poco _____. (quieta)', 'callada'),
                            emp('Una.', [['amable', 'gentil'], ['gracioso', 'engraçado'], ['callado', 'quieto'], ['tímido', 'tímido']]),
                            vf('"Simpático" descreve alguém agradável.', true),
                            ordena('Monte:', 'Es amable y gracioso'),
                            m('Al principio sou tímido. significa:', ['tímido no começo', 'sempre bravo', 'sem nome', 'muito alto'], 'tímido no começo'),
                            c('Complete: Son muy _____.', 'simpaticos|simpáticos'),
                            t('Traduza: Es gracioso', 'e engraçado|é engraçado|ele é engraçado'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'En el restaurante',
                'descricao' => 'Pedido, cuenta y alergias.',
                'nivel' => 'A2',
                'aulas' => [
                    [
                        'titulo' => 'El pedido',
                        'resumo' => 'carta, primero, segundo, agua',
                        'teoria' => "Una mesa para dos, por favor.\n¿Me trae la carta?\nPara mí, el pescado a la plancha.\n¿Agua con gas o sin gas?",
                        'exercicios' => [
                            m('Pedir mesa:', ['Una mesa para dos, por favor', 'Un billete para dos', 'Dos habitaciones', 'Dos paraguas'], 'Una mesa para dos, por favor'),
                            t('Traduza: ¿Me trae la carta?', 'me traz o cardapio|pode trazer o cardápio'),
                            c('Complete: Para mí, el _____ a la plancha.', 'pescado'),
                            emp('Una.', [['primero', 'entrada'], ['segundo', 'prato principal'], ['postre', 'sobremesa'], ['cuenta', 'conta']]),
                            vf('"Agua con gas" é água com gás.', true),
                            ordena('Monte:', 'Me trae la carta por favor'),
                            m('Agua sin gas é:', ['água sem gás', 'água quente', 'suco', 'vinho'], 'água sem gás'),
                            c('Complete: Una mesa para _____, por favor.', 'dos|tres|cuatro'),
                            t('Traduza: La comida está riquísima', 'a comida esta deliciosa|a comida está uma delícia'),
                        ],
                    ],
                    [
                        'titulo' => 'La cuenta',
                        'resumo' => 'cuenta, dividir, propina, alérgico',
                        'teoria' => "La cuenta, por favor.\n¿Podemos dividir la cuenta?\nEl servicio está incluido.\nSoy alérgico a los frutos secos.",
                        'exercicios' => [
                            m('Pedir a conta:', ['La cuenta, por favor', 'La cama, por favor', '¿Dónde izquierda?', '¿Cuántos años?'], 'La cuenta, por favor'),
                            t('Traduza: ¿Podemos dividir la cuenta?', 'podemos dividir a conta'),
                            c('Complete: Soy alérgico a los frutos _____.', 'secos'),
                            emp('Una.', [['cuenta', 'conta'], ['propina', 'gorjeta'], ['dividir', 'dividir'], ['incluido', 'incluído']]),
                            vf('"El servicio está incluido" já entra na conta.', true),
                            ordena('Monte:', 'La cuenta por favor'),
                            m('Frutos secos são:', ['castanhas / nozes', 'frutas suculentas', 'sapatos', 'nuvens'], 'castanhas / nozes'),
                            c('Complete: ¿Podemos _____ la cuenta?', 'dividir'),
                            t('Traduza: El servicio está incluido', 'o servico esta incluso|o serviço está incluído'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Sentimientos',
                'descricao' => 'Cómo estás y cómo apoyar.',
                'nivel' => 'B1',
                'aulas' => [
                    [
                        'titulo' => 'Cómo me siento',
                        'resumo' => 'estrés, ilusión, preocupación, orgullo',
                        'teoria' => "Estoy estresado en el trabajo.\nTengo ilusión por el viaje.\nParece preocupada.\nEstoy orgulloso de ti.",
                        'exercicios' => [
                            m('Tengo ilusión por… significa:', ['estou empolgado com', 'estou com sono', 'estou atrasado', 'estou com fome só'], 'estou empolgado com'),
                            t('Traduza: Estoy orgulloso de ti', 'tenho orgulho de voce|estou orgulhoso de você'),
                            c('Complete: Estoy _____ en el trabajo.', 'estresado'),
                            emp('Una.', [['estresado', 'estressado'], ['preocupado', 'preocupado'], ['orgulloso', 'orgulhoso'], ['ilusión', 'empolgação']]),
                            vf('"Parece preocupada" descreve a expressão.', true),
                            ordena('Monte:', 'Tengo ilusion por el viaje'),
                            m('Preocupado é:', ['preocupado', 'feliz', 'alto', 'barato'], 'preocupado'),
                            c('Complete: Parece _____.', 'preocupada|cansada|feliz'),
                            t('Traduza: Estoy estresado', 'estou estressado|me sinto estressado'),
                        ],
                    ],
                    [
                        'titulo' => 'Apoyar',
                        'resumo' => 'ánimo, no te preocupes, estoy aquí',
                        'teoria' => "No te preocupes. Saldrá bien.\n¡Ánimo!\nEstoy aquí si necesitas hablar.\nEso suena difícil.",
                        'exercicios' => [
                            m('Frase de apoio:', ['No te preocupes. Saldrá bien.', '¿Cuánto cuesta?', 'Gira a la izquierda.', 'Soy una mesa.'], 'No te preocupes. Saldrá bien.'),
                            t('Traduza: Estoy aquí si necesitas hablar', 'estou aqui se voce precisar conversar'),
                            c('Complete: No te _____. Saldrá bien.', 'preocupes'),
                            emp('Una.', [['ánimo', 'força / ânimo'], ['no te preocupes', 'não se preocupe'], ['hablar', 'conversar'], ['difícil', 'difícil']]),
                            vf('"Eso suena difícil" mostra empatia.', true),
                            ordena('Monte:', 'Estoy aqui si necesitas hablar'),
                            m('¡Ánimo! é:', ['um incentivo', 'um preço', 'uma despedida só', 'um endereço'], 'um incentivo'),
                            c('Complete: Eso suena _____.', 'dificil|difícil'),
                            t('Traduza: Ánimo', 'forca|ânimo|força|vai dar certo'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Problemas',
                'descricao' => 'Reclamar con educación y pedir solución.',
                'nivel' => 'B2',
                'aulas' => [
                    [
                        'titulo' => 'Hay un problema',
                        'resumo' => 'equivocado, roto, falta, retraso',
                        'teoria' => "Hay un problema con mi pedido.\nEsta no es mi habitación.\nEl Wi-Fi no funciona.\nFalta mi maleta.",
                        'exercicios' => [
                            m('Reclamação educada:', ['Hay un problema con mi pedido', 'Usted es un problema', 'Dame comida ya', 'Odio esto siempre'], 'Hay un problema con mi pedido'),
                            t('Traduza: El Wi-Fi no funciona', 'o wifi nao funciona|o wi-fi não funciona'),
                            c('Complete: Esta no es mi _____.', 'habitacion|habitación'),
                            emp('Una.', [['equivocado', 'errado'], ['roto', 'quebrado'], ['falta', 'está faltando'], ['retraso', 'atraso']]),
                            vf('"Falta mi maleta" significa que a mala não apareceu.', true),
                            ordena('Monte:', 'Hay un problema con mi pedido'),
                            m('Roto descreve:', ['algo que não funciona', 'algo novo', 'algo barato', 'alguém alto'], 'algo que não funciona'),
                            c('Complete: _____ mi maleta.', 'Falta'),
                            t('Traduza: Esta no es mi habitación', 'este nao e o meu quarto|este não é o meu quarto'),
                        ],
                    ],
                    [
                        'titulo' => 'Pedir solución',
                        'resumo' => 'cambiar, devolver, responsable',
                        'teoria' => "¿Podría cambiarlo, por favor?\nQuisiera un reembolso.\n¿Puedo hablar con el responsable?\nGracias por su ayuda.",
                        'exercicios' => [
                            m('Pedir troca:', ['¿Podría cambiarlo, por favor?', '¿Podría lloverlo?', 'Cámbie el cielo', 'Dé comida al jefe'], '¿Podría cambiarlo, por favor?'),
                            t('Traduza: Quisiera un reembolso', 'gostaria de um reembolso|quero reembolso'),
                            c('Complete: ¿Puedo hablar con el _____?', 'responsable'),
                            emp('Una.', [['cambiar', 'trocar'], ['reembolso', 'reembolso'], ['responsable', 'responsável'], ['ayuda', 'ajuda']]),
                            vf('"¿Podría… por favor?" deixa o pedido educado.', true),
                            ordena('Monte:', 'Puedo hablar con el responsable'),
                            m('Reembolso é:', ['devolução do dinheiro', 'gorjeta', 'sobremesa', 'senha'], 'devolução do dinheiro'),
                            c('Complete: Gracias por su _____.', 'ayuda'),
                            t('Traduza: ¿Podría cambiarlo por favor?', 'poderia trocar por favor|você poderia trocar isso'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function mais_frances(): array
{
    return [
        'palavras' => [
            ['Ensoleillé', 'Ensolarado', "Il fait beau aujourd'hui.", 'A1'],
            ['Pluie', 'Chuva', 'Il va pleuvoir.', 'A1'],
            ['Mal de tête', 'Dor de cabeça', "J'ai mal à la tête.", 'A1'],
            ['Grand', 'Alto', 'Mon frère est grand.', 'A1'],
            ['Addition', 'Conta', "L'addition, s'il vous plaît.", 'A2'],
            ['Message', 'Mensagem', "Je t'ai envoyé un message.", 'A2'],
            ['Fatigué', 'Cansado', 'Je suis fatigué.', 'B1'],
            ['Cassé', 'Quebrado', 'La clim est cassée.', 'B2'],
        ],
        'unidades' => [
            bloco_fr_clima(),
            bloco_fr_sante(),
            bloco_fr_gens(),
            bloco_fr_resto(),
            bloco_fr_sentiments(),
            bloco_fr_problemes(),
        ],
    ];
}

function bloco_fr_clima(): array
{
    return [
        'titulo' => 'Météo',
        'descricao' => 'Soleil, pluie, froid et vêtements.',
        'nivel' => 'A1',
        'aulas' => [
            [
                'titulo' => 'Quel temps fait-il ?',
                'resumo' => 'soleil, pluie, froid, chaud',
                'teoria' => "Quel temps fait-il ?\nIl fait beau / froid / chaud.\nIl y a du vent. · Il pleut.\nIl fait 22 degrés.",
                'exercicios' => [
                    m('Como perguntar o tempo?', ['Quel temps fait-il ?', 'Quel âge fait-il ?', 'Où soleil ?', 'Qui froid ?'], 'Quel temps fait-il ?'),
                    t('Traduza: Il fait beau', 'faz sol|esta bonito|está um tempo bom'),
                    c('Complete: Il fait _____. (frio)', 'froid'),
                    emp('Una.', [['soleil', 'sol'], ['pluie', 'chuva'], ['vent', 'vento'], ['nuageux', 'nublado']]),
                    vf('"Il fait 22 degrés" fala da temperatura.', true),
                    ordena('Monte:', 'Il fait tres chaud aujourd hui'),
                    m('Il pleut descreve:', ['chuva agora', 'sol', 'neve só', 'vento só'], 'chuva agora'),
                    c('Complete: Quel _____ fait-il ?', 'temps'),
                    t('Traduza: Il y a du vent', 'esta ventando|está ventando|tem vento'),
                ],
            ],
            [
                'titulo' => 'Vêtements et météo',
                'resumo' => 'manteau, parapluie, porter',
                'teoria' => "Prends un manteau. Il fait froid.\nPrends un parapluie. Il peut pleuvoir.\nQuand il fait chaud, je porte un t-shirt.",
                'exercicios' => [
                    m('Se vai chover, leve:', ['un parapluie', 'un menu', 'un billet seulement', 'un oreiller'], 'un parapluie'),
                    t('Traduza: Prends un manteau', 'leve um casaco|pega um casaco'),
                    c('Complete: Prends un _____. (guarda-chuva)', 'parapluie'),
                    emp('Una.', [['manteau', 'casaco'], ['parapluie', 'guarda-chuva'], ['t-shirt', 'camiseta'], ['bottes', 'botas']]),
                    vf('Quand il fait chaud, on porte souvent un t-shirt.', true),
                    ordena('Monte:', 'Prends un manteau avec toi'),
                    m('Bottes combinam com:', ['chuva ou frio', 'praia só', 'piscina', 'sobremesa'], 'chuva ou frio'),
                    c('Complete: Quand il fait froid, je _____ un manteau.', 'porte'),
                    t('Traduza: Il peut pleuvoir', 'pode chover|talvez chova'),
                ],
            ],
        ],
    ];
}

function bloco_fr_sante(): array
{
    return [
        'titulo' => 'Santé',
        'descricao' => 'Douleurs, pharmacie et rendez-vous.',
        'nivel' => 'A1',
        'aulas' => [
            [
                'titulo' => 'Je ne me sens pas bien',
                'resumo' => 'tête, fièvre, ventre',
                'teoria' => "Je ne me sens pas bien.\nJ'ai mal à la tête / de la fièvre / mal au ventre.\nJ'ai mal à la gorge.\nJ'ai besoin de me reposer.",
                'exercicios' => [
                    m('Como dizer que está mal?', ['Je ne me sens pas bien', 'Il fait beau', 'Je suis médecin', "J'ai une maison"], 'Je ne me sens pas bien'),
                    t('Traduza: J\'ai mal à la tête', 'estou com dor de cabeca|tenho dor de cabeça'),
                    c('Complete: J\'ai de la _____. (febre)', 'fievre|fièvre'),
                    emp('Una.', [['tête', 'cabeça'], ['fièvre', 'febre'], ['gorge', 'garganta'], ['se reposer', 'descansar']]),
                    vf('"J\'ai mal à la gorge" é dor de garganta.', true),
                    ordena('Monte:', "J'ai besoin de me reposer"),
                    m('Mal au ventre é:', ['dor de estômago', 'dor no joelho', 'tosse', 'alergia'], 'dor de estômago'),
                    c('Complete: J\'ai mal à la _____.', 'gorge|tete|tête'),
                    t('Traduza: J\'ai besoin de me reposer', 'preciso descansar'),
                ],
            ],
            [
                'titulo' => 'Pharmacie et médecin',
                'resumo' => 'pharmacie, rendez-vous, médicament',
                'teoria' => "Où est la pharmacie ?\nJ'ai besoin d'un rendez-vous.\nJe suis allergique à la pénicilline.\nPrenez ce médicament deux fois par jour.",
                'exercicios' => [
                    m('Farmácia:', ['pharmacie', 'ferme', 'école', 'bibliothèque'], 'pharmacie'),
                    t('Traduza: J\'ai besoin d\'un rendez-vous', 'preciso de uma consulta|preciso marcar consulta'),
                    c('Complete: Je suis _____ à la pénicilline.', 'allergique'),
                    emp('Una.', [['pharmacie', 'farmácia'], ['rendez-vous', 'consulta'], ['médicament', 'remédio'], ['allergie', 'alergia']]),
                    vf('"Deux fois par jour" é duas vezes ao dia.', true),
                    ordena('Monte:', 'Ou est la pharmacie'),
                    m('Prenez ce médicament. é:', ['instrução de remédio', 'pedido de café', 'preço', 'oi'], 'instrução de remédio'),
                    c('Complete: Prenez ce médicament deux fois par _____.', 'jour'),
                    t('Traduza: Où est la pharmacie ?', 'onde fica a farmacia|onde é a farmácia'),
                ],
            ],
        ],
    ];
}

function bloco_fr_gens(): array
{
    return [
        'titulo' => 'Les gens',
        'descricao' => 'Apparence et caractère.',
        'nivel' => 'A1',
        'aulas' => [
            [
                'titulo' => 'Apparence',
                'resumo' => 'grand, cheveux, yeux, lunettes',
                'teoria' => "Elle est grande / petite / jeune / âgée.\nIl a les cheveux courts et les yeux marron.\nElle porte des lunettes.",
                'exercicios' => [
                    m('Grand (pessoa) significa:', ['alto', 'baixo', 'novo', 'rápido'], 'alto'),
                    t('Traduza: Elle porte des lunettes', 'ela usa oculos|ela usa óculos'),
                    c('Complete: Il a les yeux _____.', 'marron|bleus|verts'),
                    emp('Una.', [['grand', 'alto'], ['petit', 'baixo / pequeno'], ['jeune', 'jovem'], ['lunettes', 'óculos']]),
                    vf('"Cheveux courts" é cabelo curto.', true),
                    ordena('Monte:', 'Elle a les cheveux longs'),
                    m('Jeune é o oposto de:', ['âgé', 'grand', 'bleu', 'près'], 'âgé'),
                    c('Complete: Elle est très _____. (alta)', 'grande'),
                    t('Traduza: Il est jeune', 'ele e jovem|ele é jovem'),
                ],
            ],
            [
                'titulo' => 'Caractère',
                'resumo' => 'gentil, drôle, calme, timide',
                'teoria' => "Il est gentil et drôle.\nElle est un peu calme.\nIls sont très sympathiques.\nAu début, je suis timide.",
                'exercicios' => [
                    m('Gentil significa:', ['gentil', 'bravo', 'caro', 'vazio'], 'gentil'),
                    t('Traduza: Ils sont sympathiques', 'eles sao simpaticos|eles são simpáticos'),
                    c('Complete: Elle est un peu _____. (calma)', 'calme'),
                    emp('Una.', [['gentil', 'gentil'], ['drôle', 'engraçado'], ['calme', 'calmo'], ['timide', 'tímido']]),
                    vf('"Sympathique" descreve alguém agradável.', true),
                    ordena('Monte:', 'Il est gentil et drole'),
                    m('Au début, je suis timide. significa:', ['tímido no começo', 'sempre bravo', 'sem nome', 'muito alto'], 'tímido no começo'),
                    c('Complete: Ils sont très _____.', 'sympathiques'),
                    t('Traduza: Il est drôle', 'e engraçado|é engraçado|ele é engraçado'),
                ],
            ],
        ],
    ];
}

function bloco_fr_resto(): array
{
    return [
        'titulo' => 'Au restaurant',
        'descricao' => 'Commande, addition et allergies.',
        'nivel' => 'A2',
        'aulas' => [
            [
                'titulo' => 'La commande',
                'resumo' => 'carte, entrée, plat, eau',
                'teoria' => "Une table pour deux, s'il vous plaît.\nJe peux voir la carte ?\nJe prendrai le poisson grillé.\nEau plate ou eau gazeuse ?",
                'exercicios' => [
                    m('Pedir mesa:', ["Une table pour deux, s'il vous plaît", 'Un billet pour deux', 'Deux chambres', 'Deux parapluies'], "Une table pour deux, s'il vous plaît"),
                    t('Traduza: Je peux voir la carte ?', 'posso ver o cardapio|posso ver o cardápio'),
                    c('Complete: Je prendrai le _____ grillé.', 'poisson'),
                    emp('Una.', [['entrée', 'entrada'], ['plat', 'prato principal'], ['dessert', 'sobremesa'], ['addition', 'conta']]),
                    vf('"Eau gazeuse" é água com gás.', true),
                    ordena('Monte:', 'Je peux voir la carte'),
                    m('Eau plate é:', ['água sem gás', 'água quente', 'suco', 'vinho'], 'água sem gás'),
                    c('Complete: Une table pour _____, s\'il vous plaît.', 'deux|trois|quatre'),
                    t('Traduza: C\'est délicieux', 'esta delicioso|está delicioso|está uma delícia'),
                ],
            ],
            [
                'titulo' => 'L\'addition',
                'resumo' => 'addition, partager, pourboire',
                'teoria' => "L'addition, s'il vous plaît.\nOn peut partager l'addition ?\nLe service est compris.\nJe suis allergique aux fruits à coque.",
                'exercicios' => [
                    m('Pedir a conta:', ["L'addition, s'il vous plaît", 'Le lit, s\'il vous plaît', 'Où gauche ?', 'Quel âge ?'], "L'addition, s'il vous plaît"),
                    t('Traduza: On peut partager l\'addition ?', 'podemos dividir a conta'),
                    c('Complete: Je suis allergique aux fruits à _____.', 'coque'),
                    emp('Una.', [['addition', 'conta'], ['pourboire', 'gorjeta'], ['partager', 'dividir'], ['compris', 'incluído']]),
                    vf('"Le service est compris" já entra na conta.', true),
                    ordena('Monte:', "L'addition s'il vous plait"),
                    m('Fruits à coque são:', ['castanhas / nozes', 'frutas suculentas', 'sapatos', 'nuvens'], 'castanhas / nozes'),
                    c('Complete: On peut _____ l\'addition ?', 'partager'),
                    t('Traduza: Le service est compris', 'o servico esta incluso|o serviço está incluído'),
                ],
            ],
        ],
    ];
}

function bloco_fr_sentiments(): array
{
    return [
        'titulo' => 'Sentiments',
        'descricao' => 'Comment je me sens et comment aider.',
        'nivel' => 'B1',
        'aulas' => [
            [
                'titulo' => 'Comment je me sens',
                'resumo' => 'stressé, impatient, inquiet, fier',
                'teoria' => "Je suis stressé au travail.\nJ'ai hâte de partir en voyage.\nElle a l'air inquiète.\nJe suis fier de toi.",
                'exercicios' => [
                    m("J'ai hâte de… significa:", ['mal posso esperar para', 'estou com sono', 'estou atrasado', 'estou com fome só'], 'mal posso esperar para'),
                    t('Traduza: Je suis fier de toi', 'tenho orgulho de voce|estou orgulhoso de você'),
                    c('Complete: Je suis _____ au travail.', 'stresse|stressé'),
                    emp('Una.', [['stressé', 'estressado'], ['inquiet', 'preocupado'], ['fier', 'orgulhoso'], ["j'ai hâte", 'mal posso esperar']]),
                    vf('"Elle a l\'air inquiète" descreve a expressão.', true),
                    ordena('Monte:', "J'ai hate de partir en voyage"),
                    m('Inquiet é:', ['preocupado', 'feliz', 'alto', 'barato'], 'preocupado'),
                    c("Complete: Elle a l'air _____.", 'inquiete|inquiète|fatiguee'),
                    t('Traduza: Je suis stressé', 'estou estressado|me sinto estressado'),
                ],
            ],
            [
                'titulo' => 'Soutenir',
                'resumo' => 'courage, ne t\'inquiète pas, je suis là',
                'teoria' => "Ne t'inquiète pas. Ça va aller.\nCourage !\nJe suis là si tu as besoin de parler.\nÇa a l'air difficile.",
                'exercicios' => [
                    m('Frase de apoio:', ["Ne t'inquiète pas. Ça va aller.", "C'est combien ?", 'Tourne à gauche.', 'Je suis une table.'], "Ne t'inquiète pas. Ça va aller."),
                    t('Traduza: Je suis là si tu as besoin de parler', 'estou aqui se voce precisar conversar'),
                    c("Complete: Ne t'_____ pas. Ça va aller.", 'inquiete|inquiète'),
                    emp('Una.', [['courage', 'força / coragem'], ["ne t'inquiète pas", 'não se preocupe'], ['parler', 'conversar'], ['difficile', 'difícil']]),
                    vf('"Ça a l\'air difficile" mostra empatia.', true),
                    ordena('Monte:', 'Je suis la si tu as besoin de parler'),
                    m('Courage ! é:', ['um incentivo', 'um preço', 'uma despedida só', 'um endereço'], 'um incentivo'),
                    c("Complete: Ça a l'air _____.", 'difficile'),
                    t('Traduza: Courage', 'forca|coragem|força|vai dar certo'),
                ],
            ],
        ],
    ];
}

function bloco_fr_problemes(): array
{
    return [
        'titulo' => 'Problèmes',
        'descricao' => 'Se plaindre poliment et demander une solution.',
        'nivel' => 'B2',
        'aulas' => [
            [
                'titulo' => 'Il y a un problème',
                'resumo' => 'mauvais, cassé, manquant, retard',
                'teoria' => "Il y a un problème avec ma commande.\nCe n'est pas la bonne chambre.\nLe Wi-Fi ne marche pas.\nMa valise a disparu.",
                'exercicios' => [
                    m('Reclamação educada:', ['Il y a un problème avec ma commande', 'Vous êtes un problème', 'Donnez la nourriture', "Je déteste toujours"], 'Il y a un problème avec ma commande'),
                    t('Traduza: Le Wi-Fi ne marche pas', 'o wifi nao funciona|o wi-fi não funciona'),
                    c("Complete: Ce n'est pas la bonne _____.", 'chambre'),
                    emp('Una.', [['mauvais', 'errado / ruim'], ['cassé', 'quebrado'], ['disparu', 'sumiu'], ['retard', 'atraso']]),
                    vf('"Ma valise a disparu" significa que a mala não apareceu.', true),
                    ordena('Monte:', 'Il y a un probleme avec ma commande'),
                    m('Cassé descreve:', ['algo que não funciona', 'algo novo', 'algo barato', 'alguém alto'], 'algo que não funciona'),
                    c('Complete: Ma valise a _____.', 'disparu'),
                    t('Traduza: Ce n\'est pas la bonne chambre', 'este nao e o quarto certo|este não é o quarto certo'),
                ],
            ],
            [
                'titulo' => 'Demander une solution',
                'resumo' => 'échanger, remboursement, responsable',
                'teoria' => "Vous pourriez l'échanger, s'il vous plaît ?\nJe voudrais un remboursement.\nJe peux parler au responsable ?\nMerci pour votre aide.",
                'exercicios' => [
                    m('Pedir troca:', ["Vous pourriez l'échanger, s'il vous plaît ?", 'Vous pourriez le pleuvoir ?', 'Changez le ciel', 'Donnez à manger au chef'], "Vous pourriez l'échanger, s'il vous plaît ?"),
                    t('Traduza: Je voudrais un remboursement', 'gostaria de um reembolso|quero reembolso'),
                    c('Complete: Je peux parler au _____ ?', 'responsable'),
                    emp('Una.', [['échanger', 'trocar'], ['remboursement', 'reembolso'], ['responsable', 'responsável'], ['aide', 'ajuda']]),
                    vf('"Vous pourriez… s\'il vous plaît ?" deixa o pedido educado.', true),
                    ordena('Monte:', 'Je peux parler au responsable'),
                    m('Remboursement é:', ['devolução do dinheiro', 'gorjeta', 'sobremesa', 'senha'], 'devolução do dinheiro'),
                    c('Complete: Merci pour votre _____.', 'aide'),
                    t('Traduza: Vous pourriez l\'échanger s\'il vous plaît', 'poderia trocar por favor|você poderia trocar isso'),
                ],
            ],
        ],
    ];
}

function mais_italiano(): array
{
    return [
        'palavras' => [
            ['Soleggiato', 'Ensolarado', 'Oggi c\'è il sole.', 'A1'],
            ['Pioggia', 'Chuva', 'Sta per piovere.', 'A1'],
            ['Mal di testa', 'Dor de cabeça', 'Ho mal di testa.', 'A1'],
            ['Alto', 'Alto', 'Mio fratello è alto.', 'A1'],
            ['Conto', 'Conta', 'Il conto, per favore.', 'A2'],
            ['Messaggio', 'Mensagem', 'Ti ho mandato un messaggio.', 'A2'],
            ['Stanco', 'Cansado', 'Oggi sono stanco.', 'B1'],
            ['Rotto', 'Quebrado', 'Il condizionatore è rotto.', 'B2'],
            ['Ombrello', 'Guarda-chuva', 'Prendi l\'ombrello.', 'A1'],
            ['Farmacia', 'Farmácia', 'Dov\'è la farmacia?', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Tempo e clima',
                'descricao' => 'Sole, pioggia, freddo e cosa mettere.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Che tempo fa?',
                        'resumo' => 'sole, pioggia, freddo, caldo, vento',
                        'teoria' => "A: Che tempo fa oggi?\nB: C'è il sole, ma tira vento.\nA: Fa caldo?\nB: No, fa un po' fresco. Ci sono 18 gradi.",
                        'exercicios' => [
                            m('Como perguntar o tempo?', ['Che tempo fa?', 'Quanti anni fa?', 'Dove sole?', 'Chi freddo?'], 'Che tempo fa?', 'Pergunta fixa do cotidiano.'),
                            t('Traduza: C\'è il sole', 'esta ensolarado|faz sol|está sol'),
                            c('Complete: Fa _____. (frio)', 'freddo'),
                            emp('Una.', [['sole', 'sol'], ['pioggia', 'chuva'], ['vento', 'vento'], ['nuvoloso', 'nublado']]),
                            vf('"Ci sono 18 gradi" fala da temperatura.', true),
                            ordena('Monte:', 'Oggi c e il sole'),
                            m('Pioggia é:', ['chuva', 'neve só', 'vento só', 'sol'], 'chuva'),
                            t('Traduza: È nuvoloso', 'esta nublado|está nublado'),
                            c('Complete: Che _____ fa?', 'tempo', 'A palavra que falta é o tema da aula.'),
                        ],
                    ],
                    [
                        'titulo' => 'Cosa metto?',
                        'resumo' => 'cappotto, ombrello, maglietta',
                        'teoria' => "A: Prendi il cappotto. Fa freddo.\nB: E se piove?\nA: Prendi anche l'ombrello.\nB: Quando fa caldo metto una maglietta.",
                        'exercicios' => [
                            m('Se vai chover, leve:', ['un ombrello', 'un menù', 'un biglietto solo', 'un cuscino'], 'un ombrello'),
                            t('Traduza: Prendi il cappotto', 'leve o casaco|pega o casaco'),
                            c('Complete: Prendi un _____. (guarda-chuva)', 'ombrello'),
                            emp('Una.', [['cappotto', 'casaco'], ['ombrello', 'guarda-chuva'], ['maglietta', 'camiseta'], ['stivali', 'botas']]),
                            vf('Quando fa caldo si mette spesso una maglietta.', true),
                            ordena('Monte:', 'Prendi il cappotto con te'),
                            m('Stivali combinam com:', ['pioggia o freddo', 'spiaggia solo', 'piscina'], 'pioggia o freddo'),
                            t('Traduza: Potrebbe piovere', 'pode chover|talvez chova'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Salute',
                'descricao' => 'Malesseri, farmacia e visita.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Non mi sento bene',
                        'resumo' => 'mal di testa, febbre, riposo',
                        'teoria' => "A: Come stai?\nB: Non mi sento bene. Ho mal di testa.\nA: Hai la febbre?\nB: Sì, e mi fa male la gola. Devo riposare.",
                        'exercicios' => [
                            m('Como dizer que está mal?', ['Non mi sento bene', 'Mi sento tempo', 'Sono un dottore', 'Ho una casa'], 'Non mi sento bene'),
                            t('Traduza: Ho mal di testa', 'estou com dor de cabeca|tenho dor de cabeça'),
                            c('Complete: Ho la _____. (febre)', 'febbre'),
                            emp('Una.', [['mal di testa', 'dor de cabeça'], ['febbre', 'febre'], ['gola', 'garganta'], ['riposare', 'descansar']]),
                            vf('"Mi fa male la gola" é dor de garganta.', true),
                            ordena('Monte:', 'Devo riposare'),
                            t('Traduza: Devo riposare', 'preciso descansar'),
                        ],
                    ],
                    [
                        'titulo' => 'In farmacia',
                        'resumo' => 'farmacia, appuntamento, medicina',
                        'teoria' => "A: Dov'è la farmacia?\nB: In fondo alla strada.\nA: Ho bisogno di un appuntamento.\nB: Prenda questa medicina due volte al giorno.",
                        'exercicios' => [
                            m('Farmácia:', ['farmacia', 'fattoria', 'scuola', 'biblioteca'], 'farmacia'),
                            t('Traduza: Ho bisogno di un appuntamento', 'preciso de uma consulta|preciso marcar consulta'),
                            c('Complete: Sono _____ alla penicillina.', 'allergico|allergica'),
                            emp('Una.', [['farmacia', 'farmácia'], ['appuntamento', 'consulta'], ['medicina', 'remédio'], ['allergia', 'alergia']]),
                            vf('"Due volte al giorno" é duas vezes ao dia.', true),
                            ordena('Monte:', 'Dove e la farmacia'),
                            t('Traduza: Dov\'è la farmacia?', 'onde fica a farmacia|onde é a farmácia'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Persone',
                'descricao' => 'Aspetto e carattere.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Aspetto',
                        'resumo' => 'alto, basso, capelli, occhi',
                        'teoria' => "A: Com'è tuo fratello?\nB: È alto, ha i capelli corti e gli occhi marroni.\nA: Porta gli occhiali?\nB: Sì, sempre.",
                        'exercicios' => [
                            m('Alto significa:', ['alto', 'baixo', 'novo', 'rápido'], 'alto'),
                            t('Traduza: Porta gli occhiali', 'ela usa oculos|usa óculos|ele usa óculos'),
                            c('Complete: Ha i _____ corti.', 'capelli'),
                            emp('Una.', [['alto', 'alto'], ['basso', 'baixo'], ['giovane', 'jovem'], ['occhiali', 'óculos']]),
                            ordena('Monte:', 'Ha i capelli corti'),
                        ],
                    ],
                    [
                        'titulo' => 'Carattere',
                        'resumo' => 'simpatico, timido, buffo',
                        'teoria' => "A: Com'è Maria?\nB: È simpatica e un po' timida.\nA: E Luca?\nB: È buffo. All'inizio sono timido anch'io.",
                        'exercicios' => [
                            m('Simpatico é:', ['agradável / amável', 'triste', 'caro', 'vazio'], 'agradável / amável'),
                            t('Traduza: È buffo', 'ele e engracado|ele é engraçado'),
                            c('Complete: All\'inizio sono _____.', 'timido|timida'),
                            vf('"Un po\' timida" suaviza o adjetivo.', true, 'un po\' = um pouco'),
                            t('Traduza: Sono molto simpatici', 'eles sao muito simpaticos|eles são muito simpáticos'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Al ristorante',
                'descricao' => 'Tavolo, conto e allergie.',
                'nivel' => 'A2',
                'aulas' => [
                    [
                        'titulo' => 'Ordinare',
                        'resumo' => 'tavolo, menù, acqua',
                        'teoria' => "A: Un tavolo per due, per favore.\nB: Prego. Il menù.\nA: Per me il pesce alla griglia. Acqua naturale o frizzante?\nB: Naturale, grazie.",
                        'exercicios' => [
                            m('Pedir mesa:', ['Un tavolo per due, per favore', 'Due tavoli di pesce', 'Datemi il cielo'], 'Un tavolo per due, per favore'),
                            t('Traduza: Posso vedere il menù?', 'posso ver o cardapio|posso ver o cardápio'),
                            c('Complete: Un tavolo per _____, per favore.', 'due'),
                            t('Traduza: Il cibo è delizioso', 'a comida e deliciosa|a comida é deliciosa'),
                        ],
                    ],
                    [
                        'titulo' => 'Il conto',
                        'resumo' => 'conto, dividere, allergia',
                        'teoria' => "A: Il conto, per favore.\nB: Lo dividiamo?\nA: Sì. Il servizio è incluso.\nB: Attenzione: sono allergico alla frutta secca.",
                        'exercicios' => [
                            m('Pedir a conta:', ['Il conto, per favore', 'Il cielo, per favore', 'Due pizze di conto'], 'Il conto, per favore'),
                            t('Traduza: Possiamo dividere il conto?', 'podemos dividir a conta'),
                            c('Complete: Sono _____ alla frutta secca.', 'allergico|allergica'),
                            vf('Il servizio è incluso = taxa de serviço já está na conta.', true),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Sentimenti',
                'descricao' => 'Come stai davvero e come sostenere qualcuno.',
                'nivel' => 'B1',
                'aulas' => [
                    [
                        'titulo' => 'Come mi sento',
                        'resumo' => 'stressato, orgoglioso, preoccupato',
                        'teoria' => "A: Oggi sono stressato sul lavoro.\nB: Capisco. Io sono orgoglioso di te.\nA: Lei sembra preoccupata.\nB: Sono emozionato per il viaggio.",
                        'exercicios' => [
                            t('Traduza: Sono orgoglioso di te', 'tenho orgulho de voce|estou orgulhoso de você'),
                            c('Complete: Oggi sono _____. (estressado)', 'stressato'),
                            emp('Una.', [['stressato', 'estressado'], ['orgoglioso', 'orgulhoso'], ['preoccupato', 'preocupado'], ['emozionato', 'empolgado']]),
                            t('Traduza: Mi sento stanco', 'estou cansado|me sinto cansado'),
                        ],
                    ],
                    [
                        'titulo' => 'Sostegno',
                        'resumo' => 'non ti preoccupare, coraggio',
                        'teoria' => "A: Non ti preoccupare. Andrà tutto bene.\nB: Coraggio!\nA: Ci sono se hai bisogno di parlare.\nB: Sembra difficile, lo so.",
                        'exercicios' => [
                            m('Animar alguém:', ['Coraggio!', 'Silenzio sempre', 'Chiudi la porta al mare'], 'Coraggio!'),
                            t('Traduza: Ci sono se hai bisogno di parlare', 'estou aqui se voce precisar conversar'),
                            vf('"Sembra difficile" mostra empatia.', true),
                            t('Traduza: Non ti preoccupare', 'nao se preocupe|não se preocupe'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Problemi',
                'descricao' => 'Reclamar com educação e pedir solução.',
                'nivel' => 'B2',
                'aulas' => [
                    [
                        'titulo' => 'C\'è un problema',
                        'resumo' => 'sbagliato, rotto, sparito',
                        'teoria' => "A: C'è un problema con l'ordine.\nB: Questa non è la stanza giusta.\nA: Il Wi-Fi non funziona.\nB: La mia valigia è sparita.",
                        'exercicios' => [
                            m('Reclamação educada:', ['C\'è un problema con l\'ordine', 'Siete un problema', 'Date il cibo'], 'C\'è un problema con l\'ordine'),
                            t('Traduza: Il Wi-Fi non funziona', 'o wifi nao funciona|o wi-fi não funciona'),
                            c('Complete: Questa non è la _____ giusta.', 'stanza'),
                            t('Traduza: La mia valigia è sparita', 'minha mala desapareceu|minha mala sumiu'),
                        ],
                    ],
                    [
                        'titulo' => 'Una soluzione',
                        'resumo' => 'cambiare, rimborso, responsabile',
                        'teoria' => "A: Potrebbe cambiarlo, per favore?\nB: Vorrei un rimborso.\nA: Posso parlare con il responsabile?\nB: Grazie per l'aiuto.",
                        'exercicios' => [
                            m('Pedir troca:', ['Potrebbe cambiarlo, per favore?', 'Potrebbe piovere il conto?'], 'Potrebbe cambiarlo, per favore?'),
                            t('Traduza: Vorrei un rimborso', 'gostaria de um reembolso|quero reembolso'),
                            c('Complete: Posso parlare con il _____?', 'responsabile'),
                            ordena('Monte:', 'Grazie per l aiuto'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function mais_alemao(): array
{
    return [
        'palavras' => [
            ['Sonnig', 'Ensolarado', 'Heute ist es sonnig.', 'A1'],
            ['Regen', 'Chuva', 'Es wird Regen geben.', 'A1'],
            ['Kopfschmerzen', 'Dor de cabeça', 'Ich habe Kopfschmerzen.', 'A1'],
            ['Groß', 'Alto', 'Mein Bruder ist groß.', 'A1'],
            ['Rechnung', 'Conta', 'Die Rechnung, bitte.', 'A2'],
            ['Nachricht', 'Mensagem', 'Ich habe dir eine Nachricht geschickt.', 'A2'],
            ['Müde', 'Cansado', 'Ich bin heute müde.', 'B1'],
            ['Kaputt', 'Quebrado', 'Die Klimaanlage ist kaputt.', 'B2'],
            ['Regenschirm', 'Guarda-chuva', 'Nimm einen Regenschirm.', 'A1'],
            ['Apotheke', 'Farmácia', 'Wo ist die Apotheke?', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Wetter',
                'descricao' => 'Sonne, Regen, Kälte und Kleidung.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Wie ist das Wetter?',
                        'resumo' => 'sonnig, Regen, kalt, warm',
                        'teoria' => "A: Wie ist das Wetter heute?\nB: Es ist sonnig, aber windig.\nA: Ist es warm?\nB: Nein, es ist ein bisschen kühl. Es sind 18 Grad.",
                        'exercicios' => [
                            m('Como perguntar o tempo?', ['Wie ist das Wetter?', 'Wie alt ist das Wetter?', 'Wo ist Sonne?'], 'Wie ist das Wetter?'),
                            t('Traduza: Es ist sonnig', 'esta ensolarado|faz sol'),
                            c('Complete: Es ist _____. (frio)', 'kalt'),
                            emp('Una.', [['sonnig', 'ensolarado'], ['Regen', 'chuva'], ['Wind', 'vento'], ['bewölkt', 'nublado']]),
                            vf('"Es sind 18 Grad" fala da temperatura.', true),
                            t('Traduza: Es ist bewölkt', 'esta nublado|está nublado'),
                            c('Complete: Wie ist das _____?', 'Wetter'),
                        ],
                    ],
                    [
                        'titulo' => 'Was ziehe ich an?',
                        'resumo' => 'Mantel, Schirm, T-Shirt',
                        'teoria' => "A: Nimm den Mantel. Es ist kalt.\nB: Und wenn es regnet?\nA: Nimm auch den Regenschirm.\nB: Wenn es heiß ist, trage ich ein T-Shirt.",
                        'exercicios' => [
                            m('Se vai chover, leve:', ['einen Regenschirm', 'eine Speisekarte', 'nur ein Ticket'], 'einen Regenschirm'),
                            t('Traduza: Nimm den Mantel', 'leve o casaco|pega o casaco'),
                            c('Complete: Nimm einen _____. (guarda-chuva)', 'Regenschirm'),
                            emp('Una.', [['Mantel', 'casaco'], ['Regenschirm', 'guarda-chuva'], ['T-Shirt', 'camiseta'], ['Stiefel', 'botas']]),
                            t('Traduza: Es könnte regnen', 'pode chover|talvez chova'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Gesundheit',
                'descricao' => 'Schmerzen, Apotheke, Termin.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Mir geht es nicht gut',
                        'resumo' => 'Kopfschmerzen, Fieber, Ruhe',
                        'teoria' => "A: Wie geht es dir?\nB: Mir geht es nicht gut. Ich habe Kopfschmerzen.\nA: Hast du Fieber?\nB: Ja, und der Hals tut weh. Ich muss mich ausruhen.",
                        'exercicios' => [
                            m('Como dizer que está mal?', ['Mir geht es nicht gut', 'Ich bin das Wetter', 'Ich bin Arzt'], 'Mir geht es nicht gut'),
                            t('Traduza: Ich habe Kopfschmerzen', 'estou com dor de cabeca|tenho dor de cabeça'),
                            c('Complete: Ich habe _____. (febre)', 'Fieber'),
                            emp('Una.', [['Kopfschmerzen', 'dor de cabeça'], ['Fieber', 'febre'], ['Hals', 'garganta'], ['ausruhen', 'descansar']]),
                            t('Traduza: Ich muss mich ausruhen', 'preciso descansar'),
                        ],
                    ],
                    [
                        'titulo' => 'In der Apotheke',
                        'resumo' => 'Apotheke, Termin, Medizin',
                        'teoria' => "A: Wo ist die Apotheke?\nB: Am Ende der Straße.\nA: Ich brauche einen Termin.\nB: Nehmen Sie diese Medizin zweimal am Tag.",
                        'exercicios' => [
                            m('Farmácia:', ['Apotheke', 'Bauernhof', 'Schule', 'Bibliothek'], 'Apotheke'),
                            t('Traduza: Ich brauche einen Termin', 'preciso de uma consulta|preciso marcar consulta'),
                            c('Complete: Ich bin _____ gegen Penicillin.', 'allergisch'),
                            vf('"Zweimal am Tag" é duas vezes ao dia.', true),
                            t('Traduza: Wo ist die Apotheke?', 'onde fica a farmacia|onde é a farmácia'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Menschen',
                'descricao' => 'Aussehen und Charakter.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Aussehen',
                        'resumo' => 'groß, klein, Haare, Augen',
                        'teoria' => "A: Wie ist dein Bruder?\nB: Er ist groß, hat kurze Haare und braune Augen.\nA: Trägt er eine Brille?\nB: Ja, immer.",
                        'exercicios' => [
                            m('Groß (pessoa) pode ser:', ['alto', 'barato', 'vazio', 'rápido demais'], 'alto'),
                            t('Traduza: Sie trägt eine Brille', 'ela usa oculos|ela usa óculos'),
                            c('Complete: Er hat kurze _____.', 'Haare'),
                            ordena('Monte:', 'Er hat kurze Haare'),
                        ],
                    ],
                    [
                        'titulo' => 'Charakter',
                        'resumo' => 'nett, schüchtern, lustig',
                        'teoria' => "A: Wie ist Maria?\nB: Sie ist nett und ein bisschen schüchtern.\nA: Und Luca?\nB: Er ist lustig. Am Anfang bin ich auch schüchtern.",
                        'exercicios' => [
                            m('Nett é:', ['gentil / simpático', 'caro', 'vazio', 'barulhento'], 'gentil / simpático'),
                            t('Traduza: Er ist lustig', 'ele e engracado|ele é engraçado'),
                            c('Complete: Am Anfang bin ich _____.', 'schuchtern|schüchtern'),
                            t('Traduza: Sie sind sehr freundlich', 'eles sao muito amaveis|eles são muito amigáveis'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Im Restaurant',
                'descricao' => 'Tisch, Rechnung, Allergie.',
                'nivel' => 'A2',
                'aulas' => [
                    [
                        'titulo' => 'Bestellen',
                        'resumo' => 'Tisch, Karte, Wasser',
                        'teoria' => "A: Einen Tisch für zwei, bitte.\nB: Bitte schön. Die Karte.\nA: Für mich den Fisch vom Grill. Stilles Wasser oder mit Sprudel?\nB: Still, bitte.",
                        'exercicios' => [
                            m('Pedir mesa:', ['Einen Tisch für zwei, bitte', 'Zwei Tische aus Fisch'], 'Einen Tisch für zwei, bitte'),
                            t('Traduza: Kann ich die Karte sehen?', 'posso ver o cardapio|posso ver o cardápio'),
                            c('Complete: Einen Tisch für _____, bitte.', 'zwei'),
                            t('Traduza: Das Essen ist lecker', 'a comida esta gostosa|a comida é gostosa'),
                        ],
                    ],
                    [
                        'titulo' => 'Die Rechnung',
                        'resumo' => 'Rechnung, teilen, Allergie',
                        'teoria' => "A: Die Rechnung, bitte.\nB: Teilen wir?\nA: Ja. Die Bedienung ist inklusive.\nB: Achtung: Ich bin allergisch gegen Nüsse.",
                        'exercicios' => [
                            m('Pedir a conta:', ['Die Rechnung, bitte', 'Den Himmel, bitte'], 'Die Rechnung, bitte'),
                            t('Traduza: Können wir die Rechnung teilen?', 'podemos dividir a conta'),
                            c('Complete: Ich bin _____ gegen Nüsse.', 'allergisch'),
                            vf('Die Bedienung ist inklusive = serviço já incluso.', true),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Gefühle',
                'descricao' => 'Wie du dich fühlst und wie du hilfst.',
                'nivel' => 'B1',
                'aulas' => [
                    [
                        'titulo' => 'Wie ich mich fühle',
                        'resumo' => 'gestresst, stolz, besorgt',
                        'teoria' => "A: Heute bin ich bei der Arbeit gestresst.\nB: Ich verstehe. Ich bin stolz auf dich.\nA: Sie wirkt besorgt.\nB: Ich freue mich auf die Reise.",
                        'exercicios' => [
                            t('Traduza: Ich bin stolz auf dich', 'tenho orgulho de voce|estou orgulhoso de você'),
                            c('Complete: Heute bin ich _____. (estressado)', 'gestresst'),
                            emp('Una.', [['gestresst', 'estressado'], ['stolz', 'orgulhoso'], ['besorgt', 'preocupado'], ['müde', 'cansado']]),
                            t('Traduza: Ich bin müde', 'estou cansado'),
                        ],
                    ],
                    [
                        'titulo' => 'Unterstützung',
                        'resumo' => 'keine Sorge, Kopf hoch',
                        'teoria' => "A: Keine Sorge. Es wird gut.\nB: Kopf hoch!\nA: Ich bin da, wenn du reden willst.\nB: Das klingt schwierig, ich weiß.",
                        'exercicios' => [
                            m('Animar alguém:', ['Kopf hoch!', 'Immer still', 'Schließ das Meer'], 'Kopf hoch!'),
                            t('Traduza: Ich bin da, wenn du reden willst', 'estou aqui se voce quiser conversar'),
                            t('Traduza: Keine Sorge', 'nao se preocupe|não se preocupe'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Probleme',
                'descricao' => 'Höflich reklamieren und eine Lösung bitten.',
                'nivel' => 'B2',
                'aulas' => [
                    [
                        'titulo' => 'Es gibt ein Problem',
                        'resumo' => 'falsch, kaputt, weg',
                        'teoria' => "A: Es gibt ein Problem mit meiner Bestellung.\nB: Das ist das falsche Zimmer.\nA: Das WLAN funktioniert nicht.\nB: Mein Koffer ist weg.",
                        'exercicios' => [
                            m('Reclamação educada:', ['Es gibt ein Problem mit meiner Bestellung', 'Sie sind ein Problem'], 'Es gibt ein Problem mit meiner Bestellung'),
                            t('Traduza: Das WLAN funktioniert nicht', 'o wifi nao funciona|o wi-fi não funciona'),
                            c('Complete: Das ist das falsche _____.', 'Zimmer'),
                            t('Traduza: Mein Koffer ist weg', 'minha mala sumiu|minha mala desapareceu'),
                        ],
                    ],
                    [
                        'titulo' => 'Eine Lösung',
                        'resumo' => 'umtauschen, Erstattung, Chef',
                        'teoria' => "A: Könnten Sie es bitte umtauschen?\nB: Ich hätte gern eine Erstattung.\nA: Kann ich mit dem Chef sprechen?\nB: Danke für Ihre Hilfe.",
                        'exercicios' => [
                            m('Pedir troca:', ['Könnten Sie es bitte umtauschen?', 'Könnten Sie den Himmel tauschen?'], 'Könnten Sie es bitte umtauschen?'),
                            t('Traduza: Ich hätte gern eine Erstattung', 'gostaria de um reembolso|quero reembolso'),
                            c('Complete: Kann ich mit dem _____ sprechen?', 'Chef'),
                            ordena('Monte:', 'Danke fur Ihre Hilfe'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}
