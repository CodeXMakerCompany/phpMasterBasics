
	<h1>Algunos de nuestros productos</h1>

	<?php while ($product = $productos->fetch_object()) : ?>
	
	<div class="product">
		<img src="<?=base_url?>uploads/images/<?=$product->imagen ?>" alt="">
		<h2><?=$product->nombre ?></h2>
		<p> <?=$product->precio ?> mxn</p>
		<a href="" class="button">Comprar</a>
	</div>

	<?php endwhile; ?>	

	
