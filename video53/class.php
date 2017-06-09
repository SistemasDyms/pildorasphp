<?php
require_once("../public/class/config.php");
try{
	$conexion = new PDO("mysql:host=localhost;db_nme=phpintermedio",$db_user,$db_password);

	$conexion->exec("SET CHARACTER SET utf8");
	$sql="select * from datosusuario where nombre= ?";

	$result=$conexion->prepare($sql);// asi creamos el objeto PDOSTATEMENT
	$result->execute(array("desillador"));

	while($fil=$result->fetch(PDO::FETCH_ASSOC)){
		echo "el nombre es ".$fie["nombre"]."<br>";
	}
	$result->closeCursor();





}catch (PDOException $e){
	die("Error al Conectar con la BD").$e->getMessage()."<br>";
}finally{
	$conexion=NULL;
}



?>