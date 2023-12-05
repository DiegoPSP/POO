<?php
abstract class produto{
	private $codigo;
	private $preco;
	
	function __construct ($codigo, $preco){
		$this->codigo = $codigo;
		$this->preco = $preco;
	}
	function setPreco($preco){
		$this->preco = $preco;
	}
	function getCodigo(){
		return $this->codigo;
	}
	function getPreco(){
		return $this->preco;
	}
	function atualizarPreco($preco){
		$this->preco = $preco;
	}
	
	
}

?>