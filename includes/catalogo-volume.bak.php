<?php

if (!function_exists('aula_plus')) {
    function aula_plus(string $titulo, string $resumo, string $teoria, array $exercicios): array
    {
        return [
            'titulo' => $titulo,
            'resumo' => $resumo,
            'teoria' => $teoria,
            'xp' => 12,
            'exercicios' => $exercicios,
        ];
    }
}

function vitem(string $termo, string $trad, string $frase, string $frasePt): array
{
    return ['termo' => $termo, 'trad' => $trad, 'frase' => $frase, 'frase_pt' => $frasePt];
}

function aula_lista(string $titulo, string $teoria, array $itens): array
{
    $itens = array_values($itens);
    $a = $itens[0];
    $b = $itens[1];
    $c = $itens[2];
    $d = $itens[3];
    $altsTermo = [$a['termo'], $b['termo'], $c['termo'], $d['termo']];
    $altsTrad = [$a['trad'], $b['trad'], $c['trad'], $d['trad']];
    $pares = [[$a['termo'], $a['trad']], [$b['termo'], $b['trad']], [$c['termo'], $c['trad']], [$d['termo'], $d['trad']]];
    $buraco = preg_replace('/' . preg_quote($a['termo'], '/') . '/u', '_____', $a['frase'], 1);

    return aula_plus(
        $titulo,
        $a['termo'] . ', ' . $b['termo'] . ', ' . $c['termo'] . ', ' . $d['termo'],
        $teoria,
        [
            m('O que significa "' . $a['termo'] . '"?', $altsTrad, $a['trad']),
            t('Traduza: ' . $a['frase'], $a['frase_pt']),
            c('Complete: ' . $buraco, $a['termo']),
            emp('Una.', $pares),
            vf('"' . $b['termo'] . '" significa "' . $b['trad'] . '".', true),
            t('Traduza: ' . $c['frase'], $c['frase_pt']),
            ordena('Monte:', $a['frase']),
            m('Como se diz "' . $d['trad'] . '"?', $altsTermo, $d['termo']),
        ]
    );
}

function uni_lista(string $titulo, string $desc, string $nivel, array $aulas): array
{
    return [
        'titulo' => $titulo,
        'descricao' => $desc,
        'nivel' => $nivel,
        'aulas' => $aulas,
    ];
}

function unidades_volume_por_codigo(string $codigo): array
{
    $mapa = [
        'en' => volume_en(),
        'es' => volume_es(),
        'fr' => volume_fr(),
        'it' => volume_it(),
        'de' => volume_de(),
    ];

    return $mapa[$codigo] ?? ['palavras' => [], 'unidades' => []];
}

function volume_en(): array
{
    return [
        'palavras' => [
            ['Head', 'Cabeça', 'My head hurts.', 'A1'],
            ['Pen', 'Caneta', 'I need a pen.', 'A1'],
            ['Bus', 'Ônibus', 'The bus is late.', 'A2'],
            ['Hobby', 'Passatempo', 'Reading is my hobby.', 'A2'],
            ['Proud', 'Orgulhoso', 'I am proud of you.', 'B1'],
            ['Refund', 'Reembolso', 'I would like a refund.', 'B1'],
            ['Stakeholder', 'Parte interessada', 'We must update the stakeholders.', 'B2'],
            ['Inequality', 'Desigualdade', 'Inequality is rising in the city.', 'C1'],
            ['Notwithstanding', 'Não obstante', 'Notwithstanding the delay, we proceed.', 'C2'],
        ],
        'unidades' => array_merge(volume_en_a1(), volume_en_a2(), volume_en_b(), volume_en_c()),
    ];
}

function volume_en_a1(): array
{
    return [
        uni_lista('Corpo', 'Partes do corpo para se virar no médico.', 'A1', [
            aula_lista('Cabeça e mãos', "head · hand · eye · foot\nMy head hurts. Open your mouth, please.", [
                vitem('head', 'cabeça', 'My head hurts', 'minha cabeça dói'),
                vitem('hand', 'mão', 'Wash your hands', 'lave as mãos'),
                vitem('eye', 'olho', 'Close your eyes', 'feche os olhos'),
                vitem('foot', 'pé', 'My foot is tired', 'meu pé está cansado'),
            ]),
            aula_lista('No médico', "arm · back · stomach · mouth\nWhere does it hurt?", [
                vitem('arm', 'braço', 'My arm hurts', 'meu braço dói'),
                vitem('back', 'costas', 'I have a bad back', 'tenho dor nas costas'),
                vitem('stomach', 'estômago', 'My stomach hurts', 'meu estômago dói'),
                vitem('mouth', 'boca', 'Open your mouth', 'abra a boca'),
            ]),
        ]),
        uni_lista('Na escola', 'Objetos e a sala de aula.', 'A1', [
            aula_lista('Material', "pen · book · bag · notebook\nI need a pen, please.", [
                vitem('pen', 'caneta', 'I need a pen', 'preciso de uma caneta'),
                vitem('book', 'livro', 'This book is new', 'este livro é novo'),
                vitem('bag', 'mochila / bolsa', 'My bag is heavy', 'minha mochila está pesada'),
                vitem('notebook', 'caderno', 'Open your notebook', 'abra o caderno'),
            ]),
            aula_lista('A sala', "classroom · teacher · student · desk\nThe classroom is small.", [
                vitem('classroom', 'sala de aula', 'The classroom is small', 'a sala de aula é pequena'),
                vitem('teacher', 'professor(a)', 'Our teacher is kind', 'nossa professora é gentil'),
                vitem('student', 'aluno(a)', 'I am a student', 'eu sou estudante'),
                vitem('desk', 'carteira / mesa', 'Sit at your desk', 'sente-se na sua carteira'),
            ]),
        ]),
        uni_lista('Animais', 'Pets e animais comuns.', 'A1', [
            aula_lista('Em casa', "dog · cat · bird · fish\nI have a dog.", [
                vitem('dog', 'cão', 'I have a dog', 'eu tenho um cachorro'),
                vitem('cat', 'gato', 'The cat is black', 'o gato é preto'),
                vitem('bird', 'pássaro', 'The bird is singing', 'o pássaro está cantando'),
                vitem('fish', 'peixe', 'The fish is small', 'o peixe é pequeno'),
            ]),
            aula_lista('Na fazenda', "cow · horse · chicken · sheep\nThe horse is fast.", [
                vitem('cow', 'vaca', 'The cow is in the field', 'a vaca está no campo'),
                vitem('horse', 'cavalo', 'The horse is fast', 'o cavalo é rápido'),
                vitem('chicken', 'galinha', 'The chicken is white', 'a galinha é branca'),
                vitem('sheep', 'ovelha', 'The sheep is quiet', 'a ovelha é quieta'),
            ]),
        ]),
        uni_lista('Lugares da cidade', 'Banco, parque, farmácia, praça.', 'A1', [
            aula_lista('Onde fica', "park · bank · pharmacy · square\nWhere is the park?", [
                vitem('park', 'parque', 'Where is the park', 'onde fica o parque'),
                vitem('bank', 'banco', 'The bank is closed', 'o banco está fechado'),
                vitem('pharmacy', 'farmácia', 'I need a pharmacy', 'preciso de uma farmácia'),
                vitem('square', 'praça', 'We meet in the square', 'a gente se encontra na praça'),
            ]),
            aula_lista('Mais lugares', "market · library · museum · cinema\nThe library is free.", [
                vitem('market', 'mercado', 'The market is busy', 'o mercado está cheio'),
                vitem('library', 'biblioteca', 'The library is quiet', 'a biblioteca é silenciosa'),
                vitem('museum', 'museu', 'The museum opens at ten', 'o museu abre às dez'),
                vitem('cinema', 'cinema', 'The cinema is near here', 'o cinema é aqui perto'),
            ]),
        ]),
        uni_lista('Mais comida', 'Refeições e pratos simples.', 'A1', [
            aula_lista('No prato', "rice · soup · fruit · cheese\nI eat rice and soup.", [
                vitem('rice', 'arroz', 'I eat rice', 'eu como arroz'),
                vitem('soup', 'sopa', 'The soup is hot', 'a sopa está quente'),
                vitem('fruit', 'fruta', 'I like fruit', 'eu gosto de fruta'),
                vitem('cheese', 'queijo', 'The cheese is good', 'o queijo é bom'),
            ]),
            aula_lista('Refeições', "breakfast · lunch · dinner · snack\nBreakfast is at eight.", [
                vitem('breakfast', 'café da manhã', 'Breakfast is at eight', 'o café da manhã é às oito'),
                vitem('lunch', 'almoço', 'Lunch is at noon', 'o almoço é ao meio-dia'),
                vitem('dinner', 'jantar', 'Dinner is late', 'o jantar é tarde'),
                vitem('snack', 'lanche', 'I want a snack', 'quero um lanche'),
            ]),
        ]),
        uni_lista('Esportes A1', 'Jogar, nadar, correr, dançar.', 'A1', [
            aula_lista('Eu pratico', "football · swim · run · dance\nI play football on Saturday.", [
                vitem('football', 'futebol', 'I play football', 'eu jogo futebol'),
                vitem('swim', 'nadar', 'I swim on Sunday', 'eu nado no domingo'),
                vitem('run', 'correr', 'I run in the park', 'eu corro no parque'),
                vitem('dance', 'dançar', 'We dance at the party', 'nós dançamos na festa'),
            ]),
            aula_lista('Com amigos', "team · ball · game · win\nOur team can win.", [
                vitem('team', 'time', 'Our team is good', 'nosso time é bom'),
                vitem('ball', 'bola', 'Pass the ball', 'passe a bola'),
                vitem('game', 'jogo', 'The game is at five', 'o jogo é às cinco'),
                vitem('win', 'vencer', 'We can win', 'nós podemos vencer'),
            ]),
        ]),
    ];
}

function volume_en_a2(): array
{
    return [
        uni_lista('Afazeres em casa', 'Louça, roupa, lixo e ajudar em casa.', 'A2', [
            aula_lista('Tarefas', "dishes · laundry · rubbish · vacuum\nI do the dishes after dinner.", [
                vitem('dishes', 'louça', 'I do the dishes', 'eu lavo a louça'),
                vitem('laundry', 'roupa suja / lavagem', 'I do the laundry', 'eu lavo a roupa'),
                vitem('rubbish', 'lixo', 'Take out the rubbish', 'leve o lixo para fora'),
                vitem('vacuum', 'aspirar', 'Please vacuum the room', 'por favor aspire o quarto'),
            ]),
            aula_lista('Pedir ajuda', "chore · help · tidy · clean\nCan you help me with the chores?", [
                vitem('chore', 'afazer', 'This chore is easy', 'este afazer é fácil'),
                vitem('help', 'ajuda', 'Can you help me', 'você pode me ajudar'),
                vitem('tidy', 'arrumar', 'Tidy your room', 'arrume o seu quarto'),
                vitem('clean', 'limpar', 'Clean the kitchen', 'limpe a cozinha'),
            ]),
        ]),
        uni_lista('Transportes A2', 'Ônibus, metrô, ponto e bilhete.', 'A2', [
            aula_lista('Como ir', "bus · metro · stop · ticket\nGet off at the next stop.", [
                vitem('bus', 'ônibus', 'The bus is late', 'o ônibus está atrasado'),
                vitem('metro', 'metrô', 'Take the metro', 'pegue o metrô'),
                vitem('stop', 'parada', 'The next stop is Central', 'a próxima parada é Central'),
                vitem('ticket', 'bilhete', 'I need a ticket', 'preciso de um bilhete'),
            ]),
            aula_lista('No caminho', "get off · change · delayed · platform\nWe change at the next station.", [
                vitem('get off', 'descer', 'Get off here', 'desça aqui'),
                vitem('change', 'fazer baldeação', 'Change at Central', 'faça baldeação em Central'),
                vitem('delayed', 'atrasado', 'The train is delayed', 'o trem está atrasado'),
                vitem('platform', 'plataforma', 'Platform three', 'plataforma três'),
            ]),
        ]),
        uni_lista('Hobbies e lazer', 'Tempo livre, cinema, música, caminhada.', 'A2', [
            aula_lista('Tempo livre', "hobby · cinema · music · walking\nAt the weekend I go walking.", [
                vitem('hobby', 'passatempo', 'Reading is my hobby', 'ler é o meu passatempo'),
                vitem('cinema', 'cinema', 'We go to the cinema', 'vamos ao cinema'),
                vitem('music', 'música', 'I listen to music', 'eu escuto música'),
                vitem('walking', 'caminhada', 'I like walking', 'eu gosto de caminhar'),
            ]),
            aula_lista('Um convite', "free · join · tonight · maybe\nAre you free tonight?", [
                vitem('free', 'livre', 'Are you free tonight', 'você está livre hoje à noite'),
                vitem('join', 'juntar-se', 'Join us at seven', 'venha conosco às sete'),
                vitem('tonight', 'esta noite', 'See you tonight', 'até esta noite'),
                vitem('maybe', 'talvez', 'Maybe tomorrow', 'talvez amanhã'),
            ]),
        ]),
        uni_lista('Agora mesmo', 'Presente contínuo: o que está acontecendo.', 'A2', [
            aula_lista('Estou fazendo', "cooking · reading · working · waiting\nI am cooking now.", [
                vitem('cooking', 'cozinhando', 'I am cooking now', 'estou cozinhando agora'),
                vitem('reading', 'lendo', 'She is reading', 'ela está lendo'),
                vitem('working', 'trabalhando', 'He is working', 'ele está trabalhando'),
                vitem('waiting', 'esperando', 'We are waiting', 'estamos esperando'),
            ]),
            aula_lista('O que você está fazendo', "doing · right now · at the moment · currently\nWhat are you doing right now?", [
                vitem('doing', 'fazendo', 'What are you doing', 'o que você está fazendo'),
                vitem('right now', 'agora mesmo', 'I am busy right now', 'estou ocupado agora mesmo'),
                vitem('at the moment', 'no momento', 'I am out at the moment', 'estou fora no momento'),
                vitem('currently', 'atualmente', 'I am currently studying', 'atualmente estou estudando'),
            ]),
        ]),
        uni_lista('Sempre e nunca', 'Advérbios de frequência.', 'A2', [
            aula_lista('Com que frequência', "always · usually · sometimes · never\nI always drink coffee.", [
                vitem('always', 'sempre', 'I always drink coffee', 'eu sempre bebo café'),
                vitem('usually', 'geralmente', 'I usually wake up early', 'eu geralmente acordo cedo'),
                vitem('sometimes', 'às vezes', 'I sometimes walk', 'às vezes eu caminho'),
                vitem('never', 'nunca', 'I never smoke', 'eu nunca fumo'),
            ]),
            aula_lista('Na rotina', "often · rarely · once · every day\nI go there once a week.", [
                vitem('often', 'muitas vezes', 'I often cook', 'eu cozinho muitas vezes'),
                vitem('rarely', 'raramente', 'I rarely eat out', 'raramente como fora'),
                vitem('once', 'uma vez', 'Once a week', 'uma vez por semana'),
                vitem('every day', 'todo dia', 'I study every day', 'estudo todo dia'),
            ]),
        ]),
        uni_lista('Recados curtos', 'Bilhete, SMS e e-mail simples do dia a dia.', 'A2', [
            aula_lista('Um bilhete', "note · call me · I am late · see you\nI am late. Call me, please.", [
                vitem('note', 'bilhete / recado', 'I left a note', 'deixei um recado'),
                vitem('call me', 'me ligue', 'Please call me', 'por favor me ligue'),
                vitem('I am late', 'estou atrasado', 'Sorry I am late', 'desculpa estou atrasado'),
                vitem('see you', 'até logo', 'See you later', 'até mais tarde'),
            ]),
            aula_lista('E-mail simples', "dear · regards · I need · attached\nDear Ana, I need help today.", [
                vitem('dear', 'prezada/o', 'Dear Ana', 'prezada Ana'),
                vitem('regards', 'atenciosamente', 'Best regards', 'atenciosamente'),
                vitem('I need', 'eu preciso', 'I need help today', 'preciso de ajuda hoje'),
                vitem('attached', 'em anexo', 'The file is attached', 'o arquivo está em anexo'),
            ]),
        ]),
    ];
}

function volume_en_b(): array
{
    return [
        uni_lista('Sentimentos B1', 'Emoções para justificar decisões.', 'B1', [
            aula_lista('Como me sinto', "proud · worried · disappointed · excited\nI am proud of this result.", [
                vitem('proud', 'orgulhoso', 'I am proud of you', 'tenho orgulho de você'),
                vitem('worried', 'preocupado', 'I am worried about the delay', 'estou preocupado com o atraso'),
                vitem('disappointed', 'decepcionado', 'She is disappointed', 'ela está decepcionada'),
                vitem('excited', 'empolgado', 'We are excited', 'estamos empolgados'),
            ]),
            aula_lista('Sonhos', "hope · dream · goal · courage\nI hope I can study abroad.", [
                vitem('hope', 'esperança / esperar', 'I hope I can go', 'espero poder ir'),
                vitem('dream', 'sonho', 'This is my dream', 'este é o meu sonho'),
                vitem('goal', 'objetivo', 'My goal is clear', 'meu objetivo é claro'),
                vitem('courage', 'coragem', 'I need courage', 'preciso de coragem'),
            ]),
        ]),
        uni_lista('Viagem com problema', 'Atraso, reembolso, fila, mala perdida.', 'B1', [
            aula_lista('No aeroporto', "delay · queue · lost · refund\nThere is a long delay.", [
                vitem('delay', 'atraso', 'There is a delay', 'há um atraso'),
                vitem('queue', 'fila', 'The queue is long', 'a fila está longa'),
                vitem('lost', 'perdido', 'My bag is lost', 'minha mala está perdida'),
                vitem('refund', 'reembolso', 'I want a refund', 'quero um reembolso'),
            ]),
            aula_lista('Reclamar com educação', "complaint · manager · unacceptable · solve\nThis is unacceptable. Please solve it.", [
                vitem('complaint', 'reclamação', 'I have a complaint', 'tenho uma reclamação'),
                vitem('manager', 'gerente', 'I need the manager', 'preciso do gerente'),
                vitem('unacceptable', 'inaceitável', 'This is unacceptable', 'isto é inaceitável'),
                vitem('solve', 'resolver', 'Please solve it', 'por favor resolva'),
            ]),
        ]),
        uni_lista('Mídia B1', 'Filme, notícia, resumo, reação.', 'B1', [
            aula_lista('Um resumo', "review · plot · moving · recommend\nI would recommend this film.", [
                vitem('review', 'crítica / resenha', 'I read a review', 'li uma resenha'),
                vitem('plot', 'enredo', 'The plot is simple', 'o enredo é simples'),
                vitem('moving', 'comovente', 'The ending is moving', 'o final é comovente'),
                vitem('recommend', 'recomendar', 'I recommend it', 'eu recomendo'),
            ]),
            aula_lista('A notícia', "headline · interview · source · reaction\nThe headline is strong.", [
                vitem('headline', 'manchete', 'The headline is strong', 'a manchete é forte'),
                vitem('interview', 'entrevista', 'The interview is live', 'a entrevista é ao vivo'),
                vitem('source', 'fonte', 'Check the source', 'confira a fonte'),
                vitem('reaction', 'reação', 'My reaction was mixed', 'minha reação foi mista'),
            ]),
        ]),
        uni_lista('Ambiente e debate', 'Temas atuais para argumentar no B2.', 'B2', [
            aula_lista('O planeta', "climate · waste · renewable · emissions\nWe must reduce emissions.", [
                vitem('climate', 'clima / clima político', 'Climate change is real', 'a mudança climática é real'),
                vitem('waste', 'lixo / desperdício', 'Reduce waste', 'reduza o desperdício'),
                vitem('renewable', 'renovável', 'Renewable energy matters', 'energia renovável importa'),
                vitem('emissions', 'emissões', 'Cut emissions now', 'corte as emissões agora'),
            ]),
            aula_lista('Por outro lado', "despite · however · whereas · therefore\nDespite the cost, it works.", [
                vitem('despite', 'apesar de', 'Despite the cost it works', 'apesar do custo funciona'),
                vitem('however', 'no entanto', 'However we disagree', 'no entanto discordamos'),
                vitem('whereas', 'ao passo que', 'I walk whereas you drive', 'eu caminho ao passo que você dirige'),
                vitem('therefore', 'portanto', 'Therefore we wait', 'portanto esperamos'),
            ]),
        ]),
        uni_lista('Trabalho formal B2', 'Prazos, rascunho, feedback, partes interessadas.', 'B2', [
            aula_lista('O projeto', "deadline · draft · feedback · stakeholder\nThe draft is ready for feedback.", [
                vitem('deadline', 'prazo', 'The deadline is Friday', 'o prazo é sexta'),
                vitem('draft', 'rascunho', 'This is the first draft', 'este é o primeiro rascunho'),
                vitem('feedback', 'retorno / parecer', 'Send your feedback', 'envie seu parecer'),
                vitem('stakeholder', 'parte interessada', 'Update the stakeholders', 'atualize as partes interessadas'),
            ]),
            aula_lista('Soar natural', "look after · give up · keep up · work out\nDo not give up now.", [
                vitem('look after', 'cuidar', 'Look after the team', 'cuide da equipe'),
                vitem('give up', 'desistir', 'Do not give up', 'não desista'),
                vitem('keep up', 'acompanhar', 'Keep up with the news', 'acompanhe as notícias'),
                vitem('work out', 'dar certo / treinar', 'It will work out', 'vai dar certo'),
            ]),
        ]),
        uni_lista('Discurso indireto', 'Ela disse que… — reportar com precisão.', 'B2', [
            aula_lista('Ela disse', "said · told · asked · claimed\nShe said she was tired.", [
                vitem('said', 'disse', 'She said she was tired', 'ela disse que estava cansada'),
                vitem('told', 'disse a', 'He told me to wait', 'ele me disse para esperar'),
                vitem('asked', 'perguntou', 'They asked if it was open', 'perguntaram se estava aberto'),
                vitem('claimed', 'alegou', 'He claimed he had paid', 'ele alegou que tinha pago'),
            ]),
            aula_lista('No dia seguinte', "the next day · the day before · would · had\nShe said she would arrive the next day.", [
                vitem('the next day', 'no dia seguinte', 'She would arrive the next day', 'ela chegaria no dia seguinte'),
                vitem('the day before', 'no dia anterior', 'We had left the day before', 'tínhamos saído no dia anterior'),
                vitem('would', 'veria / iria', 'She said she would come', 'ela disse que viria'),
                vitem('had', 'tinha / havia', 'He said he had paid', 'ele disse que tinha pago'),
            ]),
        ]),
    ];
}

function volume_en_c(): array
{
    return [
        uni_lista('C1: sociedade e evidência', 'Vocabulário abstrato de economia e política.', 'C1', [
            aula_lista('Termos', "inequality · policy · evidence · growth\nThe evidence supports this policy.", [
                vitem('inequality', 'desigualdade', 'Inequality is rising', 'a desigualdade está aumentando'),
                vitem('policy', 'política pública', 'This policy is new', 'esta política é nova'),
                vitem('evidence', 'evidência', 'The evidence is clear', 'a evidência é clara'),
                vitem('growth', 'crescimento', 'Growth remains slow', 'o crescimento segue lento'),
            ]),
            aula_lista('Coesão', "furthermore · in contrast · on balance · this suggests\nOn balance, the reform is sound.", [
                vitem('furthermore', 'além disso', 'Furthermore costs fall', 'além disso os custos caem'),
                vitem('in contrast', 'em contraste', 'In contrast rural areas lag', 'em contraste o interior fica para trás'),
                vitem('on balance', 'no saldo / em suma', 'On balance we agree', 'no saldo concordamos'),
                vitem('this suggests', 'isto sugere', 'This suggests a delay', 'isto sugere um atraso'),
            ]),
        ]),
        uni_lista('C1: entre linhas', 'Ironia, metáfora e o que não está dito.', 'C1', [
            aula_lista('Ironia', "tongue-in-cheek · sarcastic · understatement · pinch of salt\nTake that promise with a pinch of salt.", [
                vitem('tongue-in-cheek', 'de gozação / irônico', 'It was tongue-in-cheek', 'foi de gozação'),
                vitem('sarcastic', 'sarcástico', 'The reply was sarcastic', 'a resposta foi sarcástica'),
                vitem('understatement', 'atenuação', 'That is an understatement', 'isso é atenuar demais'),
                vitem('pinch of salt', 'com reservas', 'Take it with a pinch of salt', 'leve com reservas'),
            ]),
            aula_lista('Improviso', "off the cuff · articulate · grasp · fluent\nShe spoke off the cuff and still sounded fluent.", [
                vitem('off the cuff', 'de improviso', 'He spoke off the cuff', 'ele falou de improviso'),
                vitem('articulate', 'articulado', 'She is very articulate', 'ela é muito articulada'),
                vitem('grasp', 'compreender / domínio', 'He has a firm grasp', 'ele tem um domínio firme'),
                vitem('fluent', 'fluente', 'The talk was fluent', 'a fala foi fluente'),
            ]),
        ]),
        uni_lista('C2: jurídico e coloquial', 'Transitar entre o ultraformal e o bar.', 'C2', [
            aula_lista('O contrato', "pursuant · hereby · notwithstanding · the parties\nThe parties hereby agree.", [
                vitem('pursuant', 'nos termos de', 'Pursuant to clause two', 'nos termos da cláusula dois'),
                vitem('hereby', 'pelo presente', 'We hereby confirm', 'pelo presente confirmamos'),
                vitem('notwithstanding', 'não obstante', 'Notwithstanding the delay', 'não obstante o atraso'),
                vitem('the parties', 'as partes', 'The parties agree', 'as partes concordam'),
            ]),
            aula_lista('No bar', "fair enough · yeah no · no worries · dead on\nFair enough. No worries.", [
                vitem('fair enough', 'justo / ok', 'Fair enough I see', 'justo, eu entendo'),
                vitem('yeah no', 'pois é / então não', 'Yeah no I disagree', 'pois é, eu discordo'),
                vitem('no worries', 'sem problema', 'No worries at all', 'sem problema nenhum'),
                vitem('dead on', 'exato', 'That is dead on', 'isso é exato'),
            ]),
        ]),
        uni_lista('C2: fontes e estilo', 'Reconstruir argumentos e ler texto denso.', 'C2', [
            aula_lista('Duas fontes', "according to · taken together · the author argues · in turn\nTaken together, the sources converge.", [
                vitem('according to', 'segundo', 'According to the report', 'segundo o relatório'),
                vitem('taken together', 'em conjunto', 'Taken together they agree', 'em conjunto eles concordam'),
                vitem('the author argues', 'o autor argumenta', 'The author argues otherwise', 'o autor argumenta o contrário'),
                vitem('in turn', 'por sua vez', 'This in turn delayed us', 'isso por sua vez nos atrasou'),
            ]),
            aula_lista('Precisão', "native-like · interference · collocation · dialect\nWatch collocation; avoid interference from Portuguese.", [
                vitem('native-like', 'quase nativo', 'The tone is native-like', 'o tom é quase nativo'),
                vitem('interference', 'interferência', 'Avoid L1 interference', 'evite interferência da L1'),
                vitem('collocation', 'colocação', 'This collocation is odd', 'esta colocação é estranha'),
                vitem('dialect', 'dialeto', 'The dialect is fast', 'o dialeto é rápido'),
            ]),
        ]),
    ];
}

function volume_es(): array
{
    return [
        'palavras' => [
            ['Cabeza', 'Cabeça', 'Me duele la cabeza.', 'A1'],
            ['Autobús', 'Ônibus', 'El autobús llega tarde.', 'A2'],
            ['Orgulloso', 'Orgulhoso', 'Estoy orgulloso de ti.', 'B1'],
            ['Desigualdad', 'Desigualdade', 'La desigualdad crece.', 'C1'],
        ],
        'unidades' => array_merge(volume_es_a1(), volume_es_a2(), volume_es_b(), volume_es_c()),
    ];
}
