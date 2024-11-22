<?php

include("../Control/sesion.php");
control();
include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasRecetas.php");

$nombreImagenReceta = "../Imagenes/default.jpg";
$usuarioCreaReceta = saberIdNombreUsuario($_SESSION["nombreUsuario"]);

$nombreParaReceta = $_SESSION["nombreUsuario"];

if (isset($_FILES['fotoReceta']) && $_FILES['fotoReceta']['error'] == UPLOAD_ERR_OK){

    $nombreImagenReceta = "../Imagenes/".$nombreParaReceta.$_FILES["fotoReceta"]["name"];
    move_uploaded_file($_FILES['fotoReceta']['tmp_name'],"../Imagenes/".$nombreImagenReceta);
	
}

crearRecetas($nombreImagenReceta,$usuarioCreaReceta);

$idUltimaReceta = ultimaRecetaAnadida();
$listaIngredientesNuevaReceta = $_POST["nombreIngrediente"];

include("../Vista/headerAdministradoresHome.php");
include("../Vista/personalizarIngredientes.php");
include("../Vista/footer.php");



?>