<?php
// ------------------ transferencia.php --------
session_start();
if (!isset($_SESSION['permiso'])){
	die();
} else {
	echo '<form action="transfiere.php" method="POST">';
	
	$token=uniqid();
	$_SESSION['token']=$token;
	echo "<input type='hidden' name='token' value='$token'/>";
	
	echo ' Cantidad: <input type="text" id="id_c" name="c"/><br />';
	echo '<label for="id_destino">Destino:</label>';
	echo '<input type="text" id="id_d" name="d"/><br />';
	echo '<input type="submit" value="Enviar"/>';
	echo '</form>';
}
?>