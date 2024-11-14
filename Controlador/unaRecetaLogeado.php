<?php

include("../Modelo/consultasRecetas.php");
include "../Modelo/consultasUsuarios.php";

$receta = verUnaReceta();

$receta["nombreDelUsuario"] = NombreUsuarioPorId($receta["id_usuario"])["nombre_usuario"];


/*
array(5) { [0]=> array(2) { ["id_ingrediente"]=> int(1) ["cantidad"]=> int(100) } [1]=> array(2) { ["id_ingrediente"]=> int(2) ["cantidad"]=> int(50) } [2]=> array(2) { ["id_ingrediente"]=> int(3) ["cantidad"]=> int(200) } [3]=> array(2) 
{ ["id_ingrediente"]=> int(4) ["cantidad"]=> int(100) } [4]=> array(2) { ["id_ingrediente"]=> int(5) ["cantidad"]=> int(150) } }*/


$idsIngredientes = ingredientesReceta($receta['id']);

$listaIngredientes = [];

foreach ($idsIngredientes as $ingrediente) {
    $listaIngredientes[] = [
        "nombreIngrediente" => selectIngrediente($ingrediente["id_ingrediente"]) ,
        "cantidad" => $ingrediente["cantidad"],
        "medida" => $ingrediente["unidad_medida"]
    ];
}


include("../Vista/headerLogueado.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");


?>