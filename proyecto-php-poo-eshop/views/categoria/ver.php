<?php if (isset($categoria)) : ?>
<h1><?=$categoria->nombre?></h1>
		<?php 	if ($productos->num_rows == 0) : ?>
				<p>	No hay productos para mostrar</p>
				<?php 	else: ?>

				<?php while ($product = $productos->fetch_object()) : ?>
	
			    <div class="product">
					<img src="<?=base_url?>uploads/images/<?=$product->imagen ?>" alt="">
					<h2><?=$product->nombre ?></h2>
					<p> <?=$product->precio ?> mxn</p>
					<a href="" class="button">Comprar</a>
				</div>

			<?php endwhile; ?>	
					
		<?php 	endif; ?>	
<?php else: ?>
<h1>La categoria no existe</h1>
<?php endif; ?>