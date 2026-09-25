<?php

function dobra_bc(): array
{
    return [
        [
            'titulo' => 'Conselho B1',
            'desc' => 'Should e ought: orientar sem mandar.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Você deveria',
                    'teoria' => dteoria(
                        "should · ought to · had better · if I were you\nYou should rest. If I were you, I would call her.",
                        "deberías · convendría · más vale · yo en tu lugar\nDeberías descansar. Yo en tu lugar la llamaría.",
                        "tu devrais · tu ferais mieux · il vaudrait mieux · à ta place\nTu devrais te reposer. À ta place, je l’appellerais.",
                        "dovresti · faresti meglio · è meglio che · al posto tuo\nDovresti riposarti. Al posto tuo la chiamerei.",
                        "solltest · solltest besser · besser · an deiner Stelle\nDu solltest ruhen. An deiner Stelle würde ich sie anrufen."
                    ),
                    'itens' => [
                        dlinha('deveria', 'você deveria descansar', 'should', 'You should rest', 'deberías', 'Deberías descansar', 'tu devrais', 'Tu devrais te reposer', 'dovresti', 'Dovresti riposarti', 'solltest', 'Du solltest ruhen'),
                        dlinha('conviria', 'conviria chegar cedo', 'ought to', 'You ought to arrive early', 'convendría', 'Convendría llegar pronto', 'tu ferais mieux', 'Tu ferais mieux d arriver tôt', 'faresti meglio', 'Faresti meglio ad arrivare presto', 'solltest besser', 'Du solltest besser früh kommen'),
                        dlinha('é melhor', 'é melhor levar um casaco', 'had better', 'You had better take a coat', 'más vale', 'Más vale llevar un abrigo', 'il vaudrait mieux', 'Il vaudrait mieux prendre un manteau', 'è meglio che', 'È meglio che prendi un cappotto', 'besser', 'Du nimmst besser einen Mantel'),
                        dlinha('se eu fosse você', 'se eu fosse você ligaria', 'if I were you', 'If I were you I would call', 'yo en tu lugar', 'Yo en tu lugar llamaría', 'à ta place', 'À ta place j appellerais', 'al posto tuo', 'Al posto tuo chiamerei', 'an deiner Stelle', 'An deiner Stelle würde ich anrufen'),
                    ],
                ],
                [
                    'titulo' => 'Não faria isso',
                    'teoria' => dteoria(
                        "I wouldn’t · risky · consider · second thought\nI wouldn’t sign today. Have a second thought.",
                        "yo no · arriesgado · considera · pensarlo mejor\nYo no firmaría hoy. Piénsalo mejor.",
                        "je ne · risqué · envisage · à y réfléchir\nJe ne signerais pas aujourd’hui. À y réfléchir.",
                        "io non · rischioso · valuta · ripensaci\nIo non firmerei oggi. Ripensaci.",
                        "ich würde nicht · riskant · überlege · nochmal nachdenken\nIch würde heute nicht unterschreiben. Denk nochmal nach."
                    ),
                    'itens' => [
                        dlinha('eu não', 'eu não assinaria hoje', 'I wouldn’t', 'I would not sign today', 'yo no', 'Yo no firmaría hoy', 'je ne', 'Je ne signerais pas aujourd hui', 'io non', 'Io non firmerei oggi', 'ich würde nicht', 'Ich würde heute nicht unterschreiben'),
                        dlinha('arriscado', 'é arriscado demais', 'risky', 'It is too risky', 'arriesgado', 'Es demasiado arriesgado', 'risqué', 'C est trop risqué', 'rischioso', 'È troppo rischioso', 'riskant', 'Es ist zu riskant'),
                        dlinha('considere', 'considere outra opção', 'consider', 'Consider another option', 'considera', 'Considera otra opción', 'envisage', 'Envisage une autre option', 'valuta', 'Valuta un altra opzione', 'überlege', 'Überlege eine andere Option'),
                        dlinha('pense melhor', 'pense melhor nisso', 'second thought', 'Have a second thought', 'pensarlo mejor', 'Piénsalo mejor', 'à y réfléchir', 'À y réfléchir', 'ripensaci', 'Ripensaci', 'nochmal nachdenken', 'Denk nochmal nach'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Relacionamentos B1',
            'desc' => 'Combinar, desmarcar e falar de confiança.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Combinamos',
                    'teoria' => dteoria(
                        "get on · fall out · make up · trust\nWe get on well. We fell out last week and then made up.",
                        "llevarse · pelearse · hacer las paces · confiar\nNos llevamos bien. Nos peleamos y luego hicimos las paces.",
                        "s’entendre · se fâcher · se réconcilier · faire confiance\nOn s’entend bien. On s’est fâchés puis réconciliés.",
                        "andare d’accordo · litigare · fare pace · fidarsi\nAndiamo d’accordo. Abbiamo litigato e poi fatto pace.",
                        "verstehen · streiten · versöhnen · vertrauen\nWir verstehen uns. Wir stritten und versöhnten uns dann."
                    ),
                    'itens' => [
                        dlinha('dar-se bem', 'a gente se dá bem', 'get on', 'We get on well', 'llevarse', 'Nos llevamos bien', 's entendre', 'On s entend bien', 'andare d accordo', 'Andiamo d accordo', 'verstehen', 'Wir verstehen uns gut'),
                        dlinha('brigar', 'brigamos semana passada', 'fall out', 'We fell out last week', 'pelearse', 'Nos peleamos la semana pasada', 'se fâcher', 'On s est fâchés la semaine dernière', 'litigare', 'Abbiamo litigato la scorsa settimana', 'streiten', 'Wir haben letzte Woche gestritten'),
                        dlinha('fazer as pazes', 'depois fizemos as pazes', 'make up', 'Then we made up', 'hacer las paces', 'Luego hicimos las paces', 'se réconcilier', 'Puis on s est réconciliés', 'fare pace', 'Poi abbiamo fatto pace', 'versöhnen', 'Dann haben wir uns versöhnt'),
                        dlinha('confiar', 'eu confio nela', 'trust', 'I trust her', 'confiar', 'Confío en ella', 'faire confiance', 'Je lui fais confiance', 'fidarsi', 'Mi fido di lei', 'vertrauen', 'Ich vertraue ihr'),
                    ],
                ],
                [
                    'titulo' => 'Um limite',
                    'teoria' => dteoria(
                        "boundary · honest · jealous · space\nI need some space. Let us be honest about this.",
                        "límite · honesto · celoso · espacio\nNecesito espacio. Seamos honestos con esto.",
                        "limite · honnête · jaloux · espace\nJ’ai besoin d’espace. Soyons honnêtes là-dessus.",
                        "limite · onesto · geloso · spazio\nHo bisogno di spazio. Siamo onesti su questo.",
                        "Grenze · ehrlich · eifersüchtig · Abstand\nIch brauche Abstand. Seien wir ehrlich dazu."
                    ),
                    'itens' => [
                        dlinha('limite', 'preciso de um limite claro', 'boundary', 'I need a clear boundary', 'límite', 'Necesito un límite claro', 'limite', 'J ai besoin d une limite claire', 'limite', 'Ho bisogno di un limite chiaro', 'Grenze', 'Ich brauche eine klare Grenze'),
                        dlinha('honesto', 'sejamos honestos', 'honest', 'Let us be honest', 'honesto', 'Seamos honestos', 'honnête', 'Soyons honnêtes', 'onesto', 'Siamo onesti', 'ehrlich', 'Seien wir ehrlich'),
                        dlinha('ciumento', 'ele ficou ciumento', 'jealous', 'He got jealous', 'celoso', 'Se puso celoso', 'jaloux', 'Il est devenu jaloux', 'geloso', 'È diventato geloso', 'eifersüchtig', 'Er wurde eifersüchtig'),
                        dlinha('espaço', 'preciso de espaço', 'space', 'I need some space', 'espacio', 'Necesito espacio', 'espace', 'J ai besoin d espace', 'spazio', 'Ho bisogno di spazio', 'Abstand', 'Ich brauche Abstand'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Universidade B1',
            'desc' => 'Campus, disciplina, prazo de trabalho e bolsa.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O campus',
                    'teoria' => dteoria(
                        "campus · lecture · seminar · grant\nThe lecture is in hall B. I applied for a grant.",
                        "campus · clase magistral · seminario · beca\nLa clase es en el aula B. Solicité una beca.",
                        "campus · cours magistral · séminaire · bourse\nLe cours est dans l’amphi B. J’ai demandé une bourse.",
                        "campus · lezione · seminario · borsa\nLa lezione è nell’aula B. Ho fatto domanda per una borsa.",
                        "Campus · Vorlesung · Seminar · Stipendium\nDie Vorlesung ist im Hörsaal B. Ich habe ein Stipendium beantragt."
                    ),
                    'itens' => [
                        dlinha('campus', 'o campus é longe', 'campus', 'The campus is far', 'campus', 'El campus está lejos', 'campus', 'Le campus est loin', 'campus', 'Il campus è lontano', 'Campus', 'Der Campus ist weit'),
                        dlinha('aula magna', 'a aula magna é no bloco B', 'lecture', 'The lecture is in hall B', 'clase magistral', 'La clase es en el aula B', 'cours magistral', 'Le cours est dans l amphi B', 'lezione', 'La lezione è nell aula B', 'Vorlesung', 'Die Vorlesung ist im Hörsaal B'),
                        dlinha('seminário', 'o seminário é pequeno', 'seminar', 'The seminar is small', 'seminario', 'El seminario es pequeño', 'séminaire', 'Le séminaire est petit', 'seminario', 'Il seminario è piccolo', 'Seminar', 'Das Seminar ist klein'),
                        dlinha('bolsa', 'candidatei-me a uma bolsa', 'grant', 'I applied for a grant', 'beca', 'Solicité una beca', 'bourse', 'J ai demandé une bourse', 'borsa', 'Ho fatto domanda per una borsa', 'Stipendium', 'Ich habe ein Stipendium beantragt'),
                    ],
                ],
                [
                    'titulo' => 'O trabalho acadêmico',
                    'teoria' => dteoria(
                        "assignment · bibliography · plagiarism · supervisor\nCite the bibliography. Avoid plagiarism. Email your supervisor.",
                        "trabajo · bibliografía · plagio · tutor\nCita la bibliografía. Evita el plagio. Escribe a tu tutor.",
                        "devoir · bibliographie · plagiat · directeur\nCite la bibliographie. Évite le plagiat. Écris à ton directeur.",
                        "elaborato · bibliografia · plagio · relatore\nCita la bibliografia. Evita il plagio. Scrivi al relatore.",
                        "Arbeit · Literatur · Plagiat · Betreuer\nZitiere die Literatur. Vermeide Plagiat. Schreib deinem Betreuer."
                    ),
                    'itens' => [
                        dlinha('trabalho', 'o trabalho vence na sexta', 'assignment', 'The assignment is due on Friday', 'trabajo', 'El trabajo vence el viernes', 'devoir', 'Le devoir est pour vendredi', 'elaborato', 'L elaborato scade venerdì', 'Arbeit', 'Die Arbeit ist am Freitag fällig'),
                        dlinha('bibliografia', 'cite a bibliografia', 'bibliography', 'Cite the bibliography', 'bibliografía', 'Cita la bibliografía', 'bibliographie', 'Cite la bibliographie', 'bibliografia', 'Cita la bibliografia', 'Literatur', 'Zitiere die Literatur'),
                        dlinha('plágio', 'evite o plágio', 'plagiarism', 'Avoid plagiarism', 'plagio', 'Evita el plagio', 'plagiat', 'Évite le plagiat', 'plagio', 'Evita il plagio', 'Plagiat', 'Vermeide Plagiat'),
                        dlinha('orientador', 'escreva ao orientador', 'supervisor', 'Email your supervisor', 'tutor', 'Escribe a tu tutor', 'directeur', 'Écris à ton directeur', 'relatore', 'Scrivi al relatore', 'Betreuer', 'Schreib deinem Betreuer'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Contar uma história B1',
            'desc' => 'Anedota com começo, reviravolta e desfecho.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O começo',
                    'teoria' => dteoria(
                        "it all started · unexpectedly · in the end · it turned out\nIt all started at the station. In the end it turned out well.",
                        "todo empezó · de pronto · al final · resultó que\nTodo empezó en la estación. Al final resultó bien.",
                        "tout a commencé · soudain · au final · il s’est avéré\nTout a commencé à la gare. Au final ça s’est bien passé.",
                        "tutto è iniziato · all’improvviso · alla fine · è venuto fuori\nTutto è iniziato in stazione. Alla fine è andata bene.",
                        "alles begann · unerwartet · am Ende · es stellte sich heraus\nAlles begann am Bahnhof. Am Ende lief es gut."
                    ),
                    'itens' => [
                        dlinha('tudo começou', 'tudo começou na estação', 'it all started', 'It all started at the station', 'todo empezó', 'Todo empezó en la estación', 'tout a commencé', 'Tout a commencé à la gare', 'tutto è iniziato', 'Tutto è iniziato in stazione', 'alles begann', 'Alles begann am Bahnhof'),
                        dlinha('de repente', 'de repente o trem parou', 'unexpectedly', 'Unexpectedly the train stopped', 'de pronto', 'De pronto el tren paró', 'soudain', 'Soudain le train s est arrêté', 'all improvviso', 'All improvviso il treno si è fermato', 'unerwartet', 'Unerwartet hielt der Zug'),
                        dlinha('no fim', 'no fim deu certo', 'in the end', 'In the end it worked', 'al final', 'Al final salió bien', 'au final', 'Au final ça a marché', 'alla fine', 'Alla fine è andata bene', 'am Ende', 'Am Ende klappte es'),
                        dlinha('acabou que', 'acabou que era um alarme falso', 'it turned out', 'It turned out to be a false alarm', 'resultó que', 'Resultó que era una falsa alarma', 'il s est avéré', 'Il s est avéré que c était une fausse alerte', 'è venuto fuori', 'È venuto fuori che era un falso allarme', 'es stellte sich heraus', 'Es stellte sich als Fehlalarm heraus'),
                    ],
                ],
                [
                    'titulo' => 'O detalhe',
                    'teoria' => dteoria(
                        "meanwhile · luckily · to cut a long story short · punchline\nMeanwhile the bag arrived. Luckily nothing was missing.",
                        "mientras tanto · por suerte · en resumen · remate\nMientras tanto llegó la bolsa. Por suerte no faltaba nada.",
                        "pendant ce temps · heureusement · pour faire court · chute\nPendant ce temps le sac est arrivé. Heureusement il ne manquait rien.",
                        "nel frattempo · per fortuna · per farla breve · battuta finale\nNel frattempo è arrivata la borsa. Per fortuna non mancava niente.",
                        "inzwischen · zum Glück · kurz gesagt · Pointe\nInzwischen kam die Tasche. Zum Glück fehlte nichts."
                    ),
                    'itens' => [
                        dlinha('enquanto isso', 'enquanto isso a bolsa chegou', 'meanwhile', 'Meanwhile the bag arrived', 'mientras tanto', 'Mientras tanto llegó la bolsa', 'pendant ce temps', 'Pendant ce temps le sac est arrivé', 'nel frattempo', 'Nel frattempo è arrivata la borsa', 'inzwischen', 'Inzwischen kam die Tasche'),
                        dlinha('ainda bem', 'ainda bem que nada faltava', 'luckily', 'Luckily nothing was missing', 'por suerte', 'Por suerte no faltaba nada', 'heureusement', 'Heureusement il ne manquait rien', 'per fortuna', 'Per fortuna non mancava niente', 'zum Glück', 'Zum Glück fehlte nichts'),
                        dlinha('para resumir', 'para resumir, pegamos um táxi', 'to cut a long story short', 'To cut a long story short we took a taxi', 'en resumen', 'En resumen tomamos un taxi', 'pour faire court', 'Pour faire court on a pris un taxi', 'per farla breve', 'Per farla breve abbiamo preso un taxi', 'kurz gesagt', 'Kurz gesagt nahmen wir ein Taxi'),
                        dlinha('remate', 'o remate veio no final', 'punchline', 'The punchline came at the end', 'remate', 'El remate llegó al final', 'chute', 'La chute est venue à la fin', 'battuta finale', 'La battuta finale è arrivata alla fine', 'Pointe', 'Die Pointe kam am Ende'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Hábitos de antes B1',
            'desc' => 'Used to: o que era rotina e já não é.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Eu costumava',
                    'teoria' => dteoria(
                        "used to · didn’t use to · would · not anymore\nI used to cycle to work. I don’t anymore.",
                        "solía · no solía · solía (hábito) · ya no\nSolía ir en bici al trabajo. Ya no.",
                        "j’avais l’habitude · je n’avais pas l’habitude · je · plus maintenant\nJ’allais au travail à vélo. Plus maintenant.",
                        "ero solito · non ero solito · solevo · non più\nEro solito andare in bici al lavoro. Non più.",
                        "früher · nicht früher · pflegte · nicht mehr\nFrüher fuhr ich mit dem Rad zur Arbeit. Nicht mehr."
                    ),
                    'itens' => [
                        dlinha('costumava', 'eu costumava ir de bicicleta', 'used to', 'I used to cycle to work', 'solía', 'Solía ir en bici al trabajo', 'j avais l habitude', 'J allais au travail à vélo', 'ero solito', 'Ero solito andare in bici al lavoro', 'früher', 'Früher fuhr ich mit dem Rad zur Arbeit'),
                        dlinha('não costumava', 'não costumava acordar cedo', 'didn’t use to', 'I did not use to wake up early', 'no solía', 'No solía levantarme temprano', 'je n avais pas l habitude', 'Je ne me levais pas tôt', 'non ero solito', 'Non ero solito alzarmi presto', 'nicht früher', 'Früher stand ich nicht früh auf'),
                        dlinha('toda vez', 'toda vez ele trazia pão', 'would', 'He would bring bread every time', 'solía', 'Siempre traía pan', 'il', 'Il apportait du pain à chaque fois', 'solevo', 'Portava sempre il pane', 'pflegte', 'Er brachte jedes Mal Brot mit'),
                        dlinha('já não', 'já não faço isso', 'not anymore', 'I do not do that anymore', 'ya no', 'Ya no lo hago', 'plus maintenant', 'Je ne le fais plus maintenant', 'non più', 'Non lo faccio più', 'nicht mehr', 'Das mache ich nicht mehr'),
                    ],
                ],
                [
                    'titulo' => 'O contraste',
                    'teoria' => dteoria(
                        "these days · in those days · compared to · a shift\nIn those days we wrote letters. These days we text.",
                        "hoy en día · en aquella época · comparado con · un cambio\nEn aquella época escribíamos cartas. Hoy en día mandamos mensajes.",
                        "de nos jours · à l’époque · par rapport à · un changement\nÀ l’époque on écrivait des lettres. De nos jours on envoie des textos.",
                        "oggigiorno · a quei tempi · rispetto a · un cambiamento\nA quei tempi scrivevamo lettere. Oggigiorno mandiamo messaggi.",
                        "heutzutage · damals · im Vergleich zu · ein Wandel\nDamals schrieben wir Briefe. Heutzutage schreiben wir Nachrichten."
                    ),
                    'itens' => [
                        dlinha('hoje em dia', 'hoje em dia mandamos mensagem', 'these days', 'These days we text', 'hoy en día', 'Hoy en día mandamos mensajes', 'de nos jours', 'De nos jours on envoie des textos', 'oggigiorno', 'Oggigiorno mandiamo messaggi', 'heutzutage', 'Heutzutage schreiben wir Nachrichten'),
                        dlinha('naqueles dias', 'naqueles dias escrevíamos cartas', 'in those days', 'In those days we wrote letters', 'en aquella época', 'En aquella época escribíamos cartas', 'à l époque', 'À l époque on écrivait des lettres', 'a quei tempi', 'A quei tempi scrivevamo lettere', 'damals', 'Damals schrieben wir Briefe'),
                        dlinha('comparado com', 'comparado com antes é mais rápido', 'compared to', 'Compared to before it is faster', 'comparado con', 'Comparado con antes es más rápido', 'par rapport à', 'Par rapport à avant c est plus rapide', 'rispetto a', 'Rispetto a prima è più veloce', 'im Vergleich zu', 'Im Vergleich zu früher ist es schneller'),
                        dlinha('uma mudança', 'foi uma mudança grande', 'a shift', 'It was a big shift', 'un cambio', 'Fue un gran cambio', 'un changement', 'C était un grand changement', 'un cambiamento', 'È stato un grande cambiamento', 'ein Wandel', 'Es war ein großer Wandel'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Voluntariado B1',
            'desc' => 'Causas, turnos e o que você oferece à comunidade.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'A causa',
                    'teoria' => dteoria(
                        "volunteer · cause · shelter · donate\nI volunteer at a shelter. We donate food every month.",
                        "voluntario · causa · refugio · donar\nSoy voluntario en un refugio. Donamos comida cada mes.",
                        "bénévole · cause · refuge · donner\nJe suis bénévole dans un refuge. On donne de la nourriture chaque mois.",
                        "volontario · causa · rifugio · donare\nSono volontario in un rifugio. Doniamo cibo ogni mese.",
                        "ehrenamtlich · Sache · Unterkunft · spenden\nIch helfe ehrenamtlich in einer Unterkunft. Wir spenden jeden Monat Essen."
                    ),
                    'itens' => [
                        dlinha('voluntário', 'sou voluntário no abrigo', 'volunteer', 'I volunteer at a shelter', 'voluntario', 'Soy voluntario en un refugio', 'bénévole', 'Je suis bénévole dans un refuge', 'volontario', 'Sono volontario in un rifugio', 'ehrenamtlich', 'Ich helfe ehrenamtlich in einer Unterkunft'),
                        dlinha('causa', 'esta causa importa para mim', 'cause', 'This cause matters to me', 'causa', 'Esta causa me importa', 'cause', 'Cette cause compte pour moi', 'causa', 'Questa causa mi importa', 'Sache', 'Diese Sache ist mir wichtig'),
                        dlinha('abrigo', 'o abrigo precisa de cobertores', 'shelter', 'The shelter needs blankets', 'refugio', 'El refugio necesita mantas', 'refuge', 'Le refuge a besoin de couvertures', 'rifugio', 'Il rifugio ha bisogno di coperte', 'Unterkunft', 'Die Unterkunft braucht Decken'),
                        dlinha('doar', 'doamos comida todo mês', 'donate', 'We donate food every month', 'donar', 'Donamos comida cada mes', 'donner', 'On donne de la nourriture chaque mois', 'donare', 'Doniamo cibo ogni mese', 'spenden', 'Wir spenden jeden Monat Essen'),
                    ],
                ],
                [
                    'titulo' => 'O turno de ajuda',
                    'teoria' => dteoria(
                        "shift · sign up · impact · community\nSign up for the Saturday shift. The impact on the community is clear.",
                        "turno · apúntate · impacto · comunidad\nApúntate al turno del sábado. El impacto en la comunidad es claro.",
                        "créneau · inscris-toi · impact · communauté\nInscris-toi au créneau du samedi. L’impact sur la communauté est clair.",
                        "turno · iscriviti · impatto · comunità\nIscriviti al turno del sabato. L’impatto sulla comunità è chiaro.",
                        "Schicht · trag dich ein · Wirkung · Gemeinschaft\nTrag dich für die Samstagsschicht ein. Die Wirkung auf die Gemeinschaft ist klar."
                    ),
                    'itens' => [
                        dlinha('plantão', 'o plantão de sábado está vazio', 'shift', 'The Saturday shift is empty', 'turno', 'El turno del sábado está vacío', 'créneau', 'Le créneau du samedi est vide', 'turno', 'Il turno del sabato è vuoto', 'Schicht', 'Die Samstagsschicht ist leer'),
                        dlinha('inscreva-se', 'inscreva-se no sábado', 'sign up', 'Sign up for Saturday', 'apúntate', 'Apúntate el sábado', 'inscris-toi', 'Inscris-toi samedi', 'iscriviti', 'Iscriviti sabato', 'trag dich ein', 'Trag dich für Samstag ein'),
                        dlinha('impacto', 'o impacto é visível', 'impact', 'The impact is visible', 'impacto', 'El impacto es visible', 'impact', 'L impact est visible', 'impatto', 'L impatto è visibile', 'Wirkung', 'Die Wirkung ist sichtbar'),
                        dlinha('comunidade', 'a comunidade agradece', 'community', 'The community is grateful', 'comunidad', 'La comunidad agradece', 'communauté', 'La communauté est reconnaissante', 'comunità', 'La comunità è grata', 'Gemeinschaft', 'Die Gemeinschaft ist dankbar'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Dinheiro no dia a dia B1',
            'desc' => 'Orçamento pessoal, parcela e o que vale o custo.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O orçamento',
                    'teoria' => dteoria(
                        "budget · afford · instalment · worth it\nI cannot afford that. Is it worth it?",
                        "presupuesto · permitirme · cuota · vale la pena\nNo puedo permitírmelo. ¿Vale la pena?",
                        "budget · me permettre · mensualité · ça vaut le coup\nJe ne peux pas me le permettre. Ça vaut le coup ?",
                        "budget · permettermi · rata · ne vale la pena\nNon posso permettermelo. Ne vale la pena?",
                        "Budget · leisten · Rate · es wert\nIch kann es mir nicht leisten. Ist es das wert?"
                    ),
                    'itens' => [
                        dlinha('orçamento', 'o orçamento este mês está apertado', 'budget', 'The budget is tight this month', 'presupuesto', 'El presupuesto este mes está justado', 'budget', 'Le budget ce mois-ci est serré', 'budget', 'Il budget questo mese è stretto', 'Budget', 'Das Budget ist diesen Monat knapp'),
                        dlinha('caber no bolso', 'não cabe no bolso', 'afford', 'I cannot afford that', 'permitirme', 'No puedo permitírmelo', 'me permettre', 'Je ne peux pas me le permettre', 'permettermi', 'Non posso permettermelo', 'leisten', 'Ich kann es mir nicht leisten'),
                        dlinha('parcela', 'pago em três parcelas', 'instalment', 'I pay in three instalments', 'cuota', 'Pago en tres cuotas', 'mensualité', 'Je paie en trois mensualités', 'rata', 'Pago in tre rate', 'Rate', 'Ich zahle in drei Raten'),
                        dlinha('vale a pena', 'vale a pena esperar', 'worth it', 'It is worth waiting', 'vale la pena', 'Vale la pena esperar', 'ça vaut le coup', 'Ça vaut le coup d attendre', 'ne vale la pena', 'Ne vale la pena aspettare', 'es wert', 'Es ist das Warten wert'),
                    ],
                ],
                [
                    'titulo' => 'O gasto',
                    'teoria' => dteoria(
                        "cut back · splurge · save up · unexpected\nWe cut back on eating out. Then an unexpected bill arrived.",
                        "reducir · darme un capricho · ahorrar · inesperado\nReducimos las cenas fuera. Luego llegó una factura inesperada.",
                        "réduire · se faire plaisir · économiser · imprévu\nOn réduit les restos. Puis une facture imprévue est arrivée.",
                        "tagliare · farmi un regalo · risparmiare · imprevisto\nTagliamo le cene fuori. Poi è arrivata una bolletta imprevista.",
                        "kürzen · gönnen · sparen · unerwartet\nWir kürzen das Essen gehen. Dann kam eine unerwartete Rechnung."
                    ),
                    'itens' => [
                        dlinha('cortar gastos', 'cortamos jantar fora', 'cut back', 'We cut back on eating out', 'reducir', 'Reducimos las cenas fuera', 'réduire', 'On réduit les restos', 'tagliare', 'Tagliamo le cene fuori', 'kürzen', 'Wir kürzen das Essen gehen'),
                        dlinha('me dar um gosto', 'me dei um gosto no aniversário', 'splurge', 'I splurged on my birthday', 'darme un capricho', 'Me di un capricho en el cumpleaños', 'se faire plaisir', 'Je me suis fait plaisir pour mon anniversaire', 'farmi un regalo', 'Mi sono fatto un regalo al compleanno', 'gönnen', 'Ich habe mir zum Geburtstag etwas gegönnt'),
                        dlinha('juntar', 'junto para a viagem', 'save up', 'I save up for the trip', 'ahorrar', 'Ahorro para el viaje', 'économiser', 'J économise pour le voyage', 'risparmiare', 'Risparmio per il viaggio', 'sparen', 'Ich spare für die Reise'),
                        dlinha('imprevisto', 'chegou uma conta imprevista', 'unexpected', 'An unexpected bill arrived', 'inesperado', 'Llegó una factura inesperada', 'imprévu', 'Une facture imprévue est arrivée', 'imprevisto', 'È arrivata una bolletta imprevista', 'unerwartet', 'Eine unerwartete Rechnung kam'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Entrevista de emprego B2',
            'desc' => 'Perguntas difíceis, exemplo concreto e contra-oferta.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A pergunta difícil',
                    'teoria' => dteoria(
                        "strength · weakness · walk me through · track record\nWalk me through a conflict you solved. What is a genuine weakness?",
                        "fortaleza · debilidad · explíqueme · trayectoria\nExplíqueme un conflicto que resolvió. ¿Cuál es una debilidad real?",
                        "atout · faiblesse · racontez-moi · parcours\nRacontez-moi un conflit que vous avez réglé. Quelle est une vraie faiblesse ?",
                        "punto di forza · debolezza · mi racconti · percorso\nMi racconti un conflitto che ha risolto. Qual è una debolezza vera?",
                        "Stärke · Schwäche · führen Sie mich · Werdegang\nFühren Sie mich durch einen gelösten Konflikt. Was ist eine echte Schwäche?"
                    ),
                    'itens' => [
                        dlinha('ponto forte', 'meu ponto forte é organizar prazos', 'strength', 'My strength is organising deadlines', 'fortaleza', 'Mi fortaleza es organizar plazos', 'atout', 'Mon atout est d organiser les délais', 'punto di forza', 'Il mio punto di forza è organizzare le scadenze', 'Stärke', 'Meine Stärke ist das Organisieren von Fristen'),
                        dlinha('ponto fraco', 'um ponto fraco real', 'weakness', 'A genuine weakness', 'debilidad', 'Una debilidad real', 'faiblesse', 'Une vraie faiblesse', 'debolezza', 'Una debolezza vera', 'Schwäche', 'Eine echte Schwäche'),
                        dlinha('me explique', 'me explique um conflito que resolveu', 'walk me through', 'Walk me through a conflict you solved', 'explíqueme', 'Explíqueme un conflicto que resolvió', 'racontez-moi', 'Racontez-moi un conflit que vous avez réglé', 'mi racconti', 'Mi racconti un conflitto che ha risolto', 'führen Sie mich', 'Führen Sie mich durch einen gelösten Konflikt'),
                        dlinha('histórico', 'o histórico mostra consistência', 'track record', 'The track record shows consistency', 'trayectoria', 'La trayectoria muestra consistencia', 'parcours', 'Le parcours montre de la constance', 'percorso', 'Il percorso mostra costanza', 'Werdegang', 'Der Werdegang zeigt Beständigkeit'),
                    ],
                ],
                [
                    'titulo' => 'A proposta',
                    'teoria' => dteoria(
                        "offer · counter · notice period · package\nI need a week to consider the offer. The notice period is thirty days.",
                        "oferta · contraoferta · preaviso · paquete\nNecesito una semana para valorar la oferta. El preaviso es de treinta días.",
                        "offre · contre-proposition · préavis · package\nJ’ai besoin d’une semaine pour l’offre. Le préavis est de trente jours.",
                        "offerta · controproposta · preavviso · pacchetto\nMi serve una settimana per l’offerta. Il preavviso è di trenta giorni.",
                        "Angebot · Gegenangebot · Kündigungsfrist · Paket\nIch brauche eine Woche für das Angebot. Die Kündigungsfrist beträgt dreißig Tage."
                    ),
                    'itens' => [
                        dlinha('proposta', 'preciso de uma semana para a proposta', 'offer', 'I need a week for the offer', 'oferta', 'Necesito una semana para la oferta', 'offre', 'J ai besoin d une semaine pour l offre', 'offerta', 'Mi serve una settimana per l offerta', 'Angebot', 'Ich brauche eine Woche für das Angebot'),
                        dlinha('contraoferta', 'fiz uma contraoferta educada', 'counter', 'I made a polite counter', 'contraoferta', 'Hice una contraoferta educada', 'contre-proposition', 'J ai fait une contre-proposition polie', 'controproposta', 'Ho fatto una controproposta educata', 'Gegenangebot', 'Ich machte ein höfliches Gegenangebot'),
                        dlinha('aviso prévio', 'o aviso prévio é de trinta dias', 'notice period', 'The notice period is thirty days', 'preaviso', 'El preaviso es de treinta días', 'préavis', 'Le préavis est de trente jours', 'preavviso', 'Il preavviso è di trenta giorni', 'Kündigungsfrist', 'Die Kündigungsfrist beträgt dreißig Tage'),
                        dlinha('pacote', 'o pacote inclui saúde', 'package', 'The package includes health cover', 'paquete', 'El paquete incluye salud', 'package', 'Le package inclut la santé', 'pacchetto', 'Il pacchetto include la salute', 'Paket', 'Das Paket umfasst die Gesundheit'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Negociar B2',
            'desc' => 'Condições, concessão e o ponto em que se fecha.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A margem',
                    'teoria' => dteoria(
                        "leverage · concession · non-negotiable · walk away\nDelivery is non-negotiable. We can offer a concession on price.",
                        "margen · concesión · innegociable · retirarnos\nLa entrega es innegociable. Podemos hacer una concesión en el precio.",
                        "levier · concession · non négociable · partir\nLa livraison est non négociable. On peut faire une concession sur le prix.",
                        "leva · concessione · non negoziabile · andarcene\nLa consegna è non negoziabile. Possiamo fare una concessione sul prezzo.",
                        "Hebel · Zugeständnis · nicht verhandelbar · gehen\nDie Lieferung ist nicht verhandelbar. Beim Preis können wir ein Zugeständnis machen."
                    ),
                    'itens' => [
                        dlinha('alavancagem', 'temos pouca alavancagem', 'leverage', 'We have little leverage', 'margen', 'Tenemos poco margen', 'levier', 'Nous avons peu de levier', 'leva', 'Abbiamo poca leva', 'Hebel', 'Wir haben wenig Hebel'),
                        dlinha('concessão', 'podemos ceder no preço', 'concession', 'We can offer a concession on price', 'concesión', 'Podemos hacer una concesión en el precio', 'concession', 'On peut faire une concession sur le prix', 'concessione', 'Possiamo fare una concessione sul prezzo', 'Zugeständnis', 'Beim Preis können wir ein Zugeständnis machen'),
                        dlinha('innegociável', 'o prazo é innegociável', 'non-negotiable', 'The deadline is non-negotiable', 'innegociable', 'El plazo es innegociable', 'non négociable', 'Le délai est non négociable', 'non negoziabile', 'La scadenza è non negoziabile', 'nicht verhandelbar', 'Die Frist ist nicht verhandelbar'),
                        dlinha('sair da mesa', 'estamos prontos para sair da mesa', 'walk away', 'We are ready to walk away', 'retirarnos', 'Estamos listos para retirarnos', 'partir', 'Nous sommes prêts à partir', 'andarcene', 'Siamo pronti ad andarcene', 'gehen', 'Wir sind bereit zu gehen'),
                    ],
                ],
                [
                    'titulo' => 'O fechamento',
                    'teoria' => dteoria(
                        "terms · in writing · handshake · subject to\nPut the terms in writing. The deal is subject to legal review.",
                        "términos · por escrito · apretón · sujeto a\nPonga los términos por escrito. El acuerdo está sujeto a revisión legal.",
                        "termes · par écrit · poignée · sous réserve\nMettez les termes par écrit. L’accord est sous réserve d’un avis juridique.",
                        "termini · per iscritto · stretta · subordinato a\nMetta i termini per iscritto. L’accordo è subordinato al parere legale.",
                        "Bedingungen · schriftlich · Handschlag · vorbehaltlich\nHalten Sie die Bedingungen schriftlich fest. Der Deal steht unter Rechtsvorbehalt."
                    ),
                    'itens' => [
                        dlinha('termos', 'os termos estão claros', 'terms', 'The terms are clear', 'términos', 'Los términos están claros', 'termes', 'Les termes sont clairs', 'termini', 'I termini sono chiari', 'Bedingungen', 'Die Bedingungen sind klar'),
                        dlinha('por escrito', 'coloque por escrito', 'in writing', 'Put it in writing', 'por escrito', 'Póngalo por escrito', 'par écrit', 'Mettez-le par écrit', 'per iscritto', 'Lo metta per iscritto', 'schriftlich', 'Halten Sie es schriftlich fest'),
                        dlinha('aperto de mão', 'um aperto de mão não basta', 'handshake', 'A handshake is not enough', 'apretón', 'Un apretón no basta', 'poignée', 'Une poignée de main ne suffit pas', 'stretta', 'Una stretta di mano non basta', 'Handschlag', 'Ein Handschlag reicht nicht'),
                        dlinha('condicionado a', 'condicionado à revisão jurídica', 'subject to', 'Subject to legal review', 'sujeto a', 'Sujeto a revisión legal', 'sous réserve', 'Sous réserve d un avis juridique', 'subordinato a', 'Subordinato al parere legale', 'vorbehaltlich', 'Vorbehaltlich der rechtlichen Prüfung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Dados e gráficos B2',
            'desc' => 'Ler tendência, outlier e o que o número não prova.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A tendência',
                    'teoria' => dteoria(
                        "trend · outlier · correlation · causation\nThe trend is upward. Correlation is not causation.",
                        "tendencia · valor atípico · correlación · causalidad\nLa tendencia es al alza. Correlación no es causalidad.",
                        "tendance · valeur aberrante · corrélation · causalité\nLa tendance est à la hausse. Corrélation n’est pas causalité.",
                        "tendenza · valore anomalo · correlazione · causalità\nLa tendenza è in rialzo. Correlazione non è causalità.",
                        "Trend · Ausreißer · Korrelation · Kausalität\nDer Trend zeigt nach oben. Korrelation ist keine Kausalität."
                    ),
                    'itens' => [
                        dlinha('tendência', 'a tendência é de alta', 'trend', 'The trend is upward', 'tendencia', 'La tendencia es al alza', 'tendance', 'La tendance est à la hausse', 'tendenza', 'La tendenza è in rialzo', 'Trend', 'Der Trend zeigt nach oben'),
                        dlinha('ponto fora', 'ignore o ponto fora da curva', 'outlier', 'Ignore the outlier', 'valor atípico', 'Ignore el valor atípico', 'valeur aberrante', 'Ignorez la valeur aberrante', 'valore anomalo', 'Ignora il valore anomalo', 'Ausreißer', 'Ignorieren Sie den Ausreißer'),
                        dlinha('correlação', 'há correlação entre as séries', 'correlation', 'There is a correlation between the series', 'correlación', 'Hay correlación entre las series', 'corrélation', 'Il y a une corrélation entre les séries', 'correlazione', 'C è correlazione tra le serie', 'Korrelation', 'Es gibt eine Korrelation zwischen den Reihen'),
                        dlinha('causalidade', 'correlação não é causalidade', 'causation', 'Correlation is not causation', 'causalidad', 'Correlación no es causalidad', 'causalité', 'Corrélation n est pas causalité', 'causalità', 'Correlazione non è causalità', 'Kausalität', 'Korrelation ist keine Kausalität'),
                    ],
                ],
                [
                    'titulo' => 'O gráfico',
                    'teoria' => dteoria(
                        "axis · sample · margin of error · misleading\nCheck the axis. The sample is small and the chart is misleading.",
                        "eje · muestra · margen de error · engañoso\nMire el eje. La muestra es pequeña y el gráfico es engañoso.",
                        "axe · échantillon · marge d’erreur · trompeur\nRegardez l’axe. L’échantillon est petit et le graphique est trompeur.",
                        "asse · campione · margine di errore · fuorviante\nGuardi l’asse. Il campione è piccolo e il grafico è fuorviante.",
                        "Achse · Stichprobe · Fehlerspanne · irreführend\nPrüfen Sie die Achse. Die Stichprobe ist klein und das Diagramm irreführend."
                    ),
                    'itens' => [
                        dlinha('eixo', 'confira o eixo', 'axis', 'Check the axis', 'eje', 'Mire el eje', 'axe', 'Regardez l axe', 'asse', 'Guardi l asse', 'Achse', 'Prüfen Sie die Achse'),
                        dlinha('amostra', 'a amostra é pequena', 'sample', 'The sample is small', 'muestra', 'La muestra es pequeña', 'échantillon', 'L échantillon est petit', 'campione', 'Il campione è piccolo', 'Stichprobe', 'Die Stichprobe ist klein'),
                        dlinha('margem de erro', 'a margem de erro é alta', 'margin of error', 'The margin of error is high', 'margen de error', 'El margen de error es alto', 'marge d erreur', 'La marge d erreur est élevée', 'margine di errore', 'Il margine di errore è alto', 'Fehlerspanne', 'Die Fehlerspanne ist hoch'),
                        dlinha('enganoso', 'o gráfico é enganoso', 'misleading', 'The chart is misleading', 'engañoso', 'El gráfico es engañoso', 'trompeur', 'Le graphique est trompeur', 'fuorviante', 'Il grafico è fuorviante', 'irreführend', 'Das Diagramm ist irreführend'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Ética digital B2',
            'desc' => 'Privacidade, viés do algoritmo e o que você autoriza.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'Os dados',
                    'teoria' => dteoria(
                        "consent · harvest · bias · opaque\nThey harvest data without clear consent. The ranking is opaque.",
                        "consentimiento · recopilan · sesgo · opaco\nRecopilan datos sin un consentimiento claro. El ranking es opaco.",
                        "consentement · collectent · biais · opaque\nIls collectent des données sans consentement clair. Le classement est opaque.",
                        "consenso · raccolgono · bias · opaco\nRaccolgono dati senza un consenso chiaro. La classifica è opaca.",
                        "Einwilligung · sammeln · Verzerrung · intransparent\nSie sammeln Daten ohne klare Einwilligung. Das Ranking ist intransparent."
                    ),
                    'itens' => [
                        dlinha('consentimento', 'falta consentimento claro', 'consent', 'There is no clear consent', 'consentimiento', 'Falta un consentimiento claro', 'consentement', 'Il manque un consentement clair', 'consenso', 'Manca un consenso chiaro', 'Einwilligung', 'Es fehlt eine klare Einwilligung'),
                        dlinha('coletar', 'coletam dados em excesso', 'harvest', 'They harvest too much data', 'recopilan', 'Recopilan demasiados datos', 'collectent', 'Ils collectent trop de données', 'raccolgono', 'Raccolgono troppi dati', 'sammeln', 'Sie sammeln zu viele Daten'),
                        dlinha('viés', 'o modelo tem viés', 'bias', 'The model has bias', 'sesgo', 'El modelo tiene sesgo', 'biais', 'Le modèle a un biais', 'bias', 'Il modello ha un bias', 'Verzerrung', 'Das Modell hat eine Verzerrung'),
                        dlinha('opaco', 'o ranking é opaco', 'opaque', 'The ranking is opaque', 'opaco', 'El ranking es opaco', 'opaque', 'Le classement est opaque', 'opaco', 'La classifica è opaca', 'intransparent', 'Das Ranking ist intransparent'),
                    ],
                ],
                [
                    'titulo' => 'O direito',
                    'teoria' => dteoria(
                        "opt out · footprint · deepfake · accountability\nYou can opt out. Who has accountability for a deepfake?",
                        "darse de baja · huella · deepfake · responsabilidad\nPuedes darte de baja. ¿Quién responde por un deepfake?",
                        "se désinscrire · empreinte · deepfake · responsabilité\nVous pouvez vous désinscrire. Qui est responsable d’un deepfake ?",
                        "disiscriversi · impronta · deepfake · responsabilità\nPuoi disiscriverti. Chi risponde di un deepfake?",
                        "abmelden · Fußabdruck · Deepfake · Rechenschaft\nSie können sich abmelden. Wer trägt die Rechenschaft für ein Deepfake?"
                    ),
                    'itens' => [
                        dlinha('sair / recusar', 'você pode recusar', 'opt out', 'You can opt out', 'darse de baja', 'Puedes darte de baja', 'se désinscrire', 'Vous pouvez vous désinscrire', 'disiscriversi', 'Puoi disiscriverti', 'abmelden', 'Sie können sich abmelden'),
                        dlinha('rastro', 'o rastro digital fica', 'footprint', 'The digital footprint remains', 'huella', 'La huella digital queda', 'empreinte', 'L empreinte numérique reste', 'impronta', 'L impronta digitale resta', 'Fußabdruck', 'Der digitale Fußabdruck bleibt'),
                        dlinha('deepfake', 'o deepfake engana o público', 'deepfake', 'The deepfake misleads the public', 'deepfake', 'El deepfake engaña al público', 'deepfake', 'Le deepfake trompe le public', 'deepfake', 'Il deepfake inganna il pubblico', 'Deepfake', 'Das Deepfake täuscht die Öffentlichkeit'),
                        dlinha('responsabilização', 'falta responsabilização', 'accountability', 'There is no accountability', 'responsabilidad', 'Falta responsabilidad', 'responsabilité', 'Il n y a pas de responsabilité', 'responsabilità', 'Manca la responsabilità', 'Rechenschaft', 'Es fehlt an Rechenschaft'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Cultura e estereótipo B2',
            'desc' => 'Generalizar com cuidado e corrigir um clichê.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O clichê',
                    'teoria' => dteoria(
                        "stereotype · overgeneralise · nuance · exception\nThat stereotype overgeneralises. The exception is common here.",
                        "estereotipo · generaliza · matiz · excepción\nEse estereotipo generaliza de más. La excepción es común aquí.",
                        "stéréotype · généralise · nuance · exception\nCe stéréotype généralise trop. L’exception est courante ici.",
                        "stereotipo · generalizza · sfumatura · eccezione\nQuello stereotipo generalizza troppo. L’eccezione è comune qui.",
                        "Stereotyp · verallgemeinern · Nuance · Ausnahme\nDieses Stereotyp verallgemeinert zu stark. Die Ausnahme ist hier häufig."
                    ),
                    'itens' => [
                        dlinha('estereótipo', 'esse estereótipo é preguiçoso', 'stereotype', 'That stereotype is lazy', 'estereotipo', 'Ese estereotipo es perezoso', 'stéréotype', 'Ce stéréotype est paresseux', 'stereotipo', 'Quello stereotipo è pigro', 'Stereotyp', 'Dieses Stereotyp ist faul'),
                        dlinha('generalizar demais', 'generaliza demais', 'overgeneralise', 'It overgeneralises', 'generaliza', 'Generaliza de más', 'généralise', 'Il généralise trop', 'generalizza', 'Generalizza troppo', 'verallgemeinern', 'Es verallgemeinert zu stark'),
                        dlinha('nuance', 'falta nuance', 'nuance', 'It lacks nuance', 'matiz', 'Le falta matiz', 'nuance', 'Il manque de nuance', 'sfumatura', 'Manca la sfumatura', 'Nuance', 'Es fehlt die Nuance'),
                        dlinha('exceção', 'a exceção é comum aqui', 'exception', 'The exception is common here', 'excepción', 'La excepción es común aquí', 'exception', 'L exception est courante ici', 'eccezione', 'L eccezione è comune qui', 'Ausnahme', 'Die Ausnahme ist hier häufig'),
                    ],
                ],
                [
                    'titulo' => 'O convívio',
                    'teoria' => dteoria(
                        "custom · taboo · small talk · misread\nI misread the small talk. That topic is a local taboo.",
                        "costumbre · tabú · charla ligera · malinterpreté\nMalinterpreté la charla ligera. Ese tema es un tabú local.",
                        "coutume · tabou · small talk · mal lu\nJ’ai mal lu le small talk. Ce sujet est un tabou local.",
                        "usanza · tabù · chiacchiere · ho frainteso\nHo frainteso le chiacchiere. Quel tema è un tabù locale.",
                        "Brauch · Tabu · Smalltalk · falsch gelesen\nIch habe den Smalltalk falsch gelesen. Das Thema ist ein lokales Tabu."
                    ),
                    'itens' => [
                        dlinha('costume', 'é um costume local', 'custom', 'It is a local custom', 'costumbre', 'Es una costumbre local', 'coutume', 'C est une coutume locale', 'usanza', 'È un usanza locale', 'Brauch', 'Es ist ein lokaler Brauch'),
                        dlinha('tabu', 'esse tema é tabu', 'taboo', 'That topic is a taboo', 'tabú', 'Ese tema es un tabú', 'tabou', 'Ce sujet est un tabou', 'tabù', 'Quel tema è un tabù', 'Tabu', 'Das Thema ist ein Tabu'),
                        dlinha('conversa leve', 'a conversa leve durou pouco', 'small talk', 'The small talk was brief', 'charla ligera', 'La charla ligera fue breve', 'small talk', 'Le small talk a été bref', 'chiacchiere', 'Le chiacchiere sono state brevi', 'Smalltalk', 'Der Smalltalk war kurz'),
                        dlinha('li errado', 'li errado o tom', 'misread', 'I misread the tone', 'malinterpreté', 'Malinterpreté el tono', 'mal lu', 'J ai mal lu le ton', 'ho frainteso', 'Ho frainteso il tono', 'falsch gelesen', 'Ich habe den Ton falsch gelesen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Artigo de opinião B2',
            'desc' => 'Tese, contra-argumento e a concessão antes do fechamento.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A tese',
                    'teoria' => dteoria(
                        "claim · evidence · counterargument · concede\nState the claim. Concede one point, then answer the counterargument.",
                        "tesis · evidencia · contraargumento · conceder\nPlantee la tesis. Conceda un punto y responda al contraargumento.",
                        "thèse · preuve · contre-argument · concéder\nPosez la thèse. Concéderez un point, puis répondez au contre-argument.",
                        "tesi · evidenza · controargomento · concedere\nEnunci la tesi. Conceda un punto e risponda al controargomento.",
                        "These · Beleg · Gegenargument · einräumen\nNennen Sie die These. Räumen Sie einen Punkt ein und antworten Sie auf das Gegenargument."
                    ),
                    'itens' => [
                        dlinha('tese', 'a tese precisa ser testável', 'claim', 'The claim must be testable', 'tesis', 'La tesis debe ser comprobable', 'thèse', 'La thèse doit être vérifiable', 'tesi', 'La tesi deve essere verificabile', 'These', 'Die These muss prüfbar sein'),
                        dlinha('evidência', 'a evidência ainda é fraca', 'evidence', 'The evidence is still weak', 'evidencia', 'La evidencia aún es débil', 'preuve', 'La preuve est encore faible', 'evidenza', 'L evidenza è ancora debole', 'Beleg', 'Der Beleg ist noch schwach'),
                        dlinha('contra-argumento', 'antecipe o contra-argumento', 'counterargument', 'Anticipate the counterargument', 'contraargumento', 'Anticipe el contraargumento', 'contre-argument', 'Anticipez le contre-argument', 'controargomento', 'Anticipi il controargomento', 'Gegenargument', 'Nehmen Sie das Gegenargument vorweg'),
                        dlinha('conceder', 'conceda um ponto', 'concede', 'Concede one point', 'conceder', 'Conceda un punto', 'concéder', 'Concéderez un point', 'concedere', 'Conceda un punto', 'einräumen', 'Räumen Sie einen Punkt ein'),
                    ],
                ],
                [
                    'titulo' => 'O fecho',
                    'teoria' => dteoria(
                        "therefore · nevertheless · on balance · call to action\nNevertheless the cost is high. On balance we should act.",
                        "por lo tanto · no obstante · en balance · llamado a la acción\nNo obstante el coste es alto. En balance deberíamos actuar.",
                        "par conséquent · néanmoins · au total · appel à l’action\nNéanmoins le coût est élevé. Au total nous devrions agir.",
                        "pertanto · nondimeno · nel complesso · invito all’azione\nNondimeno il costo è alto. Nel complesso dovremmo agire.",
                        "daher · dennoch · insgesamt · Handlungsaufruf\nDennoch sind die Kosten hoch. Insgesamt sollten wir handeln."
                    ),
                    'itens' => [
                        dlinha('portanto', 'portanto o plano muda', 'therefore', 'Therefore the plan changes', 'por lo tanto', 'Por lo tanto el plan cambia', 'par conséquent', 'Par conséquent le plan change', 'pertanto', 'Pertanto il piano cambia', 'daher', 'Daher ändert sich der Plan'),
                        dlinha('ainda assim', 'ainda assim o custo é alto', 'nevertheless', 'Nevertheless the cost is high', 'no obstante', 'No obstante el coste es alto', 'néanmoins', 'Néanmoins le coût est élevé', 'nondimeno', 'Nondimeno il costo è alto', 'dennoch', 'Dennoch sind die Kosten hoch'),
                        dlinha('no saldo', 'no saldo devemos agir', 'on balance', 'On balance we should act', 'en balance', 'En balance deberíamos actuar', 'au total', 'Au total nous devrions agir', 'nel complesso', 'Nel complesso dovremmo agire', 'insgesamt', 'Insgesamt sollten wir handeln'),
                        dlinha('chamado à ação', 'o texto fecha com um chamado à ação', 'call to action', 'The text ends with a call to action', 'llamado a la acción', 'El texto cierra con un llamado a la acción', 'appel à l action', 'Le texte se termine par un appel à l action', 'invito all azione', 'Il testo chiude con un invito all azione', 'Handlungsaufruf', 'Der Text endet mit einem Handlungsaufruf'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C1: dissertação',
            'desc' => 'Hipótese, delimitação e o que o capítulo não cobre.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O recorte',
                    'teoria' => dteoria(
                        "hypothesis · scope · caveat · framework\nThe hypothesis is narrow. A key caveat is the sample size.",
                        "hipótesis · alcance · salvedad · marco\nLa hipótesis es estrecha. Una salvedad clave es el tamaño de la muestra.",
                        "hypothèse · périmètre · réserve · cadre\nL’hypothèse est étroite. Une réserve clé est la taille de l’échantillon.",
                        "ipotesi · ambito · caveat · quadro\nL’ipotesi è stretta. Un caveat chiave è la dimensione del campione.",
                        "Hypothese · Umfang · Vorbehalt · Rahmen\nDie Hypothese ist eng. Ein zentraler Vorbehalt ist die Stichprobengröße."
                    ),
                    'itens' => [
                        dlinha('hipótese', 'a hipótese é estreita de propósito', 'hypothesis', 'The hypothesis is deliberately narrow', 'hipótesis', 'La hipótesis es deliberadamente estrecha', 'hypothèse', 'L hypothèse est volontairement étroite', 'ipotesi', 'L ipotesi è volutamente stretta', 'Hypothese', 'Die Hypothese ist bewusst eng'),
                        dlinha('alcance', 'o alcance exclui o interior', 'scope', 'The scope excludes rural areas', 'alcance', 'El alcance excluye el interior', 'périmètre', 'Le périmètre exclut les zones rurales', 'ambito', 'L ambito esclude le aree rurali', 'Umfang', 'Der Umfang schließt ländliche Gebiete aus'),
                        dlinha('ressalva', 'a ressalva é o tamanho da amostra', 'caveat', 'The caveat is the sample size', 'salvedad', 'La salvedad es el tamaño de la muestra', 'réserve', 'La réserve est la taille de l échantillon', 'caveat', 'Il caveat è la dimensione del campione', 'Vorbehalt', 'Der Vorbehalt ist die Stichprobengröße'),
                        dlinha('quadro teórico', 'o quadro teórico muda no capítulo dois', 'framework', 'The framework shifts in chapter two', 'marco', 'El marco cambia en el capítulo dos', 'cadre', 'Le cadre change au chapitre deux', 'quadro', 'Il quadro cambia nel capitolo due', 'Rahmen', 'Der Rahmen wechselt in Kapitel zwei'),
                    ],
                ],
                [
                    'titulo' => 'O que não cubro',
                    'teoria' => dteoria(
                        "beyond the scope · further research · limitation · replicability\nThat debate is beyond the scope. Replicability remains a limitation.",
                        "fuera del alcance · investigación futura · limitación · replicabilidad\nEse debate queda fuera del alcance. La replicabilidad sigue siendo una limitación.",
                        "hors périmètre · recherches futures · limite · replicabilité\nCe débat est hors périmètre. La replicabilité reste une limite.",
                        "fuori ambito · ricerca futura · limite · replicabilità\nQuel dibattito è fuori ambito. La replicabilità resta un limite.",
                        "außerhalb des Umfangs · weitere Forschung · Einschränkung · Replizierbarkeit\nDiese Debatte liegt außerhalb des Umfangs. Replizierbarkeit bleibt eine Einschränkung."
                    ),
                    'itens' => [
                        dlinha('fora do recorte', 'esse debate fica fora do recorte', 'beyond the scope', 'That debate is beyond the scope', 'fuera del alcance', 'Ese debate queda fuera del alcance', 'hors périmètre', 'Ce débat est hors périmètre', 'fuori ambito', 'Quel dibattito è fuori ambito', 'außerhalb des Umfangs', 'Diese Debatte liegt außerhalb des Umfangs'),
                        dlinha('pesquisa futura', 'fica para pesquisa futura', 'further research', 'It is left to further research', 'investigación futura', 'Queda para investigación futura', 'recherches futures', 'Cela reste pour des recherches futures', 'ricerca futura', 'Resta per la ricerca futura', 'weitere Forschung', 'Es bleibt weiterer Forschung überlassen'),
                        dlinha('limitação', 'a limitação é o recorte temporal', 'limitation', 'The limitation is the time frame', 'limitación', 'La limitación es el recorte temporal', 'limite', 'La limite est le cadre temporel', 'limite', 'Il limite è l arco temporale', 'Einschränkung', 'Die Einschränkung ist der Zeitraum'),
                        dlinha('replicabilidade', 'a replicabilidade é frágil', 'replicability', 'Replicability is fragile', 'replicabilidad', 'La replicabilidad es frágil', 'replicabilité', 'La replicabilité est fragile', 'replicabilità', 'La replicabilità è fragile', 'Replizierbarkeit', 'Die Replizierbarkeit ist fragil'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C1: reunião tensa',
            'desc' => 'Interromper com educação, recuar e registrar o dissenso.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A interrupção',
                    'teoria' => dteoria(
                        "if I may · park that · off the record · minute that\nIf I may, let us park that. Minute the disagreement.",
                        "si me permite · lo dejamos · extraoficial · conste en acta\nSi me permite, lo dejamos. Que conste el desacuerdo.",
                        "si je puis · mettons ça de côté · off the record · notez cela\nSi je puis, mettons ça de côté. Notez le désaccord.",
                        "se posso · parcheggiamo · extra ufficio · verbalizzi\nSe posso, parcheggiamo questo. Verbalizzi il dissenso.",
                        "wenn ich darf · zurückstellen · inoffiziell · protokollieren\nWenn ich darf, stellen wir das zurück. Protokollieren Sie die Uneinigkeit."
                    ),
                    'itens' => [
                        dlinha('se me permite', 'se me permite, um ponto', 'if I may', 'If I may one point', 'si me permite', 'Si me permite un punto', 'si je puis', 'Si je puis un point', 'se posso', 'Se posso un punto', 'wenn ich darf', 'Wenn ich darf ein Punkt'),
                        dlinha('deixar para depois', 'deixemos isso para depois', 'park that', 'Let us park that', 'lo dejamos', 'Lo dejamos para después', 'mettons ça de côté', 'Mettons ça de côté', 'parcheggiamo', 'Parcheggiamo questo', 'zurückstellen', 'Stellen wir das zurück'),
                        dlinha('fora de ata', 'isso é fora de ata', 'off the record', 'This is off the record', 'extraoficial', 'Esto es extraoficial', 'off the record', 'C est off the record', 'extra ufficio', 'Questo è extra ufficio', 'inoffiziell', 'Das ist inoffiziell'),
                        dlinha('registre em ata', 'registre o dissenso em ata', 'minute that', 'Minute the disagreement', 'conste en acta', 'Que conste el desacuerdo', 'notez cela', 'Notez le désaccord', 'verbalizzi', 'Verbalizzi il dissenso', 'protokollieren', 'Protokollieren Sie die Uneinigkeit'),
                    ],
                ],
                [
                    'titulo' => 'O recuo',
                    'teoria' => dteoria(
                        "stand by · walk back · escalate · de-escalate\nI stand by the numbers. Let us de-escalate before we escalate this.",
                        "me ratifico · me desdigo · escalar · bajar el tono\nMe ratifico en los números. Bajemos el tono antes de escalar esto.",
                        "je maintiens · je reviens · monter · désamorcer\nJe maintiens les chiffres. Désamorçons avant de monter d’un cran.",
                        "confermo · ritiro · alzare · sdrammatizzare\nConfermo i numeri. Sdrammatizziamo prima di alzare il livello.",
                        "stehe dazu · nehme zurück · eskalieren · deeskalieren\nIch stehe zu den Zahlen. Lassen Sie uns deeskalieren bevor wir eskalieren."
                    ),
                    'itens' => [
                        dlinha('mantenho', 'mantenho os números', 'stand by', 'I stand by the numbers', 'me ratifico', 'Me ratifico en los números', 'je maintiens', 'Je maintiens les chiffres', 'confermo', 'Confermo i numeri', 'stehe dazu', 'Ich stehe zu den Zahlen'),
                        dlinha('recuo', 'recuo nessa formulação', 'walk back', 'I walk back that wording', 'me desdigo', 'Me desdigo de esa formulación', 'je reviens', 'Je reviens sur cette formulation', 'ritiro', 'Ritiro quella formulazione', 'nehme zurück', 'Ich nehme diese Formulierung zurück'),
                        dlinha('escalar', 'não vamos escalar agora', 'escalate', 'Let us not escalate now', 'escalar', 'No escalemos ahora', 'monter', 'Ne montons pas maintenant', 'alzare', 'Non alziamo ora', 'eskalieren', 'Lassen Sie uns jetzt nicht eskalieren'),
                        dlinha('baixar o tom', 'baixemos o tom', 'de-escalate', 'Let us de-escalate', 'bajar el tono', 'Bajemos el tono', 'désamorcer', 'Désamorçons', 'sdrammatizzare', 'Sdrammatizziamo', 'deeskalieren', 'Lassen Sie uns deeskalieren'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C1: evidência quantitativa',
            'desc' => 'Significância, poder estatístico e o que o p-valor não diz.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O teste',
                    'teoria' => dteoria(
                        "significant · underpowered · p-value · effect size\nThe result is significant but underpowered. Report the effect size, not only the p-value.",
                        "significativo · con poca potencia · p-valor · tamaño del efecto\nEl resultado es significativo pero con poca potencia. Informe el tamaño del efecto, no solo el p-valor.",
                        "significatif · sous-puissant · p-valeur · taille d’effet\nLe résultat est significatif mais sous-puissant. Donnez la taille d’effet, pas seulement la p-valeur.",
                        "significativo · poco potente · p-value · dimensione dell’effetto\nIl risultato è significativo ma poco potente. Riporti la dimensione dell’effetto, non solo il p-value.",
                        "signifikant · unterpowert · p-Wert · Effektstärke\nDas Ergebnis ist signifikant, aber unterpowert. Berichten Sie die Effektstärke, nicht nur den p-Wert."
                    ),
                    'itens' => [
                        dlinha('significativo', 'o resultado é significativo', 'significant', 'The result is significant', 'significativo', 'El resultado es significativo', 'significatif', 'Le résultat est significatif', 'significativo', 'Il risultato è significativo', 'signifikant', 'Das Ergebnis ist signifikant'),
                        dlinha('pouca potência', 'o estudo tem pouca potência', 'underpowered', 'The study is underpowered', 'con poca potencia', 'El estudio tiene poca potencia', 'sous-puissant', 'L étude est sous-puissante', 'poco potente', 'Lo studio è poco potente', 'unterpowert', 'Die Studie ist unterpowert'),
                        dlinha('p-valor', 'o p-valor sozinho não basta', 'p-value', 'The p-value alone is not enough', 'p-valor', 'El p-valor solo no basta', 'p-valeur', 'La p-valeur seule ne suffit pas', 'p-value', 'Il p-value da solo non basta', 'p-Wert', 'Der p-Wert allein reicht nicht'),
                        dlinha('tamanho do efeito', 'informe o tamanho do efeito', 'effect size', 'Report the effect size', 'tamaño del efecto', 'Informe el tamaño del efecto', 'taille d effet', 'Donnez la taille d effet', 'dimensione dell effetto', 'Riporti la dimensione dell effetto', 'Effektstärke', 'Berichten Sie die Effektstärke'),
                    ],
                ],
                [
                    'titulo' => 'A leitura',
                    'teoria' => dteoria(
                        "confounder · robustness · overfitting · external validity\nA confounder remains. External validity is the weak point.",
                        "confusor · robustez · sobreajuste · validez externa\nQueda un confusor. La validez externa es el punto débil.",
                        "facteur de confusion · robustesse · surapprentissage · validité externe\nUn facteur de confusion demeure. La validité externe est le point faible.",
                        "confondente · robustezza · overfitting · validità esterna\nResta un confondente. La validità esterna è il punto debole.",
                        "Störfaktor · Robustheit · Overfitting · externe Validität\nEin Störfaktor bleibt. Die externe Validität ist die Schwachstelle."
                    ),
                    'itens' => [
                        dlinha('confundidor', 'ainda há um confundidor', 'confounder', 'A confounder remains', 'confusor', 'Queda un confusor', 'facteur de confusion', 'Un facteur de confusion demeure', 'confondente', 'Resta un confondente', 'Störfaktor', 'Ein Störfaktor bleibt'),
                        dlinha('robustez', 'teste a robustez', 'robustness', 'Test the robustness', 'robustez', 'Pruebe la robustez', 'robustesse', 'Testez la robustesse', 'robustezza', 'Testi la robustezza', 'Robustheit', 'Prüfen Sie die Robustheit'),
                        dlinha('overfitting', 'há risco de overfitting', 'overfitting', 'There is a risk of overfitting', 'sobreajuste', 'Hay riesgo de sobreajuste', 'surapprentissage', 'Il y a un risque de surapprentissage', 'overfitting', 'C è rischio di overfitting', 'Overfitting', 'Es gibt ein Overfitting-Risiko'),
                        dlinha('validade externa', 'a validade externa é fraca', 'external validity', 'External validity is weak', 'validez externa', 'La validez externa es débil', 'validité externe', 'La validité externe est faible', 'validità esterna', 'La validità esterna è debole', 'externe Validität', 'Die externe Validität ist schwach'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C2: humor e subtexto',
            'desc' => 'O que a piada faz e o que ela esconde.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'A piada',
                    'teoria' => dteoria(
                        "deadpan · in-joke · to land · fall flat\nThe deadpan line did not land. It was an in-joke that fell flat.",
                        "seco · chiste interno · funcionar · caer plano\nLa línea seca no funcionó. Era un chiste interno que cayó plano.",
                        "pince-sans-rire · private joke · passer · tomber à plat\nLa réplique pince-sans-rire n’est pas passée. C’était une private joke qui est tombée à plat.",
                        "impassibile · battuta interna · funzionare · cadere piatta\nLa battuta impassibile non ha funzionato. Era una battuta interna caduta piatta.",
                        "unbewegt · Insiderwitz · zünden · flachfallen\nDie unbewegte Pointe zündete nicht. Es war ein Insiderwitz, der flachfiel."
                    ),
                    'itens' => [
                        dlinha('impassível', 'a fala impassível não pegou', 'deadpan', 'The deadpan line did not land', 'seco', 'La línea seca no funcionó', 'pince-sans-rire', 'La réplique pince-sans-rire n est pas passée', 'impassibile', 'La battuta impassibile non ha funzionato', 'unbewegt', 'Die unbewegte Pointe zündete nicht'),
                        dlinha('piada interna', 'era uma piada interna', 'in-joke', 'It was an in-joke', 'chiste interno', 'Era un chiste interno', 'private joke', 'C était une private joke', 'battuta interna', 'Era una battuta interna', 'Insiderwitz', 'Es war ein Insiderwitz'),
                        dlinha('pegar / funcionar', 'a piada não pegou', 'to land', 'The joke did not land', 'funcionar', 'El chiste no funcionó', 'passer', 'La blague n est pas passée', 'funzionare', 'La battuta non ha funzionato', 'zünden', 'Der Witz zündete nicht'),
                        dlinha('cair por terra', 'caiu por terra na sala', 'fall flat', 'It fell flat in the room', 'caer plano', 'Cayó plano en la sala', 'tomber à plat', 'Elle est tombée à plat dans la salle', 'cadere piatta', 'È caduta piatta in sala', 'flachfallen', 'Er fiel im Raum flach'),
                    ],
                ],
                [
                    'titulo' => 'O subtexto',
                    'teoria' => dteoria(
                        "subtext · barbed · left unsaid · read between the lines\nThe compliment was barbed. Read between the lines: the offer is dead.",
                        "subtexto · con púa · lo no dicho · leer entre líneas\nEl cumplido tenía púa. Lea entre líneas: la oferta está muerta.",
                        "sous-texte · acéré · non-dit · lire entre les lignes\nLe compliment était acéré. Lisez entre les lignes : l’offre est morte.",
                        "sottotesto · pungente · non detto · leggere tra le righe\nIl complimento era pungente. Legga tra le righe: l’offerta è morta.",
                        "Subtext · spitz · Ungesagtes · zwischen den Zeilen\nDas Kompliment war spitz. Lesen Sie zwischen den Zeilen: das Angebot ist tot."
                    ),
                    'itens' => [
                        dlinha('subtexto', 'o subtexto era um recado', 'subtext', 'The subtext was a warning', 'subtexto', 'El subtexto era un recado', 'sous-texte', 'Le sous-texte était un avertissement', 'sottotesto', 'Il sottotesto era un avviso', 'Subtext', 'Der Subtext war eine Warnung'),
                        dlinha('com farpa', 'o elogio vinha com farpa', 'barbed', 'The compliment was barbed', 'con púa', 'El cumplido tenía púa', 'acéré', 'Le compliment était acéré', 'pungente', 'Il complimento era pungente', 'spitz', 'Das Kompliment war spitz'),
                        dlinha('o não dito', 'o não dito pesava mais', 'left unsaid', 'What was left unsaid weighed more', 'lo no dicho', 'Lo no dicho pesaba más', 'non-dit', 'Le non-dit pesait davantage', 'non detto', 'Il non detto pesava di più', 'Ungesagtes', 'Das Ungesagte wog mehr'),
                        dlinha('ler nas entrelinhas', 'leia nas entrelinhas', 'read between the lines', 'Read between the lines', 'leer entre líneas', 'Lea entre líneas', 'lire entre les lignes', 'Lisez entre les lignes', 'leggere tra le righe', 'Legga tra le righe', 'zwischen den Zeilen', 'Lesen Sie zwischen den Zeilen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C2: ambiguidade',
            'desc' => 'Polissemia, anfibologia e quando a ambiguidade é estratégica.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'Dois sentidos',
                    'teoria' => dteoria(
                        "polysemy · amphiboly · hedge · constructive ambiguity\nThe hedge is deliberate. They chose constructive ambiguity.",
                        "polisemia · anfibología · matiz evasivo · ambigüedad constructiva\nEl matiz evasivo es deliberado. Eligieron una ambigüedad constructiva.",
                        "polysémie · amphibologie · hedge · ambiguïté constructive\nLe hedge est délibéré. Ils ont choisi une ambiguïté constructive.",
                        "polisemia · anfibologia · hedge · ambiguità costruttiva\nL’hedge è deliberato. Hanno scelto un’ambiguità costruttiva.",
                        "Polysemie · Amphibolie · Absicherung · konstruktive Mehrdeutigkeit\nDie Absicherung ist Absicht. Sie wählten konstruktive Mehrdeutigkeit."
                    ),
                    'itens' => [
                        dlinha('polissemia', 'a polissemia do título é proposital', 'polysemy', 'The polysemy of the title is intentional', 'polisemia', 'La polisemia del título es intencional', 'polysémie', 'La polysémie du titre est intentionnelle', 'polisemia', 'La polisemia del titolo è intenzionale', 'Polysemie', 'Die Polysemie des Titels ist Absicht'),
                        dlinha('anfibologia', 'a anfibologia embaralha o sujeito', 'amphiboly', 'The amphiboly blurs the subject', 'anfibología', 'La anfibología confunde el sujeto', 'amphibologie', 'L amphibologie brouille le sujet', 'anfibologia', 'L anfibologia confonde il soggetto', 'Amphibolie', 'Die Amphibolie verwischt das Subjekt'),
                        dlinha('hedge / ressalva', 'o hedge é deliberado', 'hedge', 'The hedge is deliberate', 'matiz evasivo', 'El matiz evasivo es deliberado', 'hedge', 'Le hedge est délibéré', 'hedge', 'L hedge è deliberato', 'Absicherung', 'Die Absicherung ist Absicht'),
                        dlinha('ambiguidade construtiva', 'optaram por ambiguidade construtiva', 'constructive ambiguity', 'They chose constructive ambiguity', 'ambigüedad constructiva', 'Eligieron una ambigüedad constructiva', 'ambiguïté constructive', 'Ils ont choisi une ambiguïté constructive', 'ambiguità costruttiva', 'Hanno scelto un ambiguità costruttiva', 'konstruktive Mehrdeutigkeit', 'Sie wählten konstruktive Mehrdeutigkeit'),
                    ],
                ],
                [
                    'titulo' => 'Desfazer o nó',
                    'teoria' => dteoria(
                        "disambiguate · antecedent · garden-path · paraphrase\nDisambiguate the antecedent. A paraphrase removes the garden-path.",
                        "desambiguar · antecedente · garden-path · parafrasear\nDesambigue el antecedente. Una paráfrasis quita el garden-path.",
                        "désambiguïser · antécédent · garden-path · paraphraser\nDésambiguïsez l’antécédent. Une paraphrase lève le garden-path.",
                        "disambiguare · antecedente · garden-path · parafrasare\nDisambigui l’antecedente. Una parafrasi toglie il garden-path.",
                        "disambiguieren · Bezugswort · Garden-Path · umschreiben\nDisambiguieren Sie das Bezugswort. Eine Umschreibung hebt den Garden-Path auf."
                    ),
                    'itens' => [
                        dlinha('desambiguar', 'desambigue o antecedente', 'disambiguate', 'Disambiguate the antecedent', 'desambiguar', 'Desambigue el antecedente', 'désambiguïser', 'Désambiguïsez l antécédent', 'disambiguare', 'Disambigui l antecedente', 'disambiguieren', 'Disambiguieren Sie das Bezugswort'),
                        dlinha('antecedente', 'o antecedente está longe demais', 'antecedent', 'The antecedent is too far', 'antecedente', 'El antecedente está demasiado lejos', 'antécédent', 'L antécédent est trop loin', 'antecedente', 'L antecedente è troppo lontano', 'Bezugswort', 'Das Bezugswort ist zu weit'),
                        dlinha('garden-path', 'a frase é um garden-path', 'garden-path', 'The sentence is a garden-path', 'garden-path', 'La frase es un garden-path', 'garden-path', 'La phrase est un garden-path', 'garden-path', 'La frase è un garden-path', 'Garden-Path', 'Der Satz ist ein Garden-Path'),
                        dlinha('parafrasear', 'parafraseie para clarear', 'paraphrase', 'Paraphrase to make it clear', 'parafrasear', 'Parafrasee para aclarar', 'paraphraser', 'Paraphrasez pour clarifier', 'parafrasare', 'Parafrasi per chiarire', 'umschreiben', 'Umschreiben Sie zur Klärung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C2: registro editorial',
            'desc' => 'Do lead ao corte: o que o editor tira e o que o oral não aguenta.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O corte',
                    'teoria' => dteoria(
                        "lead · kill · house style · purple prose\nKill the adjective. The house style forbids purple prose.",
                        "entrada · cortar · estilo de la casa · prosa recargada\nCorte el adjetivo. El estilo de la casa prohíbe la prosa recargada.",
                        "attaque · couper · charte · prose ampoulée\nCoupez l’adjectif. La charte interdit la prose ampoulée.",
                        "attacco · tagliare · stile della casa · prosa ampollosa\nTagli l’aggettivo. Lo stile della casa vieta la prosa ampollosa.",
                        "Lead · streichen · Hausstil · schwülstige Prosa\nStreichen Sie das Adjektiv. Der Hausstil verbietet schwülstige Prosa."
                    ),
                    'itens' => [
                        dlinha('lead / abertura', 'o lead promete demais', 'lead', 'The lead overpromises', 'entrada', 'La entrada promete de más', 'attaque', 'L attaque promet trop', 'attacco', 'L attacco promette troppo', 'Lead', 'Das Lead verspricht zu viel'),
                        dlinha('cortar', 'corte o adjetivo', 'kill', 'Kill the adjective', 'cortar', 'Corte el adjetivo', 'couper', 'Coupez l adjectif', 'tagliare', 'Tagli l aggettivo', 'streichen', 'Streichen Sie das Adjektiv'),
                        dlinha('estilo da casa', 'o estilo da casa é seco', 'house style', 'The house style is dry', 'estilo de la casa', 'El estilo de la casa es seco', 'charte', 'La charte est sèche', 'stile della casa', 'Lo stile della casa è asciutto', 'Hausstil', 'Der Hausstil ist trocken'),
                        dlinha('prosa inflada', 'tire a prosa inflada', 'purple prose', 'Cut the purple prose', 'prosa recargada', 'Quite la prosa recargada', 'prose ampoulée', 'Enlevez la prose ampoulée', 'prosa ampollosa', 'Togliete la prosa ampollosa', 'schwülstige Prosa', 'Streichen Sie die schwülstige Prosa'),
                    ],
                ],
                [
                    'titulo' => 'O oral',
                    'teoria' => dteoria(
                        "cadence · breath · on the page · spoken cadence\nIt works on the page. It dies in spoken cadence.",
                        "cadencia · respiración · en la página · cadencia oral\nFunciona en la página. Muere en la cadencia oral.",
                        "cadence · souffle · sur la page · cadence orale\nÇa marche sur la page. Ça meurt à l’oral.",
                        "cadenza · respiro · sulla pagina · cadenza parlata\nFunziona sulla pagina. Muore nella cadenza parlata.",
                        "Kadenz · Atem · auf der Seite · gesprochene Kadenz\nEs funktioniert auf der Seite. Es stirbt in gesprochener Kadenz."
                    ),
                    'itens' => [
                        dlinha('cadência', 'a cadência está pesada', 'cadence', 'The cadence is heavy', 'cadencia', 'La cadencia es pesada', 'cadence', 'La cadence est lourde', 'cadenza', 'La cadenza è pesante', 'Kadenz', 'Die Kadenz ist schwer'),
                        dlinha('respiração', 'falta respiração na frase', 'breath', 'The sentence has no breath', 'respiración', 'A la frase le falta respiración', 'souffle', 'La phrase n a pas de souffle', 'respiro', 'Alla frase manca il respiro', 'Atem', 'Dem Satz fehlt der Atem'),
                        dlinha('no papel', 'funciona no papel', 'on the page', 'It works on the page', 'en la página', 'Funciona en la página', 'sur la page', 'Ça marche sur la page', 'sulla pagina', 'Funziona sulla pagina', 'auf der Seite', 'Es funktioniert auf der Seite'),
                        dlinha('cadência falada', 'morre na cadência falada', 'spoken cadence', 'It dies in spoken cadence', 'cadencia oral', 'Muere en la cadencia oral', 'cadence orale', 'Ça meurt à l oral', 'cadenza parlata', 'Muore nella cadenza parlata', 'gesprochene Kadenz', 'Es stirbt in gesprochener Kadenz'),
                    ],
                ],
            ],
        ],
    ];
}
