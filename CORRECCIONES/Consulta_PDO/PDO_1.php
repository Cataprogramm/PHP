<!---
Dada la consulta_pdo.php completarla para que muestre todas las filas que encuentre, hay que usar un bucle.

Subir también el sql de creación del usuario y la asignación de los permisos.
Cambiar el charset desde línea de comandos del mysql: 

SET CHARSET utf8;
--->

<?php
//PASO 1. Conectarnos.
try {
//$con = new PDO('mysql:hosts=localhost;port=3306;dbname=dwes;charset=utf8', 'josemi', '1234', []);
	$con = new PDO('mysql:hosts=localhost;dbname=dwes;charset=utf8', 'josemi', '1234');
//PASO 2. Comprobar la conexión 
} catch (PDOException $e) {
    exit ('Falló la conexión: ' . $e->getMessage());
}

//PASO 3. Realizar la consulta
if(empty($_GET['usuario'])){
	exit("Debe introducir el usuario");
}
$usuario = $con->quote($_GET['usuario']. '%');
$sentencia = "select * from dwes.tabla_usuarios where login like $usuario ";   
//echo $sentencia . '<br>';
$consulta = $con->query($sentencia); //PDOStatement
//var_dump($consulta);

//PASO 4. Procesar la consulta: Obtener resultados
//$consulta es PDOStatement
	while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
		echo "<pre>";
		print_r($fila);
		echo "</pre>"; 
}
//PASO 5. Cerrar la conexión
unset($con);

?>