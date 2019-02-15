<?php 
	$dt = new DateTime();
	$periodo = new DateInterval("P2D");
	$dt->add($periodo);
	echo $dt->format("d/m/Y H:i:s" )
 ?>