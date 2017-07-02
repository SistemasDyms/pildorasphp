<?php
//video85
// 
 
require_once("../public/class/const.php"); 
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASS);
if($conexion->connect_error){
	echo "error al conectase a la BD ".$conexion->connect_errno;
}
$conexion->select_db(DB_NAME);
$conexion->set_charset(DB_CHARSET);
$sql="select FOTO from productos where CODART='AR02'";
$result=$conexion->query($sql);
while($file=mysqli_fetch_array($result)){
	echo $ruta=$file["FOTO"];

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
  <img src="uploads/<?php echo $ruta;?>" class="img-circle">
  	
  </body>
  </html>  