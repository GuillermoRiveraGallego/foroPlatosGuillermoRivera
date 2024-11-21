<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login de usuario</title>
  <link rel="stylesheet" href="../Vista/css/loginCss.css">
  <link rel="icon" href="../Imagenes/perfil.png" type="image/x-icon">
  <style>
   
    .error-message {
            
            background-color: #f8d7da;
            color: #721c24;
            font-size: 14px;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
      
    }

    .credencialesTexto{

            font-size: 18px;

    }

  </style>
</head>

<body>
  <div class="wrapper">
    <form action="../Controlador/validarlogin.php" method="post">
      <h2>Login</h2>

      <div class="input-field">
        <input type="text" name="nombreUsuario" required maxlength="40">
        <label>Nombre de usuario</label>
      </div>

      <div class="input-field">
        <input type="password" name="contrasena" required maxlength="40">
        <label>Contraseña</label>
      </div>

      <?php
      if (isset($_GET['error']) && $_GET['error'] == "errorCredenciales") {
          echo "<div class='error-message'><p class='credencialesTexto'>Credenciales incorrectas.</p>Por favor, intenta nuevamente.</div>";
      }
      ?>

      <button type="submit" name="botonEnviarLogin">Enviar</button>

      <div class="register">
        <p>¿No tienes cuenta? <a href="../Controlador/registro.php">Regístrate</a></p>
      </div>
      
    </form>
  </div>
</body>
</html>
