<?php
    
    include_once("conexionBD.php");

    function selectNombreUsuario($nombreUsuario){
      
            $pdo = conexionBaseDatos();
		    $resultado=$pdo->query("SELECT nombre_usuario FROM Usuario WHERE nombre_usuario = '$nombreUsuario'");
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

        function datosUsuario($nombreUsuario){

            $pdo = conexionBaseDatos();
		    $resultado=$pdo->query("SELECT * FROM Usuario WHERE nombre_usuario = '$nombreUsuario' ")->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;

        }

        function saberIdNombreUsuario($nombreUsuario) {
            $pdo = conexionBaseDatos();
            $resultado = $pdo->query("SELECT id FROM Usuario WHERE nombre_usuario = '$nombreUsuario'")->fetch(PDO::FETCH_ASSOC);
        
            return $resultado ? $resultado['id'] : null;
        }
        

        function cambiarDatosUsuario ($id,$nuevaFotoPerfil){

            $pdo = conexionBaseDatos();

            $nuevoNombreUsuario = $_POST["nuevoNombreUsuario"];
            $nuevoNombre = $_POST["nuevoNombreDelUsuario"];
            $nuevosApellidos = $_POST["nuevoApellidosUsuario"];
            $nuevoCorreo = $_POST["nuevoCorreoUsuario"];

            $sql = "UPDATE Usuario SET nombre_usuario = '$nuevoNombreUsuario', nombre = '$nuevoNombre', apellidos = '$nuevosApellidos', foto_perfil = '$nuevaFotoPerfil', correo = '$nuevoCorreo' WHERE id = '$id'";

		    $pdo->prepare($sql)->execute();

        }

        function fotoDePerfilPorId($idDelUsuario){

            $pdo = conexionBaseDatos();
            $resultado = $pdo->query("SELECT foto_perfil FROM Usuario WHERE id = '$idDelUsuario'")->fetch(PDO::FETCH_ASSOC);
        
            return $resultado ? $resultado : false;

        }

        function NombreUsuarioPorId($idDelUsuario){

            $pdo = conexionBaseDatos();
            $resultado = $pdo->query("SELECT nombre_usuario FROM Usuario WHERE id = '$idDelUsuario'")->fetch(PDO::FETCH_ASSOC);
        
            return $resultado ? $resultado : false;

        }

        function cambiarContrasenaUsuario ($nombreUsuarioC,$nuevaContrasena){

            $pdo = conexionBaseDatos();

            $sql = "UPDATE Usuario SET contrasena = '$nuevaContrasena' WHERE nombre_usuario = '$nombreUsuarioC'";

		    $pdo->prepare($sql)->execute();

        }

        function esAdmin($nombreUser) {

            $pdo = conexionBaseDatos();
            $resultado = $pdo->query("SELECT es_admin FROM Usuario WHERE nombre_usuario = '$nombreUser'")->fetch(PDO::FETCH_ASSOC);
            
            if ($resultado && $resultado['es_admin'] == 1) {

                return true;

            } else {

                return false;
                
            }
        }
        

?>