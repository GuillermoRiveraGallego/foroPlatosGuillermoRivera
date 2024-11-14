<?php

session_start();

if(isset($_POST['enviar'])){

    include("../Modelo/consultasUsuarios.php");
    $nombreUsuarioBaseDatos = selectNombreUsuario($_POST["nombreUsuario"]);

    if ($nombreUsuarioBaseDatos){

        header("Location: ../Controlador/crearUsuario.php?error=nombreUsuarioInvalido");
        exit;

    } else {


        if ($_POST["contrasena"] == $_POST["contrasenaRepetida"]){

            if (isset($_FILES['fotoPerfil']) && $_FILES['fotoPerfil']['error'] == UPLOAD_ERR_OK){

                $nombreImagen=$_POST["nombreUsuario"]."_".$_FILES['fotoPerfil']['name'];
                move_uploaded_file($_FILES['fotoPerfil']['tmp_name'],"../Imagenes/".$nombreImagen);
                insertarUsuario($nombreImagen);
                $_SESSION["login"]=true;
                $_SESSION["nombreUsuario"] = $_POST["nombreUsuario"];
                $_SESSION["tiempoInicioSesion"]=time();
                header("Location: ../Controlador/index.php");		
        
                } else {
        
                    $nombreImagen = "default.jpg";
                    insertarUsuario($nombreImagen);	
                    $_SESSION["login"]=true;
                    $_SESSION["nombreUsuario"] = $_POST["nombreUsuario"];
                    $_SESSION["tiempoInicioSesion"]=time();
                    header("Location: ../Controlador/index.php");
                    exit;
        
                }

        } else {

            header("Location: ../Controlador/crearUsuario.php?error=contrasenasDiferentes");
            exit;

        }

    }

} else{
    echo("halgo ha salido mal");
}

?>



