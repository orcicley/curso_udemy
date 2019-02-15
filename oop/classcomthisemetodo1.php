<?php 
		class Pessoa{
			public $nome;
			public function falar(){
				return "Meu nome é ". $this->nome;
			}
		}
		$orc = new Pessoa;
		$orc->nome = "Orcicley Junior";
		 echo $orc->falar()
 ?>