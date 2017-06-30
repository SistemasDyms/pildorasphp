<?php
require_once("conexion.php");
$conexion=ConectarBD::conectar();

if(isset($_GET["pagina"])){
		if($_GET["pagina"]==1){
			header("location:index.php");
		}else{
			$pagina=$_GET["pagina"];
		}
	}else{
		$pagina= 1;
	}
	$total = 10;
	$inicio=($pagina-1)*$total;
	$sql="select * from usuarios";
		$result=$conexion->prepare($sql);
		$result->execute(array());

		$totalfilas=$result->rowCount();
		$totalPaginas=ceil($totalfilas/$total);
?>