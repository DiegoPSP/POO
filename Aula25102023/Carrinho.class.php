<?php
class Carrinho{
	private $cod, $produto, $Qtd, $subtotal, $venda;
	
	function __construct($cod, $produto, $Qtd, $venda){
		$this->cod = $cod;
		$this->produto = $produto;
		$this->Qtd = $Qtd;
		$this->subtotal = $produto->getV_unit() * $Qtd;
		$this->venda = $venda;	
	}
	function getCod(){
		return $this->cod;
	}
	function setCod($cod){
		$this->cod = $cod;
	}
	function getProduto(){
		return $this->produto;
	}
	function setProduto($produto){
		$this->produto = $produto;
	}
	function getQtd(){
		return $this->Qtd;
	}
	function setQtd($qtd){
		$this->qtd = $qtd;
	}
	function getSubtotal(){
		return $this->subtotal;
	}
	function setSubtotal($subtotal){
		$this->subtotal = $subtotal;
	}
	function getVenda(){
		return $this->venda;
	}
	function setVenda($venda){
		$this->venda = $venda;
	}
}

?>