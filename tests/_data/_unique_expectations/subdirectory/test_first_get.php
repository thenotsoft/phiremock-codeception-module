<?php

declare(strict_types=1);

return [
    'request' => [
        'method' => 'GET',
        'url' => [
            'isEqualTo' => '/expectation/subdirectory/php',
        ]
    ],
    'response' => [
        'statusCode' => 200,
        'body' => 'response php',
        'headers' => [
            'Content-Type' => 'application/json',
        ]
    ]
];
