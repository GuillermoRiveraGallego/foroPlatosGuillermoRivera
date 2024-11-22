<?php

include("../Control/sesion.php");
control();

include("../Modelo/consultasRecetas.php");

if (isset($_FILES['fotoReceta']) && $_FILES['fotoReceta']['error'] == UPLOAD_ERR_OK){

    $imagenModificada = "../Imagenes/".$_FILES["fotoReceta"]["name"];
    move_uploaded_file($_FILES['fotoReceta']['tmp_name'],"../Imagenes/".$imagenModificada);
	
} else {

    $imagenModificada = $_POST["fotoGuardadaperfil"];

}

updateReceta($imagenModificada);

header("Location: ../Controlador/menuAdministradores.php");
exit;

