<?php
$conexion = new mysqli("localhost","sistema","1990_dairon","pildorasphp");
if($conexion->connect_errno){
	echo "Fallo la conexion a la BD ".$conexion->connect_errno;
}
	$conexion->set_charset("utf8");
	$sql="select * from productos";
	$result=$conexion->query($sql);
	while ($file=$result->fetch_assoc()) {
		echo $file["CODART"]."<br>";
		echo $file["SECCION"]."<br>";
		echo $file["NOMBREARTICULO"]."<br>";
		echo $file["PRECIO"]."<br>";
		echo $file["FECHA"]."<br>";
		echo $file["IMPORTADO"]."<br>";
		echo $file["PAISDEORIGEN"]."<br>";
		echo "********************************************************<br>";
	}

?>