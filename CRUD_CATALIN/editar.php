<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf8">
	<title>Editar</title>
<style>
h1{
	text-align:center;
}
table,tr,td{
	width: 25%;
	border: 1px solid black;
	text-align: center;
}
</style>
	
	
</head>

<body>

	<h1>Actualizar</h1>
	
	<?php
	
	include_once('conexion.php');

	if(!isset($_POST["bot_actualizar"])){
		
		$id = $_GET["id"];
		
		$nombre= $_GET["nombre"];
		
		$start_date=$_GET["start_date"];
		
		$end_date=$_GET["end_date"];
		
	}else{
		$id = $_POST["id"];

		$nombre= $_POST["nombre"];

		$start_date=$_POST["start_date"];
		
		$end_date=$_POST["end_date"];
		
		$sql="UPDATE CARRERAS SET nombre=:nombre,start_date=:start_date,end_date=:end_date WHERE id=:id";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":id" => $id,":nombre" => $nombre, ":start_date" => $start_date, ":end_date" => $end_date));

		header("Location:index.php");
	}
	?>
	
	<p>
	</p>
	<p>&nbsp;</p>
	
	<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table width="25%" border="0" align="center">
		<tr>
			<td>Id</td>
			<td><label for="id"></label>
			<input type="hidden" name="id" id="id" value="<?php echo $id; ?>"></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><label for="nombre"></label>
			<input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>"></td>
		</tr>
		<tr>
			<td>Start_date</td>
			<td><label for="start_date"></label>
			<input type="text" name="start_date" id="start_date" value="<?php echo $start_date; ?>"></td>
		</tr>
		<tr>
			<td>End_date</td>
			<td><label for="end_date"></label>
			<input type="text" name="end_date" id="end_date" value="<?php echo $end_date; ?>"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
		</tr>
		</table>
	</form>
	<p>&nbsp;</p>
</body>
</html>




