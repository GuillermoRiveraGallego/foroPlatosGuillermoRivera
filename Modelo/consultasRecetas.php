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
        $receta=$pdo->query("SELECT * FROM Receta WHERE id={$_GET['idReceta']}")->fetch(PDO::FETCH_ASSOC);
   
        return $receta;

    }

