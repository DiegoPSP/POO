<?php
class produto{
	private $cod, $nome, $qtd, $v_unit, $fornecedor;
	function __construct($cod, $nome, $qtd, $v_unit, $fornecedor){
		$this->cod = $cod;
		$this->nome = $nome;
		$this->qtd = $qtd;
		$this->v_unit = $v_unit;
		$this->fornecedor = $fornecedor;
	}
	function imprime(){
		echo "Código:".$this->cod."<br />Nome:".$this->nome."Quantidade disponível:".$this->qtd.
		"br /Valor unitário".$this->v_unit."Forcedor:".$this->fornecedor;
	}
	function getCod(){
		return $this->cod;
	}
	function setCod($cod){
		$this->cod = $cod;
	}
	function getNome(){
		return $this->nome;
	}
	function setNome($nome){
		$this->nome = $nome;
	}
	function getQtd(){
		return $this->qtd;
	}
	function setQtd($qtd){
		$this->qtd = $qtd;
	}
	function getV_unit(){
		return $this->v_unit;
	}
	function setV_unit($v_unit){
		$this->v_unit = $v_unit;
	}
	function getFornecedor(){
		return $this->fornecedor;
	}
	function setFornecedor($fornecedor){
		$this->fornecedor = $fornecedor;
	}
}

?>