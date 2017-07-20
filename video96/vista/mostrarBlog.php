<?php 
// video96 
// 
require_once("../public/class/const.php");
require_once("modelo/manejoObjetos.php");
try {

$conexion = new PDO("mysql:host=localhost;dbname=Blogpildoras",DB_USER,DB_PASS);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $conexion->exec("SET CHARACTER SET UTF8");
$datos= new manejoObjetos($conexion);
$resultado=$datos->listarArticulosPorFecha();

if(empty($resultado)){
	echo "No hay entradas del Blog";
}else{
	
	foreach ($resultado as $valor) {
	?>
	<ul>
		<li><h3><?php echo $valor->Get_titulo(); ?></h3></li>
		<li><p><?php echo $valor->Get_comentario(); ?></p></li>
		<li>
		<?php 
			if($valor->Get_imagen()!=""){		
		?>	
			<img width="300px" height="200px" src="vista/imgupload/<?php echo $valor->Get_imagen(); ?>">			
		<?php
		}else{
			echo "No hay imagen para mostrar";
		}	
		?>
		
		</li>
		<li><small><?php echo $valor->Get_fecha(); ?></small></li>
	</ul>	
	<?php
	echo "<hr><hr><hr>";
	}//fin del Foreach
}//fin del else



}//cierre del TRY
catch (Exception $e) {
	echo "Ha ocurrido un error al conectarse con la BD ".$e->getMessage();
}
 ?>