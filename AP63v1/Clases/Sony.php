<?php

class Sony extends Consolas{
    private $numero;

    public function __construct($id, $nombre, $precio, $numero){
        parent::__construct($id, $nombre, $precio);
        $this->numero = $numero;
    }

    getNumero(){
        return $this->numero;
    }

    setNumero(){
        $this->numero = $numero;
    }
}

?>