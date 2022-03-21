<?php

$foods = [
    [
        'name' => "Virtus",
        'description' => "cibo secco ricco di proteine e povero di cereali",
        'price' => 12.99,
        'animals' => "Cane",
        $time = mktime(17, 05, null, 6, 15, 2023),
        'expiration' => date('D j M Y H:i:a', $time),
    ],

    [
        'name' => "Next",
        'description' => "ideate per chi svolge maggiore attività fisica",
        'price' => 7.90,
        'animals' => "Gatto",
        $time = mktime(8, 11, null, 10, 8, 2023),
        'expiration' => date('D j M Y H:i:a', $time),
    ]
];
