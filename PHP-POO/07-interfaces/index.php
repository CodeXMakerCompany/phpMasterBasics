<?php

	interface Ordenador{

		public function encender();
		public function apagar();
		public function reiniciar();
		public function desfragmentar();
		public function detectarUsb();

	}

class iMac implements Ordenador{

	private $modelo;

	function getModelo() {
		return $this->modelo;	
	}

	function setModelo($modelo) {
		$this->modelo = $modelo;
	}

	//cumplo contrato de la interfaz
		public function encender() {

		}
		public function apagar() {

		}
		public function reiniciar() {

		}
		public function desfragmentar(){

		}
		public function detectarUsb(){

		}


}

$maquintosh = new iMac();

$maquintosh->setModelo('Macbook Pro 2019');
echo $maquintosh->getModelo();	