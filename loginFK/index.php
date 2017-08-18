<?php
/*
Parte 13 Curso PHP & MySQL - Sesiones en PHP
#se usa request que recoge datos enviados mediante el metodo POST o GET o COOKIES
 */

if (isset($_GET["error"])) {
	if ($_GET["error"]==1) {
		echo 'ERROR: Debes Completas los Datos..';
	}elseif ($_GET["error"]==2) {
		echo 'ERROR:Usuario o Contraseña Incorrecto..';
	}elseif ($_GET["error"]==3) {
		echo 'ERROR: Intentas saltarte el Login ';
	}elseif ($_GET["error"]==4) {
		echo 'ERROR: Intentas Acceder al Cpanel sin iniciar sesion ';
	}
	#buena practica eliminar la variable
	unset($_GET["error"]);
}

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Parte 13 Curso PHP y MySQL - Sesiones en PHP</title>
  </head>
  <body >
	<form class="" action="recibe.php" method="POST">
	User: <input type="text" name="user" ><br>
	Pass: <input type="text" name="pass" ><br>
	Guardar: <input type="checkbox" name="sesion" value="1"><br>
	<input type="submit" name="enviar" value="Enviar">
	</form>
  </body>
</html>
