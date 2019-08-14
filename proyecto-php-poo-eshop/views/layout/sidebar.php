<!-- BARRA LATERAL -->
<aside id="lateral">
	
	<div id="carrito" class="block_aside">
		<h3>Mi carrito</h3>
		<ul>
			<?php $stats = utils::statsCarrito();  ?>
			<li><a href="<?=base_url?>carrito/index">Productos (<?=$stats['count'] ?>)</a></li>
			<li><a href="<?=base_url?>carrito/index">Total: <?=$stats['total'] ?>mxn </a></li>
			<li><a href="<?=base_url?>carrito/index">Ver el carrito</a></li>
		</ul>
	</div>

		<div id="login" class="block_aside">
			<?php if(!isset($_SESSION['identity'])) : ?>
			<h3>Identificarse</h3>
			<form action="<?=base_url?>usuario/login" method="POST">
				<label for="">email</label>
				<input type="email" name="email">
				<label for="">password</label>
				<input type="password" name="password">

				<input type="submit" value="enviar">
			</form>

		<?php else: ?>
			<h3><?=$_SESSION['identity']->nombre ?> <?=$_SESSION['identity']->apellidos ?></h3>

		<?php endif; ?>
			<ul>
				
				<?php if(isset($_SESSION['admin'])) : ?>

				<li><a href="<?=base_url?>categoria/index">Gestionar Categorias</a></li>	
				<li><a href="">Gestionar Pedidos</a></li>
				<li><a href="<?=base_url?>producto/gestion">Gestionar Producto</a></li>
				
				<?php endif; ?>
				<?php if(isset($_SESSION['identity'])) : ?>
				<li><a href="">Mis pedidos</a></li>
				<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
				<?php else: ?>
				<li><a href="<?=base_url?>usuario/registro">Registrate aquí</a></li>
				<?php endif; ?>
			</ul>			
		</div>
</aside>

<!-- CONTENIDO CENTRAL -->

<div id="central">
