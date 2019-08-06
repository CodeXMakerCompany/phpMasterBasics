<?php 
		
	require_once 'autoload.php';	

	//Si se va a ocupar mucho el namespace
	use MisClases\usuario;
	use MisClases\categoria;
	use MisClases\entrada;
	use panelAdministrador\usuario as usuarioAdmin;

	class Principal{
		public $usuario;
		public $categoria;
		public $entrada;

		public function __construct() {
			$this->usuario = new usuario();
			$this->categoria = new categoria();
			$this->entrada = new entrada();
		}

		public function getUsuario() {
			return $this->usuario;
		}
		public function setUsuario($usuario) {
			$this->usuario = $usuario;
		}

		public function getCategoria() {
			return $this->categoria;
		}
		public function setCategoria($categoria) {
			$this->categoria = $categoria;
		}

		public function getEntrada() {
			return $this->entrada;
		}
		public function setEntrada($entrada) {
			$this->entrada = $entrada;
		}

		function informacion() {
				echo __CLASS__."<br>";
				echo __METHOD__."<br>";
				echo __FILE__."<br>";

		}

	}

	$principal = new Principal();
	$principal->informacion();
	//var_dump($principal->usuario);
	echo("<br>");	
	//sacar los metodos de una clase
	$metodos = get_class_methods($principal);
	$busqueda = array_search('setEntrada', $metodos);
	var_dump($busqueda);//buscar el metodo en el array

	//Objeto de otro paquete
	
	//$usuario = new usuarioAdmin();
	//var_dump($usuario);

	// Comprobar si existe una clase
	
	$clase = class_exists('MisClases\usuario');
	if ($clase) {
		echo "<h1>La clase si existe</h1>";
	}else{
		echo "<h1>La clase no existe</h1>";
	}