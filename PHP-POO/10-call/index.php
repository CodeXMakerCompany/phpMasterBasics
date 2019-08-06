<?php 
	
class Persona{
		private $nombre;
		private $edad;
		private $ciudad;

	public function __construct($nombre, $edad, $ciudad) {

		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->ciudad = $ciudad;

	}	

	//deteccion de metodos
	public function __call($name, $arguments) {
		$prefix_metodo = substr($name, 0, 3);

		if ($prefix_metodo == "get") {
			$nombre_metodo = substr(strtolower($name), 3);



			if (!isset($this->$nombre_metodo)) {
				return "El metodo no existe!!";
			}


			return $this->$nombre_metodo."<br>";

		}else{
			return "El metodo no existe!!";
		}


		
	}
}

$persona = new Persona("Sam", 07, "México");

echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();
echo $persona->getnoexiste();