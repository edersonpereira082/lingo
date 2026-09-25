<?php

function onda_a1(): array
{
    return [
        [
            'titulo' => 'O alfabeto',
            'desc' => 'Soletrar nome, e-mail e placas simples.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'As letras',
                    'teoria' => dteoria(
                        "letter · spell · name · please\nHow do you spell it? A, B, C.",
                        "letra · deletrear · nombre · por favor\n¿Cómo se escribe? A, B, C.",
                        "lettre · épeler · nom · s il vous plaît\nComment ça s écrit ? A, B, C.",
                        "lettera · compitare · nome · per favore\nCome si scrive? A, B, C.",
                        "Buchstabe · buchstabieren · Name · bitte\nWie schreibt man das? A, B, C."
                    ),
                    'itens' => [
                        dlinha('letra', 'qual é a letra', 'letter', 'What is the letter', 'letra', 'Cuál es la letra', 'lettre', 'Quelle est la lettre', 'lettera', 'Qual è la lettera', 'Buchstabe', 'Was ist der Buchstabe'),
                        dlinha('soletrar', 'pode soletrar', 'spell', 'Can you spell it', 'deletrear', 'Puedes deletrearlo', 'épeler', 'Tu peux épeler', 'compitare', 'Puoi compitare', 'buchstabieren', 'Kannst du das buchstabieren'),
                        dlinha('nome', 'soletra o nome', 'name', 'Spell the name', 'nombre', 'Deletrea el nombre', 'nom', 'Épelle le nom', 'nome', 'Compita il nome', 'Name', 'Buchstabiere den Namen'),
                        dlinha('por favor', 'soletra por favor', 'please', 'Spell it please', 'por favor', 'Deletrea por favor', 's il vous plaît', 'Épelle s il te plaît', 'per favore', 'Compita per favore', 'bitte', 'Bitte buchstabieren'),
                    ],
                ],
                [
                    'titulo' => 'Meu e-mail',
                    'teoria' => dteoria(
                        "at · dot · email · capital\nIt is a at gmail dot com.",
                        "arroba · punto · correo · mayúscula\nEs a arroba gmail punto com.",
                        "arobase · point · e-mail · majuscule\nC est a arobase gmail point com.",
                        "chiocciola · punto · email · maiuscola\nÈ a chiocciola gmail punto com.",
                        "at · Punkt · E-Mail · groß\nEs ist a at gmail Punkt com."
                    ),
                    'itens' => [
                        dlinha('arroba', 'a arroba gmail', 'at', 'a at gmail', 'arroba', 'a arroba gmail', 'arobase', 'a arobase gmail', 'chiocciola', 'a chiocciola gmail', 'at', 'a at gmail'),
                        dlinha('ponto', 'ponto com', 'dot', 'dot com', 'punto', 'punto com', 'point', 'point com', 'punto', 'punto com', 'Punkt', 'Punkt com'),
                        dlinha('e-mail', 'este é o e-mail', 'email', 'This is the email', 'correo', 'Este es el correo', 'e-mail', 'Voici l e-mail', 'email', 'Questa è l email', 'E-Mail', 'Das ist die E-Mail'),
                        dlinha('maiúscula', 'com maiúscula', 'capital', 'With a capital letter', 'mayúscula', 'Con mayúscula', 'majuscule', 'Avec une majuscule', 'maiuscola', 'Con la maiuscola', 'groß', 'Mit Großbuchstaben'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Frutas',
            'desc' => 'Pedir fruta na feira e dizer o que você gosta.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Na fruteira',
                    'teoria' => dteoria(
                        "apple · banana · orange · grape\nI want an apple and a banana.",
                        "manzana · plátano · naranja · uva\nQuiero una manzana y un plátano.",
                        "pomme · banane · orange · raisin\nJe veux une pomme et une banane.",
                        "mela · banana · arancia · uva\nVoglio una mela e una banana.",
                        "Apfel · Banane · Orange · Traube\nIch möchte einen Apfel und eine Banane."
                    ),
                    'itens' => [
                        dlinha('maçã', 'quero uma maçã', 'apple', 'I want an apple', 'manzana', 'Quiero una manzana', 'pomme', 'Je veux une pomme', 'mela', 'Voglio una mela', 'Apfel', 'Ich möchte einen Apfel'),
                        dlinha('banana', 'uma banana amarela', 'banana', 'A yellow banana', 'plátano', 'Un plátano amarillo', 'banane', 'Une banane jaune', 'banana', 'Una banana gialla', 'Banane', 'Eine gelbe Banane'),
                        dlinha('laranja', 'esta laranja é doce', 'orange', 'This orange is sweet', 'naranja', 'Esta naranja es dulce', 'orange', 'Cette orange est sucrée', 'arancia', 'Questa arancia è dolce', 'Orange', 'Diese Orange ist süß'),
                        dlinha('uva', 'gosto de uva', 'grape', 'I like grapes', 'uva', 'Me gustan las uvas', 'raisin', 'J aime le raisin', 'uva', 'Mi piacciono le uve', 'Traube', 'Ich mag Trauben'),
                    ],
                ],
                [
                    'titulo' => 'Maduro ou verde',
                    'teoria' => dteoria(
                        "ripe · green · kilo · strawberry\nAre they ripe? One kilo of strawberries.",
                        "maduro · verde · kilo · fresa\n¿Están maduros? Un kilo de fresas.",
                        "mûr · vert · kilo · fraise\nIls sont mûrs ? Un kilo de fraises.",
                        "maturo · verde · chilo · fragola\nSono mature? Un chilo di fragole.",
                        "reif · grün · Kilo · Erdbeere\nSind sie reif? Ein Kilo Erdbeeren."
                    ),
                    'itens' => [
                        dlinha('maduro', 'está maduro', 'ripe', 'It is ripe', 'maduro', 'Está maduro', 'mûr', 'Il est mûr', 'maturo', 'È maturo', 'reif', 'Er ist reif'),
                        dlinha('verde', 'ainda está verde', 'green', 'It is still green', 'verde', 'Todavía está verde', 'vert', 'Il est encore vert', 'verde', 'È ancora verde', 'grün', 'Er ist noch grün'),
                        dlinha('quilo', 'um quilo de maçãs', 'kilo', 'One kilo of apples', 'kilo', 'Un kilo de manzanas', 'kilo', 'Un kilo de pommes', 'chilo', 'Un chilo di mele', 'Kilo', 'Ein Kilo Äpfel'),
                        dlinha('morango', 'morangos vermelhos', 'strawberry', 'Red strawberries', 'fresa', 'Fresas rojas', 'fraise', 'Des fraises rouges', 'fragola', 'Fragole rosse', 'Erdbeere', 'Rote Erdbeeren'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Café da manhã',
            'desc' => 'Pão, café, leite e o que você toma de manhã.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que tem na mesa',
                    'teoria' => dteoria(
                        "breakfast · toast · butter · milk\nBreakfast is toast with butter.",
                        "desayuno · tostada · mantequilla · leche\nEl desayuno es tostada con mantequilla.",
                        "petit-déjeuner · toast · beurre · lait\nLe petit-déjeuner c est du toast au beurre.",
                        "colazione · toast · burro · latte\nLa colazione è toast con burro.",
                        "Frühstück · Toast · Butter · Milch\nZum Frühstück gibt es Toast mit Butter."
                    ),
                    'itens' => [
                        dlinha('café da manhã', 'o café da manhã está pronto', 'breakfast', 'Breakfast is ready', 'desayuno', 'El desayuno está listo', 'petit-déjeuner', 'Le petit-déjeuner est prêt', 'colazione', 'La colazione è pronta', 'Frühstück', 'Das Frühstück ist fertig'),
                        dlinha('torrada', 'quero uma torrada', 'toast', 'I want toast', 'tostada', 'Quiero una tostada', 'toast', 'Je veux du toast', 'toast', 'Voglio un toast', 'Toast', 'Ich möchte Toast'),
                        dlinha('manteiga', 'com manteiga', 'butter', 'With butter', 'mantequilla', 'Con mantequilla', 'beurre', 'Avec du beurre', 'burro', 'Con burro', 'Butter', 'Mit Butter'),
                        dlinha('leite', 'um copo de leite', 'milk', 'A glass of milk', 'leche', 'Un vaso de leche', 'lait', 'Un verre de lait', 'latte', 'Un bicchiere di latte', 'Milch', 'Ein Glas Milch'),
                    ],
                ],
                [
                    'titulo' => 'Quente ou frio',
                    'teoria' => dteoria(
                        "coffee · tea · hot · cold\nThe coffee is hot. The juice is cold.",
                        "café · té · caliente · frío\nEl café está caliente. El jugo está frío.",
                        "café · thé · chaud · froid\nLe café est chaud. Le jus est froid.",
                        "caffè · tè · caldo · freddo\nIl caffè è caldo. Il succo è freddo.",
                        "Kaffee · Tee · heiß · kalt\nDer Kaffee ist heiß. Der Saft ist kalt."
                    ),
                    'itens' => [
                        dlinha('café', 'um café pequeno', 'coffee', 'A small coffee', 'café', 'Un café pequeño', 'café', 'Un petit café', 'caffè', 'Un caffè piccolo', 'Kaffee', 'Einen kleinen Kaffee'),
                        dlinha('chá', 'chá com leite', 'tea', 'Tea with milk', 'té', 'Té con leche', 'thé', 'Thé au lait', 'tè', 'Tè con latte', 'Tee', 'Tee mit Milch'),
                        dlinha('quente', 'está quente', 'hot', 'It is hot', 'caliente', 'Está caliente', 'chaud', 'C est chaud', 'caldo', 'È caldo', 'heiß', 'Es ist heiß'),
                        dlinha('frio', 'está frio demais', 'cold', 'It is too cold', 'frío', 'Está demasiado frío', 'froid', 'C est trop froid', 'freddo', 'È troppo freddo', 'kalt', 'Es ist zu kalt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'No banheiro',
            'desc' => 'Itens de higiene e pedidos simples em casa.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que tem aí',
                    'teoria' => dteoria(
                        "bathroom · soap · towel · toothbrush\nThe soap is in the bathroom.",
                        "baño · jabón · toalla · cepillo\nEl jabón está en el baño.",
                        "salle de bain · savon · serviette · brosse\nLe savon est dans la salle de bain.",
                        "bagno · sapone · asciugamano · spazzolino\nIl sapone è in bagno.",
                        "Bad · Seife · Handtuch · Zahnbürste\nDie Seife ist im Bad."
                    ),
                    'itens' => [
                        dlinha('banheiro', 'onde é o banheiro', 'bathroom', 'Where is the bathroom', 'baño', 'Dónde está el baño', 'salle de bain', 'Où est la salle de bain', 'bagno', 'Dov è il bagno', 'Bad', 'Wo ist das Bad'),
                        dlinha('sabonete', 'preciso de sabonete', 'soap', 'I need soap', 'jabón', 'Necesito jabón', 'savon', 'Il me faut du savon', 'sapone', 'Mi serve il sapone', 'Seife', 'Ich brauche Seife'),
                        dlinha('toalha', 'uma toalha limpa', 'towel', 'A clean towel', 'toalla', 'Una toalla limpia', 'serviette', 'Une serviette propre', 'asciugamano', 'Un asciugamano pulito', 'Handtuch', 'Ein sauberes Handtuch'),
                        dlinha('escova', 'minha escova de dentes', 'toothbrush', 'My toothbrush', 'cepillo', 'Mi cepillo de dientes', 'brosse', 'Ma brosse à dents', 'spazzolino', 'Il mio spazzolino', 'Zahnbürste', 'Meine Zahnbürste'),
                    ],
                ],
                [
                    'titulo' => 'Está ocupado',
                    'teoria' => dteoria(
                        "shower · occupied · wait · mirror\nThe shower is occupied. Please wait.",
                        "ducha · ocupado · esperar · espejo\nLa ducha está ocupada. Espera.",
                        "douche · occupé · attendre · miroir\nLa douche est occupée. Attends.",
                        "doccia · occupato · aspettare · specchio\nLa doccia è occupata. Aspetta.",
                        "Dusche · besetzt · warten · Spiegel\nDie Dusche ist besetzt. Bitte warten."
                    ),
                    'itens' => [
                        dlinha('chuveiro', 'o chuveiro está livre', 'shower', 'The shower is free', 'ducha', 'La ducha está libre', 'douche', 'La douche est libre', 'doccia', 'La doccia è libera', 'Dusche', 'Die Dusche ist frei'),
                        dlinha('ocupado', 'está ocupado', 'occupied', 'It is occupied', 'ocupado', 'Está ocupado', 'occupé', 'C est occupé', 'occupato', 'È occupato', 'besetzt', 'Es ist besetzt'),
                        dlinha('esperar', 'espere um minuto', 'wait', 'Wait a minute', 'esperar', 'Espera un minuto', 'attendre', 'Attends une minute', 'aspettare', 'Aspetta un minuto', 'warten', 'Warte eine Minute'),
                        dlinha('espelho', 'olhe no espelho', 'mirror', 'Look in the mirror', 'espejo', 'Mira al espejo', 'miroir', 'Regarde le miroir', 'specchio', 'Guarda lo specchio', 'Spiegel', 'Schau in den Spiegel'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Esquerda e direita',
            'desc' => 'Indicar o lado, a esquina e o próximo cruzamento.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Para que lado',
                    'teoria' => dteoria(
                        "left · right · straight · turn\nTurn left, then go straight.",
                        "izquierda · derecha · recto · girar\nGira a la izquierda y sigue recto.",
                        "gauche · droite · tout droit · tourner\nTourne à gauche puis tout droit.",
                        "sinistra · destra · dritto · girare\nGira a sinistra e vai dritto.",
                        "links · rechts · geradeaus · abbiegen\nLinks abbiegen, dann geradeaus."
                    ),
                    'itens' => [
                        dlinha('esquerda', 'vire à esquerda', 'left', 'Turn left', 'izquierda', 'Gira a la izquierda', 'gauche', 'Tourne à gauche', 'sinistra', 'Gira a sinistra', 'links', 'Links abbiegen'),
                        dlinha('direita', 'fica à direita', 'right', 'It is on the right', 'derecha', 'Está a la derecha', 'droite', 'C est à droite', 'destra', 'È a destra', 'rechts', 'Es ist rechts'),
                        dlinha('em frente', 'siga em frente', 'straight', 'Go straight', 'recto', 'Sigue recto', 'tout droit', 'Va tout droit', 'dritto', 'Vai dritto', 'geradeaus', 'Geh geradeaus'),
                        dlinha('virar', 'vire aqui', 'turn', 'Turn here', 'girar', 'Gira aquí', 'tourner', 'Tourne ici', 'girare', 'Gira qui', 'abbiegen', 'Hier abbiegen'),
                    ],
                ],
                [
                    'titulo' => 'A esquina',
                    'teoria' => dteoria(
                        "corner · next · traffic light · stop\nStop at the next traffic light.",
                        "esquina · siguiente · semáforo · parar\nPara en el siguiente semáforo.",
                        "coin · prochain · feu · arrêter\nArrête-toi au prochain feu.",
                        "angolo · prossimo · semaforo · fermarsi\nFermati al prossimo semaforo.",
                        "Ecke · nächste · Ampel · halten\nHalt an der nächsten Ampel."
                    ),
                    'itens' => [
                        dlinha('esquina', 'na próxima esquina', 'corner', 'At the next corner', 'esquina', 'En la siguiente esquina', 'coin', 'Au prochain coin', 'angolo', 'Al prossimo angolo', 'Ecke', 'An der nächsten Ecke'),
                        dlinha('próximo', 'o próximo é este', 'next', 'The next one is this', 'siguiente', 'El siguiente es este', 'prochain', 'Le prochain c est celui-ci', 'prossimo', 'Il prossimo è questo', 'nächste', 'Das nächste ist dieses'),
                        dlinha('semáforo', 'no semáforo', 'traffic light', 'At the traffic light', 'semáforo', 'En el semáforo', 'feu', 'Au feu', 'semaforo', 'Al semaforo', 'Ampel', 'An der Ampel'),
                        dlinha('parar', 'pare aqui', 'stop', 'Stop here', 'parar', 'Para aquí', 'arrêter', 'Arrête-toi ici', 'fermarsi', 'Fermati qui', 'halten', 'Halt hier'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Na cozinha',
            'desc' => 'Prato, copo, faca e o que está na pia.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'A mesa está posta',
                    'teoria' => dteoria(
                        "plate · glass · knife · fork\nA plate, a glass, a knife and a fork.",
                        "plato · vaso · cuchillo · tenedor\nUn plato, un vaso, un cuchillo y un tenedor.",
                        "assiette · verre · couteau · fourchette\nUne assiette, un verre, un couteau et une fourchette.",
                        "piatto · bicchiere · coltello · forchetta\nUn piatto, un bicchiere, un coltello e una forchetta.",
                        "Teller · Glas · Messer · Gabel\nEin Teller, ein Glas, ein Messer und eine Gabel."
                    ),
                    'itens' => [
                        dlinha('prato', 'um prato limpo', 'plate', 'A clean plate', 'plato', 'Un plato limpio', 'assiette', 'Une assiette propre', 'piatto', 'Un piatto pulito', 'Teller', 'Ein sauberer Teller'),
                        dlinha('copo', 'o copo está vazio', 'glass', 'The glass is empty', 'vaso', 'El vaso está vacío', 'verre', 'Le verre est vide', 'bicchiere', 'Il bicchiere è vuoto', 'Glas', 'Das Glas ist leer'),
                        dlinha('faca', 'cuidado com a faca', 'knife', 'Be careful with the knife', 'cuchillo', 'Cuidado con el cuchillo', 'couteau', 'Attention au couteau', 'coltello', 'Attento al coltello', 'Messer', 'Vorsicht mit dem Messer'),
                        dlinha('garfo', 'o garfo caiu', 'fork', 'The fork fell', 'tenedor', 'Se cayó el tenedor', 'fourchette', 'La fourchette est tombée', 'forchetta', 'La forchetta è caduta', 'Gabel', 'Die Gabel ist gefallen'),
                    ],
                ],
                [
                    'titulo' => 'Na pia',
                    'teoria' => dteoria(
                        "sink · pan · fridge · wash\nWash the pan. It is in the sink.",
                        "fregadero · sartén · nevera · lavar\nLava la sartén. Está en el fregadero.",
                        "évier · poêle · frigo · laver\nLave la poêle. Elle est dans l évier.",
                        "lavello · padella · frigo · lavare\nLava la padella. È nel lavello.",
                        "Spüle · Pfanne · Kühlschrank · waschen\nWasch die Pfanne. Sie ist in der Spüle."
                    ),
                    'itens' => [
                        dlinha('pia', 'está na pia', 'sink', 'It is in the sink', 'fregadero', 'Está en el fregadero', 'évier', 'C est dans l évier', 'lavello', 'È nel lavello', 'Spüle', 'Es ist in der Spüle'),
                        dlinha('panela', 'a panela está quente', 'pan', 'The pan is hot', 'sartén', 'La sartén está caliente', 'poêle', 'La poêle est chaude', 'padella', 'La padella è calda', 'Pfanne', 'Die Pfanne ist heiß'),
                        dlinha('geladeira', 'na geladeira', 'fridge', 'In the fridge', 'nevera', 'En la nevera', 'frigo', 'Dans le frigo', 'frigo', 'Nel frigo', 'Kühlschrank', 'Im Kühlschrank'),
                        dlinha('lavar', 'vou lavar agora', 'wash', 'I will wash it now', 'lavar', 'Lo lavo ahora', 'laver', 'Je la lave maintenant', 'lavare', 'La lavo ora', 'waschen', 'Ich wasche es jetzt'),
                    ],
                ],
            ],
        ],
    ];
}

require_once __DIR__ . '/catalogo-onda-a2.php';
