<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
include("../Modelo/consultasUsuarios.php");

$nombreUsuario = $_SESSION["nombreUsuario"]; 
$PerfilUsuario = datosUsuario($nombreUsuario);

include("../Vista/headerPerfilLogueado.php");

include("../Vista/editarPerfil.php");

include("../Vista/footer.php");

?>