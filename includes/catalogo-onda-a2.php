<?php

function onda_a2(): array
{
    return [
        [
            'titulo' => 'Na biblioteca',
            'desc' => 'Pegar um livro, devolver e pedir silêncio.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Pegar um livro',
                    'teoria' => dteoria(
                        "library · borrow · return · card\nI want to borrow this book. Here is my card.",
                        "biblioteca · prestar · devolver · carnet\nQuiero tomar prestado este libro. Aquí está mi carnet.",
                        "bibliothèque · emprunter · rendre · carte\nJe voudrais emprunter ce livre. Voici ma carte.",
                        "biblioteca · prendere in prestito · restituire · tessera\nVorrei prendere in prestito questo libro. Ecco la tessera.",
                        "Bibliothek · ausleihen · zurückgeben · Ausweis\nIch möchte dieses Buch ausleihen. Hier ist mein Ausweis."
                    ),
                    'itens' => [
                        dlinha('biblioteca', 'a biblioteca fecha às oito', 'library', 'The library closes at eight', 'biblioteca', 'La biblioteca cierra a las ocho', 'bibliothèque', 'La bibliothèque ferme à huit heures', 'biblioteca', 'La biblioteca chiude alle otto', 'Bibliothek', 'Die Bibliothek schließt um acht'),
                        dlinha('pegar emprestado', 'posso pegar emprestado', 'borrow', 'Can I borrow this', 'prestar', 'Puedo tomar prestado esto', 'emprunter', 'Je peux emprunter ça', 'prendere in prestito', 'Posso prenderlo in prestito', 'ausleihen', 'Kann ich das ausleihen'),
                        dlinha('devolver', 'devo devolver na sexta', 'return', 'I must return it on Friday', 'devolver', 'Debo devolverlo el viernes', 'rendre', 'Je dois le rendre vendredi', 'restituire', 'Devo restituirlo venerdì', 'zurückgeben', 'Ich muss es am Freitag zurückgeben'),
                        dlinha('carteirinha', 'esqueci a carteirinha', 'card', 'I forgot my card', 'carnet', 'Olvidé el carnet', 'carte', 'J ai oublié ma carte', 'tessera', 'Ho dimenticato la tessera', 'Ausweis', 'Ich habe den Ausweis vergessen'),
                    ],
                ],
                [
                    'titulo' => 'Silêncio por favor',
                    'teoria' => dteoria(
                        "quiet · shelf · late · fine\nPlease be quiet. This book is late.",
                        "silencio · estante · tarde · multa\nSilencio, por favor. Este libro llega tarde.",
                        "silence · rayon · en retard · amende\nSilence s il vous plaît. Ce livre est en retard.",
                        "silenzio · scaffale · in ritardo · multa\nSilenzio per favore. Questo libro è in ritardo.",
                        "Ruhe · Regal · zu spät · Gebühr\nBitte Ruhe. Dieses Buch ist zu spät."
                    ),
                    'itens' => [
                        dlinha('silêncio', 'façam silêncio', 'quiet', 'Please be quiet', 'silencio', 'Silencio por favor', 'silence', 'Silence s il vous plaît', 'silenzio', 'Silenzio per favore', 'Ruhe', 'Bitte Ruhe'),
                        dlinha('estante', 'está nesta estante', 'shelf', 'It is on this shelf', 'estante', 'Está en esta estante', 'rayon', 'C est dans ce rayon', 'scaffale', 'È su questo scaffale', 'Regal', 'Es ist in diesem Regal'),
                        dlinha('atrasado', 'o livro está atrasado', 'late', 'The book is late', 'tarde', 'El libro llega tarde', 'en retard', 'Le livre est en retard', 'in ritardo', 'Il libro è in ritardo', 'zu spät', 'Das Buch ist zu spät'),
                        dlinha('multa', 'há uma multa pequena', 'fine', 'There is a small fine', 'multa', 'Hay una multa pequeña', 'amende', 'Il y a une petite amende', 'multa', 'C è una piccola multa', 'Gebühr', 'Es gibt eine kleine Gebühr'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Reservar uma mesa',
            'desc' => 'Telefone para o restaurante: hora, pessoas e janela.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Para quantas pessoas',
                    'teoria' => dteoria(
                        "book a table · for two · tonight · window\nI would like to book a table for two tonight.",
                        "reservar · para dos · esta noche · ventana\nQuisiera reservar una mesa para dos esta noche.",
                        "réserver · pour deux · ce soir · fenêtre\nJe voudrais réserver une table pour deux ce soir.",
                        "prenotare · per due · stasera · finestra\nVorrei prenotare un tavolo per due stasera.",
                        "reservieren · für zwei · heute Abend · Fenster\nIch möchte einen Tisch für zwei heute Abend reservieren."
                    ),
                    'itens' => [
                        dlinha('reservar', 'quero reservar uma mesa', 'book a table', 'I would like to book a table', 'reservar', 'Quisiera reservar una mesa', 'réserver', 'Je voudrais réserver une table', 'prenotare', 'Vorrei prenotare un tavolo', 'reservieren', 'Ich möchte einen Tisch reservieren'),
                        dlinha('para dois', 'para duas pessoas', 'for two', 'For two people', 'para dos', 'Para dos personas', 'pour deux', 'Pour deux personnes', 'per due', 'Per due persone', 'für zwei', 'Für zwei Personen'),
                        dlinha('hoje à noite', 'hoje à noite às oito', 'tonight', 'Tonight at eight', 'esta noche', 'Esta noche a las ocho', 'ce soir', 'Ce soir à huit heures', 'stasera', 'Stasera alle otto', 'heute Abend', 'Heute Abend um acht'),
                        dlinha('janela', 'perto da janela', 'window', 'Near the window', 'ventana', 'Cerca de la ventana', 'fenêtre', 'Près de la fenêtre', 'finestra', 'Vicino alla finestra', 'Fenster', 'Am Fenster'),
                    ],
                ],
                [
                    'titulo' => 'Confirmar o horário',
                    'teoria' => dteoria(
                        "available · confirm · name · cancel\nIs 8 pm available? I confirm under my name.",
                        "disponible · confirmar · nombre · cancelar\n¿Hay mesa a las 20? Confirmo a mi nombre.",
                        "disponible · confirmer · nom · annuler\nVous avez de la place à 20 h ? Je confirme à mon nom.",
                        "disponibile · confermare · nome · disdire\nÈ libero alle 20? Confermo a nome mio.",
                        "frei · bestätigen · Name · absagen\nIst 20 Uhr frei? Ich bestätige auf meinen Namen."
                    ),
                    'itens' => [
                        dlinha('disponível', 'ainda está disponível', 'available', 'Is it still available', 'disponible', 'Sigue disponible', 'disponible', 'C est encore disponible', 'disponibile', 'È ancora disponibile', 'frei', 'Ist es noch frei'),
                        dlinha('confirmar', 'posso confirmar', 'confirm', 'I can confirm', 'confirmar', 'Puedo confirmar', 'confirmer', 'Je peux confirmer', 'confermare', 'Posso confermare', 'bestätigen', 'Ich kann bestätigen'),
                        dlinha('nome', 'no nome de Ana', 'name', 'Under the name Ana', 'nombre', 'A nombre de Ana', 'nom', 'Au nom d Ana', 'nome', 'A nome di Ana', 'Name', 'Auf den Namen Ana'),
                        dlinha('cancelar', 'preciso cancelar', 'cancel', 'I need to cancel', 'cancelar', 'Necesito cancelar', 'annuler', 'Je dois annuler', 'disdire', 'Devo disdire', 'absagen', 'Ich muss absagen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Provar uma roupa',
            'desc' => 'Provador, tamanho e pedir outra cor.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'O provador',
                    'teoria' => dteoria(
                        "fitting room · try on · size · tight\nCan I try this on? It is a bit tight.",
                        "probador · probarse · talla · justo\n¿Puedo probármelo? Está un poco justo.",
                        "cabine · essayer · taille · serré\nJe peux l essayer ? C est un peu serré.",
                        "camerino · provare · taglia · stretto\nPosso provarlo? È un po stretto.",
                        "Kabine · anprobieren · Größe · eng\nKann ich das anprobieren? Es ist etwas eng."
                    ),
                    'itens' => [
                        dlinha('provador', 'onde é o provador', 'fitting room', 'Where is the fitting room', 'probador', 'Dónde está el probador', 'cabine', 'Où est la cabine', 'camerino', 'Dov è il camerino', 'Kabine', 'Wo ist die Kabine'),
                        dlinha('provar', 'posso provar isto', 'try on', 'Can I try this on', 'probarse', 'Puedo probármelo', 'essayer', 'Je peux l essayer', 'provare', 'Posso provarlo', 'anprobieren', 'Kann ich das anprobieren'),
                        dlinha('tamanho', 'qual é o tamanho', 'size', 'What size is this', 'talla', 'Qué talla es', 'taille', 'Quelle taille c est', 'taglia', 'Che taglia è', 'Größe', 'Welche Größe ist das'),
                        dlinha('apertado', 'está um pouco apertado', 'tight', 'It is a bit tight', 'justo', 'Está un poco justo', 'serré', 'C est un peu serré', 'stretto', 'È un po stretto', 'eng', 'Es ist etwas eng'),
                    ],
                ],
                [
                    'titulo' => 'Outra cor',
                    'teoria' => dteoria(
                        "loose · another colour · cheaper · receipt\nDo you have it in another colour? I will take it.",
                        "holgado · otro color · más barato · ticket\n¿Lo tienen en otro color? Me lo llevo.",
                        "large · autre couleur · moins cher · ticket\nVous l avez dans une autre couleur ? Je le prends.",
                        "largo · altro colore · più economico · scontrino\nCe l avete in un altro colore? Lo prendo.",
                        "weit · andere Farbe · günstiger · Beleg\nHaben Sie das in einer anderen Farbe? Ich nehme es."
                    ),
                    'itens' => [
                        dlinha('folgado', 'está folgado', 'loose', 'It is loose', 'holgado', 'Está holgado', 'large', 'C est trop large', 'largo', 'È largo', 'weit', 'Es ist zu weit'),
                        dlinha('outra cor', 'tem em outra cor', 'another colour', 'Do you have another colour', 'otro color', 'Tienen otro color', 'autre couleur', 'Vous avez une autre couleur', 'altro colore', 'Avete un altro colore', 'andere Farbe', 'Haben Sie eine andere Farbe'),
                        dlinha('mais barato', 'há um mais barato', 'cheaper', 'Is there a cheaper one', 'más barato', 'Hay uno más barato', 'moins cher', 'Il y en a un moins cher', 'più economico', 'Ce n è uno più economico', 'günstiger', 'Gibt es ein günstigeres'),
                        dlinha('recibo', 'quero o recibo', 'receipt', 'I would like the receipt', 'ticket', 'Quiero el ticket', 'ticket', 'Je voudrais le ticket', 'scontrino', 'Vorrei lo scontrino', 'Beleg', 'Ich möchte den Beleg'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Recusar um convite',
            'desc' => 'Dizer não com educação e sugerir outro dia.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Não posso ir',
                    'teoria' => dteoria(
                        "I would love to · I can t · maybe another day · thanks anyway\nI would love to, but I can t tonight.",
                        "me encantaría · no puedo · otro día · gracias igual\nMe encantaría, pero no puedo esta noche.",
                        "j aimerais bien · je ne peux pas · un autre jour · merci quand même\nJ aimerais bien, mais je ne peux pas ce soir.",
                        "mi piacerebbe · non posso · un altro giorno · grazie comunque\nMi piacerebbe, ma non posso stasera.",
                        "gern · ich kann nicht · ein anderer Tag · trotzdem danke\nGern, aber ich kann heute Abend nicht."
                    ),
                    'itens' => [
                        dlinha('adoraria', 'adoraria ir', 'I would love to', 'I would love to go', 'me encantaría', 'Me encantaría ir', 'j aimerais bien', 'J aimerais bien y aller', 'mi piacerebbe', 'Mi piacerebbe venire', 'gern', 'Ich würde gern kommen'),
                        dlinha('não posso', 'hoje não posso', 'I can t', 'I can t today', 'no puedo', 'Hoy no puedo', 'je ne peux pas', 'Je ne peux pas aujourd hui', 'non posso', 'Oggi non posso', 'ich kann nicht', 'Heute kann ich nicht'),
                        dlinha('outro dia', 'talvez outro dia', 'maybe another day', 'Maybe another day', 'otro día', 'Quizá otro día', 'un autre jour', 'Peut-être un autre jour', 'un altro giorno', 'Forse un altro giorno', 'ein anderer Tag', 'Vielleicht ein anderer Tag'),
                        dlinha('mesmo assim', 'obrigado mesmo assim', 'thanks anyway', 'Thanks anyway', 'gracias igual', 'Gracias igual', 'merci quand même', 'Merci quand même', 'grazie comunque', 'Grazie comunque', 'trotzdem danke', 'Trotzdem danke'),
                    ],
                ],
                [
                    'titulo' => 'Uma desculpa honesta',
                    'teoria' => dteoria(
                        "busy · tired · next week · rain check\nI am busy this weekend. Next week?",
                        "ocupado · cansado · la semana que viene · otro día\nEstoy ocupado este fin de semana. ¿La semana que viene?",
                        "occupé · fatigué · la semaine prochaine · une autre fois\nJe suis occupé ce week-end. La semaine prochaine ?",
                        "occupato · stanco · la settimana prossima · un altra volta\nSono occupato questo weekend. La settimana prossima?",
                        "beschäftigt · müde · nächste Woche · ein anderes Mal\nIch bin dieses Wochenende beschäftigt. Nächste Woche?"
                    ),
                    'itens' => [
                        dlinha('ocupado', 'estou ocupado', 'busy', 'I am busy', 'ocupado', 'Estoy ocupado', 'occupé', 'Je suis occupé', 'occupato', 'Sono occupato', 'beschäftigt', 'Ich bin beschäftigt'),
                        dlinha('cansado', 'estou muito cansado', 'tired', 'I am very tired', 'cansado', 'Estoy muy cansado', 'fatigué', 'Je suis très fatigué', 'stanco', 'Sono molto stanco', 'müde', 'Ich bin sehr müde'),
                        dlinha('semana que vem', 'na semana que vem', 'next week', 'Next week', 'la semana que viene', 'La semana que viene', 'la semaine prochaine', 'La semaine prochaine', 'la settimana prossima', 'La settimana prossima', 'nächste Woche', 'Nächste Woche'),
                        dlinha('fica para depois', 'fica para depois', 'rain check', 'I will take a rain check', 'otro día', 'Lo dejamos para otro día', 'une autre fois', 'Ce sera pour une autre fois', 'un altra volta', 'Sarà per un altra volta', 'ein anderes Mal', 'Ein anderes Mal'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Consulta no médico',
            'desc' => 'Marcar, descrever o sintoma e entender a receita.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'O que você sente',
                    'teoria' => dteoria(
                        "appointment · pain · since · worse\nI have had this pain since Monday. It is getting worse.",
                        "cita · dolor · desde · peor\nTengo este dolor desde el lunes. Está peor.",
                        "rendez-vous · douleur · depuis · pire\nJ ai cette douleur depuis lundi. Ça empire.",
                        "appuntamento · dolore · da · peggio\nHo questo dolore da lunedì. Sta peggiorando.",
                        "Termin · Schmerz · seit · schlimmer\nIch habe diesen Schmerz seit Montag. Es wird schlimmer."
                    ),
                    'itens' => [
                        dlinha('consulta', 'tenho uma consulta', 'appointment', 'I have an appointment', 'cita', 'Tengo una cita', 'rendez-vous', 'J ai un rendez-vous', 'appuntamento', 'Ho un appuntamento', 'Termin', 'Ich habe einen Termin'),
                        dlinha('dor', 'sinto uma dor aqui', 'pain', 'I feel a pain here', 'dolor', 'Siento un dolor aquí', 'douleur', 'J ai une douleur ici', 'dolore', 'Sento un dolore qui', 'Schmerz', 'Ich habe hier Schmerzen'),
                        dlinha('desde', 'desde segunda-feira', 'since', 'Since Monday', 'desde', 'Desde el lunes', 'depuis', 'Depuis lundi', 'da', 'Da lunedì', 'seit', 'Seit Montag'),
                        dlinha('pior', 'está pior hoje', 'worse', 'It is worse today', 'peor', 'Está peor hoy', 'pire', 'C est pire aujourd hui', 'peggio', 'Oggi è peggio', 'schlimmer', 'Heute ist es schlimmer'),
                    ],
                ],
                [
                    'titulo' => 'A receita',
                    'teoria' => dteoria(
                        "prescription · twice a day · rest · pharmacy\nTake this twice a day. Get it at the pharmacy.",
                        "receta · dos veces al día · reposo · farmacia\nTómalo dos veces al día. En la farmacia.",
                        "ordonnance · deux fois par jour · repos · pharmacie\nPrends ça deux fois par jour. À la pharmacie.",
                        "ricetta · due volte al giorno · riposo · farmacia\nPrendilo due volte al giorno. In farmacia.",
                        "Rezept · zweimal täglich · Ruhe · Apotheke\nNimm das zweimal täglich. In der Apotheke."
                    ),
                    'itens' => [
                        dlinha('receita', 'esta é a receita', 'prescription', 'This is the prescription', 'receta', 'Esta es la receta', 'ordonnance', 'Voici l ordonnance', 'ricetta', 'Questa è la ricetta', 'Rezept', 'Das ist das Rezept'),
                        dlinha('duas vezes ao dia', 'tome duas vezes ao dia', 'twice a day', 'Take it twice a day', 'dos veces al día', 'Tómalo dos veces al día', 'deux fois par jour', 'Prends-le deux fois par jour', 'due volte al giorno', 'Prendilo due volte al giorno', 'zweimal täglich', 'Nimm es zweimal täglich'),
                        dlinha('repouso', 'precisa de repouso', 'rest', 'You need rest', 'reposo', 'Necesitas reposo', 'repos', 'Il te faut du repos', 'riposo', 'Ti serve riposo', 'Ruhe', 'Du brauchst Ruhe'),
                        dlinha('farmácia', 'na farmácia da esquina', 'pharmacy', 'At the pharmacy on the corner', 'farmacia', 'En la farmacia de la esquina', 'pharmacie', 'À la pharmacie du coin', 'farmacia', 'In farmacia all angolo', 'Apotheke', 'In der Apotheke an der Ecke'),
                    ],
                ],
            ],
        ],
    ];
}
