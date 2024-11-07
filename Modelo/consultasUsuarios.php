<?php
    
    include("conexionBD.php");

    function selectNombreUsuario($nombreUsuario){
      
        $pdo = conexionBaseDatos();
		    $resultado=$pdo->query("SELECT nombre_usuario FROM Usuario WHERE nombre_usuario = '$nombreUsuario' ");
		    $nombre = $resultado->fetch(PDO::FETCH_ASSOC);

            if ($nombre){

                return $nombre["nombre_usuario"];

            } else {

                return false;

            }

	  }

      function selectContrasenaUsuario($nombreUsuario){

        $pdo = conexionBaseDatos();

		    $resultado=$pdo->query("SELECT contrasena FROM Usuario WHERE nombre_usuario = '$nombreUsuario' ");
		    return $resultado->fetch(PDO::FETCH_ASSOC)["contrasena"];

	    }

	    function insertarUsuario($nombreImagen){
		
        $pdo = conexionBaseDatos();

        $nombreUsuario = $_POST["nombreUsuario"];
        $nombre =  $_POST["nombrePropioUsuario"];
        $apellidos = $_POST["apellidosPropioUsuario"];
        $contrasena = password_hash($_POST["contrasena"],PASSWORD_DEFAULT);
        $esAdmin = 0;
        $correo = $_POST["emailUsuario"];
        $experienciaUsuario = "principiante";
        $fechaCreacion = date('Y-m-d H:i:s');

        $fotoPerfil = $nombreImagen;

        $sql = "INSERT INTO Usuario (nombre_usuario,nombre,apellidos,contrasena,es_admin,correo,experiencia_usuario,foto_perfil,fecha_creacion) values ('$nombreUsuario','$nombre', '$apellidos' ,'$contrasena','$esAdmin','$correo','$experienciaUsuario','$fotoPerfil','$fechaCreacion')";
		    $pdo->prepare($sql)->execute();

	}


?>