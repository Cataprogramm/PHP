<?php
class ConectaDB{ 
	private $conn = null ;
	private static $instancia;
	private function __construct($database="dwes"){ 
	$dsn ="mysql:host=localhost;dbname=$database" ;
	try {
	$this->conn = new PDO( $dsn, 'alumno', '1234' );
	} catch ( PDOException $e) { die( "¡Error!: " . $e->getMessage() . "<br/>"); }
	 }
	 
	public function __destruct() // Cierra conexión asignándole valor null
	 { $this->conn = null; }

	public static function singleton() //método singleton que crea instancia sí no está creada
	 { if (!isset(self::$instancia)) {//self hace referencia a la propia clase,parent a la clase padre
	 $miclase = __CLASS__;
	 self::$instancia = new $miclase();
	 }
	 return self::$instancia;
	 }
	 
	 public function __clone() // Evita que el objeto se pueda clonar
		{
		 trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
		}
		
	public  function consultaCarreras() // Ejecuta consulta y devuelve array de resultados o FALSE sí falla ejecución
	{
		$conn = ConectaDB::singleton();
		$orden = "select * from carreras";
		try { $q = $this->conn->query($orden);
				$filas=array();
				$q->setFetchMode(PDO::FETCH_OBJ);//FETCH_ASSOC
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