<div class="contenedorPerfilGrande">

    <div class="contenedorPerfil">

            <img class="imgFotoPerfil" src="../Imagenes/<?php echo $PerfilUsuario[0]['foto_perfil']; ?>" alt="Foto de perfil">

            <div class="nombreUsuario">
                <?php echo ($PerfilUsuario[0]['nombre_usuario']); ?>
            </div>

            <p><strong>Nombre:</strong> <?php echo ($PerfilUsuario[0]['nombre']); ?></p>
            <p><strong>Apellidos:</strong> <?php echo ($PerfilUsuario[0]['apellidos']); ?></p>
            <p><strong>Correo:</strong> <?php echo ($PerfilUsuario[0]['correo']); ?></p>
            <p><strong>Experiencia:</strong> <?php echo ($PerfilUsuario[0]['experiencia_usuario']); ?></p>
            <p><strong>Fecha de creación:</strong> <?php echo ($PerfilUsuario[0]['fecha_creacion']); ?></p>
            <p><strong>Recetas Creadas:</strong></p>

                <?php
                    foreach ($recetasDelPerfil as $receta) {
                        echo $receta["nombre_receta"] . "<br>";
                        }

                ?>

            

    </div>

</div>

<style>
/* Contenedor principal */
.contenedorPerfilGrande {
    margin-top: 150px;
    display: flex;
    flex-direction: column; 
    width: 100%;
    align-items: center;
    justify-content: center;
}

/* Estilos del perfil */
.contenedorPerfil {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color: white;
    padding: 30px;
    background-color: rgba(0, 0, 0, 0.5); 
    backdrop-filter: blur(10px); 
    border-radius: 15px;
    margin-bottom: 20px; 
    font-size: 26px;
}

.imgFotoPerfil {
    width: 250px; 
    height: 250px;
    border-radius: 50%; 
    object-fit: cover;
    margin-bottom: 15px; 
}

.nombreUsuario {
    font-size: 28px; /* Tamaño de fuente reducido */
    font-weight: bold;
    color: white;
    margin-bottom: 10px; /* Espacio reducido debajo del nombre de usuario */
}

.contenedorPerfil p {
    margin: 5px 0; /* Espacio reducido entre los elementos <p> */
}

/* Contenedor de botones */
.botones {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px; 
    margin-bottom: 100px;
    margin-top: 20px;
}

/* Estilos de los botones */
.cerrarSesion a, .editarPerfil a {
    color: white;
    text-decoration: none;
    font-size: 16px; /* Tamaño de fuente más pequeño */
    font-weight: bold;
    background-color: #007BFF;
    padding: 8px 16px; 
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cerrarSesion a:hover, .editarPerfil a:hover {
    background-color: #0056b3;
}

.lineaError{

width: 60%;
text-align: center;

}

.errorUser{

    background-color: green;
    color: black;
    border-radius: 5px;
    font-size: 18px;
    padding: 5px;
}


</style>


