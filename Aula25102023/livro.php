<?php

class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function exibirInfo() {
        echo "Título: {$this->titulo}\nAutor: {$this->autor}\n";
    }

    // Métodos getters para permitir acesso às propriedades privadas
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
}

class Usuario {
    private $nome;
    private $livrosEmprestados = [];
    private $livrosReservados = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function emprestarLivro(Livro $livro) {
        $this->livrosEmprestados[] = $livro;
        echo "{$this->nome} emprestou o livro {$livro->getTitulo()}\n";
    }

    public function devolverLivro(Livro $livro) {
        $livroKey = array_search($livro, $this->livrosEmprestados);
        if ($livroKey !== false) {
            unset($this->livrosEmprestados[$livroKey]);
            echo "{$this->nome} devolveu o livro {$livro->getTitulo()}\n";
        } else {
            echo "{$this->nome} não possui o livro {$livro->getTitulo()}\n";
        }
    }

    public function reservarLivro(Livro $livro) {
        $this->livrosReservados[] = $livro;
        echo "{$this->nome} reservou o livro {$livro->getTitulo()}\n";
    }

    // Métodos getters para permitir acesso às propriedades privadas
    public function getNome() {
        return $this->nome;
    }
}

class Funcionario {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function cadastrarLivro(Biblioteca $biblioteca, Livro $livro) {
        $biblioteca->adicionarLivro($livro);
        echo "{$this->nome} cadastrou o livro {$livro->getTitulo()} na biblioteca\n";
    }

    // Métodos getters para permitir acesso às propriedades privadas
    public function getNome() {
        return $this->nome;
    }
}

class Emprestimo {
    private $usuario;
    private $livro;

    public function __construct(Usuario $usuario, Livro $livro) {
        $this->usuario = $usuario;
        $this->livro = $livro;
    }

    public function realizarEmprestimo() {
        $this->usuario->emprestarLivro($this->livro);
    }

    public function realizarDevolucao() {
        $this->usuario->devolverLivro($this->livro);
    }
}

class Reserva {
    private $usuario;
    private $livro;

    public function __construct(Usuario $usuario, Livro $livro) {
        $this->usuario = $usuario;
        $this->livro = $livro;
    }

    public function realizarReserva() {
        $this->usuario->reservarLivro($this->livro);
    }
}

class Biblioteca {
    private $livrosDisponiveis = [];

    public function adicionarLivro(Livro $livro) {
        $this->livrosDisponiveis[] = $livro;
        echo "O livro {$livro->getTitulo()} foi adicionado à biblioteca.\n";
    }

    public function mostrarLivrosDisponiveis() {
        echo "Livros disponíveis na biblioteca:\n";
        foreach ($this->livrosDisponiveis as $livro) {
            $livro->exibirInfo();
        }
    }
}

// Exemplo de uso
$livro1 = new Livro("Aprendendo PHP", "John Smith");
$livro2 = new Livro("Clean Code", "Robert C. Martin");
$livro3 = new Livro("Design Patterns", "Erich Gamma");

$usuario1 = new Usuario("João");
$usuario2 = new Usuario("Maria");

$funcionario1 = new Funcionario("Carlos");

$emprestimo1 = new Emprestimo($usuario1, $livro1);
$emprestimo2 = new Emprestimo($usuario2, $livro2);

$reserva1 = new Reserva($usuario1, $livro3);

$funcionario1->cadastrarLivro($biblioteca, $livro1);
$funcionario1->cadastrarLivro($biblioteca, $livro2);
$funcionario1->cadastrarLivro($biblioteca, $livro3);

$biblioteca->mostrarLivrosDisponiveis();

$emprestimo1->realizarEmprestimo();
$emprestimo2->realizarEmprestimo();

$reserva1->realizarReserva();

$biblioteca->mostrarLivrosDisponiveis();

$emprestimo1->realizarDevolucao();
$emprestimo2->realizarDevolucao();

$biblioteca->mostrarLivrosDisponiveis();
?>
