<?php 
	$pessoa = array(
		'nome' => 'Orc',
		'idade' => 22
	);
	foreach ($pessoa as &$value) {
		if(gettype($pessoa) === 'integer') $value +=10;
		 echo $value. "<br />";
	}
	print_r($pessoa)

 ?>