<?php

function unidades_onda_por_codigo(string $codigo): array
{
    $unidades = array_merge(onda_a1(), onda_a2(), onda_bc());
    $lang = in_array($codigo, ['en', 'es', 'fr', 'it', 'de'], true) ? $codigo : 'en';

    return [
        'palavras' => onda_palavras($lang),
        'unidades' => dobra_montar($lang, $unidades),
    ];
}

function onda_palavras(string $lang): array
{
    $mapa = [
        'en' => [
            ['Apple', 'Maçã', 'I eat an apple.', 'A1'],
            ['Library', 'Biblioteca', 'The library is quiet.', 'A2'],
            ['Abroad', 'No exterior', 'I live abroad now.', 'B1'],
            ['Resign', 'Pedir demissão', 'She decided to resign.', 'B2'],
            ['Keynote', 'Palestra principal', 'The keynote starts at nine.', 'C1'],
            ['Tone', 'Tom', 'The tone of the closing is sharp.', 'C2'],
        ],
        'es' => [
            ['Manzana', 'Maçã', 'Como una manzana.', 'A1'],
            ['Biblioteca', 'Biblioteca', 'La biblioteca está en silencio.', 'A2'],
            ['Extranjero', 'No exterior', 'Vivo en el extranjero.', 'B1'],
            ['Renunciar', 'Pedir demissão', 'Decidió renunciar.', 'B2'],
            ['Ponencia', 'Palestra principal', 'La ponencia empieza a las nueve.', 'C1'],
            ['Tono', 'Tom', 'El tono del cierre es seco.', 'C2'],
        ],
        'fr' => [
            ['Pomme', 'Maçã', 'Je mange une pomme.', 'A1'],
            ['Bibliothèque', 'Biblioteca', 'La bibliothèque est calme.', 'A2'],
            ['Étranger', 'No exterior', 'Je vis à l étranger.', 'B1'],
            ['Démissionner', 'Pedir demissão', 'Elle a décidé de démissionner.', 'B2'],
            ['Keynote', 'Palestra principal', 'La conférence commence à neuf heures.', 'C1'],
            ['Ton', 'Tom', 'Le ton de la chute est tranchant.', 'C2'],
        ],
        'it' => [
            ['Mela', 'Maçã', 'Mangio una mela.', 'A1'],
            ['Biblioteca', 'Biblioteca', 'La biblioteca è silenziosa.', 'A2'],
            ['Estero', 'No exterior', 'Vivo all estero.', 'B1'],
            ['Dimettersi', 'Pedir demissão', 'Ha deciso di dimettersi.', 'B2'],
            ['Keynote', 'Palestra principal', 'La relazione inizia alle nove.', 'C1'],
            ['Tono', 'Tom', 'Il tono della chiusura è tagliente.', 'C2'],
        ],
        'de' => [
            ['Apfel', 'Maçã', 'Ich esse einen Apfel.', 'A1'],
            ['Bibliothek', 'Biblioteca', 'Die Bibliothek ist still.', 'A2'],
            ['Ausland', 'No exterior', 'Ich lebe jetzt im Ausland.', 'B1'],
            ['Kündigen', 'Pedir demissão', 'Sie hat gekündigt.', 'B2'],
            ['Keynote', 'Palestra principal', 'Die Keynote beginnt um neun.', 'C1'],
            ['Ton', 'Tom', 'Der Ton des Schlusses ist scharf.', 'C2'],
        ],
    ];

    return $mapa[$lang] ?? $mapa['en'];
}

require_once __DIR__ . '/catalogo-onda-a.php';
require_once __DIR__ . '/catalogo-onda-bc.php';
