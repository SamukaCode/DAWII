<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //include("funcoesExternas.php");
        require("funcoesExternas.php");

        $media = calcMedia(9.0 , 10.0);
        echo $media;

        echo "<br><br>";

        soma(1, 2, 3);
    ?>
</body>
</html>