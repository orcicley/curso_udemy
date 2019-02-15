<?php 
	class Clube{
		private $clube;
		private $quantidade_pessoas;
		private $ano_nascimento;

		public function __construct($a ,$b, $c){
			$this->clube = $a;
			$this->quantidade_pessoas = $b;
			$this->ano_nascimento = $c;
		}
		public function__destruct(){
			var_dump("destruir");
		}
	}
	$meuclube = new Clube('Flamengo','40 milhoes','1300');
	var_dump($meuclube);
	unset($meuclube)
 ?>