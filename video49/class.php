<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
	
</body>
</html>
<?php

require_once("config.php");

$con=mysqli_connect($db_host,$db_user,$db_password);
$buscar=mysqli_real_escape_string($con,$_GET["buscar"]);
echo $buscar;
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$consult ="select CODART,SECCION,NOMBREARTICULO,PAISDEORIGEN from productos where nombrearticulo = ?";

$resultado=mysqli_prepare($con,$consult);

$ok=mysqli_stmt_bind_param($resultado,"s",$buscar);
$ok=mysqli_stmt_execute($resultado);
if($ok==false){
	echo "Ocurrio un Error al Realizar la consulta";
}else{
	mysqli_stmt_bind_result($resultado,$cod,$seccion,$nomart,$pais);
?>
<h2>Articulos Encontrados</h2>
<table class="table table-striped table-bordered table-hover" width="50%" border="1px solid #FF00FF" >
<tr class="success">
	<td>Cod Articulo</td>
	<td>Seccion</td>
	<td>Nombre Àrticulo</td>
	<td>Precio</td>
	<td>Fecha</td>
	<td>Pais Origen</td>
</tr> 
<?php

while(mysqli_stmt_fetch($resultado)){
	
	
	echo "<tr><td> ";
 	echo $cod."</td><td>";
 	echo $seccion."</td><td>";
 	echo $nomart."</td><td>";
 	echo $pais."</td>";
 	echo "</tr>";
 }
 mysqli_stmt_close($resultado);
 }
 ?>
 </table>
<?php
mysqli_close($con);		
?>