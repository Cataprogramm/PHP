<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Carreras</title>
	<meta content="author" name="Catalin Mazarache">
	<meta content="description" name="MVC Vista">
</head>
<body>
<h1>Listado de Carreras</h1>
<table>
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>START_DATE</th>
<th>END_DATE</th>
</tr>
<?php foreach($filas as $fila): ?>
<tr>

<td><?php echo $fila->id;?></td>
<td><?php echo $fila->nombre;?></td>
<td><?php echo $fila->start_date;?></td>
<td><?php echo $fila->end_date;?></td>




<!--<td><?php //echo $fila['id'];?></td>
<td><?php //echo $fila['nombre'];?></td>
<td><?php //echo $fila['start_date'];?></td>
<td><?php //echo $fila['end_date'];?></td>
<td><?php //echo $fila['description'];?></td>-->
</tr>
<?php endforeach; ?>
</table>
</body>
</html>