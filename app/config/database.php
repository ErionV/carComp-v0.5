<?php

return [

	'fetch' => PDO::FETCH_CLASS,


	'default' => 'mysql',


	'connections' => [

        //Live Server database Settings
        'mysql' => [
            'driver'    => 'mysql',
            // Environment variable only work in laravel 4.0
//            'host'      => $_ENV['host'],
//            'database'  => $_ENV['database'],
//            'username'  => $_ENV['username'],
//            'password'  => $_ENV['password'],

            //Live server settings
            'host'      => 'localhost',
            'database'  => 'carComp',
            'username'  => 'root',
            'password'  => 'ErionV',

            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
	],

	'migrations' => 'migrations',

	'redis' => [

		'cluster' => false,

		'default' => [
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0
		]

	]

];
