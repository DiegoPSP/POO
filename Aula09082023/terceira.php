<?php
/*
//Operadores de atribuição
$var = 0;
$var += 5; #equivalente a $var = $var + 5;
$var -= 5; #equivalente a $var = $var - 5;
$var *= 5; #equivalente a $var = $var * 5;
$var /= 5; #equivalente a $var = $var / 5;
echo $var;

echo "<br/>";

$a = 0;
echo ++$a; #pré encremento;
echo "<br/>";
echo $a++; #pós encremento;
echo "<br/>";
echo --$a; #pré encremento;
echo "<br/>";
echo $a--; #pós encremento;
echo "<br/>";
echo $a;
*/

/*
$media = 6;

	if ($media >= 7){
		echo "O aluno está aprovado!";
	}else if($media < 7 and $media >5){
		echo "O aluno deverá fazer recuperação...";
	}
	else{
		echo "O aluno está reprovado!";
	}
*/
$contM = 0;
$contF = 0;
$sexo = array('M', 'F','M', 'F','M', 'F','M', 'F','M', 'F');
	
	foreach($sexo as $qualquer){
		if($qualquer == 'M'){
			$contM++;
		}else{
			$contF++;
		}
	}
	echo "O vetor tem $contM homens";
	echo "<br/>";
	echo "O vetor tem $contF mulheres";	
?>