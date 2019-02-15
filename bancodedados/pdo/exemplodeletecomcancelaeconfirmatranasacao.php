<?php 
	$conecta = new PDO("mysql:dbname=banco_formulario;host=localhost", "root", "orc1@123");
	$conecta->beginTransaction();
	$query = $conecta->prepare("DELETE FROM tb_pessoas  WHERE id_pessoas = ?");


	$id = 2;

	


	$query->execute(array($id));
	$conecta->commit();
	/*$conecta->rollback();*/

	echo "Delete não foi acionado";	
 ?>