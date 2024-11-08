<?php

include("../Modelo/consultasRecetas.php");

$receta = verUnaReceta();

include("../Vista/headerNoLogueado.php");
include("../Vista/verUnaReceta.php");
include("../Vista/footer.php");



?>