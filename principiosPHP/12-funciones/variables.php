<?php 

/*
	Variables locales:Se definen dentro de una funcion y no pueden ser usadas fuera de la funcion, solo disponibles dentro. A no ser que haga un return.
	*
	Variables globales: son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones.
*/
	//Variable global
	$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

	function holaMundo(){
		#decirle que la varieble es global o no se imbuira
		global $frase;
		echo "<h1>$frase</h1><br>";

		$year = 2019;

		echo "<h1>$year</h1>";

		echo "<hr>";
		return $year;

	}

	holaMundo();

	//Funciones variables

	function buenosDias(){
		echo "<h3>Hola, buenos dias</h3>";
	}
	function buenasTrades(){
		echo "<h3>Bienvenido de vuelta</h3>";
	}	
	function buenasNoches(){
		echo "<h3>Es hora de salir</h3>";
	}

	$horario = "Noches";

	$miFuncion = "buenas".$horario;

	echo $miFuncion();

 ?>