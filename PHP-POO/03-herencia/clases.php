<?php 

	//HERENCIA: posibilidad de compartir atributos y metodos entre clases
	//
	
	class Persona {

		public $nombre;
		public $apellidos;
		public $altura;
		public $edad;

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellidos(){
			return $this->apellidos;
		}

		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function setAltura($altura){
			$this->altura = $altura;
		}

		public function getEdad(){
			return $this->edad;
		}

		public function setEdad($edad){
			$this->edad = $edad;
		}


		public function hablar() {
			return "Estoy hablando";
		}

		public function caminar() {
			return "Estoy caminando";
		}

		public function comiendo() {
			return "Estoy comiendo";
		}

	}

	//heredar de clase persona
	class desarrolladorWeb extends Persona{

		public $lenguajes;
		public $experienciaProgramador;

		public function __construct() {
			$this->lenguajes = "HTML, CSS, PHP y JS";
			$this->experienciaProgramador = 3;

		}

		public function sabeLenguajes($lenguajes) {
			$this->lenguajes = $lenguajes;

			return $this->lenguajes;
		}

		public function programar() {
			return "Soy programador";
		}

		public function crearBD() {
			return "Estoy creando la base de datos";
		}

		public function diseñarMaquetadoWeb() {
			return "Estoy diseñando la web";
		}

	}

	class tecnicoRedes extends desarrolladorWeb {

		public $auditarRedes;
		public $experienciaRedes;

		public function __construct() {

			//llamar de manera estatica al metodo que hereda para recibir la data del padre
			parent::__construct();

			$this->auditarRedes = "experto";
			$this->experienciaRedes = 5;

		}

		public function auditoria(){
			return "Estoy auditando una red";
		}
	}

 ?>