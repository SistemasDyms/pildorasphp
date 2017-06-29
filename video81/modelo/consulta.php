<?php
// video 81
// 


Class PersonasModelo{
	private $db;
	private $presonas;

	public function __construct(){
		require_once("modelo/conexion.php");
		$this->db=ConectarBD::conectar();
		$this->presonas= array();

	}
	public function GetPersonas(){
		$consulta=$this->db->query("select * from usuarios");
		$consulta2=$this->db->query("select * from usuarios limit ");

		while ($file=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->presonas[]=$file;
		}
		return $this->presonas;
	}



}


  ?>