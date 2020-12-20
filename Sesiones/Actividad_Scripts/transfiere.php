<?php
// ------------------ transfiere.php --------
session_start();
if (!isset($_SESSION['permiso'])){
	die();
}
	if(!isset($_SESSION['token']) || !isset($_POST['token'])){
		die();
	}
	if($_SESSION['token'] != $_POST['token']){
		die();
		
	}
	unset($_SESSION['token']); //Crucial
	
	
	$cantidad=$_POST['c'];
	$destino=$_POST['d'];
	echo "Enviados $cantidad € a $destino.";
	
?>