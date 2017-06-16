<?php
session_start();
$nombre=$_SESSION["usuario"];
if(!isset($nombre)){
  header("location:index.php");
}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <title>Panel de usuario</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1>Bienvenido al panel de control: <?php echo  $nombre; ?> </h1>
    </div>
    <div class="col-md-6">
      <h1>Cerrar sesion</h1><a href="cerrar.php">aqui</a>
    </div>
  </div>
</div>
</body>
</html>
