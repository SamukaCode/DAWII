<?php
include("conexaoBD.php");

try {
    $stmt = $pdo->prepare("SELECT * FROM patrimonios");
    $stmt->execute();

    $fp = fopen('arquivoPatrimonios.csv', 'w');

    $colunasTitulo = array("idPatrimonio", "marca", "modelo", "tipo");
    fputcsv($fp, $colunasTitulo);

    while ($row = $stmt->fetch()) {
        $idPatrimonio = $row["idPatrimonio"];
        $marca = $row["marca"];
        $modelo = $row["modelo"];
        $tipo = $row["tipo"];

        fputcsv($fp, array($idPatrimonio, $marca, $modelo, $tipo));
    }

    $msg = "Arquivo gerado: arquivoPatrimonios.csv";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    if (isset($fp)) {
        fclose($fp);
    }
}

try {
    $stmt = $pdo->prepare("SELECT * FROM bancadas");
    $stmt->execute();

    $fp = fopen('arquivoBancada.csv', 'w');

    $colunasTitulo = array("idBancada", "local", "apelido");
    fputcsv($fp, $colunasTitulo);

    while ($row = $stmt->fetch()) {
        $idBancada = $row["idBancada"];
        $local = $row["local"];
        $apelido = $row["apelido"];

        fputcsv($fp, array($idBancada, $local, $apelido));
    }

    $msg2 = "Arquivo gerado: arquivoBancada.csv";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    if (isset($fp)) {
        fclose($fp);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Patrimônios em CSV</title>
</head>

<body>
    <h1>Listagem de Patrimônios em CSV</h1>
    <?= $msg ?> <br>
    <?= $msg2 ?>
</body>
</html>
