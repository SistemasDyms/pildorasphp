<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>video 92 creacion de un BLOG parte4</title>
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
		<div class="row">
			<div class="col-md-2">
			<h1 class="text-center">Video91</h1>
			<h6>Blog</h6>
			</div>
			<div class="col-md-10">
				<h2>Creacion de un Blog parte 4</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 createArt">
		<h2>Creacion de Noticias</h2>
		<form action="insertar.php" method="POST" enctype="multipart/form-data"->
			<div class="form-group">
				<label for="titulo">Titulo del Articulo</label>
				<input type="text" name="titulo" id="titulo" class="form-control">	
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