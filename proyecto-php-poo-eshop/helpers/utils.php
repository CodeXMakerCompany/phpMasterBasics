<?php 

 class utils{

 	public static function deleteSession($name){
 		if (isset($_SESSION[$name])) {
 			$_SESSION[$name] = null;
 			unset($_SESSION[$name]);	
 		}
 		
 		return $name;
 	}

 	public static function isAdmin() {
 		if (!isset($_SESSION['admin'])) {
 			header("Location:".base_url);
 		}else{
 			return true;
 		}
 	}

 	public static function showCategorias () {
 		require_once 'models/categoriaModel.php';
 		$categoria = new categoriaModel();
  		$categorias = $categoria->mostrarCategorias();

  		return $categorias;
 	}
 	
 }