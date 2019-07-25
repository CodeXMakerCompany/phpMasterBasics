<?php 

	//Conexion
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'blog';
	$db = mysqli_connect($server, $username, $password, $database);

	mysqli_query($db, "SET NAMES 'utf8'");

	// INICIAR LA SESION
	
	session_start();

 ?>