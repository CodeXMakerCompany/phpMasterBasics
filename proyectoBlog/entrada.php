<?php include_once 'modelos/helpers.php'; ?>
<?php include_once 'modelos/cabecera.php'; ?>

<?php 
		$entrada_actual = conseguirEntrada($db, $_GET['id']);

		
?>


<?php require_once 'modelos/lateral.php'; ?>

<div id="principal">

				<h1><?= $entrada_actual['titulo']; ?></h1>

				<a href="categoria.php?id=<?= $entrada_actual['categoria_id'] ?>">
				<h2><?= $entrada_actual['categoria']; ?></h2>
				</a>
				<h4><?= $entrada_actual['fecha']; ?> | <?=$entrada_actual['usuario'];?></h4>
				<p><?= $entrada_actual['descripcion']; ?></p>
			

			<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>

				<a href="editar-entrada.php?id=<?= $entrada_actual['id'] ?>" class="boton boton-A0"> Editar entrada</a>
						<a href="borrar-entrada.php?id=<?= $entrada_actual['id'] ?>" class="boton boton-B"> Borrar entrada</a>

			<?php endif; ?>	

		</div>



	<?php require_once 'modelos/footer.php'; ?>	