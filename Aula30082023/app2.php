<?php
	include_once("Animal.class.php");
	include_once("Leao.class.php");
	include_once("Cavalo.class.php");

	$leao = new Leão;
	$cavalo = new Cavalo;
	
		echo $leao->cacar."<br/>";
		echo $cavalo->fugir."<br/>";
?>