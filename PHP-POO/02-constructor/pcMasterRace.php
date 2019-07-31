<?php 

	class pcMasterRace{

		//Atributos o propiedades
		public $color; #podemos acceder desde cualquier lugar al tipo public
		protected $tarjetaVideo; #podemos acceder desde la clase que los define
		#y hereden
		private $motherboard; #podemos acceder desde esta clase y nada mas

		public $ram;
		public $processor;
		public $coldSystem;
		public $gabinete;

		//Contructor asigna los valores
		public function __construct($color, $tarjetaVideo, $motherboard, $ram, $processor, $coldSystem, $gabinete) {
			$this->color = $color;
			$this->tarjetaVideo = $tarjetaVideo;
			$this->motherboard = $motherboard;
			$this->ram = $ram;
			$this->processor = $processor;
			$this->coldSystem = $coldSystem;
			$this->gabinete = $gabinete;
		}

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

		public function getMotherboard(){
			return $this->motherboard;
		}

		public function setMotherboard($motherboard){
			$this->motherboard = $motherboard;
		}

		public function setTarjetaVideo($tarjetaVideo){
			$this->tarjetaVideo = $tarjetaVideo;
		}

		//Metodo para imprimir la informacion de un coche
	
		public function mostrarInformacion(pcMasterRace $pcMasterRace){

		if (is_object($pcMasterRace)) {
		$info = "<h1>Informacion de la PC</h1>";
		$info .= "Gabinete: ".$pcMasterRace->gabinete."<br>";
		$info .= "Motherboard: ".$pcMasterRace->motherboard."<br>";
		$info .= "Ram: ".$pcMasterRace->ram."<br>";
		$info .= "Processor: ".$pcMasterRace->processor."<br>";
		$info .= "TarjetaVideo: ".$pcMasterRace->tarjetaVideo."<br>";
		$info .= "Sistema enfriamiento: ".$pcMasterRace->coldSystem."<br>";
			}else{

				$info = "Tu dato es este: $pcMasterRace";
			}	
		
		
		return $info;
	}

	} //fin definicion de la clase

 ?>