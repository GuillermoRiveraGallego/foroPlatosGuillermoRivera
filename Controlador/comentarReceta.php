<?php


include("../Modelo/consultasComentarios.php");

$nombreUsuarioComenta = $_POST["nombreUsuarioComenta"];

crearComentario ();

$rutaVolver = $_POST['redirectUrl'];

header("Location: $rutaVolver");
