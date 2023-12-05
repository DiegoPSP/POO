<?php
include_once("Fornecedor.class.php");
include_once("Produto.class.php");
include_once("Venda.class.php");
include_once("Carrinho.class.php");

$sadia = new Fornecedor(1, "Sadia", "1025000000101", "33 99994-6658", "Rua: Dos bobo, nº 0, Centro, Virgolândia, MG");

$filedepeito = new Produto(1, "Filé de peito", 100, 18.00, $sadia);

$presunto = new Produto(2, "Presunto", 100, 9.00, $sadia);

$queijo = new Produto(3, "Queijo", 50, 4.50, $sadia);

$produtos = array($filedepeito, $presunto, $queijo);

$venda1 = new Venda(1, "08/11/2023");

$venda2 = new Venda(2, "08/11/2023");

$venda3 = new Venda(3, "27/11/2023");

$vendas = array($venda1, $venda2, $venda3);

$carrinho1 = new Carrinho(1, $produtos[0], 3, $vendas[0]);

$carrinho2 = new Carrinho(2, $produtos[1], 4, $vendas[0]);

$carrinho3 = new Carrinho(3, $produtos[2], 4, $vendas[1]);

$carrinho4 = new Carrinho(4, $produtos[2], 6, $vendas[1]);

$carrinhos = array($carrinho1, $carrinho2, $carrinho3, $carrinho4);

foreach($vendas as $pedido){
	$total = 0;
	echo "<hr />";
	echo "<b>Pedido nº: ".$pedido->getCod()."</b><br />";
	echo "Data: ".$pedido->getdata()."<br />";
	echo "Itens do pedido <br />";
	echo "<hr />";
		foreach ($carrinhos as $item){
			if($item->getVenda()->getCod() == $pedido->getCod()){
				
				echo "O código do carrinho é:".$item->getCod()."<br />";
				echo "Produto:".$item->getProduto()->getNome()."<br />";
				echo "Quantidade:".$item->getqtd()."<br />";
				echo "Sub Total:".$item->getSubtotal()."<br /><br />";
				$total += $item->getSubtotal();
			}
		}
		echo "<br />Total da venda: ".$total."<br />";
	}

?>