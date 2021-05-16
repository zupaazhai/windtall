<?php

use Zupaazhai\Windtall\Components;

return [
    'prefix' => 'wt',

    'components' => [
        'alert' => Components\Alert::class,
        'button' => Components\Button::class,
        'badge' => Components\Badge::class
    ],

    'varients' => [
        'primary' => [
            'color' => 'purple'
        ],
        'success' => [
            'color' => 'green'
        ],
        'neutral' => [
            'color' => 'gray'
        ],
        'danger' => [
            'color' => 'red'
        ],
        'warning' => [
            'color' => 'yellow'
        ]
    ]
];
