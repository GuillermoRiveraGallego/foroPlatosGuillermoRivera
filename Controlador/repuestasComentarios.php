<?php

session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasComentarios.php");

$idUsuarioResponde = saberIdNombreUsuario($_SESSION["nombreUsuario"]);

crearRespuesta($idUsuarioResponde);

$rutaVolver = $_POST['redirectUrl'];

header("Location: $rutaVolver");


?>