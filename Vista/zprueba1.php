<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login de usuario</title>
  <link rel="stylesheet" href="../Vista/css/loginCss.css">
  <link rel="icon" href="../Imagenes/perfil.png" type="image/x-icon">
</head>

<style>
.lineaError{

width: 100%;
justify-content: center;

}.errorUser{

    background-color: #f8d7da;
    color: #721c24;
    border-radius: 5px;
    padding: 5px;

}
</style>

<body>
<div class="wrapper">
    <form action="../Controlador/crearUsuario.php" method="post" enctype="multipart/form-data">

      <h2>Registro</h2>

      <?php
            if (isset($_GET['error']) && $_GET['error'] == "nombreUsuarioInvalido") {
                     echo "<div class='lineaError'><p class='errorUser'> Nombre de usuario no disponible </p></div>";
            } 
      ?>
      <?php
            if (isset($_GET['error']) && $_GET['error'] == "contrasenasDiferentes") {
                     echo "<div class='lineaError'><p class='errorUser'> Las contraseñas deben ser iguales </p></div>";
            } 
      ?>
      <?php
            if (isset($_GET['error']) && $_GET['error'] == "caracteresContrasenas") {
                     echo "<div class='lineaError'><p class='errorUser'> La contraseña debe tener al menos 6 caracteres </p></div>";
            } 
      ?>

      <div class="input-field">
        <input type="text" name="nombrePropioUsuario" required>
        <label>Nombre</label>
      </div>

      <div class="input-field">
        <input type="text" name="apellidosPropioUsuario" required>
        <label>Apellidos</label>
      </div>

        <div class="input-field">
        <input type="text" name="nombreUsuario" required>
        <label>Nombre de Usuario</label>
      </div>

      <div class="input-field">
        <input type="password" name="contrasena" required>
        <label>Contraseña</label>
      </div>

      <div class="input-field">
        <input type="password" name="contrasenaRepetida" required>
        <label>Repita contraseña</label>
      </div>

      <div class="input-field">
        <input type="email" name="emailUsuario" required>
        <label>Email</label>
      </div>

      <div class="fotoPerfil">
      <p style="color: white;">Foto perfil</p>
      </div>
      
      <div class="input-field">
        <input type="file" name="fotoPerfil" accept=".jpg, .png, .jpeg">
      </div>

      <button type="submit" name="enviar" value="enviar">Registrarme</button>

      <div class="register">
        <p><a href="../Controlador/login.php">Volver a login</a></p>
      </div>
      
    </form>
  </div>

  </body>
</html>
