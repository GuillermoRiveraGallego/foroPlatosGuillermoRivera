
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
        margin-top: 125px;
        margin-bottom: 95px;
    }

    .contenedorReceta img {
      width: 300px;
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

<div class="contenedorReceta">
  <!-- Imagen de la receta centrada -->
  <img src="<?php echo $receta['foto_receta'] ?? '../Imagenes/default.jpg'; ?>" alt="Foto de la receta">
  
  <!-- Nombre de la receta centrado -->
  <h2><?php echo $receta['nombre_receta'] ?? 'Nombre de la receta'; ?></h2>

  <div class="campo">
    <span class="nombreCampo">Realizada por:</span>
    <span class="valorCampo">solo para usuarios registrados</span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Valoración Media:</span>
    <span class="valorCampo"><?php echo $receta['valoracion_media'] ?? 'No disponible'; ?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Dificultad:</span>
    <span class="valorCampo"><?php echo $receta['dificultad'] ?? 'No disponible'; ?></span>
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
    <span class="nombreCampo">Tipo:</span>
    <span class="valorCampo"><?php echo $receta['tipo'] ?? 'No disponible'; ?></span>
  </div>

    <!-- Descripción centrada debajo del nombre y justificada -->
    <p class="descripcion">Descripciones de receras solo disponibles para usuarios registrados</p>
</div>

