<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video 21</title>
</head>
<body>
	<h1>paso de parametros Funciones en PHP pildoras </h1>
	<?php
	function incrementar($valor){
		$valor++;
		return $valor;
	}
	function incref(&$va){
		$va++;
		return $va;
	}
	function cambiarletras(&$datos){
		$datos=strtolower($datos);
		$datos=ucwords($datos);
		return $datos;
	}
	?>
	<p>
		<?php
		$num2 = 2;
		echo (incrementar(5))."<br>";
		echo (incref($num2))."<br>";
		echo $num2."<br>";
		$cadena="EpaLE QuE tAl";
		echo cambiarletras($cadena)."<br>";
		echo $cadena;	
		?>
	</p>
</body>
</html>