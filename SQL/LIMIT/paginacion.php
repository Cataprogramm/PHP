<!DOCTYPE html>
<html lang="es">
<head>

	<title>Consulta con paginacion</title>
	<meta charset="UTF8">
	<meta name="description" content="Consulta con paginación">
	<meta name="author" content="Catalin Mazarache">
<!--Utilizando la clase del ejemplo del viernes (adjunta) 

Añadir una función para realizar una consulta paginada.

Crear un php donde se muestre la consulta paginada de las tabla task, donde se use la clase ConectaDB.

Mejora: 

Mostrar la consulta paginada añadiendo botones hacia delante y hacia atrás para ver los siguientes y los anteriores.

Tener en cuenta que después del último tendrá que estar deshabilitado el botón siguiente, y en la primera página estará deshabilitado el botón anterior.

Subir: 

clase ConectaDB en conectaDB.php
consulta.php
usuario.sql
Guía para realizar la consulta paginada en mysql:

Utilizar select con limit   https://dev.mysql.com/doc/refman/8.0/en/select.html
Ejemplo:

select * from usuarios limit 0,5;
0 -> desde qué fila quieres consultar.
5 -> cuantas filas quieres consultar.

Para poder hacerlo tendrás primero que saber cuántas filas tiene tu consulta en total: 

select count(*) from usuarios;

Y después mostrar tantas páginas según la cantidad de filas que quieras mostrar.Crear  una página php para insertar 3 usuarios en la tabla dwes.usuarios, utilizando consultas preparadas.

Usar: prepare y bind_param

Mejora:

- Utilizar un usuario limitado.

- Realizar control de errores.

Notas:

Tener en cuenta que nuestra tabla tiene clave primaria, por tanto conviene que borres los usuarios que vas a insertar antes de ejecutar la página. 

Si os resulta más cómo los podéis borrar dentro de la página php.
-->
</head>
<body>

<?php
	include_once('conectaBD2.php');
	//$conexion=new conectaBD2();
	$conn=conectaBD2::singleton();
	//$conexion=null;
	$tamanio=5;
	if(isset($_GET["pagina"])){
		if($_GET["pagina"]==1){
			header("Location: paginacion.php");
		}else{
			$pagina=$_GET["pagina"];
		}
		
	}else{
		$pagina=1;
	}
	$primero=($pagina-1) * $tamanio;
	$sql= "SELECT * FROM tasks";
	$paginacion=$conn->prepare($sql);
	$paginacion->execute(array());
	$num_filas=$paginacion->rowCount();
	$total=ceil($num_filas/$tamanio);
	$resultado=$conexion->query("SELECT * FROM tasks LIMIT $primero,$tamanio")->fetchAll(PDO::FETCH_OBJ);
?>
<table>
<?php
	foreach($resultado as $valores):
?>
	<tr>
		<td><?php echo $valores->task_id;?></td>
		<td><?php echo $valores->subject;?></td>
		<td><?php echo $valores->start_date;?></td>
		<td><?php echo $valores->end_date;?></td>
		<td><?php echo $valores->description;?></td>
	</tr>
	
	<?php
		endforeach;
	?>
	<tr>
		<td>
			<?php
				if($pagina>1){
			
			?>
				<a href="?pagina=<?php if($pagina>1) {
					echo $pagina-1;
				}?>">
				Anterior</a>
			<?php
				}
			
			?>
		
		</td>
		<td>
			<?php
				if($pagina<$total){
			?>
				<a href="?pagina=<?php  if($pagina<$total){
					echo $pagina+1;
				}?>">
				Siguiente</a>
			<?php
				}
			?>
		</td>
	</tr>
	
</body>
</html>