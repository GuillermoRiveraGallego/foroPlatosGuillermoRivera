<?php

include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasRecetas.php");

if (isset($_GET["perfil"])) {
    $nombreUsuario = $_GET["perfil"];

    if ($nombreUsuario === "Usuario desconocido") {

        //esto te hace que te devuelva a la anterior pagina osea de la q vienes ps te devuelve
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;

    } else {

        $PerfilUsuario = datosUsuario($nombreUsuario);
        $idDelUsuario = saberIdNombreUsuario($nombreUsuario);
        $recetasDelPerfil = verUnaRecetaPorIDUsuario ($idDelUsuario);

        include("../Vista/headerLogueado.php");
        include("../Vista/verUnPerfil.php");
        include("../Vista/footer.php");

    }

    } else {

        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;

    }

?>