<?php
session_start();
include("../Modelo/consultasUsuarios.php");
include("../Vista/headerPerfilLogueado.php");

$nombreUsuario = $_SESSION["nombreUsuario"]; 
$PerfilUsuario = datosUsuario($nombreUsuario);

include("../Vista/editarContrasena.php");

include("../Vista/footer.php");

?>