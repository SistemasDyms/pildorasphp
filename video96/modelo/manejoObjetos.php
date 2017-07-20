<?php
//video96

require_once("objetoBlog.php");
class manejoObjetos{
private $conexion;

public function __construct($con){
	$this->Setconexion($con);
}
public function Setconexion(PDO $conexion){
	$this->conexion=$conexion;
}

public function listarArticulosPorFecha(){

	$matriz= array();
	$contador=0;
	$resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY fecha DESC");
	while ($registros=$resultado->fetch(PDO::FETCH_ASSOC)) {
		$datos= new ObjetoBlog();
		$datos->Set_id($registros["id"]);
		$datos->Set_titulo($registros["titulo"]);
		$datos->Set_fecha($registros["fecha"]);
		$datos->Set_comentario($registros["comentario"]);
		$datos->Set_imagen($registros["imagen"]);
		$matriz[$contador]=$datos;
		$contador++;
	}
	return $matriz;

}//cierra el metodo que Inserta el contenido
public function insertarArticulos(ObjetoBlog $datos){

	$sql="insert into contenido(titulo,fecha,comentario,imagen) 
values ('".$datos->Get_titulo()."','".$datos->Get_fecha()."','".$datos->Get_comentario()."',
'".$datos->Get_imagen()."')";

$this->conexion->exec($sql);
}//cierra el metodo para insertar los articulos
}

?>