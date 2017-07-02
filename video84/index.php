<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>video 84 Subir imagenes al servidor parte2</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-2">
			<h1 class="text-center">Video84</h1>
			<h6>Videos</h6>
			</div>
			<div class="col-md-10">
				<h2>Imagenes en el Servidor</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<br>
				<br>
				<br>
				<br>
				<form action="procesa.php" method="POST" enctype="multipart/form-data" >
					<div class="form-group">
						<label for="subir">Subir archivos</label>
						<input type="file" name="ar" id="subir" class="form-control">	
					</div>
					<input type="submit" name="enviar" class="btn btn-success btn-lg" Value="Subir" >

				</form>

		</div>
		</div>
	</div>
</body>
</html>