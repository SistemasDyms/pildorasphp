<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>video 90 creacion de un BLOG parte2</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-2">
			<h1 class="text-center">Video90</h1>
			<h6>Blog</h6>
			</div>
			<div class="col-md-10">
				<h2>Creacion de un Blog parte 2</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
		<br>
		<br>
		<br>
		<br>
		<form action="insertar.php" method="POST" enctype="multipart/form-data"->
			<div class="form-group">
				<label for="titulo">Titulo del Articulo</label>
				<input type="text" name="titulo" id="titulo" class="form-control">	
			</div>
			<div class="form-group">
				<label for="fecha">Fecha de publicación</label>
				<input type="date" name="fecha" id="fecha" class="form-control">	
			</div>
			<div class="form-group">
				<label for="articulo">Artículo</label>
				<textarea rows="10" cols="76" id="articulo" name="articulo"></textarea>	
			</div>
			<input type="hidden" name="MAX_IMG" value="2097152">
			<div class="form-group">
				<label for="img">Imagen</label>
				<input type="file" name="img" id="img" class="form-control">	
			</div>
			<input type="submit" name="enviar" class="btn btn-success btn-lg" Value="Enviar Artículo" >

		</form>	
		</div>
		</div>
	</div>
</body>
</html>