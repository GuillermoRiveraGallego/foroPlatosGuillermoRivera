<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle de la Receta</title>
  <style>
    /* Estilos para el contenedor de la receta */
    .contenedorReceta {
        width: 500px;
        margin: auto;
        padding: 20px;
        border: 2px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        background-color: #333;
        color: white; /* Color de texto en blanco */
        margin-top: 95px;
        margin-bottom: 95px;
    }

    .contenedorReceta img {
      width: 200px;
      height: auto;
      margin: 0 auto 20px auto;
      border-radius: 8px;
      display: block; /* Para centrar la imagen */
    }

    .contenedorReceta h2 {
      text-align: center;
      color: white;
      margin: 10px 0;
    }

    .descripcion {
      text-align: justify; /* Justificar el texto de la descripción */
      color: white;
      margin-bottom: 20px;
      font-size: 1em;
    }

    .campo {
      text-align: justify; /* Justificación para el campo */
      padding: 5px 0;
      border-bottom: 1px solid #555; /* Color de borde más claro */
    }

    .campo:last-child {
      border-bottom: none;
    }

    .nombreCampo {
      font-weight: bold;
      color: white;
      display: inline-block;
      width: 40%; /* Ancho fijo para alineación */
      vertical-align: top;
    }

    .valorCampo {
      color: white;
      display: inline-block;
      width: 58%; /* Ancho ajustado para alineación */
      text-align: justify;
    }
  </style>
</head>
<body>

<div class="contenedorReceta">
  <!-- Imagen de la receta centrada -->
  <img src="<?php echo $receta['foto_receta'] ?? '../Imagenes/default.jpg'; ?>" alt="Foto de la receta">
  
  <!-- Nombre de la receta centrado -->
  <h2><?php echo $receta['nombre_receta'] ?? 'Nombre de la receta'; ?></h2>

  <!-- Información de los campos -->
  <div class="campo">
    <span class="nombreCampo">ID:</span>
    <span class="valorCampo"><?php echo $receta['id'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">ID Usuario:</span>
    <span class="valorCampo"><?php echo $receta['id_usuario'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Nombre Receta:</span>
    <span class="valorCampo"><?php echo $receta['nombre_receta'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Fecha de Creación:</span>
    <span class="valorCampo"><?php echo $receta['fecha_creacion'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Fecha de Actualización:</span>
    <span class="valorCampo"><?php echo $receta['fecha_actualizacion'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Dificultad:</span>
    <span class="valorCampo"><?php echo $receta['dificultad'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Foto Receta:</span>
    <span class="valorCampo"><?php echo $receta['foto_receta'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Valoración Media:</span>
    <span class="valorCampo"><?php echo $receta['valoracion_media'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Tipo:</span>
    <span class="valorCampo"><?php echo $receta['tipo'] ?? 'No disponible'; ?></span>
  </div>

    <!-- Descripción centrada debajo del nombre y justificada -->
    <p class="descripcion"><?php echo $receta['descripcion'] ?? 'No disponible'; ?></p>
</div>

</body>
</html>
