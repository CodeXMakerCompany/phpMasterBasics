<?php include_once 'modelos/helpers.php'; ?>
<?php include_once 'modelos/cabecera.php'; ?>

<?php 

		if (!isset($_POST['search'])) {
			header('Location: index.php');
		}
?>


<?php require_once 'modelos/lateral.php'; ?>

<div id="principal">

				<h1>Busqueda : <?= $_POST['search']; ?></h1>
				
				<?php 

					$entradas = mostrarEntradas($db, null, null, $_POST['search']);

					

					if (!empty($entradas) && mysqli_num_rows($entradas) >=1) :

						while ($entrada = mysqli_fetch_assoc($entradas)) :
				?>
					
					<article class="entrada">

					<a href="entrada.php?id=<?=$entrada['id']?>">
					<h2><?=$entrada['titulo']?></h2>
					<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']  ?></span>
					<p>
						<?= substr($entrada['descripcion'], 0, 250)."..." ?>
		
						</p>
					</a>
				</article>


				<?php 
						endwhile;

					else:	
				 ?>
				 <div class="alerta">Ninguna entrada con este nombre</div>	
				<?php endif; ?> 
		</div>			 
	<?php require_once 'modelos/footer.php'; ?>	