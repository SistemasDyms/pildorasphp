<?php
if(isset($_COOKIE["idioma_seleccionado"])){
	if($_COOKIE["idioma_seleccionado"]=="es"){
	  header("location:español.html");
}if($_COOKIE["idioma_seleccionado"]=="en"){
  header("location:ingles.html");
}
}
?>
<!DOCTYPE html>-
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 65</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<h1>cookies en php parte3</h1>
					elige el idioma de tu preferencia
					<p><a href="creacookie.php?idioma=es">Espalol</a></p>
					<p><a href="creacookie.php?idioma=en">Ingles</a></p>
					<br>
					<br>
					<br>
					<br>
					<p><a href="eliminarcookies.php?idioma=en">Eliminar Cookie</a></p>
			</div>
		</div>
	</div>
</body>
</html>
