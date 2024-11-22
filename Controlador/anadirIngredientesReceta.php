<?php
include("../Control/sesion.php");
control();

include("../Modelo/consultasIngredientes.php");
$todosLosIngredientes = nombresIngredientes();

include("../Vista/headerAdministradoresHome.php");
include("../Vista/anadirIngredientesReceta.php");
include("../Vista/footer.php");

