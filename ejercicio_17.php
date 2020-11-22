<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Mostrar las imágenes del directorio fotos en una tabla de 4 columnas">
	<title>Ejercicio 17</title>	
<style>
table{
	border: 1px solid black;
	border-collapse: collapse;
}

</style>
</head>
<body>
<!---
17.Hacer un programa que muestre en una tabla de 4 columnas todas las
imágenes de el directorio "fotos". Para ello consulte el manual (en
concreto la referencia de funciones de directorios). Suponga que en el
directorio sólo existen fotos y que ese directorio está en la misma
carpeta que el php.
-->
<?php
	define('FOTOS','./');
	if(!is_dir('FOTOS')){
		die("No existe el directorio " . 'FOTOS');
	}
	if($carpeta=@opendir('FOTOS')){
	
		echo "<table>";
		echo "<tr>";
		$columna=0;
		$entrada=readdir($carpeta);
		while($entrada !== false){
			if($entrada != "." && $entrada != ".."){
				if($columna == 4){
					$columna = 0;
					echo "</tr>";
					echo "<tr>";
				}
			}
		echo "<td>";
		echo " $entrada <br>";
		$entrada=readdir($carpeta);
		//echo "<a href=FOTOS/$carpeta> <img src=FOTOS/$carpeta> </a>";
		echo "</td>";
		}
		 echo "</tr>";
		 echo "</table>";
		 closedir($carpeta);
	}
	else  die("Error al abrir el directorio");
?>

</body>
</html>

