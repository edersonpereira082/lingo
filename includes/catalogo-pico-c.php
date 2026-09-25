<?php

function pico_c(): array
{
    return [
        [
            'titulo' => 'Parecer jurídico leve C1',
            'desc' => 'Fato, tese, ressalva e o que o cliente pode ou não fazer.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A tese',
                    'teoria' => dteoria(
                        "on the facts · we advise · without prejudice · caveat\nOn the facts as stated, we advise against signing. This is without prejudice. The main caveat is jurisdiction.",
                        "según los hechos · aconsejamos · sin perjuicio · salvedad\nSegún los hechos expuestos, aconsejamos no firmar. Esto es sin perjuicio. La salvedad principal es la jurisdicción.",
                        "au vu des faits · nous conseillons · sans préjudice · réserve\nAu vu des faits exposés, nous conseillons de ne pas signer. Ceci est sans préjudice. La réserve principale est la compétence.",
                        "sui fatti · consigliamo · senza pregiudizio · riserva\nSui fatti esposti, consigliamo di non firmare. Questo è senza pregiudizio. La riserva principale è la giurisdizione.",
                        "nach den Fakten · wir raten · ohne Präjudiz · Vorbehalt\nNach den dargelegten Fakten raten wir vom Unterschreiben ab. Dies ist ohne Präjudiz. Der Hauptvorbehalt ist die Zuständigkeit."
                    ),
                    'itens' => [
                        dlinha('pelos fatos', 'pelos fatos relatados', 'on the facts', 'On the facts as stated', 'según los hechos', 'Según los hechos expuestos', 'au vu des faits', 'Au vu des faits exposés', 'sui fatti', 'Sui fatti esposti', 'nach den Fakten', 'Nach den dargelegten Fakten'),
                        dlinha('aconselhamos', 'aconselhamos a não assinar', 'we advise', 'We advise against signing', 'aconsejamos', 'Aconsejamos no firmar', 'nous conseillons', 'Nous conseillons de ne pas signer', 'consigliamo', 'Consigliamo di non firmare', 'wir raten', 'Wir raten vom Unterschreiben ab'),
                        dlinha('sem prejuízo', 'isto é sem prejuízo', 'without prejudice', 'This is without prejudice', 'sin perjuicio', 'Esto es sin perjuicio', 'sans préjudice', 'Ceci est sans préjudice', 'senza pregiudizio', 'Questo è senza pregiudizio', 'ohne Präjudiz', 'Dies ist ohne Präjudiz'),
                        dlinha('ressalva', 'a ressalva é a jurisdição', 'caveat', 'The caveat is jurisdiction', 'salvedad', 'La salvedad es la jurisdicción', 'réserve', 'La réserve est la compétence', 'riserva', 'La riserva è la giurisdizione', 'Vorbehalt', 'Der Vorbehalt ist die Zuständigkeit'),
                    ],
                ],
                [
                    'titulo' => 'O que o cliente faz',
                    'teoria' => dteoria(
                        "do not admit · hold the line · seek counsel · time-barred\nDo not admit liability. Hold the line until we seek further counsel. The claim may already be time-barred.",
                        "no admitas · mantén la línea · consulta · prescrito\nNo admitas responsabilidad. Mantén la línea hasta consultar. La reclamación puede estar prescrita.",
                        "n avoue pas · tiens la ligne · consulter · prescrit\nN avoue pas de responsabilité. Tiens la ligne jusqu à consulter. La créance peut être prescrite.",
                        "non ammettere · tieni la linea · consulta · prescritto\nNon ammettere responsabilità. Tieni la linea finché consultiamo. La pretesa può essere prescritta.",
                        "nicht zugeben · Linie halten · Rat einholen · verjährt\nGib keine Haftung zu. Halte die Linie, bis wir weiteren Rat einholen. Der Anspruch kann verjährt sein."
                    ),
                    'itens' => [
                        dlinha('não admita', 'não admita responsabilidade', 'do not admit', 'Do not admit liability', 'no admitas', 'No admitas responsabilidad', 'n avoue pas', 'N avoue pas de responsabilité', 'non ammettere', 'Non ammettere responsabilità', 'nicht zugeben', 'Gib keine Haftung zu'),
                        dlinha('mantenha a linha', 'mantenha a linha até o parecer', 'hold the line', 'Hold the line until the opinion', 'mantén la línea', 'Mantén la línea hasta el dictamen', 'tiens la ligne', 'Tiens la ligne jusqu à l avis', 'tieni la linea', 'Tieni la linea fino al parere', 'Linie halten', 'Halte die Linie bis zum Gutachten'),
                        dlinha('consulte', 'consulte outro parecer', 'seek counsel', 'Seek further counsel', 'consulta', 'Consulta otro dictamen', 'consulter', 'Consulte un autre avis', 'consulta', 'Consulta un altro parere', 'Rat einholen', 'Hol weiteren Rat ein'),
                        dlinha('prescrito', 'o pedido pode estar prescrito', 'time-barred', 'The claim may be time-barred', 'prescrito', 'La reclamación puede estar prescrita', 'prescrit', 'La créance peut être prescrite', 'prescritto', 'La pretesa può essere prescritta', 'verjährt', 'Der Anspruch kann verjährt sein'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Briefing de crise C1',
            'desc' => 'O que se sabe, o que não se confirma e a frase única.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O que se sabe',
                    'teoria' => dteoria(
                        "confirmed · unconfirmed · holding line · no comment\nWhat is confirmed is the outage. Staff numbers are unconfirmed. The holding line is we are investigating. Do not go beyond no comment on cause.",
                        "confirmado · no confirmado · línea de espera · sin comentarios\nLo confirmado es la caída. El número de personal no está confirmado. La línea de espera es que investigamos.",
                        "confirmé · non confirmé · élément de langage · pas de commentaire\nCe qui est confirmé c est la panne. Les effectifs ne sont pas confirmés. L élément de langage est que nous enquêtons.",
                        "confermato · non confermato · linea di attesa · nessun commento\nCiò che è confermato è il guasto. Il personale non è confermato. La linea di attesa è che stiamo indagando.",
                        "bestätigt · unbestätigt · Sprachregelung · kein Kommentar\nBestätigt ist der Ausfall. Zahlen zum Personal sind unbestätigt. Die Sprachregelung lautet: wir prüfen."
                    ),
                    'itens' => [
                        dlinha('confirmado', 'o que está confirmado é a queda', 'confirmed', 'What is confirmed is the outage', 'confirmado', 'Lo confirmado es la caída', 'confirmé', 'Ce qui est confirmé c est la panne', 'confermato', 'Ciò che è confermato è il guasto', 'bestätigt', 'Bestätigt ist der Ausfall'),
                        dlinha('não confirmado', 'o número não está confirmado', 'unconfirmed', 'The number is unconfirmed', 'no confirmado', 'El número no está confirmado', 'non confirmé', 'Le chiffre n est pas confirmé', 'non confermato', 'Il numero non è confermato', 'unbestätigt', 'Die Zahl ist unbestätigt'),
                        dlinha('frase de espera', 'a frase de espera é estamos apurando', 'holding line', 'The holding line is we are investigating', 'línea de espera', 'La línea de espera es que investigamos', 'élément de langage', 'L élément de langage est que nous enquêtons', 'linea di attesa', 'La linea di attesa è che stiamo indagando', 'Sprachregelung', 'Die Sprachregelung lautet wir prüfen'),
                        dlinha('sem comentários', 'sem comentários sobre a causa', 'no comment', 'No comment on the cause', 'sin comentarios', 'Sin comentarios sobre la causa', 'pas de commentaire', 'Pas de commentaire sur la cause', 'nessun commento', 'Nessun commento sulla causa', 'kein Kommentar', 'Kein Kommentar zur Ursache'),
                    ],
                ],
                [
                    'titulo' => 'A frase única',
                    'teoria' => dteoria(
                        "we regret · those affected · next update · do not speculate\nWe regret the disruption to those affected. The next update is at noon. Do not speculate about fault.",
                        "lamentamos · los afectados · próxima actualización · no especules\nLamentamos el trastorno a los afectados. La próxima actualización es al mediodía. No especules sobre la culpa.",
                        "nous regrettons · les personnes touchées · prochaine mise à jour · ne spéculez pas\nNous regrettons la gêne pour les personnes touchées. La prochaine mise à jour est à midi. Ne spéculez pas sur la faute.",
                        "ci dispiace · i colpiti · prossimo aggiornamento · non speculare\nCi dispiace per il disagio ai colpiti. Il prossimo aggiornamento è a mezzogiorno. Non speculare sulla colpa.",
                        "wir bedauern · Betroffene · nächstes Update · nicht spekulieren\nWir bedauern die Störung für Betroffene. Das nächste Update ist um zwölf. Spekuliere nicht über Schuld."
                    ),
                    'itens' => [
                        dlinha('lamentamos', 'lamentamos o transtorno', 'we regret', 'We regret the disruption', 'lamentamos', 'Lamentamos el trastorno', 'nous regrettons', 'Nous regrettons la gêne', 'ci dispiace', 'Ci dispiace per il disagio', 'wir bedauern', 'Wir bedauern die Störung'),
                        dlinha('os atingidos', 'pedimos desculpas aos atingidos', 'those affected', 'We apologise to those affected', 'los afectados', 'Pedimos disculpas a los afectados', 'les personnes touchées', 'Nous présentons nos excuses aux personnes touchées', 'i colpiti', 'Chiediamo scusa ai colpiti', 'Betroffene', 'Wir entschuldigen uns bei den Betroffenen'),
                        dlinha('próximo aviso', 'o próximo aviso é ao meio-dia', 'next update', 'The next update is at noon', 'próxima actualización', 'La próxima actualización es al mediodía', 'prochaine mise à jour', 'La prochaine mise à jour est à midi', 'prossimo aggiornamento', 'Il prossimo aggiornamento è a mezzogiorno', 'nächstes Update', 'Das nächste Update ist um zwölf'),
                        dlinha('não especule', 'não especule sobre a culpa', 'do not speculate', 'Do not speculate about fault', 'no especules', 'No especules sobre la culpa', 'ne spéculez pas', 'Ne spéculez pas sur la faute', 'non speculare', 'Non speculare sulla colpa', 'nicht spekulieren', 'Spekuliere nicht über Schuld'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Revisão por pares C1',
            'desc' => 'Mérito, método, o que falta e o parecer ao editor.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O mérito',
                    'teoria' => dteoria(
                        "contribution · underpowered · confound · major revision\nThe contribution is real but the sample is underpowered. A confound remains. I recommend major revision.",
                        "aporte · poca potencia · factor de confusión · revisión mayor\nEl aporte es real pero la muestra tiene poca potencia. Queda un factor de confusión. Recomiendo revisión mayor.",
                        "apport · sous-puissance · facteur de confusion · révision majeure\nL apport est réel mais l échantillon est sous-puissant. Un facteur de confusion demeure. Je recommande une révision majeure.",
                        "contributo · scarsa potenza · confondente · revisione maggiore\nIl contributo è reale ma il campione è poco potente. Resta un confondente. Raccomando revisione maggiore.",
                        "Beitrag · unterpowered · Störfaktor · große Überarbeitung\nDer Beitrag ist echt, aber die Stichprobe ist unterpowered. Ein Störfaktor bleibt. Ich empfehle eine große Überarbeitung."
                    ),
                    'itens' => [
                        dlinha('aporte', 'o aporte é real', 'contribution', 'The contribution is real', 'aporte', 'El aporte es real', 'apport', 'L apport est réel', 'contributo', 'Il contributo è reale', 'Beitrag', 'Der Beitrag ist echt'),
                        dlinha('pouca potência', 'a amostra tem pouca potência', 'underpowered', 'The sample is underpowered', 'poca potencia', 'La muestra tiene poca potencia', 'sous-puissance', 'L échantillon est sous-puissant', 'scarsa potenza', 'Il campione è poco potente', 'unterpowered', 'Die Stichprobe ist unterpowered'),
                        dlinha('confundidor', 'resta um confundidor', 'confound', 'A confound remains', 'factor de confusión', 'Queda un factor de confusión', 'facteur de confusion', 'Un facteur de confusion demeure', 'confondente', 'Resta un confondente', 'Störfaktor', 'Ein Störfaktor bleibt'),
                        dlinha('revisão maior', 'recomendo revisão maior', 'major revision', 'I recommend major revision', 'revisión mayor', 'Recomiendo revisión mayor', 'révision majeure', 'Je recommande une révision majeure', 'revisione maggiore', 'Raccomando revisione maggiore', 'große Überarbeitung', 'Ich empfehle eine große Überarbeitung'),
                    ],
                ],
                [
                    'titulo' => 'Ao editor',
                    'teoria' => dteoria(
                        "reject · accept with minor · not novel · conflict\nI would not reject on method alone. It is not novel enough for this venue. I declare no conflict.",
                        "rechazar · aceptar con menores · poco novedoso · conflicto\nNo rechazaría solo por el método. No es lo bastante novedoso para esta sede. Declaro que no hay conflicto.",
                        "rejeter · accepter avec mineures · peu novateur · conflit\nJe ne rejetterais pas pour la seule méthode. Ce n est pas assez novateur pour cette revue. Je déclare n avoir aucun conflit.",
                        "respingere · accettare con minori · poco originale · conflitto\nNon respingerei solo per il metodo. Non è abbastanza originale per questa sede. Dichiaro nessun conflitto.",
                        "ablehnen · annehmen mit kleinen · nicht neu genug · Interessenkonflikt\nIch würde nicht allein wegen der Methode ablehnen. Es ist für dieses Blatt nicht neu genug. Ich erkläre keinen Interessenkonflikt."
                    ),
                    'itens' => [
                        dlinha('rejeitar', 'eu não rejeitaria só pelo método', 'reject', 'I would not reject on method alone', 'rechazar', 'No rechazaría solo por el método', 'rejeter', 'Je ne rejetterais pas pour la seule méthode', 'respingere', 'Non respingerei solo per il metodo', 'ablehnen', 'Ich würde nicht allein wegen der Methode ablehnen'),
                        dlinha('aceitar com menores', 'aceitar com correções menores', 'accept with minor', 'Accept with minor revisions', 'aceptar con menores', 'Aceptar con correcciones menores', 'accepter avec mineures', 'Accepter avec des corrections mineures', 'accettare con minori', 'Accettare con correzioni minori', 'annehmen mit kleinen', 'Annehmen mit kleinen Korrekturen'),
                        dlinha('pouco original', 'não é original o bastante', 'not novel', 'It is not novel enough', 'poco novedoso', 'No es lo bastante novedoso', 'peu novateur', 'Ce n est pas assez novateur', 'poco originale', 'Non è abbastanza originale', 'nicht neu genug', 'Es ist nicht neu genug'),
                        dlinha('conflito', 'declaro que não há conflito', 'conflict', 'I declare no conflict', 'conflicto', 'Declaro que no hay conflicto', 'conflit', 'Je déclare n avoir aucun conflit', 'conflitto', 'Dichiaro nessun conflitto', 'Interessenkonflikt', 'Ich erkläre keinen Interessenkonflikt'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Política pública C1',
            'desc' => 'O problema, o instrumento, o efeito colateral e quem paga.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O instrumento',
                    'teoria' => dteoria(
                        "policy lever · targeted · deadweight · who pays\nThe policy lever is a targeted subsidy. Watch the deadweight. The question is who pays when it scales.",
                        "palanca · focalizado · peso muerto · quién paga\nLa palanca es un subsidio focalizado. Cuidado con el peso muerto. La pregunta es quién paga al escalar.",
                        "levier · ciblé · poids mort · qui paie\nLe levier est une subvention ciblée. Attention au poids mort. La question est qui paie à l échelle.",
                        "leva · mirato · peso morto · chi paga\nLa leva è un sussidio mirato. Attenti al peso morto. La domanda è chi paga quando scala.",
                        "Hebel · gezielt · Mitnahme · wer zahlt\nDer Hebel ist eine gezielte Beihilfe. Achte auf Mitnahme. Die Frage ist, wer zahlt, wenn es skaliert."
                    ),
                    'itens' => [
                        dlinha('instrumento', 'o instrumento é o subsídio', 'policy lever', 'The policy lever is the subsidy', 'palanca', 'La palanca es el subsidio', 'levier', 'Le levier est la subvention', 'leva', 'La leva è il sussidio', 'Hebel', 'Der Hebel ist die Beihilfe'),
                        dlinha('focalizado', 'tem que ser focalizado', 'targeted', 'It has to be targeted', 'focalizado', 'Tiene que ser focalizado', 'ciblé', 'Il faut que ce soit ciblé', 'mirato', 'Deve essere mirato', 'gezielt', 'Es muss gezielt sein'),
                        dlinha('peso morto', 'cuidado com o peso morto', 'deadweight', 'Watch the deadweight', 'peso muerto', 'Cuidado con el peso muerto', 'poids mort', 'Attention au poids mort', 'peso morto', 'Attenti al peso morto', 'Mitnahme', 'Achte auf Mitnahme'),
                        dlinha('quem paga', 'quem paga quando escala', 'who pays', 'Who pays when it scales', 'quién paga', 'Quién paga al escalar', 'qui paie', 'Qui paie à l échelle', 'chi paga', 'Chi paga quando scala', 'wer zahlt', 'Wer zahlt wenn es skaliert'),
                    ],
                ],
                [
                    'titulo' => 'O efeito colateral',
                    'teoria' => dteoria(
                        "unintended · crowding out · sunset · evaluate\nThe unintended effect may be crowding out. Put a sunset clause. Evaluate before you renew.",
                        "no deseado · desplazamiento · caducidad · evaluar\nEl efecto no deseado puede ser el desplazamiento. Pon una cláusula de caducidad. Evalúa antes de renovar.",
                        "non voulu · éviction · clause de caducité · évaluer\nL effet non voulu peut être l éviction. Mets une clause de caducité. Évalue avant de renouveler.",
                        "indesiderato · spiazzamento · scadenza · valutare\nL effetto indesiderato può essere lo spiazzamento. Metti una clausola di scadenza. Valuta prima di rinnovare.",
                        "unbeabsichtigt · Verdrängung · Auslauf · evaluieren\nDer unbeabsichtigte Effekt kann Verdrängung sein. Setz eine Auslaufklausel. Evaluiere vor der Verlängerung."
                    ),
                    'itens' => [
                        dlinha('não intencional', 'o efeito não intencional', 'unintended', 'The unintended effect', 'no deseado', 'El efecto no deseado', 'non voulu', 'L effet non voulu', 'indesiderato', 'L effetto indesiderato', 'unbeabsichtigt', 'Der unbeabsichtigte Effekt'),
                        dlinha('expulsão', 'pode haver expulsão do privado', 'crowding out', 'There may be crowding out', 'desplazamiento', 'Puede haber desplazamiento', 'éviction', 'Il peut y avoir éviction', 'spiazzamento', 'Può esserci spiazzamento', 'Verdrängung', 'Es kann Verdrängung geben'),
                        dlinha('cláusula de término', 'ponha cláusula de término', 'sunset', 'Put a sunset clause', 'caducidad', 'Pon una cláusula de caducidad', 'clause de caducité', 'Mets une clause de caducité', 'scadenza', 'Metti una clausola di scadenza', 'Auslauf', 'Setz eine Auslaufklausel'),
                        dlinha('avaliar', 'avalie antes de renovar', 'evaluate', 'Evaluate before you renew', 'evaluar', 'Evalúa antes de renovar', 'évaluer', 'Évalue avant de renouveler', 'valutare', 'Valuta prima di rinnovare', 'evaluieren', 'Evaluiere vor der Verlängerung'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Entrevista longa C1',
            'desc' => 'A tese do entrevistado, a contradição e o silêncio útil.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'A tese dele',
                    'teoria' => dteoria(
                        "you argued · in your book · walk me through · that sits uneasily\nYou argued in your book that markets self-correct. Walk me through 2008. That sits uneasily with the rescue.",
                        "sostuviste · en tu libro · recórreme · encaja mal\nSostuviste en tu libro que los mercados se autocorrigen. Recórreme 2008. Eso encaja mal con el rescate.",
                        "tu as soutenu · dans ton livre · guide-moi · cela cadre mal\nTu as soutenu dans ton livre que les marchés s autocorrectent. Guide-moi en 2008. Cela cadre mal avec le sauvetage.",
                        "hai sostenuto · nel tuo libro · portami · sta male\nHai sostenuto nel tuo libro che i mercati si autocorreggono. Portami al 2008. Sta male col salvataggio.",
                        "du hast vertreten · in deinem Buch · führ mich · das sitzt schlecht\nDu hast in deinem Buch vertreten, Märkte korrigierten sich selbst. Führ mich durch 2008. Das sitzt schlecht mit der Rettung."
                    ),
                    'itens' => [
                        dlinha('você sustentou', 'você sustentou isso no livro', 'you argued', 'You argued that in your book', 'sostuviste', 'Sostuviste eso en tu libro', 'tu as soutenu', 'Tu as soutenu cela dans ton livre', 'hai sostenuto', 'Hai sostenuto questo nel tuo libro', 'du hast vertreten', 'Du hast das in deinem Buch vertreten'),
                        dlinha('no seu livro', 'está no seu livro', 'in your book', 'It is in your book', 'en tu libro', 'Está en tu libro', 'dans ton livre', 'C est dans ton livre', 'nel tuo libro', 'È nel tuo libro', 'in deinem Buch', 'Es steht in deinem Buch'),
                        dlinha('me leve', 'me leve por 2008', 'walk me through', 'Walk me through 2008', 'recórreme', 'Recórreme 2008', 'guide-moi', 'Guide-moi en 2008', 'portami', 'Portami al 2008', 'führ mich', 'Führ mich durch 2008'),
                        dlinha('encaixa mal', 'isso encaixa mal com o resgate', 'that sits uneasily', 'That sits uneasily with the rescue', 'encaja mal', 'Eso encaja mal con el rescate', 'cela cadre mal', 'Cela cadre mal avec le sauvetage', 'sta male', 'Sta male col salvataggio', 'das sitzt schlecht', 'Das sitzt schlecht mit der Rettung'),
                    ],
                ],
                [
                    'titulo' => 'O silêncio',
                    'teoria' => dteoria(
                        "let the pause sit · you did not answer · on the record · last word\nLet the pause sit. You did not answer the question. This is on the record. You have the last word.",
                        "deja el silencio · no respondiste · on the record · la última palabra\nDeja el silencio. No respondiste la pregunta. Esto queda on the record. Tienes la última palabra.",
                        "laisse le silence · tu n as pas répondu · on the record · le dernier mot\nLaisse le silence. Tu n as pas répondu à la question. C est on the record. Tu as le dernier mot.",
                        "lascia la pausa · non hai risposto · on the record · l ultima parola\nLascia la pausa. Non hai risposto alla domanda. Questo è on the record. Hai l ultima parola.",
                        "die Pause stehen lassen · du hast nicht geantwortet · on the record · das letzte Wort\nLass die Pause stehen. Du hast die Frage nicht beantwortet. Das ist on the record. Du hast das letzte Wort."
                    ),
                    'itens' => [
                        dlinha('deixe a pausa', 'deixe a pausa no ar', 'let the pause sit', 'Let the pause sit', 'deja el silencio', 'Deja el silencio', 'laisse le silence', 'Laisse le silence', 'lascia la pausa', 'Lascia la pausa', 'die Pause stehen lassen', 'Lass die Pause stehen'),
                        dlinha('não respondeu', 'você não respondeu a pergunta', 'you did not answer', 'You did not answer the question', 'no respondiste', 'No respondiste la pregunta', 'tu n as pas répondu', 'Tu n as pas répondu à la question', 'non hai risposto', 'Non hai risposto alla domanda', 'du hast nicht geantwortet', 'Du hast die Frage nicht beantwortet'),
                        dlinha('em ata', 'isto fica em ata', 'on the record', 'This is on the record', 'on the record', 'Esto queda on the record', 'on the record', 'C est on the record', 'on the record', 'Questo è on the record', 'on the record', 'Das ist on the record'),
                        dlinha('a última palavra', 'você tem a última palavra', 'last word', 'You have the last word', 'la última palabra', 'Tienes la última palabra', 'le dernier mot', 'Tu as le dernier mot', 'l ultima parola', 'Hai l ultima parola', 'das letzte Wort', 'Du hast das letzte Wort'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Nota e citação C1',
            'desc' => 'Parafrasear, citar, o que é de outrem e o aparato.',
            'nivel' => 'C1',
            'aulas' => [
                [
                    'titulo' => 'O que é de quem',
                    'teoria' => dteoria(
                        "paraphrase · quote · attribute · sic\nParaphrase unless the wording is load-bearing. Quote and attribute. Leave sic if the error is theirs.",
                        "parafrasear · citar · atribuir · sic\nParafrasea salvo si el wording es estructural. Cita y atribuye. Deja sic si el error es suyo.",
                        "paraphraser · citer · attribuer · sic\nParaphrase sauf si le wording est porteur. Cite et attribue. Laisse sic si l erreur est la leur.",
                        "parafrasare · citare · attribuire · sic\nParafrasa salvo se il wording è strutturale. Cita e attribuisci. Lascia sic se l errore è loro.",
                        "umschreiben · zitieren · zuschreiben · sic\nUmschreibe, außer die Formulierung trägt. Zitiere und schreibe zu. Lass sic, wenn der Fehler ihrer ist."
                    ),
                    'itens' => [
                        dlinha('parafrasear', 'parafraseie salvo se a frase carrega', 'paraphrase', 'Paraphrase unless the wording is load-bearing', 'parafrasear', 'Parafrasea salvo si el wording es estructural', 'paraphraser', 'Paraphrase sauf si le wording est porteur', 'parafrasare', 'Parafrasa salvo se il wording è strutturale', 'umschreiben', 'Umschreibe außer die Formulierung trägt'),
                        dlinha('citar', 'cite na íntegra se precisar', 'quote', 'Quote in full if you must', 'citar', 'Cita entero si hace falta', 'citer', 'Cite in extenso s il le faut', 'citare', 'Cita per intero se serve', 'zitieren', 'Zitiere vollständig wenn nötig'),
                        dlinha('atribuir', 'atribua a fonte', 'attribute', 'Attribute the source', 'atribuir', 'Atribuye la fuente', 'attribuer', 'Attribue la source', 'attribuire', 'Attribuisci la fonte', 'zuschreiben', 'Schreibe die Quelle zu'),
                        dlinha('sic', 'deixe sic se o erro é deles', 'sic', 'Leave sic if the error is theirs', 'sic', 'Deja sic si el error es suyo', 'sic', 'Laisse sic si l erreur est la leur', 'sic', 'Lascia sic se l errore è loro', 'sic', 'Lass sic wenn der Fehler ihrer ist'),
                    ],
                ],
                [
                    'titulo' => 'O aparato',
                    'teoria' => dteoria(
                        "ibid · op cit · footnote · hanging indent\nUse ibid for the same work immediately above. Prefer a short title to op cit. Keep footnotes lean. Hanging indent in the list.",
                        "ibid · op cit · nota al pie · sangría francesa\nUsa ibid para la misma obra justo arriba. Prefiere título corto a op cit. Notas al pie magras. Sangría francesa en la lista.",
                        "ibid · op cit · note de bas de page · alinéa suspendu\nUtilise ibid pour la même œuvre juste au-dessus. Préfère un titre court à op cit. Notes maigres. Alinéa suspendu dans la liste.",
                        "ibid · op cit · nota a piè · rientro sporgente\nUsa ibid per la stessa opera subito sopra. Preferisci un titolo breve a op cit. Note magre. Rientro sporgente in elenco.",
                        "ebd · a a O · Fußnote · hängender Einzug\nNutze ebd für dasselbe Werk direkt oben. Lieber Kurztitel als a a O. Fußnoten schlank. Hängender Einzug in der Liste."
                    ),
                    'itens' => [
                        dlinha('ibidem', 'use ibidem na obra logo acima', 'ibid', 'Use ibid for the work immediately above', 'ibid', 'Usa ibid para la obra justo arriba', 'ibid', 'Utilise ibid pour l œuvre juste au-dessus', 'ibid', 'Usa ibid per l opera subito sopra', 'ebd', 'Nutze ebd für das Werk direkt oben'),
                        dlinha('op cit', 'evite op cit, use título curto', 'op cit', 'Avoid op cit use a short title', 'op cit', 'Evita op cit usa título corto', 'op cit', 'Évite op cit préfère un titre court', 'op cit', 'Evita op cit usa un titolo breve', 'a a O', 'Vermeide a a O nimm den Kurztitel'),
                        dlinha('nota de rodapé', 'a nota de rodapé deve ser magra', 'footnote', 'Keep the footnote lean', 'nota al pie', 'La nota al pie debe ser magra', 'note de bas de page', 'La note de bas de page doit être maigre', 'nota a piè', 'La nota a piè deve essere magra', 'Fußnote', 'Die Fußnote soll schlank sein'),
                        dlinha('recuo invertido', 'lista com recuo invertido', 'hanging indent', 'The list uses hanging indent', 'sangría francesa', 'La lista usa sangría francesa', 'alinéa suspendu', 'La liste use d un alinéa suspendu', 'rientro sporgente', 'L elenco usa rientro sporgente', 'hängender Einzug', 'Die Liste nutzt hängenden Einzug'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Sátira política C2',
            'desc' => 'O alvo, o exagero, o que a ironia não absolve.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O alvo',
                    'teoria' => dteoria(
                        "punching up · lampoon · the tell · deniability\nPunching up is the ethic. The lampoon works if the tell is recognisable. Do not hide behind deniability.",
                        "pegar hacia arriba · sátira · la seña · negación plausible\nPegar hacia arriba es la ética. La sátira funciona si la seña se reconoce. No te escondas en la negación plausible.",
                        "frapper vers le haut · pamphlet · le signe · déni plausible\nFrapper vers le haut est l éthique. Le pamphlet marche si le signe se reconnaît. Ne te cache pas derrière le déni plausible.",
                        "colpire in alto · pamphlet · il segno · negabilità\nColpire in alto è l etica. Il pamphlet funziona se il segno si riconosce. Non nasconderti dietro la negabilità.",
                        "nach oben schlagen · Spott · das Erkennungszeichen · Abstreitbarkeit\nNach oben schlagen ist die Ethik. Der Spott wirkt, wenn das Erkennungszeichen sitzt. Versteck dich nicht hinter Abstreitbarkeit."
                    ),
                    'itens' => [
                        dlinha('bater para cima', 'a ética é bater para cima', 'punching up', 'The ethic is punching up', 'pegar hacia arriba', 'La ética es pegar hacia arriba', 'frapper vers le haut', 'L éthique est de frapper vers le haut', 'colpire in alto', 'L etica è colpire in alto', 'nach oben schlagen', 'Die Ethik ist nach oben zu schlagen'),
                        dlinha('pamfleto', 'o pamfleto só pega se o alvo se vê', 'lampoon', 'The lampoon only lands if the target is seen', 'sátira', 'La sátira solo pega si se ve el blanco', 'pamphlet', 'Le pamphlet ne prend que si la cible se voit', 'pamphlet', 'Il pamphlet prende solo se il bersaglio si vede', 'Spott', 'Der Spott sitzt nur wenn das Ziel sichtbar ist'),
                        dlinha('a marca', 'a marca tem de ser reconhecível', 'the tell', 'The tell has to be recognisable', 'la seña', 'La seña tiene que ser reconocible', 'le signe', 'Le signe doit être reconnaissable', 'il segno', 'Il segno deve essere riconoscibile', 'das Erkennungszeichen', 'Das Erkennungszeichen muss erkennbar sein'),
                        dlinha('negação plausível', 'não se esconda na negação plausível', 'deniability', 'Do not hide behind deniability', 'negación plausible', 'No te escondas en la negación plausible', 'déni plausible', 'Ne te cache pas derrière le déni plausible', 'negabilità', 'Non nasconderti dietro la negabilità', 'Abstreitbarkeit', 'Versteck dich nicht hinter Abstreitbarkeit'),
                    ],
                ],
                [
                    'titulo' => 'O que a ironia não faz',
                    'teoria' => dteoria(
                        "irony is not a shield · dog whistle · the laugh that lets you off · still means it\nIrony is not a shield. A dog whistle still means it. The laugh that lets you off is the problem.",
                        "la ironía no es escudo · silbato · la risa que te absuelve · igual lo dice\nLa ironía no es un escudo. Un silbato igual lo dice. La risa que te absuelve es el problema.",
                        "l ironie n est pas un bouclier · sifflet · le rire qui t absout · ça le dit quand même\nL ironie n est pas un bouclier. Un sifflet le dit quand même. Le rire qui t absout est le problème.",
                        "l ironia non è uno scudo · fischio · la risata che ti assolve · lo dice lo stesso\nL ironia non è uno scudo. Un fischio lo dice lo stesso. La risata che ti assolve è il problema.",
                        "Ironie ist kein Schild · Hundepfeife · das Lachen das dich freispricht · es meint es trotzdem\nIronie ist kein Schild. Eine Hundepfeife meint es trotzdem. Das Lachen, das dich freispricht, ist das Problem."
                    ),
                    'itens' => [
                        dlinha('ironia não é escudo', 'ironia não é escudo', 'irony is not a shield', 'Irony is not a shield', 'la ironía no es escudo', 'La ironía no es un escudo', 'l ironie n est pas un bouclier', 'L ironie n est pas un bouclier', 'l ironia non è uno scudo', 'L ironia non è uno scudo', 'Ironie ist kein Schild', 'Ironie ist kein Schild'),
                        dlinha('apito', 'o apito ainda diz a coisa', 'dog whistle', 'A dog whistle still means it', 'silbato', 'Un silbato igual lo dice', 'sifflet', 'Un sifflet le dit quand même', 'fischio', 'Un fischio lo dice lo stesso', 'Hundepfeife', 'Eine Hundepfeife meint es trotzdem'),
                        dlinha('o riso que absolve', 'o riso que te absolve é o problema', 'the laugh that lets you off', 'The laugh that lets you off is the problem', 'la risa que te absuelve', 'La risa que te absuelve es el problema', 'le rire qui t absout', 'Le rire qui t absout est le problème', 'la risata che ti assolve', 'La risata che ti assolve è il problema', 'das Lachen das dich freispricht', 'Das Lachen das dich freispricht ist das Problem'),
                        dlinha('ainda quer dizer', 'ainda quer dizer aquilo', 'still means it', 'It still means it', 'igual lo dice', 'Igual lo dice', 'ça le dit quand même', 'Ça le dit quand même', 'lo dice lo stesso', 'Lo dice lo stesso', 'es meint es trotzdem', 'Es meint es trotzdem'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Pragmática e implicatura C2',
            'desc' => 'O dito, o implicado, a máxima violada e o que o ouvinte infere.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O que não foi dito',
                    'teoria' => dteoria(
                        "said · implicated · flout · cancel\nWhat was said is thin. What was implicated does the work. They flouted quantity. The implicature can still be cancelled.",
                        "dicho · implicado · transgredir · cancelar\nLo dicho es poco. Lo implicado hace el trabajo. Transgredieron la cantidad. La implicatura aún se puede cancelar.",
                        "dit · impliqué · enfreindre · annuler\nLe dit est mince. L impliqué fait le travail. Ils ont enfreint la quantité. L implicature peut encore s annuler.",
                        "detto · implicato · violare · cancellare\nIl detto è magro. L implicato fa il lavoro. Hanno violato la quantità. L implicatura si può ancora cancellare.",
                        "gesagt · impliziert · verletzen · tilgen\nDas Gesagte ist dünn. Das Implizierte leistet die Arbeit. Sie haben Quantität verletzt. Die Implikatur lässt sich noch tilgen."
                    ),
                    'itens' => [
                        dlinha('o dito', 'o dito é magro', 'said', 'What was said is thin', 'dicho', 'Lo dicho es poco', 'dit', 'Le dit est mince', 'detto', 'Il detto è magro', 'gesagt', 'Das Gesagte ist dünn'),
                        dlinha('o implicado', 'o implicado faz o trabalho', 'implicated', 'What was implicated does the work', 'implicado', 'Lo implicado hace el trabajo', 'impliqué', 'L impliqué fait le travail', 'implicato', 'L implicato fa il lavoro', 'impliziert', 'Das Implizierte leistet die Arbeit'),
                        dlinha('violar a máxima', 'violaram a máxima da quantidade', 'flout', 'They flouted quantity', 'transgredir', 'Transgredieron la cantidad', 'enfreindre', 'Ils ont enfreint la quantité', 'violare', 'Hanno violato la quantità', 'verletzen', 'Sie haben Quantität verletzt'),
                        dlinha('cancelar', 'a implicatura ainda se cancela', 'cancel', 'The implicature can still be cancelled', 'cancelar', 'La implicatura aún se puede cancelar', 'annuler', 'L implicature peut encore s annuler', 'cancellare', 'L implicatura si può ancora cancellare', 'tilgen', 'Die Implikatur lässt sich noch tilgen'),
                    ],
                ],
                [
                    'titulo' => 'O que o ouvinte faz',
                    'teoria' => dteoria(
                        "infer · common ground · face · hedge\nThe hearer infers from common ground. Face is at stake so they hedge. The hedge is not the claim.",
                        "inferir · terreno común · imagen · atenuar\nEl oyente infiere del terreno común. La imagen está en juego así que atenúa. La atenuación no es la tesis.",
                        "inférer · terrain commun · face · atténuer\nL auditeur infère du terrain commun. La face est en jeu donc il atténue. L atténuation n est pas la thèse.",
                        "inferire · terreno comune · faccia · attenuare\nL ascoltatore infersce dal terreno comune. La faccia è in gioco quindi attenua. L attenuazione non è la tesi.",
                        "schließen · gemeinsamer Boden · Gesicht · abschwächen\nDer Hörer schließt vom gemeinsamen Boden. Das Gesicht steht auf dem Spiel, also schwächt er ab. Die Abschwächung ist nicht die Behauptung."
                    ),
                    'itens' => [
                        dlinha('inferir', 'o ouvinte infere o resto', 'infer', 'The hearer infers the rest', 'inferir', 'El oyente infiere el resto', 'inférer', 'L auditeur infère le reste', 'inferire', 'L ascoltatore infersce il resto', 'schließen', 'Der Hörer schließt den Rest'),
                        dlinha('chão comum', 'parte do chão comum', 'common ground', 'It starts from common ground', 'terreno común', 'Parte del terreno común', 'terrain commun', 'Cela part du terrain commun', 'terreno comune', 'Parte dal terreno comune', 'gemeinsamer Boden', 'Es geht vom gemeinsamen Boden aus'),
                        dlinha('a face', 'a face está em jogo', 'face', 'Face is at stake', 'imagen', 'La imagen está en juego', 'face', 'La face est en jeu', 'faccia', 'La faccia è in gioco', 'Gesicht', 'Das Gesicht steht auf dem Spiel'),
                        dlinha('atenuar', 'atenuam para não perder a face', 'hedge', 'They hedge so as not to lose face', 'atenuar', 'Atenúan para no perder la imagen', 'atténuer', 'Ils atténuent pour ne pas perdre la face', 'attenuare', 'Attenuano per non perdere la faccia', 'abschwächen', 'Sie schwächen ab um das Gesicht zu wahren'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Estilo de época C2',
            'desc' => 'Período, tique, o que o tradutor não moderniza.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O tique',
                    'teoria' => dteoria(
                        "period style · tic · hypotaxis · do not modernise\nThe period style lives in the tic of hypotaxis. Do not modernise the cadence just to be kind to the reader.",
                        "estilo de época · tique · hipotaxis · no modernices\nEl estilo de época vive en el tique de la hipotaxis. No modernices la cadencia por ser amable con el lector.",
                        "style d époque · tic · hypotaxe · ne modernise pas\nLe style d époque vit dans le tic de l hypotaxe. Ne modernise pas la cadence pour être gentil avec le lecteur.",
                        "stile d epoca · tic · ipotassi · non modernizzare\nLo stile d epoca vive nel tic dell ipotassi. Non modernizzare la cadenza per essere gentile col lettore.",
                        "Epochenstil · Tick · Hypotaxe · nicht modernisieren\nDer Epochenstil lebt im Tick der Hypotaxe. Modernisiere die Kadenz nicht, nur um dem Leser entgegenzukommen."
                    ),
                    'itens' => [
                        dlinha('estilo de época', 'o estilo de época está na sintaxe', 'period style', 'The period style is in the syntax', 'estilo de época', 'El estilo de época está en la sintaxis', 'style d époque', 'Le style d époque est dans la syntaxe', 'stile d epoca', 'Lo stile d epoca è nella sintassi', 'Epochenstil', 'Der Epochenstil sitzt in der Syntax'),
                        dlinha('tique', 'o tique é a hipotaxe longa', 'tic', 'The tic is long hypotaxis', 'tique', 'El tique es la hipotaxis larga', 'tic', 'Le tic est l hypotaxe longue', 'tic', 'Il tic è l ipotassi lunga', 'Tick', 'Der Tick ist die lange Hypotaxe'),
                        dlinha('hipotaxe', 'a hipotaxe carrega o período', 'hypotaxis', 'Hypotaxis carries the period', 'hipotaxis', 'La hipotaxis carga el período', 'hypotaxe', 'L hypotaxe porte la période', 'ipotassi', 'L ipotassi porta il periodo', 'Hypotaxe', 'Die Hypotaxe trägt die Periode'),
                        dlinha('não modernize', 'não modernize a cadência', 'do not modernise', 'Do not modernise the cadence', 'no modernices', 'No modernices la cadencia', 'ne modernise pas', 'Ne modernise pas la cadence', 'non modernizzare', 'Non modernizzare la cadenza', 'nicht modernisieren', 'Modernisiere die Kadenz nicht'),
                    ],
                ],
                [
                    'titulo' => 'O que se perde',
                    'teoria' => dteoria(
                        "anachronism · false friend · the grain · leave the rust\nAn anachronism is worse than a false friend. Keep the grain of the age. Leave the rust on the noun.",
                        "anacronismo · falso amigo · el grano · deja el óxido\nUn anacronismo es peor que un falso amigo. Conserva el grano de la época. Deja el óxido en el sustantivo.",
                        "anachronisme · faux ami · le grain · laisse la rouille\nUn anachronisme est pire qu un faux ami. Garde le grain de l époque. Laisse la rouille sur le nom.",
                        "anacronismo · falso amico · la grana · lascia la ruggine\nUn anacronismo è peggio di un falso amico. Conserva la grana dell epoca. Lascia la ruggine sul nome.",
                        "Anachronismus · falscher Freund · die Maserung · lass den Rost\nEin Anachronismus ist schlimmer als ein falscher Freund. Bewahre die Maserung der Zeit. Lass den Rost am Substantiv."
                    ),
                    'itens' => [
                        dlinha('anacronismo', 'um anacronismo é pior que um falso amigo', 'anachronism', 'An anachronism is worse than a false friend', 'anacronismo', 'Un anacronismo es peor que un falso amigo', 'anachronisme', 'Un anachronisme est pire qu un faux ami', 'anacronismo', 'Un anacronismo è peggio di un falso amico', 'Anachronismus', 'Ein Anachronismus ist schlimmer als ein falscher Freund'),
                        dlinha('falso amigo', 'o falso amigo parece ajuda', 'false friend', 'The false friend looks like help', 'falso amigo', 'El falso amigo parece ayuda', 'faux ami', 'Le faux ami a l air d une aide', 'falso amico', 'Il falso amico sembra un aiuto', 'falscher Freund', 'Der falsche Freund sieht nach Hilfe aus'),
                        dlinha('o grão', 'conserve o grão da época', 'the grain', 'Keep the grain of the age', 'el grano', 'Conserva el grano de la época', 'le grain', 'Garde le grain de l époque', 'la grana', 'Conserva la grana dell epoca', 'die Maserung', 'Bewahre die Maserung der Zeit'),
                        dlinha('deixe a ferrugem', 'deixe a ferrugem no substantivo', 'leave the rust', 'Leave the rust on the noun', 'deja el óxido', 'Deja el óxido en el sustantivo', 'laisse la rouille', 'Laisse la rouille sur le nom', 'lascia la ruggine', 'Lascia la ruggine sul nome', 'lass den Rost', 'Lass den Rost am Substantiv'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Depoimento sob juramento C2',
            'desc' => 'O que você sabe, o que não sabe, o que lhe disseram.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'A distinção',
                    'teoria' => dteoria(
                        "to my knowledge · I do not recall · I was told · if I may finish\nTo my knowledge I was not there. I do not recall the date. I was told later. If I may finish the answer.",
                        "que yo sepa · no recuerdo · me dijeron · si me deja terminar\nQue yo sepa yo no estaba. No recuerdo la fecha. Me dijeron después. Si me deja terminar la respuesta.",
                        "à ma connaissance · je ne me souviens pas · on m a dit · si je puis achever\nÀ ma connaissance je n y étais pas. Je ne me souviens pas de la date. On m a dit plus tard. Si je puis achever la réponse.",
                        "per quanto mi risulta · non ricordo · mi è stato detto · se posso finire\nPer quanto mi risulta non c ero. Non ricordo la data. Mi è stato detto dopo. Se posso finire la risposta.",
                        "meines Wissens · ich erinnere mich nicht · man sagte mir · wenn ich ausreden darf\nMeines Wissens war ich nicht da. Ich erinnere mich nicht an das Datum. Man sagte es mir später. Wenn ich die Antwort ausreden darf."
                    ),
                    'itens' => [
                        dlinha('pelo que sei', 'pelo que sei eu não estava', 'to my knowledge', 'To my knowledge I was not there', 'que yo sepa', 'Que yo sepa yo no estaba', 'à ma connaissance', 'À ma connaissance je n y étais pas', 'per quanto mi risulta', 'Per quanto mi risulta non c ero', 'meines Wissens', 'Meines Wissens war ich nicht da'),
                        dlinha('não me recordo', 'não me recordo da data', 'I do not recall', 'I do not recall the date', 'no recuerdo', 'No recuerdo la fecha', 'je ne me souviens pas', 'Je ne me souviens pas de la date', 'non ricordo', 'Non ricordo la data', 'ich erinnere mich nicht', 'Ich erinnere mich nicht an das Datum'),
                        dlinha('me disseram', 'me disseram depois', 'I was told', 'I was told later', 'me dijeron', 'Me dijeron después', 'on m a dit', 'On m a dit plus tard', 'mi è stato detto', 'Mi è stato detto dopo', 'man sagte mir', 'Man sagte es mir später'),
                        dlinha('se me permitem terminar', 'se me permitem terminar a resposta', 'if I may finish', 'If I may finish the answer', 'si me deja terminar', 'Si me deja terminar la respuesta', 'si je puis achever', 'Si je puis achever la réponse', 'se posso finire', 'Se posso finire la risposta', 'wenn ich ausreden darf', 'Wenn ich die Antwort ausreden darf'),
                    ],
                ],
                [
                    'titulo' => 'O que não se inventa',
                    'teoria' => dteoria(
                        "I will not speculate · that is a characterisation · I stand by · the record shows\nI will not speculate. That is a characterisation, not a fact. I stand by my earlier answer. The record shows the date.",
                        "no voy a especular · eso es una caracterización · me ratifico · el expediente muestra\nNo voy a especular. Eso es una caracterización, no un hecho. Me ratifico en la respuesta anterior. El expediente muestra la fecha.",
                        "je ne spéculerai pas · c est une caractérisation · je maintiens · le dossier montre\nJe ne spéculerai pas. C est une caractérisation, pas un fait. Je maintiens ma réponse antérieure. Le dossier montre la date.",
                        "non speculerò · è una caratterizzazione · resto fermo · il fascicolo mostra\nNon speculerò. È una caratterizzazione, non un fatto. Resto fermo sulla risposta precedente. Il fascicolo mostra la data.",
                        "ich werde nicht spekulieren · das ist eine Charakterisierung · ich bleibe dabei · die Akte zeigt\nIch werde nicht spekulieren. Das ist eine Charakterisierung, keine Tatsache. Ich bleibe bei der früheren Antwort. Die Akte zeigt das Datum."
                    ),
                    'itens' => [
                        dlinha('não vou especular', 'não vou especular', 'I will not speculate', 'I will not speculate', 'no voy a especular', 'No voy a especular', 'je ne spéculerai pas', 'Je ne spéculerai pas', 'non speculerò', 'Non speculerò', 'ich werde nicht spekulieren', 'Ich werde nicht spekulieren'),
                        dlinha('caracterização', 'isso é caracterização, não fato', 'characterisation', 'That is a characterisation not a fact', 'caracterización', 'Eso es una caracterización no un hecho', 'caractérisation', 'C est une caractérisation pas un fait', 'caratterizzazione', 'È una caratterizzazione non un fatto', 'Charakterisierung', 'Das ist eine Charakterisierung keine Tatsache'),
                        dlinha('mantenho', 'mantenho a resposta anterior', 'I stand by', 'I stand by my earlier answer', 'me ratifico', 'Me ratifico en la respuesta anterior', 'je maintiens', 'Je maintiens ma réponse antérieure', 'resto fermo', 'Resto fermo sulla risposta precedente', 'ich bleibe dabei', 'Ich bleibe bei der früheren Antwort'),
                        dlinha('os autos mostram', 'os autos mostram a data', 'the record shows', 'The record shows the date', 'el expediente muestra', 'El expediente muestra la fecha', 'le dossier montre', 'Le dossier montre la date', 'il fascicolo mostra', 'Il fascicolo mostra la data', 'die Akte zeigt', 'Die Akte zeigt das Datum'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Traduzir humor C2',
            'desc' => 'O calembur, o que se perde e o equivalente, não o calco.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'O calembur',
                    'teoria' => dteoria(
                        "pun · equivalent · not a calque · the laugh has to move\nA pun rarely travels. Find an equivalent, not a calque. The laugh has to move, not the letters.",
                        "calambur · equivalente · no un calco · la risa tiene que moverse\nUn calambur rara vez viaja. Busca un equivalente, no un calco. La risa tiene que moverse, no las letras.",
                        "calembour · équivalent · pas un calque · le rire doit bouger\nUn calembour voyage rarement. Trouve un équivalent, pas un calque. Le rire doit bouger, pas les lettres.",
                        "calembour · equivalente · non un calco · la risata deve muoversi\nUn calembour raramente viaggia. Trova un equivalente, non un calco. La risata deve muoversi, non le lettere.",
                        "Wortspiel · Entsprechung · kein Kalke · das Lachen muss wandern\nEin Wortspiel reist selten. Finde eine Entsprechung, keinen Kalke. Das Lachen muss wandern, nicht die Buchstaben."
                    ),
                    'itens' => [
                        dlinha('trocadilho', 'o trocadilho quase não viaja', 'pun', 'A pun rarely travels', 'calambur', 'Un calambur rara vez viaja', 'calembour', 'Un calembour voyage rarement', 'calembour', 'Un calembour raramente viaggia', 'Wortspiel', 'Ein Wortspiel reist selten'),
                        dlinha('equivalente', 'busque um equivalente', 'equivalent', 'Find an equivalent', 'equivalente', 'Busca un equivalente', 'équivalent', 'Trouve un équivalent', 'equivalente', 'Trova un equivalente', 'Entsprechung', 'Finde eine Entsprechung'),
                        dlinha('não um calco', 'não faça um calco', 'not a calque', 'Not a calque', 'no un calco', 'No un calco', 'pas un calque', 'Pas un calque', 'non un calco', 'Non un calco', 'kein Kalke', 'Kein Kalke'),
                        dlinha('o riso tem de mudar', 'o riso tem de mudar de lugar', 'the laugh has to move', 'The laugh has to move', 'la risa tiene que moverse', 'La risa tiene que moverse', 'le rire doit bouger', 'Le rire doit bouger', 'la risata deve muoversi', 'La risata deve muoversi', 'das Lachen muss wandern', 'Das Lachen muss wandern'),
                    ],
                ],
                [
                    'titulo' => 'Quando se perde',
                    'teoria' => dteoria(
                        "untranslatable · footnote kills it · compensate later · the room\nIf it is untranslatable, a footnote kills it. Compensate later in the scene. Play to the room you have.",
                        "intraducible · la nota lo mata · compensa después · la sala\nSi es intraducible, la nota lo mata. Compensa después en la escena. Juega a la sala que tienes.",
                        "intraduisible · la note le tue · compenser plus loin · la salle\nS il est intraduisible, la note le tue. Compense plus loin dans la scène. Joue la salle que tu as.",
                        "intraducibile · la nota lo uccide · compensare dopo · la sala\nSe è intraducibile, la nota lo uccide. Compensa dopo nella scena. Gioca la sala che hai.",
                        "unübersetzbar · die Fußnote tötet es · später ausgleichen · der Raum\nIst es unübersetzbar, tötet die Fußnote es. Gleiche später in der Szene aus. Spiel den Raum, den du hast."
                    ),
                    'itens' => [
                        dlinha('intraduzível', 'se for intraduzível, a nota mata', 'untranslatable', 'If it is untranslatable a footnote kills it', 'intraducible', 'Si es intraducible la nota lo mata', 'intraduisible', 'S il est intraduisible la note le tue', 'intraducibile', 'Se è intraducibile la nota lo uccide', 'unübersetzbar', 'Ist es unübersetzbar tötet die Fußnote es'),
                        dlinha('a nota mata', 'a nota de rodapé mata o gag', 'footnote kills it', 'A footnote kills the gag', 'la nota lo mata', 'La nota al pie mata el gag', 'la note le tue', 'La note tue le gag', 'la nota lo uccide', 'La nota uccide il gag', 'die Fußnote tötet es', 'Die Fußnote tötet den Gag'),
                        dlinha('compensar depois', 'compense depois na cena', 'compensate later', 'Compensate later in the scene', 'compensa después', 'Compensa después en la escena', 'compenser plus loin', 'Compense plus loin dans la scène', 'compensare dopo', 'Compensa dopo nella scena', 'später ausgleichen', 'Gleiche später in der Szene aus'),
                        dlinha('a sala', 'jogue para a sala que você tem', 'the room', 'Play to the room you have', 'la sala', 'Juega a la sala que tienes', 'la salle', 'Joue la salle que tu as', 'la sala', 'Gioca la sala che hai', 'der Raum', 'Spiel den Raum den du hast'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Editorial contra reportagem C2',
            'desc' => 'Onde está a tese, onde está o fato, e o que o lead não pode misturar.',
            'nivel' => 'C2',
            'aulas' => [
                [
                    'titulo' => 'Os dois gêneros',
                    'teoria' => dteoria(
                        "news · opinion · the wall · labelled\nNews reports. Opinion argues. Keep the wall. If it is an editorial it must be labelled as such.",
                        "noticia · opinión · el muro · rotulado\nLa noticia informa. La opinión argumenta. Mantén el muro. Si es editorial, que esté rotulado.",
                        "info · opinion · le mur · étiqueté\nL info raconte. L opinion argumente. Tiens le mur. Si c est un éditorial, qu il soit étiqueté.",
                        "notizia · opinione · il muro · etichettato\nLa notizia racconta. L opinione argomenta. Tieni il muro. Se è un editoriale, sia etichettato.",
                        "Nachricht · Meinung · die Mauer · gekennzeichnet\nDie Nachricht berichtet. Die Meinung argumentiert. Halte die Mauer. Ist es ein Leitartikel, muss es gekennzeichnet sein."
                    ),
                    'itens' => [
                        dlinha('notícia', 'a notícia relata', 'news', 'News reports', 'noticia', 'La noticia informa', 'info', 'L info raconte', 'notizia', 'La notizia racconta', 'Nachricht', 'Die Nachricht berichtet'),
                        dlinha('opinião', 'a opinião argumenta', 'opinion', 'Opinion argues', 'opinión', 'La opinión argumenta', 'opinion', 'L opinion argumente', 'opinione', 'L opinione argomenta', 'Meinung', 'Die Meinung argumentiert'),
                        dlinha('o muro', 'mantenha o muro entre os dois', 'the wall', 'Keep the wall between the two', 'el muro', 'Mantén el muro entre los dos', 'le mur', 'Tiens le mur entre les deux', 'il muro', 'Tieni il muro tra i due', 'die Mauer', 'Halte die Mauer zwischen beiden'),
                        dlinha('rotulado', 'o editorial tem de estar rotulado', 'labelled', 'The editorial must be labelled', 'rotulado', 'El editorial debe estar rotulado', 'étiqueté', 'L éditorial doit être étiqueté', 'etichettato', 'L editoriale deve essere etichettato', 'gekennzeichnet', 'Der Leitartikel muss gekennzeichnet sein'),
                    ],
                ],
                [
                    'titulo' => 'O lead',
                    'teoria' => dteoria(
                        "lead · buried lede · loaded verb · who benefits\nDo not bury the lede in a loaded verb. Ask who benefits from this framing. The lead is a fact, not a thesis.",
                        "entrada · entrada enterrada · verbo cargado · a quién beneficia\nNo entierres la entrada en un verbo cargado. Pregunta a quién beneficia este encuadre. La entrada es un hecho, no una tesis.",
                        "attaque · attaque enterrée · verbe chargé · à qui ça profite\nN enterre pas l attaque dans un verbe chargé. Demande à qui profite ce cadrage. L attaque est un fait, pas une thèse.",
                        "attacco · attacco sepolto · verbo carico · a chi giova\nNon seppellire l attacco in un verbo carico. Chiedi a chi giova questo inquadramento. L attacco è un fatto, non una tesi.",
                        "Lead · vergrabenes Lead · geladenes Verb · wem nützt es\nBegrab das Lead nicht in einem geladenen Verb. Frag, wem dieser Rahmen nützt. Das Lead ist eine Tatsache, keine These."
                    ),
                    'itens' => [
                        dlinha('lead', 'o lead é fato, não tese', 'lead', 'The lead is a fact not a thesis', 'entrada', 'La entrada es un hecho no una tesis', 'attaque', 'L attaque est un fait pas une thèse', 'attacco', 'L attacco è un fatto non una tesi', 'Lead', 'Das Lead ist eine Tatsache keine These'),
                        dlinha('lead enterrado', 'não enterre o lead no adjetivo', 'buried lede', 'Do not bury the lede in the adjective', 'entrada enterrada', 'No entierres la entrada en el adjetivo', 'attaque enterrée', 'N enterre pas l attaque dans l adjectif', 'attacco sepolto', 'Non seppellire l attacco nell aggettivo', 'vergrabenes Lead', 'Begrab das Lead nicht im Adjektiv'),
                        dlinha('verbo carregado', 'o verbo já está carregado', 'loaded verb', 'The verb is already loaded', 'verbo cargado', 'El verbo ya está cargado', 'verbe chargé', 'Le verbe est déjà chargé', 'verbo carico', 'Il verbo è già carico', 'geladenes Verb', 'Das Verb ist schon geladen'),
                        dlinha('quem se beneficia', 'quem se beneficia deste enquadramento', 'who benefits', 'Who benefits from this framing', 'a quién beneficia', 'A quién beneficia este encuadre', 'à qui ça profite', 'À qui profite ce cadrage', 'a chi giova', 'A chi giova questo inquadramento', 'wem nützt es', 'Wem nützt dieser Rahmen'),
                    ],
                ],
            ],
        ],
        [
            'titulo' => 'Sustentabilidade no trabalho B2',
            'desc' => 'Viagem, lixo, o que a empresa mede e o que é só cartaz.',
            'nivel' => 'B2',
            'aulas' => [
                [
                    'titulo' => 'O que se mede',
                    'teoria' => dteoria(
                        "scope three · commute · offset · greenwash\nScope three includes the commute. Offsets are not a licence. Call out greenwash when the poster is louder than the metric.",
                        "alcance tres · desplazamiento · compensación · lavado verde\nEl alcance tres incluye el desplazamiento. Las compensaciones no son una licencia. Señala el lavado verde cuando el cartel grita más que la métrica.",
                        "scope trois · trajet · compensation · écoblanchiment\nLe scope trois inclut le trajet. Les compensations ne sont pas une licence. Dénonce l écoblanchiment quand l affiche crie plus que l indicateur.",
                        "scope tre · tragitto · compensazione · greenwash\nLo scope tre include il tragitto. Le compensazioni non sono una licenza. Segnala il greenwash quando il manifesto grida più della metrica.",
                        "Scope drei · Pendeln · Ausgleich · Greenwashing\nScope drei umfasst das Pendeln. Ausgleich ist keine Lizenz. Nenn Greenwashing, wenn das Plakat lauter ist als die Kennzahl."
                    ),
                    'itens' => [
                        dlinha('escopo três', 'o escopo três inclui o deslocamento', 'scope three', 'Scope three includes the commute', 'alcance tres', 'El alcance tres incluye el desplazamiento', 'scope trois', 'Le scope trois inclut le trajet', 'scope tre', 'Lo scope tre include il tragitto', 'Scope drei', 'Scope drei umfasst das Pendeln'),
                        dlinha('deslocamento', 'o deslocamento conta', 'commute', 'The commute counts', 'desplazamiento', 'El desplazamiento cuenta', 'trajet', 'Le trajet compte', 'tragitto', 'Il tragitto conta', 'Pendeln', 'Das Pendeln zählt'),
                        dlinha('compensação', 'compensação não é licença', 'offset', 'Offsets are not a licence', 'compensación', 'Las compensaciones no son una licencia', 'compensation', 'Les compensations ne sont pas une licence', 'compensazione', 'Le compensazioni non sono una licenza', 'Ausgleich', 'Ausgleich ist keine Lizenz'),
                        dlinha('lavagem verde', 'isso é lavagem verde', 'greenwash', 'That is greenwash', 'lavado verde', 'Eso es lavado verde', 'écoblanchiment', 'C est de l écoblanchiment', 'greenwash', 'Questo è greenwash', 'Greenwashing', 'Das ist Greenwashing'),
                    ],
                ],
                [
                    'titulo' => 'O que muda na mesa',
                    'teoria' => dteoria(
                        "fly less · residual waste · supplier · the poster\nFly less for internal meetings. Residual waste is still waste. Ask the supplier, not the poster.",
                        "vuela menos · residuo · proveedor · el cartel\nVuela menos para reuniones internas. El residuo sigue siendo residuo. Pregunta al proveedor, no al cartel.",
                        "vole moins · déchet résiduel · fournisseur · l affiche\nVole moins pour les réunions internes. Le déchet résiduel reste un déchet. Demande au fournisseur, pas à l affiche.",
                        "vola di meno · rifiuto residuo · fornitore · il manifesto\nVola di meno per le riunioni interne. Il rifiuto residuo resta un rifiuto. Chiedi al fornitore, non al manifesto.",
                        "weniger fliegen · Restmüll · Lieferant · das Plakat\nFlieg weniger zu internen Terminen. Restmüll bleibt Müll. Frag den Lieferanten, nicht das Plakat."
                    ),
                    'itens' => [
                        dlinha('voar menos', 'voe menos em reunião interna', 'fly less', 'Fly less for internal meetings', 'vuela menos', 'Vuela menos para reuniones internas', 'vole moins', 'Vole moins pour les réunions internes', 'vola di meno', 'Vola di meno per le riunioni interne', 'weniger fliegen', 'Flieg weniger zu internen Terminen'),
                        dlinha('resíduo', 'resíduo ainda é lixo', 'residual waste', 'Residual waste is still waste', 'residuo', 'El residuo sigue siendo residuo', 'déchet résiduel', 'Le déchet résiduel reste un déchet', 'rifiuto residuo', 'Il rifiuto residuo resta un rifiuto', 'Restmüll', 'Restmüll bleibt Müll'),
                        dlinha('fornecedor', 'pergunte ao fornecedor', 'supplier', 'Ask the supplier', 'proveedor', 'Pregunta al proveedor', 'fournisseur', 'Demande au fournisseur', 'fornitore', 'Chiedi al fornitore', 'Lieferant', 'Frag den Lieferanten'),
                        dlinha('o cartaz', 'não pergunte ao cartaz', 'the poster', 'Do not ask the poster', 'el cartel', 'No preguntes al cartel', 'l affiche', 'Ne demande pas à l affiche', 'il manifesto', 'Non chiedere al manifesto', 'das Plakat', 'Frag nicht das Plakat'),
                    ],
                ],
            ],
        ],
    ];
}
