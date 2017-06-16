<?php
//conexion bd video 57
require_once("../public/class/conexionpoo.php");
class Crud extends ConectMysqli{

	public function Crud(){
		parent::ConectMysqli();
	}
	public function get_productos(){
		$result=$this->conexion->query("Select * from productos");
		$resultado=$result->fetch_all(MYSQLI_ASSOC);
		return $resultado;
	}
}

?>
