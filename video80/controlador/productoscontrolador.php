<?php 
//video 80
require_once("modelo/consulta.php");
$productos= new ProductosModelo();
$matrizproductos=$productos->GetProductos();
require_once("vista/productosview.php");

?>