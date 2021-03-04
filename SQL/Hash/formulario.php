<!DOCTYPE html>
<html lang="es">
<head>

	<title>Formulario de usuario</title>
	<meta charset="UTF8">
	<meta name="description" content="Acceso de usuario">
	<meta name="author" content="Catalin Mazarache">
<!--
Crear un formulario con dos campos: login y clave.

Si el usuario es válido entrar en una página que le de la bienvenida.
Si el usuario no es válido indicar "Acceso no autorizado".
Nota: Para verificar el usuario tendremos que consultar en la tabla el login y  el resultado de aplicar el algoritmo hash a la clave que nos indiquen en el formulario.

Datos: 

En la tabla de usuarios tendremos que guardar el login y la clave_hash.
Podemos usar las funciones mysql: md5 o sha1 para realizar la inserción de los datos.
más información en  enlace
Subir: 

La creación de la tabla de usuarios: ususarios.sql.
Los permisos del usuario de acceso a la base de datos: permisos.sql.
Los php que usemos para el acceso de usuario, la bienvenida y el acceso denegado.
-->
</head>
<body>


<?php






?>

<form action="resultado.php" method="POST">
	<label for="login">Login:</label>
	<input type="text" name="login" placeholder="Nombre" required>
	
	<label for="clave">Clave:</label>
	<input type="password" name="clave" placeholder="Contraseña" required>
	
	<input type="submit" value="Enviar">
</form>


</body>
</html>