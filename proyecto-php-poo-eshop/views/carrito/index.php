<h1>Carrito de la compra</h1>

<table class="table">
  <thead>
  	<tr>
		<th scope="col">Imagen</th>
		<th scope="col">Nombre</th>
		<th scope="col">Precio</th>
		<th scope="col">Unidades</th>
	</tr>
	<?php 
		foreach ($carrito as $indice => $elemento): 
		$producto = $elemento['producto'];	
	?>
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
				
				<?=$elemento['unidades']?>

			</td>

		</tr>
	<?php endforeach; ?>	
  </tbody>
</table>

<div class="total_carrito">
	<div class="row">

		<div class="col-md-6">
			
		</div>
	
		<div class="col-md-6">
			<?php $stats = utils::statsCarrito();  ?>
			<h3>Precio total: <?=$stats['total']?> mxn</h3>
			<a href="<?=base_url?>pedido/hacer" class="button button_pedido">Hacer pedido</a>
		</div>
	
	</div>
</div>