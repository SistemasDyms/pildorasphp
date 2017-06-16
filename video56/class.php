<?php
//video 56
require_once("../public/class/config.php");
try {
	$conexion= new PDO("mysql:host=localhost;dbname=pildorasphp",$db_user,$db_password);
	$codart=$_POST["codart"];
	$seccion=$_POST["seccion"];
	$nombre=$_POST["nombre"];
	$precio=$_POST["precio"];
	$fecha=$_POST["fecha"];
	$importado=$_POST["importado"];
	$pais=$_POST["pais"];
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET UTF8");
	$sql="Insert into productos (CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN)
		 values(:codigo,:seccion,:nombre,:precio,:fecha,:importado,:pais)";
	$result=$conexion->prepare($sql);
	$result->execute(array(":codigo"=>$codart,":seccion"=>$seccion,":nombre"=>$nombre,
													":precio"=>$precio,":fecha"=>$fecha,":importado"=>$importado,
													":pais"=>$pais));
	echo "Producto registrado Correctamente";
$result->closeCursor();

} catch (Exception $e) {
	echo "Error al conectar con la BD: ".getLine();
}


?>
