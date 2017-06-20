<?php
//video62
require_once("../public/class/const.php");
$autenticado=false;
if (isset($_POST["enviar"])) {
try {
	$conexion = new PDO("mysql:host=localhost;dbname=pildorasphp",DB_USER,DB_PASS);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET UTF8");
	$sql="select * from user where user = :nombre and pass = :contra";
	$consult=$conexion->prepare($sql);
	$user=htmlentities(addslashes($_POST["user"]));
	$pass=htmlentities(addslashes($_POST["pass"]));
	$consult->bindvalue(":nombre",$user);
	$consult->bindValue(":contra",$pass);
	$consult->execute();
	$logON=$consult->rowCount();
	if($logON==1){
		$autenticado=true;
		if(isset($_POST["recordar"])){
			setcookie("usuario_login",$_POST["user"],time()+35214);
		}
	}else{
		echo "usuario o contraseña incorrectas";
	}

} catch (Exception $e) {
	echo "Errro al conectarse con la BD".$e->getMessage();
}
}//fin del IF
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Video 67</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<h1>cookies en php parte 5  </h1>
					<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<?php
				if($autenticado==false){
					if(!isset($_COOKIE["usuario_login"])){
						include("includeForm.php");
					}
				}
				?>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-6 center">
				<h2>Contenido del user</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto,
					laboriosam vitae animi minus ipsam sed blanditiis sunt odit esse delectus quae ut
					nisi minima ea, itaque, possimus ex cum!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam nihil cumque maiores ducimus totam. Nulla at perferendis quidem voluptatem dolore, ea, totam laboriosam itaque excepturi facere tempora impedit error illum!</p>
					<p>Consectetur in, reiciendis dicta rem, maxime pariatur perferendis laboriosam voluptatum dolorum perspiciatis tempore laborum nesciunt atque ullam molestiae, culpa ipsa, deleniti dolores minus. Voluptas iste quis eligendi dicta aperiam eius.</p>
					<p>Officiis, reprehenderit, vel. Ratione fugit neque harum non delectus laboriosam doloremque est rem odio labore? Inventore maiores necessitatibus ea quam sit fuga cupiditate ipsa iusto suscipit, aliquid porro veritatis fugiat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt minima reiciendis impedit tenetur? Amet itaque magnam non voluptatum quia quibusdam minus unde, sit perferendis, quasi eum maiores illo, voluptas a!</p>
					<p>Blanditiis amet accusantium labore, quasi voluptate nihil, in rerum id natus illum itaque at quibusdam sunt earum quos minima veniam repudiandae fugit quisquam omnis reiciendis rem alias magni perferendis. Atque.</p>
					<p>Laborum deleniti amet alias ut, delectus veritatis dicta omnis dolore, excepturi vel, nulla nam quas aperiam deserunt nihil possimus rem accusamus eos nisi optio illum, harum aliquid! Suscipit, aperiam, quae!</p>
					<p>Dicta deserunt fuga dolorum temporibus adipisci quo eius maxime sunt numquam iure quasi distinctio magni unde ex rerum, in ea libero optio blanditiis voluptatum non quas illum reprehenderit! Inventore, vitae!</p>
			</div>
		</div>
	</div>
</body>
</html>
