<?php 
	
	if (isset($_POST)) {

		//Conexion a la bd
		require_once 'modelos/conexion.php';

		//Recoger
		//real_scape_string = "añade datos que escapen como comillas"
		//trim = "elimina los espacios"
		$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
		$apellidos  = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
		$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;


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

		$guardar_usuario = false;

		if (count($errores) === 0) {

			$usuario = $_SESSION['usuario'];
			$guardar_usuario = true;

			//Comprobar si el email ya existe
			$sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
			$isset_email = mysqli_query($db, $sql);
			$isset_user = mysqli_fetch_assoc($isset_email);

	if ($isset_user['id'] == $usuario['id'] || empty($isset_user)) {

			//Actualizar el usuario
			$sql = "UPDATE usuarios SET ".
					"nombre = '$nombre', ".
					"apellidos = '$apellidos', ".
					"email = '$email' ".
					"WHERE id = ".$usuario['id'];

			$guardar = mysqli_query($db, $sql);
			
			if ($guardar) {

				$_SESSION['usuario']['nombre'] = $nombre;
				$_SESSION['usuario']['apellidos'] = $apellidos;
				$_SESSION['usuario']['email'] = $email;

				$_SESSION['completado'] = "El perfil se ha actualizado con éxito.";
			}else{

				$_SESSION['errores']['general'] = "Fallo al actualizar tus datos!";
			}
		}else{

			$_SESSION['errores']['general'] = "El usuario ya existe";
			
		}
		
		}else{

			$_SESSION['errores'] = $errores;

		}


	}

	header('Location: perfil.php');