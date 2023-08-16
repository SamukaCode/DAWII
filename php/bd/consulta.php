<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href="BD_Cindex.html"></a>

	<h2>Consulta de Alunos</h2>
	<form method="POST">
		Ra: <br>
		<input type="text" name="ra" size="10">
		<input type="submit" value="Consultar">
		<hr>		
	</form>
</body>
</html>

<?php
	if ($_SERVER["REQUEST_METHOD"] == 'POST') {
	    
	    include("BD_Cconexao.php"); //include: faz conexao com bd		

		if (isset($_POST["ra"]) && ($_POST['ra'] != "")){
			$ra = $_POST['ra'];
			$stmt = $pdo -> prepare("select * from alunosPHP where ra = :ra order by nome,curso");
			$stmt -> bindParam(':ra', $ra);	
		} else {
		$stmt = $pdo -> prepare("select * from alunosPHP order by nome,curso");
	}

	try {							
		//buscando dados
		$stmt -> execute();

		echo "<form method='post'>";
		echo "<table border='1px'>";
			echo "<tr>";
				echo "<th></th>";
				echo "<th>RA</th>";
				echo "<th>Nome</th>";
				echo "<th>Curso</th>";
				echo "<th>Foto</th>";
			echo "</tr>";

			while ($row = $stmt->fetch()) {
				echo "<tr>";
					echo "<td><input type='radio' name='raAluno' value='" .$row['ra']. "'></td>" ;
					echo "<td>" . $row['ra'] . "</td>";
					echo "<td>" . $row['nome'] . "</td>";
					echo "<td>" . $row['curso'] . "</td>";

					if ($row["foto"] == null) {
						echo"<td align='center'>-</td>";
					} else {
						echo "<td align='center'><img src='data:image;base64,".base64_encode($row["foto"])."'width='50px' height='50px'></td>";
					}

				echo "</tr>";
		}

		echo "</table><br>";
			echo "<button type='submit' formaction='BD_Cremove.php'> Excluir Aluno</button>";
			echo "<button type='submit' formaction='BD_Cedicao.php'> Editar Aluno</button>";
		echo "</form>";

	} catch (Exception $e) {
		echo 'Error: ' . $e -> getMessage();
	}

	$pdo = null;
}
	
	