<?php

if (isset($_POST["enviar"])){

$listaIngredientesNuevaReceta = $_POST["nombreIngrediente"];
$idUltimaReceta = $_POST["idReceta"];

include("../Vista/headerAdministradoresHome.php");
include("../Vista/anadirIngredientesRecetasCantidades.php");
include("../Vista/footer.php");   

} else {

    header("Location: ../Controlador/index.php");
    exit;
}


