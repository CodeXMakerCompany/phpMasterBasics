<?php 
	
	/*
	
	Crear una sesion que aumente su valor en uno disminuya en 1 en funcion de si el parametro get counter esta a uno o cero.

	 */
	
	session_start();

	if (!isset($_SESSION['numeroSesion'])) {
 		$_SESSION['numeroSesion'] = 0;
 	}

 	if (isset($_GET['counter']) && $_GET['counter'] == 1) {
 		$_SESSION['numeroSesion']++;
 	}

 	if (isset($_GET['counter']) && $_GET['counter'] == 0) {
 		$_SESSION['numeroSesion']--;
 	}

 ?>

 <h1>El valor de la sesion numero es: <?= $_SESSION['numeroSesion'] ?></h1>

 <a href="ejercicio1.php?counter=1">Aumenta</a>

 <a href="ejercicio1.php?counter=0">Disminuye</a>
	<hr>
 <?php 

 	

 	
  ?>