<h1>Registrarse</h1>
<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete' ): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">Registro completado correctamente
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">Registro fallido, introduce bien los datos
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>	
<?php endif; ?>
<?php utils::deleteSession('register');?>

<form action="<?=base_url?>usuario/save" method="POST">

	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required>
	
	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" required>

	<label for="email">Email</label>
	<input type="email" name="email" required>

	<label for="password">Contraseña</label>
	<input type="password" name="password" required>
	
	<input type="submit" value="registrarse">
</form>