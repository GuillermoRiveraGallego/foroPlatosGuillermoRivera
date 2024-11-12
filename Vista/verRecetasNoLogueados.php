<?php

echo "<div class='cuerpoRecetas'>";
foreach($recetas as $receta){
   
    $id = $receta['id'];
    $nombre_receta = $receta['nombre_receta'];
    $foto_receta = $receta['foto_receta'];
    $tipo = $receta['tipo'];
    $dificultad = $receta['dificultad'];
    $valoracion_media = $receta['valoracion_media'];
    $fecha_creacion = $receta['fecha_creacion'];
    $fecha_actualizacion = $receta['fecha_actualizacion'];
    $usuario = $receta['id_usuario']; // Asumiendo que tienes el nombre del usuario asociado con 'id_usuario'

    echo "<div class='contenedorDeRecetas'>
            <a href='../Controlador/unaReceta.php?idReceta=$id'><img class='fotoReceta' src='$foto_receta' alt='Foto de la receta'></a>
            <div class='informacionReceta'>
                <div class='nombreReceta'>$nombre_receta</div>
                <div class='tipoDeReceta'>$tipo</div>
                <div class='dificultad'>$dificultad</div>
                <div class='valoracionMedia'>Valoración Media: $valoracion_media</div>
                <div class='fechaDeReceta'>Fecha de Creación: $fecha_creacion</div>
                <div class='fechaDeModificacion'>Fecha de Modificación: $fecha_actualizacion</div>
                <div class='usuarioReceta'>Autor: $usuario</div>
            </div>
          </div>";
}
echo "</div>"; // Mover este cierre fuera del foreach

// Contenedor de botones de paginación
echo "<div class='contenedorDeBotones'>";
        
if($numPagina != 0){
    echo "<div class='boton'><a href='index.php?numPagina=".($numPagina-1)."'> Anterior </a></div>";
}

if($numPagina != $maxPagina){
    echo "<div class='boton'><a href='index.php?numPagina=".($numPagina+1)."'> Siguiente </a></div>";
}
echo "</div>";

?>


<style>

    .cuerpoRecetas{

        margin-top: 95px;
        

    }

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
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4); 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
}

.fotoReceta:hover {
    transform: scale(1.1); 
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5); 
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

    margin-bottom: 90px;

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





