<?php
namespace Core;
class Bootstrap{
    private static $_instance = null;


    public function __construct(){

    }
    /**
     * @return Bootstrap|null
     */
    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Bootstrap();
        }
        return self::$_instance;
    }

    public function run(){
        $inst = self::getInstance();
        include 'Configuration.php';

        ini_set("display_errors",
            (Config::$config['App']['debug']) ? "On" : "Off"
        );
    }
}
