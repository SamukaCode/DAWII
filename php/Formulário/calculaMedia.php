<?php

    function calcMedia($n1, $n2) {
        $media = ($n1+$n2)/2;
        return $media;
    }

    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];

    if( (trim($n1) == "") || (trim($n2) == "")) {
        echo "<span id='warning'>Informe as duas notas!</span>";
    } else {
        $media = calcMedia($n1, $n2);

        echo "Média = " . $media . "<br>";

        if ($media >= 6.0) {
            echo "<span id='aprovado'>APROVADO!</span>";
        } else {
            echo "<span id='reprovado'>APROVADO!</span>";
        }
    }
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            #warning {
                color: red;
            }
            
        </style>
    </head>
    </html>
