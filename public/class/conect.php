<?php
require_once("const.php");
	try {
       $conexion = new PDO("mysql:host=localhost;dbname=Perfiles",DB_USER,DB_PASS);
       $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       $conexion->exec("SET CHARACTER SET UTF8");
       
     } catch (Exception $e) {
       echo "Errro al conectarse con la BD".$e->getMessage();
     }
?>