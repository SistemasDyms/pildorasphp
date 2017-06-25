<!DOCTYPE html>
<html lang="es">
  <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Video 73 CRUD parte cuatro</title>
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
				<table class="table table-bordered table-hover text-center">
					<tr class="success">
						<td id="insert">Insertar Usuario</td>				
						<td>Consultar Usuario</td>
					</tr>
					<tr >
						<td class="col-md-6"><?php include("form-insert.php"); ?></td>
						<td class="col-md-6"><?php include("form-consult.php"); ?></td>
					</tr>
				</table>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="../public/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../public/js/custom.js"></script>
  </body>
</html>
