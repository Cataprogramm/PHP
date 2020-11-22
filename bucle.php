<!DOCTYPE html>
<html lang="es">
<head>
<!---
EJ1. Mostrar 10 primeras las potencias de 2, usando un bucle while.
EJ2. Mostrar números aleatorios del 1 al 100 hasta que encuentres el número 20. Usando un do-while.
EJ3. Muestra las notas de un alumno y su media. Usando un bucle for.
 Tener en cuenta que las notas están en un array numérico.
contador,bandera,acumulador-->
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Bucle">
	<title>Bucle</title>
</head>
<body>
	<?php	
	
	echo 'Las 10 primeras potencias del 2 <br>';
	$numero=0;
	while($numero<10){
		echo (2 ** $numero++ . '<br>');
	}
	echo '<br>';
	?>
	
	<?php
	echo 'Encontrar el número 20 <br>';
	$num_aleatorio;
	do{
		$num_aleatorio=mt_rand(1,100);	
		echo $num_aleatorio . '<br>';
	}while($num_aleatorio!==20);
	echo '<br>';
	?>
	
	<?php
		echo 'Las medias de un alumno <br>';
	$notas=[10,7,5,6];
	$suma ="";
	for($i=0;$i<count($notas);$i++){
		$suma.= $notas[$i].'<br>';
	}
	echo $suma;
	echo 'La media es ' .array_sum($notas)/sizeof($notas);
	?>
</body>
</html>