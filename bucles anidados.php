<!DOCTYPE html>
<html lang="es">
<head>
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
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Bucle anidado de contraseñas">
	<title>Bucle anidado</title>
</head>
<body>
<?php
$codigo_error = error_reporting(E_ERROR );
	$mount_arrais = $_GET["mount"];
	$size_arrais = $_GET["size"];
    
	$mi_array = array_pad($ar = [],$mount_arrais,[]);



   if (isset($size_arrais) && isset($mount_arrais)) {
        for ($j=0; $j < $mount_arrais; $j++) { 
            for ($k=0; $k < $size_arrais; $k++) { 
                $mi_array[$j][$k]=chr(mt_rand(35,126));
            }
        }
    }
    echo "<ol>";
    for ($i=0; $i < count($mi_array); $i++) { 
        echo "<li>";
        for ($k=0; $k < count($mi_array[$i]); $k++) { 
            echo $mi_array[$i][$k];
        }
        echo "</li>";
    }
    echo "</ol>";
?>
</body>
</html>

