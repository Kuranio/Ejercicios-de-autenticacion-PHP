<?php include "validacionPHP.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_SESSION['validated'])) header("Location: paginaInicioSesion.php");?>
    <h1>Hola esto es una pagina a la que entras xd</h1>
    <a href="paginaInicioSesion.php?endsession">Cerrar Sesión</a>
</body>
</html>