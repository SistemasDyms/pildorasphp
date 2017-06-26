<?php
require_once("../public/class/conect.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>video 75 Paginacion de datos de usuarios parte 2</title>
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
	$total = 10;
	$pagina= 1;
	$inicio=($pagina-1)*$total;
	$sql="select * from usuarios";
		$result=$conexion->prepare($sql);
		$result->execute(array());

		$totalfilas=$result->rowCount();
		$totalPaginas=ceil($totalfilas/$total);
		echo "el total de resultados en los registros es de ".$totalfilas."<br>";
		echo "mostrando ".$total." registros por pagina <br>";
		echo "mostrando desde la pagina ".$pagina." hasta la ".$totalPaginas;
		$result->closeCursor();
		$sql_limit="select * from usuarios LIMIT $inicio,$total";
		$result=$conexion->prepare($sql_limit);
		$result->execute(array());

		/***************************INSERT*********************************/
		if(isset($_POST["insertar"])){
			$nom=$_POST["nombre"];
			$ape=$_POST["apellido"];-
			$dir=$_POST["dir"];

			$sql=("insert into usuarios (nombre,apellido,direccion ) values(:nombre ,:apellido,:direccion)");
			$insert=$conexion->prepare($sql);
			$insert->execute(array(":nombre"=>$nom,"apellido"=>$ape,"direccion"=>$dir));
			$resp=$insert->rowCount();
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
					<?php while ($valor=$result->fetch(PDO::FETCH_ASSOC)):?>
				<tr>
						<td><?php echo $valor["id"];?></td>
						<td><?php echo $valor["nombre"];?></td>
						<td><?php echo $valor["apellido"];?></td>
						<td><?php echo $valor["direccion"];?></td>
						<td ><a href="delete.php?deleteID=<?php echo $valor->id;?>"><i class="icon-x"></i></a></td>
						<td ><a href="update.php?updateID=<?php echo $valor->id;?>"><i class="icon-wrench"></i></a></td>
				</tr>
				<?php			
					endwhile;
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
