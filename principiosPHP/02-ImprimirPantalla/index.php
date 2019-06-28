<html>
	
	<head>	
		<meta charset="utf-8">
			<title>Imprimir por pantalla</title>
	</head>

	<body>

		<h1>Impresion por pantalla con PHP-GUIDE by 
		<!--Se designa la variable con un nombre y se imprime -->
			<?php $nombre = "CODEXMAKER";
				echo $nombre;?>
				
			</h1>
		<!--Echo implicito -->
			<?="Bienvenido a las clases de codexmaker"?>

		<?php 
		// Titular de la seccion
		/*Comentario multilinea
			-----------testing*/
			echo "<h3>Listado de datos</h3>";
			#listado de datos
			echo "<ul>"

						."<li>PrimerDato</li>"
						."<li>SegundoDato</li>"
						."<li>TercerDato</li>"

				."</ul>";
				#concatenacion de codigo
				echo '<p>Esta es toda'.'-'.' lista de datos</p>';
 		?>
	</body>

</html>


