<?php

include("../Control/sesion.php");
control();

include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasComentarios.php");

$idUsuarioResponde = saberIdNombreUsuario($_SESSION["nombreUsuario"]);

crearRespuesta($idUsuarioResponde);

$rutaVolver = $_POST['redirectUrl'];

header("Location: $rutaVolver");


?>