<?php 
	class Carro {
		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){
			return $this->modelo;
		}

		public function setmodelo($modelo){
			$this->modelo = $modelo;
			/*o modelo de this é o objeto. Já o de $modelo é o paremetro*/

		}
		 public function getMotor(){
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}
		public function getAno(){
			return $this->ano;
		}
		public function setAno($ano){
			$this->ano = $ano;
		}
		public function exibir(){
			return array(	
				"modelo" => $this->getModelo(),
				"motor" => $this->getMotor(),
				"ano" => $this->getAno()
			);
		}
	}
	$gol = new Carro();
	$gol->setModelo("Gol GT");
	$gol->setMotor("1.6");
	$gol->setAno("2017");

	print_r($gol->exibir());
	
 ?>