<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Funciones fecha">
	<title>Funciones fecha</title>	
<style>

</style>	
</head>
<body>
<!---Crear un formulario donde se recibe una fecha, y hay que indicar si la fecha está en plazo o no.
La fecha estará en plazo si aún no ha pasado.
Si es el día de hoy o anteriores entonces no estará en plazo. -->
	<?php
	
	
	if(isset($_GET["plazo"])){
		$plazo=$_GET["plazo"];
		echo $plazo . "<br>";
		if($_GET["plazo"] == checkdate(2,29,2020)){
		//$plazo=checkdate(2,29,2020) ? 'está en plazo' : 'no está en plazo';
			echo "está en el formato adecuado" . "<br>";
			$fecha_actual=date("Y-m-d");
			echo "Hoy es " . $fecha_actual . "<br>";
			if($fecha_actual <= $plazo){
				echo "no está en plazo";
			}
			else{
				echo " está en plazo";
			}
		}
		else{
			echo "no está en el formato adecuado";
		}
	}
	?>
	
</body>
</html>