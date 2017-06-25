<?php 
//video72
	require_once("../public/class/conect.php");
	$id=$_GET["iduser"];
	$nom=$_GET["nombre"];
	$ape=$_GET["apellido"];
	$dir=$_GET["dir"];

	$sql=("update usuarios set nombre =:nombre ,apellido=:apellido,direccion=:direccion  where id=:id ");
	$result=$conexion->prepare($sql);
	$result->execute(array(":nombre"=>$nom,"apellido"=>$ape,"direccion"=>$dir,"id"=>$id));
	$resp=$result->rowCount();
	if($resp==1){
		header("location:consultar.php");
	}else{
		echo "NO se realizo la actualizacion";
	}
?>