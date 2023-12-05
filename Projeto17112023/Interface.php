<?php
include_once "Aluno.class.php";
include_once "Tarefa.class.php";
include_once "Disciplina.class.php";
include_once "Professor.class.php";
include_once "Sistema_Escolar.class.php";
include_once "Alunos_Disciplinas.class.php";

$professor1 = new Professor(400, "Prof. Cleison");
$professor2 = new Professor(401, "Prof. Alaécio");

$disciplina1 = new Disciplina(300, "POO");
$disciplina1->adicionarProfessor($professor1);
$professor1->MinistrarDisciplina($disciplina1);

$disciplina2 = new Disciplina(301, "PPP III");
$disciplina2->adicionarProfessor($professor2);
$professor2->MinistrarDisciplina($disciplina2);

$aluno1 = new Aluno(001, "Diego");
$aluno2 = new Aluno(002, "Pedro");

$aluno1->InscreverDisciplina($disciplina1);
$aluno1->InscreverDisciplina($disciplina2);
$aluno2->InscreverDisciplina($disciplina1);

$tarefa1 = $professor1->Atribuir_Tarefa($aluno1, "Criar um modelo em UML com 5 classes e fazer o código em php de acordo com esse modelo.", $disciplina1, 200);
$tarefa2 = $professor2->Atribuir_Tarefa($aluno1, "Realizar uma mesa redonda sobre racismo.", $disciplina2, 201);


$aluno1->Resolver_Tarefa($tarefa1);
$aluno1->Resolver_Tarefa($tarefa2);

$aluno2->Resolver_Tarefa($tarefa1);

$sistema_Escolar = new Sistema_Escolar(500);
$sistema_Escolar->Exibir_Tarefas_Concluidas($aluno1);
$sistema_Escolar->Exibir_Tarefas_Concluidas($aluno2);

$sistema_Escolar->Exibir_Disciplinas_Inscritas($aluno1);
$sistema_Escolar->Exibir_Disciplinas_Inscritas($aluno2);

$sistema_Escolar->Exibir_Disciplinas_Ministradas($professor1);
$sistema_Escolar->Exibir_Disciplinas_Ministradas($professor2);

?>