<h1>Gestion productos</h1>

<a class="button btn-small" href="<?=base_url?>producto/crear">
	Crear producto
</a>

<!-- Alerta Exito&Error agregar producto -->

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">Registro completado correctamente
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
 <?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] !== 'complete'):?>
  	<div class="alert alert-danger alert-dismissible fade show" role="alert">Registro fallido, introduce bien los datos
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
<?php endif; ?>
<?php utils::deleteSession('producto'); ?>

<!-- Alerta Exito&Error eliminado producto -->

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'):?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">Registro borrado correctamente
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
 <?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] !== 'complete'):?>
  	<div class="alert alert-danger alert-dismissible fade show" role="alert">Borrado fallido
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
<?php endif; ?>
<?php utils::deleteSession('delete'); ?>


<table class="table">
  <thead>
  	<tr>
		<th scope="col">Id</th>
		<th scope="col">Name</th>
		<th scope="col">Precio</th>
		<th scope="col">Stock</th>
		<th scope="col">Acciones</th>
	</tr>
<?php while ($pro = $productos->fetch_object()) : ?>
	<tr>
		<th scope="col"><?=$pro->id; ?></th>
		<th scope="col"><?=$pro->nombre; ?></th>
		<th scope="col"><?=$pro->precio; ?></th>
		<th scope="col"><?=$pro->stock; ?></th>
		<td>
			<a href="<?=base_url?>producto/editar&id=<?=$pro->id; ?>" class="button button-gestion">Editar</a>
			<a href="<?=base_url?>producto/eliminar&id=<?=$pro->id; ?>" class="button button-gestion button-eliminar">Eliminar</a>
		</td>
	</tr>
<?php endwhile; ?>     
  </tbody>
</table>	
