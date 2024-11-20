<?php

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