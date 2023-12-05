<?php
include_once "Disciplina.class.php";
class Professor{
	private $nome;
	private $id;
	private $disciplinasMinistradas = array();
	
	public function __construct($id, $nome){
		$this->id = $id;
		$this->nome = $nome;
	}
	public function Atribuir_Tarefa($aluno, $descricao, Disciplina $disciplina, $id){
		$tarefa = new Tarefa($id, $aluno, $descricao, $disciplina);
        echo "{$this->nome} atribuiu a tarefa: {$tarefa->getDescricao()} para a disciplina de {$disciplina->getNome()}<br /><br />";
        return $tarefa;
	}
	public function MinistrarDisciplina(Disciplina $disciplina){
		$this->disciplinasMinistradas[] = $disciplina;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getId(){
		return $this->id;
	}
	public function getDisciplinasMinistradas(){
		return $this->disciplinasMinistradas;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setId($id){
		$this->id = $id;
	}	
	public function setDisciplinasMinistradas($disciplinasMinistradas){
		$this->disciplinasMinistradas = $disciplinasMinistradas;
	}
}
?>