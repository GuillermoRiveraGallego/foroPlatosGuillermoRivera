<?php

include("../Modelo/consultasRecetas.php");

include "../Modelo/consultasUsuarios.php";

$receta = verUnaReceta();

$receta["nombreDelUsuario"] = NombreUsuarioPorId($receta["id_usuario"])["nombre_usuario"];

include("../Vista/headerLogueado.php");
include("../Vista/verUnaRecetaLogeado.php");
include("../Vista/footer.php");



?>