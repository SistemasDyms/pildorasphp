<?php
require_once("class.php");
$valor=$_GET["buscar"];

$propiedad= new Crud();
$result=$propiedad->get_productos($valor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 58</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
	<h1>Conexion a la BD con mysqli mediante POO parte 2  </h1>
	<form class="" action="index.php" method="get">
		<div class="form-group">
			<label for="buscar">ingrese nombre a buscar</label>
			<input type="text" name="buscar" id="buscar" class="form-control">
		</div>
		<input type="submit" name="enviar" value="Buscar" class="btn btn-info">
	</form>
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
