<?php require_once 'modelos/redireccion.php'; ?>

<?php include_once 'modelos/cabecera.php'; ?>

<?php require_once 'modelos/lateral.php'; ?>

<div id="principal">
				
				<h1>Crear Entrada</h1>
				<p>
					Crea un nuevo post para comunicar tus ideas !
				</p>
				<br>
				<form action="guardar-entrada.php" method="POST">
					
					<label for="titulo">Titulo : </label>
					<input type="text" name="titulo">

					<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo'): ''; ?>

					<label for="descripcion">Descripción : </label>
					<textarea name="descripcion" id="" cols="100" rows="10"></textarea>

					<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion'): ''; ?>


					<label for="categoria">Categoría</label>
					<select name="categoria" id="">

						<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria'): ''; ?>
						
						<?php $categorias = mostrarCategorias($db);

							if (!empty($categorias)) :
								while ($categoria =mysqli_fetch_assoc($categorias)) :
						?>
								
						<option value="<?=$categoria['id']?>">
							<?=$categoria['nombre']?>
						</option>

						<?php 
								endwhile;
							endif;
						 ?>
								
					</select>

					<input type="submit" value="Guardar">

				</form>
			<?php  borrarErrores(); ?>	
</div>
</div>	

<!-- PIE DE PÁGINA -->
		<?php require_once 'modelos/footer.php'; ?>		