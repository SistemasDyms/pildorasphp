<?php
//video79 conexion

require_once("const.php");

class ConectarBD{
	protected $conexion;

	public static function  conectar(){
		try {
			$this->conexion-> new PDO("mysql:host=localhost,dbname=pildorasphp",DB_USER,DB_PASS);
			$this->conexion->setAttribtes(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);
			$this->conexion->exec(DB_CHARSET);
		} catch (Exception $e) {
			echo "Error al conectar a la BD ".$e->getLine();
		}
		return $this->conexion;

	}


}



?>