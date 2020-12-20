<!---
Si tenemos un trait llamado OtroTrait con un método decirHola() y otro trait llamado DecirMundo con el método decirHola()
para hacer referencia al trait lo hacemos de la siguiente forma
DecirMundo::decirHola instead of OtroTrait;
Para llamar al trait OtroTrait
OtroTrait::decirHola as saludo;
-->

<?php
trait Hola{
	public function saludo($nombre){
		echo " Buenas $nombre  <br>";
	}
}

trait Adios{
	public function saludo($nombre){
		echo "Adiós $nombre <br>";
	}
	
}
class Mensajes {
	use Hola,Adios{
		Adios::saludo insteadof Hola;
		Hola::saludo as saludo_de_Hola;

	}	
		public function saludo($nombre){
			echo "Bienvenido $nombre <br>";
		}
		
}
class Notificaciones{
	use Hola{
		saludo as private;
		
	}
}
$objeto_mensajes=new Mensajes;
$objeto_mensajes->saludo("Carlos");//me muestra el mensaje de Adios
$objeto_mensajes->saludo_de_Hola("Juan"); //me muestra el mensaje de Hola

$c=new Notificaciones;
$c->private("Alex");

?>