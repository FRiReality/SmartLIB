<?php
namespace Core;

Class DefaultSite{


    public function linkCSS($link, $css){
        echo '<link rel="stylesheet" type="text/css" href="'. $link . $css.'">';
    }

    public function linkJS($link, $js){
        echo '<script src="'.$link . $js.'"></script>';
    }
}