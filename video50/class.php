<?php 
require_once("../public/class/config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
	
</body>
</html>
<?php
$con=mysqli_connect($db_host,$db_user,$db_password);//Conexion a la BD

$codart=mysqli_real_escape_string($con,$_POST["codart"]);
$seccion=mysqli_real_escape_string($con,$_POST["seccion"]);
$nombre=mysqli_real_escape_string($con,$_POST["nombre"]);
$precio=mysqli_real_escape_string($con,$_POST["precio"]);
$fecha=mysqli_real_escape_string($con,$_POST["fecha"]);
$importado=mysqli_real_escape_string($con,$_POST["importado"]);
$pais=mysqli_real_escape_string($con,$_POST["pais"]);

if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Error al conectar con la BD");
mysqli_set_charset($con,"utf8");
$consult="insert into productos (CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN)
					values(?,?,?,?,?,?,?)";

$resultado=mysqli_prepare($con,$consult);
$ok=mysqli_stmt_bind_param($resultado,"sssisss",$codart,$seccion,$nombre,$precio,$fecha,$importado,$pais);
$ok=mysqli_stmt_execute($resultado);
if($ok==false){
	echo "Ocurrio un Error al Realizar el insert";
}else{
	//mysqli_stmt_bind_result($resultado,$cod,$seccion,$nomart,$pais);
	echo "Registro insertado Correctamente <br>";
 mysqli_stmt_close($resultado);
}
mysqli_close($con);	
?>