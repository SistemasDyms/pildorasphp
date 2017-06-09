<?php
require_once("class.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 29</title>
</head>
<body>
	<h1>POO parte 7 en php pildoras informaticas Variables y metodos Estaticos </h1>
	<?php 
	$vehiculo1= new concecionario("chevy");
	$vehiculo1->add_gps();
	$vehiculo1->add_tapiceria("blanco");
	echo "<br>";
	echo "el precio del vehiculo es ".$vehiculo1->precio_final();
	echo "<br>";
	$vehiculo2= new concecionario("aveo");
	$vehiculo2->add_aireacon();
	$vehiculo2->add_tapiceria("verde");
	echo "el precio del vehiculo es ".$vehiculo2->precio_final();

	?>
</body>
</html>