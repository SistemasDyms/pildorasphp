<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Datos del producto</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
<?php 
require_once("config.php");
$codart=$_GET["buscar"];
$con=mysqli_connect($db_host,$db_user,$db_password);
if(mysqli_connect_errno()){
	echo "Error al conectar con la BD";
	exit();
}
mysqli_select_db($con,$db_name) or die("Problemas al seleccionar la BD");
mysqli_set_charset($con,"utf8");
$consult="select * from productos where codart='$codart'";
$result=mysqli_query($con,$consult) or die (mysqli_error($con));
if(($file=mysqli_fetch_row($result))==TRUE){
		
?>
<div class="container">
	<div class="row">
	<h1>Datos del producto </h1>
	<br>
		<form action="" class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 coltrol-label"   class="col-sm-2 coltrol-label"  for="codart">Codigo de Articulo</label>
			<div class="col-sm-10">
				<input type="text" id="codart" value="<?php echo $file[0]; ?>" readonly name="codart"  class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 coltrol-label"  class="col-sm-2 coltrol-label"  for="seccion">Seccion</label>
			<div class="col-sm-10">
				<input type="text" id="seccion" value="<?php echo $file[1]; ?>" name="seccion" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 coltrol-label" for="nombre">Nonbre</label>
			<div class="col-sm-10">
				<input type="text" id="nombre" value="<?php echo $file[2]; ?>" name="nombre" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 coltrol-label" for="precio">Precio</label>
			<div class="col-sm-10">
				<input type="number" id="precio" value="<?php echo $file[3]; ?>" name="precio" class="form-control">
			</div>			
		</div>
		<div class="form-group">
			<label class="col-sm-2 coltrol-label" for="fecha">Fecha</label>
			<div class="col-sm-10">
				<input type="date" id="fecha" value="<?php echo $file[4]; ?>" name="fecha" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 coltrol-label" for="importado">Importado</label>
			<div class="col-sm-10">
				<input type="text" id="importado" value="<?php echo $file[5]; ?>" name="importado" class="form-control">
			</div>			
		</div>
		<div class="form-group">
			<label class="col-sm-2 coltrol-label" for="origenpais">Pais de Origen</label>
			<div class="col-sm-10">
				<input type="text" id="origenpais" value="<?php echo $file[6]; ?>" name="pais" class="form-control">
			</div>	
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" Value="actualizar" class="btn btn-info">
			</div>
		</div>
	</form>
	</div>
</div>
<?php
}else{
	echo "No se a encontrado ningun Registro";
}

?>
</body>
</html>