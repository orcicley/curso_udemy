

<!DOCTYPE html>
<html>
<head>
	<title>Formulario dinâmico</title>
	<meta charset="utf-8">
</head>
<body>
<table>
<form>
	<tr>
		<td>Nome:</td>
		<td><input type="" name="nome"></td>
	</tr>

	<tr>
		<td>Sobrenome:</td>
		<td><input type="" name="sobrenome"></td>
	</tr>

	<tr>
		<td><input type="submit" name="" value="enviar"></td>
		
		<td></td>
	</tr>
</form>
</table>
</body>
</html>
<?php 
	$conexao = new PDO("mysql:dbname=banco_formulario2;host=localhost", "root", "orc1@123");
	$query = $conexao->prepare("INSERT INTO tb_usuarios(nome, sobrenome) VALUES (:NOME, :SOBRENOME)");

	$nome = $_GET["nome"];
	$sobrenome = $_GET["sobrenome"];

	$query->bindParam(":NOME", $nome);
	$query->bindParam(":SOBRENOME", $sobrenome);

	$query->execute();
 ?>
 