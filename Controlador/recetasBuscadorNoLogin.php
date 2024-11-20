<?php

include "../Modelo/consultasRecetas.php";
include "../Modelo/consultasUsuarios.php";

$nombre_receta = $_POST['buscarReceta'];

$tamanioPagina=5;
if(isset($_GET['numPagina'])){
    $numPagina=$_GET['numPagina'];
}
else{
    $numPagina=0;
}
$numRecetas=contarRecetasTotales();
$maxPagina=floor($numRecetas/$tamanioPagina);

$primeraReceta=$numPagina*$tamanioPagina;


$recetasNombre =selectRecetasBuscador($primeraReceta,$tamanioPagina,$nombre_receta);

$recetasIngredientes = selectRecetasBuscadorIngredientes ($primeraReceta,$tamanioPagina,$nombre_receta);

$recetas = array_merge($recetasNombre, $recetasIngredientes);

// Eliminar duplicados ya que uso las dos consultas
$recetas = array_map("unserialize", array_unique(array_map("serialize", $recetas)));


include("../Vista/headerNoLogueado.php");
include("../Vista/verRecetasNoLogueados.php");
include("../Vista/footer.php");
