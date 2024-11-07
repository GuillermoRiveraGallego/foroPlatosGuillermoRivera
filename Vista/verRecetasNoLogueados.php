<?php
echo("<div class='contenedorDeRecetas'>");
foreach($recetas as $receta){
    $id=$receta['id'];
    echo "<a href='unaReceta.php?idReceta=$id'><img height=80px src={$receta['foto_receta']}></a><br>{$receta['nombre_receta']}<br>";
}
if($numPagina!=0){
    echo "<div class='boton'> <br><a href='index.php?numPagina=".($numPagina-1)."'> Anterior </a></div>";
}
if($numPagina!=$maxPagina){
    echo"<div class='boton'> <br><a href='index.php?numPagina=".($numPagina+1)."'> Siguiente </a></div>";
}

echo("</div>");
?>

<style>

*{
    color: white;
}

.contenedorDeRecetas{

margin-top: 150px;
justify-content: center;
text-align: center;

}

</style>





