<?php 

	/*
	ex4. Crear script en php que tenga 4 variables, una de tipo array,
		otra de tipo string, otra int y otra booleana y que imprima un mensaje segun el tipo de variable que sea.
	*/

	$artistas = array('miku','luka','rin','megumin','aiChan');	
	$nombre = "Sam";	
	$numero = 15;
	$estado = true;

	$tipoArtistas = gettype($artistas);
	$tipoNombre = gettype($nombre);
	$tipoNumero = gettype($numero);
	$tipoEstado = gettype($estado);

	if ($tipoArtistas == "array") {
		echo "<br>";
		var_dump($artistas);

	}
	if ($tipoNombre == "string") {
		echo "<br>";
		var_dump($nombre);

	}
	if ($tipoNumero == "integer") {
		echo "<br>";
		var_dump($numero);

	}
	if ($tipoEstado == "boolean") {
		echo "<br>";
		var_dump($estado);

	}

 ?>