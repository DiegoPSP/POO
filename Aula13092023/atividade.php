<?php
// Classe abstrata
abstract class Animal {
    protected $nome;

    // Construtor
    public function __construct($nome) {
        $this->nome = $nome;
    }

    // Método abstrato
    abstract public function fazerSom();
}

// Classe final (não pode ser herdada)
final class Cachorro extends Animal {
    public function fazerSom() {
        return "O cachorro {$this->nome} faz latidos.";
    }

    public function correr() {
        return "{$this->nome} está correndo.";
    }
}

// Classe final (não pode ser herdada)
final class Gato extends Animal {
    public function fazerSom() {
        return "O gato {$this->nome} faz miados.";
    }

    public function pular() {
        return "{$this->nome} está pulando.";
    }
}

// Polimorfismo
function fazerBarulho(Animal $animal) {
    return $animal->fazerSom();
}

// Objeto
$cachorro = new Cachorro("Bidu");
$gato = new Gato("Miojo");

// Herança
echo $cachorro->fazerSom() . "<br>";
echo $cachorro->correr() . "<br>";

echo $gato->fazerSom() . "<br>";
echo $gato->pular() . "<br>";

// Polimorfismo
echo fazerBarulho($cachorro) . "<br>";
echo fazerBarulho($gato) . "<br>";
?>
