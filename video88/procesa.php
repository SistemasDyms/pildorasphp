<?php 
$nom=$_POST["nombre"];
$ape=$_POST["ape"];
$dir=$_POST["dir"];
$correo=$_POST["correo"];
$asunto=$_POST["asunto"];
$coment=$_POST["coment"];
/*$headers="MIME version 1.0\r\n";
$headers.="Content-Type: text/html; charset=iso-8859\r\n ";
$headers.= 'From: Recordatorio <cumples@example.com>' . "\r\n";*/
 $headers = 'MIME-Version: 1.0' . "\r\n"; 
 $headers .= 'From: SistemasDyms <dairon9@gmail.com>' . "\r\n"; 
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
/*******************email***********************************/
$envio=mail($correo,$asunto,$coment,$headers);

if($envio==TRUE){
	echo "Email enviado con exito";

}else{
	echo "Ocurrio un error";
}

?>