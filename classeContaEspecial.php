<?php

	include "classeContaCorrente.php";

	class ContaEspecial extends ContaCorrente{		
		private $limite;
		private $sacar;

		private function __construct($vetor){
			parent::__construct($vetor);
			$this->limite = $vetor["limite"];
			$this->sacar = $vetor["sacar"];
		}	

		function exibe(){
			
			$this->exibe_dados();
			
			echo    "<div>	
						<label>Limite:</label> ".$this->limite."
					</div>						
					<div>	
						<label>Sacar:</label> ".$this->sacar."
					</div>						
			  </fieldset>";
		}
		
		function exibe_tr(){
			$this->exibe_saldo();
			echo "<td>".$this->limite."</td>
				<td>".$this->sacar."</td>
				</tr>";
		}
	}
	

?>