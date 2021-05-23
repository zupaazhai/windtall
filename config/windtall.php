<?php

use Zupaazhai\Windtall\Components;

return [
    'prefix' => 'wt',

    'components' => [
        'alert' => Components\Alert::class,
        'avatar' => Components\Avatar::class,
        'button' => Components\Button::class,
        'badge' => Components\Badge::class,
        'card' => Components\Card::class
    ],

    'styles' => [
        'border_rounded' => 'md'
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
