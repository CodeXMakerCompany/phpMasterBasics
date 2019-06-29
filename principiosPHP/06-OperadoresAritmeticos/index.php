<h1>Operadores aritméticos</h1>

<?php 

//Operadores aritméticos

	$numero1 = 55;
	$numero2 = 33;

	echo 'Suma: '.($numero1+$numero2).'<br>';
	echo 'Resta: '.($numero1-$numero2).'<br>';
	echo 'Multiplicación: '.($numero1*$numero2).'<br>';
	echo 'División: '.($numero1/$numero2).'<br>';
	echo 'Resto: '.($numero1%$numero2).'<br>';

echo '<h2>Operadores incremento y decremento</h2>';
//Operadores incremento y decremento

	$year = 2019;

	#incremento $year = $year+1
	$year++;
	echo '<h1>'.$year.'</h1>';

	#decremento $year = $year-1
	$year--;
	echo '<h1>'.$year.'</h1>';

//Operadores de asignación
echo '<h2>Operadores de asignación</h2>';
	
	$edad = 55;

	echo $edad.'<br>';
	#edad = edad + 5 - * o /
	echo ($edad+=5);

 ?>