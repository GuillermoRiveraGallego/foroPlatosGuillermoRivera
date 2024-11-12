<div class="contenedorPerfilGrande">

    <div class="contenedorPerfil">

            <img class="imgFotoPerfil" src="../Imagenes/<?php echo $PerfilUsuario[0]['foto_perfil']; ?>" alt="Foto de perfil">

            <div class="nombreUsuario">
                <?php echo htmlspecialchars($PerfilUsuario[0]['nombre_usuario']); ?>
            </div>

            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($PerfilUsuario[0]['nombre']); ?></p>
            <p><strong>Apellidos:</strong> <?php echo htmlspecialchars($PerfilUsuario[0]['apellidos']); ?></p>
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($PerfilUsuario[0]['correo']); ?></p>
            <p><strong>Experiencia:</strong> <?php echo htmlspecialchars($PerfilUsuario[0]['experiencia_usuario']); ?></p>
            <p><strong>Fecha de creación:</strong> <?php echo htmlspecialchars($PerfilUsuario[0]['fecha_creacion']); ?></p>

    </div>

</div>

<div class="botones">

    <div class="cerrarSesion">
        <a href="../Controlador/cerrarSesion.php">Cerrar sesion</a>
    </div>

    <div class="editarPerfil">
        <a href="">editarPerfi</a>
    </div>

</div>
<style>

.botones{
    width: 100%;
    margin-bottom: 150px;
    align-items: center;
    justify-content: center;
    
}

.contenedorPerfilGrande {
    margin-top: 150px;
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;

}

.contenedorPerfil {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color: white;
    padding: 40px;
    background-color: rgba(0, 0, 0, 0.5); /* Color negro semitransparente */
    backdrop-filter: blur(10px); /* Ajusta el nivel de desenfoque */
    border-radius: 15px; /* Opcional: bordes redondeados */
}

.imgFotoPerfil{

    width: 300px;
    height: 300px;

}

.nombreUsuario {
    margin-top: 10px;
    font-size: 20px;
    color: white;
}

</style>
