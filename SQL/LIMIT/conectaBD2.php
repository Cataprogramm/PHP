<!DOCTYPE html>
<html lang="es">
<head>

	<title>Consulta preparada</title>
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
class conectaBD2{ 
	private $conn = null;
	private static $instancia;
	
	
	public function __construct($database="dwes"){ 
		$dsn ="mysql:host=localhost;dbname=$database" ;
	
		
	try {
		$this->conn = new PDO( $dsn, 'root', '' );
	} catch ( PDOException $e) {
		die( "¡Error!: " . $e->getMessage() . "<br/>"); }
	}
	public function __destruct() // Cierra conexión asignándole valor null
	{ 
	$this->conn = null;
	}
	
	public static function singleton() //método singleton que crea instancia sí no está creada
	 { if (!isset(self::$instancia)) {//self hace referencia a la propia clase,parent a la clase padre
	 $miclase = __CLASS__;
	 
	 self::$instancia = new $miclase($database="dwes");
	 }
	 return self::$instancia;
	 }
	 
	 public function __clone() // Evita que el objeto se pueda clonar
	{
	 trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
	

	 
	 
	public function creaTablaTask(){ // Crea tabla; devuelve TRUE si tiene exito y FALSE en caso contrario
		$sql = 'CREATE TABLE IF NOT EXISTS tasks ( task_id int NOT NULL AUTO_INCREMENT,
				subject varchar(255) DEFAULT NULL,
				start_date date DEFAULT NULL,
				end_date date DEFAULT NULL,
				description varchar(400) DEFAULT NULL,
				PRIMARY KEY (task_id)
				);';
		if( $this->conn->exec($sql) !== false) 
			return true;
		return false;
	}

	public function consultaTareas($fila_inicio=0,$num_filas=2){
		 
		 //$datos=array(':par2'=>$task_id,':par3'=>$subject);
		 $sql = "select * from tasks limit $fila_inicio,$num_filas";
		 if(!$sql){
			 die("La sentencia sql no es correcta" . print_r(errorInfo(),true));
		 }else{
		 $q = $this->conn->prepare($sql);
		//return $q->execute();
		$q->execute();
		while($resultado=$q->fetch(PDO::FETCH_ASSOC)){
			/*echo "<pre>";
			print_r($resultado);
			echo "</pre>";*/
			echo '<table>';
			echo '<tr>';
			echo '<td>' .  $resultado['task_id'] . '</td>';
			echo "<td>" .  $resultado['subject'] . '</td>';
			echo "<td>" .  $resultado['start_date'] . '</td>';
			echo "<td>" .  $resultado['end_date'] . '</td>';
			echo "<td>" .  $resultado['description'] . '</td>';
			echo ' </tr>';
			echo '</table>';
			
			}
		}
	}
}
?>

</body>
</html>