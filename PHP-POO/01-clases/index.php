<?php 
	
	//Programacion orientada a objetos en PHP (POO)
	//
	//
	//
	//Definir una clase -Molde para crear mas objetos del tipo pcMasterRace con caracteristicas parecidas-
	
	class pcMasterRace{

		//Atributos o propiedades
		public $color = "blackMetal";
		public $tarjetaVideo = "nVidia 1070";
		public $motherboard = "Gaming AB";
		public $ram = "8";
		public $processor = "Ryzen 5 1600x";
		public $coldSystem = "CAM";
		public $gabinete = "Aliance TUF Gaming";

		//Metodos, acciones que hace el objeto (antes funciones)
		
		public function getColor(){

			//this significa busca en esta clase la propiedad x
			return $this->color;
		}

		public function setColor($color){

			$this->color = $color;
		}

		public function aumentarRAM(){

			$this->ram++;
		}

		public function disminuirRAM(){

			$this->ram--;
		}

		public function getRam(){

			return $this->ram;
		}

		public function getProcessor(){
			return $this->processor;
		}

	} //fin definicion de la clase
	
	//Crear objeto o Instanciar la clase
	//
	$pcMasterRace = new pcMasterRace();

	// Usar los metodos
	
	echo $pcMasterRace->getRam();

	$pcMasterRace->setColor("red");
	echo "<br>";

	echo "El color de la pc Gamer es: ".$pcMasterRace->getColor()."<br>";

	//aumentar la ram
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->aumentarRAM();
	$pcMasterRace->disminuirRAM();

	echo "Ram actual es: ".$pcMasterRace->getRam()."<hr>";


	//Creacion de nuevo objeto solo se cambia el nombre
	$pcMasterRace2 = new pcMasterRace();

	$pcMasterRace2->setColor("Negra");	

	echo "El color de la pc Gamer es: ".$pcMasterRace2->getColor()."<br>";

	echo "Ram actual es: ".$pcMasterRace2->getRam()."<br>";

	echo "El procesador que usa es: ".$pcMasterRace2->getProcessor()."<br>";

 ?>