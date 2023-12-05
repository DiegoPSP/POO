<?php
/*
#declarando uma variavel global;
	$total_somado;
#declarando uma funcao em PHP com retorno;
		function soma($valor1, $valor2){
		#acessando uma variavel global;
		global $total_somado;
		#atribuindo à variavel global o valor da soma mais o seu valor 
		$total_somado += $valor1 + $valor2;
		}
*/

/*
	function contador(){
		static $contador;
		return ++$contador;
	}
#imprimindo os retornos do método contador;
echo "O valor do contador é: ".contador()."<br/>";
echo "O valor do contador é: ".contador()."<br/>";
echo "O valor do contador é: ".contador()."<br/>";
*/
		$mensagem = 'oi!';
		$mensagem2 = 'Como cê tá?';
		
		echo substr(strtoupper($mensagem), 0, 7);
		echo "<br/>$mensagem2";
		
		echo substr(strtoupper($mensagem), 0, 7);
		echo "<br/>";
		echo str_repeat(($mensagem), 1);
		echo "<br/>";
		
?>