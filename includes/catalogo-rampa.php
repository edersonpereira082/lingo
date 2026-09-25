<?php

function unidades_rampa_por_codigo(string $codigo): array
{
    $lang = in_array($codigo, ['en', 'es', 'fr', 'it', 'de'], true) ? $codigo : 'en';
    $specs = array_merge(rampa_a1(), rampa_a2(), rampa_b1(), rampa_b2(), rampa_c());

    return [
        'palavras' => rampa_palavras($lang),
        'unidades' => dobra_montar($lang, rampa_hidratar($specs)),
    ];
}

function rampa_palavras(string $lang): array
{
    $mapa = [
        'en' => [
            ['Loaf', 'Pão', 'I want a loaf.', 'A1'],
            ['Receipt', 'Recibo', 'Keep the receipt.', 'A2'],
            ['Landlord', 'Locador', 'I emailed the landlord.', 'B1'],
            ['Scope', 'Escopo', 'That is outside the scope.', 'B2'],
            ['Caveat', 'Ressalva', 'The main caveat is timing.', 'C1'],
            ['Implicature', 'Implicatura', 'The implicature does the work.', 'C2'],
        ],
        'es' => [
            ['Barra', 'Pão', 'Quiero una barra.', 'A1'],
            ['Recibo', 'Recibo', 'Guarda el recibo.', 'A2'],
            ['Casero', 'Locador', 'Escribí al casero.', 'B1'],
            ['Alcance', 'Escopo', 'Eso queda fuera de alcance.', 'B2'],
            ['Salvedad', 'Ressalva', 'La salvedad principal es el plazo.', 'C1'],
            ['Implicatura', 'Implicatura', 'La implicatura hace el trabajo.', 'C2'],
        ],
        'fr' => [
            ['Pain', 'Pão', 'Je veux une baguette.', 'A1'],
            ['Reçu', 'Recibo', 'Garde le reçu.', 'A2'],
            ['Proprio', 'Locador', 'J ai écrit au proprio.', 'B1'],
            ['Périmètre', 'Escopo', 'C est hors périmètre.', 'B2'],
            ['Réserve', 'Ressalva', 'La réserve principale est le délai.', 'C1'],
            ['Implicature', 'Implicatura', 'L implicature fait le travail.', 'C2'],
        ],
        'it' => [
            ['Pagnotta', 'Pão', 'Voglio una pagnotta.', 'A1'],
            ['Scontrino', 'Recibo', 'Tieni lo scontrino.', 'A2'],
            ['Proprietario', 'Locador', 'Ho scritto al proprietario.', 'B1'],
            ['Perimetro', 'Escopo', 'È fuori perimetro.', 'B2'],
            ['Riserva', 'Ressalva', 'La riserva principale è il tempo.', 'C1'],
            ['Implicatura', 'Implicatura', 'L implicatura fa il lavoro.', 'C2'],
        ],
        'de' => [
            ['Laib', 'Pão', 'Ich will einen Laib.', 'A1'],
            ['Beleg', 'Recibo', 'Behalt den Beleg.', 'A2'],
            ['Vermieter', 'Locador', 'Ich schrieb dem Vermieter.', 'B1'],
            ['Rahmen', 'Escopo', 'Das liegt außerhalb des Rahmens.', 'B2'],
            ['Vorbehalt', 'Ressalva', 'Der Hauptvorbehalt ist die Zeit.', 'C1'],
            ['Implikatur', 'Implicatura', 'Die Implikatur leistet die Arbeit.', 'C2'],
        ],
    ];

    return $mapa[$lang] ?? $mapa['en'];
}

function rampa_hidratar(array $specs): array
{
    $out = [];
    foreach ($specs as $u) {
        $aulas = [];
        foreach ($u[3] as $ai => $aula) {
            $itens = [];
            foreach ($aula[1] as $pi => $pipe) {
                $t = explode('|', $pipe);
                if (count($t) < 6) {
                    continue;
                }
                $itens[] = rampa_item($t, (string) $u[2], $ai, $pi);
            }
            if (count($itens) < 4) {
                continue;
            }
            $aulas[] = [
                'titulo' => $aula[0],
                'teoria' => rampa_teoria($aula[1], (string) $u[2]),
                'itens' => $itens,
            ];
        }
        if ($aulas === []) {
            continue;
        }
        $out[] = [
            'titulo' => $u[0],
            'desc' => $u[1],
            'nivel' => $u[2],
            'aulas' => $aulas,
        ];
    }

    return $out;
}

function rampa_teoria(array $pipes, string $nivel): array
{
    $cols = [];
    foreach ($pipes as $pipe) {
        $p = explode('|', $pipe);
        if (count($p) >= 6) {
            $cols[] = $p;
        }
    }
    $join = static function (int $i) use ($cols): string {
        return implode(' · ', array_column($cols, $i));
    };
    $amostra = $cols[0] ?? ['x', 'x', 'x', 'x', 'x', 'x'];
    $f = rampa_frases($amostra, $nivel, 0);

    return dteoria(
        $join(1) . "\n" . $f['en'],
        $join(2) . "\n" . $f['es'],
        $join(3) . "\n" . $f['fr'],
        $join(4) . "\n" . $f['it'],
        $join(5) . "\n" . $f['de']
    );
}

function rampa_item(array $t, string $nivel, int $ai, int $pi): array
{
    $f = rampa_frases($t, $nivel, ($ai * 4 + $pi) % 8);

    return dlinha($t[0], $f['pt'], $t[1], $f['en'], $t[2], $f['es'], $t[3], $f['fr'], $t[4], $f['it'], $t[5], $f['de']);
}

function rampa_frases(array $t, string $nivel, int $padrao): array
{
    $n = strtoupper(substr($nivel, 0, 2));
    $pt = $t[0];
    $en = $t[1];
    $es = $t[2];
    $fr = $t[3];
    $it = $t[4];
    $de = $t[5];
    $mapas = [
        'A1' => [
            ['quero ' . $pt, 'I want ' . $en, 'Quiero ' . $es, 'Je veux ' . $fr, 'Voglio ' . $it, 'Ich will ' . $de],
            ['isto é ' . $pt, 'This is ' . $en, 'Esto es ' . $es, 'C est ' . $fr, 'Questo è ' . $it, 'Das ist ' . $de],
            ['onde está ' . $pt, 'Where is the ' . $en, 'Dónde está ' . $es, 'Où est ' . $fr, 'Dov è ' . $it, 'Wo ist ' . $de],
            ['eu gosto de ' . $pt, 'I like ' . $en, 'Me gusta ' . $es, 'J aime ' . $fr, 'Mi piace ' . $it, 'Ich mag ' . $de],
            ['eu tenho ' . $pt, 'I have ' . $en, 'Tengo ' . $es, 'J ai ' . $fr, 'Ho ' . $it, 'Ich habe ' . $de],
            ['me dá ' . $pt, 'Give me ' . $en, 'Dame ' . $es, 'Donne-moi ' . $fr, 'Dammi ' . $it, 'Gib mir ' . $de],
            ['é pequeno ' . $pt, $en . ' is small', $es . ' es pequeño', $fr . ' est petit', $it . ' è piccolo', $de . ' ist klein'],
            ['eu vejo ' . $pt, 'I see ' . $en, 'Veo ' . $es, 'Je vois ' . $fr, 'Vedo ' . $it, 'Ich sehe ' . $de],
        ],
        'A2' => [
            ['eu comprei ' . $pt, 'I bought ' . $en, 'Compré ' . $es, 'J ai acheté ' . $fr, 'Ho comprato ' . $it, 'Ich habe ' . $de . ' gekauft'],
            ['precisamos de ' . $pt, 'We need ' . $en, 'Necesitamos ' . $es, 'Il nous faut ' . $fr, 'Ci serve ' . $it, 'Wir brauchen ' . $de],
            ['você pode trazer ' . $pt, 'Can you bring ' . $en, 'Puedes traer ' . $es, 'Tu peux apporter ' . $fr, 'Puoi portare ' . $it, 'Kannst du ' . $de . ' mitbringen'],
            ['fica perto de ' . $pt, 'It is near the ' . $en, 'Queda cerca de ' . $es, 'C est près de ' . $fr, 'È vicino a ' . $it, 'Es ist nah bei ' . $de],
            ['ontem usei ' . $pt, 'Yesterday I used ' . $en, 'Ayer usé ' . $es, 'Hier j ai utilisé ' . $fr, 'Ieri ho usato ' . $it, 'Gestern nutzte ich ' . $de],
            ['vamos marcar ' . $pt, 'Let us book ' . $en, 'Vamos a reservar ' . $es, 'On réserve ' . $fr, 'Prenotiamo ' . $it, 'Lass uns ' . $de . ' buchen'],
            ['está fechado ' . $pt, 'The ' . $en . ' is closed', $es . ' está cerrado', $fr . ' est fermé', $it . ' è chiuso', $de . ' ist zu'],
            ['me explica ' . $pt, 'Explain the ' . $en, 'Explícame ' . $es, 'Explique-moi ' . $fr, 'Spiegami ' . $it, 'Erklär mir ' . $de],
        ],
        'B1' => [
            ['eu gostaria de ' . $pt, 'I would like ' . $en, 'Me gustaría ' . $es, 'Je voudrais ' . $fr, 'Vorrei ' . $it, 'Ich möchte ' . $de],
            ['há um problema com ' . $pt, 'There is a problem with the ' . $en, 'Hay un problema con ' . $es, 'Il y a un problème avec ' . $fr, 'C è un problema con ' . $it, 'Es gibt ein Problem mit ' . $de],
            ['você poderia conferir ' . $pt, 'Could you check the ' . $en, 'Podrías revisar ' . $es, 'Tu pourrais vérifier ' . $fr, 'Potresti controllare ' . $it, 'Könntest du ' . $de . ' prüfen'],
            ['eu já paguei ' . $pt, 'I already paid for the ' . $en, 'Ya pagué ' . $es, 'J ai déjà payé ' . $fr, 'Ho già pagato ' . $it, 'Ich habe ' . $de . ' schon bezahlt'],
            ['não funciona ' . $pt, 'The ' . $en . ' does not work', $es . ' no funciona', $fr . ' ne marche pas', $it . ' non funziona', $de . ' funktioniert nicht'],
            ['posso mudar ' . $pt, 'Can I change the ' . $en, 'Puedo cambiar ' . $es, 'Je peux changer ' . $fr, 'Posso cambiare ' . $it, 'Kann ich ' . $de . ' ändern'],
            ['vamos deixar ' . $pt . ' para amanhã', 'Let us leave the ' . $en . ' for tomorrow', 'Dejemos ' . $es . ' para mañana', 'On laisse ' . $fr . ' pour demain', 'Lasciamo ' . $it . ' a domani', 'Lassen wir ' . $de . ' für morgen'],
            ['isso depende de ' . $pt, 'That depends on the ' . $en, 'Eso depende de ' . $es, 'Ça dépend de ' . $fr, 'Dipende da ' . $it, 'Das hängt von ' . $de . ' ab'],
        ],
        'B2' => [
            ['deveríamos revisar ' . $pt, 'We should review the ' . $en, 'Deberíamos revisar ' . $es, 'On devrait revoir ' . $fr, 'Dovremmo rivedere ' . $it, 'Wir sollten ' . $de . ' prüfen'],
            [$pt . ' está fora do recorte', 'The ' . $en . ' is out of scope', $es . ' queda fuera', $fr . ' est hors périmètre', $it . ' è fuori perimetro', $de . ' liegt außerhalb'],
            ['vamos deixar ' . $pt . ' de lado', 'Let us park the ' . $en, 'Aparkemos ' . $es, 'Mettons ' . $fr . ' de côté', 'Accantoniamo ' . $it, 'Parken wir ' . $de],
            ['quem responde por ' . $pt, 'Who owns the ' . $en, 'Quién responde por ' . $es, 'Qui est responsable de ' . $fr, 'Chi risponde di ' . $it, 'Wer verantwortet ' . $de],
            ['o risco está em ' . $pt, 'The risk is in the ' . $en, 'El riesgo está en ' . $es, 'Le risque est dans ' . $fr, 'Il rischio è in ' . $it, 'Das Risiko sitzt in ' . $de],
            ['preciso de um prazo para ' . $pt, 'I need a deadline for the ' . $en, 'Necesito un plazo para ' . $es, 'Il me faut une échéance pour ' . $fr, 'Mi serve una scadenza per ' . $it, 'Ich brauche eine Frist für ' . $de],
            ['isso não escala sem ' . $pt, 'That does not scale without ' . $en, 'Eso no escala sin ' . $es, 'Ça ne scale pas sans ' . $fr, 'Non scala senza ' . $it, 'Das skaliert nicht ohne ' . $de],
            ['manda o recorte de ' . $pt, 'Send the brief for the ' . $en, 'Manda el recorte de ' . $es, 'Envoie le brief de ' . $fr, 'Manda il brief di ' . $it, 'Schick das Briefing zu ' . $de],
        ],
        'C1' => [
            ['pelos fatos, ' . $pt . ' não se sustenta', 'On the facts the ' . $en . ' does not hold', 'Según los hechos ' . $es . ' no se sostiene', 'Au vu des faits ' . $fr . ' ne tient pas', 'Sui fatti ' . $it . ' non regge', 'Nach den Fakten hält ' . $de . ' nicht'],
            ['aconselhamos contra ' . $pt, 'We advise against the ' . $en, 'Aconsejamos contra ' . $es, 'Nous conseillons contre ' . $fr, 'Consigliamo contro ' . $it, 'Wir raten von ' . $de . ' ab'],
            [$pt . ' permanece uma ressalva', 'The ' . $en . ' remains a caveat', $es . ' sigue siendo una salvedad', $fr . ' reste une réserve', $it . ' resta una riserva', $de . ' bleibt ein Vorbehalt'],
            ['não especule sobre ' . $pt, 'Do not speculate about the ' . $en, 'No especules sobre ' . $es, 'Ne spéculez pas sur ' . $fr, 'Non speculare su ' . $it, 'Spekuliere nicht über ' . $de],
            ['o achado material é ' . $pt, 'The material finding is the ' . $en, 'El hallazgo material es ' . $es, 'Le constat matériel est ' . $fr, 'Il rilievo materiale è ' . $it, 'Der wesentliche Befund ist ' . $de],
            ['declare ' . $pt . ' na ata', 'Put the ' . $en . ' in the minutes', 'Pon ' . $es . ' en el acta', 'Mets ' . $fr . ' au procès-verbal', 'Metti ' . $it . ' a verbale', 'Setz ' . $de . ' ins Protokoll'],
            ['o efeito não intencional é ' . $pt, 'The unintended effect is the ' . $en, 'El efecto no deseado es ' . $es, 'L effet non voulu est ' . $fr, 'L effetto indesiderato è ' . $it, 'Der unbeabsichtigte Effekt ist ' . $de],
            ['segure a linha até ' . $pt, 'Hold the line until the ' . $en, 'Mantén la línea hasta ' . $es, 'Tiens la ligne jusqu à ' . $fr, 'Tieni la linea fino a ' . $it, 'Halte die Linie bis ' . $de],
        ],
        'C2' => [
            [$pt . ' faz o trabalho pragmático', 'The ' . $en . ' does the pragmatic work', $es . ' hace el trabajo pragmático', $fr . ' fait le travail pragmatique', $it . ' fa il lavoro pragmatico', $de . ' leistet die pragmatische Arbeit'],
            ['não modernize ' . $pt, 'Do not modernise the ' . $en, 'No modernices ' . $es, 'Ne modernise pas ' . $fr, 'Non modernizzare ' . $it, 'Modernisiere ' . $de . ' nicht'],
            [$pt . ' ainda quer dizer aquilo', 'The ' . $en . ' still means it', $es . ' igual lo dice', $fr . ' le dit quand même', $it . ' lo dice lo stesso', $de . ' meint es trotzdem'],
            ['nomeie ' . $pt . ', não esconda', 'Name the ' . $en . ' do not hide it', 'Nombra ' . $es . ' no lo escondas', 'Nomme ' . $fr . ' ne le cache pas', 'Nomina ' . $it . ' non nasconderlo', 'Nenn ' . $de . ' versteck es nicht'],
            ['a metáfora esconde ' . $pt, 'The metaphor hides the ' . $en, 'La metáfora esconde ' . $es, 'La métaphore cache ' . $fr, 'La metafora nasconde ' . $it, 'Die Metapher verbirgt ' . $de],
            ['confie no leitor em ' . $pt, 'Trust the reader on the ' . $en, 'Confía en el lector en ' . $es, 'Fais confiance au lecteur sur ' . $fr, 'Fidati del lettore su ' . $it, 'Trau dem Leser bei ' . $de],
            ['a passiva apaga ' . $pt, 'The passive erases the ' . $en, 'La pasiva borra ' . $es, 'Le passif efface ' . $fr, 'Il passivo cancella ' . $it, 'Das Passiv löscht ' . $de],
            ['deixe a ferrugem em ' . $pt, 'Leave the rust on the ' . $en, 'Deja el óxido en ' . $es, 'Laisse la rouille sur ' . $fr, 'Lascia la ruggine su ' . $it, 'Lass den Rost an ' . $de],
        ],
    ];
    $lista = $mapas[$n] ?? $mapas['A1'];
    $row = $lista[$padrao] ?? $lista[0];

    return ['pt' => $row[0], 'en' => $row[1], 'es' => $row[2], 'fr' => $row[3], 'it' => $row[4], 'de' => $row[5]];
}

require_once __DIR__ . '/catalogo-rampa-a1.php';
require_once __DIR__ . '/catalogo-rampa-a2.php';
require_once __DIR__ . '/catalogo-rampa-b.php';
require_once __DIR__ . '/catalogo-rampa-c.php';
