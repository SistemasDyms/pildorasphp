<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 32</title>
</head>
<body>
<h1>Arrays parte 3 multidimensionales</h1>
<?php 
	$alimentos= array("fruta" => array("dulce"=>"melon","citrico"=>"limon","duro"=>"coco"),
					"leche"=>array("animal"=>"vaca","vegetal"=>"coco"),
					"carnes"=>array("vacuno"=>"lomo","porcino"=>"papada"));
	
	foreach ($alimentos as $ali => $cat) {
		echo "<ul> ".$ali.": <br>";
		while(list($clave,$valor)=each($cat)){
			echo "<li>".$clave." = ".$valor."</li>";

		}
		echo "</ul>";

	}
?>
</body>
</html>