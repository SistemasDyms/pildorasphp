<?php 
// actualizar video 72
// 

require_once("../public/class/conect.php");
$id=$_GET["updateID"];

?>
<!DOCTYPE html>
<html lang="es">
  <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>actualizar usuarios</title>
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
				
				<br>-
				<br>
				<br>
				<br>
				<?php 
				$result=$conexion->query("select * from usuarios where id = $id")->fetchAll(PDO::FETCH_OBJ);
				foreach ($result as $key):
				?>
				<form class="form-horizontal"  method="GET" action="procesa-update.php">
				<div class="form-group">
					<label for="iduser">ID de usuario </label>
					<input type="text"  class="form-control"  value="<?php echo $key->id;?>" name="iduser" id="iduser">
				</div>
				<div class="form-group">
					<label for="nombre">Nombre </label>
					<input type="text"  class="form-control" value="<?php echo $key->nombre;?>" name="nombre" id="nombre">
				</div>
				<div class="form-group">
					<label for="apellido">Apellido </label>
					<input type="text" class="form-control" value="<?php echo $key->apellido;?>" name="apellido" id="apellido">
				</div>
				<div class="form-group">
					<label for="Dir"> Direccion</label>
					<input type="text" class="form-control" value="<?php echo $key->direccion;?>" name="dir" id="Dir">
				</div>
				<input type="submit" name="Enviar" class="btn btn-info" Value="Actualizar">
			</form>
			<?php 
				endforeach;
			?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../public/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../public/js/custom.js"></script>
  </body>
</html>
