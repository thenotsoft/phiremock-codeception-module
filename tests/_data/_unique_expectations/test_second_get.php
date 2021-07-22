<?php

declare(strict_types=1);

return [
    'request' => [
        'method' => 'GET',
        'url' => [
            'isEqualTo' => '/expectation/php/2',
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
