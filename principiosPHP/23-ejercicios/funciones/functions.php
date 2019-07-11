<?php 

	function validarEmail($email){
		$status = "no valido";
		if (!empty($_GET['email']) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
		$status = "valido";

		}
		return $status;
	}

