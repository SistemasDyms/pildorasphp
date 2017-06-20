<?php
if(!$_COOKIE["idioma_seleccionado"]){
  header("location:index.php");
}else if($_COOKIE["idioma_seleccionado"]=="es"){
  header("location:español.html");
}else if($_COOKIE["idioma_seleccionado"]=="en"){
  header("location:ingles.html");
}

?>
