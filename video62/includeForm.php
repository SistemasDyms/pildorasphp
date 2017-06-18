<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group">
      <label for="user">Usuario</label>
      <input type="text" name="user" class="form-control" id="user">
    </div>
    <div class="form-group">
      <label for="pass">Contraseña</label>
      <input type="password" name="pass" class="form-control" id="pass">
    </div>
    <input type="submit" name="enviar" value="inicia sesion">
  </form>
</body>
</html>
