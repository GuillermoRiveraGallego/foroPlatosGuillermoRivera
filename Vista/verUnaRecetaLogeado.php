<div class="contenedorReceta">
  <!-- Imagen de la receta centrada -->
  <img src="<?php echo $receta['foto_receta'] ?? '../Imagenes/default.jpg'; ?>" alt="Foto de la receta">
  
  <!-- Nombre de la receta centrado -->
  <h2><?php echo $receta['nombre_receta'] ?? 'Nombre de la receta'; ?></h2>

  <div class="campo">
    <span class="nombreCampo">Realizada por:</span>
    <span class="valorCampo"><a href="../Controlador/verUnPerfil.php?perfil=<?php echo $receta['nombreDelUsuario']?>"><?php echo $receta['nombreDelUsuario']?></a></span>
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

  <!-- Listado de los ingredientes de la receta -->
  <div class="campo">
    <span class="nombreCampo">Lista de ingredientes:</span>
    <span class="valorCampo">
      <?php 
          foreach ($listaIngredientes as $ingrediente) {
              echo $ingrediente['nombreIngrediente'] . ": " . $ingrediente['cantidad'] . " " . $ingrediente['medida'] . "<br>";
          }
      ?>
    </span>
  </div>

  <p class="descripcion"><?php echo $receta['descripcion'] ?? 'No disponible'; ?></p>

  
  <div class="contenedorComentarios">
  <?php 
  function renderizarComentarios($comentarios, $comentarioPadreId, $recetaId, $idUsuarioQueComenta, $nivel = 0) {
      foreach ($comentarios as $comentario) {
          if ($comentario['id_comentario_respuesta'] == $comentarioPadreId) {
              ?>
              <div class="comentario" style="margin-left: <?php echo $nivel * 20; ?>px;">
                  <!-- Información del comentario -->
                  <div class="comentarioHeader">
                      <span class="comentarioUsuario">
                          <?php 
                          $usuario = NombreUsuarioPorId($comentario['id_usuario']);
                          echo $usuario['nombre_usuario'] ?? 'Usuario desconocido';
                          ?>
                      </span>
                      <span class="comentarioFecha">
                          <?php echo $comentario['fecha_creacion']; ?>
                      </span>
                  </div>
                  <div class="comentarioTexto">
                      <?php echo $comentario['texto']; ?>
                  </div>

                  <!-- Formulario de respuesta -->
                  <form class="formRespuesta" action="../Controlador/responderComentario.php" method="post">
                      <textarea name="respuesta" rows="3" placeholder="Escribe tu respuesta aquí..." maxlength="250" required></textarea>
                      <input type="hidden" name="id_comentario_respuesta" value="<?php echo $comentario['id']; ?>">
                      <input type="hidden" name="id_receta" value="<?php echo $recetaId; ?>">
                      <input type="hidden" name="id_usuario" value="<?php echo $idUsuarioQueComenta; ?>">
                      <input type="hidden" name="redirectUrl" id="redirectUrl" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                      <button type="submit" class="btnResponder">Responder</button>
                  </form>

                  <!-- Renderizar las respuestas de este comentario -->
                  <div class="respuestas">
                      <?php renderizarComentarios($comentarios, $comentario['id'], $recetaId, $idUsuarioQueComenta, $nivel + 1); ?>
                  </div>
              </div>
              <?php
          }
      }
  }

  // Llamar a la función para los comentarios principales
  renderizarComentarios($comentarios, null, $receta['id'], $idUsuarioQueComenta);
  ?>
</div>

  <!-- Formulario para agregar un nuevo comentario -->
  <div class="campo">
    <span class="valorCampoComentario">
      <form action="../Controlador/comentarReceta.php" method="post">
        Valoración de la receta:
        <select required name="valoracion">
          <option value="" disabled selected>Selecciona una valoración</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>

        <textarea required name="comentario" rows="5" placeholder="Escribe tu comentario aquí..." maxlength="250"></textarea>

        <input type="hidden" name="nombreUsuarioComenta" value="<?php echo $nombreUsuarioQueComenta; ?>">
        <input type="hidden" name="idUsuarioComenta" value="<?php echo $idUsuarioQueComenta; ?>">
        <input type="hidden" name="idRecetaComentada" value="<?php echo $receta["id"]; ?>">
        <input type="hidden" name="redirectUrl" id="redirectUrl" value="<?php echo ($_SERVER['REQUEST_URI']); ?>">

        <div class="contenedorBotonComentar">
          <input class="enviarComentario" type="submit" value="Comentar" name="Comentar">
        </div>
      </form>
    </span>
  </div>
</div>
</div>

<style>

/* Contenedor principal */
.contenedorReceta {
    max-width: 700px; /* Ampliar el ancho máximo */
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
    overflow: hidden; /* Corta cualquier contenido desbordante */
}

.contenedorReceta img {
    width: 100%;
    max-width: 300px;
    height: auto;
    margin: 0 auto 20px;
    border-radius: 8px;
    display: block;
}

.contenedorReceta h2 {
    text-align: center;
    color: white;
    margin: 10px 0 20px;
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

/* Estilo de comentarios */
.contenedorComentarios {
    max-width: 100%;
    padding: 15px;
}

.comentario {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #3a3a3a;
    border-radius: 8px;
    border: 1px solid #555;
    color: #eee;
    overflow-wrap: break-word;
    word-wrap: break-word;
    overflow: hidden;
    max-width: 100%; /* Ocupa todo el ancho disponible */
}

.respuestas {
    border-left: 2px solid #555;
    padding-left: 20px;
    margin-top: 15px;
}

.comentarioHeader {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    font-size: 1rem;
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
    line-height: 1.6;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

/* Estilo del formulario */
textarea {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    resize: vertical;
    background-color: #444;
    color: white;
    margin-top: 20px;
}

textarea::placeholder {
    color: #aaa;
}

form {
    margin-top: 10px;
}

.enviarComentario,
.btnResponder {
    background-color: #555;
    color: white;
    border: 1px solid #777;
    border-radius: 5px;
    padding: 8px 15px;
    cursor: pointer;
    font-size: 1rem;
}

.enviarComentario:hover,
.btnResponder:hover {
    background-color: #666;
    border-color: #888;
}

/* Formularios de respuesta */
.formRespuesta {
    margin-top: 10px;
    max-width: 100%;
}

.formRespuesta .contenedorBotonComentar {
    margin-top: 10px;
    text-align: right;
    width: 100%;
}
</style>

