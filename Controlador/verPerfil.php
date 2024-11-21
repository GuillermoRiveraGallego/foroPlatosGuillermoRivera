<?php
include("../Control/sesion.php");
control();
include("../Vista/headerPerfilLogueado.php");
include("../Modelo/consultasUsuarios.php");

$nombreUsuario = $_SESSION["nombreUsuario"]; 
$PerfilUsuario = datosUsuario($nombreUsuario);

include("../Vista/verPerfil.php");
include("../Vista/footer.php");

?>