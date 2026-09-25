<?php

function onda_bc(): array
{
    return [
        [
            'titulo' => 'Morar fora B1',
            'desc' => 'Aluguel, visto e a primeira semana em outro país.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Os papéis',
                    'teoria' => dteoria(
                        "abroad · visa · deposit · register\nI moved abroad. I still need to register and pay the deposit.",
                        "extranjero · visado · fianza · empadronarse\nMe mudé al extranjero. Aún debo empadronarme y pagar la fianza.",
                        "étranger · visa · caution · s inscrire\nJ ai emménagé à l étranger. Il me reste à m inscrire et verser la caution.",
                        "estero · visto · cauzione · registrarsi\nMi sono trasferito all estero. Devo ancora registrarmi e pagare la cauzione.",
                        "Ausland · Visum · Kaution · anmelden\nIch bin ins Ausland gezogen. Ich muss mich noch anmelden und die Kaution zahlen."
                    ),
                    'itens' => [
                        dlinha('no exterior', 'moro no exterior agora', 'abroad', 'I live abroad now', 'extranjero', 'Vivo en el extranjero ahora', 'étranger', 'Je vis à l étranger maintenant', 'estero', 'Adesso vivo all estero', 'Ausland', 'Ich lebe jetzt im Ausland'),
                        dlinha('visto', 'o visto vence em maio', 'visa', 'The visa expires in May', 'visado', 'El visado caduca en mayo', 'visa', 'Le visa expire en mai', 'visto', 'Il visto scade a maggio', 'Visum', 'Das Visum läuft im Mai ab'),
                        dlinha('caução', 'paguei a caução', 'deposit', 'I paid the deposit', 'fianza', 'Pagué la fianza', 'caution', 'J ai versé la caution', 'cauzione', 'Ho pagato la cauzione', 'Kaution', 'Ich habe die Kaution gezahlt'),
                        dlinha('registrar-se', 'preciso me registrar', 'register', 'I need to register', 'empadronarse', 'Tengo que empadronarme', 's inscrire', 'Je dois m inscrire', 'registrarsi', 'Devo registrarmi', 'anmelden', 'Ich muss mich anmelden'),
                    ],
                ],
                [
                    'titulo' => 'A primeira semana',
                    'teoria' => dteoria(
                        "homesick · neighbour · SIM card · get used to\nI felt homesick, but the neighbour helped me get a SIM card.",
                        "nostalgia · vecino · tarjeta SIM · acostumbrarse\nTenía nostalgia, pero el vecino me ayudó con la tarjeta SIM.",
                        "mal du pays · voisin · carte SIM · s habituer\nJ avais le mal du pays, mais le voisin m a aidé pour la carte SIM.",
                        "nostalgia · vicino · SIM · abituarsi\nAvevo nostalgia, ma il vicino mi ha aiutato con la SIM.",
                        "Heimweh · Nachbar · SIM-Karte · gewöhnen\nIch hatte Heimweh, aber der Nachbar half mir mit der SIM-Karte."
                    ),
                    'itens' => [
                        dlinha('saudade de casa', 'tive saudade de casa', 'homesick', 'I felt homesick', 'nostalgia', 'Tenía nostalgia de casa', 'mal du pays', 'J avais le mal du pays', 'nostalgia', 'Avevo nostalgia di casa', 'Heimweh', 'Ich hatte Heimweh'),
                        dlinha('vizinho', 'o vizinho me ajudou', 'neighbour', 'The neighbour helped me', 'vecino', 'El vecino me ayudó', 'voisin', 'Le voisin m a aidé', 'vicino', 'Il vicino mi ha aiutato', 'Nachbar', 'Der Nachbar hat mir geholfen'),
                        dlinha('chip', 'preciso de um chip', 'SIM card', 'I need a SIM card', 'tarjeta SIM', 'Necesito una tarjeta SIM', 'carte SIM', 'Il me faut une carte SIM', 'SIM', 'Mi serve una SIM', 'SIM-Karte', 'Ich brauche eine SIM-Karte'),
                        dlinha('acostumar-se', 'vou me acostumar', 'get used to', 'I will get used to it', 'acostumbrarse', 'Me acostumbraré', 's habituer', 'Je m y habituerai', 'abituarsi', 'Mi ci abituerò', 'gewöhnen', 'Ich werde mich daran gewöhnen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Dar instruções B1',
            'desc' => 'Explicar um processo em etapas claras, sem pressa.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Primeiro isto',
                    'teoria' => dteoria(
                        "first · then · after that · finally\nFirst save the file, then send it. After that, wait.",
                        "primero · luego · después · por último\nPrimero guarda el archivo, luego envíalo. Después espera.",
                        "d abord · ensuite · après · enfin\nD abord enregistre le fichier, ensuite envoie-le. Après, attends.",
                        "prima · poi · dopo · infine\nPrima salva il file, poi invialo. Dopo aspetta.",
                        "zuerst · dann · danach · schließlich\nZuerst speichere die Datei, dann sende sie. Danach warte."
                    ),
                    'itens' => [
                        dlinha('primeiro', 'primeiro salve o arquivo', 'first', 'First save the file', 'primero', 'Primero guarda el archivo', 'd abord', 'D abord enregistre le fichier', 'prima', 'Prima salva il file', 'zuerst', 'Zuerst speichere die Datei'),
                        dlinha('depois', 'depois envie', 'then', 'Then send it', 'luego', 'Luego envíalo', 'ensuite', 'Ensuite envoie-le', 'poi', 'Poi invialo', 'dann', 'Dann sende sie'),
                        dlinha('em seguida', 'em seguida espere', 'after that', 'After that wait', 'después', 'Después espera', 'après', 'Après attends', 'dopo', 'Dopo aspetta', 'danach', 'Danach warte'),
                        dlinha('por fim', 'por fim confira', 'finally', 'Finally check it', 'por último', 'Por último compruébalo', 'enfin', 'Enfin vérifie', 'infine', 'Infine controlla', 'schließlich', 'Schließlich prüfe es'),
                    ],
                ],
                [
                    'titulo' => 'Se algo der errado',
                    'teoria' => dteoria(
                        "make sure · otherwise · in case · restart\nMake sure it is plugged in. Otherwise, restart it.",
                        "asegúrate · si no · por si acaso · reiniciar\nAsegúrate de que está enchufado. Si no, reinícialo.",
                        "assure-toi · sinon · au cas où · redémarrer\nAssure-toi que c est branché. Sinon, redémarre.",
                        "assicurati · altrimenti · nel caso · riavviare\nAssicurati che sia collegato. Altrimenti riavvialo.",
                        "stell sicher · sonst · falls · neu starten\nStell sicher, dass es eingesteckt ist. Sonst starte neu."
                    ),
                    'itens' => [
                        dlinha('certifique-se', 'certifique-se de que está ligado', 'make sure', 'Make sure it is plugged in', 'asegúrate', 'Asegúrate de que está enchufado', 'assure-toi', 'Assure-toi que c est branché', 'assicurati', 'Assicurati che sia collegato', 'stell sicher', 'Stell sicher dass es eingesteckt ist'),
                        dlinha('caso contrário', 'caso contrário, reinicie', 'otherwise', 'Otherwise restart it', 'si no', 'Si no, reinícialo', 'sinon', 'Sinon redémarre', 'altrimenti', 'Altrimenti riavvialo', 'sonst', 'Sonst starte neu'),
                        dlinha('caso', 'leve um cabo, caso precise', 'in case', 'Take a cable in case you need it', 'por si acaso', 'Lleva un cable por si acaso', 'au cas où', 'Prends un câble au cas où', 'nel caso', 'Porta un cavo nel caso', 'falls', 'Nimm ein Kabel mit falls du es brauchst'),
                        dlinha('reiniciar', 'reinicie o aparelho', 'restart', 'Restart the device', 'reiniciar', 'Reinicia el aparato', 'redémarrer', 'Redémarre l appareil', 'riavviare', 'Riavvia il dispositivo', 'neu starten', 'Starte das Gerät neu'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Hábitos de saúde B1',
            'desc' => 'Sono, exercício e o que você mudou na rotina.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O que mudou',
                    'teoria' => dteoria(
                        "cut down · cut out · sleep · stretch\nI cut down on sugar and I stretch every morning.",
                        "reducir · dejar · dormir · estirar\nReduje el azúcar y me estiro cada mañana.",
                        "réduire · supprimer · dormir · s étirer\nJ ai réduit le sucre et je m étire chaque matin.",
                        "ridurre · togliere · dormire · stiracchiarsi\nHo ridotto lo zucchero e mi stiracchio ogni mattina.",
                        "reduzieren · weglassen · schlafen · dehnen\nIch habe Zucker reduziert und dehne mich jeden Morgen."
                    ),
                    'itens' => [
                        dlinha('diminuir', 'diminui o açúcar', 'cut down', 'I cut down on sugar', 'reducir', 'Reduje el azúcar', 'réduire', 'J ai réduit le sucre', 'ridurre', 'Ho ridotto lo zucchero', 'reduzieren', 'Ich habe Zucker reduziert'),
                        dlinha('cortar', 'cortei o refrigerante', 'cut out', 'I cut out soda', 'dejar', 'Dejé el refresco', 'supprimer', 'J ai supprimé le soda', 'togliere', 'Ho tolto le bibite', 'weglassen', 'Ich habe Limo weggelassen'),
                        dlinha('dormir', 'durmo sete horas', 'sleep', 'I sleep seven hours', 'dormir', 'Duermo siete horas', 'dormir', 'Je dors sept heures', 'dormire', 'Dormo sette ore', 'schlafen', 'Ich schlafe sieben Stunden'),
                        dlinha('alongar', 'alongo de manhã', 'stretch', 'I stretch in the morning', 'estirar', 'Me estiro por la mañana', 's étirer', 'Je m étire le matin', 'stiracchiarsi', 'Mi stiracchio al mattino', 'dehnen', 'Ich dehne mich morgens'),
                    ],
                ],
                [
                    'titulo' => 'O médico sugeriu',
                    'teoria' => dteoria(
                        "recommend · screen time · walk · check-up\nThey recommend less screen time and a yearly check-up.",
                        "recomendar · pantallas · caminar · revisión\nRecomiendan menos pantallas y una revisión al año.",
                        "recommander · écrans · marcher · bilan\nIls recommandent moins d écrans et un bilan chaque année.",
                        "consigliare · schermi · camminare · controllo\nConsigliano meno schermi e un controllo all anno.",
                        "empfehlen · Bildschirmzeit · spazieren · Check-up\nSie empfehlen weniger Bildschirmzeit und einen jährlichen Check-up."
                    ),
                    'itens' => [
                        dlinha('recomendar', 'eles recomendam caminhar', 'recommend', 'They recommend walking', 'recomendar', 'Recomiendan caminar', 'recommander', 'Ils recommandent de marcher', 'consigliare', 'Consigliano di camminare', 'empfehlen', 'Sie empfehlen spazieren zu gehen'),
                        dlinha('tela', 'menos tempo de tela', 'screen time', 'Less screen time', 'pantallas', 'Menos pantallas', 'écrans', 'Moins d écrans', 'schermi', 'Meno schermi', 'Bildschirmzeit', 'Weniger Bildschirmzeit'),
                        dlinha('caminhar', 'caminhe meia hora', 'walk', 'Walk for half an hour', 'caminar', 'Camina media hora', 'marcher', 'Marche une demi-heure', 'camminare', 'Cammina mezz ora', 'spazieren', 'Geh eine halbe Stunde spazieren'),
                        dlinha('check-up', 'faça um check-up', 'check-up', 'Get a check-up', 'revisión', 'Hazte una revisión', 'bilan', 'Fais un bilan', 'controllo', 'Fai un controllo', 'Check-up', 'Mach einen Check-up'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Cultura local B1',
            'desc' => 'Costumes da casa, pontualidade e o que não se faz.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Na casa dos outros',
                    'teoria' => dteoria(
                        "take your shoes off · bring something · on time · host\nHere we take our shoes off. Bring something for the host.",
                        "quitarse los zapatos · llevar algo · puntual · anfitrión\nAquí nos quitamos los zapatos. Lleva algo para el anfitrión.",
                        "enlever les chaussures · apporter quelque chose · à l heure · hôte\nIci on enlève les chaussures. Apporte quelque chose à l hôte.",
                        "togliersi le scarpe · portare qualcosa · in orario · ospite\nQui ci togliamo le scarpe. Porta qualcosa per chi ospita.",
                        "Schuhe ausziehen · etwas mitbringen · pünktlich · Gastgeber\nHier ziehen wir die Schuhe aus. Bring etwas für den Gastgeber mit."
                    ),
                    'itens' => [
                        dlinha('tirar os sapatos', 'aqui a gente tira os sapatos', 'take your shoes off', 'Here we take our shoes off', 'quitarse los zapatos', 'Aquí nos quitamos los zapatos', 'enlever les chaussures', 'Ici on enlève les chaussures', 'togliersi le scarpe', 'Qui ci togliamo le scarpe', 'Schuhe ausziehen', 'Hier ziehen wir die Schuhe aus'),
                        dlinha('levar algo', 'leve alguma coisa', 'bring something', 'Bring something', 'llevar algo', 'Lleva algo', 'apporter quelque chose', 'Apporte quelque chose', 'portare qualcosa', 'Porta qualcosa', 'etwas mitbringen', 'Bring etwas mit'),
                        dlinha('pontual', 'chegue pontual', 'on time', 'Arrive on time', 'puntual', 'Llega puntual', 'à l heure', 'Arrive à l heure', 'in orario', 'Arriva in orario', 'pünktlich', 'Komm pünktlich'),
                        dlinha('anfitrião', 'agradeça ao anfitrião', 'host', 'Thank the host', 'anfitrión', 'Agradece al anfitrión', 'hôte', 'Remercie l hôte', 'ospite', 'Ringrazia chi ospita', 'Gastgeber', 'Danke dem Gastgeber'),
                    ],
                ],
                [
                    'titulo' => 'O que não se faz',
                    'teoria' => dteoria(
                        "rude · tip · small talk · custom\nIt is rude to skip small talk. Tipping is a local custom.",
                        "maleducado · propina · charla · costumbre\nEs maleducado saltarse la charla. La propina es una costumbre.",
                        "impoli · pourboire · petite conversation · coutume\nC est impoli de sauter la petite conversation. Le pourboire est une coutume.",
                        "maleducato · mancia · chiacchiere · usanza\nÈ maleducato saltare le chiacchiere. La mancia è un usanza.",
                        "unhöflich · Trinkgeld · Smalltalk · Brauch\nEs ist unhöflich, den Smalltalk zu überspringen. Trinkgeld ist Brauch."
                    ),
                    'itens' => [
                        dlinha('grosseiro', 'isso é grosseiro aqui', 'rude', 'That is rude here', 'maleducado', 'Eso es maleducado aquí', 'impoli', 'C est impoli ici', 'maleducato', 'È maleducato qui', 'unhöflich', 'Das ist hier unhöflich'),
                        dlinha('gorjeta', 'deixe uma gorjeta', 'tip', 'Leave a tip', 'propina', 'Deja propina', 'pourboire', 'Laisse un pourboire', 'mancia', 'Lascia la mancia', 'Trinkgeld', 'Lass Trinkgeld da'),
                        dlinha('conversa fiada', 'faça um pouco de conversa fiada', 'small talk', 'Make some small talk', 'charla', 'Haz un poco de charla', 'petite conversation', 'Fais un peu de petite conversation', 'chiacchiere', 'Fai due chiacchiere', 'Smalltalk', 'Mach etwas Smalltalk'),
                        dlinha('costume', 'é um costume local', 'custom', 'It is a local custom', 'costumbre', 'Es una costumbre local', 'coutume', 'C est une coutume locale', 'usanza', 'È un usanza locale', 'Brauch', 'Das ist ein örtlicher Brauch'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Debate em grupo B2',
            'desc' => 'Ceder a vez, discordar com dados e fechar um ponto.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'Pedir a palavra',
                    'teoria' => dteoria(
                        "come in · if I may · on that point · hold on\nIf I may, I would like to come in on that point.",
                        "intervenir · si me permites · en ese punto · un momento\nSi me permites, quiero intervenir en ese punto.",
                        "intervenir · si je puis · sur ce point · un instant\nSi je puis, j aimerais intervenir sur ce point.",
                        "intervenire · se posso · su questo punto · un attimo\nSe posso, vorrei intervenire su questo punto.",
                        "einwerfen · wenn ich darf · zu dem Punkt · Moment\nWenn ich darf, würde ich zu dem Punkt etwas sagen."
                    ),
                    'itens' => [
                        dlinha('entrar na fala', 'posso entrar na fala', 'come in', 'May I come in here', 'intervenir', 'Puedo intervenir', 'intervenir', 'Je peux intervenir', 'intervenire', 'Posso intervenire', 'einwerfen', 'Darf ich etwas einwerfen'),
                        dlinha('se me permite', 'se me permite', 'if I may', 'If I may', 'si me permites', 'Si me permites', 'si je puis', 'Si je puis', 'se posso', 'Se posso', 'wenn ich darf', 'Wenn ich darf'),
                        dlinha('nesse ponto', 'nesse ponto discordo', 'on that point', 'On that point I disagree', 'en ese punto', 'En ese punto no estoy de acuerdo', 'sur ce point', 'Sur ce point je ne suis pas d accord', 'su questo punto', 'Su questo punto non sono d accordo', 'zu dem Punkt', 'Zu dem Punkt sehe ich das anders'),
                        dlinha('um momento', 'um momento, por favor', 'hold on', 'Hold on please', 'un momento', 'Un momento por favor', 'un instant', 'Un instant s il vous plaît', 'un attimo', 'Un attimo per favore', 'Moment', 'Einen Moment bitte'),
                    ],
                ],
                [
                    'titulo' => 'Fechar o ponto',
                    'teoria' => dteoria(
                        "to sum up · the evidence suggests · we seem to agree · park this\nTo sum up, the evidence suggests we agree. Let us park this.",
                        "en resumen · los datos sugieren · parece que coincidimos · dejarlo\nEn resumen, los datos sugieren que coincidimos. Dejémoslo.",
                        "pour résumer · les données suggèrent · nous semblons d accord · mettre de côté\nPour résumer, les données suggèrent que nous sommes d accord.",
                        "in sintesi · i dati suggeriscono · sembra che siamo d accordo · accantonare\nIn sintesi, i dati suggeriscono che siamo d accordo. Accantoniamolo.",
                        "zusammengefasst · die Daten legen nahe · wir sind uns einig · zurückstellen\nZusammengefasst legen die Daten nahe, dass wir uns einig sind."
                    ),
                    'itens' => [
                        dlinha('em resumo', 'em resumo, concordo', 'to sum up', 'To sum up I agree', 'en resumen', 'En resumen coincido', 'pour résumer', 'Pour résumer je suis d accord', 'in sintesi', 'In sintesi sono d accordo', 'zusammengefasst', 'Zusammengefasst stimme ich zu'),
                        dlinha('os dados sugerem', 'os dados sugerem o contrário', 'the evidence suggests', 'The evidence suggests otherwise', 'los datos sugieren', 'Los datos sugieren lo contrario', 'les données suggèrent', 'Les données suggèrent le contraire', 'i dati suggeriscono', 'I dati suggeriscono il contrario', 'die Daten legen nahe', 'Die Daten legen etwas anderes nahe'),
                        dlinha('parece que concordamos', 'parece que concordamos nisso', 'we seem to agree', 'We seem to agree on this', 'parece que coincidimos', 'Parece que coincidimos en esto', 'nous semblons d accord', 'Nous semblons d accord là-dessus', 'sembra che siamo d accordo', 'Sembra che siamo d accordo su questo', 'wir sind uns einig', 'Wir scheinen uns darin einig'),
                        dlinha('deixar de lado', 'vamos deixar isso de lado', 'park this', 'Let us park this for now', 'dejarlo', 'Dejémoslo por ahora', 'mettre de côté', 'Mettons cela de côté', 'accantonare', 'Accantoniamolo per ora', 'zurückstellen', 'Stellen wir das zurück'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Mudança de carreira B2',
            'desc' => 'Pedir demissão com classe e negociar a saída.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A conversa difícil',
                    'teoria' => dteoria(
                        "resign · notice period · grateful · handover\nI have decided to resign. I will respect the notice period and do a full handover.",
                        "renunciar · preaviso · agradecido · traspaso\nHe decidido renunciar. Respetaré el preaviso y haré el traspaso.",
                        "démissionner · préavis · reconnaissant · passation\nJ ai décidé de démissionner. Je respecterai le préavis et ferai la passation.",
                        "dimettersi · preavviso · grato · passaggio\nHo deciso di dimettermi. Rispetterò il preavviso e farò il passaggio.",
                        "kündigen · Kündigungsfrist · dankbar · Übergabe\nIch habe gekündigt. Ich halte die Frist ein und mache eine volle Übergabe."
                    ),
                    'itens' => [
                        dlinha('pedir demissão', 'decidi pedir demissão', 'resign', 'I have decided to resign', 'renunciar', 'He decidido renunciar', 'démissionner', 'J ai décidé de démissionner', 'dimettersi', 'Ho deciso di dimettermi', 'kündigen', 'Ich habe beschlossen zu kündigen'),
                        dlinha('aviso prévio', 'vou cumprir o aviso', 'notice period', 'I will serve the notice period', 'preaviso', 'Cumpliré el preaviso', 'préavis', 'Je respecterai le préavis', 'preavviso', 'Rispetterò il preavviso', 'Kündigungsfrist', 'Ich halte die Kündigungsfrist ein'),
                        dlinha('grato', 'sou grato pela oportunidade', 'grateful', 'I am grateful for the opportunity', 'agradecido', 'Estoy agradecido por la oportunidad', 'reconnaissant', 'Je suis reconnaissant pour l occasion', 'grato', 'Sono grato per l opportunità', 'dankbar', 'Ich bin dankbar für die Chance'),
                        dlinha('passar o bastão', 'faço a passagem completa', 'handover', 'I will do a full handover', 'traspaso', 'Haré el traspaso completo', 'passation', 'Je ferai une passation complète', 'passaggio', 'Farò il passaggio completo', 'Übergabe', 'Ich mache eine volle Übergabe'),
                    ],
                ],
                [
                    'titulo' => 'O que fica',
                    'teoria' => dteoria(
                        "non-compete · reference · last day · stay in touch\nCould you write a reference? My last day is the 30th. Let us stay in touch.",
                        "no competencia · referencia · último día · seguir en contacto\n¿Podrías escribir una referencia? Mi último día es el 30. Sigamos en contacto.",
                        "non-concurrence · recommandation · dernier jour · rester en contact\nTu pourrais écrire une recommandation ? Mon dernier jour est le 30.",
                        "non concorrenza · referenza · ultimo giorno · restare in contatto\nPotresti scrivere una referenza? L ultimo giorno è il 30.",
                        "Wettbewerb · Zeugnis · letzter Tag · in Kontakt bleiben\nKönntest du ein Zeugnis schreiben? Mein letzter Tag ist der 30."
                    ),
                    'itens' => [
                        dlinha('não concorrência', 'há cláusula de não concorrência', 'non-compete', 'There is a non-compete clause', 'no competencia', 'Hay una cláusula de no competencia', 'non-concurrence', 'Il y a une clause de non-concurrence', 'non concorrenza', 'C è una clausola di non concorrenza', 'Wettbewerb', 'Es gibt eine Wettbewerbsklausel'),
                        dlinha('referência', 'pode escrever uma referência', 'reference', 'Could you write a reference', 'referencia', 'Podrías escribir una referencia', 'recommandation', 'Tu pourrais écrire une recommandation', 'referenza', 'Potresti scrivere una referenza', 'Zeugnis', 'Könntest du ein Zeugnis schreiben'),
                        dlinha('último dia', 'o último dia é dia 30', 'last day', 'The last day is the 30th', 'último día', 'El último día es el 30', 'dernier jour', 'Le dernier jour est le 30', 'ultimo giorno', 'L ultimo giorno è il 30', 'letzter Tag', 'Der letzte Tag ist der 30'),
                        dlinha('manter contato', 'vamos manter contato', 'stay in touch', 'Let us stay in touch', 'seguir en contacto', 'Sigamos en contacto', 'rester en contact', 'Restons en contact', 'restare in contatto', 'Restiamo in contatto', 'in Kontakt bleiben', 'Lassen Sie uns in Kontakt bleiben'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Reclamação formal B2',
            'desc' => 'Carta fria, prazo e o que você espera como solução.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O registro',
                    'teoria' => dteoria(
                        "I am writing to · order number · faulty · within ten days\nI am writing to complain about a faulty item, order 441.",
                        "le escribo para · número de pedido · defectuoso · en diez días\nLe escribo para reclamar un artículo defectuoso, pedido 441.",
                        "je vous écris pour · numéro de commande · défectueux · sous dix jours\nJe vous écris au sujet d un article défectueux, commande 441.",
                        "le scrivo per · numero d ordine · difettoso · entro dieci giorni\nLe scrivo per un articolo difettoso, ordine 441.",
                        "ich schreibe um · Bestellnummer · defekt · binnen zehn Tagen\nIch schreibe wegen eines defekten Artikels, Bestellung 441."
                    ),
                    'itens' => [
                        dlinha('escrevo para', 'escrevo para reclamar', 'I am writing to', 'I am writing to complain', 'le escribo para', 'Le escribo para reclamar', 'je vous écris pour', 'Je vous écris pour me plaindre', 'le scrivo per', 'Le scrivo per reclamare', 'ich schreibe um', 'Ich schreibe um mich zu beschweren'),
                        dlinha('número do pedido', 'o número do pedido é 441', 'order number', 'The order number is 441', 'número de pedido', 'El número de pedido es 441', 'numéro de commande', 'Le numéro de commande est 441', 'numero d ordine', 'Il numero d ordine è 441', 'Bestellnummer', 'Die Bestellnummer ist 441'),
                        dlinha('defeituoso', 'o item veio defeituoso', 'faulty', 'The item is faulty', 'defectuoso', 'El artículo está defectuoso', 'défectueux', 'L article est défectueux', 'difettoso', 'L articolo è difettoso', 'defekt', 'Der Artikel ist defekt'),
                        dlinha('em dez dias', 'peço resposta em dez dias', 'within ten days', 'Please reply within ten days', 'en diez días', 'Responda en diez días', 'sous dix jours', 'Répondez sous dix jours', 'entro dieci giorni', 'Risponda entro dieci giorni', 'binnen zehn Tagen', 'Bitte antworten Sie binnen zehn Tagen'),
                    ],
                ],
                [
                    'titulo' => 'A solução pedida',
                    'teoria' => dteoria(
                        "refund · replacement · escalate · goodwill\nI request a full refund or a replacement. Otherwise I will escalate this.",
                        "reembolso · reemplazo · escalar · gesto comercial\nPido reembolso completo o un reemplazo. Si no, lo escalaré.",
                        "remboursement · remplacement · faire remonter · geste commercial\nJe demande un remboursement ou un remplacement. Sinon je ferai remonter.",
                        "rimborso · sostituzione · escalare · gesto commerciale\nChiedo il rimborso o una sostituzione. Altrimenti lo scalerò.",
                        "Erstattung · Ersatz · eskalieren · Kulanz\nIch bitte um volle Erstattung oder Ersatz. Sonst eskaliere ich das."
                    ),
                    'itens' => [
                        dlinha('reembolso', 'peço reembolso integral', 'refund', 'I request a full refund', 'reembolso', 'Pido el reembolso completo', 'remboursement', 'Je demande un remboursement intégral', 'rimborso', 'Chiedo il rimborso completo', 'Erstattung', 'Ich bitte um volle Erstattung'),
                        dlinha('troca', 'ou uma troca', 'replacement', 'Or a replacement', 'reemplazo', 'O un reemplazo', 'remplacement', 'Ou un remplacement', 'sostituzione', 'O una sostituzione', 'Ersatz', 'Oder einen Ersatz'),
                        dlinha('escalar', 'vou escalar o caso', 'escalate', 'I will escalate the case', 'escalar', 'Escalaré el caso', 'faire remonter', 'Je ferai remonter le dossier', 'escalare', 'Scalerò il caso', 'eskalieren', 'Ich werde den Fall eskalieren'),
                        dlinha('gesto comercial', 'um gesto comercial ajudaria', 'goodwill', 'A goodwill gesture would help', 'gesto comercial', 'Un gesto comercial ayudaría', 'geste commercial', 'Un geste commercial aiderait', 'gesto commerciale', 'Un gesto commerciale aiuterebbe', 'Kulanz', 'Eine Kulanzgeste würde helfen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Ouvir um podcast B2',
            'desc' => 'Notar a tese, um exemplo e o que ficou de fora.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A tese do episódio',
                    'teoria' => dteoria(
                        "host · claim · guest · takeaway\nThe host claims remote work is here to stay. The guest pushes back.",
                        "presentador · afirma · invitado · idea clave\nEl presentador afirma que el remoto se queda. El invitado discrepa.",
                        "animateur · affirme · invité · idée clé\nL animateur affirme que le télétravail reste. L invité conteste.",
                        "conduttore · sostiene · ospite · messaggio\nIl conduttore sostiene che il remoto resta. L ospite obietta.",
                        "Moderator · behauptet · Gast · Takeaway\nDer Moderator behauptet, Remote bleibe. Der Gast widerspricht."
                    ),
                    'itens' => [
                        dlinha('apresentador', 'o apresentador afirma isso', 'host', 'The host claims that', 'presentador', 'El presentador afirma eso', 'animateur', 'L animateur affirme cela', 'conduttore', 'Il conduttore sostiene questo', 'Moderator', 'Der Moderator behauptet das'),
                        dlinha('afirma', 'ele afirma demais', 'claim', 'He claims too much', 'afirma', 'Afirma demasiado', 'affirme', 'Il affirme trop', 'sostiene', 'Sostiene troppo', 'behauptet', 'Er behauptet zu viel'),
                        dlinha('convidado', 'o convidado discorda', 'guest', 'The guest disagrees', 'invitado', 'El invitado discrepa', 'invité', 'L invité n est pas d accord', 'ospite', 'L ospite non è d accordo', 'Gast', 'Der Gast ist anderer Meinung'),
                        dlinha('lição', 'a lição do episódio', 'takeaway', 'The takeaway of the episode', 'idea clave', 'La idea clave del episodio', 'idée clé', 'L idée clé de l épisode', 'messaggio', 'Il messaggio della puntata', 'Takeaway', 'Das Takeaway der Folge'),
                    ],
                ],
                [
                    'titulo' => 'O que ficou de fora',
                    'teoria' => dteoria(
                        "sample · bias · anecdote · missing\nThe sample is small. That anecdote is vivid, but the numbers are missing.",
                        "muestra · sesgo · anécdota · falta\nLa muestra es pequeña. La anécdota es viva, pero faltan los números.",
                        "échantillon · biais · anecdote · manque\nL échantillon est petit. L anecdote est parlante, mais les chiffres manquent.",
                        "campione · distorsione · aneddoto · manca\nIl campione è piccolo. L aneddoto è vivo, ma mancano i numeri.",
                        "Stichprobe · Verzerrung · Anekdote · fehlt\nDie Stichprobe ist klein. Die Anekdote ist stark, aber die Zahlen fehlen."
                    ),
                    'itens' => [
                        dlinha('amostra', 'a amostra é pequena', 'sample', 'The sample is small', 'muestra', 'La muestra es pequeña', 'échantillon', 'L échantillon est petit', 'campione', 'Il campione è piccolo', 'Stichprobe', 'Die Stichprobe ist klein'),
                        dlinha('viés', 'há um viés claro', 'bias', 'There is a clear bias', 'sesgo', 'Hay un sesgo claro', 'biais', 'Il y a un biais clair', 'distorsione', 'C è una distorsione chiara', 'Verzerrung', 'Es gibt eine klare Verzerrung'),
                        dlinha('anedota', 'é só uma anedota', 'anecdote', 'It is only an anecdote', 'anécdota', 'Es solo una anécdota', 'anecdote', 'Ce n est qu une anecdote', 'aneddoto', 'È solo un aneddoto', 'Anekdote', 'Es ist nur eine Anekdote'),
                        dlinha('falta', 'faltam os números', 'missing', 'The numbers are missing', 'falta', 'Faltan los números', 'manque', 'Les chiffres manquent', 'manca', 'Mancano i numeri', 'fehlt', 'Die Zahlen fehlen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C1: conferência',
            'desc' => 'Abrir a mesa, delimitar o recorte e gerir o tempo.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A abertura',
                    'teoria' => dteoria(
                        "keynote · scope · caveat · floor\nI will keep the scope tight. One caveat before I give the floor to the panel.",
                        "ponencia · alcance · matiz · palabra\nMantendré el alcance cerrado. Un matiz antes de ceder la palabra.",
                        "conférence · périmètre · réserve · parole\nJe tiens le périmètre serré. Une réserve avant de céder la parole.",
                        "relazione · perimetro · premessa · parola\nTerrò il perimetro stretto. Una premessa prima di cedere la parola.",
                        "Keynote · Rahmen · Vorbehalt · Wort\nIch halte den Rahmen eng. Ein Vorbehalt, bevor ich das Wort abgebe."
                    ),
                    'itens' => [
                        dlinha('palestra principal', 'a palestra principal começa agora', 'keynote', 'The keynote starts now', 'ponencia', 'La ponencia empieza ahora', 'conférence', 'La conférence commence maintenant', 'relazione', 'La relazione inizia ora', 'Keynote', 'Die Keynote beginnt jetzt'),
                        dlinha('recorte', 'o recorte é deliberadamente estreito', 'scope', 'The scope is deliberately tight', 'alcance', 'El alcance es deliberadamente cerrado', 'périmètre', 'Le périmètre est volontairement serré', 'perimetro', 'Il perimetro è volutamente stretto', 'Rahmen', 'Der Rahmen ist bewusst eng'),
                        dlinha('ressalva', 'uma ressalva importante', 'caveat', 'An important caveat', 'matiz', 'Un matiz importante', 'réserve', 'Une réserve importante', 'premessa', 'Una premessa importante', 'Vorbehalt', 'Ein wichtiger Vorbehalt'),
                        dlinha('a palavra', 'cedo a palavra', 'floor', 'I give the floor', 'palabra', 'Cedo la palabra', 'parole', 'Je cède la parole', 'parola', 'Cedo la parola', 'Wort', 'Ich gebe das Wort'),
                    ],
                ],
                [
                    'titulo' => 'O relógio',
                    'teoria' => dteoria(
                        "overrun · wrap · two minutes · parking lot\nWe are about to overrun. Wrap in two minutes. The rest goes to the parking lot.",
                        "pasarnos · cerrar · dos minutos · parking lot\nEstamos a punto de pasarnos. Cierra en dos minutos. El resto al parking lot.",
                        "dépasser · conclure · deux minutes · parking lot\nNous allons dépasser. Concluez en deux minutes. Le reste au parking lot.",
                        "sforare · chiudere · due minuti · parking lot\nStiamo per sforare. Chiudi in due minuti. Il resto al parking lot.",
                        "überziehen · schließen · zwei Minuten · Parking Lot\nWir drohen zu überziehen. Schließ in zwei Minuten. Der Rest ins Parking Lot."
                    ),
                    'itens' => [
                        dlinha('estourar o tempo', 'vamos estourar o tempo', 'overrun', 'We are about to overrun', 'pasarnos', 'Estamos a punto de pasarnos de tiempo', 'dépasser', 'Nous allons dépasser le temps', 'sforare', 'Stiamo per sforare', 'überziehen', 'Wir drohen die Zeit zu überziehen'),
                        dlinha('encerrar', 'encerre o ponto', 'wrap', 'Please wrap the point', 'cerrar', 'Cierra el punto', 'conclure', 'Concluez le point', 'chiudere', 'Chiudi il punto', 'schließen', 'Schließ den Punkt'),
                        dlinha('dois minutos', 'faltam dois minutos', 'two minutes', 'Two minutes left', 'dos minutos', 'Quedan dos minutos', 'deux minutes', 'Il reste deux minutes', 'due minuti', 'Restano due minuti', 'zwei Minuten', 'Noch zwei Minuten'),
                        dlinha('estacionamento', 'vai para o estacionamento de ideias', 'parking lot', 'That goes to the parking lot', 'parking lot', 'Eso va al parking lot', 'parking lot', 'Ça va au parking lot', 'parking lot', 'Va nel parking lot', 'Parking Lot', 'Das kommt ins Parking Lot'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C1: mediação',
            'desc' => 'Reformular sem tomar partido e achar o mínimo comum.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O que eu ouvi',
                    'teoria' => dteoria(
                        "if I heard you · underneath that · stall · common ground\nIf I heard you, the stall is about risk. There may be common ground on timing.",
                        "si te oí bien · debajo de eso · punto muerto · terreno común\nSi te oí bien, el punto muerto es el riesgo. Puede haber terreno común en el plazo.",
                        "si je t ai bien entendu · derrière ça · blocage · terrain d entente\nSi je t ai bien entendu, le blocage porte sur le risque. Il y a peut-être un terrain d entente sur le délai.",
                        "se ho capito · sotto a questo · stallo · terreno comune\nSe ho capito, lo stallo è sul rischio. Forse c è un terreno comune sui tempi.",
                        "wenn ich dich recht hörte · darunter · Stillstand · Gemeinsamkeit\nWenn ich dich recht hörte, geht der Stillstand ums Risiko. Beim Zeitplan gibt es vielleicht Gemeinsamkeit."
                    ),
                    'itens' => [
                        dlinha('se entendi', 'se entendi bem', 'if I heard you', 'If I heard you correctly', 'si te oí bien', 'Si te oí bien', 'si je t ai bien entendu', 'Si je t ai bien entendu', 'se ho capito', 'Se ho capito bene', 'wenn ich dich recht hörte', 'Wenn ich dich recht hörte'),
                        dlinha('por baixo', 'por baixo disso há medo', 'underneath that', 'Underneath that there is fear', 'debajo de eso', 'Debajo de eso hay miedo', 'derrière ça', 'Derrière ça il y a de la peur', 'sotto a questo', 'Sotto a questo c è paura', 'darunter', 'Darunter steckt Angst'),
                        dlinha('impasse', 'estamos no impasse', 'stall', 'We are at a stall', 'punto muerto', 'Estamos en un punto muerto', 'blocage', 'Nous sommes bloqués', 'stallo', 'Siamo in stallo', 'Stillstand', 'Wir sind im Stillstand'),
                        dlinha('terreno comum', 'há um terreno comum', 'common ground', 'There is common ground', 'terreno común', 'Hay terreno común', 'terrain d entente', 'Il y a un terrain d entente', 'terreno comune', 'C è un terreno comune', 'Gemeinsamkeit', 'Es gibt Gemeinsamkeit'),
                    ],
                ],
                [
                    'titulo' => 'O mínimo viável',
                    'teoria' => dteoria(
                        "for now · without prejudice · parking the rest · trial period\nFor now, without prejudice, we park the rest and run a two-week trial.",
                        "por ahora · sin perjuicio · aparcar el resto · prueba\nPor ahora, sin perjuicio, aparcamos el resto y hacemos una prueba de dos semanas.",
                        "pour l instant · sans préjudice · mettre le reste de côté · essai\nPour l instant, sans préjudice, on met le reste de côté et on teste deux semaines.",
                        "per ora · senza pregiudizio · accantonare il resto · prova\nPer ora, senza pregiudizio, accantoniamo il resto e facciamo una prova di due settimane.",
                        "vorerst · ohne Präjudiz · den Rest parken · Testphase\nVorerst, ohne Präjudiz, parken wir den Rest und machen zwei Wochen Test."
                    ),
                    'itens' => [
                        dlinha('por ora', 'por ora isto basta', 'for now', 'For now this is enough', 'por ahora', 'Por ahora esto basta', 'pour l instant', 'Pour l instant cela suffit', 'per ora', 'Per ora questo basta', 'vorerst', 'Vorerst reicht das'),
                        dlinha('sem prejuízo', 'sem prejuízo de posições', 'without prejudice', 'Without prejudice to positions', 'sin perjuicio', 'Sin perjuicio de las posiciones', 'sans préjudice', 'Sans préjudice des positions', 'senza pregiudizio', 'Senza pregiudizio delle posizioni', 'ohne Präjudiz', 'Ohne Präjudiz für die Positionen'),
                        dlinha('estacionar o resto', 'estacionamos o resto', 'parking the rest', 'We are parking the rest', 'aparcar el resto', 'Aparcamos el resto', 'mettre le reste de côté', 'On met le reste de côté', 'accantonare il resto', 'Accantoniamo il resto', 'den Rest parken', 'Wir parken den Rest'),
                        dlinha('período de teste', 'um período de teste de duas semanas', 'trial period', 'A two-week trial period', 'prueba', 'Una prueba de dos semanas', 'essai', 'Un essai de deux semaines', 'prova', 'Una prova di due settimane', 'Testphase', 'Eine zweiwöchige Testphase'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C1: artigo acadêmico',
            'desc' => 'A tese, o recorte da literatura e o que o dado não prova.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O que o paper faz',
                    'teoria' => dteoria(
                        "this paper argues · literature · gap · contributes\nThis paper argues the gap is measurement, not theory, and contributes a cleaner metric.",
                        "este artículo sostiene · literatura · vacío · aporta\nEste artículo sostiene que el vacío es de medición, no de teoría, y aporta una métrica más limpia.",
                        "cet article soutient · littérature · trou · contribue\nCet article soutient que le trou est de mesure, pas de théorie, et contribue une métrique plus nette.",
                        "questo articolo sostiene · letteratura · vuoto · contribuisce\nQuesto articolo sostiene che il vuoto è di misura, non di teoria, e contribuisce una metrica più pulita.",
                        "dieser Aufsatz argumentiert · Literatur · Lücke · trägt bei\nDieser Aufsatz argumentiert, die Lücke sei Messung, nicht Theorie, und trägt eine sauberere Metrik bei."
                    ),
                    'itens' => [
                        dlinha('este artigo argumenta', 'este artigo argumenta o contrário', 'this paper argues', 'This paper argues otherwise', 'este artículo sostiene', 'Este artículo sostiene lo contrario', 'cet article soutient', 'Cet article soutient le contraire', 'questo articolo sostiene', 'Questo articolo sostiene il contrario', 'dieser Aufsatz argumentiert', 'Dieser Aufsatz argumentiert das Gegenteil'),
                        dlinha('literatura', 'a literatura já cobre o mecanismo', 'literature', 'The literature already covers the mechanism', 'literatura', 'La literatura ya cubre el mecanismo', 'littérature', 'La littérature couvre déjà le mécanisme', 'letteratura', 'La letteratura copre già il meccanismo', 'Literatur', 'Die Literatur deckt den Mechanismus schon ab'),
                        dlinha('lacuna', 'a lacuna é de medida', 'gap', 'The gap is measurement', 'vacío', 'El vacío es de medición', 'trou', 'Le trou est de mesure', 'vuoto', 'Il vuoto è di misura', 'Lücke', 'Die Lücke ist die Messung'),
                        dlinha('contribui', 'o texto contribui uma métrica', 'contributes', 'The text contributes a metric', 'aporta', 'El texto aporta una métrica', 'contribue', 'Le texte contribue une métrique', 'contribuisce', 'Il testo contribuisce una metrica', 'trägt bei', 'Der Text trägt eine Metrik bei'),
                    ],
                ],
                [
                    'titulo' => 'O que não prova',
                    'teoria' => dteoria(
                        "causal · underpowered · external validity · remain agnostic\nThe design is not causal. We remain agnostic on external validity.",
                        "causal · poca potencia · validez externa · nos abstenemos\nEl diseño no es causal. Nos abstenemos sobre la validez externa.",
                        "causal · sous-puissant · validité externe · rester agnostique\nLe dispositif n est pas causal. Nous restons agnostiques sur la validité externe.",
                        "causale · poca potenza · validità esterna · restiamo agnostici\nIl disegno non è causale. Restiamo agnostici sulla validità esterna.",
                        "kausal · unterpowered · externe Validität · agnostisch bleiben\nDas Design ist nicht kausal. Zur externen Validität bleiben wir agnostisch."
                    ),
                    'itens' => [
                        dlinha('causal', 'o desenho não é causal', 'causal', 'The design is not causal', 'causal', 'El diseño no es causal', 'causal', 'Le dispositif n est pas causal', 'causale', 'Il disegno non è causale', 'kausal', 'Das Design ist nicht kausal'),
                        dlinha('pouca potência', 'o teste tem pouca potência', 'underpowered', 'The test is underpowered', 'poca potencia', 'El test tiene poca potencia', 'sous-puissant', 'Le test est sous-puissant', 'poca potenza', 'Il test ha poca potenza', 'unterpowered', 'Der Test ist unterpowered'),
                        dlinha('validade externa', 'a validade externa é limitada', 'external validity', 'External validity is limited', 'validez externa', 'La validez externa es limitada', 'validité externe', 'La validité externe est limitée', 'validità esterna', 'La validità esterna è limitata', 'externe Validität', 'Die externe Validität ist begrenzt'),
                        dlinha('ficar agnóstico', 'ficamos agnósticos nisso', 'remain agnostic', 'We remain agnostic on that', 'nos abstenemos', 'Nos abstenemos sobre eso', 'rester agnostique', 'Nous restons agnostiques là-dessus', 'restiamo agnostici', 'Restiamo agnostici su questo', 'agnostisch bleiben', 'Wir bleiben darin agnostisch'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C2: crítica literária',
            'desc' => 'Tom, voz e o que o texto recusa dizer em voz alta.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'A voz',
                    'teoria' => dteoria(
                        "voice · close third · withheld · aftertaste\nThe close third withholds the motive; the aftertaste is colder than the plot.",
                        "voz · tercera cercana · se reserva · posgusto\nLa tercera cercana se reserva el motivo; el posgusto es más frío que la trama.",
                        "voix · troisième proche · retient · arrière-goût\nLa troisième proche retient le motif ; l arrière-goût est plus froid que l intrigue.",
                        "voce · terza vicina · trattiene · retrogusto\nLa terza vicina trattiene il movente; il retrogusto è più freddo della trama.",
                        "Stimme · nahe dritte · spart aus · Nachgeschmack\nDie nahe dritte spart das Motiv aus; der Nachgeschmack ist kälter als die Handlung."
                    ),
                    'itens' => [
                        dlinha('voz', 'a voz não é estável', 'voice', 'The voice is not stable', 'voz', 'La voz no es estable', 'voix', 'La voix n est pas stable', 'voce', 'La voce non è stabile', 'Stimme', 'Die Stimme ist nicht stabil'),
                        dlinha('terceira próxima', 'usa terceira próxima', 'close third', 'It uses close third', 'tercera cercana', 'Usa tercera cercana', 'troisième proche', 'Il use d une troisième proche', 'terza vicina', 'Usa la terza vicina', 'nahe dritte', 'Es nutzt die nahe dritte'),
                        dlinha('omitir', 'omite o motivo', 'withheld', 'The motive is withheld', 'se reserva', 'Se reserva el motivo', 'retient', 'Il retient le motif', 'trattiene', 'Trattiene il movente', 'spart aus', 'Das Motiv wird ausgespart'),
                        dlinha('retrogosto', 'o retrogosto é frio', 'aftertaste', 'The aftertaste is cold', 'posgusto', 'El posgusto es frío', 'arrière-goût', 'L arrière-goût est froid', 'retrogusto', 'Il retrogusto è freddo', 'Nachgeschmack', 'Der Nachgeschmack ist kalt'),
                    ],
                ],
                [
                    'titulo' => 'O que recusa',
                    'teoria' => dteoria(
                        "sentimental · unearned · refuses consolation · irony as cover\nThe ending refuses consolation. Irony is cover, not a joke.",
                        "sentimental · no ganado · rehúsa consuelo · ironía como tapadera\nEl final rehúsa el consuelo. La ironía es tapadera, no un chiste.",
                        "sentimental · immérité · refuse la consolation · ironie comme couverture\nLa fin refuse la consolation. L ironie est une couverture, pas une blague.",
                        "sentimentale · non guadagnato · rifiuta consolazione · ironia come copertura\nIl finale rifiuta la consolazione. L ironia è copertura, non una battuta.",
                        "sentimental · unverdient · verweigert Trost · Ironie als Deckung\nDas Ende verweigert Trost. Ironie ist Deckung, kein Witz."
                    ),
                    'itens' => [
                        dlinha('sentimental', 'evita o sentimental fácil', 'sentimental', 'It avoids cheap sentimental', 'sentimental', 'Evita lo sentimental fácil', 'sentimental', 'Il évite le sentimental facile', 'sentimentale', 'Evita il sentimentale facile', 'sentimental', 'Es meidet billig Sentimentales'),
                        dlinha('não ganho', 'o pathos não está ganho', 'unearned', 'The pathos is unearned', 'no ganado', 'El patetismo no está ganado', 'immérité', 'Le pathos est immérité', 'non guadagnato', 'Il patetico non è guadagnato', 'unverdient', 'Das Pathos ist unverdient'),
                        dlinha('recusa consolo', 'o final recusa consolo', 'refuses consolation', 'The ending refuses consolation', 'rehúsa consuelo', 'El final rehúsa el consuelo', 'refuse la consolation', 'La fin refuse la consolation', 'rifiuta consolazione', 'Il finale rifiuta la consolazione', 'verweigert Trost', 'Das Ende verweigert Trost'),
                        dlinha('ironia como capa', 'a ironia é capa', 'irony as cover', 'Irony is cover', 'ironía como tapadera', 'La ironía es tapadera', 'ironie comme couverture', 'L ironie est une couverture', 'ironia come copertura', 'L ironia è copertura', 'Ironie als Deckung', 'Ironie ist Deckung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C2: tom e tradução',
            'desc' => 'Quando o equivalente literal mata o registro.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O equivalente trai',
                    'teoria' => dteoria(
                        "calque · register clash · undertranslate · leave the bruise\nA calque creates a register clash. Better to undertranslate and leave the bruise.",
                        "calco · choque de registro · infra-traducir · dejar el moretón\nUn calco crea un choque de registro. Mejor infra-traducir y dejar el moretón.",
                        "calque · choc de registre · sous-traduire · laisser la meurtrissure\nUn calque crée un choc de registre. Mieux vaut sous-traduire et laisser la meurtrissure.",
                        "calco · scontro di registro · sottotradurre · lasciare il livido\nUn calco crea uno scontro di registro. Meglio sottotradurre e lasciare il livido.",
                        "Lehnübersetzung · Registerbruch · unterübersetzen · den Fleck lassen\nEine Lehnübersetzung bricht das Register. Besser unterübersetzen und den Fleck lassen."
                    ),
                    'itens' => [
                        dlinha('decalque', 'o decalque soa falso', 'calque', 'The calque sounds false', 'calco', 'El calco suena falso', 'calque', 'Le calque sonne faux', 'calco', 'Il calco suona falso', 'Lehnübersetzung', 'Die Lehnübersetzung klingt falsch'),
                        dlinha('choque de registro', 'há choque de registro', 'register clash', 'There is a register clash', 'choque de registro', 'Hay un choque de registro', 'choc de registre', 'Il y a un choc de registre', 'scontro di registro', 'C è uno scontro di registro', 'Registerbruch', 'Es gibt einen Registerbruch'),
                        dlinha('subtraduzir', 'é melhor subtraduzir', 'undertranslate', 'It is better to undertranslate', 'infra-traducir', 'Es mejor infra-traducir', 'sous-traduire', 'Mieux vaut sous-traduire', 'sottotradurre', 'È meglio sottotradurre', 'unterübersetzen', 'Besser unterübersetzen'),
                        dlinha('deixar o hematoma', 'deixe o hematoma no texto', 'leave the bruise', 'Leave the bruise in the text', 'dejar el moretón', 'Deja el moretón en el texto', 'laisser la meurtrissure', 'Laisse la meurtrissure dans le texte', 'lasciare il livido', 'Lascia il livido nel testo', 'den Fleck lassen', 'Lass den Fleck im Text'),
                    ],
                ],
                [
                    'titulo' => 'A nota do tradutor',
                    'teoria' => dteoria(
                        "footnote as failure · domesticating · foreignising · the cut\nA footnote can be a failure of nerve. The cut is the real decision.",
                        "nota como fallo · domesticar · extranjerizar · el corte\nUna nota puede ser un fallo de nervio. El corte es la decisión de verdad.",
                        "note comme aveu · domestiquer · étrangéiser · la coupe\nUne note peut être un aveu de faiblesse. La coupe est la vraie décision.",
                        "nota come resa · addomesticare · straniante · il taglio\nUna nota può essere una resa. Il taglio è la vera decisione.",
                        "Fußnote als Scheitern · einbürgern · verfremden · der Schnitt\nEine Fußnote kann ein Mangel an Mut sein. Der Schnitt ist die eigentliche Entscheidung."
                    ),
                    'itens' => [
                        dlinha('nota como falha', 'a nota é uma falha de nervo', 'footnote as failure', 'The footnote is a failure of nerve', 'nota como fallo', 'La nota es un fallo de nervio', 'note comme aveu', 'La note est un aveu de faiblesse', 'nota come resa', 'La nota è una resa', 'Fußnote als Scheitern', 'Die Fußnote ist ein Mangel an Mut'),
                        dlinha('domesticar', 'domesticar demais apaga a aresta', 'domesticating', 'Over-domesticating dulls the edge', 'domesticar', 'Domesticar de más apaga el filo', 'domestiquer', 'Trop domestiquer émousse l arête', 'addomesticare', 'Addomesticare troppo spegne il taglio', 'einbürgern', 'Zu stark einbürgern nimmt die Schärfe'),
                        dlinha('estrangeirizar', 'estrangeirizar pode ser pose', 'foreignising', 'Foreignising can be a pose', 'extranjerizar', 'Extranjerizar puede ser pose', 'étrangéiser', 'Étrangéiser peut être une pose', 'straniante', 'Lo straniante può essere posa', 'verfremden', 'Verfremden kann Pose sein'),
                        dlinha('o corte', 'o corte é a decisão', 'the cut', 'The cut is the decision', 'el corte', 'El corte es la decisión', 'la coupe', 'La coupe est la décision', 'il taglio', 'Il taglio è la decisione', 'der Schnitt', 'Der Schnitt ist die Entscheidung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'C2: registro jurídico fino',
            'desc' => 'Sem admitir culpa, reservar direitos e fechar a carta.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'Sem prejuízo dos direitos',
                    'teoria' => dteoria(
                        "without admission · reserved · constructive · this letter\nWithout admission of liability, all rights are reserved. This letter is not constructive notice.",
                        "sin admisión · reservados · constructivo · esta carta\nSin admisión de responsabilidad, se reservan todos los derechos. Esta carta no es un aviso constructivo.",
                        "sans reconnaissance · réservés · constructif · la présente\nSans reconnaissance de responsabilité, tous droits sont réservés. La présente n est pas un avis constructif.",
                        "senza ammissione · riservati · costruttivo · la presente\nSenza ammissione di responsabilità, tutti i diritti sono riservati. La presente non è un avviso costruttivo.",
                        "ohne Anerkenntnis · vorbehalten · konstruktiv · dieses Schreiben\nOhne Anerkenntnis einer Haftung bleiben alle Rechte vorbehalten. Dieses Schreiben ist keine konstruktive Mitteilung."
                    ),
                    'itens' => [
                        dlinha('sem admissão', 'sem admissão de responsabilidade', 'without admission', 'Without admission of liability', 'sin admisión', 'Sin admisión de responsabilidad', 'sans reconnaissance', 'Sans reconnaissance de responsabilité', 'senza ammissione', 'Senza ammissione di responsabilità', 'ohne Anerkenntnis', 'Ohne Anerkenntnis einer Haftung'),
                        dlinha('reservados', 'todos os direitos reservados', 'reserved', 'All rights reserved', 'reservados', 'Todos los derechos reservados', 'réservés', 'Tous droits réservés', 'riservati', 'Tutti i diritti riservati', 'vorbehalten', 'Alle Rechte vorbehalten'),
                        dlinha('construtivo', 'não é aviso construtivo', 'constructive', 'This is not constructive notice', 'constructivo', 'No es un aviso constructivo', 'constructif', 'Ce n est pas un avis constructif', 'costruttivo', 'Non è un avviso costruttivo', 'konstruktiv', 'Das ist keine konstruktive Mitteilung'),
                        dlinha('esta carta', 'esta carta não cria obrigação', 'this letter', 'This letter creates no obligation', 'esta carta', 'Esta carta no crea obligación', 'la présente', 'La présente ne crée aucune obligation', 'la presente', 'La presente non crea obblighi', 'dieses Schreiben', 'Dieses Schreiben begründet keine Pflicht'),
                    ],
                ],
                [
                    'titulo' => 'O fecho',
                    'teoria' => dteoria(
                        "time is of the essence · further to · we remain · yours faithfully\nTime is of the essence. Further to ours of the 12th, we remain, yours faithfully.",
                        "el tiempo es esencial · en relación con · quedamos · atentamente\nEl tiempo es esencial. En relación con la nuestra del 12, quedamos atentamente.",
                        "le temps est essentiel · faisant suite · nous vous prions · veuillez agréer\nLe temps est essentiel. Faisant suite à la nôtre du 12, veuillez agréer.",
                        "il tempo è essenziale · a seguito · restiamo · cordiali saluti\nIl tempo è essenziale. A seguito della nostra del 12, cordiali saluti.",
                        "Zeit ist wesentlich · im Anschluss · verbleiben wir · hochachtungsvoll\nZeit ist wesentlich. Im Anschluss an unser Schreiben vom 12. verbleiben wir hochachtungsvoll."
                    ),
                    'itens' => [
                        dlinha('o tempo é essencial', 'o tempo é essencial neste contrato', 'time is of the essence', 'Time is of the essence in this contract', 'el tiempo es esencial', 'El tiempo es esencial en este contrato', 'le temps est essentiel', 'Le temps est essentiel dans ce contrat', 'il tempo è essenziale', 'Il tempo è essenziale in questo contratto', 'Zeit ist wesentlich', 'Zeit ist in diesem Vertrag wesentlich'),
                        dlinha('em seguimento', 'em seguimento à nossa de 12', 'further to', 'Further to ours of the 12th', 'en relación con', 'En relación con la nuestra del 12', 'faisant suite', 'Faisant suite à la nôtre du 12', 'a seguito', 'A seguito della nostra del 12', 'im Anschluss', 'Im Anschluss an unser Schreiben vom 12'),
                        dlinha('permanecemos', 'permanecemos à disposição', 'we remain', 'We remain at your disposal', 'quedamos', 'Quedamos a su disposición', 'nous vous prions', 'Nous restons à votre disposition', 'restiamo', 'Restiamo a disposizione', 'verbleiben wir', 'Wir verbleiben zu Ihrer Verfügung'),
                        dlinha('atenciosamente', 'atenciosamente', 'yours faithfully', 'Yours faithfully', 'atentamente', 'Atentamente', 'veuillez agréer', 'Veuillez agréer nos salutations', 'cordiali saluti', 'Cordiali saluti', 'hochachtungsvoll', 'Hochachtungsvoll'),
                    ],
                ],
            ],
        ],
    ];
}
