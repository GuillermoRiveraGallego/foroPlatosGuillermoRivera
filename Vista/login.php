<div class="wrapper">
    <form action="../Controlador/validarlogin.php" method="post">

      <h2>Login</h2>

        <div class="input-field">
        <input type="text" name="nombreUsuario" required>
        <label>Nombre de usuario</label>
      </div>

      <div class="input-field">
        <input type="password" name="contrasena" required>
        <label>Contraseña</label>
      </div>
      
      <div class="forget">
        <label for="remember">
          <input type="checkbox" name="recordarUsuario">
          <p>Recuerdame</p>
        </label>
      </div>

      <button type="submit" name="botonEnviarLogin">Enviar</button>

      <div class="register">
        <p>No tienes cuenta? <a href="../Controlador/registro.php">Registrate</a></p>
      </div>
      
    </form>
  </div>