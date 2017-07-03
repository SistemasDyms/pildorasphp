<?php
//video85
// 
 
 $id="";
 $tipo="";
 $fichero="";

require_once("../public/class/const.php"); 
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASS);
if($conexion->connect_error){
	echo "error al conectase a la BD ".$conexion->connect_errno;
}
$conexion->select_db(DB_NAME);
$conexion->set_charset(DB_CHARSET);
$sql="select * from archivos where ID=2";
$result=$conexion->query($sql);
while($file=mysqli_fetch_array($result)){
	$id=$file["id"];
  $tipo=$file["tipo"];
  $fichero=$file["fichero"];

}

  ?>
<!DOCTYPE html>
  <html lang="es">
  <head>
  	<meta charset="UTF-8">
  	<title>ver imagenes</title>
  	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
  </head>
  <body>
  <?php
  echo "<br>";
   echo $id; 
   echo "<br>";
  echo $tipo; 
   echo "<br>";
   echo "<img src='data:image/jpeg; base64, " .base64_encode($fichero) ."' class='img-rounded'  >"; 
   echo "<br>";
  ?>

  	
  </body>
  </html>  