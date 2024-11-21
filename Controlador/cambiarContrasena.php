<?php
include("../Control/sesion.php");
control();



include("../Modelo/consultasUsuarios.php");
include("../Vista/headerPerfilLogueado.php");

$nombreUsuario = $_SESSION["nombreUsuario"]; 
$PerfilUsuario = datosUsuario($nombreUsuario);

include("../Vista/editarContrasena.php");

include("../Vista/footer.php");

?>