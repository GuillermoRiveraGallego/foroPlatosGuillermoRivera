<?php

if (isset($_POST["botonEliminar"])){
   
    include("../Modelo/consultasRecetas.php");
    $id = $_POST["idReceta"];
    $fotoGuardada = recetafoto($id);    

    include("../Vista/headerAdministradoresHome.php");
    include("../Vista/adminFuncion2ModificarReceta.php");
    include("../Vista/footer.php");
   
} else {

    header("Location: ../Controlador/menuAdministradores.php");
    exit;

}