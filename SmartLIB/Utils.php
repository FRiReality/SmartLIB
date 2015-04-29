<?php
namespace Core;

Class Utils{

    public $tva = 1.20;

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


}