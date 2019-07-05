<html>
	<head>
				<meta charset="utf-8">
		<title>Validación de formularios PHP</title>

	</head>
	<body>
		<h1>Validar formularios en PHP</h1>

		<form action="POST" action="procesar_formulario.php">
			
			<label for="nombre">Nombre:</label><br>
			<input type="text" name="nombre" required="required" pattern="[A-Za-z]+" /><br>

			<label for="apellidos">Apellidos:</label><br>
			<input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"/><br>

			<label for="edad">Edad:</label><br>
			<input type="number" name="edad" required="required" pattern="[0-9]+"/><br>

			<label for="correo">Correo:</label><br>
			<input type="email" name="correo" required="required" /><br>

			<label for="pass">Contraseña:</label><br>
			<input type="password" name="pass" required="required" /><br/>


			<input type="submit" value="Enviar" />
		</form>

	</body>
</html>