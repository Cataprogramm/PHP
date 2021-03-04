<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario</title>
	<meta charset="utf8">
	<meta name="author" content="Catalin Mazarache">
	<meta name="description" content="ataque XSS">
</head>
<style>
.subtitulo{
	text-align: center;
}
.table{
	border: 1px solid collapse;
}
</style>
<body>
<h1>CRUD <span class="subtitulo">CREATE READ UPDATE DELETE</span></h1>

<!---Los atributos de table almacenarlos en style-->
	<table >
		<tr>
			<td class="primera">Id</td>
			<td class="primera">Nombre</td>
			<td class="primera">Start date</td>
			<td class="primera">End date</td>
			<td class="primera">Description</td>
			<td class="espacio">&nbsp;</td>
			<td class="espacio">&nbsp;</td>
			<td class="espacio">&nbsp;</td>
			<td class="espacio">&nbsp;</td>
		</tr>	
		
		
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			
			
			<td class="boton"><input type="button" name="borrar" id="borrar" value="Borrar"></td>
			<td class="boton"><input type="button" name="actualizar" id="actualizar" value="Actualizar"></td>
		</tr>
		<tr>
		<td></td>
			<td><input type="text" name="id" size="10" class="centrado"></td>
			<td><input type="text" name="nombre" size="10" class="centrado"></td>
			<td><input type="text" name="start_date" size="10" class="centrado"></td>
			<td><input type="text" name="end_date" size="10" class="centrado"></td>
			<td><input type="text" name="description" size="10" class="centrado"></td>
			<td class="boton"><input type="submit" name="insertar" id="insertar" value="Insertar"></td>
		</table>

<!--
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Nombre:<input type="text" name="nombre"><br>
<input type="submit" name="enviar"><br>
</form>
-->

<?php
include_once("conectaDB.php");

$conexion=$base->query("");

$registros=$conexion->fetchAll(PDO::FETCH_OBJ);

/*
include_once('funciones.php');
	if(!empty($_POST['nombre'])){
		
		echo "Datos recibidos <br>";
		echo filtrado($_POST['nombre']);
		
	}
	else{
		echo "Escribe el nombre <br>";
	}
*/

?>
</body>
</html>
