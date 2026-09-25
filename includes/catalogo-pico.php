<?php

function unidades_pico_por_codigo(string $codigo): array
{
    $unidades = array_merge(pico_b(), pico_c());
    $lang = in_array($codigo, ['en', 'es', 'fr', 'it', 'de'], true) ? $codigo : 'en';

    return [
        'palavras' => pico_palavras($lang),
        'unidades' => dobra_montar($lang, $unidades),
    ];
}

function pico_palavras(string $lang): array
{
    $mapa = [
        'en' => [
            ['Mileage', 'Quilometragem', 'Watch the mileage on the rental.', 'B1'],
            ['Bias', 'Viés', 'The headline shows a clear bias.', 'B2'],
            ['Briefing', 'Briefing', 'The crisis briefing starts now.', 'C1'],
            ['Implicature', 'Implicatura', 'The implicature is left unsaid.', 'C2'],
        ],
        'es' => [
            ['Kilometraje', 'Quilometragem', 'Mira el kilometraje del alquiler.', 'B1'],
            ['Sesgo', 'Viés', 'El titular muestra un sesgo claro.', 'B2'],
            ['Briefing', 'Briefing', 'El briefing de crisis empieza ahora.', 'C1'],
            ['Implicatura', 'Implicatura', 'La implicatura queda sin decir.', 'C2'],
        ],
        'fr' => [
            ['Kilométrage', 'Quilometragem', 'Regarde le kilométrage de la location.', 'B1'],
            ['Biais', 'Viés', 'Le titre montre un biais clair.', 'B2'],
            ['Briefing', 'Briefing', 'Le briefing de crise commence.', 'C1'],
            ['Implicature', 'Implicatura', 'L implicature reste non dite.', 'C2'],
        ],
        'it' => [
            ['Chilometraggio', 'Quilometragem', 'Controlla il chilometraggio del noleggio.', 'B1'],
            ['Distorsione', 'Viés', 'Il titolo mostra una distorsione chiara.', 'B2'],
            ['Briefing', 'Briefing', 'Il briefing di crisi inizia ora.', 'C1'],
            ['Implicatura', 'Implicatura', 'L implicatura resta non detta.', 'C2'],
        ],
        'de' => [
            ['Kilometerstand', 'Quilometragem', 'Achte auf den Kilometerstand.', 'B1'],
            ['Verzerrung', 'Viés', 'Die Überschrift zeigt eine klare Verzerrung.', 'B2'],
            ['Briefing', 'Briefing', 'Das Krisenbriefing beginnt jetzt.', 'C1'],
            ['Implikatur', 'Implicatura', 'Die Implikatur bleibt ungesagt.', 'C2'],
        ],
    ];

    return $mapa[$lang] ?? $mapa['en'];
}

require_once __DIR__ . '/catalogo-pico-b.php';
require_once __DIR__ . '/catalogo-pico-c.php';
