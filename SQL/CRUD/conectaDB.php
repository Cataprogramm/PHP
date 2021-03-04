
<?php
include_once 'funciones.php';

class conectaDB{ 
	private $conn = null ;
	private static $instancia;
	private function __construct($database="dwes"){ 
	$dsn ="mysql:host=localhost;dbname=$database" ;
	try {
		$this->conn = new PDO( $dsn, 'alumno', '1234' );
		} catch ( PDOException $e) { 
		die( "¡Error!: " . $e->getMessage() . "<br/>"); 
		}
	}
	 
	public function __destruct() // Cierra conexión asignándole valor null
	 { $this->conn = null; }

	public static function singleton() //método singleton que crea instancia sí no está creada
	 { if (!isset(self::$instancia)) {//self hace referencia a la propia clase,parent a la clase padre
	 $miclase = __CLASS__;
	 
	 self::$instancia = new $miclase($database);
	 }
	 return self::$instancia;
	 }
	 
	 public function __clone() // Evita que el objeto se pueda clonar
		{
		 trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
		}



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
 
 public function insertaFila($nombre,$start_date,$end_date,$description) // Prepara y ejecuta consulta
{
 $datos=array(':par2'=>$nombre,':par3'=>$start_date, ':par4'=>$end_date, ':par5'=>$description);
 $sql = ' INSERT INTO carreras (nombre,start_date,end_date,description)
 VALUES (:par2 , :par3, :par4 , :par5) ' ;
 $q = $this->conn->prepare($sql);
 $q->bindParam(':par2',$nombre,PDO::PARAM_STR,12);
 $q->bindParam(':par3',$start_date,PDO::PARAM_STR,12);
 $q->bindParam(':par4',$end_date,PDO::PARAM_STR,12);
 $q->bindParam(':par5',$description,PDO::PARAM_STR,12);
 return $q->execute();
 }
 

public function cambiaSubject($carreras_id,$nombre) // Prepara y ejecuta consulta
{
 $datos=array(':par1'=>$carreras_id, ':par2'=>$nombre);
 $sql = ' UPDATE carreras SET nombre= :par2 WHERE carreras_id=:par1 ' ;
 $q = $this->conn->prepare($sql);
 return $q->execute($datos);
 }
public function borrarId($carreras_id) // Prepara y ejecuta consulta
{
 $datos=array(':par1'=>$carreras_id);
 $sql = ' DELETE FROM carreras WHERE id=:par1 ' ;
 $q = $this->conn->prepare($sql);
 return $q->execute($datos);
 }
 
 
 public function consultaCarreras() // Ejecuta consulta y devuelve array de resultados o FALSE sí falla ejecución
	
	{
		$orden = "select count(*) from carreras";
		try { $q = $this->conn->query($orden);
				$filas=array();
				$q->setFetchMode(PDO::FETCH_OBJ);
				while ( $r = $q->fetch() )
					$filas[]=$r;
				return $filas;
		} catch ( PDOException $e) {
				echo ( "¡Error! al ejecutar consulta: " . $e->getMessage() . "<br/>");
				return false; 
		}
	}
}

?>