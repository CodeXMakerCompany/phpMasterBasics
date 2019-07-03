<?php 

	/*
	ex2. Escribir programa con PHP que añada valores a un array mientras su longitud sea menor a 120 y luego mostrarlo por pantalla.
	*/


	$numeros = array();
	
	$longitud = count($numeros);

	for ($i=0; $i <120 ; $i++) { 

		array_push($numeros, "elemento-".$i."<br>");

	}

	var_dump($numeros);

?>