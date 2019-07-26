<?php require_once 'modelos/redireccion.php'; ?>

<?php include_once 'modelos/cabecera.php'; ?>

<?php require_once 'modelos/lateral.php'; ?>



	<div id="principal">
		<h1>Mi perfil</h1>

		<form action="actualizar-perfil.php" method="POST">


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

						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>">
						
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): ''; ?>
							

						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>">
						
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos'): ''; ?>	

						<label for="email">Email</label>
						<input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>">

						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'): ''; ?>

						<input type="submit" name="submit" value="Guardar">		
						<?php borrarErrores(); ?>	
	</div>

</div>	

<?php require_once 'modelos/footer.php'; ?>