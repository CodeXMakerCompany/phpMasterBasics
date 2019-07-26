<?php 
	
	if (isset($_POST)) {
		
		# //Conexion a la bd
		require_once 'modelos/conexion.php';

		$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

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

		if (count($errores) === 0) {
			$sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
			$guardar_cat = mysqli_query($db, $sql);
		}

	}

	header('Location: index.php');