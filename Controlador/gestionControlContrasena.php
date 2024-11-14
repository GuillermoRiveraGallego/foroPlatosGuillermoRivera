<?php
session_start();
include("../Modelo/consultasUsuarios.php");


if (isset($_POST["enviarContrasena"])){

        $nombreDelUsuarioC = $_SESSION["nombreUsuario"];
        $contrasenaUsuarioBaseDatos = selectContrasenaUsuario($nombreDelUsuarioC);
        $contrasenaActualUsuarioForm = $_POST["contrasenaActual"];
        $contrasenaNueva = $_POST["contrasenaNueva"];
        $contrasenaNuevaRepetida = $_POST["contrasenaNuevaRepetida"];

        if (password_verify($contrasenaActualUsuarioForm,$contrasenaUsuarioBaseDatos)){

            if ($contrasenaNueva == $contrasenaNuevaRepetida){

                if (strlen($contrasenaNueva) >= 6 ){

                    $contrasenaNuevaHash = password_hash($contrasenaNueva,PASSWORD_DEFAULT);
                    cambiarContrasenaUsuario ($nombreDelUsuarioC ,$contrasenaNuevaHash);
                    header("Location: ../Controlador/verPerfil.php?error=contrasenaCambiada");


                } else {

                    header("Location: ../Controlador/cambiarContrasena.php?error=contraseñaCaracteresCambio");

                }

            } else {
            
                header("Location: ../Controlador/cambiarContrasena.php?error=contraseñaDiferenteCambio");
            
            }


        } else {

            header("Location: ../Controlador/cambiarContrasena.php?error=contraseñaIncorrrectaCambio");

        }

}






