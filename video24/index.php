<?php
require_once("classVehiculos.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 24</title>
</head>
<body>
	<h1>POO parte 3 en php pildoras informaticas </h1>
	<?php 
		$chevrolet= new camion();
		echo "tiene ".$chevrolet->ruedas." ruedas<br>";
		$chevy= new coche();
		echo "el chevy tiene ".$chevy->ruedas." ruedas";
	?>
</body>
</html>