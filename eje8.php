<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title>ejercicio 8</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="problema">
	<h1>Ejercicio #7</h1>
	<p>	
		En matemáticas, la sucesión de Fibonacci (a veces mal llamada serie de
		Fibonacci) es la siguiente sucesión infinita de números naturales:
		0,1,1,2,3,5,8,13,21,34,55,89,144,233,377, La sucesión comienza con los
		números 0 y 1, y a partir de estos, «cada término es la suma de los dos
		anteriores», es la relación de recurrencia que la define. cree un script en php que
		genere la sucesión de Fibonacci desde 0 hasta 1000.
	</p>
	</div>
	<div class="solucion">
	<?php
	$a=0;
	$b=1;

	while ( $b<= 1000) {
		$b=$b+$a;
	        $a=$b-$a;

	       echo $a.','; 
	}





	?>
	</div>
	<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>