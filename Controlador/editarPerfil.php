<?php
session_start();
include("../Modelo/consultasUsuarios.php");

$nombreUsuario = $_SESSION["nombreUsuario"]; 
$PerfilUsuario = datosUsuario($nombreUsuario);

include("../Vista/headerPerfilLogueado.php");

include("../Vista/editarPerfil.php");

include("../Vista/footer.php");

?>