<?php

spl_autoload_register(function ($clases) {
    $file = __DIR__ . "/Clases/" . $clases . ".php";
    if (file_exists($file)) {
        require_once $file;
    }
});

?>