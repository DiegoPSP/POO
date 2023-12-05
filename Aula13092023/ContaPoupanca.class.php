<?php
include_once ("conta.class.php");
class ContaPoupanca extends conta{
	private rendimento;
	
	function sacar($valor){
		if($valor > 0){
			if($this->saldo >= $valor){
				$this->saldo -= $valor;
				echo "Retirada no valor de R$ $valor efetuada com sucesso,
				seu novo saldo é R$ $this->saldo";
			}else{
				echo "Saldo insuficiente";
		}else{
			echo "Não é possível sacar um valor negativo ou igual a zero";
		}
	}
}

?>