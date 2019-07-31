<?php 
	
	require_once 'clases.php';

	$persona = new Persona();

	var_dump($persona)."<br>";

	$devWeb = new desarrolladorWeb();

	var_dump($devWeb);
	
	echo "<br>";

	$auditor = new tecnicoRedes();

	var_dump($auditor);

 ?>