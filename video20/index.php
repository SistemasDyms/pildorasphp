<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video 20</title>
	<style>
		.color{
			background-color: #FC0000; 
		}
	</style>
</head>
<body>
	<h1>Funciones en PHP pildoras </h1>
	<?php

	$nada="lo Chimbo De TODO";
	echo strtolower($nada);
	echo "<br>";
	echo strtoupper($nada);

	function sumar($n1,$n2){
		$resultado= $n1+$n2;
		return $resultado;
}º
	function cambiarLetra($cadena,$conversion=true){
		$cadena=strtolower($cadena);
		if($conversion==true){
			$resultado=ucwords($cadena);
		}else{
			$resultado=strtoupper($cadena);
		}
		return $resultado;
	}
	?>
	<p>
		<?php
		echo "el resultado es: "; 
		echo sumar(2,6);	
		echo "<br>";
		echo (cambiarLetra("una frase de prueba",false));
		?>
	</p>
</body>
</html>