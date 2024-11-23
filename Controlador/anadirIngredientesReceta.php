<?php

if (isset($_POST["modificacionReceta"])){

    
include("../Modelo/consultasIngredientes.php");
$todosLosIngredientes = nombresIngredientes();

include("../Vista/headerAdministradoresHome.php");
include("../Vista/anadirIngredientesReceta.php");
include("../Vista/footer.php");

} else {

    header("Location: ../Controlador/index.php");
    exit;

}



