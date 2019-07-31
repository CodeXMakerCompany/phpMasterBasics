<?php 
	require_once 'pcMasterRace.php';

	//Envio de datos al constructor
	$pcMasterRace = new pcMasterRace("BlackSilver", "nvidia 1070 DualStrix", "AB gaming 2", "8", "ryzen 5 1600x", "CAM", "TUF Gaming Alliance");
	

	//Visibilidad de propiedades y metodos
	
	#publico cambia sin problemas
	$pcMasterRace->color = "Rosa";
	#protected necesita un metodo desde el constructor de modelo set
	$pcMasterRace->setTarjetaVideo("ASUS 1080ti");
	#private necesita un metodo get para obtnerse
	#$pcMasterRace->setMotherboard("Plus Gaming xtreme");
	//var_dump($pcMasterRace->getMotherboard()."<br>");
	//var_dump($pcMasterRace);
	//
	
	//Llamar la funcion de mostrar pc
	echo $pcMasterRace->mostrarInformacion($pcMasterRace);

 ?>