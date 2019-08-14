<h1>Detalles del pedido</h1>
<?php if (isset($pedido)) : ?>
	
	<?php if (isset($_SESSION['admin'])) : ?>
	<center>
				
		<h3>Cambiar estado del pedido</h3>
		<form action="<?=base_url?>pedido/estado" method="POST">
			<input type="hidden" value="<?=$pedido->id?>" name="pedido_id">
			<select name="estado" style="width: 50%;">
				<option value="confirm">Pendiente</option>
				<option value="preparation">En preparación</option>
				<option value="ready">Preparado para enviar</option>
				<option value="sended">Enviado</option>
			</select>
			<input type="submit" value="Actualizar">
		</form>
	</center>
	<br>
	<?php endif ?>

	<center>
		<div class="col-md-12">
		<h3>Dirección de envio</h3>
			<label for="pro">Estado:  <?=utils::showStatus($pedido->estado )?></label>
			<label for="pro">Provincia:  <?=$pedido->provincia ?></label>
			<label for="pro">Ciudad:  <?=$pedido->localidad ?></label>
			<label for="pro">Dirección:  <?=$pedido->direccion ?></label>
		</div>
	</center>	
	<center><h3>Datos del pedido</h3>
	<label for="">Numero de pedido : <?=$pedido->id ?></label>
	<label for="">Total a pagar : <?=$pedido->coste ?> mxn</label>
	
	
	
	<h5>Producto(s)</h5>  

	<table>
		<?php while ($producto = $productos->fetch_object()) : ?>
			<tr>
			
			<td>
				<?php if ($producto->imagen !=null) : ?>
						<img src="<?=base_url?>uploads/images/<?=$producto->imagen ?>" class="img_carrito" alt="">
					<?php else: ?>
						<?php echo "No se encontrol la imagen"; ?>
					<?php endif; ?>
			</td>
			<td>
				<a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a> 
			</td>
			<td>
				<?=$producto->precio?>
			</td>
			<td>
				<!-- Al ser un array se entra con esta sintaxis -->
				
				<?=$producto->unidades?>

			</td>

		</tr>
		<?php endwhile; ?>
	</table>
			

	</center>

<?php endif; ?>