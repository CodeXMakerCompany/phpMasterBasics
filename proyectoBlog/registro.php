<?php

	if (isset($_POST)) {

		//Conexion a la bd
		require_once 'modelos/conexion.php';

		// Iniciar sesion si no existe
		if (!isset($_SESSION)) {
			session_start();
		}

		//Recoger
		//real_scape_string = "añade datos que escapen como comillas"
		//trim = "elimina los espacios"
		$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
		$apellidos  = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
		$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
		$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;


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

			// CIFRAR LA CONTRASEÑA
			
			$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

			$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";

			$guardar = mysqli_query($db, $sql);
			
			if ($guardar) {
				$_SESSION['completado'] = "El registro se ha completado con exito.";
			}else{

				$_SESSION['errores']['general'] = "Fallo al guardar el usuario!";
			}

			// INSERTAR USUARIO EN LA BD
		
		}else{

			$_SESSION['errores'] = $errores;

		}


	}


	header('Location: index.php');
 