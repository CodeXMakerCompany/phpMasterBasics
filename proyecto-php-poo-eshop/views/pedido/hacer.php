<?php if (isset($_SESSION['identity'])): ?>
<h1>Hacer pedido</h1>
	<a href="<?=base_url?>carrito/index">Ver los productos y el precio del pedido</a>

	<p><h3>Dirección para el envio</h3></p>
	
	<form action="<?=base_url.'pedido/add'?>" method="POST">

		<label for="provinciaOdel">Provincia o delegación</label>
		<input type="text" name="provinciaOdel" required>
		
		<label for="localidad">Ciudad</label>
		<input type="text" name="localidad" required>

		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" required>

		<input type="submit" value="Confirmar pedido">
	
	</form>









<?php else: ?>	
	<h1>Necesitas estar identificado</h1>
	<p>Logeate en la web para poder realizar el pedido</p>
<?php endif; ?>	