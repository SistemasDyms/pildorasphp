<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>busqueda</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
	<h1>Formulario de Login</h1>
	<form action="resultado.php" method="post">
		<div class="form-group">
			<label for="user">Usuario</label>
			<input type="text" id="user" name="user" class="form-control">
		</div>
		<div class="form-group">
			<label for="pass">Password</label>
			<input type="text" name="pass" class="form-control" id="pass">
		</div>
		
		<input type="submit" value="entrar">
	</form>
</body>
</html>