	
	<?php require_once 'conexion.php'; ?>
	<?php require_once 'helpers.php'; ?>

	<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Blog de programación</title>

		<!-- css -->
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>

	<!-- CABECERA -->
		<header id="cabecera">
			<div id="logo">
			<a href="index.php">
				Blog de programación
			</a>
		</div>

		<!-- MENU -->

		<?php  ?>
		<nav id="menu">
			<ul>
				<li>
					<a href="index.php">Inicio</a>
				</li>
				

				<?php
				$categorias = mostrarCategorias($db);

				if (!empty($categorias)):
				 while ($categoria = mysqli_fetch_assoc($categorias)) : ?>
					
					<li>
						<a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
					</li>
				
				<?php 

						endwhile;
					endif;
					 ?>	

				<li>
					<a href="index.php">Sobre mí</a>
				</li>
				<li>
					<a href="index.php">Contacto</a>
				</li>
			</ul>	
		</nav>

		<div class="clearfix"></div>

		</header>

	<div id="container">	
