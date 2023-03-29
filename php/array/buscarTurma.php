<?php

$turmas = array(
    "3DSD" => array(
        "16117" => "Amanda Oliveira Santos",
        "16547" => "Samuel Pereira Camargo",
        "45256" => "Nelson Neto",
        "456985" => "Nelson Júnior"
    ),
    "2CTDS" => array(
        "17565" => "Diogo Oliveira",
        "85654" => "Leonardo Monteiro",
        "45564" => "Domingo Oliveiro",
        "85256" => "Heitor Gomes"
    ),
    "2DSN" => array(
        "87998" => "Felipe Furlani",
        "12312" => "Ana Júlia",
        "12313" => "Natália Carvalho"
    )
);

if (!isset($_POST["turma"]) || (trim($_POST["turma"]) == "")) {
    echo "<span style='font-weight: bold; color: red'>Informe a turma</span>";
} else {
    $turma = strtoupper($_POST["turma"]);

    echo "<h1>Alunos da turma " . $turma . "</h1>";
    echo "<table border='1px'>";

    foreach ($turmas[$turma] as $aluno) {
        echo "<tr><td>" . $aluno . "</td></tr>";
    }

    echo "</table>";
}
