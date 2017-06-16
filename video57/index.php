<?php
require_once("class.php");
$productos = new Crud();
$result=$productos->get_productos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 57</title>
</head>
<body>
	<h1>Conexion a la BD con mysqli mediante POO  </h1>
<?php
	foreach ($result as $file) {
		echo "el nombre es ".$file["CODART"]."<br>";
		echo "el nombre es ".$file["NOMBREARTICULO"]."<br>";
		echo "el nombre es ".$file["SECCION"]."<br>";
		echo "el nombre es ".$file["FECHA"]."<br>";
		echo "el nombre es ".$file["PRECIO"]."<br>";
		echo "el nombre es ".$file["IMPORTADO"]."<br>";
		echo "el nombre es ".$file["PAISDEORIGEN"]."<br>";
		echo "/*******************************************<br>";
	}

?>
</body>
</html>
