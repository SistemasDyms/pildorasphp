<?php
//video68
require_once("../public/class/const.php");

try {
  $contador=0;
  $conexion = new PDO("mysql:host=localhost;dbname=pildorasphp",DB_USER,DB_PASS);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->exec("SET CHARACTER SET UTF8");
  $sql="select * from user where user = :user";
  $consult=$conexion->prepare($sql);
  $user=htmlentities(addslashes($_POST["user"]));
  $pass=htmlentities(addslashes($_POST["pass"]));
  $consult->bindvalue(":nombre",$user);
  $consult->bindValue(":contra",$pass);

  $consult->execute(array(":user"=>$user));
  while($result=$consult->fetch(PDO::FETCH_ASSOC)){
    //echo "bienvenido ".$result["user"]." tu contraseña sin encriptar es ".$result["pass"];
    if(password_verify($pass,$result["pass"])){
      $contador++;
    }
  }
if($contador>0){
  echo "el usuario si existe";
}else{
  echo "el usuario NO existe";
}
$consult->closeCursor();

} catch (Exception $e) {
  echo "Error al conectarse a la BD ".$e->getMessage();
  die();
}

 ?>
