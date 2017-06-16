<?php
	require_once("../public/class/config.php");
	try {
		$conexion = new  PDO("mysql:host=localhost;dbname=pildorasphp",$db_user,$db_password);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");
		$buscar=$_POST["buscar"];
		$sql="select * from productos where NOMBREARTICULO = :nombre";
		$resultado=$conexion->prepare($sql);
		$resultado->execute(array(":nombre"=>$buscar));
		while ($file=$resultado->fetch(PDO::FETCH_ASSOC)) {
			echo "el nombre es ".$file["CODART"]."<br>";
			echo "el nombre es ".$file["NOMBREARTICULO"]."<br>";
			echo "el nombre es ".$file["SECCION"]."<br>";
			echo "el nombre es ".$file["FECHA"]."<br>";
			echo "el nombre es ".$file["PRECIO"]."<br>";
			echo "el nombre es ".$file["IMPORTADO"]."<br>";
			echo "el nombre es ".$file["PAISDEORIGEN"]."<br>";
			echo "/*******************************************<br>";
		}
		$resultado->closeCursor();
	} catch (Exception $e) {
		echo "Error al conectarse a la  BD". $e->getMessage();
	}


?>
