<?php 

$n=0;
$tabuada=7;

do {
    $n++;
    if($n==7) continue;
    echo $n . "x" . $tabuada . "=" . ($n * $tabuada) . "<br>";
} while($n<=10);

?>