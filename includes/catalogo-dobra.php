<?php

function dlinha(
    string $pt,
    string $ptFrase,
    string $enT,
    string $enF,
    string $esT,
    string $esF,
    string $frT,
    string $frF,
    string $itT,
    string $itF,
    string $deT,
    string $deF
): array {
    return [
        'en' => [$enT, $pt, $enF, $ptFrase],
        'es' => [$esT, $pt, $esF, $ptFrase],
        'fr' => [$frT, $pt, $frF, $ptFrase],
        'it' => [$itT, $pt, $itF, $ptFrase],
        'de' => [$deT, $pt, $deF, $ptFrase],
    ];
}

function dteoria(string $en, string $es, string $fr, string $it, string $de): array
{
    return ['en' => $en, 'es' => $es, 'fr' => $fr, 'it' => $it, 'de' => $de];
}

function dobra_montar(string $lang, array $specs): array
{
    $out = [];
    foreach ($specs as $u) {
        $aulas = [];
        foreach ($u['aulas'] as $aula) {
            $itens = [];
            foreach ($aula['itens'] as $linha) {
                $row = $linha[$lang];
                $itens[] = vitem($row[0], $row[1], $row[2], $row[3]);
            }
            $aulas[] = aula_lista($aula['titulo'], $aula['teoria'][$lang], $itens);
        }
        $out[] = uni_lista($u['titulo'], $u['desc'], $u['nivel'], $aulas);
    }

    return $out;
}

function unidades_dobra_por_codigo(string $codigo): array
{
    $unidades = array_merge(dobra_a1(), dobra_a2(), dobra_bc());
    $lang = in_array($codigo, ['en', 'es', 'fr', 'it', 'de'], true) ? $codigo : 'en';

    return [
        'palavras' => dobra_palavras($lang),
        'unidades' => dobra_montar($lang, $unidades),
    ];
}

function dobra_palavras(string $lang): array
{
    $mapa = [
        'en' => [
            ['Thirty', 'Trinta', 'I am thirty years old.', 'A1'],
            ['Umbrella', 'Guarda-chuva', 'I need an umbrella.', 'A1'],
            ['Landlord', 'Locador', 'I called the landlord.', 'A2'],
            ['Should', 'Deveria', 'You should rest today.', 'B1'],
            ['Negotiate', 'Negociar', 'We need to negotiate the fee.', 'B2'],
            ['Thesis', 'Tese', 'The thesis is due in May.', 'C1'],
            ['Ambiguous', 'Ambíguo', 'The closing line is deliberately ambiguous.', 'C2'],
        ],
        'es' => [
            ['Treinta', 'Trinta', 'Tengo treinta años.', 'A1'],
            ['Paraguas', 'Guarda-chuva', 'Necesito un paraguas.', 'A1'],
            ['Casero', 'Locador', 'Llamé al casero.', 'A2'],
            ['Deberías', 'Deveria', 'Deberías descansar hoy.', 'B1'],
            ['Negociar', 'Negociar', 'Hay que negociar la tarifa.', 'B2'],
            ['Tesis', 'Tese', 'La tesis vence en mayo.', 'C1'],
            ['Ambiguo', 'Ambíguo', 'El cierre es deliberadamente ambiguo.', 'C2'],
        ],
        'fr' => [
            ['Trente', 'Trinta', 'J’ai trente ans.', 'A1'],
            ['Parapluie', 'Guarda-chuva', 'J’ai besoin d’un parapluie.', 'A1'],
            ['Propriétaire', 'Locador', 'J’ai appelé le propriétaire.', 'A2'],
            ['Devrais', 'Deveria', 'Tu devrais te reposer aujourd’hui.', 'B1'],
            ['Négocier', 'Negociar', 'Il faut négocier les frais.', 'B2'],
            ['Thèse', 'Tese', 'La thèse est pour mai.', 'C1'],
            ['Ambigu', 'Ambíguo', 'La chute est volontairement ambiguë.', 'C2'],
        ],
        'it' => [
            ['Trenta', 'Trinta', 'Ho trent’anni.', 'A1'],
            ['Ombrello', 'Guarda-chuva', 'Mi serve un ombrello.', 'A1'],
            ['Proprietario', 'Locador', 'Ho chiamato il proprietario.', 'A2'],
            ['Dovresti', 'Deveria', 'Dovresti riposarti oggi.', 'B1'],
            ['Trattare', 'Negociar', 'Dobbiamo trattare la tariffa.', 'B2'],
            ['Tesi', 'Tese', 'La tesi scade a maggio.', 'C1'],
            ['Ambiguo', 'Ambíguo', 'La chiusura è volutamente ambigua.', 'C2'],
        ],
        'de' => [
            ['Dreißig', 'Trinta', 'Ich bin dreißig Jahre alt.', 'A1'],
            ['Schirm', 'Guarda-chuva', 'Ich brauche einen Schirm.', 'A1'],
            ['Vermieter', 'Locador', 'Ich habe den Vermieter angerufen.', 'A2'],
            ['Solltest', 'Deveria', 'Du solltest heute ruhen.', 'B1'],
            ['Verhandeln', 'Negociar', 'Wir müssen die Gebühr verhandeln.', 'B2'],
            ['These', 'Tese', 'Die Arbeit ist im Mai fällig.', 'C1'],
            ['Mehrdeutig', 'Ambíguo', 'Der Schluss ist bewusst mehrdeutig.', 'C2'],
        ],
    ];

    return $mapa[$lang] ?? $mapa['en'];
}

require_once __DIR__ . '/catalogo-dobra-a.php';
require_once __DIR__ . '/catalogo-dobra-bc.php';
