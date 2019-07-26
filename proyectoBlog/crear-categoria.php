<?php require_once 'modelos/redireccion.php'; ?>

<?php include_once 'modelos/cabecera.php'; ?>

<?php require_once 'modelos/lateral.php'; ?>

<div id="principal">
				
				<h1>Crear categorías</h1>
				<p>
					Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas
				</p>
				<br>
				<form action="guardar-categoria.php" method="POST">
					
					<label for="nombre">Nombre de la categoria :</label>
					<input type="text" name="nombre">

					<input type="submit" value="Guardar">

				</form>
				<br><br><br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br><br><br>
				<br><br><br><br><br><hr>
</div>


<!-- PIE DE PÁGINA -->
		<?php require_once 'modelos/footer.php'; ?>				