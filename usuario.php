<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Usuario">
	<title>Usuario</title>	
<style>
h1{
margin: auto;
text-align: center;
}
</style>	
	
</head>
<body>
<!---Crea un archivo HTML que contenga un formulario con campos para introducir el usuario y la pasword, y un
botón de envio. Establece el action del formulario al archivo MENSAJES.PHP y configura el método de envio como
GET. -->
	<form action="mensajes.php" method="get">
	<h1>Identificación de usuario</h1>
	
	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre"><br><br>
	
	<label for="password">Password:</label>
	<input type="password" name="password"><br><br>
	
	<input type="submit" value="Entrar">
	</form>

	
</body>
</html>