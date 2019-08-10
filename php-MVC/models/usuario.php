<?php 	
	require_once 'modeloBase.php';
	class usuario extends modeloBase{
		public $nombre;
		public $apellidos;
		public $email;
		public $password;

		public function __construct() {
			parent::__construct();
		}

		public function getNombre() {
			return $this->nombre;
		}
		public function getApellidos() {
			return $this->apellidos;
		}
		public function getEmail() {
			return $this->email;
		}
		public function getPassword() {
			return $this->password;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}
		public function setApellidos($apellidos) {
			$this->apellidos = $apellidos;
		}
		public function setEmail($email) {
			$this->email = $email;
		}
		public function setPassword($password) {
			$this->password = $password;
		}

	}