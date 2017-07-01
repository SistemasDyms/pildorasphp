<?php 
//video83 

$archivo=$_FILES["ar"];

print_r($archivo); 
echo "<br>";
$archivonom=$_FILES["ar"]["name"];
echo $archivonom;
echo "<br>";
$archivo=$_FILES["ar"]["type"];
echo $archivo;
echo "<br>";
$archivo=$_FILES["ar"]["size"];
$peso=$archivo/1000;
echo $peso;
echo "<br>";
$archivo=$_FILES["ar"]["tmp_name"];
echo $archivo;
echo "<br>";
$server=$_SERVER['DOCUMENT_ROOT'].'/pildorasPHP/video83/uploads/';
echo $server;
echo "<br>";
move_uploaded_file($_FILES["ar"]["tmp_name"],$server.$archivonom);
?>