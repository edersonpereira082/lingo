<?php

function alta_b(): array
{
    return [
        [
            'titulo' => 'Pet doente B1',
            'desc' => 'Sintoma, consulta, remédio e o que o veterinário pediu.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'No consultório',
                    'teoria' => dteoria(
                        "vet · limp · appetite · shot\nShe has been limping. Her appetite is low. She is due a shot.",
                        "veterinario · cojera · apetito · vacuna\nLleva cojeando. Tiene poco apetito. Le toca la vacuna.",
                        "véto · boiter · appétit · vaccin\nElle boite. Elle a peu d appétit. Elle doit avoir un vaccin.",
                        "veterinario · zoppicare · appetito · vaccino\nZoppica. Ha poco appetito. Le tocca il vaccino.",
                        "Tierarzt · humpeln · Appetit · Impfung\nSie humpelt. Der Appetit ist schwach. Die Impfung ist fällig."
                    ),
                    'itens' => [
                        dlinha('veterinário', 'preciso ir ao veterinário', 'vet', 'I need to go to the vet', 'veterinario', 'Tengo que ir al veterinario', 'véto', 'Je dois aller chez le véto', 'veterinario', 'Devo andare dal veterinario', 'Tierarzt', 'Ich muss zum Tierarzt'),
                        dlinha('mancar', 'ela está mancando', 'limp', 'She has been limping', 'cojera', 'Lleva cojeando', 'boiter', 'Elle boite', 'zoppicare', 'Zoppica', 'humpeln', 'Sie humpelt'),
                        dlinha('apetite', 'o apetite está baixo', 'appetite', 'Her appetite is low', 'apetito', 'Tiene poco apetito', 'appétit', 'Elle a peu d appétit', 'appetito', 'Ha poco appetito', 'Appetit', 'Der Appetit ist schwach'),
                        dlinha('vacina', 'está na hora da vacina', 'shot', 'She is due a shot', 'vacuna', 'Le toca la vacuna', 'vaccin', 'Elle doit avoir un vaccin', 'vaccino', 'Le tocca il vaccino', 'Impfung', 'Die Impfung ist fällig'),
                    ],
                ],
                [
                    'titulo' => 'O que fazer em casa',
                    'teoria' => dteoria(
                        "pill · with food · cone · rest\nGive the pill with food. Keep the cone on. She needs rest.",
                        "pastilla · con comida · collarín · reposo\nDale la pastilla con comida. Deja el collarín. Necesita reposo.",
                        "comprimé · avec de la nourriture · collerette · repos\nDonne le comprimé avec de la nourriture. Laisse la collerette. Elle a besoin de repos.",
                        "pastiglia · con il cibo · collare · riposo\nDai la pastiglia con il cibo. Tieni il collare. Ha bisogno di riposo.",
                        "Tablette · mit Futter · Kragen · Ruhe\nGib die Tablette mit Futter. Lass den Kragen dran. Sie braucht Ruhe."
                    ),
                    'itens' => [
                        dlinha('comprimido', 'dê o comprimido com comida', 'pill', 'Give the pill with food', 'pastilla', 'Dale la pastilla con comida', 'comprimé', 'Donne le comprimé avec de la nourriture', 'pastiglia', 'Dai la pastiglia con il cibo', 'Tablette', 'Gib die Tablette mit Futter'),
                        dlinha('com comida', 'sempre com comida', 'with food', 'Always with food', 'con comida', 'Siempre con comida', 'avec de la nourriture', 'Toujours avec de la nourriture', 'con il cibo', 'Sempre con il cibo', 'mit Futter', 'Immer mit Futter'),
                        dlinha('colar elizabetano', 'deixe o colar elizabetano', 'cone', 'Keep the cone on', 'collarín', 'Deja el collarín', 'collerette', 'Laisse la collerette', 'collare', 'Tieni il collare', 'Kragen', 'Lass den Kragen dran'),
                        dlinha('repouso', 'ela precisa de repouso', 'rest', 'She needs rest', 'reposo', 'Necesita reposo', 'repos', 'Elle a besoin de repos', 'riposo', 'Ha bisogno di riposo', 'Ruhe', 'Sie braucht Ruhe'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Encanador em casa B1',
            'desc' => 'Vazamento, orçamento e o que não mexer.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O vazamento',
                    'teoria' => dteoria(
                        "leak · drip · shut-off · plumber\nThere is a leak under the sink. The tap drips. Where is the shut-off? I called a plumber.",
                        "fuga · goteo · llave de paso · fontanero\nHay una fuga bajo el fregadero. El grifo gotea. ¿Dónde está la llave de paso?",
                        "fuite · goutte · vanne · plombier\nIl y a une fuite sous l évier. Le robinet goutte. Où est la vanne ? J ai appelé un plombier.",
                        "perdita · goccia · saracinesca · idraulico\nC è una perdita sotto il lavello. Il rubinetto gocciola. Dov è la saracinesca?",
                        "Leck · Tropfen · Absperrhahn · Klempner\nUnter der Spüle ist ein Leck. Der Hahn tropft. Wo ist der Absperrhahn?"
                    ),
                    'itens' => [
                        dlinha('vazamento', 'há um vazamento sob a pia', 'leak', 'There is a leak under the sink', 'fuga', 'Hay una fuga bajo el fregadero', 'fuite', 'Il y a une fuite sous l évier', 'perdita', 'C è una perdita sotto il lavello', 'Leck', 'Unter der Spüle ist ein Leck'),
                        dlinha('pingar', 'a torneira pinga', 'drip', 'The tap drips', 'goteo', 'El grifo gotea', 'goutte', 'Le robinet goutte', 'goccia', 'Il rubinetto gocciola', 'Tropfen', 'Der Hahn tropft'),
                        dlinha('registro', 'onde fica o registro', 'shut-off', 'Where is the shut-off', 'llave de paso', 'Dónde está la llave de paso', 'vanne', 'Où est la vanne', 'saracinesca', 'Dov è la saracinesca', 'Absperrhahn', 'Wo ist der Absperrhahn'),
                        dlinha('encanador', 'chamei um encanador', 'plumber', 'I called a plumber', 'fontanero', 'Llamé a un fontanero', 'plombier', 'J ai appelé un plombier', 'idraulico', 'Ho chiamato un idraulico', 'Klempner', 'Ich habe einen Klempner gerufen'),
                    ],
                ],
                [
                    'titulo' => 'O orçamento',
                    'teoria' => dteoria(
                        "quote · parts · labour · do not touch\nSend a quote for parts and labour. Do not touch the pipe until I get there.",
                        "presupuesto · piezas · mano de obra · no toques\nManda un presupuesto de piezas y mano de obra. No toques el tubo hasta que llegue.",
                        "devis · pièces · main d oeuvre · n y touche pas\nEnvoie un devis pièces et main d oeuvre. N y touche pas avant que j arrive.",
                        "preventivo · pezzi · manodopera · non toccare\nManda un preventivo di pezzi e manodopera. Non toccare il tubo finché arrivo.",
                        "Angebot · Teile · Arbeit · nicht anfassen\nSchick ein Angebot für Teile und Arbeit. Fass das Rohr nicht an, bis ich da bin."
                    ),
                    'itens' => [
                        dlinha('orçamento', 'mande um orçamento', 'quote', 'Send a quote', 'presupuesto', 'Manda un presupuesto', 'devis', 'Envoie un devis', 'preventivo', 'Manda un preventivo', 'Angebot', 'Schick ein Angebot'),
                        dlinha('peças', 'o preço das peças', 'parts', 'The price of the parts', 'piezas', 'El precio de las piezas', 'pièces', 'Le prix des pièces', 'pezzi', 'Il prezzo dei pezzi', 'Teile', 'Der Preis der Teile'),
                        dlinha('mão de obra', 'e a mão de obra', 'labour', 'And the labour', 'mano de obra', 'Y la mano de obra', 'main d oeuvre', 'Et la main d oeuvre', 'manodopera', 'E la manodopera', 'Arbeit', 'Und die Arbeit'),
                        dlinha('não mexa', 'não mexa no cano', 'do not touch', 'Do not touch the pipe', 'no toques', 'No toques el tubo', 'n y touche pas', 'N y touche pas', 'non toccare', 'Non toccare il tubo', 'nicht anfassen', 'Fass das Rohr nicht an'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'App de carona B1',
            'desc' => 'Ponto, tarifa, o motorista e cancelar a tempo.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O ponto',
                    'teoria' => dteoria(
                        "pin · fare · plate · wait\nDrop a pin. Check the fare. The plate is ABC. Wait at the door, not in the street.",
                        "pin · tarifa · matrícula · espera\nDeja un pin. Mira la tarifa. La matrícula es ABC. Espera en la puerta, no en la calle.",
                        "épingle · tarif · plaque · attendre\nPose une épingle. Vérifie le tarif. La plaque est ABC. Attends à la porte, pas dans la rue.",
                        "pin · tariffa · targa · aspetta\nMetti un pin. Controlla la tariffa. La targa è ABC. Aspetta alla porta, non in strada.",
                        "Pin · Tarif · Kennzeichen · warten\nSetz einen Pin. Prüfe den Tarif. Das Kennzeichen ist ABC. Warte an der Tür, nicht auf der Straße."
                    ),
                    'itens' => [
                        dlinha('pino', 'solte um pino no mapa', 'pin', 'Drop a pin on the map', 'pin', 'Deja un pin en el mapa', 'épingle', 'Pose une épingle sur la carte', 'pin', 'Metti un pin sulla mappa', 'Pin', 'Setz einen Pin auf die Karte'),
                        dlinha('tarifa', 'confira a tarifa', 'fare', 'Check the fare', 'tarifa', 'Mira la tarifa', 'tarif', 'Vérifie le tarif', 'tariffa', 'Controlla la tariffa', 'Tarif', 'Prüfe den Tarif'),
                        dlinha('placa', 'a placa é ABC', 'plate', 'The plate is ABC', 'matrícula', 'La matrícula es ABC', 'plaque', 'La plaque est ABC', 'targa', 'La targa è ABC', 'Kennzeichen', 'Das Kennzeichen ist ABC'),
                        dlinha('esperar', 'espere na porta', 'wait', 'Wait at the door', 'espera', 'Espera en la puerta', 'attendre', 'Attends à la porte', 'aspetta', 'Aspetta alla porta', 'warten', 'Warte an der Tür'),
                    ],
                ],
                [
                    'titulo' => 'Cancelar',
                    'teoria' => dteoria(
                        "cancel fee · share trip · rate · wrong car\nThere is a cancel fee after two minutes. Share the trip. Rate after. This is the wrong car.",
                        "tarifa de cancelación · compartir viaje · valorar · coche equivocado\nHay tarifa de cancelación a los dos minutos. Comparte el viaje. Valora después. Este no es el coche.",
                        "frais d annulation · partager le trajet · noter · mauvaise voiture\nIl y a des frais d annulation après deux minutes. Partage le trajet. Note après. Ce n est pas la bonne voiture.",
                        "costo di cancellazione · condividi corsa · valuta · macchina sbagliata\nC è un costo di cancellazione dopo due minuti. Condividi la corsa. Valuta dopo. Non è la macchina giusta.",
                        "Stornogebühr · Fahrt teilen · bewerten · falsches Auto\nNach zwei Minuten gibt es eine Stornogebühr. Teile die Fahrt. Bewerte danach. Das ist das falsche Auto."
                    ),
                    'itens' => [
                        dlinha('taxa de cancelamento', 'há taxa de cancelamento', 'cancel fee', 'There is a cancel fee', 'tarifa de cancelación', 'Hay tarifa de cancelación', 'frais d annulation', 'Il y a des frais d annulation', 'costo di cancellazione', 'C è un costo di cancellazione', 'Stornogebühr', 'Es gibt eine Stornogebühr'),
                        dlinha('compartilhar viagem', 'compartilhe a viagem', 'share trip', 'Share the trip', 'compartir viaje', 'Comparte el viaje', 'partager le trajet', 'Partage le trajet', 'condividi corsa', 'Condividi la corsa', 'Fahrt teilen', 'Teile die Fahrt'),
                        dlinha('avaliar', 'avalie depois', 'rate', 'Rate afterwards', 'valorar', 'Valora después', 'noter', 'Note après', 'valuta', 'Valuta dopo', 'bewerten', 'Bewerte danach'),
                        dlinha('carro errado', 'este é o carro errado', 'wrong car', 'This is the wrong car', 'coche equivocado', 'Este no es el coche', 'mauvaise voiture', 'Ce n est pas la bonne voiture', 'macchina sbagliata', 'Non è la macchina giusta', 'falsches Auto', 'Das ist das falsche Auto'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Na fila do órgão B1',
            'desc' => 'Senha, documento, o guichê e o que falta.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'A senha',
                    'teoria' => dteoria(
                        "ticket · counter · ID · missing\nTake a ticket. Counter four. I need an ID. A form is missing.",
                        "ticket · ventanilla · documento · falta\nSaca un ticket. Ventanilla cuatro. Necesito un documento. Falta un formulario.",
                        "ticket · guichet · pièce · manque\nPrends un ticket. Guichet quatre. Il me faut une pièce. Il manque un formulaire.",
                        "ticket · sportello · documento · manca\nPrendi un ticket. Sportello quattro. Serve un documento. Manca un modulo.",
                        "Nummer · Schalter · Ausweis · fehlt\nZieh eine Nummer. Schalter vier. Ich brauche einen Ausweis. Ein Formular fehlt."
                    ),
                    'itens' => [
                        dlinha('senha', 'pegue uma senha', 'ticket', 'Take a ticket', 'ticket', 'Saca un ticket', 'ticket', 'Prends un ticket', 'ticket', 'Prendi un ticket', 'Nummer', 'Zieh eine Nummer'),
                        dlinha('guichê', 'guichê quatro', 'counter', 'Counter four', 'ventanilla', 'Ventanilla cuatro', 'guichet', 'Guichet quatre', 'sportello', 'Sportello quattro', 'Schalter', 'Schalter vier'),
                        dlinha('documento', 'preciso de um documento', 'ID', 'I need an ID', 'documento', 'Necesito un documento', 'pièce', 'Il me faut une pièce', 'documento', 'Serve un documento', 'Ausweis', 'Ich brauche einen Ausweis'),
                        dlinha('falta', 'falta um formulário', 'missing', 'A form is missing', 'falta', 'Falta un formulario', 'manque', 'Il manque un formulaire', 'manca', 'Manca un modulo', 'fehlt', 'Ein Formular fehlt'),
                    ],
                ],
                [
                    'titulo' => 'Volte amanhã',
                    'teoria' => dteoria(
                        "come back · photocopy · stamp · closed\nCome back with a photocopy. It needs a stamp. We are closed at noon.",
                        "vuelve · fotocopia · sello · cerrado\nVuelve con una fotocopia. Hace falta un sello. Cerramos al mediodía.",
                        "reviens · photocopie · tampon · fermé\nReviens avec une photocopie. Il faut un tampon. On ferme à midi.",
                        "torna · fotocopia · timbro · chiuso\nTorna con una fotocopia. Serve un timbro. Chiudiamo a mezzogiorno.",
                        "komm wieder · Kopie · Stempel · geschlossen\nKomm mit einer Kopie wieder. Es braucht einen Stempel. Wir sind um zwölf zu."
                    ),
                    'itens' => [
                        dlinha('volte', 'volte com a cópia', 'come back', 'Come back with the copy', 'vuelve', 'Vuelve con la copia', 'reviens', 'Reviens avec la copie', 'torna', 'Torna con la copia', 'komm wieder', 'Komm mit der Kopie wieder'),
                        dlinha('fotocópia', 'precisa de fotocópia', 'photocopy', 'You need a photocopy', 'fotocopia', 'Hace falta una fotocopia', 'photocopie', 'Il faut une photocopie', 'fotocopia', 'Serve una fotocopia', 'Kopie', 'Du brauchst eine Kopie'),
                        dlinha('carimbo', 'falta o carimbo', 'stamp', 'It needs a stamp', 'sello', 'Hace falta un sello', 'tampon', 'Il faut un tampon', 'timbro', 'Serve un timbro', 'Stempel', 'Es braucht einen Stempel'),
                        dlinha('fechado', 'fecha ao meio-dia', 'closed', 'We close at noon', 'cerrado', 'Cerramos al mediodía', 'fermé', 'On ferme à midi', 'chiuso', 'Chiudiamo a mezzogiorno', 'geschlossen', 'Wir sind um zwölf zu'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Recado ao vizinho B1',
            'desc' => 'Barulho, encomenda, planta e um pedido educado.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'O bilhete',
                    'teoria' => dteoria(
                        "sorry to bother · parcel · watering · late\nSorry to bother you. A parcel came. Could you water the plant? I will be late.",
                        "perdón por molestar · paquete · riego · tarde\nPerdón por molestar. Llegó un paquete. ¿Puedes regar la planta? Llegaré tarde.",
                        "désolé de déranger · colis · arrosage · en retard\nDésolé de déranger. Un colis est arrivé. Tu peux arroser la plante ? Je serai en retard.",
                        "scusa se disturbo · pacco · annaffiare · in ritardo\nScusa se disturbo. È arrivato un pacco. Puoi annaffiare la pianta? Farò tardi.",
                        "sorry wegen der Störung · Paket · gießen · spät\nSorry wegen der Störung. Ein Paket kam. Kannst du die Pflanze gießen? Ich werde spät."
                    ),
                    'itens' => [
                        dlinha('desculpe incomodar', 'desculpe incomodar', 'sorry to bother', 'Sorry to bother you', 'perdón por molestar', 'Perdón por molestar', 'désolé de déranger', 'Désolé de déranger', 'scusa se disturbo', 'Scusa se disturbo', 'sorry wegen der Störung', 'Sorry wegen der Störung'),
                        dlinha('encomenda', 'chegou uma encomenda', 'parcel', 'A parcel came', 'paquete', 'Llegó un paquete', 'colis', 'Un colis est arrivé', 'pacco', 'È arrivato un pacco', 'Paket', 'Ein Paket kam'),
                        dlinha('regar', 'pode regar a planta', 'watering', 'Could you water the plant', 'riego', 'Puedes regar la planta', 'arrosage', 'Tu peux arroser la plante', 'annaffiare', 'Puoi annaffiare la pianta', 'gießen', 'Kannst du die Pflanze gießen'),
                        dlinha('atrasado', 'vou chegar atrasado', 'late', 'I will be late', 'tarde', 'Llegaré tarde', 'en retard', 'Je serai en retard', 'in ritardo', 'Farò tardi', 'spät', 'Ich werde spät'),
                    ],
                ],
                [
                    'titulo' => 'O barulho',
                    'teoria' => dteoria(
                        "drill · after ten · downstairs · thanks anyway\nThe drill is loud after ten. I live downstairs. Thanks anyway for trying.",
                        "taladro · después de las diez · abajo · gracias igual\nEl taladro es fuerte después de las diez. Vivo abajo. Gracias igual por intentarlo.",
                        "perceuse · après dix heures · en dessous · merci quand même\nLa perceuse est forte après dix heures. J habite en dessous. Merci quand même d avoir essayé.",
                        "trapano · dopo le dieci · sotto · grazie lo stesso\nIl trapano è forte dopo le dieci. Abito sotto. Grazie lo stesso per averci provato.",
                        "Bohrer · nach zehn · unten · trotzdem danke\nDer Bohrer ist laut nach zehn. Ich wohne unten. Trotzdem danke fürs Versuchen."
                    ),
                    'itens' => [
                        dlinha('furadeira', 'a furadeira está alta', 'drill', 'The drill is loud', 'taladro', 'El taladro es fuerte', 'perceuse', 'La perceuse est forte', 'trapano', 'Il trapano è forte', 'Bohrer', 'Der Bohrer ist laut'),
                        dlinha('depois das dez', 'depois das dez é demais', 'after ten', 'After ten is too much', 'después de las diez', 'Después de las diez es demasiado', 'après dix heures', 'Après dix heures c est trop', 'dopo le dieci', 'Dopo le dieci è troppo', 'nach zehn', 'Nach zehn ist zu viel'),
                        dlinha('embaixo', 'eu moro embaixo', 'downstairs', 'I live downstairs', 'abajo', 'Vivo abajo', 'en dessous', 'J habite en dessous', 'sotto', 'Abito sotto', 'unten', 'Ich wohne unten'),
                        dlinha('obrigado mesmo assim', 'obrigado mesmo assim', 'thanks anyway', 'Thanks anyway', 'gracias igual', 'Gracias igual', 'merci quand même', 'Merci quand même', 'grazie lo stesso', 'Grazie lo stesso', 'trotzdem danke', 'Trotzdem danke'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Mudança de apartamento B1',
            'desc' => 'Caixa, elevador, o que é frágil e o combinado do prédio.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'As caixas',
                    'teoria' => dteoria(
                        "box · fragile · lift · label\nThis box is fragile. Use the lift. Label the kitchen boxes.",
                        "caja · frágil · ascensor · etiqueta\nEsta caja es frágil. Usa el ascensor. Etiqueta las cajas de cocina.",
                        "carton · fragile · ascenseur · étiquette\nCe carton est fragile. Prends l ascenseur. Étiquette les cartons de cuisine.",
                        "scatola · fragile · ascensore · etichetta\nQuesta scatola è fragile. Usa l ascensore. Etichetta le scatole della cucina.",
                        "Karton · zerbrechlich · Aufzug · Etikett\nDieser Karton ist zerbrechlich. Nimm den Aufzug. Beschrifte die Küchenkartons."
                    ),
                    'itens' => [
                        dlinha('caixa', 'esta caixa é pesada', 'box', 'This box is heavy', 'caja', 'Esta caja es pesada', 'carton', 'Ce carton est lourd', 'scatola', 'Questa scatola è pesante', 'Karton', 'Dieser Karton ist schwer'),
                        dlinha('frágil', 'isto é frágil', 'fragile', 'This is fragile', 'frágil', 'Esto es frágil', 'fragile', 'C est fragile', 'fragile', 'È fragile', 'zerbrechlich', 'Das ist zerbrechlich'),
                        dlinha('elevador', 'use o elevador de serviço', 'lift', 'Use the service lift', 'ascensor', 'Usa el ascensor de servicio', 'ascenseur', 'Prends l ascenseur de service', 'ascensore', 'Usa l ascensore di servizio', 'Aufzug', 'Nimm den Lastenaufzug'),
                        dlinha('etiqueta', 'ponha etiqueta na caixa', 'label', 'Put a label on the box', 'etiqueta', 'Pon una etiqueta en la caja', 'étiquette', 'Mets une étiquette sur le carton', 'etichetta', 'Metti un etichetta sulla scatola', 'Etikett', 'Mach ein Etikett auf den Karton'),
                    ],
                ],
                [
                    'titulo' => 'O combinado',
                    'teoria' => dteoria(
                        "moving day · hallway · deposit · keys\nMoving day is Saturday. Do not block the hallway. The deposit comes back with the keys.",
                        "día de mudanza · pasillo · fianza · llaves\nEl día de mudanza es el sábado. No bloquees el pasillo. La fianza vuelve con las llaves.",
                        "jour de déménagement · couloir · caution · clés\nLe jour de déménagement est samedi. Ne bloque pas le couloir. La caution revient avec les clés.",
                        "giorno del trasloco · corridoio · cauzione · chiavi\nIl giorno del trasloco è sabato. Non bloccare il corridoio. La cauzione torna con le chiavi.",
                        "Umzugstag · Flur · Kaution · Schlüssel\nDer Umzugstag ist Samstag. Stell den Flur nicht zu. Die Kaution kommt mit den Schlüsseln zurück."
                    ),
                    'itens' => [
                        dlinha('dia da mudança', 'o dia da mudança é sábado', 'moving day', 'Moving day is Saturday', 'día de mudanza', 'El día de mudanza es el sábado', 'jour de déménagement', 'Le jour de déménagement est samedi', 'giorno del trasloco', 'Il giorno del trasloco è sabato', 'Umzugstag', 'Der Umzugstag ist Samstag'),
                        dlinha('corredor', 'não bloqueie o corredor', 'hallway', 'Do not block the hallway', 'pasillo', 'No bloquees el pasillo', 'couloir', 'Ne bloque pas le couloir', 'corridoio', 'Non bloccare il corridoio', 'Flur', 'Stell den Flur nicht zu'),
                        dlinha('caução', 'a caução volta com as chaves', 'deposit', 'The deposit comes back with the keys', 'fianza', 'La fianza vuelve con las llaves', 'caution', 'La caution revient avec les clés', 'cauzione', 'La cauzione torna con le chiavi', 'Kaution', 'Die Kaution kommt mit den Schlüsseln zurück'),
                        dlinha('chaves', 'entregue as chaves', 'keys', 'Hand over the keys', 'llaves', 'Entrega las llaves', 'clés', 'Remets les clés', 'chiavi', 'Consegna le chiavi', 'Schlüssel', 'Gib die Schlüssel ab'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Aula experimental B1',
            'desc' => 'Nível, material, frequência e se você fica.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'A primeira aula',
                    'teoria' => dteoria(
                        "trial class · level · kit · twice a week\nThis is a trial class. What is your level? The kit is included. We meet twice a week.",
                        "clase de prueba · nivel · kit · dos veces por semana\nEs una clase de prueba. ¿Cuál es tu nivel? El kit está incluido. Quedamos dos veces por semana.",
                        "cours d essai · niveau · kit · deux fois par semaine\nC est un cours d essai. Quel est ton niveau ? Le kit est compris. On se voit deux fois par semaine.",
                        "lezione di prova · livello · kit · due volte a settimana\nÈ una lezione di prova. Qual è il tuo livello? Il kit è incluso. Ci vediamo due volte a settimana.",
                        "Probestunde · Niveau · Set · zweimal die Woche\nDas ist eine Probestunde. Welches Niveau hast du? Das Set ist dabei. Wir treffen uns zweimal die Woche."
                    ),
                    'itens' => [
                        dlinha('aula experimental', 'isto é uma aula experimental', 'trial class', 'This is a trial class', 'clase de prueba', 'Es una clase de prueba', 'cours d essai', 'C est un cours d essai', 'lezione di prova', 'È una lezione di prova', 'Probestunde', 'Das ist eine Probestunde'),
                        dlinha('nível', 'qual é o seu nível', 'level', 'What is your level', 'nivel', 'Cuál es tu nivel', 'niveau', 'Quel est ton niveau', 'livello', 'Qual è il tuo livello', 'Niveau', 'Welches Niveau hast du'),
                        dlinha('material', 'o material está incluso', 'kit', 'The kit is included', 'kit', 'El kit está incluido', 'kit', 'Le kit est compris', 'kit', 'Il kit è incluso', 'Set', 'Das Set ist dabei'),
                        dlinha('duas vezes por semana', 'a gente se vê duas vezes por semana', 'twice a week', 'We meet twice a week', 'dos veces por semana', 'Quedamos dos veces por semana', 'deux fois par semaine', 'On se voit deux fois par semaine', 'due volte a settimana', 'Ci vediamo due volte a settimana', 'zweimal die Woche', 'Wir treffen uns zweimal die Woche'),
                    ],
                ],
                [
                    'titulo' => 'Fico ou não',
                    'teoria' => dteoria(
                        "I will stay · too fast · drop-in · waitlist\nI will stay. It was too fast for me. Is there a drop-in? Put me on the waitlist.",
                        "me quedo · demasiado rápido · clase suelta · lista de espera\nMe quedo. Fue demasiado rápido. ¿Hay clase suelta? Ponme en la lista de espera.",
                        "je reste · trop rapide · séance à l unité · liste d attente\nJe reste. C était trop rapide. Il y a une séance à l unité ? Mets-moi sur liste d attente.",
                        "resto · troppo veloce · lezione singola · lista d attesa\nResto. Era troppo veloce. C è una lezione singola? Mettimi in lista d attesa.",
                        "ich bleibe · zu schnell · Einzelstunde · Warteliste\nIch bleibe. Es war zu schnell. Gibt es eine Einzelstunde? Setz mich auf die Warteliste."
                    ),
                    'itens' => [
                        dlinha('eu fico', 'eu fico neste horário', 'I will stay', 'I will stay in this slot', 'me quedo', 'Me quedo en este horario', 'je reste', 'Je reste sur ce créneau', 'resto', 'Resto in questo orario', 'ich bleibe', 'Ich bleibe in diesem Slot'),
                        dlinha('rápido demais', 'foi rápido demais para mim', 'too fast', 'It was too fast for me', 'demasiado rápido', 'Fue demasiado rápido para mí', 'trop rapide', 'C était trop rapide pour moi', 'troppo veloce', 'Era troppo veloce per me', 'zu schnell', 'Es war zu schnell für mich'),
                        dlinha('aula avulsa', 'tem aula avulsa', 'drop-in', 'Is there a drop-in', 'clase suelta', 'Hay clase suelta', 'séance à l unité', 'Il y a une séance à l unité', 'lezione singola', 'C è una lezione singola', 'Einzelstunde', 'Gibt es eine Einzelstunde'),
                        dlinha('lista de espera', 'me coloque na lista de espera', 'waitlist', 'Put me on the waitlist', 'lista de espera', 'Ponme en la lista de espera', 'liste d attente', 'Mets-moi sur liste d attente', 'lista d attesa', 'Mettimi in lista d attesa', 'Warteliste', 'Setz mich auf die Warteliste'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Perdeu o ônibus B1',
            'desc' => 'O próximo, o app, avisar e o plano B.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Acabei de perder',
                    'teoria' => dteoria(
                        "just missed · next one · delay · live map\nI just missed it. When is the next one? There is a delay. Check the live map.",
                        "acabo de perderlo · el siguiente · retraso · mapa en vivo\nAcabo de perderlo. ¿Cuándo es el siguiente? Hay retraso. Mira el mapa en vivo.",
                        "je viens de le rater · le suivant · retard · carte en direct\nJe viens de le rater. C est quand le suivant ? Il y a du retard. Regarde la carte en direct.",
                        "l ho appena perso · il prossimo · ritardo · mappa live\nL ho appena perso. Quando è il prossimo? C è ritardo. Guarda la mappa live.",
                        "gerade verpasst · der nächste · Verspätung · Live-Karte\nIch habe ihn gerade verpasst. Wann kommt der nächste? Es gibt Verspätung. Schau auf die Live-Karte."
                    ),
                    'itens' => [
                        dlinha('acabei de perder', 'acabei de perder o ônibus', 'just missed', 'I just missed the bus', 'acabo de perderlo', 'Acabo de perder el bus', 'je viens de le rater', 'Je viens de rater le bus', 'l ho appena perso', 'Ho appena perso il bus', 'gerade verpasst', 'Ich habe den Bus gerade verpasst'),
                        dlinha('o próximo', 'quando é o próximo', 'next one', 'When is the next one', 'el siguiente', 'Cuándo es el siguiente', 'le suivant', 'C est quand le suivant', 'il prossimo', 'Quando è il prossimo', 'der nächste', 'Wann kommt der nächste'),
                        dlinha('atraso', 'há atraso na linha', 'delay', 'There is a delay on the line', 'retraso', 'Hay retraso en la línea', 'retard', 'Il y a du retard sur la ligne', 'ritardo', 'C è ritardo sulla linea', 'Verspätung', 'Es gibt Verspätung auf der Linie'),
                        dlinha('mapa ao vivo', 'veja o mapa ao vivo', 'live map', 'Check the live map', 'mapa en vivo', 'Mira el mapa en vivo', 'carte en direct', 'Regarde la carte en direct', 'mappa live', 'Guarda la mappa live', 'Live-Karte', 'Schau auf die Live-Karte'),
                    ],
                ],
                [
                    'titulo' => 'Avisar',
                    'teoria' => dteoria(
                        "running late · start without me · take a cab · I will make it\nI am running late. Start without me. I will take a cab. I will still make it.",
                        "voy tarde · empiecen sin mí · tomo un taxi · llego igual\nVoy tarde. Empiecen sin mí. Tomo un taxi. Llego igual.",
                        "je suis en retard · commencez sans moi · je prends un taxi · j y arriverai\nJe suis en retard. Commencez sans moi. Je prends un taxi. J y arriverai quand même.",
                        "faccio tardi · iniziate senza di me · prendo un taxi · ci arrivo lo stesso\nFaccio tardi. Iniziate senza di me. Prendo un taxi. Ci arrivo lo stesso.",
                        "ich komme zu spät · fangt ohne mich an · ich nehme ein Taxi · ich schaff es noch\nIch komme zu spät. Fangt ohne mich an. Ich nehme ein Taxi. Ich schaff es noch."
                    ),
                    'itens' => [
                        dlinha('estou atrasado', 'estou atrasado no ponto', 'running late', 'I am running late', 'voy tarde', 'Voy tarde', 'je suis en retard', 'Je suis en retard', 'faccio tardi', 'Faccio tardi', 'ich komme zu spät', 'Ich komme zu spät'),
                        dlinha('comecem sem mim', 'comecem sem mim', 'start without me', 'Start without me', 'empiecen sin mí', 'Empiecen sin mí', 'commencez sans moi', 'Commencez sans moi', 'iniziate senza di me', 'Iniziate senza di me', 'fangt ohne mich an', 'Fangt ohne mich an'),
                        dlinha('pegar um táxi', 'vou pegar um táxi', 'take a cab', 'I will take a cab', 'tomo un taxi', 'Tomo un taxi', 'je prends un taxi', 'Je prends un taxi', 'prendo un taxi', 'Prendo un taxi', 'ich nehme ein Taxi', 'Ich nehme ein Taxi'),
                        dlinha('ainda chego', 'ainda chego a tempo', 'I will make it', 'I will still make it', 'llego igual', 'Llego igual', 'j y arriverai', 'J y arriverai quand même', 'ci arrivo lo stesso', 'Ci arrivo lo stesso', 'ich schaff es noch', 'Ich schaff es noch'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Presente de última hora B1',
            'desc' => 'Tamanho, recibo, embrulho e um plano B se não servir.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Na loja',
                    'teoria' => dteoria(
                        "gift receipt · wrap · size · last minute\nI need a gift receipt. Can you wrap it? What size is this? It is last minute.",
                        "ticket de regalo · envolver · talla · de última hora\nNecesito un ticket de regalo. ¿Lo envuelves? ¿Qué talla es? Es de última hora.",
                        "ticket cadeau · emballer · taille · de dernière minute\nIl me faut un ticket cadeau. Tu peux l emballer ? C est quelle taille ? C est de dernière minute.",
                        "scontrino regalo · impacchettare · taglia · all ultimo minuto\nMi serve uno scontrino regalo. Lo impacchetti? Che taglia è? È all ultimo minuto.",
                        "Geschenkbeleg · einpacken · Größe · in letzter Minute\nIch brauche einen Geschenkbeleg. Kannst du es einpacken? Welche Größe ist das? Es ist in letzter Minute."
                    ),
                    'itens' => [
                        dlinha('cupom de presente', 'quero cupom de presente', 'gift receipt', 'I need a gift receipt', 'ticket de regalo', 'Necesito un ticket de regalo', 'ticket cadeau', 'Il me faut un ticket cadeau', 'scontrino regalo', 'Mi serve uno scontrino regalo', 'Geschenkbeleg', 'Ich brauche einen Geschenkbeleg'),
                        dlinha('embrulhar', 'pode embrulhar', 'wrap', 'Can you wrap it', 'envolver', 'Lo envuelves', 'emballer', 'Tu peux l emballer', 'impacchettare', 'Lo impacchetti', 'einpacken', 'Kannst du es einpacken'),
                        dlinha('tamanho', 'qual é o tamanho', 'size', 'What size is this', 'talla', 'Qué talla es', 'taille', 'C est quelle taille', 'taglia', 'Che taglia è', 'Größe', 'Welche Größe ist das'),
                        dlinha('última hora', 'é de última hora', 'last minute', 'It is last minute', 'de última hora', 'Es de última hora', 'de dernière minute', 'C est de dernière minute', 'all ultimo minuto', 'È all ultimo minuto', 'in letzter Minute', 'Es ist in letzter Minute'),
                    ],
                ],
                [
                    'titulo' => 'Se não servir',
                    'teoria' => dteoria(
                        "exchange · keep the tag · voucher · I hope it fits\nThey can exchange it. Keep the tag on. Or take a voucher. I hope it fits.",
                        "cambio · deja la etiqueta · vale · espero que sirva\nLo pueden cambiar. Deja la etiqueta. O toma un vale. Espero que sirva.",
                        "échange · laisse l étiquette · bon · j espère que ça va\nIls peuvent l échanger. Laisse l étiquette. Ou prends un bon. J espère que ça va.",
                        "cambio · lascia il cartellino · buono · spero che vada\nPossono cambiarlo. Lascia il cartellino. O prendi un buono. Spero che vada.",
                        "Umtausch · lass das Etikett · Gutschein · ich hoffe es passt\nSie können umtauschen. Lass das Etikett dran. Oder nimm einen Gutschein. Ich hoffe, es passt."
                    ),
                    'itens' => [
                        dlinha('trocar', 'dá para trocar', 'exchange', 'They can exchange it', 'cambio', 'Lo pueden cambiar', 'échange', 'Ils peuvent l échanger', 'cambio', 'Possono cambiarlo', 'Umtausch', 'Sie können umtauschen'),
                        dlinha('deixe a etiqueta', 'deixe a etiqueta', 'keep the tag', 'Keep the tag on', 'deja la etiqueta', 'Deja la etiqueta', 'laisse l étiquette', 'Laisse l étiquette', 'lascia il cartellino', 'Lascia il cartellino', 'lass das Etikett', 'Lass das Etikett dran'),
                        dlinha('vale', 'ou leve um vale', 'voucher', 'Or take a voucher', 'vale', 'O toma un vale', 'bon', 'Ou prends un bon', 'buono', 'O prendi un buono', 'Gutschein', 'Oder nimm einen Gutschein'),
                        dlinha('espero que sirva', 'espero que sirva', 'I hope it fits', 'I hope it fits', 'espero que sirva', 'Espero que sirva', 'j espère que ça va', 'J espère que ça va', 'spero che vada', 'Spero che vada', 'ich hoffe es passt', 'Ich hoffe es passt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Renovar o empréstimo B1',
            'desc' => 'Livro atrasado, multa, reserva e o prazo novo.',
            'nivel' => 'B1',
            'aulas' => [
                [
                    'titulo' => 'Na biblioteca',
                    'teoria' => dteoria(
                        "renew · overdue · fine · hold\nCan I renew this? It is overdue. There is a small fine. Someone put a hold on it.",
                        "renovar · atrasado · multa · reserva\n¿Puedo renovar esto? Está atrasado. Hay una multa pequeña. Alguien lo reservó.",
                        "renouveler · en retard · amende · réservation\nJe peux renouveler ça ? C est en retard. Il y a une petite amende. Quelqu un l a réservé.",
                        "rinnovare · in ritardo · multa · prenotazione\nPosso rinnovare questo? È in ritardo. C è una piccola multa. Qualcuno l ha prenotato.",
                        "verlängern · überfällig · Gebühr · Vormerkung\nKann ich das verlängern? Es ist überfällig. Es gibt eine kleine Gebühr. Jemand hat es vorgemerkt."
                    ),
                    'itens' => [
                        dlinha('renovar', 'posso renovar isto', 'renew', 'Can I renew this', 'renovar', 'Puedo renovar esto', 'renouveler', 'Je peux renouveler ça', 'rinnovare', 'Posso rinnovare questo', 'verlängern', 'Kann ich das verlängern'),
                        dlinha('atrasado', 'está atrasado', 'overdue', 'It is overdue', 'atrasado', 'Está atrasado', 'en retard', 'C est en retard', 'in ritardo', 'È in ritardo', 'überfällig', 'Es ist überfällig'),
                        dlinha('multa', 'há uma multa pequena', 'fine', 'There is a small fine', 'multa', 'Hay una multa pequeña', 'amende', 'Il y a une petite amende', 'multa', 'C è una piccola multa', 'Gebühr', 'Es gibt eine kleine Gebühr'),
                        dlinha('reserva', 'alguém fez reserva', 'hold', 'Someone put a hold on it', 'reserva', 'Alguien lo reservó', 'réservation', 'Quelqu un l a réservé', 'prenotazione', 'Qualcuno l ha prenotato', 'Vormerkung', 'Jemand hat es vorgemerkt'),
                    ],
                ],
                [
                    'titulo' => 'O prazo novo',
                    'teoria' => dteoria(
                        "due date · online · card · closed stacks\nThe new due date is the 20th. You can renew online. Bring the card. That title is in closed stacks.",
                        "fecha de devolución · en línea · carnet · depósito\nLa nueva fecha es el 20. Puedes renovar en línea. Trae el carnet. Ese título está en depósito.",
                        "date de retour · en ligne · carte · magasin\nLa nouvelle date est le 20. Tu peux renouveler en ligne. Prends la carte. Ce titre est en magasin.",
                        "scadenza · online · tessera · magazzino\nLa nuova scadenza è il 20. Puoi rinnovare online. Porta la tessera. Quel titolo è in magazzino.",
                        "Frist · online · Ausweis · Magazin\nDie neue Frist ist der 20. Du kannst online verlängern. Bring den Ausweis. Der Titel liegt im Magazin."
                    ),
                    'itens' => [
                        dlinha('prazo', 'o novo prazo é dia 20', 'due date', 'The new due date is the 20th', 'fecha de devolución', 'La nueva fecha es el 20', 'date de retour', 'La nouvelle date est le 20', 'scadenza', 'La nuova scadenza è il 20', 'Frist', 'Die neue Frist ist der 20'),
                        dlinha('pela internet', 'dá para renovar pela internet', 'online', 'You can renew online', 'en línea', 'Puedes renovar en línea', 'en ligne', 'Tu peux renouveler en ligne', 'online', 'Puoi rinnovare online', 'online', 'Du kannst online verlängern'),
                        dlinha('carteirinha', 'traga a carteirinha', 'card', 'Bring the card', 'carnet', 'Trae el carnet', 'carte', 'Prends la carte', 'tessera', 'Porta la tessera', 'Ausweis', 'Bring den Ausweis'),
                        dlinha('depósito fechado', 'este título está no depósito fechado', 'closed stacks', 'That title is in closed stacks', 'depósito', 'Ese título está en depósito', 'magasin', 'Ce titre est en magasin', 'magazzino', 'Quel titolo è in magazzino', 'Magazin', 'Der Titel liegt im Magazin'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Pedir aumento B2',
            'desc' => 'O recorte, a evidência e o número, sem ameaça.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O pedido',
                    'teoria' => dteoria(
                        "I would like to discuss · market rate · I have taken on · a number\nI would like to discuss my pay. The market rate has moved. I have taken on more scope. I have a number in mind.",
                        "quisiera hablar · mercado · he asumido · un número\nQuisiera hablar de mi sueldo. El mercado se movió. He asumido más alcance. Tengo un número en mente.",
                        "je voudrais parler · marché · j ai pris · un chiffre\nJe voudrais parler de ma paie. Le marché a bougé. J ai pris plus de périmètre. J ai un chiffre en tête.",
                        "vorrei parlare · mercato · ho preso · un numero\nVorrei parlare della paga. Il mercato si è mosso. Ho preso più perimetro. Ho un numero in mente.",
                        "ich möchte sprechen · Markt · ich habe übernommen · eine Zahl\nIch möchte über mein Gehalt sprechen. Der Markt hat sich bewegt. Ich habe mehr Umfang übernommen. Ich habe eine Zahl im Kopf."
                    ),
                    'itens' => [
                        dlinha('gostaria de falar', 'gostaria de falar da remuneração', 'I would like to discuss', 'I would like to discuss my pay', 'quisiera hablar', 'Quisiera hablar de mi sueldo', 'je voudrais parler', 'Je voudrais parler de ma paie', 'vorrei parlare', 'Vorrei parlare della paga', 'ich möchte sprechen', 'Ich möchte über mein Gehalt sprechen'),
                        dlinha('mercado', 'o mercado se moveu', 'market rate', 'The market rate has moved', 'mercado', 'El mercado se movió', 'marché', 'Le marché a bougé', 'mercato', 'Il mercato si è mosso', 'Markt', 'Der Markt hat sich bewegt'),
                        dlinha('assumi', 'assumi mais escopo', 'I have taken on', 'I have taken on more scope', 'he asumido', 'He asumido más alcance', 'j ai pris', 'J ai pris plus de périmètre', 'ho preso', 'Ho preso più perimetro', 'ich habe übernommen', 'Ich habe mehr Umfang übernommen'),
                        dlinha('um número', 'tenho um número em mente', 'a number', 'I have a number in mind', 'un número', 'Tengo un número en mente', 'un chiffre', 'J ai un chiffre en tête', 'un numero', 'Ho un numero in mente', 'eine Zahl', 'Ich habe eine Zahl im Kopf'),
                    ],
                ],
                [
                    'titulo' => 'A resposta',
                    'teoria' => dteoria(
                        "not this cycle · counter · freeze · I hear you\nNot this cycle. Here is a counter. There is a freeze. I hear you and I will follow up in writing.",
                        "no en este ciclo · contraoferta · congelación · te escucho\nNo en este ciclo. Aquí va una contraoferta. Hay congelación. Te escucho y te escribo.",
                        "pas ce cycle · contre-offre · gel · je t entends\nPas ce cycle. Voici une contre-offre. Il y a un gel. Je t entends et je te l écris.",
                        "non in questo ciclo · controproposta · blocco · ti sento\nNon in questo ciclo. Ecco una controproposta. C è un blocco. Ti sento e ti scrivo.",
                        "nicht in diesem Zyklus · Gegenangebot · Freeze · ich höre dich\nNicht in diesem Zyklus. Hier ein Gegenangebot. Es gibt ein Freeze. Ich höre dich und schreibe nach."
                    ),
                    'itens' => [
                        dlinha('não neste ciclo', 'não neste ciclo', 'not this cycle', 'Not this cycle', 'no en este ciclo', 'No en este ciclo', 'pas ce cycle', 'Pas ce cycle', 'non in questo ciclo', 'Non in questo ciclo', 'nicht in diesem Zyklus', 'Nicht in diesem Zyklus'),
                        dlinha('contraoferta', 'aqui vai uma contraoferta', 'counter', 'Here is a counter', 'contraoferta', 'Aquí va una contraoferta', 'contre-offre', 'Voici une contre-offre', 'controproposta', 'Ecco una controproposta', 'Gegenangebot', 'Hier ein Gegenangebot'),
                        dlinha('congelamento', 'há um congelamento', 'freeze', 'There is a freeze', 'congelación', 'Hay congelación', 'gel', 'Il y a un gel', 'blocco', 'C è un blocco', 'Freeze', 'Es gibt ein Freeze'),
                        dlinha('eu te ouço', 'eu te ouço e escrevo depois', 'I hear you', 'I hear you and I will write', 'te escucho', 'Te escucho y te escribo', 'je t entends', 'Je t entends et je t écris', 'ti sento', 'Ti sento e ti scrivo', 'ich höre dich', 'Ich höre dich und schreibe nach'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Onboarding de colega B2',
            'desc' => 'Acesso, o mapa da equipe e o que não está no wiki.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O primeiro dia',
                    'teoria' => dteoria(
                        "access · buddy · wiki · shadow\nYour access should be live. I am your buddy. The wiki is outdated. Shadow me this week.",
                        "acceso · compañero · wiki · sombra\nTu acceso debería estar activo. Soy tu compañero. El wiki está desactualizado. Hazme sombra esta semana.",
                        "accès · binôme · wiki · ombre\nTon accès devrait être actif. Je suis ton binôme. Le wiki est périmé. Fais-moi de l ombre cette semaine.",
                        "accesso · buddy · wiki · ombra\nIl tuo accesso dovrebbe essere attivo. Sono il tuo buddy. Il wiki è vecchio. Fammi ombra questa settimana.",
                        "Zugang · Buddy · Wiki · Schatten\nDein Zugang sollte live sein. Ich bin dein Buddy. Das Wiki ist veraltet. Lauf diese Woche als Schatten mit."
                    ),
                    'itens' => [
                        dlinha('acesso', 'seu acesso já deveria estar ativo', 'access', 'Your access should be live', 'acceso', 'Tu acceso debería estar activo', 'accès', 'Ton accès devrait être actif', 'accesso', 'Il tuo accesso dovrebbe essere attivo', 'Zugang', 'Dein Zugang sollte live sein'),
                        dlinha('padrinho', 'eu sou seu padrinho esta semana', 'buddy', 'I am your buddy this week', 'compañero', 'Soy tu compañero esta semana', 'binôme', 'Je suis ton binôme cette semaine', 'buddy', 'Sono il tuo buddy questa settimana', 'Buddy', 'Ich bin dein Buddy diese Woche'),
                        dlinha('wiki', 'o wiki está desatualizado', 'wiki', 'The wiki is outdated', 'wiki', 'El wiki está desactualizado', 'wiki', 'Le wiki est périmé', 'wiki', 'Il wiki è vecchio', 'Wiki', 'Das Wiki ist veraltet'),
                        dlinha('fazer sombra', 'faça sombra comigo', 'shadow', 'Shadow me this week', 'sombra', 'Hazme sombra esta semana', 'ombre', 'Fais-moi de l ombre cette semaine', 'ombra', 'Fammi ombra questa settimana', 'Schatten', 'Lauf diese Woche als Schatten mit'),
                    ],
                ],
                [
                    'titulo' => 'O que não está escrito',
                    'teoria' => dteoria(
                        "unwritten · who to ping · do not surprise · slack channel\nThere are unwritten rules. Who to ping is here. Do not surprise the legal team. Use this slack channel.",
                        "no escrito · a quién avisar · no sorprender · canal\nHay reglas no escritas. A quién avisar está aquí. No sorprendas a legal. Usa este canal.",
                        "non écrit · qui pinguer · ne pas surprendre · canal\nIl y a des règles non écrites. Qui pinguer est ici. Ne surprends pas le juridique. Utilise ce canal.",
                        "non scritto · chi pingare · non sorprendere · canale\nCi sono regole non scritte. Chi pingare è qui. Non sorprendere il legale. Usa questo canale.",
                        "ungeschrieben · wen anpingen · nicht überraschen · Kanal\nEs gibt ungeschriebene Regeln. Wen du anpingst, steht hier. Überrasche Legal nicht. Nutze diesen Kanal."
                    ),
                    'itens' => [
                        dlinha('não escrito', 'há regras não escritas', 'unwritten', 'There are unwritten rules', 'no escrito', 'Hay reglas no escritas', 'non écrit', 'Il y a des règles non écrites', 'non scritto', 'Ci sono regole non scritte', 'ungeschrieben', 'Es gibt ungeschriebene Regeln'),
                        dlinha('quem avisar', 'aqui está quem avisar', 'who to ping', 'Here is who to ping', 'a quién avisar', 'Aquí está a quién avisar', 'qui pinguer', 'Voici qui pinguer', 'chi pingare', 'Ecco chi pingare', 'wen anpingen', 'Hier steht wen du anpingst'),
                        dlinha('não surpreenda', 'não surpreenda o jurídico', 'do not surprise', 'Do not surprise legal', 'no sorprender', 'No sorprendas a legal', 'ne pas surprendre', 'Ne surprends pas le juridique', 'non sorprendere', 'Non sorprendere il legale', 'nicht überraschen', 'Überrasche Legal nicht'),
                        dlinha('canal', 'use este canal', 'slack channel', 'Use this slack channel', 'canal', 'Usa este canal', 'canal', 'Utilise ce canal', 'canale', 'Usa questo canale', 'Kanal', 'Nutze diesen Kanal'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Pesquisa com usuário B2',
            'desc' => 'O roteiro, o viés do entrevistador e o recorte do achado.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O roteiro',
                    'teoria' => dteoria(
                        "prompt · think aloud · do not lead · probe\nRead the prompt. Think aloud. Do not lead the user. Probe once, then stop.",
                        "consigna · piensa en voz alta · no induzcas · profundiza\nLee la consigna. Piensa en voz alta. No induzcas. Profundiza una vez y para.",
                        "consigne · pense à voix haute · n induis pas · creuse\nLis la consigne. Pense à voix haute. N induis pas. Creuse une fois puis stop.",
                        "consegna · pensa ad alta voce · non indurre · approfondisci\nLeggi la consegna. Pensa ad alta voce. Non indurre. Approfondisci una volta e stop.",
                        "Prompt · laut denken · nicht führen · nachhaken\nLies den Prompt. Denk laut. Führ den Nutzer nicht. Hak einmal nach, dann stopp."
                    ),
                    'itens' => [
                        dlinha('consigna', 'leia a consigna em voz alta', 'prompt', 'Read the prompt aloud', 'consigna', 'Lee la consigna en voz alta', 'consigne', 'Lis la consigne à voix haute', 'consegna', 'Leggi la consegna ad alta voce', 'Prompt', 'Lies den Prompt laut'),
                        dlinha('pensar alto', 'pense alto enquanto usa', 'think aloud', 'Think aloud while you use it', 'piensa en voz alta', 'Piensa en voz alta mientras usas', 'pense à voix haute', 'Pense à voix haute en l utilisant', 'pensa ad alta voce', 'Pensa ad alta voce mentre usi', 'laut denken', 'Denk laut während du es nutzt'),
                        dlinha('não induza', 'não induza a resposta', 'do not lead', 'Do not lead the answer', 'no induzcas', 'No induzcas la respuesta', 'n induis pas', 'N induis pas la réponse', 'non indurre', 'Non indurre la risposta', 'nicht führen', 'Führ die Antwort nicht'),
                        dlinha('aprofundar', 'aprofunde uma vez só', 'probe', 'Probe once then stop', 'profundiza', 'Profundiza una vez y para', 'creuse', 'Creuse une fois puis stop', 'approfondisci', 'Approfondisci una volta e stop', 'nachhaken', 'Hak einmal nach dann stopp'),
                    ],
                ],
                [
                    'titulo' => 'O achado',
                    'teoria' => dteoria(
                        "insight · sample of one · theme · clip\nThis is an insight, not a sample of one. Group the theme. Keep the clip short.",
                        "hallazgo · muestra de uno · tema · clip\nEsto es un hallazgo, no una muestra de uno. Agrupa el tema. Deja el clip corto.",
                        "insight · échantillon de un · thème · clip\nC est un insight, pas un échantillon de un. Groupe le thème. Garde le clip court.",
                        "insight · campione di uno · tema · clip\nQuesto è un insight, non un campione di uno. Raggruppa il tema. Tieni il clip corto.",
                        "Insight · Stichprobe von eins · Thema · Clip\nDas ist ein Insight, keine Stichprobe von eins. Gruppiere das Thema. Halt den Clip kurz."
                    ),
                    'itens' => [
                        dlinha('achado', 'isto é um achado', 'insight', 'This is an insight', 'hallazgo', 'Esto es un hallazgo', 'insight', 'C est un insight', 'insight', 'Questo è un insight', 'Insight', 'Das ist ein Insight'),
                        dlinha('amostra de um', 'não é amostra de um', 'sample of one', 'It is not a sample of one', 'muestra de uno', 'No es una muestra de uno', 'échantillon de un', 'Ce n est pas un échantillon de un', 'campione di uno', 'Non è un campione di uno', 'Stichprobe von eins', 'Das ist keine Stichprobe von eins'),
                        dlinha('tema', 'agruppe pelo tema', 'theme', 'Group by theme', 'tema', 'Agrupa por tema', 'thème', 'Groupe par thème', 'tema', 'Raggruppa per tema', 'Thema', 'Gruppiere nach Thema'),
                        dlinha('trecho', 'o trecho tem de ser curto', 'clip', 'Keep the clip short', 'clip', 'Deja el clip corto', 'clip', 'Garde le clip court', 'clip', 'Tieni il clip corto', 'Clip', 'Halt den Clip kurz'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Relatório de incidente B2',
            'desc' => 'O que aconteceu, o impacto, o que já foi feito.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'Os fatos',
                    'teoria' => dteoria(
                        "incident · timeline · impact · workaround\nThe incident started at 9. Here is the timeline. The impact was checkout. The workaround is a retry.",
                        "incidente · cronología · impacto · apaño\nEl incidente empezó a las 9. Aquí va la cronología. El impacto fue el pago. El apaño es reintentar.",
                        "incident · chronologie · impact · contournement\nL incident a commencé à 9 h. Voici la chronologie. L impact était le paiement. Le contournement est de réessayer.",
                        "incidente · cronologia · impatto · workaround\nL incidente è iniziato alle 9. Ecco la cronologia. L impatto era il pagamento. Il workaround è riprovare.",
                        "Vorfall · Zeitlinie · Wirkung · Workaround\nDer Vorfall begann um 9. Hier die Zeitlinie. Die Wirkung war der Checkout. Der Workaround ist ein Retry."
                    ),
                    'itens' => [
                        dlinha('incidente', 'o incidente começou às nove', 'incident', 'The incident started at nine', 'incidente', 'El incidente empezó a las nueve', 'incident', 'L incident a commencé à neuf heures', 'incidente', 'L incidente è iniziato alle nove', 'Vorfall', 'Der Vorfall begann um neun'),
                        dlinha('linha do tempo', 'aqui está a linha do tempo', 'timeline', 'Here is the timeline', 'cronología', 'Aquí va la cronología', 'chronologie', 'Voici la chronologie', 'cronologia', 'Ecco la cronologia', 'Zeitlinie', 'Hier die Zeitlinie'),
                        dlinha('impacto', 'o impacto foi o checkout', 'impact', 'The impact was checkout', 'impacto', 'El impacto fue el pago', 'impact', 'L impact était le paiement', 'impatto', 'L impatto era il pagamento', 'Wirkung', 'Die Wirkung war der Checkout'),
                        dlinha('contorno', 'o contorno é tentar de novo', 'workaround', 'The workaround is a retry', 'apaño', 'El apaño es reintentar', 'contournement', 'Le contournement est de réessayer', 'workaround', 'Il workaround è riprovare', 'Workaround', 'Der Workaround ist ein Retry'),
                    ],
                ],
                [
                    'titulo' => 'O pós',
                    'teoria' => dteoria(
                        "root cause · action item · owner · follow-up\nThe root cause is still open. Each action item needs an owner. Follow-up is Friday.",
                        "causa raíz · acción · responsable · seguimiento\nLa causa raíz sigue abierta. Cada acción necesita un responsable. El seguimiento es el viernes.",
                        "cause racine · action · responsable · suivi\nLa cause racine est encore ouverte. Chaque action a besoin d un responsable. Le suivi est vendredi.",
                        "causa radice · azione · responsabile · follow-up\nLa causa radice è ancora aperta. Ogni azione ha bisogno di un responsabile. Il follow-up è venerdì.",
                        "Ursache · Maßnahme · Owner · Follow-up\nDie Ursache ist noch offen. Jede Maßnahme braucht einen Owner. Das Follow-up ist Freitag."
                    ),
                    'itens' => [
                        dlinha('causa raiz', 'a causa raiz ainda está aberta', 'root cause', 'The root cause is still open', 'causa raíz', 'La causa raíz sigue abierta', 'cause racine', 'La cause racine est encore ouverte', 'causa radice', 'La causa radice è ancora aperta', 'Ursache', 'Die Ursache ist noch offen'),
                        dlinha('ação', 'cada ação precisa de dono', 'action item', 'Each action item needs an owner', 'acción', 'Cada acción necesita un responsable', 'action', 'Chaque action a besoin d un responsable', 'azione', 'Ogni azione ha bisogno di un responsabile', 'Maßnahme', 'Jede Maßnahme braucht einen Owner'),
                        dlinha('dono', 'quem é o dono disto', 'owner', 'Who is the owner of this', 'responsable', 'Quién es el responsable de esto', 'responsable', 'Qui est responsable de ceci', 'responsabile', 'Chi è il responsabile di questo', 'Owner', 'Wer ist der Owner davon'),
                        dlinha('acompanhamento', 'o acompanhamento é sexta', 'follow-up', 'Follow-up is Friday', 'seguimiento', 'El seguimiento es el viernes', 'suivi', 'Le suivi est vendredi', 'follow-up', 'Il follow-up è venerdì', 'Follow-up', 'Das Follow-up ist Freitag'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Facilitar um workshop B2',
            'desc' => 'O tempo, o parking lot e quem fala demais.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A sala',
                    'teoria' => dteoria(
                        "timebox · parking lot · round robin · sticky\nThis is a timebox of ten. Parking lot is on the right. We will do a round robin. One sticky per idea.",
                        "caja de tiempo · parking · ronda · nota\nEsto es una caja de diez. El parking está a la derecha. Haremos una ronda. Una nota por idea.",
                        "timebox · parking · tour de table · post-it\nC est un timebox de dix. Le parking est à droite. On fait un tour de table. Un post-it par idée.",
                        "timebox · parking · giro di tavolo · sticky\nQuesto è un timebox di dieci. Il parking è a destra. Facciamo un giro di tavolo. Uno sticky per idea.",
                        "Timebox · Parkplatz · Reihum · Klebezettel\nDas ist eine Timebox von zehn. Der Parkplatz ist rechts. Wir machen Reihum. Ein Zettel pro Idee."
                    ),
                    'itens' => [
                        dlinha('caixa de tempo', 'isto é uma caixa de dez minutos', 'timebox', 'This is a ten-minute timebox', 'caja de tiempo', 'Esto es una caja de diez minutos', 'timebox', 'C est un timebox de dix minutes', 'timebox', 'Questo è un timebox di dieci minuti', 'Timebox', 'Das ist eine Timebox von zehn Minuten'),
                        dlinha('estacionamento de ideias', 'o estacionamento fica à direita', 'parking lot', 'The parking lot is on the right', 'parking', 'El parking está a la derecha', 'parking', 'Le parking est à droite', 'parking', 'Il parking è a destra', 'Parkplatz', 'Der Parkplatz ist rechts'),
                        dlinha('rodada', 'vamos fazer uma rodada', 'round robin', 'We will do a round robin', 'ronda', 'Haremos una ronda', 'tour de table', 'On fait un tour de table', 'giro di tavolo', 'Facciamo un giro di tavolo', 'Reihum', 'Wir machen Reihum'),
                        dlinha('adesivo', 'um adesivo por ideia', 'sticky', 'One sticky per idea', 'nota', 'Una nota por idea', 'post-it', 'Un post-it par idée', 'sticky', 'Uno sticky per idea', 'Klebezettel', 'Ein Zettel pro Idee'),
                    ],
                ],
                [
                    'titulo' => 'Quem fala demais',
                    'teoria' => dteoria(
                        "hold that · let others in · we are over · capture\nHold that thought. Let others in. We are over time. I will capture it on the board.",
                        "guarda eso · deja entrar a otros · nos pasamos · capturo\nGuarda eso. Deja entrar a otros. Nos pasamos de tiempo. Lo capturo en el tablero.",
                        "garde ça · laisse les autres · on a dépassé · je note\nGarde ça. Laisse les autres. On a dépassé. Je le note au tableau.",
                        "tieni quello · lascia entrare gli altri · siamo oltre · catturo\nTieni quello. Lascia entrare gli altri. Siamo oltre. Lo catturo sulla lavagna.",
                        "halt das · lass andere rein · wir sind drüber · ich halte fest\nHalt den Gedanken. Lass andere rein. Wir sind drüber. Ich halte es am Board fest."
                    ),
                    'itens' => [
                        dlinha('segura isso', 'segura esse pensamento', 'hold that', 'Hold that thought', 'guarda eso', 'Guarda ese pensamiento', 'garde ça', 'Garde cette idée', 'tieni quello', 'Tieni quel pensiero', 'halt das', 'Halt den Gedanken'),
                        dlinha('deixe os outros', 'deixe os outros falarem', 'let others in', 'Let others in', 'deja entrar a otros', 'Deja entrar a otros', 'laisse les autres', 'Laisse les autres', 'lascia entrare gli altri', 'Lascia entrare gli altri', 'lass andere rein', 'Lass andere rein'),
                        dlinha('passamos do tempo', 'passamos do tempo', 'we are over', 'We are over time', 'nos pasamos', 'Nos pasamos de tiempo', 'on a dépassé', 'On a dépassé', 'siamo oltre', 'Siamo oltre', 'wir sind drüber', 'Wir sind drüber'),
                        dlinha('capturar', 'vou capturar no quadro', 'capture', 'I will capture it on the board', 'capturo', 'Lo capturo en el tablero', 'je note', 'Je le note au tableau', 'catturo', 'Lo catturo sulla lavagna', 'ich halte fest', 'Ich halte es am Board fest'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Networking no evento B2',
            'desc' => 'A abertura, o cartão e a saída sem ser rude.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A abertura',
                    'teoria' => dteoria(
                        "what brings you · I work on · name tag · small talk\nWhat brings you here? I work on payments. Nice name tag. Let us keep the small talk short.",
                        "qué te trae · trabajo en · credencial · charla\n¿Qué te trae? Trabajo en pagos. Buena credencial. Dejemos la charla corta.",
                        "qu est-ce qui t amène · je travaille sur · badge · small talk\nQu est-ce qui t amène ? Je travaille sur les paiements. Beau badge. Gardons le small talk court.",
                        "cosa ti porta · lavoro su · badge · small talk\nCosa ti porta qui? Lavoro sui pagamenti. Bel badge. Teniamo lo small talk corto.",
                        "was führt dich · ich arbeite an · Namensschild · Smalltalk\nWas führt dich her? Ich arbeite an Payments. Schönes Namensschild. Halt den Smalltalk kurz."
                    ),
                    'itens' => [
                        dlinha('o que te traz', 'o que te traz aqui', 'what brings you', 'What brings you here', 'qué te trae', 'Qué te trae aquí', 'qu est-ce qui t amène', 'Qu est-ce qui t amène ici', 'cosa ti porta', 'Cosa ti porta qui', 'was führt dich', 'Was führt dich her'),
                        dlinha('trabalho em', 'trabalho em pagamentos', 'I work on', 'I work on payments', 'trabajo en', 'Trabajo en pagos', 'je travaille sur', 'Je travaille sur les paiements', 'lavoro su', 'Lavoro sui pagamenti', 'ich arbeite an', 'Ich arbeite an Payments'),
                        dlinha('crachá', 'legal o crachá', 'name tag', 'Nice name tag', 'credencial', 'Buena credencial', 'badge', 'Beau badge', 'badge', 'Bel badge', 'Namensschild', 'Schönes Namensschild'),
                        dlinha('conversa fiada', 'a conversa fiada curta', 'small talk', 'Keep the small talk short', 'charla', 'Deja la charla corta', 'small talk', 'Garde le small talk court', 'small talk', 'Tieni lo small talk corto', 'Smalltalk', 'Halt den Smalltalk kurz'),
                    ],
                ],
                [
                    'titulo' => 'A saída',
                    'teoria' => dteoria(
                        "I should let you · card · follow up · enjoy the rest\nI should let you circulate. Here is my card. I will follow up. Enjoy the rest of the day.",
                        "te dejo · tarjeta · te escribo · disfruta el resto\nTe dejo circular. Aquí va mi tarjeta. Te escribo. Disfruta el resto del día.",
                        "je te laisse · carte · je te relance · bonne suite\nJe te laisse circuler. Voici ma carte. Je te relance. Bonne suite.",
                        "ti lascio · biglietto · ti scrivo · buona continuazione\nTi lascio circolare. Ecco il mio biglietto. Ti scrivo. Buona continuazione.",
                        "ich lass dich · Karte · ich melde mich · schönen Rest\nIch lass dich zirkulieren. Hier meine Karte. Ich melde mich. Schönen Rest des Tages."
                    ),
                    'itens' => [
                        dlinha('te deixo', 'te deixo circular', 'I should let you', 'I should let you circulate', 'te dejo', 'Te dejo circular', 'je te laisse', 'Je te laisse circuler', 'ti lascio', 'Ti lascio circolare', 'ich lass dich', 'Ich lass dich zirkulieren'),
                        dlinha('cartão', 'aqui está o meu cartão', 'card', 'Here is my card', 'tarjeta', 'Aquí va mi tarjeta', 'carte', 'Voici ma carte', 'biglietto', 'Ecco il mio biglietto', 'Karte', 'Hier meine Karte'),
                        dlinha('retorno', 'eu retorno por e-mail', 'follow up', 'I will follow up by email', 'te escribo', 'Te escribo por correo', 'je te relance', 'Je te relance par mail', 'ti scrivo', 'Ti scrivo per email', 'ich melde mich', 'Ich melde mich per Mail'),
                        dlinha('aproveite o resto', 'aproveite o resto do dia', 'enjoy the rest', 'Enjoy the rest of the day', 'disfruta el resto', 'Disfruta el resto del día', 'bonne suite', 'Bonne suite', 'buona continuazione', 'Buona continuazione', 'schönen Rest', 'Schönen Rest des Tages'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Escolher fornecedor B2',
            'desc' => 'Critério, risco, o preço escondido e a decisão.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'A grade',
                    'teoria' => dteoria(
                        "criterion · shortlist · hidden cost · lock-in\nThe main criterion is support. We have a shortlist of three. Watch the hidden cost. Lock-in is a risk.",
                        "criterio · lista corta · costo oculto · encierro\nEl criterio principal es el soporte. Hay una lista corta de tres. Cuidado con el costo oculto. El encierro es un riesgo.",
                        "critère · shortlist · coût caché · enfermement\nLe critère principal est le support. On a une shortlist de trois. Attention au coût caché. L enfermement est un risque.",
                        "criterio · shortlist · costo nascosto · lock-in\nIl criterio principale è il supporto. Abbiamo una shortlist di tre. Attenti al costo nascosto. Il lock-in è un rischio.",
                        "Kriterium · Shortlist · versteckte Kosten · Lock-in\nDas Hauptkriterium ist Support. Wir haben eine Shortlist von drei. Achte auf versteckte Kosten. Lock-in ist ein Risiko."
                    ),
                    'itens' => [
                        dlinha('critério', 'o critério principal é o suporte', 'criterion', 'The main criterion is support', 'criterio', 'El criterio principal es el soporte', 'critère', 'Le critère principal est le support', 'criterio', 'Il criterio principale è il supporto', 'Kriterium', 'Das Hauptkriterium ist Support'),
                        dlinha('lista curta', 'a lista curta tem três', 'shortlist', 'The shortlist has three', 'lista corta', 'La lista corta tiene tres', 'shortlist', 'La shortlist en a trois', 'shortlist', 'La shortlist ne ha tre', 'Shortlist', 'Die Shortlist hat drei'),
                        dlinha('custo escondido', 'cuidado com o custo escondido', 'hidden cost', 'Watch the hidden cost', 'costo oculto', 'Cuidado con el costo oculto', 'coût caché', 'Attention au coût caché', 'costo nascosto', 'Attenti al costo nascosto', 'versteckte Kosten', 'Achte auf versteckte Kosten'),
                        dlinha('aprisionamento', 'o aprisionamento é um risco', 'lock-in', 'Lock-in is a risk', 'encierro', 'El encierro es un riesgo', 'enfermement', 'L enfermement est un risque', 'lock-in', 'Il lock-in è un rischio', 'Lock-in', 'Lock-in ist ein Risiko'),
                    ],
                ],
                [
                    'titulo' => 'A decisão',
                    'teoria' => dteoria(
                        "we go with · fallback · reference call · score\nWe go with B. Keep A as fallback. I still want a reference call. Here is the score.",
                        "vamos con · reserva · llamada de referencia · puntaje\nVamos con B. Dejamos A de reserva. Aún quiero una llamada de referencia. Aquí está el puntaje.",
                        "on part avec · repli · appel de référence · score\nOn part avec B. On garde A en repli. Je veux encore un appel de référence. Voici le score.",
                        "andiamo con · riserva · chiamata di riferimento · punteggio\nAndiamo con B. Teniamo A di riserva. Voglio ancora una chiamata di riferimento. Ecco il punteggio.",
                        "wir gehen mit · Fallback · Referenzanruf · Score\nWir gehen mit B. A bleibt Fallback. Ich will noch einen Referenzanruf. Hier der Score."
                    ),
                    'itens' => [
                        dlinha('vamos com', 'vamos com o B', 'we go with', 'We go with B', 'vamos con', 'Vamos con B', 'on part avec', 'On part avec B', 'andiamo con', 'Andiamo con B', 'wir gehen mit', 'Wir gehen mit B'),
                        dlinha('reserva', 'o A fica de reserva', 'fallback', 'Keep A as fallback', 'reserva', 'Dejamos A de reserva', 'repli', 'On garde A en repli', 'riserva', 'Teniamo A di riserva', 'Fallback', 'A bleibt Fallback'),
                        dlinha('ligação de referência', 'quero uma ligação de referência', 'reference call', 'I want a reference call', 'llamada de referencia', 'Quiero una llamada de referencia', 'appel de référence', 'Je veux un appel de référence', 'chiamata di riferimento', 'Voglio una chiamata di riferimento', 'Referenzanruf', 'Ich will einen Referenzanruf'),
                        dlinha('nota', 'aqui está a nota', 'score', 'Here is the score', 'puntaje', 'Aquí está el puntaje', 'score', 'Voici le score', 'punteggio', 'Ecco il punteggio', 'Score', 'Hier der Score'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Recusar convite de trabalho B2',
            'desc' => 'Agradecer, o motivo curto e deixar a porta entreaberta.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O não',
                    'teoria' => dteoria(
                        "thank you for thinking of me · I must decline · timing · I remain\nThank you for thinking of me. I must decline. The timing is off. I remain interested later.",
                        "gracias por pensarme · debo declinar · momento · sigo\nGracias por pensarme. Debo declinar. El momento no es. Sigo interesado más adelante.",
                        "merci d avoir pensé à moi · je dois décliner · moment · je reste\nMerci d avoir pensé à moi. Je dois décliner. Le moment n est pas le bon. Je reste intéressé plus tard.",
                        "grazie per aver pensato a me · devo declinare · momento · resto\nGrazie per aver pensato a me. Devo declinare. Il momento non è. Resto interessato più avanti.",
                        "danke dass ihr an mich denkt · ich muss ablehnen · Zeitpunkt · ich bleibe\nDanke, dass ihr an mich denkt. Ich muss ablehnen. Der Zeitpunkt sitzt nicht. Ich bleibe später interessiert."
                    ),
                    'itens' => [
                        dlinha('obrigado por pensar em mim', 'obrigado por pensar em mim', 'thank you for thinking of me', 'Thank you for thinking of me', 'gracias por pensarme', 'Gracias por pensarme', 'merci d avoir pensé à moi', 'Merci d avoir pensé à moi', 'grazie per aver pensato a me', 'Grazie per aver pensato a me', 'danke dass ihr an mich denkt', 'Danke dass ihr an mich denkt'),
                        dlinha('preciso recusar', 'preciso recusar', 'I must decline', 'I must decline', 'debo declinar', 'Debo declinar', 'je dois décliner', 'Je dois décliner', 'devo declinare', 'Devo declinare', 'ich muss ablehnen', 'Ich muss ablehnen'),
                        dlinha('o momento', 'o momento não é este', 'timing', 'The timing is off', 'momento', 'El momento no es', 'moment', 'Le moment n est pas le bon', 'momento', 'Il momento non è', 'Zeitpunkt', 'Der Zeitpunkt sitzt nicht'),
                        dlinha('sigo interessado', 'sigo interessado depois', 'I remain', 'I remain interested later', 'sigo', 'Sigo interesado más adelante', 'je reste', 'Je reste intéressé plus tard', 'resto', 'Resto interessato più avanti', 'ich bleibe', 'Ich bleibe später interessiert'),
                    ],
                ],
                [
                    'titulo' => 'A porta',
                    'teoria' => dteoria(
                        "keep in touch · someone else · no hard feelings · all the best\nLet us keep in touch. I can suggest someone else. No hard feelings. All the best with the search.",
                        "sigamos en contacto · otra persona · sin rencor · mucho éxito\nSigamos en contacto. Puedo sugerir a otra persona. Sin rencor. Mucho éxito con la búsqueda.",
                        "restons en contact · quelqu un d autre · sans rancune · bonne chance\nRestons en contact. Je peux suggérer quelqu un d autre. Sans rancune. Bonne chance pour la recherche.",
                        "restiamo in contatto · qualcun altro · senza rancore · in bocca al lupo\nRestiamo in contatto. Posso suggerire qualcun altro. Senza rancore. In bocca al lupo per la ricerca.",
                        "in Kontakt bleiben · jemand anderes · kein Groll · alles Gute\nLass uns in Kontakt bleiben. Ich kann jemand anderen vorschlagen. Kein Groll. Alles Gute bei der Suche."
                    ),
                    'itens' => [
                        dlinha('ficar em contato', 'vamos ficar em contato', 'keep in touch', 'Let us keep in touch', 'sigamos en contacto', 'Sigamos en contacto', 'restons en contact', 'Restons en contact', 'restiamo in contatto', 'Restiamo in contatto', 'in Kontakt bleiben', 'Lass uns in Kontakt bleiben'),
                        dlinha('outra pessoa', 'posso indicar outra pessoa', 'someone else', 'I can suggest someone else', 'otra persona', 'Puedo sugerir a otra persona', 'quelqu un d autre', 'Je peux suggérer quelqu un d autre', 'qualcun altro', 'Posso suggerire qualcun altro', 'jemand anderes', 'Ich kann jemand anderen vorschlagen'),
                        dlinha('sem mágoa', 'sem mágoa', 'no hard feelings', 'No hard feelings', 'sin rencor', 'Sin rencor', 'sans rancune', 'Sans rancune', 'senza rancore', 'Senza rancore', 'kein Groll', 'Kein Groll'),
                        dlinha('tudo de bom', 'tudo de bom na busca', 'all the best', 'All the best with the search', 'mucho éxito', 'Mucho éxito con la búsqueda', 'bonne chance', 'Bonne chance pour la recherche', 'in bocca al lupo', 'In bocca al lupo per la ricerca', 'alles Gute', 'Alles Gute bei der Suche'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Orçamento da equipe B2',
            'desc' => 'O teto, o que corta e o que não se toca.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O teto',
                    'teoria' => dteoria(
                        "cap · burn · forecast · buffer\nThe cap is tight. Watch the burn. The forecast slipped. Keep a buffer.",
                        "techo · quema · previsión · colchón\nEl techo está justo. Mira la quema. La previsión se movió. Deja un colchón.",
                        "plafond · burn · prévision · matelas\nLe plafond est serré. Surveille le burn. La prévision a glissé. Garde un matelas.",
                        "tetto · burn · previsione · cuscinetto\nIl tetto è stretto. Guarda il burn. La previsione è slittata. Tieni un cuscinetto.",
                        "Deckel · Burn · Forecast · Puffer\nDer Deckel ist eng. Achte auf den Burn. Der Forecast ist gerutscht. Halt einen Puffer."
                    ),
                    'itens' => [
                        dlinha('teto', 'o teto está apertado', 'cap', 'The cap is tight', 'techo', 'El techo está justo', 'plafond', 'Le plafond est serré', 'tetto', 'Il tetto è stretto', 'Deckel', 'Der Deckel ist eng'),
                        dlinha('queima', 'olhe a queima mensal', 'burn', 'Watch the monthly burn', 'quema', 'Mira la quema mensual', 'burn', 'Surveille le burn mensuel', 'burn', 'Guarda il burn mensile', 'Burn', 'Achte auf den monatlichen Burn'),
                        dlinha('previsão', 'a previsão escorregou', 'forecast', 'The forecast slipped', 'previsión', 'La previsión se movió', 'prévision', 'La prévision a glissé', 'previsione', 'La previsione è slittata', 'Forecast', 'Der Forecast ist gerutscht'),
                        dlinha('colchão', 'deixe um colchão', 'buffer', 'Keep a buffer', 'colchón', 'Deja un colchón', 'matelas', 'Garde un matelas', 'cuscinetto', 'Tieni un cuscinetto', 'Puffer', 'Halt einen Puffer'),
                    ],
                ],
                [
                    'titulo' => 'O que corta',
                    'teoria' => dteoria(
                        "cut · sacred · defer · headcount\nWe cut travel. Headcount is sacred this year. Defer the tool. Do not touch training.",
                        "cortar · sagrado · aplazar · plantilla\nCortamos viajes. La plantilla es sagrada este año. Aplazamos la herramienta. No toques formación.",
                        "couper · sacré · reporter · effectif\nOn coupe les voyages. L effectif est sacré cette année. On reporte l outil. Ne touche pas à la formation.",
                        "tagliare · sacro · rinviare · organico\nTagliamo i viaggi. L organico è sacro quest anno. Rinviamo lo strumento. Non toccare la formazione.",
                        "streichen · heilig · verschieben · Stellen\nWir streichen Reisen. Stellen sind dieses Jahr heilig. Schieb das Tool. Fass die Weiterbildung nicht an."
                    ),
                    'itens' => [
                        dlinha('cortar', 'cortamos viagem', 'cut', 'We cut travel', 'cortar', 'Cortamos viajes', 'couper', 'On coupe les voyages', 'tagliare', 'Tagliamo i viaggi', 'streichen', 'Wir streichen Reisen'),
                        dlinha('sagrado', 'o quadro é sagrado este ano', 'sacred', 'Headcount is sacred this year', 'sagrado', 'La plantilla es sagrada este año', 'sacré', 'L effectif est sacré cette année', 'sacro', 'L organico è sacro quest anno', 'heilig', 'Stellen sind dieses Jahr heilig'),
                        dlinha('adiar', 'adiamos a ferramenta', 'defer', 'Defer the tool', 'aplazar', 'Aplazamos la herramienta', 'reporter', 'On reporte l outil', 'rinviare', 'Rinviamo lo strumento', 'verschieben', 'Schieb das Tool'),
                        dlinha('quadro de pessoas', 'não mexa no quadro de pessoas', 'headcount', 'Do not touch headcount', 'plantilla', 'No toques la plantilla', 'effectif', 'Ne touche pas à l effectif', 'organico', 'Non toccare l organico', 'Stellen', 'Fass die Stellen nicht an'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Mentoria reversa B2',
            'desc' => 'O júnior ensina, o sênior escuta, o combinado de respeito.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O combinado',
                    'teoria' => dteoria(
                        "reverse mentoring · you teach · I listen · no rank in the room\nThis is reverse mentoring. You teach, I listen. There is no rank in the room.",
                        "mentoría inversa · tú enseñas · yo escucho · sin rango en la sala\nEsto es mentoría inversa. Tú enseñas, yo escucho. No hay rango en la sala.",
                        "mentorat inversé · tu enseignes · j écoute · pas de grade dans la pièce\nC est un mentorat inversé. Tu enseignes, j écoute. Pas de grade dans la pièce.",
                        "mentorship inversa · tu insegni · io ascolto · niente grado in sala\nQuesta è mentorship inversa. Tu insegni, io ascolto. Niente grado in sala.",
                        "Reverse Mentoring · du lehrst · ich höre · kein Rang im Raum\nDas ist Reverse Mentoring. Du lehrst, ich höre. Kein Rang im Raum."
                    ),
                    'itens' => [
                        dlinha('mentoria reversa', 'isto é mentoria reversa', 'reverse mentoring', 'This is reverse mentoring', 'mentoría inversa', 'Esto es mentoría inversa', 'mentorat inversé', 'C est un mentorat inversé', 'mentorship inversa', 'Questa è mentorship inversa', 'Reverse Mentoring', 'Das ist Reverse Mentoring'),
                        dlinha('você ensina', 'você ensina nesta hora', 'you teach', 'You teach in this hour', 'tú enseñas', 'Tú enseñas en esta hora', 'tu enseignes', 'Tu enseignes à cette heure', 'tu insegni', 'Tu insegni in quest ora', 'du lehrst', 'Du lehrst in dieser Stunde'),
                        dlinha('eu escuto', 'eu escuto sem cortar', 'I listen', 'I listen without cutting in', 'yo escucho', 'Yo escucho sin cortar', 'j écoute', 'J écoute sans couper', 'io ascolto', 'Io ascolto senza tagliare', 'ich höre', 'Ich höre ohne dazwischenzugehen'),
                        dlinha('sem hierarquia', 'não há hierarquia nesta sala', 'no rank in the room', 'There is no rank in the room', 'sin rango en la sala', 'No hay rango en la sala', 'pas de grade dans la pièce', 'Pas de grade dans la pièce', 'niente grado in sala', 'Niente grado in sala', 'kein Rang im Raum', 'Kein Rang im Raum'),
                    ],
                ],
                [
                    'titulo' => 'O que o sênior não faz',
                    'teoria' => dteoria(
                        "do not hijack · I used to · that is new to me · I will try\nDo not hijack the session. Skip I used to. Say that is new to me. I will try it this week.",
                        "no secuestres · yo solía · eso es nuevo · lo voy a probar\nNo secuestres la sesión. Salta el yo solía. Di que eso es nuevo. Lo voy a probar esta semana.",
                        "ne kidnappe pas · je faisais · c est nouveau · je vais essayer\nNe kidnappe pas la séance. Laisse tomber le je faisais. Dis que c est nouveau. Je vais essayer cette semaine.",
                        "non dirottare · io solevo · è nuovo · lo provo\nNon dirottare la sessione. Salta l io solevo. Di che è nuovo. Lo provo questa settimana.",
                        "nicht kapern · früher habe ich · das ist neu · ich probiere\nKaper die Sitzung nicht. Lass das früher habe ich. Sag das ist neu. Ich probiere es diese Woche."
                    ),
                    'itens' => [
                        dlinha('não sequestre', 'não sequestre a sessão', 'do not hijack', 'Do not hijack the session', 'no secuestres', 'No secuestres la sesión', 'ne kidnappe pas', 'Ne kidnappe pas la séance', 'non dirottare', 'Non dirottare la sessione', 'nicht kapern', 'Kaper die Sitzung nicht'),
                        dlinha('eu costumava', 'pule o eu costumava', 'I used to', 'Skip I used to', 'yo solía', 'Salta el yo solía', 'je faisais', 'Laisse tomber le je faisais', 'io solevo', 'Salta l io solevo', 'früher habe ich', 'Lass das früher habe ich'),
                        dlinha('isso é novo', 'isso é novo para mim', 'that is new to me', 'That is new to me', 'eso es nuevo', 'Eso es nuevo para mí', 'c est nouveau', 'C est nouveau pour moi', 'è nuovo', 'È nuovo per me', 'das ist neu', 'Das ist neu für mich'),
                        dlinha('vou tentar', 'vou tentar nesta semana', 'I will try', 'I will try it this week', 'lo voy a probar', 'Lo voy a probar esta semana', 'je vais essayer', 'Je vais essayer cette semaine', 'lo provo', 'Lo provo questa settimana', 'ich probiere', 'Ich probiere es diese Woche'),
                    ],
                ],
            ],
        ],
    ];
}
