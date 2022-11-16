<?php
$host = "localhost";
    $db = "gestionproductos";
    $user = "raulgarciaCampus";
    $password = "admin";
    $controlador = "mysql";
    $dsn = "$controlador:host=$host;dbname=$db";

    $conProyecto = new PDO($dsn, $user, $password);
?>