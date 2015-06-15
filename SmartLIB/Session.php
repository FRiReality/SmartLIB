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

        self:Session::flash();
    }

    /**
     * @return string
     */
    public static function flash(){
        if(isset($_SESSION['flash']['message'])){
            $html = '<div class="alert alert-'.$_SESSION['flash']['type'].'"><p>'.$_SESSION['flash']['message'].'</p></div>';
            $_SESSION['flash'] = array();
            echo $html;
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
     * @param $key
     */
     public function read($key){
         return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
     }

     /**
      * @param $key
      */
     public function delete($key){
        unset($_SESSION[$key]);
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
