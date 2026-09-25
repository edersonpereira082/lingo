<?php

function unidades_c_por_codigo(string $codigo): array
{
    $mapa = [
        'en' => c_en(),
        'es' => c_es(),
        'fr' => c_fr(),
        'it' => c_it(),
        'de' => c_de(),
    ];

    return $mapa[$codigo] ?? ['palavras' => [], 'unidades' => []];
}

function c_en(): array
{
    return [
        'palavras' => [
            ['Outline', 'Esboçar / apresentar', 'I would like to outline the main findings.', 'C1'],
            ['Nevertheless', 'Ainda assim', 'The budget is tight. Nevertheless, we should proceed.', 'C1'],
            ['Implication', 'Implicação', 'What are the implications of this decision?', 'C1'],
            ['Nuance', 'Nuance / matiz', 'The nuance of that remark was easy to miss.', 'C2'],
            ['Understatement', 'Eufemismo / atenuação', 'Calling it a setback is an understatement.', 'C2'],
            ['Register', 'Registro (formal/informal)', 'Shift the register for a board meeting.', 'C2'],
        ],
        'unidades' => [
            [
                'titulo' => 'C1: relatório e reunião',
                'descricao' => 'Fala fluente em contexto acadêmico e profissional.',
                'nivel' => 'C1',
                'aulas' => [
                    aula_dialogo(
                        'Apresentar achados',
                        'outline, findings, nevertheless, implications',
                        "Alex: I would like to outline the main findings before we open the floor.\nKim: The sample is limited. Nevertheless, the trend is consistent.\nAlex: Exactly. The implication is that we should revise the timeline.\nKim: Agreed. I can circulate a briefing this afternoon.",
                        [
                            m('Como Alex abre a reunião?', ['I would like to outline the main findings before we open the floor.', 'I would like a coffee before we start.', 'Let us skip the findings.'], 'I would like to outline the main findings before we open the floor.', 'C1 usa aberturas profissionais, não frases de turismo.'),
                            t('Traduza: The implication is that we should revise the timeline', 'a implicacao e que devemos revisar o prazo|a implicação é que devemos revisar o prazo'),
                            c('Complete: _____, the trend is consistent.', 'Nevertheless', 'Conector de contraste do diálogo.'),
                            ordena('Monte:', 'I can circulate a briefing this afternoon'),
                            vf('Kim acha a amostra perfeita e ilimitada.', false, 'Ela diz que a amostra é limitada.'),
                            emp('Una.', [['outline', 'apresentar em linhas gerais'], ['findings', 'achados'], ['nevertheless', 'ainda assim'], ['implication', 'implicação']]),
                            t('Traduza: I would like to outline the main findings', 'eu gostaria de apresentar os principais achados|gostaria de esboçar os principais resultados'),
                        ]
                    ),
                    aula_dialogo(
                        'Texto técnico',
                        'although, provided that, substantial, briefing',
                        "Alex: Although the first draft is solid, the legal notes need a substantial rewrite.\nKim: We can approve it provided that the figures are double-checked.\nAlex: I will flag the risky clauses in the briefing.\nKim: Perfect. Then we are ready for the board.",
                        [
                            t('Traduza: Although the first draft is solid', 'embora o primeiro rascunho seja solido|embora o primeiro rascunho seja sólido'),
                            c('Complete: We can approve it _____ that the figures are double-checked.', 'provided', 'Condição formal: provided that.'),
                            m('Substantial rewrite significa:', ['reescrita considerável', 'uma vírgula a menos', 'apagar o arquivo', 'traduzir para o português'], 'reescrita considerável'),
                            ordena('Monte:', 'I will flag the risky clauses in the briefing'),
                            vf('"Provided that" introduz uma condição.', true),
                            t('Traduza: Then we are ready for the board', 'entao estamos prontos para o conselho|então estamos prontos para a diretoria'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'C2: nuance e registro',
                'descricao' => 'Precisão, ironia leve e troca de registro formal/informal.',
                'nivel' => 'C2',
                'aulas' => [
                    aula_dialogo(
                        'Matizes',
                        'understatement, nuance, I take your point, however',
                        "Alex: Calling this a minor delay is an understatement.\nKim: I take your point. However, the nuance of the clause still protects us.\nAlex: Quite. I would rather be precise than optimistic.\nKim: Then let us say the exposure is material, not catastrophic.",
                        [
                            m('Understatement neste diálogo é:', ['atenuar demais o problema', 'gritar com o cliente', 'pedir a conta', 'um prazo curto'], 'atenuar demais o problema', 'C2 percebe o que a palavra faz, não só a tradução.'),
                            t('Traduza: I take your point. However, the nuance still protects us', 'entendo seu ponto. porem a nuance ainda nos protege|concordo com seu ponto. contudo o matiz ainda nos protege'),
                            c('Complete: I would rather be _____ than optimistic.', 'precise'),
                            vf('Kim trata o risco como catastrófico.', false, 'Ela diz material, not catastrophic.'),
                            emp('Una.', [['understatement', 'atenuação'], ['nuance', 'matiz'], ['precise', 'preciso'], ['material', 'relevante / material']]),
                            t('Traduza: Let us say the exposure is material', 'digamos que a exposicao e relevante|digamos que a exposição é material'),
                        ]
                    ),
                    aula_dialogo(
                        'Trocar o registro',
                        'register, board, informal, strike the right tone',
                        "Alex: That joke works with the team. It is the wrong register for the board.\nKim: Fair. I will strike a more measured tone in the email.\nAlex: Thank you. Fluency here is knowing what not to say.\nKim: Precisely. I will keep the warmth without the slang.",
                        [
                            t('Traduza: It is the wrong register for the board', 'e o registro errado para a diretoria|é o registro errado para o conselho'),
                            c('Complete: I will strike a more _____ tone in the email.', 'measured'),
                            m('Knowing what not to say, neste nível, é:', ['precisão de falante proficiente', 'esquecer o vocabulário', 'falar só A1', 'evitar reuniões'], 'precisão de falante proficiente'),
                            vf('Kim vai manter o gíria no e-mail da diretoria.', false),
                            ordena('Monte:', 'I will keep the warmth without the slang'),
                            t('Traduza: Fluency here is knowing what not to say', 'fluencia aqui e saber o que nao dizer|fluência aqui é saber o que não dizer'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function c_es(): array
{
    return [
        'palavras' => [
            ['Esbozar', 'Esboçar / apresentar', 'Me gustaría esbozar los hallazgos.', 'C1'],
            ['No obstante', 'Ainda assim', 'El presupuesto es justo. No obstante, sigamos.', 'C1'],
            ['Implicación', 'Implicação', '¿Cuáles son las implicaciones?', 'C1'],
            ['Matiz', 'Nuance', 'El matiz de esa frase se pasa por alto.', 'C2'],
            ['Eufemismo', 'Eufemismo', 'Llamarlo retraso es un eufemismo.', 'C2'],
            ['Registro', 'Registro', 'Cambia el registro para el consejo.', 'C2'],
        ],
        'unidades' => [
            [
                'titulo' => 'C1: informe y reunión',
                'descricao' => 'Habla fluida en contexto profesional.',
                'nivel' => 'C1',
                'aulas' => [
                    aula_dialogo(
                        'Presentar hallazgos',
                        'esbozar, hallazgos, no obstante, implicación',
                        "Alex: Me gustaría esbozar los hallazgos principales antes del debate.\nKim: La muestra es limitada. No obstante, la tendencia es clara.\nAlex: Exacto. La implicación es revisar el calendario.\nKim: De acuerdo. Circulo un informe esta tarde.",
                        [
                            m('¿Cómo abre Alex?', ['Me gustaría esbozar los hallazgos principales antes del debate.', 'Quiero un café.', 'Saltamos los hallazgos.'], 'Me gustaría esbozar los hallazgos principales antes del debate.'),
                            t('Traduza: La implicación es revisar el calendario', 'a implicacao e revisar o calendario|a implicação é revisar o calendário'),
                            c('Complete: _____, la tendencia es clara.', 'No obstante'),
                            vf('Kim dice que la muestra es ilimitada.', false),
                            t('Traduza: Circulo un informe esta tarde', 'circulo um informe esta tarde|envio um relatório esta tarde'),
                        ]
                    ),
                    aula_dialogo(
                        'Texto técnico',
                        'aunque, siempre que, sustancial',
                        "Alex: Aunque el borrador es sólido, las notas legales necesitan una reescritura sustancial.\nKim: Podemos aprobarlo siempre que se verifiquen las cifras.\nAlex: Marcaré las cláusulas de riesgo.\nKim: Perfecto. Entonces estamos listos para el consejo.",
                        [
                            t('Traduza: Aunque el borrador es sólido', 'embora o rascunho seja solido|embora o rascunho seja sólido'),
                            c('Complete: Podemos aprobarlo siempre _____ se verifiquen las cifras.', 'que'),
                            m('Reescritura sustancial é:', ['reescrita considerável', 'apagar o arquivo', 'uma vírgula'], 'reescrita considerável'),
                            t('Traduza: Estamos listos para el consejo', 'estamos prontos para o conselho|estamos prontos para a diretoria'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'C2: matiz y registro',
                'descricao' => 'Precisión y cambio de registro.',
                'nivel' => 'C2',
                'aulas' => [
                    aula_dialogo(
                        'Matices',
                        'eufemismo, matiz, no obstante',
                        "Alex: Llamar a esto un retraso menor es un eufemismo.\nKim: Te entiendo. No obstante, el matiz de la cláusula nos protege.\nAlex: Prefiero ser preciso que optimista.\nKim: Digamos que el riesgo es material, no catastrófico.",
                        [
                            m('Eufemismo aquí significa:', ['suavizar demais o problema', 'pedir a conta', 'um prazo'], 'suavizar demais o problema'),
                            t('Traduza: Prefiero ser preciso que optimista', 'prefiro ser preciso a otimista|prefiro ser preciso do que otimista'),
                            c('Complete: El riesgo es _____, no catastrófico.', 'material'),
                            vf('Kim llama al riesgo catastrófico.', false),
                            t('Traduza: El matiz de la cláusula nos protege', 'o matiz da clausula nos protege|o matiz da cláusula nos protege'),
                        ]
                    ),
                    aula_dialogo(
                        'Cambiar el registro',
                        'registro, consejo, tono',
                        "Alex: Esa broma vale con el equipo. Es el registro equivocado para el consejo.\nKim: De acuerdo. Usaré un tono más mesurado en el correo.\nAlex: La fluidez es saber qué no decir.\nKim: Exacto. Cariño, sin jerga.",
                        [
                            t('Traduza: Es el registro equivocado para el consejo', 'e o registro errado para o conselho|é o registro errado para a diretoria'),
                            c('Complete: Usaré un tono más _____.', 'mesurado'),
                            m('Saber qué no decir é marca de:', ['falante proficiente', 'nível A1', 'esquecer palavras'], 'falante proficiente'),
                            t('Traduza: La fluidez es saber qué no decir', 'a fluencia e saber o que nao dizer|a fluência é saber o que não dizer'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function c_fr(): array
{
    return [
        'palavras' => [
            ['Présenter', 'Apresentar em linhas gerais', 'Je voudrais présenter les résultats.', 'C1'],
            ['Néanmoins', 'Ainda assim', 'Le budget est serré. Néanmoins, avançons.', 'C1'],
            ['Implication', 'Implicação', 'Quelles sont les implications ?', 'C1'],
            ['Nuance', 'Nuance', 'La nuance de cette phrase échappe.', 'C2'],
            ['Litote', 'Atenuação', 'Parler d\'un retard est une litote.', 'C2'],
            ['Registre', 'Registro', 'Change de registre pour le conseil.', 'C2'],
        ],
        'unidades' => [
            [
                'titulo' => 'C1: rapport et réunion',
                'descricao' => 'Aisance à l\'oral professionnel.',
                'nivel' => 'C1',
                'aulas' => [
                    aula_dialogo(
                        'Présenter les résultats',
                        'présenter, résultats, néanmoins, implication',
                        "Alex: Je voudrais présenter les principaux résultats avant le débat.\nKim: L'échantillon est limité. Néanmoins, la tendance est nette.\nAlex: Exactement. L'implication, c'est de revoir le calendrier.\nKim: D'accord. Je fais circuler une note cet après-midi.",
                        [
                            m('Alex ouvre comment ?', ['Je voudrais présenter les principaux résultats avant le débat.', 'Je voudrais un café.', 'Sautons les résultats.'], 'Je voudrais présenter les principaux résultats avant le débat.'),
                            t('Traduza: L\'implication, c\'est de revoir le calendrier', 'a implicacao e rever o calendario|a implicação é rever o calendário'),
                            c('Complete: _____, la tendance est nette.', 'Néanmoins'),
                            t('Traduza: Je fais circuler une note cet après-midi', 'faço circular uma nota esta tarde|envio um briefing esta tarde'),
                        ]
                    ),
                    aula_dialogo(
                        'Texte technique',
                        'bien que, à condition que, substantielle',
                        "Alex: Bien que le brouillon soit solide, les notes juridiques demandent une réécriture substantielle.\nKim: Nous pouvons l'approuver à condition que les chiffres soient vérifiés.\nAlex: Je signalerai les clauses risquées.\nKim: Parfait. Nous sommes prêts pour le conseil.",
                        [
                            t('Traduza: Bien que le brouillon soit solide', 'embora o rascunho seja solido|embora o rascunho seja sólido'),
                            c('Complete: à _____ que les chiffres soient vérifiés.', 'condition'),
                            m('Réécriture substantielle é:', ['reescrita considerável', 'apagar o ficheiro', 'uma vírgula'], 'reescrita considerável'),
                            t('Traduza: Nous sommes prêts pour le conseil', 'estamos prontos para o conselho'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'C2: nuance et registre',
                'descricao' => 'Précision et changement de registre.',
                'nivel' => 'C2',
                'aulas' => [
                    aula_dialogo(
                        'Nuances',
                        'litote, nuance, toutefois',
                        "Alex: Parler d'un petit retard est une litote.\nKim: Je vois. Toutefois, la nuance de la clause nous protège.\nAlex: Je préfère être précis qu'optimiste.\nKim: Disons que le risque est matériel, pas catastrophique.",
                        [
                            m('Litote ici veut dire :', ['minimizar demais o problema', 'pedir a conta', 'um prazo'], 'minimizar demais o problema'),
                            t('Traduza: Je préfère être précis qu\'optimiste', 'prefiro ser preciso a otimista|prefiro ser preciso do que otimista'),
                            c('Complete: Le risque est _____, pas catastrophique.', 'matériel|materiel'),
                            t('Traduza: La nuance de la clause nous protège', 'a nuance da clausula nos protege|o matiz da cláusula nos protege'),
                        ]
                    ),
                    aula_dialogo(
                        'Changer de registre',
                        'registre, conseil, ton',
                        "Alex: Cette blague passe avec l'équipe. C'est le mauvais registre pour le conseil.\nKim: Entendu. J'adopterai un ton plus mesuré dans le mail.\nAlex: La fluidité, c'est savoir ce qu'il ne faut pas dire.\nKim: Exactement. De la chaleur, sans argot.",
                        [
                            t('Traduza: C\'est le mauvais registre pour le conseil', 'e o registro errado para o conselho|é o registro errado para a diretoria'),
                            c('Complete: un ton plus _____.', 'mesuré|mesure'),
                            m('Savoir ce qu\'il ne faut pas dire marque :', ['o falante proficiente', 'o nível A1', 'esquecer palavras'], 'o falante proficiente'),
                            t('Traduza: La fluidité, c\'est savoir ce qu\'il ne faut pas dire', 'a fluencia e saber o que nao dizer|a fluência é saber o que não dizer'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function c_it(): array
{
    return [
        'palavras' => [
            ['Delineare', 'Esboçar / apresentar', 'Vorrei delineare i risultati.', 'C1'],
            ['Tuttavia', 'Ainda assim', 'Il budget è stretto. Tuttavia, procediamo.', 'C1'],
            ['Implicazione', 'Implicação', 'Quali sono le implicazioni?', 'C1'],
            ['Sfumatura', 'Nuance', 'La sfumatura di quella frase sfugge.', 'C2'],
            ['Eufemismo', 'Eufemismo', 'Chiamarlo ritardo è un eufemismo.', 'C2'],
            ['Registro', 'Registro', 'Cambia registro per il cda.', 'C2'],
        ],
        'unidades' => [
            [
                'titulo' => 'C1: relazione e riunione',
                'descricao' => 'Parlato fluente in ambito professionale.',
                'nivel' => 'C1',
                'aulas' => [
                    aula_dialogo(
                        'Presentare i risultati',
                        'delineare, risultati, tuttavia, implicazione',
                        "Alex: Vorrei delineare i risultati principali prima del dibattito.\nKim: Il campione è limitato. Tuttavia, la tendenza è chiara.\nAlex: Esatto. L'implicazione è rivedere il calendario.\nKim: D'accordo. Faccio circolare una nota questo pomeriggio.",
                        [
                            m('Come apre Alex?', ['Vorrei delineare i risultati principali prima del dibattito.', 'Vorrei un caffè.', 'Saltiamo i risultati.'], 'Vorrei delineare i risultati principali prima del dibattito.'),
                            t('Traduza: L\'implicazione è rivedere il calendario', 'a implicacao e rever o calendario|a implicação é rever o calendário'),
                            c('Complete: _____, la tendenza è chiara.', 'Tuttavia'),
                            t('Traduza: Faccio circolare una nota questo pomeriggio', 'faço circular uma nota esta tarde'),
                        ]
                    ),
                    aula_dialogo(
                        'Testo tecnico',
                        'sebbene, purché, sostanziale',
                        "Alex: Sebbene la bozza sia solida, le note legali richiedono una riscrittura sostanziale.\nKim: Possiamo approvarla purché i dati siano verificati.\nAlex: Segnalerò le clausole rischiose.\nKim: Perfetto. Siamo pronti per il cda.",
                        [
                            t('Traduza: Sebbene la bozza sia solida', 'embora o rascunho seja solido|embora o rascunho seja sólido'),
                            c('Complete: purché i dati siano _____.', 'verificati'),
                            m('Riscrittura sostanziale é:', ['reescrita considerável', 'apagar o file', 'uma vírgula'], 'reescrita considerável'),
                            t('Traduza: Siamo pronti per il cda', 'estamos prontos para o conselho'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'C2: sfumatura e registro',
                'descricao' => 'Precisione e cambio di registro.',
                'nivel' => 'C2',
                'aulas' => [
                    aula_dialogo(
                        'Sfumature',
                        'eufemismo, sfumatura, tuttavia',
                        "Alex: Chiamare questo un piccolo ritardo è un eufemismo.\nKim: Ti seguo. Tuttavia la sfumatura della clausola ci protegge.\nAlex: Preferisco essere preciso che ottimista.\nKim: Diciamo che il rischio è materiale, non catastrofico.",
                        [
                            m('Eufemismo qui significa:', ['suavizar demais o problema', 'pedir a conta', 'um prazo'], 'suavizar demais o problema'),
                            t('Traduza: Preferisco essere preciso che ottimista', 'prefiro ser preciso a otimista|prefiro ser preciso do que otimista'),
                            c('Complete: Il rischio è _____, non catastrofico.', 'materiale'),
                            t('Traduza: La sfumatura della clausola ci protegge', 'a nuance da clausula nos protege|o matiz da cláusula nos protege'),
                        ]
                    ),
                    aula_dialogo(
                        'Cambiare registro',
                        'registro, cda, tono',
                        "Alex: Quella battuta va bene con la squadra. È il registro sbagliato per il cda.\nKim: Giusto. Userò un tono più misurato nella mail.\nAlex: La fluenza è sapere cosa non dire.\nKim: Esatto. Calore, senza gergo.",
                        [
                            t('Traduza: È il registro sbagliato per il cda', 'e o registro errado para o conselho|é o registro errado para a diretoria'),
                            c('Complete: un tono più _____.', 'misurato'),
                            m('Sapere cosa non dire è segno di:', ['falante proficiente', 'nível A1', 'esquecer parole'], 'falante proficiente'),
                            t('Traduza: La fluenza è sapere cosa non dire', 'a fluencia e saber o que nao dizer|a fluência é saber o que não dizer'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}

function c_de(): array
{
    return [
        'palavras' => [
            ['Skizzieren', 'Esboçar / apresentar', 'Ich möchte die Ergebnisse skizzieren.', 'C1'],
            ['Dennoch', 'Ainda assim', 'Das Budget ist knapp. Dennoch machen wir weiter.', 'C1'],
            ['Implikation', 'Implicação', 'Was sind die Implikationen?', 'C1'],
            ['Nuance', 'Nuance', 'Die Nuance des Satzes geht leicht verloren.', 'C2'],
            ['Untertreibung', 'Atenuação', 'Das eine Verzögerung zu nennen ist eine Untertreibung.', 'C2'],
            ['Register', 'Registro', 'Wechseln Sie das Register für den Vorstand.', 'C2'],
        ],
        'unidades' => [
            [
                'titulo' => 'C1: Bericht und Sitzung',
                'descricao' => 'Flüssiges Sprechen im Beruf.',
                'nivel' => 'C1',
                'aulas' => [
                    aula_dialogo(
                        'Ergebnisse vorstellen',
                        'skizzieren, Ergebnisse, dennoch, Implikation',
                        "Alex: Ich möchte die wichtigsten Ergebnisse skizzieren, bevor wir diskutieren.\nKim: Die Stichprobe ist begrenzt. Dennoch ist der Trend eindeutig.\nAlex: Genau. Die Implikation ist, den Zeitplan zu überarbeiten.\nKim: Einverstanden. Ich schicke heute Nachmittag ein Briefing herum.",
                        [
                            m('Wie eröffnet Alex?', ['Ich möchte die wichtigsten Ergebnisse skizzieren, bevor wir diskutieren.', 'Ich möchte einen Kaffee.', 'Überspringen wir die Ergebnisse.'], 'Ich möchte die wichtigsten Ergebnisse skizzieren, bevor wir diskutieren.'),
                            t('Traduza: Die Implikation ist, den Zeitplan zu überarbeiten', 'a implicacao e revisar o prazo|a implicação é revisar o cronograma'),
                            c('Complete: _____, ist der Trend eindeutig.', 'Dennoch'),
                            t('Traduza: Ich schicke heute Nachmittag ein Briefing herum', 'envio um briefing esta tarde'),
                        ]
                    ),
                    aula_dialogo(
                        'Fachtext',
                        'obwohl, sofern, erheblich',
                        "Alex: Obwohl der Entwurf solide ist, brauchen die rechtlichen Anmerkungen eine erhebliche Überarbeitung.\nKim: Wir können zustimmen, sofern die Zahlen geprüft werden.\nAlex: Ich markiere die riskanten Klauseln.\nKim: Perfekt. Dann sind wir bereit für den Vorstand.",
                        [
                            t('Traduza: Obwohl der Entwurf solide ist', 'embora o rascunho seja solido|embora o rascunho seja sólido'),
                            c('Complete: sofern die Zahlen _____ werden.', 'geprüft'),
                            m('Erhebliche Überarbeitung é:', ['revisão considerável', 'apagar o arquivo', 'uma vírgula'], 'revisão considerável'),
                            t('Traduza: Dann sind wir bereit für den Vorstand', 'entao estamos prontos para a diretoria|então estamos prontos para o conselho'),
                        ]
                    ),
                ],
            ],
            [
                'titulo' => 'C2: Nuance und Register',
                'descricao' => 'Präzision und Registerwechsel.',
                'nivel' => 'C2',
                'aulas' => [
                    aula_dialogo(
                        'Nuancen',
                        'Untertreibung, Nuance, jedoch',
                        "Alex: Das eine kleine Verzögerung zu nennen ist eine Untertreibung.\nKim: Ich verstehe. Die Nuance der Klausel schützt uns jedoch.\nAlex: Ich wäre lieber präzise als optimistisch.\nKim: Nennen wir das Risiko materiell, nicht katastrophal.",
                        [
                            m('Untertreibung heißt hier:', ['amenizar demais o problema', 'pedir a conta', 'um prazo'], 'amenizar demais o problema'),
                            t('Traduza: Ich wäre lieber präzise als optimistisch', 'prefiro ser preciso a otimista|prefiro ser preciso do que otimista'),
                            c('Complete: das Risiko _____, nicht katastrophal.', 'materiell'),
                            t('Traduza: Die Nuance der Klausel schützt uns', 'a nuance da clausula nos protege|o matiz da cláusula nos protege'),
                        ]
                    ),
                    aula_dialogo(
                        'Register wechseln',
                        'Register, Vorstand, Ton',
                        "Alex: Der Witz funktioniert im Team. Für den Vorstand ist das das falsche Register.\nKim: Fair. Ich wähle in der Mail einen maßvolleren Ton.\nAlex: Flüssigkeit heißt auch zu wissen, was man nicht sagt.\nKim: Genau. Wärme, ohne Slang.",
                        [
                            t('Traduza: Für den Vorstand ist das das falsche Register', 'para a diretoria e o registro errado|para o conselho é o registro errado'),
                            c('Complete: einen _____ Ton.', 'maßvolleren|massvolleren'),
                            m('Wissen, was man nicht sagt, ist:', ['marca de proficiente', 'nível A1', 'esquecer palavras'], 'marca de proficiente'),
                            t('Traduza: Flüssigkeit heißt auch zu wissen, was man nicht sagt', 'fluencia e tambem saber o que nao dizer|fluência é também saber o que não dizer'),
                        ]
                    ),
                ],
            ],
        ],
    ];
}
