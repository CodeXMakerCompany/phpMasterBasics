<h1>Carrito de la compra</h1>
<?php if (isset($_SESSION['carrito']) && $_SESSION['carrito'] !=null) : ?>
<table class="table">
  <thead>
  	<tr>
		<th scope="col">Imagen</th>
		<th scope="col">Nombre</th>
		<th scope="col">Precio</th>
		<th scope="col">Unidades</th>
		<th class="col">Eliminar</th>
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
				
				
				<div class="updown-unidades">
					<div class="row">
						<div class="col-md-4">
							<a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button" >-</a>
						</div>
						<div class="col-md-4">
							<?=$elemento['unidades']?>
						</div>
						<div class="col-md-4">
							<a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button" >+</a>
						</div>
					</div>
					
					
				</div>
				

			</td>
			<td>
				<center>
				<div class="col-md-6">
				<a href="<?=base_url?>carrito/remove&index=<?=$indice?>" class="btn btn-danger button" style="size: 50px;">Quitar producto</a>
				</div>
				</center>
			</td>
		</tr>
	<?php endforeach; ?>	
  </tbody>
</table>

<div class="total_carrito">
	<div class="row">

		<div class="col-md-6">
			<a href="<?=base_url?>carrito/delete_all" class="btn btn-danger button button_pedido">Eliminar todo(s)</a>
		</div>
	
		<div class="col-md-6">
			<?php $stats = utils::statsCarrito();  ?>
			<h3>Precio total: <?=$stats['total']?> mxn</h3>
			<a href="<?=base_url?>pedido/hacer" class="button button_pedido">Hacer pedido</a>
		</div>
	
	</div>
</div>
<?php else: ?>
	<p>El carrito esta vacio, añade algun producto</p>
<?php endif; ?>