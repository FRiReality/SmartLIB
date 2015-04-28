<?php

namespace Core;

class Cache{

    public $dirname;	// Folder cache
    public $duration;   // Durée de vie du cache EN MINUTES
    public $buffer;		// Buffer (utilisé pour les méthodes start/end)

    /**
     * @param string $dirname Dossier contenant le cache
     * @param int $duration Durée de vie du cache
     **/
    public function __construct($dirname, $duration){
        $this->dirname = $dirname;
        $this->duration = $duration;

        //mkdir($this->dirname);

    }

    /**
     * @param $cachename
     * @param $content
     * @return int
     */
    public function write($cachename, $content){
        return file_put_contents($this->dirname.'/'.$cachename, $content);
    }

    /**
     * @param $cachename
     * @return bool|string
     */
    public function read($cachename){
        $file = $this->dirname.'/'.$cachename;
        if(!file_exists($file)){
            return false;
        }
        $lifetime = (time() - filemtime($file)) / 60;
        if($lifetime > $this->duration){
            return false;
        }
        return file_get_contents($file);
    }

    /**
     * @param $cachename
     */
    public function delete($cachename){
        $file = $this->dirname.'/'.$cachename;
        if(file_exists($file)){
            unlink($file);
        }
    }

    /**
     *
     */
    public function clear(){
        $files = glob($this->dirname.'/*');
        foreach( $files as $file ) {
            unlink($file);
        }
    }

    /**
     * inc file in cache
     * @param $file
     * @param null $cachename
     * @return bool
     */
    public function inc($file, $cachename = null){
        if(!$cachename){
            $cachename = basename($file);
        }
        if($content = $this->read($cachename)){
            echo $content;
            return true;
        }
        ob_start();
        require $file;
        $content = ob_get_clean();
        $this->write($cachename, $content);
        echo $content;
        return true;
    }

    /**
     * @param $cachename
     * @return bool
     */
    public function start($cachename){
        if($content = $this->read($cachename)){
            echo $content;
            $this->buffer = false;
            return true;
        }
        ob_start();
        $this->buffer = $cachename;
    }


    /**
     * @return bool
     */
    public function end(){
        if(!$this->buffer){
            return false;
        }
        $content = ob_get_clean();
        echo $content;
        $this->write($this->buffer, $content);
    }

}