<?php

$result = [
    1 => [
        'name' => 'Matematika',
        'subcategories' => [
            2 => '1. stupeň ZŠ',
            3 => '2. stupeň ZŠ',
            4 => 'SŠ',
            5 => 'VŠ',
        ],
    ],
    6 => [
        'name' => 'Dějepis',
        'subcategories' => [
            7 => 'ZŠ',
            8 => 'SŠ',
        ],
    ],
];

header('Content-Type: text/javascript');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
echo json_encode($result);
exit;
