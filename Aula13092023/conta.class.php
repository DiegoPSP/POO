<?php

abstract class Conta{
	private $numero;
	private $saldo;
	
	function __construct($numero, $saldo_Inicial){
		$this->numero = $numero;
		$this->saldo = $saldo_Inicial;
	}
	function sacar($valor){
		if($valor > 0){
			if($this->saldo >= $valor){
				$this->saldo -= $valor;
			}else{
				echo "Saldo insuficiente";
			}
		}else{
			echo "Não é possível sacar um valor negativo ou igual a zero";
		}
	}
	function depositar($valor){
		if($valor > 0){
			$this->saldo += $valor;
		}else{
			echo "Não é possível depositar um valor negativo ou igual a zero";
		}
	}
	function obter_Saldo(){
		return $this->saldo;
	}
	function obter_Numero(){
		return $this->numero;
	}
}

?>