<?php

class Nintendo extends Consolas{
    private $version;

    public function __construct($id, $nombre, $precio, $version){
    parent::__construct($id, $nombre, $precio);
    $this->version = $version;
    }

    public function getVersion(){
        if($this->version==0){
            return "Sobremesa";
        }else{
            return "Portatil";
        } 
    }

    public function setVersion($version){
        $this->version = $version;
    }
}

?>