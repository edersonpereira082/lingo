<?php

function volume_es_a1(): array
{
    return [
        uni_lista('Corpo', 'Partes do corpo para se virar no médico.', 'A1', [
            aula_lista('Cabeça e mãos', "cabeza · mano · ojo · pie\nMe duele la cabeza.", [
                vitem('cabeza', 'cabeça', 'Me duele la cabeza', 'minha cabeça dói'),
                vitem('mano', 'mão', 'Lávate las manos', 'lave as mãos'),
                vitem('ojo', 'olho', 'Cierra los ojos', 'feche os olhos'),
                vitem('pie', 'pé', 'Me duele el pie', 'meu pé dói'),
            ]),
            aula_lista('No médico', "brazo · espalda · estómago · boca\n¿Dónde le duele?", [
                vitem('brazo', 'braço', 'Me duele el brazo', 'meu braço dói'),
                vitem('espalda', 'costas', 'Tengo dolor de espalda', 'tenho dor nas costas'),
                vitem('estómago', 'estômago', 'Me duele el estómago', 'meu estômago dói'),
                vitem('boca', 'boca', 'Abra la boca', 'abra a boca'),
            ]),
        ]),
        uni_lista('Na escola', 'Objetos e a sala de aula.', 'A1', [
            aula_lista('Material', "bolígrafo · libro · mochila · cuaderno\nNecesito un bolígrafo.", [
                vitem('bolígrafo', 'caneta', 'Necesito un bolígrafo', 'preciso de uma caneta'),
                vitem('libro', 'livro', 'Este libro es nuevo', 'este livro é novo'),
                vitem('mochila', 'mochila', 'Mi mochila es pesada', 'minha mochila está pesada'),
                vitem('cuaderno', 'caderno', 'Abre el cuaderno', 'abra o caderno'),
            ]),
            aula_lista('A sala', "clase · profesor · alumno · pupitre\nLa clase es pequeña.", [
                vitem('clase', 'sala de aula', 'La clase es pequeña', 'a sala de aula é pequena'),
                vitem('profesor', 'professor(a)', 'Nuestra profesora es amable', 'nossa professora é gentil'),
                vitem('alumno', 'aluno(a)', 'Soy alumno', 'eu sou aluno'),
                vitem('pupitre', 'carteira', 'Siéntate en tu pupitre', 'sente-se na sua carteira'),
            ]),
        ]),
        uni_lista('Animais', 'Pets e animais comuns.', 'A1', [
            aula_lista('Em casa', "perro · gato · pájaro · pez\nTengo un perro.", [
                vitem('perro', 'cão', 'Tengo un perro', 'eu tenho um cachorro'),
                vitem('gato', 'gato', 'El gato es negro', 'o gato é preto'),
                vitem('pájaro', 'pássaro', 'El pájaro canta', 'o pássaro canta'),
                vitem('pez', 'peixe', 'El pez es pequeño', 'o peixe é pequeno'),
            ]),
            aula_lista('Na fazenda', "vaca · caballo · gallina · oveja\nEl caballo es rápido.", [
                vitem('vaca', 'vaca', 'La vaca está en el campo', 'a vaca está no campo'),
                vitem('caballo', 'cavalo', 'El caballo es rápido', 'o cavalo é rápido'),
                vitem('gallina', 'galinha', 'La gallina es blanca', 'a galinha é branca'),
                vitem('oveja', 'ovelha', 'La oveja está quieta', 'a ovelha está quieta'),
            ]),
        ]),
        uni_lista('Lugares da cidade', 'Banco, parque, farmácia, praça.', 'A1', [
            aula_lista('Onde fica', "parque · banco · farmacia · plaza\n¿Dónde está el parque?", [
                vitem('parque', 'parque', 'Dónde está el parque', 'onde fica o parque'),
                vitem('banco', 'banco', 'El banco está cerrado', 'o banco está fechado'),
                vitem('farmacia', 'farmácia', 'Necesito una farmacia', 'preciso de uma farmácia'),
                vitem('plaza', 'praça', 'Nos vemos en la plaza', 'a gente se encontra na praça'),
            ]),
            aula_lista('Mais lugares', "mercado · biblioteca · museo · cine\nLa biblioteca es gratis.", [
                vitem('mercado', 'mercado', 'El mercado está lleno', 'o mercado está cheio'),
                vitem('biblioteca', 'biblioteca', 'La biblioteca es silenciosa', 'a biblioteca é silenciosa'),
                vitem('museo', 'museu', 'El museo abre a las diez', 'o museu abre às dez'),
                vitem('cine', 'cinema', 'El cine está cerca', 'o cinema é perto'),
            ]),
        ]),
        uni_lista('Mais comida', 'Refeições e pratos simples.', 'A1', [
            aula_lista('No prato', "arroz · sopa · fruta · queso\nComo arroz y sopa.", [
                vitem('arroz', 'arroz', 'Como arroz', 'eu como arroz'),
                vitem('sopa', 'sopa', 'La sopa está caliente', 'a sopa está quente'),
                vitem('fruta', 'fruta', 'Me gusta la fruta', 'eu gosto de fruta'),
                vitem('queso', 'queijo', 'El queso es bueno', 'o queijo é bom'),
            ]),
            aula_lista('Refeições', "desayuno · almuerzo · cena · merienda\nEl desayuno es a las ocho.", [
                vitem('desayuno', 'café da manhã', 'El desayuno es a las ocho', 'o café da manhã é às oito'),
                vitem('almuerzo', 'almoço', 'El almuerzo es al mediodía', 'o almoço é ao meio-dia'),
                vitem('cena', 'jantar', 'La cena es tarde', 'o jantar é tarde'),
                vitem('merienda', 'lanche', 'Quiero una merienda', 'quero um lanche'),
            ]),
        ]),
        uni_lista('Esportes A1', 'Jogar, nadar, correr, dançar.', 'A1', [
            aula_lista('Eu pratico', "fútbol · nadar · correr · bailar\nJuego al fútbol el sábado.", [
                vitem('fútbol', 'futebol', 'Juego al fútbol', 'eu jogo futebol'),
                vitem('nadar', 'nadar', 'Nado el domingo', 'eu nado no domingo'),
                vitem('correr', 'correr', 'Corro en el parque', 'eu corro no parque'),
                vitem('bailar', 'dançar', 'Bailamos en la fiesta', 'nós dançamos na festa'),
            ]),
            aula_lista('Com amigos', "equipo · pelota · partido · ganar\nNuestro equipo puede ganar.", [
                vitem('equipo', 'time', 'Nuestro equipo es bueno', 'nosso time é bom'),
                vitem('pelota', 'bola', 'Pasa la pelota', 'passe a bola'),
                vitem('partido', 'jogo', 'El partido es a las cinco', 'o jogo é às cinco'),
                vitem('ganar', 'vencer', 'Podemos ganar', 'nós podemos vencer'),
            ]),
        ]),
        uni_lista('Cores', 'Cores para descrever objetos e roupas.', 'A1', [
            aula_lista('As cores', "rojo · azul · verde · negro\nLa bolsa es roja.", [
                vitem('rojo', 'vermelho', 'La bolsa es roja', 'a bolsa é vermelha'),
                vitem('azul', 'azul', 'El cielo es azul', 'o céu é azul'),
                vitem('verde', 'verde', 'El parque es verde', 'o parque é verde'),
                vitem('negro', 'preto', 'El gato es negro', 'o gato é preto'),
            ]),
            aula_lista('Mais cores', "blanco · amarillo · marrón · gris\nQuiero una camisa blanca.", [
                vitem('blanco', 'branco', 'Quiero una camisa blanca', 'quero uma camisa branca'),
                vitem('amarillo', 'amarelo', 'El sol es amarillo', 'o sol é amarelo'),
                vitem('marrón', 'marrom', 'La mesa es marrón', 'a mesa é marrom'),
                vitem('gris', 'cinza', 'El cielo está gris', 'o céu está cinza'),
            ]),
        ]),
        uni_lista('De onde você é', 'País, cidade e nacionalidade — dados pessoais A1.', 'A1', [
            aula_lista('País', "de · Brasil · país · ciudad\nSoy de Brasil.", [
                vitem('de', 'de', 'Soy de Brasil', 'eu sou do Brasil'),
                vitem('Brasil', 'Brasil', 'Brasil es grande', 'o Brasil é grande'),
                vitem('país', 'país', 'Cuál es tu país', 'qual é o seu país'),
                vitem('ciudad', 'cidade', 'Mi ciudad es pequeña', 'minha cidade é pequena'),
            ]),
            aula_lista('Nacionalidade', "brasileño · idioma · vivo · dónde\nVivo en São Paulo.", [
                vitem('brasileño', 'brasileiro(a)', 'Soy brasileño', 'eu sou brasileiro'),
                vitem('idioma', 'idioma', 'Mi idioma es el portugués', 'meu idioma é o português'),
                vitem('vivo', 'moro', 'Vivo en São Paulo', 'eu moro em São Paulo'),
                vitem('dónde', 'onde', 'Dónde vives', 'onde você mora'),
            ]),
        ]),
        uni_lista('Profissões A1', 'Dizer o que você faz, de forma simples.', 'A1', [
            aula_lista('O trabalho', "profesor · médico · cocinero · conductor\nSoy profesor.", [
                vitem('profesor', 'professor(a)', 'Soy profesor', 'eu sou professor'),
                vitem('médico', 'médico(a)', 'Ella es médica', 'ela é médica'),
                vitem('cocinero', 'cozinheiro(a)', 'Él es cocinero', 'ele é cozinheiro'),
                vitem('conductor', 'motorista', 'Mi padre es conductor', 'meu pai é motorista'),
            ]),
            aula_lista('Onde trabalho', "trabajo · tienda · oficina · hospital\nTrabajo en una tienda.", [
                vitem('trabajo', 'trabalho', 'Trabajo en una tienda', 'eu trabalho numa loja'),
                vitem('tienda', 'loja', 'La tienda está abierta', 'a loja está aberta'),
                vitem('oficina', 'escritório', 'Ella trabaja en una oficina', 'ela trabalha num escritório'),
                vitem('hospital', 'hospital', 'El hospital está cerca', 'o hospital é perto'),
            ]),
        ]),
        uni_lista('Telefone A1', 'Número, ligação e recado curto.', 'A1', [
            aula_lista('O número', "teléfono · número · llama · mensaje\nCuál es tu número de teléfono?", [
                vitem('teléfono', 'telefone', 'Este es mi teléfono', 'este é o meu telefone'),
                vitem('número', 'número', 'Cuál es tu número', 'qual é o seu número'),
                vitem('llama', 'liga', 'Por favor llámame', 'por favor me ligue'),
                vitem('mensaje', 'mensagem', 'Envío un mensaje', 'eu mando uma mensagem'),
            ]),
            aula_lista('Atender', "hola · habla · espera · luego\nHola, habla Ana.", [
                vitem('hola', 'olá', 'Hola habla Ana', 'olá fala a Ana'),
                vitem('habla', 'fala', 'Ana habla', 'Ana falando'),
                vitem('espera', 'espera', 'Por favor espera', 'por favor espere'),
                vitem('luego', 'depois', 'Llámame luego', 'me ligue depois'),
            ]),
        ]),
        uni_lista('Que horas são', 'Horas cheias e combinados simples.', 'A1', [
            aula_lista('As horas', "en punto · y media · y cuarto · ahora\nSon las siete en punto.", [
                vitem('en punto', 'em ponto', 'Son las siete en punto', 'são sete em ponto'),
                vitem('y media', 'e meia', 'Son las ocho y media', 'são oito e meia'),
                vitem('y cuarto', 'e quinze', 'Son las nueve y cuarto', 'são nove e quinze'),
                vitem('ahora', 'agora', 'Qué hora es ahora', 'que horas são agora'),
            ]),
            aula_lista('O encontro', "quedamos · a las · mañana · tarde\nQuedamos a las diez.", [
                vitem('quedamos', 'marcamos', 'Quedamos a las diez', 'marcamos às dez'),
                vitem('a las', 'às', 'A las seis por favor', 'às seis por favor'),
                vitem('mañana', 'manhã', 'Por la mañana', 'de manhã'),
                vitem('tarde', 'tarde', 'Por la tarde', 'à tarde'),
            ]),
        ]),
        uni_lista('Endereço', 'Rua, número e cidade — formulário A1.', 'A1', [
            aula_lista('Onde mora', "calle · dirección · código · vivo\nVivo en esta calle.", [
                vitem('calle', 'rua', 'Vivo en esta calle', 'eu moro nesta rua'),
                vitem('dirección', 'endereço', 'Cuál es tu dirección', 'qual é o seu endereço'),
                vitem('código', 'CEP', 'El código postal es 01310', 'o CEP é 01310'),
                vitem('vivo', 'moro', 'Dónde vives', 'onde você mora'),
            ]),
            aula_lista('O formulário', "rellena · formulario · fecha · firma\nPor favor rellena el formulario.", [
                vitem('rellena', 'preencha', 'Rellena el formulario', 'preencha o formulário'),
                vitem('formulario', 'formulário', 'Este formulario es corto', 'este formulário é curto'),
                vitem('fecha', 'data', 'Escribe la fecha', 'escreva a data'),
                vitem('firma', 'assinatura', 'Tu firma por favor', 'sua assinatura por favor'),
            ]),
        ]),
    ];
}

function volume_es_a2(): array
{
    return [
        uni_lista('Afazeres em casa', 'Louça, roupa, lixo e ajudar em casa.', 'A2', [
            aula_lista('Tarefas', "platos · ropa · basura · aspirar\nLavo los platos después de cenar.", [
                vitem('platos', 'louça', 'Lavo los platos', 'eu lavo a louça'),
                vitem('ropa', 'roupa', 'Lavo la ropa', 'eu lavo a roupa'),
                vitem('basura', 'lixo', 'Saca la basura', 'leve o lixo para fora'),
                vitem('aspirar', 'aspirar', 'Por favor aspira el cuarto', 'por favor aspire o quarto'),
            ]),
            aula_lista('Pedir ajuda', "tarea · ayuda · ordena · limpia\nPuedes ayudarme con las tareas?", [
                vitem('tarea', 'afazer', 'Esta tarea es fácil', 'este afazer é fácil'),
                vitem('ayuda', 'ajuda', 'Puedes ayudarme', 'você pode me ajudar'),
                vitem('ordena', 'arruma', 'Ordena tu cuarto', 'arrume o seu quarto'),
                vitem('limpia', 'limpa', 'Limpia la cocina', 'limpe a cozinha'),
            ]),
        ]),
        uni_lista('Transportes A2', 'Ônibus, metrô, ponto e bilhete.', 'A2', [
            aula_lista('Como ir', "autobús · metro · parada · billete\nBaja en la próxima parada.", [
                vitem('autobús', 'ônibus', 'El autobús llega tarde', 'o ônibus está atrasado'),
                vitem('metro', 'metrô', 'Toma el metro', 'pegue o metrô'),
                vitem('parada', 'parada', 'La próxima parada es Central', 'a próxima parada é Central'),
                vitem('billete', 'bilhete', 'Necesito un billete', 'preciso de um bilhete'),
            ]),
            aula_lista('No caminho', "bajar · transbordo · retraso · andén\nCambiamos en la próxima estación.", [
                vitem('bajar', 'descer', 'Baja aquí', 'desça aqui'),
                vitem('transbordo', 'baldeação', 'Haz transbordo en Central', 'faça baldeação em Central'),
                vitem('retraso', 'atraso', 'El tren tiene retraso', 'o trem está atrasado'),
                vitem('andén', 'plataforma', 'Andén tres', 'plataforma três'),
            ]),
        ]),
        uni_lista('Hobbies e lazer', 'Tempo livre, cinema, música, caminhada.', 'A2', [
            aula_lista('Tempo livre', "hobby · cine · música · caminar\nEl fin de semana salgo a caminar.", [
                vitem('hobby', 'passatempo', 'Leer es mi hobby', 'ler é o meu passatempo'),
                vitem('cine', 'cinema', 'Vamos al cine', 'vamos ao cinema'),
                vitem('música', 'música', 'Escucho música', 'eu escuto música'),
                vitem('caminar', 'caminhar', 'Me gusta caminar', 'eu gosto de caminhar'),
            ]),
            aula_lista('Um convite', "libre · ven · esta noche · quizás\nEstás libre esta noche?", [
                vitem('libre', 'livre', 'Estás libre esta noche', 'você está livre hoje à noite'),
                vitem('ven', 'venha', 'Ven a las siete', 'venha às sete'),
                vitem('esta noche', 'esta noite', 'Hasta esta noche', 'até esta noite'),
                vitem('quizás', 'talvez', 'Quizás mañana', 'talvez amanhã'),
            ]),
        ]),
        uni_lista('Agora mesmo', 'Estar + gerúndio: o que está acontecendo.', 'A2', [
            aula_lista('Estou fazendo', "cocinando · leyendo · trabajando · esperando\nEstoy cocinando ahora.", [
                vitem('cocinando', 'cozinhando', 'Estoy cocinando ahora', 'estou cozinhando agora'),
                vitem('leyendo', 'lendo', 'Ella está leyendo', 'ela está lendo'),
                vitem('trabajando', 'trabalhando', 'Él está trabajando', 'ele está trabalhando'),
                vitem('esperando', 'esperando', 'Estamos esperando', 'estamos esperando'),
            ]),
            aula_lista('O que você está fazendo', "haciendo · ahora mismo · en este momento · actualmente\nQué estás haciendo ahora mismo?", [
                vitem('haciendo', 'fazendo', 'Qué estás haciendo', 'o que você está fazendo'),
                vitem('ahora mismo', 'agora mesmo', 'Estoy ocupado ahora mismo', 'estou ocupado agora mesmo'),
                vitem('en este momento', 'neste momento', 'Estoy fuera en este momento', 'estou fora neste momento'),
                vitem('actualmente', 'atualmente', 'Actualmente estoy estudiando', 'atualmente estou estudando'),
            ]),
        ]),
        uni_lista('Sempre e nunca', 'Advérbios de frequência.', 'A2', [
            aula_lista('Com que frequência', "siempre · normalmente · a veces · nunca\nSiempre tomo café.", [
                vitem('siempre', 'sempre', 'Siempre tomo café', 'eu sempre bebo café'),
                vitem('normalmente', 'geralmente', 'Normalmente me levanto temprano', 'eu geralmente acordo cedo'),
                vitem('a veces', 'às vezes', 'A veces camino', 'às vezes eu caminho'),
                vitem('nunca', 'nunca', 'Nunca fumo', 'eu nunca fumo'),
            ]),
            aula_lista('Na rotina', "a menudo · rara vez · una vez · todos los días\nVoy allí una vez por semana.", [
                vitem('a menudo', 'muitas vezes', 'Cocino a menudo', 'eu cozinho muitas vezes'),
                vitem('rara vez', 'raramente', 'Rara vez como fuera', 'raramente como fora'),
                vitem('una vez', 'uma vez', 'Una vez por semana', 'uma vez por semana'),
                vitem('todos los días', 'todo dia', 'Estudio todos los días', 'estudo todo dia'),
            ]),
        ]),
        uni_lista('Recados curtos', 'Bilhete, SMS e e-mail simples do dia a dia.', 'A2', [
            aula_lista('Um bilhete', "nota · llámame · llego tarde · hasta luego\nLlego tarde. Llámame, por favor.", [
                vitem('nota', 'recado', 'Dejé una nota', 'deixei um recado'),
                vitem('llámame', 'me ligue', 'Por favor llámame', 'por favor me ligue'),
                vitem('llego tarde', 'chego atrasado', 'Perdón llego tarde', 'desculpa chego atrasado'),
                vitem('hasta luego', 'até logo', 'Hasta luego', 'até logo'),
            ]),
            aula_lista('E-mail simples', "estimado · saludos · necesito · adjunto\nEstimada Ana, necesito ayuda hoy.", [
                vitem('estimado', 'prezado', 'Estimada Ana', 'prezada Ana'),
                vitem('saludos', 'saudações', 'Un saludo', 'um abraço / saudações'),
                vitem('necesito', 'preciso', 'Necesito ayuda hoy', 'preciso de ajuda hoje'),
                vitem('adjunto', 'anexo', 'El archivo está adjunto', 'o arquivo está em anexo'),
            ]),
        ]),
        uni_lista('No banco', 'Conta, dinheiro e um saque simples.', 'A2', [
            aula_lista('A conta', "cuenta · efectivo · tarjeta · retirar\nQuiero retirar efectivo.", [
                vitem('cuenta', 'conta', 'Tengo una cuenta', 'eu tenho uma conta'),
                vitem('efectivo', 'dinheiro', 'Necesito efectivo', 'preciso de dinheiro'),
                vitem('tarjeta', 'cartão', 'Pago con tarjeta', 'pago com cartão'),
                vitem('retirar', 'sacar', 'Quiero retirar efectivo', 'quero sacar dinheiro'),
            ]),
            aula_lista('No caixa', "abrir · cierra · recibo · cambio\nMe da un recibo?", [
                vitem('abrir', 'abrir', 'Quiero abrir una cuenta', 'quero abrir uma conta'),
                vitem('cierra', 'fecha', 'El banco cierra a las cuatro', 'o banco fecha às quatro'),
                vitem('recibo', 'recibo', 'Me da un recibo', 'me dá um recibo'),
                vitem('cambio', 'troco', 'Quédese con el cambio', 'fique com o troco'),
            ]),
        ]),
        uni_lista('Uma ligação A2', 'Atender, deixar recado e marcar horário.', 'A2', [
            aula_lista('O recado', "espere · disponible · devolver · buzón\nEspere. No está disponible.", [
                vitem('espere', 'aguarde', 'Espere un momento', 'aguarde um momento'),
                vitem('disponible', 'disponível', 'No está disponible', 'não está disponível'),
                vitem('devolver', 'retornar', 'Le devuelvo la llamada', 'retorno a ligação'),
                vitem('buzón', 'caixa postal', 'Deje un recado en el buzón', 'deixe um recado na caixa postal'),
            ]),
            aula_lista('Marcar', "cita · confirmar · cancelar · cambiar\nNecesito cancelar la cita.", [
                vitem('cita', 'consulta', 'Tengo una cita', 'tenho uma consulta'),
                vitem('confirmar', 'confirmar', 'Por favor confirme la hora', 'por favor confirme o horário'),
                vitem('cancelar', 'cancelar', 'Necesito cancelar', 'preciso cancelar'),
                vitem('cambiar', 'remarcar', 'Podemos cambiar la cita', 'podemos remarcar'),
            ]),
        ]),
        uni_lista('Fim de semana', 'Contar o que fez e o que vai fazer.', 'A2', [
            aula_lista('Ontem', "ayer · pasado · me quedé · visité\nAyer visité a mi tía.", [
                vitem('ayer', 'ontem', 'Ayer me quedé en casa', 'ontem fiquei em casa'),
                vitem('pasado', 'passado', 'El fin de semana pasado fue tranquilo', 'o último fim de semana foi calmo'),
                vitem('me quedé', 'fiquei', 'Me quedé en casa', 'fiquei em casa'),
                vitem('visité', 'visitei', 'Visité a mi tía', 'visitei minha tia'),
            ]),
            aula_lista('O próximo', "próximo · vamos a · quizás · juntos\nEl sábado próximo vamos a la playa.", [
                vitem('próximo', 'próximo', 'El sábado próximo estoy libre', 'o próximo sábado estou livre'),
                vitem('vamos a', 'vamos a', 'Vamos a la playa', 'vamos à praia'),
                vitem('quizás', 'talvez', 'Quizás el domingo', 'talvez no domingo'),
                vitem('juntos', 'juntos', 'Vamos juntos', 'vamos juntos'),
            ]),
        ]),
        uni_lista('Pedir informação', 'Horário, duração e como chegar.', 'A2', [
            aula_lista('Perguntas úteis', "cuánto tarda · qué tan lejos · cuál · hasta\nCuánto tarda?", [
                vitem('cuánto tarda', 'quanto tempo leva', 'Cuánto tarda', 'quanto tempo leva'),
                vitem('qué tan lejos', 'a que distância', 'Qué tan lejos está la estación', 'a que distância fica a estação'),
                vitem('cuál', 'qual', 'Cuál autobús va allí', 'qual ônibus vai até lá'),
                vitem('hasta', 'até', 'Abierto hasta las ocho', 'aberto até as oito'),
            ]),
            aula_lista('A resposta', "unos · tarda · todo recto · enfrente\nTarda unos diez minutos.", [
                vitem('unos', 'cerca de', 'Unos diez minutos', 'cerca de dez minutos'),
                vitem('tarda', 'leva', 'Tarda diez minutos', 'leva dez minutos'),
                vitem('todo recto', 'em frente', 'Siga todo recto', 'siga em frente'),
                vitem('enfrente', 'em frente a', 'Está enfrente del banco', 'fica em frente ao banco'),
            ]),
        ]),
        uni_lista('Desculpas A2', 'Atraso, desculpa e um novo plano.', 'A2', [
            aula_lista('Desculpe', "perdón · tarde · perdí · tráfico\nPerdón llego tarde. Había tráfico.", [
                vitem('perdón', 'desculpa', 'Perdón llego tarde', 'desculpa estou atrasado'),
                vitem('tarde', 'atrasado', 'El autobús llegó tarde', 'o ônibus chegou atrasado'),
                vitem('perdí', 'perdi', 'Perdí el tren', 'perdi o trem'),
                vitem('tráfico', 'trânsito', 'Había tráfico', 'havia trânsito'),
            ]),
            aula_lista('Um novo plano', "otro · en vez · no pasa nada · la próxima\nNo pasa nada. La próxima nos vemos antes.", [
                vitem('otro', 'outro', 'Otro día quizás', 'outro dia talvez'),
                vitem('en vez', 'em vez', 'Vamos a pie en vez de eso', 'vamos a pé em vez disso'),
                vitem('no pasa nada', 'não tem problema', 'No pasa nada', 'não tem problema'),
                vitem('la próxima', 'da próxima', 'La próxima te llamo', 'da próxima eu ligo'),
            ]),
        ]),
        uni_lista('No supermercado', 'Lista, oferta e o caixa.', 'A2', [
            aula_lista('A lista', "lista · oferta · cesta · pasillo\nLa oferta está en el pasillo tres.", [
                vitem('lista', 'lista', 'Tengo una lista', 'tenho uma lista'),
                vitem('oferta', 'oferta', 'Esta oferta es buena', 'esta oferta é boa'),
                vitem('cesta', 'cesta', 'Toma una cesta', 'pegue uma cesta'),
                vitem('pasillo', 'corredor', 'Pasillo tres', 'corredor três'),
            ]),
            aula_lista('No caixa', "caja · bolsa · fidelidad · total\nEl total es veinte.", [
                vitem('caja', 'caixa', 'La caja está allí', 'o caixa é ali'),
                vitem('bolsa', 'sacola', 'Necesito una bolsa', 'preciso de uma sacola'),
                vitem('fidelidad', 'fidelidade', 'Tienes tarjeta de fidelidad', 'você tem cartão de fidelidade'),
                vitem('total', 'total', 'El total es veinte', 'o total é vinte'),
            ]),
        ]),
    ];
}

function volume_es_b(): array
{
    return [
        uni_lista('Sentimentos B1', 'Emoções para justificar decisões.', 'B1', [
            aula_lista('Como me sinto', "orgulloso · preocupado · decepcionado · emocionado\nEstoy orgulloso de este resultado.", [
                vitem('orgulloso', 'orgulhoso', 'Estoy orgulloso de ti', 'tenho orgulho de você'),
                vitem('preocupado', 'preocupado', 'Estoy preocupado por el retraso', 'estou preocupado com o atraso'),
                vitem('decepcionado', 'decepcionado', 'Ella está decepcionada', 'ela está decepcionada'),
                vitem('emocionado', 'empolgado', 'Estamos emocionados', 'estamos empolgados'),
            ]),
            aula_lista('Sonhos', "espero · sueño · objetivo · valor\nEspero poder estudiar fuera.", [
                vitem('espero', 'espero', 'Espero poder ir', 'espero poder ir'),
                vitem('sueño', 'sonho', 'Este es mi sueño', 'este é o meu sonho'),
                vitem('objetivo', 'objetivo', 'Mi objetivo es claro', 'meu objetivo é claro'),
                vitem('valor', 'coragem', 'Necesito valor', 'preciso de coragem'),
            ]),
        ]),
        uni_lista('Viagem com problema', 'Atraso, reembolso, fila, mala perdida.', 'B1', [
            aula_lista('No aeroporto', "retraso · cola · perdido · reembolso\nHay un retraso largo.", [
                vitem('retraso', 'atraso', 'Hay un retraso', 'há um atraso'),
                vitem('cola', 'fila', 'La cola es larga', 'a fila está longa'),
                vitem('perdido', 'perdido', 'Mi maleta está perdida', 'minha mala está perdida'),
                vitem('reembolso', 'reembolso', 'Quiero un reembolso', 'quero um reembolso'),
            ]),
            aula_lista('Reclamar com educação', "queja · gerente · inaceptable · resolver\nEsto es inaceptable. Por favor resuélvalo.", [
                vitem('queja', 'reclamação', 'Tengo una queja', 'tenho uma reclamação'),
                vitem('gerente', 'gerente', 'Necesito al gerente', 'preciso do gerente'),
                vitem('inaceptable', 'inaceitável', 'Esto es inaceptable', 'isto é inaceitável'),
                vitem('resolver', 'resolver', 'Por favor resuélvalo', 'por favor resolva'),
            ]),
        ]),
        uni_lista('Mídia B1', 'Filme, notícia, resumo, reação.', 'B1', [
            aula_lista('Um resumo', "crítica · trama · conmovedor · recomiendo\nRecomiendo esta película.", [
                vitem('crítica', 'resenha', 'Leí una crítica', 'li uma resenha'),
                vitem('trama', 'enredo', 'La trama es simple', 'o enredo é simples'),
                vitem('conmovedor', 'comovente', 'El final es conmovedor', 'o final é comovente'),
                vitem('recomiendo', 'recomendo', 'La recomiendo', 'eu recomendo'),
            ]),
            aula_lista('A notícia', "titular · entrevista · fuente · reacción\nEl titular es fuerte.", [
                vitem('titular', 'manchete', 'El titular es fuerte', 'a manchete é forte'),
                vitem('entrevista', 'entrevista', 'La entrevista es en vivo', 'a entrevista é ao vivo'),
                vitem('fuente', 'fonte', 'Comprueba la fuente', 'confira a fonte'),
                vitem('reacción', 'reação', 'Mi reacción fue mixta', 'minha reação foi mista'),
            ]),
        ]),
        uni_lista('Ambiente e debate', 'Temas atuais para argumentar no B2.', 'B2', [
            aula_lista('O planeta', "clima · residuos · renovable · emisiones\nDebemos reducir las emisiones.", [
                vitem('clima', 'clima', 'El cambio climático es real', 'a mudança climática é real'),
                vitem('residuos', 'resíduos', 'Reduce los residuos', 'reduza os resíduos'),
                vitem('renovable', 'renovável', 'La energía renovable importa', 'energia renovável importa'),
                vitem('emisiones', 'emissões', 'Corta las emisiones ahora', 'corte as emissões agora'),
            ]),
            aula_lista('Por outro lado', "a pesar · sin embargo · mientras que · por tanto\nA pesar del coste, funciona.", [
                vitem('a pesar', 'apesar de', 'A pesar del coste funciona', 'apesar do custo funciona'),
                vitem('sin embargo', 'no entanto', 'Sin embargo discrepamos', 'no entanto discordamos'),
                vitem('mientras que', 'ao passo que', 'Yo camino mientras que tú conduces', 'eu caminho ao passo que você dirige'),
                vitem('por tanto', 'portanto', 'Por tanto esperamos', 'portanto esperamos'),
            ]),
        ]),
        uni_lista('Trabalho formal B2', 'Prazos, rascunho, feedback, partes interessadas.', 'B2', [
            aula_lista('O projeto', "plazo · borrador · comentarios · interesado\nEl borrador está listo para comentarios.", [
                vitem('plazo', 'prazo', 'El plazo es el viernes', 'o prazo é sexta'),
                vitem('borrador', 'rascunho', 'Este es el primer borrador', 'este é o primeiro rascunho'),
                vitem('comentarios', 'parecer', 'Envía tus comentarios', 'envie seu parecer'),
                vitem('interesado', 'parte interessada', 'Actualiza a las partes interesadas', 'atualize as partes interessadas'),
            ]),
            aula_lista('Soar natural', "cuidar · rendirse · seguir · funcionar\nNo te rindas ahora.", [
                vitem('cuidar', 'cuidar', 'Cuida del equipo', 'cuide da equipe'),
                vitem('rendirse', 'desistir', 'No te rindas', 'não desista'),
                vitem('seguir', 'acompanhar', 'Sigue las noticias', 'acompanhe as notícias'),
                vitem('funcionar', 'dar certo', 'Va a funcionar', 'vai dar certo'),
            ]),
        ]),
        uni_lista('Discurso indireto', 'Ela disse que… — reportar com precisão.', 'B2', [
            aula_lista('Ela disse', "dijo · me dijo · preguntó · afirmó\nDijo que estaba cansada.", [
                vitem('dijo', 'disse', 'Dijo que estaba cansada', 'ela disse que estava cansada'),
                vitem('me dijo', 'me disse', 'Me dijo que esperara', 'ele me disse para esperar'),
                vitem('preguntó', 'perguntou', 'Preguntaron si estaba abierto', 'perguntaram se estava aberto'),
                vitem('afirmó', 'alegou', 'Afirmó que había pagado', 'ele alegou que tinha pago'),
            ]),
            aula_lista('No dia seguinte', "al día siguiente · el día anterior · iría · había\nDijo que llegaría al día siguiente.", [
                vitem('al día siguiente', 'no dia seguinte', 'Llegaría al día siguiente', 'chegaria no dia seguinte'),
                vitem('el día anterior', 'no dia anterior', 'Habíamos salido el día anterior', 'tínhamos saído no dia anterior'),
                vitem('iría', 'iria', 'Dijo que iría', 'ela disse que iria'),
                vitem('había', 'tinha', 'Dijo que había pagado', 'disse que tinha pago'),
            ]),
        ]),
    ];
}

function volume_es_c(): array
{
    return [
        uni_lista('C1: sociedade e evidência', 'Vocabulário abstrato de economia e política.', 'C1', [
            aula_lista('Termos', "desigualdad · política · evidencia · crecimiento\nLa evidencia respalda esta política.", [
                vitem('desigualdad', 'desigualdade', 'La desigualdad crece', 'a desigualdade está aumentando'),
                vitem('política', 'política pública', 'Esta política es nueva', 'esta política é nova'),
                vitem('evidencia', 'evidência', 'La evidencia es clara', 'a evidência é clara'),
                vitem('crecimiento', 'crescimento', 'El crecimiento sigue lento', 'o crescimento segue lento'),
            ]),
            aula_lista('Coesão', "además · en cambio · en conjunto · esto sugiere\nEn conjunto, la reforma es sólida.", [
                vitem('además', 'além disso', 'Además bajan los costes', 'além disso os custos caem'),
                vitem('en cambio', 'em contraste', 'En cambio el interior se atrasó', 'em contraste o interior ficou para trás'),
                vitem('en conjunto', 'no saldo', 'En conjunto estamos de acuerdo', 'no saldo concordamos'),
                vitem('esto sugiere', 'isto sugere', 'Esto sugiere un retraso', 'isto sugere um atraso'),
            ]),
        ]),
        uni_lista('C1: entre linhas', 'Ironia, metáfora e o que não está dito.', 'C1', [
            aula_lista('Ironia', "irónico · sarcástico · eufemismo · con reservas\nToma esa promesa con reservas.", [
                vitem('irónico', 'irônico', 'Fue irónico', 'foi irônico'),
                vitem('sarcástico', 'sarcástico', 'La respuesta fue sarcástica', 'a resposta foi sarcástica'),
                vitem('eufemismo', 'atenuação', 'Eso es un eufemismo', 'isso é atenuar demais'),
                vitem('con reservas', 'com reservas', 'Tómalo con reservas', 'leve com reservas'),
            ]),
            aula_lista('Improviso', "de improviso · articulado · dominio · fluido\nHabló de improviso y sonó fluido.", [
                vitem('de improviso', 'de improviso', 'Habló de improviso', 'ele falou de improviso'),
                vitem('articulado', 'articulado', 'Ella es muy articulada', 'ela é muito articulada'),
                vitem('dominio', 'domínio', 'Tiene un dominio firme', 'ele tem um domínio firme'),
                vitem('fluido', 'fluente', 'La charla fue fluida', 'a fala foi fluente'),
            ]),
        ]),
        uni_lista('C2: jurídico e coloquial', 'Transitar entre o ultraformal e o bar.', 'C2', [
            aula_lista('O contrato', "de conformidad · por la presente · no obstante · las partes\nLas partes acuerdan por la presente.", [
                vitem('de conformidad', 'nos termos de', 'De conformidad con la cláusula dos', 'nos termos da cláusula dois'),
                vitem('por la presente', 'pelo presente', 'Por la presente confirmamos', 'pelo presente confirmamos'),
                vitem('no obstante', 'não obstante', 'No obstante el retraso', 'não obstante o atraso'),
                vitem('las partes', 'as partes', 'Las partes acuerdan', 'as partes concordam'),
            ]),
            aula_lista('No bar', "vale · o sea · sin problema · clavado\nVale. Sin problema.", [
                vitem('vale', 'ok / justo', 'Vale lo entiendo', 'ok, eu entendo'),
                vitem('o sea', 'ou seja', 'O sea no estoy de acuerdo', 'ou seja, eu discordo'),
                vitem('sin problema', 'sem problema', 'Sin problema', 'sem problema'),
                vitem('clavado', 'exato', 'Eso está clavado', 'isso é exato'),
            ]),
        ]),
        uni_lista('C2: fontes e estilo', 'Reconstruir argumentos e ler texto denso.', 'C2', [
            aula_lista('Duas fontes', "según · en conjunto · el autor sostiene · a su vez\nEn conjunto, las fuentes convergen.", [
                vitem('según', 'segundo', 'Según el informe', 'segundo o relatório'),
                vitem('en conjunto', 'em conjunto', 'En conjunto coinciden', 'em conjunto eles concordam'),
                vitem('el autor sostiene', 'o autor argumenta', 'El autor sostiene lo contrario', 'o autor argumenta o contrário'),
                vitem('a su vez', 'por sua vez', 'Esto a su vez nos retrasó', 'isso por sua vez nos atrasou'),
            ]),
            aula_lista('Precisão', "casi nativo · interferencia · colocación · dialecto\nCuidado con la colocación; evita la interferencia del portugués.", [
                vitem('casi nativo', 'quase nativo', 'El tono es casi nativo', 'o tom é quase nativo'),
                vitem('interferencia', 'interferência', 'Evita la interferencia de L1', 'evite interferência da L1'),
                vitem('colocación', 'colocação', 'Esta colocación es rara', 'esta colocação é estranha'),
                vitem('dialecto', 'dialeto', 'El dialecto es rápido', 'o dialeto é rápido'),
            ]),
        ]),
    ];
}

require_once __DIR__ . '/catalogo-volume-fritde.php';
