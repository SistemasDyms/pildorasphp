<?php 
session_start();
/*
Sistema de sesion falso para practicar 
 */

if(isset($_SESSION["UsuarioON"])){
echo  'Bienvenido ',$_SESSION["UsuarioON"], ' Al panel de control'; 
}elseif(!isset($_SESSION["UsuarioON"])){

header('location:index.php?error=4'); 
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Cpanel</title>
 </head>
 <body>
 <h1></h1>
 <h2><a href="cerrarsesion.php">Cerrar sesion aqui</a></h2>	
 </body>
 </html>