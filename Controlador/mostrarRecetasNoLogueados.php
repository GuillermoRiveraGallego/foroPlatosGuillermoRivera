<?php
include "../Modelo/consultasRecetas.php";
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
$recetas=selectRecetas($primeraReceta,$tamanioPagina);
include("../Vista/verRecetasNoLogueados.php");
?>