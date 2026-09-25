<?php

function volume_it(): array
{
    return [
        'palavras' => [
            ['Testa', 'Cabeça', 'Mi fa male la testa.', 'A1'],
            ['Autobus', 'Ônibus', 'L’autobus è in ritardo.', 'A2'],
            ['Orgoglioso', 'Orgulhoso', 'Sono orgoglioso di te.', 'B1'],
            ['Disuguaglianza', 'Desigualdade', 'La disuguaglianza aumenta.', 'C1'],
        ],
        'unidades' => array_merge(volume_it_a1(), volume_it_a2(), volume_it_b(), volume_it_c()),
    ];
}

function volume_it_a1(): array
{
    return [
        uni_lista('Corpo', 'Partes do corpo para se virar no médico.', 'A1', [
            aula_lista('Cabeça e mãos', "testa · mano · occhio · piede\nMi fa male la testa.", [
                vitem('testa', 'cabeça', 'Mi fa male la testa', 'minha cabeça dói'),
                vitem('mano', 'mão', 'Lavati le mani', 'lave as mãos'),
                vitem('occhio', 'olho', 'Chiudi gli occhi', 'feche os olhos'),
                vitem('piede', 'pé', 'Il piede è stanco', 'meu pé está cansado'),
            ]),
            aula_lista('No médico', "braccio · schiena · stomaco · bocca\nDove le fa male?", [
                vitem('braccio', 'braço', 'Mi fa male il braccio', 'meu braço dói'),
                vitem('schiena', 'costas', 'Ho mal di schiena', 'tenho dor nas costas'),
                vitem('stomaco', 'estômago', 'Mi fa male lo stomaco', 'meu estômago dói'),
                vitem('bocca', 'boca', 'Apri la bocca', 'abra a boca'),
            ]),
        ]),
        uni_lista('Na escola', 'Objetos e a sala de aula.', 'A1', [
            aula_lista('Material', "penna · libro · zaino · quaderno\nMi serve una penna.", [
                vitem('penna', 'caneta', 'Mi serve una penna', 'preciso de uma caneta'),
                vitem('libro', 'livro', 'Questo libro è nuovo', 'este livro é novo'),
                vitem('zaino', 'mochila', 'Lo zaino è pesante', 'minha mochila está pesada'),
                vitem('quaderno', 'caderno', 'Apri il quaderno', 'abra o caderno'),
            ]),
            aula_lista('A sala', "classe · insegnante · studente · banco\nLa classe è piccola.", [
                vitem('classe', 'sala de aula', 'La classe è piccola', 'a sala de aula é pequena'),
                vitem('insegnante', 'professor(a)', 'La nostra insegnante è gentile', 'nossa professora é gentil'),
                vitem('studente', 'aluno(a)', 'Sono uno studente', 'eu sou estudante'),
                vitem('banco', 'carteira', 'Siediti al banco', 'sente-se na sua carteira'),
            ]),
        ]),
        uni_lista('Animais', 'Pets e animais comuns.', 'A1', [
            aula_lista('Em casa', "cane · gatto · uccello · pesce\nHo un cane.", [
                vitem('cane', 'cão', 'Ho un cane', 'eu tenho um cachorro'),
                vitem('gatto', 'gato', 'Il gatto è nero', 'o gato é preto'),
                vitem('uccello', 'pássaro', 'L uccello canta', 'o pássaro canta'),
                vitem('pesce', 'peixe', 'Il pesce è piccolo', 'o peixe é pequeno'),
            ]),
            aula_lista('Na fazenda', "mucca · cavallo · gallina · pecora\nIl cavallo è veloce.", [
                vitem('mucca', 'vaca', 'La mucca è nel campo', 'a vaca está no campo'),
                vitem('cavallo', 'cavalo', 'Il cavallo è veloce', 'o cavalo é rápido'),
                vitem('gallina', 'galinha', 'La gallina è bianca', 'a galinha é branca'),
                vitem('pecora', 'ovelha', 'La pecora è tranquilla', 'a ovelha é quieta'),
            ]),
        ]),
        uni_lista('Lugares da cidade', 'Banco, parque, farmácia, praça.', 'A1', [
            aula_lista('Onde fica', "parco · banca · farmacia · piazza\nDov è il parco?", [
                vitem('parco', 'parque', 'Dov è il parco', 'onde fica o parque'),
                vitem('banca', 'banco', 'La banca è chiusa', 'o banco está fechado'),
                vitem('farmacia', 'farmácia', 'Mi serve una farmacia', 'preciso de uma farmácia'),
                vitem('piazza', 'praça', 'Ci vediamo in piazza', 'a gente se encontra na praça'),
            ]),
            aula_lista('Mais lugares', "mercato · biblioteca · museo · cinema\nLa biblioteca è gratis.", [
                vitem('mercato', 'mercado', 'Il mercato è pieno', 'o mercado está cheio'),
                vitem('biblioteca', 'biblioteca', 'La biblioteca è silenziosa', 'a biblioteca é silenciosa'),
                vitem('museo', 'museu', 'Il museo apre alle dieci', 'o museu abre às dez'),
                vitem('cinema', 'cinema', 'Il cinema è qui vicino', 'o cinema é aqui perto'),
            ]),
        ]),
        uni_lista('Mais comida', 'Refeições e pratos simples.', 'A1', [
            aula_lista('No prato', "riso · zuppa · frutta · formaggio\nMangio riso e zuppa.", [
                vitem('riso', 'arroz', 'Mangio riso', 'eu como arroz'),
                vitem('zuppa', 'sopa', 'La zuppa è calda', 'a sopa está quente'),
                vitem('frutta', 'fruta', 'Mi piace la frutta', 'eu gosto de fruta'),
                vitem('formaggio', 'queijo', 'Il formaggio è buono', 'o queijo é bom'),
            ]),
            aula_lista('Refeições', "colazione · pranzo · cena · merenda\nLa colazione è alle otto.", [
                vitem('colazione', 'café da manhã', 'La colazione è alle otto', 'o café da manhã é às oito'),
                vitem('pranzo', 'almoço', 'Il pranzo è a mezzogiorno', 'o almoço é ao meio-dia'),
                vitem('cena', 'jantar', 'La cena è tardi', 'o jantar é tarde'),
                vitem('merenda', 'lanche', 'Voglio una merenda', 'quero um lanche'),
            ]),
        ]),
        uni_lista('Esportes A1', 'Jogar, nadar, correr, dançar.', 'A1', [
            aula_lista('Eu pratico', "calcio · nuotare · correre · ballare\nGioco a calcio il sabato.", [
                vitem('calcio', 'futebol', 'Gioco a calcio', 'eu jogo futebol'),
                vitem('nuotare', 'nadar', 'Nuoto la domenica', 'eu nado no domingo'),
                vitem('correre', 'correr', 'Corro nel parco', 'eu corro no parque'),
                vitem('ballare', 'dançar', 'Balliamo alla festa', 'nós dançamos na festa'),
            ]),
            aula_lista('Com amigos', "squadra · palla · partita · vincere\nLa nostra squadra può vincere.", [
                vitem('squadra', 'time', 'La nostra squadra è brava', 'nosso time é bom'),
                vitem('palla', 'bola', 'Passa la palla', 'passe a bola'),
                vitem('partita', 'jogo', 'La partita è alle cinque', 'o jogo é às cinco'),
                vitem('vincere', 'vencer', 'Possiamo vincere', 'nós podemos vencer'),
            ]),
        ]),
        uni_lista('Cores', 'Cores para descrever objetos e roupas.', 'A1', [
            aula_lista('As cores', "rosso · blu · verde · nero\nLa borsa è rossa.", [
                vitem('rosso', 'vermelho', 'La borsa è rossa', 'a bolsa é vermelha'),
                vitem('blu', 'azul', 'Il cielo è blu', 'o céu é azul'),
                vitem('verde', 'verde', 'Il parco è verde', 'o parque é verde'),
                vitem('nero', 'preto', 'Il gatto è nero', 'o gato é preto'),
            ]),
            aula_lista('Mais cores', "bianco · giallo · marrone · grigio\nVoglio una camicia bianca.", [
                vitem('bianco', 'branco', 'Voglio una camicia bianca', 'quero uma camisa branca'),
                vitem('giallo', 'amarelo', 'Il sole è giallo', 'o sol é amarelo'),
                vitem('marrone', 'marrom', 'Il tavolo è marrone', 'a mesa é marrom'),
                vitem('grigio', 'cinza', 'Il cielo è grigio', 'o céu está cinza'),
            ]),
        ]),
        uni_lista('De onde você é', 'País, cidade e nacionalidade — dados pessoais A1.', 'A1', [
            aula_lista('País', "di · Brasile · paese · città\nSono del Brasile.", [
                vitem('di', 'de', 'Sono del Brasile', 'eu sou do Brasil'),
                vitem('Brasile', 'Brasil', 'Il Brasile è grande', 'o Brasil é grande'),
                vitem('paese', 'país', 'Qual è il tuo paese', 'qual é o seu país'),
                vitem('città', 'cidade', 'La mia città è piccola', 'minha cidade é pequena'),
            ]),
            aula_lista('Nacionalidade', "brasiliano · lingua · vivo · dove\nVivo a São Paulo.", [
                vitem('brasiliano', 'brasileiro(a)', 'Sono brasiliano', 'eu sou brasileiro'),
                vitem('lingua', 'idioma', 'La mia lingua è il portoghese', 'meu idioma é o português'),
                vitem('vivo', 'moro', 'Vivo a São Paulo', 'eu moro em São Paulo'),
                vitem('dove', 'onde', 'Dove vivi', 'onde você mora'),
            ]),
        ]),
        uni_lista('Profissões A1', 'Dizer o que você faz, de forma simples.', 'A1', [
            aula_lista('O trabalho', "insegnante · medico · cuoco · autista\nSono insegnante.", [
                vitem('insegnante', 'professor(a)', 'Sono insegnante', 'eu sou professor'),
                vitem('medico', 'médico(a)', 'Lei è medica', 'ela é médica'),
                vitem('cuoco', 'cozinheiro(a)', 'Lui è cuoco', 'ele é cozinheiro'),
                vitem('autista', 'motorista', 'Mio padre è autista', 'meu pai é motorista'),
            ]),
            aula_lista('Onde trabalho', "lavoro · negozio · ufficio · ospedale\nLavoro in un negozio.", [
                vitem('lavoro', 'trabalho', 'Lavoro in un negozio', 'eu trabalho numa loja'),
                vitem('negozio', 'loja', 'Il negozio è aperto', 'a loja está aberta'),
                vitem('ufficio', 'escritório', 'Lei lavora in un ufficio', 'ela trabalha num escritório'),
                vitem('ospedale', 'hospital', 'L ospedale è vicino', 'o hospital é perto'),
            ]),
        ]),
        uni_lista('Telefone A1', 'Número, ligação e recado curto.', 'A1', [
            aula_lista('O número', "telefono · numero · chiama · messaggio\nQual è il tuo numero?", [
                vitem('telefono', 'telefone', 'Questo è il mio telefono', 'este é o meu telefone'),
                vitem('numero', 'número', 'Qual è il tuo numero', 'qual é o seu número'),
                vitem('chiama', 'liga', 'Per favore chiamami', 'por favor me ligue'),
                vitem('messaggio', 'mensagem', 'Invio un messaggio', 'eu mando uma mensagem'),
            ]),
            aula_lista('Atender', "pronto · parla · aspetta · dopo\nPronto, parla Ana.", [
                vitem('pronto', 'alô', 'Pronto sono Ana', 'alô aqui é a Ana'),
                vitem('parla', 'fala', 'Ana parla', 'Ana falando'),
                vitem('aspetta', 'espera', 'Per favore aspetta', 'por favor espere'),
                vitem('dopo', 'depois', 'Chiamami dopo', 'me ligue depois'),
            ]),
        ]),
        uni_lista('Que horas são', 'Horas cheias e combinados simples.', 'A1', [
            aula_lista('As horas', "in punto · e mezza · e un quarto · adesso\nSono le sette in punto.", [
                vitem('in punto', 'em ponto', 'Sono le sette in punto', 'são sete em ponto'),
                vitem('e mezza', 'e meia', 'Sono le otto e mezza', 'são oito e meia'),
                vitem('e un quarto', 'e quinze', 'Sono le nove e un quarto', 'são nove e quinze'),
                vitem('adesso', 'agora', 'Che ora è adesso', 'que horas são agora'),
            ]),
            aula_lista('O encontro', "incontriamo · alle · mattina · pomeriggio\nCi incontriamo alle dieci.", [
                vitem('incontriamo', 'encontramos', 'Ci incontriamo alle dieci', 'a gente se encontra às dez'),
                vitem('alle', 'às', 'Alle sei per favore', 'às seis por favor'),
                vitem('mattina', 'manhã', 'Di mattina', 'de manhã'),
                vitem('pomeriggio', 'tarde', 'Di pomeriggio', 'à tarde'),
            ]),
        ]),
        uni_lista('Endereço', 'Rua, número e cidade — formulário A1.', 'A1', [
            aula_lista('Onde mora', "via · indirizzo · cap · vivo\nVivo in questa via.", [
                vitem('via', 'rua', 'Vivo in questa via', 'eu moro nesta rua'),
                vitem('indirizzo', 'endereço', 'Qual è il tuo indirizzo', 'qual é o seu endereço'),
                vitem('cap', 'CEP', 'Il cap è 01310', 'o CEP é 01310'),
                vitem('vivo', 'moro', 'Dove vivi', 'onde você mora'),
            ]),
            aula_lista('O formulário', "compila · modulo · data · firma\nCompila il modulo.", [
                vitem('compila', 'preencha', 'Compila il modulo', 'preencha o formulário'),
                vitem('modulo', 'formulário', 'Questo modulo è corto', 'este formulário é curto'),
                vitem('data', 'data', 'Scrivi la data', 'escreva a data'),
                vitem('firma', 'assinatura', 'La tua firma per favore', 'sua assinatura por favor'),
            ]),
        ]),
    ];
}

function volume_it_a2(): array
{
    return [
        uni_lista('Afazeres em casa', 'Louça, roupa, lixo e ajudar em casa.', 'A2', [
            aula_lista('Tarefas', "piatti · bucato · spazzatura · aspirare\nLavo i piatti dopo cena.", [
                vitem('piatti', 'louça', 'Lavo i piatti', 'eu lavo a louça'),
                vitem('bucato', 'roupa', 'Faccio il bucato', 'eu lavo a roupa'),
                vitem('spazzatura', 'lixo', 'Porta fuori la spazzatura', 'leve o lixo para fora'),
                vitem('aspirare', 'aspirar', 'Per favore aspira la stanza', 'por favor aspire o quarto'),
            ]),
            aula_lista('Pedir ajuda', "faccenda · aiuto · sistema · pulisci\nPuoi aiutarmi?", [
                vitem('faccenda', 'afazer', 'Questa faccenda è facile', 'este afazer é fácil'),
                vitem('aiuto', 'ajuda', 'Puoi aiutarmi', 'você pode me ajudar'),
                vitem('sistema', 'arruma', 'Sistema la tua stanza', 'arrume o seu quarto'),
                vitem('pulisci', 'limpa', 'Pulisci la cucina', 'limpe a cozinha'),
            ]),
        ]),
        uni_lista('Transportes A2', 'Ônibus, metrô, ponto e bilhete.', 'A2', [
            aula_lista('Como ir', "autobus · metro · fermata · biglietto\nScendi alla prossima fermata.", [
                vitem('autobus', 'ônibus', 'L autobus è in ritardo', 'o ônibus está atrasado'),
                vitem('metro', 'metrô', 'Prendi la metro', 'pegue o metrô'),
                vitem('fermata', 'parada', 'La prossima fermata è Centrale', 'a próxima parada é Central'),
                vitem('biglietto', 'bilhete', 'Mi serve un biglietto', 'preciso de um bilhete'),
            ]),
            aula_lista('No caminho', "scendere · coincidenza · ritardo · binario\nCambiamo alla prossima stazione.", [
                vitem('scendere', 'descer', 'Scendi qui', 'desça aqui'),
                vitem('coincidenza', 'baldeação', 'Fai coincidenza a Centrale', 'faça baldeação em Central'),
                vitem('ritardo', 'atraso', 'Il treno è in ritardo', 'o trem está atrasado'),
                vitem('binario', 'plataforma', 'Binario tre', 'plataforma três'),
            ]),
        ]),
        uni_lista('Hobbies e lazer', 'Tempo livre, cinema, música, caminhada.', 'A2', [
            aula_lista('Tempo livre', "hobby · cinema · musica · camminare\nNel weekend vado a camminare.", [
                vitem('hobby', 'passatempo', 'Leggere è il mio hobby', 'ler é o meu passatempo'),
                vitem('cinema', 'cinema', 'Andiamo al cinema', 'vamos ao cinema'),
                vitem('musica', 'música', 'Ascolto musica', 'eu escuto música'),
                vitem('camminare', 'caminhar', 'Mi piace camminare', 'eu gosto de caminhar'),
            ]),
            aula_lista('Um convite', "libero · vieni · stasera · forse\nSei libero stasera?", [
                vitem('libero', 'livre', 'Sei libero stasera', 'você está livre hoje à noite'),
                vitem('vieni', 'venha', 'Vieni alle sette', 'venha às sete'),
                vitem('stasera', 'esta noite', 'A stasera', 'até esta noite'),
                vitem('forse', 'talvez', 'Forse domani', 'talvez amanhã'),
            ]),
        ]),
        uni_lista('Agora mesmo', 'Estar fazendo: o que está acontecendo.', 'A2', [
            aula_lista('Estou fazendo', "cucinando · leggendo · lavorando · aspettando\nSto cucinando ora.", [
                vitem('cucinando', 'cozinhando', 'Sto cucinando ora', 'estou cozinhando agora'),
                vitem('leggendo', 'lendo', 'Lei sta leggendo', 'ela está lendo'),
                vitem('lavorando', 'trabalhando', 'Lui sta lavorando', 'ele está trabalhando'),
                vitem('aspettando', 'esperando', 'Stiamo aspettando', 'estamos esperando'),
            ]),
            aula_lista('O que você está fazendo', "facendo · proprio ora · in questo momento · attualmente\nCosa stai facendo proprio ora?", [
                vitem('facendo', 'fazendo', 'Cosa stai facendo', 'o que você está fazendo'),
                vitem('proprio ora', 'agora mesmo', 'Sono occupato proprio ora', 'estou ocupado agora mesmo'),
                vitem('in questo momento', 'neste momento', 'Sono fuori in questo momento', 'estou fora neste momento'),
                vitem('attualmente', 'atualmente', 'Attualmente sto studiando', 'atualmente estou estudando'),
            ]),
        ]),
        uni_lista('Sempre e nunca', 'Advérbios de frequência.', 'A2', [
            aula_lista('Com que frequência', "sempre · di solito · a volte · mai\nBevo sempre il caffè.", [
                vitem('sempre', 'sempre', 'Bevo sempre il caffè', 'eu sempre bebo café'),
                vitem('di solito', 'geralmente', 'Di solito mi alzo presto', 'eu geralmente acordo cedo'),
                vitem('a volte', 'às vezes', 'A volte cammino', 'às vezes eu caminho'),
                vitem('mai', 'nunca', 'Non fumo mai', 'eu nunca fumo'),
            ]),
            aula_lista('Na rotina', "spesso · raramente · una volta · ogni giorno\nCi vado una volta a settimana.", [
                vitem('spesso', 'muitas vezes', 'Cucino spesso', 'eu cozinho muitas vezes'),
                vitem('raramente', 'raramente', 'Mangio raramente fuori', 'raramente como fora'),
                vitem('una volta', 'uma vez', 'Una volta a settimana', 'uma vez por semana'),
                vitem('ogni giorno', 'todo dia', 'Studio ogni giorno', 'estudo todo dia'),
            ]),
        ]),
        uni_lista('Recados curtos', 'Bilhete, SMS e e-mail simples do dia a dia.', 'A2', [
            aula_lista('Um bilhete', "biglietto · chiamami · sono in ritardo · a dopo\nSono in ritardo. Chiamami, per favore.", [
                vitem('biglietto', 'recado', 'Ho lasciato un biglietto', 'deixei um recado'),
                vitem('chiamami', 'me ligue', 'Per favore chiamami', 'por favor me ligue'),
                vitem('sono in ritardo', 'estou atrasado', 'Scusa sono in ritardo', 'desculpa estou atrasado'),
                vitem('a dopo', 'até logo', 'A dopo', 'até logo'),
            ]),
            aula_lista('E-mail simples', "gentile · cordiali saluti · ho bisogno · allegato\nGentile Ana, ho bisogno di aiuto oggi.", [
                vitem('gentile', 'prezado', 'Gentile Ana', 'prezada Ana'),
                vitem('cordiali saluti', 'atenciosamente', 'Cordiali saluti', 'atenciosamente'),
                vitem('ho bisogno', 'preciso', 'Ho bisogno di aiuto oggi', 'preciso de ajuda hoje'),
                vitem('allegato', 'anexo', 'Il file è allegato', 'o arquivo está em anexo'),
            ]),
        ]),
        uni_lista('No banco', 'Conta, dinheiro e um saque simples.', 'A2', [
            aula_lista('A conta', "conto · contanti · carta · prelevare\nVoglio prelevare contanti.", [
                vitem('conto', 'conta', 'Ho un conto', 'eu tenho uma conta'),
                vitem('contanti', 'dinheiro', 'Mi servono contanti', 'preciso de dinheiro'),
                vitem('carta', 'cartão', 'Pago con la carta', 'pago com cartão'),
                vitem('prelevare', 'sacar', 'Voglio prelevare contanti', 'quero sacar dinheiro'),
            ]),
            aula_lista('No caixa', "aprire · chiude · ricevuta · resto\nPosso avere una ricevuta?", [
                vitem('aprire', 'abrir', 'Voglio aprire un conto', 'quero abrir uma conta'),
                vitem('chiude', 'fecha', 'La banca chiude alle quattro', 'o banco fecha às quatro'),
                vitem('ricevuta', 'recibo', 'Posso avere una ricevuta', 'posso ter um recibo'),
                vitem('resto', 'troco', 'Tenga il resto', 'fique com o troco'),
            ]),
        ]),
        uni_lista('Uma ligação A2', 'Atender, deixar recado e marcar horário.', 'A2', [
            aula_lista('O recado', "attenda · disponibile · richiamare · segreteria\nAttenda. Non è disponibile.", [
                vitem('attenda', 'aguarde', 'Attenda un momento', 'aguarde um momento'),
                vitem('disponibile', 'disponível', 'Non è disponibile', 'não está disponível'),
                vitem('richiamare', 'retornar', 'La richiamo più tardi', 'eu retorno mais tarde'),
                vitem('segreteria', 'caixa postal', 'Lasci un messaggio in segreteria', 'deixe um recado na caixa postal'),
            ]),
            aula_lista('Marcar', "appuntamento · confermare · disdire · spostare\nDevo disdire l appuntamento.", [
                vitem('appuntamento', 'consulta', 'Ho un appuntamento', 'tenho um horário'),
                vitem('confermare', 'confirmar', 'Per favore confermi l orario', 'por favor confirme o horário'),
                vitem('disdire', 'cancelar', 'Devo disdire', 'preciso cancelar'),
                vitem('spostare', 'remarcar', 'Possiamo spostare', 'podemos remarcar'),
            ]),
        ]),
        uni_lista('Fim de semana', 'Contar o que fez e o que vai fazer.', 'A2', [
            aula_lista('Ontem', "ieri · scorso · sono rimasto · ho visitato\nIeri ho visitato mia zia.", [
                vitem('ieri', 'ontem', 'Ieri sono rimasto a casa', 'ontem fiquei em casa'),
                vitem('scorso', 'passado', 'Il weekend scorso era tranquillo', 'o último fim de semana foi calmo'),
                vitem('sono rimasto', 'fiquei', 'Sono rimasto a casa', 'fiquei em casa'),
                vitem('ho visitato', 'visitei', 'Ho visitato mia zia', 'visitei minha tia'),
            ]),
            aula_lista('O próximo', "prossimo · andiamo · forse · insieme\nSabato prossimo andiamo in spiaggia.", [
                vitem('prossimo', 'próximo', 'Sabato prossimo sono libero', 'o próximo sábado estou livre'),
                vitem('andiamo', 'vamos', 'Andiamo in spiaggia', 'vamos à praia'),
                vitem('forse', 'talvez', 'Forse domenica', 'talvez no domingo'),
                vitem('insieme', 'juntos', 'Andiamo insieme', 'vamos juntos'),
            ]),
        ]),
        uni_lista('Pedir informação', 'Horário, duração e como chegar.', 'A2', [
            aula_lista('Perguntas úteis', "quanto tempo · quanto dista · quale · fino a\nQuanto tempo ci vuole?", [
                vitem('quanto tempo', 'quanto tempo', 'Quanto tempo ci vuole', 'quanto tempo leva'),
                vitem('quanto dista', 'a que distância', 'Quanto dista la stazione', 'a que distância fica a estação'),
                vitem('quale', 'qual', 'Quale autobus va lì', 'qual ônibus vai até lá'),
                vitem('fino a', 'até', 'Aperto fino alle otto', 'aberto até as oito'),
            ]),
            aula_lista('A resposta', "circa · ci vuole · dritto · di fronte\nCi vogliono circa dieci minuti.", [
                vitem('circa', 'cerca de', 'Circa dieci minuti', 'cerca de dez minutos'),
                vitem('ci vuole', 'leva', 'Ci vogliono dieci minuti', 'leva dez minutos'),
                vitem('dritto', 'em frente', 'Vai dritto', 'siga em frente'),
                vitem('di fronte', 'em frente a', 'È di fronte alla banca', 'fica em frente ao banco'),
            ]),
        ]),
        uni_lista('Desculpas A2', 'Atraso, desculpa e um novo plano.', 'A2', [
            aula_lista('Desculpe', "scusa · in ritardo · ho perso · traffico\nScusa sono in ritardo. C era traffico.", [
                vitem('scusa', 'desculpa', 'Scusa sono in ritardo', 'desculpa estou atrasado'),
                vitem('in ritardo', 'atrasado', 'L autobus era in ritardo', 'o ônibus estava atrasado'),
                vitem('ho perso', 'perdi', 'Ho perso il treno', 'perdi o trem'),
                vitem('traffico', 'trânsito', 'C era traffico', 'havia trânsito'),
            ]),
            aula_lista('Um novo plano', "un altro · invece · non fa niente · la prossima volta\nNon fa niente. La prossima volta ci vediamo prima.", [
                vitem('un altro', 'outro', 'Un altro giorno forse', 'outro dia talvez'),
                vitem('invece', 'em vez', 'Andiamo a piedi invece', 'vamos a pé em vez disso'),
                vitem('non fa niente', 'não tem problema', 'Non fa niente', 'não tem problema'),
                vitem('la prossima volta', 'da próxima vez', 'La prossima volta ti chiamo', 'da próxima vez eu ligo'),
            ]),
        ]),
        uni_lista('No supermercado', 'Lista, oferta e o caixa.', 'A2', [
            aula_lista('A lista', "lista · offerta · cestino · corsia\nL offerta è in corsia tre.", [
                vitem('lista', 'lista', 'Ho una lista', 'tenho uma lista'),
                vitem('offerta', 'oferta', 'Questa offerta è buona', 'esta oferta é boa'),
                vitem('cestino', 'cesta', 'Prendi un cestino', 'pegue uma cesta'),
                vitem('corsia', 'corredor', 'Corsia tre', 'corredor três'),
            ]),
            aula_lista('No caixa', "cassa · busta · fedeltà · totale\nIl totale è venti.", [
                vitem('cassa', 'caixa', 'La cassa è laggiù', 'o caixa é ali'),
                vitem('busta', 'sacola', 'Mi serve una busta', 'preciso de uma sacola'),
                vitem('fedeltà', 'fidelidade', 'Hai la carta fedeltà', 'você tem cartão de fidelidade'),
                vitem('totale', 'total', 'Il totale è venti', 'o total é vinte'),
            ]),
        ]),
    ];
}

function volume_it_b(): array
{
    return [
        uni_lista('Sentimentos B1', 'Emoções para justificar decisões.', 'B1', [
            aula_lista('Como me sinto', "orgoglioso · preoccupato · deluso · entusiasta\nSono orgoglioso di questo risultato.", [
                vitem('orgoglioso', 'orgulhoso', 'Sono orgoglioso di te', 'tenho orgulho de você'),
                vitem('preoccupato', 'preocupado', 'Sono preoccupato per il ritardo', 'estou preocupado com o atraso'),
                vitem('deluso', 'decepcionado', 'Lei è delusa', 'ela está decepcionada'),
                vitem('entusiasta', 'empolgado', 'Siamo entusiasti', 'estamos empolgados'),
            ]),
            aula_lista('Sonhos', "spero · sogno · obiettivo · coraggio\nSpero di poter studiare all estero.", [
                vitem('spero', 'espero', 'Spero di poter andare', 'espero poder ir'),
                vitem('sogno', 'sonho', 'Questo è il mio sogno', 'este é o meu sonho'),
                vitem('obiettivo', 'objetivo', 'Il mio obiettivo è chiaro', 'meu objetivo é claro'),
                vitem('coraggio', 'coragem', 'Ho bisogno di coraggio', 'preciso de coragem'),
            ]),
        ]),
        uni_lista('Viagem com problema', 'Atraso, reembolso, fila, mala perdida.', 'B1', [
            aula_lista('No aeroporto', "ritardo · coda · perso · rimborso\nC è un lungo ritardo.", [
                vitem('ritardo', 'atraso', 'C è un ritardo', 'há um atraso'),
                vitem('coda', 'fila', 'La coda è lunga', 'a fila está longa'),
                vitem('perso', 'perdido', 'La mia valigia è persa', 'minha mala está perdida'),
                vitem('rimborso', 'reembolso', 'Voglio un rimborso', 'quero um reembolso'),
            ]),
            aula_lista('Reclamar com educação', "reclamo · responsabile · inaccettabile · risolvere\nQuesto è inaccettabile. La prego di risolverlo.", [
                vitem('reclamo', 'reclamação', 'Ho un reclamo', 'tenho uma reclamação'),
                vitem('responsabile', 'gerente', 'Ho bisogno del responsabile', 'preciso do gerente'),
                vitem('inaccettabile', 'inaceitável', 'Questo è inaccettabile', 'isto é inaceitável'),
                vitem('risolvere', 'resolver', 'La prego di risolverlo', 'por favor resolva'),
            ]),
        ]),
        uni_lista('Mídia B1', 'Filme, notícia, resumo, reação.', 'B1', [
            aula_lista('Um resumo', "recensione · trama · toccante · consiglio\nConsiglio questo film.", [
                vitem('recensione', 'resenha', 'Ho letto una recensione', 'li uma resenha'),
                vitem('trama', 'enredo', 'La trama è semplice', 'o enredo é simples'),
                vitem('toccante', 'comovente', 'Il finale è toccante', 'o final é comovente'),
                vitem('consiglio', 'recomendo', 'Lo consiglio', 'eu recomendo'),
            ]),
            aula_lista('A notícia', "titolo · intervista · fonte · reazione\nIl titolo è forte.", [
                vitem('titolo', 'manchete', 'Il titolo è forte', 'a manchete é forte'),
                vitem('intervista', 'entrevista', 'L intervista è in diretta', 'a entrevista é ao vivo'),
                vitem('fonte', 'fonte', 'Controlla la fonte', 'confira a fonte'),
                vitem('reazione', 'reação', 'La mia reazione era mista', 'minha reação foi mista'),
            ]),
        ]),
        uni_lista('Ambiente e debate', 'Temas atuais para argumentar no B2.', 'B2', [
            aula_lista('O planeta', "clima · rifiuti · rinnovabile · emissioni\nDobbiamo ridurre le emissioni.", [
                vitem('clima', 'clima', 'Il cambiamento climatico è reale', 'a mudança climática é real'),
                vitem('rifiuti', 'resíduos', 'Riduci i rifiuti', 'reduza os resíduos'),
                vitem('rinnovabile', 'renovável', 'L energia rinnovabile conta', 'energia renovável importa'),
                vitem('emissioni', 'emissões', 'Taglia le emissioni ora', 'corte as emissões agora'),
            ]),
            aula_lista('Por outro lado', "nonostante · tuttavia · mentre · quindi\nNonostante il costo, funziona.", [
                vitem('nonostante', 'apesar de', 'Nonostante il costo funziona', 'apesar do custo funciona'),
                vitem('tuttavia', 'no entanto', 'Tuttavia non siamo d accordo', 'no entanto discordamos'),
                vitem('mentre', 'ao passo que', 'Io cammino mentre tu guidi', 'eu caminho ao passo que você dirige'),
                vitem('quindi', 'portanto', 'Quindi aspettiamo', 'portanto esperamos'),
            ]),
        ]),
        uni_lista('Trabalho formal B2', 'Prazos, rascunho, feedback, partes interessadas.', 'B2', [
            aula_lista('O projeto', "scadenza · bozza · feedback · stakeholder\nLa bozza è pronta per il feedback.", [
                vitem('scadenza', 'prazo', 'La scadenza è venerdì', 'o prazo é sexta'),
                vitem('bozza', 'rascunho', 'Questa è la prima bozza', 'este é o primeiro rascunho'),
                vitem('feedback', 'parecer', 'Invia il tuo feedback', 'envie seu parecer'),
                vitem('stakeholder', 'parte interessada', 'Aggiorna gli stakeholder', 'atualize as partes interessadas'),
            ]),
            aula_lista('Soar natural', "occuparsi · mollare · tenere il passo · funzionare\nNon mollare ora.", [
                vitem('occuparsi', 'cuidar', 'Occupati della squadra', 'cuide da equipe'),
                vitem('mollare', 'desistir', 'Non mollare', 'não desista'),
                vitem('tenere il passo', 'acompanhar', 'Tieni il passo con le notizie', 'acompanhe as notícias'),
                vitem('funzionare', 'dar certo', 'Funzionerà', 'vai dar certo'),
            ]),
        ]),
        uni_lista('Discurso indireto', 'Ela disse que… — reportar com precisão.', 'B2', [
            aula_lista('Ela disse', "ha detto · mi ha detto · ha chiesto · ha sostenuto\nHa detto che era stanca.", [
                vitem('ha detto', 'disse', 'Ha detto che era stanca', 'ela disse que estava cansada'),
                vitem('mi ha detto', 'me disse', 'Mi ha detto di aspettare', 'ele me disse para esperar'),
                vitem('ha chiesto', 'perguntou', 'Hanno chiesto se era aperto', 'perguntaram se estava aberto'),
                vitem('ha sostenuto', 'alegou', 'Ha sostenuto di aver pagato', 'ele alegou que tinha pago'),
            ]),
            aula_lista('No dia seguinte', "il giorno dopo · il giorno prima · sarebbe · aveva\nHa detto che sarebbe arrivata il giorno dopo.", [
                vitem('il giorno dopo', 'no dia seguinte', 'Sarebbe arrivata il giorno dopo', 'ela chegaria no dia seguinte'),
                vitem('il giorno prima', 'no dia anterior', 'Eravamo partiti il giorno prima', 'tínhamos saído no dia anterior'),
                vitem('sarebbe', 'iria', 'Ha detto che sarebbe venuta', 'ela disse que viria'),
                vitem('aveva', 'tinha', 'Ha detto che aveva pagato', 'ele disse que tinha pago'),
            ]),
        ]),
    ];
}

function volume_it_c(): array
{
    return [
        uni_lista('C1: sociedade e evidência', 'Vocabulário abstrato de economia e política.', 'C1', [
            aula_lista('Termos', "disuguaglianza · politica · evidenza · crescita\nL evidenza sostiene questa politica.", [
                vitem('disuguaglianza', 'desigualdade', 'La disuguaglianza aumenta', 'a desigualdade está aumentando'),
                vitem('politica', 'política pública', 'Questa politica è nuova', 'esta política é nova'),
                vitem('evidenza', 'evidência', 'L evidenza è chiara', 'a evidência é clara'),
                vitem('crescita', 'crescimento', 'La crescita resta lenta', 'o crescimento segue lento'),
            ]),
            aula_lista('Coesão', "inoltre · al contrario · nel complesso · questo suggerisce\nNel complesso la riforma è solida.", [
                vitem('inoltre', 'além disso', 'Inoltre i costi scendono', 'além disso os custos caem'),
                vitem('al contrario', 'em contraste', 'Al contrario le aree rurali restano indietro', 'em contraste o interior fica para trás'),
                vitem('nel complesso', 'no saldo', 'Nel complesso siamo d accordo', 'no saldo concordamos'),
                vitem('questo suggerisce', 'isto sugere', 'Questo suggerisce un ritardo', 'isto sugere um atraso'),
            ]),
        ]),
        uni_lista('C1: entre linhas', 'Ironia, metáfora e o que não está dito.', 'C1', [
            aula_lista('Ironia', "ironico · sarcastico · eufemismo · con riserva\nPrendi quella promessa con riserva.", [
                vitem('ironico', 'irônico', 'Era ironico', 'foi irônico'),
                vitem('sarcastico', 'sarcástico', 'La risposta era sarcastica', 'a resposta foi sarcástica'),
                vitem('eufemismo', 'atenuação', 'È un eufemismo', 'isso é atenuar demais'),
                vitem('con riserva', 'com reservas', 'Prendilo con riserva', 'leve com reservas'),
            ]),
            aula_lista('Improviso', "a braccio · articolato · padronanza · fluente\nHa parlato a braccio e suonava fluente.", [
                vitem('a braccio', 'de improviso', 'Ha parlato a braccio', 'ele falou de improviso'),
                vitem('articolato', 'articulado', 'Lei è molto articolata', 'ela é muito articulada'),
                vitem('padronanza', 'domínio', 'Ha una padronanza ferma', 'ele tem um domínio firme'),
                vitem('fluente', 'fluente', 'Il discorso era fluente', 'a fala foi fluente'),
            ]),
        ]),
        uni_lista('C2: jurídico e coloquial', 'Transitar entre o ultraformal e o bar.', 'C2', [
            aula_lista('O contrato', "ai sensi · con la presente · nonostante · le parti\nLe parti convengono con la presente.", [
                vitem('ai sensi', 'nos termos de', 'Ai sensi della clausola due', 'nos termos da cláusula dois'),
                vitem('con la presente', 'pelo presente', 'Con la presente confermiamo', 'pelo presente confirmamos'),
                vitem('nonostante', 'não obstante', 'Nonostante il ritardo', 'não obstante o atraso'),
                vitem('le parti', 'as partes', 'Le parti convengono', 'as partes concordam'),
            ]),
            aula_lista('No bar', "va bene · vabbè · nessun problema · esatto\nVa bene. Nessun problema.", [
                vitem('va bene', 'ok', 'Va bene capisco', 'ok, eu entendo'),
                vitem('vabbè', 'pois é', 'Vabbè non sono d accordo', 'pois é, eu discordo'),
                vitem('nessun problema', 'sem problema', 'Nessun problema', 'sem problema'),
                vitem('esatto', 'exato', 'È esatto', 'isso é exato'),
            ]),
        ]),
        uni_lista('C2: fontes e estilo', 'Reconstruir argumentos e ler texto denso.', 'C2', [
            aula_lista('Duas fontes', "secondo · nel complesso · l autore sostiene · a sua volta\nNel complesso le fonti convergono.", [
                vitem('secondo', 'segundo', 'Secondo il rapporto', 'segundo o relatório'),
                vitem('nel complesso', 'em conjunto', 'Nel complesso coincidono', 'em conjunto eles concordam'),
                vitem('l autore sostiene', 'o autor argumenta', 'L autore sostiene il contrario', 'o autor argumenta o contrário'),
                vitem('a sua volta', 'por sua vez', 'Questo a sua volta ci ha ritardati', 'isso por sua vez nos atrasou'),
            ]),
            aula_lista('Precisão', "quasi nativo · interferenza · collocazione · dialetto\nAttenzione alla collocazione; evita l interferenza del portoghese.", [
                vitem('quasi nativo', 'quase nativo', 'Il tono è quasi nativo', 'o tom é quase nativo'),
                vitem('interferenza', 'interferência', 'Evita l interferenza di L1', 'evite interferência da L1'),
                vitem('collocazione', 'colocação', 'Questa collocazione è strana', 'esta colocação é estranha'),
                vitem('dialetto', 'dialeto', 'Il dialetto è veloce', 'o dialeto é rápido'),
            ]),
        ]),
    ];
}

function volume_de(): array
{
    return [
        'palavras' => [
            ['Kopf', 'Cabeça', 'Mein Kopf tut weh.', 'A1'],
            ['Bus', 'Ônibus', 'Der Bus hat Verspätung.', 'A2'],
            ['Stolz', 'Orgulhoso', 'Ich bin stolz auf dich.', 'B1'],
            ['Ungleichheit', 'Desigualdade', 'Die Ungleichheit steigt.', 'C1'],
        ],
        'unidades' => array_merge(volume_de_a1(), volume_de_a2(), volume_de_b(), volume_de_c()),
    ];
}

function volume_de_a1(): array
{
    return [
        uni_lista('Corpo', 'Partes do corpo para se virar no médico.', 'A1', [
            aula_lista('Cabeça e mãos', "Kopf · Hand · Auge · Fuß\nMein Kopf tut weh.", [
                vitem('Kopf', 'cabeça', 'Mein Kopf tut weh', 'minha cabeça dói'),
                vitem('Hand', 'mão', 'Wasch dir die Hände', 'lave as mãos'),
                vitem('Auge', 'olho', 'Schließ die Augen', 'feche os olhos'),
                vitem('Fuß', 'pé', 'Mein Fuß ist müde', 'meu pé está cansado'),
            ]),
            aula_lista('No médico', "Arm · Rücken · Magen · Mund\nWo tut es weh?", [
                vitem('Arm', 'braço', 'Mein Arm tut weh', 'meu braço dói'),
                vitem('Rücken', 'costas', 'Ich habe Rückenschmerzen', 'tenho dor nas costas'),
                vitem('Magen', 'estômago', 'Mein Magen tut weh', 'meu estômago dói'),
                vitem('Mund', 'boca', 'Öffnen Sie den Mund', 'abra a boca'),
            ]),
        ]),
        uni_lista('Na escola', 'Objetos e a sala de aula.', 'A1', [
            aula_lista('Material', "Stift · Buch · Tasche · Heft\nIch brauche einen Stift.", [
                vitem('Stift', 'caneta', 'Ich brauche einen Stift', 'preciso de uma caneta'),
                vitem('Buch', 'livro', 'Dieses Buch ist neu', 'este livro é novo'),
                vitem('Tasche', 'mochila', 'Meine Tasche ist schwer', 'minha mochila está pesada'),
                vitem('Heft', 'caderno', 'Öffne das Heft', 'abra o caderno'),
            ]),
            aula_lista('A sala', "Klassenzimmer · Lehrer · Schüler · Tisch\nDas Klassenzimmer ist klein.", [
                vitem('Klassenzimmer', 'sala de aula', 'Das Klassenzimmer ist klein', 'a sala de aula é pequena'),
                vitem('Lehrer', 'professor(a)', 'Unsere Lehrerin ist nett', 'nossa professora é gentil'),
                vitem('Schüler', 'aluno(a)', 'Ich bin Schüler', 'eu sou aluno'),
                vitem('Tisch', 'carteira', 'Setz dich an deinen Tisch', 'sente-se na sua carteira'),
            ]),
        ]),
        uni_lista('Animais', 'Pets e animais comuns.', 'A1', [
            aula_lista('Em casa', "Hund · Katze · Vogel · Fisch\nIch habe einen Hund.", [
                vitem('Hund', 'cão', 'Ich habe einen Hund', 'eu tenho um cachorro'),
                vitem('Katze', 'gato', 'Die Katze ist schwarz', 'o gato é preto'),
                vitem('Vogel', 'pássaro', 'Der Vogel singt', 'o pássaro canta'),
                vitem('Fisch', 'peixe', 'Der Fisch ist klein', 'o peixe é pequeno'),
            ]),
            aula_lista('Na fazenda', "Kuh · Pferd · Huhn · Schaf\nDas Pferd ist schnell.", [
                vitem('Kuh', 'vaca', 'Die Kuh ist auf dem Feld', 'a vaca está no campo'),
                vitem('Pferd', 'cavalo', 'Das Pferd ist schnell', 'o cavalo é rápido'),
                vitem('Huhn', 'galinha', 'Das Huhn ist weiß', 'a galinha é branca'),
                vitem('Schaf', 'ovelha', 'Das Schaf ist ruhig', 'a ovelha é quieta'),
            ]),
        ]),
        uni_lista('Lugares da cidade', 'Banco, parque, farmácia, praça.', 'A1', [
            aula_lista('Onde fica', "Park · Bank · Apotheke · Platz\nWo ist der Park?", [
                vitem('Park', 'parque', 'Wo ist der Park', 'onde fica o parque'),
                vitem('Bank', 'banco', 'Die Bank ist geschlossen', 'o banco está fechado'),
                vitem('Apotheke', 'farmácia', 'Ich brauche eine Apotheke', 'preciso de uma farmácia'),
                vitem('Platz', 'praça', 'Wir treffen uns auf dem Platz', 'a gente se encontra na praça'),
            ]),
            aula_lista('Mais lugares', "Markt · Bibliothek · Museum · Kino\nDie Bibliothek ist kostenlos.", [
                vitem('Markt', 'mercado', 'Der Markt ist voll', 'o mercado está cheio'),
                vitem('Bibliothek', 'biblioteca', 'Die Bibliothek ist still', 'a biblioteca é silenciosa'),
                vitem('Museum', 'museu', 'Das Museum öffnet um zehn', 'o museu abre às dez'),
                vitem('Kino', 'cinema', 'Das Kino ist in der Nähe', 'o cinema é aqui perto'),
            ]),
        ]),
        uni_lista('Mais comida', 'Refeições e pratos simples.', 'A1', [
            aula_lista('No prato', "Reis · Suppe · Obst · Käse\nIch esse Reis und Suppe.", [
                vitem('Reis', 'arroz', 'Ich esse Reis', 'eu como arroz'),
                vitem('Suppe', 'sopa', 'Die Suppe ist heiß', 'a sopa está quente'),
                vitem('Obst', 'fruta', 'Ich mag Obst', 'eu gosto de fruta'),
                vitem('Käse', 'queijo', 'Der Käse ist gut', 'o queijo é bom'),
            ]),
            aula_lista('Refeições', "Frühstück · Mittagessen · Abendessen · Snack\nDas Frühstück ist um acht.", [
                vitem('Frühstück', 'café da manhã', 'Das Frühstück ist um acht', 'o café da manhã é às oito'),
                vitem('Mittagessen', 'almoço', 'Das Mittagessen ist um zwölf', 'o almoço é ao meio-dia'),
                vitem('Abendessen', 'jantar', 'Das Abendessen ist spät', 'o jantar é tarde'),
                vitem('Snack', 'lanche', 'Ich will einen Snack', 'quero um lanche'),
            ]),
        ]),
        uni_lista('Esportes A1', 'Jogar, nadar, correr, dançar.', 'A1', [
            aula_lista('Eu pratico', "Fußball · schwimmen · laufen · tanzen\nIch spiele am Samstag Fußball.", [
                vitem('Fußball', 'futebol', 'Ich spiele Fußball', 'eu jogo futebol'),
                vitem('schwimmen', 'nadar', 'Ich schwimme am Sonntag', 'eu nado no domingo'),
                vitem('laufen', 'correr', 'Ich laufe im Park', 'eu corro no parque'),
                vitem('tanzen', 'dançar', 'Wir tanzen auf der Party', 'nós dançamos na festa'),
            ]),
            aula_lista('Com amigos', "Team · Ball · Spiel · gewinnen\nUnser Team kann gewinnen.", [
                vitem('Team', 'time', 'Unser Team ist gut', 'nosso time é bom'),
                vitem('Ball', 'bola', 'Pass den Ball', 'passe a bola'),
                vitem('Spiel', 'jogo', 'Das Spiel ist um fünf', 'o jogo é às cinco'),
                vitem('gewinnen', 'vencer', 'Wir können gewinnen', 'nós podemos vencer'),
            ]),
        ]),
        uni_lista('Cores', 'Cores para descrever objetos e roupas.', 'A1', [
            aula_lista('As cores', "rot · blau · grün · schwarz\nDie Tasche ist rot.", [
                vitem('rot', 'vermelho', 'Die Tasche ist rot', 'a bolsa é vermelha'),
                vitem('blau', 'azul', 'Der Himmel ist blau', 'o céu é azul'),
                vitem('grün', 'verde', 'Der Park ist grün', 'o parque é verde'),
                vitem('schwarz', 'preto', 'Die Katze ist schwarz', 'o gato é preto'),
            ]),
            aula_lista('Mais cores', "weiß · gelb · braun · grau\nIch will ein weißes Hemd.", [
                vitem('weiß', 'branco', 'Ich will ein weißes Hemd', 'quero uma camisa branca'),
                vitem('gelb', 'amarelo', 'Die Sonne ist gelb', 'o sol é amarelo'),
                vitem('braun', 'marrom', 'Der Tisch ist braun', 'a mesa é marrom'),
                vitem('grau', 'cinza', 'Der Himmel ist grau', 'o céu está cinza'),
            ]),
        ]),
        uni_lista('De onde você é', 'País, cidade e nacionalidade — dados pessoais A1.', 'A1', [
            aula_lista('País', "aus · Brasilien · Land · Stadt\nIch komme aus Brasilien.", [
                vitem('aus', 'de', 'Ich komme aus Brasilien', 'eu sou do Brasil'),
                vitem('Brasilien', 'Brasil', 'Brasilien ist groß', 'o Brasil é grande'),
                vitem('Land', 'país', 'Was ist dein Land', 'qual é o seu país'),
                vitem('Stadt', 'cidade', 'Meine Stadt ist klein', 'minha cidade é pequena'),
            ]),
            aula_lista('Nacionalidade', "Brasilianer · Sprache · wohne · wo\nIch wohne in São Paulo.", [
                vitem('Brasilianer', 'brasileiro(a)', 'Ich bin Brasilianer', 'eu sou brasileiro'),
                vitem('Sprache', 'idioma', 'Meine Sprache ist Portugiesisch', 'meu idioma é o português'),
                vitem('wohne', 'moro', 'Ich wohne in São Paulo', 'eu moro em São Paulo'),
                vitem('wo', 'onde', 'Wo wohnst du', 'onde você mora'),
            ]),
        ]),
        uni_lista('Profissões A1', 'Dizer o que você faz, de forma simples.', 'A1', [
            aula_lista('O trabalho', "Lehrer · Arzt · Koch · Fahrer\nIch bin Lehrer.", [
                vitem('Lehrer', 'professor(a)', 'Ich bin Lehrer', 'eu sou professor'),
                vitem('Arzt', 'médico(a)', 'Sie ist Ärztin', 'ela é médica'),
                vitem('Koch', 'cozinheiro(a)', 'Er ist Koch', 'ele é cozinheiro'),
                vitem('Fahrer', 'motorista', 'Mein Vater ist Fahrer', 'meu pai é motorista'),
            ]),
            aula_lista('Onde trabalho', "arbeite · Laden · Büro · Krankenhaus\nIch arbeite in einem Laden.", [
                vitem('arbeite', 'trabalho', 'Ich arbeite in einem Laden', 'eu trabalho numa loja'),
                vitem('Laden', 'loja', 'Der Laden ist offen', 'a loja está aberta'),
                vitem('Büro', 'escritório', 'Sie arbeitet in einem Büro', 'ela trabalha num escritório'),
                vitem('Krankenhaus', 'hospital', 'Das Krankenhaus ist nah', 'o hospital é perto'),
            ]),
        ]),
        uni_lista('Telefone A1', 'Número, ligação e recado curto.', 'A1', [
            aula_lista('O número', "Telefon · Nummer · anrufen · Nachricht\nWie ist deine Nummer?", [
                vitem('Telefon', 'telefone', 'Das ist mein Telefon', 'este é o meu telefone'),
                vitem('Nummer', 'número', 'Wie ist deine Nummer', 'qual é o seu número'),
                vitem('anrufen', 'ligar', 'Bitte ruf mich an', 'por favor me ligue'),
                vitem('Nachricht', 'mensagem', 'Ich sende eine Nachricht', 'eu mando uma mensagem'),
            ]),
            aula_lista('Atender', "hallo · am Apparat · warten · später\nHallo, Ana am Apparat.", [
                vitem('hallo', 'alô', 'Hallo hier ist Ana', 'alô aqui é a Ana'),
                vitem('am Apparat', 'na linha', 'Ana am Apparat', 'Ana na linha'),
                vitem('warten', 'esperar', 'Bitte warten', 'por favor espere'),
                vitem('später', 'mais tarde', 'Ruf mich später an', 'me ligue mais tarde'),
            ]),
        ]),
        uni_lista('Que horas são', 'Horas cheias e combinados simples.', 'A1', [
            aula_lista('As horas', "Uhr · halb · Viertel · jetzt\nEs ist sieben Uhr.", [
                vitem('Uhr', 'horas', 'Es ist sieben Uhr', 'são sete horas'),
                vitem('halb', 'e meia', 'Es ist halb acht', 'são sete e meia'),
                vitem('Viertel', 'quinze', 'Es ist Viertel nach neun', 'são nove e quinze'),
                vitem('jetzt', 'agora', 'Wie spät ist es jetzt', 'que horas são agora'),
            ]),
            aula_lista('O encontro', "treffen · um · Morgen · Nachmittag\nWir treffen uns um zehn.", [
                vitem('treffen', 'encontrar', 'Wir treffen uns um zehn', 'a gente se encontra às dez'),
                vitem('um', 'às', 'Um sechs bitte', 'às seis por favor'),
                vitem('Morgen', 'manhã', 'Am Morgen', 'de manhã'),
                vitem('Nachmittag', 'tarde', 'Am Nachmittag', 'à tarde'),
            ]),
        ]),
        uni_lista('Endereço', 'Rua, número e cidade — formulário A1.', 'A1', [
            aula_lista('Onde mora', "Straße · Adresse · Postleitzahl · wohne\nIch wohne in dieser Straße.", [
                vitem('Straße', 'rua', 'Ich wohne in dieser Straße', 'eu moro nesta rua'),
                vitem('Adresse', 'endereço', 'Was ist deine Adresse', 'qual é o seu endereço'),
                vitem('Postleitzahl', 'CEP', 'Die Postleitzahl ist 01310', 'o CEP é 01310'),
                vitem('wohne', 'moro', 'Wo wohnst du', 'onde você mora'),
            ]),
            aula_lista('O formulário', "ausfüllen · Formular · Datum · Unterschrift\nBitte füllen Sie das Formular aus.", [
                vitem('ausfüllen', 'preencher', 'Füllen Sie das Formular aus', 'preencha o formulário'),
                vitem('Formular', 'formulário', 'Dieses Formular ist kurz', 'este formulário é curto'),
                vitem('Datum', 'data', 'Schreiben Sie das Datum', 'escreva a data'),
                vitem('Unterschrift', 'assinatura', 'Ihre Unterschrift bitte', 'sua assinatura por favor'),
            ]),
        ]),
    ];
}

function volume_de_a2(): array
{
    return [
        uni_lista('Afazeres em casa', 'Louça, roupa, lixo e ajudar em casa.', 'A2', [
            aula_lista('Tarefas', "Geschirr · Wäsche · Müll · staubsaugen\nIch spüle das Geschirr nach dem Abendessen.", [
                vitem('Geschirr', 'louça', 'Ich spüle das Geschirr', 'eu lavo a louça'),
                vitem('Wäsche', 'roupa', 'Ich mache die Wäsche', 'eu lavo a roupa'),
                vitem('Müll', 'lixo', 'Bring den Müll raus', 'leve o lixo para fora'),
                vitem('staubsaugen', 'aspirar', 'Bitte staubsauge das Zimmer', 'por favor aspire o quarto'),
            ]),
            aula_lista('Pedir ajuda', "Hausarbeit · Hilfe · räum auf · putz\nKannst du mir helfen?", [
                vitem('Hausarbeit', 'afazer', 'Diese Hausarbeit ist leicht', 'este afazer é fácil'),
                vitem('Hilfe', 'ajuda', 'Kannst du mir helfen', 'você pode me ajudar'),
                vitem('räum auf', 'arruma', 'Räum dein Zimmer auf', 'arrume o seu quarto'),
                vitem('putz', 'limpa', 'Putz die Küche', 'limpe a cozinha'),
            ]),
        ]),
        uni_lista('Transportes A2', 'Ônibus, metrô, ponto e bilhete.', 'A2', [
            aula_lista('Como ir', "Bus · U-Bahn · Halt · Ticket\nSteigen Sie an der nächsten Haltstelle aus.", [
                vitem('Bus', 'ônibus', 'Der Bus hat Verspätung', 'o ônibus está atrasado'),
                vitem('U-Bahn', 'metrô', 'Nimm die U-Bahn', 'pegue o metrô'),
                vitem('Halt', 'parada', 'Der nächste Halt ist Central', 'a próxima parada é Central'),
                vitem('Ticket', 'bilhete', 'Ich brauche ein Ticket', 'preciso de um bilhete'),
            ]),
            aula_lista('No caminho', "aussteigen · umsteigen · Verspätung · Gleis\nWir steigen an der nächsten Station um.", [
                vitem('aussteigen', 'descer', 'Steig hier aus', 'desça aqui'),
                vitem('umsteigen', 'fazer baldeação', 'Steig in Central um', 'faça baldeação em Central'),
                vitem('Verspätung', 'atraso', 'Der Zug hat Verspätung', 'o trem está atrasado'),
                vitem('Gleis', 'plataforma', 'Gleis drei', 'plataforma três'),
            ]),
        ]),
        uni_lista('Hobbies e lazer', 'Tempo livre, cinema, música, caminhada.', 'A2', [
            aula_lista('Tempo livre', "Hobby · Kino · Musik · spazieren\nAm Wochenende gehe ich spazieren.", [
                vitem('Hobby', 'passatempo', 'Lesen ist mein Hobby', 'ler é o meu passatempo'),
                vitem('Kino', 'cinema', 'Wir gehen ins Kino', 'vamos ao cinema'),
                vitem('Musik', 'música', 'Ich höre Musik', 'eu escuto música'),
                vitem('spazieren', 'caminhar', 'Ich gehe gern spazieren', 'eu gosto de caminhar'),
            ]),
            aula_lista('Um convite', "frei · komm · heute Abend · vielleicht\nBist du heute Abend frei?", [
                vitem('frei', 'livre', 'Bist du heute Abend frei', 'você está livre hoje à noite'),
                vitem('komm', 'venha', 'Komm um sieben', 'venha às sete'),
                vitem('heute Abend', 'esta noite', 'Bis heute Abend', 'até esta noite'),
                vitem('vielleicht', 'talvez', 'Vielleicht morgen', 'talvez amanhã'),
            ]),
        ]),
        uni_lista('Agora mesmo', 'Estar fazendo: o que está acontecendo.', 'A2', [
            aula_lista('Estou fazendo', "koche · lese · arbeite · warte\nIch koche gerade.", [
                vitem('koche', 'cozinho', 'Ich koche gerade', 'estou cozinhando agora'),
                vitem('lese', 'leio', 'Sie liest', 'ela está lendo'),
                vitem('arbeite', 'trabalho', 'Er arbeitet', 'ele está trabalhando'),
                vitem('warte', 'espero', 'Wir warten', 'estamos esperando'),
            ]),
            aula_lista('O que você está fazendo', "machst · gerade · im Moment · derzeit\nWas machst du gerade?", [
                vitem('machst', 'faz', 'Was machst du', 'o que você está fazendo'),
                vitem('gerade', 'agora mesmo', 'Ich bin gerade beschäftigt', 'estou ocupado agora mesmo'),
                vitem('im Moment', 'no momento', 'Ich bin im Moment draußen', 'estou fora no momento'),
                vitem('derzeit', 'atualmente', 'Derzeit lerne ich', 'atualmente estou estudando'),
            ]),
        ]),
        uni_lista('Sempre e nunca', 'Advérbios de frequência.', 'A2', [
            aula_lista('Com que frequência', "immer · meistens · manchmal · nie\nIch trinke immer Kaffee.", [
                vitem('immer', 'sempre', 'Ich trinke immer Kaffee', 'eu sempre bebo café'),
                vitem('meistens', 'geralmente', 'Meistens stehe ich früh auf', 'eu geralmente acordo cedo'),
                vitem('manchmal', 'às vezes', 'Manchmal gehe ich spazieren', 'às vezes eu caminho'),
                vitem('nie', 'nunca', 'Ich rauche nie', 'eu nunca fumo'),
            ]),
            aula_lista('Na rotina', "oft · selten · einmal · jeden Tag\nIch gehe einmal pro Woche dorthin.", [
                vitem('oft', 'muitas vezes', 'Ich koche oft', 'eu cozinho muitas vezes'),
                vitem('selten', 'raramente', 'Ich esse selten auswärts', 'raramente como fora'),
                vitem('einmal', 'uma vez', 'Einmal pro Woche', 'uma vez por semana'),
                vitem('jeden Tag', 'todo dia', 'Ich lerne jeden Tag', 'estudo todo dia'),
            ]),
        ]),
        uni_lista('Recados curtos', 'Bilhete, SMS e e-mail simples do dia a dia.', 'A2', [
            aula_lista('Um bilhete', "Zettel · ruf mich an · ich bin spät · bis später\nIch bin spät. Ruf mich bitte an.", [
                vitem('Zettel', 'recado', 'Ich habe einen Zettel gelassen', 'deixei um recado'),
                vitem('ruf mich an', 'me ligue', 'Bitte ruf mich an', 'por favor me ligue'),
                vitem('ich bin spät', 'estou atrasado', 'Sorry ich bin spät', 'desculpa estou atrasado'),
                vitem('bis später', 'até logo', 'Bis später', 'até mais tarde'),
            ]),
            aula_lista('E-mail simples', "liebe · Grüße · ich brauche · Anhang\nLiebe Ana, ich brauche heute Hilfe.", [
                vitem('liebe', 'prezada', 'Liebe Ana', 'prezada Ana'),
                vitem('Grüße', 'saudações', 'Viele Grüße', 'atenciosamente'),
                vitem('ich brauche', 'preciso', 'Ich brauche heute Hilfe', 'preciso de ajuda hoje'),
                vitem('Anhang', 'anexo', 'Die Datei ist im Anhang', 'o arquivo está em anexo'),
            ]),
        ]),
        uni_lista('No banco', 'Conta, dinheiro e um saque simples.', 'A2', [
            aula_lista('A conta', "Konto · Bargeld · Karte · abheben\nIch möchte Bargeld abheben.", [
                vitem('Konto', 'conta', 'Ich habe ein Konto', 'eu tenho uma conta'),
                vitem('Bargeld', 'dinheiro', 'Ich brauche Bargeld', 'preciso de dinheiro'),
                vitem('Karte', 'cartão', 'Ich zahle mit Karte', 'pago com cartão'),
                vitem('abheben', 'sacar', 'Ich möchte Bargeld abheben', 'quero sacar dinheiro'),
            ]),
            aula_lista('No caixa', "eröffnen · schließt · Beleg · Wechselgeld\nKann ich einen Beleg haben?", [
                vitem('eröffnen', 'abrir', 'Ich möchte ein Konto eröffnen', 'quero abrir uma conta'),
                vitem('schließt', 'fecha', 'Die Bank schließt um vier', 'o banco fecha às quatro'),
                vitem('Beleg', 'recibo', 'Kann ich einen Beleg haben', 'posso ter um recibo'),
                vitem('Wechselgeld', 'troco', 'Behalten Sie das Wechselgeld', 'fique com o troco'),
            ]),
        ]),
        uni_lista('Uma ligação A2', 'Atender, deixar recado e marcar horário.', 'A2', [
            aula_lista('O recado', "bleiben Sie dran · erreichbar · zurückrufen · Mailbox\nBitte bleiben Sie dran. Sie ist nicht erreichbar.", [
                vitem('bleiben Sie dran', 'aguarde na linha', 'Bitte bleiben Sie dran', 'por favor aguarde'),
                vitem('erreichbar', 'disponível', 'Sie ist nicht erreichbar', 'ela não está disponível'),
                vitem('zurückrufen', 'retornar', 'Ich rufe später zurück', 'eu retorno mais tarde'),
                vitem('Mailbox', 'caixa postal', 'Hinterlassen Sie eine Mailbox', 'deixe um recado na caixa postal'),
            ]),
            aula_lista('Marcar', "Termin · bestätigen · absagen · verschieben\nIch muss den Termin absagen.", [
                vitem('Termin', 'consulta', 'Ich habe einen Termin', 'tenho um horário'),
                vitem('bestätigen', 'confirmar', 'Bitte bestätigen Sie die Uhrzeit', 'por favor confirme o horário'),
                vitem('absagen', 'cancelar', 'Ich muss absagen', 'preciso cancelar'),
                vitem('verschieben', 'remarcar', 'Können wir verschieben', 'podemos remarcar'),
            ]),
        ]),
        uni_lista('Fim de semana', 'Contar o que fez e o que vai fazer.', 'A2', [
            aula_lista('Ontem', "gestern · letzte · ich blieb · ich besuchte\nGestern besuchte ich meine Tante.", [
                vitem('gestern', 'ontem', 'Gestern blieb ich zu Hause', 'ontem fiquei em casa'),
                vitem('letzte', 'passado', 'Letztes Wochenende war ruhig', 'o último fim de semana foi calmo'),
                vitem('ich blieb', 'fiquei', 'Ich blieb zu Hause', 'fiquei em casa'),
                vitem('ich besuchte', 'visitei', 'Ich besuchte meine Tante', 'visitei minha tia'),
            ]),
            aula_lista('O próximo', "nächste · wir gehen · vielleicht · zusammen\nNächsten Samstag gehen wir an den Strand.", [
                vitem('nächste', 'próximo', 'Nächsten Samstag bin ich frei', 'o próximo sábado estou livre'),
                vitem('wir gehen', 'vamos', 'Wir gehen an den Strand', 'vamos à praia'),
                vitem('vielleicht', 'talvez', 'Vielleicht am Sonntag', 'talvez no domingo'),
                vitem('zusammen', 'juntos', 'Lass uns zusammen gehen', 'vamos juntos'),
            ]),
        ]),
        uni_lista('Pedir informação', 'Horário, duração e como chegar.', 'A2', [
            aula_lista('Perguntas úteis', "wie lange · wie weit · welcher · bis\nWie lange dauert es?", [
                vitem('wie lange', 'quanto tempo', 'Wie lange dauert es', 'quanto tempo leva'),
                vitem('wie weit', 'a que distância', 'Wie weit ist der Bahnhof', 'a que distância fica a estação'),
                vitem('welcher', 'qual', 'Welcher Bus fährt dorthin', 'qual ônibus vai até lá'),
                vitem('bis', 'até', 'Geöffnet bis acht', 'aberto até as oito'),
            ]),
            aula_lista('A resposta', "ungefähr · es dauert · geradeaus · gegenüber\nEs dauert ungefähr zehn Minuten.", [
                vitem('ungefähr', 'cerca de', 'Ungefähr zehn Minuten', 'cerca de dez minutos'),
                vitem('es dauert', 'leva', 'Es dauert zehn Minuten', 'leva dez minutos'),
                vitem('geradeaus', 'em frente', 'Gehen Sie geradeaus', 'siga em frente'),
                vitem('gegenüber', 'em frente a', 'Es ist gegenüber der Bank', 'fica em frente ao banco'),
            ]),
        ]),
        uni_lista('Desculpas A2', 'Atraso, desculpa e um novo plano.', 'A2', [
            aula_lista('Desculpe', "sorry · spät · ich habe verpasst · Stau\nSorry ich bin spät. Es gab Stau.", [
                vitem('sorry', 'desculpa', 'Sorry ich bin spät', 'desculpa estou atrasado'),
                vitem('spät', 'atrasado', 'Der Bus war spät', 'o ônibus estava atrasado'),
                vitem('ich habe verpasst', 'perdi', 'Ich habe den Zug verpasst', 'perdi o trem'),
                vitem('Stau', 'trânsito', 'Es gab Stau', 'havia trânsito'),
            ]),
            aula_lista('Um novo plano', "ein anderer · stattdessen · macht nichts · nächstes Mal\nMacht nichts. Nächstes Mal treffen wir uns früher.", [
                vitem('ein anderer', 'outro', 'Ein anderer Tag vielleicht', 'outro dia talvez'),
                vitem('stattdessen', 'em vez disso', 'Lass uns stattdessen laufen', 'vamos a pé em vez disso'),
                vitem('macht nichts', 'não tem problema', 'Macht nichts', 'não tem problema'),
                vitem('nächstes Mal', 'da próxima vez', 'Nächstes Mal rufe ich an', 'da próxima vez eu ligo'),
            ]),
        ]),
        uni_lista('No supermercado', 'Lista, oferta e o caixa.', 'A2', [
            aula_lista('A lista', "Liste · Angebot · Korb · Gang\nDas Angebot ist in Gang drei.", [
                vitem('Liste', 'lista', 'Ich habe eine Liste', 'tenho uma lista'),
                vitem('Angebot', 'oferta', 'Dieses Angebot ist gut', 'esta oferta é boa'),
                vitem('Korb', 'cesta', 'Nimm einen Korb', 'pegue uma cesta'),
                vitem('Gang', 'corredor', 'Gang drei', 'corredor três'),
            ]),
            aula_lista('No caixa', "Kasse · Tüte · Treue · Summe\nDie Summe ist zwanzig.", [
                vitem('Kasse', 'caixa', 'Die Kasse ist dort', 'o caixa é ali'),
                vitem('Tüte', 'sacola', 'Ich brauche eine Tüte', 'preciso de uma sacola'),
                vitem('Treue', 'fidelidade', 'Haben Sie eine Treuekarte', 'você tem cartão de fidelidade'),
                vitem('Summe', 'total', 'Die Summe ist zwanzig', 'o total é vinte'),
            ]),
        ]),
    ];
}

function volume_de_b(): array
{
    return [
        uni_lista('Sentimentos B1', 'Emoções para justificar decisões.', 'B1', [
            aula_lista('Como me sinto', "stolz · besorgt · enttäuscht · aufgeregt\nIch bin stolz auf dieses Ergebnis.", [
                vitem('stolz', 'orgulhoso', 'Ich bin stolz auf dich', 'tenho orgulho de você'),
                vitem('besorgt', 'preocupado', 'Ich bin besorgt wegen der Verspätung', 'estou preocupado com o atraso'),
                vitem('enttäuscht', 'decepcionado', 'Sie ist enttäuscht', 'ela está decepcionada'),
                vitem('aufgeregt', 'empolgado', 'Wir sind aufgeregt', 'estamos empolgados'),
            ]),
            aula_lista('Sonhos', "hoffe · Traum · Ziel · Mut\nIch hoffe, ich kann im Ausland studieren.", [
                vitem('hoffe', 'espero', 'Ich hoffe ich kann gehen', 'espero poder ir'),
                vitem('Traum', 'sonho', 'Das ist mein Traum', 'este é o meu sonho'),
                vitem('Ziel', 'objetivo', 'Mein Ziel ist klar', 'meu objetivo é claro'),
                vitem('Mut', 'coragem', 'Ich brauche Mut', 'preciso de coragem'),
            ]),
        ]),
        uni_lista('Viagem com problema', 'Atraso, reembolso, fila, mala perdida.', 'B1', [
            aula_lista('No aeroporto', "Verspätung · Schlange · verloren · Erstattung\nEs gibt eine lange Verspätung.", [
                vitem('Verspätung', 'atraso', 'Es gibt eine Verspätung', 'há um atraso'),
                vitem('Schlange', 'fila', 'Die Schlange ist lang', 'a fila está longa'),
                vitem('verloren', 'perdido', 'Mein Koffer ist verloren', 'minha mala está perdida'),
                vitem('Erstattung', 'reembolso', 'Ich möchte eine Erstattung', 'quero um reembolso'),
            ]),
            aula_lista('Reclamar com educação', "Beschwerde · Leiter · inakzeptabel · lösen\nDas ist inakzeptabel. Bitte lösen Sie es.", [
                vitem('Beschwerde', 'reclamação', 'Ich habe eine Beschwerde', 'tenho uma reclamação'),
                vitem('Leiter', 'gerente', 'Ich brauche den Leiter', 'preciso do gerente'),
                vitem('inakzeptabel', 'inaceitável', 'Das ist inakzeptabel', 'isto é inaceitável'),
                vitem('lösen', 'resolver', 'Bitte lösen Sie es', 'por favor resolva'),
            ]),
        ]),
        uni_lista('Mídia B1', 'Filme, notícia, resumo, reação.', 'B1', [
            aula_lista('Um resumo', "Kritik · Handlung · bewegend · empfehle\nIch empfehle diesen Film.", [
                vitem('Kritik', 'resenha', 'Ich habe eine Kritik gelesen', 'li uma resenha'),
                vitem('Handlung', 'enredo', 'Die Handlung ist einfach', 'o enredo é simples'),
                vitem('bewegend', 'comovente', 'Das Ende ist bewegend', 'o final é comovente'),
                vitem('empfehle', 'recomendo', 'Ich empfehle ihn', 'eu recomendo'),
            ]),
            aula_lista('A notícia', "Schlagzeile · Interview · Quelle · Reaktion\nDie Schlagzeile ist stark.", [
                vitem('Schlagzeile', 'manchete', 'Die Schlagzeile ist stark', 'a manchete é forte'),
                vitem('Interview', 'entrevista', 'Das Interview ist live', 'a entrevista é ao vivo'),
                vitem('Quelle', 'fonte', 'Prüfen Sie die Quelle', 'confira a fonte'),
                vitem('Reaktion', 'reação', 'Meine Reaktion war gemischt', 'minha reação foi mista'),
            ]),
        ]),
        uni_lista('Ambiente e debate', 'Temas atuais para argumentar no B2.', 'B2', [
            aula_lista('O planeta', "Klima · Abfall · erneuerbar · Emissionen\nWir müssen die Emissionen senken.", [
                vitem('Klima', 'clima', 'Der Klimawandel ist real', 'a mudança climática é real'),
                vitem('Abfall', 'resíduos', 'Reduzieren Sie den Abfall', 'reduza os resíduos'),
                vitem('erneuerbar', 'renovável', 'Erneuerbare Energie zählt', 'energia renovável importa'),
                vitem('Emissionen', 'emissões', 'Senken Sie die Emissionen jetzt', 'corte as emissões agora'),
            ]),
            aula_lista('Por outro lado', "trotz · jedoch · während · daher\nTrotz der Kosten funktioniert es.", [
                vitem('trotz', 'apesar de', 'Trotz der Kosten funktioniert es', 'apesar do custo funciona'),
                vitem('jedoch', 'no entanto', 'Jedoch sind wir anderer Meinung', 'no entanto discordamos'),
                vitem('während', 'ao passo que', 'Ich gehe während du fährst', 'eu caminho ao passo que você dirige'),
                vitem('daher', 'portanto', 'Daher warten wir', 'portanto esperamos'),
            ]),
        ]),
        uni_lista('Trabalho formal B2', 'Prazos, rascunho, feedback, partes interessadas.', 'B2', [
            aula_lista('O projeto', "Frist · Entwurf · Feedback · Stakeholder\nDer Entwurf ist bereit für Feedback.", [
                vitem('Frist', 'prazo', 'Die Frist ist Freitag', 'o prazo é sexta'),
                vitem('Entwurf', 'rascunho', 'Das ist der erste Entwurf', 'este é o primeiro rascunho'),
                vitem('Feedback', 'parecer', 'Senden Sie Ihr Feedback', 'envie seu parecer'),
                vitem('Stakeholder', 'parte interessada', 'Informieren Sie die Stakeholder', 'atualize as partes interessadas'),
            ]),
            aula_lista('Soar natural', "sich kümmern · aufgeben · mithalten · klappen\nGib jetzt nicht auf.", [
                vitem('sich kümmern', 'cuidar', 'Kümmere dich um das Team', 'cuide da equipe'),
                vitem('aufgeben', 'desistir', 'Gib nicht auf', 'não desista'),
                vitem('mithalten', 'acompanhar', 'Halte mit den Nachrichten mit', 'acompanhe as notícias'),
                vitem('klappen', 'dar certo', 'Es wird klappen', 'vai dar certo'),
            ]),
        ]),
        uni_lista('Discurso indireto', 'Ela disse que… — reportar com precisão.', 'B2', [
            aula_lista('Ela disse', "sagte · sagte mir · fragte · behauptete\nSie sagte, sie sei müde.", [
                vitem('sagte', 'disse', 'Sie sagte sie sei müde', 'ela disse que estava cansada'),
                vitem('sagte mir', 'me disse', 'Er sagte mir zu warten', 'ele me disse para esperar'),
                vitem('fragte', 'perguntou', 'Sie fragten ob es offen sei', 'perguntaram se estava aberto'),
                vitem('behauptete', 'alegou', 'Er behauptete er habe bezahlt', 'ele alegou que tinha pago'),
            ]),
            aula_lista('No dia seguinte', "am nächsten Tag · am Vortag · würde · hatte\nSie sagte, sie würde am nächsten Tag ankommen.", [
                vitem('am nächsten Tag', 'no dia seguinte', 'Sie würde am nächsten Tag ankommen', 'ela chegaria no dia seguinte'),
                vitem('am Vortag', 'no dia anterior', 'Wir waren am Vortag gegangen', 'tínhamos saído no dia anterior'),
                vitem('würde', 'iria', 'Sie sagte sie würde kommen', 'ela disse que viria'),
                vitem('hatte', 'tinha', 'Er sagte er hatte bezahlt', 'ele disse que tinha pago'),
            ]),
        ]),
    ];
}

function volume_de_c(): array
{
    return [
        uni_lista('C1: sociedade e evidência', 'Vocabulário abstrato de economia e política.', 'C1', [
            aula_lista('Termos', "Ungleichheit · Politik · Beleg · Wachstum\nDie Belege stützen diese Politik.", [
                vitem('Ungleichheit', 'desigualdade', 'Die Ungleichheit steigt', 'a desigualdade está aumentando'),
                vitem('Politik', 'política pública', 'Diese Politik ist neu', 'esta política é nova'),
                vitem('Beleg', 'evidência', 'Der Beleg ist klar', 'a evidência é clara'),
                vitem('Wachstum', 'crescimento', 'Das Wachstum bleibt langsam', 'o crescimento segue lento'),
            ]),
            aula_lista('Coesão', "außerdem · dagegen · insgesamt · das deutet\nInsgesamt ist die Reform solide.", [
                vitem('außerdem', 'além disso', 'Außerdem sinken die Kosten', 'além disso os custos caem'),
                vitem('dagegen', 'em contraste', 'Dagegen bleiben ländliche Gebiete zurück', 'em contraste o interior fica para trás'),
                vitem('insgesamt', 'no saldo', 'Insgesamt sind wir einig', 'no saldo concordamos'),
                vitem('das deutet', 'isto sugere', 'Das deutet auf eine Verzögerung hin', 'isto sugere um atraso'),
            ]),
        ]),
        uni_lista('C1: entre linhas', 'Ironia, metáfora e o que não está dito.', 'C1', [
            aula_lista('Ironia', "ironisch · sarkastisch · Untertreibung · mit Vorsicht\nNehmen Sie dieses Versprechen mit Vorsicht.", [
                vitem('ironisch', 'irônico', 'Es war ironisch', 'foi irônico'),
                vitem('sarkastisch', 'sarcástico', 'Die Antwort war sarkastisch', 'a resposta foi sarcástica'),
                vitem('Untertreibung', 'atenuação', 'Das ist eine Untertreibung', 'isso é atenuar demais'),
                vitem('mit Vorsicht', 'com reservas', 'Nehmen Sie es mit Vorsicht', 'leve com reservas'),
            ]),
            aula_lista('Improviso', "aus dem Stegreif · artikuliert · Griff · flüssig\nSie sprach aus dem Stegreif und klang flüssig.", [
                vitem('aus dem Stegreif', 'de improviso', 'Er sprach aus dem Stegreif', 'ele falou de improviso'),
                vitem('artikuliert', 'articulado', 'Sie ist sehr artikuliert', 'ela é muito articulada'),
                vitem('Griff', 'domínio', 'Er hat einen festen Griff', 'ele tem um domínio firme'),
                vitem('flüssig', 'fluente', 'Die Rede war flüssig', 'a fala foi fluente'),
            ]),
        ]),
        uni_lista('C2: jurídico e coloquial', 'Transitar entre o ultraformal e o bar.', 'C2', [
            aula_lista('O contrato', "gemäß · hiermit · ungeachtet · die Parteien\nDie Parteien vereinbaren hiermit.", [
                vitem('gemäß', 'nos termos de', 'Gemäß Klausel zwei', 'nos termos da cláusula dois'),
                vitem('hiermit', 'pelo presente', 'Wir bestätigen hiermit', 'pelo presente confirmamos'),
                vitem('ungeachtet', 'não obstante', 'Ungeachtet der Verspätung', 'não obstante o atraso'),
                vitem('die Parteien', 'as partes', 'Die Parteien vereinbaren', 'as partes concordam'),
            ]),
            aula_lista('No bar', "in Ordnung · ja nein · kein Problem · genau\nIn Ordnung. Kein Problem.", [
                vitem('in Ordnung', 'ok', 'In Ordnung ich verstehe', 'ok, eu entendo'),
                vitem('ja nein', 'pois é', 'Ja nein ich bin anderer Meinung', 'pois é, eu discordo'),
                vitem('kein Problem', 'sem problema', 'Kein Problem', 'sem problema'),
                vitem('genau', 'exato', 'Das ist genau richtig', 'isso é exato'),
            ]),
        ]),
        uni_lista('C2: fontes e estilo', 'Reconstruir argumentos e ler texto denso.', 'C2', [
            aula_lista('Duas fontes', "laut · zusammengenommen · der Autor argumentiert · wiederum\nZusammengenommen konvergieren die Quellen.", [
                vitem('laut', 'segundo', 'Laut dem Bericht', 'segundo o relatório'),
                vitem('zusammengenommen', 'em conjunto', 'Zusammengenommen stimmen sie überein', 'em conjunto eles concordam'),
                vitem('der Autor argumentiert', 'o autor argumenta', 'Der Autor argumentiert das Gegenteil', 'o autor argumenta o contrário'),
                vitem('wiederum', 'por sua vez', 'Das hat uns wiederum verzögert', 'isso por sua vez nos atrasou'),
            ]),
            aula_lista('Precisão', "muttersprachlich · Interferenz · Kollokation · Dialekt\nAchten Sie auf Kollokation; vermeiden Sie Interferenz aus dem Portugiesischen.", [
                vitem('muttersprachlich', 'quase nativo', 'Der Ton ist muttersprachlich', 'o tom é quase nativo'),
                vitem('Interferenz', 'interferência', 'Vermeiden Sie L1-Interferenz', 'evite interferência da L1'),
                vitem('Kollokation', 'colocação', 'Diese Kollokation ist seltsam', 'esta colocação é estranha'),
                vitem('Dialekt', 'dialeto', 'Der Dialekt ist schnell', 'o dialeto é rápido'),
            ]),
        ]),
    ];
}
