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
        $resultado=$pdo->query("SELECT * FROM Comentario WHERE id_receta = '$id_receta' and id_comentario_respuesta is NULL ")->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;

    }


    function crearRespuesta ($idUsuarioResponde) {
        $pdo = conexionBaseDatos();

        $idRecetaRespuesta = $_POST["idRecetaRespondida"];
        $idComentarioRespondido = $_POST["idComentarioRespondido"];
        $respuestaTexto = $_POST["comentarioRespuesta"];
        $fecha_creacion = date('Y-m-d H:i:s');


        $sql = "INSERT INTO Comentario (id_receta,id_usuario,id_comentario_respuesta,texto,fecha_creacion,valoracion) values ('$idRecetaRespuesta','$idUsuarioResponde','$idComentarioRespondido','$respuestaTexto','$fecha_creacion',NULL)";
		$pdo->prepare($sql)->execute();

    }


    function devuelveRespuestasReceta ($id_receta){

        $pdo = conexionBaseDatos();
        $resultado=$pdo->query("SELECT * FROM Comentario WHERE id_receta = '$id_receta' and id_comentario_respuesta is not NULL ")->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;

    }
