<?php require_once 'helpers.php'; ?>

<!-- BARRA LATERAL -->
			<aside id="sidebar">

				<div id="buscador" class="block-aside">
					<h3>Buscar</h3>

					<form action="buscar.php" method="POST">
						<input type="text" name="search">
						<input type="submit" value="Buscar">
					</form>
				</div>

				<?php if (isset($_SESSION['usuario'])) : ?>
					<div id="usuario_logeado" class="block-aside">
						
						<h3><?= "Bienvenido : ".$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>

						<!-- Botones -->

						<a href="crear-entrada.php" class="boton boton-A"> Crear entradas</a>
						<a href="crear-categoria.php" class="boton boton-A0"> Crear categorías</a>
						<a href="perfil.php" class="boton boton-B"> Perfil</a>
						<a href="cerrar.php" class="boton boton-C"> Cerrar sesión</a>

					</div>
				<?php endif; ?>
				
				<!-- Condicion de esconder cajas -->
				

				<?php if (!isset($_SESSION['usuario'])) : ?>

				<div id="login" class="block-aside">
					<h3>Identificate</h3>

				<?php if (isset($_SESSION['error_login'])) : ?>

					<div class="alerta alerta-error">
						<h3><?=$_SESSION['error_login']; ?></h3>
					</div>

				<?php endif; ?>

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

					<!-- Mostrar errores -->
							
					<?php if (isset($_SESSION['completado'])) : ?>

						<div class="alerta alerta-exito">
						<?php  echo $_SESSION['completado']; ?>	
						</div>

					<?php elseif(isset($_SESSION['errores']['general'])): ?>

						<div class="alerta alerta-error">
						<?php  echo $_SESSION['errores']['general']; ?>	
						</div>

					<?php endif; ?>

					<!-- Fin mostrar errores -->	
					
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
				<?php endif; ?>
			</aside>