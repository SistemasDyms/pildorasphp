<?php
//video92
// 

include("../public/class/conexionPDO.php");
$conexion = mysqli_connect("localhost","sistema","1990_dairon","Blogpildoras");
if(!$conexion){
	echo "la conexion ha fallado ".mysqli_errn();
	exit();
}
if($_FILES["img"]["error"]){

	switch ($_FILES["img"]["error"]) {
		case 1:
			echo "Se supero el tamaño del archivo dado por el servidor";
			break;
		case 2:
			echo "Se supero el tamaño del archivo dado por el Formulario(2mb)";
			break;
		case 3:
			echo "El archivo se subio al servidor pero con errores";
			break;
		case 4:
			echo "No se subio ningun Archivo";
			break;			
	}
}else{
	echo "Sin Errores Articulo Publicado Correctamente<br>";
	if (isset($_FILES["img"]["name"]) && ($_FILES["img"]["error"]==UPLOAD_ERR_OK)) {
		
		$ruta="imgupload/";
		move_uploaded_file($_FILES["img"]["tmp_name"], $ruta.$_FILES["img"]["name"]);
		echo "Archivo " .$_FILES["img"]["name"]." subido correctamente";
	}
}
$titulo=$_POST["titulo"];
$fecha=date("Y-m-d h:i:s");
echo $fecha;
$articulo=$_POST["articulo"];
$imagen=$_FILES["img"]["name"];
$consulta="insert into contenido(titulo,fecha,comentario,imagen) 
values ('".$titulo."','".$fecha."','".$articulo."','".$imagen."')";

$resultado=mysqli_query($conexion,$consulta);

mysqli_close($conexion);
echo "<br> registro guardado con exito";
header("location:index.php");
  ?>
