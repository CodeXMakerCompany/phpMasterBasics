			
		<?php
		/*Incluye un modulo para hacer el programa facilmente escalable y modificable*/
		//include_once solo incluye 1 sola vez y limita la funcion a 1 
			require_once "modulos/cabecera.php";
			#si no se ejecuta correctamente no carga toda la pagina se detiene la ejecucion es mas estricto
			//require "modeulos/cabecera.php";
		 ?>

		<!--Contenido -->
		<div>
			<h2>Esta es la pagina de inicio</h2>
			<p>Texto  de prueba de la pagina de inicio</p>
		</div>

		<?php
		//veces n se puede incluir la funcion 
			include "modulos/footer.php";
		 ?>

	</body>
</html>
