<?php

function unidades_pro_por_codigo(string $codigo): array
{
    $mapa = [
        'en' => pro_en(),
        'es' => pro_es(),
        'fr' => pro_fr(),
        'it' => pro_it(),
        'de' => pro_de(),
    ];

    $base = $mapa[$codigo] ?? ['palavras' => [], 'unidades' => []];
    $escritorio = unidade_dialogo_escritorio($codigo);
    if ($escritorio) {
        $base['unidades'][] = $escritorio;
    }

    return $base;
}

function aula_dialogo(string $titulo, string $resumo, string $teoria, array $exercicios): array
{
    return [
        'titulo' => $titulo,
        'resumo' => $resumo,
        'teoria' => $teoria,
        'xp' => 14,
        'exercicios' => $exercicios,
    ];
}

function unidade_dialogo_escritorio(string $codigo): ?array
{
    $blocos = [
        'en' => [
            'titulo' => 'Diálogo: no escritório',
            'descricao' => 'Reunião, atraso e e-mail — situações reais de trabalho.',
            'nivel' => 'B1',
            'aulas' => [
                aula_dialogo(
                    'A reunião começa',
                    'late, meeting, email, client',
                    "Sam: Sorry I am late.\nMia: No problem. Shall we start the meeting?\nSam: Yes. I will send the email after this.\nMia: Can you call the client at 3?\nSam: Sure. See you later.",
                    [
                        m('O que Sam pede desculpas?', ['Sorry I am late.', 'Sorry I am early.', 'Sorry I am the client.'], 'Sorry I am late.', 'Abertura típica de reunião.'),
                        t('Traduza: Shall we start the meeting?', 'vamos comecar a reuniao|vamos começar a reunião'),
                        c('Complete: I will send the _____ after this.', 'email', 'Promessa depois da reunião.'),
                        ordena('Monte a fala da Mia:', 'Can you call the client at 3'),
                        vf('Mia aceita o atraso de Sam.', true, 'Ela diz No problem.'),
                        t('Traduza: I will send the email after this', 'vou enviar o email depois disto|vou enviar o e-mail depois disso'),
                        m('Sure neste diálogo significa:', ['claro / combinado', 'nunca', 'a conta', 'fechado'], 'claro / combinado'),
                        emp('Una.', [['late', 'atrasado'], ['meeting', 'reunião'], ['client', 'cliente'], ['email', 'e-mail']]),
                    ]
                ),
                aula_dialogo(
                    'Prazo e amanhã',
                    'deadline, after work, update, tomorrow',
                    "Sam: Are you free after work?\nMia: I have a deadline today.\nSam: We can talk tomorrow.\nMia: Perfect. I will send an update.",
                    [
                        t('Traduza: I have a deadline today', 'tenho um prazo hoje|eu tenho um prazo hoje'),
                        c('Complete: We can talk _____.', 'tomorrow', 'Quando o prazo impede o encontro.'),
                        m('O que Mia vai enviar?', ['an update', 'a pizza', 'a ticket', 'an umbrella'], 'an update', 'Atualização do trabalho.'),
                        ordena('Monte:', 'Are you free after work'),
                        vf('Mia está livre depois do trabalho hoje.', false, 'Ela tem um deadline.'),
                        t('Traduza: I will send an update', 'vou enviar uma atualizacao|vou enviar uma atualização'),
                        emp('Una.', [['deadline', 'prazo'], ['after work', 'depois do trabalho'], ['update', 'atualização'], ['tomorrow', 'amanhã']]),
                    ]
                ),
            ],
        ],
        'es' => [
            'titulo' => 'Diálogo: en la oficina',
            'descricao' => 'Reunión, retraso y correo — situaciones reales de trabajo.',
            'nivel' => 'B1',
            'aulas' => [
                aula_dialogo(
                    'Empieza la reunión',
                    'tarde, reunión, correo, cliente',
                    "Sam: Perdón por llegar tarde.\nMia: No pasa nada. ¿Empezamos la reunión?\nSam: Sí. Envío el correo después.\nMia: ¿Puedes llamar al cliente a las 3?\nSam: Claro. Hasta luego.",
                    [
                        m('Sam se disculpa por:', ['Perdón por llegar tarde.', 'Perdón por el café.', 'Perdón, no hay reunión.'], 'Perdón por llegar tarde.'),
                        t('Traduza: ¿Empezamos la reunión?', 'comecamos a reuniao|vamos começar a reunião'),
                        c('Complete: Envío el _____ después.', 'correo'),
                        t('Traduza: ¿Puedes llamar al cliente a las 3?', 'voce pode ligar para o cliente as 3|você pode ligar para o cliente às 3'),
                        vf('Mia acepta el retraso.', true),
                        emp('Una.', [['tarde', 'atrasado'], ['reunión', 'reunião'], ['correo', 'e-mail'], ['cliente', 'cliente']]),
                    ]
                ),
                aula_dialogo(
                    'El plazo',
                    'plazo, después del trabajo, mañana',
                    "Sam: ¿Estás libre después del trabajo?\nMia: Tengo un plazo hoy.\nSam: Podemos hablar mañana.\nMia: Perfecto. Enviaré una actualización.",
                    [
                        t('Traduza: Tengo un plazo hoy', 'tenho um prazo hoje'),
                        c('Complete: Podemos hablar _____.', 'mañana'),
                        m('Mia va a enviar:', ['una actualización', 'una pizza', 'un paraguas'], 'una actualización'),
                        vf('Mia está libre hoy después del trabajo.', false),
                        t('Traduza: Enviaré una actualización', 'vou enviar uma atualizacao|vou enviar uma atualização'),
                    ]
                ),
            ],
        ],
        'fr' => [
            'titulo' => 'Dialogue: au bureau',
            'descricao' => 'Réunion, retard et e-mail — situations réelles de travail.',
            'nivel' => 'B1',
            'aulas' => [
                aula_dialogo(
                    'La réunion commence',
                    'en retard, réunion, e-mail, client',
                    "Sam: Désolé, je suis en retard.\nMia: Pas de problème. On commence la réunion ?\nSam: Oui. J'envoie l'e-mail après.\nMia: Tu peux appeler le client à 15 h ?\nSam: Bien sûr. À plus tard.",
                    [
                        m('Sam s\'excuse :', ['Désolé, je suis en retard.', 'Désolé, je suis en avance.', 'Désolé, pas de client.'], 'Désolé, je suis en retard.'),
                        t('Traduza: On commence la réunion ?', 'comecamos a reuniao|vamos começar a reunião'),
                        c('Complete: J\'envoie l\'_____ après.', 'e-mail|email'),
                        t('Traduza: Tu peux appeler le client à 15 h ?', 'voce pode ligar para o cliente as 15|você pode ligar para o cliente às 15h'),
                        vf('Mia accepte le retard.', true),
                        emp('Una.', [['en retard', 'atrasado'], ['réunion', 'reunião'], ['client', 'cliente'], ['e-mail', 'e-mail']]),
                    ]
                ),
                aula_dialogo(
                    'La deadline',
                    'délai, après le travail, demain',
                    "Sam: Tu es libre après le travail ?\nMia: J'ai un délai aujourd'hui.\nSam: On peut parler demain.\nMia: Parfait. J'envoie une mise à jour.",
                    [
                        t('Traduza: J\'ai un délai aujourd\'hui', 'tenho um prazo hoje'),
                        c('Complete: On peut parler _____.', 'demain'),
                        m('Mia va envoyer:', ['une mise à jour', 'une pizza', 'un ticket'], 'une mise à jour'),
                        vf('Mia est libre après le travail aujourd\'hui.', false),
                        t('Traduza: J\'envoie une mise à jour', 'vou enviar uma atualizacao|vou enviar uma atualização'),
                    ]
                ),
            ],
        ],
        'it' => [
            'titulo' => 'Dialogo: in ufficio',
            'descricao' => 'Riunione, ritardo e e-mail — situazioni reali di lavoro.',
            'nivel' => 'B1',
            'aulas' => [
                aula_dialogo(
                    'Inizia la riunione',
                    'in ritardo, riunione, email, cliente',
                    "Sam: Scusa, sono in ritardo.\nMia: Nessun problema. Iniziamo la riunione?\nSam: Sì. Invio l'email dopo.\nMia: Puoi chiamare il cliente alle 15?\nSam: Certo. A più tardi.",
                    [
                        m('Sam si scusa per:', ['Scusa, sono in ritardo.', 'Scusa, sono in anticipo.', 'Scusa, niente cliente.'], 'Scusa, sono in ritardo.'),
                        t('Traduza: Iniziamo la riunione?', 'comecamos a reuniao|vamos começar a reunião'),
                        c('Complete: Invio l\'_____ dopo.', 'email'),
                        t('Traduza: Puoi chiamare il cliente alle 15?', 'voce pode ligar para o cliente as 15|você pode ligar para o cliente às 15'),
                        vf('Mia accetta il ritardo.', true),
                        emp('Una.', [['in ritardo', 'atrasado'], ['riunione', 'reunião'], ['cliente', 'cliente'], ['email', 'e-mail']]),
                    ]
                ),
                aula_dialogo(
                    'La scadenza',
                    'scadenza, dopo il lavoro, domani',
                    "Sam: Sei libero dopo il lavoro?\nMia: Ho una scadenza oggi.\nSam: Possiamo parlare domani.\nMia: Perfetto. Invio un aggiornamento.",
                    [
                        t('Traduza: Ho una scadenza oggi', 'tenho um prazo hoje'),
                        c('Complete: Possiamo parlare _____.', 'domani'),
                        m('Mia invierà:', ['un aggiornamento', 'una pizza', 'un ombrello'], 'un aggiornamento'),
                        vf('Mia è libera dopo il lavoro oggi.', false),
                        t('Traduza: Invio un aggiornamento', 'vou enviar uma atualizacao|vou enviar uma atualização'),
                    ]
                ),
            ],
        ],
        'de' => [
            'titulo' => 'Dialog: im Büro',
            'descricao' => 'Meeting, Verspätung und E-Mail — echte Arbeitssituationen.',
            'nivel' => 'B1',
            'aulas' => [
                aula_dialogo(
                    'Das Meeting beginnt',
                    'spät, Meeting, E-Mail, Kunde',
                    "Sam: Entschuldigung, ich bin spät.\nMia: Kein Problem. Sollen wir mit dem Meeting beginnen?\nSam: Ja. Ich schicke die E-Mail danach.\nMia: Kannst du den Kunden um 15 Uhr anrufen?\nSam: Klar. Bis später.",
                    [
                        m('Sam entschuldigt sich:', ['Entschuldigung, ich bin spät.', 'Entschuldigung, ich bin früh.', 'Entschuldigung, kein Kunde.'], 'Entschuldigung, ich bin spät.'),
                        t('Traduza: Sollen wir mit dem Meeting beginnen?', 'vamos comecar a reuniao|vamos começar a reunião'),
                        c('Complete: Ich schicke die _____ danach.', 'E-Mail|Email'),
                        t('Traduza: Kannst du den Kunden um 15 Uhr anrufen?', 'voce pode ligar para o cliente as 15|você pode ligar para o cliente às 15 Uhr'),
                        vf('Mia akzeptiert die Verspätung.', true),
                        emp('Una.', [['spät', 'atrasado'], ['Meeting', 'reunião'], ['Kunde', 'cliente'], ['E-Mail', 'e-mail']]),
                    ]
                ),
                aula_dialogo(
                    'Die Deadline',
                    'Frist, nach der Arbeit, morgen',
                    "Sam: Bist du nach der Arbeit frei?\nMia: Ich habe heute eine Frist.\nSam: Wir können morgen sprechen.\nMia: Perfekt. Ich schicke ein Update.",
                    [
                        t('Traduza: Ich habe heute eine Frist', 'tenho um prazo hoje'),
                        c('Complete: Wir können _____ sprechen.', 'morgen'),
                        m('Mia schickt:', ['ein Update', 'eine Pizza', 'ein Ticket'], 'ein Update'),
                        vf('Mia ist heute nach der Arbeit frei.', false),
                        t('Traduza: Ich schicke ein Update', 'vou enviar uma atualizacao|vou enviar uma atualização'),
                    ]
                ),
            ],
        ],
    ];

    return $blocos[$codigo] ?? null;
}

function pro_en(): array
{
    return [
        'palavras' => [
            ['Actually', 'Na verdade', 'Actually, I am busy tonight.', 'A2'],
            ['Already', 'Já', 'I already ate.', 'A2'],
            ['Yet', 'Ainda', 'Have you finished yet?', 'A2'],
            ['Together', 'Juntos', 'Shall we go together?', 'A1'],
            ['Later', 'Mais tarde', 'See you later.', 'A1'],
            ['Early', 'Cedo', 'I woke up early.', 'A1'],
            ['Enough', 'O suficiente', 'That is enough, thanks.', 'A2'],
            ['Maybe', 'Talvez', 'Maybe tomorrow.', 'A1'],
            ['Ready', 'Pronto', 'Are you ready?', 'A1'],
            ['Wrong', 'Errado', 'This is the wrong street.', 'A2'],
            ['Right', 'Certo / direita', 'You are right.', 'A2'],
            ['Helpful', 'Prestativo', 'The staff was helpful.', 'B1'],
            ['Polite', 'Educado', 'Please be polite.', 'A2'],
            ['Busy', 'Ocupado', 'I am busy this week.', 'A1'],
            ['Free', 'Livre / grátis', 'Are you free on Friday?', 'A1'],
            ['Meet', 'Encontrar', 'Let\'s meet at 6.', 'A1'],
            ['Wait', 'Esperar', 'Please wait a moment.', 'A1'],
            ['Bring', 'Trazer', 'Can you bring the keys?', 'A2'],
            ['Leave', 'Sair / deixar', 'I leave at eight.', 'A2'],
            ['Stay', 'Ficar', 'We can stay here.', 'A2'],
        ],
        'unidades' => [
            [
                'titulo' => 'Diálogo: um sábado',
                'descricao' => 'Duas pessoas combinam o dia — escuta, ordem e resposta.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Combinar um plano',
                        'free, meet, later, maybe',
                        "Ana: Are you free on Saturday?\nLeo: Maybe. What do you have in mind?\nAna: Let's meet at the café at 10.\nLeo: Perfect. See you later!",
                        [
                            m('Ouça e escolha: o que Ana pergunta?', ['Are you free on Saturday?', 'Are you tired on Saturday?', 'Where is Saturday?'], 'Are you free on Saturday?', 'Diálogo da teoria: Ana convida.'),
                            t('Traduza: Let\'s meet at the café at 10', 'vamos nos encontrar no cafe as 10|vamos nos encontrar no café às 10'),
                            c('Complete: See you _____.', 'later', 'Despedida informal do diálogo.'),
                            ordena('Monte a fala do Leo:', 'Maybe What do you have in mind'),
                            vf('Leo aceita o café das 10.', true, 'Ele diz Perfect.'),
                            emp('Una.', [['free', 'livre'], ['meet', 'encontrar'], ['later', 'mais tarde'], ['maybe', 'talvez']]),
                            m('Perfect neste diálogo significa:', ['combinado / ótimo', 'caro', 'longe', 'fechado'], 'combinado / ótimo'),
                            t('Traduza: Are you free on Saturday?', 'voce esta livre no sabado|você está livre no sábado'),
                        ]
                    ),
                    aula_dialogo(
                        'Mudança de plano',
                        'busy, wait, actually, stay',
                        "Ana: Actually, I am busy in the morning.\nLeo: No problem. We can meet later.\nAna: Can you wait until 4?\nLeo: Sure. We can stay at my place first.",
                        [
                            m('Ouça: Ana está ocupada quando?', ['in the morning', 'at night only', 'never'], 'in the morning', 'Actually introduz a correção.'),
                            t('Traduza: We can meet later', 'podemos nos encontrar mais tarde'),
                            c('Complete: Can you _____ until 4?', 'wait'),
                            ordena('Monte:', 'We can stay at my place first'),
                            vf('"Actually" corrige o plano anterior.', true),
                            t('Traduza: I am busy in the morning', 'estou ocupado de manha|estou ocupada de manhã'),
                            m('Sure aqui é:', ['claro / pode ser', 'nunca', 'obrigado', 'desculpa'], 'claro / pode ser'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Revisão da trilha',
                'descricao' => 'Recicla saudações, clima, café e planos — o que um curso profissional faz entre níveis.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Mistura A1',
                        'hello, thanks, weather, coffee',
                        "A: Hello! How are you today?\nB: Fine, thanks. It is sunny.\nA: A coffee, please.\nB: Sure. See you later.",
                        [
                            m('Saudação do diálogo:', ['Hello! How are you today?', 'Bye the weather', 'Coffee is Saturday'], 'Hello! How are you today?'),
                            t('Traduza: It is sunny', 'esta ensolarado|faz sol|está sol'),
                            c('Complete: A _____, please.', 'coffee'),
                            emp('Una.', [['Hello', 'Olá'], ['thanks', 'obrigado'], ['sunny', 'ensolarado'], ['coffee', 'café']]),
                            ordena('Monte:', 'See you later'),
                            vf('Fine, thanks é uma resposta comum a How are you.', true),
                            t('Traduza: How are you today?', 'como voce esta hoje|como você está hoje'),
                        ]
                    ),
                    aula_dialogo(
                        'Mistura A2',
                        'bill, appointment, problem, later',
                        "A: I need an appointment.\nB: There is a small problem with the time.\nA: We can meet later.\nB: The bill is included? No — that is another dialogue!",
                        [
                            t('Traduza: I need an appointment', 'preciso de uma consulta|preciso marcar consulta'),
                            c('Complete: There is a small _____.', 'problem'),
                            m('We can meet later recicla a unidade de planos.', ['verdade no método Lingo', 'é só inglês antigo', 'não aparece no curso'], 'verdade no método Lingo', 'Revisão mistura temas já vistos.'),
                            t('Traduza: We can meet later', 'podemos nos encontrar mais tarde'),
                            ordena('Monte:', 'I need an appointment'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function pro_es(): array
{
    return [
        'palavras' => [
            ['En realidad', 'Na verdade', 'En realidad, estoy ocupada.', 'A2'],
            ['Ya', 'Já', 'Ya comí.', 'A2'],
            ['Todavía', 'Ainda', '¿Todavía no terminaste?', 'A2'],
            ['Juntos', 'Juntos', '¿Vamos juntos?', 'A1'],
            ['Luego', 'Depois', 'Hasta luego.', 'A1'],
            ['Temprano', 'Cedo', 'Me desperté temprano.', 'A1'],
            ['Bastante', 'O suficiente', 'Es bastante, gracias.', 'A2'],
            ['Quizá', 'Talvez', 'Quizá mañana.', 'A1'],
            ['Listo', 'Pronto', '¿Estás listo?', 'A1'],
            ['Equivocado', 'Errado', 'Esta es la calle equivocada.', 'A2'],
            ['Ocupado', 'Ocupado', 'Estoy ocupado esta semana.', 'A1'],
            ['Libre', 'Livre', '¿Estás libre el viernes?', 'A1'],
            ['Quedar', 'Combinar / ficar', 'Quedamos a las 6.', 'A1'],
            ['Esperar', 'Esperar', 'Espera un momento.', 'A1'],
            ['Traer', 'Trazer', '¿Puedes traer las llaves?', 'A2'],
            ['Salir', 'Sair', 'Salgo a las ocho.', 'A2'],
            ['Quedarse', 'Ficar', 'Podemos quedarnos aquí.', 'A2'],
            ['Amable', 'Amável', 'El personal fue amable.', 'A2'],
            ['Educado', 'Educado', 'Sé educado, por favor.', 'A2'],
            ['Ayuda', 'Ajuda', 'Necesito ayuda.', 'A1'],
        ],
        'unidades' => [
            [
                'titulo' => 'Diálogo: un sábado',
                'descricao' => 'Quedar, cambiar el plan y escucharse.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Quedar',
                        'libre, quedar, luego, quizá',
                        "Ana: ¿Estás libre el sábado?\nLeo: Quizá. ¿Qué tienes en mente?\nAna: Quedamos en el café a las 10.\nLeo: Perfecto. ¡Hasta luego!",
                        [
                            m('O que Ana pergunta?', ['¿Estás libre el sábado?', '¿Estás cansado el sábado?', '¿Dónde está el sábado?'], '¿Estás libre el sábado?'),
                            t('Traduza: Quedamos en el café a las 10', 'ficamos no cafe as 10|a gente se encontra no café às 10'),
                            c('Complete: Hasta _____.', 'luego'),
                            vf('Leo aceita o café das 10.', true),
                            t('Traduza: ¿Estás libre el sábado?', 'voce esta livre no sabado|você está livre no sábado'),
                        ]
                    ),
                    aula_dialogo(
                        'Cambio de plan',
                        'ocupado, esperar, en realidad',
                        "Ana: En realidad, por la mañana estoy ocupada.\nLeo: No hay problema. Podemos quedar luego.\nAna: ¿Puedes esperar hasta las 4?\nLeo: Claro.",
                        [
                            t('Traduza: Podemos quedar luego', 'podemos nos encontrar depois|podemos ficar para depois'),
                            c('Complete: ¿Puedes _____ hasta las 4?', 'esperar'),
                            m('En realidad serve para:', ['corrigir o que se disse', 'pedir a conta', 'falar do clima só'], 'corrigir o que se disse'),
                            t('Traduza: Estoy ocupada por la mañana', 'estou ocupada de manha|estou ocupada de manhã'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Repaso',
                'descricao' => 'Saludos, tiempo y café de nuevo.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Mezcla A1',
                        'hola, gracias, sol, café',
                        "A: ¡Hola! ¿Cómo estás hoy?\nB: Bien, gracias. Hace sol.\nA: Un café, por favor.\nB: Claro. Hasta luego.",
                        [
                            t('Traduza: Hace sol', 'faz sol|esta ensolarado'),
                            c('Complete: Un _____, por favor.', 'cafe|café'),
                            emp('Una.', [['Hola', 'Olá'], ['gracias', 'obrigado'], ['sol', 'sol'], ['café', 'café']]),
                            t('Traduza: ¿Cómo estás hoy?', 'como voce esta hoje|como você está hoje'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function pro_fr(): array
{
    return [
        'palavras' => [
            ['En fait', 'Na verdade', 'En fait, je suis occupée.', 'A2'],
            ['Déjà', 'Já', 'J\'ai déjà mangé.', 'A2'],
            ['Encore', 'Ainda', 'Tu n\'as pas encore fini ?', 'A2'],
            ['Ensemble', 'Juntos', 'On y va ensemble ?', 'A1'],
            ['Plus tard', 'Mais tarde', 'À plus tard.', 'A1'],
            ['Tôt', 'Cedo', 'Je me suis levé tôt.', 'A1'],
            ['Assez', 'O suficiente', 'C\'est assez, merci.', 'A2'],
            ['Peut-être', 'Talvez', 'Peut-être demain.', 'A1'],
            ['Prêt', 'Pronto', 'Tu es prêt ?', 'A1'],
            ['Occupé', 'Ocupado', 'Je suis occupé cette semaine.', 'A1'],
            ['Libre', 'Livre', 'Tu es libre vendredi ?', 'A1'],
            ['Retrouver', 'Encontrar', 'On se retrouve à 18 h.', 'A1'],
            ['Attendre', 'Esperar', 'Attends un moment.', 'A1'],
            ['Apporter', 'Trazer', 'Tu peux apporter les clés ?', 'A2'],
            ['Partir', 'Sair', 'Je pars à huit heures.', 'A2'],
            ['Rester', 'Ficar', 'On peut rester ici.', 'A2'],
            ['Gentil', 'Gentil', 'Le personnel était gentil.', 'A2'],
            ['Poli', 'Educado', 'Sois poli, s\'il te plaît.', 'A2'],
            ['Aide', 'Ajuda', 'J\'ai besoin d\'aide.', 'A1'],
            ['Rendez-vous', 'Encontro / consulta', 'J\'ai un rendez-vous.', 'A2'],
        ],
        'unidades' => [
            [
                'titulo' => 'Dialogue : un samedi',
                'descricao' => 'Se retrouver et changer le plan.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Se retrouver',
                        'libre, retrouver, plus tard',
                        "Ana: Tu es libre samedi ?\nLéo: Peut-être. Tu as une idée ?\nAna: On se retrouve au café à 10 h.\nLéo: Parfait. À plus tard !",
                        [
                            m('O que Ana pergunta?', ['Tu es libre samedi ?', 'Tu es fatigué samedi ?', 'Où est samedi ?'], 'Tu es libre samedi ?'),
                            t('Traduza: On se retrouve au café à 10 h', 'a gente se encontra no cafe as 10|nos encontramos no café às 10'),
                            c('Complete: À _____ tard.', 'plus'),
                            t('Traduza: Tu es libre samedi ?', 'voce esta livre no sabado|você está livre no sábado'),
                        ]
                    ),
                    aula_dialogo(
                        'Changement',
                        'occupé, attendre, en fait',
                        "Ana: En fait, le matin je suis occupée.\nLéo: Pas de problème. On peut se retrouver plus tard.\nAna: Tu peux attendre jusqu'à 16 h ?\nLéo: Bien sûr.",
                        [
                            t('Traduza: On peut se retrouver plus tard', 'podemos nos encontrar mais tarde'),
                            c('Complete: Tu peux _____ jusqu\'à 16 h ?', 'attendre'),
                            m('En fait serve para:', ['corrigir o que se disse', 'pedir a conta', 'falar só do clima'], 'corrigir o que se disse'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Révision',
                'descricao' => 'Salutations, météo et café.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Mélange A1',
                        'bonjour, merci, soleil, café',
                        "A: Bonjour ! Comment ça va aujourd'hui ?\nB: Ça va, merci. Il fait soleil.\nA: Un café, s'il vous plaît.\nB: Bien sûr. À plus tard.",
                        [
                            t('Traduza: Il fait soleil', 'faz sol|esta ensolarado'),
                            c('Complete: Un _____, s\'il vous plaît.', 'cafe|café'),
                            t('Traduza: Comment ça va aujourd\'hui ?', 'como vai voce hoje|como você está hoje'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function pro_it(): array
{
    return [
        'palavras' => [
            ['In realtà', 'Na verdade', 'In realtà sono occupata.', 'A2'],
            ['Già', 'Já', 'Ho già mangiato.', 'A2'],
            ['Ancora', 'Ainda', 'Non hai ancora finito?', 'A2'],
            ['Insieme', 'Juntos', 'Andiamo insieme?', 'A1'],
            ['Più tardi', 'Mais tarde', 'A più tardi.', 'A1'],
            ['Presto', 'Cedo', 'Mi sono svegliato presto.', 'A1'],
            ['Abbastanza', 'O suficiente', 'È abbastanza, grazie.', 'A2'],
            ['Forse', 'Talvez', 'Forse domani.', 'A1'],
            ['Pronto', 'Pronto', 'Sei pronto?', 'A1'],
            ['Occupato', 'Ocupado', 'Questa settimana sono occupato.', 'A1'],
            ['Libero', 'Livre', 'Sei libero venerdì?', 'A1'],
            ['Trovarsi', 'Encontrar-se', 'Ci troviamo alle 6.', 'A1'],
            ['Aspettare', 'Esperar', 'Aspetta un momento.', 'A1'],
            ['Portare', 'Trazer', 'Puoi portare le chiavi?', 'A2'],
            ['Uscire', 'Sair', 'Esco alle otto.', 'A2'],
            ['Restare', 'Ficar', 'Possiamo restare qui.', 'A2'],
            ['Gentile', 'Gentil', 'Il personale è stato gentile.', 'A2'],
            ['Educato', 'Educado', 'Sii educato, per favore.', 'A2'],
            ['Aiuto', 'Ajuda', 'Ho bisogno di aiuto.', 'A1'],
            ['Appuntamento', 'Encontro / consulta', 'Ho un appuntamento.', 'A2'],
        ],
        'unidades' => [
            [
                'titulo' => 'Dialogo: un sabato',
                'descricao' => 'Trovarsi e cambiare piano.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Trovarsi',
                        'libero, trovarsi, più tardi',
                        "Ana: Sei libero sabato?\nLeo: Forse. Che hai in mente?\nAna: Ci troviamo al bar alle 10.\nLeo: Perfetto. A più tardi!",
                        [
                            m('O que Ana pergunta?', ['Sei libero sabato?', 'Sei stanco sabato?', 'Dov\'è sabato?'], 'Sei libero sabato?'),
                            t('Traduza: Ci troviamo al bar alle 10', 'nos encontramos no bar as 10|a gente se encontra no bar às 10'),
                            c('Complete: A più _____.', 'tardi'),
                            t('Traduza: Sei libero sabato?', 'voce esta livre no sabado|você está livre no sábado'),
                        ]
                    ),
                    aula_dialogo(
                        'Cambio di piani',
                        'occupato, aspettare, in realtà',
                        "Ana: In realtà, la mattina sono occupata.\nLeo: Nessun problema. Possiamo vederci più tardi.\nAna: Puoi aspettare fino alle 16?\nLeo: Certo.",
                        [
                            t('Traduza: Possiamo vederci più tardi', 'podemos nos ver mais tarde'),
                            c('Complete: Puoi _____ fino alle 16?', 'aspettare'),
                            m('In realtà serve para:', ['corrigir o que se disse', 'pedir a conta', 'falar só do clima'], 'corrigir o que se disse'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Ripasso',
                'descricao' => 'Saluti, tempo e caffè di nuovo.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Misto A1',
                        'ciao, grazie, sole, caffè',
                        "A: Ciao! Come stai oggi?\nB: Bene, grazie. C'è il sole.\nA: Un caffè, per favore.\nB: Certo. A più tardi.",
                        [
                            t('Traduza: C\'è il sole', 'faz sol|esta ensolarado'),
                            c('Complete: Un _____, per favore.', 'caffe|caffè'),
                            t('Traduza: Come stai oggi?', 'como voce esta hoje|como você está hoje'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function pro_de(): array
{
    return [
        'palavras' => [
            ['Eigentlich', 'Na verdade', 'Eigentlich bin ich beschäftigt.', 'A2'],
            ['Schon', 'Já', 'Ich habe schon gegessen.', 'A2'],
            ['Noch', 'Ainda', 'Bist du noch nicht fertig?', 'A2'],
            ['Zusammen', 'Juntos', 'Gehen wir zusammen?', 'A1'],
            ['Später', 'Mais tarde', 'Bis später.', 'A1'],
            ['Früh', 'Cedo', 'Ich bin früh aufgestanden.', 'A1'],
            ['Genug', 'O suficiente', 'Das ist genug, danke.', 'A2'],
            ['Vielleicht', 'Talvez', 'Vielleicht morgen.', 'A1'],
            ['Fertig', 'Pronto', 'Bist du fertig?', 'A1'],
            ['Beschäftigt', 'Ocupado', 'Ich bin diese Woche beschäftigt.', 'A1'],
            ['Frei', 'Livre', 'Bist du am Freitag frei?', 'A1'],
            ['Treffen', 'Encontrar', 'Wir treffen uns um 18 Uhr.', 'A1'],
            ['Warten', 'Esperar', 'Warte einen Moment.', 'A1'],
            ['Mitbringen', 'Trazer', 'Kannst du die Schlüssel mitbringen?', 'A2'],
            ['Gehen', 'Ir / sair', 'Ich gehe um acht.', 'A1'],
            ['Bleiben', 'Ficar', 'Wir können hier bleiben.', 'A2'],
            ['Nett', 'Gentil', 'Das Personal war nett.', 'A2'],
            ['Höflich', 'Educado', 'Sei bitte höflich.', 'A2'],
            ['Hilfe', 'Ajuda', 'Ich brauche Hilfe.', 'A1'],
            ['Termin', 'Consulta / horário', 'Ich habe einen Termin.', 'A2'],
        ],
        'unidades' => [
            [
                'titulo' => 'Dialog: ein Samstag',
                'descricao' => 'Sich treffen und den Plan ändern.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Treffen',
                        'frei, treffen, später',
                        "Ana: Bist du am Samstag frei?\nLeo: Vielleicht. Was schwebt dir vor?\nAna: Wir treffen uns um 10 im Café.\nLeo: Perfekt. Bis später!",
                        [
                            m('O que Ana pergunta?', ['Bist du am Samstag frei?', 'Bist du am Samstag müde?', 'Wo ist Samstag?'], 'Bist du am Samstag frei?'),
                            t('Traduza: Wir treffen uns um 10 im Café', 'nos encontramos as 10 no cafe|a gente se encontra às 10 no café'),
                            c('Complete: Bis _____.', 'spater|später'),
                            t('Traduza: Bist du am Samstag frei?', 'voce esta livre no sabado|você está livre no sábado'),
                        ]
                    ),
                    aula_dialogo(
                        'Planänderung',
                        'beschäftigt, warten, eigentlich',
                        "Ana: Eigentlich bin ich am Morgen beschäftigt.\nLeo: Kein Problem. Wir können uns später treffen.\nAna: Kannst du bis 16 Uhr warten?\nLeo: Klar.",
                        [
                            t('Traduza: Wir können uns später treffen', 'podemos nos encontrar mais tarde'),
                            c('Complete: Kannst du bis 16 Uhr _____?', 'warten'),
                            m('Eigentlich serve para:', ['corrigir o que se disse', 'pedir a conta', 'falar só do clima'], 'corrigir o que se disse'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'Wiederholung',
                'descricao' => 'Begrüßung, Wetter und Kaffee noch einmal.',
                'nivel' => 'A2',
                'aulas' => [
                    aula_dialogo(
                        'Mischung A1',
                        'Hallo, danke, Sonne, Kaffee',
                        "A: Hallo! Wie geht es dir heute?\nB: Gut, danke. Es ist sonnig.\nA: Einen Kaffee, bitte.\nB: Klar. Bis später.",
                        [
                            t('Traduza: Es ist sonnig', 'esta ensolarado|faz sol'),
                            c('Complete: Einen _____, bitte.', 'Kaffee|Kaffee'),
                            t('Traduza: Wie geht es dir heute?', 'como voce esta hoje|como você está hoje'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}
