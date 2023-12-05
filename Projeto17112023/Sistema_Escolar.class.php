<?php
class Sistema_Escolar{
	private $id;
	
	public function __construct($id){
		$this->id = $id;
	}
	public function Exibir_Tarefas_Concluidas(Aluno $aluno){
		$nomeAluno = $aluno->getNome();
		$tarefasConcluidas = $aluno->getTarefa_Concluida();
		
		echo "<hr />";
		echo "Tarefas concluídas por {$nomeAluno}:<br />";
		foreach($tarefasConcluidas as $tarefas){
			echo "* {$tarefas->getDescricao()} ({$tarefas->getDisciplina()->getNome()});<br />";
		}
	}
	public function Exibir_Disciplinas_Inscritas(Aluno $aluno){
		$nomeAluno = $aluno->getNome();
		$disciplinasInscritas = $aluno->getDisciplinasInscritas();
		
		echo "<hr />";
		echo "Disciplinas inscritas por {$nomeAluno}:<br />";
		foreach($disciplinasInscritas as $disciplina){
			echo "*{$disciplina->getNome()}<br />";
		}
	}
	public function Exibir_Disciplinas_Ministradas(Professor $professor){
		$nomeProfessor = $professor->getNome();
		$disciplinasMinistradas = $professor->getDisciplinasMinistradas();
		
		echo "<hr />";
		echo "Disciplinas ministradas por {$nomeProfessor}:<br />";
		foreach($disciplinasMinistradas as $disciplina){
			echo "*{$disciplina->getNome()}<br />";
		}
	}
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
}
?>