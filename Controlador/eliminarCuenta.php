<?php

include("../Control/sesion.php");
control();

include("../Modelo/consultasUsuarios.php");
$nombreUsuario = $_SESSION["nombreUsuario"];
$id = saberIdNombreUsuario($nombreUsuario);
eliminarUsuario($id);
session_unset();
session_destroy();
header("Location: index.php");

?>