<?php 

//Constantes el valor de estas variables nuca cambiara
//
define('nombre', 'Samuel Vazquez ');
define('web', 'Web');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//Constantes predefinidas
echo '<ul>
		
		<li><h2>Version de php</h2>';
		echo phpversion();
		echo'</li>

		<li><h2>Linea de codigo en la que se encuentra el comando</h2>';
		echo __LINE__;
		echo'</li>

		<li><h2>Directorio donde se encuentra instalado PHP</h2>';
		echo PHP_EXTENSION_DIR;
		echo'</li>

		<li><h2>Ruta completa de la extension</h2>';
		echo __FILE__;
		echo'</li>

		<li><h2>Nombre de la funcion en curso</h2>';
		function primeraFuncion(){
			echo __FUNCTION__;
		}
		primeraFuncion();
		echo'</li>

		<li><h2>Sistema operativo que nos visita</h2>';
		echo PHP_OS;
		echo'</li>

		<li><h2>Características del sistema operativo</h2>';
		echo php_uname();
		echo'</li>

		<li><h2>Creditos</h2>';
		echo phpcredits();
		echo'</li>

	  </ul>';
 ?>