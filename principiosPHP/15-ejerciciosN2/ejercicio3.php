<?php 

	/*
	ex3. Hacer un programa en PHP que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en minusculas y mostrarlo en mayusculas y negritas
	*/

	$texto = "";

	if (empty($texto)) {
		$texto = "rellenado de texto";
		$aMayusculas = strtoupper($texto);
		echo '<strong>'.$aMayusculas.'</strong>';
	}

 ?>