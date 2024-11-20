<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
include("../Modelo/consultasComentarios.php");

$nombreUsuarioComenta = $_POST["id_usuario"];

crearRespuesta();

$rutaVolver = $_POST['redirectUrl'];

header("Location: $rutaVolver");


