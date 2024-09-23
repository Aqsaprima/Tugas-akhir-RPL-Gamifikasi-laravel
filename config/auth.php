<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'mahasiswa' => [
            'driver' => 'session',
            'provider' => 'mahasiswas',
        ],

        'dosen' => [
            'driver' => 'session',
            'provider' => 'dosens',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Mhs::class,
        ],

        'mahasiswas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Mhs::class,
        ],

        'dosens' => [
            'driver' => 'eloquent',
            'model' => App\Models\Dosen::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'mahasiswas' => [
            'provider' => 'mahasiswas',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'dosens' => [
            'provider' => 'dosens',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
