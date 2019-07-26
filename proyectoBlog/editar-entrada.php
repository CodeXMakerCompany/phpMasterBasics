<?php require_once 'modelos/redireccion.php'; ?>
<?php include_once 'modelos/helpers.php'; ?>
<?php include_once 'modelos/cabecera.php'; ?>

<?php 
		$entrada_actual = conseguirEntrada($db, $_GET['id']);

		
?>


<?php require_once 'modelos/lateral.php'; ?>

<div id="principal">

				<h1>Editar Entrada</h1>
				<p>
					Edita tu post <?=$entrada_actual['titulo'] ?> y guarda los cambios!
				</p>
				<br>
				<form action="guardar-entrada.php?editar=<?=$entrada_actual['id'] ?>" method="POST">
					
					<label for="titulo">Titulo : </label>
					<input type="text" name="titulo" value="<?=$entrada_actual['titulo'] ?>">

					<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo'): ''; ?>

					<label for="descripcion">Descripción : </label>
					<textarea name="descripcion" id="" cols="100" rows="10"><?=$entrada_actual['descripcion'] ?></textarea>

					<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion'): ''; ?>


					<label for="categoria">Categoría</label>
					<select name="categoria" id="">

						<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria'): ''; ?>
						
						<?php $categorias = mostrarCategorias($db);

							if (!empty($categorias)) :
								while ($categoria =mysqli_fetch_assoc($categorias)) :
						?>
								
						<option value="<?=$categoria['id']?>" 	
								<?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected=selected' : '' ?>>
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



	<?php require_once 'modelos/footer.php'; ?>	