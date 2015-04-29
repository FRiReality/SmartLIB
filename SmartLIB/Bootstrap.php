<?php
namespace Core;

class Bootstrap{
    private static $_instance = null;
    public $key;

    public function __construct(){
        if (!isset($_SESSION)) {
            session_start();
        }
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

        $this->verifSmartLIB();
    }

    public function verifSmartLIB(){
        $configuration = Config::$config['connections']['mysql'];
        if(
            empty($configuration['name']) ||
            empty($configuration['database'])
        ){
            Session::setFlash('Veuillez remplir tout les champs à la connexion à la base de donnee', 'danger');
        }
    }
}