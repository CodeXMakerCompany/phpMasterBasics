<a href="ejercicio2.php?email=soy@unemail.com">Mandar email</a>
<hr>

<?php 

	/*
	validar un email con una funcion
	pasar el parametro get a la funcion
	imprimir la validacion
	 */
	require_once "funciones/functions.php";
	
	if (isset($_GET['email'])) {
		
		echo validarEmail($_GET['email']);

	}else{
		echo "Ingresa un email como variable get"."<br>";
	}

	
 ?>