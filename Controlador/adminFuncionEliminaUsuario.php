<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}

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