<?php

namespace Core;

class Log{

    public function write($write, $file){
        $current = @file_get_contents($file);
        $current .= '['.date("d/m/Y H:i:s").'] ';
        $current .= $write;
        $current .= "\n";

        @file_put_contents($file, $current);
    }
}