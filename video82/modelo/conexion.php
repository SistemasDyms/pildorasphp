<?php
//video80 conexion
require_once("const.php");

class ConectarBD{
	public static function conectar(){
		try {
       $conexion = new PDO("mysql:host=localhost;dbname=pildorasphp",DB_USER,DB_PASS);
       $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       $conexion->exec("SET CHARACTER SET UTF8");
       
     } catch (Exception $e) {
       echo "Errro al conectarse con la BD".$e->getMessage();
     }
		return $conexion;
	}
}
?>