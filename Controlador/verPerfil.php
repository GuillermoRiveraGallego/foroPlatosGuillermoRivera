<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
include("../Vista/headerPerfilLogueado.php");
include("../Modelo/consultasUsuarios.php");

$nombreUsuario = $_SESSION["nombreUsuario"]; 
$PerfilUsuario = datosUsuario($nombreUsuario);

include("../Vista/verPerfil.php");
include("../Vista/footer.php");

?>