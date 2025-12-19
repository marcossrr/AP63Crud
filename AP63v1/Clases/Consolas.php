<?php

Class Consolas{
    private $id;
    private $nombre;
    private $precio;

    public function __construct($id, $nombre, $precio){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    getId(){
        return $this->id;
    }
    getNombre(){
        return $this->nombre;
    }
    getPrecio(){
        return $this->precio;
    }

    setId(){
        $this->id = $id;
    }
    setNombre(){
        $this->nombre = $nombre;
    }
    setPrecio(){
        $this->precio = $precio;
    }
}

?>