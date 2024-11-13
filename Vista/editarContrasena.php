<?php




?>

<div class="contenedorPerfil">
    <img class="imgFotoPerfil" src="../Imagenes/<?php echo ($PerfilUsuario[0]['foto_perfil']); ?>" alt="Foto de perfil">
    
    <form action="" method="post">
        <label>Introduce tu contraseña actual:</label>
        <input type="password" name="contrasenaActual">
        
        <label>Introduce la nueva contraseña:</label>
        <input type="password" name="contrasenaNueva">
        
        <label>Repita la contraseña:</label>
        <input type="password" name="contrasenaNuevaRepetida">

        <input type="submit" value="Cambiar Contraseña" name="enviarContraseña">
    </form>
</div>

<style>
.contenedorPerfil {
    
    margin-bottom: 150px;
    width: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    max-width: 800px;
    margin: 150px auto 20px auto;
    color: #ffffff;
}

.imgFotoPerfil {
    width: 275px;
    height: 275px;
    border-radius: 50%;
    margin-bottom: 20px;
    object-fit: cover;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    width: 100%;
    max-width: 400px;
}

form label {
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 2px; 
    color: #ffffff;
}


form input[type="password"],
form input[type="submit"] {
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form input[type="submit"] {
    background-color: #007BFF;
    color: white;
    font-weight: bold;
    cursor: pointer;
    padding: 8px 20px; /* Controla el espacio interno */
    width: auto; /* Ajusta el ancho al contenido */
    display: block; /* Permite que el margen automático funcione */
    margin: 0 auto; /* Centra el botón dentro del formulario */
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}



form input[type="password"]:focus {
    outline: none;
    border-color: #007BFF;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

form input[type="submit"] {
    background-color: #007BFF;
    color: white;
    font-weight: bold;
    cursor: pointer;

}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>