<?php
	
	$age = 5 ;
	
	if ($age < 18) {
		
		echo "alaealine";
	
	} else {
	
		echo "täisealine";
	
	}
	
?>

<br>

<?php

	// eesmärk vanusele vastavalt
	// trükime välja 'palju'
	
	for ( $i = 0; $i < $age ; $i = $i + 1) {
		
		echo $i."palju ";
		
	}
	
	echo "õnne!";
	
?>

<br>

<?php

	echo date("d.m.Y H:i:s l");

?>





