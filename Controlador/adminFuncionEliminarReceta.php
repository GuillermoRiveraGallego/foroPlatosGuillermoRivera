<?php
include("../Control/sesion.php");
control();

$idAEliminar = $_POST["nombreUsuario"];   //pone nombreusuario pero es el id

include("../Modelo/consultasRecetas.php");

if (isset($_POST["botonEliminar"])){


    eliminarReceta($idAEliminar);
    header("Location: ../Controlador/index.php?recetaEliminado=true");
    exit();


} else {

    header("Location: ../Controlador/index.php");
    exit();

}

?>