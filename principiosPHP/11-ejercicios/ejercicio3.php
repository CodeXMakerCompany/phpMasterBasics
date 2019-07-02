<?php 
/*
	Imprimir por pantalla los cuadrados de los 40 primeros numeros naturales o sea del 1 al 40
	PD.Con  bucle While
*/

	

	$contador = 1;
	while ($contador <= 40) {
		
		$cuadrado = $contador*$contador;

		echo "<h3>El cuadrado de : ".$contador." es ".$cuadrado."</h3><br>";

		$contador++;

	}


 ?>