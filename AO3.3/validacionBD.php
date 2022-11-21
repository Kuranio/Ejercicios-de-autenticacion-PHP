<?php
    $host = "localhost";
    $db = "gestionproductos";
    $user = "raulgarciaCampus"; #introducir usuario de la base de datos
    $password = "admin"; #introducir contraseña de la base de datos 
    $controlador = "mysql";
    $dsn = "$controlador:host=$host;dbname=$db";

    $conProyecto = new PDO($dsn, $user, $password);

    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo "El usuario no ha sido reconocido";
        exit;
    }else{
        $user = $_SERVER['PHP_AUTH_USER'];
        $passwd = hash('sha256', $_SERVER['PHP_AUTH_PW']);
        $resultado = $conProyecto->query('SELECT usuario, pass FROM usuarios WHERE usuario="'.$user.'" AND pass="'.$passwd.'";');
        $arrayResultado = $resultado->fetch(PDO::FETCH_OBJ);
        if($user != $arrayResultado->usuario || $passwd != $arrayResultado->pass){
            header('WWW-Authenticate: Basic Realm="Contenido restringido"');
            header('HTTP/1.0 401 Unauthorized');
            echo "El usuario no ha sido reconocido";
            exit;
        }
    }
?>