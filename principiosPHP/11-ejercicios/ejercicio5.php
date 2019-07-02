<?php 
/*
	Ex5. Hacer un programa que muestre todos los numeros entre dos numeros nos lleguen por la URL($_GET)

*/

	if (isset($_GET['value1']) && isset($_GET['value2'])) {
		
		$value1 = $_GET['value1'];
		$value2 = $_GET['value2'];
		echo '<h2>Las variables que vienen por GET son: '.$value1." and ".$value2.'</h2>';

		echo "<h3>Numeros entre el value1 y el value2</h3>";
		if ($value1 < $value2) {
			for ($i=$value1; $i <=$value2 ; $i++) { 
			echo $i.'<br>';
		}
		}else{
			echo "<h2>El numero 1 debe ser menos al numero 2</h2>";
		}
		

	}else{
		echo "<h3>Error de parametros get</h3>";
	}

 ?>