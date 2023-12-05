<?php
include_once("Cachorro.class.php");

	$scooby = new Cachorro("médio", "Scooby-Doo", "8", "Dogue Alemão", "M");
	
	/*$scooby-> nome = "Scooby-Doo";
	$scooby-> idade = 7;
	$scooby-> raca = "Dogue Alemão";
	$scooby-> sexo = "M";
	*/
		echo $scooby->correr()."<br/>";
		echo $scooby->comer()."<br/>";
		echo $scooby->dormir()."<br/>";
	
		echo "Olá, meu nome é $scooby->nome
		, tenho $scooby->idade
		 anos e sou da raça $scooby->raca";
?>