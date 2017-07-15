<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>video 94 creacion de un BLOG parte2 POO</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<style type="text/css">
		.createArt{
			position: fixed;
			
		}
		.viewArt{
			float: right;
		}
		.viewArt ul{
		list-style: none;
		}
	</style>
</head>
<body>
<div class="container">
		<div class="row ">
			<div class="col-md-2">
			<h1 class="text-center">Video94</h1>
			<h6>Blog</h6>
			</div>
			<div class="col-md-10">
				<h2>Creacion de un Blog parte 2 POO</h2>
			</div>
		</div>
		<div class="row">
			<?php 
				include("vista/form.php")
			?>
		</div>
		<div class="col-md-6 viewArt">
		
			<h2>Post Creados</h2>
	<?php 
		$conexion = mysqli_connect("localhost","sistema","1990_dairon","Blogpildoras");
			if(!$conexion){
				echo "la conexion ha fallado ".mysqli_errn();
				exit();
			}
		$consulta="select * from contenido order by fecha desc";
	if($result=mysqli_query($conexion,$consulta)){
		while($reg=mysqli_fetch_assoc($result)){
	?>
	<ul>
		<li><h3><?php echo $reg["titulo"]; ?></h3></li>
		<li><p><?php echo $reg["comentario"]; ?></p></li>
		<li>
		<?php 
			if($reg["imagen"]!=""){
				
		?>	
			<img width="300px" height="200px" src="imgupload/<?php echo $reg["imagen"]; ?>">

			
		<?php
		}else{
			echo "No hay imagen para mostrar";
		}	
		?>
		
		</li>
		<li><small><?php echo $reg["fecha"]; ?></small></li>
		<br>
		<hr>
		<hr><hr>

	</ul>

	<?php

		}

	 }else{
	 	echo "No Existen Articulos Publicados";
	 }
	 ?>
		
		</div>
		</div>
	</div>
</body>
</html>