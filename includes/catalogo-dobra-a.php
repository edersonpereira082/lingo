<?php

function dobra_a1(): array
{
    return [
        [
            'titulo' => 'Números 21 a 100',
            'desc' => 'Idade, preço e quantidades além de vinte.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Dezenove e depois',
                    'teoria' => dteoria(
                        "thirty · forty · fifty · hundred\nI am thirty. It costs fifty.",
                        "treinta · cuarenta · cincuenta · cien\nTengo treinta. Cuesta cincuenta.",
                        "trente · quarante · cinquante · cent\nJ’ai trente ans. Ça coûte cinquante.",
                        "trenta · quaranta · cinquanta · cento\nHo trenta anni. Costa cinquanta.",
                        "dreißig · vierzig · fünfzig · hundert\nIch bin dreißig. Es kostet fünfzig."
                    ),
                    'itens' => [
                        dlinha('trinta', 'eu tenho trinta anos', 'thirty', 'I am thirty', 'treinta', 'Tengo treinta', 'trente', 'J ai trente ans', 'trenta', 'Ho trenta anni', 'dreißig', 'Ich bin dreißig'),
                        dlinha('quarenta', 'isso custa quarenta', 'forty', 'It costs forty', 'cuarenta', 'Cuesta cuarenta', 'quarante', 'Ça coûte quarante', 'quaranta', 'Costa quaranta', 'vierzig', 'Es kostet vierzig'),
                        dlinha('cinquenta', 'quero cinquenta', 'fifty', 'I want fifty', 'cincuenta', 'Quiero cincuenta', 'cinquante', 'Je veux cinquante', 'cinquanta', 'Voglio cinquanta', 'fünfzig', 'Ich will fünfzig'),
                        dlinha('cem', 'são cem pessoas', 'hundred', 'One hundred people', 'cien', 'Cien personas', 'cent', 'Cent personnes', 'cento', 'Cento persone', 'hundert', 'Hundert Leute'),
                    ],
                ],
                [
                    'titulo' => 'Idade e preço',
                    'teoria' => dteoria(
                        "years old · how much · sixty · eighty\nHow old are you? I am sixty.",
                        "años · cuánto · sesenta · ochenta\n¿Cuántos años tienes? Tengo sesenta.",
                        "ans · combien · soixante · quatre-vingts\nTu as quel âge ? J’ai soixante ans.",
                        "anni · quanto · sessanta · ottanta\nQuanti anni hai? Ho sessanta anni.",
                        "Jahre · wie viel · sechzig · achtzig\nWie alt bist du? Ich bin sechzig."
                    ),
                    'itens' => [
                        dlinha('anos', 'tenho sessenta anos', 'years old', 'I am sixty years old', 'años', 'Tengo sesenta años', 'ans', 'J ai soixante ans', 'anni', 'Ho sessanta anni', 'Jahre', 'Ich bin sechzig Jahre'),
                        dlinha('quanto', 'quanto custa isto', 'how much', 'How much is this', 'cuánto', 'Cuánto cuesta esto', 'combien', 'Combien ça coûte', 'quanto', 'Quanto costa questo', 'wie viel', 'Wie viel kostet das'),
                        dlinha('sessenta', 'ela tem sessenta', 'sixty', 'She is sixty', 'sesenta', 'Ella tiene sesenta', 'soixante', 'Elle a soixante ans', 'sessanta', 'Lei ha sessanta anni', 'sechzig', 'Sie ist sechzig'),
                        dlinha('oitenta', 'ele tem oitenta', 'eighty', 'He is eighty', 'ochenta', 'Él tiene ochenta', 'quatre-vingts', 'Il a quatre-vingts ans', 'ottanta', 'Lui ha ottanta anni', 'achtzig', 'Er ist achtzig'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Isto e aquilo',
            'desc' => 'This, that, these, those — apontar o que está perto ou longe.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Perto de mim',
                    'teoria' => dteoria(
                        "this · that · these · those\nThis bag is mine. Those shoes are new.",
                        "este · ese · estos · aquellos\nEsta bolsa es mía. Esos zapatos son nuevos.",
                        "ceci · cela · ces · ceux-là\nCe sac est à moi. Ces chaussures sont neuves.",
                        "questo · quello · questi · quelli\nQuesta borsa è mia. Quelle scarpe sono nuove.",
                        "dies · das · diese · jene\nDiese Tasche ist meine. Jene Schuhe sind neu."
                    ),
                    'itens' => [
                        dlinha('isto / este', 'esta bolsa é minha', 'this', 'This bag is mine', 'este', 'Esta bolsa es mía', 'ce', 'Ce sac est à moi', 'questo', 'Questa borsa è mia', 'dies', 'Diese Tasche ist meine'),
                        dlinha('aquilo / esse', 'essa cadeira é velha', 'that', 'That chair is old', 'ese', 'Esa silla es vieja', 'cela', 'Cette chaise est vieille', 'quello', 'Quella sedia è vecchia', 'das', 'Der Stuhl ist alt'),
                        dlinha('estes', 'estes livros são novos', 'these', 'These books are new', 'estos', 'Estos libros son nuevos', 'ces', 'Ces livres sont neufs', 'questi', 'Questi libri sono nuovi', 'diese', 'Diese Bücher sind neu'),
                        dlinha('aqueles', 'aqueles sapatos são caros', 'those', 'Those shoes are expensive', 'aquellos', 'Aquellos zapatos son caros', 'ceux-là', 'Ces chaussures-là sont chères', 'quelli', 'Quelle scarpe sono care', 'jene', 'Jene Schuhe sind teuer'),
                    ],
                ],
                [
                    'titulo' => 'Qual você quer',
                    'teoria' => dteoria(
                        "this one · that one · these ones · which\nI want this one, please.",
                        "este · ese · estos · cuál\nQuiero este, por favor.",
                        "celui-ci · celui-là · lesquels · lequel\nJe veux celui-ci, s’il vous plaît.",
                        "questo · quello · quali · quale\nVoglio questo, per favore.",
                        "dieses · jenes · welche · welches\nIch möchte dieses, bitte."
                    ),
                    'itens' => [
                        dlinha('este aqui', 'quero este por favor', 'this one', 'I want this one', 'este', 'Quiero este', 'celui-ci', 'Je veux celui-ci', 'questo', 'Voglio questo', 'dieses', 'Ich möchte dieses'),
                        dlinha('aquele lá', 'prefiro aquele', 'that one', 'I prefer that one', 'ese', 'Prefiero ese', 'celui-là', 'Je préfère celui-là', 'quello', 'Preferisco quello', 'jenes', 'Ich bevorzuge jenes'),
                        dlinha('estes aqui', 'levo estes', 'these ones', 'I take these ones', 'estos', 'Me llevo estos', 'ceux-ci', 'Je prends ceux-ci', 'questi', 'Prendo questi', 'diese', 'Ich nehme diese'),
                        dlinha('qual', 'qual você quer', 'which', 'Which one do you want', 'cuál', 'Cuál quieres', 'lequel', 'Lequel veux-tu', 'quale', 'Quale vuoi', 'welches', 'Welches möchtest du'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Meu e seu',
            'desc' => 'Possessivos para falar de objetos e pessoas.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'É meu',
                    'teoria' => dteoria(
                        "my · your · his · her\nThis is my phone. Is this your bag?",
                        "mi · tu · su · su (de ela)\nEste es mi teléfono. ¿Es tu bolsa?",
                        "mon · ton · son · sa\nC’est mon téléphone. C’est ton sac ?",
                        "mio · tuo · suo · sua\nQuesto è il mio telefono. È la tua borsa?",
                        "mein · dein · sein · ihr\nDas ist mein Telefon. Ist das deine Tasche?"
                    ),
                    'itens' => [
                        dlinha('meu', 'este é o meu telefone', 'my', 'This is my phone', 'mi', 'Este es mi teléfono', 'mon', 'C est mon téléphone', 'mio', 'Questo è il mio telefono', 'mein', 'Das ist mein Telefon'),
                        dlinha('seu / teu', 'esta é a sua bolsa', 'your', 'Is this your bag', 'tu', 'Es tu bolsa', 'ton', 'C est ton sac', 'tuo', 'È la tua borsa', 'dein', 'Ist das deine Tasche'),
                        dlinha('dele', 'este é o carro dele', 'his', 'This is his car', 'suyo', 'Este coche es suyo', 'son', 'C est sa voiture', 'suo', 'Questa è la sua auto', 'sein', 'Das ist sein Auto'),
                        dlinha('dela', 'esta é a casa dela', 'her', 'This is her house', 'suya', 'Esta casa es suya', 'sa', 'C est sa maison', 'sua', 'Questa è la sua casa', 'ihr', 'Das ist ihr Haus'),
                    ],
                ],
                [
                    'titulo' => 'Nosso e deles',
                    'teoria' => dteoria(
                        "our · their · mine · yours\nThis table is ours. That key is mine.",
                        "nuestro · su · mío · tuyo\nEsta mesa es nuestra. Esa llave es mía.",
                        "notre · leur · le mien · le tien\nCette table est à nous. Cette clé est à moi.",
                        "nostro · loro · mio · tuo\nQuesto tavolo è nostro. Quella chiave è mia.",
                        "unser · ihr · meins · deins\nDieser Tisch ist unser. Der Schlüssel ist meiner."
                    ),
                    'itens' => [
                        dlinha('nosso', 'esta mesa é nossa', 'our', 'This is our table', 'nuestro', 'Esta es nuestra mesa', 'notre', 'C est notre table', 'nostro', 'Questo è il nostro tavolo', 'unser', 'Das ist unser Tisch'),
                        dlinha('deles', 'esta é a casa deles', 'their', 'This is their house', 'su', 'Esta es su casa', 'leur', 'C est leur maison', 'loro', 'Questa è la loro casa', 'ihr', 'Das ist ihr Haus'),
                        dlinha('o meu', 'esta chave é minha', 'mine', 'This key is mine', 'mío', 'Esta llave es mía', 'le mien', 'Cette clé est à moi', 'mio', 'Questa chiave è mia', 'meins', 'Der Schlüssel ist meiner'),
                        dlinha('o seu', 'este livro é seu', 'yours', 'This book is yours', 'tuyo', 'Este libro es tuyo', 'le tien', 'Ce livre est à toi', 'tuo', 'Questo libro è tuo', 'deins', 'Das Buch ist deins'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Em cima e embaixo',
            'desc' => 'Preposições de lugar para achar objetos.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Onde está o objeto',
                    'teoria' => dteoria(
                        "in · on · under · next to\nThe keys are on the table. The bag is under the chair.",
                        "en · sobre · debajo · al lado\nLas llaves están sobre la mesa. La bolsa está debajo de la silla.",
                        "dans · sur · sous · à côté\nLes clés sont sur la table. Le sac est sous la chaise.",
                        "in · su · sotto · accanto\nLe chiavi sono sul tavolo. La borsa è sotto la sedia.",
                        "in · auf · unter · neben\nDie Schlüssel sind auf dem Tisch. Die Tasche ist unter dem Stuhl."
                    ),
                    'itens' => [
                        dlinha('em / dentro', 'o livro está na bolsa', 'in', 'The book is in the bag', 'en', 'El libro está en la bolsa', 'dans', 'Le livre est dans le sac', 'in', 'Il libro è nella borsa', 'in', 'Das Buch ist in der Tasche'),
                        dlinha('em cima', 'as chaves estão na mesa', 'on', 'The keys are on the table', 'sobre', 'Las llaves están sobre la mesa', 'sur', 'Les clés sont sur la table', 'su', 'Le chiavi sono sul tavolo', 'auf', 'Die Schlüssel sind auf dem Tisch'),
                        dlinha('embaixo', 'a bolsa está embaixo da cadeira', 'under', 'The bag is under the chair', 'debajo', 'La bolsa está debajo de la silla', 'sous', 'Le sac est sous la chaise', 'sotto', 'La borsa è sotto la sedia', 'unter', 'Die Tasche ist unter dem Stuhl'),
                        dlinha('ao lado', 'o banco fica ao lado do parque', 'next to', 'The bank is next to the park', 'al lado', 'El banco está al lado del parque', 'à côté', 'La banque est à côté du parc', 'accanto', 'La banca è accanto al parco', 'neben', 'Die Bank ist neben dem Park'),
                    ],
                ],
                [
                    'titulo' => 'Entre e atrás',
                    'teoria' => dteoria(
                        "between · behind · in front of · near\nThe pharmacy is between the bank and the park.",
                        "entre · detrás · delante · cerca\nLa farmacia está entre el banco y el parque.",
                        "entre · derrière · devant · près\nLa pharmacie est entre la banque et le parc.",
                        "tra · dietro · davanti · vicino\nLa farmacia è tra la banca e il parco.",
                        "zwischen · hinter · vor · in der Nähe\nDie Apotheke ist zwischen der Bank und dem Park."
                    ),
                    'itens' => [
                        dlinha('entre', 'a farmácia fica entre o banco e o parque', 'between', 'It is between the bank and the park', 'entre', 'Está entre el banco y el parque', 'entre', 'Elle est entre la banque et le parc', 'tra', 'È tra la banca e il parco', 'zwischen', 'Sie ist zwischen der Bank und dem Park'),
                        dlinha('atrás', 'o carro está atrás da casa', 'behind', 'The car is behind the house', 'detrás', 'El coche está detrás de la casa', 'derrière', 'La voiture est derrière la maison', 'dietro', 'L auto è dietro la casa', 'hinter', 'Das Auto ist hinter dem Haus'),
                        dlinha('na frente', 'a loja fica na frente da praça', 'in front of', 'The shop is in front of the square', 'delante', 'La tienda está delante de la plaza', 'devant', 'Le magasin est devant la place', 'davanti', 'Il negozio è davanti alla piazza', 'vor', 'Der Laden ist vor dem Platz'),
                        dlinha('perto', 'a escola é perto daqui', 'near', 'The school is near here', 'cerca', 'La escuela está cerca', 'près', 'L école est près d ici', 'vicino', 'La scuola è qui vicino', 'in der Nähe', 'Die Schule ist in der Nähe'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Chaves e carteira',
            'desc' => 'Objetos pessoais do dia a dia.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Na bolsa',
                    'teoria' => dteoria(
                        "keys · wallet · glasses · umbrella\nWhere are my keys? I need my glasses.",
                        "llaves · cartera · gafas · paraguas\n¿Dónde están mis llaves? Necesito las gafas.",
                        "clés · portefeuille · lunettes · parapluie\nOù sont mes clés ? J’ai besoin de mes lunettes.",
                        "chiavi · portafoglio · occhiali · ombrello\nDove sono le mie chiavi? Mi servono gli occhiali.",
                        "Schlüssel · Geldbörse · Brille · Schirm\nWo sind meine Schlüssel? Ich brauche die Brille."
                    ),
                    'itens' => [
                        dlinha('chaves', 'onde estão minhas chaves', 'keys', 'Where are my keys', 'llaves', 'Dónde están mis llaves', 'clés', 'Où sont mes clés', 'chiavi', 'Dove sono le mie chiavi', 'Schlüssel', 'Wo sind meine Schlüssel'),
                        dlinha('carteira', 'minha carteira está na mesa', 'wallet', 'My wallet is on the table', 'cartera', 'Mi cartera está en la mesa', 'portefeuille', 'Mon portefeuille est sur la table', 'portafoglio', 'Il mio portafoglio è sul tavolo', 'Geldbörse', 'Meine Geldbörse ist auf dem Tisch'),
                        dlinha('óculos', 'preciso dos óculos', 'glasses', 'I need my glasses', 'gafas', 'Necesito las gafas', 'lunettes', 'J ai besoin de mes lunettes', 'occhiali', 'Mi servono gli occhiali', 'Brille', 'Ich brauche die Brille'),
                        dlinha('guarda-chuva', 'levo o guarda-chuva', 'umbrella', 'I take the umbrella', 'paraguas', 'Llevo el paraguas', 'parapluie', 'Je prends le parapluie', 'ombrello', 'Prendo l ombrello', 'Schirm', 'Ich nehme den Schirm'),
                    ],
                ],
                [
                    'titulo' => 'Perdi algo',
                    'teoria' => dteoria(
                        "lost · found · passport · ticket\nI lost my passport. I found the ticket.",
                        "perdí · encontré · pasaporte · billete\nPerdí el pasaporte. Encontré el billete.",
                        "perdu · trouvé · passeport · billet\nJ’ai perdu mon passeport. J’ai trouvé le billet.",
                        "perso · trovato · passaporto · biglietto\nHo perso il passaporto. Ho trovato il biglietto.",
                        "verloren · gefunden · Reisepass · Ticket\nIch habe den Reisepass verloren. Ich habe das Ticket gefunden."
                    ),
                    'itens' => [
                        dlinha('perdi', 'perdi o passaporte', 'lost', 'I lost my passport', 'perdí', 'Perdí el pasaporte', 'perdu', 'J ai perdu mon passeport', 'perso', 'Ho perso il passaporto', 'verloren', 'Ich habe den Reisepass verloren'),
                        dlinha('encontrei', 'encontrei o bilhete', 'found', 'I found the ticket', 'encontré', 'Encontré el billete', 'trouvé', 'J ai trouvé le billet', 'trovato', 'Ho trovato il biglietto', 'gefunden', 'Ich habe das Ticket gefunden'),
                        dlinha('passaporte', 'este é o meu passaporte', 'passport', 'This is my passport', 'pasaporte', 'Este es mi pasaporte', 'passeport', 'Voici mon passeport', 'passaporto', 'Questo è il mio passaporto', 'Reisepass', 'Das ist mein Reisepass'),
                        dlinha('bilhete', 'o bilhete está na carteira', 'ticket', 'The ticket is in the wallet', 'billete', 'El billete está en la cartera', 'billet', 'Le billet est dans le portefeuille', 'biglietto', 'Il biglietto è nel portafoglio', 'Ticket', 'Das Ticket ist in der Geldbörse'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Amigos e vizinhos',
            'desc' => 'Apresentar quem mora perto e quem você encontra.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Esta é a Maria',
                    'teoria' => dteoria(
                        "friend · neighbour · classmate · colleague\nThis is my neighbour. She is a classmate.",
                        "amigo · vecino · compañero · colega\nEste es mi vecino. Ella es compañera de clase.",
                        "ami · voisin · camarade · collègue\nVoici mon voisin. Elle est camarade de classe.",
                        "amico · vicino · compagno · collega\nQuesto è il mio vicino. Lei è una compagna di classe.",
                        "Freund · Nachbar · Mitschüler · Kollege\nDas ist mein Nachbar. Sie ist Mitschülerin."
                    ),
                    'itens' => [
                        dlinha('amigo', 'ele é meu amigo', 'friend', 'He is my friend', 'amigo', 'Él es mi amigo', 'ami', 'C est mon ami', 'amico', 'Lui è il mio amico', 'Freund', 'Er ist mein Freund'),
                        dlinha('vizinho', 'ela é minha vizinha', 'neighbour', 'She is my neighbour', 'vecino', 'Ella es mi vecina', 'voisin', 'Elle est ma voisine', 'vicino', 'Lei è la mia vicina', 'Nachbar', 'Sie ist meine Nachbarin'),
                        dlinha('colega de classe', 'somos colegas de classe', 'classmate', 'We are classmates', 'compañero', 'Somos compañeros de clase', 'camarade', 'Nous sommes camarades', 'compagno', 'Siamo compagni di classe', 'Mitschüler', 'Wir sind Mitschüler'),
                        dlinha('colega de trabalho', 'ele é colega de trabalho', 'colleague', 'He is a colleague', 'colega', 'Él es un colega', 'collègue', 'C est un collègue', 'collega', 'Lui è un collega', 'Kollege', 'Er ist ein Kollege'),
                    ],
                ],
                [
                    'titulo' => 'Vamos nos ver',
                    'teoria' => dteoria(
                        "together · visit · invite · next door\nCome in. They live next door.",
                        "juntos · visitar · invitar · al lado\nPasa. Viven al lado.",
                        "ensemble · visiter · inviter · à côté\nEntre. Ils habitent à côté.",
                        "insieme · visitare · invitare · accanto\nEntra. Abitano accanto.",
                        "zusammen · besuchen · einladen · nebenan\nKomm rein. Sie wohnen nebenan."
                    ),
                    'itens' => [
                        dlinha('juntos', 'vamos juntos', 'together', 'Let us go together', 'juntos', 'Vamos juntos', 'ensemble', 'Allons-y ensemble', 'insieme', 'Andiamo insieme', 'zusammen', 'Lass uns zusammen gehen'),
                        dlinha('visitar', 'vou visitar a vizinha', 'visit', 'I visit my neighbour', 'visitar', 'Visito a mi vecina', 'visiter', 'Je visite ma voisine', 'visitare', 'Visito la vicina', 'besuchen', 'Ich besuche die Nachbarin'),
                        dlinha('convidar', 'eu convido vocês', 'invite', 'I invite you', 'invitar', 'Os invito', 'inviter', 'Je vous invite', 'invitare', 'Vi invito', 'einladen', 'Ich lade euch ein'),
                        dlinha('ao lado', 'eles moram ao lado', 'next door', 'They live next door', 'al lado', 'Viven al lado', 'à côté', 'Ils habitent à côté', 'accanto', 'Abitano accanto', 'nebenan', 'Sie wohnen nebenan'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Avós e primos',
            'desc' => 'Família estendida além de pai, mãe e irmãos.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'A família grande',
                    'teoria' => dteoria(
                        "grandmother · grandfather · uncle · aunt\nMy grandmother is seventy.",
                        "abuela · abuelo · tío · tía\nMi abuela tiene setenta años.",
                        "grand-mère · grand-père · oncle · tante\nMa grand-mère a soixante-dix ans.",
                        "nonna · nonno · zio · zia\nMia nonna ha settant’anni.",
                        "Oma · Opa · Onkel · Tante\nMeine Oma ist siebzig."
                    ),
                    'itens' => [
                        dlinha('avó', 'minha avó tem setenta anos', 'grandmother', 'My grandmother is seventy', 'abuela', 'Mi abuela tiene setenta', 'grand-mère', 'Ma grand-mère a soixante-dix ans', 'nonna', 'Mia nonna ha settanta anni', 'Oma', 'Meine Oma ist siebzig'),
                        dlinha('avô', 'meu avô mora longe', 'grandfather', 'My grandfather lives far', 'abuelo', 'Mi abuelo vive lejos', 'grand-père', 'Mon grand-père habite loin', 'nonno', 'Mio nonno vive lontano', 'Opa', 'Mein Opa wohnt weit weg'),
                        dlinha('tio', 'meu tio é cozinheiro', 'uncle', 'My uncle is a cook', 'tío', 'Mi tío es cocinero', 'oncle', 'Mon oncle est cuisinier', 'zio', 'Mio zio è cuoco', 'Onkel', 'Mein Onkel ist Koch'),
                        dlinha('tia', 'minha tia mora aqui', 'aunt', 'My aunt lives here', 'tía', 'Mi tía vive aquí', 'tante', 'Ma tante habite ici', 'zia', 'Mia zia vive qui', 'Tante', 'Meine Tante wohnt hier'),
                    ],
                ],
                [
                    'titulo' => 'Primos',
                    'teoria' => dteoria(
                        "cousin · nephew · niece · relatives\nI have two cousins in Recife.",
                        "primo · sobrino · sobrina · parientes\nTengo dos primos en Recife.",
                        "cousin · neveu · nièce · famille\nJ’ai deux cousins à Recife.",
                        "cugino · nipote · nipote · parenti\nHo due cugini a Recife.",
                        "Cousin · Neffe · Nichte · Verwandte\nIch habe zwei Cousins in Recife."
                    ),
                    'itens' => [
                        dlinha('primo', 'tenho dois primos', 'cousin', 'I have two cousins', 'primo', 'Tengo dos primos', 'cousin', 'J ai deux cousins', 'cugino', 'Ho due cugini', 'Cousin', 'Ich habe zwei Cousins'),
                        dlinha('sobrinho', 'este é meu sobrinho', 'nephew', 'This is my nephew', 'sobrino', 'Este es mi sobrino', 'neveu', 'Voici mon neveu', 'nipote', 'Questo è mio nipote', 'Neffe', 'Das ist mein Neffe'),
                        dlinha('sobrinha', 'ela é minha sobrinha', 'niece', 'She is my niece', 'sobrina', 'Ella es mi sobrina', 'nièce', 'Elle est ma nièce', 'nipote', 'Lei è mia nipote', 'Nichte', 'Sie ist meine Nichte'),
                        dlinha('parentes', 'os parentes chegam amanhã', 'relatives', 'The relatives arrive tomorrow', 'parientes', 'Los parientes llegan mañana', 'famille', 'La famille arrive demain', 'parenti', 'I parenti arrivano domani', 'Verwandte', 'Die Verwandten kommen morgen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Sapatos e casaco',
            'desc' => 'Peças de roupa para vestir e pedir o tamanho.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que visto',
                    'teoria' => dteoria(
                        "shoes · coat · hat · trousers\nI wear a coat in winter. These shoes are small.",
                        "zapatos · abrigo · sombrero · pantalones\nLlevo un abrigo en invierno. Estos zapatos son pequeños.",
                        "chaussures · manteau · chapeau · pantalon\nJe porte un manteau en hiver. Ces chaussures sont petites.",
                        "scarpe · cappotto · cappello · pantaloni\nIndosso un cappotto in inverno. Queste scarpe sono piccole.",
                        "Schuhe · Mantel · Hut · Hose\nIch trage im Winter einen Mantel. Diese Schuhe sind klein."
                    ),
                    'itens' => [
                        dlinha('sapatos', 'estes sapatos são pequenos', 'shoes', 'These shoes are small', 'zapatos', 'Estos zapatos son pequeños', 'chaussures', 'Ces chaussures sont petites', 'scarpe', 'Queste scarpe sono piccole', 'Schuhe', 'Diese Schuhe sind klein'),
                        dlinha('casaco', 'visto um casaco no inverno', 'coat', 'I wear a coat in winter', 'abrigo', 'Llevo un abrigo en invierno', 'manteau', 'Je porte un manteau en hiver', 'cappotto', 'Indosso un cappotto in inverno', 'Mantel', 'Ich trage im Winter einen Mantel'),
                        dlinha('chapéu', 'onde está o chapéu', 'hat', 'Where is my hat', 'sombrero', 'Dónde está el sombrero', 'chapeau', 'Où est mon chapeau', 'cappello', 'Dov è il cappello', 'Hut', 'Wo ist der Hut'),
                        dlinha('calça', 'esta calça é preta', 'trousers', 'These trousers are black', 'pantalones', 'Estos pantalones son negros', 'pantalon', 'Ce pantalon est noir', 'pantaloni', 'Questi pantaloni sono neri', 'Hose', 'Die Hose ist schwarz'),
                    ],
                ],
                [
                    'titulo' => 'Tamanho',
                    'teoria' => dteoria(
                        "size · too small · too big · fit\nDo you have size 40? It does not fit.",
                        "talla · pequeño · grande · queda\n¿Tienen talla 40? No me queda.",
                        "taille · trop petit · trop grand · va\nVous avez la taille 40 ? Ça ne va pas.",
                        "taglia · troppo piccolo · troppo grande · sta\nAvete la taglia 40? Non sta bene.",
                        "Größe · zu klein · zu groß · passt\nHaben Sie Größe 40? Es passt nicht."
                    ),
                    'itens' => [
                        dlinha('tamanho', 'vocês têm o tamanho quarenta', 'size', 'Do you have size forty', 'talla', 'Tienen talla cuarenta', 'taille', 'Vous avez la taille quarante', 'taglia', 'Avete la taglia quaranta', 'Größe', 'Haben Sie Größe vierzig'),
                        dlinha('pequeno demais', 'está pequeno demais', 'too small', 'It is too small', 'demasiado pequeño', 'Es demasiado pequeño', 'trop petit', 'C est trop petit', 'troppo piccolo', 'È troppo piccolo', 'zu klein', 'Es ist zu klein'),
                        dlinha('grande demais', 'está grande demais', 'too big', 'It is too big', 'demasiado grande', 'Es demasiado grande', 'trop grand', 'C est trop grand', 'troppo grande', 'È troppo grande', 'zu groß', 'Es ist zu groß'),
                        dlinha('serve / cabe', 'não serve', 'fit', 'It does not fit', 'queda', 'No me queda', 'va', 'Ça ne va pas', 'sta', 'Non sta bene', 'passt', 'Es passt nicht'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Na padaria',
            'desc' => 'Pão do dia, fila e o pedido da manhã.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que tem hoje',
                    'teoria' => dteoria(
                        "bakery · bread · cake · fresh\nIs the bread fresh? One cake, please.",
                        "panadería · pan · pastel · fresco\n¿El pan está fresco? Un pastel, por favor.",
                        "boulangerie · pain · gâteau · frais\nLe pain est frais ? Un gâteau, s’il vous plaît.",
                        "panetteria · pane · torta · fresco\nIl pane è fresco? Una torta, per favore.",
                        "Bäckerei · Brot · Kuchen · frisch\nIst das Brot frisch? Einen Kuchen, bitte."
                    ),
                    'itens' => [
                        dlinha('padaria', 'a padaria abre às seis', 'bakery', 'The bakery opens at six', 'panadería', 'La panadería abre a las seis', 'boulangerie', 'La boulangerie ouvre à six heures', 'panetteria', 'La panetteria apre alle sei', 'Bäckerei', 'Die Bäckerei öffnet um sechs'),
                        dlinha('pão', 'o pão está fresco', 'bread', 'The bread is fresh', 'pan', 'El pan está fresco', 'pain', 'Le pain est frais', 'pane', 'Il pane è fresco', 'Brot', 'Das Brot ist frisch'),
                        dlinha('bolo', 'um bolo por favor', 'cake', 'One cake please', 'pastel', 'Un pastel por favor', 'gâteau', 'Un gâteau s il vous plaît', 'torta', 'Una torta per favore', 'Kuchen', 'Einen Kuchen bitte'),
                        dlinha('fresco', 'está fresco hoje', 'fresh', 'It is fresh today', 'fresco', 'Está fresco hoy', 'frais', 'C est frais aujourd hui', 'fresco', 'È fresco oggi', 'frisch', 'Es ist heute frisch'),
                    ],
                ],
                [
                    'titulo' => 'O pedido',
                    'teoria' => dteoria(
                        "loaf · slice · butter · jam\nTwo slices of bread with butter, please.",
                        "barra · rebanada · mantequilla · mermelada\nDos rebanadas de pan con mantequilla, por favor.",
                        "baguette · tranche · beurre · confiture\nDeux tranches de pain avec du beurre, s’il vous plaît.",
                        "filone · fetta · burro · marmellata\nDue fette di pane con burro, per favore.",
                        "Laib · Scheibe · Butter · Marmelade\nZwei Scheiben Brot mit Butter, bitte."
                    ),
                    'itens' => [
                        dlinha('pão inteiro', 'um pão inteiro por favor', 'loaf', 'One loaf please', 'barra', 'Una barra por favor', 'baguette', 'Une baguette s il vous plaît', 'filone', 'Un filone per favore', 'Laib', 'Ein Laib bitte'),
                        dlinha('fatia', 'duas fatias de pão', 'slice', 'Two slices of bread', 'rebanada', 'Dos rebanadas de pan', 'tranche', 'Deux tranches de pain', 'fetta', 'Due fette di pane', 'Scheibe', 'Zwei Scheiben Brot'),
                        dlinha('manteiga', 'pão com manteiga', 'butter', 'Bread with butter', 'mantequilla', 'Pan con mantequilla', 'beurre', 'Pain avec du beurre', 'burro', 'Pane con burro', 'Butter', 'Brot mit Butter'),
                        dlinha('geleia', 'quero geleia', 'jam', 'I want jam', 'mermelada', 'Quiero mermelada', 'confiture', 'Je veux de la confiture', 'marmellata', 'Voglio la marmellata', 'Marmelade', 'Ich möchte Marmelade'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Sucos e chás',
            'desc' => 'Bebidas além do café do bar.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que você bebe',
                    'teoria' => dteoria(
                        "juice · tea · milk · lemonade\nI drink tea in the morning. No milk, please.",
                        "zumo · té · leche · limonada\nBebo té por la mañana. Sin leche, por favor.",
                        "jus · thé · lait · limonade\nJe bois du thé le matin. Sans lait, s’il vous plaît.",
                        "succo · tè · latte · limonata\nBevo il tè al mattino. Senza latte, per favore.",
                        "Saft · Tee · Milch · Limonade\nIch trinke morgens Tee. Keine Milch, bitte."
                    ),
                    'itens' => [
                        dlinha('suco', 'quero um suco de laranja', 'juice', 'I want orange juice', 'zumo', 'Quiero zumo de naranja', 'jus', 'Je veux du jus d orange', 'succo', 'Voglio succo d arancia', 'Saft', 'Ich möchte Orangensaft'),
                        dlinha('chá', 'bebo chá de manhã', 'tea', 'I drink tea in the morning', 'té', 'Bebo té por la mañana', 'thé', 'Je bois du thé le matin', 'tè', 'Bevo il tè al mattino', 'Tee', 'Ich trinke morgens Tee'),
                        dlinha('leite', 'sem leite por favor', 'milk', 'No milk please', 'leche', 'Sin leche por favor', 'lait', 'Sans lait s il vous plaît', 'latte', 'Senza latte per favore', 'Milch', 'Keine Milch bitte'),
                        dlinha('limonada', 'uma limonada gelada', 'lemonade', 'A cold lemonade', 'limonada', 'Una limonada fría', 'limonade', 'Une limonade froide', 'limonata', 'Una limonata fredda', 'Limonade', 'Eine kalte Limonade'),
                    ],
                ],
                [
                    'titulo' => 'Com ou sem',
                    'teoria' => dteoria(
                        "with ice · without sugar · still · sparkling\nSparkling water without ice, please.",
                        "con hielo · sin azúcar · sin gas · con gas\nAgua con gas sin hielo, por favor.",
                        "avec glace · sans sucre · plate · gazeuse\nDe l’eau gazeuse sans glaçons, s’il vous plaît.",
                        "con ghiaccio · senza zucchero · naturale · frizzante\nAcqua frizzante senza ghiaccio, per favore.",
                        "mit Eis · ohne Zucker · still · mit Kohlensäure\nSprudelwasser ohne Eis, bitte."
                    ),
                    'itens' => [
                        dlinha('com gelo', 'com gelo por favor', 'with ice', 'With ice please', 'con hielo', 'Con hielo por favor', 'avec glace', 'Avec des glaçons s il vous plaît', 'con ghiaccio', 'Con ghiaccio per favore', 'mit Eis', 'Mit Eis bitte'),
                        dlinha('sem açúcar', 'chá sem açúcar', 'without sugar', 'Tea without sugar', 'sin azúcar', 'Té sin azúcar', 'sans sucre', 'Thé sans sucre', 'senza zucchero', 'Tè senza zucchero', 'ohne Zucker', 'Tee ohne Zucker'),
                        dlinha('sem gás', 'água sem gás', 'still', 'Still water please', 'sin gas', 'Agua sin gas', 'plate', 'Eau plate s il vous plaît', 'naturale', 'Acqua naturale', 'still', 'Stilles Wasser bitte'),
                        dlinha('com gás', 'água com gás', 'sparkling', 'Sparkling water please', 'con gas', 'Agua con gas', 'gazeuse', 'Eau gazeuse s il vous plaît', 'frizzante', 'Acqua frizzante', 'mit Kohlensäure', 'Sprudelwasser bitte'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Verduras',
            'desc' => 'Hortaliças e o pedido na feira.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Na feira',
                    'teoria' => dteoria(
                        "tomato · onion · potato · carrot\nOne kilo of tomatoes, please.",
                        "tomate · cebolla · patata · zanahoria\nUn kilo de tomates, por favor.",
                        "tomate · oignon · pomme de terre · carotte\nUn kilo de tomates, s’il vous plaît.",
                        "pomodoro · cipolla · patata · carota\nUn chilo di pomodori, per favore.",
                        "Tomate · Zwiebel · Kartoffel · Karotte\nEin Kilo Tomaten, bitte."
                    ),
                    'itens' => [
                        dlinha('tomate', 'um quilo de tomate', 'tomato', 'One kilo of tomatoes', 'tomate', 'Un kilo de tomates', 'tomate', 'Un kilo de tomates', 'pomodoro', 'Un chilo di pomodori', 'Tomate', 'Ein Kilo Tomaten'),
                        dlinha('cebola', 'duas cebolas por favor', 'onion', 'Two onions please', 'cebolla', 'Dos cebollas por favor', 'oignon', 'Deux oignons s il vous plaît', 'cipolla', 'Due cipolle per favore', 'Zwiebel', 'Zwei Zwiebeln bitte'),
                        dlinha('batata', 'as batatas estão baratas', 'potato', 'The potatoes are cheap', 'patata', 'Las patatas están baratas', 'pomme de terre', 'Les pommes de terre sont pas chères', 'patata', 'Le patate sono economiche', 'Kartoffel', 'Die Kartoffeln sind günstig'),
                        dlinha('cenoura', 'gosto de cenoura', 'carrot', 'I like carrots', 'zanahoria', 'Me gustan las zanahorias', 'carotte', 'J aime les carottes', 'carota', 'Mi piacciono le carote', 'Karotte', 'Ich mag Karotten'),
                    ],
                ],
                [
                    'titulo' => 'Quanto leva',
                    'teoria' => dteoria(
                        "kilo · half · ripe · organic\nHalf a kilo of ripe tomatoes.",
                        "kilo · medio · maduro · ecológico\nMedio kilo de tomates maduros.",
                        "kilo · demi · mûr · bio\nUn demi-kilo de tomates mûres.",
                        "chilo · mezzo · maturo · biologico\nMezzo chilo di pomodori maturi.",
                        "Kilo · halb · reif · bio\nEin halbes Kilo reife Tomaten."
                    ),
                    'itens' => [
                        dlinha('quilo', 'um quilo por favor', 'kilo', 'One kilo please', 'kilo', 'Un kilo por favor', 'kilo', 'Un kilo s il vous plaît', 'chilo', 'Un chilo per favore', 'Kilo', 'Ein Kilo bitte'),
                        dlinha('meio', 'meio quilo de cebola', 'half', 'Half a kilo of onions', 'medio', 'Medio kilo de cebollas', 'demi', 'Un demi-kilo d oignons', 'mezzo', 'Mezzo chilo di cipolle', 'halb', 'Ein halbes Kilo Zwiebeln'),
                        dlinha('maduro', 'estão maduros', 'ripe', 'They are ripe', 'maduro', 'Están maduros', 'mûr', 'Ils sont mûrs', 'maturo', 'Sono maturi', 'reif', 'Sie sind reif'),
                        dlinha('orgânico', 'é orgânico', 'organic', 'It is organic', 'ecológico', 'Es ecológico', 'bio', 'C est bio', 'biologico', 'È biologico', 'bio', 'Es ist bio'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Aniversário',
            'desc' => 'Data, presente e um convite de festa.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Quando é',
                    'teoria' => dteoria(
                        "birthday · present · cake · party\nMy birthday is in March. This present is for you.",
                        "cumpleaños · regalo · tarta · fiesta\nMi cumpleaños es en marzo. Este regalo es para ti.",
                        "anniversaire · cadeau · gâteau · fête\nMon anniversaire est en mars. Ce cadeau est pour toi.",
                        "compleanno · regalo · torta · festa\nIl mio compleanno è a marzo. Questo regalo è per te.",
                        "Geburtstag · Geschenk · Kuchen · Party\nMein Geburtstag ist im März. Dieses Geschenk ist für dich."
                    ),
                    'itens' => [
                        dlinha('aniversário', 'meu aniversário é em março', 'birthday', 'My birthday is in March', 'cumpleaños', 'Mi cumpleaños es en marzo', 'anniversaire', 'Mon anniversaire est en mars', 'compleanno', 'Il mio compleanno è a marzo', 'Geburtstag', 'Mein Geburtstag ist im März'),
                        dlinha('presente', 'este presente é para você', 'present', 'This present is for you', 'regalo', 'Este regalo es para ti', 'cadeau', 'Ce cadeau est pour toi', 'regalo', 'Questo regalo è per te', 'Geschenk', 'Dieses Geschenk ist für dich'),
                        dlinha('bolo', 'o bolo está gostoso', 'cake', 'The cake is good', 'tarta', 'La tarta está rica', 'gâteau', 'Le gâteau est bon', 'torta', 'La torta è buona', 'Kuchen', 'Der Kuchen ist lecker'),
                        dlinha('festa', 'a festa é às oito', 'party', 'The party is at eight', 'fiesta', 'La fiesta es a las ocho', 'fête', 'La fête est à vingt heures', 'festa', 'La festa è alle otto', 'Party', 'Die Party ist um acht'),
                    ],
                ],
                [
                    'titulo' => 'O convite',
                    'teoria' => dteoria(
                        "come · bring · happy birthday · blow\nCome at seven. Happy birthday!",
                        "ven · trae · feliz cumpleaños · sopla\nVen a las siete. ¡Feliz cumpleaños!",
                        "viens · apporte · joyeux anniversaire · souffle\nViens à dix-neuf heures. Joyeux anniversaire !",
                        "vieni · porta · buon compleanno · soffia\nVieni alle sette. Buon compleanno!",
                        "komm · mitbringen · alles Gute · pusten\nKomm um sieben. Alles Gute zum Geburtstag!"
                    ),
                    'itens' => [
                        dlinha('venha', 'venha às sete', 'come', 'Come at seven', 'ven', 'Ven a las siete', 'viens', 'Viens à dix-neuf heures', 'vieni', 'Vieni alle sette', 'komm', 'Komm um sieben'),
                        dlinha('traga', 'traga um amigo', 'bring', 'Bring a friend', 'trae', 'Trae un amigo', 'apporte', 'Apporte un ami', 'porta', 'Porta un amico', 'mitbringen', 'Bring einen Freund mit'),
                        dlinha('parabéns', 'parabéns pelo aniversário', 'happy birthday', 'Happy birthday', 'feliz cumpleaños', 'Feliz cumpleaños', 'joyeux anniversaire', 'Joyeux anniversaire', 'buon compleanno', 'Buon compleanno', 'alles Gute', 'Alles Gute zum Geburtstag'),
                        dlinha('soprar', 'sopre as velas', 'blow', 'Blow out the candles', 'sopla', 'Sopla las velas', 'souffle', 'Souffle les bougies', 'soffia', 'Soffia le candeline', 'pusten', 'Pust die Kerzen aus'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'As estações',
            'desc' => 'Primavera, verão, outono e inverno.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Quatro estações',
                    'teoria' => dteoria(
                        "spring · summer · autumn · winter\nSummer is hot. Winter is cold here.",
                        "primavera · verano · otoño · invierno\nEl verano es caluroso. El invierno es frío aquí.",
                        "printemps · été · automne · hiver\nL’été est chaud. L’hiver est froid ici.",
                        "primavera · estate · autunno · inverno\nL’estate è calda. L’inverno è freddo qui.",
                        "Frühling · Sommer · Herbst · Winter\nDer Sommer ist heiß. Der Winter ist hier kalt."
                    ),
                    'itens' => [
                        dlinha('primavera', 'a primavera é bonita', 'spring', 'Spring is beautiful', 'primavera', 'La primavera es bonita', 'printemps', 'Le printemps est beau', 'primavera', 'La primavera è bella', 'Frühling', 'Der Frühling ist schön'),
                        dlinha('verão', 'o verão é quente', 'summer', 'Summer is hot', 'verano', 'El verano es caluroso', 'été', 'L été est chaud', 'estate', 'L estate è calda', 'Sommer', 'Der Sommer ist heiß'),
                        dlinha('outono', 'o outono começa em março', 'autumn', 'Autumn starts in March', 'otoño', 'El otoño empieza en marzo', 'automne', 'L automne commence en mars', 'autunno', 'L autunno inizia a marzo', 'Herbst', 'Der Herbst beginnt im März'),
                        dlinha('inverno', 'o inverno é frio aqui', 'winter', 'Winter is cold here', 'invierno', 'El invierno es frío aquí', 'hiver', 'L hiver est froid ici', 'inverno', 'L inverno è freddo qui', 'Winter', 'Der Winter ist hier kalt'),
                    ],
                ],
                [
                    'titulo' => 'O que vestir',
                    'teoria' => dteoria(
                        "hot · cold · cool · warm\nIt is cool in spring. Take a warm jumper.",
                        "calor · frío · fresco · cálido\nHace fresco en primavera. Lleva un jersey cálido.",
                        "chaud · froid · frais · doux\nIl fait frais au printemps. Prends un pull chaud.",
                        "caldo · freddo · fresco · mite\nFa fresco in primavera. Porta un maglione caldo.",
                        "heiß · kalt · kühl · warm\nIm Frühling ist es kühl. Nimm einen warmen Pullover."
                    ),
                    'itens' => [
                        dlinha('quente', 'hoje está quente', 'hot', 'It is hot today', 'calor', 'Hace calor hoy', 'chaud', 'Il fait chaud aujourd hui', 'caldo', 'Fa caldo oggi', 'heiß', 'Es ist heute heiß'),
                        dlinha('frio', 'de inverno faz frio', 'cold', 'It is cold in winter', 'frío', 'Hace frío en invierno', 'froid', 'Il fait froid en hiver', 'freddo', 'Fa freddo in inverno', 'kalt', 'Im Winter ist es kalt'),
                        dlinha('fresco', 'na primavera está fresco', 'cool', 'It is cool in spring', 'fresco', 'Hace fresco en primavera', 'frais', 'Il fait frais au printemps', 'fresco', 'Fa fresco in primavera', 'kühl', 'Im Frühling ist es kühl'),
                        dlinha('ameno', 'o pulôver é quentinho', 'warm', 'Take a warm jumper', 'cálido', 'Lleva un jersey cálido', 'doux', 'Prends un pull chaud', 'mite', 'Porta un maglione caldo', 'warm', 'Nimm einen warmen Pullover'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'A pé e de táxi',
            'desc' => 'Meios simples: andar, bicicleta, táxi — sem metrô.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Como você vai',
                    'teoria' => dteoria(
                        "on foot · by taxi · by bike · by car\nI go on foot. She goes by taxi.",
                        "a pie · en taxi · en bici · en coche\nVoy a pie. Ella va en taxi.",
                        "à pied · en taxi · à vélo · en voiture\nJe vais à pied. Elle va en taxi.",
                        "a piedi · in taxi · in bici · in macchina\nVado a piedi. Lei va in taxi.",
                        "zu Fuß · mit dem Taxi · mit dem Rad · mit dem Auto\nIch gehe zu Fuß. Sie fährt mit dem Taxi."
                    ),
                    'itens' => [
                        dlinha('a pé', 'eu vou a pé', 'on foot', 'I go on foot', 'a pie', 'Voy a pie', 'à pied', 'Je vais à pied', 'a piedi', 'Vado a piedi', 'zu Fuß', 'Ich gehe zu Fuß'),
                        dlinha('de táxi', 'ela vai de táxi', 'by taxi', 'She goes by taxi', 'en taxi', 'Ella va en taxi', 'en taxi', 'Elle va en taxi', 'in taxi', 'Lei va in taxi', 'mit dem Taxi', 'Sie fährt mit dem Taxi'),
                        dlinha('de bicicleta', 'vou de bicicleta', 'by bike', 'I go by bike', 'en bici', 'Voy en bici', 'à vélo', 'Je vais à vélo', 'in bici', 'Vado in bici', 'mit dem Rad', 'Ich fahre mit dem Rad'),
                        dlinha('de carro', 'vamos de carro', 'by car', 'We go by car', 'en coche', 'Vamos en coche', 'en voiture', 'Nous allons en voiture', 'in macchina', 'Andiamo in macchina', 'mit dem Auto', 'Wir fahren mit dem Auto'),
                    ],
                ],
                [
                    'titulo' => 'Chamar um táxi',
                    'teoria' => dteoria(
                        "taxi · stop here · how much · keep the change\nStop here, please. How much is it?",
                        "taxi · pare aquí · cuánto · quédese el cambio\nPare aquí, por favor. ¿Cuánto es?",
                        "taxi · arrêtez ici · combien · gardez la monnaie\nArrêtez ici, s’il vous plaît. C’est combien ?",
                        "taxi · fermati qui · quanto · tenga il resto\nFermati qui, per favore. Quanto è?",
                        "Taxi · halten Sie hier · wie viel · behalten Sie das Wechselgeld\nHalten Sie hier, bitte. Wie viel kostet es?"
                    ),
                    'itens' => [
                        dlinha('táxi', 'chamo um táxi', 'taxi', 'I call a taxi', 'taxi', 'Llamo un taxi', 'taxi', 'J appelle un taxi', 'taxi', 'Chiamo un taxi', 'Taxi', 'Ich rufe ein Taxi'),
                        dlinha('pare aqui', 'pare aqui por favor', 'stop here', 'Stop here please', 'pare aquí', 'Pare aquí por favor', 'arrêtez ici', 'Arrêtez ici s il vous plaît', 'fermati qui', 'Fermati qui per favore', 'halten Sie hier', 'Halten Sie hier bitte'),
                        dlinha('quanto é', 'quanto é a corrida', 'how much', 'How much is it', 'cuánto', 'Cuánto es', 'combien', 'C est combien', 'quanto', 'Quanto è', 'wie viel', 'Wie viel kostet es'),
                        dlinha('fique com o troco', 'fique com o troco', 'keep the change', 'Keep the change', 'quédese el cambio', 'Quédese el cambio', 'gardez la monnaie', 'Gardez la monnaie', 'tenga il resto', 'Tenga il resto', 'behalten Sie das Wechselgeld', 'Behalten Sie das Wechselgeld'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Socorro',
            'desc' => 'Emergência: polícia, bombeiros e pedir ajuda.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Quem ligar',
                    'teoria' => dteoria(
                        "help · police · fire · ambulance\nCall the police. We need an ambulance.",
                        "ayuda · policía · bomberos · ambulancia\nLlama a la policía. Necesitamos una ambulancia.",
                        "aide · police · pompiers · ambulance\nAppelez la police. Nous avons besoin d’une ambulance.",
                        "aiuto · polizia · pompieri · ambulanza\nChiama la polizia. Ci serve un’ambulanza.",
                        "Hilfe · Polizei · Feuerwehr · Krankenwagen\nRufen Sie die Polizei. Wir brauchen einen Krankenwagen."
                    ),
                    'itens' => [
                        dlinha('ajuda', 'preciso de ajuda', 'help', 'I need help', 'ayuda', 'Necesito ayuda', 'aide', 'J ai besoin d aide', 'aiuto', 'Ho bisogno di aiuto', 'Hilfe', 'Ich brauche Hilfe'),
                        dlinha('polícia', 'ligue para a polícia', 'police', 'Call the police', 'policía', 'Llama a la policía', 'police', 'Appelez la police', 'polizia', 'Chiama la polizia', 'Polizei', 'Rufen Sie die Polizei'),
                        dlinha('bombeiros', 'chame os bombeiros', 'fire', 'Call the fire brigade', 'bomberos', 'Llama a los bomberos', 'pompiers', 'Appelez les pompiers', 'pompieri', 'Chiama i pompieri', 'Feuerwehr', 'Rufen Sie die Feuerwehr'),
                        dlinha('ambulância', 'precisamos de uma ambulância', 'ambulance', 'We need an ambulance', 'ambulancia', 'Necesitamos una ambulancia', 'ambulance', 'Nous avons besoin d une ambulance', 'ambulanza', 'Ci serve un ambulanza', 'Krankenwagen', 'Wir brauchen einen Krankenwagen'),
                    ],
                ],
                [
                    'titulo' => 'O que aconteceu',
                    'teoria' => dteoria(
                        "accident · thief · fire · hurt\nThere is an accident. Nobody is hurt.",
                        "accidente · ladrón · incendio · herido\nHay un accidente. Nadie está herido.",
                        "accident · voleur · incendie · blessé\nIl y a un accident. Personne n’est blessé.",
                        "incidente · ladro · incendio · ferito\nC’è un incidente. Nessuno è ferito.",
                        "Unfall · Dieb · Feuer · verletzt\nEs gibt einen Unfall. Niemand ist verletzt."
                    ),
                    'itens' => [
                        dlinha('acidente', 'há um acidente', 'accident', 'There is an accident', 'accidente', 'Hay un accidente', 'accident', 'Il y a un accident', 'incidente', 'C è un incidente', 'Unfall', 'Es gibt einen Unfall'),
                        dlinha('ladrão', 'um ladrão saiu correndo', 'thief', 'A thief ran away', 'ladrón', 'Un ladrón salió corriendo', 'voleur', 'Un voleur s est enfui', 'ladro', 'Un ladro è scappato', 'Dieb', 'Ein Dieb ist weggelaufen'),
                        dlinha('incêndio', 'há um incêndio', 'fire', 'There is a fire', 'incendio', 'Hay un incendio', 'incendie', 'Il y a un incendie', 'incendio', 'C è un incendio', 'Feuer', 'Es brennt'),
                        dlinha('ferido', 'ninguém está ferido', 'hurt', 'Nobody is hurt', 'herido', 'Nadie está herido', 'blessé', 'Personne n est blessé', 'ferito', 'Nessuno è ferito', 'verletzt', 'Niemand ist verletzt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Celular e wifi',
            'desc' => 'Carregar o telefone e pedir a senha da rede.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Sem bateria',
                    'teoria' => dteoria(
                        "phone · battery · charger · wifi\nMy phone has no battery. Is there wifi here?",
                        "móvil · batería · cargador · wifi\nMi móvil no tiene batería. ¿Hay wifi aquí?",
                        "téléphone · batterie · chargeur · wifi\nMon téléphone n’a plus de batterie. Il y a du wifi ici ?",
                        "telefono · batteria · caricatore · wifi\nIl telefono non ha batteria. C’è il wifi qui?",
                        "Handy · Akku · Ladegerät · WLAN\nMein Handy hat keinen Akku. Gibt es hier WLAN?"
                    ),
                    'itens' => [
                        dlinha('celular', 'meu celular está desligado', 'phone', 'My phone is off', 'móvil', 'Mi móvil está apagado', 'téléphone', 'Mon téléphone est éteint', 'telefono', 'Il telefono è spento', 'Handy', 'Mein Handy ist aus'),
                        dlinha('bateria', 'não tem bateria', 'battery', 'There is no battery', 'batería', 'No tiene batería', 'batterie', 'Il n y a plus de batterie', 'batteria', 'Non c è batteria', 'Akku', 'Der Akku ist leer'),
                        dlinha('carregador', 'posso usar o carregador', 'charger', 'Can I use the charger', 'cargador', 'Puedo usar el cargador', 'chargeur', 'Je peux utiliser le chargeur', 'caricatore', 'Posso usare il caricatore', 'Ladegerät', 'Darf ich das Ladegerät benutzen'),
                        dlinha('wifi', 'tem wifi aqui', 'wifi', 'Is there wifi here', 'wifi', 'Hay wifi aquí', 'wifi', 'Il y a du wifi ici', 'wifi', 'C è il wifi qui', 'WLAN', 'Gibt es hier WLAN'),
                    ],
                ],
                [
                    'titulo' => 'A senha',
                    'teoria' => dteoria(
                        "password · network · signal · connected\nWhat is the wifi password? I am connected now.",
                        "contraseña · red · señal · conectado\n¿Cuál es la contraseña del wifi? Ya estoy conectado.",
                        "mot de passe · réseau · signal · connecté\nQuel est le mot de passe du wifi ? Je suis connecté.",
                        "password · rete · segnale · connesso\nQual è la password del wifi? Sono connesso.",
                        "Passwort · Netz · Empfang · verbunden\nWie ist das WLAN-Passwort? Ich bin verbunden."
                    ),
                    'itens' => [
                        dlinha('senha', 'qual é a senha do wifi', 'password', 'What is the wifi password', 'contraseña', 'Cuál es la contraseña del wifi', 'mot de passe', 'Quel est le mot de passe du wifi', 'password', 'Qual è la password del wifi', 'Passwort', 'Wie ist das WLAN-Passwort'),
                        dlinha('rede', 'a rede está aberta', 'network', 'The network is open', 'red', 'La red está abierta', 'réseau', 'Le réseau est ouvert', 'rete', 'La rete è aperta', 'Netz', 'Das Netz ist offen'),
                        dlinha('sinal', 'o sinal é fraco', 'signal', 'The signal is weak', 'señal', 'La señal es débil', 'signal', 'Le signal est faible', 'segnale', 'Il segnale è debole', 'Empfang', 'Der Empfang ist schwach'),
                        dlinha('conectado', 'já estou conectado', 'connected', 'I am connected now', 'conectado', 'Ya estoy conectado', 'connecté', 'Je suis connecté', 'connesso', 'Sono connesso', 'verbunden', 'Ich bin verbunden'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Na praia',
            'desc' => 'Sol, toalha e um banho de mar simples.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que levar',
                    'teoria' => dteoria(
                        "beach · towel · sunscreen · swimsuit\nI put sunscreen on. Where is my towel?",
                        "playa · toalla · protector · bañador\nMe pongo protector. ¿Dónde está mi toalla?",
                        "plage · serviette · crème solaire · maillot\nJe mets de la crème solaire. Où est ma serviette ?",
                        "spiaggia · asciugamano · crema · costume\nMetto la crema. Dov’è l’asciugamano?",
                        "Strand · Handtuch · Sonnencreme · Badeanzug\nIch creme mich ein. Wo ist mein Handtuch?"
                    ),
                    'itens' => [
                        dlinha('praia', 'vamos à praia', 'beach', 'We go to the beach', 'playa', 'Vamos a la playa', 'plage', 'Nous allons à la plage', 'spiaggia', 'Andiamo in spiaggia', 'Strand', 'Wir gehen an den Strand'),
                        dlinha('toalha', 'onde está a toalha', 'towel', 'Where is my towel', 'toalla', 'Dónde está mi toalla', 'serviette', 'Où est ma serviette', 'asciugamano', 'Dov è l asciugamano', 'Handtuch', 'Wo ist mein Handtuch'),
                        dlinha('protetor', 'passo protetor', 'sunscreen', 'I put sunscreen on', 'protector', 'Me pongo protector', 'crème solaire', 'Je mets de la crème solaire', 'crema', 'Metto la crema', 'Sonnencreme', 'Ich creme mich ein'),
                        dlinha('maiô / sunga', 'o maiô está na bolsa', 'swimsuit', 'The swimsuit is in the bag', 'bañador', 'El bañador está en la bolsa', 'maillot', 'Le maillot est dans le sac', 'costume', 'Il costume è nella borsa', 'Badeanzug', 'Der Badeanzug ist in der Tasche'),
                    ],
                ],
                [
                    'titulo' => 'No mar',
                    'teoria' => dteoria(
                        "swim · wave · sand · shade\nThe waves are small. Let us sit in the shade.",
                        "nadar · ola · arena · sombra\nLas olas son pequeñas. Sentémonos a la sombra.",
                        "nager · vague · sable · ombre\nLes vagues sont petites. Asseyons-nous à l’ombre.",
                        "nuotare · onda · sabbia · ombra\nLe onde sono piccole. Sediamoci all’ombra.",
                        "schwimmen · Welle · Sand · Schatten\nDie Wellen sind klein. Setzen wir uns in den Schatten."
                    ),
                    'itens' => [
                        dlinha('nadar', 'eu nado de manhã', 'swim', 'I swim in the morning', 'nadar', 'Nado por la mañana', 'nager', 'Je nage le matin', 'nuotare', 'Nuoto al mattino', 'schwimmen', 'Ich schwimme am Morgen'),
                        dlinha('onda', 'as ondas são pequenas', 'wave', 'The waves are small', 'ola', 'Las olas son pequeñas', 'vague', 'Les vagues sont petites', 'onda', 'Le onde sono piccole', 'Welle', 'Die Wellen sind klein'),
                        dlinha('areia', 'a areia está quente', 'sand', 'The sand is hot', 'arena', 'La arena está caliente', 'sable', 'Le sable est chaud', 'sabbia', 'La sabbia è calda', 'Sand', 'Der Sand ist heiß'),
                        dlinha('sombra', 'vamos sentar na sombra', 'shade', 'Let us sit in the shade', 'sombra', 'Sentémonos a la sombra', 'ombre', 'Asseyons-nous à l ombre', 'ombra', 'Sediamoci all ombra', 'Schatten', 'Setzen wir uns in den Schatten'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Cedo e atrasado',
            'desc' => 'Pontualidade: cedo, no horário, atrasado.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'No horário',
                    'teoria' => dteoria(
                        "early · on time · late · hurry\nI am early today. Don’t be late.",
                        "temprano · a tiempo · tarde · date prisa\nHoy llego temprano. No llegues tarde.",
                        "tôt · à l’heure · en retard · dépêche-toi\nJe suis en avance. Ne sois pas en retard.",
                        "presto · in orario · in ritardo · sbrigati\nOggi sono in anticipo. Non arrivare in ritardo.",
                        "früh · pünktlich · spät · beeil dich\nIch bin heute früh. Komm nicht zu spät."
                    ),
                    'itens' => [
                        dlinha('cedo', 'hoje cheguei cedo', 'early', 'I am early today', 'temprano', 'Hoy llego temprano', 'tôt', 'Je suis en avance', 'presto', 'Oggi sono in anticipo', 'früh', 'Ich bin heute früh'),
                        dlinha('no horário', 'o trem chega no horário', 'on time', 'The train is on time', 'a tiempo', 'El tren llega a tiempo', 'à l heure', 'Le train est à l heure', 'in orario', 'Il treno è in orario', 'pünktlich', 'Der Zug ist pünktlich'),
                        dlinha('atrasado', 'não se atrase', 'late', 'Do not be late', 'tarde', 'No llegues tarde', 'en retard', 'Ne sois pas en retard', 'in ritardo', 'Non arrivare in ritardo', 'spät', 'Komm nicht zu spät'),
                        dlinha('se apresse', 'se apresse por favor', 'hurry', 'Please hurry', 'date prisa', 'Date prisa por favor', 'dépêche-toi', 'Dépêche-toi s il te plaît', 'sbrigati', 'Sbrigati per favore', 'beeil dich', 'Beeil dich bitte'),
                    ],
                ],
                [
                    'titulo' => 'Esperar um pouco',
                    'teoria' => dteoria(
                        "wait · five minutes · already · still\nWait five minutes. She is still at home.",
                        "espera · cinco minutos · ya · todavía\nEspera cinco minutos. Todavía está en casa.",
                        "attends · cinq minutes · déjà · encore\nAttends cinq minutes. Elle est encore à la maison.",
                        "aspetta · cinque minuti · già · ancora\nAspetta cinque minuti. È ancora a casa.",
                        "warte · fünf Minuten · schon · noch\nWarte fünf Minuten. Sie ist noch zu Hause."
                    ),
                    'itens' => [
                        dlinha('espere', 'espere cinco minutos', 'wait', 'Wait five minutes', 'espera', 'Espera cinco minutos', 'attends', 'Attends cinq minutes', 'aspetta', 'Aspetta cinque minuti', 'warte', 'Warte fünf Minuten'),
                        dlinha('cinco minutos', 'só cinco minutos', 'five minutes', 'Just five minutes', 'cinco minutos', 'Solo cinco minutos', 'cinq minutes', 'Juste cinq minutes', 'cinque minuti', 'Solo cinque minuti', 'fünf Minuten', 'Nur fünf Minuten'),
                        dlinha('já', 'ele já saiu', 'already', 'He already left', 'ya', 'Él ya salió', 'déjà', 'Il est déjà parti', 'già', 'Lui è già uscito', 'schon', 'Er ist schon gegangen'),
                        dlinha('ainda', 'ela ainda está em casa', 'still', 'She is still at home', 'todavía', 'Todavía está en casa', 'encore', 'Elle est encore à la maison', 'ancora', 'È ancora a casa', 'noch', 'Sie ist noch zu Hause'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Há e tem',
            'desc' => 'There is / there are para descrever um lugar.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que há aqui',
                    'teoria' => dteoria(
                        "there is · there are · some · any\nThere is a park here. There are some shops.",
                        "hay · hay (plural) · algunos · algún\nHay un parque aquí. Hay algunas tiendas.",
                        "il y a · il y a · quelques · aucun\nIl y a un parc ici. Il y a quelques magasins.",
                        "c’è · ci sono · alcuni · nessuno\nC’è un parco qui. Ci sono alcuni negozi.",
                        "es gibt · es gibt · einige · keine\nEs gibt einen Park hier. Es gibt einige Läden."
                    ),
                    'itens' => [
                        dlinha('há / tem', 'há um parque aqui', 'there is', 'There is a park here', 'hay un', 'Hay un parque aquí', 'il y a un', 'Il y a un parc ici', 'c è', 'C è un parco qui', 'es gibt einen', 'Es gibt einen Park hier'),
                        dlinha('há vários', 'há algumas lojas', 'there are', 'There are some shops', 'hay algunos', 'Hay algunas tiendas', 'il y a des', 'Il y a quelques magasins', 'ci sono', 'Ci sono alcuni negozi', 'es gibt einige', 'Es gibt einige Läden'),
                        dlinha('alguns', 'tenho alguns amigos', 'some', 'I have some friends', 'algunos', 'Tengo algunos amigos', 'quelques', 'J ai quelques amis', 'alcuni', 'Ho alcuni amici', 'einige', 'Ich habe einige Freunde'),
                        dlinha('nenhum / algum', 'não há nenhum táxi', 'any', 'There is not any taxi', 'ningún', 'No hay ningún taxi', 'aucun', 'Il n y a aucun taxi', 'nessuno', 'Non c è nessun taxi', 'keine', 'Es gibt kein Taxi'),
                    ],
                ],
                [
                    'titulo' => 'Tem ou não tem',
                    'teoria' => dteoria(
                        "is there · are there · no there isn’t · yes there are\nIs there a pharmacy? Yes, there is.",
                        "¿hay? · ¿hay? · no hay · sí hay\n¿Hay una farmacia? Sí, hay.",
                        "y a-t-il · y a-t-il · il n’y a pas · oui il y a\nY a-t-il une pharmacie ? Oui, il y a.",
                        "c’è · ci sono · non c’è · sì ci sono\nC’è una farmacia? Sì, c’è.",
                        "gibt es · gibt es · es gibt kein · ja es gibt\nGibt es eine Apotheke? Ja, es gibt eine."
                    ),
                    'itens' => [
                        dlinha('tem...?', 'tem uma farmácia', 'is there', 'Is there a pharmacy', 'hay', 'Hay una farmacia', 'y a-t-il', 'Y a-t-il une pharmacie', 'c è', 'C è una farmacia', 'gibt es', 'Gibt es eine Apotheke'),
                        dlinha('tem vários...?', 'tem bancos aqui', 'are there', 'Are there banks here', 'hay', 'Hay bancos aquí', 'y a-t-il', 'Y a-t-il des banques ici', 'ci sono', 'Ci sono banche qui', 'gibt es', 'Gibt es hier Banken'),
                        dlinha('não tem', 'não tem farmácia', 'no there isn’t', 'No there is not', 'no hay', 'No hay farmacia', 'il n y a pas', 'Il n y a pas de pharmacie', 'non c è', 'Non c è farmacia', 'es gibt kein', 'Es gibt keine Apotheke'),
                        dlinha('sim tem', 'sim tem duas', 'yes there are', 'Yes there are two', 'sí hay', 'Sí hay dos', 'oui il y a', 'Oui il y en a deux', 'sì ci sono', 'Sì ce ne sono due', 'ja es gibt', 'Ja es gibt zwei'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Matérias da escola',
            'desc' => 'Aulas, intervalo e o que você estuda.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O que você estuda',
                    'teoria' => dteoria(
                        "maths · history · science · art\nI like art. Maths is difficult.",
                        "mates · historia · ciencias · arte\nMe gusta el arte. Las mates son difíciles.",
                        "maths · histoire · sciences · arts\nJ’aime les arts. Les maths sont difficiles.",
                        "mate · storia · scienze · arte\nMi piace l’arte. La mate è difficile.",
                        "Mathe · Geschichte · Naturwissenschaften · Kunst\nIch mag Kunst. Mathe ist schwer."
                    ),
                    'itens' => [
                        dlinha('matemática', 'matemática é difícil', 'maths', 'Maths is difficult', 'mates', 'Las mates son difíciles', 'maths', 'Les maths sont difficiles', 'mate', 'La mate è difficile', 'Mathe', 'Mathe ist schwer'),
                        dlinha('história', 'gosto de história', 'history', 'I like history', 'historia', 'Me gusta la historia', 'histoire', 'J aime l histoire', 'storia', 'Mi piace la storia', 'Geschichte', 'Ich mag Geschichte'),
                        dlinha('ciências', 'ciências é à tarde', 'science', 'Science is in the afternoon', 'ciencias', 'Ciencias es por la tarde', 'sciences', 'Les sciences sont l après-midi', 'scienze', 'Scienze è di pomeriggio', 'Naturwissenschaften', 'Naturwissenschaften sind nachmittags'),
                        dlinha('artes', 'artes é minha matéria favorita', 'art', 'Art is my favourite subject', 'arte', 'El arte es mi materia favorita', 'arts', 'Les arts sont ma matière préférée', 'arte', 'L arte è la mia materia preferita', 'Kunst', 'Kunst ist mein Lieblingsfach'),
                    ],
                ],
                [
                    'titulo' => 'O intervalo',
                    'teoria' => dteoria(
                        "break · homework · exam · timetable\nWe have a break at ten. I have homework.",
                        "recreo · deberes · examen · horario\nTenemos recreo a las diez. Tengo deberes.",
                        "récréation · devoirs · examen · emploi du temps\nOn a récré à dix heures. J’ai des devoirs.",
                        "ricreazione · compiti · verifica · orario\nAbbiamo ricreazione alle dieci. Ho i compiti.",
                        "Pause · Hausaufgaben · Prüfung · Stundenplan\nWir haben um zehn Pause. Ich habe Hausaufgaben."
                    ),
                    'itens' => [
                        dlinha('intervalo', 'o intervalo é às dez', 'break', 'The break is at ten', 'recreo', 'El recreo es a las diez', 'récréation', 'La récré est à dix heures', 'ricreazione', 'La ricreazione è alle dieci', 'Pause', 'Die Pause ist um zehn'),
                        dlinha('dever de casa', 'tenho dever de casa', 'homework', 'I have homework', 'deberes', 'Tengo deberes', 'devoirs', 'J ai des devoirs', 'compiti', 'Ho i compiti', 'Hausaufgaben', 'Ich habe Hausaufgaben'),
                        dlinha('prova', 'a prova é na sexta', 'exam', 'The exam is on Friday', 'examen', 'El examen es el viernes', 'examen', 'L examen est vendredi', 'verifica', 'La verifica è venerdì', 'Prüfung', 'Die Prüfung ist am Freitag'),
                        dlinha('horário', 'o horário muda amanhã', 'timetable', 'The timetable changes tomorrow', 'horario', 'El horario cambia mañana', 'emploi du temps', 'L emploi du temps change demain', 'orario', 'L orario cambia domani', 'Stundenplan', 'Der Stundenplan ändert sich morgen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Jardim e garagem',
            'desc' => 'Espaços da casa além dos cômodos internos.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Fora de casa',
                    'teoria' => dteoria(
                        "garden · garage · balcony · stairs\nThe garden is small. The car is in the garage.",
                        "jardín · garaje · balcón · escaleras\nEl jardín es pequeño. El coche está en el garaje.",
                        "jardin · garage · balcon · escaliers\nLe jardin est petit. La voiture est dans le garage.",
                        "giardino · garage · balcone · scale\nIl giardino è piccolo. L’auto è nel garage.",
                        "Garten · Garage · Balkon · Treppe\nDer Garten ist klein. Das Auto ist in der Garage."
                    ),
                    'itens' => [
                        dlinha('jardim', 'o jardim é pequeno', 'garden', 'The garden is small', 'jardín', 'El jardín es pequeño', 'jardin', 'Le jardin est petit', 'giardino', 'Il giardino è piccolo', 'Garten', 'Der Garten ist klein'),
                        dlinha('garagem', 'o carro está na garagem', 'garage', 'The car is in the garage', 'garaje', 'El coche está en el garaje', 'garage', 'La voiture est dans le garage', 'garage', 'L auto è nel garage', 'Garage', 'Das Auto ist in der Garage'),
                        dlinha('varanda', 'a varanda é ensolarada', 'balcony', 'The balcony is sunny', 'balcón', 'El balcón es soleado', 'balcon', 'Le balcon est ensoleillé', 'balcone', 'Il balcone è soleggiato', 'Balkon', 'Der Balkon ist sonnig'),
                        dlinha('escada', 'a escada é estreita', 'stairs', 'The stairs are narrow', 'escaleras', 'Las escaleras son estrechas', 'escaliers', 'Les escaliers sont étroits', 'scale', 'Le scale sono strette', 'Treppe', 'Die Treppe ist schmal'),
                    ],
                ],
                [
                    'titulo' => 'No jardim',
                    'teoria' => dteoria(
                        "plant · tree · flower · grass\nThere is a tree in the garden. The flowers are red.",
                        "planta · árbol · flor · césped\nHay un árbol en el jardín. Las flores son rojas.",
                        "plante · arbre · fleur · herbe\nIl y a un arbre dans le jardin. Les fleurs sont rouges.",
                        "pianta · albero · fiore · erba\nC’è un albero in giardino. I fiori sono rossi.",
                        "Pflanze · Baum · Blume · Gras\nIm Garten steht ein Baum. Die Blumen sind rot."
                    ),
                    'itens' => [
                        dlinha('planta', 'esta planta precisa de água', 'plant', 'This plant needs water', 'planta', 'Esta planta necesita agua', 'plante', 'Cette plante a besoin d eau', 'pianta', 'Questa pianta ha bisogno d acqua', 'Pflanze', 'Diese Pflanze braucht Wasser'),
                        dlinha('árvore', 'há uma árvore no jardim', 'tree', 'There is a tree in the garden', 'árbol', 'Hay un árbol en el jardín', 'arbre', 'Il y a un arbre dans le jardin', 'albero', 'C è un albero in giardino', 'Baum', 'Im Garten steht ein Baum'),
                        dlinha('flor', 'as flores são vermelhas', 'flower', 'The flowers are red', 'flor', 'Las flores son rojas', 'fleur', 'Les fleurs sont rouges', 'fiore', 'I fiori sono rossi', 'Blume', 'Die Blumen sind rot'),
                        dlinha('grama', 'não pise na grama', 'grass', 'Do not walk on the grass', 'césped', 'No pises el césped', 'herbe', 'Ne marchez pas sur l herbe', 'erba', 'Non camminare sull erba', 'Gras', 'Nicht auf das Gras treten'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Notas e moedas',
            'desc' => 'Pagar em espécie sem ir ao caixa do banco.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O dinheiro',
                    'teoria' => dteoria(
                        "coin · note · cash · change\nI pay in cash. Do you have change?",
                        "moneda · billete · efectivo · cambio\nPago en efectivo. ¿Tienes cambio?",
                        "pièce · billet · espèces · monnaie\nJe paie en espèces. Vous avez de la monnaie ?",
                        "moneta · banconota · contanti · resto\nPago in contanti. Hai il resto?",
                        "Münze · Schein · Bargeld · Wechselgeld\nIch zahle bar. Haben Sie Wechselgeld?"
                    ),
                    'itens' => [
                        dlinha('moeda', 'uma moeda de um', 'coin', 'A one coin', 'moneda', 'Una moneda de uno', 'pièce', 'Une pièce de un', 'moneta', 'Una moneta da uno', 'Münze', 'Eine Münze von eins'),
                        dlinha('cédula', 'uma cédula de dez', 'note', 'A ten note', 'billete', 'Un billete de diez', 'billet', 'Un billet de dix', 'banconota', 'Una banconota da dieci', 'Schein', 'Ein Zehnerschein'),
                        dlinha('dinheiro vivo', 'pago em dinheiro', 'cash', 'I pay in cash', 'efectivo', 'Pago en efectivo', 'espèces', 'Je paie en espèces', 'contanti', 'Pago in contanti', 'Bargeld', 'Ich zahle bar'),
                        dlinha('troco', 'você tem troco', 'change', 'Do you have change', 'cambio', 'Tienes cambio', 'monnaie', 'Vous avez de la monnaie', 'resto', 'Hai il resto', 'Wechselgeld', 'Haben Sie Wechselgeld'),
                    ],
                ],
                [
                    'titulo' => 'Está certo',
                    'teoria' => dteoria(
                        "exact · extra · cheap · expensive\nThat is exact. This is too expensive for me.",
                        "exacto · de más · barato · caro\nEs exacto. Esto es demasiado caro para mí.",
                        "exact · en trop · pas cher · cher\nC’est exact. C’est trop cher pour moi.",
                        "esatto · in più · economico · caro\nÈ esatto. È troppo caro per me.",
                        "genau · extra · günstig · teuer\nDas stimmt genau. Das ist mir zu teuer."
                    ),
                    'itens' => [
                        dlinha('exato', 'está exato', 'exact', 'That is exact', 'exacto', 'Es exacto', 'exact', 'C est exact', 'esatto', 'È esatto', 'genau', 'Das stimmt genau'),
                        dlinha('a mais', 'dei dois a mais', 'extra', 'I gave two extra', 'de más', 'Di dos de más', 'en trop', 'J ai donné deux en trop', 'in più', 'Ho dato due in più', 'extra', 'Ich gab zwei extra'),
                        dlinha('barato', 'isto é barato', 'cheap', 'This is cheap', 'barato', 'Esto es barato', 'pas cher', 'C est pas cher', 'economico', 'Questo è economico', 'günstig', 'Das ist günstig'),
                        dlinha('caro', 'é caro demais para mim', 'expensive', 'This is too expensive for me', 'caro', 'Esto es demasiado caro para mí', 'cher', 'C est trop cher pour moi', 'caro', 'È troppo caro per me', 'teuer', 'Das ist mir zu teuer'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Semana e mês',
            'desc' => 'Calendário: semana, mês, ano e fim de semana como palavras.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'O calendário',
                    'teoria' => dteoria(
                        "week · month · year · weekend\nThis week is busy. Next month I travel.",
                        "semana · mes · año · fin de semana\nEsta semana está llena. El mes que viene viajo.",
                        "semaine · mois · année · week-end\nCette semaine est chargée. Le mois prochain je voyage.",
                        "settimana · mese · anno · weekend\nQuesta settimana è piena. Il mese prossimo viaggio.",
                        "Woche · Monat · Jahr · Wochenende\nDiese Woche ist voll. Nächsten Monat reise ich."
                    ),
                    'itens' => [
                        dlinha('semana', 'esta semana está cheia', 'week', 'This week is busy', 'semana', 'Esta semana está llena', 'semaine', 'Cette semaine est chargée', 'settimana', 'Questa settimana è piena', 'Woche', 'Diese Woche ist voll'),
                        dlinha('mês', 'no mês que vem viajo', 'month', 'Next month I travel', 'mes', 'El mes que viene viajo', 'mois', 'Le mois prochain je voyage', 'mese', 'Il mese prossimo viaggio', 'Monat', 'Nächsten Monat reise ich'),
                        dlinha('ano', 'este ano estudo italiano', 'year', 'This year I study Italian', 'año', 'Este año estudio italiano', 'année', 'Cette année j étudie l italien', 'anno', 'Quest anno studio italiano', 'Jahr', 'Dieses Jahr lerne ich Italienisch'),
                        dlinha('fim de semana', 'o fim de semana é livre', 'weekend', 'The weekend is free', 'fin de semana', 'El fin de semana está libre', 'week-end', 'Le week-end est libre', 'weekend', 'Il weekend è libero', 'Wochenende', 'Das Wochenende ist frei'),
                    ],
                ],
                [
                    'titulo' => 'Que dia',
                    'teoria' => dteoria(
                        "today · yesterday · tomorrow · date\nWhat is the date today? Tomorrow is Monday.",
                        "hoy · ayer · mañana · fecha\n¿Qué fecha es hoy? Mañana es lunes.",
                        "aujourd’hui · hier · demain · date\nQuelle est la date aujourd’hui ? Demain c’est lundi.",
                        "oggi · ieri · domani · data\nChe data è oggi? Domani è lunedì.",
                        "heute · gestern · morgen · Datum\nWelches Datum ist heute? Morgen ist Montag."
                    ),
                    'itens' => [
                        dlinha('hoje', 'hoje é sexta', 'today', 'Today is Friday', 'hoy', 'Hoy es viernes', 'aujourd hui', 'Aujourd hui c est vendredi', 'oggi', 'Oggi è venerdì', 'heute', 'Heute ist Freitag'),
                        dlinha('ontem', 'ontem foi feriado', 'yesterday', 'Yesterday was a holiday', 'ayer', 'Ayer fue fiesta', 'hier', 'Hier c était férié', 'ieri', 'Ieri era festa', 'gestern', 'Gestern war Feiertag'),
                        dlinha('amanhã', 'amanhã é segunda', 'tomorrow', 'Tomorrow is Monday', 'mañana', 'Mañana es lunes', 'demain', 'Demain c est lundi', 'domani', 'Domani è lunedì', 'morgen', 'Morgen ist Montag'),
                        dlinha('data', 'qual é a data de hoje', 'date', 'What is the date today', 'fecha', 'Qué fecha es hoy', 'date', 'Quelle est la date aujourd hui', 'data', 'Che data è oggi', 'Datum', 'Welches Datum ist heute'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'No zoológico',
            'desc' => 'Animais selvagens, diferentes de pets e fazenda.',
            'nivel' => 'A1',
            'aulas' => [
                [
                    'titulo' => 'Os animais',
                    'teoria' => dteoria(
                        "lion · elephant · monkey · zebra\nThe lion is sleeping. The monkey is fast.",
                        "león · elefante · mono · cebra\nEl león duerme. El mono es rápido.",
                        "lion · éléphant · singe · zèbre\nLe lion dort. Le singe est rapide.",
                        "leone · elefante · scimmia · zebra\nIl leone dorme. La scimmia è veloce.",
                        "Löwe · Elefant · Affe · Zebra\nDer Löwe schläft. Der Affe ist schnell."
                    ),
                    'itens' => [
                        dlinha('leão', 'o leão está dormindo', 'lion', 'The lion is sleeping', 'león', 'El león duerme', 'lion', 'Le lion dort', 'leone', 'Il leone dorme', 'Löwe', 'Der Löwe schläft'),
                        dlinha('elefante', 'o elefante é grande', 'elephant', 'The elephant is big', 'elefante', 'El elefante es grande', 'éléphant', 'L éléphant est grand', 'elefante', 'L elefante è grande', 'Elefant', 'Der Elefant ist groß'),
                        dlinha('macaco', 'o macaco é rápido', 'monkey', 'The monkey is fast', 'mono', 'El mono es rápido', 'singe', 'Le singe est rapide', 'scimmia', 'La scimmia è veloce', 'Affe', 'Der Affe ist schnell'),
                        dlinha('zebra', 'a zebra é preta e branca', 'zebra', 'The zebra is black and white', 'cebra', 'La cebra es blanca y negra', 'zèbre', 'Le zèbre est noir et blanc', 'zebra', 'La zebra è bianca e nera', 'Zebra', 'Das Zebra ist schwarz-weiß'),
                    ],
                ],
                [
                    'titulo' => 'O recinto',
                    'teoria' => dteoria(
                        "zoo · cage · feed · photo\nDo not feed the animals. A photo is ok.",
                        "zoo · jaula · alimentar · foto\nNo alimente a los animales. Una foto está bien.",
                        "zoo · cage · nourrir · photo\nNe nourrissez pas les animaux. Une photo est ok.",
                        "zoo · gabbia · dare da mangiare · foto\nNon dare da mangiare agli animali. Una foto va bene.",
                        "Zoo · Käfig · füttern · Foto\nTiere nicht füttern. Ein Foto ist okay."
                    ),
                    'itens' => [
                        dlinha('zoológico', 'o zoológico abre às nove', 'zoo', 'The zoo opens at nine', 'zoo', 'El zoo abre a las nueve', 'zoo', 'Le zoo ouvre à neuf heures', 'zoo', 'Lo zoo apre alle nove', 'Zoo', 'Der Zoo öffnet um neun'),
                        dlinha('jaula', 'a jaula está vazia', 'cage', 'The cage is empty', 'jaula', 'La jaula está vacía', 'cage', 'La cage est vide', 'gabbia', 'La gabbia è vuota', 'Käfig', 'Der Käfig ist leer'),
                        dlinha('alimentar', 'não alimente os animais', 'feed', 'Do not feed the animals', 'alimentar', 'No alimente a los animales', 'nourrir', 'Ne nourrissez pas les animaux', 'dare da mangiare', 'Non dare da mangiare agli animali', 'füttern', 'Tiere nicht füttern'),
                        dlinha('foto', 'uma foto pode', 'photo', 'A photo is ok', 'foto', 'Una foto está bien', 'photo', 'Une photo est ok', 'foto', 'Una foto va bene', 'Foto', 'Ein Foto ist okay'),
                    ],
                ],
            ],
        ],
    ];
}

require_once __DIR__ . '/catalogo-dobra-a2.php';
