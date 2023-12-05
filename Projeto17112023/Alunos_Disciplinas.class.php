<?php
include_once "Aluno.class.php";
include_once "Disciplina.class.php";

class Alunos_Disciplinas{
	private $id;
	private $Aluno_Nome;
	private $Disciplina_Nome;
	
	function __construct($id, $Aluno_Nome, $Disciplina_Nome){
		$this->id = $id;
		$this->Aluno_Nome = $Aluno_Nome;
		$this->Disciplina_Nome = $Disciplina_Nome;
	}
	public function getId(){
		return $this->id;
	}
	public function getAluno_Nome(){
		return $this->Aluno_Nome;
	}
	public function getDisciplina_Nome(){
		return $this->Disciplina_Nome;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setAluno_Nome($Aluno_Nome){
		$this->Aluno_Nome = $Aluno_Nome;
	}
	public function setDisciplina_Nome($Disciplina_Nome){
		$this->Disciplina_Nome = $Disciplina_Nome;
	}	
}
?>