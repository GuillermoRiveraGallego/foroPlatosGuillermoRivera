<?php
session_start();

include("../Modelo/consultasRecetas.php");
include ("../Modelo/consultasUsuarios.php");
include ("../Modelo/consultasComentarios.php");

$nombreUsuarioQueComenta = $_SESSION["nombreUsuario"];
$idUsuarioQueComenta = saberIdNombreUsuario($nombreUsuarioQueComenta);

$receta = verUnaReceta();
$receta["nombreDelUsuario"] = NombreUsuarioPorId($receta["id_usuario"])["nombre_usuario"];

$idsIngredientes = ingredientesReceta($receta['id']);
$listaIngredientes = [];

$comentarios = devuelveComentariosReceta ($receta["id"]);
$listaComentarios = [];

/*relleno los ingredientes */

if (isset($idsIngredientes) && !empty($idsIngredientes)){

    foreach ($idsIngredientes as $ingrediente) {
        
        $listaIngredientes[] = [
            "nombreIngrediente" => selectIngrediente($ingrediente["id_ingrediente"]) ,
            "cantidad" => $ingrediente["cantidad"],
            "medida" => $ingrediente["unidad_medida"]
        ];
    }

}


/*relleno los comentarios (tengo en cuenta si no existe el que comenta pero no deberia suceder esta situacion)*/
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
            "idUsuarioComenta" => $comenta["id_usuario"], //para lpoder responder guardamos el usuario que responde
            "recetaComentada" => $comenta["id_receta"]
        ];
    }
}


include("../Vista/headerLogueadoHome.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");

?>