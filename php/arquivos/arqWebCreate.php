<?php

$homepage = file_get_contents('http://www.google.com/');

$filename = fopen("siteCotil.html", 'w+');
fwrite($filename, $homepage);
fclose($filename);

echo "Arquivo criado com sucesso!";
?>