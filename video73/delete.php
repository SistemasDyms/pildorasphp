<?php
//borrar registros video73
//
//
require_once("../public/class/conect.php");
$id=$_GET["deleteID"];
$conexion->query("delete  from usuarios where id = $id");
header("location:consultar.php");
?>