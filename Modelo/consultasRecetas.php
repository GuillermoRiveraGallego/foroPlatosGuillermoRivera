<?php
    
    include("conexionBD.php");

    function selectRecetas($primeraReceta,$tamanioPagina) {
        $pdo = conexionBaseDatos();
        $recetas=$pdo->query("SELECT * FROM Receta LIMIT $primeraReceta,$tamanioPagina")->fetchAll(PDO::FETCH_ASSOC);
        return $recetas;
    }

    function contarRecetasTotales (){
        $pdo = conexionBaseDatos();
        $numRecetas = ($pdo->query("SELECT COUNT(*) FROM Receta")->fetch())[0];

        return $numRecetas;

    }


    function verUnaReceta (){

        $pdo = conexionBaseDatos();
        $receta=$pdo->query("SELECT * FROM recetas WHERE id={$_GET['idReceta']}")->fetch(PDO::FETCH_ASSOC);
        foreach($receta as $campo => $valor){
            echo "$campo: $valor <br>";
        }

    }



	


    
/*
    function selectContrasenaUsuario($nombreUsuario){
		include "../Modelo/conexionBD.php";
		$resultado=$pdo->query("SELECT contrasena FROM Usuario WHERE nombre_usuario = '$nombreUsuario' ");
		return $resultado->fetch(PDO::FETCH_ASSOC)["contrasena"];
	}

	function insertarUsuario($nombreImagen){
		
        include "../Modelo/conexionBD.php";

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

*/
?>

