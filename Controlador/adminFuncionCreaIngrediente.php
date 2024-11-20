<?php

session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}

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

?>