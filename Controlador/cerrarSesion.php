<?php
include("../Control/sesion.php");
control();

session_unset();
session_destroy();
header("Location: index.php");
