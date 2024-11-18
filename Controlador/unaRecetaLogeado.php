<?php

include("../Modelo/consultasRecetas.php");
include "../Modelo/consultasUsuarios.php";

$receta = verUnaReceta();
$receta["nombreDelUsuario"] = NombreUsuarioPorId($receta["id_usuario"])["nombre_usuario"];

$idsIngredientes = ingredientesReceta($receta['id']);
$listaIngredientes = [];

if (isset($idsIngredientes) && !empty($idsIngredientes)){

foreach ($idsIngredientes as $ingrediente) {
    $listaIngredientes[] = [
        "nombreIngrediente" => selectIngrediente($ingrediente["id_ingrediente"]) ,
        "cantidad" => $ingrediente["cantidad"],
        "medida" => $ingrediente["unidad_medida"]
    ];
}

}

include("../Vista/headerLogueadoHome.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");

?>