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
	<form action="en_plazo.php" method="get">
	<h1>Funciones de fecha</h1>
	 
	<label for="plazo">Plazo:</label>
	<input type="date" id="plazo" name="plazo">
	
	<input type="submit" value="Comprobar">
	</form>

	
</body>
</html>