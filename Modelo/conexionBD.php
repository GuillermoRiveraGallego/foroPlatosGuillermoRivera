<?php
	
	function conexionBaseDatos(){

        $pdo = new PDO("mysql:host=mysql-db;dbname=foroplatos","root","admin");
        return $pdo;
        
    }
?>