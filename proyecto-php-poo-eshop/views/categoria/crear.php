<h1>Crear categoría</h1>

<form action="<?=base_url?>categoria/save" method="POST">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required>

	<input type="submit" value="guardar">
</form>