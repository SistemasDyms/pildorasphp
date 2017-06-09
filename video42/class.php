<?php
require_once("config.php");

$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
$insert="insert into productos(CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) values('AR42','DEPORTES','GUANTES',152.25,'2017/05/25','VERDADERO','VENEZUELA')";

mysqli_close($con);		

?>