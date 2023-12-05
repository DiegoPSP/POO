<?php
class Disciplina{
	private $nome;
	private $id;
	private $professores = array();
	private $alunosInscritos = array();
	
	public function __construct($id, $nome){
		$this->id = $id;
		$this->nome = $nome;
	}
	public function adicionarProfessor(Professor $professor){
		$this->professores[] = $professor;
	}
	public function adicionarAluno(Aluno $aluno){
		$this->alunosInscritos[] = $aluno;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getId(){
		return $this->professores;
	}
	public function getProfessores(){
		return $this->professores;
	}
	public function getAlunosInscritos(){
		return $this->alunosInscritos;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setProfessores($professores){
		$this->professores = $professores;
	}
	public function setAlunosInscritos($alunosInscritos){
		$this->alunosInscritos = $alunosInscritos;
	}
}
?>