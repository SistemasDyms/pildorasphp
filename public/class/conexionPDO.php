<?php
require_once("const.php");
class ConectionPDO{
   protected $conexion;
   public function ConectionPDO(){
     try {
       $this->conexion = new PDO("mysql:host=localhost;dbname=pildorasphp",DB_USER,DB_PASS);
       $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $this->conexion->exec("SET CHARACTER SET UTF8");
       return $this->conexion;
     } catch (Exception $e) {
       echo "Errro al conectarse con la BD".$e->getMessage();
     }
   }
   }




?>
