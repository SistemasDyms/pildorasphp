<?php
  if (isset($_COOKIE["boca"])) {
        echo "la cookie anteriormente creada es ".$_COOKIE["boca"];
  }else{
    echo "No se han creado cookies";
  }

 ?>
