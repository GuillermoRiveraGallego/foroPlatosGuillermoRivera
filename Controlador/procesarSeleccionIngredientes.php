<?php

include("../Control/sesion.php");
control();
include("../Modelo/consultasIngredientes.php");

if (empty($_POST['ingredientesSeleccionados'])) {

    header("Location: ../Controlador/menuAdministradores.php?error=SinIngredientes");
    exit;
}

$idReceta = $_POST["idReceta"];
$ingredientesSeleccionados = $_POST["ingredientesSeleccionados"];

foreach ($ingredientesSeleccionados as $ingrediente) {
    eliminarIngredientes($idReceta, $ingrediente);
}

header("Location: ../Controlador/menuAdministradores.php");

