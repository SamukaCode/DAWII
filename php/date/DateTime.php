<?php

$atual = new DateTime();
echo "<br>" . $atual->format('d-m-Y H:i:s');

$especifica = new DateTime('1990-01-22');
echo "<br>" . $especifica->format('d-m-Y H:i:s');

$texto = new DateTime('+1 month');
echo "<br>" . $texto->format('d-m-Y H:i:s');

// ==========

$agora = time();
    echo $agora;
    echo "<br>";

    date_default_timezone_get("Asia/Tokyo");


    echo date("Y-m-d H:i:s", time());
    echo "<br>";
    echo date("Y-m-d", time());
    echo "<br>";
    echo date("D");
    echo "<br>";
    echo date("l");
    echo "<br>";

?>