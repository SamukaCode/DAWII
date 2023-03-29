<?php

$op = 3;

switch($op) {
    case 1: 
        //cadastar();
        echo "Cadastro";
        break;
    
    case 2: 
        //emitirRelatorioVenda();
        echo "Relatorios";
        break;
    
    default:
        echo "Opção Inválida!";
        break;
}

echo "<br><br>oi após break";