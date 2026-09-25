<?php

function pico_b(): array
{
    return [
        [
            'titulo' => 'Alugar um carro B1',
            'desc' => 'Categoria, seguro, quilometragem e devolver o carro.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Na locadora',
                    'teoria' => dteoria(
                        "rent · insurance · mileage · deposit\nI would like to rent a compact. Does the insurance cover mileage?",
                        "alquilar · seguro · kilometraje · fianza\nQuiero alquilar un compacto. ¿El seguro cubre el kilometraje?",
                        "louer · assurance · kilométrage · caution\nJe voudrais louer un compact. L assurance couvre le kilométrage ?",
                        "noleggiare · assicurazione · chilometraggio · cauzione\nVorrei noleggiare una compatta. L assicurazione copre il chilometraggio?",
                        "mieten · Versicherung · Kilometerstand · Kaution\nIch möchte einen Kleinwagen mieten. Deckt die Versicherung den Kilometerstand?"
                    ),
                    'itens' => [
                        dlinha('alugar', 'quero alugar um carro', 'rent', 'I would like to rent a car', 'alquilar', 'Quiero alquilar un coche', 'louer', 'Je voudrais louer une voiture', 'noleggiare', 'Vorrei noleggiare una macchina', 'mieten', 'Ich möchte ein Auto mieten'),
                        dlinha('seguro', 'o seguro está incluso', 'insurance', 'Is insurance included', 'seguro', 'El seguro está incluido', 'assurance', 'L assurance est comprise', 'assicurazione', 'L assicurazione è inclusa', 'Versicherung', 'Ist die Versicherung inklusive'),
                        dlinha('quilometragem', 'qual é o limite de quilometragem', 'mileage', 'What is the mileage limit', 'kilometraje', 'Cuál es el límite de kilometraje', 'kilométrage', 'Quelle est la limite de kilométrage', 'chilometraggio', 'Qual è il limite di chilometraggio', 'Kilometerstand', 'Wie ist das Kilometerlimit'),
                        dlinha('caução', 'a caução sai no cartão', 'deposit', 'The deposit goes on the card', 'fianza', 'La fianza sale en la tarjeta', 'caution', 'La caution passe sur la carte', 'cauzione', 'La cauzione va sulla carta', 'Kaution', 'Die Kaution geht auf die Karte'),
                    ],
                ],
                [
                    'titulo' => 'Na devolução',
                    'teoria' => dteoria(
                        "full tank · scratch · drop-off · extra day\nPlease return it with a full tank. There is a scratch on the door.",
                        "depósito lleno · rayón · devolución · día extra\nDevuélvelo con el depósito lleno. Hay un rayón en la puerta.",
                        "plein · rayure · restitution · jour de plus\nRends-la avec le plein. Il y a une rayure sur la portière.",
                        "pieno · graffio · riconsegna · giorno in più\nRiconsegnala col pieno. C è un graffio sullo sportello.",
                        "voll · Kratzer · Rückgabe · Extra-Tag\nBitte vollgetankt zurück. Da ist ein Kratzer an der Tür."
                    ),
                    'itens' => [
                        dlinha('tanque cheio', 'devolva com o tanque cheio', 'full tank', 'Return it with a full tank', 'depósito lleno', 'Devuélvelo con el depósito lleno', 'plein', 'Rends-la avec le plein', 'pieno', 'Riconsegnala col pieno', 'voll', 'Gib sie vollgetankt zurück'),
                        dlinha('risco', 'há um risco na porta', 'scratch', 'There is a scratch on the door', 'rayón', 'Hay un rayón en la puerta', 'rayure', 'Il y a une rayure sur la portière', 'graffio', 'C è un graffio sullo sportello', 'Kratzer', 'Da ist ein Kratzer an der Tür'),
                        dlinha('devolução', 'a devolução é no aeroporto', 'drop-off', 'The drop-off is at the airport', 'devolución', 'La devolución es en el aeropuerto', 'restitution', 'La restitution est à l aéroport', 'riconsegna', 'La riconsegna è in aeroporto', 'Rückgabe', 'Die Rückgabe ist am Flughafen'),
                        dlinha('dia a mais', 'preciso de um dia a mais', 'extra day', 'I need an extra day', 'día extra', 'Necesito un día extra', 'jour de plus', 'Il me faut un jour de plus', 'giorno in più', 'Mi serve un giorno in più', 'Extra-Tag', 'Ich brauche einen Extra-Tag'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Filmes e séries B1',
            'desc' => 'Gênero, spoiler, temporada e o que você recomenda.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O que você assiste',
                    'teoria' => dteoria(
                        "series · season · spoiler · binge\nI started a new series. No spoilers. I binge one season a weekend.",
                        "serie · temporada · spoiler · maratón\nEmpecé una serie nueva. Sin spoilers. Hago maratón de una temporada.",
                        "série · saison · spoiler · binge\nJ ai commencé une nouvelle série. Sans spoiler. Je binge une saison le week-end.",
                        "serie · stagione · spoiler · maratona\nHo iniziato una serie nuova. Niente spoiler. Faccio maratona di una stagione.",
                        "Serie · Staffel · Spoiler · binge\nIch habe eine neue Serie angefangen. Keine Spoiler. Ich binge eine Staffel am Wochenende."
                    ),
                    'itens' => [
                        dlinha('série', 'comecei uma série nova', 'series', 'I started a new series', 'serie', 'Empecé una serie nueva', 'série', 'J ai commencé une nouvelle série', 'serie', 'Ho iniziato una serie nuova', 'Serie', 'Ich habe eine neue Serie angefangen'),
                        dlinha('temporada', 'a segunda temporada é melhor', 'season', 'The second season is better', 'temporada', 'La segunda temporada es mejor', 'saison', 'La deuxième saison est mieux', 'stagione', 'La seconda stagione è meglio', 'Staffel', 'Die zweite Staffel ist besser'),
                        dlinha('spoiler', 'sem spoiler por favor', 'spoiler', 'No spoilers please', 'spoiler', 'Sin spoilers por favor', 'spoiler', 'Sans spoiler s il te plaît', 'spoiler', 'Niente spoiler per favore', 'Spoiler', 'Keine Spoiler bitte'),
                        dlinha('maratona', 'fiz maratona no sábado', 'binge', 'I binged on Saturday', 'maratón', 'Hice maratón el sábado', 'binge', 'J ai bingé samedi', 'maratona', 'Ho fatto maratona sabato', 'binge', 'Ich habe am Samstag gebingt'),
                    ],
                ],
                [
                    'titulo' => 'Uma recomendação',
                    'teoria' => dteoria(
                        "worth watching · slow burn · dubbed · subtitle\nIt is worth watching. It is a slow burn. I prefer subtitles to dubbed.",
                        "vale la pena · de a poco · doblada · subtítulo\nVale la pena. Es de a poco. Prefiero subtítulos a doblada.",
                        "ça vaut le coup · lent · doublé · sous-titre\nÇa vaut le coup. C est lent. Je préfère les sous-titres au doublé.",
                        "vale la pena · lento · doppiato · sottotitolo\nVale la pena. È lento. Preferisco i sottotitoli al doppiato.",
                        "sehenswert · langsam · synchronisiert · Untertitel\nEs ist sehenswert. Es ist langsam. Ich mag Untertitel lieber als Synchron."
                    ),
                    'itens' => [
                        dlinha('vale a pena', 'vale a pena assistir', 'worth watching', 'It is worth watching', 'vale la pena', 'Vale la pena verla', 'ça vaut le coup', 'Ça vaut le coup de la voir', 'vale la pena', 'Vale la pena vederla', 'sehenswert', 'Es ist sehenswert'),
                        dlinha('lento', 'é um filme lento', 'slow burn', 'It is a slow burn', 'de a poco', 'Es de a poco', 'lent', 'C est lent', 'lento', 'È lento', 'langsam', 'Es ist langsam'),
                        dlinha('dublado', 'não gosto dublado', 'dubbed', 'I do not like dubbed', 'doblada', 'No me gusta doblada', 'doublé', 'Je n aime pas le doublé', 'doppiato', 'Non mi piace doppiato', 'synchronisiert', 'Ich mag das nicht synchronisiert'),
                        dlinha('legenda', 'prefiro com legenda', 'subtitle', 'I prefer subtitles', 'subtítulo', 'Prefiero subtítulos', 'sous-titre', 'Je préfère les sous-titres', 'sottotitolo', 'Preferisco i sottotitoli', 'Untertitel', 'Ich mag lieber Untertitel'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Compra online B1',
            'desc' => 'Rastreio, prazo, troca e avaliação do vendedor.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O pedido saiu',
                    'teoria' => dteoria(
                        "tracking · shipped · estimated · warehouse\nIt has shipped. Here is the tracking. The estimated date is Friday.",
                        "rastreo · enviado · estimado · almacén\nYa se envió. Aquí está el rastreo. La fecha estimada es el viernes.",
                        "suivi · expédié · estimé · entrepôt\nC est expédié. Voici le suivi. La date estimée est vendredi.",
                        "tracking · spedito · stimato · magazzino\nÈ stato spedito. Ecco il tracking. La data stimata è venerdì.",
                        "Sendung · versendet · geschätzt · Lager\nEs wurde versendet. Hier ist die Sendung. Das Datum ist Freitag."
                    ),
                    'itens' => [
                        dlinha('rastreio', 'cadê o código de rastreio', 'tracking', 'Where is the tracking code', 'rastreo', 'Dónde está el rastreo', 'suivi', 'Où est le suivi', 'tracking', 'Dov è il tracking', 'Sendung', 'Wo ist die Sendungsnummer'),
                        dlinha('enviado', 'já foi enviado', 'shipped', 'It has already shipped', 'enviado', 'Ya se envió', 'expédié', 'C est déjà expédié', 'spedito', 'È già spedito', 'versendet', 'Es wurde schon versendet'),
                        dlinha('previsto', 'o prazo previsto é sexta', 'estimated', 'The estimated date is Friday', 'estimado', 'La fecha estimada es el viernes', 'estimé', 'La date estimée est vendredi', 'stimato', 'La data stimata è venerdì', 'geschätzt', 'Das geschätzte Datum ist Freitag'),
                        dlinha('depósito', 'ainda está no depósito', 'warehouse', 'It is still in the warehouse', 'almacén', 'Sigue en el almacén', 'entrepôt', 'Il est encore à l entrepôt', 'magazzino', 'È ancora in magazzino', 'Lager', 'Es ist noch im Lager'),
                    ],
                ],
                [
                    'titulo' => 'Trocar o item',
                    'teoria' => dteoria(
                        "wrong size · return label · refund · review\nIt is the wrong size. Print the return label. I will leave a review.",
                        "talla incorrecta · etiqueta de devolución · reembolso · reseña\nEs la talla incorrecta. Imprime la etiqueta. Dejaré una reseña.",
                        "mauvaise taille · étiquette de retour · remboursement · avis\nC est la mauvaise taille. Imprime l étiquette. Je laisserai un avis.",
                        "taglia sbagliata · etichetta di reso · rimborso · recensione\nÈ la taglia sbagliata. Stampa l etichetta. Lascerò una recensione.",
                        "falsche Größe · Rücksendeschein · Erstattung · Bewertung\nEs ist die falsche Größe. Druck den Schein. Ich hinterlasse eine Bewertung."
                    ),
                    'itens' => [
                        dlinha('tamanho errado', 'veio no tamanho errado', 'wrong size', 'It is the wrong size', 'talla incorrecta', 'Es la talla incorrecta', 'mauvaise taille', 'C est la mauvaise taille', 'taglia sbagliata', 'È la taglia sbagliata', 'falsche Größe', 'Es ist die falsche Größe'),
                        dlinha('etiqueta de devolução', 'imprima a etiqueta de devolução', 'return label', 'Print the return label', 'etiqueta de devolución', 'Imprime la etiqueta de devolución', 'étiquette de retour', 'Imprime l étiquette de retour', 'etichetta di reso', 'Stampa l etichetta di reso', 'Rücksendeschein', 'Druck den Rücksendeschein'),
                        dlinha('reembolso', 'quero o reembolso', 'refund', 'I want a refund', 'reembolso', 'Quiero el reembolso', 'remboursement', 'Je veux un remboursement', 'rimborso', 'Voglio il rimborso', 'Erstattung', 'Ich will eine Erstattung'),
                        dlinha('avaliação', 'vou deixar uma avaliação', 'review', 'I will leave a review', 'reseña', 'Dejaré una reseña', 'avis', 'Je laisserai un avis', 'recensione', 'Lascerò una recensione', 'Bewertung', 'Ich hinterlasse eine Bewertung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Transferência no banco B1',
            'desc' => 'TED, comprovante, limite e o que fazer se atrasar.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Enviar o valor',
                    'teoria' => dteoria(
                        "transfer · recipient · IBAN · fee\nI need to make a transfer. Here is the recipient and the IBAN. Is there a fee?",
                        "transferencia · destinatario · IBAN · comisión\nNecesito una transferencia. Aquí está el destinatario y el IBAN. ¿Hay comisión?",
                        "virement · bénéficiaire · IBAN · frais\nJe dois faire un virement. Voici le bénéficiaire et l IBAN. Il y a des frais ?",
                        "bonifico · beneficiario · IBAN · commissione\nDevo fare un bonifico. Ecco il beneficiario e l IBAN. C è una commissione?",
                        "Überweisung · Empfänger · IBAN · Gebühr\nIch muss überweisen. Hier sind Empfänger und IBAN. Gibt es eine Gebühr?"
                    ),
                    'itens' => [
                        dlinha('transferência', 'preciso fazer uma transferência', 'transfer', 'I need to make a transfer', 'transferencia', 'Necesito una transferencia', 'virement', 'Je dois faire un virement', 'bonifico', 'Devo fare un bonifico', 'Überweisung', 'Ich muss eine Überweisung machen'),
                        dlinha('destinatário', 'confira o destinatário', 'recipient', 'Check the recipient', 'destinatario', 'Comprueba el destinatario', 'bénéficiaire', 'Vérifie le bénéficiaire', 'beneficiario', 'Controlla il beneficiario', 'Empfänger', 'Prüfe den Empfänger'),
                        dlinha('IBAN', 'o IBAN está errado', 'IBAN', 'The IBAN is wrong', 'IBAN', 'El IBAN está mal', 'IBAN', 'L IBAN est faux', 'IBAN', 'L IBAN è sbagliato', 'IBAN', 'Die IBAN ist falsch'),
                        dlinha('tarifa', 'tem tarifa nesta transferência', 'fee', 'Is there a fee on this transfer', 'comisión', 'Hay comisión en esta transferencia', 'frais', 'Il y a des frais sur ce virement', 'commissione', 'C è una commissione su questo bonifico', 'Gebühr', 'Gibt es eine Gebühr für diese Überweisung'),
                    ],
                ],
                [
                    'titulo' => 'O comprovante',
                    'teoria' => dteoria(
                        "receipt · pending · limit · arrived\nThe transfer is still pending. Can you send the receipt when it has arrived?",
                        "comprobante · pendiente · límite · llegó\nLa transferencia sigue pendiente. ¿Mandas el comprobante cuando llegue?",
                        "reçu · en attente · plafond · arrivé\nLe virement est encore en attente. Tu envoies le reçu quand il est arrivé ?",
                        "ricevuta · in attesa · limite · arrivato\nIl bonifico è ancora in attesa. Mandi la ricevuta quando è arrivato?",
                        "Beleg · ausstehend · Limit · angekommen\nDie Überweisung ist noch ausstehend. Schickst du den Beleg, wenn sie da ist?"
                    ),
                    'itens' => [
                        dlinha('comprovante', 'me manda o comprovante', 'receipt', 'Send me the receipt', 'comprobante', 'Mándame el comprobante', 'reçu', 'Envoie-moi le reçu', 'ricevuta', 'Mandami la ricevuta', 'Beleg', 'Schick mir den Beleg'),
                        dlinha('pendente', 'ainda está pendente', 'pending', 'It is still pending', 'pendiente', 'Sigue pendiente', 'en attente', 'C est encore en attente', 'in attesa', 'È ancora in attesa', 'ausstehend', 'Es ist noch ausstehend'),
                        dlinha('limite', 'estourei o limite do dia', 'limit', 'I hit the daily limit', 'límite', 'Superé el límite del día', 'plafond', 'J ai atteint le plafond du jour', 'limite', 'Ho superato il limite del giorno', 'Limit', 'Ich habe das Tageslimit erreicht'),
                        dlinha('entrou', 'o valor já entrou', 'arrived', 'The money has arrived', 'llegó', 'El dinero ya llegó', 'arrivé', 'L argent est arrivé', 'arrivato', 'I soldi sono arrivati', 'angekommen', 'Das Geld ist angekommen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Planejar uma festa B1',
            'desc' => 'Convite, lista, dieta e o que cada um traz.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'A lista',
                    'teoria' => dteoria(
                        "potluck · RSVP · plus one · bring\nIt is a potluck. Please RSVP. You can bring a plus one.",
                        "comida compartida · confirmar · acompañante · traer\nEs comida compartida. Confirma. Puedes traer un acompañante.",
                        "auberge espagnole · confirmer · plus one · apporter\nC est une auberge espagnole. Confirme. Tu peux amener un plus one.",
                        "ciascuno porta · confermare · accompagnatore · portare\nOgnuno porta qualcosa. Conferma. Puoi portare un accompagnatore.",
                        "Potluck · zusagen · Begleitung · mitbringen\nEs ist ein Potluck. Sag bitte zu. Du kannst eine Begleitung mitbringen."
                    ),
                    'itens' => [
                        dlinha('cada um traz', 'é festa em que cada um traz', 'potluck', 'It is a potluck', 'comida compartida', 'Es comida compartida', 'auberge espagnole', 'C est une auberge espagnole', 'ciascuno porta', 'Ognuno porta qualcosa', 'Potluck', 'Es ist ein Potluck'),
                        dlinha('confirmar presença', 'confirma presença até quinta', 'RSVP', 'Please RSVP by Thursday', 'confirmar', 'Confirma hasta el jueves', 'confirmer', 'Confirme d ici jeudi', 'confermare', 'Conferma entro giovedì', 'zusagen', 'Sag bis Donnerstag zu'),
                        dlinha('acompanhante', 'pode levar um acompanhante', 'plus one', 'You can bring a plus one', 'acompañante', 'Puedes traer un acompañante', 'plus one', 'Tu peux amener un plus one', 'accompagnatore', 'Puoi portare un accompagnatore', 'Begleitung', 'Du kannst eine Begleitung mitbringen'),
                        dlinha('trazer', 'o que você vai trazer', 'bring', 'What will you bring', 'traer', 'Qué vas a traer', 'apporter', 'Qu est-ce que tu apportes', 'portare', 'Cosa porti', 'mitbringen', 'Was bringst du mit'),
                    ],
                ],
                [
                    'titulo' => 'Restrições',
                    'teoria' => dteoria(
                        "vegetarian · nut-free · too many people · cancel\nKeep it vegetarian and nut-free. If too many people come, we cancel the yard.",
                        "vegetariano · sin frutos secos · demasiada gente · cancelar\nQue sea vegetariano y sin frutos secos. Si viene demasiada gente, cancelamos el patio.",
                        "végétarien · sans fruits à coque · trop de monde · annuler\nReste végétarien et sans fruits à coque. S il y a trop de monde, on annule la cour.",
                        "vegetariano · senza frutta a guscio · troppa gente · disdire\nTienilo vegetariano e senza frutta a guscio. Se viene troppa gente, disdiciamo il cortile.",
                        "vegetarisch · ohne Nüsse · zu viele Leute · absagen\nBitte vegetarisch und ohne Nüsse. Wenn zu viele kommen, sagen wir den Hof ab."
                    ),
                    'itens' => [
                        dlinha('vegetariano', 'mantenha vegetariano', 'vegetarian', 'Keep it vegetarian', 'vegetariano', 'Que sea vegetariano', 'végétarien', 'Reste végétarien', 'vegetariano', 'Tienilo vegetariano', 'vegetarisch', 'Bitte vegetarisch'),
                        dlinha('sem nozes', 'tem que ser sem nozes', 'nut-free', 'It has to be nut-free', 'sin frutos secos', 'Tiene que ser sin frutos secos', 'sans fruits à coque', 'Il faut sans fruits à coque', 'senza frutta a guscio', 'Deve essere senza frutta a guscio', 'ohne Nüsse', 'Es muss ohne Nüsse sein'),
                        dlinha('gente demais', 'veio gente demais', 'too many people', 'Too many people came', 'demasiada gente', 'Vino demasiada gente', 'trop de monde', 'Il y a eu trop de monde', 'troppa gente', 'È venuta troppa gente', 'zu viele Leute', 'Es kamen zu viele Leute'),
                        dlinha('cancelar', 'vamos cancelar o quintal', 'cancel', 'We will cancel the yard', 'cancelar', 'Cancelamos el patio', 'annuler', 'On annule la cour', 'disdire', 'Disdiciamo il cortile', 'absagen', 'Wir sagen den Hof ab'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Pedir um favor B1',
            'desc' => 'Pedir, recusar com educação e retribuir depois.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Você poderia',
                    'teoria' => dteoria(
                        "could you · I hate to ask · only if · I owe you\nCould you water the plants? I hate to ask. Only if you have time. I owe you one.",
                        "podrías · odio pedir · solo si · te debo una\n¿Podrías regar las plantas? Odio pedir. Solo si tienes tiempo. Te debo una.",
                        "tu pourrais · je déteste demander · seulement si · je te dois ça\nTu pourrais arroser les plantes ? Je déteste demander. Seulement si tu as le temps.",
                        "potresti · odio chiedere · solo se · ti devo un favore\nPotresti innaffiare le piante? Odio chiedere. Solo se hai tempo. Ti devo un favore.",
                        "könntest du · ich frage ungern · nur wenn · ich schulde dir was\nKönntest du die Pflanzen gießen? Ich frage ungern. Nur wenn du Zeit hast."
                    ),
                    'itens' => [
                        dlinha('você poderia', 'você poderia regar as plantas', 'could you', 'Could you water the plants', 'podrías', 'Podrías regar las plantas', 'tu pourrais', 'Tu pourrais arroser les plantes', 'potresti', 'Potresti innaffiare le piante', 'könntest du', 'Könntest du die Pflanzen gießen'),
                        dlinha('odeio pedir', 'odeio pedir isso', 'I hate to ask', 'I hate to ask this', 'odio pedir', 'Odio pedir esto', 'je déteste demander', 'Je déteste demander ça', 'odio chiedere', 'Odio chiedere questo', 'ich frage ungern', 'Ich frage das ungern'),
                        dlinha('só se', 'só se você tiver tempo', 'only if', 'Only if you have time', 'solo si', 'Solo si tienes tiempo', 'seulement si', 'Seulement si tu as le temps', 'solo se', 'Solo se hai tempo', 'nur wenn', 'Nur wenn du Zeit hast'),
                        dlinha('te devo uma', 'te devo uma', 'I owe you', 'I owe you one', 'te debo una', 'Te debo una', 'je te dois ça', 'Je te dois ça', 'ti devo un favore', 'Ti devo un favore', 'ich schulde dir was', 'Ich schulde dir was'),
                    ],
                ],
                [
                    'titulo' => 'Desta vez não',
                    'teoria' => dteoria(
                        "I would but · next time · no worries · I managed\nI would but I am out. Next time. No worries, I managed.",
                        "lo haría pero · la próxima · no hay problema · me las arreglé\nLo haría pero no estoy. La próxima. No hay problema, me las arreglé.",
                        "je le ferais mais · la prochaine · pas de souci · je me suis débrouillé\nJe le ferais mais je suis absent. La prochaine. Pas de souci, je me suis débrouillé.",
                        "lo farei ma · la prossima · nessun problema · me la sono cavata\nLo farei ma sono fuori. La prossima. Nessun problema, me la sono cavata.",
                        "würde ich aber · nächstes Mal · kein Problem · ich hab s hingekriegt\nWürde ich, aber ich bin weg. Nächstes Mal. Kein Problem, ich hab s hingekriegt."
                    ),
                    'itens' => [
                        dlinha('eu faria mas', 'eu faria mas estou fora', 'I would but', 'I would but I am out', 'lo haría pero', 'Lo haría pero no estoy', 'je le ferais mais', 'Je le ferais mais je suis absent', 'lo farei ma', 'Lo farei ma sono fuori', 'würde ich aber', 'Würde ich aber ich bin weg'),
                        dlinha('da próxima', 'da próxima eu ajudo', 'next time', 'Next time I will help', 'la próxima', 'La próxima te ayudo', 'la prochaine', 'La prochaine j aide', 'la prossima', 'La prossima aiuto', 'nächstes Mal', 'Nächstes Mal helfe ich'),
                        dlinha('sem problema', 'sem problema mesmo', 'no worries', 'No worries at all', 'no hay problema', 'No hay problema', 'pas de souci', 'Pas de souci', 'nessun problema', 'Nessun problema', 'kein Problem', 'Kein Problem'),
                        dlinha('dei um jeito', 'dei um jeito sozinho', 'I managed', 'I managed on my own', 'me las arreglé', 'Me las arreglé solo', 'je me suis débrouillé', 'Je me suis débrouillé tout seul', 'me la sono cavata', 'Me la sono cavata da solo', 'ich hab s hingekriegt', 'Ich hab s allein hingekriegt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Mala perdida B1',
            'desc' => 'Balcão da cia, etiqueta e o kit de emergência.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'No balcão',
                    'teoria' => dteoria(
                        "missing bag · tag · last seen · claim\nMy bag is missing. Here is the tag. It was last seen in Madrid. I need to file a claim.",
                        "maleta perdida · etiqueta · último avistamiento · reclamación\nFalta mi maleta. Aquí está la etiqueta. El último avistamiento fue en Madrid.",
                        "sac manquant · étiquette · dernier aperçu · réclamation\nMon sac manque. Voici l étiquette. Dernier aperçu à Madrid. Je dois faire une réclamation.",
                        "bagaglio mancante · etichetta · ultimo avvistamento · reclamo\nManca il mio bagaglio. Ecco l etichetta. Ultimo avvistamento a Madrid.",
                        "fehlendes Gepäck · Anhänger · zuletzt gesehen · Anspruch\nMein Gepäck fehlt. Hier ist der Anhänger. Zuletzt gesehen in Madrid."
                    ),
                    'itens' => [
                        dlinha('mala perdida', 'minha mala está perdida', 'missing bag', 'My bag is missing', 'maleta perdida', 'Falta mi maleta', 'sac manquant', 'Mon sac manque', 'bagaglio mancante', 'Manca il mio bagaglio', 'fehlendes Gepäck', 'Mein Gepäck fehlt'),
                        dlinha('etiqueta', 'aqui está a etiqueta', 'tag', 'Here is the tag', 'etiqueta', 'Aquí está la etiqueta', 'étiquette', 'Voici l étiquette', 'etichetta', 'Ecco l etichetta', 'Anhänger', 'Hier ist der Anhänger'),
                        dlinha('visto por último', 'visto por último em Madri', 'last seen', 'Last seen in Madrid', 'último avistamiento', 'Último avistamiento en Madrid', 'dernier aperçu', 'Dernier aperçu à Madrid', 'ultimo avvistamento', 'Ultimo avvistamento a Madrid', 'zuletzt gesehen', 'Zuletzt gesehen in Madrid'),
                        dlinha('reclamação', 'abrir uma reclamação', 'claim', 'I need to file a claim', 'reclamación', 'Debo hacer una reclamación', 'réclamation', 'Je dois faire une réclamation', 'reclamo', 'Devo fare un reclamo', 'Anspruch', 'Ich muss einen Anspruch stellen'),
                    ],
                ],
                [
                    'titulo' => 'Enquanto espera',
                    'teoria' => dteoria(
                        "toiletry kit · delivered · delay · compensation\nThey gave me a toiletry kit. The bag will be delivered. There may be compensation for the delay.",
                        "kit de aseo · entregada · retraso · compensación\nMe dieron un kit de aseo. Entregarán la maleta. Puede haber compensación por el retraso.",
                        "kit de toilette · livré · retard · indemnité\nIls m ont donné un kit de toilette. Le sac sera livré. Il peut y avoir une indemnité pour le retard.",
                        "kit da toilette · consegnato · ritardo · indennizzo\nMi hanno dato un kit da toilette. Il bagaglio verrà consegnato. Può esserci un indennizzo per il ritardo.",
                        "Waschbeutel · geliefert · Verspätung · Entschädigung\nSie gaben mir einen Waschbeutel. Das Gepäck wird geliefert. Es kann Entschädigung für die Verspätung geben."
                    ),
                    'itens' => [
                        dlinha('kit de higiene', 'me deram um kit de higiene', 'toiletry kit', 'They gave me a toiletry kit', 'kit de aseo', 'Me dieron un kit de aseo', 'kit de toilette', 'Ils m ont donné un kit de toilette', 'kit da toilette', 'Mi hanno dato un kit da toilette', 'Waschbeutel', 'Sie gaben mir einen Waschbeutel'),
                        dlinha('entregue em casa', 'a mala será entregue em casa', 'delivered', 'The bag will be delivered', 'entregada', 'Entregarán la maleta', 'livré', 'Le sac sera livré', 'consegnato', 'Il bagaglio verrà consegnato', 'geliefert', 'Das Gepäck wird geliefert'),
                        dlinha('atraso', 'por causa do atraso', 'delay', 'Because of the delay', 'retraso', 'Por el retraso', 'retard', 'À cause du retard', 'ritardo', 'A causa del ritardo', 'Verspätung', 'Wegen der Verspätung'),
                        dlinha('indenização', 'pode haver indenização', 'compensation', 'There may be compensation', 'compensación', 'Puede haber compensación', 'indemnité', 'Il peut y avoir une indemnité', 'indennizzo', 'Può esserci un indennizzo', 'Entschädigung', 'Es kann Entschädigung geben'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Grupo da família B1',
            'desc' => 'Silenciar, sair do grupo e o que não mandar em áudio.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Demais notificações',
                    'teoria' => dteoria(
                        "mute · leave the group · thread · voice note\nI muted the family group. Please do not send a long voice note. Use the thread.",
                        "silenciar · salir del grupo · hilo · nota de voz\nSilencié el grupo familiar. No mandes una nota de voz larga. Usa el hilo.",
                        "mettre en sourdine · quitter le groupe · fil · vocal\nJ ai mis le groupe famille en sourdine. N envoie pas un long vocal. Utilise le fil.",
                        "silenziare · uscire dal gruppo · thread · vocale\nHo silenziato il gruppo di famiglia. Non mandare un vocale lungo. Usa il thread.",
                        "stummschalten · Gruppe verlassen · Thread · Sprachnachricht\nIch habe die Familiengruppe stummgeschaltet. Keine lange Sprachnachricht. Nutze den Thread."
                    ),
                    'itens' => [
                        dlinha('silenciar', 'silenciei o grupo', 'mute', 'I muted the group', 'silenciar', 'Silencié el grupo', 'mettre en sourdine', 'J ai mis le groupe en sourdine', 'silenziare', 'Ho silenziato il gruppo', 'stummschalten', 'Ich habe die Gruppe stummgeschaltet'),
                        dlinha('sair do grupo', 'vou sair do grupo', 'leave the group', 'I will leave the group', 'salir del grupo', 'Voy a salir del grupo', 'quitter le groupe', 'Je vais quitter le groupe', 'uscire dal gruppo', 'Esco dal gruppo', 'Gruppe verlassen', 'Ich verlasse die Gruppe'),
                        dlinha('tópico', 'responde no tópico', 'thread', 'Reply in the thread', 'hilo', 'Responde en el hilo', 'fil', 'Réponds dans le fil', 'thread', 'Rispondi nel thread', 'Thread', 'Antworte im Thread'),
                        dlinha('áudio', 'não manda áudio longo', 'voice note', 'Do not send a long voice note', 'nota de voz', 'No mandes una nota de voz larga', 'vocal', 'N envoie pas un long vocal', 'vocale', 'Non mandare un vocale lungo', 'Sprachnachricht', 'Schick keine lange Sprachnachricht'),
                    ],
                ],
                [
                    'titulo' => 'O recado certo',
                    'teoria' => dteoria(
                        "forward · private · seen · off topic\nDo not forward that. It is private. I have seen it. This is off topic.",
                        "reenviar · privado · visto · fuera de tema\nNo reenvíes eso. Es privado. Ya lo vi. Esto está fuera de tema.",
                        "transférer · privé · vu · hors sujet\nNe transfère pas ça. C est privé. Je l ai vu. C est hors sujet.",
                        "inoltrare · privato · visto · fuori tema\nNon inoltrare quello. È privato. L ho visto. Questo è fuori tema.",
                        "weiterleiten · privat · gesehen · themenfremd\nLeite das nicht weiter. Es ist privat. Ich habe es gesehen. Das ist themenfremd."
                    ),
                    'itens' => [
                        dlinha('encaminhar', 'não encaminhe isso', 'forward', 'Do not forward that', 'reenviar', 'No reenvíes eso', 'transférer', 'Ne transfère pas ça', 'inoltrare', 'Non inoltrare quello', 'weiterleiten', 'Leite das nicht weiter'),
                        dlinha('privado', 'isso é privado', 'private', 'That is private', 'privado', 'Eso es privado', 'privé', 'C est privé', 'privato', 'È privato', 'privat', 'Das ist privat'),
                        dlinha('visto', 'já vi a mensagem', 'seen', 'I have seen the message', 'visto', 'Ya vi el mensaje', 'vu', 'J ai vu le message', 'visto', 'Ho visto il messaggio', 'gesehen', 'Ich habe die Nachricht gesehen'),
                        dlinha('fora do assunto', 'isso está fora do assunto', 'off topic', 'This is off topic', 'fuera de tema', 'Esto está fuera de tema', 'hors sujet', 'C est hors sujet', 'fuori tema', 'Questo è fuori tema', 'themenfremd', 'Das ist themenfremd'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Apresentar um projeto B2',
            'desc' => 'Slide, risco, prazo e o pedido de decisão.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O recorte',
                    'teoria' => dteoria(
                        "deck · milestone · risk · ask\nThis deck has three milestones. The main risk is the vendor. My ask is a decision today.",
                        "presentación · hito · riesgo · pedido\nEsta presentación tiene tres hitos. El riesgo principal es el proveedor. Mi pedido es una decisión hoy.",
                        "deck · jalon · risque · demande\nCe deck a trois jalons. Le risque principal est le prestataire. Ma demande est une décision aujourd hui.",
                        "deck · traguardo · rischio · richiesta\nQuesto deck ha tre traguardi. Il rischio principale è il fornitore. La mia richiesta è una decisione oggi.",
                        "Deck · Meilenstein · Risiko · Bitte\nDieses Deck hat drei Meilensteine. Das Hauptrisiko ist der Anbieter. Meine Bitte ist eine Entscheidung heute."
                    ),
                    'itens' => [
                        dlinha('apresentação', 'esta apresentação tem três marcos', 'deck', 'This deck has three milestones', 'presentación', 'Esta presentación tiene tres hitos', 'deck', 'Ce deck a trois jalons', 'deck', 'Questo deck ha tre traguardi', 'Deck', 'Dieses Deck hat drei Meilensteine'),
                        dlinha('marco', 'o próximo marco é junho', 'milestone', 'The next milestone is June', 'hito', 'El próximo hito es junio', 'jalon', 'Le prochain jalon est juin', 'traguardo', 'Il prossimo traguardo è giugno', 'Meilenstein', 'Der nächste Meilenstein ist Juni'),
                        dlinha('risco', 'o risco principal é o fornecedor', 'risk', 'The main risk is the vendor', 'riesgo', 'El riesgo principal es el proveedor', 'risque', 'Le risque principal est le prestataire', 'rischio', 'Il rischio principale è il fornitore', 'Risiko', 'Das Hauptrisiko ist der Anbieter'),
                        dlinha('pedido', 'meu pedido é uma decisão hoje', 'ask', 'My ask is a decision today', 'pedido', 'Mi pedido es una decisión hoy', 'demande', 'Ma demande est une décision aujourd hui', 'richiesta', 'La mia richiesta è una decisione oggi', 'Bitte', 'Meine Bitte ist eine Entscheidung heute'),
                    ],
                ],
                [
                    'titulo' => 'As perguntas',
                    'teoria' => dteoria(
                        "park that · offline · owner · next step\nLet us park that and take it offline. Who is the owner of the next step?",
                        "aparcar · fuera de la reunión · responsable · siguiente paso\nAparkemos eso y lo vemos fuera. ¿Quién es el responsable del siguiente paso?",
                        "mettre de côté · hors réunion · responsable · prochaine étape\nMettons cela de côté hors réunion. Qui est responsable de la prochaine étape ?",
                        "accantonare · fuori riunione · responsabile · passo successivo\nAccantoniamo e lo vediamo fuori. Chi è il responsabile del passo successivo?",
                        "parken · offline · verantwortlich · nächster Schritt\nParken wir das offline. Wer ist für den nächsten Schritt verantwortlich?"
                    ),
                    'itens' => [
                        dlinha('deixar de lado', 'vamos deixar isso de lado', 'park that', 'Let us park that', 'aparcar', 'Aparkemos eso', 'mettre de côté', 'Mettons cela de côté', 'accantonare', 'Accantoniamo questo', 'parken', 'Parken wir das'),
                        dlinha('fora da reunião', 'discutimos fora da reunião', 'offline', 'We will take it offline', 'fuera de la reunión', 'Lo vemos fuera de la reunión', 'hors réunion', 'On le voit hors réunion', 'fuori riunione', 'Lo vediamo fuori riunione', 'offline', 'Wir nehmen das offline'),
                        dlinha('responsável', 'quem é o responsável', 'owner', 'Who is the owner', 'responsable', 'Quién es el responsable', 'responsable', 'Qui est responsable', 'responsabile', 'Chi è il responsabile', 'verantwortlich', 'Wer ist verantwortlich'),
                        dlinha('próximo passo', 'qual é o próximo passo', 'next step', 'What is the next step', 'siguiente paso', 'Cuál es el siguiente paso', 'prochaine étape', 'Quelle est la prochaine étape', 'passo successivo', 'Qual è il passo successivo', 'nächster Schritt', 'Was ist der nächste Schritt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Dar feedback B2',
            'desc' => 'O fato, o impacto e o pedido concreto, sem humilhar.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O fato',
                    'teoria' => dteoria(
                        "I noticed · when you · the impact · next time\nI noticed that when you cut people off, the impact is they stop contributing. Next time, let them finish.",
                        "noté que · cuando · el impacto · la próxima\nNoté que cuando cortas a la gente, el impacto es que dejan de aportar. La próxima, déjalos terminar.",
                        "j ai remarqué · quand tu · l impact · la prochaine fois\nJ ai remarqué que quand tu coupes la parole, l impact est qu ils se taisent. La prochaine fois, laisse-les finir.",
                        "ho notato · quando · l impatto · la prossima\nHo notato che quando interrompi, l impatto è che smettono di contribuire. La prossima, lasciali finire.",
                        "mir ist aufgefallen · wenn du · die Wirkung · nächstes Mal\nMir ist aufgefallen: wenn du ins Wort fällst, ist die Wirkung, dass sie schweigen. Nächstes Mal lass sie ausreden."
                    ),
                    'itens' => [
                        dlinha('percebi que', 'percebi que isso se repetiu', 'I noticed', 'I noticed this happened again', 'noté que', 'Noté que esto se repitió', 'j ai remarqué', 'J ai remarqué que ça s est répété', 'ho notato', 'Ho notato che è successo di nuovo', 'mir ist aufgefallen', 'Mir ist aufgefallen dass das wieder passiert ist'),
                        dlinha('quando você', 'quando você interrompe', 'when you', 'When you cut people off', 'cuando', 'Cuando cortas a la gente', 'quand tu', 'Quand tu coupes la parole', 'quando', 'Quando interrompi', 'wenn du', 'Wenn du ins Wort fällst'),
                        dlinha('o impacto', 'o impacto é o silêncio', 'the impact', 'The impact is silence', 'el impacto', 'El impacto es el silencio', 'l impact', 'L impact est le silence', 'l impatto', 'L impatto è il silenzio', 'die Wirkung', 'Die Wirkung ist Stille'),
                        dlinha('da próxima vez', 'da próxima vez deixe terminar', 'next time', 'Next time let them finish', 'la próxima', 'La próxima déjalos terminar', 'la prochaine fois', 'La prochaine fois laisse-les finir', 'la prossima', 'La prossima lasciali finire', 'nächstes Mal', 'Nächstes Mal lass sie ausreden'),
                    ],
                ],
                [
                    'titulo' => 'O acordo',
                    'teoria' => dteoria(
                        "what would help · I can own · check-in · thank you for hearing me\nWhat would help is a check-in on Friday. I can own the notes. Thank you for hearing me.",
                        "qué ayudaría · me hago cargo · seguimiento · gracias por escucharme\nQué ayudaría es un seguimiento el viernes. Me hago cargo de las notas. Gracias por escucharme.",
                        "ce qui aiderait · je prends · point · merci de m écouter\nCe qui aiderait c est un point vendredi. Je prends les notes. Merci de m écouter.",
                        "cosa aiuterebbe · mi prendo · punto · grazie per avermi ascoltato\nCosa aiuterebbe è un punto venerdì. Mi prendo gli appunti. Grazie per avermi ascoltato.",
                        "was helfen würde · ich übernehme · Check-in · danke dass du zuhörst\nWas helfen würde, ist ein Check-in am Freitag. Ich übernehme die Notizen. Danke, dass du zuhörst."
                    ),
                    'itens' => [
                        dlinha('o que ajudaria', 'o que ajudaria é um combinado', 'what would help', 'What would help is an agreement', 'qué ayudaría', 'Qué ayudaría es un acuerdo', 'ce qui aiderait', 'Ce qui aiderait c est un accord', 'cosa aiuterebbe', 'Cosa aiuterebbe è un accordo', 'was helfen würde', 'Was helfen würde ist eine Abmachung'),
                        dlinha('eu assumo', 'eu assumo as notas', 'I can own', 'I can own the notes', 'me hago cargo', 'Me hago cargo de las notas', 'je prends', 'Je prends les notes', 'mi prendo', 'Mi prendo gli appunti', 'ich übernehme', 'Ich übernehme die Notizen'),
                        dlinha('ponto de checagem', 'um ponto de checagem na sexta', 'check-in', 'A check-in on Friday', 'seguimiento', 'Un seguimiento el viernes', 'point', 'Un point vendredi', 'punto', 'Un punto venerdì', 'Check-in', 'Ein Check-in am Freitag'),
                        dlinha('obrigado por ouvir', 'obrigado por me ouvir', 'thank you for hearing me', 'Thank you for hearing me', 'gracias por escucharme', 'Gracias por escucharme', 'merci de m écouter', 'Merci de m écouter', 'grazie per avermi ascoltato', 'Grazie per avermi ascoltato', 'danke dass du zuhörst', 'Danke dass du zuhörst'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Notícia enviesada B2',
            'desc' => 'Manchete, fonte, o que a foto emoldura e o que some.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A manchete',
                    'teoria' => dteoria(
                        "headline · loaded · unnamed source · both sides\nThe headline is loaded. It cites an unnamed source. Both sides are not equally evidenced.",
                        "titular · cargado · fuente anónima · ambos lados\nEl titular está cargado. Cita una fuente anónima. Ambos lados no tienen la misma evidencia.",
                        "titre · chargé · source anonyme · les deux côtés\nLe titre est chargé. Il cite une source anonyme. Les deux côtés n ont pas la même preuve.",
                        "titolo · carico · fonte anonima · entrambi i lati\nIl titolo è carico. Cita una fonte anonima. Entrambi i lati non hanno la stessa prova.",
                        "Überschrift · geladen · ungenannte Quelle · beide Seiten\nDie Überschrift ist geladen. Sie zitiert eine ungenannte Quelle. Beide Seiten sind nicht gleich belegt."
                    ),
                    'itens' => [
                        dlinha('manchete', 'a manchete já toma partido', 'headline', 'The headline already takes sides', 'titular', 'El titular ya toma partido', 'titre', 'Le titre prend déjà parti', 'titolo', 'Il titolo prende già parte', 'Überschrift', 'Die Überschrift ergreift schon Partei'),
                        dlinha('carregado', 'o adjetivo está carregado', 'loaded', 'The adjective is loaded', 'cargado', 'El adjetivo está cargado', 'chargé', 'L adjectif est chargé', 'carico', 'L aggettivo è carico', 'geladen', 'Das Adjektiv ist geladen'),
                        dlinha('fonte anônima', 'cita fonte anônima', 'unnamed source', 'It cites an unnamed source', 'fuente anónima', 'Cita una fuente anónima', 'source anonyme', 'Il cite une source anonyme', 'fonte anonima', 'Cita una fonte anonima', 'ungenannte Quelle', 'Sie zitiert eine ungenannte Quelle'),
                        dlinha('os dois lados', 'os dois lados não estão iguais', 'both sides', 'Both sides are not equal', 'ambos lados', 'Ambos lados no están iguales', 'les deux côtés', 'Les deux côtés ne sont pas égaux', 'entrambi i lati', 'Entrambi i lati non sono uguali', 'beide Seiten', 'Beide Seiten sind nicht gleich'),
                    ],
                ],
                [
                    'titulo' => 'O que a foto faz',
                    'teoria' => dteoria(
                        "crop · caption · omitted · follow the money\nThe crop and the caption steer you. What was omitted? Follow the money, not the quote.",
                        "recorte · pie de foto · omitido · sigue el dinero\nEl recorte y el pie te dirigen. ¿Qué se omitió? Sigue el dinero, no la cita.",
                        "cadrage · légende · omis · suivre l argent\nLe cadrage et la légende te dirigent. Qu a-t-on omis ? Suis l argent, pas la citation.",
                        "ritaglio · didascalia · omesso · segui i soldi\nIl ritaglio e la didascalia ti guidano. Cosa è stato omesso? Segui i soldi, non la citazione.",
                        "Zuschnitt · Bildtext · ausgelassen · dem Geld folgen\nZuschnitt und Bildtext lenken dich. Was wurde ausgelassen? Folge dem Geld, nicht dem Zitat."
                    ),
                    'itens' => [
                        dlinha('recorte', 'o recorte da foto dirige', 'crop', 'The crop of the photo steers you', 'recorte', 'El recorte de la foto dirige', 'cadrage', 'Le cadrage de la photo dirige', 'ritaglio', 'Il ritaglio della foto guida', 'Zuschnitt', 'Der Zuschnitt des Fotos lenkt'),
                        dlinha('legenda', 'leia a legenda com cuidado', 'caption', 'Read the caption carefully', 'pie de foto', 'Lee el pie con cuidado', 'légende', 'Lis la légende avec soin', 'didascalia', 'Leggi la didascalia con cura', 'Bildtext', 'Lies den Bildtext genau'),
                        dlinha('omitido', 'o que foi omitido', 'omitted', 'What was omitted', 'omitido', 'Qué se omitió', 'omis', 'Qu a-t-on omis', 'omesso', 'Cosa è stato omesso', 'ausgelassen', 'Was wurde ausgelassen'),
                        dlinha('siga o dinheiro', 'siga o dinheiro, não a frase', 'follow the money', 'Follow the money not the quote', 'sigue el dinero', 'Sigue el dinero no la cita', 'suivre l argent', 'Suis l argent pas la citation', 'segui i soldi', 'Segui i soldi non la citazione', 'dem Geld folgen', 'Folge dem Geld nicht dem Zitat'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Reunião híbrida B2',
            'desc' => 'Quem está no zoom, o microfone e o combinado de fala.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'Quem não está na sala',
                    'teoria' => dteoria(
                        "hybrid · remote · can you hear · gallery\nThis is hybrid. Remote people first. Can you hear me? Switch to gallery view.",
                        "híbrida · remoto · me oyen · galería\nEs híbrida. Primero quien está remoto. ¿Me oyen? Pongan vista de galería.",
                        "hybride · à distance · vous m entendez · galerie\nC est hybride. D abord les gens à distance. Vous m entendez ? Passez en galerie.",
                        "ibrida · da remoto · mi sentite · galleria\nÈ ibrida. Prima chi è da remoto. Mi sentite? Passate alla vista galleria.",
                        "hybrid · remote · hört ihr mich · Galerie\nDas ist hybrid. Zuerst die Remote-Leute. Hört ihr mich? Wechselt zur Galerie."
                    ),
                    'itens' => [
                        dlinha('híbrida', 'a reunião é híbrida', 'hybrid', 'This meeting is hybrid', 'híbrida', 'La reunión es híbrida', 'hybride', 'La réunion est hybride', 'ibrida', 'La riunione è ibrida', 'hybrid', 'Das Meeting ist hybrid'),
                        dlinha('remoto', 'quem está remoto fala primeiro', 'remote', 'Remote people speak first', 'remoto', 'Quien está remoto habla primero', 'à distance', 'Les gens à distance parlent d abord', 'da remoto', 'Chi è da remoto parla per primo', 'remote', 'Remote-Leute sprechen zuerst'),
                        dlinha('estão me ouvindo', 'estão me ouvindo', 'can you hear', 'Can you hear me', 'me oyen', 'Me oyen', 'vous m entendez', 'Vous m entendez', 'mi sentite', 'Mi sentite', 'hört ihr mich', 'Hört ihr mich'),
                        dlinha('galeria', 'vá para o modo galeria', 'gallery', 'Switch to gallery view', 'galería', 'Pongan vista de galería', 'galerie', 'Passez en vue galerie', 'galleria', 'Passate alla vista galleria', 'Galerie', 'Wechselt zur Galerieansicht'),
                    ],
                ],
                [
                    'titulo' => 'A regra da fala',
                    'teoria' => dteoria(
                        "mute · raise hand · echo · chat\nStay on mute. Raise your hand. There is an echo. Put links in the chat.",
                        "silencio · levantar la mano · eco · chat\nQuédate en silencio. Levanta la mano. Hay eco. Pon los enlaces en el chat.",
                        "muet · lever la main · écho · fil\nReste en sourdine. Lève la main. Il y a un écho. Mets les liens dans le fil.",
                        "muto · alza la mano · eco · chat\nResta in muto. Alza la mano. C è un eco. Metti i link in chat.",
                        "stumm · Hand heben · Echo · Chat\nBleib stumm. Heb die Hand. Es gibt ein Echo. Links in den Chat."
                    ),
                    'itens' => [
                        dlinha('mudo', 'fique no mudo', 'mute', 'Stay on mute', 'silencio', 'Quédate en silencio', 'muet', 'Reste en sourdine', 'muto', 'Resta in muto', 'stumm', 'Bleib stumm'),
                        dlinha('levantar a mão', 'levante a mão para falar', 'raise hand', 'Raise your hand to speak', 'levantar la mano', 'Levanta la mano para hablar', 'lever la main', 'Lève la main pour parler', 'alza la mano', 'Alza la mano per parlare', 'Hand heben', 'Heb die Hand zum Sprechen'),
                        dlinha('eco', 'está com eco', 'echo', 'There is an echo', 'eco', 'Hay eco', 'écho', 'Il y a un écho', 'eco', 'C è un eco', 'Echo', 'Es gibt ein Echo'),
                        dlinha('chat', 'mande o link no chat', 'chat', 'Put the link in the chat', 'chat', 'Pon el enlace en el chat', 'fil', 'Mets le lien dans le fil', 'chat', 'Metti il link in chat', 'Chat', 'Schick den Link in den Chat'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Carta de motivação B2',
            'desc' => 'Por que você, evidência curta e o fecho sem clichê.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'Por que esta vaga',
                    'teoria' => dteoria(
                        "I am writing · fit · I led · not a generic letter\nI am writing because the role is a fit. I led a similar launch. This is not a generic letter.",
                        "le escribo · encaje · dirigí · no es una carta genérica\nLe escribo porque el puesto encaja. Dirigí un lanzamiento parecido. No es una carta genérica.",
                        "je vous écris · adéquation · j ai dirigé · pas une lettre générique\nJe vous écris car le poste est une adéquation. J ai dirigé un lancement similaire. Ce n est pas une lettre générique.",
                        "le scrivo · aderenza · ho guidato · non è una lettera generica\nLe scrivo perché il ruolo è in aderenza. Ho guidato un lancio simile. Non è una lettera generica.",
                        "ich schreibe · Passung · ich leitete · kein Standardbrief\nIch schreibe, weil die Rolle passt. Ich leitete einen ähnlichen Launch. Das ist kein Standardbrief."
                    ),
                    'itens' => [
                        dlinha('escrevo porque', 'escrevo porque a vaga encaixa', 'I am writing', 'I am writing because the role fits', 'le escribo', 'Le escribo porque el puesto encaja', 'je vous écris', 'Je vous écris car le poste convient', 'le scrivo', 'Le scrivo perché il ruolo calza', 'ich schreibe', 'Ich schreibe weil die Rolle passt'),
                        dlinha('encaixe', 'há um encaixe claro', 'fit', 'There is a clear fit', 'encaje', 'Hay un encaje claro', 'adéquation', 'Il y a une adéquation claire', 'aderenza', 'C è una chiara aderenza', 'Passung', 'Es gibt eine klare Passung'),
                        dlinha('liderei', 'liderei um lançamento parecido', 'I led', 'I led a similar launch', 'dirigí', 'Dirigí un lanzamiento parecido', 'j ai dirigé', 'J ai dirigé un lancement similaire', 'ho guidato', 'Ho guidato un lancio simile', 'ich leitete', 'Ich leitete einen ähnlichen Launch'),
                        dlinha('carta genérica', 'isto não é carta genérica', 'generic letter', 'This is not a generic letter', 'carta genérica', 'No es una carta genérica', 'lettre générique', 'Ce n est pas une lettre générique', 'lettera generica', 'Non è una lettera generica', 'Standardbrief', 'Das ist kein Standardbrief'),
                    ],
                ],
                [
                    'titulo' => 'O fecho',
                    'teoria' => dteoria(
                        "available · portfolio · I would welcome · yours sincerely\nI am available next week. The portfolio is attached. I would welcome a conversation. Yours sincerely.",
                        "disponible · portafolio · agradecería · atentamente\nEstoy disponible la semana que viene. Adjunto el portafolio. Agradecería una conversación. Atentamente.",
                        "disponible · portfolio · je serais ravi · cordialement\nJe suis disponible la semaine prochaine. Le portfolio est joint. Je serais ravi d en parler. Cordialement.",
                        "disponibile · portfolio · sarei lieto · cordiali saluti\nSono disponibile la settimana prossima. Il portfolio è in allegato. Sarei lieto di parlarne. Cordiali saluti.",
                        "verfügbar · Portfolio · ich würde mich freuen · mit freundlichen Grüßen\nIch bin nächste Woche verfügbar. Das Portfolio liegt bei. Ich würde mich über ein Gespräch freuen."
                    ),
                    'itens' => [
                        dlinha('disponível', 'estou disponível na semana que vem', 'available', 'I am available next week', 'disponible', 'Estoy disponible la semana que viene', 'disponible', 'Je suis disponible la semaine prochaine', 'disponibile', 'Sono disponibile la settimana prossima', 'verfügbar', 'Ich bin nächste Woche verfügbar'),
                        dlinha('portfólio', 'o portfólio vai em anexo', 'portfolio', 'The portfolio is attached', 'portafolio', 'Adjunto el portafolio', 'portfolio', 'Le portfolio est joint', 'portfolio', 'Il portfolio è in allegato', 'Portfolio', 'Das Portfolio liegt bei'),
                        dlinha('eu aceitaria', 'eu aceitaria uma conversa', 'I would welcome', 'I would welcome a conversation', 'agradecería', 'Agradecería una conversación', 'je serais ravi', 'Je serais ravi d en parler', 'sarei lieto', 'Sarei lieto di parlarne', 'ich würde mich freuen', 'Ich würde mich über ein Gespräch freuen'),
                        dlinha('atenciosamente', 'atenciosamente', 'yours sincerely', 'Yours sincerely', 'atentamente', 'Atentamente', 'cordialement', 'Cordialement', 'cordiali saluti', 'Cordiali saluti', 'mit freundlichen Grüßen', 'Mit freundlichen Grüßen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Contrato de serviço B2',
            'desc' => 'Escopo, o que está fora, atraso e rescisão.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O que entra',
                    'teoria' => dteoria(
                        "scope · out of scope · deliverable · assumption\nThe scope is two deliverables. Translation is out of scope. That is an assumption, not a promise.",
                        "alcance · fuera de alcance · entregable · supuesto\nEl alcance son dos entregables. La traducción queda fuera. Eso es un supuesto, no una promesa.",
                        "périmètre · hors périmètre · livrable · hypothèse\nLe périmètre c est deux livrables. La traduction est hors périmètre. C est une hypothèse, pas une promesse.",
                        "perimetro · fuori perimetro · deliverable · assunto\nIl perimetro è due deliverable. La traduzione è fuori. È un assunto, non una promessa.",
                        "Rahmen · außerhalb · Liefergegenstand · Annahme\nDer Rahmen sind zwei Liefergegenstände. Übersetzung liegt außerhalb. Das ist eine Annahme, kein Versprechen."
                    ),
                    'itens' => [
                        dlinha('escopo', 'o escopo são dois entregáveis', 'scope', 'The scope is two deliverables', 'alcance', 'El alcance son dos entregables', 'périmètre', 'Le périmètre c est deux livrables', 'perimetro', 'Il perimetro è due deliverable', 'Rahmen', 'Der Rahmen sind zwei Liefergegenstände'),
                        dlinha('fora do escopo', 'isso está fora do escopo', 'out of scope', 'That is out of scope', 'fuera de alcance', 'Eso queda fuera de alcance', 'hors périmètre', 'C est hors périmètre', 'fuori perimetro', 'È fuori perimetro', 'außerhalb', 'Das liegt außerhalb'),
                        dlinha('entregável', 'o primeiro entregável é a sexta', 'deliverable', 'The first deliverable is Friday', 'entregable', 'El primer entregable es el viernes', 'livrable', 'Le premier livrable est vendredi', 'deliverable', 'Il primo deliverable è venerdì', 'Liefergegenstand', 'Der erste Liefergegenstand ist Freitag'),
                        dlinha('premissa', 'isso é premissa, não promessa', 'assumption', 'That is an assumption not a promise', 'supuesto', 'Eso es un supuesto no una promesa', 'hypothèse', 'C est une hypothèse pas une promesse', 'assunto', 'È un assunto non una promessa', 'Annahme', 'Das ist eine Annahme kein Versprechen'),
                    ],
                ],
                [
                    'titulo' => 'Se atrasar',
                    'teoria' => dteoria(
                        "delay · penalty · terminate · notice\nA delay of more than ten days triggers a penalty. Either party may terminate with written notice.",
                        "retraso · penalización · rescindir · aviso\nUn retraso de más de diez días activa una penalización. Cualquiera puede rescindir con aviso escrito.",
                        "retard · pénalité · résilier · préavis\nUn retard de plus de dix jours déclenche une pénalité. Chaque partie peut résilier avec préavis écrit.",
                        "ritardo · penale · recedere · preavviso\nUn ritardo di oltre dieci giorni attiva una penale. Ciascuna parte può recedere con preavviso scritto.",
                        "Verzug · Vertragsstrafe · kündigen · Frist\nEin Verzug von mehr als zehn Tagen löst eine Vertragsstrafe aus. Jede Seite kann mit schriftlicher Frist kündigen."
                    ),
                    'itens' => [
                        dlinha('atraso', 'um atraso de dez dias', 'delay', 'A delay of ten days', 'retraso', 'Un retraso de diez días', 'retard', 'Un retard de dix jours', 'ritardo', 'Un ritardo di dieci giorni', 'Verzug', 'Ein Verzug von zehn Tagen'),
                        dlinha('multa', 'dispara uma multa', 'penalty', 'It triggers a penalty', 'penalización', 'Activa una penalización', 'pénalité', 'Cela déclenche une pénalité', 'penale', 'Attiva una penale', 'Vertragsstrafe', 'Das löst eine Vertragsstrafe aus'),
                        dlinha('rescindir', 'qualquer lado pode rescindir', 'terminate', 'Either party may terminate', 'rescindir', 'Cualquiera puede rescindir', 'résilier', 'Chaque partie peut résilier', 'recedere', 'Ciascuna parte può recedere', 'kündigen', 'Jede Seite kann kündigen'),
                        dlinha('aviso', 'com aviso por escrito', 'notice', 'With written notice', 'aviso', 'Con aviso escrito', 'préavis', 'Avec préavis écrit', 'preavviso', 'Con preavviso scritto', 'Frist', 'Mit schriftlicher Frist'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Um mal-entendido B2',
            'desc' => 'O que você quis dizer, o que a outra pessoa ouviu e o conserto.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O que eu quis dizer',
                    'teoria' => dteoria(
                        "I meant · it came across · that was not my intent · let me rephrase\nI meant it as a joke. It came across as a slight. That was not my intent. Let me rephrase.",
                        "quise decir · se entendió · no era mi intención · déjame reformular\nQuise decirlo en broma. Se entendió como un desplante. No era mi intención. Déjame reformular.",
                        "je voulais dire · ça a passé · ce n était pas mon intention · laisse-moi reformuler\nJe voulais dire ça en blague. Ça a passé comme une pique. Ce n était pas mon intention.",
                        "intendevo · è arrivato · non era mia intenzione · lascia che riformuli\nIntendevo una battuta. È arrivato come una stoccata. Non era mia intenzione. Lascia che riformuli.",
                        "ich meinte · es kam an · das war nicht meine Absicht · lass mich umformulieren\nIch meinte es als Witz. Es kam als Seitenhieb an. Das war nicht meine Absicht."
                    ),
                    'itens' => [
                        dlinha('eu quis dizer', 'eu quis dizer como piada', 'I meant', 'I meant it as a joke', 'quise decir', 'Quise decirlo en broma', 'je voulais dire', 'Je voulais dire ça en blague', 'intendevo', 'Intendevo una battuta', 'ich meinte', 'Ich meinte es als Witz'),
                        dlinha('soou como', 'soou como um recado', 'it came across', 'It came across as a slight', 'se entendió', 'Se entendió como un desplante', 'ça a passé', 'Ça a passé comme une pique', 'è arrivato', 'È arrivato come una stoccata', 'es kam an', 'Es kam als Seitenhieb an'),
                        dlinha('não era a intenção', 'não era a minha intenção', 'that was not my intent', 'That was not my intent', 'no era mi intención', 'No era mi intención', 'ce n était pas mon intention', 'Ce n était pas mon intention', 'non era mia intenzione', 'Non era mia intenzione', 'das war nicht meine Absicht', 'Das war nicht meine Absicht'),
                        dlinha('deixe eu reformular', 'deixe eu reformular', 'let me rephrase', 'Let me rephrase', 'déjame reformular', 'Déjame reformular', 'laisse-moi reformuler', 'Laisse-moi reformuler', 'lascia che riformuli', 'Lascia che riformuli', 'lass mich umformulieren', 'Lass mich umformulieren'),
                    ],
                ],
                [
                    'titulo' => 'O conserto',
                    'teoria' => dteoria(
                        "I hear you · that landed badly · from now on · we good\nI hear you. That landed badly. From now on I will check first. Are we good?",
                        "te escucho · cayó mal · de ahora en adelante · ¿estamos bien?\nTe escucho. Cayó mal. De ahora en adelante pregunto antes. ¿Estamos bien?",
                        "je t entends · ça a mal passé · désormais · on est bon\nJe t entends. Ça a mal passé. Désormais je vérifie d abord. On est bon ?",
                        "ti sento · è andata male · d ora in poi · siamo a posto\nTi sento. È andata male. D ora in poi chiedo prima. Siamo a posto?",
                        "ich höre dich · das kam schlecht an · von jetzt an · sind wir gut\nIch höre dich. Das kam schlecht an. Von jetzt an frage ich erst. Sind wir gut?"
                    ),
                    'itens' => [
                        dlinha('eu te ouço', 'eu te ouço nisso', 'I hear you', 'I hear you on that', 'te escucho', 'Te escucho en eso', 'je t entends', 'Je t entends là-dessus', 'ti sento', 'Ti sento su questo', 'ich höre dich', 'Ich höre dich dabei'),
                        dlinha('caiu mal', 'isso caiu mal', 'that landed badly', 'That landed badly', 'cayó mal', 'Eso cayó mal', 'ça a mal passé', 'Ça a mal passé', 'è andata male', 'È andata male', 'das kam schlecht an', 'Das kam schlecht an'),
                        dlinha('de agora em diante', 'de agora em diante eu pergunto', 'from now on', 'From now on I will ask', 'de ahora en adelante', 'De ahora en adelante pregunto', 'désormais', 'Désormais je demande', 'd ora in poi', 'D ora in poi chiedo', 'von jetzt an', 'Von jetzt an frage ich'),
                        dlinha('estamos bem', 'estamos bem então', 'we good', 'Are we good then', 'estamos bien', 'Estamos bien entonces', 'on est bon', 'On est bon alors', 'siamo a posto', 'Siamo a posto allora', 'sind wir gut', 'Sind wir dann gut'),
                    ],
                ],
            ],
        ],
    ];
}
