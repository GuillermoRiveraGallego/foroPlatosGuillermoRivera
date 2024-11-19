<?php
session_start();
include("../Modelo/consultasUsuarios.php");


$usuarioRespondido = $_POST["idUsuarioRespondido"];
$usuarioResponde = saberIdNombreUsuario($_SESSION["nombreUsuario"]);
$textoRespuesta = $_POST["comentarioRespuesta"];
$idRecetaDeComentarios = $_POST["idRecetaComentada"];


echo("El usuario :".$usuarioResponde." le ha dicho a ".$usuarioRespondido." que ".$textoRespuesta." en al receta ".$idRecetaDeComentarios);


?>