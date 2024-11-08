<?php
session_start();
if (isset($_POST["botonEnviarLogin"])){

    include("../Modelo/consultasUsuarios.php");

    $nombreUsuarioBaseDatos = selectNombreUsuario($_POST["nombreUsuario"]);

    if ($nombreUsuarioBaseDatos){

        $contrasenaUsuarioBaseDatos = selectContrasenaUsuario($_POST["nombreUsuario"]);

        if ( password_verify($_POST["contrasena"],$contrasenaUsuarioBaseDatos) ){

            $_SESSION["login"]=true;
            $_SESSION["tiempoInicioSesion"]=time();
            header("Location: ../Controlador/index.php");

        } else {

            $error = "errorCredenciales";
            header("Location: ../Controlador/login.php?error=$error");

        }

    } else{

        $error = "errorCredenciales";
        header("Location: ../Controlador/login.php?error=$error");
        
    }

} else {

    header("Location: ../Vista/login.html");

}

?>