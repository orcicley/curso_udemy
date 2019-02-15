

<?php 
$conn = new PDO("mysql:dbname=dbconexao;host=localhost", "root", "orc1@123");
$banc = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Jose";
$password = "123456789";

$banc->bindParam(":LOGIN", $login);
$banc->bindParam(":PASSWORD", $password);

$banc->execute();
echo "Valor inserido";
 ?>