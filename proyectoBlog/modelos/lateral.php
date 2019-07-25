<?php require_once 'helpers.php'; ?>
<!-- BARRA LATERAL -->
			<aside id="sidebar">
				<div id="login" class="block-aside">
					<h3>Identificate</h3>
					<form action="login.php" method="POST">
						<label for="email">Email</label>
						<input type="email" name="email">

						<label for="password">Contraseña</label>
						<input type="password" name="password">

						<input type="submit" value="Entrar">
					</form>
				</div>	
				<div id="register" class="block-aside">	
					<h3>Registrate</h3>
					<form action="registro.php" method="POST">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre">
						
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): ''; ?>
							

						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos">
						
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos'): ''; ?>	

						<label for="email">Email</label>
						<input type="email" name="email">

						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'): ''; ?>

						<label for="password">Contraseña</label>
						<input type="password" name="password">

						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password'): ''; ?>

						<input type="submit" name="submit" value="Registrarse">
					</form>

					<?php borrarErrores(); ?>
				</div>
			</aside>