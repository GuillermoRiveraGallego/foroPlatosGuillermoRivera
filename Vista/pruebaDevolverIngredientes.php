<?php

include("../Modelo/consultasRecetas.php");
$id = 5;



$ids = ingredientesReceta($id);
echo("Aqui se muestran los ingredientes de una receta mirando primero la id receta sacando los ids de ingredientes y luego
sacando los nombres de ingredientes a traves de esos ids <BR>");
foreach ($ids as $is){


    echo(selectIngrediente($is));

}

?>