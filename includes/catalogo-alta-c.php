<?php

function alta_c(): array
{
    return [
        [
            'titulo' => 'Due diligence C1',
            'desc' => 'O que se abre, o que se redige e o que fica em anexo.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A sala de dados',
                    'teoria' => dteoria(
                        "data room · red flag · representation · indemnity\nThe data room opened yesterday. A red flag is the pending suit. Check the representations. The indemnity is capped.",
                        "sala de datos · bandera roja · declaración · indemnidad\nLa sala de datos abrió ayer. Una bandera roja es el pleito pendiente. Revisa las declaraciones. La indemnidad tiene tope.",
                        "data room · drapeau rouge · déclaration · indemnité\nLa data room a ouvert hier. Un drapeau rouge est le procès en cours. Vérifie les déclarations. L indemnité est plafonnée.",
                        "data room · bandiera rossa · dichiarazione · indennità\nLa data room è aperta da ieri. Una bandiera rossa è la causa pendente. Controlla le dichiarazioni. L indennità è limitata.",
                        "Datenraum · Warnsignal · Zusicherung · Freistellung\nDer Datenraum öffnete gestern. Ein Warnsignal ist die laufende Klage. Prüfe die Zusicherungen. Die Freistellung ist gedeckelt."
                    ),
                    'itens' => [
                        dlinha('sala de dados', 'a sala de dados abriu ontem', 'data room', 'The data room opened yesterday', 'sala de datos', 'La sala de datos abrió ayer', 'data room', 'La data room a ouvert hier', 'data room', 'La data room è aperta da ieri', 'Datenraum', 'Der Datenraum öffnete gestern'),
                        dlinha('alerta', 'o alerta é o processo pendente', 'red flag', 'The red flag is the pending suit', 'bandera roja', 'La bandera roja es el pleito pendiente', 'drapeau rouge', 'Le drapeau rouge est le procès en cours', 'bandiera rossa', 'La bandiera rossa è la causa pendente', 'Warnsignal', 'Das Warnsignal ist die laufende Klage'),
                        dlinha('declaração', 'confira as declarações', 'representation', 'Check the representations', 'declaración', 'Revisa las declaraciones', 'déclaration', 'Vérifie les déclarations', 'dichiarazione', 'Controlla le dichiarazioni', 'Zusicherung', 'Prüfe die Zusicherungen'),
                        dlinha('indenidade', 'a indenidade tem teto', 'indemnity', 'The indemnity is capped', 'indemnidad', 'La indemnidad tiene tope', 'indemnité', 'L indemnité est plafonnée', 'indennità', 'L indennità è limitata', 'Freistellung', 'Die Freistellung ist gedeckelt'),
                    ],
                ],
                [
                    'titulo' => 'O memorando',
                    'teoria' => dteoria(
                        "memo · material · walk away · condition precedent\nThe memo flags what is material. We may walk away. Closing needs a condition precedent.",
                        "memo · material · retirarse · condición precedente\nEl memo señala lo material. Podemos retirarnos. El cierre pide una condición precedente.",
                        "mémo · significatif · se retirer · condition suspensive\nLe mémo signale ce qui est significatif. On peut se retirer. La clôture exige une condition suspensive.",
                        "memo · materiale · ritirarsi · condizione sospensiva\nIl memo segnala ciò che è materiale. Possiamo ritirarci. La chiusura chiede una condizione sospensiva.",
                        "Memo · wesentlich · aussteigen · aufschiebende Bedingung\nDas Memo markiert, was wesentlich ist. Wir können aussteigen. Der Abschluss braucht eine aufschiebende Bedingung."
                    ),
                    'itens' => [
                        dlinha('memorando', 'o memorando aponta o que é material', 'memo', 'The memo flags what is material', 'memo', 'El memo señala lo material', 'mémo', 'Le mémo signale ce qui est significatif', 'memo', 'Il memo segnala ciò che è materiale', 'Memo', 'Das Memo markiert was wesentlich ist'),
                        dlinha('material', 'isto é material para o preço', 'material', 'This is material to the price', 'material', 'Esto es material para el precio', 'significatif', 'C est significatif pour le prix', 'materiale', 'Questo è materiale per il prezzo', 'wesentlich', 'Das ist wesentlich für den Preis'),
                        dlinha('sair', 'podemos sair do negócio', 'walk away', 'We may walk away', 'retirarse', 'Podemos retirarnos', 'se retirer', 'On peut se retirer', 'ritirarsi', 'Possiamo ritirarci', 'aussteigen', 'Wir können aussteigen'),
                        dlinha('condição precedente', 'o fechamento pede condição precedente', 'condition precedent', 'Closing needs a condition precedent', 'condición precedente', 'El cierre pide una condición precedente', 'condition suspensive', 'La clôture exige une condition suspensive', 'condizione sospensiva', 'La chiusura chiede una condizione sospensiva', 'aufschiebende Bedingung', 'Der Abschluss braucht eine aufschiebende Bedingung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Mesa-redonda C1',
            'desc' => 'A tese de cada um, o tempo e o que o moderador corta.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A abertura',
                    'teoria' => dteoria(
                        "round table · opening statement · keep to time · right of reply\nThis is a round table, not a keynote. Opening statements are three minutes. Keep to time. There is a right of reply.",
                        "mesa redonda · declaración inicial · respeta el tiempo · derecho de réplica\nEs una mesa redonda, no una ponencia. Las declaraciones iniciales son de tres minutos. Respeta el tiempo. Hay derecho de réplica.",
                        "table ronde · propos d ouverture · tiens le temps · droit de réponse\nC est une table ronde, pas une keynote. Les propos d ouverture durent trois minutes. Tiens le temps. Il y a un droit de réponse.",
                        "tavola rotonda · dichiarazione d apertura · tieni il tempo · diritto di replica\nÈ una tavola rotonda, non una keynote. Le dichiarazioni d apertura durano tre minuti. Tieni il tempo. C è diritto di replica.",
                        "Runde · Eingangsstatement · halt die Zeit · Gegendarstellung\nDas ist eine Runde, keine Keynote. Eingangsstatements dauern drei Minuten. Halt die Zeit. Es gibt ein Recht auf Gegendarstellung."
                    ),
                    'itens' => [
                        dlinha('mesa-redonda', 'isto é uma mesa-redonda', 'round table', 'This is a round table', 'mesa redonda', 'Es una mesa redonda', 'table ronde', 'C est une table ronde', 'tavola rotonda', 'È una tavola rotonda', 'Runde', 'Das ist eine Runde'),
                        dlinha('fala inicial', 'a fala inicial tem três minutos', 'opening statement', 'Opening statements are three minutes', 'declaración inicial', 'Las declaraciones iniciales son de tres minutos', 'propos d ouverture', 'Les propos d ouverture durent trois minutes', 'dichiarazione d apertura', 'Le dichiarazioni d apertura durano tre minuti', 'Eingangsstatement', 'Eingangsstatements dauern drei Minuten'),
                        dlinha('respeite o tempo', 'respeite o tempo', 'keep to time', 'Keep to time', 'respeta el tiempo', 'Respeta el tiempo', 'tiens le temps', 'Tiens le temps', 'tieni il tempo', 'Tieni il tempo', 'halt die Zeit', 'Halt die Zeit'),
                        dlinha('direito de replica', 'há direito de replica', 'right of reply', 'There is a right of reply', 'derecho de réplica', 'Hay derecho de réplica', 'droit de réponse', 'Il y a un droit de réponse', 'diritto di replica', 'C è diritto di replica', 'Gegendarstellung', 'Es gibt ein Recht auf Gegendarstellung'),
                    ],
                ],
                [
                    'titulo' => 'O corte',
                    'teoria' => dteoria(
                        "I must cut you off · that is a speech · one question · we park\nI must cut you off. That is a speech. One question each. We park the rest.",
                        "tengo que cortarte · eso es un discurso · una pregunta · aparcamos\nTengo que cortarte. Eso es un discurso. Una pregunta cada uno. Aparcamos el resto.",
                        "je dois te couper · c est un discours · une question · on parque\nJe dois te couper. C est un discours. Une question chacun. On parque le reste.",
                        "devo tagliarti · è un discorso · una domanda · parcheggiamo\nDevo tagliarti. È un discorso. Una domanda ciascuno. Parcheggiamo il resto.",
                        "ich muss dich unterbrechen · das ist eine Rede · eine Frage · wir parken\nIch muss dich unterbrechen. Das ist eine Rede. Eine Frage pro Person. Wir parken den Rest."
                    ),
                    'itens' => [
                        dlinha('preciso cortar', 'preciso cortar você', 'I must cut you off', 'I must cut you off', 'tengo que cortarte', 'Tengo que cortarte', 'je dois te couper', 'Je dois te couper', 'devo tagliarti', 'Devo tagliarti', 'ich muss dich unterbrechen', 'Ich muss dich unterbrechen'),
                        dlinha('isso é um discurso', 'isso já é um discurso', 'that is a speech', 'That is a speech', 'eso es un discurso', 'Eso es un discurso', 'c est un discours', 'C est un discours', 'è un discorso', 'È un discorso', 'das ist eine Rede', 'Das ist eine Rede'),
                        dlinha('uma pergunta', 'uma pergunta para cada um', 'one question', 'One question each', 'una pregunta', 'Una pregunta cada uno', 'une question', 'Une question chacun', 'una domanda', 'Una domanda ciascuno', 'eine Frage', 'Eine Frage pro Person'),
                        dlinha('estacionamos', 'estacionamos o resto', 'we park', 'We park the rest', 'aparcamos', 'Aparcamos el resto', 'on parque', 'On parque le reste', 'parcheggiamo', 'Parcheggiamo il resto', 'wir parken', 'Wir parken den Rest'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Relato de campo C1',
            'desc' => 'O que se viu, o que se inferiu e o que o caderno não segura.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O caderno',
                    'teoria' => dteoria(
                        "fieldnote · observed · inferred · off the record\nThe fieldnote separates observed from inferred. That remark was off the record.",
                        "nota de campo · observado · inferido · off the record\nLa nota de campo separa lo observado de lo inferido. Ese comentario fue off the record.",
                        "note de terrain · observé · inféré · off the record\nLa note de terrain sépare l observé de l inféré. Cette remarque était off the record.",
                        "nota di campo · osservato · inferito · off the record\nLa nota di campo separa l osservato dall inferito. Quel commento era off the record.",
                        "Feldnotiz · beobachtet · geschlossen · off the record\nDie Feldnotiz trennt Beobachtetes von Geschlossenem. Die Bemerkung war off the record."
                    ),
                    'itens' => [
                        dlinha('nota de campo', 'a nota de campo separa o visto do inferido', 'fieldnote', 'The fieldnote separates observed from inferred', 'nota de campo', 'La nota de campo separa lo observado de lo inferido', 'note de terrain', 'La note de terrain sépare l observé de l inféré', 'nota di campo', 'La nota di campo separa l osservato dall inferito', 'Feldnotiz', 'Die Feldnotiz trennt Beobachtetes von Geschlossenem'),
                        dlinha('observado', 'isto foi observado', 'observed', 'This was observed', 'observado', 'Esto fue observado', 'observé', 'Ceci a été observé', 'osservato', 'Questo è stato osservato', 'beobachtet', 'Das wurde beobachtet'),
                        dlinha('inferido', 'isto foi inferido', 'inferred', 'This was inferred', 'inferido', 'Esto fue inferido', 'inféré', 'Ceci a été inféré', 'inferito', 'Questo è stato inferito', 'geschlossen', 'Das wurde geschlossen'),
                        dlinha('fora do registro', 'aquilo ficou fora do registro', 'off the record', 'That was off the record', 'off the record', 'Eso fue off the record', 'off the record', 'C était off the record', 'off the record', 'Era off the record', 'off the record', 'Das war off the record'),
                    ],
                ],
                [
                    'titulo' => 'O que o caderno não segura',
                    'teoria' => dteoria(
                        "saturation · gatekeeper · positionality · I left early\nI reached saturation on day four. The gatekeeper shaped access. State your positionality. I left early and that matters.",
                        "saturación · portero · posicionalidad · me fui temprano\nLlegué a saturación el día cuatro. El portero moldeó el acceso. Declara tu posicionalidad. Me fui temprano y eso importa.",
                        "saturation · portier · positionnalité · je suis parti tôt\nJ ai atteint la saturation le jour quatre. Le portier a façonné l accès. Déclare ta positionnalité. Je suis parti tôt et ça compte.",
                        "saturazione · gatekeeper · posizionalità · sono uscito presto\nHo raggiunto la saturazione il giorno quattro. Il gatekeeper ha formato l accesso. Dichiara la posizionalità. Sono uscito presto e conta.",
                        "Sättigung · Türhüter · Positionierung · ich ging früh\nIch erreichte Sättigung am Tag vier. Der Türhüter formte den Zugang. Nenn deine Positionierung. Ich ging früh und das zählt."
                    ),
                    'itens' => [
                        dlinha('saturação', 'cheguei à saturação no dia quatro', 'saturation', 'I reached saturation on day four', 'saturación', 'Llegué a saturación el día cuatro', 'saturation', 'J ai atteint la saturation le jour quatre', 'saturazione', 'Ho raggiunto la saturazione il giorno quattro', 'Sättigung', 'Ich erreichte Sättigung am Tag vier'),
                        dlinha('porteiro', 'o porteiro moldou o acesso', 'gatekeeper', 'The gatekeeper shaped access', 'portero', 'El portero moldeó el acceso', 'portier', 'Le portier a façonné l accès', 'gatekeeper', 'Il gatekeeper ha formato l accesso', 'Türhüter', 'Der Türhüter formte den Zugang'),
                        dlinha('posicionalidade', 'declare a posicionalidade', 'positionality', 'State your positionality', 'posicionalidad', 'Declara tu posicionalidad', 'positionnalité', 'Déclare ta positionnalité', 'posizionalità', 'Dichiara la posizionalità', 'Positionierung', 'Nenn deine Positionierung'),
                        dlinha('saí cedo', 'saí cedo e isso importa', 'I left early', 'I left early and that matters', 'me fui temprano', 'Me fui temprano y eso importa', 'je suis parti tôt', 'Je suis parti tôt et ça compte', 'sono uscito presto', 'Sono uscito presto e conta', 'ich ging früh', 'Ich ging früh und das zählt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Código de ética C1',
            'desc' => 'O conflito, o recuo e o que se registra.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O conflito',
                    'teoria' => dteoria(
                        "conflict of interest · recuse · disclose · appearance\nThere is a conflict of interest. Recuse yourself. Disclose even the appearance.",
                        "conflicto de interés · recusarte · revelar · apariencia\nHay un conflicto de interés. Recúsate. Revela incluso la apariencia.",
                        "conflit d intérêts · se récuser · divulguer · apparence\nIl y a un conflit d intérêts. Récuse-toi. Divulgue même l apparence.",
                        "conflitto di interessi · ricusarti · rivelare · apparenza\nC è un conflitto di interessi. Ricusati. Rivela anche l apparenza.",
                        "Interessenkonflikt · ablehnen · offenlegen · Anschein\nEs gibt einen Interessenkonflikt. Lehn dich ab. Leg auch den Anschein offen."
                    ),
                    'itens' => [
                        dlinha('conflito de interesse', 'há um conflito de interesse', 'conflict of interest', 'There is a conflict of interest', 'conflicto de interés', 'Hay un conflicto de interés', 'conflit d intérêts', 'Il y a un conflit d intérêts', 'conflitto di interessi', 'C è un conflitto di interessi', 'Interessenkonflikt', 'Es gibt einen Interessenkonflikt'),
                        dlinha('recusar-se', 'recuse-se do caso', 'recuse', 'Recuse yourself from the case', 'recusarte', 'Recúsate del caso', 'se récuser', 'Récuse-toi de l affaire', 'ricusarti', 'Ricusati dal caso', 'ablehnen', 'Lehn dich vom Fall ab'),
                        dlinha('declarar', 'declare mesmo a aparência', 'disclose', 'Disclose even the appearance', 'revelar', 'Revela incluso la apariencia', 'divulguer', 'Divulgue même l apparence', 'rivelare', 'Rivela anche l apparenza', 'offenlegen', 'Leg auch den Anschein offen'),
                        dlinha('aparência', 'a aparência já compromete', 'appearance', 'The appearance already compromises', 'apariencia', 'La apariencia ya compromete', 'apparence', 'L apparence compromet déjà', 'apparenza', 'L apparenza già compromette', 'Anschein', 'Der Anschein kompromittiert schon'),
                    ],
                ],
                [
                    'titulo' => 'O registro',
                    'teoria' => dteoria(
                        "minutes · whistleblowing · no retaliation · sealed\nPut it in the minutes. Whistleblowing is protected. There is no retaliation. The file stays sealed.",
                        "acta · denuncia · sin represalia · sellado\nPonlo en el acta. La denuncia está protegida. No hay represalia. El expediente queda sellado.",
                        "procès-verbal · lanceur d alerte · pas de représailles · scellé\nMets-le au procès-verbal. L alerte est protégée. Pas de représailles. Le dossier reste scellé.",
                        "verbale · segnalazione · nessuna ritorsione · sigillato\nMettilo a verbale. La segnalazione è protetta. Nessuna ritorsione. Il fascicolo resta sigillato.",
                        "Protokoll · Hinweis · keine Vergeltung · versiegelt\nSetz es ins Protokoll. Der Hinweis ist geschützt. Keine Vergeltung. Die Akte bleibt versiegelt."
                    ),
                    'itens' => [
                        dlinha('ata', 'ponha isto na ata', 'minutes', 'Put it in the minutes', 'acta', 'Ponlo en el acta', 'procès-verbal', 'Mets-le au procès-verbal', 'verbale', 'Mettilo a verbale', 'Protokoll', 'Setz es ins Protokoll'),
                        dlinha('denúncia', 'a denúncia está protegida', 'whistleblowing', 'Whistleblowing is protected', 'denuncia', 'La denuncia está protegida', 'lanceur d alerte', 'L alerte est protégée', 'segnalazione', 'La segnalazione è protetta', 'Hinweis', 'Der Hinweis ist geschützt'),
                        dlinha('sem retaliação', 'não há retaliação', 'no retaliation', 'There is no retaliation', 'sin represalia', 'No hay represalia', 'pas de représailles', 'Pas de représailles', 'nessuna ritorsione', 'Nessuna ritorsione', 'keine Vergeltung', 'Keine Vergeltung'),
                        dlinha('lacrado', 'o arquivo fica lacrado', 'sealed', 'The file stays sealed', 'sellado', 'El expediente queda sellado', 'scellé', 'Le dossier reste scellé', 'sigillato', 'Il fascicolo resta sigillato', 'versiegelt', 'Die Akte bleibt versiegelt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Pitch a investidor C1',
            'desc' => 'A tese, o risco e o que você pede na sala.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A tese',
                    'teoria' => dteoria(
                        "wedge · unit economics · moat · the ask\nThe wedge is payroll. Unit economics already work. The moat is data. The ask is a seed round.",
                        "cuña · unit economics · foso · el pedido\nLa cuña es nómina. Las unit economics ya funcionan. El foso son los datos. El pedido es una ronda semilla.",
                        "coin · unit economics · fossé · la demande\nLe coin c est la paie. Les unit economics marchent déjà. Le fossé c est la donnée. La demande est une seed.",
                        "cuneo · unit economics · fossato · la richiesta\nIl cuneo è il payroll. Le unit economics già funzionano. Il fossato sono i dati. La richiesta è una seed.",
                        "Keil · Unit Economics · Graben · die Bitte\nDer Keil ist Payroll. Die Unit Economics greifen schon. Der Graben sind Daten. Die Bitte ist eine Seed-Runde."
                    ),
                    'itens' => [
                        dlinha('cunha', 'a cunha é a folha de pagamento', 'wedge', 'The wedge is payroll', 'cuña', 'La cuña es nómina', 'coin', 'Le coin c est la paie', 'cuneo', 'Il cuneo è il payroll', 'Keil', 'Der Keil ist Payroll'),
                        dlinha('economia unitária', 'a economia unitária já fecha', 'unit economics', 'Unit economics already work', 'unit economics', 'Las unit economics ya funcionan', 'unit economics', 'Les unit economics marchent déjà', 'unit economics', 'Le unit economics già funzionano', 'Unit Economics', 'Die Unit Economics greifen schon'),
                        dlinha('fossado', 'o fossado são os dados', 'moat', 'The moat is data', 'foso', 'El foso son los datos', 'fossé', 'Le fossé c est la donnée', 'fossato', 'Il fossato sono i dati', 'Graben', 'Der Graben sind Daten'),
                        dlinha('o pedido', 'o pedido é uma rodada semente', 'the ask', 'The ask is a seed round', 'el pedido', 'El pedido es una ronda semilla', 'la demande', 'La demande est une seed', 'la richiesta', 'La richiesta è una seed', 'die Bitte', 'Die Bitte ist eine Seed-Runde'),
                    ],
                ],
                [
                    'titulo' => 'A sala',
                    'teoria' => dteoria(
                        "dilution · term sheet · we pass · who else is in\nDilution at this stage is high. We will send a term sheet. We pass. Who else is in the round?",
                        "dilución · term sheet · pasamos · quién más está\nLa dilución a esta altura es alta. Mandaremos un term sheet. Pasamos. ¿Quién más está en la ronda?",
                        "dilution · term sheet · on passe · qui d autre est\nLa dilution à ce stade est haute. On enverra un term sheet. On passe. Qui d autre est dans la ronde ?",
                        "diluizione · term sheet · passiamo · chi altro c è\nLa diluizione a questo stadio è alta. Manderemo un term sheet. Passiamo. Chi altro c è nel round?",
                        "Verwässerung · Term Sheet · wir passen · wer sonst ist drin\nDie Verwässerung ist in dieser Phase hoch. Wir schicken ein Term Sheet. Wir passen. Wer sonst ist in der Runde?"
                    ),
                    'itens' => [
                        dlinha('diluição', 'a diluição neste estágio é alta', 'dilution', 'Dilution at this stage is high', 'dilución', 'La dilución a esta altura es alta', 'dilution', 'La dilution à ce stade est haute', 'diluizione', 'La diluizione a questo stadio è alta', 'Verwässerung', 'Die Verwässerung ist in dieser Phase hoch'),
                        dlinha('term sheet', 'vamos mandar um term sheet', 'term sheet', 'We will send a term sheet', 'term sheet', 'Mandaremos un term sheet', 'term sheet', 'On enverra un term sheet', 'term sheet', 'Manderemo un term sheet', 'Term Sheet', 'Wir schicken ein Term Sheet'),
                        dlinha('passamos', 'passamos desta', 'we pass', 'We pass', 'pasamos', 'Pasamos', 'on passe', 'On passe', 'passiamo', 'Passiamo', 'wir passen', 'Wir passen'),
                        dlinha('quem mais está', 'quem mais está na rodada', 'who else is in', 'Who else is in the round', 'quién más está', 'Quién más está en la ronda', 'qui d autre est', 'Qui d autre est dans la ronde', 'chi altro c è', 'Chi altro c è nel round', 'wer sonst ist drin', 'Wer sonst ist in der Runde'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Auditoria interna C1',
            'desc' => 'A amostra, o achado e o que a gestão responde.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A amostra',
                    'teoria' => dteoria(
                        "sample · control · exception · walkthrough\nThe sample is thirty. The control failed twice. Log the exception. We need a walkthrough.",
                        "muestra · control · excepción · recorrido\nLa muestra es treinta. El control falló dos veces. Anota la excepción. Necesitamos un recorrido.",
                        "échantillon · contrôle · exception · cheminement\nL échantillon est de trente. Le contrôle a échoué deux fois. Note l exception. Il nous faut un cheminement.",
                        "campione · controllo · eccezione · walkthrough\nIl campione è trenta. Il controllo è fallito due volte. Segna l eccezione. Serve un walkthrough.",
                        "Stichprobe · Kontrolle · Ausnahme · Walkthrough\nDie Stichprobe ist dreißig. Die Kontrolle fiel zweimal aus. Halt die Ausnahme fest. Wir brauchen einen Walkthrough."
                    ),
                    'itens' => [
                        dlinha('amostra', 'a amostra é de trinta', 'sample', 'The sample is thirty', 'muestra', 'La muestra es treinta', 'échantillon', 'L échantillon est de trente', 'campione', 'Il campione è trenta', 'Stichprobe', 'Die Stichprobe ist dreißig'),
                        dlinha('controle', 'o controle falhou duas vezes', 'control', 'The control failed twice', 'control', 'El control falló dos veces', 'contrôle', 'Le contrôle a échoué deux fois', 'controllo', 'Il controllo è fallito due volte', 'Kontrolle', 'Die Kontrolle fiel zweimal aus'),
                        dlinha('exceção', 'registre a exceção', 'exception', 'Log the exception', 'excepción', 'Anota la excepción', 'exception', 'Note l exception', 'eccezione', 'Segna l eccezione', 'Ausnahme', 'Halt die Ausnahme fest'),
                        dlinha('percurso', 'precisamos de um percurso', 'walkthrough', 'We need a walkthrough', 'recorrido', 'Necesitamos un recorrido', 'cheminement', 'Il nous faut un cheminement', 'walkthrough', 'Serve un walkthrough', 'Walkthrough', 'Wir brauchen einen Walkthrough'),
                    ],
                ],
                [
                    'titulo' => 'A resposta da gestão',
                    'teoria' => dteoria(
                        "management response · agreed · residual risk · due date\nThe management response is agreed. Residual risk remains. The due date is the 15th.",
                        "respuesta de la dirección · acordado · riesgo residual · fecha límite\nLa respuesta de la dirección está acordada. Queda riesgo residual. La fecha límite es el 15.",
                        "réponse de la direction · convenu · risque résiduel · échéance\nLa réponse de la direction est convenue. Il reste un risque résiduel. L échéance est le 15.",
                        "risposta del management · concordato · rischio residuo · scadenza\nLa risposta del management è concordata. Resta un rischio residuo. La scadenza è il 15.",
                        "Management-Antwort · vereinbart · Restrisiko · Fälligkeit\nDie Management-Antwort ist vereinbart. Restrisiko bleibt. Die Fälligkeit ist der 15."
                    ),
                    'itens' => [
                        dlinha('resposta da gestão', 'a resposta da gestão está combinada', 'management response', 'The management response is agreed', 'respuesta de la dirección', 'La respuesta de la dirección está acordada', 'réponse de la direction', 'La réponse de la direction est convenue', 'risposta del management', 'La risposta del management è concordata', 'Management-Antwort', 'Die Management-Antwort ist vereinbart'),
                        dlinha('acordado', 'o achado foi acordado', 'agreed', 'The finding is agreed', 'acordado', 'El hallazgo está acordado', 'convenu', 'Le constat est convenu', 'concordato', 'Il rilievo è concordato', 'vereinbart', 'Der Befund ist vereinbart'),
                        dlinha('risco residual', 'resta risco residual', 'residual risk', 'Residual risk remains', 'riesgo residual', 'Queda riesgo residual', 'risque résiduel', 'Il reste un risque résiduel', 'rischio residuo', 'Resta un rischio residuo', 'Restrisiko', 'Restrisiko bleibt'),
                        dlinha('prazo', 'o prazo é dia 15', 'due date', 'The due date is the 15th', 'fecha límite', 'La fecha límite es el 15', 'échéance', 'L échéance est le 15', 'scadenza', 'La scadenza è il 15', 'Fälligkeit', 'Die Fälligkeit ist der 15'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Resposta a ofício C1',
            'desc' => 'O prazo, o que se anexa e o tom que não admite.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O ofício',
                    'teoria' => dteoria(
                        "official letter · within ten days · annex · we do not admit\nThe official letter asks for a reply within ten days. Annex the contracts. We do not admit the facts as stated.",
                        "oficio · en diez días · anexo · no admitimos\nEl oficio pide respuesta en diez días. Anexa los contratos. No admitimos los hechos como se exponen.",
                        "courrier officiel · sous dix jours · annexe · nous n avouons pas\nLe courrier officiel demande une réponse sous dix jours. Annexez les contrats. Nous n avouons pas les faits tels qu exposés.",
                        "ufficio · entro dieci giorni · allegato · non ammettiamo\nL ufficio chiede risposta entro dieci giorni. Allega i contratti. Non ammettiamo i fatti come esposti.",
                        "Schreiben · binnen zehn Tagen · Anlage · wir geben nicht zu\nDas Schreiben verlangt Antwort binnen zehn Tagen. Hänge die Verträge an. Wir geben die dargelegten Fakten nicht zu."
                    ),
                    'itens' => [
                        dlinha('ofício', 'o ofício pede resposta', 'official letter', 'The official letter asks for a reply', 'oficio', 'El oficio pide respuesta', 'courrier officiel', 'Le courrier officiel demande une réponse', 'ufficio', 'L ufficio chiede risposta', 'Schreiben', 'Das Schreiben verlangt Antwort'),
                        dlinha('em dez dias', 'responda em dez dias', 'within ten days', 'Reply within ten days', 'en diez días', 'Responde en diez días', 'sous dix jours', 'Réponds sous dix jours', 'entro dieci giorni', 'Rispondi entro dieci giorni', 'binnen zehn Tagen', 'Antworte binnen zehn Tagen'),
                        dlinha('anexo', 'anexe os contratos', 'annex', 'Annex the contracts', 'anexo', 'Anexa los contratos', 'annexe', 'Annexez les contrats', 'allegato', 'Allega i contratti', 'Anlage', 'Hänge die Verträge an'),
                        dlinha('não admitimos', 'não admitimos os fatos como relatados', 'we do not admit', 'We do not admit the facts as stated', 'no admitimos', 'No admitimos los hechos como se exponen', 'nous n avouons pas', 'Nous n avouons pas les faits tels qu exposés', 'non ammettiamo', 'Non ammettiamo i fatti come esposti', 'wir geben nicht zu', 'Wir geben die dargelegten Fakten nicht zu'),
                    ],
                ],
                [
                    'titulo' => 'O tom',
                    'teoria' => dteoria(
                        "without conceding · reserved · further particulars · yours faithfully\nWithout conceding liability. All rights are reserved. We request further particulars. Yours faithfully.",
                        "sin conceder · reservado · más pormenores · atentamente\nSin conceder responsabilidad. Se reservan todos los derechos. Pedimos más pormenores. Atentamente.",
                        "sans concéder · réservé · plus de précisions · veuillez agréer\nSans concéder de responsabilité. Tous droits réservés. Nous demandons plus de précisions. Veuillez agréer.",
                        "senza concedere · riservato · ulteriori particolari · distinti saluti\nSenza concedere responsabilità. Tutti i diritti riservati. Chiediamo ulteriori particolari. Distinti saluti.",
                        "ohne einzuräumen · vorbehalten · weitere Angaben · hochachtungsvoll\nOhne Haftung einzuräumen. Alle Rechte vorbehalten. Wir bitten um weitere Angaben. Hochachtungsvoll."
                    ),
                    'itens' => [
                        dlinha('sem conceder', 'sem conceder responsabilidade', 'without conceding', 'Without conceding liability', 'sin conceder', 'Sin conceder responsabilidad', 'sans concéder', 'Sans concéder de responsabilité', 'senza concedere', 'Senza concedere responsabilità', 'ohne einzuräumen', 'Ohne Haftung einzuräumen'),
                        dlinha('reservado', 'todos os direitos reservados', 'reserved', 'All rights are reserved', 'reservado', 'Se reservan todos los derechos', 'réservé', 'Tous droits réservés', 'riservato', 'Tutti i diritti riservati', 'vorbehalten', 'Alle Rechte vorbehalten'),
                        dlinha('mais pormenores', 'pedimos mais pormenores', 'further particulars', 'We request further particulars', 'más pormenores', 'Pedimos más pormenores', 'plus de précisions', 'Nous demandons plus de précisions', 'ulteriori particolari', 'Chiediamo ulteriori particolari', 'weitere Angaben', 'Wir bitten um weitere Angaben'),
                        dlinha('atenciosamente', 'atenciosamente', 'yours faithfully', 'Yours faithfully', 'atentamente', 'Atentamente', 'veuillez agréer', 'Veuillez agréer', 'distinti saluti', 'Distinti saluti', 'hochachtungsvoll', 'Hochachtungsvoll'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Síntese de dossiê C1',
            'desc' => 'O que entra no resumo executivo e o que sobra no anexo.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O resumo',
                    'teoria' => dteoria(
                        "executive summary · one page · so what · decision needed\nThe executive summary is one page. Lead with the so what. State the decision needed.",
                        "resumen ejecutivo · una página · y qué · decisión necesaria\nEl resumen ejecutivo es una página. Empieza por el y qué. Di la decisión necesaria.",
                        "synthèse · une page · et alors · décision requise\nLa synthèse fait une page. Commence par le et alors. Dis la décision requise.",
                        "sintesi esecutiva · una pagina · e quindi · decisione necessaria\nLa sintesi esecutiva è una pagina. Parti dall e quindi. Di la decisione necessaria.",
                        "Kurzfassung · eine Seite · na und · Entscheidung nötig\nDie Kurzfassung ist eine Seite. Führ mit dem Na und. Nenn die nötige Entscheidung."
                    ),
                    'itens' => [
                        dlinha('resumo executivo', 'o resumo executivo tem uma página', 'executive summary', 'The executive summary is one page', 'resumen ejecutivo', 'El resumen ejecutivo es una página', 'synthèse', 'La synthèse fait une page', 'sintesi esecutiva', 'La sintesi esecutiva è una pagina', 'Kurzfassung', 'Die Kurzfassung ist eine Seite'),
                        dlinha('uma página', 'cabe em uma página', 'one page', 'It fits on one page', 'una página', 'Cabe en una página', 'une page', 'Ça tient en une page', 'una pagina', 'Ci sta in una pagina', 'eine Seite', 'Es passt auf eine Seite'),
                        dlinha('e daí', 'comece pelo e daí', 'so what', 'Lead with the so what', 'y qué', 'Empieza por el y qué', 'et alors', 'Commence par le et alors', 'e quindi', 'Parti dall e quindi', 'na und', 'Führ mit dem Na und'),
                        dlinha('decisão necessária', 'diga a decisão necessária', 'decision needed', 'State the decision needed', 'decisión necesaria', 'Di la decisión necesaria', 'décision requise', 'Dis la décision requise', 'decisione necessaria', 'Di la decisione necessaria', 'Entscheidung nötig', 'Nenn die nötige Entscheidung'),
                    ],
                ],
                [
                    'titulo' => 'O que sobra',
                    'teoria' => dteoria(
                        "annex · do not bury · dissenting · source\nPut the tables in the annex. Do not bury the dissent. Name the source on every claim.",
                        "anexo · no entierres · disenso · fuente\nPon las tablas en el anexo. No entierres el disenso. Nombra la fuente en cada afirmación.",
                        "annexe · n enterre pas · dissidence · source\nMets les tableaux en annexe. N enterre pas la dissidence. Nomme la source de chaque affirmation.",
                        "allegato · non seppellire · dissenso · fonte\nMetti le tabelle in allegato. Non seppellire il dissenso. Nomina la fonte di ogni affermazione.",
                        "Anhang · nicht begraben · Dissens · Quelle\nDie Tabellen gehören in den Anhang. Begrab den Dissens nicht. Nenn die Quelle zu jeder Behauptung."
                    ),
                    'itens' => [
                        dlinha('anexo', 'as tabelas vão no anexo', 'annex', 'Put the tables in the annex', 'anexo', 'Pon las tablas en el anexo', 'annexe', 'Mets les tableaux en annexe', 'allegato', 'Metti le tabelle in allegato', 'Anhang', 'Die Tabellen gehören in den Anhang'),
                        dlinha('não enterre', 'não enterre a dissidência', 'do not bury', 'Do not bury the dissent', 'no entierres', 'No entierres el disenso', 'n enterre pas', 'N enterre pas la dissidence', 'non seppellire', 'Non seppellire il dissenso', 'nicht begraben', 'Begrab den Dissens nicht'),
                        dlinha('voto vencido', 'o voto vencido entra no resumo', 'dissenting', 'The dissenting view goes in the summary', 'disenso', 'El disenso entra en el resumen', 'dissidence', 'La dissidence entre dans la synthèse', 'dissenso', 'Il dissenso entra nella sintesi', 'Dissens', 'Der Dissens kommt in die Kurzfassung'),
                        dlinha('fonte', 'nomeie a fonte em cada afirmação', 'source', 'Name the source on every claim', 'fuente', 'Nombra la fuente en cada afirmación', 'source', 'Nomme la source de chaque affirmation', 'fonte', 'Nomina la fonte di ogni affermazione', 'Quelle', 'Nenn die Quelle zu jeder Behauptung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Ironia dramática C2',
            'desc' => 'O que a plateia sabe, o que a personagem não sabe, o gosto amargo.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'A assimetria',
                    'teoria' => dteoria(
                        "dramatic irony · the audience knows · the character does not · the gap\nDramatic irony lives in the gap. The audience knows. The character does not.",
                        "ironía dramática · el público sabe · el personaje no · la brecha\nLa ironía dramática vive en la brecha. El público sabe. El personaje no.",
                        "ironie dramatique · le public sait · le personnage non · l écart\nL ironie dramatique vit dans l écart. Le public sait. Le personnage non.",
                        "ironia drammatica · il pubblico sa · il personaggio no · lo scarto\nL ironia drammatica vive nello scarto. Il pubblico sa. Il personaggio no.",
                        "dramatische Ironie · das Publikum weiß · die Figur nicht · die Lücke\nDramatische Ironie lebt in der Lücke. Das Publikum weiß. Die Figur nicht."
                    ),
                    'itens' => [
                        dlinha('ironia dramática', 'a ironia dramática mora na brecha', 'dramatic irony', 'Dramatic irony lives in the gap', 'ironía dramática', 'La ironía dramática vive en la brecha', 'ironie dramatique', 'L ironie dramatique vit dans l écart', 'ironia drammatica', 'L ironia drammatica vive nello scarto', 'dramatische Ironie', 'Dramatische Ironie lebt in der Lücke'),
                        dlinha('a plateia sabe', 'a plateia já sabe', 'the audience knows', 'The audience already knows', 'el público sabe', 'El público ya sabe', 'le public sait', 'Le public sait déjà', 'il pubblico sa', 'Il pubblico sa già', 'das Publikum weiß', 'Das Publikum weiß schon'),
                        dlinha('a personagem não', 'a personagem não sabe', 'the character does not', 'The character does not', 'el personaje no', 'El personaje no', 'le personnage non', 'Le personnage non', 'il personaggio no', 'Il personaggio no', 'die Figur nicht', 'Die Figur nicht'),
                        dlinha('a brecha', 'a brecha faz o gosto', 'the gap', 'The gap makes the taste', 'la brecha', 'La brecha hace el gusto', 'l écart', 'L écart fait le goût', 'lo scarto', 'Lo scarto fa il gusto', 'die Lücke', 'Die Lücke macht den Geschmack'),
                    ],
                ],
                [
                    'titulo' => 'O gosto',
                    'teoria' => dteoria(
                        "bitter · we wait for the fall · do not wink · the line is clean\nThe taste is bitter. We wait for the fall. Do not wink at the camera. The line is clean.",
                        "amargo · esperamos la caída · no guiñes · la línea está limpia\nEl gusto es amargo. Esperamos la caída. No guiñes a cámara. La línea está limpia.",
                        "amer · on attend la chute · ne fais pas de clin d oeil · la réplique est nette\nLe goût est amer. On attend la chute. Ne fais pas de clin d oeil. La réplique est nette.",
                        "amaro · aspettiamo la caduta · non ammiccare · la battuta è pulita\nIl gusto è amaro. Aspettiamo la caduta. Non ammiccare. La battuta è pulita.",
                        "bitter · wir warten auf den Fall · nicht zwinkern · die Zeile ist sauber\nDer Geschmack ist bitter. Wir warten auf den Fall. Zwinkere nicht. Die Zeile ist sauber."
                    ),
                    'itens' => [
                        dlinha('amargo', 'o gosto é amargo', 'bitter', 'The taste is bitter', 'amargo', 'El gusto es amargo', 'amer', 'Le goût est amer', 'amaro', 'Il gusto è amaro', 'bitter', 'Der Geschmack ist bitter'),
                        dlinha('esperamos a queda', 'esperamos a queda', 'we wait for the fall', 'We wait for the fall', 'esperamos la caída', 'Esperamos la caída', 'on attend la chute', 'On attend la chute', 'aspettiamo la caduta', 'Aspettiamo la caduta', 'wir warten auf den Fall', 'Wir warten auf den Fall'),
                        dlinha('não pisque', 'não pisque para a câmera', 'do not wink', 'Do not wink at the camera', 'no guiñes', 'No guiñes a cámara', 'ne fais pas de clin d oeil', 'Ne fais pas de clin d oeil', 'non ammiccare', 'Non ammiccare', 'nicht zwinkern', 'Zwinkere nicht'),
                        dlinha('a fala está limpa', 'a fala está limpa', 'the line is clean', 'The line is clean', 'la línea está limpia', 'La línea está limpia', 'la réplique est nette', 'La réplique est nette', 'la battuta è pulita', 'La battuta è pulita', 'die Zeile ist sauber', 'Die Zeile ist sauber'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Dialeto e prestígio C2',
            'desc' => 'O código, o estigma e o que a norma finge ser neutra.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O código',
                    'teoria' => dteoria(
                        "code-switch · prestige · stigma · the standard is a dialect\nThey code-switch at the door. Prestige is not neutrality. Stigma does the rest. The standard is a dialect with an army.",
                        "cambio de código · prestigio · estigma · el estándar es un dialecto\nCambian de código en la puerta. El prestigio no es neutralidad. El estigma hace el resto. El estándar es un dialecto con ejército.",
                        "changement de code · prestige · stigmate · le standard est un dialecte\nIls changent de code à la porte. Le prestige n est pas la neutralité. Le stigmate fait le reste. Le standard est un dialecte avec une armée.",
                        "cambio di codice · prestigio · stigma · lo standard è un dialetto\nCambiano codice alla porta. Il prestigio non è neutralità. Lo stigma fa il resto. Lo standard è un dialetto con un esercito.",
                        "Codewechsel · Prestige · Stigma · der Standard ist ein Dialekt\nSie wechseln den Code an der Tür. Prestige ist keine Neutralität. Das Stigma tut den Rest. Der Standard ist ein Dialekt mit Armee."
                    ),
                    'itens' => [
                        dlinha('trocar de código', 'trocam de código na porta', 'code-switch', 'They code-switch at the door', 'cambio de código', 'Cambian de código en la puerta', 'changement de code', 'Ils changent de code à la porte', 'cambio di codice', 'Cambiano codice alla porta', 'Codewechsel', 'Sie wechseln den Code an der Tür'),
                        dlinha('prestígio', 'prestígio não é neutralidade', 'prestige', 'Prestige is not neutrality', 'prestigio', 'El prestigio no es neutralidad', 'prestige', 'Le prestige n est pas la neutralité', 'prestigio', 'Il prestigio non è neutralità', 'Prestige', 'Prestige ist keine Neutralität'),
                        dlinha('estigma', 'o estigma faz o resto', 'stigma', 'Stigma does the rest', 'estigma', 'El estigma hace el resto', 'stigmate', 'Le stigmate fait le reste', 'stigma', 'Lo stigma fa il resto', 'Stigma', 'Das Stigma tut den Rest'),
                        dlinha('o padrão é dialeto', 'o padrão também é um dialeto', 'the standard is a dialect', 'The standard is a dialect too', 'el estándar es un dialecto', 'El estándar también es un dialecto', 'le standard est un dialecte', 'Le standard est aussi un dialecte', 'lo standard è un dialetto', 'Lo standard è anche un dialetto', 'der Standard ist ein Dialekt', 'Der Standard ist auch ein Dialekt'),
                    ],
                ],
                [
                    'titulo' => 'Na página',
                    'teoria' => dteoria(
                        "eye dialect · do not mock · the grain of speech · gloss sparingly\nEye dialect mocks. Do not mock. Keep the grain of speech. Gloss sparingly.",
                        "dialecto visual · no te burles · el grano del habla · glosa poco\nEl dialecto visual se burla. No te burles. Conserva el grano del habla. Glosa poco.",
                        "dialecte visuel · ne moque pas · le grain de la parole · glose peu\nLe dialecte visuel se moque. Ne moque pas. Garde le grain de la parole. Glose peu.",
                        "dialetto visivo · non deridere · la grana del parlato · glossa poco\nIl dialetto visivo deride. Non deridere. Conserva la grana del parlato. Glossa poco.",
                        "Augendialekt · nicht verspotten · die Maserung der Rede · sparsam glossieren\nAugendialekt verspottet. Verspotte nicht. Bewahre die Maserung der Rede. Glossiere sparsam."
                    ),
                    'itens' => [
                        dlinha('dialeto visual', 'o dialeto visual zomba', 'eye dialect', 'Eye dialect mocks', 'dialecto visual', 'El dialecto visual se burla', 'dialecte visuel', 'Le dialecte visuel se moque', 'dialetto visivo', 'Il dialetto visivo deride', 'Augendialekt', 'Augendialekt verspottet'),
                        dlinha('não zombe', 'não zombe na grafia', 'do not mock', 'Do not mock in the spelling', 'no te burles', 'No te burles en la grafía', 'ne moque pas', 'Ne moque pas dans l orthographe', 'non deridere', 'Non deridere nella grafia', 'nicht verspotten', 'Verspotte nicht in der Schreibung'),
                        dlinha('o grão da fala', 'guarde o grão da fala', 'the grain of speech', 'Keep the grain of speech', 'el grano del habla', 'Conserva el grano del habla', 'le grain de la parole', 'Garde le grain de la parole', 'la grana del parlato', 'Conserva la grana del parlato', 'die Maserung der Rede', 'Bewahre die Maserung der Rede'),
                        dlinha('glose pouco', 'glose pouco', 'gloss sparingly', 'Gloss sparingly', 'glosa poco', 'Glosa poco', 'glose peu', 'Glose peu', 'glossa poco', 'Glossa poco', 'sparsam glossieren', 'Glossiere sparsam'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Eufemismo institucional C2',
            'desc' => 'O recorte que suaviza o corte e o que a frase esconde.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'A suavização',
                    'teoria' => dteoria(
                        "rightsizing · let go · efficiency saving · the cut\nRightsizing means the cut. Let go means fired. Efficiency saving means fewer people.",
                        "ajuste de tamaño · dejar ir · ahorro de eficiencia · el recorte\nAjuste de tamaño significa el recorte. Dejar ir significa despido. Ahorro de eficiencia significa menos gente.",
                        "rightsizing · laisser partir · gain d efficacité · la coupe\nLe rightsizing veut dire la coupe. Laisser partir veut dire licencié. Gain d efficacité veut dire moins de monde.",
                        "rightsizing · lasciare andare · risparmio di efficienza · il taglio\nIl rightsizing vuol dire il taglio. Lasciare andare vuol dire licenziato. Risparmio di efficienza vuol dire meno gente.",
                        "Rightsizing · gehen lassen · Effizienzgewinn · der Schnitt\nRightsizing heißt der Schnitt. Gehen lassen heißt gefeuert. Effizienzgewinn heißt weniger Leute."
                    ),
                    'itens' => [
                        dlinha('ajuste de tamanho', 'ajuste de tamanho quer dizer o corte', 'rightsizing', 'Rightsizing means the cut', 'ajuste de tamaño', 'Ajuste de tamaño significa el recorte', 'rightsizing', 'Le rightsizing veut dire la coupe', 'rightsizing', 'Il rightsizing vuol dire il taglio', 'Rightsizing', 'Rightsizing heißt der Schnitt'),
                        dlinha('deixar ir', 'deixar ir quer dizer demitido', 'let go', 'Let go means fired', 'dejar ir', 'Dejar ir significa despido', 'laisser partir', 'Laisser partir veut dire licencié', 'lasciare andare', 'Lasciare andare vuol dire licenziato', 'gehen lassen', 'Gehen lassen heißt gefeuert'),
                        dlinha('ganho de eficiência', 'ganho de eficiência quer dizer menos gente', 'efficiency saving', 'Efficiency saving means fewer people', 'ahorro de eficiencia', 'Ahorro de eficiencia significa menos gente', 'gain d efficacité', 'Gain d efficacité veut dire moins de monde', 'risparmio di efficienza', 'Risparmio di efficienza vuol dire meno gente', 'Effizienzgewinn', 'Effizienzgewinn heißt weniger Leute'),
                        dlinha('o corte', 'o corte está na frase', 'the cut', 'The cut is in the sentence', 'el recorte', 'El recorte está en la frase', 'la coupe', 'La coupe est dans la phrase', 'il taglio', 'Il taglio è nella frase', 'der Schnitt', 'Der Schnitt sitzt im Satz'),
                    ],
                ],
                [
                    'titulo' => 'Desfazer',
                    'teoria' => dteoria(
                        "name the act · who loses · the passive hides · put a body in it\nName the act. Say who loses. The passive hides the agent. Put a body in the sentence.",
                        "nombra el acto · quién pierde · la pasiva esconde · pon un cuerpo\nNombra el acto. Di quién pierde. La pasiva esconde al agente. Pon un cuerpo en la frase.",
                        "nomme l acte · qui perd · le passif cache · mets un corps\nNomme l acte. Dis qui perd. Le passif cache l agent. Mets un corps dans la phrase.",
                        "nomina l atto · chi perde · il passivo nasconde · metti un corpo\nNomina l atto. Di chi perde. Il passivo nasconde l agente. Metti un corpo nella frase.",
                        "nenn die Tat · wer verliert · das Passiv verbirgt · setz einen Körper\nNenn die Tat. Sag wer verliert. Das Passiv verbirgt den Täter. Setz einen Körper in den Satz."
                    ),
                    'itens' => [
                        dlinha('nomeie o ato', 'nomeie o ato', 'name the act', 'Name the act', 'nombra el acto', 'Nombra el acto', 'nomme l acte', 'Nomme l acte', 'nomina l atto', 'Nomina l atto', 'nenn die Tat', 'Nenn die Tat'),
                        dlinha('quem perde', 'diga quem perde', 'who loses', 'Say who loses', 'quién pierde', 'Di quién pierde', 'qui perd', 'Dis qui perd', 'chi perde', 'Di chi perde', 'wer verliert', 'Sag wer verliert'),
                        dlinha('a passiva esconde', 'a passiva esconde o agente', 'the passive hides', 'The passive hides the agent', 'la pasiva esconde', 'La pasiva esconde al agente', 'le passif cache', 'Le passif cache l agent', 'il passivo nasconde', 'Il passivo nasconde l agente', 'das Passiv verbirgt', 'Das Passiv verbirgt den Täter'),
                        dlinha('ponha um corpo', 'ponha um corpo na frase', 'put a body in it', 'Put a body in the sentence', 'pon un cuerpo', 'Pon un cuerpo en la frase', 'mets un corps', 'Mets un corps dans la phrase', 'metti un corpo', 'Metti un corpo nella frase', 'setz einen Körper', 'Setz einen Körper in den Satz'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Intertextualidade C2',
            'desc' => 'A citação que não cita, o eco e o leitor que precisa ter lido.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O eco',
                    'teoria' => dteoria(
                        "allusion · echo · palimpsest · the well-read\nAn allusion is an echo, not a footnote. The page is a palimpsest. It assumes the well-read.",
                        "alusión · eco · palimpsesto · el leído\nUna alusión es un eco, no una nota. La página es un palimpsesto. Presume al leído.",
                        "allusion · écho · palimpseste · le lettré\nUne allusion est un écho, pas une note. La page est un palimpseste. Elle suppose le lettré.",
                        "allusione · eco · palinsesto · il lettore colto\nUn allusione è un eco, non una nota. La pagina è un palinsesto. Presume il lettore colto.",
                        "Anspielung · Echo · Palimpsest · der Belesene\nEine Anspielung ist ein Echo, keine Fußnote. Die Seite ist ein Palimpsest. Sie setzt den Belesenen voraus."
                    ),
                    'itens' => [
                        dlinha('alusão', 'a alusão é um eco, não uma nota', 'allusion', 'An allusion is an echo not a footnote', 'alusión', 'Una alusión es un eco no una nota', 'allusion', 'Une allusion est un écho pas une note', 'allusione', 'Un allusione è un eco non una nota', 'Anspielung', 'Eine Anspielung ist ein Echo keine Fußnote'),
                        dlinha('eco', 'o eco não avisa', 'echo', 'The echo does not announce itself', 'eco', 'El eco no avisa', 'écho', 'L écho ne s annonce pas', 'eco', 'L eco non si annuncia', 'Echo', 'Das Echo kündigt sich nicht an'),
                        dlinha('palimpsesto', 'a página é um palimpsesto', 'palimpsest', 'The page is a palimpsest', 'palimpsesto', 'La página es un palimpsesto', 'palimpseste', 'La page est un palimpseste', 'palinsesto', 'La pagina è un palinsesto', 'Palimpsest', 'Die Seite ist ein Palimpsest'),
                        dlinha('o lido', 'presume o já lido', 'the well-read', 'It assumes the well-read', 'el leído', 'Presume al leído', 'le lettré', 'Elle suppose le lettré', 'il lettore colto', 'Presume il lettore colto', 'der Belesene', 'Sie setzt den Belesenen voraus'),
                    ],
                ],
                [
                    'titulo' => 'Quando falha',
                    'teoria' => dteoria(
                        "the nod falls flat · overcite · steal the line · trust the reader\nIf the nod falls flat, do not overcite. Do not steal the line. Trust the reader or cut it.",
                        "el guiño cae · sobrecitar · robar el verso · confía en el lector\nSi el guiño cae, no sobrecites. No robes el verso. Confía en el lector o córtalo.",
                        "le clin tombe à plat · trop citer · voler le vers · fais confiance au lecteur\nSi le clin tombe à plat, ne cite pas trop. Ne vole pas le vers. Fais confiance au lecteur ou coupe.",
                        "l ammicco cade · citare troppo · rubare il verso · fidati del lettore\nSe l ammicco cade, non citare troppo. Non rubare il verso. Fidati del lettore o taglia.",
                        "das Nicken fällt flach · überzitieren · die Zeile stehlen · trau dem Leser\nFällt das Nicken flach, überzitiere nicht. Stiehl die Zeile nicht. Trau dem Leser oder streiche."
                    ),
                    'itens' => [
                        dlinha('o aceno cai', 'se o aceno cai, não sobrecite', 'the nod falls flat', 'If the nod falls flat do not overcite', 'el guiño cae', 'Si el guiño cae no sobrecites', 'le clin tombe à plat', 'Si le clin tombe à plat ne cite pas trop', 'l ammicco cade', 'Se l ammicco cade non citare troppo', 'das Nicken fällt flach', 'Fällt das Nicken flach überzitiere nicht'),
                        dlinha('sobrecitar', 'sobrecitar mata o eco', 'overcite', 'To overcite kills the echo', 'sobrecitar', 'Sobrecitar mata el eco', 'trop citer', 'Trop citer tue l écho', 'citare troppo', 'Citare troppo uccide l eco', 'überzitieren', 'Überzitieren tötet das Echo'),
                        dlinha('roubar o verso', 'não roube o verso', 'steal the line', 'Do not steal the line', 'robar el verso', 'No robes el verso', 'voler le vers', 'Ne vole pas le vers', 'rubare il verso', 'Non rubare il verso', 'die Zeile stehlen', 'Stiehl die Zeile nicht'),
                        dlinha('confie no leitor', 'confie no leitor ou corte', 'trust the reader', 'Trust the reader or cut it', 'confía en el lector', 'Confía en el lector o córtalo', 'fais confiance au lecteur', 'Fais confiance au lecteur ou coupe', 'fidati del lettore', 'Fidati del lettore o taglia', 'trau dem Leser', 'Trau dem Leser oder streiche'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Voz de poder C2',
            'desc' => 'Quem fala no infinitivo, quem some no nós e o que a ordem finge ser pedido.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O infinitivo',
                    'teoria' => dteoria(
                        "the infinitive of power · we have decided · please be advised · it has been determined\nThe infinitive of power erases the I. We have decided hides the vote. Please be advised is an order. It has been determined has no agent.",
                        "el infinitivo del poder · hemos decidido · se le informa · se ha determinado\nEl infinitivo del poder borra el yo. Hemos decidido esconde el voto. Se le informa es una orden. Se ha determinado no tiene agente.",
                        "l infinitif du pouvoir · nous avons décidé · veuillez noter · il a été déterminé\nL infinitif du pouvoir efface le je. Nous avons décidé cache le vote. Veuillez noter est un ordre. Il a été déterminé n a pas d agent.",
                        "l infinito del potere · abbiamo deciso · si informa · è stato determinato\nL infinito del potere cancella l io. Abbiamo deciso nasconde il voto. Si informa è un ordine. È stato determinato non ha agente.",
                        "der Infinitiv der Macht · wir haben beschlossen · bitte beachten · es wurde festgestellt\nDer Infinitiv der Macht löscht das Ich. Wir haben beschlossen verbirgt die Abstimmung. Bitte beachten ist ein Befehl. Es wurde festgestellt hat keinen Täter."
                    ),
                    'itens' => [
                        dlinha('infinitivo do poder', 'o infinitivo do poder apaga o eu', 'the infinitive of power', 'The infinitive of power erases the I', 'el infinitivo del poder', 'El infinitivo del poder borra el yo', 'l infinitif du pouvoir', 'L infinitif du pouvoir efface le je', 'l infinito del potere', 'L infinito del potere cancella l io', 'der Infinitiv der Macht', 'Der Infinitiv der Macht löscht das Ich'),
                        dlinha('decidimos', 'decidimos esconde o voto', 'we have decided', 'We have decided hides the vote', 'hemos decidido', 'Hemos decidido esconde el voto', 'nous avons décidé', 'Nous avons décidé cache le vote', 'abbiamo deciso', 'Abbiamo deciso nasconde il voto', 'wir haben beschlossen', 'Wir haben beschlossen verbirgt die Abstimmung'),
                        dlinha('fica ciente', 'fica ciente é uma ordem', 'please be advised', 'Please be advised is an order', 'se le informa', 'Se le informa es una orden', 'veuillez noter', 'Veuillez noter est un ordre', 'si informa', 'Si informa è un ordine', 'bitte beachten', 'Bitte beachten ist ein Befehl'),
                        dlinha('ficou determinado', 'ficou determinado não tem agente', 'it has been determined', 'It has been determined has no agent', 'se ha determinado', 'Se ha determinado no tiene agente', 'il a été déterminé', 'Il a été déterminé n a pas d agent', 'è stato determinato', 'È stato determinato non ha agente', 'es wurde festgestellt', 'Es wurde festgestellt hat keinen Täter'),
                    ],
                ],
                [
                    'titulo' => 'Devolver o eu',
                    'teoria' => dteoria(
                        "put the I back · I decided · I am telling you · I cut\nPut the I back. Say I decided. Say I am telling you. Say I cut the post.",
                        "devuelve el yo · yo decidí · te lo digo · yo recorté\nDevuelve el yo. Di yo decidí. Di te lo digo. Di yo recorté el puesto.",
                        "remets le je · j ai décidé · je te le dis · j ai coupé\nRemets le je. Dis j ai décidé. Dis je te le dis. Dis j ai coupé le poste.",
                        "rimetti l io · ho deciso · te lo dico · ho tagliato\nRimetti l io. Di ho deciso. Di te lo dico. Di ho tagliato il posto.",
                        "setz das Ich zurück · ich habe entschieden · ich sage dir · ich habe gestrichen\nSetz das Ich zurück. Sag ich habe entschieden. Sag ich sage dir. Sag ich habe die Stelle gestrichen."
                    ),
                    'itens' => [
                        dlinha('devolva o eu', 'devolva o eu à frase', 'put the I back', 'Put the I back in the sentence', 'devuelve el yo', 'Devuelve el yo a la frase', 'remets le je', 'Remets le je dans la phrase', 'rimetti l io', 'Rimetti l io nella frase', 'setz das Ich zurück', 'Setz das Ich zurück in den Satz'),
                        dlinha('eu decidi', 'diga eu decidi', 'I decided', 'Say I decided', 'yo decidí', 'Di yo decidí', 'j ai décidé', 'Dis j ai décidé', 'ho deciso', 'Di ho deciso', 'ich habe entschieden', 'Sag ich habe entschieden'),
                        dlinha('estou te dizendo', 'estou te dizendo', 'I am telling you', 'I am telling you', 'te lo digo', 'Te lo digo', 'je te le dis', 'Je te le dis', 'te lo dico', 'Te lo dico', 'ich sage dir', 'Ich sage dir'),
                        dlinha('eu cortei', 'eu cortei o posto', 'I cut', 'I cut the post', 'yo recorté', 'Yo recorté el puesto', 'j ai coupé', 'J ai coupé le poste', 'ho tagliato', 'Ho tagliato il posto', 'ich habe gestrichen', 'Ich habe die Stelle gestrichen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Ensaio versus crônica C2',
            'desc' => 'A tese que se declara e a cena que se recusa a resumir.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'Os dois gêneros',
                    'teoria' => dteoria(
                        "essay · chronicle · the thesis first · the scene first\nThe essay puts the thesis first. The chronicle puts the scene first and may never name the thesis.",
                        "ensayo · crónica · la tesis primero · la escena primero\nEl ensayo pone la tesis primero. La crónica pone la escena primero y puede no nombrar la tesis.",
                        "essai · chronique · la thèse d abord · la scène d abord\nL essai met la thèse d abord. La chronique met la scène d abord et peut ne jamais nommer la thèse.",
                        "saggio · cronaca · la tesi prima · la scena prima\nIl saggio mette la tesi prima. La cronaca mette la scena prima e può non nominare la tesi.",
                        "Essay · Chronik · die These zuerst · die Szene zuerst\nDas Essay setzt die These zuerst. Die Chronik setzt die Szene zuerst und nennt die These vielleicht nie."
                    ),
                    'itens' => [
                        dlinha('ensaio', 'o ensaio põe a tese na frente', 'essay', 'The essay puts the thesis first', 'ensayo', 'El ensayo pone la tesis primero', 'essai', 'L essai met la thèse d abord', 'saggio', 'Il saggio mette la tesi prima', 'Essay', 'Das Essay setzt die These zuerst'),
                        dlinha('crônica', 'a crônica põe a cena na frente', 'chronicle', 'The chronicle puts the scene first', 'crónica', 'La crónica pone la escena primero', 'chronique', 'La chronique met la scène d abord', 'cronaca', 'La cronaca mette la scena prima', 'Chronik', 'Die Chronik setzt die Szene zuerst'),
                        dlinha('a tese primeiro', 'a tese primeiro', 'the thesis first', 'The thesis first', 'la tesis primero', 'La tesis primero', 'la thèse d abord', 'La thèse d abord', 'la tesi prima', 'La tesi prima', 'die These zuerst', 'Die These zuerst'),
                        dlinha('a cena primeiro', 'a cena primeiro', 'the scene first', 'The scene first', 'la escena primero', 'La escena primero', 'la scène d abord', 'La scène d abord', 'la scena prima', 'La scena prima', 'die Szene zuerst', 'Die Szene zuerst'),
                    ],
                ],
                [
                    'titulo' => 'O que não se resume',
                    'teoria' => dteoria(
                        "refuse the gloss · the detail is the argument · do not moralise · leave the ash\nRefuse the gloss. The detail is the argument. Do not moralise the close. Leave the ash on the table.",
                        "rechaza la glosa · el detalle es el argumento · no moralices · deja la ceniza\nRechaza la glosa. El detalle es el argumento. No moralices el cierre. Deja la ceniza en la mesa.",
                        "refuse la glose · le détail est l argument · ne moralise pas · laisse la cendre\nRefuse la glose. Le détail est l argument. Ne moralise pas la chute. Laisse la cendre sur la table.",
                        "rifiuta la glossa · il dettaglio è l argomento · non moralizzare · lascia la cenere\nRifiuta la glossa. Il dettaglio è l argomento. Non moralizzare la chiusura. Lascia la cenere sul tavolo.",
                        "lehn die Glosse ab · das Detail ist das Argument · nicht moralisieren · lass die Asche\nLehn die Glosse ab. Das Detail ist das Argument. Moralisiere den Schluss nicht. Lass die Asche auf dem Tisch."
                    ),
                    'itens' => [
                        dlinha('recuse a glosa', 'recuse a glosa', 'refuse the gloss', 'Refuse the gloss', 'rechaza la glosa', 'Rechaza la glosa', 'refuse la glose', 'Refuse la glose', 'rifiuta la glossa', 'Rifiuta la glossa', 'lehn die Glosse ab', 'Lehn die Glosse ab'),
                        dlinha('o detalhe é o argumento', 'o detalhe é o argumento', 'the detail is the argument', 'The detail is the argument', 'el detalle es el argumento', 'El detalle es el argumento', 'le détail est l argument', 'Le détail est l argument', 'il dettaglio è l argomento', 'Il dettaglio è l argomento', 'das Detail ist das Argument', 'Das Detail ist das Argument'),
                        dlinha('não moralize', 'não moralize o fecho', 'do not moralise', 'Do not moralise the close', 'no moralices', 'No moralices el cierre', 'ne moralise pas', 'Ne moralise pas la chute', 'non moralizzare', 'Non moralizzare la chiusura', 'nicht moralisieren', 'Moralisiere den Schluss nicht'),
                        dlinha('deixe a cinza', 'deixe a cinza na mesa', 'leave the ash', 'Leave the ash on the table', 'deja la ceniza', 'Deja la ceniza en la mesa', 'laisse la cendre', 'Laisse la cendre sur la table', 'lascia la cenere', 'Lascia la cenere sul tavolo', 'lass die Asche', 'Lass die Asche auf dem Tisch'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Traduzir discurso político C2',
            'desc' => 'O slogan, a ambiguidade calculada e o que o tradutor não desambigua.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O slogan',
                    'teoria' => dteoria(
                        "slogan · calculated ambiguity · do not disambiguate · keep the fog\nA slogan lives on calculated ambiguity. Do not disambiguate it. Keep the fog if the fog is the point.",
                        "eslogan · ambigüedad calculada · no desambigües · deja la niebla\nUn eslogan vive de la ambigüedad calculada. No lo desambigües. Deja la niebla si la niebla es el punto.",
                        "slogan · ambiguïté calculée · ne désambiguïse pas · garde le brouillard\nUn slogan vit de l ambiguïté calculée. Ne le désambiguïse pas. Garde le brouillard si le brouillard est le propos.",
                        "slogan · ambiguità calcolata · non disambiguare · tieni la nebbia\nUno slogan vive di ambiguità calcolata. Non disambiguarlo. Tieni la nebbia se la nebbia è il punto.",
                        "Slogan · kalkulierte Ambiguität · nicht eindeutig machen · lass den Nebel\nEin Slogan lebt von kalkulierter Ambiguität. Mach ihn nicht eindeutig. Lass den Nebel, wenn der Nebel der Punkt ist."
                    ),
                    'itens' => [
                        dlinha('slogan', 'o slogan vive da ambiguidade', 'slogan', 'A slogan lives on ambiguity', 'eslogan', 'Un eslogan vive de la ambigüedad', 'slogan', 'Un slogan vit de l ambiguïté', 'slogan', 'Uno slogan vive di ambiguità', 'Slogan', 'Ein Slogan lebt von Ambiguität'),
                        dlinha('ambiguidade calculada', 'é ambiguidade calculada', 'calculated ambiguity', 'It is calculated ambiguity', 'ambigüedad calculada', 'Es ambigüedad calculada', 'ambiguïté calculée', 'C est une ambiguïté calculée', 'ambiguità calcolata', 'È ambiguità calcolata', 'kalkulierte Ambiguität', 'Es ist kalkulierte Ambiguität'),
                        dlinha('não desambigue', 'não desambigue o slogan', 'do not disambiguate', 'Do not disambiguate the slogan', 'no desambigües', 'No desambigües el eslogan', 'ne désambiguïse pas', 'Ne désambiguïse pas le slogan', 'non disambiguare', 'Non disambiguare lo slogan', 'nicht eindeutig machen', 'Mach den Slogan nicht eindeutig'),
                        dlinha('guarde a névoa', 'guarde a névoa se a névoa é o ponto', 'keep the fog', 'Keep the fog if the fog is the point', 'deja la niebla', 'Deja la niebla si la niebla es el punto', 'garde le brouillard', 'Garde le brouillard si le brouillard est le propos', 'tieni la nebbia', 'Tieni la nebbia se la nebbia è il punto', 'lass den Nebel', 'Lass den Nebel wenn der Nebel der Punkt ist'),
                    ],
                ],
                [
                    'titulo' => 'O pronome',
                    'teoria' => dteoria(
                        "we · they · the dog whistle travels · footnote later\nWe and they do the work. The dog whistle travels. Footnote later, not in the mouth.",
                        "nosotros · ellos · el silbato viaja · nota después\nNosotros y ellos hacen el trabajo. El silbato viaja. La nota después, no en la boca.",
                        "nous · eux · le sifflet voyage · note plus tard\nNous et eux font le travail. Le sifflet voyage. La note plus tard, pas dans la bouche.",
                        "noi · loro · il fischio viaggia · nota dopo\nNoi e loro fanno il lavoro. Il fischio viaggia. La nota dopo, non in bocca.",
                        "wir · sie · die Pfeife reist · Fußnote später\nWir und sie tun die Arbeit. Die Pfeife reist. Die Fußnote später, nicht im Mund."
                    ),
                    'itens' => [
                        dlinha('nós', 'o nós faz o trabalho', 'we', 'We does the work', 'nosotros', 'Nosotros hace el trabajo', 'nous', 'Nous fait le travail', 'noi', 'Noi fa il lavoro', 'wir', 'Wir tut die Arbeit'),
                        dlinha('eles', 'o eles constrói o inimigo', 'they', 'They builds the enemy', 'ellos', 'Ellos construye al enemigo', 'eux', 'Eux construit l ennemi', 'loro', 'Loro costruisce il nemico', 'sie', 'Sie baut den Feind'),
                        dlinha('o apito viaja', 'o apito viaja na tradução', 'the dog whistle travels', 'The dog whistle travels in translation', 'el silbato viaja', 'El silbato viaja en la traducción', 'le sifflet voyage', 'Le sifflet voyage dans la traduction', 'il fischio viaggia', 'Il fischio viaggia nella traduzione', 'die Pfeife reist', 'Die Pfeife reist in der Übersetzung'),
                        dlinha('nota depois', 'a nota vem depois, não na boca', 'footnote later', 'Footnote later not in the mouth', 'nota después', 'La nota después no en la boca', 'note plus tard', 'La note plus tard pas dans la bouche', 'nota dopo', 'La nota dopo non in bocca', 'Fußnote später', 'Die Fußnote später nicht im Mund'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Metáfora conceptual C2',
            'desc' => 'O domínio de origem, o que a metáfora autoriza e o que ela esconde.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O mapeamento',
                    'teoria' => dteoria(
                        "source domain · target · argument is war · mapping\nThe source domain is war. The target is argument. Argument is war. The mapping licenses attack.",
                        "dominio fuente · destino · discutir es guerra · mapeo\nEl dominio fuente es la guerra. El destino es discutir. Discutir es guerra. El mapeo autoriza atacar.",
                        "domaine source · cible · argumenter c est la guerre · correspondance\nLe domaine source est la guerre. La cible est l argument. Argumenter c est la guerre. La correspondance autorise l attaque.",
                        "dominio fonte · bersaglio · argomentare è guerra · mappatura\nIl dominio fonte è la guerra. Il bersaglio è l argomentare. Argomentare è guerra. La mappatura autorizza l attacco.",
                        "Quellbereich · Ziel · Argument ist Krieg · Abbildung\nDer Quellbereich ist Krieg. Das Ziel ist das Argument. Argument ist Krieg. Die Abbildung erlaubt den Angriff."
                    ),
                    'itens' => [
                        dlinha('domínio de origem', 'o domínio de origem é a guerra', 'source domain', 'The source domain is war', 'dominio fuente', 'El dominio fuente es la guerra', 'domaine source', 'Le domaine source est la guerre', 'dominio fonte', 'Il dominio fonte è la guerra', 'Quellbereich', 'Der Quellbereich ist Krieg'),
                        dlinha('alvo', 'o alvo é a discussão', 'target', 'The target is argument', 'destino', 'El destino es discutir', 'cible', 'La cible est l argument', 'bersaglio', 'Il bersaglio è l argomentare', 'Ziel', 'Das Ziel ist das Argument'),
                        dlinha('discutir é guerra', 'discutir é guerra', 'argument is war', 'Argument is war', 'discutir es guerra', 'Discutir es guerra', 'argumenter c est la guerre', 'Argumenter c est la guerre', 'argomentare è guerra', 'Argomentare è guerra', 'Argument ist Krieg', 'Argument ist Krieg'),
                        dlinha('mapeamento', 'o mapeamento autoriza o ataque', 'mapping', 'The mapping licenses attack', 'mapeo', 'El mapeo autoriza atacar', 'correspondance', 'La correspondance autorise l attaque', 'mappatura', 'La mappatura autorizza l attacco', 'Abbildung', 'Die Abbildung erlaubt den Angriff'),
                    ],
                ],
                [
                    'titulo' => 'O que esconde',
                    'teoria' => dteoria(
                        "hides · highlights · change the source · another entailment\nA metaphor hides as it highlights. Change the source and another entailment appears.",
                        "esconde · destaca · cambia la fuente · otra consecuencia\nUna metáfora esconde mientras destaca. Cambia la fuente y aparece otra consecuencia.",
                        "cache · met en lumière · change la source · une autre implication\nUne métaphore cache tout en mettant en lumière. Change la source et une autre implication apparaît.",
                        "nasconde · mette in luce · cambia la fonte · un altra implicazione\nUna metafora nasconde mentre mette in luce. Cambia la fonte e compare un altra implicazione.",
                        "verbirgt · hebt hervor · wechsle die Quelle · eine andere Folgerung\nEine Metapher verbirgt, während sie hervorhebt. Wechsle die Quelle und eine andere Folgerung erscheint."
                    ),
                    'itens' => [
                        dlinha('esconde', 'a metáfora esconde enquanto destaca', 'hides', 'A metaphor hides as it highlights', 'esconde', 'Una metáfora esconde mientras destaca', 'cache', 'Une métaphore cache tout en mettant en lumière', 'nasconde', 'Una metafora nasconde mentre mette in luce', 'verbirgt', 'Eine Metapher verbirgt während sie hervorhebt'),
                        dlinha('destaca', 'o que ela destaca não é inocente', 'highlights', 'What it highlights is not innocent', 'destaca', 'Lo que destaca no es inocente', 'met en lumière', 'Ce qu elle met en lumière n est pas innocent', 'mette in luce', 'Ciò che mette in luce non è innocente', 'hebt hervor', 'Was sie hervorhebt ist nicht unschuldig'),
                        dlinha('mude a origem', 'mude a origem da metáfora', 'change the source', 'Change the source of the metaphor', 'cambia la fuente', 'Cambia la fuente de la metáfora', 'change la source', 'Change la source de la métaphore', 'cambia la fonte', 'Cambia la fonte della metafora', 'wechsle die Quelle', 'Wechsle die Quelle der Metapher'),
                        dlinha('outra consequência', 'aparece outra consequência', 'another entailment', 'Another entailment appears', 'otra consecuencia', 'Aparece otra consecuencia', 'une autre implication', 'Une autre implication apparaît', 'un altra implicazione', 'Compare un altra implicazione', 'eine andere Folgerung', 'Eine andere Folgerung erscheint'),
                    ],
                ],
            ],
        ],
    ];
}
