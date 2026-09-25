<?php

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

function unidades_a1_plus_por_codigo(string $codigo): array
{
    $mapa = [
        'en' => a1_plus_en(),
        'es' => a1_plus_es(),
        'fr' => a1_plus_fr(),
        'it' => a1_plus_it(),
        'de' => a1_plus_de(),
    ];

    return $mapa[$codigo] ?? ['palavras' => [], 'unidades' => []];
}

function a1_plus_en(): array
{
    return [
        'palavras' => [
            ['Alphabet', 'Alfabeto', 'Can you spell your name?', 'A1'],
            ['Age', 'Idade', 'I am twenty years old.', 'A1'],
            ['Month', 'Mês', 'My birthday is in March.', 'A1'],
            ['Teacher', 'Professor(a)', 'She is a teacher.', 'A1'],
            ['Form', 'Formulário', 'Please fill in this form.', 'A1'],
            ['Who', 'Quem', 'Who is this?', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Alfabeto',
                'descricao' => 'Letras e soletrar o nome — sobrevivência no balcão.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus(
                        'As letras',
                        'A B C, spell, letter',
                        "The alphabet: A B C D E … Z.\nHow do you spell that?\nMy name is Ana. A-N-A.\nA letter = uma letra. Spell = soletrar.",
                        [
                            m('Como pedir para soletrar?', ['How do you spell that?', 'How old are you?', 'Where is that?', 'What time is it?'], 'How do you spell that?', 'Spell = soletrar.'),
                            t('Traduza: How do you spell your name?', 'como se soletra o seu nome|como se escreve o seu nome'),
                            c('Complete: A-N-A. Three _____.', 'letters', 'Letter = letra.'),
                            ordena('Monte:', 'Can you spell that'),
                            vf('Spell significa cozinhar.', false, 'Spell = soletrar.'),
                            emp('Una.', [['alphabet', 'alfabeto'], ['letter', 'letra'], ['spell', 'soletrar'], ['name', 'nome']]),
                        ]
                    ),
                    aula_plus(
                        'No balcão',
                        'spell, email, please',
                        "A: Your name, please?\nB: Luca.\nA: Can you spell that?\nB: L-U-C-A.\nA: And your email?",
                        [
                            m('O que o atendente pede?', ['Can you spell that?', 'Can you cook that?', 'Can you buy that?'], 'Can you spell that?'),
                            t('Traduza: Your name, please', 'seu nome por favor|o seu nome, por favor'),
                            c('Complete: And your _____?', 'email'),
                            ordena('Monte:', 'Your name please'),
                            vf('Luca soletra L-U-C-A.', true),
                            t('Traduza: Can you spell that?', 'voce pode soletrar isso|você pode soletrar isso'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Dados pessoais',
                'descricao' => 'Idade, telefone e um formulário curto.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus(
                        'Quantos anos',
                        'How old, years old, I am',
                        "How old are you?\nI am 20 years old.\nShe is 30.\nI am not 15.",
                        [
                            m('Como perguntar a idade?', ['How old are you?', 'How are you?', 'Where are you?'], 'How old are you?', 'Old aqui é idade, não “velho” de insulto.'),
                            t('Traduza: I am 20 years old', 'eu tenho 20 anos|tenho vinte anos'),
                            c('Complete: How _____ are you?', 'old'),
                            ordena('Monte:', 'I am twenty years old'),
                            vf('"How old are you?" pergunta a idade.', true),
                            emp('Una.', [['old', 'idade / anos'], ['year', 'ano'], ['form', 'formulário'], ['phone', 'telefone']]),
                        ]
                    ),
                    aula_plus(
                        'Um formulário',
                        'first name, surname, nationality, fill in',
                        "Please fill in this form.\nFirst name · Surname / Last name\nNationality: Brazilian\nPhone number · Address\nSign here, please.",
                        [
                            m('Fill in this form é:', ['preencha este formulário', 'assine o café', 'abra a janela'], 'preencha este formulário'),
                            t('Traduza: First name', 'primeiro nome|nome'),
                            c('Complete: Sign _____, please.', 'here'),
                            t('Traduza: Nationality: Brazilian', 'nacionalidade brasileira|nacionalidade: brasileiro'),
                            vf('Surname é o sobrenome.', true),
                            ordena('Monte:', 'Please fill in this form'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Meses',
                'descricao' => 'Janeiro a dezembro e o aniversário.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus(
                        'Os 12 meses',
                        'January … December',
                        "January · February · March · April · May · June\nJuly · August · September · October · November · December\nMonths start with a capital letter in English.",
                        [
                            m('O primeiro mês é:', ['January', 'June', 'July', 'December'], 'January'),
                            t('Traduza: December', 'dezembro'),
                            c('Complete: July is month number _____. (número)', '7|seven'),
                            emp('Una.', [['March', 'março'], ['May', 'maio'], ['August', 'agosto'], ['October', 'outubro']]),
                            vf('Em inglês os meses têm maiúscula.', true),
                            t('Traduza: June', 'junho'),
                        ]
                    ),
                    aula_plus(
                        'Aniversário',
                        'birthday, in May, when',
                        "When is your birthday?\nMy birthday is in May.\nIt is on 12 May.\nin + month · on + day",
                        [
                            m('Como perguntar o aniversário?', ['When is your birthday?', 'How is your birthday?', 'Where is Monday?'], 'When is your birthday?'),
                            t('Traduza: My birthday is in May', 'meu aniversario e em maio|meu aniversário é em maio'),
                            c('Complete: My birthday is _____ June.', 'in'),
                            ordena('Monte:', 'When is your birthday'),
                            vf('"On 12 May" usa on com o dia.', true),
                            t('Traduza: It is on 12 May', 'e no dia 12 de maio|é dia 12 de maio'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Pronomes e artigos',
                'descricao' => 'I, you, he e a / an / the.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus(
                        'Eu, você, ele',
                        'I, you, he, she, we, they',
                        "I · you · he · she · it · we · they\nI am Ana. You are Luca. He is a student.\nWe are friends. They are from Spain.",
                        [
                            m('Qual pronome é “eu”?', ['I', 'he', 'we', 'they'], 'I'),
                            t('Traduza: We are friends', 'somos amigos|nós somos amigos'),
                            c('Complete: _____ is a student. (ele)', 'He'),
                            emp('Una.', [['I', 'eu'], ['you', 'você'], ['she', 'ela'], ['they', 'eles/elas']]),
                            vf('“You” serve para você e vocês em inglês básico.', true),
                            ordena('Monte:', 'They are from Spain'),
                        ]
                    ),
                    aula_plus(
                        'A, an, the',
                        'a teacher, an apple, the door',
                        "a + consoante: a book, a teacher\nan + vogal: an apple, an hour\nthe = o/a específico: Open the door.\nI am a student.",
                        [
                            m('Qual está correto?', ['a apple', 'an apple', 'an book'], 'an apple', 'Vogal: an.'),
                            t('Traduza: I am a student', 'eu sou estudante|sou um estudante|sou estudante'),
                            c('Complete: Open _____ door.', 'the'),
                            vf('An hour usa an porque o H não se ouve.', true),
                            emp('Una.', [['a book', 'um livro'], ['an apple', 'uma maçã'], ['the door', 'a porta'], ['a teacher', 'um(a) professor(a)']]),
                            t('Traduza: a teacher', 'um professor|uma professora|professor'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Quem, o quê, onde',
                'descricao' => 'Perguntas diretas de sobrevivência.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus(
                        'As perguntas',
                        'who, what, where, how much',
                        "Who is this? = Quem é?\nWhat is this? = O que é?\nWhere is the station? = Onde fica?\nHow much is it? = Quanto custa?",
                        [
                            m('Where pergunta:', ['lugar', 'nome', 'idade', 'cor'], 'lugar'),
                            t('Traduza: Who is this?', 'quem e este|quem é este|quem é essa pessoa'),
                            c('Complete: _____ is the station?', 'Where'),
                            emp('Una.', [['who', 'quem'], ['what', 'o que'], ['where', 'onde'], ['how much', 'quanto']]),
                            vf('How much is it? pede o preço.', true),
                            ordena('Monte:', 'Where is the bathroom'),
                        ]
                    ),
                    aula_plus(
                        'Pedir o essencial',
                        'where, how much, please',
                        "A: Where is the supermarket?\nB: It is on the left.\nA: How much is this apple?\nB: One euro, please.",
                        [
                            m('A pergunta do preço é:', ['How much is this apple?', 'Who is this apple?', 'Where is one euro?'], 'How much is this apple?'),
                            t('Traduza: It is on the left', 'fica a esquerda|é à esquerda|esta a esquerda'),
                            c('Complete: _____ euro, please.', 'One'),
                            ordena('Monte:', 'Where is the supermarket'),
                            vf('On the left = à esquerda.', true),
                            t('Traduza: How much is this?', 'quanto custa isto|quanto é isso'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Profissões',
                'descricao' => 'Trabalho básico: teacher, doctor, student.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus(
                        'O que você faz',
                        'teacher, doctor, student, I work',
                        "I am a student. / I am a teacher.\ndoctor · nurse · waiter / waitress · driver · cook\nWhat do you do? I work in a shop.",
                        [
                            m('What do you do? pergunta:', ['a profissão', 'a cor da camisa', 'a hora'], 'a profissão'),
                            t('Traduza: I am a teacher', 'eu sou professor|sou professora|eu sou professora'),
                            c('Complete: I work in a _____.', 'shop'),
                            emp('Una.', [['doctor', 'médico(a)'], ['nurse', 'enfermeiro(a)'], ['driver', 'motorista'], ['cook', 'cozinheiro(a)']]),
                            vf('Waiter atende no restaurante.', true),
                            ordena('Monte:', 'What do you do'),
                        ]
                    ),
                    aula_plus(
                        'Apresentar o trabalho',
                        'she is, he works, office',
                        "She is a doctor. He works in an office.\nI am not a waiter.\nAre you a student?",
                        [
                            t('Traduza: She is a doctor', 'ela e medica|ela é médica|ela é doutora'),
                            c('Complete: He works in an _____.', 'office'),
                            m('Pergunta correta:', ['Are you a student?', 'Do you a student?', 'Is you student?'], 'Are you a student?'),
                            vf('I am not a waiter é uma negativa.', true),
                            t('Traduza: He works in an office', 'ele trabalha num escritorio|ele trabalha em um escritório'),
                            ordena('Monte:', 'She is a doctor'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function a1_plus_es(): array
{
    return [
        'palavras' => [
            ['Alfabeto', 'Alfabeto', '¿Cómo se escribe tu nombre?', 'A1'],
            ['Edad', 'Idade', 'Tengo veinte años.', 'A1'],
            ['Mes', 'Mês', 'Mi cumpleaños es en marzo.', 'A1'],
            ['Profesor', 'Professor(a)', 'Ella es profesora.', 'A1'],
            ['Formulario', 'Formulário', 'Rellena este formulario.', 'A1'],
            ['Quién', 'Quem', '¿Quién es?', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'El alfabeto',
                'descricao' => 'Letras y deletrear el nombre.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus('Las letras', 'A B C, deletrear', "El alfabeto: A B C D E … Z.\n¿Cómo se escribe?\nMe llamo Ana. A-N-A.", [
                        m('¿Cómo pedir deletrear?', ['¿Cómo se escribe?', '¿Cuántos años tienes?', '¿Dónde está?'], '¿Cómo se escribe?'),
                        t('Traduza: ¿Cómo se escribe tu nombre?', 'como se escreve o seu nome|como se soletra o seu nome'),
                        c('Complete: A-N-A. Tres _____.', 'letras'),
                        t('Traduza: El alfabeto', 'o alfabeto'),
                        vf('Deletrear es soletrar.', true),
                        emp('Una.', [['letra', 'letra'], ['nombre', 'nome'], ['alfabeto', 'alfabeto'], ['formulario', 'formulário']]),
                    ]),
                    aula_plus('En el mostrador', 'nombre, email', "A: ¿Su nombre, por favor?\nB: Luca.\nA: ¿Cómo se escribe?\nB: L-U-C-A.", [
                        m('El empleado pide:', ['¿Cómo se escribe?', '¿Cuánto cuesta Luca?'], '¿Cómo se escribe?'),
                        t('Traduza: ¿Su nombre, por favor?', 'o seu nome por favor|seu nome, por favor'),
                        c('Complete: ¿Y su _____?', 'email|correo'),
                        ordena('Monte:', 'Cómo se escribe'),
                        vf('Luca deletrea L-U-C-A.', true),
                        t('Traduza: ¿Cómo se escribe?', 'como se escreve|como se soletra'),
                    ]),
                ],
            ],
            [
                'titulo' => 'Datos personales',
                'descricao' => 'Edad y un formulario corto.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus('La edad', 'años, cuántos', "¿Cuántos años tienes?\nTengo 20 años.\nElla tiene 30.", [
                        m('La pregunta de edad es:', ['¿Cuántos años tienes?', '¿Cómo estás?', '¿De dónde eres?'], '¿Cuántos años tienes?'),
                        t('Traduza: Tengo 20 años', 'tenho 20 anos|eu tenho vinte anos'),
                        c('Complete: ¿Cuántos _____ tienes?', 'años'),
                        ordena('Monte:', 'Tengo veinte años'),
                        vf('Tengo 20 años indica edad.', true),
                        t('Traduza: ¿Cuántos años tienes?', 'quantos anos voce tem|quantos anos você tem'),
                    ]),
                    aula_plus('Un formulario', 'nombre, apellido, nacionalidad', "Rellena este formulario.\nNombre · Apellido\nNacionalidad: brasileña\nTeléfono · Dirección\nFirme aquí, por favor.", [
                        m('Rellena este formulario é:', ['preencha este formulário', 'abra a porta'], 'preencha este formulário'),
                        t('Traduza: Apellido', 'sobrenome'),
                        c('Complete: Firme _____, por favor.', 'aquí|aqui'),
                        t('Traduza: Nacionalidad brasileña', 'nacionalidade brasileira'),
                        vf('Dirección es o endereço.', true),
                        ordena('Monte:', 'Rellena este formulario'),
                    ]),
                ],
            ],
            [
                'titulo' => 'Los meses',
                'descricao' => 'Enero a diciembre.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus('12 meses', 'enero … diciembre', "enero · febrero · marzo · abril · mayo · junio\njulio · agosto · septiembre · octubre · noviembre · diciembre", [
                        m('El primer mes es:', ['enero', 'junio', 'julio'], 'enero'),
                        t('Traduza: diciembre', 'dezembro'),
                        c('Complete: julio es el mes _____.', '7|siete'),
                        emp('Una.', [['marzo', 'março'], ['mayo', 'maio'], ['agosto', 'agosto'], ['octubre', 'outubro']]),
                        t('Traduza: junio', 'junho'),
                        vf('Mayo es maio.', true),
                    ]),
                    aula_plus('El cumpleaños', 'cumpleaños, en mayo', "¿Cuándo es tu cumpleaños?\nMi cumpleaños es en mayo.\nen + mes", [
                        m('La pregunta es:', ['¿Cuándo es tu cumpleaños?', '¿Dónde es mayo?'], '¿Cuándo es tu cumpleaños?'),
                        t('Traduza: Mi cumpleaños es en mayo', 'meu aniversario e em maio|meu aniversário é em maio'),
                        c('Complete: Mi cumpleaños es _____ junio.', 'en'),
                        ordena('Monte:', 'Cuándo es tu cumpleaños'),
                        t('Traduza: ¿Cuándo es tu cumpleaños?', 'quando e o seu aniversario|quando é o seu aniversário'),
                        vf('En mayo = em maio.', true),
                    ]),
                ],
            ],
            [
                'titulo' => 'Pronombres y artículos',
                'descricao' => 'Yo, tú, él y el / un.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus('Yo, tú, él', 'yo, tú, él, nosotros', "yo · tú · él / ella · nosotros · ellos\nYo soy Ana. Tú eres Luca. Él es estudiante.", [
                        m('“Yo” es:', ['eu', 'você', 'eles'], 'eu'),
                        t('Traduza: Nosotros somos amigos', 'nos somos amigos|nós somos amigos'),
                        c('Complete: _____ es estudiante. (ele)', 'Él|El'),
                        emp('Una.', [['yo', 'eu'], ['tú', 'você'], ['ella', 'ela'], ['ellos', 'eles']]),
                        ordena('Monte:', 'Tú eres Luca'),
                        vf('Tú es o pronome “você” informal.', true),
                    ]),
                    aula_plus('El, la, un, una', 'un libro, la puerta', "un / una = indefinido\nel / la / los / las = definido\nSoy estudiante. Abre la puerta.\nun libro · una manzana", [
                        m('Indefinido feminino:', ['una', 'el', 'los'], 'una'),
                        t('Traduza: Abre la puerta', 'abra a porta|abre a porta'),
                        c('Complete: Soy _____ estudiante.', 'un|una'),
                        emp('Una.', [['un libro', 'um livro'], ['una manzana', 'uma maçã'], ['la puerta', 'a porta'], ['el profesor', 'o professor']]),
                        t('Traduza: un libro', 'um livro'),
                        vf('La puerta usa artículo definido.', true),
                    ]),
                ],
            ],
            [
                'titulo' => 'Quién, qué, dónde',
                'descricao' => 'Preguntas directas.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus('Las preguntas', 'quién, qué, dónde, cuánto', "¿Quién es? ¿Qué es esto?\n¿Dónde está la estación?\n¿Cuánto cuesta?", [
                        m('¿Dónde pregunta:', ['lugar', 'nome', 'idade'], 'lugar'),
                        t('Traduza: ¿Quién es?', 'quem e|quem é'),
                        c('Complete: ¿_____ está la estación?', 'Dónde|Donde'),
                        emp('Una.', [['quién', 'quem'], ['qué', 'o que'], ['dónde', 'onde'], ['cuánto', 'quanto']]),
                        t('Traduza: ¿Cuánto cuesta?', 'quanto custa'),
                        vf('¿Cuánto cuesta? pide el precio.', true),
                    ]),
                    aula_plus('Pedir lo básico', 'dónde, cuánto', "A: ¿Dónde está el supermercado?\nB: A la izquierda.\nA: ¿Cuánto cuesta esta manzana?\nB: Un euro, por favor.", [
                        m('La pregunta del precio:', ['¿Cuánto cuesta esta manzana?', '¿Quién es la manzana?'], '¿Cuánto cuesta esta manzana?'),
                        t('Traduza: A la izquierda', 'a esquerda|à esquerda'),
                        c('Complete: _____ euro, por favor.', 'Un'),
                        ordena('Monte:', 'Dónde está el supermercado'),
                        t('Traduza: ¿Dónde está el supermercado?', 'onde fica o supermercado|onde está o supermercado'),
                        vf('Un euro, por favor es una respuesta de precio.', true),
                    ]),
                ],
            ],
            [
                'titulo' => 'Profesiones',
                'descricao' => 'Profesor, médico, estudiante.',
                'nivel' => 'A1',
                'aulas' => [
                    aula_plus('Qué haces', 'profesor, médico, trabajo', "Soy estudiante / profesor(a).\nmédico · enfermero · camarero · conductor · cocinero\n¿A qué te dedicas? Trabajo en una tienda.", [
                        m('¿A qué te dedicas? pregunta:', ['a profissão', 'a cor'], 'a profissão'),
                        t('Traduza: Soy profesora', 'sou professora|eu sou professora'),
                        c('Complete: Trabajo en una _____.', 'tienda'),
                        emp('Una.', [['médico', 'médico'], ['enfermero', 'enfermeiro'], ['conductor', 'motorista'], ['cocinero', 'cozinheiro']]),
                        t('Traduza: Trabajo en una tienda', 'trabalho numa loja|eu trabalho em uma loja'),
                        vf('Camarero atiende no restaurante.', true),
                    ]),
                    aula_plus('Presentar el trabajo', 'ella es, oficina', "Ella es médica. Él trabaja en una oficina.\nNo soy camarero.\n¿Eres estudiante?", [
                        t('Traduza: Ella es médica', 'ela e medica|ela é médica'),
                        c('Complete: Él trabaja en una _____.', 'oficina'),
                        m('Pregunta:', ['¿Eres estudiante?', '¿Haces estudiante?'], '¿Eres estudiante?'),
                        t('Traduza: Él trabaja en una oficina', 'ele trabalha num escritorio|ele trabalha em um escritório'),
                        ordena('Monte:', 'Ella es médica'),
                        vf('No soy camarero es una negativa.', true),
                    ]),
                ],
            ],
        ],
    ];
}
