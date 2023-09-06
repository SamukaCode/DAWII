<?php

include('conexaoBD.php');

try {
    $stmt = $pdo->prepare("select * from alunos order by ra");
    $stmt->execute();

    $fp = fopen('arquivoAlunos.csv', 'w');

    $colunasTitutlo = array("ra", "nome", "curso");

    fputcsv($fp, $colunasTitulo);

    while ($row = $stmt->fetch()) {
        $ra = $row["ra"];
        $nome = $row["nome"];
        $curso = $row["curso"];
    }
} catch (\Throwable $th) {
    //throw $th;
}