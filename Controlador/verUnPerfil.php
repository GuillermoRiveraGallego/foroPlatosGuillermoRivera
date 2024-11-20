<?php

include("../Modelo/consultasUsuarios.php");
include("../Modelo/consultasRecetas.php");
$nombreUsuario = $_GET["perfil"];



/*controla que si es usuario desconocido no haga lo demas*/
$PerfilUsuario = datosUsuario($nombreUsuario);

$idDelUsuario = saberIdNombreUsuario($nombreUsuario);

/*aqui hacer if si el una receta devuelve algo creando el array*/

$recetasDelPerfil = verUnaRecetaPorIDUsuario ($idDelUsuario);

include("../Vista/headerLogueado.php");
include("../Vista/verUnPerfil.php");
include("../Vista/footer.php");


?>