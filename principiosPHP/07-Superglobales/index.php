<?php 

//Variables superglobales

//Variables servidor
	#manda la direccion IP donde se encuentra el servidor
echo '<h1>'.$_SERVER['SERVER_ADDR'].'</h1>';

	#MANDA EL NOMBRE DEL SERVIDOR
echo '<h1>'.$_SERVER['SERVER_NAME'].'</h1>';

	#manda el software en el que correl el servidor
echo '<h1>'.$_SERVER['SERVER_SOFTWARE'].'</h1>';

	#manda el navegador que usa el usuario
echo '<h1>'.$_SERVER['HTTP_USER_AGENT'].'</h1>';

	#manda la ip del usuario
echo '<h1>'.$_SERVER['REMOTE_ADDR'].'</h1>';

			
 ?>