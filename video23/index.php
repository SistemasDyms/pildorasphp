<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video 20</title>
</head>
<body>
	<h1>POO parte 2 en php pildoras informaticas </h1>
	<?php
	class coche{

		var $color;
		var $motor;
		var $puertas;

		function coche(){
			$this->color="";
			$this->motor="1600";
		}
		function arrancar(){
			echo "Aranque run run run!";
		}
		function parar(){
			echo "bueno STOP!!";
		}
	}

	?>
	<p>
		<?php
	$chevrolet= new coche();
	$chevrolet->arrancar();
		?>
	</p>
</body>
</html>