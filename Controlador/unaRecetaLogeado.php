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

$comentarios = devuelveComentariosReceta($receta["id"]);
$listaComentarios = [];

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

/* Relleno los comentarios */
if (isset($comentarios) && !empty($comentarios)) {
    foreach ($comentarios as $comenta) {
        $usuario = NombreUsuarioPorId($comenta["id_usuario"]);
        $nombreUsuario = ($usuario && isset($usuario["nombre_usuario"]))
            ? $usuario["nombre_usuario"]
            : "Usuario desconocido";

        $listaComentarios[] = [
            "usuarioComenta" => $nombreUsuario,
            "fechaCreacion" => $comenta["fecha_creacion"],
            "textoComentario" => $comenta["texto"],
            "valoracion" => $comenta["valoracion"],
            "idUsuarioComenta" => $comenta["id_usuario"], // Guardamos el usuario que responde
            "recetaComentada" => $comenta["id_receta"]
        ];
    }
}

include("../Vista/headerLogueadoHome.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");
?>
