<?php
include_once("produto.class.php");
class compactDist extends produto{
	private $artista;
	private $gravadora;
	
	function __construct($codigo, $preco, $artista, $gravadora){
		parent::__construct($codigo, $preco);
		$this->artista = $artista;
		$this->gravadora = $gravadora;
	}
	function setArtista($artista){
		$this->artista = $artista;
		//echo "O cantor é ".$this->artista."<br/>";
	}
	function setGravadora($gravadora){
		$this->gravadora = $gravadora;
		//echo"A gravadora desse CD é:".$this->gravadora."<br/>";
	}
	function getArtista(){
		return $this->artista;
		echo "O cantor é ".$this->artista."<br/>";
	}
	function getGravadora(){
		return $this->gravadora;
		echo"A gravadora desse CD é:".$this->gravadora."<br/>";
	}
	function atualizaPreco($preco){
		parent::atualizaPreco($preco);
	}
}
?>