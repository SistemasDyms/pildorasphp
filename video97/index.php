<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Perfiles Usuario</title>
</head>
<body>
<h1>Registro de Usuario</h1>
	<form action="procesa.php" method="post">
		user: <input type="text" name="user" id="user"><br>
		pass: <input type="password" name="pass" id="pass"><br>
		seleccione: 
		<select name="tipouser" id="tipouser">
			<option value="admin">Administrador</option>
			<option value="user">Usuario</option>	
		</select><br>
		<input type="submit" name="enviar" value="Ingresar">
	</form>
</body>
</html>