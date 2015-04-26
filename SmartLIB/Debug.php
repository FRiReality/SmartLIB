<?php

namespace Core;

class Debug{
    /**
     * Puts an error in $_SESSION or dumps $_SESSION
     *
     * @param mixed $value Error to put in $_SESSION
     * @param boolean $dump Dump the Session
     */
    public static function session($value, $dump){
        if($dump){
            var_dump($_SESSION);
        }
        if(!empty($value)){
            $_SESSION['Debug']['error_message'] = $value;
        }
    }
    /**
     * print_r a variable with <pre> surrounding
     *
     * @param mixed $value Variable to print_r()
     * @param boolean $die Should the script die() ?
     */
    public static function pp($value, $die){
        echo '<pre>'. print_r($value, true) .'</pre>';
        if($die == TRUE){
            die();
        }
    }
    /**
     * @param mixed $value Value to var_dump
     * @param boolean $die Should the script die ?
     */
    public static function dd($value, $die){
        var_dump($value);
        if($die == TRUE){
            die();
        }
    }
}