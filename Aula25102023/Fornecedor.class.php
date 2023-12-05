<?php
class Fornecedor{
	private $cod, $nome, $cnpj, $telefone, $endereco;
	
	function __construct($cod, $nome, $cnpj, $telefone, $endereco){
		$this->cod = $cod;
		$this->nome = $nome;
		$this->cnpj = $cnpj;
		$this->telefone = $telefone;
		$this->endereco = $endereco;
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
	function getCNPJ(){
		return $this->cnpj;
	}
	function setCNPJ($cnpj){
		$this->cnpj = $cnpj;
	}
	function getTelefone(){
		return $this->telefone;
	}
	function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	function getEndereco(){
		return $this->endereco;
	}
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
}
?>