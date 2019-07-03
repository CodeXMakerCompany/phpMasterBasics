<?php 
/*
	//Funciones predefinidas de php

*/
	
	//Debuggear
	$nombre ="Samuel Vazquez Ruiz";
	var_dump($nombre);
	echo "<hr>";

	//Fechas
	echo date('d-m-Y');
	echo "<br>";
	echo "timestamp:".time();
	echo "<hr>";

	//Matematicas
	echo "Raiz cuadrada de 10: ".sqrt(10);
	echo "<br>";

	echo "Numero aletorio entre 0 y 1000: ".rand(0,1000);
	echo "<br>";

	echo "Numero Pi: ".pi();
	echo "<br>";

	echo "Redondear: ".round(17.58421);
	echo "<br>";
	echo "<hr>";

	//Más funciones generales

	echo gettype($nombre);
	echo "<br>";

	#detecion de tipo de dato
	if (is_string($nombre)) {
		echo "Esta variable es un string";
	}else{
		echo "La variable no es una string";
	}
	echo "<br>";

	#detecion de tipo de dato
	if (is_float($nombre)) {
		echo "Esta variable es un double";
	}else{
		echo "La variable no es un numero con decimales";
	}
	echo "<br>";

	#comprobar existencia
	if (isset($edad)) {
		echo "La variable existe";
	}else{
		echo "La variable no existe";
	}
	echo "<br>";


	$frase = "     mi contenido    ";
	var_dump(trim($frase));
	echo "<br>";

	//Eliminar variablews / indices 
	$year = 2222;
	unset($year);

	//Comprueba si la variable esta vacia
	$texto ="";

	if (empty($texto)) {
		echo "La variable texto esta vacia.";
	}else{
		echo "La variable tiene contenido";
	}
	echo "<br>";

	//Cuantos carateres tiene una cadena/string

	$cadena ="12345";

	echo strlen($cadena);
	echo "<br>";

	//encontrar caracter
	$frase = "la vida es bella";
	echo strpos($frase, "vida");
	echo "<br>";

	//Reemplazar contenido de un string
	$frase = str_replace("vida", "moto", $frase);
	echo "$frase";
	echo "<br>";

	//Mayusculas y minusculas
	echo strtolower($frase);
	echo "<br>";
	echo strtoupper($frase);

 ?>