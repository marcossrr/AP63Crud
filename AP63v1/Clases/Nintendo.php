<?php

class Nintendo extends Consolas{
    private $version;

    public function __construct($id, $nombre, $precio, $version){
    parent::__construct($id, $nombre, $precio);
    $this->version = $version;
    }

    getVersion(){
        return $this->version;
    }

    setVersion(){
        $this->version = $version;
    }
}

?>