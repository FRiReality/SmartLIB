<?php
namespace Core;

use PDO;

class Database{

    private $db;

    /**
     * @param null $host
     * @param null $username
     * @param null $password
     * @param null $database
     */
    public function __construct(){

        try{
            $this->db = new PDO('mysql:host='.Config::$config['Database']['mysql']['host'].';
                                       dbname='.Config::$config['Database']['mysql']['database'],
                                                Config::$config['Database']['mysql']['name'],
                                                Config::$config['Database']['mysql']['password'],
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ));
        }catch(PDOException $e){
            Session::setFlash('<h1>Impossible de se connecter a la base de donnee</h1>');
        }


    }

    /**
     * @param $sql
     * @param array $data
     * @return mixed
     */
    public function query($sql, $data = array()){
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param $sql
     */
    public function delete($sql){
        $req = $this->db->query($sql);
    }

    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}
