<?php 
//video84
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
$fototamano=$_FILES["ar"]["size"];
$fototipo=$_FILES["ar"]["type"];
echo $fototipo;
echo "<br>";
if ($fototamano<=1000000) {
	if($fototipo=="image/jpeg" or $fototipo=="image/png" or $fototipo=="image/gif"){
		$archivo=$_FILES["ar"]["name"];
		$server=$_SERVER['DOCUMENT_ROOT'].'/pildorasPHP/video84/uploads/';
		move_uploaded_file($_FILES["ar"]["tmp_name"],$server.$archivo);
		echo "el archivo se subio correctamente";
	}else{
		echo "No se permiten archivos distinto de imagenes";
	}
}else{
	echo "No puede subir archivos de tanto peso";
}
require_once("../public/class/const.php"); 
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASS);
if($conexion->connect_error){
	echo "error al conectase a la BD ".$conexion->connect_errno;
}
$conexion->select_db(DB_NAME);
$conexion->set_charset(DB_CHARSET);
$sql="update productos set FOTO = '$archivonom' where CODART='AR02'";
$conexion->query($sql);

?>