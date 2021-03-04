<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta name="author" content="Catalin">
	<meta name="descripcion" content="Index con tabla en html">
<style>	
h1{
	text-align:center;
}
table{
	
}
</style>
	
</head>	

<body>

<?php

	include_once('conexion.php');

	$conexion=$base->query("SELECT * FROM CARRERAS");
	//Array de objetos con sus propiedades
	$registros=$conexion->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST["cr"])){
		
		$nombre=$_POST["nombre"];
		
		$start_date=$_POST["start_date"];
		
		$end_date=$_POST["end_date"];
		
		$sql="INSERT INTO CARRERAS (nombre,start_date,end_date) VALUES (:nombre,:start_date,:end_date)";
		
		$resultado= $base->prepare($sql);
		
		$resultado->execute(array(":nombre" => $nombre , ":start_date" => $start_date, ":end_date" => $end_date));
		
		header("Location:index.php");
		
	}

?>

<h1>CRUD:<span class="subtitulo">CREATE READ UPDATE DELETE</span></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table width="50%" border="1" align="center">
	<tr>
		<td class="primera_fila">Id</td>
		<td class="primera_fila">Nombre</td>
		<td class="primera_fila">Start_Date</td>
		<td class="primera_fila">End_Date</td>
		<td class="sin">&nbsp;</td>
		<td class="sin">&nbsp;</td>
		<td class="sin">&nbsp;</td>
	</tr>
	
	<?php
	foreach($registros as $carrera):
		
		
	?>
	
	<tr>
		<td><?php echo $carrera->id ?></td>
		<td><?php echo $carrera->nombre ?></td>
		<td><?php echo $carrera->start_date ?></td>
		<td><?php echo $carrera->end_date ?></td>
		
		<td class="bot"><a href="borrar.php?id=<?php echo $carrera->id ?>"><input type="button" name="del" id="del" value="Borrar"></a></td>
		<td class="bot"><a href="editar.php?id=<?php echo $carrera->id ?> & nombre=<?php echo $carrera->nombre ?>
		& start_date=<?php echo $carrera->start_date ?> & end_date=<?php echo $carrera->end_date ?>"><input type="button" name="up" id="up" value="Actualizar"></a></td>
	</tr>
	
	
	
	<?php 
	endforeach;
	
	
	?>
	
	
	<tr>
		<td></td>
		<td><input type="text" name="Nom" size="10" class="centrado"></td>
		<td><input type="text" name="Ape" size="10" class="centrado"></td>
		<td><input type="text" name="Dir" size="10" class="centrado"></td>
		<td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td>
	</tr>
</table>	
</form>
	<p>&nbsp;</p>
</body>
</html>