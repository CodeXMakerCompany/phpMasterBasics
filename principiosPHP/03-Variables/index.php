<h1>Variables</h1>

<?php 
	#Variable de tipo texto
	$miPrimeraVariable ="Hola mundo";
	$numero = 50;
	$condicion = true;

	//Reasignacion de valor
	$numero = 81;

	#Concatenacion
	echo '<h2>'.$miPrimeraVariable.'</h2>';

	if ($condicion == true) {

		$numero = 150;
		
		echo "Tu dato booleano es verdadero <br> Se te asigna el numero: ".$numero;
	}else{
		echo "Tu dato booleano es falso <br> Se te asigna el numero: ".$numero;
	}

 ?>

