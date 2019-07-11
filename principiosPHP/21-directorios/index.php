<?php 
	
	if (!is_dir('nueva_carpeta')) {
		mkdir('nueva_carpeta', 0777) or die('No se puede crear la carpeta');
		echo "carpeta creada";
		echo "<hr>";
	}else{
		echo "Ya existe la carpeta<br>";
		echo "<hr>";
	}

	//borrar dir
	//rmdir('nueva_carpeta');
	echo "<h1>Contenido carpeta</h1>";
	if ($gestor = opendir('./nueva_carpeta')) {
		while (false != ($archivo = readdir($gestor))) {
			if ($archivo != '.' && $archivo != '..') {
				echo $archivo."<br>";
			}
			
		}
	}

 ?>