<?php
class conectaBD
{ private $conn = null ;
 public function __construct($database='dwes')
{ $dsn ="mysql:host=localhost;dbname=$database";
try {
$this->conn = new PDO( $dsn, 'root', '' );
} catch ( PDOException $e) { die( "¡Error!: " . $e->getMessage() . "<br/>"); }
 }
public function __destruct() // Cierra conexión asignándole valor null
 { $this->conn = null; }
public function creaTablaTask() // Crea tabla; devuelve TRUE si tiene exito y FALSE en caso contrario
 { $sql = <<<EOSQL
 CREATE TABLE IF NOT EXISTS tasks ( task_id int NOT NULL AUTO_INCREMENT,
	subject varchar(255) DEFAULT NULL,
	start_date date DEFAULT NULL,
	end_date date DEFAULT NULL,
	description varchar(400) DEFAULT NULL,
	PRIMARY KEY (task_id)
);
EOSQL;
if( $this->conn->exec($sql) !== false) return true;
return false;
 }
}

?>