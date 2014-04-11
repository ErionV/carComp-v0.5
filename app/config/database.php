<?php

return array(

	'fetch' => PDO::FETCH_CLASS,


	'default' => 'mysql',


	'connections' => array(

        //Live Server database Settings
        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'carComp',
            'username'  => 'root',
            'password'  => 'Erion1991',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
	),

	'migrations' => 'migrations',

	'redis' => array(

		'cluster' => false,

		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
		),

	),

);
