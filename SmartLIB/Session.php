<?php

namespace Core;

class Session{

    /**
     * @param $message
     * @param string $type
     */
    public static function setFlash($message,$type = 'success'){
        $_SESSION['flash'] = array(
            'message' => $message,
            'type'    => $type
        );

        echo  $_SESSION['flash']['message'];
    }

    /**
     * @return string
     */
    public static function flash(){
        if(isset($_SESSION['flash']['message'])){
            $html = '<div class="alert alert-'.$_SESSION['flash']['type'].'"><p>'.$_SESSION['flash']['message'].'</p></div>';
            $_SESSION['flash'] = array();
            return $html;
        }
    }

    /**
     * @param $key
     * @param $value
     */
    public function write($key,$value){
        $_SESSION[$key] = $value;
    }

    /**
     * @param null $key
     * @return bool
     */
    public function read($key = null){
        if($key){
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }else{
            return $_SESSION;
        }
    }

    /**
     * @param $session
     * @return bool
     */
    public static function islogged($session){
        if (isset($_SESSION[$session])) {
            return true;
        }else{
            header('location: ../');
        }
    }
}