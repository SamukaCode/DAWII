<?php 
$meuArray = array();
$meuArray = array("Maçã","Melão","Uva");

//echo($meuArray); não funciona, porque echo imprime String
//echo($meuArray[0]); funciona, porque na posição 0 tem String 

print_r($meuArray); //imprime o array

unset($meuArray[1]);

echo "<br>";
print_r($meuArray);

$meuArray[1] = "Banana";
echo "<br>";
print_r($meuArray);

sort($meuArray);
echo "<br>";
print_r($meuArray);

echo count($meuArray);
echo "<br>";
echo sizeof($meuArray);

for($i == 0; $i <= sizeof($meuArray); $i++) {
    echo $meuArray[$i] . ", ";
}

// ou

foreach($meuArray as $fruta) {
    echo $fruta . ", ";
}

array_push($meuArray, "Laranja");
print_r($meuArray);

array_pop($meuArray);
print_r($meuArray);

array_shift($meuArray);
print_r($meuArray);

array_unshift($meuArray, "Laranja");
print_r($meuArray);