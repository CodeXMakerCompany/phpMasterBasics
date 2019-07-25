<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Blog de programación</title>

		<!-- css -->
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
		
		<?php 
			require_once 'modelos/cabecera.php';
		 ?>
		
		<div id="container">
			
			<?php 
				require_once 'modelos/lateral.php';
			 ?>

			<!-- CAJA PRINCIPAL -->
			<?php require_once 'modelos/principal.php'; ?>

			<div class="clearfix"></div>
			
		</div>

		
		<!-- PIE DE PÁGINA -->
		<?php require_once 'modelos/footer.php'; ?>
		
		
	</body>
		
	

</html>