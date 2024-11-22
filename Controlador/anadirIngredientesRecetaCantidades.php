<?php

include("../Control/sesion.php");
control();

$listaIngredientesNuevaReceta = $_POST["nombreIngrediente"];
$idUltimaReceta = $_POST["idReceta"];

include("../Vista/headerAdministradoresHome.php");
include("../Vista/anadirIngredientesRecetasCantidades.php");
include("../Vista/footer.php");   

