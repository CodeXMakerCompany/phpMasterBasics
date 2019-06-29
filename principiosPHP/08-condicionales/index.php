<h1>Condicionales</h1>
<?php 

/*
	CONDICIONALES

	IF:
		if(condicion){
			instrucciones
		}else{
			otras instrucciones
		}
	//OPERADORES DE COMPARACIÓN
	== igual
	=== identico
	!= distinto 
	<> diferente
	!== no identico
	< menor que
	> mayor que
	<= menor o igual que
	>= mayor o igual que

	// OPERADORES LOGICOS
	&& and
	|| or
	!  not
	and, or
*/		
	#ejemplo1
		$color = "rojo";

		if ($color == "rojo") {
			echo "El color es rojo<br>";
		}else{
			echo "El color no es rojo<br>";
		}
	#ejemplo2
		echo "<hr>";
		$year = 2019;

		if ($year >= 2019) {
			echo "Estamos de 2019 en adelante";
		}else{
			echo "Es un año anterior a 2019";
		}
		echo "<br>";
		echo "<hr>";
	#ejemplo3
		$nombre = "Samuel Vazquez";
		$ciudad = "México";
		$continente = "Latinoamerica";
		$edad = 23;
		$mayoria_edad = 18;


		if ($edad >= $mayoria_edad) {
			
			echo '<h2>'.$nombre.' es mayor de edad</h2>';

			if ($continente == "Latinoamerica") {
				echo '<h3>Y es de'.$ciudad.'</h3>';
			}else{
				echo "No es latinoamericano";
			}
			
		}else{
			echo '<h2>'.$nombre.' es menor de edad, chao.</h2>';
		}
		echo "<hr>";
	#ejemplo4
	$dia = 6;

		if ($dia == 1) {
			echo "LUNES";
		}elseif ($dia == 2) {
			echo "MARTES";
		}elseif ($dia == 3){
			echo("MIERCOLES");
		}elseif ($dia == 4){
			echo "JUEVES";
		}elseif ($dia == 5) {
			echo "VIERNES";
		}else{
			echo "Es fin de semana";
		}

		echo "<hr>";

	#ejemplo5
		$edad1 = 18;
		$edad2 = 64;
		$edad_oficial = 23;

		if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
			echo "Esta en edad de trabajar";
		}else{
			echo "No puede trabajar";
		}

		echo "<br>";

		$pais = "Mexico";
		if ($pais == "Mexico" || $pais == "España" || $pais =="Colombia") {
			echo "En este pais se habla español";
		}else{
			echo "no se habla español";
		}

	echo "<hr>";	

	//switch

	$dia = 4;
	switch ($dia) {
		case 1:
			echo "numero1";
			break;
		case 2:
			echo "numero2";
			break;
		case 3:
			echo "numero3";
			break;
		case 4:
			echo "numero4";
			break;			
		default:
			echo "La variable contiene un dato diferente";
		
	}

	echo "<hr>";
	goto marca;
	echo "<h3>Intruccion 1</h3>";
	echo "<h3>Intruccion 2</h3>";
	echo "<h3>Intruccion 3</h3>";
	echo "<h3>Intruccion 4</h3>";

	marca:
	echo "Me he saltado 4 echos";

 ?>