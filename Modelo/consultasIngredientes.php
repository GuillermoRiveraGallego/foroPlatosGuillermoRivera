<?php


include_once("conexionBD.php");
function selectNombreIngrediente($nombre) {
    $pdo = conexionBaseDatos();

    $ingrediente = $pdo->query("SELECT nombre FROM Ingrediente WHERE nombre LIKE '$nombre'")->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($ingrediente)) {
        return $ingrediente; 
    } else {
        return false; 
    }
}


function CrearIngrediente($nombreIngrediente){
		
    $pdo = conexionBaseDatos();

    $sql = "INSERT INTO Ingrediente (nombre) values ('$nombreIngrediente')";
    $pdo->prepare($sql)->execute();

}




function nombresIngredientes(){

    $pdo = conexionBaseDatos();
    $Ingredientes=$pdo->query("SELECT nombre FROM Ingrediente")->fetchAll(PDO::FETCH_ASSOC);
    return $Ingredientes;

}

function insertarIngredienteReceta($idDelIngrediente, $idRecetaIngredientes, $cantidad, $unidad){

    $pdo = conexionBaseDatos();

    $sql = "INSERT INTO Ingrediente_receta (id_ingrediente,id_receta,cantidad,unidad_medida) values
     ('$idDelIngrediente','$idRecetaIngredientes','$cantidad','$unidad')";
    
    $pdo->prepare($sql)->execute();

}


function selectIDIngrediente($nombre) {
    $pdo = conexionBaseDatos();

    $ingrediente = $pdo->query("SELECT id FROM Ingrediente WHERE nombre LIKE '$nombre'")->fetch(PDO::FETCH_ASSOC);

    if (!empty($ingrediente)) {
        return $ingrediente["id"]; 
    } else {
        return false; 
    }
}
