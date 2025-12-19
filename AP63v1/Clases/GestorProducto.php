<?php

class GestorProducto{
    private $productos;

    public function agregar(Consolas $p) {
        $this->productos[] = $p;
    }

    public function listar(){
        return $this->productos;
    }

    public function buscar($id) {
        foreach ($this->productos as $p) {
            if ($p->getId() == $id) return $p;
        }
        return null;
    }

    public function actualizar($id, $nombre, $precio, $version) {
        foreach ($this->productos as $p) {
            if ($p->getId() == $id) {
                $p->setNombre($nombre);
                $p->setPrecio($precio);
                $p->setVersion($version);
                return true;
            }
        }
        return false;
    }

    public function eliminar($id) {
        foreach ($this->productos as $i => $p) {
            if ($p->getId() == $id) {
                unset($this->productos[$i]);
                $this->productos = array_values($this->productos);
                return true;
            }
        }
        return false;
    }

}