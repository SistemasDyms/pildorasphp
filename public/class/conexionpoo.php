<?php
//conexion bd video 57
require_once("const.php");
Class ConectMysqli{
  protected  $conexion;

  function ConectMysqli(){
    $this->conexion=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if ($this->conexion->connect_error) {
      die('Error de Conexión (' . $mysqli->connect_errno . ') '
          . $mysqli->connect_error);
            return;
    }
    $this->conexion->set_charset(DB_CHARSET);
    }
}
?>
