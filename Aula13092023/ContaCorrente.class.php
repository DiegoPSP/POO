<?php
include_once ("conta.class.php");
class ContaCorrente extends conta{
	private $limite_Total ;
	private $limite_Usado;
	
	function __construct($numero, $saldoInicial, $limite){
		parent::__construct($numero, $saldoInicial);
		$this->limite_Total = $limite;
		$this->limite_Usado = 0;
	}
	function consultarSaldoTotal(){
		echo "Seu saldo em conta corrente é de R$".$this->obter_Saldo().", seu limite total é ".$this->limite_Total." 
		e o limite disponível é R$".($this->limite_Total - $this->limite_Usado).", seu saldo total disponível é de 
		R$".($this->consultar_Limite() + $this->obter_Saldo())."";
	}
	function sacar($valor){
		if($valor > 0){
			if($this->obter_Saldo() >= $valor){
				parent::sacar ($valor);
				echo "Retirada no valor de R$$valor efetuada com sucesso, seu novo saldo é R$ ".$this->obter_Saldo()."<br/>";
			}else if($this->obter_Saldo() + $this->consultar_Limite() >= $valor){
				if($this->obter_Saldo() > 0){
					$this->limite_Usado += $valor - $this->obter_Saldo();
					parent::sacar($this->obter_Saldo());	
				}else{
					$this->limite_Usado += $valor;
				}
			}
		}else{
			echo "Não é possível sacar um valor negativo ou igual a zero";
		}
	}
	function depositar($valor){
		if ($valor > 0){
			echo "Você depositou R$$valor<br/>";
			if($this->limite_Usado >= $valor){
				$this->limite_Usado = $valor - $this->$limite_Usado;
			}else{
				parent::depositar($valor - $this->limite_Usado);
				$this->limite_Usado = 0;
			}
		}else{
			echo "Não é possível depositar um negativo ou igual a zero!";
		}
	}
	function consultar_Limite(){
		return $this->limite_Total - $this->limite_Usado;
	}
	function alterar_Limite($novo_Limite){
		$this->limite = $novo_Limite;
	}
}
?>