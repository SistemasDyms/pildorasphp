<?php
require_once("class.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 26</title>
</head>
<body>
	<h1>POO parte 5 en php pildoras informaticas MODULARIZACION ENCAPSULAMIENTO MODIFICADORES DE ACCESO(public,private,protected)</h1>
	<?php 
		$chevrolet= new camion();
		echo "tien el camion ".$chevrolet->ruedas." ruedas<br>";
		$chevy= new coche();
		echo "el chevy tiene ".$chevy->ruedas." ruedas";
	?>
</body>
</html>