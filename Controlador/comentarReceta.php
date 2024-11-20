<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
include("../Modelo/consultasComentarios.php");

$nombreUsuarioComenta = $_POST["nombreUsuarioComenta"];

crearComentario();

$rutaVolver = $_POST['redirectUrl'];

header("Location: $rutaVolver");
