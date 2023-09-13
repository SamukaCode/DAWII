<?php 

mkdir('./teste1', 0777);

echo "Pasta teste 1 criada!<br>";

mkdir('./teste2/teste3', 0777, true);

echo "Pasta teste 2 criada!<br>";

chmod('./teste1', 0600);
echo "Permissão da pasta teste 1 alterada!";