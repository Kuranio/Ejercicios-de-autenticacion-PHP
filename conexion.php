<?php
    $host = "localhost";
    $db = "gestionproductos";
    $user = "raulgarciaCampus"; #introducir usuario de la base de datos
    $password = "admin"; #introducir contraseña de la base de datos 
    $controlador = "mysql";
    $dsn = "$controlador:host=$host;dbname=$db";

    $conProyecto = new PDO($dsn, $user, $password);
?>