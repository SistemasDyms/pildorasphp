<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>video 80 Modelo vista controlador parte 3</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
</head>
<body>
	<p>Explicando todo lo referente con el modelo vista controlador</p>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
			<h1 class="text-center">MVC</h1>
			<h6>Modelo Vista Controlador</h6>
			</div>
			<div class="col-md-10">
				<h2>Modelo Vista Controlador</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<br>
				<br>
				<br>
				<br>
				<table class="table table-bordered table-hover text-center">
					<tr class="success">
						<td>Codigo</td>
						<td>seccion</td>
						<td>Nombre</td>
						<td>Precio</td>
						<td>Fecha</td>
						<td>Importado</td>
						<td>Pais</td>
					</tr>
					<?php foreach ($matrizproductos as $key):?>
				<tr>
						<td><?php echo $key["CODART"];?></td>
						<td><?php echo $key["SECCION"];?></td>
						<td><?php echo $key["NOMBREARTICULO"];?></td>
						<td><?php echo $key["PRECIO"];?></td>
						<td><?php echo $key["FECHA"];?></td>
						<td><?php echo $key["IMPORTADO"];?></td>
						<td><?php echo $key["PAISDEORIGEN"];?></td>
					</tr>
				<?php			
					endforeach;

					?>	
				</table>

			</div>
		</div>
	</div>
</body>
</html>