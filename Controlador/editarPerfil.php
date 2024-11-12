<?php
session_start();
include("../Modelo/consultasUsuarios.php");

$nombreUsuario = $_SESSION["nombreUsuario"]; 
$PerfilUsuario = datosUsuario($nombreUsuario);

include("../Vista/headerLogueado.php");

include("../Vista/editarPerfil.php");

include("../Vista/footer.php");

?>