<?php
    include "conexion.php";
    global $conProyecto;
    session_start();

    if(isset($_POST['login'])){
        $user = $_POST['usuario'];
        $passwd = hash('sha256', $_POST['contraseña']);
        
        $resultado = $conProyecto->prepare('SELECT pass FROM usuarios WHERE usuario=:usuario');
        $resultado->bindParam("usuario", $user, PDO::PARAM_STR);
        $resultado->execute();
        $arrayResultado = $resultado->fetch(PDO::FETCH_OBJ);

        if (!$arrayResultado) {
            header('Location: paginaInicioSesion.php');
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if ($passwd == $arrayResultado->pass) {
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>