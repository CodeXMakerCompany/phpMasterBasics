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
		<nav id="menu">
			<ul>
				<li>
					<a href="index.php">Inicio</a>
				</li>
				<li>
					<a href="index.php">Categoria 1</a>
				</li>
				<li>
					<a href="index.php">Categhoria 2</a>
				</li>
				<li>
					<a href="index.php">Categoria 3</a>
				</li>
				<li>
					<a href="index.php">Categoria 4</a>
				</li>
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
			<!-- BARRA LATERAL -->
			<aside id="sidebar">
				<div id="login" class="block-aside">
					<h3>Identificate</h3>
					<form action="login.php" method="POST">
						<label for="email">Email</label>
						<input type="email" name="email">

						<label for="password">Contraseña</label>
						<input type="password" name="password">

						<input type="submit" value="Entrar">
					</form>
				</div>	
				<div id="register" class="block-aside">
					<h3>Registrate</h3>
					<form action="registro.php" method="POST">
						<label for="name">Nombre</label>
						<input type="text" name="name">

						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos">

						<label for="email">Email</label>
						<input type="email" name="email">

						<label for="password">Contraseña</label>
						<input type="password" name="password">

						<input type="submit" value="Registrarse">
					</form>
				</div>
			</aside>

			<!-- CAJA PRINCIPAL -->
			<div id="principal">
				
				<h1>Ultimas entradas</h1>

				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab cum, commodi mollitia pariatur odit quod consequatur? Laudantium natus voluptas, iste quam. Necessitatibus laborum vel corporis ab, doloribus aperiam dolores.</p>
					</a>
				</article>

				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab cum, commodi mollitia pariatur odit quod consequatur? Laudantium natus voluptas, iste quam. Necessitatibus laborum vel corporis ab, doloribus aperiam dolores.</p>
					</a>
				</article>

				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab cum, commodi mollitia pariatur odit quod consequatur? Laudantium natus voluptas, iste quam. Necessitatibus laborum vel corporis ab, doloribus aperiam dolores.</p>
					</a>
				</article>

				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab cum, commodi mollitia pariatur odit quod consequatur? Laudantium natus voluptas, iste quam. Necessitatibus laborum vel corporis ab, doloribus aperiam dolores.</p>
					</a>
				</article>

				<div id="ver-todas">
				<a href="">Ver todas las entradas</a>

			</div>


			</div>	
			<div class="clearfix"></div>
		</div>

		
		<!-- PIE DE PÁGINA -->
		<footer id="pie">
			<p>Desarrollado por codexmaker &copy; 2018</p>
		</footer>
		
		
	</body>
		
	

</html>