<?php 
	
	class Usuario{

		public $nombre;
		public $email;

		public function __construct() {

			$this->nombre = "Samuel Vazquez Ruiz";
			$this->email = "codexmaker12@gmail.com";
			echo "Creando el objeto creada <br>";
		}

		public function __toString() {
			return "Hola, {$this->nombre}, estas registrado con:  {$this->email} ";
		}	

		public function __destruct() {
			echo " <br> Destruyendo el objeto";;
		}
	}

	$usuario = new Usuario();

	echo $usuario;

		