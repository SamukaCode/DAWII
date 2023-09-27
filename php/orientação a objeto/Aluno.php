<?php

class Aluno
{
    private $ra;
    private $nome;
    private $curso;

    public function getRa() {
        return $this->ra;
    }

    public function setRa($ra) {
        $this->ra = $ra;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function cadastrar() {
        echo "RA: " . $this->getRa() . "<br>";
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Curso: " . $this->getCurso() . "<br>";
    }
}