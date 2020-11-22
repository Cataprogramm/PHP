<?php

$num=3;
function prueba(){
	global $num;
	++$num;
	echo $num;
}
for($i=0;$i<3;$i++){
	prueba();
	echo "<br>";
}
?>