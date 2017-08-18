<?php 
/*
Archivo que recibe los datos del inicio se sesion
 */

$user=$_POST['user'];
$pass=$_POST['pass'];
#asi sabe si estan definidas si fueron enviadas
if(isset($user) and isset($pass)){
	#asi sabre si fueron enviadas pero estan vacias 
	if(empty($user) or empty($pass) ){
		header('location:index.php?error=1');	
	}else{
		#asi sabre si fueron enviadas y contiene info pero si coinciden con lo que tengo
		if ($user=='dairon' and $pass=='123') {
			session_start();
			if ($_POST['sesion']==1) {
				ini_set('session.cookie_lifetime',time()+(60*60));
			}
			$_SESSION["UsuarioON"]=$user;

			header('location: Cpanel.php');
		}else{
			header('location:index.php?error=2');
		}
	}	
}else{
header('location:index.php?error=3');
}


 
?>