<?php

    session_start();

    if ( isset($_SESSION["login"]) && $_SESSION["login"] === true ){

        include("../Vista/headerLogueado.php");

        include("../Vista/footer.php");


    } else {

        include("../Vista/headerNoLogueado.php");

        include("mostrarRecetasNoLogueados.php");

        include("../Vista/footer.php");

        

    }

?>
