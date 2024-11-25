<?php

if (isset($_POST["botonEliminar"])){

include("../Modelo/consultasUsuarios.php");

    $nombreUserr = NombreUsuarioPorId($_POST["nombreUsuario"]);

    if (isset($nombreUserr)){

        $nombreUserr1 = $nombreUserr["nombre_usuario"];

        header("Location: ../Controlador/verUnPerfil.php?perfil=$nombreUserr1");

    } else {

        header("Location: ../Controlador/index.php");
        exit;

    }

    } else {
    
        header("Location: ../Controlador/index.php");
        exit;
    }

