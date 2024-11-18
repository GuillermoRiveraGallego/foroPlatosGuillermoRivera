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
    
    


    

    


    

