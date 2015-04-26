<?php
namespace Core;

define('DS', DIRECTORY_SEPARATOR); // Change \ par /
define('DIR', __DIR__); // Folder file
define('HTTP_HOST', $_SERVER['HTTP_HOST']); // Content file url
define('REQUEST_URI', $_SERVER['REQUEST_URI']); // L'URI access URL
define('URL', 'http://'. HTTP_HOST . REQUEST_URI); // URL complete


class Config{
    static public $config = [
        'library' => [
            'name_site' => '', // Site name
            'description' => '', // Site description
        ],
        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'host'   => 'localhost',
                'name' => 'root',
                'database' => '', // Database name table
                'password' => '', // Database password
                'charset' => 'utf-8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ]
        ]
    ];
}