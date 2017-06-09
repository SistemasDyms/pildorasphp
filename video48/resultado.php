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

$consult="Select * from usuario where user='$user' and pass='$pass'";
echo "$consult<br>";
$result=mysqli_query($con,$consult);
while(($res=MYSQLI_FETCH_ROW($result)) == TRUE){
	echo "Bienvenido; ".$res[0]."<br>";
	echo $res[1]."<br>";
	echo $res[2]."<br>";
	echo $res[3]."<br>";
	echo "<hr>";
	echo "<hr>";
}


function number($y,$t){}
?>