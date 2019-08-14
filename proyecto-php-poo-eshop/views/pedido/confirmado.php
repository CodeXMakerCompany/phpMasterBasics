<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
<h1>Pedido se ha confirmado</h1>
<p>Tu pedido ha sido guardado con exito, una vez que realizes el pago sera procesado y enviado!</p>
<br>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-6 col-sm-12">

			<label for="cBancaria">Cuenta bancaria: </label>
			<input type="text" id="url" class="clipboard" value="5204 1653 4452 4099">
			<i class="fa fa-copy">copy</i>
			<span class="mensaje" id="mensaje"></span>

		</div>
		<div class="col-md-6 col-sm-12">

			<label for="cPaypal">Cuenta paypal: </label>
			<input type="text" id="url2" class="clipboard" value="codexmaker12@gmail.com">
			<i class="fa fa-clipboard"></i>
			<span class="mensaje2" id="mensaje2"></span>

		</div>
	</div>
</div>

<br>




<?php if (isset($pedido)) : ?>

	<center><h4>Datos del pedido:</h4>
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
<br>
<h6>Envia tu comprobante de pago o screenshot del pago a este email: <a href="https://mail.google.com/">codexmaker12@gmail.com</a></h6>
<br>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<h2>Tu pedido no ha podido procesarse</h2>
<?php endif; ?>