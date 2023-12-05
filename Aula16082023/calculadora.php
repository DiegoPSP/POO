<?php
	function adicao($valor1, $valor2){
		return $valor1 + $valor2;
	
	}
	function subtracao($valor1, $valor2){
		return $valor1 - $valor2; 
	}
	function multiplicação($valor1, $valor2){
		return $valor1 * $valor2;
	}
	function divisao($valor1, $valor2){
		if($valor2 == 0){
			echo "A divisao eh: 0";
		else{
			return $valor1 / $valor2;
		}	
	}
?>