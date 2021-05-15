<?php

use Zupaazhai\Windtall\Components;

return [
    'prefix' => 'wt',

    'components' => [
        'button' => Components\Button::class,
        'badge' => Components\Badge::class
    ],

    'varients' => [
        'primary' => [
            'color' => 'purple'
        ],
        'success' => [
            'color' => 'green'
        ]
    ]
];
