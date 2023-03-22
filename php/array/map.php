<?php

function insereDelimitador($valor) {
    return "Fruta: " . $valor;
}

$meuArray = array();
$meuArray = array("Maçã", "Melão", "Uva");

$meuArray = array_map("insereDelimitador", $meuArray);

foreach($meuArray as $fruta) {
    echo $fruta . "<br>";
}