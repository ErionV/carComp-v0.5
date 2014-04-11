<?php

return [

	'fetch' => PDO::FETCH_CLASS,


	'default' => 'mysql',


	'connections' => [

        //Live Server database Settings
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'unix_socket'   => '/Applications/MAMP/tmp/mysql/mysql.sock',
            'database'  => 'carComp',
            'username'  => 'root',
            'password'  => 'root',
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
