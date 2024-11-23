<?php

if (isset($_POST["modificacionReceta"])){

        
        include("../Modelo/consultasRecetas.php");
        include("../Modelo/consultasIngredientes.php");
        
        $ingredientesDeReceta = ingredientesReceta($_POST["idReceta"]);
        
        if (empty($ingredientesDeReceta)) {
        
            header("Location: ../Controlador/menuAdministradores.php?error=noIngredientes");
            exit;
        }
        
        foreach ($ingredientesDeReceta as $ingredientes => $ingrediente) {
        
            $idIngrediente = $ingrediente["id_ingrediente"];
            $nombreIngrediente = selectNombreIngredienteID($idIngrediente);
            $ingredientesDeReceta[$ingredientes]["nombre"] = $nombreIngrediente;
        }
        
        include("../Vista/headerAdministradoresHome.php");
        include("../Vista/eliminarIngredientesModificacion.php");
        include("../Vista/footer.php");

    
} else {

    header("Location: ../Controlador/index.php");
    exit;

}
    