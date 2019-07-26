<?php 

	function mostrarError($errores, $campo){

		$alerta = '';
		if (isset($errores[$campo]) && !empty($campo)) {
			$alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
		}

		return $alerta;
	}

	function borrarErrores(){

    	unset($_SESSION['errores']);

    	if (isset($_SESSION['errores_entrada'])) {
    		$_SESSION['errores_entrada'] = null;
    	}

    	if (isset($_SESSION['completado'])) {
    		$_SESSION['completado'] = null;
    		unset($_SESSION['completado']);
    	}
    	

	}

	function mostrarCategorias($db) {

		$sql = "SELECT * FROM categorias ORDER BY id ASC;";
		$categorias = mysqli_query($db, $sql);

		$result = array();
		if ($categorias && mysqli_num_rows($categorias) >= 1) {
			
			$result = $categorias;

		}

		return $result;

	}

	function mostrarUltimasEntradas($db){

		//Se separa así por la concatenacion de la consulta
		$sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".

           "INNER JOIN categorias c ON e.categoria_id = c.id ".

           "ORDER BY e.id DESC LIMIT 4"; 

		$entradas = mysqli_query($db, $sql);

		$resultado = array();

		if ($entradas && mysqli_num_rows($entradas) >= 1) {
					$result = $entradas;

				}

		return $entradas;				

	}
 	