<?php
class Aluno{
	private $nome;
	private $id;
	private $tarefasConcluidas = array();
	private $disciplinasInscritas = array ();
	
	public function __construct($id, $nome){
		$this->id = $id;
		$this->nome = $nome;
	}
	public function Resolver_Tarefa(Tarefa $tarefa){
		$this->tarefasConcluidas[] = $tarefa;
		echo "<hr />";
        echo "{$this->nome} resolveu a tarefa: {$tarefa->getDescricao()}.<br />";
	}
	public function InscreverDisciplina(Disciplina $disciplina){
		$this->disciplinasInscritas[] = $disciplina;
		echo "<hr />";
		echo "{$this->nome} se inscreveu na disciplina: {$disciplina->getNome()}.<br />";
	}
	public function getNome(){
		return $this->nome;
	}
	public function getId(){
		return $this->id;
	}
	public function getTarefa_Concluida(){
		return $this->tarefasConcluidas;
	}
	public function getDisciplinasInscritas(){
		return $this->disciplinasInscritas;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setTarefasConcluidas($tarefasConcluidas){
		$this->tarefasConcluidas = $tarefasConcluidas;
	}
	public function setDisciplinasInscritas($disciplinasInscritas){
		$this->disciplinasInscritas = $disciplinasInscritas;
	}
}
?>