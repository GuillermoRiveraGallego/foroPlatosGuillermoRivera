<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {

    header("Location: index.php");
    exit;
}
include("../Vista/headerAdministradoresHome.php");
include("../Vista/adminHaceAdministrador.php");
include("../Vista/footer.php");
?>

