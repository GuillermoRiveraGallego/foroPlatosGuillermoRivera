<?php
session_start();

include("../Modelo/consultasRecetas.php");
include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasComentarios.php");

$nombreUsuarioQueComenta = $_SESSION["nombreUsuario"];
$idUsuarioQueComenta = saberIdNombreUsuario($nombreUsuarioQueComenta);

$receta = verUnaReceta();

// Verificar si NombreUsuarioPorId devuelve un resultado válido
$usuarioResultado = NombreUsuarioPorId($receta["id_usuario"]);

if ($usuarioResultado && isset($usuarioResultado["nombre_usuario"])) {
    $receta["nombreDelUsuario"] = $usuarioResultado["nombre_usuario"];
} else {
    $receta["nombreDelUsuario"] = "Usuario desconocido";
}

$idsIngredientes = ingredientesReceta($receta['id']);
$listaIngredientes = [];

/* Relleno los ingredientes */
if (isset($idsIngredientes) && !empty($idsIngredientes)) {
    foreach ($idsIngredientes as $ingrediente) {
        $listaIngredientes[] = [
            "nombreIngrediente" => selectIngrediente($ingrediente["id_ingrediente"]),
            "cantidad" => $ingrediente["cantidad"],
            "medida" => $ingrediente["unidad_medida"]
        ];
    }
}

$comentarios = devuelveComentariosReceta($receta["id"]);
$listaComentarios = [];

$respuestas = devuelveRespuestasReceta ($receta["id"]);
$listaRespuestas = [];

if (isset($respuestas) && !empty($respuestas)) {
    foreach ($respuestas as $respuesta) {
        // Obtenemos el nombre del usuario
        $usuario = NombreUsuarioPorId($respuesta["id_usuario"]);
        $nombreUsuario = ($usuario && isset($usuario["nombre_usuario"]))
            ? $usuario["nombre_usuario"]
            : "Usuario desconocido";

        // Construimos el array de respuestas
        $listaRespuestas[] = [
            "usuarioComenta" => $nombreUsuario,                    // Usuario que ha comentado
            "fechaCreacion" => $respuesta["fecha_creacion"],       // Fecha del comentario
            "textoComentario" => $respuesta["texto"],             // Texto del comentario
            "idComentarioRespondido" => $respuesta["id_comentario_respuesta"] // ID del comentario al que responde
        ];
    }
}

var_dump($listaRespuestas);exit;

/* Relleno los comentarios */
if (isset($comentarios) && !empty($comentarios)) {

    foreach ($comentarios as $comenta) {

        $usuario = NombreUsuarioPorId($comenta["id_usuario"]);   /*Guardamos el usuario que ha comentado*/
        $nombreUsuario = ($usuario && isset($usuario["nombre_usuario"]))
            ? $usuario["nombre_usuario"]
            : "Usuario desconocido";

        $listaComentarios[] = [
            "usuarioComenta" => $nombreUsuario,                               /*Usuario que ha comentado*/
            "fechaCreacion" => $comenta["fecha_creacion"],                    /*fecha de comentario*/
            "textoComentario" => $comenta["texto"],                           /*texto de comentario*/
            "valoracion" => $comenta["valoracion"],                              /*Valoracion*/
            "idComentario" => $comenta["id"],                              /*id comentario */
            "idRecetaComentada" => $comenta["id_receta"],
            "respuestas" => [] 
        ];

        foreach ($listaRespuestas as $respuesta) {
            if ($respuesta["idComentarioRespondido"] === $comenta["id"]) {
                $comentarioData["respuestas"][] = $respuesta;
            }
        }

        // Añadimos el comentario (con o sin respuestas) a la lista final
        $listaComentarios[] = $comentarioData;


    }
}

include("../Vista/headerLogueadoHome.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");
?>
