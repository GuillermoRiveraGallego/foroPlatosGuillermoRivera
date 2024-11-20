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
<!--Listado de los ingredientes de la recerta -->
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

  <p class="descripcion"><?php echo $receta['descripcion'] ?? 'No disponible'; ?></p>

  <div class="campo">
  <span class="nombreCampo">Comentarios:</span>
  <div class="contenedorComentarios">

        <!-- Aqui las respuestas -->

    <?php foreach ($listaComentarios as $comentarioVista): ?>

      <div class="comentario">
        <div class="comentarioHeader">
          <span class="comentarioUsuario"><?php echo ($comentarioVista["usuarioComenta"]); ?></span>
          <span class="comentarioFecha"><?php echo ($comentarioVista["fechaCreacion"]); ?></span>
        </div>
        <p>valoracion: <?php echo ($comentarioVista["valoracion"]);?>/5 </p>
        <p class="comentarioTexto"><?php echo ($comentarioVista["textoComentario"]); ?></p>
      </div>

              <!-- Si el comentario tiene respuestas, iteramos sobre ellas -->
              <?php if (!empty($comentarioVista["respuestas"])): ?>
          <div class="respuestas">
            <h4>Respuestas:</h4>
            <?php foreach ($comentarioVista["respuestas"] as $respuesta): ?>
              <div class="respuesta">
                <div class="respuestaHeader">
                  <span class="respuestaUsuario"><?php echo ($respuesta["usuarioComenta"]); ?></span>
                  <span class="respuestaFecha"><?php echo ($respuesta["fechaCreacion"]); ?></span>
                </div>
                <p class="respuestaTexto"><?php echo ($respuesta["textoComentario"]); ?></p>
              </div>

              
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

      <form action="../Controlador/repuestasComentarios.php" method="post" class="formRespuesta">
            <textarea required name="comentarioRespuesta" rows="5" placeholder="Responder..." maxlength="250"></textarea>   <!-- texto respuesta -->
            <input type="hidden" name="idComentarioRespondido" value="<?php echo($comentarioVista["idComentario"])?>"> <!-- id de comentario al que respondemos  -->
            <input type="hidden" name="idRecetaRespondida" value="<?php echo($comentarioVista["idRecetaComentada"])?>"> <!-- id receta del comentario  -->
            <input type="hidden" name="redirectUrl" id="redirectUrl" value="<?php echo ($_SERVER['REQUEST_URI']); ?>"> <!-- ruta de vuelta  -->

            <div class="contenedorBotonComentar">
            <input class="enviarComentario" type="submit" value="Comentar" name="Comentar">
          </div>
      </form>
      
      <?php endforeach; ?>
  </div>
</div>

  <!-- comentarios -->
  <div class="campo">
    <span class="valorCampoComentario">
      <form action="../Controlador/comentarReceta.php" method="post">
      Valoracion de la receta: 
      <select required name="valoracion">
            <option value="" disabled selected>Selecciona una valoración</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>

      <textarea required name="comentario" rows="5" placeholder="Escribe tu comentario aquí..." maxlength="250"></textarea>
      
      <input type="hidden" name="nombreUsuarioComenta" value="<?php echo $nombreUsuarioQueComenta ?>">
      <input type="hidden" name="idUsuarioComenta" value="<?php echo $idUsuarioQueComenta ?>">
      <input type="hidden" name="idRecetaComentada" value="<?php echo $receta["id"]?>">
      <input type="hidden" name="redirectUrl" id="redirectUrl" value="<?php echo ($_SERVER['REQUEST_URI']); ?>">
      
      <div class="contenedorBotonComentar">
      <input class="enviarComentario" type="submit" value="Comentar" name="Comentar">
      </div>

      </form>
    </span>
  </div>

</div>

<style>

.enviarComentario{
  margin-bottom: 10PX;
}
.contenedorComentarios {
    max-width: 100%; /* Asegura que los comentarios utilicen el ancho completo */
    padding: 15px;
}

.comentario {
    margin-bottom: 20px; /* Añade más espacio entre comentarios */
    padding: 15px;
    background-color: #3a3a3a;
    border-radius: 8px;
    border: 1px solid #555;
    color: #eee;
}


  .comentarioHeader {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    font-size: 0.9rem;
    color: #ccc;
  }

  .comentarioUsuario {
    font-weight: bold;
    color: white;
  }

  .comentarioFecha {
    font-style: italic;
    color: #888;
  }

  .comentarioTexto {
    font-size: 1rem;
    color: white;
    line-height: 1.4;
    word-wrap: break-word; /* Rompe las palabras largas */
    overflow-wrap: break-word; /* Asegura el ajuste del texto */
    max-width: 100%; /* Limita el ancho del texto al contenedor */
}

    textarea{
        margin-top: 20px;
    }

    .contenedorReceta {
        width: 500px;
        margin: auto;
        padding: 20px;
        border: 2px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        background-color: #333;
        color: white; 
        margin-top: 125px;
        margin-bottom: 205px;
    }

    .contenedorReceta img {
      width: 100%; 
      max-width: 300px; 
      height: auto;
      margin: 0 auto 20px auto;
      border-radius: 8px;
      display: block;
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
      resize: vertical; 
      background-color: #444;
      color: white;
      
    }

    textarea::placeholder {
      color: #aaa;
    }

    form {
      margin-top: 10px;
    }

    .contenedorBotonComentar{
      width: 100%;
      text-align: right;
    }

    /* Estilos específicos para formularios de respuesta */
.formRespuesta {
    margin-top: 10px;
    max-width: 100%; /* Asegura que el formulario no exceda el contenedor padre */
}

.formRespuesta textarea {
    width: 100%; /* Ocupa todo el ancho disponible */
    padding: 10px;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #555;
    background-color: #444;
    color: white;
    resize: vertical; /* Permite redimensionar verticalmente */
    box-sizing: border-box; /* Incluye padding y borde en el ancho total */
}

.formRespuesta textarea::placeholder {
    color: #aaa;
}

.formRespuesta .contenedorBotonComentar {
    margin-top: 10px;
    text-align: right; /* Alinea el botón de enviar a la derecha */
    width: 100%; /* Mantiene el botón dentro del contenedor */
}

.formRespuesta .enviarComentario {
    background-color: #555;
    color: white;
    border: 1px solid #777;
    border-radius: 5px;
    padding: 8px 15px;
    cursor: pointer;
    font-size: 0.9rem;
}

.formRespuesta .enviarComentario:hover {
    background-color: #666;
    border-color: #888;
}

.comentarioTexto {
    font-size: 1rem;
    color: white;
    line-height: 1.4;
    word-wrap: break-word; /* Rompe palabras largas */
    overflow-wrap: break-word; /* Asegura el ajuste del texto */
    max-width: 100%; /* Limita el ancho del texto al contenedor */
}

.contenedorComentarios {
    max-width: 100%;
    padding: 15px;
    overflow: hidden; /* Evita que el contenido desborde */
    box-sizing: border-box; /* Incluye padding en el cálculo del ancho */
}

.comentario {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #3a3a3a;
    border-radius: 8px;
    border: 1px solid #555;
    color: #eee;
    overflow-wrap: break-word; /* Ajusta el texto largo */
    word-wrap: break-word;
    overflow: hidden; /* Evita que el contenido desborde */
    max-width: 100%; /* Respeta siempre el tamaño del contenedor padre */
}

.contenedorReceta {
    max-width: 500px;
   
   
    border: 2px solid #ddd;
    border-radius: 8px;
    background-color: #333;
    color: white;
    overflow: hidden; /* Corta cualquier contenido desbordante */
}


  </style>