<?php
 class claseA {
 const C1 = 'Un valor constante';
 }
$v1 = 'claseA';
echo $v1::C1 . "<br>"; // A partir de PHP 5.3.0
echo claseA::C1 . "<br>";
echo "1 <br>";
 class claseB {
 protected function F1() {
 echo "F1 en claseB <br>";
 echo "2 <br>";
 }
 }
 class claseC extends claseB {
 public function F1() // Sobrescritura de definición parent
 {
 parent::F1(); // Pero todavía se puede llamar a la función parent
 echo "F1 en claseC";
 }
}
$a=new claseB();
$a->F1();//Me muestra un error indicando que protected no puede ser llamada desde fuera
$x= new claseC();
$x->F1();
?>