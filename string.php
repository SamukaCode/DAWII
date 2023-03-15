<?php

$texto = "   COTIL - unicamp    ";

echo "-" . trim($texto) . "-" . "<br>"; // trim retira espaço no início e final de uma string.
echo "-" . ltrim($texto) . "-" . "<br>"; // ltrim retira espaço em branco ou outros caracteres do final da string.
echo "-" . rtrim($texto) . "-" . "<br>"; // ltrim retira espaços em branco ou outros caractedes do início da string.
echo strtoupper($texto) . "<br>"; // tudo maiúsculo
echo strtolower($texto) . "<br>"; // minúsculo
echo "uc:" . ucfirst($texto) . "<br>"; // 1a letra maiscula.

echo ucwords($texto) . "<br>";
echo strlen($texto) . "<br>";
echo strrev($texto) . "<br>"; // reversão de string

// quebra a string a cada 3 caracteres.
$str = str_split($texto, 3);
print_r($str);

echo "<br>";

echo strpos($texto, "unicamp") . "<br>"; // encontra a position da primeira ocorrência de uma string

$email = "samuka@gmail.com";
echo strchr($email, "@") . "<br>"; // retorna a String a partir do caracter informado "@"
echo strchr($email, "@", true) . "<br>"; // retorna a String antes do caracter informado "@"

echo substr('abcdef', 1) . "<br>"; // bcdef
echo substr('abcdef', 1, 3) . "<br>"; // bcd

echo str_replace("i", "X", $texto) . "<br>";

// casting
$foo = "0"; // foo é string (ASCII 48)
$foo += 2; // foo é agora um inteiro (2)
$foo = $foo + 1.3; // foo é agora um float (3.3)
echo $foo;
echo "<br>";

$senha = "minhasenha";

// criptografia
//md5
echo "<br> *** md5 ***<br>";
$x = md5($senha);
echo$x;
echo "<br>";

if (md5($senha) == $x) {
    echo "Senha ok! <br><br>";
}

//com salt - Uma string de salt para base da encriptação
$salt = "c0t1lU1camp";
$senha = $senha . $salt;
echo "senha = " . $senha;
echo "<br>";

$x = md5($senha);
echo($x);
echo "<br>";

if (md5($senha) == $x) {
    echo "Senha ok!<br><br>";
}

//sha1
echo "<br> *** sha1 *** <br>";
$x = sha1($senha);
echo $x;
echo "<br>";

if (sha1($senha) == $x) {
    echo "Senha ok!<br><br>";
}

//crypt
echo "<br> *** crypt *** <br>";
$x = crypt($senha, "");
echo $x;
echo "<br>";

if (crypt($senha, "") == $x) {
    echo "Senha ok!<br><br>";
}

// BASE64 - usado para transitar dados na internet

$string = "O rato roeu a roupa do rei de Roma";

$codificada = base64_encode($string);

echo "Resultado da codificação usando base64: " . $codificada;
echo "<br>;";

$original = base64_decode($codificada);

echo "Resultado da decodificação usando base64: " . $original;
// Note que $original vai ser idêntica a $string






