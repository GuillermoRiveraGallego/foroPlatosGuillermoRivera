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
        // Modificamos la consulta para devolver solo los valores de la columna 'id_ingrediente'
        $ingredientes = $pdo->query("SELECT id_ingrediente FROM Ingrediente_receta WHERE id_receta = $id")->fetchAll(PDO::FETCH_COLUMN, 0);
        
        
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
    
    


    

    


    

