
<div class="contenedorReceta">
  <!-- Imagen de la receta centrada -->
  <img src="<?php echo $receta['foto_receta'] ?? '../Imagenes/default.jpg'; ?>" alt="Foto de la receta">
  
  <!-- Nombre de la receta centrado -->
  <h2><?php echo $receta['nombre_receta'] ?? 'Nombre de la receta'; ?></h2>

  <div class="campo">
    <span class="nombreCampo">Realizada por:</span>
    <span class="valorCampo"><?php echo $receta['nombreDelUsuario']?></span>
  </div>
  <div class="campo">
    <span class="nombreCampo">Tipo:</span>
    <span class="valorCampo"><?php echo $receta['tipo'] ?? 'No disponible'; ?></span>
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
    <span class="nombreCampo">Lista de ingredientes:</span>
    <span class="valorCampo">
    <?php 
        foreach ($listaIngredientes as $ingrediente) {
            echo $ingrediente['nombreIngrediente'].": ".$ingrediente['cantidad']." ".$ingrediente['medida']. "<br>";
        }
    ?>
</span>

  </div>

  <!-- Descripción de la receta -->
  <p class="descripcion"><?php echo $receta['descripcion'] ?? 'No disponible'; ?></p>

  <!-- Área de comentarios -->
  <div class="campo">
    <span class="valorCampoComentario">
      <form action="" method="post">
        <textarea name="comentarios" rows="5" placeholder="Escribe tu comentario aquí..."></textarea>
      </form>
    </span>
  </div>

</div>

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
      width: 100%; /* Ajustar al 100% del contenedor */
      max-width: 300px; /* Máximo ancho para que no sea demasiado grande */
      height: auto;
      margin: 0 auto 20px auto;
      border-radius: 8px;
      display: block; /* Para centrar la imagen */
    }

    .contenedorReceta h2 {
      text-align: center;
      color: white;
      margin: 10px 0 20px 0;
    }

    .descripcion {
      text-align: justify;
      color: white;
      margin-bottom: 20px;
      font-size: 1em;
    }

    .campo {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #555;
    }

    .campo:last-child {
      border-bottom: none;
    }

    .nombreCampo {
      font-weight: bold;
      color: white;
      flex-basis: 40%;
    }

    .valorCampo {
      color: white;
      flex-basis: 58%;
      text-align: left;
    }
    .valorCampoComentario{

      color: white;
      flex-basis: 95%;
      text-align: left;

    }

    /* Estilo del textarea */
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      resize: vertical; /* Permite cambiar el tamaño verticalmente */
      background-color: #444;
      color: white;
    }

    textarea::placeholder {
      color: #aaa;
    }

    /* Centrado del formulario */
    form {
      margin-top: 10px;
    }

  </style>