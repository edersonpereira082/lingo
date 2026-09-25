<?php

function volume_fr(): array
{
    return [
        'palavras' => [
            ['Tête', 'Cabeça', 'J’ai mal à la tête.', 'A1'],
            ['Bus', 'Ônibus', 'Le bus est en retard.', 'A2'],
            ['Fier', 'Orgulhoso', 'Je suis fier de toi.', 'B1'],
            ['Inégalité', 'Desigualdade', 'L’inégalité augmente.', 'C1'],
        ],
        'unidades' => array_merge(volume_fr_a1(), volume_fr_a2(), volume_fr_b(), volume_fr_c()),
    ];
}

function volume_fr_a1(): array
{
    return [
        uni_lista('Corpo', 'Partes do corpo para se virar no médico.', 'A1', [
            aula_lista('Cabeça e mãos', "tête · main · œil · pied\nJ’ai mal à la tête.", [
                vitem('tête', 'cabeça', 'J ai mal à la tête', 'minha cabeça dói'),
                vitem('main', 'mão', 'Lave-toi les mains', 'lave as mãos'),
                vitem('œil', 'olho', 'Ferme les yeux', 'feche os olhos'),
                vitem('pied', 'pé', 'Mon pied est fatigué', 'meu pé está cansado'),
            ]),
            aula_lista('No médico', "bras · dos · estomac · bouche\nOù avez-vous mal ?", [
                vitem('bras', 'braço', 'J ai mal au bras', 'meu braço dói'),
                vitem('dos', 'costas', 'J ai mal au dos', 'tenho dor nas costas'),
                vitem('estomac', 'estômago', 'J ai mal à l estomac', 'meu estômago dói'),
                vitem('bouche', 'boca', 'Ouvrez la bouche', 'abra a boca'),
            ]),
        ]),
        uni_lista('Na escola', 'Objetos e a sala de aula.', 'A1', [
            aula_lista('Material', "stylo · livre · sac · cahier\nJ’ai besoin d’un stylo.", [
                vitem('stylo', 'caneta', 'J ai besoin d un stylo', 'preciso de uma caneta'),
                vitem('livre', 'livro', 'Ce livre est nouveau', 'este livro é novo'),
                vitem('sac', 'mochila', 'Mon sac est lourd', 'minha mochila está pesada'),
                vitem('cahier', 'caderno', 'Ouvre le cahier', 'abra o caderno'),
            ]),
            aula_lista('A sala', "classe · professeur · élève · bureau\nLa classe est petite.", [
                vitem('classe', 'sala de aula', 'La classe est petite', 'a sala de aula é pequena'),
                vitem('professeur', 'professor(a)', 'Notre professeur est gentil', 'nossa professora é gentil'),
                vitem('élève', 'aluno(a)', 'Je suis élève', 'eu sou aluno'),
                vitem('bureau', 'carteira', 'Assieds-toi à ton bureau', 'sente-se na sua carteira'),
            ]),
        ]),
        uni_lista('Animais', 'Pets e animais comuns.', 'A1', [
            aula_lista('Em casa', "chien · chat · oiseau · poisson\nJ’ai un chien.", [
                vitem('chien', 'cão', 'J ai un chien', 'eu tenho um cachorro'),
                vitem('chat', 'gato', 'Le chat est noir', 'o gato é preto'),
                vitem('oiseau', 'pássaro', 'L oiseau chante', 'o pássaro canta'),
                vitem('poisson', 'peixe', 'Le poisson est petit', 'o peixe é pequeno'),
            ]),
            aula_lista('Na fazenda', "vache · cheval · poule · mouton\nLe cheval est rapide.", [
                vitem('vache', 'vaca', 'La vache est dans le champ', 'a vaca está no campo'),
                vitem('cheval', 'cavalo', 'Le cheval est rapide', 'o cavalo é rápido'),
                vitem('poule', 'galinha', 'La poule est blanche', 'a galinha é branca'),
                vitem('mouton', 'ovelha', 'Le mouton est calme', 'a ovelha é quieta'),
            ]),
        ]),
        uni_lista('Lugares da cidade', 'Banco, parque, farmácia, praça.', 'A1', [
            aula_lista('Onde fica', "parc · banque · pharmacie · place\nOù est le parc ?", [
                vitem('parc', 'parque', 'Où est le parc', 'onde fica o parque'),
                vitem('banque', 'banco', 'La banque est fermée', 'o banco está fechado'),
                vitem('pharmacie', 'farmácia', 'J ai besoin d une pharmacie', 'preciso de uma farmácia'),
                vitem('place', 'praça', 'On se retrouve sur la place', 'a gente se encontra na praça'),
            ]),
            aula_lista('Mais lugares', "marché · bibliothèque · musée · cinéma\nLa bibliothèque est gratuite.", [
                vitem('marché', 'mercado', 'Le marché est plein', 'o mercado está cheio'),
                vitem('bibliothèque', 'biblioteca', 'La bibliothèque est calme', 'a biblioteca é silenciosa'),
                vitem('musée', 'museu', 'Le musée ouvre à dix heures', 'o museu abre às dez'),
                vitem('cinéma', 'cinema', 'Le cinéma est près d ici', 'o cinema é aqui perto'),
            ]),
        ]),
        uni_lista('Mais comida', 'Refeições e pratos simples.', 'A1', [
            aula_lista('No prato', "riz · soupe · fruit · fromage\nJe mange du riz et de la soupe.", [
                vitem('riz', 'arroz', 'Je mange du riz', 'eu como arroz'),
                vitem('soupe', 'sopa', 'La soupe est chaude', 'a sopa está quente'),
                vitem('fruit', 'fruta', 'J aime les fruits', 'eu gosto de fruta'),
                vitem('fromage', 'queijo', 'Le fromage est bon', 'o queijo é bom'),
            ]),
            aula_lista('Refeições', "petit-déjeuner · déjeuner · dîner · goûter\nLe petit-déjeuner est à huit heures.", [
                vitem('petit-déjeuner', 'café da manhã', 'Le petit-déjeuner est à huit heures', 'o café da manhã é às oito'),
                vitem('déjeuner', 'almoço', 'Le déjeuner est à midi', 'o almoço é ao meio-dia'),
                vitem('dîner', 'jantar', 'Le dîner est tard', 'o jantar é tarde'),
                vitem('goûter', 'lanche', 'Je veux un goûter', 'quero um lanche'),
            ]),
        ]),
        uni_lista('Esportes A1', 'Jogar, nadar, correr, dançar.', 'A1', [
            aula_lista('Eu pratico', "foot · nager · courir · danser\nJe joue au foot le samedi.", [
                vitem('foot', 'futebol', 'Je joue au foot', 'eu jogo futebol'),
                vitem('nager', 'nadar', 'Je nage le dimanche', 'eu nado no domingo'),
                vitem('courir', 'correr', 'Je cours dans le parc', 'eu corro no parque'),
                vitem('danser', 'dançar', 'Nous dansons à la fête', 'nós dançamos na festa'),
            ]),
            aula_lista('Com amigos', "équipe · ballon · match · gagner\nNotre équipe peut gagner.", [
                vitem('équipe', 'time', 'Notre équipe est bonne', 'nosso time é bom'),
                vitem('ballon', 'bola', 'Passe le ballon', 'passe a bola'),
                vitem('match', 'jogo', 'Le match est à cinq heures', 'o jogo é às cinco'),
                vitem('gagner', 'vencer', 'Nous pouvons gagner', 'nós podemos vencer'),
            ]),
        ]),
        uni_lista('Cores', 'Cores para descrever objetos e roupas.', 'A1', [
            aula_lista('As cores', "rouge · bleu · vert · noir\nLe sac est rouge.", [
                vitem('rouge', 'vermelho', 'Le sac est rouge', 'a bolsa é vermelha'),
                vitem('bleu', 'azul', 'Le ciel est bleu', 'o céu é azul'),
                vitem('vert', 'verde', 'Le parc est vert', 'o parque é verde'),
                vitem('noir', 'preto', 'Le chat est noir', 'o gato é preto'),
            ]),
            aula_lista('Mais cores', "blanc · jaune · marron · gris\nJe veux une chemise blanche.", [
                vitem('blanc', 'branco', 'Je veux une chemise blanche', 'quero uma camisa branca'),
                vitem('jaune', 'amarelo', 'Le soleil est jaune', 'o sol é amarelo'),
                vitem('marron', 'marrom', 'La table est marron', 'a mesa é marrom'),
                vitem('gris', 'cinza', 'Le ciel est gris', 'o céu está cinza'),
            ]),
        ]),
        uni_lista('De onde você é', 'País, cidade e nacionalidade — dados pessoais A1.', 'A1', [
            aula_lista('País', "de · Brésil · pays · ville\nJe viens du Brésil.", [
                vitem('de', 'de', 'Je viens du Brésil', 'eu sou do Brasil'),
                vitem('Brésil', 'Brasil', 'Le Brésil est grand', 'o Brasil é grande'),
                vitem('pays', 'país', 'Quel est ton pays', 'qual é o seu país'),
                vitem('ville', 'cidade', 'Ma ville est petite', 'minha cidade é pequena'),
            ]),
            aula_lista('Nacionalidade', "brésilien · langue · habite · où\nJ’habite à São Paulo.", [
                vitem('brésilien', 'brasileiro(a)', 'Je suis brésilien', 'eu sou brasileiro'),
                vitem('langue', 'idioma', 'Ma langue est le portugais', 'meu idioma é o português'),
                vitem('habite', 'mora', 'J habite à São Paulo', 'eu moro em São Paulo'),
                vitem('où', 'onde', 'Où habites-tu', 'onde você mora'),
            ]),
        ]),
        uni_lista('Profissões A1', 'Dizer o que você faz, de forma simples.', 'A1', [
            aula_lista('O trabalho', "professeur · médecin · cuisinier · chauffeur\nJe suis professeur.", [
                vitem('professeur', 'professor(a)', 'Je suis professeur', 'eu sou professor'),
                vitem('médecin', 'médico(a)', 'Elle est médecin', 'ela é médica'),
                vitem('cuisinier', 'cozinheiro(a)', 'Il est cuisinier', 'ele é cozinheiro'),
                vitem('chauffeur', 'motorista', 'Mon père est chauffeur', 'meu pai é motorista'),
            ]),
            aula_lista('Onde trabalho', "travaille · magasin · bureau · hôpital\nJe travaille dans un magasin.", [
                vitem('travaille', 'trabalho', 'Je travaille dans un magasin', 'eu trabalho numa loja'),
                vitem('magasin', 'loja', 'Le magasin est ouvert', 'a loja está aberta'),
                vitem('bureau', 'escritório', 'Elle travaille dans un bureau', 'ela trabalha num escritório'),
                vitem('hôpital', 'hospital', 'L hôpital est près', 'o hospital é perto'),
            ]),
        ]),
        uni_lista('Telefone A1', 'Número, ligação e recado curto.', 'A1', [
            aula_lista('O número', "téléphone · numéro · appeler · message\nQuel est ton numéro ?", [
                vitem('téléphone', 'telefone', 'Voici mon téléphone', 'este é o meu telefone'),
                vitem('numéro', 'número', 'Quel est ton numéro', 'qual é o seu número'),
                vitem('appeler', 'ligar', 'Appelle-moi s il te plaît', 'por favor me ligue'),
                vitem('message', 'mensagem', 'J envoie un message', 'eu mando uma mensagem'),
            ]),
            aula_lista('Atender', "allô · j écoute · attendez · plus tard\nAllô, Ana à l’appareil.", [
                vitem('allô', 'alô', 'Allô c est Ana', 'alô aqui é a Ana'),
                vitem('j écoute', 'estou ouvindo', 'Ana j écoute', 'Ana na linha'),
                vitem('attendez', 'espere', 'Attendez s il vous plaît', 'por favor espere'),
                vitem('plus tard', 'mais tarde', 'Appelle-moi plus tard', 'me ligue mais tarde'),
            ]),
        ]),
        uni_lista('Que horas são', 'Horas cheias e combinados simples.', 'A1', [
            aula_lista('As horas', "heures · et demie · et quart · maintenant\nIl est sept heures.", [
                vitem('heures', 'horas', 'Il est sept heures', 'são sete horas'),
                vitem('et demie', 'e meia', 'Il est huit heures et demie', 'são oito e meia'),
                vitem('et quart', 'e quinze', 'Il est neuf heures et quart', 'são nove e quinze'),
                vitem('maintenant', 'agora', 'Quelle heure est-il maintenant', 'que horas são agora'),
            ]),
            aula_lista('O encontro', "rendez-vous · à · matin · après-midi\nOn se voit à dix heures.", [
                vitem('rendez-vous', 'encontro', 'On se voit à dix heures', 'a gente se encontra às dez'),
                vitem('à', 'às', 'À six heures s il te plaît', 'às seis por favor'),
                vitem('matin', 'manhã', 'Le matin', 'de manhã'),
                vitem('après-midi', 'tarde', 'L après-midi', 'à tarde'),
            ]),
        ]),
        uni_lista('Endereço', 'Rua, número e cidade — formulário A1.', 'A1', [
            aula_lista('Onde mora', "rue · adresse · code · habite\nJ’habite dans cette rue.", [
                vitem('rue', 'rua', 'J habite dans cette rue', 'eu moro nesta rua'),
                vitem('adresse', 'endereço', 'Quelle est ton adresse', 'qual é o seu endereço'),
                vitem('code', 'CEP', 'Le code postal est 01310', 'o CEP é 01310'),
                vitem('habite', 'mora', 'Où habites-tu', 'onde você mora'),
            ]),
            aula_lista('O formulário', "remplir · formulaire · date · signature\nRemplissez le formulaire.", [
                vitem('remplir', 'preencher', 'Remplissez le formulaire', 'preencha o formulário'),
                vitem('formulaire', 'formulário', 'Ce formulaire est court', 'este formulário é curto'),
                vitem('date', 'data', 'Écrivez la date', 'escreva a data'),
                vitem('signature', 'assinatura', 'Votre signature s il vous plaît', 'sua assinatura por favor'),
            ]),
        ]),
    ];
}

function volume_fr_a2(): array
{
    return [
        uni_lista('Afazeres em casa', 'Louça, roupa, lixo e ajudar em casa.', 'A2', [
            aula_lista('Tarefas', "vaisselle · linge · poubelle · passer l aspi\nJe fais la vaisselle après le dîner.", [
                vitem('vaisselle', 'louça', 'Je fais la vaisselle', 'eu lavo a louça'),
                vitem('linge', 'roupa', 'Je fais le linge', 'eu lavo a roupa'),
                vitem('poubelle', 'lixo', 'Sors la poubelle', 'leve o lixo para fora'),
                vitem('aspirateur', 'aspirador', 'Passe l aspirateur', 'aspire o quarto'),
            ]),
            aula_lista('Pedir ajuda', "corvée · aide · range · nettoie\nTu peux m’aider ?", [
                vitem('corvée', 'afazer', 'Cette corvée est facile', 'este afazer é fácil'),
                vitem('aide', 'ajuda', 'Tu peux m aider', 'você pode me ajudar'),
                vitem('range', 'arruma', 'Range ta chambre', 'arrume o seu quarto'),
                vitem('nettoie', 'limpa', 'Nettoie la cuisine', 'limpe a cozinha'),
            ]),
        ]),
        uni_lista('Transportes A2', 'Ônibus, metrô, ponto e bilhete.', 'A2', [
            aula_lista('Como ir', "bus · métro · arrêt · ticket\nDescendez au prochain arrêt.", [
                vitem('bus', 'ônibus', 'Le bus est en retard', 'o ônibus está atrasado'),
                vitem('métro', 'metrô', 'Prenez le métro', 'pegue o metrô'),
                vitem('arrêt', 'parada', 'Le prochain arrêt est Central', 'a próxima parada é Central'),
                vitem('ticket', 'bilhete', 'J ai besoin d un ticket', 'preciso de um bilhete'),
            ]),
            aula_lista('No caminho', "descendre · correspondance · retard · quai\nOn change à la prochaine station.", [
                vitem('descendre', 'descer', 'Descendez ici', 'desça aqui'),
                vitem('correspondance', 'baldeação', 'Prenez la correspondance à Central', 'faça baldeação em Central'),
                vitem('retard', 'atraso', 'Le train a du retard', 'o trem está atrasado'),
                vitem('quai', 'plataforma', 'Quai trois', 'plataforma três'),
            ]),
        ]),
        uni_lista('Hobbies e lazer', 'Tempo livre, cinema, música, caminhada.', 'A2', [
            aula_lista('Tempo livre', "loisir · cinéma · musique · marcher\nLe week-end je marche.", [
                vitem('loisir', 'passatempo', 'Lire est mon loisir', 'ler é o meu passatempo'),
                vitem('cinéma', 'cinema', 'On va au cinéma', 'vamos ao cinema'),
                vitem('musique', 'música', 'J écoute de la musique', 'eu escuto música'),
                vitem('marcher', 'caminhar', 'J aime marcher', 'eu gosto de caminhar'),
            ]),
            aula_lista('Um convite', "libre · viens · ce soir · peut-être\nTu es libre ce soir ?", [
                vitem('libre', 'livre', 'Tu es libre ce soir', 'você está livre hoje à noite'),
                vitem('viens', 'venha', 'Viens à sept heures', 'venha às sete'),
                vitem('ce soir', 'esta noite', 'À ce soir', 'até esta noite'),
                vitem('peut-être', 'talvez', 'Peut-être demain', 'talvez amanhã'),
            ]),
        ]),
        uni_lista('Agora mesmo', 'Estar fazendo: o que está acontecendo.', 'A2', [
            aula_lista('Estou fazendo', "cuisine · lis · travaille · attends\nJe suis en train de cuisiner.", [
                vitem('cuisine', 'cozinha', 'Je cuisine maintenant', 'estou cozinhando agora'),
                vitem('lis', 'leio', 'Elle lit', 'ela está lendo'),
                vitem('travaille', 'trabalha', 'Il travaille', 'ele está trabalhando'),
                vitem('attends', 'espero', 'Nous attendons', 'estamos esperando'),
            ]),
            aula_lista('O que você está fazendo', "fais · en ce moment · actuellement · maintenant\nQue fais-tu en ce moment ?", [
                vitem('fais', 'faz', 'Que fais-tu', 'o que você está fazendo'),
                vitem('en ce moment', 'no momento', 'Je suis occupé en ce moment', 'estou ocupado no momento'),
                vitem('actuellement', 'atualmente', 'Actuellement j étudie', 'atualmente estou estudando'),
                vitem('maintenant', 'agora', 'Je suis occupé maintenant', 'estou ocupado agora'),
            ]),
        ]),
        uni_lista('Sempre e nunca', 'Advérbios de frequência.', 'A2', [
            aula_lista('Com que frequência', "toujours · d habitude · parfois · jamais\nJe bois toujours du café.", [
                vitem('toujours', 'sempre', 'Je bois toujours du café', 'eu sempre bebo café'),
                vitem('d habitude', 'geralmente', 'D habitude je me lève tôt', 'eu geralmente acordo cedo'),
                vitem('parfois', 'às vezes', 'Parfois je marche', 'às vezes eu caminho'),
                vitem('jamais', 'nunca', 'Je ne fume jamais', 'eu nunca fumo'),
            ]),
            aula_lista('Na rotina', "souvent · rarement · une fois · tous les jours\nJ’y vais une fois par semaine.", [
                vitem('souvent', 'muitas vezes', 'Je cuisine souvent', 'eu cozinho muitas vezes'),
                vitem('rarement', 'raramente', 'Je mange rarement dehors', 'raramente como fora'),
                vitem('une fois', 'uma vez', 'Une fois par semaine', 'uma vez por semana'),
                vitem('tous les jours', 'todo dia', 'J étudie tous les jours', 'estudo todo dia'),
            ]),
        ]),
        uni_lista('Recados curtos', 'Bilhete, SMS e e-mail simples do dia a dia.', 'A2', [
            aula_lista('Um bilhete', "mot · appelle-moi · je suis en retard · à plus\nJe suis en retard. Appelle-moi.", [
                vitem('mot', 'recado', 'J ai laissé un mot', 'deixei um recado'),
                vitem('appelle-moi', 'me ligue', 'Appelle-moi s il te plaît', 'por favor me ligue'),
                vitem('je suis en retard', 'estou atrasado', 'Désolé je suis en retard', 'desculpa estou atrasado'),
                vitem('à plus', 'até logo', 'À plus tard', 'até mais tarde'),
            ]),
            aula_lista('E-mail simples', "cher · cordialement · j ai besoin · joint\nChère Ana, j’ai besoin d’aide aujourd’hui.", [
                vitem('cher', 'prezado', 'Chère Ana', 'prezada Ana'),
                vitem('cordialement', 'atenciosamente', 'Cordialement', 'atenciosamente'),
                vitem('j ai besoin', 'preciso', 'J ai besoin d aide aujourd hui', 'preciso de ajuda hoje'),
                vitem('joint', 'anexo', 'Le fichier est joint', 'o arquivo está em anexo'),
            ]),
        ]),
        uni_lista('No banco', 'Conta, dinheiro e um saque simples.', 'A2', [
            aula_lista('A conta', "compte · espèces · carte · retirer\nJe veux retirer des espèces.", [
                vitem('compte', 'conta', 'J ai un compte', 'eu tenho uma conta'),
                vitem('espèces', 'dinheiro', 'J ai besoin d espèces', 'preciso de dinheiro'),
                vitem('carte', 'cartão', 'Je paie par carte', 'pago com cartão'),
                vitem('retirer', 'sacar', 'Je veux retirer des espèces', 'quero sacar dinheiro'),
            ]),
            aula_lista('No caixa', "ouvrir · ferme · reçu · monnaie\nJe peux avoir un reçu ?", [
                vitem('ouvrir', 'abrir', 'Je veux ouvrir un compte', 'quero abrir uma conta'),
                vitem('ferme', 'fecha', 'La banque ferme à seize heures', 'o banco fecha às quatro'),
                vitem('reçu', 'recibo', 'Je peux avoir un reçu', 'posso ter um recibo'),
                vitem('monnaie', 'troco', 'Gardez la monnaie', 'fique com o troco'),
            ]),
        ]),
        uni_lista('Uma ligação A2', 'Atender, deixar recado e marcar horário.', 'A2', [
            aula_lista('O recado', "ne quittez pas · disponible · rappeler · messagerie\nNe quittez pas. Elle n’est pas disponible.", [
                vitem('ne quittez pas', 'aguarde na linha', 'Ne quittez pas', 'por favor aguarde'),
                vitem('disponible', 'disponível', 'Elle n est pas disponible', 'ela não está disponível'),
                vitem('rappeler', 'retornar', 'Je vais rappeler plus tard', 'eu retorno mais tarde'),
                vitem('messagerie', 'caixa postal', 'Laissez un message', 'deixe um recado'),
            ]),
            aula_lista('Marcar', "rendez-vous · confirmer · annuler · reporter\nJe dois annuler le rendez-vous.", [
                vitem('rendez-vous', 'consulta', 'J ai un rendez-vous', 'tenho um horário'),
                vitem('confirmer', 'confirmar', 'Confirmez l heure s il vous plaît', 'por favor confirme o horário'),
                vitem('annuler', 'cancelar', 'Je dois annuler', 'preciso cancelar'),
                vitem('reporter', 'remarcar', 'On peut reporter', 'podemos remarcar'),
            ]),
        ]),
        uni_lista('Fim de semana', 'Contar o que fez e o que vai fazer.', 'A2', [
            aula_lista('Ontem', "hier · dernier · je suis resté · j ai visité\nHier j’ai visité ma tante.", [
                vitem('hier', 'ontem', 'Hier je suis resté à la maison', 'ontem fiquei em casa'),
                vitem('dernier', 'passado', 'Le week-end dernier était calme', 'o último fim de semana foi calmo'),
                vitem('je suis resté', 'fiquei', 'Je suis resté à la maison', 'fiquei em casa'),
                vitem('j ai visité', 'visitei', 'J ai visité ma tante', 'visitei minha tia'),
            ]),
            aula_lista('O próximo', "prochain · on va · peut-être · ensemble\nSamedi prochain on va à la plage.", [
                vitem('prochain', 'próximo', 'Samedi prochain je suis libre', 'o próximo sábado estou livre'),
                vitem('on va', 'vamos', 'On va à la plage', 'vamos à praia'),
                vitem('peut-être', 'talvez', 'Peut-être dimanche', 'talvez no domingo'),
                vitem('ensemble', 'juntos', 'On y va ensemble', 'vamos juntos'),
            ]),
        ]),
        uni_lista('Pedir informação', 'Horário, duração e como chegar.', 'A2', [
            aula_lista('Perguntas úteis', "combien de temps · à quelle distance · quel · jusqu à\nÇa prend combien de temps ?", [
                vitem('combien de temps', 'quanto tempo', 'Ça prend combien de temps', 'quanto tempo leva'),
                vitem('à quelle distance', 'a que distância', 'À quelle distance est la gare', 'a que distância fica a estação'),
                vitem('quel', 'qual', 'Quel bus y va', 'qual ônibus vai até lá'),
                vitem('jusqu à', 'até', 'Ouvert jusqu à vingt heures', 'aberto até as oito'),
            ]),
            aula_lista('A resposta', "environ · ça prend · tout droit · en face\nÇa prend environ dix minutes.", [
                vitem('environ', 'cerca de', 'Environ dix minutes', 'cerca de dez minutos'),
                vitem('ça prend', 'leva', 'Ça prend dix minutes', 'leva dez minutos'),
                vitem('tout droit', 'em frente', 'Allez tout droit', 'siga em frente'),
                vitem('en face', 'em frente a', 'C est en face de la banque', 'fica em frente ao banco'),
            ]),
        ]),
        uni_lista('Desculpas A2', 'Atraso, desculpa e um novo plano.', 'A2', [
            aula_lista('Desculpe', "désolé · en retard · j ai raté · circulation\nDésolé je suis en retard. Il y avait de la circulation.", [
                vitem('désolé', 'desculpa', 'Désolé je suis en retard', 'desculpa estou atrasado'),
                vitem('en retard', 'atrasado', 'Le bus était en retard', 'o ônibus estava atrasado'),
                vitem('j ai raté', 'perdi', 'J ai raté le train', 'perdi o trem'),
                vitem('circulation', 'trânsito', 'Il y avait de la circulation', 'havia trânsito'),
            ]),
            aula_lista('Um novo plano', "un autre · plutôt · ce n est pas grave · la prochaine fois\nCe n’est pas grave. La prochaine fois on se voit plus tôt.", [
                vitem('un autre', 'outro', 'Un autre jour peut-être', 'outro dia talvez'),
                vitem('plutôt', 'em vez', 'On marche plutôt', 'vamos a pé em vez disso'),
                vitem('ce n est pas grave', 'não tem problema', 'Ce n est pas grave', 'não tem problema'),
                vitem('la prochaine fois', 'da próxima vez', 'La prochaine fois je t appelle', 'da próxima vez eu ligo'),
            ]),
        ]),
        uni_lista('No supermercado', 'Lista, oferta e o caixa.', 'A2', [
            aula_lista('A lista', "liste · offre · panier · rayon\nL’offre est au rayon trois.", [
                vitem('liste', 'lista', 'J ai une liste', 'tenho uma lista'),
                vitem('offre', 'oferta', 'Cette offre est bonne', 'esta oferta é boa'),
                vitem('panier', 'cesta', 'Prenez un panier', 'pegue uma cesta'),
                vitem('rayon', 'corredor', 'Rayon trois', 'corredor três'),
            ]),
            aula_lista('No caixa', "caisse · sac · fidélité · total\nLe total est vingt euros.", [
                vitem('caisse', 'caixa', 'La caisse est là-bas', 'o caixa é ali'),
                vitem('sac', 'sacola', 'J ai besoin d un sac', 'preciso de uma sacola'),
                vitem('fidélité', 'fidelidade', 'Vous avez une carte de fidélité', 'você tem cartão de fidelidade'),
                vitem('total', 'total', 'Le total est vingt', 'o total é vinte'),
            ]),
        ]),
    ];
}

function volume_fr_b(): array
{
    return [
        uni_lista('Sentimentos B1', 'Emoções para justificar decisões.', 'B1', [
            aula_lista('Como me sinto', "fier · inquiet · déçu · excité\nJe suis fier de ce résultat.", [
                vitem('fier', 'orgulhoso', 'Je suis fier de toi', 'tenho orgulho de você'),
                vitem('inquiet', 'preocupado', 'Je suis inquiet du retard', 'estou preocupado com o atraso'),
                vitem('déçu', 'decepcionado', 'Elle est déçue', 'ela está decepcionada'),
                vitem('excité', 'empolgado', 'Nous sommes excités', 'estamos empolgados'),
            ]),
            aula_lista('Sonhos', "j espère · rêve · objectif · courage\nJ’espère pouvoir étudier à l’étranger.", [
                vitem('j espère', 'espero', 'J espère pouvoir y aller', 'espero poder ir'),
                vitem('rêve', 'sonho', 'C est mon rêve', 'este é o meu sonho'),
                vitem('objectif', 'objetivo', 'Mon objectif est clair', 'meu objetivo é claro'),
                vitem('courage', 'coragem', 'J ai besoin de courage', 'preciso de coragem'),
            ]),
        ]),
        uni_lista('Viagem com problema', 'Atraso, reembolso, fila, mala perdida.', 'B1', [
            aula_lista('No aeroporto', "retard · file · perdu · remboursement\nIl y a un long retard.", [
                vitem('retard', 'atraso', 'Il y a un retard', 'há um atraso'),
                vitem('file', 'fila', 'La file est longue', 'a fila está longa'),
                vitem('perdu', 'perdido', 'Mon sac est perdu', 'minha mala está perdida'),
                vitem('remboursement', 'reembolso', 'Je veux un remboursement', 'quero um reembolso'),
            ]),
            aula_lista('Reclamar com educação', "plainte · responsable · inacceptable · résoudre\nC’est inacceptable. Veuillez résoudre cela.", [
                vitem('plainte', 'reclamação', 'J ai une plainte', 'tenho uma reclamação'),
                vitem('responsable', 'gerente', 'J ai besoin du responsable', 'preciso do gerente'),
                vitem('inacceptable', 'inaceitável', 'C est inacceptable', 'isto é inaceitável'),
                vitem('résoudre', 'resolver', 'Veuillez résoudre cela', 'por favor resolva'),
            ]),
        ]),
        uni_lista('Mídia B1', 'Filme, notícia, resumo, reação.', 'B1', [
            aula_lista('Um resumo', "critique · intrigue · émouvant · je recommande\nJe recommande ce film.", [
                vitem('critique', 'resenha', 'J ai lu une critique', 'li uma resenha'),
                vitem('intrigue', 'enredo', 'L intrigue est simple', 'o enredo é simples'),
                vitem('émouvant', 'comovente', 'La fin est émouvante', 'o final é comovente'),
                vitem('je recommande', 'recomendo', 'Je le recommande', 'eu recomendo'),
            ]),
            aula_lista('A notícia', "titre · interview · source · réaction\nLe titre est fort.", [
                vitem('titre', 'manchete', 'Le titre est fort', 'a manchete é forte'),
                vitem('interview', 'entrevista', 'L interview est en direct', 'a entrevista é ao vivo'),
                vitem('source', 'fonte', 'Vérifiez la source', 'confira a fonte'),
                vitem('réaction', 'reação', 'Ma réaction était mitigée', 'minha reação foi mista'),
            ]),
        ]),
        uni_lista('Ambiente e debate', 'Temas atuais para argumentar no B2.', 'B2', [
            aula_lista('O planeta', "climat · déchets · renouvelable · émissions\nNous devons réduire les émissions.", [
                vitem('climat', 'clima', 'Le changement climatique est réel', 'a mudança climática é real'),
                vitem('déchets', 'resíduos', 'Réduisez les déchets', 'reduza os resíduos'),
                vitem('renouvelable', 'renovável', 'L énergie renouvelable compte', 'energia renovável importa'),
                vitem('émissions', 'emissões', 'Coupez les émissions maintenant', 'corte as emissões agora'),
            ]),
            aula_lista('Por outro lado', "malgré · cependant · alors que · donc\nMalgré le coût, cela fonctionne.", [
                vitem('malgré', 'apesar de', 'Malgré le coût cela fonctionne', 'apesar do custo funciona'),
                vitem('cependant', 'no entanto', 'Cependant nous ne sommes pas d accord', 'no entanto discordamos'),
                vitem('alors que', 'ao passo que', 'Je marche alors que tu conduis', 'eu caminho ao passo que você dirige'),
                vitem('donc', 'portanto', 'Donc nous attendons', 'portanto esperamos'),
            ]),
        ]),
        uni_lista('Trabalho formal B2', 'Prazos, rascunho, feedback, partes interessadas.', 'B2', [
            aula_lista('O projeto', "délai · brouillon · retour · partie prenante\nLe brouillon est prêt pour un retour.", [
                vitem('délai', 'prazo', 'Le délai est vendredi', 'o prazo é sexta'),
                vitem('brouillon', 'rascunho', 'C est le premier brouillon', 'este é o primeiro rascunho'),
                vitem('retour', 'parecer', 'Envoyez votre retour', 'envie seu parecer'),
                vitem('partie prenante', 'parte interessada', 'Informez les parties prenantes', 'atualize as partes interessadas'),
            ]),
            aula_lista('Soar natural', "s occuper · abandonner · suivre · marcher\nN’abandonne pas maintenant.", [
                vitem('s occuper', 'cuidar', 'Occupe-toi de l équipe', 'cuide da equipe'),
                vitem('abandonner', 'desistir', 'N abandonne pas', 'não desista'),
                vitem('suivre', 'acompanhar', 'Suis les actualités', 'acompanhe as notícias'),
                vitem('marcher', 'dar certo', 'Ça va marcher', 'vai dar certo'),
            ]),
        ]),
        uni_lista('Discurso indireto', 'Ela disse que… — reportar com precisão.', 'B2', [
            aula_lista('Ela disse', "a dit · m a dit · a demandé · a affirmé\nElle a dit qu’elle était fatiguée.", [
                vitem('a dit', 'disse', 'Elle a dit qu elle était fatiguée', 'ela disse que estava cansada'),
                vitem('m a dit', 'me disse', 'Il m a dit d attendre', 'ele me disse para esperar'),
                vitem('a demandé', 'perguntou', 'Ils ont demandé si c était ouvert', 'perguntaram se estava aberto'),
                vitem('a affirmé', 'alegou', 'Il a affirmé qu il avait payé', 'ele alegou que tinha pago'),
            ]),
            aula_lista('No dia seguinte', "le lendemain · la veille · viendrait · avait\nElle a dit qu’elle arriverait le lendemain.", [
                vitem('le lendemain', 'no dia seguinte', 'Elle arriverait le lendemain', 'ela chegaria no dia seguinte'),
                vitem('la veille', 'no dia anterior', 'Nous étions partis la veille', 'tínhamos saído no dia anterior'),
                vitem('viendrait', 'viria', 'Elle a dit qu elle viendrait', 'ela disse que viria'),
                vitem('avait', 'tinha', 'Il a dit qu il avait payé', 'ele disse que tinha pago'),
            ]),
        ]),
    ];
}

function volume_fr_c(): array
{
    return [
        uni_lista('C1: sociedade e evidência', 'Vocabulário abstrato de economia e política.', 'C1', [
            aula_lista('Termos', "inégalité · politique · preuve · croissance\nLes preuves soutiennent cette politique.", [
                vitem('inégalité', 'desigualdade', 'L inégalité augmente', 'a desigualdade está aumentando'),
                vitem('politique', 'política pública', 'Cette politique est nouvelle', 'esta política é nova'),
                vitem('preuve', 'evidência', 'La preuve est claire', 'a evidência é clara'),
                vitem('croissance', 'crescimento', 'La croissance reste lente', 'o crescimento segue lento'),
            ]),
            aula_lista('Coesão', "en outre · en revanche · au total · cela suggère\nAu total, la réforme est solide.", [
                vitem('en outre', 'além disso', 'En outre les coûts baissent', 'além disso os custos caem'),
                vitem('en revanche', 'em contraste', 'En revanche les campagnes retardent', 'em contraste o interior fica para trás'),
                vitem('au total', 'no saldo', 'Au total nous sommes d accord', 'no saldo concordamos'),
                vitem('cela suggère', 'isto sugere', 'Cela suggère un retard', 'isto sugere um atraso'),
            ]),
        ]),
        uni_lista('C1: entre linhas', 'Ironia, metáfora e o que não está dito.', 'C1', [
            aula_lista('Ironia', "ironique · sarcastique · litote · avec des réserves\nPrenez cette promesse avec des réserves.", [
                vitem('ironique', 'irônico', 'C était ironique', 'foi irônico'),
                vitem('sarcastique', 'sarcástico', 'La réponse était sarcastique', 'a resposta foi sarcástica'),
                vitem('litote', 'atenuação', 'C est une litote', 'isso é atenuar demais'),
                vitem('avec des réserves', 'com reservas', 'Prenez-le avec des réserves', 'leve com reservas'),
            ]),
            aula_lista('Improviso', "à l improviste · articulé · maîtrise · fluide\nElle a parlé à l’improviste et restait fluide.", [
                vitem('à l improviste', 'de improviso', 'Il a parlé à l improviste', 'ele falou de improviso'),
                vitem('articulé', 'articulado', 'Elle est très articulée', 'ela é muito articulada'),
                vitem('maîtrise', 'domínio', 'Il a une maîtrise ferme', 'ele tem um domínio firme'),
                vitem('fluide', 'fluente', 'Le discours était fluide', 'a fala foi fluente'),
            ]),
        ]),
        uni_lista('C2: jurídico e coloquial', 'Transitar entre o ultraformal e o bar.', 'C2', [
            aula_lista('O contrato', "conformément · par les présentes · nonobstant · les parties\nLes parties conviennent par les présentes.", [
                vitem('conformément', 'nos termos de', 'Conformément à la clause deux', 'nos termos da cláusula dois'),
                vitem('par les présentes', 'pelo presente', 'Par les présentes nous confirmons', 'pelo presente confirmamos'),
                vitem('nonobstant', 'não obstante', 'Nonobstant le retard', 'não obstante o atraso'),
                vitem('les parties', 'as partes', 'Les parties conviennent', 'as partes concordam'),
            ]),
            aula_lista('No bar', "d accord · ouais non · pas de souci · pile\nD’accord. Pas de souci.", [
                vitem('d accord', 'ok', 'D accord je vois', 'ok, eu entendo'),
                vitem('ouais non', 'pois é', 'Ouais non je ne suis pas d accord', 'pois é, eu discordo'),
                vitem('pas de souci', 'sem problema', 'Pas de souci', 'sem problema'),
                vitem('pile', 'exato', 'C est pile ça', 'isso é exato'),
            ]),
        ]),
        uni_lista('C2: fontes e estilo', 'Reconstruir argumentos e ler texto denso.', 'C2', [
            aula_lista('Duas fontes', "selon · pris ensemble · l auteur soutient · à son tour\nPris ensemble, les sources convergent.", [
                vitem('selon', 'segundo', 'Selon le rapport', 'segundo o relatório'),
                vitem('pris ensemble', 'em conjunto', 'Pris ensemble ils s accordent', 'em conjunto eles concordam'),
                vitem('l auteur soutient', 'o autor argumenta', 'L auteur soutient le contraire', 'o autor argumenta o contrário'),
                vitem('à son tour', 'por sua vez', 'Cela à son tour nous a retardés', 'isso por sua vez nos atrasou'),
            ]),
            aula_lista('Precisão', "quasi natif · interférence · collocation · dialecte\nAttention à la collocation ; évitez l’interférence du portugais.", [
                vitem('quasi natif', 'quase nativo', 'Le ton est quasi natif', 'o tom é quase nativo'),
                vitem('interférence', 'interferência', 'Évitez l interférence de L1', 'evite interferência da L1'),
                vitem('collocation', 'colocação', 'Cette collocation est étrange', 'esta colocação é estranha'),
                vitem('dialecte', 'dialeto', 'Le dialecte est rapide', 'o dialeto é rápido'),
            ]),
        ]),
    ];
}

require_once __DIR__ . '/catalogo-volume-itde.php';
