<?php 

	/*
	ex1. Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente:
	-recorrerlo y mostrarlo
	-ordenarlo y mostrarlo
	-mostrar su longitud
	-buscar algun elemento
	-buscar por el parametro que me lluegue por la url
	*/

	// FUNCIONES
	function mostrarArray($numeros){
		$resultado = "";
			foreach ($numeros as $key => $numero) {
				#$resultado = $resultado.$numero."<br>"
			$resultado .= $numero."<br>";
		}
		return $resultado;
	}

	$numeros = ['7','4','2','1','3','5','6','8'];

	echo "<h2>Recorrer y mostrar</h2>";
	echo mostrarArray($numeros);
	echo "<hr>";


	echo "<h2>Ordenar y mostrar</h2>";
	sort($numeros);
	echo mostrarArray($numeros);
	echo "<hr>";

	echo "<h2>Mostrar longitud</h2>";
	$numElementos = count($numeros);
	echo $numElementos;
	echo "<hr>";



	$valor = $_GET['value'];
	$search = array_search($valor, $numeros);
	echo "<h2>Buscar dato en el array</h2>";
	if (!empty($search)) {
		echo "<h4>El numero buscado existe, en el indice: $search</h4>";
	}else{
		echo "El numero no existe";
	}
	
	
 ?>