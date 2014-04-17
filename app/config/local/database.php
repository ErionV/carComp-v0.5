<?php

return [

    'connections' => [
        'mysql' => [
            // Environment variable only work in laravel 4.0
//            'host'      => $_ENV['host'],
//            //'unix_socket'   => '/Applications/MAMP/tmp/mysql/mysql.sock',
//            'database'  => $_ENV['database'],
//            'username'  => $_ENV['username'],
//            'password'  => $_ENV['password'],

            'host'      => 'localhost',
            'database'  => 'carComp',
            'username'  => 'root',
            'password'  => '',
        ]
    ]
];
