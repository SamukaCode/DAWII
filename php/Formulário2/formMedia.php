<?php
if ($SERVER["REQUEST_METHOD"] === 'GET') {
    $msgN1 = "";
    $msgN2 = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
    <style>
        #warning {
            color: red;
        }

        #aprovado {
            color: green;
        }

        #reprovado {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Cálculo de Média</h1>

    <form method="post">
        Nota 1:<br>
        <input type="number" name="nota1" min="6" max="10"><br>
        <span id="warning"><small></small></span>

        <br><br>

        Nota2<br>
        <input type="number" name="nota2" min="6" max="10">
        <span id="warning"><small></small></span>

        <br><br>

        <input type="submit" value="Calcular">
        <br>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    function calcMedia($n1, $n2)
    {
        $media = ($n1 + $n2) / 2;
        return $media;
    }

    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];

    if ((trim($n1) == "")) {
        $msgN1 = "A nota 1 é obrigatória";
    } elseif (trim($n2) == "") {
        $msgN2 = "A nota 1 é obrigatória";
    } else {
        $media = calcMedia($n1, $n2);

        echo "Média = " . $media . "<br>";

        if ($media >= 6.0) {
            echo "<br><span id='aprovado'>APROVADO!</span>";
        } else {
            echo "<br><span id='reprovado'>APROVADO!</span>";
        }
    }
}
?>