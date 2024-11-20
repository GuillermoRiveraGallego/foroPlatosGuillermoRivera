<?php
session_start();
include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasComentarios.php");


if (isset($_POST["Comentar"])){

$usuarioRespondido = $_POST["idUsuarioRespondido"];
$usuarioResponde = saberIdNombreUsuario($_SESSION["nombreUsuario"]);
$textoRespuesta = $_POST["comentarioRespuesta"];
$idRecetaDeComentarios = $_POST["idRecetaComentada"];

insertarRespuesta($usuarioResponde);

}


echo("El usuario :".$usuarioResponde." le ha dicho a ".$usuarioRespondido." que ".$textoRespuesta." en al receta ".$idRecetaDeComentarios);

/*Consulta*/
/*SELECT * FROM `Comentario` WHERE id_receta = 5 AND id_usuario_responde IS NOT NULL;*/

?>