<?php 
	

	/*
		Formulario
	*/


 ?>

 <html lang="es">
 	<head>
 		<meta charset="utf-8">
 		 	<title>Formulario PHP y Html</title>
 	</head>

	<h1>Formulario</h1>
	<form action="" method="POST" enctype="multipart/form-data">
			
			<label for="nombre">Nombre :</label>
			 <p><input type="text" name="nombre" autofocus="autofocus" maxlength="10" placeholder="Ingresa tu nombre" /></p>

			<label for="apellido">Apellido:</label>
			  <p><input type="text" name="apellido" minlength="4" required="required" placeholder="Ingresa tu apellido" /></p>

			<label for="boton">Botón: </label>
			  <p><input type="button" name="boton" value="Clickame" /></p>
			  
			<label for="sexo">Sexo:</label>
			  <p>

			  	Hombre <input type="checkbox" name="sexo" value="Masculino" />
			  	Mujer <input type="checkbox" name="sexo" value="Femenino" />

			  </p>
			  
			<label for="color">Color:</label>
			  <p><input type="color" name="color" /></p>      
			
			<label for="fecha">Fecha:</label>
			  <p><input type="date" name="fecha" /></p>
			
			<label for="correo">Email:</label>
			  <p><input type="email" name="correo" /></p>

			<label for="archivo">File:</label>
			  <p><input type="file" name="archivo" multiple="multiple" /></p>

			<label for="numero">Numero:</label>
			  <p><input type="number" name="numero" /></p>

			<label for="pass">Contraseña:</label>
			  <p><input type="password" name="pass" /></p>

			<label for="continente">Continente:</label>
			  <p>

			  Sudamerica<input type="radio" name="continente"  value="America del Sur" />
			  <br>
			  America del norte<input type="radio" name="continente"  value="America del Norte" />
			  <br>
			  Centroamerica<input type="radio" name="continente"  value="America del Centro" />
			  <br>
			  Europa<input type="radio" name="continente"  value="Europa" />
			  <br>
			  Asia<input type="radio" name="continente"  value="Asia" />

			</p>
			
			<label for="web">Pagina web:</label>
			  <p><input type="url" name="web" /></p>
			
			<textarea name="" id="" cols="30" rows="10"></textarea>
			<br>


			Peliculas:
			<select name="peliculas" id="">
				
				<option value="Spiderman">Spiderman</option>
				<option value="Batman">Batman</option>
				<option value="Ironman">Ironman</option>
				<option value="Darkman">Darkman</option>
				<option value="Lightman">Lightman</option>
			</select>
			<br>

			<input type="submit" value="Enviar" />

	</form>

 </html>
