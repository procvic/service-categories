<?php

$result = [
    1 => "Matematika pro 1. stupeň ZŠ",
    2 => "Matematika pro 2. stupeň ZŠ",
    3 => "Matematika pro SŠ",
    4 => "Matematika pro VŠ",
];

header("Content-Type: text/javascript");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
echo json_encode($result);
exit;
