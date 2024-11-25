<?php

if (isset($_POST["modificacionIngredientes"])) {

    

    $idReceta = $_POST["id"];

    include("../Vista/headerAdministradoresHome.php");
    include("../Vista/modificaIngredientesOpciones.php");
    include("../Vista/footer.php");
    

} else {

    header("Location: ../Controlador/menuAdministradores.php");
    exit;

}

