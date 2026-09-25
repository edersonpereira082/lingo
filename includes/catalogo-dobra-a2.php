<?php

function dobra_a2(): array
{
    return [
        [
            'titulo' => 'Aluguel e contas',
            'desc' => 'Contrato, locador, luz e internet da casa.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'O contrato',
                    'teoria' => dteoria(
                        "rent · landlord · deposit · lease\nThe rent is due on the fifth. I paid the deposit.",
                        "alquiler · casero · fianza · contrato\nEl alquiler se paga el cinco. Pagué la fianza.",
                        "loyer · propriétaire · caution · bail\nLe loyer est dû le cinq. J’ai versé la caution.",
                        "affitto · proprietario · cauzione · contratto\nL’affitto scade il cinque. Ho pagato la cauzione.",
                        "Miete · Vermieter · Kaution · Mietvertrag\nDie Miete ist am Fünften fällig. Ich zahlte die Kaution."
                    ),
                    'itens' => [
                        dlinha('aluguel', 'o aluguel vence no dia cinco', 'rent', 'The rent is due on the fifth', 'alquiler', 'El alquiler se paga el cinco', 'loyer', 'Le loyer est dû le cinq', 'affitto', 'L affitto scade il cinque', 'Miete', 'Die Miete ist am Fünften fällig'),
                        dlinha('locador', 'liguei para o locador', 'landlord', 'I called the landlord', 'casero', 'Llamé al casero', 'propriétaire', 'J ai appelé le propriétaire', 'proprietario', 'Ho chiamato il proprietario', 'Vermieter', 'Ich habe den Vermieter angerufen'),
                        dlinha('caução', 'paguei a caução', 'deposit', 'I paid the deposit', 'fianza', 'Pagué la fianza', 'caution', 'J ai versé la caution', 'cauzione', 'Ho pagato la cauzione', 'Kaution', 'Ich zahlte die Kaution'),
                        dlinha('contrato', 'assine o contrato', 'lease', 'Sign the lease', 'contrato', 'Firma el contrato', 'bail', 'Signez le bail', 'contratto', 'Firma il contratto', 'Mietvertrag', 'Unterschreiben Sie den Mietvertrag'),
                    ],
                ],
                [
                    'titulo' => 'As contas da casa',
                    'teoria' => dteoria(
                        "bill · electricity · water · included\nIs water included? The electricity bill is high.",
                        "factura · luz · agua · incluido\n¿El agua está incluida? La factura de la luz es alta.",
                        "facture · électricité · eau · compris\nL’eau est comprise ? La facture d’électricité est élevée.",
                        "bolletta · luce · acqua · incluso\nL’acqua è inclusa? La bolletta della luce è alta.",
                        "Rechnung · Strom · Wasser · inklusive\nIst Wasser inklusive? Die Stromrechnung ist hoch."
                    ),
                    'itens' => [
                        dlinha('conta / fatura', 'a conta chegou ontem', 'bill', 'The bill arrived yesterday', 'factura', 'La factura llegó ayer', 'facture', 'La facture est arrivée hier', 'bolletta', 'La bolletta è arrivata ieri', 'Rechnung', 'Die Rechnung kam gestern'),
                        dlinha('luz / energia', 'a conta de luz está alta', 'electricity', 'The electricity bill is high', 'luz', 'La factura de la luz es alta', 'électricité', 'La facture d électricité est élevée', 'luce', 'La bolletta della luce è alta', 'Strom', 'Die Stromrechnung ist hoch'),
                        dlinha('água', 'a água está inclusa', 'water', 'Is water included', 'agua', 'El agua está incluida', 'eau', 'L eau est comprise', 'acqua', 'L acqua è inclusa', 'Wasser', 'Ist Wasser inklusive'),
                        dlinha('incluso', 'internet não está incluso', 'included', 'Internet is not included', 'incluido', 'Internet no está incluido', 'compris', 'Internet n est pas compris', 'incluso', 'Internet non è incluso', 'inklusive', 'Internet ist nicht inklusive'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Correio e encomenda',
            'desc' => 'Enviar, rastrear e retirar uma encomenda.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Enviar',
                    'teoria' => dteoria(
                        "parcel · stamp · post office · track\nI send a parcel. Where is the post office?",
                        "paquete · sello · correos · rastrear\nEnvío un paquete. ¿Dónde está correos?",
                        "colis · timbre · poste · suivre\nJ’envoie un colis. Où est la poste ?",
                        "pacco · francobollo · poste · tracciare\nSpedisco un pacco. Dov’è l’ufficio postale?",
                        "Paket · Briefmarke · Post · verfolgen\nIch schicke ein Paket. Wo ist die Post?"
                    ),
                    'itens' => [
                        dlinha('encomenda', 'envio uma encomenda', 'parcel', 'I send a parcel', 'paquete', 'Envío un paquete', 'colis', 'J envoie un colis', 'pacco', 'Spedisco un pacco', 'Paket', 'Ich schicke ein Paket'),
                        dlinha('selo', 'preciso de um selo', 'stamp', 'I need a stamp', 'sello', 'Necesito un sello', 'timbre', 'J ai besoin d un timbre', 'francobollo', 'Mi serve un francobollo', 'Briefmarke', 'Ich brauche eine Briefmarke'),
                        dlinha('correios', 'os correios fecham às cinco', 'post office', 'The post office closes at five', 'correos', 'Correos cierra a las cinco', 'poste', 'La poste ferme à dix-sept heures', 'poste', 'Le poste chiudono alle cinque', 'Post', 'Die Post schließt um fünf'),
                        dlinha('rastrear', 'posso rastrear o pacote', 'track', 'I can track the parcel', 'rastrear', 'Puedo rastrear el paquete', 'suivre', 'Je peux suivre le colis', 'tracciare', 'Posso tracciare il pacco', 'verfolgen', 'Ich kann das Paket verfolgen'),
                    ],
                ],
                [
                    'titulo' => 'Retirar',
                    'teoria' => dteoria(
                        "pick up · notice · signature · delayed\nThere is a notice. Please sign here.",
                        "recoger · aviso · firma · retraso\nHay un aviso. Firme aquí, por favor.",
                        "retirer · avis · signature · retard\nIl y a un avis. Signez ici, s’il vous plaît.",
                        "ritirare · avviso · firma · ritardo\nC’è un avviso. Firmi qui, per favore.",
                        "abholen · Zettel · Unterschrift · Verspätung\nEs gibt einen Zettel. Bitte hier unterschreiben."
                    ),
                    'itens' => [
                        dlinha('retirar', 'retiro a encomenda hoje', 'pick up', 'I pick up the parcel today', 'recoger', 'Recojo el paquete hoy', 'retirer', 'Je retire le colis aujourd hui', 'ritirare', 'Ritiro il pacco oggi', 'abholen', 'Ich hole das Paket heute ab'),
                        dlinha('aviso', 'há um aviso na porta', 'notice', 'There is a notice on the door', 'aviso', 'Hay un aviso en la puerta', 'avis', 'Il y a un avis sur la porte', 'avviso', 'C è un avviso sulla porta', 'Zettel', 'Es gibt einen Zettel an der Tür'),
                        dlinha('assinatura', 'assine aqui por favor', 'signature', 'Please sign here', 'firma', 'Firme aquí por favor', 'signature', 'Signez ici s il vous plaît', 'firma', 'Firmi qui per favore', 'Unterschrift', 'Bitte hier unterschreiben'),
                        dlinha('atrasada', 'a encomenda está atrasada', 'delayed', 'The parcel is delayed', 'retraso', 'El paquete tiene retraso', 'retard', 'Le colis a du retard', 'ritardo', 'Il pacco è in ritardo', 'Verspätung', 'Das Paket hat Verspätung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Na academia',
            'desc' => 'Treino, matrícula e combinados de horário.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'O treino',
                    'teoria' => dteoria(
                        "gym · membership · trainer · stretch\nI start a gym membership. Stretch after the class.",
                        "gimnasio · cuota · entrenador · estirar\nEmpiezo en el gimnasio. Estira después de la clase.",
                        "salle · abonnement · coach · étirer\nJe prends un abonnement. Étire-toi après le cours.",
                        "palestra · abbonamento · istruttore · allungare\nFaccio un abbonamento. Allunga dopo il corso.",
                        "Fitnessstudio · Mitgliedschaft · Trainer · dehnen\nIch werde Mitglied. Dehne dich nach dem Kurs."
                    ),
                    'itens' => [
                        dlinha('academia', 'a academia abre às seis', 'gym', 'The gym opens at six', 'gimnasio', 'El gimnasio abre a las seis', 'salle', 'La salle ouvre à six heures', 'palestra', 'La palestra apre alle sei', 'Fitnessstudio', 'Das Studio öffnet um sechs'),
                        dlinha('mensalidade', 'a mensalidade é cara', 'membership', 'The membership is expensive', 'cuota', 'La cuota es cara', 'abonnement', 'L abonnement est cher', 'abbonamento', 'L abbonamento è caro', 'Mitgliedschaft', 'Die Mitgliedschaft ist teuer'),
                        dlinha('treinador', 'o treinador explica o exercício', 'trainer', 'The trainer explains the exercise', 'entrenador', 'El entrenador explica el ejercicio', 'coach', 'Le coach explique l exercice', 'istruttore', 'L istruttore spiega l esercizio', 'Trainer', 'Der Trainer erklärt die Übung'),
                        dlinha('alongar', 'alongue depois da aula', 'stretch', 'Stretch after the class', 'estirar', 'Estira después de la clase', 'étirer', 'Étire-toi après le cours', 'allungare', 'Allunga dopo il corso', 'dehnen', 'Dehne dich nach dem Kurs'),
                    ],
                ],
                [
                    'titulo' => 'Marcar aula',
                    'teoria' => dteoria(
                        "class · crowded · book · cancel\nThe evening class is crowded. I book a morning slot.",
                        "clase · lleno · reservar · cancelar\nLa clase de la tarde está llena. Reservo por la mañana.",
                        "cours · bondé · réserver · annuler\nLe cours du soir est bondé. Je réserve le matin.",
                        "corso · pieno · prenotare · disdire\nIl corso serale è pieno. Prenoto al mattino.",
                        "Kurs · voll · buchen · absagen\nDer Abendkurs ist voll. Ich buche morgens."
                    ),
                    'itens' => [
                        dlinha('aula', 'a aula da noite está cheia', 'class', 'The evening class is crowded', 'clase', 'La clase de la tarde está llena', 'cours', 'Le cours du soir est bondé', 'corso', 'Il corso serale è pieno', 'Kurs', 'Der Abendkurs ist voll'),
                        dlinha('lotado', 'hoje está lotado', 'crowded', 'It is crowded today', 'lleno', 'Hoy está lleno', 'bondé', 'C est bondé aujourd hui', 'pieno', 'Oggi è pieno', 'voll', 'Heute ist es voll'),
                        dlinha('reservar', 'reservo um horário de manhã', 'book', 'I book a morning slot', 'reservar', 'Reservo por la mañana', 'réserver', 'Je réserve le matin', 'prenotare', 'Prenoto al mattino', 'buchen', 'Ich buche morgens'),
                        dlinha('cancelar', 'preciso cancelar a aula', 'cancel', 'I need to cancel the class', 'cancelar', 'Necesito cancelar la clase', 'annuler', 'Je dois annuler le cours', 'disdire', 'Devo disdire il corso', 'absagen', 'Ich muss den Kurs absagen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Uma receita',
            'desc' => 'Ingredientes, tempo de forno e o ponto do prato.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Ingredientes',
                    'teoria' => dteoria(
                        "recipe · ingredients · mix · boil\nFollow the recipe. Mix the ingredients and boil the water.",
                        "receta · ingredientes · mezcla · hierve\nSigue la receta. Mezcla los ingredientes y hierve el agua.",
                        "recette · ingrédients · mélange · fais bouillir\nSuis la recette. Mélange les ingrédients et fais bouillir l’eau.",
                        "ricetta · ingredienti · mescola · fai bollire\nSegui la ricetta. Mescola gli ingredienti e fai bollire l’acqua.",
                        "Rezept · Zutaten · mischen · kochen\nFolge dem Rezept. Mische die Zutaten und koche das Wasser."
                    ),
                    'itens' => [
                        dlinha('receita', 'siga a receita', 'recipe', 'Follow the recipe', 'receta', 'Sigue la receta', 'recette', 'Suis la recette', 'ricetta', 'Segui la ricetta', 'Rezept', 'Folge dem Rezept'),
                        dlinha('ingredientes', 'os ingredientes estão na mesa', 'ingredients', 'The ingredients are on the table', 'ingredientes', 'Los ingredientes están en la mesa', 'ingrédients', 'Les ingrédients sont sur la table', 'ingredienti', 'Gli ingredienti sono sul tavolo', 'Zutaten', 'Die Zutaten sind auf dem Tisch'),
                        dlinha('misturar', 'misture tudo', 'mix', 'Mix everything', 'mezcla', 'Mezcla todo', 'mélange', 'Mélange tout', 'mescola', 'Mescola tutto', 'mischen', 'Mische alles'),
                        dlinha('ferver', 'ferva a água', 'boil', 'Boil the water', 'hierve', 'Hierve el agua', 'fais bouillir', 'Fais bouillir l eau', 'fai bollire', 'Fai bollire l acqua', 'kochen', 'Koche das Wasser'),
                    ],
                ],
                [
                    'titulo' => 'No forno',
                    'teoria' => dteoria(
                        "oven · minutes · taste · serve\nBake for twenty minutes. Taste it before you serve.",
                        "horno · minutos · prueba · sirve\nHornea veinte minutos. Prueba antes de servir.",
                        "four · minutes · goûte · sers\nEnfourne vingt minutes. Goûte avant de servir.",
                        "forno · minuti · assaggia · servi\nInforna venti minuti. Assaggia prima di servire.",
                        "Ofen · Minuten · kosten · servieren\nBacke zwanzig Minuten. Koste bevor du servierst."
                    ),
                    'itens' => [
                        dlinha('forno', 'coloque no forno', 'oven', 'Put it in the oven', 'horno', 'Ponlo en el horno', 'four', 'Mets-le au four', 'forno', 'Mettilo in forno', 'Ofen', 'Stell es in den Ofen'),
                        dlinha('minutos', 'assine vinte minutos', 'minutes', 'Bake for twenty minutes', 'minutos', 'Hornea veinte minutos', 'minutes', 'Enfourne vingt minutes', 'minuti', 'Inforna venti minuti', 'Minuten', 'Backe zwanzig Minuten'),
                        dlinha('provar', 'prove antes de servir', 'taste', 'Taste it before you serve', 'prueba', 'Prueba antes de servir', 'goûte', 'Goûte avant de servir', 'assaggia', 'Assaggia prima di servire', 'kosten', 'Koste bevor du servierst'),
                        dlinha('servir', 'sirva quente', 'serve', 'Serve it hot', 'sirve', 'Sívelo caliente', 'sers', 'Sers-le chaud', 'servi', 'Servilo caldo', 'servieren', 'Serviere es heiß'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Alergia e dieta',
            'desc' => 'Restrições alimentares no restaurante e no mercado.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Não posso comer',
                    'teoria' => dteoria(
                        "allergy · nuts · gluten · lactose\nI have a nut allergy. Is this gluten-free?",
                        "alergia · frutos secos · gluten · lactosa\nTengo alergia a los frutos secos. ¿Esto es sin gluten?",
                        "allergie · noix · gluten · lactose\nJ’ai une allergie aux noix. C’est sans gluten ?",
                        "allergia · noci · glutine · lattosio\nHo allergia alle noci. È senza glutine?",
                        "Allergie · Nüsse · Gluten · Laktose\nIch habe eine Nussallergie. Ist das glutenfrei?"
                    ),
                    'itens' => [
                        dlinha('alergia', 'tenho alergia a nozes', 'allergy', 'I have a nut allergy', 'alergia', 'Tengo alergia a los frutos secos', 'allergie', 'J ai une allergie aux noix', 'allergia', 'Ho allergia alle noci', 'Allergie', 'Ich habe eine Nussallergie'),
                        dlinha('nozes', 'tem nozes neste bolo', 'nuts', 'Are there nuts in this cake', 'frutos secos', 'Hay frutos secos en este pastel', 'noix', 'Y a-t-il des noix dans ce gâteau', 'noci', 'Ci sono noci in questa torta', 'Nüsse', 'Sind Nüsse in diesem Kuchen'),
                        dlinha('glúten', 'isto é sem glúten', 'gluten', 'Is this gluten-free', 'gluten', 'Esto es sin gluten', 'gluten', 'C est sans gluten', 'glutine', 'È senza glutine', 'Gluten', 'Ist das glutenfrei'),
                        dlinha('lactose', 'não tomo lactose', 'lactose', 'I do not have lactose', 'lactosa', 'No tomo lactosa', 'lactose', 'Je ne prends pas de lactose', 'lattosio', 'Non prendo lattosio', 'Laktose', 'Ich nehme keine Laktose'),
                    ],
                ],
                [
                    'titulo' => 'O cardápio',
                    'teoria' => dteoria(
                        "vegetarian · vegan · spicy · mild\nIs there a vegetarian option? Not too spicy, please.",
                        "vegetariano · vegano · picante · suave\n¿Hay opción vegetariana? No muy picante, por favor.",
                        "végétarien · végan · épicé · doux\nIl y a une option végétarienne ? Pas trop épicé, s’il vous plaît.",
                        "vegetariano · vegano · piccante · delicato\nC’è un’opzione vegetariana? Non troppo piccante, per favore.",
                        "vegetarisch · vegan · scharf · mild\nGibt es eine vegetarische Option? Bitte nicht zu scharf."
                    ),
                    'itens' => [
                        dlinha('vegetariano', 'há opção vegetariana', 'vegetarian', 'Is there a vegetarian option', 'vegetariano', 'Hay opción vegetariana', 'végétarien', 'Il y a une option végétarienne', 'vegetariano', 'C è un opzione vegetariana', 'vegetarisch', 'Gibt es eine vegetarische Option'),
                        dlinha('vegano', 'o prato é vegano', 'vegan', 'The dish is vegan', 'vegano', 'El plato es vegano', 'végan', 'Le plat est végan', 'vegano', 'Il piatto è vegano', 'vegan', 'Das Gericht ist vegan'),
                        dlinha('picante', 'não picante demais', 'spicy', 'Not too spicy please', 'picante', 'No muy picante por favor', 'épicé', 'Pas trop épicé s il vous plaît', 'piccante', 'Non troppo piccante per favore', 'scharf', 'Bitte nicht zu scharf'),
                        dlinha('suave', 'prefiro o suave', 'mild', 'I prefer the mild one', 'suave', 'Prefiero el suave', 'doux', 'Je préfère le doux', 'delicato', 'Preferisco quello delicato', 'mild', 'Ich bevorzuge das milde'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'O bairro',
            'desc' => 'Descrever a vizinhança: barulho, comércio, segurança.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Como é o bairro',
                    'teoria' => dteoria(
                        "neighbourhood · noisy · quiet · safe\nThe neighbourhood is quiet and safe.",
                        "barrio · ruidoso · tranquilo · seguro\nEl barrio es tranquilo y seguro.",
                        "quartier · bruyant · calme · sûr\nLe quartier est calme et sûr.",
                        "quartiere · rumoroso · tranquillo · sicuro\nIl quartiere è tranquillo e sicuro.",
                        "Viertel · laut · ruhig · sicher\nDas Viertel ist ruhig und sicher."
                    ),
                    'itens' => [
                        dlinha('bairro', 'gosto deste bairro', 'neighbourhood', 'I like this neighbourhood', 'barrio', 'Me gusta este barrio', 'quartier', 'J aime ce quartier', 'quartiere', 'Mi piace questo quartiere', 'Viertel', 'Ich mag dieses Viertel'),
                        dlinha('barulhento', 'à noite é barulhento', 'noisy', 'It is noisy at night', 'ruidoso', 'Por la noche es ruidoso', 'bruyant', 'Le soir c est bruyant', 'rumoroso', 'Di sera è rumoroso', 'laut', 'Nachts ist es laut'),
                        dlinha('silencioso', 'de dia é silencioso', 'quiet', 'It is quiet in the day', 'tranquilo', 'De día es tranquilo', 'calme', 'Le jour c est calme', 'tranquillo', 'Di giorno è tranquillo', 'ruhig', 'Tagsüber ist es ruhig'),
                        dlinha('seguro', 'o bairro é seguro', 'safe', 'The neighbourhood is safe', 'seguro', 'El barrio es seguro', 'sûr', 'Le quartier est sûr', 'sicuro', 'Il quartiere è sicuro', 'sicher', 'Das Viertel ist sicher'),
                    ],
                ],
                [
                    'titulo' => 'O que tem perto',
                    'teoria' => dteoria(
                        "around the corner · playground · nightlife · traffic\nThe playground is around the corner. There is little traffic.",
                        "a la vuelta · parque infantil · marcha · tráfico\nEl parque infantil está a la vuelta. Hay poco tráfico.",
                        "au coin · aire de jeux · vie nocturne · circulation\nL’aire de jeux est au coin. Il y a peu de circulation.",
                        "all’angolo · parco giochi · vita notturna · traffico\nIl parco giochi è all’angolo. C’è poco traffico.",
                        "um die Ecke · Spielplatz · Nachtleben · Verkehr\nDer Spielplatz ist um die Ecke. Es gibt wenig Verkehr."
                    ),
                    'itens' => [
                        dlinha('na esquina', 'fica na esquina', 'around the corner', 'It is around the corner', 'a la vuelta', 'Está a la vuelta', 'au coin', 'C est au coin', 'all angolo', 'È all angolo', 'um die Ecke', 'Es ist um die Ecke'),
                        dlinha('parquinho', 'as crianças usam o parquinho', 'playground', 'The children use the playground', 'parque infantil', 'Los niños usan el parque infantil', 'aire de jeux', 'Les enfants utilisent l aire de jeux', 'parco giochi', 'I bambini usano il parco giochi', 'Spielplatz', 'Die Kinder nutzen den Spielplatz'),
                        dlinha('vida noturna', 'há pouca vida noturna', 'nightlife', 'There is little nightlife', 'marcha', 'Hay poca marcha', 'vie nocturne', 'Il y a peu de vie nocturne', 'vita notturna', 'C è poca vita notturna', 'Nachtleben', 'Es gibt wenig Nachtleben'),
                        dlinha('movimento / trânsito', 'há pouco trânsito', 'traffic', 'There is little traffic', 'tráfico', 'Hay poco tráfico', 'circulation', 'Il y a peu de circulation', 'traffico', 'C è poco traffico', 'Verkehr', 'Es gibt wenig Verkehr'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'App e senha',
            'desc' => 'Criar conta, recuperar senha e atualizar o aplicativo.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Entrar',
                    'teoria' => dteoria(
                        "app · username · log in · log out\nOpen the app and log in with your username.",
                        "app · usuario · entrar · salir\nAbre la app y entra con tu usuario.",
                        "appli · identifiant · se connecter · se déconnecter\nOuvre l’appli et connecte-toi avec ton identifiant.",
                        "app · utente · accedi · esci\nApri l’app e accedi con il tuo utente.",
                        "App · Benutzername · anmelden · abmelden\nÖffne die App und melde dich mit dem Benutzernamen an."
                    ),
                    'itens' => [
                        dlinha('aplicativo', 'abra o aplicativo', 'app', 'Open the app', 'app', 'Abre la app', 'appli', 'Ouvre l appli', 'app', 'Apri l app', 'App', 'Öffne die App'),
                        dlinha('usuário', 'qual é o seu usuário', 'username', 'What is your username', 'usuario', 'Cuál es tu usuario', 'identifiant', 'Quel est ton identifiant', 'utente', 'Qual è il tuo utente', 'Benutzername', 'Wie ist dein Benutzername'),
                        dlinha('entrar', 'entre com a senha', 'log in', 'Log in with the password', 'entrar', 'Entra con la contraseña', 'se connecter', 'Connecte-toi avec le mot de passe', 'accedi', 'Accedi con la password', 'anmelden', 'Melde dich mit dem Passwort an'),
                        dlinha('sair', 'saia da conta', 'log out', 'Log out of the account', 'salir', 'Sal de la cuenta', 'se déconnecter', 'Déconnecte-toi du compte', 'esci', 'Esci dall account', 'abmelden', 'Melde dich vom Konto ab'),
                    ],
                ],
                [
                    'titulo' => 'Esqueci a senha',
                    'teoria' => dteoria(
                        "reset · code · update · crash\nI reset the password. The app crashed.",
                        "restablecer · código · actualizar · se cerró\nRestablezco la contraseña. La app se cerró.",
                        "réinitialiser · code · mettre à jour · planter\nJe réinitialise le mot de passe. L’appli a planté.",
                        "reimpostare · codice · aggiornare · si è chiusa\nReimposto la password. L’app si è chiusa.",
                        "zurücksetzen · Code · aktualisieren · abstürzen\nIch setze das Passwort zurück. Die App ist abgestürzt."
                    ),
                    'itens' => [
                        dlinha('redefinir', 'redefino a senha', 'reset', 'I reset the password', 'restablecer', 'Restablezco la contraseña', 'réinitialiser', 'Je réinitialise le mot de passe', 'reimpostare', 'Reimposto la password', 'zurücksetzen', 'Ich setze das Passwort zurück'),
                        dlinha('código', 'o código chegou por SMS', 'code', 'The code arrived by SMS', 'código', 'El código llegó por SMS', 'code', 'Le code est arrivé par SMS', 'codice', 'Il codice è arrivato via SMS', 'Code', 'Der Code kam per SMS'),
                        dlinha('atualizar', 'atualize o aplicativo', 'update', 'Update the app', 'actualizar', 'Actualiza la app', 'mettre à jour', 'Mets l appli à jour', 'aggiornare', 'Aggiorna l app', 'aktualisieren', 'Aktualisiere die App'),
                        dlinha('travou', 'o aplicativo travou', 'crash', 'The app crashed', 'se cerró', 'La app se cerró', 'planter', 'L appli a planté', 'si è chiusa', 'L app si è chiusa', 'abstürzen', 'Die App ist abgestürzt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Meio período',
            'desc' => 'Turno, folga e o primeiro emprego simples.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'O turno',
                    'teoria' => dteoria(
                        "part-time · shift · overtime · day off\nI work part-time. Friday is my day off.",
                        "media jornada · turno · extra · día libre\nTrabajo media jornada. El viernes es mi día libre.",
                        "temps partiel · shift · heures sup · jour de repos\nJe travaille à temps partiel. Vendredi est mon jour de repos.",
                        "part-time · turno · straordinario · giorno libero\nLavoro part-time. Venerdì è il mio giorno libero.",
                        "Teilzeit · Schicht · Überstunden · frei\nIch arbeite in Teilzeit. Freitag ist mein freier Tag."
                    ),
                    'itens' => [
                        dlinha('meio período', 'trabalho meio período', 'part-time', 'I work part-time', 'media jornada', 'Trabajo media jornada', 'temps partiel', 'Je travaille à temps partiel', 'part-time', 'Lavoro part-time', 'Teilzeit', 'Ich arbeite in Teilzeit'),
                        dlinha('turno', 'o turno começa às sete', 'shift', 'The shift starts at seven', 'turno', 'El turno empieza a las siete', 'shift', 'Le shift commence à sept heures', 'turno', 'Il turno inizia alle sette', 'Schicht', 'Die Schicht beginnt um sieben'),
                        dlinha('hora extra', 'fiz hora extra ontem', 'overtime', 'I did overtime yesterday', 'extra', 'Hice extra ayer', 'heures sup', 'J ai fait des heures sup hier', 'straordinario', 'Ho fatto straordinario ieri', 'Überstunden', 'Ich machte gestern Überstunden'),
                        dlinha('folga', 'sexta é minha folga', 'day off', 'Friday is my day off', 'día libre', 'El viernes es mi día libre', 'jour de repos', 'Vendredi est mon jour de repos', 'giorno libero', 'Venerdì è il mio giorno libero', 'frei', 'Freitag ist mein freier Tag'),
                    ],
                ],
                [
                    'titulo' => 'O chefe',
                    'teoria' => dteoria(
                        "boss · wage · break · uniform\nAsk the boss about the wage. We have a thirty-minute break.",
                        "jefe · sueldo · pausa · uniforme\nPregunta al jefe por el sueldo. Tenemos una pausa de treinta minutos.",
                        "patron · salaire · pause · uniforme\nDemande au patron le salaire. On a une pause de trente minutes.",
                        "capo · stipendio · pausa · divisa\nChiedi al capo lo stipendio. Abbiamo una pausa di trenta minuti.",
                        "Chef · Lohn · Pause · Uniform\nFrag den Chef nach dem Lohn. Wir haben dreißig Minuten Pause."
                    ),
                    'itens' => [
                        dlinha('chefe', 'pergunte ao chefe', 'boss', 'Ask the boss', 'jefe', 'Pregunta al jefe', 'patron', 'Demande au patron', 'capo', 'Chiedi al capo', 'Chef', 'Frag den Chef'),
                        dlinha('salário', 'o salário cai na sexta', 'wage', 'The wage arrives on Friday', 'sueldo', 'El sueldo llega el viernes', 'salaire', 'Le salaire arrive vendredi', 'stipendio', 'Lo stipendio arriva venerdì', 'Lohn', 'Der Lohn kommt am Freitag'),
                        dlinha('pausa', 'a pausa é de trinta minutos', 'break', 'The break is thirty minutes', 'pausa', 'La pausa es de treinta minutos', 'pause', 'La pause est de trente minutes', 'pausa', 'La pausa è di trenta minuti', 'Pause', 'Die Pause dauert dreißig Minuten'),
                        dlinha('uniforme', 'o uniforme é obrigatório', 'uniform', 'The uniform is required', 'uniforme', 'El uniforme es obligatorio', 'uniforme', 'L uniforme est obligatoire', 'divisa', 'La divisa è obbligatoria', 'Uniform', 'Die Uniform ist Pflicht'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Prova e dever',
            'desc' => 'Estudar para a prova, nota e recuperação.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'A prova',
                    'teoria' => dteoria(
                        "revise · grade · pass · fail\nI revise every night. I hope I pass.",
                        "repasar · nota · aprobar · suspender\nRepaso cada noche. Espero aprobar.",
                        "réviser · note · réussir · rater\nJe révise chaque soir. J’espère réussir.",
                        "ripassare · voto · superare · bocciare\nRipasso ogni sera. Spero di superare.",
                        "wiederholen · Note · bestehen · durchfallen\nIch wiederhole jeden Abend. Ich hoffe zu bestehen."
                    ),
                    'itens' => [
                        dlinha('revisar', 'reviso toda noite', 'revise', 'I revise every night', 'repasar', 'Repaso cada noche', 'réviser', 'Je révise chaque soir', 'ripassare', 'Ripasso ogni sera', 'wiederholen', 'Ich wiederhole jeden Abend'),
                        dlinha('nota', 'a nota saiu hoje', 'grade', 'The grade came out today', 'nota', 'La nota salió hoy', 'note', 'La note est sortie aujourd hui', 'voto', 'Il voto è uscito oggi', 'Note', 'Die Note kam heute'),
                        dlinha('passar', 'espero passar', 'pass', 'I hope I pass', 'aprobar', 'Espero aprobar', 'réussir', 'J espère réussir', 'superare', 'Spero di superare', 'bestehen', 'Ich hoffe zu bestehen'),
                        dlinha('reprovar', 'não quero reprovar', 'fail', 'I do not want to fail', 'suspender', 'No quiero suspender', 'rater', 'Je ne veux pas rater', 'bocciare', 'Non voglio bocciare', 'durchfallen', 'Ich will nicht durchfallen'),
                    ],
                ],
                [
                    'titulo' => 'O dever',
                    'teoria' => dteoria(
                        "deadline · cheat · group work · extension\nThe deadline is Monday. We do group work.",
                        "plazo · copiar · trabajo en grupo · prórroga\nEl plazo es el lunes. Hacemos trabajo en grupo.",
                        "date limite · tricher · travail de groupe · délai\nLa date limite est lundi. On fait un travail de groupe.",
                        "scadenza · copiare · lavoro di gruppo · proroga\nLa scadenza è lunedì. Facciamo un lavoro di gruppo.",
                        "Frist · schummeln · Gruppenarbeit · Verlängerung\nDie Frist ist Montag. Wir machen Gruppenarbeit."
                    ),
                    'itens' => [
                        dlinha('prazo', 'o prazo é segunda', 'deadline', 'The deadline is Monday', 'plazo', 'El plazo es el lunes', 'date limite', 'La date limite est lundi', 'scadenza', 'La scadenza è lunedì', 'Frist', 'Die Frist ist Montag'),
                        dlinha('colar', 'não cole na prova', 'cheat', 'Do not cheat in the exam', 'copiar', 'No copies en el examen', 'tricher', 'Ne triche pas à l examen', 'copiare', 'Non copiare all esame', 'schummeln', 'Nicht bei der Prüfung schummeln'),
                        dlinha('trabalho em grupo', 'fazemos trabalho em grupo', 'group work', 'We do group work', 'trabajo en grupo', 'Hacemos trabajo en grupo', 'travail de groupe', 'On fait un travail de groupe', 'lavoro di gruppo', 'Facciamo un lavoro di gruppo', 'Gruppenarbeit', 'Wir machen Gruppenarbeit'),
                        dlinha('prorrogação', 'pedi prorrogação', 'extension', 'I asked for an extension', 'prórroga', 'Pedí una prórroga', 'délai', 'J ai demandé un délai', 'proroga', 'Ho chiesto una proroga', 'Verlängerung', 'Ich bat um eine Verlängerung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Ingresso de cinema',
            'desc' => 'Comprar lugar, sessão e a fila da estreia.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'A sessão',
                    'teoria' => dteoria(
                        "screening · seats · sold out · subtitles\nThe nine o’clock screening is sold out. Are there subtitles?",
                        "sesión · asientos · agotado · subtítulos\nLa sesión de las nueve está agotada. ¿Hay subtítulos?",
                        "séance · places · complet · sous-titres\nLa séance de vingt et une heures est complète. Il y a des sous-titres ?",
                        "spettacolo · posti · esaurito · sottotitoli\nLo spettacolo delle ventuno è esaurito. Ci sono i sottotitoli?",
                        "Vorstellung · Plätze · ausverkauft · Untertitel\nDie Vorstellung um einundzwanzig Uhr ist ausverkauft. Gibt es Untertitel?"
                    ),
                    'itens' => [
                        dlinha('sessão', 'a sessão das nove esgotou', 'screening', 'The nine screening is sold out', 'sesión', 'La sesión de las nueve está agotada', 'séance', 'La séance de vingt et une heures est complète', 'spettacolo', 'Lo spettacolo delle ventuno è esaurito', 'Vorstellung', 'Die Vorstellung um einundzwanzig Uhr ist ausverkauft'),
                        dlinha('lugares', 'ainda há lugares no meio', 'seats', 'There are still seats in the middle', 'asientos', 'Aún hay asientos en el medio', 'places', 'Il reste des places au milieu', 'posti', 'Ci sono ancora posti in mezzo', 'Plätze', 'Es gibt noch Plätze in der Mitte'),
                        dlinha('esgotado', 'está esgotado', 'sold out', 'It is sold out', 'agotado', 'Está agotado', 'complet', 'C est complet', 'esaurito', 'È esaurito', 'ausverkauft', 'Es ist ausverkauft'),
                        dlinha('legendas', 'tem legendas', 'subtitles', 'Are there subtitles', 'subtítulos', 'Hay subtítulos', 'sous-titres', 'Il y a des sous-titres', 'sottotitoli', 'Ci sono i sottotitoli', 'Untertitel', 'Gibt es Untertitel'),
                    ],
                ],
                [
                    'titulo' => 'O lugar',
                    'teoria' => dteoria(
                        "row · aisle · popcorn · trailer\nWe sit in row seven near the aisle. The trailer is too long.",
                        "fila · pasillo · palomitas · tráiler\nNos sentamos en la fila siete junto al pasillo. El tráiler es demasiado largo.",
                        "rang · allée · pop-corn · bande-annonce\nOn s’assoit au rang sept près de l’allée. La bande-annonce est trop longue.",
                        "fila · corridoio · popcorn · trailer\nSediamo in fila sette vicino al corridoio. Il trailer è troppo lungo.",
                        "Reihe · Gang · Popcorn · Trailer\nWir sitzen in Reihe sieben am Gang. Der Trailer ist zu lang."
                    ),
                    'itens' => [
                        dlinha('fileira', 'fileira sete', 'row', 'Row seven', 'fila', 'Fila siete', 'rang', 'Rang sept', 'fila', 'Fila sette', 'Reihe', 'Reihe sieben'),
                        dlinha('corredor', 'perto do corredor', 'aisle', 'Near the aisle', 'pasillo', 'Junto al pasillo', 'allée', 'Près de l allée', 'corridoio', 'Vicino al corridoio', 'Gang', 'Am Gang'),
                        dlinha('pipoca', 'quero pipoca', 'popcorn', 'I want popcorn', 'palomitas', 'Quiero palomitas', 'pop-corn', 'Je veux du pop-corn', 'popcorn', 'Voglio i popcorn', 'Popcorn', 'Ich möchte Popcorn'),
                        dlinha('trailer', 'o trailer é longo demais', 'trailer', 'The trailer is too long', 'tráiler', 'El tráiler es demasiado largo', 'bande-annonce', 'La bande-annonce est trop longue', 'trailer', 'Il trailer è troppo lungo', 'Trailer', 'Der Trailer ist zu lang'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Há quanto tempo',
            'desc' => 'Since e for: duração até agora.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Desde quando',
                    'teoria' => dteoria(
                        "since · for · how long · still\nI have lived here since 2020. How long have you studied?",
                        "desde · desde hace · cuánto tiempo · todavía\nVivo aquí desde 2020. ¿Cuánto tiempo estudias?",
                        "depuis · depuis · depuis combien de temps · toujours\nJ’habite ici depuis 2020. Tu étudies depuis combien de temps ?",
                        "da · da · da quanto · ancora\nVivo qui dal 2020. Da quanto studi?",
                        "seit · seit · wie lange · immer noch\nIch wohne hier seit 2020. Wie lange lernst du schon?"
                    ),
                    'itens' => [
                        dlinha('desde', 'moro aqui desde 2020', 'since', 'I have lived here since 2020', 'desde', 'Vivo aquí desde 2020', 'depuis', 'J habite ici depuis 2020', 'da', 'Vivo qui dal 2020', 'seit', 'Ich wohne hier seit 2020'),
                        dlinha('há / durante', 'estudo há dois anos', 'for', 'I have studied for two years', 'desde hace', 'Estudio desde hace dos años', 'depuis', 'J étudie depuis deux ans', 'da', 'Studio da due anni', 'seit', 'Ich lerne seit zwei Jahren'),
                        dlinha('há quanto tempo', 'há quanto tempo você estuda', 'how long', 'How long have you studied', 'cuánto tiempo', 'Cuánto tiempo estudias', 'depuis combien de temps', 'Tu étudies depuis combien de temps', 'da quanto', 'Da quanto studi', 'wie lange', 'Wie lange lernst du schon'),
                        dlinha('ainda', 'ainda moro aqui', 'still', 'I still live here', 'todavía', 'Todavía vivo aquí', 'toujours', 'J habite toujours ici', 'ancora', 'Vivo ancora qui', 'immer noch', 'Ich wohne immer noch hier'),
                    ],
                ],
                [
                    'titulo' => 'Já e ainda não',
                    'teoria' => dteoria(
                        "already · yet · just · never\nHave you eaten yet? I have just arrived.",
                        "ya · todavía · acaba de · nunca\n¿Ya has comido? Acabo de llegar.",
                        "déjà · encore · vient de · jamais\nTu as déjà mangé ? Je viens d’arriver.",
                        "già · ancora · appena · mai\nHai già mangiato? Sono appena arrivato.",
                        "schon · noch · gerade · nie\nHast du schon gegessen? Ich bin gerade angekommen."
                    ),
                    'itens' => [
                        dlinha('já', 'você já comeu', 'already', 'Have you already eaten', 'ya', 'Ya has comido', 'déjà', 'Tu as déjà mangé', 'già', 'Hai già mangiato', 'schon', 'Hast du schon gegessen'),
                        dlinha('ainda não', 'ainda não comi', 'yet', 'I have not eaten yet', 'todavía', 'Todavía no he comido', 'encore', 'Je n ai pas encore mangé', 'ancora', 'Non ho ancora mangiato', 'noch', 'Ich habe noch nicht gegessen'),
                        dlinha('acabou de', 'acabei de chegar', 'just', 'I have just arrived', 'acaba de', 'Acabo de llegar', 'vient de', 'Je viens d arriver', 'appena', 'Sono appena arrivato', 'gerade', 'Ich bin gerade angekommen'),
                        dlinha('nunca', 'nunca estive lá', 'never', 'I have never been there', 'nunca', 'Nunca he estado allí', 'jamais', 'Je n y suis jamais allé', 'mai', 'Non ci sono mai stato', 'nie', 'Ich war nie dort'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Há dois anos',
            'desc' => 'Ago: situar um evento no passado.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Quando foi',
                    'teoria' => dteoria(
                        "ago · last night · the other day · at that time\nI moved two years ago. At that time I was a student.",
                        "hace · anoche · el otro día · entonces\nMe mudé hace dos años. Entonces era estudiante.",
                        "il y a · hier soir · l’autre jour · à l’époque\nJ’ai déménagé il y a deux ans. À l’époque j’étais étudiant.",
                        "fa · ieri sera · l’altro giorno · allora\nMi sono trasferito due anni fa. Allora ero studente.",
                        "vor · gestern Abend · neulich · damals\nIch bin vor zwei Jahren umgezogen. Damals war ich Student."
                    ),
                    'itens' => [
                        dlinha('atrás / há', 'mudei há dois anos', 'ago', 'I moved two years ago', 'hace', 'Me mudé hace dos años', 'il y a', 'J ai déménagé il y a deux ans', 'fa', 'Mi sono trasferito due anni fa', 'vor', 'Ich bin vor zwei Jahren umgezogen'),
                        dlinha('ontem à noite', 'ontem à noite choveu', 'last night', 'It rained last night', 'anoche', 'Anoche llovió', 'hier soir', 'Hier soir il a plu', 'ieri sera', 'Ieri sera ha piovuto', 'gestern Abend', 'Gestern Abend hat es geregnet'),
                        dlinha('outro dia', 'outro dia te vi', 'the other day', 'I saw you the other day', 'el otro día', 'El otro día te vi', 'l autre jour', 'Je t ai vu l autre jour', 'l altro giorno', 'Ti ho visto l altro giorno', 'neulich', 'Neulich habe ich dich gesehen'),
                        dlinha('naquela época', 'naquela época eu era estudante', 'at that time', 'At that time I was a student', 'entonces', 'Entonces era estudiante', 'à l époque', 'À l époque j étais étudiant', 'allora', 'Allora ero studente', 'damals', 'Damals war ich Student'),
                    ],
                ],
                [
                    'titulo' => 'A mudança',
                    'teoria' => dteoria(
                        "moved · used to live · back then · since then\nI used to live by the sea. Since then I work here.",
                        "me mudé · vivía · entonces · desde entonces\nVivía junto al mar. Desde entonces trabajo aquí.",
                        "j’ai déménagé · j’habitais · à l’époque · depuis\nJ’habitais au bord de la mer. Depuis je travaille ici.",
                        "mi sono trasferito · vivevo · allora · da allora\nVivevo sul mare. Da allora lavoro qui.",
                        "umgezogen · wohnte · damals · seitdem\nIch wohnte am Meer. Seitdem arbeite ich hier."
                    ),
                    'itens' => [
                        dlinha('mudei', 'mudei para esta cidade', 'moved', 'I moved to this city', 'me mudé', 'Me mudé a esta ciudad', 'j ai déménagé', 'J ai déménagé dans cette ville', 'mi sono trasferito', 'Mi sono trasferito in questa città', 'umgezogen', 'Ich bin in diese Stadt umgezogen'),
                        dlinha('morava', 'eu morava perto do mar', 'used to live', 'I used to live by the sea', 'vivía', 'Vivía junto al mar', 'j habitais', 'J habitais au bord de la mer', 'vivevo', 'Vivevo sul mare', 'wohnte', 'Ich wohnte am Meer'),
                        dlinha('naquele tempo', 'naquele tempo era calmo', 'back then', 'Back then it was quiet', 'entonces', 'Entonces era tranquilo', 'à l époque', 'À l époque c était calme', 'allora', 'Allora era tranquillo', 'damals', 'Damals war es ruhig'),
                        dlinha('desde então', 'desde então trabalho aqui', 'since then', 'Since then I work here', 'desde entonces', 'Desde entonces trabajo aquí', 'depuis', 'Depuis je travaille ici', 'da allora', 'Da allora lavoro qui', 'seitdem', 'Seitdem arbeite ich hier'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Regras da casa',
            'desc' => 'Hospedagem: o que pode e o que não pode.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Pode e não pode',
                    'teoria' => dteoria(
                        "allowed · forbidden · smoking · pets\nSmoking is forbidden. Pets are not allowed.",
                        "permitido · prohibido · fumar · mascotas\nFumar está prohibido. No se permiten mascotas.",
                        "autorisé · interdit · fumer · animaux\nFumer est interdit. Les animaux ne sont pas autorisés.",
                        "permesso · vietato · fumare · animali\nFumare è vietato. Gli animali non sono permessi.",
                        "erlaubt · verboten · rauchen · Haustiere\nRauchen ist verboten. Haustiere sind nicht erlaubt."
                    ),
                    'itens' => [
                        dlinha('permitido', 'é permitido cozinhar', 'allowed', 'Cooking is allowed', 'permitido', 'Está permitido cocinar', 'autorisé', 'Cuisiner est autorisé', 'permesso', 'Cucinare è permesso', 'erlaubt', 'Kochen ist erlaubt'),
                        dlinha('proibido', 'é proibido fumar', 'forbidden', 'Smoking is forbidden', 'prohibido', 'Fumar está prohibido', 'interdit', 'Fumer est interdit', 'vietato', 'Fumare è vietato', 'verboten', 'Rauchen ist verboten'),
                        dlinha('fumar', 'não fume aqui', 'smoking', 'No smoking here', 'fumar', 'No fumes aquí', 'fumer', 'Ne fumez pas ici', 'fumare', 'Non fumare qui', 'rauchen', 'Hier nicht rauchen'),
                        dlinha('animais', 'animais não são permitidos', 'pets', 'Pets are not allowed', 'mascotas', 'No se permiten mascotas', 'animaux', 'Les animaux ne sont pas autorisés', 'animali', 'Gli animali non sono permessi', 'Haustiere', 'Haustiere sind nicht erlaubt'),
                    ],
                ],
                [
                    'titulo' => 'O silêncio',
                    'teoria' => dteoria(
                        "quiet hours · guests · key · checkout\nQuiet hours start at ten. Checkout is at eleven.",
                        "horas de silencio · invitados · llave · salida\nEl silencio empieza a las diez. La salida es a las once.",
                        "heures calmes · invités · clé · départ\nLes heures calmes commencent à vingt-deux heures. Le départ est à onze heures.",
                        "ore di silenzio · ospiti · chiave · check-out\nIl silenzio inizia alle ventidue. Il check-out è alle undici.",
                        "Ruhezeiten · Gäste · Schlüssel · Checkout\nDie Ruhezeiten beginnen um zweiundzwanzig Uhr. Der Checkout ist um elf."
                    ),
                    'itens' => [
                        dlinha('horário de silêncio', 'o silêncio começa às dez', 'quiet hours', 'Quiet hours start at ten', 'horas de silencio', 'El silencio empieza a las diez', 'heures calmes', 'Les heures calmes commencent à vingt-deux heures', 'ore di silenzio', 'Il silenzio inizia alle ventidue', 'Ruhezeiten', 'Die Ruhezeiten beginnen um zweiundzwanzig Uhr'),
                        dlinha('convidados', 'convidados até as nove', 'guests', 'Guests until nine', 'invitados', 'Invitados hasta las nueve', 'invités', 'Invités jusqu à vingt et une heures', 'ospiti', 'Ospiti fino alle ventuno', 'Gäste', 'Gäste bis einundzwanzig Uhr'),
                        dlinha('chave', 'deixe a chave na mesa', 'key', 'Leave the key on the table', 'llave', 'Deja la llave en la mesa', 'clé', 'Laisse la clé sur la table', 'chiave', 'Lascia la chiave sul tavolo', 'Schlüssel', 'Lass den Schlüssel auf dem Tisch'),
                        dlinha('saída / checkout', 'o checkout é às onze', 'checkout', 'Checkout is at eleven', 'salida', 'La salida es a las once', 'départ', 'Le départ est à onze heures', 'check-out', 'Il check-out è alle undici', 'Checkout', 'Der Checkout ist um elf'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Perdido na cidade',
            'desc' => 'Quando o GPS falha: ponto de referência e pedir o caminho.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Estou perdido',
                    'teoria' => dteoria(
                        "lost · landmark · map · wrong way\nI am lost. Is this the wrong way?",
                        "perdido · referencia · mapa · camino equivocado\nEstoy perdido. ¿Este es el camino equivocado?",
                        "perdu · repère · carte · mauvais chemin\nJe suis perdu. C’est le mauvais chemin ?",
                        "perso · punto di riferimento · mappa · strada sbagliata\nMi sono perso. È la strada sbagliata?",
                        "verirrt · Orientierungspunkt · Karte · falscher Weg\nIch habe mich verirrt. Ist das der falsche Weg?"
                    ),
                    'itens' => [
                        dlinha('perdido', 'estou perdido', 'lost', 'I am lost', 'perdido', 'Estoy perdido', 'perdu', 'Je suis perdu', 'perso', 'Mi sono perso', 'verirrt', 'Ich habe mich verirrt'),
                        dlinha('ponto de referência', 'qual é o ponto de referência', 'landmark', 'What is the landmark', 'referencia', 'Cuál es la referencia', 'repère', 'Quel est le repère', 'punto di riferimento', 'Qual è il punto di riferimento', 'Orientierungspunkt', 'Was ist der Orientierungspunkt'),
                        dlinha('mapa', 'mostre no mapa', 'map', 'Show it on the map', 'mapa', 'Muéstralo en el mapa', 'carte', 'Montre-le sur la carte', 'mappa', 'Mostralo sulla mappa', 'Karte', 'Zeig es auf der Karte'),
                        dlinha('caminho errado', 'é o caminho errado', 'wrong way', 'This is the wrong way', 'camino equivocado', 'Este es el camino equivocado', 'mauvais chemin', 'C est le mauvais chemin', 'strada sbagliata', 'È la strada sbagliata', 'falscher Weg', 'Das ist der falsche Weg'),
                    ],
                ],
                [
                    'titulo' => 'Me explique',
                    'teoria' => dteoria(
                        "could you · slower · again · I got it\nCould you say it slower? I got it now.",
                        "podría · más despacio · otra vez · ya entendí\n¿Podría decirlo más despacio? Ya entendí.",
                        "pourriez-vous · plus lentement · encore · j’ai compris\nPourriez-vous le dire plus lentement ? J’ai compris.",
                        "potrebbe · più piano · di nuovo · ho capito\nPotrebbe dirlo più piano? Ho capito.",
                        "könnten Sie · langsamer · nochmal · ich hab’s\nKönnten Sie es langsamer sagen? Ich hab’s verstanden."
                    ),
                    'itens' => [
                        dlinha('poderia', 'poderia repetir', 'could you', 'Could you repeat', 'podría', 'Podría repetir', 'pourriez-vous', 'Pourriez-vous répéter', 'potrebbe', 'Potrebbe ripetere', 'könnten Sie', 'Könnten Sie wiederholen'),
                        dlinha('mais devagar', 'fale mais devagar', 'slower', 'Say it slower', 'más despacio', 'Dígalo más despacio', 'plus lentement', 'Dites-le plus lentement', 'più piano', 'Dica più piano', 'langsamer', 'Sagen Sie es langsamer'),
                        dlinha('de novo', 'mais uma vez', 'again', 'One more time', 'otra vez', 'Otra vez', 'encore', 'Encore une fois', 'di nuovo', 'Ancora una volta', 'nochmal', 'Noch einmal'),
                        dlinha('entendi', 'agora entendi', 'I got it', 'I got it now', 'ya entendí', 'Ya entendí', 'j ai compris', 'J ai compris', 'ho capito', 'Ho capito', 'ich hab s', 'Ich hab s verstanden'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Feriado curto',
            'desc' => 'Ponte, mala pequena e o que fechar na cidade.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'A ponte',
                    'teoria' => dteoria(
                        "public holiday · long weekend · closed · crowded\nMonday is a public holiday. Shops are closed.",
                        "fiesta · puente · cerrado · lleno\nEl lunes es fiesta. Las tiendas están cerradas.",
                        "jour férié · pont · fermé · bondé\nLundi est férié. Les magasins sont fermés.",
                        "festa · ponte · chiuso · pieno\nLunedì è festa. I negozi sono chiusi.",
                        "Feiertag · langes Wochenende · geschlossen · voll\nMontag ist Feiertag. Die Läden sind geschlossen."
                    ),
                    'itens' => [
                        dlinha('feriado', 'segunda é feriado', 'public holiday', 'Monday is a public holiday', 'fiesta', 'El lunes es fiesta', 'jour férié', 'Lundi est férié', 'festa', 'Lunedì è festa', 'Feiertag', 'Montag ist Feiertag'),
                        dlinha('ponte', 'vamos fazer um feriado prolongado', 'long weekend', 'We take a long weekend', 'puente', 'Hacemos puente', 'pont', 'On fait le pont', 'ponte', 'Facciamo il ponte', 'langes Wochenende', 'Wir machen ein langes Wochenende'),
                        dlinha('fechado', 'as lojas estão fechadas', 'closed', 'The shops are closed', 'cerrado', 'Las tiendas están cerradas', 'fermé', 'Les magasins sont fermés', 'chiuso', 'I negozi sono chiusi', 'geschlossen', 'Die Läden sind geschlossen'),
                        dlinha('cheio', 'a estrada está cheia', 'crowded', 'The road is crowded', 'lleno', 'La carretera está llena', 'bondé', 'La route est bondée', 'pieno', 'La strada è piena', 'voll', 'Die Straße ist voll'),
                    ],
                ],
                [
                    'titulo' => 'A mala pequena',
                    'teoria' => dteoria(
                        "overnight bag · book a room · packed · back on\nI packed an overnight bag. We are back on Tuesday.",
                        "bolsa de noche · reservar habitación · hice la maleta · volvemos el\nHice una bolsa de noche. Volvemos el martes.",
                        "sac de nuit · réserver une chambre · j’ai fait ma valise · on rentre le\nJ’ai fait un sac de nuit. On rentre mardi.",
                        "borsa da notte · prenotare una camera · ho fatto la valigia · torniamo il\nHo fatto una borsa da notte. Torniamo martedì.",
                        "Übernachtungstasche · Zimmer buchen · gepackt · zurück am\nIch packte eine Übernachtungstasche. Wir sind am Dienstag zurück."
                    ),
                    'itens' => [
                        dlinha('mala de um dia', 'fiz uma mala pequena', 'overnight bag', 'I packed an overnight bag', 'bolsa de noche', 'Hice una bolsa de noche', 'sac de nuit', 'J ai fait un sac de nuit', 'borsa da notte', 'Ho fatto una borsa da notte', 'Übernachtungstasche', 'Ich packte eine Übernachtungstasche'),
                        dlinha('reservar quarto', 'reservamos um quarto', 'book a room', 'We book a room', 'reservar habitación', 'Reservamos una habitación', 'réserver une chambre', 'On réserve une chambre', 'prenotare una camera', 'Prenotiamo una camera', 'Zimmer buchen', 'Wir buchen ein Zimmer'),
                        dlinha('fiz as malas', 'já fiz as malas', 'packed', 'I am already packed', 'hice la maleta', 'Ya hice la maleta', 'j ai fait ma valise', 'J ai déjà fait ma valise', 'ho fatto la valigia', 'Ho già fatto la valigia', 'gepackt', 'Ich bin schon gepackt'),
                        dlinha('voltamos', 'voltamos na terça', 'back on', 'We are back on Tuesday', 'volvemos el', 'Volvemos el martes', 'on rentre le', 'On rentre mardi', 'torniamo il', 'Torniamo martedì', 'zurück am', 'Wir sind am Dienstag zurück'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Tempestade e neve',
            'desc' => 'Clima extremo, diferente do tempo básico de A1.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'O alerta',
                    'teoria' => dteoria(
                        "storm · flood · warning · cancel\nThere is a storm warning. They cancel the match.",
                        "tormenta · inundación · aviso · cancelan\nHay aviso de tormenta. Cancelan el partido.",
                        "tempête · inondation · alerte · annulent\nIl y a une alerte tempête. Ils annulent le match.",
                        "tempesta · alluvione · allerta · cancellano\nC’è allerta tempesta. Cancellano la partita.",
                        "Sturm · Hochwasser · Warnung · absagen\nEs gibt eine Sturmwarnung. Sie sagen das Spiel ab."
                    ),
                    'itens' => [
                        dlinha('tempestade', 'vem uma tempestade', 'storm', 'A storm is coming', 'tormenta', 'Viene una tormenta', 'tempête', 'Une tempête arrive', 'tempesta', 'Arriva una tempesta', 'Sturm', 'Ein Sturm kommt'),
                        dlinha('enchente', 'há risco de enchente', 'flood', 'There is a flood risk', 'inundación', 'Hay riesgo de inundación', 'inondation', 'Il y a un risque d inondation', 'alluvione', 'C è rischio di alluvione', 'Hochwasser', 'Es gibt Hochwassergefahr'),
                        dlinha('alerta', 'há um alerta', 'warning', 'There is a warning', 'aviso', 'Hay un aviso', 'alerte', 'Il y a une alerte', 'allerta', 'C è un allerta', 'Warnung', 'Es gibt eine Warnung'),
                        dlinha('cancelam', 'cancelam o jogo', 'cancel', 'They cancel the match', 'cancelan', 'Cancelan el partido', 'annulent', 'Ils annulent le match', 'cancellano', 'Cancellano la partita', 'absagen', 'Sie sagen das Spiel ab'),
                    ],
                ],
                [
                    'titulo' => 'A neve',
                    'teoria' => dteoria(
                        "snow · ice · slippery · stay indoors\nThe roads are icy and slippery. Stay indoors tonight.",
                        "nieve · hielo · resbaladizo · quédate en casa\nLas calles están heladas y resbaladizas. Quédate en casa esta noche.",
                        "neige · glace · glissant · reste à l’intérieur\nLes routes sont verglacées et glissantes. Reste à l’intérieur ce soir.",
                        "neve · ghiaccio · scivoloso · resta in casa\nLe strade sono ghiacciate e scivolose. Resta in casa stasera.",
                        "Schnee · Eis · rutschig · drinnen bleiben\nDie Straßen sind eisig und rutschig. Bleib heute Abend drinnen."
                    ),
                    'itens' => [
                        dlinha('neve', 'está nevando', 'snow', 'It is snowing', 'nieve', 'Está nevando', 'neige', 'Il neige', 'neve', 'Nevica', 'Schnee', 'Es schneit'),
                        dlinha('gelo', 'as ruas estão com gelo', 'ice', 'The roads are icy', 'hielo', 'Las calles están heladas', 'glace', 'Les routes sont verglacées', 'ghiaccio', 'Le strade sono ghiacciate', 'Eis', 'Die Straßen sind eisig'),
                        dlinha('escorregadio', 'o chão está escorregadio', 'slippery', 'The ground is slippery', 'resbaladizo', 'El suelo está resbaladizo', 'glissant', 'Le sol est glissant', 'scivoloso', 'Il suolo è scivoloso', 'rutschig', 'Der Boden ist rutschig'),
                        dlinha('fique em casa', 'fique em casa esta noite', 'stay indoors', 'Stay indoors tonight', 'quédate en casa', 'Quédate en casa esta noche', 'reste à l intérieur', 'Reste à l intérieur ce soir', 'resta in casa', 'Resta in casa stasera', 'drinnen bleiben', 'Bleib heute Abend drinnen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'O conserto',
            'desc' => 'Chamar o técnico quando algo quebra em casa.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'Quebrou',
                    'teoria' => dteoria(
                        "broken · leak · plumber · electrician\nThere is a leak. I call a plumber.",
                        "roto · fuga · fontanero · electricista\nHay una fuga. Llamo a un fontanero.",
                        "cassé · fuite · plombier · électricien\nIl y a une fuite. J’appelle un plombier.",
                        "rotto · perdita · idraulico · elettricista\nC’è una perdita. Chiamo un idraulico.",
                        "kaputt · Leck · Klempner · Elektriker\nEs gibt ein Leck. Ich rufe einen Klempner."
                    ),
                    'itens' => [
                        dlinha('quebrado', 'o fogão está quebrado', 'broken', 'The cooker is broken', 'roto', 'La cocina está rota', 'cassé', 'La cuisinière est cassée', 'rotto', 'Il fornello è rotto', 'kaputt', 'Der Herd ist kaputt'),
                        dlinha('vazamento', 'há um vazamento', 'leak', 'There is a leak', 'fuga', 'Hay una fuga', 'fuite', 'Il y a une fuite', 'perdita', 'C è una perdita', 'Leck', 'Es gibt ein Leck'),
                        dlinha('encanador', 'chamo um encanador', 'plumber', 'I call a plumber', 'fontanero', 'Llamo a un fontanero', 'plombier', 'J appelle un plombier', 'idraulico', 'Chiamo un idraulico', 'Klempner', 'Ich rufe einen Klempner'),
                        dlinha('eletricista', 'precisamos de um eletricista', 'electrician', 'We need an electrician', 'electricista', 'Necesitamos un electricista', 'électricien', 'Nous avons besoin d un électricien', 'elettricista', 'Ci serve un elettricista', 'Elektriker', 'Wir brauchen einen Elektriker'),
                    ],
                ],
                [
                    'titulo' => 'O orçamento',
                    'teoria' => dteoria(
                        "quote · spare part · warranty · fix\nCan you send a quote? Is it under warranty?",
                        "presupuesto · recambio · garantía · arreglar\n¿Puede enviar un presupuesto? ¿Tiene garantía?",
                        "devis · pièce · garantie · réparer\nVous pouvez envoyer un devis ? C’est sous garantie ?",
                        "preventivo · ricambio · garanzia · riparare\nPuò mandare un preventivo? È in garanzia?",
                        "Kostenvoranschlag · Ersatzteil · Garantie · reparieren\nKönnen Sie einen Kostenvoranschlag schicken? Ist es in der Garantie?"
                    ),
                    'itens' => [
                        dlinha('orçamento', 'envie um orçamento', 'quote', 'Send a quote', 'presupuesto', 'Envíe un presupuesto', 'devis', 'Envoyez un devis', 'preventivo', 'Mandi un preventivo', 'Kostenvoranschlag', 'Schicken Sie einen Kostenvoranschlag'),
                        dlinha('peça', 'a peça chega amanhã', 'spare part', 'The spare part arrives tomorrow', 'recambio', 'El recambio llega mañana', 'pièce', 'La pièce arrive demain', 'ricambio', 'Il ricambio arriva domani', 'Ersatzteil', 'Das Ersatzteil kommt morgen'),
                        dlinha('garantia', 'ainda está na garantia', 'warranty', 'It is still under warranty', 'garantía', 'Todavía tiene garantía', 'garantie', 'C est encore sous garantie', 'garanzia', 'È ancora in garanzia', 'Garantie', 'Es ist noch in der Garantie'),
                        dlinha('consertar', 'dá para consertar', 'fix', 'Can you fix it', 'arreglar', 'Se puede arreglar', 'réparer', 'Vous pouvez le réparer', 'riparare', 'Si può riparare', 'reparieren', 'Können Sie es reparieren'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'No cabeleireiro',
            'desc' => 'Marcar corte, franja e o que não cortar.',
            'nivel' => 'A2',
            'aulas' => [
                [
                    'titulo' => 'O corte',
                    'teoria' => dteoria(
                        "haircut · fringe · shorter · the same\nA bit shorter, please. Keep the fringe the same.",
                        "corte · flequillo · más corto · igual\nUn poco más corto, por favor. El flequillo igual.",
                        "coupe · frange · plus court · pareil\nUn peu plus court, s’il vous plaît. La frange pareille.",
                        "taglio · frangia · più corto · uguale\nUn po’ più corto, per favore. La frangia uguale.",
                        "Haarschnitt · Pony · kürzer · gleich\nEtwas kürzer, bitte. Den Pony gleich lassen."
                    ),
                    'itens' => [
                        dlinha('corte', 'quero um corte simples', 'haircut', 'I want a simple haircut', 'corte', 'Quiero un corte sencillo', 'coupe', 'Je veux une coupe simple', 'taglio', 'Voglio un taglio semplice', 'Haarschnitt', 'Ich möchte einen einfachen Haarschnitt'),
                        dlinha('franja', 'a franja pode ficar', 'fringe', 'Keep the fringe', 'flequillo', 'Deja el flequillo', 'frange', 'Garde la frange', 'frangia', 'Lascia la frangia', 'Pony', 'Lass den Pony'),
                        dlinha('mais curto', 'um pouco mais curto', 'shorter', 'A bit shorter please', 'más corto', 'Un poco más corto por favor', 'plus court', 'Un peu plus court s il vous plaît', 'più corto', 'Un po più corto per favore', 'kürzer', 'Etwas kürzer bitte'),
                        dlinha('igual', 'o resto igual', 'the same', 'The rest the same', 'igual', 'El resto igual', 'pareil', 'Le reste pareil', 'uguale', 'Il resto uguale', 'gleich', 'Den Rest gleich'),
                    ],
                ],
                [
                    'titulo' => 'A hora',
                    'teoria' => dteoria(
                        "appointment · walk-in · wash · tip\nDo you take walk-ins? A wash and a cut, please.",
                        "cita · sin cita · lavado · propina\n¿Aceptan sin cita? Lavado y corte, por favor.",
                        "rendez-vous · sans rendez-vous · shampooing · pourboire\nVous prenez sans rendez-vous ? Shampooing et coupe, s’il vous plaît.",
                        "appuntamento · senza prenotazione · shampoo · mancia\nAccettate senza prenotazione? Shampoo e taglio, per favore.",
                        "Termin · ohne Termin · waschen · Trinkgeld\nNehmen Sie ohne Termin? Waschen und schneiden, bitte."
                    ),
                    'itens' => [
                        dlinha('horário marcado', 'tenho horário às três', 'appointment', 'I have an appointment at three', 'cita', 'Tengo cita a las tres', 'rendez-vous', 'J ai rendez-vous à quinze heures', 'appuntamento', 'Ho un appuntamento alle tre', 'Termin', 'Ich habe um drei einen Termin'),
                        dlinha('encaixe', 'aceitam encaixe', 'walk-in', 'Do you take walk-ins', 'sin cita', 'Aceptan sin cita', 'sans rendez-vous', 'Vous prenez sans rendez-vous', 'senza prenotazione', 'Accettate senza prenotazione', 'ohne Termin', 'Nehmen Sie ohne Termin'),
                        dlinha('lavar', 'lavar e cortar', 'wash', 'A wash and a cut', 'lavado', 'Lavado y corte', 'shampooing', 'Shampooing et coupe', 'shampoo', 'Shampoo e taglio', 'waschen', 'Waschen und schneiden'),
                        dlinha('gorjeta', 'fica a gorjeta', 'tip', 'Keep the tip', 'propina', 'Quedarse la propina', 'pourboire', 'Gardez le pourboire', 'mancia', 'Tenga la mancia', 'Trinkgeld', 'Behalten Sie das Trinkgeld'),
                    ],
                ],
            ],
        ],
    ];
}
