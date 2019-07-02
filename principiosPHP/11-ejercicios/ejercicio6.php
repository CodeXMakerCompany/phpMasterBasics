<?php 

/*
	Ex6. Imprimir por pantalla todas las tablas del 1 al 10 e imprimirlas en una tabla por html
*/

	echo "<table border='1'> </tr>";//inicio de la tabla


	echo "<tr>";//inicio fila 1 de celdas

		for ($cabecera=1; $cabecera <=10 ; $cabecera++) { 
			echo "<td>Tabla del : $cabecera</td>";
		}

	echo "</tr>";// cierre  fila 1 de celdas

	echo "<tr>";//inicio fila 2 de celdas

		for ($filas=1; $filas <=10 ; $filas++) { 
			echo "<td>";
				for ($i=1; $i <=10 ; $i++) { 
					echo "$filas * $i = ".($filas*$i).'<br>';
				}
			echo "</td>";
		}

	echo "</tr>";// cierre  fila 2 de celdas

	echo '</table>';//fin de la tabla
 ?>