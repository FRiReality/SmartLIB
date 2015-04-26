<?php
namespace Core;

define('DS', DIRECTORY_SEPARATOR); // Change \ par /
define('DIR', __DIR__); // Le dossier du fichier
define('HTTP_HOST', $_SERVER['HTTP_HOST']); // Contenu de l'en-tête Host
define('REQUEST_URI', $_SERVER['REQUEST_URI']); // L'URI qui a été fourni pour accéder à cette page
define('URL', 'http://'. HTTP_HOST . REQUEST_URI); // URL complete


class Config{
    static public $config = [
        'library' => [
            'name_site' => '',
            'description' => '',
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