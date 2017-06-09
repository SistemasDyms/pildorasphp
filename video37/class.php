<?php
$db_host="localhost";
$db_name="pildorasphp";
$db_user="sistema";
$db_password="1990_dairon";

$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$consult ="Select * from datosusuario";
$result=mysqli_query($con,$consult);
while(($fila=mysqli_fetch_row($result)) ==TRUE){
	echo $fila[0]."<br>";
	echo $fila[1]."<br>";
	echo $fila[2]."<br>";
	echo $fila[3]."<br>";
	echo "*********************************************************/<br>";
}


mysqli_close($con);		

?>