<?php 

	session_start();

	if (isset($_POST)) {

		//Recoger
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
		$apellidos  = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
		$email = isset($_POST['email']) ? $_POST['email'] : false;
		$password = isset($_POST['password']) ? $_POST['password'] : false;


		// Array de errores
		$errores = array();	

		//Validar los datos antes de guardarlos en la BD
		
		#validar nombre
		if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {

			$nombre_validate = true;

		}else{

			$nombre_validate = false;
			$errores['nombre'] = "El nombre no es valido";
		}

		#validar apellidos
		if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
			
			$apellidos_validate = true;

		}else{
			
			$apellidos_validate = false;
			$errores['apellidos'] = "Los apellidos no son validos";
		}

		#validar email
		if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
			$email_validate = true;

		}else{
			
			$email_validate = false;
			$errores['email'] = "El email no es valido";
		}

		#validar password
		if (!empty($password)) {

			$pass_validate = true;

		}else{
			
			$pss_validate = false;
			$errores['password'] = "La contraseña no es valida";
		}

		$guardar_usuario = false;


		if (count($errores) === 0) {

		$guardar_usuario = true;

			// INSERTAR USUARIO EN LA BD
		
		}else{

			$_SESSION['errores'] = $errores;
			header('Location: index.php');

		}


	}

 