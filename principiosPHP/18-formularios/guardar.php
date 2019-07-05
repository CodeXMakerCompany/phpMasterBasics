<?php 

	/**/

	if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
		
		echo "datos recibidos"."<br>";
		echo "<h1>".$_POST['titulo']."</h1><br>";
		echo "<h1>".$_POST['descripcion']."</h1><br>";
	}
 ?>