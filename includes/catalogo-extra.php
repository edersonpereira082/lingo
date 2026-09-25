<?php

function unidades_extra_por_codigo(string $codigo): array
{
    $mapa = [
        'en' => extra_ingles(),
        'es' => extra_espanhol(),
        'fr' => extra_frances(),
        'it' => extra_italiano(),
        'de' => extra_alemao(),
    ];

    return $mapa[$codigo] ?? ['palavras' => [], 'unidades' => [], 'descricao' => null];
}

function extra_ingles(): array
{
    return [
        'descricao' => 'Do zero às conversas do dia a dia: casa, compras, rotina e viagem — em todos os idiomas da conta.',
        'palavras' => [
            ['Bedroom', 'Quarto', 'The bedroom is small.', 'A1'],
            ['Kitchen', 'Cozinha', 'I cook in the kitchen.', 'A1'],
            ['Shirt', 'Camisa', 'This shirt is blue.', 'A1'],
            ['Cheap', 'Barato', 'These shoes are cheap.', 'A1'],
            ['Expensive', 'Caro', 'That bag is expensive.', 'A1'],
            ['Hotel', 'Hotel', 'I have a hotel reservation.', 'A1'],
            ['Passport', 'Passaporte', 'Where is my passport?', 'A1'],
            ['Flight', 'Voo', 'The flight is at nine.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Em casa',
                'descricao' => 'Cômodos, objetos e o que há na casa.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Cômodos',
                        'resumo' => 'kitchen, bedroom, bathroom, living room',
                        'teoria' => "house / apartment\nliving room = sala\nkitchen = cozinha\nbedroom = quarto\nbathroom = banheiro\nThere is a sofa in the living room.\nThere are two bedrooms.",
                        'exercicios' => [
                            m('Onde se cozinha?', ['bedroom', 'kitchen', 'bathroom', 'garden'], 'kitchen'),
                            t('Traduza: living room', 'sala|sala de estar'),
                            c('Complete: There _____ a table in the kitchen.', 'is'),
                            emp('Una.', [['bedroom', 'quarto'], ['bathroom', 'banheiro'], ['kitchen', 'cozinha'], ['sofa', 'sofá']]),
                            vf('"There are" usa-se com plural.', true),
                            ordena('Monte:', 'The kitchen is big'),
                            m('"Apartment" é:', ['apartamento', 'aeroporto', 'escritório', 'farmácia'], 'apartamento'),
                            m('There are two bedrooms. fala de:', ['Um quarto', 'Dois quartos', 'Nenhum quarto', 'A cozinha'], 'Dois quartos'),
                        ],
                    ],
                    [
                        'titulo' => 'Objetos da casa',
                        'resumo' => 'table, chair, bed, window, door',
                        'teoria' => "table · chair · bed · lamp · window · door · fridge\nOpen the window, please.\nThe keys are on the table.\nWhose bag is this? = De quem é esta bolsa?",
                        'exercicios' => [
                            m('Onde dormimos?', ['chair', 'bed', 'fridge', 'door'], 'bed'),
                            t('Traduza: Open the door', 'abra a porta|abre a porta'),
                            c('Complete: The keys are _____ the table.', 'on'),
                            emp('Una.', [['window', 'janela'], ['door', 'porta'], ['chair', 'cadeira'], ['fridge', 'geladeira']]),
                            vf('"On the table" significa em cima da mesa.', true),
                            ordena('Monte:', 'Please open the window'),
                            m('Fridge é:', ['fogão', 'geladeira', 'cama', 'tapete'], 'geladeira'),
                            m('Whose bag is this? pergunta:', ['Quanto custa', 'De quem é', 'Onde fica', 'Que horas são'], 'De quem é'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Compras',
                'descricao' => 'Preço, tamanho, cores e o que você quer levar.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Quanto custa?',
                        'resumo' => 'How much, cheap, expensive, I would like',
                        'teoria' => "How much is this? / How much are these?\nIt's ten dollars. · That's expensive. · That's cheap.\nI would like this one, please.\nCan I pay by card?",
                        'exercicios' => [
                            m('Como perguntar o preço?', ['How old is this?', 'How much is this?', 'How far is this?', 'How long is this?'], 'How much is this?'),
                            t('Traduza: That is expensive', 'isso e caro|isso é caro|esta caro|está caro'),
                            c('Complete: Can I pay by _____?', 'card'),
                            emp('Una.', [['cheap', 'barato'], ['expensive', 'caro'], ['card', 'cartão'], ['cash', 'dinheiro']]),
                            vf('"I would like" é um pedido educado.', true),
                            ordena('Monte:', 'I would like this one'),
                            m('Cash é:', ['cartão', 'dinheiro vivo', 'troco só', 'desconto'], 'dinheiro vivo'),
                            m('How much are these? usa-se com:', ['Uma coisa', 'Várias coisas', 'Pessoas', 'Horas'], 'Várias coisas'),
                        ],
                    ],
                    [
                        'titulo' => 'Roupas e cores',
                        'resumo' => 'shirt, shoes, size, blue, red',
                        'teoria' => "shirt · t-shirt · shoes · trousers · dress · jacket\nsize S / M / L · too small · too big\nblue · red · black · white · green\nDo you have this in blue?",
                        'exercicios' => [
                            m('"Shoes" são:', ['sapatos', 'camisas', 'chapéus', 'meias só'], 'sapatos'),
                            t('Traduza: too small', 'muito pequeno|pequeno demais|muito pequena'),
                            c('Complete: Do you have this in _____? (azul)', 'blue'),
                            emp('Una.', [['red', 'vermelho'], ['black', 'preto'], ['white', 'branco'], ['green', 'verde']]),
                            vf('"Size M" é o tamanho médio.', true),
                            ordena('Monte:', 'This shirt is too big'),
                            m('Jacket é:', ['jaqueta', 'saia', 'cinto', 'relógio'], 'jaqueta'),
                            m('Too big significa:', ['apertado', 'grande demais', 'barato', 'novo'], 'grande demais'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Viagem',
                'descricao' => 'Hotel, aeroporto e o essencial para se virar.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'No hotel',
                        'resumo' => 'reservation, key, breakfast, night',
                        'teoria' => "I have a reservation.\nA room for two nights, please.\nThe key / the Wi-Fi password\nWhat time is breakfast?\nCan I have a map of the city?",
                        'exercicios' => [
                            m('Como dizer que tem reserva?', ['I have a reservation', 'I have a restaurant', 'I have a reason', 'I have a radio'], 'I have a reservation'),
                            t('Traduza: two nights', 'duas noites|2 noites'),
                            c('Complete: What time is _____? (café da manhã)', 'breakfast'),
                            emp('Una.', [['key', 'chave'], ['room', 'quarto'], ['map', 'mapa'], ['password', 'senha']]),
                            vf('"A room for two nights" pede quarto por duas noites.', true),
                            ordena('Monte:', 'I have a reservation'),
                            m('Wi-Fi password é:', ['a chave do quarto', 'a senha da internet', 'o café da manhã', 'o mapa'], 'a senha da internet'),
                            m('Breakfast no hotel costuma ser:', ['jantar', 'café da manhã', 'almoço', 'lanche da tarde'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Aeroporto e trem',
                        'resumo' => 'flight, gate, delayed, ticket, platform',
                        'teoria' => "flight · gate · passport · luggage / bags\nThe flight is delayed. · The train is on time.\nplatform · ticket office\nWhere do I check in?\nThis bag is mine.",
                        'exercicios' => [
                            m('"The flight is delayed" significa:', ['O voo saiu cedo', 'O voo está atrasado', 'O voo é barato', 'O voo é direto'], 'O voo está atrasado'),
                            t('Traduza: This bag is mine', 'esta bolsa e minha|esta mala é minha|essa bolsa é minha|esta bolsa é minha'),
                            c('Complete: Where do I check _____?', 'in'),
                            emp('Una.', [['passport', 'passaporte'], ['gate', 'portão'], ['luggage', 'bagagem'], ['train', 'trem']]),
                            vf('"On time" significa no horário.', true),
                            ordena('Monte:', 'The train is on time'),
                            m('Platform é:', ['plataforma / binário', 'passaporte', 'janela', 'piloto'], 'plataforma / binário'),
                            m('Check in é o momento de:', ['embarcar na hora', 'apresentar-se no balcão', 'pedir o café', 'trocar dinheiro só'], 'apresentar-se no balcão'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function extra_espanhol(): array
{
    return [
        'descricao' => 'Do cumprimento à viagem: rotina, casa, compras e deslocamento, em todos os idiomas da conta.',
        'palavras' => [
            ['Cocina', 'Cozinha', 'Cocino en la cocina.', 'A1'],
            ['Dormitorio', 'Quarto', 'El dormitorio es pequeño.', 'A1'],
            ['Camisa', 'Camisa', 'Esta camisa es azul.', 'A1'],
            ['Barato', 'Barato', 'Estos zapatos son baratos.', 'A1'],
            ['Caro', 'Caro', 'Esa bolsa es cara.', 'A1'],
            ['Hotel', 'Hotel', 'Tengo una reserva en el hotel.', 'A1'],
            ['Pasaporte', 'Passaporte', '¿Dónde está mi pasaporte?', 'A1'],
            ['Vuelo', 'Voo', 'El vuelo es a las nueve.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Rotina',
                'descricao' => 'O dia a dia e o presente do indicativo.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Mi día',
                        'resumo' => 'me levanto, desayuno, trabajo, duermo',
                        'teoria' => "me levanto · desayuno · almuerzo · ceno\nvoy al trabajo / voy a la escuela\nestudio · trabajo · cocino · veo la tele · duermo\nMe levanto a las siete.",
                        'exercicios' => [
                            m('O que significa "me levanto"?', ['eu durmo', 'eu me levanto', 'eu cozinho', 'eu viajo'], 'eu me levanto'),
                            t('Traduza: Voy a la escuela', 'vou para a escola|eu vou para a escola|vou a escola'),
                            c('Complete: _____ a las siete. (eu me levanto)', 'Me levanto'),
                            emp('Una.', [['duermo', 'durmo'], ['cocino', 'cozinho'], ['estudio', 'estudo'], ['trabajo', 'trabalho']]),
                            vf('"Ceno" significa jantar.', true),
                            ordena('Monte:', 'Me levanto a las siete'),
                            m('Veo la tele descreve:', ['uma rotina', 'um país', 'uma cor', 'um número'], 'uma rotina'),
                            m('"Desayuno" é:', ['almoço', 'café da manhã', 'jantar', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Presente: hábitos',
                        'resumo' => 'trabajo / ella trabaja',
                        'teoria' => "Hábitos: yo trabajo, tú trabajas, él/ella trabaja.\nNegativa: no trabajo · ella no trabaja.\nPergunta: ¿Trabajas? ¿Trabaja él?",
                        'exercicios' => [
                            m('Qual está correta?', ['Ella trabajo aquí', 'Ella trabaja aquí', 'Ella trabajando aquí', 'Ella trabajos aquí'], 'Ella trabaja aquí'),
                            c('Complete: Ella no _____ carne. (come)', 'come'),
                            vf('Com él/ella o verbo muda a terminação.', true),
                            t('Traduza: ¿Trabajas?', 'voce trabalha|você trabalha|trabalha voce'),
                            ordena('Monte:', 'Ella trabaja en un hospital'),
                            m('Pergunta natural:', ['¿Trabajan ellos?', '¿Trabajo ellos?', '¿Trabajas ellos?', '¿Trabajar ellos?'], '¿Trabajan ellos?'),
                            emp('Una.', [['yo trabajo', 'eu trabalho'], ['ella trabaja', 'ela trabalha'], ['no trabajo', 'eu não trabalho'], ['¿Trabaja él?', 'ele trabalha?']]),
                            m('Yo no trabajo. é:', ['afirmativa', 'negativa', 'pergunta', 'passado'], 'negativa'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Em casa',
                'descricao' => 'Cômodos e objetos do cotidiano.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Habitaciones',
                        'resumo' => 'cocina, dormitorio, baño, salón',
                        'teoria' => "casa / piso (apartamento)\nsalón · cocina · dormitorio · baño\nHay un sofá en el salón.\nHay dos dormitorios.",
                        'exercicios' => [
                            m('Onde se cozinha?', ['dormitorio', 'cocina', 'baño', 'jardín'], 'cocina'),
                            t('Traduza: salón', 'sala|sala de estar'),
                            c('Complete: _____ un sofá en el salón.', 'Hay'),
                            emp('Una.', [['dormitorio', 'quarto'], ['baño', 'banheiro'], ['cocina', 'cozinha'], ['sofá', 'sofá']]),
                            vf('"Hay" serve para dizer que existe algo.', true),
                            ordena('Monte:', 'La cocina es grande'),
                            m('"Piso" neste contexto é:', ['apartamento', 'chão só', 'sapato', 'andar de ônibus'], 'apartamento'),
                            m('Hay dos dormitorios. fala de:', ['um quarto', 'dois quartos', 'a cozinha', 'o banho'], 'dois quartos'),
                        ],
                    ],
                    [
                        'titulo' => 'Objetos de casa',
                        'resumo' => 'mesa, silla, cama, ventana, puerta',
                        'teoria' => "mesa · silla · cama · lámpara · ventana · puerta · nevera\nAbre la ventana, por favor.\nLas llaves están sobre la mesa.",
                        'exercicios' => [
                            m('Onde se dorme?', ['silla', 'cama', 'nevera', 'puerta'], 'cama'),
                            t('Traduza: Abre la puerta', 'abra a porta|abre a porta'),
                            c('Complete: Las llaves están _____ la mesa.', 'sobre'),
                            emp('Una.', [['ventana', 'janela'], ['puerta', 'porta'], ['silla', 'cadeira'], ['nevera', 'geladeira']]),
                            vf('"Sobre la mesa" é em cima da mesa.', true),
                            ordena('Monte:', 'Abre la ventana por favor'),
                            m('Nevera é:', ['fogão', 'geladeira', 'cama', 'tapete'], 'geladeira'),
                            m('¿De quién es esta bolsa? pergunta:', ['o preço', 'de quem é', 'onde fica', 'a hora'], 'de quem é'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Compras',
                'descricao' => 'Preço, tamanho e cores na loja.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => '¿Cuánto cuesta?',
                        'resumo' => 'barato, caro, tarjeta, efectivo',
                        'teoria' => "¿Cuánto cuesta esto? / ¿Cuánto cuestan estos?\nEs barato. · Es caro.\nQuisiera este, por favor.\n¿Puedo pagar con tarjeta?",
                        'exercicios' => [
                            m('Como perguntar o preço de uma coisa?', ['¿Cuánto cuesta esto?', '¿Cuántos años tienes?', '¿Dónde está esto?', '¿Qué hora es?'], '¿Cuánto cuesta esto?'),
                            t('Traduza: Es caro', 'e caro|é caro|esta caro'),
                            c('Complete: ¿Puedo pagar con _____?', 'tarjeta'),
                            emp('Una.', [['barato', 'barato'], ['caro', 'caro'], ['tarjeta', 'cartão'], ['efectivo', 'dinheiro']]),
                            vf('"Quisiera" é um pedido educado.', true),
                            ordena('Monte:', 'Quisiera este por favor'),
                            m('Efectivo é:', ['cartão', 'dinheiro vivo', 'desconto', 'troco só'], 'dinheiro vivo'),
                            m('¿Cuánto cuestan estos? usa-se com:', ['uma coisa', 'várias coisas', 'pessoas', 'horas'], 'várias coisas'),
                        ],
                    ],
                    [
                        'titulo' => 'Ropa y colores',
                        'resumo' => 'camisa, zapatos, talla, azul, rojo',
                        'teoria' => "camisa · camiseta · zapatos · pantalones · vestido · chaqueta\ntalla S / M / L · demasiado pequeño · demasiado grande\nazul · rojo · negro · blanco · verde\n¿Tiene esto en azul?",
                        'exercicios' => [
                            m('"Zapatos" são:', ['sapatos', 'camisas', 'chapéus', 'óculos'], 'sapatos'),
                            t('Traduza: demasiado pequeño', 'muito pequeno|pequeno demais'),
                            c('Complete: ¿Tiene esto en _____? (azul)', 'azul'),
                            emp('Una.', [['rojo', 'vermelho'], ['negro', 'preto'], ['blanco', 'branco'], ['verde', 'verde']]),
                            vf('"Talla M" é o tamanho médio.', true),
                            ordena('Monte:', 'Esta camisa es demasiado grande'),
                            m('Chaqueta é:', ['jaqueta', 'saia', 'cinto', 'relógio'], 'jaqueta'),
                            m('Demasiado grande significa:', ['apertado', 'grande demais', 'barato', 'novo'], 'grande demais'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Viagem',
                'descricao' => 'Hotel, aeroporto e o essencial para se virar.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'En el hotel',
                        'resumo' => 'reserva, llave, desayuno, noches',
                        'teoria' => "Tengo una reserva.\nUna habitación para dos noches, por favor.\nla llave · la contraseña del Wi-Fi\n¿A qué hora es el desayuno?",
                        'exercicios' => [
                            m('Como dizer que tem reserva?', ['Tengo una reserva', 'Tengo un restaurante', 'Tengo una razón', 'Tengo un radio'], 'Tengo una reserva'),
                            t('Traduza: dos noches', 'duas noites|2 noites'),
                            c('Complete: ¿A qué hora es el _____?', 'desayuno'),
                            emp('Una.', [['llave', 'chave'], ['habitación', 'quarto'], ['mapa', 'mapa'], ['contraseña', 'senha']]),
                            vf('"Una habitación para dos noches" pede quarto por duas noites.', true),
                            ordena('Monte:', 'Tengo una reserva'),
                            m('Contraseña del Wi-Fi é:', ['a chave do quarto', 'a senha da internet', 'o café da manhã', 'o mapa'], 'a senha da internet'),
                            m('Desayuno no hotel costuma ser:', ['jantar', 'café da manhã', 'almoço', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Aeropuerto y tren',
                        'resumo' => 'vuelo, puerta, retraso, andén',
                        'teoria' => "vuelo · puerta de embarque · pasaporte · maleta\nEl vuelo tiene retraso. · El tren llega a tiempo.\nandén · taquilla\n¿Dónde facturo el equipaje?",
                        'exercicios' => [
                            m('"El vuelo tiene retraso" significa:', ['O voo saiu cedo', 'O voo está atrasado', 'O voo é barato', 'O voo é direto'], 'O voo está atrasado'),
                            t('Traduza: Esta maleta es mía', 'esta mala e minha|esta mala é minha|essa mala é minha'),
                            c('Complete: El tren llega a _____.', 'tiempo'),
                            emp('Una.', [['pasaporte', 'passaporte'], ['puerta', 'portão'], ['maleta', 'mala'], ['tren', 'trem']]),
                            vf('"A tiempo" significa no horário.', true),
                            ordena('Monte:', 'El tren llega a tiempo'),
                            m('Andén é:', ['plataforma', 'passaporte', 'janela', 'piloto'], 'plataforma'),
                            m('Facturar el equipaje é:', ['embarcar na hora', 'despachar as malas', 'pedir café', 'trocar dinheiro'], 'despachar as malas'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function extra_frances(): array
{
    return [
        'descricao' => 'Do cumprimento à viagem: rotina, maison, compras e deslocamento.',
        'palavras' => [
            ['Cuisine', 'Cozinha', 'Je cuisine dans la cuisine.', 'A1'],
            ['Chambre', 'Quarto', 'La chambre est petite.', 'A1'],
            ['Chemise', 'Camisa', 'Cette chemise est bleue.', 'A1'],
            ['Bon marché', 'Barato', 'Ces chaussures sont bon marché.', 'A1'],
            ['Cher', 'Caro', 'Ce sac est cher.', 'A1'],
            ['Hôtel', 'Hotel', "J'ai une réservation à l'hôtel.", 'A1'],
            ['Passeport', 'Passaporte', 'Où est mon passeport ?', 'A1'],
            ['Vol', 'Voo', 'Le vol est à neuf heures.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Rotina',
                'descricao' => 'O dia a dia e o présent.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Ma journée',
                        'resumo' => 'je me lève, petit-déjeuner, je travaille',
                        'teoria' => "je me lève · je prends le petit-déjeuner\nje vais au travail / à l'école\nje travaille · je cuisine · je regarde la télé · je dors\nJe me lève à sept heures.",
                        'exercicios' => [
                            m('O que significa "je me lève"?', ['eu durmo', 'eu me levanto', 'eu cozinho', 'eu viajo'], 'eu me levanto'),
                            t('Traduza: Je vais à l\'école', 'vou para a escola|eu vou para a escola'),
                            c('Complete: Je me lève à _____ heures.', 'sept'),
                            emp('Una.', [['je dors', 'eu durmo'], ['je cuisine', 'eu cozinho'], ['je travaille', 'eu trabalho'], ['je étudie', 'eu estudo']]),
                            vf('"Je dîne" é o jantar.', true),
                            ordena('Monte:', 'Je me leve a sept heures'),
                            m('Je regarde la télé descreve:', ['uma rotina', 'um país', 'uma cor', 'um número'], 'uma rotina'),
                            m('Petit-déjeuner é:', ['almoço', 'café da manhã', 'jantar', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Présent : habitudes',
                        'resumo' => 'je travaille / elle travaille',
                        'teoria' => "je travaille, tu travailles, il/elle travaille.\nNégation : je ne travaille pas.\nQuestion : Tu travailles ? Est-ce qu'il travaille ?",
                        'exercicios' => [
                            m('Qual está correta?', ['Elle travail ici', 'Elle travaille ici', 'Elle travailler ici', 'Elle travaux ici'], 'Elle travaille ici'),
                            c('Complete: Elle ne _____ pas de viande. (mange)', 'mange'),
                            vf('Com il/elle o verbo costuma terminar em -e / -t conforme o grupo.', true),
                            t('Traduza: Tu travailles ?', 'voce trabalha|você trabalha'),
                            ordena('Monte:', 'Elle travaille dans un hopital'),
                            m('Negativa correta:', ['Je ne travaille pas', 'Je pas travaille', 'Je no travaille', 'Je travaille ne'], 'Je ne travaille pas'),
                            emp('Una.', [['je travaille', 'eu trabalho'], ['elle travaille', 'ela trabalha'], ['je ne travaille pas', 'eu não trabalho'], ['Tu travailles ?', 'você trabalha?']]),
                            m('Je ne travaille pas. é:', ['afirmativa', 'negativa', 'pergunta', 'passado'], 'negativa'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Em casa',
                'descricao' => 'Cômodos e objetos do cotidiano.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Les pièces',
                        'resumo' => 'cuisine, chambre, salle de bain, salon',
                        'teoria' => "maison / appartement\nsalon · cuisine · chambre · salle de bain\nIl y a un canapé dans le salon.\nIl y a deux chambres.",
                        'exercicios' => [
                            m('Onde se cozinha?', ['chambre', 'cuisine', 'salle de bain', 'jardin'], 'cuisine'),
                            t('Traduza: salon', 'sala|sala de estar'),
                            c('Complete: Il y _____ un canapé.', 'a'),
                            emp('Una.', [['chambre', 'quarto'], ['salle de bain', 'banheiro'], ['cuisine', 'cozinha'], ['canapé', 'sofá']]),
                            vf('"Il y a" diz que existe algo.', true),
                            ordena('Monte:', 'La cuisine est grande'),
                            m('Appartement é:', ['apartamento', 'aeroporto', 'farmácia', 'escritório'], 'apartamento'),
                            m('Il y a deux chambres. fala de:', ['um quarto', 'dois quartos', 'a cozinha', 'o banho'], 'dois quartos'),
                        ],
                    ],
                    [
                        'titulo' => 'Objets de la maison',
                        'resumo' => 'table, chaise, lit, fenêtre, porte',
                        'teoria' => "table · chaise · lit · lampe · fenêtre · porte · frigo\nOuvre la fenêtre, s'il te plaît.\nLes clés sont sur la table.",
                        'exercicios' => [
                            m('Onde se dorme?', ['chaise', 'lit', 'frigo', 'porte'], 'lit'),
                            t('Traduza: Ouvre la porte', 'abra a porta|abre a porta'),
                            c('Complete: Les clés sont _____ la table.', 'sur'),
                            emp('Una.', [['fenêtre', 'janela'], ['porte', 'porta'], ['chaise', 'cadeira'], ['frigo', 'geladeira']]),
                            vf('"Sur la table" é em cima da mesa.', true),
                            ordena('Monte:', 'Ouvre la fenetre sil te plait'),
                            m('Frigo é:', ['fogão', 'geladeira', 'cama', 'tapete'], 'geladeira'),
                            m('C\'est à qui, ce sac ? pergunta:', ['o preço', 'de quem é', 'onde fica', 'a hora'], 'de quem é'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Compras',
                'descricao' => 'Preço, tamanho e cores na loja.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'C\'est combien ?',
                        'resumo' => 'bon marché, cher, carte, espèces',
                        'teoria' => "C'est combien ? / Ça coûte combien ?\nC'est bon marché. · C'est cher.\nJe voudrais celui-ci, s'il vous plaît.\nJe peux payer par carte ?",
                        'exercicios' => [
                            m('Como perguntar o preço?', ['C\'est combien ?', 'C\'est qui ?', 'C\'est où ?', 'C\'est quand ?'], 'C\'est combien ?'),
                            t('Traduza: C\'est cher', 'e caro|é caro|esta caro'),
                            c('Complete: Je peux payer par _____ ?', 'carte'),
                            emp('Una.', [['bon marché', 'barato'], ['cher', 'caro'], ['carte', 'cartão'], ['espèces', 'dinheiro']]),
                            vf('"Je voudrais" é um pedido educado.', true),
                            ordena('Monte:', 'Je voudrais celui-ci'),
                            m('Espèces é:', ['cartão', 'dinheiro vivo', 'desconto', 'troco só'], 'dinheiro vivo'),
                            m('Ça coûte combien ? pergunta:', ['a idade', 'o preço', 'o nome', 'a hora'], 'o preço'),
                        ],
                    ],
                    [
                        'titulo' => 'Vêtements et couleurs',
                        'resumo' => 'chemise, chaussures, taille, bleu, rouge',
                        'teoria' => "chemise · t-shirt · chaussures · pantalon · robe · veste\ntaille S / M / L · trop petit · trop grand\nbleu · rouge · noir · blanc · vert\nVous avez ça en bleu ?",
                        'exercicios' => [
                            m('"Chaussures" são:', ['sapatos', 'camisas', 'chapéus', 'óculos'], 'sapatos'),
                            t('Traduza: trop petit', 'muito pequeno|pequeno demais'),
                            c('Complete: Vous avez ça en _____ ? (azul)', 'bleu'),
                            emp('Una.', [['rouge', 'vermelho'], ['noir', 'preto'], ['blanc', 'branco'], ['vert', 'verde']]),
                            vf('"Taille M" é o tamanho médio.', true),
                            ordena('Monte:', 'Cette chemise est trop grande'),
                            m('Veste é:', ['jaqueta', 'saia', 'cinto', 'relógio'], 'jaqueta'),
                            m('Trop grand significa:', ['apertado', 'grande demais', 'barato', 'novo'], 'grande demais'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Viagem',
                'descricao' => 'Hotel, aéroport e o essencial para se virar.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'À l\'hôtel',
                        'resumo' => 'réservation, clé, petit-déjeuner',
                        'teoria' => "J'ai une réservation.\nUne chambre pour deux nuits, s'il vous plaît.\nla clé · le mot de passe Wi-Fi\nÀ quelle heure est le petit-déjeuner ?",
                        'exercicios' => [
                            m('Como dizer que tem reserva?', ["J'ai une réservation", "J'ai un restaurant", "J'ai une raison", "J'ai une radio"], "J'ai une réservation"),
                            t('Traduza: deux nuits', 'duas noites|2 noites'),
                            c('Complete: À quelle heure est le _____ ?', 'petit-dejeuner|petit-déjeuner'),
                            emp('Una.', [['clé', 'chave'], ['chambre', 'quarto'], ['plan', 'mapa'], ['mot de passe', 'senha']]),
                            vf('"Une chambre pour deux nuits" pede quarto por duas noites.', true),
                            ordena('Monte:', "J'ai une reservation"),
                            m('Mot de passe Wi-Fi é:', ['a chave do quarto', 'a senha da internet', 'o café da manhã', 'o mapa'], 'a senha da internet'),
                            m('Petit-déjeuner no hotel costuma ser:', ['jantar', 'café da manhã', 'almoço', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Aéroport et train',
                        'resumo' => 'vol, porte, retard, quai',
                        'teoria' => "vol · porte d'embarquement · passeport · valise\nLe vol a du retard. · Le train est à l'heure.\nquai · guichet\nOù est-ce que je fais l'enregistrement ?",
                        'exercicios' => [
                            m('"Le vol a du retard" significa:', ['O voo saiu cedo', 'O voo está atrasado', 'O voo é barato', 'O voo é direto'], 'O voo está atrasado'),
                            t('Traduza: Cette valise est à moi', 'esta mala e minha|esta mala é minha|essa mala é minha'),
                            c('Complete: Le train est à l\'_____.', 'heure'),
                            emp('Una.', [['passeport', 'passaporte'], ['porte', 'portão'], ['valise', 'mala'], ['train', 'trem']]),
                            vf('"À l\'heure" significa no horário.', true),
                            ordena('Monte:', 'Le train est a l heure'),
                            m('Quai é:', ['plataforma', 'passaporte', 'janela', 'piloto'], 'plataforma'),
                            m('Enregistrement é:', ['embarcar na hora', 'check-in / despachar', 'pedir café', 'trocar dinheiro'], 'check-in / despachar'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function extra_italiano(): array
{
    return [
        'descricao' => 'Do ciao à viagem: rotina, casa, compras e deslocamento.',
        'palavras' => [
            ['Cucina', 'Cozinha', 'Cucino in cucina.', 'A1'],
            ['Camera', 'Quarto', 'La camera è piccola.', 'A1'],
            ['Camicia', 'Camisa', 'Questa camicia è blu.', 'A1'],
            ['Economico', 'Barato', 'Queste scarpe sono economiche.', 'A1'],
            ['Caro', 'Caro', 'Questa borsa è cara.', 'A1'],
            ['Hotel', 'Hotel', 'Ho una prenotazione in hotel.', 'A1'],
            ['Passaporto', 'Passaporte', 'Dov\'è il mio passaporto?', 'A1'],
            ['Volo', 'Voo', 'Il volo è alle nove.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Rotina',
                'descricao' => 'O dia a dia e o presente.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'La mia giornata',
                        'resumo' => 'mi alzo, colazione, lavoro, dormo',
                        'teoria' => "mi alzo · faccio colazione · pranzo · ceno\nvado al lavoro / vado a scuola\nstudio · lavoro · cucino · guardo la TV · dormo\nMi alzo alle sette.",
                        'exercicios' => [
                            m('O que significa "mi alzo"?', ['eu durmo', 'eu me levanto', 'eu cozinho', 'eu viajo'], 'eu me levanto'),
                            t('Traduza: Vado a scuola', 'vou para a escola|eu vou para a escola|vou a escola'),
                            c('Complete: Mi alzo alle _____.', 'sette'),
                            emp('Una.', [['dormo', 'durmo'], ['cucino', 'cozinho'], ['studio', 'estudo'], ['lavoro', 'trabalho']]),
                            vf('"Ceno" significa jantar.', true),
                            ordena('Monte:', 'Mi alzo alle sette'),
                            m('Guardo la TV descreve:', ['uma rotina', 'um país', 'uma cor', 'um número'], 'uma rotina'),
                            m('Colazione é:', ['almoço', 'café da manhã', 'jantar', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Presente: abitudini',
                        'resumo' => 'lavoro / lei lavora',
                        'teoria' => "io lavoro, tu lavori, lui/lei lavora.\nNegativa: non lavoro · lei non lavora.\nDomanda: Lavori? Lavora lui?",
                        'exercicios' => [
                            m('Qual está correta?', ['Lei lavoro qui', 'Lei lavora qui', 'Lei lavorando qui', 'Lei lavori qui'], 'Lei lavora qui'),
                            c('Complete: Lei non _____ carne. (mangia)', 'mangia'),
                            vf('Com lui/lei o verbo muda a terminação.', true),
                            t('Traduza: Lavori?', 'voce trabalha|você trabalha'),
                            ordena('Monte:', 'Lei lavora in un ospedale'),
                            m('Pergunta natural:', ['Lavorano loro?', 'Lavoro loro?', 'Lavori loro?', 'Lavorare loro?'], 'Lavorano loro?'),
                            emp('Una.', [['io lavoro', 'eu trabalho'], ['lei lavora', 'ela trabalha'], ['non lavoro', 'eu não trabalho'], ['Lavora lui?', 'ele trabalha?']]),
                            m('Non lavoro. é:', ['afirmativa', 'negativa', 'pergunta', 'passado'], 'negativa'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Em casa',
                'descricao' => 'Cômodos e objetos do cotidiano.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Le stanze',
                        'resumo' => 'cucina, camera, bagno, soggiorno',
                        'teoria' => "casa / appartamento\nsoggiorno · cucina · camera · bagno\nC'è un divano in soggiorno.\nCi sono due camere.",
                        'exercicios' => [
                            m('Onde se cozinha?', ['camera', 'cucina', 'bagno', 'giardino'], 'cucina'),
                            t('Traduza: soggiorno', 'sala|sala de estar'),
                            c('Complete: _____ un divano in soggiorno.', "C'e|C'è"),
                            emp('Una.', [['camera', 'quarto'], ['bagno', 'banheiro'], ['cucina', 'cozinha'], ['divano', 'sofá']]),
                            vf('"C\'è" diz que existe algo no singular.', true),
                            ordena('Monte:', 'La cucina e grande'),
                            m('Appartamento é:', ['apartamento', 'aeroporto', 'farmácia', 'escritório'], 'apartamento'),
                            m('Ci sono due camere. fala de:', ['um quarto', 'dois quartos', 'a cozinha', 'o banho'], 'dois quartos'),
                        ],
                    ],
                    [
                        'titulo' => 'Oggetti di casa',
                        'resumo' => 'tavolo, sedia, letto, finestra, porta',
                        'teoria' => "tavolo · sedia · letto · lampada · finestra · porta · frigorifero\nApri la finestra, per favore.\nLe chiavi sono sul tavolo.",
                        'exercicios' => [
                            m('Onde se dorme?', ['sedia', 'letto', 'frigorifero', 'porta'], 'letto'),
                            t('Traduza: Apri la porta', 'abra a porta|abre a porta'),
                            c('Complete: Le chiavi sono _____ tavolo.', 'sul'),
                            emp('Una.', [['finestra', 'janela'], ['porta', 'porta'], ['sedia', 'cadeira'], ['frigorifero', 'geladeira']]),
                            vf('"Sul tavolo" é em cima da mesa.', true),
                            ordena('Monte:', 'Apri la finestra per favore'),
                            m('Frigorifero é:', ['fogão', 'geladeira', 'cama', 'tapete'], 'geladeira'),
                            m('Di chi è questa borsa? pergunta:', ['o preço', 'de quem é', 'onde fica', 'a hora'], 'de quem é'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Compras',
                'descricao' => 'Preço, tamanho e cores na loja.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Quanto costa?',
                        'resumo' => 'economico, caro, carta, contanti',
                        'teoria' => "Quanto costa questo? / Quanto costano questi?\nÈ economico. · È caro.\nVorrei questo, per favore.\nPosso pagare con la carta?",
                        'exercicios' => [
                            m('Como perguntar o preço de uma coisa?', ['Quanto costa questo?', 'Quanti anni hai?', 'Dov\'è questo?', 'Che ora è?'], 'Quanto costa questo?'),
                            t('Traduza: È caro', 'e caro|é caro|esta caro'),
                            c('Complete: Posso pagare con la _____?', 'carta'),
                            emp('Una.', [['economico', 'barato'], ['caro', 'caro'], ['carta', 'cartão'], ['contanti', 'dinheiro']]),
                            vf('"Vorrei" é um pedido educado.', true),
                            ordena('Monte:', 'Vorrei questo per favore'),
                            m('Contanti é:', ['cartão', 'dinheiro vivo', 'desconto', 'troco só'], 'dinheiro vivo'),
                            m('Quanto costano questi? usa-se com:', ['uma coisa', 'várias coisas', 'pessoas', 'horas'], 'várias coisas'),
                        ],
                    ],
                    [
                        'titulo' => 'Vestiti e colori',
                        'resumo' => 'camicia, scarpe, taglia, blu, rosso',
                        'teoria' => "camicia · maglietta · scarpe · pantaloni · vestito · giacca\ntaglia S / M / L · troppo piccolo · troppo grande\nblu · rosso · nero · bianco · verde\nAvete questo in blu?",
                        'exercicios' => [
                            m('"Scarpe" são:', ['sapatos', 'camisas', 'chapéus', 'óculos'], 'sapatos'),
                            t('Traduza: troppo piccolo', 'muito pequeno|pequeno demais'),
                            c('Complete: Avete questo in _____? (azul)', 'blu'),
                            emp('Una.', [['rosso', 'vermelho'], ['nero', 'preto'], ['bianco', 'branco'], ['verde', 'verde']]),
                            vf('"Taglia M" é o tamanho médio.', true),
                            ordena('Monte:', 'Questa camicia e troppo grande'),
                            m('Giacca é:', ['jaqueta', 'saia', 'cinto', 'relógio'], 'jaqueta'),
                            m('Troppo grande significa:', ['apertado', 'grande demais', 'barato', 'novo'], 'grande demais'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Viagem',
                'descricao' => 'Hotel, aeroporto e o essencial para se virar.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'In hotel',
                        'resumo' => 'prenotazione, chiave, colazione',
                        'teoria' => "Ho una prenotazione.\nUna camera per due notti, per favore.\nla chiave · la password del Wi-Fi\nA che ora è la colazione?",
                        'exercicios' => [
                            m('Como dizer que tem reserva?', ['Ho una prenotazione', 'Ho un ristorante', 'Ho una ragione', 'Ho una radio'], 'Ho una prenotazione'),
                            t('Traduza: due notti', 'duas noites|2 noites'),
                            c('Complete: A che ora è la _____?', 'colazione'),
                            emp('Una.', [['chiave', 'chave'], ['camera', 'quarto'], ['mappa', 'mapa'], ['password', 'senha']]),
                            vf('"Una camera per due notti" pede quarto por duas noites.', true),
                            ordena('Monte:', 'Ho una prenotazione'),
                            m('Password del Wi-Fi é:', ['a chave do quarto', 'a senha da internet', 'o café da manhã', 'o mapa'], 'a senha da internet'),
                            m('Colazione no hotel costuma ser:', ['jantar', 'café da manhã', 'almoço', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Aeroporto e treno',
                        'resumo' => 'volo, gate, ritardo, binario',
                        'teoria' => "volo · gate · passaporto · valigia\nIl volo è in ritardo. · Il treno è in orario.\nbinario · biglietteria\nDove faccio il check-in?",
                        'exercicios' => [
                            m('"Il volo è in ritardo" significa:', ['O voo saiu cedo', 'O voo está atrasado', 'O voo é barato', 'O voo é direto'], 'O voo está atrasado'),
                            t('Traduza: Questa valigia è mia', 'esta mala e minha|esta mala é minha|essa mala é minha'),
                            c('Complete: Il treno è in _____.', 'orario'),
                            emp('Una.', [['passaporto', 'passaporte'], ['gate', 'portão'], ['valigia', 'mala'], ['treno', 'trem']]),
                            vf('"In orario" significa no horário.', true),
                            ordena('Monte:', 'Il treno e in orario'),
                            m('Binario é:', ['plataforma', 'passaporte', 'janela', 'piloto'], 'plataforma'),
                            m('Check-in é:', ['embarcar na hora', 'apresentar-se no balcão', 'pedir café', 'trocar dinheiro'], 'apresentar-se no balcão'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}

function extra_alemao(): array
{
    return [
        'descricao' => 'Do Hallo à viagem: rotina, casa, compras e deslocamento.',
        'palavras' => [
            ['Küche', 'Cozinha', 'Ich koche in der Küche.', 'A1'],
            ['Schlafzimmer', 'Quarto', 'Das Schlafzimmer ist klein.', 'A1'],
            ['Hemd', 'Camisa', 'Dieses Hemd ist blau.', 'A1'],
            ['Günstig', 'Barato', 'Diese Schuhe sind günstig.', 'A1'],
            ['Teuer', 'Caro', 'Diese Tasche ist teuer.', 'A1'],
            ['Hotel', 'Hotel', 'Ich habe eine Hotelreservierung.', 'A1'],
            ['Reisepass', 'Passaporte', 'Wo ist mein Reisepass?', 'A1'],
            ['Flug', 'Voo', 'Der Flug ist um neun.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Rotina',
                'descricao' => 'O dia a dia e o Präsens.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Mein Tag',
                        'resumo' => 'stehe auf, frühstücke, arbeite, schlafe',
                        'teoria' => "ich stehe auf · ich frühstücke · ich esse zu Mittag · ich esse zu Abend\nich gehe zur Arbeit / zur Schule\nich arbeite · ich koche · ich sehe fern · ich schlafe\nIch stehe um sieben auf.",
                        'exercicios' => [
                            m('O que significa "ich stehe auf"?', ['eu durmo', 'eu me levanto', 'eu cozinho', 'eu viajo'], 'eu me levanto'),
                            t('Traduza: Ich gehe zur Schule', 'vou para a escola|eu vou para a escola'),
                            c('Complete: Ich stehe um _____ auf.', 'sieben'),
                            emp('Una.', [['ich schlafe', 'eu durmo'], ['ich koche', 'eu cozinho'], ['ich arbeite', 'eu trabalho'], ['ich lerne', 'eu estudo']]),
                            vf('"Ich esse zu Abend" é o jantar.', true),
                            ordena('Monte:', 'Ich stehe um sieben auf'),
                            m('Ich sehe fern descreve:', ['uma rotina', 'um país', 'uma cor', 'um número'], 'uma rotina'),
                            m('Frühstück é:', ['almoço', 'café da manhã', 'jantar', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Präsens: Gewohnheiten',
                        'resumo' => 'ich arbeite / sie arbeitet',
                        'teoria' => "ich arbeite, du arbeitest, er/sie arbeitet.\nNegação: ich arbeite nicht · sie arbeitet nicht.\nPergunta: Arbeitest du? Arbeitet er?",
                        'exercicios' => [
                            m('Qual está correta?', ['Sie arbeite hier', 'Sie arbeitet hier', 'Sie arbeiten hier sie', 'Sie arbeit hier'], 'Sie arbeitet hier'),
                            c('Complete: Sie isst _____ Fleisch. (kein)', 'kein'),
                            vf('Com er/sie o verbo ganha -t em muitos casos.', true),
                            t('Traduza: Arbeitest du?', 'voce trabalha|você trabalha'),
                            ordena('Monte:', 'Sie arbeitet in einem Krankenhaus'),
                            m('Negativa correta:', ['Ich arbeite nicht', 'Ich nicht arbeite', 'Ich no arbeite', 'Ich arbeite nein'], 'Ich arbeite nicht'),
                            emp('Una.', [['ich arbeite', 'eu trabalho'], ['sie arbeitet', 'ela trabalha'], ['ich arbeite nicht', 'eu não trabalho'], ['Arbeitet er?', 'ele trabalha?']]),
                            m('Ich arbeite nicht. é:', ['afirmativa', 'negativa', 'pergunta', 'passado'], 'negativa'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Em casa',
                'descricao' => 'Cômodos e objetos do cotidiano.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Die Zimmer',
                        'resumo' => 'Küche, Schlafzimmer, Bad, Wohnzimmer',
                        'teoria' => "Haus / Wohnung\nWohnzimmer · Küche · Schlafzimmer · Bad\nEs gibt ein Sofa im Wohnzimmer.\nEs gibt zwei Schlafzimmer.",
                        'exercicios' => [
                            m('Onde se cozinha?', ['Schlafzimmer', 'Küche', 'Bad', 'Garten'], 'Küche'),
                            t('Traduza: Wohnzimmer', 'sala|sala de estar'),
                            c('Complete: Es _____ ein Sofa im Wohnzimmer.', 'gibt'),
                            emp('Una.', [['Schlafzimmer', 'quarto'], ['Bad', 'banheiro'], ['Küche', 'cozinha'], ['Sofa', 'sofá']]),
                            vf('"Es gibt" diz que existe algo.', true),
                            ordena('Monte:', 'Die Kuche ist gross'),
                            m('Wohnung é:', ['apartamento', 'aeroporto', 'farmácia', 'escritório'], 'apartamento'),
                            m('Es gibt zwei Schlafzimmer. fala de:', ['um quarto', 'dois quartos', 'a cozinha', 'o banho'], 'dois quartos'),
                        ],
                    ],
                    [
                        'titulo' => 'Dinge zu Hause',
                        'resumo' => 'Tisch, Stuhl, Bett, Fenster, Tür',
                        'teoria' => "Tisch · Stuhl · Bett · Lampe · Fenster · Tür · Kühlschrank\nÖffne bitte das Fenster.\nDie Schlüssel sind auf dem Tisch.",
                        'exercicios' => [
                            m('Onde se dorme?', ['Stuhl', 'Bett', 'Kühlschrank', 'Tür'], 'Bett'),
                            t('Traduza: Öffne die Tür', 'abra a porta|abre a porta'),
                            c('Complete: Die Schlüssel sind _____ dem Tisch.', 'auf'),
                            emp('Una.', [['Fenster', 'janela'], ['Tür', 'porta'], ['Stuhl', 'cadeira'], ['Kühlschrank', 'geladeira']]),
                            vf('"Auf dem Tisch" é em cima da mesa.', true),
                            ordena('Monte:', 'Offne bitte das Fenster'),
                            m('Kühlschrank é:', ['fogão', 'geladeira', 'cama', 'tapete'], 'geladeira'),
                            m('Wessen Tasche ist das? pergunta:', ['o preço', 'de quem é', 'onde fica', 'a hora'], 'de quem é'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Compras',
                'descricao' => 'Preço, tamanho e cores na loja.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Was kostet das?',
                        'resumo' => 'günstig, teuer, Karte, bar',
                        'teoria' => "Was kostet das? / Was kosten die?\nDas ist günstig. · Das ist teuer.\nIch hätte gern das hier.\nKann ich mit Karte zahlen?",
                        'exercicios' => [
                            m('Como perguntar o preço?', ['Was kostet das?', 'Wie alt ist das?', 'Wo ist das?', 'Wie spät ist das?'], 'Was kostet das?'),
                            t('Traduza: Das ist teuer', 'isso e caro|isso é caro|esta caro'),
                            c('Complete: Kann ich mit _____ zahlen?', 'Karte'),
                            emp('Una.', [['günstig', 'barato'], ['teuer', 'caro'], ['Karte', 'cartão'], ['bar', 'dinheiro']]),
                            vf('"Ich hätte gern" é um pedido educado.', true),
                            ordena('Monte:', 'Ich hatte gern das hier'),
                            m('Bar (pagamento) é:', ['cartão', 'dinheiro vivo', 'desconto', 'troco só'], 'dinheiro vivo'),
                            m('Was kosten die? usa-se com:', ['uma coisa', 'várias coisas', 'pessoas', 'horas'], 'várias coisas'),
                        ],
                    ],
                    [
                        'titulo' => 'Kleidung und Farben',
                        'resumo' => 'Hemd, Schuhe, Größe, blau, rot',
                        'teoria' => "Hemd · T-Shirt · Schuhe · Hose · Kleid · Jacke\nGröße S / M / L · zu klein · zu groß\nblau · rot · schwarz · weiß · grün\nHaben Sie das in Blau?",
                        'exercicios' => [
                            m('"Schuhe" são:', ['sapatos', 'camisas', 'chapéus', 'óculos'], 'sapatos'),
                            t('Traduza: zu klein', 'muito pequeno|pequeno demais'),
                            c('Complete: Haben Sie das in _____? (azul)', 'Blau'),
                            emp('Una.', [['rot', 'vermelho'], ['schwarz', 'preto'], ['weiß', 'branco'], ['grün', 'verde']]),
                            vf('"Größe M" é o tamanho médio.', true),
                            ordena('Monte:', 'Dieses Hemd ist zu gross'),
                            m('Jacke é:', ['jaqueta', 'saia', 'cinto', 'relógio'], 'jaqueta'),
                            m('Zu groß significa:', ['apertado', 'grande demais', 'barato', 'novo'], 'grande demais'),
                        ],
                    ],
                ],
            ],
            [
                'titulo' => 'Viagem',
                'descricao' => 'Hotel, Flughafen e o essencial para se virar.',
                'nivel' => 'A1',
                'aulas' => [
                    [
                        'titulo' => 'Im Hotel',
                        'resumo' => 'Reservierung, Schlüssel, Frühstück',
                        'teoria' => "Ich habe eine Reservierung.\nEin Zimmer für zwei Nächte, bitte.\nder Schlüssel · das WLAN-Passwort\nUm wie viel Uhr ist das Frühstück?",
                        'exercicios' => [
                            m('Como dizer que tem reserva?', ['Ich habe eine Reservierung', 'Ich habe ein Restaurant', 'Ich habe einen Grund', 'Ich habe ein Radio'], 'Ich habe eine Reservierung'),
                            t('Traduza: zwei Nächte', 'duas noites|2 noites'),
                            c('Complete: Um wie viel Uhr ist das _____?', 'Fruhstuck|Frühstück'),
                            emp('Una.', [['Schlüssel', 'chave'], ['Zimmer', 'quarto'], ['Stadtplan', 'mapa'], ['Passwort', 'senha']]),
                            vf('"Ein Zimmer für zwei Nächte" pede quarto por duas noites.', true),
                            ordena('Monte:', 'Ich habe eine Reservierung'),
                            m('WLAN-Passwort é:', ['a chave do quarto', 'a senha da internet', 'o café da manhã', 'o mapa'], 'a senha da internet'),
                            m('Frühstück no hotel costuma ser:', ['jantar', 'café da manhã', 'almoço', 'lanche'], 'café da manhã'),
                        ],
                    ],
                    [
                        'titulo' => 'Flughafen und Zug',
                        'resumo' => 'Flug, Gate, Verspätung, Gleis',
                        'teoria' => "Flug · Gate · Reisepass · Koffer\nDer Flug hat Verspätung. · Der Zug ist pünktlich.\nGleis · Schalter\nWo checke ich ein?",
                        'exercicios' => [
                            m('"Der Flug hat Verspätung" significa:', ['O voo saiu cedo', 'O voo está atrasado', 'O voo é barato', 'O voo é direto'], 'O voo está atrasado'),
                            t('Traduza: Dieser Koffer gehört mir', 'esta mala e minha|esta mala é minha|essa mala é minha'),
                            c('Complete: Der Zug ist _____.', 'punktlich|pünktlich'),
                            emp('Una.', [['Reisepass', 'passaporte'], ['Gate', 'portão'], ['Koffer', 'mala'], ['Zug', 'trem']]),
                            vf('"Pünktlich" significa no horário.', true),
                            ordena('Monte:', 'Der Zug ist punktlich'),
                            m('Gleis é:', ['plataforma', 'passaporte', 'janela', 'piloto'], 'plataforma'),
                            m('Einchecken é:', ['embarcar na hora', 'fazer o check-in', 'pedir café', 'trocar dinheiro'], 'fazer o check-in'),
                        ],
                    ],
                ],
            ],
        ],
    ];
}
