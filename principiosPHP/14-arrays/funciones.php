 <?php 

 	$cantantes = ['SakiFujita', "Drake", "SamPadrul", "ArticM"];
 	$numeros = ["1","6","2","5","3","4"];

 	//ordenar
 	sort($numeros);
 	var_dump($numeros);
 	echo "<hr>";

 	//añadir elementos a un array
 	$cantantes[] = "extraSinger";
 	array_push($cantantes, "AnotherMore");
 	var_dump($cantantes);
 	echo "<br>";

 	//eliminar el ultimo elemento
 	array_pop($cantantes);
 	var_dump($cantantes);
 	echo "<br>";

 	//eliminar elemento array
 	unset($cantantes[4]);
 	var_dump($cantantes);
 	echo "<hr>";

 	//aleatorio
 	$indice = array_rand($cantantes);
 	echo $cantantes[$indice];
 	echo "<br>";

 	//dar la vuelta
 	var_dump(array_reverse($numeros));
 	echo "<br>";

 	//Buscar dentro de un array
 	$resultado = array_search('SamPadrul', $cantantes);
 	var_dump($resultado);
 	echo "<br>";

 	//Contar numero de elemntos
 	echo count($cantantes);
 	
  ?>