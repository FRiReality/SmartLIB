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
            'type' => $type
        );
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
     * @param $key
     * @return bool
     */
    public function user($key){
        if($this->read('User')){
            if(isset($this->read('User')->$key)){
                return $this->read('User')->$key;
            } else{
                return false;
            }
        }
        return false;
    }

    /**
     * @return bool
     */
    public static function islogged(){
        if (isset($_SESSION['User'])) {
            return true;
        }else{
            header('location: ../');
        }
    }
}