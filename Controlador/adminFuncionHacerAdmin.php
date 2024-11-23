<?php
include("../Control/sesion.php");
control();



$nombreUsuarioHacerAdmin = $_POST["nombreUsuario"];

include("../Modelo/consultasUsuarios.php");

if (isset($_POST["botonEliminar"])){

 if (selectNombreUsuario($nombreUsuarioHacerAdmin)){
    hacerAdmin($nombreUsuarioHacerAdmin);
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();

 } else {

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();


 }

} else {

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();

}