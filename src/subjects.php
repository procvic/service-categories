<?php

$result = [
    1 => [
        'name' => 'Matematika',
        'subcategories' => [
            2 => 'Základní škola',
            4 => 'Střední škola',
            5 => 'Vysoká škola',
        ],
    ],
    6 => [
        'name' => 'Dějepis',
        'subcategories' => [
            7 => 'Základní škola',
            8 => 'Střední škola',
        ],
    ],
];

header('Content-Type: text/javascript');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
echo json_encode($result);
exit;
