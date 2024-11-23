<?php
include("../Control/sesion.php");
control();

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

foreach ($recetas as &$receta) {
    $nombreUsuario = NombreUsuarioPorId($receta["id_usuario"]);
    if ($nombreUsuario) {
        $receta["nombreDelUsuario"] = $nombreUsuario["nombre_usuario"];
    } else {
        $receta["nombreDelUsuario"] = "Usuario desconocido"; //  si no se encuentra el usuario
    }
}

unset($receta);

include("../Vista/headerLogueado.php");
include("../Vista/verRecetasSiLogueados.php");
include("../Vista/footer.php");
