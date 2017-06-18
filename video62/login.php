<?php
require_once("../public/class/conexionPDO.php");
//video62
try {
	$conexion = new PDO("mysql:host=localhost;dbname=pildorasphp",DB_USER,DB_PASS);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET UTF8");
	$sql="select * from user where user = :nombre and pass = :contra";
	$consult=$conexion->prepare($sql);
	$user=htmlentities(addslashes($_POST["user"]));
	$pass=htmlentities(addslashes($_POST["pass"]));
	$consult->bindvalue(":nombre",$user);
	$consult->bindValue(":contra",$pass);
	$consult->execute();
	$logON=$consult->rowCount();
	if($logON==1){
		session_start();
		$_SESSION["usuario"]=$_POST["user"];
		header("location:panel.php");
	}else{
		header("location:index.php");
	}

} catch (Exception $e) {
	echo "Errro al conectarse con la BD".$e->getMessage();
}

?>
