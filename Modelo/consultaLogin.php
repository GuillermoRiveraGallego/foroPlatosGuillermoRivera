<?php
	/*function selectNombreUsuario($nombreUsuario){
		include "../Modelo/conexionBD.php";
		$resultado=$pdo->query("SELECT nombre_usuario FROM Usuario WHERE nombre_usuario = '$nombreUsuario' ");
		return $resultado->fetch(PDO::FETCH_ASSOC)["nombre_usuario"];
	}
*/

    function selectNombreUsuario($nombreUsuario){
		include "../Modelo/conexionBD.php";
		$resultado=$pdo->query("SELECT nombre_usuario FROM Usuario WHERE nombre_usuario = '$nombreUsuario' ");
		$nombre = $resultado->fetch(PDO::FETCH_ASSOC);

        if ($nombre){

          return $nombre["nombre_usuario"];

        } else {

            return false;

        }

	}

    function selectContrasenaUsuario($nombreUsuario){
		include "../Modelo/conexionBD.php";
		$resultado=$pdo->query("SELECT contrasena FROM Usuario WHERE nombre_usuario = '$nombreUsuario' ");
		return $resultado->fetch(PDO::FETCH_ASSOC)["contrasena"];
	}
    

?>