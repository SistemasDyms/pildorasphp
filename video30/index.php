<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 30</title>
</head>
<body>
	<h1>Arrays </h1>
	<?php 
		$dias=["lunes","martes","miercoles"];
		echo "el dia es ".$dias[1];
		$meses= array("enero","febrero","marzo","abril");
		echo "<br>";
		echo "el mes es ".$meses[3];
		$familia= array("nono"=>"obdulio",
						"tio"=>"alipio",
						"tia"=>"elena",
						"nieto"=>"dairon");
		echo "<br>";
		echo "el mejor nieto de todos es ".$familia["nieto"];
	?>
</body>
</html>