<?php

function unidades_alta_por_codigo(string $codigo): array
{
    $unidades = array_merge(alta_b(), alta_c());
    $lang = in_array($codigo, ['en', 'es', 'fr', 'it', 'de'], true) ? $codigo : 'en';

    return [
        'palavras' => alta_palavras($lang),
        'unidades' => dobra_montar($lang, $unidades),
    ];
}

function alta_palavras(string $lang): array
{
    $mapa = [
        'en' => [
            ['Vet', 'Veterinário', 'I need to take her to the vet.', 'B1'],
            ['Raise', 'Aumento', 'I would like to discuss a raise.', 'B2'],
            ['Dossier', 'Dossiê', 'The dossier is on your desk.', 'C1'],
            ['Euphemism', 'Eufemismo', 'That euphemism hides the cut.', 'C2'],
        ],
        'es' => [
            ['Veterinario', 'Veterinário', 'Tengo que llevarla al veterinario.', 'B1'],
            ['Aumento', 'Aumento', 'Quisiera hablar de un aumento.', 'B2'],
            ['Dossier', 'Dossiê', 'El dossier está en tu mesa.', 'C1'],
            ['Eufemismo', 'Eufemismo', 'Ese eufemismo esconde el recorte.', 'C2'],
        ],
        'fr' => [
            ['Vétérinaire', 'Veterinário', 'Je dois l emmener chez le véto.', 'B1'],
            ['Augmentation', 'Aumento', 'Je voudrais parler d une augmentation.', 'B2'],
            ['Dossier', 'Dossiê', 'Le dossier est sur ton bureau.', 'C1'],
            ['Euphémisme', 'Eufemismo', 'Cet euphémisme cache la coupe.', 'C2'],
        ],
        'it' => [
            ['Veterinario', 'Veterinário', 'Devo portarla dal veterinario.', 'B1'],
            ['Aumento', 'Aumento', 'Vorrei parlare di un aumento.', 'B2'],
            ['Dossier', 'Dossiê', 'Il dossier è sulla tua scrivania.', 'C1'],
            ['Eufemismo', 'Eufemismo', 'Quell eufemismo nasconde il taglio.', 'C2'],
        ],
        'de' => [
            ['Tierarzt', 'Veterinário', 'Ich muss sie zum Tierarzt bringen.', 'B1'],
            ['Gehaltserhöhung', 'Aumento', 'Ich möchte über eine Erhöhung sprechen.', 'B2'],
            ['Dossier', 'Dossiê', 'Das Dossier liegt auf deinem Schreibtisch.', 'C1'],
            ['Euphemismus', 'Eufemismo', 'Dieser Euphemismus verbirgt den Schnitt.', 'C2'],
        ],
    ];

    return $mapa[$lang] ?? $mapa['en'];
}

require_once __DIR__ . '/catalogo-alta-b.php';
require_once __DIR__ . '/catalogo-alta-c.php';
