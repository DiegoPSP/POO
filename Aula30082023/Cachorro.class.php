<?php

	class Cachorro{
		public $nome;
		var $idade;
		public $raca;
		var $sexo;
		public $porte;
		
		function __construct($porte, $nome, $idade, $raca, $sexo){
			$this->porte = $porte;
			$this->nome = $nome;
			$this->idade = $idade;
			$this->raca = $raca;
			$this->sexo = $sexo;
		}
			
		function latir(){
			return "Au Au Au!";
		}
		function dormir(){
			return "ZzzzZ ZzzzZ ZzzzZ";
		}
		function comer(){
			return "croc croc croc!";
		}
		function correr(){
			return "tra tra tra";
		}
		
		
	}
?>