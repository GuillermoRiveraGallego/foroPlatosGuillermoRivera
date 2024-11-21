<?php
session_start();
    if ( isset($_SESSION["login"]) && $_SESSION["login"] === true ){

        if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

            header("Location: index.php");
            exit;
        }
        
        if (isset($_SESSION["tiempoInicioSesion"]) && (time() - $_SESSION["tiempoInicioSesion"]) > 120) {
            session_unset();
            session_destroy();
            header("Location: index.php?error=inactividad");
            exit;
        }

        $nombreUser = $_SESSION["nombreUsuario"]; 

        include("../Modelo/consultasUsuarios.php");

        if (esAdmin($nombreUser)){

            include("../Vista/headerAdministradores.php");

            include("mostrarRecetasSiLogueados.php");
    
            include("../Vista/footer.php");

        } else {

            include("../Vista/headerLogueado.php");

            include("mostrarRecetasSiLogueados.php");

            include("../Vista/footer.php");

        }

    } else {

        include("../Vista/headerNoLogueado.php");

        include("mostrarRecetasNoLogueados.php");

        include("../Vista/footer.php");

    }

?>
