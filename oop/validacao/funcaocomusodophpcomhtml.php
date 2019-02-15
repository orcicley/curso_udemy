
<!DOCTYPE html>
<html>
<head>
	<title>Documento com php</title>
	<meta charset="utf-8">
	<style type="text/css">
		tr{
			border:1px solid;
		}
	</style>
</head>
<body>
	<form>
		<label for="nome1">
			Nome: <input type="text" name="nome" id="nome1">
		</label>

		<label for="idade1">
			Idade: <input type="number" name="idade" id="idade1">
		</label>

		<label for="enviar">
			 <input type="submit">
		</label>
		
	</form>
</body>
</html>
<?php 
	$nome = $_GET['nome'];
	$idade = $_GET['idade'];

	if(isset($nome) && ($idade) == TRUE){
		"<html>";
		"<table>";
		echo "<tr>". "Nome: ".$nome ."</tr>";
		echo "<tr>"."Idade: ".$idade ."</tr>";
		"</table>";
		"</html>";
	}


 ?>