<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login de usuario</title>
  <link rel="stylesheet" href="../Vista/css/loginCss.css">
  <link rel="icon" href="../Imagenes/perfil.png" type="image/x-icon">
</head>

<body></body>
<div class="wrapper">
    <form action="../Controlador/crearUsuario.php" method="post" enctype="multipart/form-data">

      <h2>Registro</h2>

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

      <button type="submit" name="enviar">Registrarme</button>

      <div class="register">
        <p><a href="../Controlador/login.php">Volver a login</a></p>
      </div>
      
    </form>
  </div>

  </body>
</html>