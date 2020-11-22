<!DOCTYPE html>
<html lang="es">
<head>
<!---Crear un array mixto con los datos de los libros:titulo,autor,editorial,año y en_prestamo, y guardarlo
 en un array bidimensional de libros llamado biblioteca. Contar los libros que estan en_prestamo, haciendo un 
 casting a la variable en_prestamo para sumar los libros prestados-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Array mixto de libros,array bidimensional llamado biblioteca,total libros prestados">
	<title>Ejercicio 10</title>
</head>
<body>
	<?php
		$biblioteca=array(
		"Libro_1" => array(
			'titulo' => 'primer_libro',
			'autor' => 'Juan',
			'editorial' => 'Santillana',
			'anio' => 2020,
			'en_prestamo' => true),
		"Libro_2" => array(
			'titulo' => 'segundo_libro',
			'autor' => 'Pepe',
			'editorial' => 'Vives',
			'anio' => 2017,
			'en_prestamo' => false),
		"Libro_3" => array(
			'titulo' => 'tercer_libro',
			'autor' => 'Carlos',
			'editorial' => 'Bruño',
			'anio' => 2018,
			'en_prestamo' => true)
);
	echo ($biblioteca["Libro_1"] ['en_prestamo'] . "<br>");
	echo ($biblioteca["Libro_2"] ['en_prestamo'] . "<br>");
	echo ($biblioteca["Libro_3"] ['en_prestamo'] . "<br>");
	echo "---------------------- <br>";
	$contador_1= (int)($biblioteca["Libro_1"]['en_prestamo'] . "<br>");
	echo $contador_1 . "<br>";
	$contador_2= (int)($biblioteca["Libro_2"]['en_prestamo'] . "<br>");
	echo $contador_2 . "<br>";
	$contador_3= (int)($biblioteca["Libro_3"]['en_prestamo'] . "<br>");
	echo $contador_3 . "<br>";
	$total_libros_prestados=$contador_1 + $contador_2 + $contador_3;
	echo "El total de libros es " . $total_libros_prestados;
	//echo count($biblioteca ['en_prestamo']);
		
	?>
</body>
</html>
	