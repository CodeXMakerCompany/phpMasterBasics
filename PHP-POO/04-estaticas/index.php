<?php 

	require_once 'configuracion.php';

	configuracion::setColor("black");
	configuracion::setEntorno("localhost");
	configuracion::setNewsletter(true);

	echo configuracion::$color . '<br>';
	echo configuracion::$entorno . '<br>';
	echo configuracion::$newsletter . '<br>';

	$configuracion = new configuracion();
	//asi se accede a propiedades estaticas
	$configuracion::$color = "red";
	echo $configuracion::$color;