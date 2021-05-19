<?php

    include 'config.php';
    include 'modelo.php';
    include 'banco.php';

    function inc($path) {
        $prefix = str_repeat('../',substr_count($_SERVER['SCRIPT_FILENAME'],DIRECTORY_SEPARATOR,strlen(__FILE__)-11));
        $ext = pathinfo($path,PATHINFO_EXTENSION);
        $file = $prefix.'lib/'.$ext.'/'.$path;
        if($ext == 'js') {
            echo "<script src=\"$file\"></script>";
        } else if($ext == 'css') {
            echo "<link href=\"$file\" rel=\"stylesheet\">";
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        cabecalho();
        register_shutdown_function(function() {
            rodape();
        });
    }
    ?> 

