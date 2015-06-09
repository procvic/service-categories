<?php

$result = [
    [
        '1. třída - Řazení čísel',
        '1. třída - Porovnávání čísel',
        '1. třída - Výpočty',
    ],
    [
        '2. třída - Výpočty',
        '2. třída - Slovní úlohy',
        '2. třída - Zápis čísel',
        '2. třída - Počítání do 100',
    ],
    [
        '3. třída - Výpočty',
        '3. třída - Slovní úlohy',
        '3. třída - Sudá a lichá čísla',
        '3. třída - Matematické pojmy',
        '3. třída - Počítání do 1 000',
        '3. třída - Převody jednotek',
        '3. třída - Násobení a dělení do 100',
    ],
    [
        '4. třída - Zaokrouhlování čísel na desítky a stovky',
        '4. třída - Počítání s nulou',
        '4. třída - Počítání do 10 000',
        '4. třída - Matematické pojmy',
        '4. třída - Vztahy mezi čísly',
        '4. třída - Počítání přes 10 000',
        '4. třída - Slovní úlohy',
        '4. třída - Římské číslice',
        '4. třída - Převody jednotek',
        '4. třída - Počítání – miliony',
        '4. třída - Geometrie',
    ],
    [
        '5. třída - Matematické pojmy',
        '5. třída - Kombinace operací',
        '5. třída - Počítání do 10 000',
        '5. třída - Římské číslice',
        '5. třída - Počítání přes 1 000 000',
        '5. třída - Písemné dělení',
        '5. třída - Slovní úlohy',
    ],
];

header("Content-Type: text/javascript");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
echo json_encode($result);
exit;
