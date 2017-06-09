<?php
//video 52
require_once("../public/class/config.php");
try{
	$conexion = new PDO("mysql:host=localhost;db_name=phpintermedio".$db_user,$db_password);
	echo "se conecto al conectadero";
}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}finally{
	$conexion=NULL;
}

	

?>