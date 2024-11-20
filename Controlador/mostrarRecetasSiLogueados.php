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
    
    $resultado = NombreUsuarioPorId($receta["id_usuario"]);

    
    if ($resultado && isset($resultado["nombre_usuario"])) {
        $receta["nombreDelUsuario"] = $resultado["nombre_usuario"];
    } else {
        $receta["nombreDelUsuario"] = "usuario restringido";
    }
}

unset($receta);

include("../Vista/verRecetasSiLogueados.php");

?>