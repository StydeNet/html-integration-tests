<?php

return [
    'main' => [
        'home' => [
            'title' => 'Home',
            'url' => '/',
        ],
        'alert' => [
            'title' => 'Alerts',
            'submenu' => [
                'success' => [
                    'url' => '/alert/success',
                ],
                'all' => [
                    'url' => '/alert/all',
                    'title' => 'All',
                ],
                'cta' => [
                    'url' => '/alert/cta',
                    'title' => 'Call to action',
                ],
                'func' => [
                    'url' => '/alert/func',
                    'title' => 'With helper alert()',
                ],
                'redirect' => [
                    'url' => '/alert/from',
                    'title' => 'With redirect',
                ],
            ]
        ],
        'login' => [
            'url' => '/login',
            'logged' => false,
        ],
        'register' => [
            'url' => '/register',
            'logged' => false,
        ],
    ]
];