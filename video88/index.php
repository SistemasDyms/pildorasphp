<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>video 87 Campos Blob parte2</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-2">
			<h1 class="text-center">Video88</h1>
			<h6>Enviar Emails</h6>
			</div>
			<div class="col-md-10">
				<h2>enviar correos electronicos</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
		<br>
		<br>
		<br>
		<br>
		<form action="procesa.php" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" class="form-control">	
			</div>
			<div class="form-group">
				<label for="ape">Apellido</label>
				<input type="text" name="ape" id="ape" class="form-control">	
			</div>
			<div class="form-group">
				<label for="dir">Direccion</label>
				<input type="text" name="dir" id="dir" class="form-control">	
			</div>
			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" id="correo" class="form-control">	
			</div>
			<div class="form-group">
				<label for="asunto">Asunto</label>
				<input type="text" name="asunto" id="asunto" class="form-control">	
			</div>
			<div class="form-group">
				<label for="coment">Comentario</label>
				<textarea rows="10" cols="30" id="coment" name="coment"></textarea>	
			</div>
			<input type="submit" name="enviar" class="btn btn-success btn-lg" Value="Subir" >

		</form>

		</div>
		</div>
	</div>
</body>
</html>