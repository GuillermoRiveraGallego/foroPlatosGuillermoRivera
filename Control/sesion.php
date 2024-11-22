<?php

function control(){
    session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}

if (isset($_SESSION["tiempoInicioSesion"]) && (time() - $_SESSION["tiempoInicioSesion"]) > 1200) {
    session_unset();
    session_destroy();
    header("Location: index.php?error=inactividad");
    exit;
}

$_SESSION["tiempoInicioSesion"] = time();

}