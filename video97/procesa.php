<?php 
//video97     
//

require_once("../public/class/conect.php");
$user=$_POST["user"];
$pass=$_POST["pass"];
$perfil=$_POST["tipouser"];
$sql="Insert into PerfilUsuario (user,pass,perfil) values (:user,:pass,:perfil)";
$result=$conexion->prepare($sql);
$result->execute(array(":user"=>$user,":pass"=>$pass,":perfil"=>$perfil));
echo "Datos Ingresados Correctamente";
header("location:index.php");
$result->closeCursor();

 ?>