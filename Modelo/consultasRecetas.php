<?php
    
    include_once("conexionBD.php");

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
        $receta=$pdo->query("SELECT * FROM Receta WHERE id={$_GET['idReceta']}")->fetch(PDO::FETCH_ASSOC);
   
        return $receta;

    }

    function ingredientesReceta($id) {
        $pdo = conexionBaseDatos();
        
        $ingredientes = $pdo->query("SELECT id_ingrediente, cantidad,unidad_medida FROM Ingrediente_receta WHERE id_receta = $id")->fetchAll(PDO::FETCH_ASSOC);
        
        if ($ingredientes) {
            return $ingredientes;
        } else {
            return false; 
        }
    }
    

    function selectIngrediente($idIngrediente) {
        $pdo = conexionBaseDatos();
        $nombreIngrediente = $pdo->query("SELECT nombre FROM Ingrediente WHERE id = $idIngrediente")->fetchColumn();
    
        if ($nombreIngrediente) {

            return $nombreIngrediente;

        } else {

            return false;

        }
    }


    function selectRecetasBuscador ($primeraReceta,$tamanioPagina,$nombre_receta) {

        $pdo = conexionBaseDatos();
        $recetas=$pdo->query("SELECT * FROM Receta where nombre_receta like '%$nombre_receta%' LIMIT $primeraReceta,$tamanioPagina")->fetchAll(PDO::FETCH_ASSOC);
        
        return $recetas;
    }

    
    function selectRecetasBuscadorIngredientes ($primeraReceta,$tamanioPagina,$nombre_ingrediente) {

        $pdo = conexionBaseDatos();

        $recetas=$pdo->query("SELECT Receta.* FROM Receta JOIN Ingrediente_receta ON Receta.id = Ingrediente_receta.id_receta JOIN Ingrediente ON Ingrediente_receta.id_ingrediente = Ingrediente.id WHERE Ingrediente.nombre like '%$nombre_ingrediente%' LIMIT $primeraReceta,$tamanioPagina")->fetchAll(PDO::FETCH_ASSOC);
        
        return $recetas;
    }

    function verUnaRecetaPorIDUsuario($idUsuario) {
        $pdo = conexionBaseDatos();
    

        $receta = $pdo->query("SELECT nombre_receta FROM Receta WHERE id_usuario='$idUsuario'")->fetchAll(PDO::FETCH_ASSOC);
    

        if (!$receta) {
            return "No se encontraron recetas para este usuario.";
        }
    
        return $receta; 
    }

    function recetasIdNombre(){

        $pdo = conexionBaseDatos();
        $recetas=$pdo->query("SELECT id,nombre_receta FROM Receta")->fetchAll(PDO::FETCH_ASSOC);
        return $recetas;

    }
    

    function  eliminarReceta($id){

        $pdo = conexionBaseDatos();

        $sql = "DELETE FROM Receta WHERE id = '$id'";

        $pdo->prepare($sql)->execute();


    }


    function ultimaRecetaAnadida() {

        $pdo = conexionBaseDatos();

        $consulta = $pdo->query("SELECT id FROM Receta WHERE id = (SELECT MAX(id) FROM Receta)");
    

        $recetas = $consulta->fetch(PDO::FETCH_ASSOC);
    
        return $recetas ? $recetas['id'] : null;
    }
    function crearRecetas($nombreImagen,$usuarioCreaReceta){
		
        $pdo = conexionBaseDatos();

        $nombreDeReceta = $_POST["nombre_receta"];
        $dificultadDeReceta = $_POST["dificultad"];
        $tipoDeReceta = $_POST["tipo"];
        $descripcionDeReceta = $_POST["descripcion"];
        $fechaCreacion = date('Y-m-d H:i:s');

        $sql = "INSERT INTO Receta (id_usuario,nombre_receta,fecha_creacion,fecha_actualizacion,dificultad,foto_receta,valoracion_media,tipo,descripcion) values
         ('$usuarioCreaReceta','$nombreDeReceta','$fechaCreacion',NULL,'$dificultadDeReceta','$nombreImagen',NULL,'$tipoDeReceta','$descripcionDeReceta')";
		
        $pdo->prepare($sql)->execute();

	    }
    
