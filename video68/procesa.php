<?php
//video68
require_once("../public/class/const.php");

try {
  $conexion = new PDO("mysql:host=localhost;dbname=pildorasphp",DB_USER,DB_PASS);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->exec("SET CHARACTER SET UTF8");
  $sql="insert into user (user,pass) values(:user,:pass)";
  $consult=$conexion->prepare($sql);
  $user=htmlentities(addslashes($_POST["user"]));
  $pass=htmlentities(addslashes($_POST["pass"]));
  $consult->bindvalue(":nombre",$user);
  $consult->bindValue(":contra",$pass);
  $pass_cifrado=password_hash($pass,PASSWORD_DEFAULT);
  $conteo=$consult->execute(array(":user"=>$user,":pass"=>$pass_cifrado));
  echo "registro insertado correctamente";

$consult->closeCursor();

} catch (Exception $e) {
  echo "Error al conectarse a la BD ".$e->getMessage();
  die();
}

 ?>
