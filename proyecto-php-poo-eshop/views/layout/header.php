<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eshop</title>
	<link rel="stylesheet" href="<?=base_url?>dist/css/styles.css">
	<link rel="stylesheet" href="<?=base_url?>dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url?>dist/css/sweetalert2.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div id="container">
<!-- CABECERA -->
<header id="header">
	<div id="logo">
		<img src="<?=base_url?>dist/assets/img/logo.jpg" class="img-responsive" alt="logo">
		<a href="<?=base_url?>">
			Tienda Online
		</a>
	</div>
</header>


<!-- MENU -->
<?php $categorias = utils::showCategorias(); ?>
<nav id="menu">
	<ul>
		<li>
		<a href="<?=base_url?>">Inicio</a>	
		</li>
		<?php while ($cat = $categorias->fetch_object()) :?>
			<li>
			<a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>	
			</li>
		<?php endwhile; ?>
	</ul>
</nav>


<div id="content">