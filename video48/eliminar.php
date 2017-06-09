<?php

require_once("config.php");

$con=mysqli_connect($db_host,$db_user,$db_password);
$user=mysqli_real_escape_string($con,$_POST["user"]) ;
$pass=mysqli_real_escape_string($con,$_POST["pass"]);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");

$consult="delete from usuario where user='$user' and pass='$pass'";
echo "$consult<br>";
$result=mysqli_query($con,$consult);
	if($res=mysqli_affected_row($result)>0){
		echo "registro Eliminado";
	}else{
		echo "no se encontro el usuario";
	}

?