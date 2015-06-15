<?php
namespace Core;

define('DS', DIRECTORY_SEPARATOR); // Change \ par /
define('DIR', __DIR__); // Folder file
define('URL', 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); // URL complete


class Config{
    static public $config = [
        'App' => [
            'name_site' => '', // Site name
            'description' => '', // Site description
            'debug' => true,
            'salt'  => 'Brandon-xprodeur'
        ],
        'Database' => [
            'mysql' => [
                'driver' => 'mysql',
                'host'   => 'localhost',
                'name' => 'root',
                'database' => 'smartlib', // Database name table
                'password' => 'root', // Database password
                'charset' => 'utf-8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ]
        ]
    ];
}
