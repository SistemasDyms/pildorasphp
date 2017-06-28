<?php
// video 79
// 


Class ProductosModelo{
	private $db;
	private $productos;

	public function __construct(){
		require_once("conexion.php");
		$this->db=conexion->conectar();
		$this->productos= array();

	}
	public function GetProductos(){
		$consulta=$this->db->query("select * from productos");

		while ($file=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->productos[]=$file;
		}
		return $this->productos;
	}



}


  ?>