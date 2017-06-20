<?php
setcookie("idioma_seleccionado",$_GET["idioma"],time()-1);
header("location:index.php");-
?>
