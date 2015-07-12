<?php

$result = [
    [
        'name' => '1. třída',
        'subcategories' => [
            10 => 'Řazení čísel',
            11 => 'Porovnávání čísel',
            12 => 'Výpočty',
        ],
    ],
    [
        'name' => '2. třída',
        'subcategories' => [
            13 => 'Výpočty',
            14 => 'Slovní úlohy',
            15 => 'Zápis čísel',
            16 => 'Počítání do 100',
        ],
    ],
    [
        'name' => '3. třída',
        'subcategories' => [
            17 => 'Výpočty',
            18 => 'Slovní úlohy',
            19 => 'Sudá a lichá čísla',
            20 => 'Matematické pojmy',
            21 => 'Počítání do 1 000',
            22 => 'Převody jednotek',
            23 => 'Násobení a dělení do 100',
        ],
    ],
    [
        'name' => '4. třída',
        'subcategories' => [
            24 => 'Zaokrouhlování čísel na desítky a stovky',
            25 => 'Počítání s nulou',
            26 => 'Počítání do 10 000',
            27 => 'Matematické pojmy',
            30 => 'Vztahy mezi čísly',
            31 => 'Počítání přes 10 000',
            32 => 'Slovní úlohy',
            33 => 'Římské číslice',
            45 => 'Převody jednotek',
            66 => 'Počítání – miliony',
            234 => 'Geometrie',
        ],
    ],
    [
        'name' => '5. třída',
        'subcategories' => [
            1442 => 'Matematické pojmy',
            343 => 'Kombinace operací',
            3434 => 'Počítání do 10 000',
            232323 => 'Římské číslice',
            3535 => 'Počítání přes 1 000 000',
            3431 => 'Písemné dělení',
            4343434 => 'Slovní úlohy',
        ],
    ],
];

header("Content-Type: text/javascript");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
echo json_encode($result);
exit;
