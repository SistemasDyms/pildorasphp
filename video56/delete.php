<?php
// elimianr los registros
require_once("../public/class/config.php");
try {
	$conexion= new PDO("mysql:host=localhost;dbname=pildorasphp",$db_user,$db_password);
	$codart=$_GET["codart"];
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET UTF8");
	$sql="delete from productos where CODART= :codigo";
	$result=$conexion->prepare($sql);
	$result->execute(array(":codigo"=>$codart));
	echo "Producto Eliminado Correctamente";
$result->closeCursor();

} catch (Exception $e) {
	echo "Error al conectar con la BD: ".getLine();
}

 ?>
