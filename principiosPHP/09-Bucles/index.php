<h1>Bucles</h1>

<?php 

/*Bucle while
Estructura de control que repite la ejecucion de una seria de
instrucciones tantas veces sea necesario, dependiente de una condicion.

while(condicion){
	bloque de instrucciones
	otra instruccion
}

*/	echo "<h2>Ejemplo_1</h2>";
	$numero = 0;

	while ($numero <=100) {

		echo $numero;

		if ($numero != 100) {
			
			echo ", ";
		}

		$numero++;

	}
	echo "<hr>";

	echo "<h2>Ejemplo_2</h2>";
	if (isset($_GET['numero'])) {
		#casteo de datos cambiar tipo de dato
		$numero = (int)$_GET['numero'];
	}else{
		$numero = 1;
	}

	echo "<h3>Tabla de multiplicar del número $numero</h3>";

	$contador = 1;
	while ($contador <= 10) {

		echo "$numero x $contador =".($numero*$contador)."<br>";
		$contador++;
	}

	// DO WHILE

	$edad = 18;
	$contador =1;

	do{
		//Bloque de instrucciones
		echo "Tienes acceso al sistema $contador <br>";
		$contador++;
	}while($edad >= 18 && $contador <= 10);

	
 ?>

