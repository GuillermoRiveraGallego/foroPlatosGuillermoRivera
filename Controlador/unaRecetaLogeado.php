<?php
include("../Control/sesion.php");
control();

include("../Modelo/consultasRecetas.php");
include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasComentarios.php");

$nombreUsuarioQueComenta = $_SESSION["nombreUsuario"];
$idUsuarioQueComenta = saberIdNombreUsuario($nombreUsuarioQueComenta);

$receta = verUnaReceta();


$mediaCalculada = devuelveValoracion($receta['id']);

if ($mediaCalculada != false){

   $receta['valoracion_media'] = round($mediaCalculada, 1)."/5";

} else {

    $receta['valoracion_media'] = "sin valoraciones";

}


$usuarioResultado = NombreUsuarioPorId($receta["id_usuario"]);

/*comprobar si ha devuelto algo xq sino hay q poner usuario desconocido */

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

//Aqui me guardo todos los comentarios
$comentarios = devuelveComentariosReceta($receta["id"]);

// aqui consigo el nombre a traves del id del usuario
foreach ($comentarios as &$comentario) {
    $usuario = NombreUsuarioPorId($comentario['id_usuario']);
    $comentario['nombre_usuario'] = $usuario['nombre_usuario'] ?? 'Usuario desconocido';
}


include("../Vista/headerLogueadoHome.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");

?>
