<?php 
	$conecta = new PDO("mysql:dbname=banco_formulario;host=localhost", "root", "orc1@123");
	$query = $conecta->prepare("DELETE FROM tb_pessoas  WHERE id_pessoas = :ID");


	$id = 1;

	
	$query->bindParam(":ID", $id);

	$query->execute();

	echo "dElete  OK";	
 ?>