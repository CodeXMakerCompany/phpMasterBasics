<?php 


	// Iniciar la sesion y la conexion a bd
	require_once 'modelos/conexion.php';
	
	
	if (isset($_POST)) {

	// Borrar error antiguo
		
		if (isset($_SESSION['error_login'])) {
					
					unset($_SESSION['error_login']);
				}	
				
	// Recoger los datos del formularios	
		$email = trim($_POST['email']);
		$pass = $_POST['password'];

		// Consulta para comprobar las credenciales del usuario
		
		$sql ="SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
		$login = mysqli_query($db, $sql);

		if ($login && mysqli_num_rows($login) == 1) {
			
			$usuario = mysqli_fetch_assoc($login);

			// Comprobar la contraseña
			$verify = password_verify($pass, $usuario['password']);

			if ($verify) {

				// Utilizar una sesion para guardar los datos del usuario logueado
				$_SESSION['usuario'] = $usuario;



			}else{

				//  Si algo falla enviar una sesion con el fallo
				$_SESSION['error_login'] = "Login incorrecto";
			}

		}else{

			//Mensaje de error
			$_SESSION['error_login'] = "Login incorrecto";
		}
		

		
		
	}

	header('Location: index.php');	
	
	
	
	
	
	
	
	  