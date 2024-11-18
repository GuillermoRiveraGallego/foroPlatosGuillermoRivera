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


foreach ($recetas as &$receta) {

    $receta["nombreDelUsuario"] = NombreUsuarioPorId($receta["id_usuario"])["nombre_usuario"];

}

unset($receta);

include("../Vista/verRecetasSiLogueados.php");

?>