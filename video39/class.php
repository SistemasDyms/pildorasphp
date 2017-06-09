<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de tablas</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
	

<?php
require_once("config.php");

$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$consult ="select * from productos where paisdeorigen ='ESPAÑA'";
$result=mysqli_query($con,$consult);
?>
<table class="table table-striped" width="50%" border="1px solid #FF00FF" >
<tr>
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

?>
</body>
</html>