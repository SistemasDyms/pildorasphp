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

					if(isset($_POST["insertar"])){
						$nom=$_POST["nombre"];
						$ape=$_POST["apellido"];
						$dir=$_POST["dir"];

						$sql=("insert into usuarios (nombre,apellido,direccion ) values(:nombre ,:apellido,:direccion)");
						$result=$conexion->prepare($sql);
						$result->execute(array(":nombre"=>$nom,"apellido"=>$ape,"direccion"=>$dir));
						$resp=$result->rowCount();
						if($resp==1){
							header("location:consultar.php");
						}else{
							echo "NO se realizo el insert";
						}
					}

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
					<?php foreach ($result as $valor):?>
				<tr>
						<td><?php echo $valor->id;?></td>
						<td><?php echo $valor->nombre;?></td>
						<td><?php echo $valor->apellido;?></td>
						<td><?php echo $valor->direccion;?></td>
						<td ><a href="delete.php?deleteID=<?php echo $valor->id;?>"><i class="icon-x"></i></a></td>
						<td ><a href="update.php?updateID=<?php echo $valor->id;?>"><i class="icon-wrench"></i></a></td>
				</tr>
				<?php			
					endforeach;
				?>	
				<form class="form-horizontal"  method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
				<tr>
						<td>
							
						</td>
						<td>
							<div class="form-group">
								<label for="nombre"></label>
								<input type="text"  class="form-control" autofocus name="nombre" id="nombre">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="apellido"> </label>
								<input type="text" class="form-control"  name="apellido" id="apellido">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="Dir"> </label>
								<input type="text" class="form-control" name="dir" id="Dir">
							</div>
						</td>
						<td>
						<div class="form-group">
								<label for="Dir"> </label>
								<input type="submit" class="form-control btn btn-success" name="insertar" id="enviar" value="Registrar" >
							</div>
						</td>
				</tr>
				</form>
				</table>

			</div>
		</div>
	</div>
  </body>
</html>
