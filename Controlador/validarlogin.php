<?php
session_start();
if (isset($_POST["botonEnviarLogin"])){

    include("../Modelo/consultasUsuarios.php");

    $nombreUsuarioBaseDatos = selectNombreUsuario($_POST["nombreUsuario"]);

    if ($nombreUsuarioBaseDatos){

        $contrasenaUsuarioBaseDatos = selectContrasenaUsuario($_POST["nombreUsuario"]);
        /*comprobacion */
        $contrasenaUsuarioBaseDatos = password_hash($contrasenaUsuarioBaseDatos,PASSWORD_DEFAULT);

        if ( password_verify($_POST["contrasena"],$contrasenaUsuarioBaseDatos) ){

            $_SESSION["login"]=true;
            $_SESSION["tiempoInicioSesion"]=time();
            header("Location: ../Vista/index.php");

        } else {

            echo("mal");

        }

    } else{

        echo("credenciales incorrectas");

    }

} else {

    header("Location: ../Vista/login.html");

}

?>