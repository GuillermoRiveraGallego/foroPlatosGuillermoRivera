<?php

if (isset($_POST["modificacionReceta"])){ 

    include("../Control/sesion.php");
    control();

include("../Modelo/consultasRecetas.php");

$todaLaReceta = verUnaRecetaPorId ($_POST["id"]);
$fotoGuardadaperfil = $_POST["fotoRecetaGuardada"];

include("../Vista/headerAdministradoresHome.php");
include("../Vista/adminModificaRecetaDatos.php");
include("../Vista/footer.php");

} else {

    header("Location: ../Controlador/menuAdministradores.php");
    exit;

}

