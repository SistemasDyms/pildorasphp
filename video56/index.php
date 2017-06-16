<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 56</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row">
		<h1>insert y delete de productos usando PDO </h1>
		<div class="col-md-6">
			<h2>Insertar productos</h2>
			<form action="class.php" method="POST" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 coltrol-label"  class="col-sm-2 coltrol-label"  for="codart">Codigo</label>
				<div class="col-sm-10">
					<input type="text" id="codart" name="codart" value="AR" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 coltrol-label"  class="col-sm-2 coltrol-label"  for="seccion">Seccion</label>
				<div class="col-sm-10">
					<input type="text" id="seccion" name="seccion" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 coltrol-label" for="nombre">Nombre</label>
				<div class="col-sm-10">
					<input type="text" id="nombre" name="nombre" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 coltrol-label" for="precio">Precio</label>
				<div class="col-sm-10">
					<input type="number" id="precio" name="precio" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 coltrol-label" for="fecha">Fecha</label>
				<div class="col-sm-10">
					<input type="date" id="fecha" name="fecha" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 coltrol-label" for="importado">Importado</label>
				<div class="col-sm-10">
					<input type="text" id="importado" name="importado" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 coltrol-label" for="origenpais">Pais de Origen</label>
				<div class="col-sm-10">
					<input type="text" id="origenpais" name="pais" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-info">
				</div>
			</div>
		</form>
		</div>
		<div class="col-md-6">
			<h2>Eliminar productos</h2>
			<form class="" action="delete.php" method="get">
				<div class="form-group">
					<label class="col-sm-2 coltrol-label"  class="col-sm-2 coltrol-label"  for="codart">Codigo</label>
					<div class="col-sm-10">
						<input type="text" id="codart" name="codart" value="AR" class="form-control">
					</div>
				</div>
				<input type="submit" name="enviar" value="Eliminar!" class="btn btn-info">
			</form>
		</div>


	</div>
</div>


</body>
</html>
