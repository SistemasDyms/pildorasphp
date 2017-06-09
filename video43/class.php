<?php
require_once("config.php");

$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$codart=$_POST["codart"];
$seccion=$_POST["seccion"];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$fecha=$_POST["fecha"];
$importado=$_POST["importado"];
$pais=$_POST["pais"];
$insert="insert into productos(CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) values('$codart','$seccion','$nombre',$precio,'$fecha','$importado','$pais')";
$reg=mysqli_query($con,$insert);
if($reg==FALSE){
	echo "Error al ingresar el producto",mysqli_error($con);
}else{
	echo "Registro Guardado con exito";
}
mysqli_close($con);		

?>
<br>
<button type="button">
	<a href="index.php">Ingresar otro producto</a>
</button>