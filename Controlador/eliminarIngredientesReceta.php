<?php
include("../Control/sesion.php");
control();

include("../Modelo/consultasRecetas.php");
include("../Modelo/consultasIngredientes.php");

$ingredientesDeReceta = ingredientesReceta($_POST["idReceta"]);

foreach ($ingredientesDeReceta as $ingredientes => $ingrediente) {

    $idIngrediente = $ingrediente["id_ingrediente"];
    $nombreIngrediente = selectNombreIngredienteID($idIngrediente);
    $ingredientesDeReceta[$ingredientes]["nombre"] = $nombreIngrediente;
}

include("../Vista/headerAdministradoresHome.php");
include("../Vista/eliminarIngredientesModificacion.php");
include("../Vista/footer.php");
