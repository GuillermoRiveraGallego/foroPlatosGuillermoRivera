<?php
include("../Control/sesion.php");
control();



$nombreUsuarioAeliminarAdmin = $_POST["nombreUsuario"];

include("../Modelo/consultasUsuarios.php");

if (isset($_POST["botonEliminar"])){

 if (selectNombreUsuario($nombreUsuarioAeliminarAdmin)){
    eliminarUsuarioPorNombre($nombreUsuarioAeliminarAdmin);
    header("Location: ../Controlador/index.php?usuarioEliminado=true");
    exit();

 } else {

    header("Location: ../Controlador/index.php");
    exit();

 }

} else {

    header("Location: ../Controlador/index.php");
    exit();

}

?>