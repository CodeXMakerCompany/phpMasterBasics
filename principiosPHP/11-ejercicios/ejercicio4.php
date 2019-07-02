<?php 

/*
Ex4. RECOGER 2 NUMEROS POR LA URL POR PARAMETRO GET Y HACER UNA CALCULADORA CON LAS OPERACIONES BASICAS	
*/
if (isset($_GET['numeroA']) && isset($_GET['numeroB'])) {
	$numeroA = $_GET['numeroA'];
	$numeroB = $_GET['numeroB'];

	$numeroA = (int)$_GET['numeroA'];
	$numeroB = (int)$_GET['numeroB'];

	echo 'La varible A es : '.$numeroA.'<br>';

	echo 'La varible B es : '.$numeroB.'<br>';

	echo "Suma: ".($numeroA+$numeroB).'<br>';
	echo "Resta: ".($numeroA-$numeroB).'<br>';
	echo "Multiplicacion: ".($numeroA*$numeroB).'<br>';
	echo "División: ".($numeroA/$numeroB).'<br>';

}else{

	echo "Introduce correcatamente los valores";
}




 ?>