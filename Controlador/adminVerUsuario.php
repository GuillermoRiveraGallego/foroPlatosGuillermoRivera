<?php
include("../Control/sesion.php");
control();

include("../Modelo/consultasUsuarios.php");

$listaRecetasAEliminar = UsuarioIdNombre();

include("../Vista/headerAdministradoresHome.php");
include("../Vista/adminEliminarUsuario.php");
include("../Vista/footer.php");