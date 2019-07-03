<?php 
	/*
	Crear un array con el contenido de la siguiente tabla:
	Accion Aventura Deportes
	gta    assasins fifa 19  
	cod    crashban pes  19
	pug    princeof moto 19

	Cada columna debe ir en un fichero separado(includes).
	*/

	$tabla = array(
		"ACCION" => array("GTA","COD","PUG"),
		"AVENTURA" => array("ASSASINS","CRASHBANDICOOT","PRINCEOFPERSIA"),
		"DEPORTES" => array("FIFA 19", "PES 19", "MOTO 19")
	);

	#crearle los indices

	$categorias = array_keys($tabla);
 ?>

 <table border="1">
 	<tr>
 		<?php 
 		foreach ($categorias as $key => $categorias) {
 			echo "<th>$categorias</th>";
 		}
 		 ?>
 	</tr>

 	<?php 

 	require_once "modulos/fila0.php";
 	require_once "modulos/fila1.php";
 	require_once "modulos/fila2.php";

 	 ?>
 </table>