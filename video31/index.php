<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 31</title>
</head>
<body>
	<h1>Arrays parte 2</h1>
	<?php 
		$dias=["lunes","martes","miercoles"];

		echo "el dia es ".$dias[1];
		$meses= array("enero","febrero","marzo","abril");
		echo "<br>";
		$prueba=2;
		echo "el mes es ".$meses[3];
		$familia= array("nono"=>"obdulio",
						"tio"=>"alipio",
						"tia"=>"elena",
						"nieto"=>"dairon");
		$familia["nieta"]="yaneth";
		$numero= array("cero"=>0,
						"uno"=>1,
						"dos"=>2,
						"tres"=>3);
		echo "<br>";
		echo "el mejor nieto de todos es ".$familia["nieto"];
		echo "<br>";
		if(is_array($prueba)){
			echo "si es<br>";
		}else{
			echo "no es <br>";
		}
		foreach ($familia as $prop => $valor) {
				echo "estos son los de mi familia ".$prop." ".$valor."<br>";
		}
		echo "<br>";
		for($i=0;$i<count($dias);$i++)
		{
			echo "los dias son ".$dias[$i]."<br>";
		}

	?>
</body>
</html>