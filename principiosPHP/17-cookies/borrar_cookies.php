<?php 
//caducar la cookie
if ($_COOKIE['micookie']) {
	unset($_COOKIE['micookie']);
	setcookie('micookie','',time()-100);
}

//funcion para modificar las cabeceras
header('Location:ver_cookies.php');
 ?>