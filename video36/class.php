<?php
$db_host="localhost";
$db_name="pildorasphp";
$db_user="sistema";
$db_password="1990_dairon";

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$consult ="Select * from datosusuario";
$result=mysqli_query($con,$consult);
$fila=mysqli_fetch_row($result);
echo $fila[0]."<br>";
echo $fila[1]."<br>";
echo $fila[2]."<br>";
echo $fila[3]."<br>";


		

?>