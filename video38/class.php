<?php
require_once("config.php");

$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$consult ="Select * from datosusuario";
$result=mysqli_query($con,$consult);
?>
<table width="50%" border="1px solid #FF00FF">
<?php
while(($fila=mysqli_fetch_row($result)) ==TRUE){

	echo "<tr><td> ";
	echo $fila[0]."</td><td>";
	echo $fila[1]."</td><td>";
	echo $fila[2]."</td><td>";
	echo $fila[3]."</td>";
	echo "</tr>";

}
?>	
</table>
<?php
mysqli_close($con);		

?>