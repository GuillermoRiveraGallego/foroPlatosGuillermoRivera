<?php

include("../Control/sesion.php");
control();

include("../Modelo/consultasRecetas.php");

if (!isset($_POST["idReceta"]) || empty($_POST["idReceta"])) {

    header("Location: ../Controlador/menuAdministradores.php");
    exit;

}

$id = $_POST["idReceta"];
$fotoGuardada = recetafoto($id);

include("../Vista/headerAdministradoresHome.php");
include("../Vista/adminFuncion2ModificarReceta.php");
include("../Vista/footer.php");
