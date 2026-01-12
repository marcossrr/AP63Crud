<?php

class Sony extends Consolas{
    private $numero;

    public function __construct($id, $nombre, $precio, $numero){
        parent::__construct($id, $nombre, $precio);
        $this->numero = $numero;
    }

    public function getNumero(){
        if($this->numero==0){
            return "4";
        }else{
            return "5";
        } 
    }

    public function setNumero(){
        $this->numero = $numero;
    }
}

?>