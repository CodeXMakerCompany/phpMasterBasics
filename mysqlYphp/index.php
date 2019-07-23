<?php 
	
	//Conectar a la BD
	
	$conexion = mysqli_connect("localhost", "root", "", "redsocial");

	//Comprobar si la conexion es correcta
	
	if (mysqli_connect_errno()) {
		echo "La conexion a la BD ha fallado : ".mysql_connect_error();
	}else{
		echo "conexion exitosa"."<br>";
	}

	// Consulta para configurar la codificacion de caracteres
	mysqli_query($conexion, "SET NAMES 'utf8'");

	// Consulta SELECT desde PHP
	$query = mysqli_query($conexion, "SELECT * FROM profile");
	// Traer todos los datos
	$profile = mysqli_fetch_all($query);

	var_dump(count($profile));

	//Insertar en la base de datos desde PHP
	/*$sql = "INSERT INTO profile VALUES(NULL, 'diana', 'ruiz', 'codexmaker12@gmail.com', '12345', 'codexmaker', 'foto/');";
	$insert = mysqli_query($conexion, $sql);

	if ($insert) {
		echo "Datos insertados corectamente";
	}else{

		echo "Error: ".mysql_error($conexion);
	}*/

 ?>