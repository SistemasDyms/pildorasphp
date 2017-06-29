<?php 
//video 80
require_once("modelo/consulta.php");
$personas= new PersonasModelo();
$matrizpersonas=$personas->GetPersonas();
require_once("vista/personassview.php");

?>