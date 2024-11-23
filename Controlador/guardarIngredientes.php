<?php

include("../Control/sesion.php");
control();
include("../Modelo/consultasIngredientes.php");
$idRecetaIngredientes = $_POST["idDeLaReceta"];
$cantidades = $_POST["cantidad"];
$unidadesMedida = $_POST["unidadMedida"];


    foreach ($cantidades as $ingrediente => $cantidad) {
        
       $idDelIngrediente =  selectIDIngrediente($ingrediente);
       $unidad = $unidadesMedida[$ingrediente];

       insertarIngredienteReceta($idDelIngrediente, $idRecetaIngredientes, $cantidad, $unidad);

        
    }

    header("Location: ../Controlador/menuAdministradores.php?recetaCreada=true");

