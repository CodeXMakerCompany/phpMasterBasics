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
		$edad = $_POST['edad'];
		$correo = $_POST['correo'];
		$pass = $_POST['pass'];

		echo $nombre."<br>";
		echo $apellidos."<br>";
		echo $edad."<br>";
		echo $correo."<br>";
		echo $pass."<br>";

	}else{

		
		$error = 'faltan_valores';
		header("Location:index.php?error=$error");
		
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Validacion de formularios PHP</title>
</head>
<body>

</body>
</html>