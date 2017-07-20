<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>video 96 creacion de un BLOG parte4 POO</title>
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
			<h1 class="text-center">Video96</h1>
			<h6>Blog</h6>
			</div>
			<div class="col-md-10">
				<h2>Creacion de un Blog parte 4 POO</h2>
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
				include("vista/mostrarBlog.php")
			?>
		
		</div>
		</div>
	</div>
</body>
</html>