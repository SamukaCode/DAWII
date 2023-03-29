<?php

$arrayExemplo = array("Linguagem1" => "PHP", "Linguagem2" => "SQL", "Linguagem3" => 100, "Linguagem4" => "Assembly");

print_r($arrayExemplo);

sort($arrayExemplo);

echo "<hr>Após 'ordenar' com sort(array)<br>";
print_r($arrayExemplo);