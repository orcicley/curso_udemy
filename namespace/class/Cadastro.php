<?php 
	class Cadastro{
		private $nome;
		private $email;
		private $senha;

		function getNome():string{
			return $this->nome;
		}

		function getEmail():string{
			return $this->email;
		}

		function getSenha():string{
			return $this->senha;
		}

		function setNome($nome){
			$this->nome = $nome;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function setNome($senha){
			$this->senha = $senha;
		}
	}
$cadas = new setNome();
$cadas->setNome("Orcicley Junior");
echo $cadas->getNome();

 ?>