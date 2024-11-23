<?php
include("../Control/sesion.php");
control();

include("../Modelo/consultasRecetas.php");

$listaRecetasAEliminar = recetasIdNombre();

include("../Vista/headerAdministradoresHome.php");
include("../Vista/adminEliminarReceta.php");
include("../Vista/footer.php");