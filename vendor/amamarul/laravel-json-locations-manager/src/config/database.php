<?php

return [

    'connections' => [

        'locations' => [
          'driver' => 'mysql',
          'url' => env('DATABASE_URL'),
          'host' => env('DB_HOST', '127.0.0.1'),
          'port' => env('DB_PORT', '3306'),
          'database' => env('DB_DATABASE', 'forge'),
          'username' => env('DB_USERNAME', 'forge'),
          'password' => env('DB_PASSWORD', ''),
          'unix_socket' => env('DB_SOCKET', ''),
          'charset' => 'utf8mb4',
          'collation' => 'utf8mb4_unicode_ci',
          'prefix' => 'translations_',
        ],
    ]
];
