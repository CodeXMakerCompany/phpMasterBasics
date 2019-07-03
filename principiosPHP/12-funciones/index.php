<h1>Primera funcion</h1>
<?php 
	/*FUNCIONES: CONJUNTOS DE INSTRUCCIONES AGRUPÁDOS POR UN NOMBRE EN COMPLETO
		-SE PUEDE INVOCAR ILIM VECES

	EJEMPLO:

	function nombreDeMiFuncion($parametro) {
	
	//BLOQUE DE INSTRUCCIONES

	}*/

	//Ejemplo1

	#funcion sin parametros
	function muestraNombres(){

		echo "Samuel<br>";
		echo "Vazquez<br>";
		echo "Ruiz<br>";
		echo "<hr>";
	}

	#invocar funcion sin parametros
	muestraNombres();

	//Ejemplo2

	#funcion con parametro
	function tabla($numero){
		
		echo "<h3>Tabla de multiplicar del numero: $numero </h3>";
		for ($i=1; $i <=10 ; $i++) {
			$resultado = $numero*$i;

			echo "$numero x $i = $resultado <br>"; 
			
		}
	}

	if (isset($_GET['numero'])) {

		tabla($_GET['numero']);
		echo "<hr>"; 

	}else{
		echo "No hay parametro para la funcion";
		echo "<hr>";
	}

	//Ejemplo 3

	function calculadora($numero1, $numero2, $negrita){

		//Conjunto de instrucciones a ejecutar
		$suma = $numero1 + $numero2;
		$resta = $numero1 - $numero2;
		$multiplicacion = $numero1 * $numero2;
		$division = $numero1 / $numero2;

		$cadena_texto = "";

		echo "<h3>CALCULADORA</h3>";
		if ($negrita) {
			$cadena_texto.="<h1>";
		}
		$cadena_texto .= "Suma: ".$suma."<br>";
		$cadena_texto .= "Resta: ".$resta."<br>";
		$cadena_texto .= "Multiplicación: ".$multiplicacion."<br>";
		$cadena_texto .= "División: ".$division."<br>";
		

		if ($negrita) {
			$cadena_texto .="</h1>";
		}

		$cadena_texto .= "<hr>";

		return $cadena_texto;


	}

	echo calculadora(10, 30, true);

	//ejercicio 4 correcta sintaxis
	// ya que la funcion siempre debe devolver un valor y no debe tener instrucciones de impresion en la misma funcion

	function getNombre($nombre){
		$texto = "El nombre es: $nombre";

		return $texto;
	}

	function getApellidos($apellidos){
		$texto = "Los apellidos son: $apellidos";

		return $texto;
	}


	function devuelveElNombre($nombre, $apellidos){
		#anidar funcion
		$texto = getNombre($nombre)
					."<br>".
					getApellidos($apellidos);
		return $texto;

	}

	echo devuelveElNombre("Samuel","Vazquez Ruiz");


 ?>