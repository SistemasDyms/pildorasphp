<?php
//video53
require_once("../public/class/config.php");
try{
	$conexion = new PDO("mysql:host=localhost;dbname=pildorasphp",$db_user,$db_password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$conexion->exec("SET CHARACTER SET utf8");
	$valor=$_POST["buscar"];
	$sql="select * from productos where NOMBREARTICULO = ?";

	$result=$conexion->prepare($sql);// asi creamos el objeto PDOSTATEMENT
	$result->execute(array($valor));

	while($file=$result->fetch(PDO::FETCH_ASSOC)){
		echo "el nombre es ".$file["CODART"]."<br>";
		echo "el nombre es ".$file["NOMBREARTICULO"]."<br>";
		echo "el nombre es ".$file["SECCION"]."<br>";
		echo "el nombre es ".$file["FECHA"]."<br>";
		echo "el nombre es ".$file["PRECIO"]."<br>";
		echo "el nombre es ".$file["IMPORTADO"]."<br>";
		echo "el nombre es ".$file["PAISDEORIGEN"]."<br>";
		echo "/*******************************************<br>";
	}
	$result->closeCursor();

}catch (PDOException $e){
	die("Error al Conectar con la BD").$e->getMessage()."<br>";
}finally{
	$conexion=NULL;
}



?>
