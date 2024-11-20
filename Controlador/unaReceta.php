<?php
include("../Modelo/consultasRecetas.php");

$receta = verUnaReceta();

include("../Vista/headerNoLogueadoHome.php");
include("../Vista/verUnaReceta.php");
include("../Vista/footer.php");



?>