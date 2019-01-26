<?php

return [
    'main' => [
        'home' => [
            'title' => 'Home',
            'url' => '/home',
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
        'forms' => [
            'title' => 'Forms',
            'submenu' => [
                'Login form' => [
                    'url' => '/login',
                    'logged' => false,
                ],
                'Register form' => [
                    'url' => '/register',
                    'logged' => false,
                ],
                'form A' => [
                    'url' => '/form-a',
                ],

                'form B' => [
                    'url' => '/form-b',
                ],
            ],
        ],
        'contact-us' => [],
    ]
];