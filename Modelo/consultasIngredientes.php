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



