<?php
require_once("../public/class/conect.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Consulta de Usuario</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css"><!-- LINK de los iconos -->
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
			<h1 class="text-center">CRUD</h1>
			<h6>Create Read Update Delete</h6>
			</div>
			<div class="col-md-10">
				<h2>Sistema de Gestion de Personal</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<br>
				<br>
				<br>
				<br>
				<?php
					$result=$conexion->query("select * from usuarios")->fetchAll(PDO::FETCH_OBJ);
				?>
				<table class="table table-bordered table-hover text-center">
					<tr class="success">
						<td>ID</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Direccion</td>
						<td>Eliminar</td>
						<td>Editar</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Direccion</td>
						<td class="icon-x"></td>
						<td class="icon-wrench"></td>
					</tr>
				</table>

			</div>
		</div>
	</div>
  </body>
</html>
