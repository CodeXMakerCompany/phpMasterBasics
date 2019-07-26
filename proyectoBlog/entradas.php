<?php include_once 'modelos/cabecera.php'; ?>

<?php require_once 'modelos/lateral.php'; ?>

<div id="principal">
				
				<h1>Todas las entradas</h1>
				
				<?php 

					$entradas = mostrarEntradas($db, null);

					if (!empty($entradas)) :

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

					endif;	
				 ?>
	<?php require_once 'modelos/footer.php'; ?>	
	 