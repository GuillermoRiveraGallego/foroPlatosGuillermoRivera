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

	function mostrarComentario($comentarios, $miComentario, $margen){

        $usuarioNombre = NombreUsuarioPorId($miComentario['id_usuario']);
            if ($usuarioNombre && isset($usuarioNombre['nombre_usuario'])) {
                echo "Autor: {$usuarioNombre['nombre_usuario']}<br>";
            } else {
                 echo "Autor: Usuario desconocido<br>";
            }

		echo "Contenido: {$miComentario['texto']}<br>";
	
		$respuestas=array();
		foreach($comentarios as $comentario){
			if($comentario['id_comentario_respuesta']==$miComentario['id']){
				$respuestas[]=$comentario;
			}
		}
		echo "<div style='margin-left:{$margen}px;'>";
		foreach($respuestas as $respuesta){
			mostrarComentario($comentarios, $respuesta, $margen+150);
		}
		echo "</div>";
	}



include("../Vista/headerLogueadoHome.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");

?>
