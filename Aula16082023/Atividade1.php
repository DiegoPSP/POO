<?php

#strtolower, substr, strtoupper, str_repeat, strlen, str_replace, strpos

function esta($valor, $lista){
	foreach($lista as $valores){
		if (substr($valores, 0, 2) == $valor){
			return 1;
		}
	}
	return 0;
	
}

$lista = array("74 991080093","71 99108092", "81 99102213","33 878787987","35 949156235", "77 965214785", "81 985612375");
$bahia = array("71","73","74", "75","77");
$minas = array("31","32","33","34","35","37","38");
$pernambunco = array("81","87");

$ContBahia = 0;
$ContPer = 0;
$ContMinas = 0;

	foreach($lista as $numeros){
		$ddd = substr($numeros, 0, 2);
	
		if (esta($ddd,$bahia)){
			$ContBahia++;
		}else if (esta($ddd, $minas)){
			$ContMinas++;
		}else if (esta($ddd, $pernambunco)){
			$ContPer++;
		
		}
	}
	

echo "Quantidade de numeros da Bahia: ".$ContBahia."<br/>";
echo "Quantidade de numeros de Minas Gerais: ".$ContMinas."<br/>";
echo "Quantidade de numeros de Pernambunco: ".$ContPer."<br/>";

?>