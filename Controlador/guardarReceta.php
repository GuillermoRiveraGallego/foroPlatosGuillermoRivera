<?php

include("../Control/sesion.php");
control();

$nombreDeReceta = $_POST["nombre_receta"];
$dificultadDeReceta = $_POST["dificultad"];
$tipoDeReceta = $_POST["tipo"];
$descripcionDeReceta = $_POST["descripcion"];
$nombreImagenReceta = $_FILES["fotoReceta"]["name"];

/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/
/*aqui hago el insert*/

include("../Modelo/consultasRecetas.php");
$idUltimaReceta = ultimaRecetaAnadida();


$listaIngredientesNuevaReceta = $_POST["nombreIngrediente"];

include("../Vista/headerAdministradoresHome.php");
include("../Vista/personalizarIngredientes.php");
include("../Vista/footer.php");



?>