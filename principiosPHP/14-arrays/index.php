<?php 
	/*
	Arrays
	Un array es un conjunto de datos/valores bajo un unico nombre.
	Para acceder a esos valores podemos usar un indice numero o alfanumerico.
	*/

	$pelicula ="Batman";
	$peliculas = array('Batman','Spiderman','Thor');
	$cantantes = ['SakiFujita', "Drake", "SamPadrul"];

	echo "<h1>Array asociativo</h1>";
	#array asociativo
	$personas = array(	
		'nombre' => 'Samuel',
		'apellidos' => 'Vazquez Ruiz',
		'web' => 'codexmaker.com'	
	);

	echo $personas['apellidos'];


	//for: recorrer array
	echo "<h1>Listado de peliculas</h1>";
	echo "<ul>";
	for ($i=0; $i < count($peliculas); $i++) { 
		
		echo "<li>".$peliculas[$i]."</li>";
	}
	echo "</ul>";

	//foreach: recorrer arrays + *preferido*
	echo "<br>";
	echo "<h1>Listado de cantantes con for each</h1>";
	echo "<ul>";
	#recorre todo el array y por cada valor genera una variable independiente
	foreach ($cantantes as $cantante) {
		echo "<li>".$cantante."</li>";
	}
	echo "</ul>";
	echo "<br>";

	//arrays  multidimensionales
	echo "<h1>Listado de array multidimensional</h1>";
	$contactos = array(	
		array(
			'nombre' => 'Samuel',
			'email' => 'codexmaker12@gmail.com',
			'web' => 'codexmaker.com'
		),
		array(
			'nombre' => 'miku',
			'email' => 'miku12@gmail.com',
			'web' => 'miku.com'
		),
		array(
			'nombre' => 'ayanami',
			'email' => 'ayanami@gmail.com',
			'web' => 'ayanami.com'
		),	
	);
	echo "<ul>";
	foreach ($contactos as $key => $contacto) {
		echo "<li>".$contacto['nombre']."</li>";
	}
	echo "</ul>";

 ?>