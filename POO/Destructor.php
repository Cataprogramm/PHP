<?php
class ClaseA {
	function __construct() { $this->name="claseA"; }
	function __destruct() { print " destruyendo … " . $this->name .'<br>' ; }
 }
 
class ClaseA1 extends ClaseA {
	function __construct() { 
		parent::__construct();
		$this->email = $this->name. "@gmail.com";
	}
	function __destruct() {
		parent::__destruct();
		print " destruyendo … " . $this->email .'<br>' ;
	}
 }
$unA= new ClaseA();
$unA1= new ClaseA1();
?>