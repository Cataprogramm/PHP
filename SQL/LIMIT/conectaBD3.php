<?php
class conectaBD3{ 
private $conn = null ;
 public function __construct($database="dwes")
{ $dsn ="mysql:host=localhost;dbname=$database" ;
try {
$this->conn = new PDO( $dsn, 'root', '' );
} catch ( PDOException $e) { die( "¡Error!: " . $e->getMessage() . "<br/>"); }
 }
public function __destruct() // Cierra conexión asignándole valor null
 { $this->conn = null; }
/* 
public function insertaFila($subject,$start_date,$end_date,$description) // Prepara y ejecuta consulta
{
 $datos=array(':par2'=>$subject,':par3'=>$start_date, ':par4'=>$end_date, ':par5'=>$description);
 $sql = ' INSERT INTO tasks (subject,start_date,end_date,description)
 VALUES (:par2 , :par3, :par4 , :par5) ' ;
 $q = $this->conn->prepare($sql);
 return $q->execute($datos);
 }
 */
 /*
 public function insertaFila($subject,$start_date,$end_date,$description) // Prepara y ejecuta consulta
{
 $datos=array(':par2'=>$subject,':par3'=>$start_date, ':par4'=>$end_date, ':par5'=>$description);
 $sql = ' INSERT INTO tasks (subject,start_date,end_date,description)
 VALUES (:par2 , :par3, :par4 , :par5) ' ;
 $q = $this->conn->prepare($sql);
 $q->bindParam(':par2',$subject,PDO::PARAM_STR,12);
 $q->bindParam(':par3',$start_date,PDO::PARAM_STR,12);
 $q->bindParam(':par4',$end_date,PDO::PARAM_STR,12);
 $q->bindParam(':par5',$description,PDO::PARAM_STR,12);
 return $q->execute();
 }
 */
 public function insertaFila($start_date,$end_date,$description) // Prepara y ejecuta consulta
{
 $datos=array(':par3'=>$start_date, ':par4'=>$end_date, ':par5'=>$description);
 $sql = ' INSERT INTO tasks (start_date,end_date,description)
 VALUES (:par3, :par4 , :par5) ' ;
 $q = $this->conn->prepare($sql);
 $q->bindParam(':par2',$subject,PDO::PARAM_STR,12);
 $q->bindParam(':par3',$start_date,PDO::PARAM_STR,12);
 $q->bindParam(':par4',$end_date,PDO::PARAM_STR,12);
 $q->bindParam(':par5',$description,PDO::PARAM_STR,12);
 return $q->execute();
 }
 
 
 
public function cambiaSubject($task_id,$subject) // Prepara y ejecuta consulta
{
 $datos=array(':par1'=>$task_id, ':par2'=>$subject);
 $sql = ' UPDATE tasks SET subject= :par2 WHERE task_id=:par1 ' ;
 $q = $this->conn->prepare($sql);
 return $q->execute($datos);
 }
public function borrarId($task_id) // Prepara y ejecuta consulta
{
 $datos=array(':par1'=>$task_id);
 $sql = ' DELETE FROM tasks WHERE task_id=:par1 ' ;
 $q = $this->conn->prepare($sql);
 return $q->execute($datos);
 }
}

?>