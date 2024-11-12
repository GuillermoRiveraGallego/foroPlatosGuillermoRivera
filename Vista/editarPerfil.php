<div class="contenedorPerfilGrande">
    <div class="contenedorPerfil">
       <form action="../Controlador/guardarCambiosPerfil.php" method="post" enctype="multipart/form-data">
            <div class="contenedorImagen">
                <img class="imgFotoPerfil" src="../Imagenes/<?php echo ($PerfilUsuario[0]['foto_perfil']); ?>" alt="Foto de perfil">
                <input type="file" name="fotoPerfil" accept=".jpg, .png, .jpeg" class="inputFotoPerfil">
            </div>

            <div class="contenedorDatos">
                <div class="linea">
                    <p>Nombre Usuario:</p>
                    <input name="nuevoNombreUsuario" type="text" value="<?php echo($PerfilUsuario[0]['nombre_usuario']);?>">
                </div>

                <div class="linea">
                    <p>Nombre:</p>
                    <input name="nuevoNombreDelUsuario" type="text" value="<?php echo ($PerfilUsuario[0]['nombre']);?>">
                </div>
                
                <div class="linea">
                    <p>Apellidos:</p>
                    <input name="nuevoApellidosUsuario" type="text" value="<?php echo ($PerfilUsuario[0]['apellidos']); ?>">
                </div>
                
                <div class="linea">
                    <p>Correo:</p>
                    <input name="nuevoCorreoUsuario" type="email" value="<?php echo ($PerfilUsuario[0]['correo']);  ?>">
                </div>
            </div>
        
    </div>
</div>

<div class="botones">
    <div class="cerrarSesion">
        <a href="../Controlador/verPerfil.php">volver a perfil</a>
    </div>

    <div class="editarPerfil">
        <input type="submit" guardar cambios>
    </div>
</div>
</form>

<style>
/* Contenedor principal */
.contenedorPerfilGrande {
    margin-top: 120px;
    display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
    justify-content: center;
}

/* Contenedor del perfil con imagen y datos en columnas */
.contenedorPerfil {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    color: white;
    padding: 40px;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    gap: 40px;
}

/* Contenedor de la imagen y el input */
.contenedorImagen {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.imgFotoPerfil {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}

.inputFotoPerfil {
    color: white;
    text-align: center;
}

/* Contenedor de los datos del usuario */
.contenedorDatos {
    display: flex;
    flex-direction: column;
    font-size: 24px;
}

.nombreUsuario {
    font-size: 26px;
    font-weight: bold;
    color: white;
    margin-bottom: 15px;
}

/* Contenedor de botones */
.botones {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-bottom: 150px;
    margin-top: 20px;
}

.cerrarSesion a, .editarPerfil input[type="submit"] {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
    border: none; 
    cursor: pointer; 
}

.cerrarSesion a {
    background-color: #007BFF;
}

.editarPerfil input[type="submit"] {
    background-color: green;
}

.editarPerfil input[type="submit"]:hover {
    background-color: #0056b3;
}

.contenedorDatos p {
    display: inline-block;
    margin-right: 10px;
    font-weight: bold;
}

.contenedorDatos input {
    display: inline-block;
    width: 200px; /* Ajusta el ancho según prefieras */
}

</style>



