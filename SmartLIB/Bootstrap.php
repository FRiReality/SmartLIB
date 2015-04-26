<?php
namespace Core;

class Bootstrap{
    private static $_instance = null;


    public function __construct(){
    }

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Bootstrap();
        }
        return self::$_instance;
    }

    public function run(){
        $inst = self::getInstance();
        include 'Configuration.php';
    }

}