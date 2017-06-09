<?php
require_once("class.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 27</title>
</head>
<body>
	<h1>POO parte 5 en php pildoras informaticas <br>
	metodos getters y setters <br>
	MODULARIZACION ENCAPSULAMIENTO MODIFICADORES DE ACCESO(public,private,protected)</h1>
	<?php 
		$chevrolet= new camion();
		echo "tien el camion ".$chevrolet->get_ruedas()." ruedas<br>";
		$chevrolet->set_color("verde","350");
		echo "<br>";
		echo " el camion tiene un motor ".$chevrolet->get_motor()." cc";
		echo "<br>";
		$chevy= new coche();
		echo "el chevy tiene ".$chevy->get_ruedas()." ruedas <br>";

	?>
</body>
</html>