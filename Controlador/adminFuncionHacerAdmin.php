<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
$nombreUsuarioHacerAdmin = $_POST["nombreUsuario"];

include("../Modelo/consultasUsuarios.php");

if (isset($_POST["botonEliminar"])){

 if (selectNombreUsuario($nombreUsuarioHacerAdmin)){
    hacerAdmin($nombreUsuarioHacerAdmin);
    header("Location: ../Controlador/adminHaceAdministrador.php?error=usuarioOkAdmin");
    exit();

 } else {

    header("Location: ../Controlador/adminHaceAdministrador.php?error=usuarioNoAdmin");
    exit();


 }

} else {

    header("Location: ../Controlador/adminHaceAdministrador.php");
    exit();

}

?>