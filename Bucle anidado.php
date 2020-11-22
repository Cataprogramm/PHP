<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Bucle anidado de contrasenias">
	<title>Bucle anidado</title>
</head>
<body>
<!---Ejercicio.
Usar Bucles anidados: 
Rellenar un array con 10 caracteres: letras, números y símbolos.
Solicitar por get, la cantidad de contraseñas, y el tamaño que tienen que tener.
Generar de forma aleatoria las contraseñas. 
Mostrarlas en formato de lista ordenada.
Salida: 

Si nos indican 5 contraseñas de 8 caracteres, la salida sería.
4kjoh978
ljoih890
kjdhfuih
ldsio987
sd4feed0
-->
<?php
	$codigo_error = error_reporting(E_ERROR );
	$caracteres=['1','2','3','4','5','a','b','c','d','e'];
	print_r ($caracteres);
	echo "<br>";
	if (isset($_GET["cantidad"]) && isset($_GET["tamanio"])) {
	$cantidad = $_GET["cantidad"];
	$tamanio = $_GET["tamanio"];
	
	}else{
		echo "Introduce caracteres <br>";
	}
	
    echo "<ol>";
    for ($i=0; $i < $cantidad; $i++) { 
        echo "<li>";
        for ($j=0; $j < $tamanio; $j++) { 
            echo $caracteres[mt_rand(0,9)];
        }
        echo "</li>";
    }
    echo "</ol>";
?>
</body>
</html>


	
