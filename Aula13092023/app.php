<?php
include_once("contaCorrente.class.php");

$diego = new contaCorrente(12929, 2000, 1000);
$diego->sacar(2000);
$diego->depositar(500);
$diego->consultarSaldoTotal();

?>