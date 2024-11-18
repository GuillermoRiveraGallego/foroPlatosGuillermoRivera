<?php

session_start();
include("../Modelo/consultasUsuarios.php");

$nombreUsuario = $_SESSION["nombreUsuario"];
$idDelUsuario = saberIdNombreUsuario($nombreUsuario);

if (!selectNombreUsuario($_POST["nuevoNombreUsuario"]) || $_POST["nuevoNombreUsuario"] === $nombreUsuario) {
 
    if (isset($_FILES['fotoPerfil']) && $_FILES['fotoPerfil']['error'] == UPLOAD_ERR_OK) {
        
        $nuevaFotoPerfil = uniqid() . "_" . $_FILES["fotoPerfil"]["name"];
        move_uploaded_file($_FILES['fotoPerfil']['tmp_name'], "../Imagenes/" . $nuevaFotoPerfil);

    } else {
       
        $nuevaFotoPerfil = fotoDePerfilPorId($idDelUsuario)["foto_perfil"];

    }

    $_SESSION["nombreUsuario"] = $_POST["nuevoNombreUsuario"];
    cambiarDatosUsuario($idDelUsuario, $nuevaFotoPerfil);

    header("Location: ../Controlador/verPerfil.php");
    exit;

} else {
    
    header("Location: ../Controlador/editarPerfil.php?error=errorDeNombreUsuario");

}

