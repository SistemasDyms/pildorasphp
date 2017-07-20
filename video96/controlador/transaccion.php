<?php
//video95
require_once("../../public/class/const.php");
require_once("../modelo/objetoBlog.php");
require_once("../modelo/manejoObjetos.php");

try {
	$conexion = new PDO("mysql:host=localhost;dbname=Blogpildoras",DB_USER,DB_PASS);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $conexion->exec("SET CHARACTER SET UTF8");
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
			
			$ruta="../vista/imgupload/";
			move_uploaded_file($_FILES["img"]["tmp_name"], $ruta.$_FILES["img"]["name"]);
			echo "Archivo " .$_FILES["img"]["name"]." subido correctamente";
		}else{
			echo "No se a subido el archivo";
		}
	}
	$manejo= new manejoObjetos($conexion);
	$manejo_objeto= new ObjetoBlog();
	$manejo_objeto->Set_titulo(htmlentities(addslashes($_POST["titulo"]),ENT_QUOTES));
	$manejo_objeto->Set_fecha(date("Y-m-d h:i:s"));
	$manejo_objeto->Set_comentario(htmlentities(addslashes($_POST["articulo"]),ENT_QUOTES));
	$manejo_objeto->Set_imagen($_FILES["img"]["name"]);
	$manejo->insertarArticulos($manejo_objeto);
	header("location:../index.php");

}//cierre del TRY
catch (Exception $e) {
	echo "Ha ocurrido un error al conectarse con la BD ".$e->getMessage();
}
  ?>
