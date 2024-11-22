<?php

include("../Control/sesion.php");
control();
include("../Modelo/consultasIngredientes.php");

$idReceta = $_POST["idReceta"];
$ingredientesSeleccionados = $_POST["ingredientesSeleccionados"];

foreach ($ingredientesSeleccionados as $ingrediente) {
    eliminarIngredientes($idReceta, $ingrediente);
}

header("Location: ../Controlador/menuAdministradores.php");

