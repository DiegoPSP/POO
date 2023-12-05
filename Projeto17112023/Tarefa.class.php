<?php
include_once "Disciplina.class.php";
include_once "Aluno.class.php";

class Tarefa{
	private $id;
	private $descricao;
	private $disciplina;
	private $aluno;
	
	public function __construct($id, $aluno, $descricao, Disciplina $disciplina){
		$this->id = $id;
		$this->aluno = $aluno;
		$this->descricao = $descricao;
		$this->disciplina = $disciplina;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getDisciplina(){
		return $this->disciplina;
	}
	public function getId(){
		return $this->id;
	}
	public function getAluno(){
		return $this->aluno;
	}
	public function setAluno($aluno){
		$this->aluno = $aluno;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	public function setDisciplina($disciplina){
		$this->disciplina = $disciplina;
	}	
}
?>