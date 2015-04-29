<?php
namespace Core;

Class Utils{

    public $tva = 1.20;
    public $key = 'za25tu54gh0e2a0c3e77';


    /**
     * @param $link
     * @param $css
     */
    public function linkCSS($link, $css){
        echo '<link rel="stylesheet" type="text/css" href="'. $link . $css.'">';
    }

    /**
     * @param $link
     * @param $js
     */
    public function linkJS($link, $js){
        echo '<script src="'.$link . $js.'"></script>';
    }

    /**
     * @param $price
     */
    public function tva($price){
        $tva = $this->tva;

        echo number_format($price * $tva,2,',',' ');
    }

    public function key(){
        if($this->key === 'za25tu54gh0e2a0c3e77'){
            Session::setFlash('Veuillez mettre une cle unique pour votre application web?');
        }
        if(!empty($this->key)){
            var_dump($this->key);
        }
    }
}