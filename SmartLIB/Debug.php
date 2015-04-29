<?php

namespace Core;

class Debug{
    /**
     * @param mixed $value Error to put in $_SESSION
     * @param boolean $die Dump the Session
     */
    public static function session($value, $die){
        if($die)
            var_dump($_SESSION);

        if(!empty($value))
            $_SESSION['Debug']['error_message'] = $value;
    }
    /**
     * @param mixed $value Variable to print_r()
     * @param boolean $die Should the script die() ?
     */
    public static function pp($value, $die){
        echo
            '<pre>'
                . print_r($value, true) .
            '</pre>';

        if($die)
            die();
    }
    /**
     * @param mixed $value Value to var_dump
     * @param boolean $die Should the script die ?
     */
    public static function dd($value, $die){
        var_dump($value);

        if($die)
            die();
    }
}