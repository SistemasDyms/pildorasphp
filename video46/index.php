<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 41</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<?php

function ejecutar($busqueda){
require_once("config.php");
$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$consult ="select * from productos where nombrearticulo LIKE '%$busqueda%'";
$result=mysqli_query($con,$consult);
?>
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
while($file=MYSQLI_FETCH_ARRAY($result,MYSQL_ASSOC)){
	
	echo "<tr><td> ";
	echo $file['CODART']."</td><td>";
	echo $file['SECCION']."</td><td>";
	echo $file['NOMBREARTICULO']."</td><td>";
	echo $file['PRECIO']."</td><td>";
	echo $file['FECHA']."</td><td>";
	echo $file['PAISDEORIGEN']."</td>";
	echo "</tr>";
}
?>	
</table>
<?php
mysqli_close($con);		
}
?>
</head>
<body>
	<h1>mysql parte 8 listado de registros CRUD </h1>
	<h2>Pagina de busqueda parte 2</h2>
	<?php 
	$mibusqueda=$_GET["buscar"];
	$mipag=$_SERVER["PHP_SELF"];
	if($mibusqueda!=NULL){
		ejecutar($mibusqueda);
	}else{
	?>
	<form class="form" action="<?php $mipag ?>" method="GET">
	<div class="form-group">
		<label for="buscar">buscar</label>
		<input type="text" class="form-control" id="buscar" name="buscar">
	</div>
		<input class="btn btn-success" type="submit" value="BUSCAR">
	</form>
	<?php
	}
	?>
	


</body>
</html>
