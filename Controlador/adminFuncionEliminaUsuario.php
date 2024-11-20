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
    header("Location: ../Controlador/adminEliminaUsuario.php?error=usuarioEliminado");
    exit();

 } else {

    header("Location: ../Controlador/adminEliminaUsuario.php?error=usuarioNoEliminado");
    exit();


 }

} else {

    header("Location: ../Controlador/adminEliminaUsuario.php");
    exit();

}

?>