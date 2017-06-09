<?php
require_once("config.php");
$nom=$_GET["codart"];
$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}

mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$reg="DELETE FROM PRODUCTOS where codart ='$nom' ";
$res=mysqli_query($con,$reg);
if($res==false){
	echo "Problema al eliminar el registro";
}else{
	if(mysqli_affected_rows($con)==0){
		echo "No hay registros que eliminar";
	}else{
		echo "Registro con ID ".mysqli_affected_rows($con)." Satisfactoriamente!";
	}
}

mysqli_close($con);		

?>