<?php
class ContaCorrente{
	private $cpf;
	private $nome;
	public $email;
	private $nroConta;
	private $saldo = 00;
	
	
	function __construct($vetor){
        $this->cpf = $vetor["cpf"];
        $this->nome = $vetor["nome"];
		$this->email = $vetor["email"];
		$this->nroConta = $vetor["nroConta"];
		
	}
	

	function exibe_dados(){
		echo "<fieldset>
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					<div>
						<label>Email:</label> ".$this->email."
					</div>
					<div>
						<label>CPF:</label> ".$this->cpf."
					</div>
					<div>	
						<label>numero conta:</label> ".$this->nroConta."
					</div>
					<div>	
						<label>saldo:R$</label> ".$this->saldo."
					</div>
			  ";
	}
	
	function exibe_saldo(){
		echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->email."</td>
				<td>".$this->cpf."</td>
				<td>".$this->nroConta."</td>
				<td>".$this->saldo."</td>
			  ";
	}
	
    public function depositar($valorDeposito){
		$this->saldo = $this->saldo + $valorDeposito;
	}

	
	public function sacar($valorSaque){
		$this->saldo = $this->saldo - $valorSaque;
	}

}
?>