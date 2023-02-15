<?php

$nome = "COTIL";
echo $nome;
echo "<br><br>";

var_dump($nome);  // exbie o tipo de dado, tamanho usado e valor
echo "<br><br>";

$outroNome = "UNICAMP";

echo $nome . " " . $outroNome;
echo "<br><br>";

unset($nome, $outroNome); // Remove a variável. Se quiser limpar várias, basta separar por vírgula.

if (isset($nome)) {
    echo "$nome<br><br>";
} else {
    echo "\$nome não está setado<br><br>";
}

$valor = 50.15;
echo $valor . "<br><br>";

$aprovado = true;
echo $aprovado;
echo "<br><br>";

$disciplinas = array("BD", "LP", "DAW");
echo $disciplinas[2];
echo "<br><br>";

// CONSTANTES 

define("PI", 3.14);
define("NOME_ALUNO", "Maria");

$resultado = 3 * PI;
echo $resultado . "<br><br>";
echo "Nome do Aluno: " . NOME_ALUNO . "<br><br>"; 

// super variáveis

echo "<br><br>";
echo $_SERVER["SERVER_ADDR"] . "<br>";
echo $_SERVER["SERVER_NAME"] . "<br>";
echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
echo $_SERVER["SCRIPT_NAME"] . "<br>";
echo $_SERVER["REMOTE_ADDR"] . "<br>";