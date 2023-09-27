<?php

class Pessoa {
    public $nome = "Simone";
    protected $idade = 18;
    private $senha = "123456";

    public function verDados() {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa {
    public function verDados() {
        echo get_class($this) . "<br>";
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        // echo $this->senha . "<br>";
    }
}

$pessoa = new Programador();
echo $pessoa->nome;

$pessoa->verDados();