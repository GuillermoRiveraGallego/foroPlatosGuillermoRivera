<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasRecetas.php");

$esAdmin = esAdmin($_SESSION["nombreUsuario"]);


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

        include("../Vista/headerLogueadoHome.php");
        include("../Vista/verUnPerfil.php");
        include("../Vista/footer.php");

    }

    } else {

        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;

    }

?>