<?php  
	require_once '../vendor/autoload.php';

	//Conexion a bd
	$conexion = new mysqli("localhost", "root", "", "blog");
			$conexion->query("SET NAMES 'utf-8'");

	//Consultar	para contar elementos totales	
	$consulta = $conexion->query("SELECT * FROM usuarios");
	$numero_elementos = $consulta->num_rows;
	$numero_elementos_pagina = 2;

	//Hacer paginacion
	$pagination = new Zebra_Pagination();

	//Numero de elementos a paginar
	$pagination->records($numero_elementos);

	//Numero de elementos por página
	$pagination->records_per_page($numero_elementos_pagina);

	$page = $pagination->get_page();

	$empieza_aqui = (($page - 1)*$numero_elementos_pagina);
	$sql ="SELECT * FROM usuarios LIMIT $empieza_aqui, $numero_elementos_pagina";
	$usuarios = $conexion->query($sql);

	echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

	while ($usuario = $usuarios->fetch_object()) {
		echo "<h1>{$usuario->nombre}</h1>";
		echo "<h2>{$usuario->email}</h2><hr>";
	}

	$pagination->render();