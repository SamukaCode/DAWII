<?php

$filename = fopen("log.txt", "w+");

fwrite($filename, date("Y-m-d H:i:s"));
fwrite($filename, "\n");

fclose($filename);

echo "Arquivo criado com sucesso \n";
echo filesize("log.txt");