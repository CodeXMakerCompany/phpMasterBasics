<?php 
	
	/*
	for(expresion inicial, condición, incremento o decremento del contador){
		//Bloque de instrucciones
	}
	*/

	$resultado = 0;

	for ($i=0; $i <= 100 ; $i++) { 
		
		$resultado += $i;


	}

	echo '<h1> El resultado es: '.$resultado.'</h1><br>';

	#tabla de multiplicar

	if (isset($_GET['numero'])) {
		//Cambiar tipo de dato
		$numero = (int)$_GET['numero'];
	}else{
		$numero =1;
	}

	echo "<h1>Tabla de multiplicar del numero: $numero</h1>";

	

	for($contador = 1; $contador <= 10; $contador++) {

		#adentro del bucle comprueba y ejecuta la detencion de la funcion
		if ($numero == 27) {
			echo "No se puede mostrar este numero";
			break;
		}
		echo "$numero x $contador =".($numero*$contador)."<br>";
	}

 ?>