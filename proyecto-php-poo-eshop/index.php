<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eshop</title>
	<link rel="stylesheet" href="dist/css/styles.css">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>

<div id="container">
<!-- CABECERA -->
<header id="header">
	<div id="logo">
		<img src="dist/assets/img/logo.jpg" class="img-responsive" alt="logo">
		<a href="index.php">
			Tienda Online
		</a>
	</div>
</header>


<!-- MENU -->
<nav id="menu">
	<ul>
		<li>
		<a href="#">Inicio</a>	
		</li>
		<li>
		<a href="#">Cat 1</a>	
		</li>
		<li>
		<a href="#">Cat 2</a>	
		</li>
		<li>
		<a href="#">Cat 3</a>	
		</li>
		<li>
		<a href="#">Cat 4</a>	
		</li>
		<li>
		<a href="#">Cat 5</a>	
		</li>
		<li>
		<a href="#">Cat 6</a>	
		</li>
	</ul>
</nav>

<div id="content">

<!-- BARRA LATERAL -->
<aside id="lateral">
		<div id="login" class="block_aside">
			<h3>Identificarse</h3>
			<form action="" method="POST">
				<label for="">email</label>
				<input type="email" name="email">
				<label for="">password</label>
				<input type="password" name="password">

				<input type="submit" value="enviar">
			</form>
			<ul>
				<li><a href="">Mis pedidos</a></li>
				<li><a href="">Gestionar pedidos</a></li>
				<li><a href="">Gestionar Categorias</a></li>
				<li><a href="">Mis pedidos</a></li>
			</ul>			
		</div>
</aside>

<!-- CONTENIDO CENTRAL -->

<div id="central">
	<h1>Productos destacados</h1>
	<div class="product">
		<img src="dist/assets/img/logo.jpg" alt="">
		<h2>Producto A</h2>
		<p> 300 mxn</p>
		<a href="" class="button">Comprar</a>
	</div>
	<div class="product">
		<img src="dist/assets/img/logo.jpg" alt="">
		<h2>Producto A</h2>
		<p> 300 mxn</p>
		<a href="" class="button">Comprar</a>
	</div>
	<div class="product">
		<img src="dist/assets/img/logo.jpg" alt="">
		<h2>Producto A</h2>
		<p> 300 mxn</p>
		<a href="" class="button">Comprar</a>
	</div>
	<div class="product">
		<img src="dist/assets/img/logo.jpg" alt="">
		<h2>Producto A</h2>
		<p> 300 mxn</p>
		<a href="" class="button">Comprar</a>
	</div>
	<div class="product">
		<img src="dist/assets/img/logo.jpg" alt="">
		<h2>Producto A</h2>
		<p> 300 mxn</p>
		<a href="" class="button">Comprar</a>
	</div>

</div>
	</div>

		<!-- PIE DE PÁGINA -->
		<div class="footer" id="footer">
			<p>Desarrollado por Codexmaker&copy <?=date('Y') ?></p>
		</div>

</div>		

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="dist/js/bootstrap.min.js"></script>	
</body>
</html>

