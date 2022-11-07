<?php
    $user = "admin";
    $passwd = "admin";

    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo "El usuario no ha sido reconocido";
        exit;
    }else if($_SERVER['PHP_AUTH_USER'] != $user || $_SERVER['PHP_AUTH_PW']!= $passwd){
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo "El usuario no ha sido reconocido";
        exit;
    }
?>