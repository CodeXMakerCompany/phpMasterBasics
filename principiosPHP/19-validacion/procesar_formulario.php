<?php 
	
	$error = 'faltan_valores';
	if (!empty($_POST['nombre']) &&
		!empty($_POST['apellidos']) &&
		!empty($_POST['edad']) &&
		!empty($_POST['correo']) &&
		!empty($_POST['pass'])){

		$error = 'nothing';

		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$edad = (int)$_POST['edad'];
		$correo = $_POST['correo'];
		$pass = $_POST['pass'];

		//validar el nombre
		if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
			$error = 'nombre';
		}
		//validar apellidos
		if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)) {
			$error = 'apellidos';
		}
		//validar edad
		if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
			$error = 'edad';
		}

		//validar EMAIL
		if (!is_string($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$error = 'correo';
		}
		//validar password
		if (empty($pass) || strlen($pass)<5) {
			$error = 'password';
		}

		/*
		debug
		var_dump($error);
		*/
	}else{

		
		$error = 'faltan_valores';
		
		
	}

	if ($error != 'nothing') {
		header("Location:index.php?error=$error");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Validacion de formularios PHP</title>

	<?php if ($error == 'nothing'):?>
	<h1>Datos validados correctamente</h1>
	<p><?= $nombre ?></p>
	<p><?= $apellidos ?></p>
	<p><?= $edad ?></p>
	<p><?= $correo ?></p>
	<p><?= $pass ?></p>

	<?php endif; ?>	
</head>
<body>

</body>
</html>