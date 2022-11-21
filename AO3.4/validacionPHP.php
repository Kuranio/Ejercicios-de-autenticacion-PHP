<?php
    $host = "localhost";
    $db = "gestionproductos";
    $user = "raulgarciaCampus"; #introducir usuario de la base de datos
    $password = "admin"; #introducir contraseña de la base de datos 
    $controlador = "mysql";
    $dsn = "$controlador:host=$host;dbname=$db";

    $conProyecto = new PDO($dsn, $user, $password);
    
    session_start();

    if(isset($_POST['login'])){
        $user = $_POST['usuario'];
        $passwd = hash('sha256', $_POST['contraseña']);

        $_SESSION["validated"] = $_POST["usuario"];

        $resultado = $conProyecto->prepare('SELECT pass FROM usuarios WHERE usuario=:usuario');
        $resultado->bindParam("usuario", $user, PDO::PARAM_STR);
        $resultado->execute();
        $arrayResultado = $resultado->fetch(PDO::FETCH_OBJ);

        if (!$arrayResultado) {
            header('Location: paginaInicioSesion.php');
        } else {
            if ($passwd == $arrayResultado->pass) {
                header('Location: unaveziniciado.php');
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>