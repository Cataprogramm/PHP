<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario_mysql</title>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="formularios">
</head>
<body>
	
	<form method="post" action="formulario.php">
	<label for="name">Nombre: </label>
	<input type="text" id="nombre" name="nombre" required="required" value="<?php if(isset($_POST['nombre']))
		 echo $_POST['nombre'];?>"> <br>
	<label for="password">Contraseña anterior: </label>
	<input type="password" id="pass1" name="pass1" required="required" value="<?php if(isset($_POST['pass1']))
		 echo $_POST['pass1'];?>"> <br>
	<label for="password2">Contraseña nueva: </label>
	<input type="password" id="pass2" name="pass2" required="required" value="<?php if(isset($_POST['pass2']))
		 echo $_POST['pass2'];?>"> <br>
	<label for="password3">Repita la Contraseña nueva: </label>
	<input type="password" id="pass3" name="pass3" required="required" value="<?php if(isset($_POST['pass3']))
		 echo $_POST['pass3'];?>"> <br>
	 <input type="submit" value="Entrar">
	</form>
	
</body>	
</html>