<?php

include("../Modelo/consultasRecetas.php");
include "../Modelo/consultasUsuarios.php";

$receta = verUnaReceta();

$receta["nombreDelUsuario"] = NombreUsuarioPorId($receta["id_usuario"])["nombre_usuario"];


$idsIngredientes = ingredientesReceta($receta['id']);

$listaIngredientes = [];

foreach ($idsIngredientes as $id) {

    $listaIngredientes[] = selectIngrediente($id);

}

include("../Vista/headerLogueado.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");


?>