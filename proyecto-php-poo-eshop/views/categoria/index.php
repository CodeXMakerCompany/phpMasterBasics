<h1>Gestionar categorias</h1>

<a class="button btn-small" href="<?=base_url?>/categoria/crear">
	Crear categoría
</a>

<table class="table">
  <thead>
  	<tr>
		<th scope="col">Id</th>
		<th scope="col">Name</th>
	
	</tr>
<?php while ($cat = $categorias->fetch_object()) : ?>
	<tr>
		<th scope="col"><?=$cat->id; ?></th>
		<th scope="col"><?=$cat->nombre; ?></th>
	
	</tr>
<?php endwhile; ?>     
  </tbody>
</table>	

      
     
