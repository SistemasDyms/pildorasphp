<?php
require_once("class.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 25</title>
</head>
<body>
	<h1>POO parte 4 en php pildoras informaticas Herencias </h1>
	<?php 
		$chevrolet= new camion();
		echo "tiene ".$chevrolet->ruedas." ruedas<br>";
		$chevrolet->establece_color("350","verde");
		$chevrolet->arrancar();
		$chevy= new coche();
		echo "el chevy tiene ".$chevy->ruedas." ruedas<br>";
		$chevy->establece_color("chevy","verde");
	?>
</body>
</html>