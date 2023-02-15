<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-weight: bold;
        }
        #aprovado {
            color: green;
        }
        #reprovado {
            color: red;
        }
        #dp {
            color: orange;
        }
    </style>
</head>

<body>
    <?php
    $media = 4.5;

    if ($media >= 6) {
        echo "<span id='aprovado'>Aprovado!</span>";
    } else if (($media > 3) && ($media < 6)) {
        echo "<span id='dp'>Dependência</span>";
    } else {
        echo "<span id='reprovado'>Reprovado!</span>";
    }
    ?>
</body>

</html>