<?php
    
    include_once("conexionBD.php");

    function crearComentario () {
        $pdo = conexionBaseDatos();

        $id_receta = $_POST["idRecetaComentada"];
        $id_usuario = $_POST["idUsuarioComenta"];
        $texto = $_POST["comentario"];
        $fecha_creacion = date('Y-m-d H:i:s');
        $valoracion = $_POST["valoracion"];

        $sql = "INSERT INTO Comentario (id_receta,id_usuario,texto,fecha_creacion,valoracion) values ('$id_receta','$id_usuario','$texto','$fecha_creacion','$valoracion')";
		$pdo->prepare($sql)->execute();


    }

    function devuelveComentariosReceta ($id_receta){

        $pdo = conexionBaseDatos();
        $resultado=$pdo->query("SELECT * FROM Comentario WHERE id_receta = '$id_receta' ")->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;

    }

    function insertarRespuesta($usuarioResponde){
    
        $pdo = conexionBaseDatos();

        $usuarioRespondido = $_POST["idUsuarioRespondido"];
        $textoRespuesta = $_POST["comentarioRespuesta"];
        $idRecetaDeComentarios = $_POST["idRecetaComentada"];
        $fecha_creacion = date('Y-m-d H:i:s');
        $valoracion = null;

        $sql = "INSERT INTO Comentario (id_receta,id_usuario,id_usuario_responde,texto,fecha_creacion,valoracion) values ('$idRecetaDeComentarios','$usuarioRespondido','$usuarioResponde','$textoRespuesta','$fecha_creacion',NULL)";
		$pdo->prepare($sql)->execute();

    }