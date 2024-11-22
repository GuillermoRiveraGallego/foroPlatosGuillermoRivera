<?php
include("../Control/sesion.php");
control();

if (!isset($_POST["id"]) || empty($_POST["id"])) {

    header("Location: ../Controlador/menuAdministradores.php");
    exit;

}

$idReceta = $_POST["id"];

include("../Vista/headerAdministradoresHome.php");
include("../Vista/modificaIngredientesOpciones.php");
include("../Vista/footer.php");