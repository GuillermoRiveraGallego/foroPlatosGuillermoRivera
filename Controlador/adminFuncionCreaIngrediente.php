<?php
include("../Control/sesion.php");
control();



include("../Modelo/consultasIngredientes.php");
$nombreIngredienteCrear = $_POST["nombreUsuario"];


if (isset($_POST["botonEliminar"])){

 if (!selectNombreIngrediente($nombreIngredienteCrear)){
   
    crearIngrediente($nombreIngredienteCrear);
    header("Location: ../Controlador/adminCreaIngrediente.php?error=ingredienteCreado");
    exit();

 } else {

    header("Location: ../Controlador/adminCreaIngrediente.php?error=ingredienteNoCreado");
    exit();

 }

} else {

    header("Location: ../Controlador/adminCreaIngrediente.php");
    exit();

}