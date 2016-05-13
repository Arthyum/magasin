<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => '127.0.0.1',  // Mandatory for PHPUnit testing
    'port'     => '3306',
    'dbname'   => 'magasin',
    'user'     => 'root',
    'password' => '',
);

// enable the debug mode
$app['debug'] = false;

// define log parameters
$app['monolog.level'] = 'INFO';
