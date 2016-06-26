<?php

return array(
    'parameters' => array(
        // Connections
        'capsule.connections' => array(
            'default' => array(
                'driver' => env('DB_DRIVER', 'mysql'),
                'host' => env('DB_HOST', 'localhost'),
                'database' => env('DB_DATABASE', 'db'),
                'username' => env('DB_USERNAME', 'root'),
                'password' => env('DB_PASSWORD', ''),
                'charset' => env('DB_CHARSET', 'utf8'),
                'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
                'prefix' => '',
                'logging' => false,
            ),
        ),

        // Cache
        /*
        'capsule.cache' => array(
            'driver' => 'apc',
            'prefix' => 'sifoni',
        ),
        */
    ),
);
