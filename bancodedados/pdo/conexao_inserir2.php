<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
</head>
<body>
 	<form method="post">

 		<table>
 			<tr>
 				<td>E-email:</td>
 				<td><input type="email" name="email"></td>
 			</tr>

 			<tr>
 				<td>Nome:</td>
 				<td><input type="text" name="nome" ></td>
 			</tr>

 			<tr>
 				<td>Senha:</td>
 				<td><input type="password" name="senha" ></td>
 			</tr>
 		
 		<tr>
 		 <td><input type="submit" name="enviar" value="enviar"></td>
 		</tr>
 		 </table>
 	</form>
</body>
</html>

<?php 
	$conexao = new PDO("mysql:dbname=banco_formulario;host=localhost", "root", "orc1@123");
	$query = $conexao->prepare("INSERT INTO tb_pessoas (email, nome, senha) VALUES (:EMAIL, :NOME, :SENHA)");

	$email = $_POST["email"];
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];

	$query->bindParam(":EMAIL", $email);
	$query->bindParam(":NOME", $nome);
	$query->bindParam(":SENHA", md5($senha));

	$query->execute();

	echo "Os registros Foram Inseridos";
 ?>
