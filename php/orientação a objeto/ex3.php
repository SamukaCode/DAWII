<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logradouro, $numero, $cidade) {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __destruct() {
        var_dump("DESTRUIR");
        echo "destruir";
    }

    public function __toString() {
        return $this->logradouro . "<br>" . $this->numero . "<br>" . $this->cidade . "<br>";
    }
}

$meuEndereco = new Endereco("Rua Adolfo Lutz", "123", "São Paulo");

echo $meuEndereco;