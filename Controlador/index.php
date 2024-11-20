<?php
session_start();
    if ( isset($_SESSION["login"]) && $_SESSION["login"] === true ){

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
