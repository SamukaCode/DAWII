<?php
$aExemplo = array(
    "ra" => 18101,
    "serie" => 3,
    "aluno" => array(
        "nome" => "Samuel P.",
        "sobrenom" => "Matioli"
    )
);

echo $aExemplo["ra"] . " - " . $aExemplo["aluno"]["sobrenome"];

?>