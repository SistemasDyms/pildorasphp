<?php
require_once("../public/class/conexionPDO.php");
//video58
$valor=$_GET["buscar"];
Class Crud extends ConectionPDO{

  public function Crud(){
    parent::__construct();
  }
  public function get_productos($valor){
    $sql="select * from productos where NOMBREARTICULO='".$valor."'";
    $consult=$this->conexion->prepare($sql);
    $consult->execute(array());
    $resultado=$consult->fetchAll(PDO::FETCH_ASSOC);
    $consult->CloseCursor();
    return $resultado;
    $this->conexion=NULL;

  }

}



?>
