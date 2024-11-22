<?php

include("../Control/sesion.php");
control();

include("../Modelo/consultasRecetas.php");

$id = $_POST["idReceta"];
$fotoGuardada = recetafoto($id);

include("../Vista/headerAdministradoresHome.php");
include("../Vista/adminFuncion2ModificarReceta.php");
include("../Vista/footer.php");
