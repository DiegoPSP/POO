<?php
class Venda{
	private $cod, $data;
	
	function __construct($cod, $data){
		$this->cod = $cod;
		$this->data = $data;
	}
	function getCod(){
		return $this->cod;
	}
	function setCod($cod){
		$this->cod = $cod;
	}
	function getData(){
		return $this->data;
	}
	function setData($data){
		$this->data = $data;
	}
}


?>