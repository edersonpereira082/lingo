# Gera includes/catalogo-rampa-*.php a partir de listas compactas.
# Cada unidade: 4 aulas × 4 termos únicos (pt|en|es|fr|it|de).

from pathlib import Path

ROOT = Path(r"c:\xampp\htdocs\lingo\includes")


def php_escape(s: str) -> str:
    return s.replace("\\", "\\\\").replace("'", "\\'")


def emit_fn(name: str, units: list) -> str:
    lines = ["<?php", "", f"function {name}(): array", "{", "    return ["]
    for titulo, desc, nivel, aulas in units:
        lines.append(f"        ['{php_escape(titulo)}', '{php_escape(desc)}', '{nivel}', [")
        for atit, pipes in aulas:
            inner = ", ".join(f"'{php_escape(p)}'" for p in pipes)
            lines.append(f"            ['{php_escape(atit)}', [{inner}]],")
        lines.append("        ]],")
    lines.append("    ];")
    lines.append("}")
    lines.append("")
    return "\n".join(lines)


A1 = [
    ("Na padaria", "Pedir pão, leite e café para viagem.", "A1", [
        ("O pedido", ["pão de forma|sliced bread|pan de molde|pain de mie|pane in cassetta|Toastbrot", "croissant|croissant|cruasán|croissant|cornetto|Croissant", "leite quente|hot milk|leche caliente|lait chaud|latte caldo|heiße Milch", "café curto|espresso|café solo|café serré|caffè corto|Espresso"]),
        ("Na vitrine", ["sonho|cream puff|berlin|chou à la crème|bombolone|Berliner", "broa|cornbread|bollo de maíz|pain de maïs|pane di mais|Maisbrot", "baguete|baguette|baguette|baguette|baguette|Baguette", "rosca|ring bun|rosca|couronne|ciambella|Kranz"]),
        ("Para viagem", ["copo de papel|paper cup|vaso de papel|gobelet|bicchiere di carta|Pappbecher", "saco de pão|bread bag|bolsa de pan|sac à pain|sacchetto del pane|Brottüte", "tampa|lid|tapa|couvercle|coperchio|Deckel", "canudo|straw|pajita|paille|cannuccia|Strohhalm"]),
        ("No caixa", ["troco|change|cambio|monnaie|resto|Wechselgeld", "nota fiscal|receipt|ticket|ticket de caisse|scontrino|Kassenbon", "fila do pão|bakery line|cola del pan|file du pain|coda del pane|Brotschlange", "fechado à tarde|closed in the afternoon|cerrado por la tarde|fermé l après-midi|chiuso nel pomeriggio|nachmittags zu"]),
    ]),
    ("No açougue", "Pedir corte, peso e o que levar para o churrasco.", "A1", [
        ("O corte", ["alcatra|rump steak|solomillo|rumsteck|scamone|Hüfte", "costela|ribs|costilla|travers|costine|Rippchen", "moída|minced meat|carne picada|viande hachée|macinato|Hackfleisch", "frango|chicken|pollo|poulet|pollo|Hähnchen"]),
        ("O peso", ["meio quilo|half a kilo|medio kilo|un demi-kilo|mezzo chilo|ein halbes Kilo", "fatia fina|thin slice|loncha fina|tranche fine|fetta sottile|dünne Scheibe", "com osso|on the bone|con hueso|avec os|con osso|mit Knochen", "sem pele|skinless|sin piel|sans peau|senza pelle|ohne Haut"]),
        ("Para o fogo", ["carvão|charcoal|carbón|charbon|carbone|Holzkohle", "espeto|skewer|pincho|brochette|spiedino|Spieß", "tempero|seasoning|adobo|assaisonnement|condimento|Gewürz", "linguiça|sausage|longaniza|saucisse|salsiccia|Wurst"]),
        ("Para levar", ["papel de carne|butcher paper|papel de carnicería|papier boucherie|carta da macellaio|Metzgerpapier", "gelo na bolsa|ice in the bag|hielo en la bolsa|glace dans le sac|ghiaccio nel sacco|Eis in der Tüte", "picado na hora|freshly minced|picado al momento|haché minute|macinato al momento|frisch gehackt", "ponto da carne|doneness|punto de la carne|cuisson|cottura|Gargrad"]),
    ]),
    ("Na feira", "Barraca, pechincha e o saco de feira.", "A1", [
        ("A barraca", ["tomate|tomato|tomate|tomate|pomodoro|Tomate", "alface|lettuce|lechuga|laitue|lattuga|Salat", "cenoura|carrot|zanahoria|carotte|carota|Karotte", "batata|potato|patata|pomme de terre|patata|Kartoffel"]),
        ("A pechincha", ["mais barato|cheaper|más barato|moins cher|più economico|billiger", "leve três|take three|llévate tres|prends-en trois|prendine tre|nimm drei", "maduro hoje|ripe today|maduro hoy|mûr aujourd hui|maturo oggi|heute reif", "a granel|loose|a granel|en vrac|sfuso|lose"]),
        ("O saco", ["sacola|tote bag|bolsa|sac|borsa|Tasche", "peso da fruta|fruit weight|peso de la fruta|poids du fruit|peso della frutta|Fruchtgewicht", "raso o cheio|heaped or level|colmado o raso|comble ou rase|colmo o raso|gehäuft oder gestrichen", "folha molhada|wet leaf|hoja mojada|feuille mouillée|foglia bagnata|nasses Blatt"]),
        ("A conversa", ["bom dia feira|morning at the market|buenos días feria|bonjour au marché|buongiorno al mercato|Morgen auf dem Markt", "está doce|it is sweet|está dulce|c est doux|è dolce|es ist süß", "posso provar|can I taste|puedo probar|je peux goûter|posso assaggiare|darf ich kosten", "até semana que vem|see you next week|hasta la semana que viene|à la semaine prochaine|alla settimana prossima|bis nächste Woche"]),
    ]),
    ("Meses do ano", "Dizer o mês, o aniversário e a estação.", "A1", [
        ("Os meses", ["janeiro|January|enero|janvier|gennaio|Januar", "abril|April|abril|avril|aprile|April", "julho|July|julio|juillet|luglio|Juli", "outubro|October|octubre|octobre|ottobre|Oktober"]),
        ("O aniversário", ["meu aniversário|my birthday|mi cumpleaños|mon anniversaire|il mio compleanno|mein Geburtstag", "em março|in March|en marzo|en mars|a marzo|im März", "faz anos|turns years|cumple años|a des années|compie gli anni|hat Geburtstag", "bolo do mês|birthday cake|tarta de cumpleaños|gâteau d anniversaire|torta di compleanno|Geburtstagskuchen"]),
        ("As estações", ["verão|summer|verano|été|estate|Sommer", "inverno|winter|invierno|hiver|inverno|Winter", "outono|autumn|otoño|automne|autunno|Herbst", "primavera|spring|primavera|printemps|primavera|Frühling"]),
        ("O calendário", ["feriado|public holiday|festivo|jour férié|festività|Feiertag", "fim de mês|end of the month|fin de mes|fin du mois|fine mese|Monatsende", "próximo mês|next month|el mes que viene|le mois prochain|il mese prossimo|nächsten Monat", "este ano|this year|este año|cette année|quest anno|dieses Jahr"]),
    ]),
    ("No parque infantil", "Balanco, areia e o que a criança pede.", "A1", [
        ("O brinquedo", ["balanço|swing|columpio|balançoire|altalena|Schaukel", "escorregador|slide|tobogán|toboggan|scivolo|Rutsche", "gangorra|seesaw|balancín|bascule|bilico|Wippe", "caixa de areia|sandbox|arenero|bac à sable|sabbiera|Sandkasten"]),
        ("O pedido", ["me empurra|push me|empújame|pousse-moi|spingimi|schubs mich", "de novo|again|otra vez|encore|ancora|nochmal", "mais alto|higher|más alto|plus haut|più in alto|höher", "minha vez|my turn|mi turno|mon tour|il mio turno|ich bin dran"]),
        ("O cuidado", ["devagar|slowly|despacio|doucement|piano|langsam", "segura a mão|hold my hand|dame la mano|tiens ma main|dammi la mano|halt meine Hand", "não corre|do not run|no corras|ne cours pas|non correre|nicht rennen", "areia na mão|sand on the hand|arena en la mano|sable sur la main|sabbia sulla mano|Sand an der Hand"]),
        ("Hora de ir", ["vamos embora|let us go|vámonos|on s en va|andiamo|wir gehen", "um minutinho|one minute|un minutito|une minute|un minutino|eine Minute", "estou cansado|I am tired|estoy cansado|je suis fatigué|sono stanco|ich bin müde", "água por favor|water please|agua por favor|de l eau s il te plaît|acqua per favore|Wasser bitte"]),
    ]),
    ("Na praia simples", "Toalha, sombra e o mar raso.", "A1", [
        ("O que levar", ["toalha de praia|beach towel|toalla de playa|serviette de plage|telo mare|Strandtuch", "protetor|sunscreen|protector|crème solaire|crema solare|Sonnencreme", "chapéu|hat|sombrero|chapeau|cappello|Hut", "chinelo|flip-flop|chancla|tong|ciabatta|Flipflop"]),
        ("Na areia", ["guarda-sol|beach umbrella|sombrilla|parasol|ombrellone|Sonnenschirm", "castelo de areia|sandcastle|castillo de arena|château de sable|castello di sabbia|Sandburg", "concha|seashell|concha|coquillage|conchiglia|Muschel", "areia quente|hot sand|arena caliente|sable chaud|sabbia calda|heißer Sand"]),
        ("No mar", ["raso|shallow|poco profundo|peu profond|basso|flach", "onda pequena|small wave|ola pequeña|petite vague|onda piccola|kleine Welle", "pé na água|feet in the water|pies en el agua|pieds dans l eau|piedi in acqua|Füße im Wasser", "frio demais|too cold|demasiado frío|trop froid|troppo freddo|zu kalt"]),
        ("Hora do lanche", ["água de coco|coconut water|agua de coco|eau de coco|acqua di cocco|Kokoswasser", "milho|corn on the cob|elote|maïs|pannocchia|Maiskolben", "guarda as coisas|watch the stuff|cuida las cosas|surveille les affaires|guarda le cose|pass auf die Sachen auf", "banho de doce|freshwater rinse|ducha dulce|douche d eau douce|doccia dolce|Süßwasserdusche"]),
    ]),
    ("A sala de estar", "Sofá, controle e a luz da sala.", "A1", [
        ("Os móveis", ["sofá|sofa|sofá|canapé|divano|Sofa", "poltrona|armchair|sillón|fauteuil|poltrona|Sessel", "mesa de centro|coffee table|mesa de centro|table basse|tavolino|Couchtisch", "estante|bookshelf|estantería|étagère|scaffale|Regal"]),
        ("A luz", ["abajur|lamp|lámpara|lampe|lampada|Lampe", "cortina|curtain|cortina|rideau|tenda|Vorhang", "interrupte|light switch|interruptor|interrupteur|interruttore|Lichtschalter", "escuro demais|too dark|demasiado oscuro|trop sombre|troppo buio|zu dunkel"]),
        ("O controle", ["controle remoto|remote|mando|télécommande|telecomando|Fernbedienung", "volume baixo|low volume|volumen bajo|volume bas|volume basso|leise", "canal|channel|canal|chaîne|canale|Kanal", "mudo na TV|TV mute|silencio en la tele|muet à la télé|muto in TV|Stumm im Fernseher"]),
        ("Conforto", ["almofada|cushion|cojín|coussin|cuscino|Kissen", "manta|throw blanket|manta|plaid|plaid|Plaid", "quente aqui|warm in here|calor aquí|il fait chaud ici|fa caldo qui|hier ist warm", "abre a janela|open the window|abre la ventana|ouvre la fenêtre|apri la finestra|mach das Fenster auf"]),
    ]),
    ("O quarto", "Cama, despertador e a roupa no chão.", "A1", [
        ("A cama", ["travesseiro|pillow|almohada|oreiller|cuscino|Kopfkissen", "lençol|sheet|sábana|drap|lenzuolo|Betttuch", "cobertor|blanket|edredón|couverture|coperta|Decke", "colchão|mattress|colchón|matelas|materasso|Matratze"]),
        ("A rotina", ["despertador|alarm clock|despertador|réveil|sveglia|Wecker", "sono tarde|I sleep late|duermo tarde|je me couche tard|vado a letto tardi|ich gehe spät schlafen", "acordar cedo|wake up early|despertar temprano|se lever tôt|svegliarsi presto|früh aufstehen", "soneca|nap|siesta|sieste|pisolino|Nickerchen"]),
        ("A roupa", ["no chão|on the floor|en el suelo|par terre|per terra|auf dem Boden", "no cabide|on the hanger|en la percha|sur le cintre|sulla gruccia|am Bügel", "gaveta|drawer|cajón|tiroir|cassetto|Schublade", "sujo ainda|still dirty|sigue sucio|encore sale|ancora sporco|noch schmutzig"]),
        ("A ordem", ["faz a cama|make the bed|haz la cama|fais le lit|fai il letto|mach das Bett", "abre a janela do quarto|open the bedroom window|abre la ventana del cuarto|ouvre la fenêtre de la chambre|apri la finestra della camera|öffne das Schlafzimmerfenster", "luz apagada|light off|luz apagada|lumière éteinte|luce spenta|Licht aus", "boa noite quarto|good night bedroom|buenas noches cuarto|bonne nuit chambre|buonanotte stanza|gute Nacht Zimmer"]),
    ]),
    ("O jardim", "Planta, mangueira e a terra molhada.", "A1", [
        ("A planta", ["vaso|plant pot|maceta|pot|vaso|Topf", "flor|flower|flor|fleur|fiore|Blume", "folha|leaf|hoja|feuille|foglia|Blatt", "semente|seed|semilla|graine|seme|Samen"]),
        ("A água", ["mangueira|hose|manguera|tuyau|tubo|Schlauch", "regador|watering can|regadera|arrosoir|annaffiatoio|Gießkanne", "terra molhada|wet soil|tierra mojada|terre mouillée|terra bagnata|nasse Erde", "demais água|too much water|demasiada agua|trop d eau|troppa acqua|zu viel Wasser"]),
        ("O trabalho", ["pá|spade|pala|pelle|pala|Spaten", "luva de jardim|garden glove|guante de jardín|gant de jardin|guanto da giardino|Gartenhandschuh", "erva daninha|weed|mala hierba|mauvaise herbe|erba cattiva|Unkraut", "poda|pruning|poda|taille|potatura|Schnitt"]),
        ("O tempo", ["sol no jardim|sun in the garden|sol en el jardín|soleil dans le jardin|sole in giardino|Sonne im Garten", "sombra da árvore|tree shade|sombra del árbol|ombre de l arbre|ombra dell albero|Baumschatten", "chuva boa|good rain|lluvia buena|bonne pluie|pioggia buona|guter Regen", "seco demais|too dry|demasiado seco|trop sec|troppo secco|zu trocken"]),
    ]),
    ("Bebidas", "Pedir água, suco, chá e o que não tem gás.", "A1", [
        ("Sem álcool", ["água com gás|sparkling water|agua con gas|eau gazeuse|acqua frizzante|Sprudel", "água sem gás|still water|agua sin gas|eau plate|acqua naturale|stilles Wasser", "suco de laranja|orange juice|zumo de naranja|jus d orange|spremuta d arancia|Orangensaft", "chá gelado|iced tea|té helado|thé glacé|tè freddo|Eistee"]),
        ("Quente", ["chá|tea|té|thé|tè|Tee", "chocolate quente|hot chocolate|chocolate caliente|chocolat chaud|cioccolata calda|Heiße Schokolade", "café com leite|coffee with milk|café con leche|café au lait|caffè latte|Milchkaffee", "sem açúcar|no sugar|sin azúcar|sans sucre|senza zucchero|ohne Zucker"]),
        ("O copo", ["gelo|ice|hielo|glace|ghiaccio|Eis", "canudo de papel|paper straw|pajita de papel|paille en papier|cannuccia di carta|Papierhalm", "copo grande|large glass|vaso grande|grand verre|bicchiere grande|großes Glas", "para levar gelado|iced to go|para llevar frío|à emporter froid|da asporto freddo|kalt zum Mitnehmen"]),
        ("Não quero", ["sem gelo|no ice|sin hielo|sans glace|senza ghiaccio|ohne Eis", "pouco doce|not too sweet|poco dulce|pas trop sucré|poco dolce|nicht zu süß", "tem suco natural|is there fresh juice|hay zumo natural|il y a du jus frais|c è succo fresco|gibt es frischen Saft", "só água|just water|solo agua|juste de l eau|solo acqua|nur Wasser"]),
    ]),
    ("Sobremesas", "Doce, colher e um pedaço pequeno.", "A1", [
        ("O doce", ["bolo|cake|pastel|gâteau|torta|Kuchen", "pudim|flan|flan|flan|budino|Pudding", "sorvete|ice cream|helado|glace|gelato|Eis", "fruta picada|cut fruit|fruta picada|fruit coupé|frutta tagliata|geschnittenes Obst"]),
        ("O pedido", ["um pedaço|a slice|un trozo|une part|una fetta|ein Stück", "pequeno|small one|pequeño|petit|piccolo|klein", "com calda|with sauce|con salsa|avec coulis|con salsa|mit Soße", "sem chantilly|no cream|sin nata|sans chantilly|senza panna|ohne Sahne"]),
        ("A mesa", ["colher|spoon|cuchara|cuillère|cucchiaio|Löffel", "prato de sobremesa|dessert plate|plato de postre|assiette à dessert|piatto da dessert|Dessertteller", "guarda-napos|napkin|servilleta|serviette|tovagliolo|Serviette", "está gelado|it is cold", "está frío|c est froid|è freddo|es ist kalt"]),
        ("Depois", ["estou cheio|I am full|estoy lleno|je suis rassasié|sono sazio|ich bin satt", "muito doce|too sweet|muy dulce|trop sucré|troppo dolce|zu süß", "mais um pouco|a bit more|un poco más|un peu plus|ancora un po|noch ein bisschen", "a conta com o doce|the bill with dessert|la cuenta con el postre|l addition avec le dessert|il conto col dolce|die Rechnung mit Dessert"]),
    ]),
    ("Números grandes", "Cem, mil e o preço redondo.", "A1", [
        ("As centenas", ["cem|one hundred|cien|cent|cento|hundert", "duzentos|two hundred|doscientos|deux cents|duecento|zweihundert", "quinhentos|five hundred|quinientos|cinq cents|cinquecento|fünfhundert", "mil|one thousand|mil|mille|mille|tausend"]),
        ("O preço", ["cem reais|one hundred reais|cien reales|cent réaux|cento reais|hundert Reais", "é mil|it is one thousand|son mil|c est mille|è mille|es ist tausend", "quase duzentos|almost two hundred|casi doscientos|presque deux cents|quasi duecento|fast zweihundert", "redondo|round number|redondo|chiffre rond|tondo|runde Zahl"]),
        ("A quantidade", ["cento e um|one hundred and one|ciento uno|cent un|centouno|hunderteins", "mil e um|one thousand and one|mil uno|mille un|milleuno|tausendundeins", "meio mil|half a thousand|medio mil|cinq cents|cinquecento|fünfhundert", "mais de mil|more than a thousand|más de mil|plus de mille|più di mille|mehr als tausend"]),
        ("Na loja", ["quanto é|how much is it|cuánto es|c est combien|quanto costa|wie viel kostet das", "caro demais|too expensive|demasiado caro|trop cher|troppo caro|zu teuer", "tem desconto|is there a discount|hay descuento|il y a une réduction|c è uno sconto|gibt es Rabatt", "levo dois|I will take two|me llevo dos|j en prends deux|ne prendo due|ich nehme zwei"]),
    ]),
    ("Formas e tamanhos", "Redondo, quadrado, grande e o que não cabe.", "A1", [
        ("A forma", ["redondo|round|redondo|rond|rotondo|rund", "quadrado|square|cuadrado|carré|quadrato|quadratisch", "longo|long|largo|long|lungo|lang", "curto|short|corto|court|corto|kurz"]),
        ("O tamanho", ["grande|big|grande|grand|grande|groß", "pequeno|small|pequeño|petit|piccolo|klein", "médio|medium|mediano|moyen|medio|mittel", "enorme|huge|enorme|énorme|enorme|riesig"]),
        ("Cabe ou não", ["cabe na bolsa|it fits in the bag|cabe en la bolsa|ça rentre dans le sac|entra nella borsa|es passt in die Tasche", "não cabe|it does not fit|no cabe|ça ne rentre pas|non entra|es passt nicht", "muito alto|too tall|demasiado alto|trop haut|troppo alto|zu hoch", "muito largo|too wide|demasiado ancho|trop large|troppo largo|zu breit"]),
        ("Comparar", ["maior que|bigger than|más grande que|plus grand que|più grande di|größer als", "menor que|smaller than|más pequeño que|plus petit que|più piccolo di|kleiner als", "do mesmo tamanho|the same size|del mismo tamaño|de la même taille|della stessa taglia|gleich groß", "quase cabe|it almost fits|casi cabe|ça rentre presque|entra quasi|es passt fast"]),
    ]),
    ("Família estendida", "Tio, primo, sogro e o sobrenome.", "A1", [
        ("Os parentes", ["tio|uncle|tío|oncle|zio|Onkel", "tia|aunt|tía|tante|zia|Tante", "primo|cousin|primo|cousin|cugino|Cousin", "prima|female cousin|prima|cousine|cugina|Cousine"]),
        ("Do outro lado", ["sogro|father-in-law|suegro|beau-père|suocero|Schwiegervater", "sogra|mother-in-law|suegra|belle-mère|suocera|Schwiegermutter", "cunhado|brother-in-law|cuñado|beau-frère|cognato|Schwager", "neta|granddaughter|nieta|petite-fille|nipote|Enkelin"]),
        ("O nome", ["sobrenome|last name|apellido|nom de famille|cognome|Nachname", "nome do meio|middle name|segundo nombre|deuxième prénom|secondo nome|Zweitname", "apelido|nickname|apodo|surnom|soprannome|Spitzname", "como se chama|what is the name|cómo se llama|comment il s appelle|come si chiama|wie heißt er"]),
        ("A visita", ["vem jantar|comes for dinner|viene a cenar|vient dîner|viene a cena|kommt zum Abendessen", "mora longe|lives far|vive lejos|habite loin|abita lontano|wohnt weit", "é da família|is family|es de la familia|c est de la famille|è di famiglia|ist Familie", "traga a prima|bring your cousin|trae a la prima|amène la cousine|porta la cugina|bring die Cousine mit"]),
    ]),
    ("Verbos de movimento", "Ir, vir, subir e esperar no ponto.", "A1", [
        ("Ir e vir", ["eu vou|I go|yo voy|je vais|io vado|ich gehe", "eu venho|I come|yo vengo|je viens|io vengo|ich komme", "ele sai|he leaves|él sale|il sort|lui esce|er geht", "nós entramos|we go in|entramos|nous entrons|entriamo|wir gehen hinein"]),
        ("Sobe e desce", ["subir|to go up|subir|monter|salire|hochgehen", "descer|to go down|bajar|descendre|scendere|runtergehen", "esperar|to wait|esperar|attendre|aspettare|warten", "parar|to stop|parar|s arrêter|fermarsi|anhalten"]),
        ("No ponto", ["o ônibus para|the bus stops|el bus para|le bus s arrête|il bus si ferma|der Bus hält", "eu desço aqui|I get off here|bajo aquí|je descends ici|scendo qui|ich steige hier aus", "sobe rápido|get on fast|sube rápido|monte vite|sali veloce|steig schnell ein", "perdeu a parada|missed the stop|perdió la parada|a raté l arrêt|ha perso la fermata|hat die Haltestelle verpasst"]),
        ("Combinado", ["te espero|I will wait for you|te espero|je t attends|ti aspetto|ich warte auf dich", "já estou indo|I am already going|ya voy|j y vais déjà|sto già andando|ich gehe schon", "volta cedo|come back early|vuelve temprano|rentre tôt|torna presto|komm früh zurück", "não se atrase|do not be late|no te atrasés|ne sois pas en retard|non fare tardi|komm nicht zu spät"]),
    ]),
    ("Na recepção simples", "Nome, quarto e a chave do hotel.", "A1", [
        ("A chegada", ["tenho reserva|I have a booking|tengo reserva|j ai une réservation|ho una prenotazione|ich habe eine Buchung", "o nome é|the name is|el nombre es|le nom est|il nome è|der Name ist", "uma noite|one night|una noche|une nuit|una notte|eine Nacht", "dois quartos|two rooms|dos habitaciones|deux chambres|due camere|zwei Zimmer"]),
        ("O quarto", ["cama de casal|double bed|cama de matrimonio|lit double|letto matrimoniale|Doppelbett", "vista para a rua|street view|vista a la calle|vue sur la rue|vista sulla strada|Blick auf die Straße", "andar alto|high floor|piso alto|étage élevé|piano alto|hohes Stockwerk", "perto do elevador|near the lift|cerca del ascensor|près de l ascenseur|vicino all ascensore|nah am Aufzug"]),
        ("A chave", ["chave do quarto|room key|llave de la habitación|clé de chambre|chiave della camera|Zimmerschlüssel", "cartão da porta|key card|tarjeta de la puerta|carte de porte|tessera della porta|Zimmerkarte", "café incluso|breakfast included|desayuno incluido|petit déjeuner compris|colazione inclusa|Frühstück inklusive", "até que horas|until what time|hasta qué hora|jusqu à quelle heure|fino a che ora|bis wann"]),
        ("Um pedido", ["toalha extra|extra towel|toalla extra|serviette en plus|asciugamano extra|zusätzliches Handtuch", "wifi da recepção|lobby wifi|wifi de recepción|wifi de la réception|wifi della reception|WLAN an der Rezeption", "onde fica o café|where is breakfast|dónde está el desayuno|où est le petit déjeuner|dov è la colazione|wo ist das Frühstück", "pode guardar a mala|can you store the bag|puede guardar la maleta|vous pouvez garder le sac|può tenere la valigia|können Sie die Tasche aufbewahren"]),
    ]),
    ("Pedir o caminho curto", "Reto, segunda à direita e o ponto de ônibus.", "A1", [
        ("As direções", ["siga reto|go straight|siga recto|allez tout droit|vai dritto|gehen Sie geradeaus", "segunda à direita|second on the right|segunda a la derecha|deuxième à droite|seconda a destra|zweite rechts", "primeira à esquerda|first on the left|primera a la izquierda|première à gauche|prima a sinistra|erste links", "no semáforo|at the lights|en el semáforo|au feu|al semaforo|an der Ampel"]),
        ("O lugar", ["é longe|it is far|está lejos|c est loin|è lontano|es ist weit", "é perto|it is near|está cerca|c est près|è vicino|es ist nah", "cinco minutos a pé|five minutes on foot|cinco minutos a pie|cinq minutes à pied|cinque minuti a piedi|fünf Minuten zu Fuß", "do outro lado|on the other side|al otro lado|de l autre côté|dall altra parte|auf der anderen Seite"]),
        ("O ponto", ["ponto de ônibus|bus stop|parada de bus|arrêt de bus|fermata del bus|Bushaltestelle", "estação mais perto|nearest station|estación más cercana|gare la plus proche|stazione più vicina|nächster Bahnhof", "esta rua|this street|esta calle|cette rue|questa strada|diese Straße", "aquela praça|that square|esa plaza|cette place|quella piazza|jener Platz"]),
        ("Confirmar", ["entendi|I got it|entendido|j ai compris|ho capito|verstanden", "pode repetir|can you repeat|puede repetir|vous pouvez répéter|può ripetere|können Sie wiederholen", "obrigado pela ajuda|thanks for the help|gracias por la ayuda|merci pour l aide|grazie per l aiuto|danke für die Hilfe", "acho que é aqui|I think it is here|creo que es aquí|je crois que c est ici|credo che sia qui|ich denke es ist hier"]),
    ]),
    ("Nacionalidades extra", "Dizer de onde é e a língua que fala.", "A1", [
        ("De onde", ["sou brasileiro|I am Brazilian|soy brasileño|je suis brésilien|sono brasiliano|ich bin Brasilianer", "ela é argentina|she is Argentine|ella es argentina|elle est argentine|lei è argentina|sie ist Argentinierin", "ele é alemão|he is German|él es alemán|il est allemand|lui è tedesco|er ist Deutscher", "somos italianos|we are Italian|somos italianos|nous sommes italiens|siamo italiani|wir sind Italiener"]),
        ("A língua", ["falo português|I speak Portuguese|hablo portugués|je parle portugais|parlo portoghese|ich spreche Portugiesisch", "ela fala espanhol|she speaks Spanish|ella habla español|elle parle espagnol|lei parla spagnolo|sie spricht Spanisch", "um pouco de francês|a little French|un poco de francés|un peu de français|un po di francese|ein bisschen Französisch", "não falo alemão|I do not speak German|no hablo alemán|je ne parle pas allemand|non parlo tedesco|ich spreche kein Deutsch"]),
        ("A cidade", ["moro em Recife|I live in Recife|vivo en Recife|j habite à Recife|abito a Recife|ich wohne in Recife", "nasci em Lisboa|I was born in Lisbon|nací en Lisboa|je suis né à Lisbonne|sono nato a Lisbona|ich bin in Lissabon geboren", "trabalho em Lyon|I work in Lyon|trabajo en Lyon|je travaille à Lyon|lavoro a Lione|ich arbeite in Lyon", "estudo em Berlim|I study in Berlin|estudio en Berlín|j étudie à Berlin|studio a Berlino|ich studiere in Berlin"]),
        ("A pergunta", ["de onde você é|where are you from|de dónde eres|tu es d où", "di dove sei|woher kommst du", "qual língua você fala|which language do you speak|qué lengua hablas|tu parles quelle langue|che lingua parli|welche Sprache sprichst du", "você é daqui|are you from here|eres de aquí|tu es d ici|sei di qui|kommst du von hier", "há quanto tempo|how long|cuánto tiempo|depuis quand|da quanto|seit wann"]),
    ]),
]

# fix last unit - I may have broken the 4-tuple structure for "A pergunta"
# I'll validate in Python when emitting
print("A1 units", len(A1))
for i, u in enumerate(A1):
    assert len(u) == 4, i
    for j, a in enumerate(u[3]):
        assert len(a) == 2, (i, j)
        assert len(a[1]) == 4, (u[0], a[0], len(a[1]), a[1])
print("A1 ok")
