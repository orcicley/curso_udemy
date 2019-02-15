<?php 
	$con = mysqli_connect("localhost","root","orc1@123","bdconexao");
	if($con->connect_error){
		echo "Erro ".$con->connect_error;
		
	}
	$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
	$stmt->bind_param("ss", $login, $senha);
	$login= "user" ;
	$senha = "12345";
	$stmt->execute();

 ?>	