<?php 

	/*
	Hacer interfax de usuario
	con dos inputs y cuatro botones
	Uno para sumar dividir restar y multiplicar
	 */
	if (!empty($_POST['n1']) && !empty($_POST['n1'])) {
 					$resultado = false;

 				if (isset($_POST['sumar'])) {

 						echo "me llego la info de suma";

 						$resultado = "El resultado es: ".($_POST['n1']+$_POST['n2']);

 					}elseif (isset($_POST['restar'])) {

 						echo "me llego la info de resta";
 						$resultado = "El resultado es: ".($_POST['n1']-$_POST['n2']);

 					}elseif (isset($_POST['dividir'])) {

 						echo "me llego la info de division";
 						$resultado = "El resultado es: ".($_POST['n1']/$_POST['n2']);

 					}elseif (isset($_POST['multiplicar'])) {

 						echo "me llego la info de multiplicacion";
 						$resultado = "El resultado es: ".($_POST['n1']*$_POST['n2']);

 					}	

 				}

 ?>


 <html>
 	<head>
 		<meta>
 		<title>Calculadora básica</title>
 	</head>
 	<body>

 		<form action="ejercicio3.php" method="POST">
 			
 			
 			<label for="n1">Valor1</label>
 			<input type="number" name="n1">

 			<label for="n2">Valor2</label>
 			<input type="number" name="n2">
 			<br><br>

 			<input type="submit" value="sumar" name="sumar">
 			<input type="submit" value="restar" name="restar">
 			<input type="submit" value="dividir" name="dividir">
 			<input type="submit" value="multiplicar" name="multiplicar">
 			<hr>

 			<?php

 			if ($resultado != false) {
 				echo $resultado;
 			}

 			 ?>

 		</form>
 		
 	</body>
 </html>