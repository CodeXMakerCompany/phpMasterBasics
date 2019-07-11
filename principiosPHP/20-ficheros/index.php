
 <h1>Test de ficheros</h1>

 <form method="POST" action="index.php">
 	<label for="texto">Texto:</label><br>
			<input type="text" name="texto"   required="required" pattern="[a-zA-ZA ]+" /><br>
	<input type="submit" value="Enviar" />
	
	<?php
	/*
	if (!empty($_POST['texto'])) {

		$texto = $_POST['texto'];
		echo "recibi el texto y es: $texto"."<br>";
		
	#abrir archivo
	#permisos a+ permiten leer y escribir
	$archivo = fopen("fichero_texto.txt","a+");
	echo "<hr>";
	#leer archivo
	while (!feof($archivo)) {
		$contenido = fgets($archivo);
		echo $contenido."<br>";
	}

	fwrite($archivo, $texto);

	#cerrar archivo
	fclose($archivo);

	}
	*/
	 ?>

 </form>

<?php 
	/*COPIAR ARCHIVO
	copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");
	*/

	//renombrar fichero
	rename('fichero_copiado.txt','archivito_recopiadito.doc');
 ?>