<?php 
	
	//trait permite definir metodos para compartir entre clases
	
	trait Utilidades{
		public function mostrarNombre() {
			echo "<h1>El nombre es: ".$this->nombre."</h1>";
		}
	}


	class Coche{
		public $nombre;
		public $marca;

		use Utilidades;
	}

	class Persona{
		public $nombre;
		public $apellidos;

		use Utilidades;
	}

	class VideoJuego{
		public $nombre;
		public $año;

		use Utilidades;
	}

	$coche = new Coche();
	$persona = new Persona();
	$VideoJuego = new VideoJuego();

	$coche->nombre = "Ferrari Testarosa";
	$persona->nombre = "Samuel Vazquez Ruiz";
	$VideoJuego->nombre = "Detroit Become Human";

	$coche->mostrarNombre();
	$persona->mostrarNombre();
	$VideoJuego->mostrarNombre();