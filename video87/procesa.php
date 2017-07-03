<?php 
//video86
/*
$archivo=$_FILES["ar"];

print_r($archivo); 
echo "<br>";

echo $archivonom;
echo "<br>";

echo $archivo;
echo "<br>";

$peso=$archivo/1000;
echo $peso;
echo "<br>";

echo $server;
echo "<br>";
*/
//controlamos el tamaño del archivo
//tipos de archivos*-----------------------------
//image/jpeg
//application/pdf
// 
$archivonom=$_FILES["ar"]["name"];
$archivotamano=$_FILES["ar"]["size"];
$archivotipo=$_FILES["ar"]["type"];
echo $archivotipo;
echo "<br>";
if ($archivotamano<=1000000) {


		$destino=$_SERVER['DOCUMENT_ROOT'].'/pildorasPHP/video84/uploads/';
		move_uploaded_file($_FILES["ar"]["tmp_name"],$destino.$archivonom);
		echo "el archivo se subio correctamente<br>";
}else{
	echo "No puede subir archivos de tanto peso";
}
/*************************Conexion a la bd*****************************************/
require_once("../public/class/const.php"); 
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASS);
if($conexion->connect_error){
	echo "error al conectase a la BD ".$conexion->connect_errno;
}
$conexion->select_db(DB_NAME);
$conexion->set_charset(DB_CHARSET);

$objeto=fopen($destino.$archivonom,"r");
$fichero=fread($objeto,$archivotamano);
$fichero=addslashes($fichero);
fclose($objeto);
$sql="insert into archivos (nombre,tipo,fichero) values('$archivonom','$archivotipo','$fichero')";
$conexion->query($sql);
if(mysqli_affected_rows($conexion)>0){
	echo "se ingreso correctamente";
}else{
	echo "Ocurrio un error";
}
?>