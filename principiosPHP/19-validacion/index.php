<html>
	<head>
				<meta charset="utf-8">
		<title>Validación de formularios PHP</title>

	</head>
	<body>
		<h1>Validar formularios en PHP</h1>

		<?php 
			if (isset($_GET['error'])) {
				$error = $_GET['error'];



				if ($error == 'faltan_valores') {
					echo '<strong style="color: red">Faltan valores</strong>';
				}

				if ($error == 'nombre') {
					echo '<strong style="color: red">Nombre deb ser sin numeros</strong>';
				}

				if ($error == 'apellidos') {
					echo '<strong style="color: red">Apellidos debe ser sin numeros</strong>';
				}

				if ($error == 'edad') {
					echo '<strong style="color: red">Escriba correctamente la edad</strong>';
				}

				if ($error == 'correo') {
					echo '<strong style="color: red">Escriba correctamente su correo</strong>';
				}

				if ($error == 'pass') {
					echo '<strong style="color: red">La contraseña no debe ser menos a 5 caracteres</strong>';
				}
			}
		 ?>

		<form method="POST" action="procesar_formulario.php">
			
			<label for="nombre">Nombre:</label><br>
			<input type="text" name="nombre"   required="required" pattern="[a-zA-ZA]+" /><br>

			<label for="apellidos">Apellidos:</label><br>
			<input type="text" name="apellidos" required="required" pattern="[a-zA-ZA]+" /><br>

			<label for="edad">Edad:</label><br>
			<input type="number" name="edad" required="required" pattern="[0-9]+"/><br>

			<label for="correo">Correo:</label><br>
			<input type="email" name="correo"  required="required" /><br>

			<label for="pass">Contraseña:</label><br>
			<input type="password" name="pass"  required="required" minlength="5" /><br/>


			<input type="submit" value="Enviar" />
		</form>

	</body>
</html>