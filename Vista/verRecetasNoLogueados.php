<?php

echo("<div class='contenedorDeRecetas'>");

foreach($recetas as $receta){
    $id=$receta['id'];
    echo "<a href='../Controlador/unaReceta.php?idReceta=$id'><img height=80px src={$receta['foto_receta']}></a><br>{$receta['nombre_receta']}<br>";
}
if($numPagina!=0){
    echo "<div class='boton'> <br><a href='index.php?numPagina=".($numPagina-1)."'> Anterior </a></div>";
}
if($numPagina!=$maxPagina){
    echo"<div class='boton'> <br><a href='index.php?numPagina=".($numPagina+1)."'> Siguiente </a></div>";
}

echo("</div>");

?>


<div class="contenedorDeRecetas">

    

    <a href="../Controlador/unaReceta.php?idReceta=1"><img class="fotoReceta" src="../Imagenes/default.jpg" alt="Foto de la receta">  </a>

    <div class="informacionReceta">

        <div class="nombreReceta">Paella Valenciana</div>
        <div class="tipoDeReceta">Receta Tradicional</div>
        <div class="dificultad">Dificil</div>
        <div class="valoracionMedia">Valoración Media: 5.5</div>
        <div class="fechaDeReceta">Fecha de Creación: 15/11/1999</div>
        <div class="fechaDeModificacion">Fecha de Modificación: 15/11/1999</div>
        <div class="usuarioReceta">Realizada por Guillermo</div>

    </div>
</div>

<div class="contenedorDeBotones">

    <div class="boton"> <a href="">anterior</a> </div>
    <div class="boton"> <a href="">siguiente</a> </div>

</div>




<style>

.contenedorDeRecetas {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 20px;
    padding: 20px;
    background: linear-gradient(145deg, #333333, #1a1a1a);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5), inset 0 4px 8px rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    max-width: 800px;
    margin: 20px auto;
    color: #ffffff;
}

.fotoReceta {
    width: 200px;
    height: 200px;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.informacionReceta {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 500px;
}

.nombreReceta {
    font-size: 24px;
    font-weight: bold;
    color: #ffffff;
}

.tipoDeReceta,
.dificultad,
.valoracionMedia,
.fechaDeReceta,
.fechaDeModificacion,
.usuarioReceta {
    font-size: 16px;
    color: #dddddd;
}

.tipoDeReceta {
    font-weight: bold;
    text-transform: uppercase;
    color: #aaaaaa;
}

.dificultad {
    font-weight: bold;
    color: #e74c3c; /* Rojo suave */
    text-transform: capitalize;
}

.valoracionMedia {
    color: #f1c40f; /* Amarillo para valoración */
    font-weight: bold;
}

.fechaDeReceta,
.fechaDeModificacion,
.usuarioReceta {
    color: #bbbbbb;
}

.fechaDeReceta::before {
    content: "Fecha de creación: ";
    font-weight: bold;
}

.fechaDeModificacion::before {
    content: "Fecha de modificación: ";
    font-weight: bold;
}

.usuarioReceta::before {
    content: "Autor: ";
    font-weight: bold;
}

/* Estilos para los botones */
.contenedorDeBotones {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin: 20px auto;
}

.boton {
    background: linear-gradient(145deg, #444444, #222222);
    border-radius: 8px;
    padding: 10px 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}

.boton a {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    font-size: 16px;
}

.boton:hover {
    background: linear-gradient(145deg, #555555, #333333);
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
}


</style>





