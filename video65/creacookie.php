<?php
setcookie("idioma_seleccionado",$_GET["idioma"],time()+250000);
header("location:ver_cookie.php");
?>
