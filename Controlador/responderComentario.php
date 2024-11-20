<?php

include("../Modelo/consultasComentarios.php");

$nombreUsuarioComenta = $_POST["id_usuario"];

crearRespuesta();

$rutaVolver = $_POST['redirectUrl'];

header("Location: $rutaVolver");


