<?php 

class Usuario{

		const URL_COMPLETA= "localhost";
		public $email;
		public $password;

	

	function getEmail() {
		return $this->email;
	}

	function getPassword(){
		return $this->password;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function setPassword($password) {
		$this->password = $password;
	}
}
	$usuario = new Usuario();

	echo Usuario::URL_COMPLETA;
 ?>
