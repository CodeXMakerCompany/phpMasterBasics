<?php 
 
 class notaController {

 	public function listar() {
 		//Modelo
 		require_once 'models/nota.php';

 		//Logica accion del controlador
 		$nota = new nota();
 		$notas = $nota->conseguirTodos('nota');

 		//Vista
 		require_once 'views/nota/listar.php';
 	}

 	public function crearNota() {
 		//Modelo
 		require_once 'models/nota.php';

 		$nota = new nota();
 		$nota->setUsuario_id(8);
 		$nota->setTitulo("Nota desde PHP MVC 2");
 		$nota->setContenido("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id blanditiis saepe totam, perferendis sapiente expedita ea, inventore obcaecati amet est illo eligendi, voluptatum aliquid odio alias hic nostrum accusantium sed.");

 		$guardar = $nota->guardar();
 		header("Location:index.php?controller=nota&action=listar");
 	}

 	public function borrarNota() {
 		
 	}

 	public function conseguirTodos() {
 		return "Sacando todos los usuarios";
 	}
 	
 }