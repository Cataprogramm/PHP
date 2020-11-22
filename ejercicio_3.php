<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="author" content="Catalin">
<meta name="description" content="Mostrar porcentaje de ninios y ninias">
<title>Ejercicio 3</title>
</head>
<body>

<?php	
	
	echo "Ejercicio 3,tema 1 porcentaje de niños y niñas en el colegio <br>";
	$num_niños=30;
	$num_niñas=25;
	$total=$num_niños + $num_niñas;
	$porcentaje_niños =($num_niños*100)/$total;
	$porcentaje_niñas =($num_niñas*100)/$total;
	echo "El porcentaje de niños es $porcentaje_niños % <br>";
	echo "El porcentaje de niñas es $porcentaje_niñas % <br>";
?>
</body>
</html>