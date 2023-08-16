<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDIÇÃO DE ALUNOS</title>
</head>
<body>
	<a href="BD_Cindex.php">HOME</a> | <a href="BD_Cconsulta.php">CONSULTA</a>
	<h2> EDIÇÃO DE ALUNOS</h2>

	<?php
	//try catch é feito apra fazer a conexao com  banco 
	//se a conexao der certo, vai executar o pdo
	$ra = $_POST['ra'];
	$novoNome = $_POST['nome'];
	$novoCurso = $_POST['curso'];

	//FOTO
	$foto = $_FILES['foto'];
	$nomeFoto = $foto['name'];
	$tipoFoto = $foto['type'];
	$tamanhoFoto = $foto['size'];

	//faz update da foto apenas se o arquivo foi enviado
	if ($nomeFoto != "") {
		//lendo o conteudo do arq para uma var
		$fotoBinario = file_get_contents($nomeFoto['tmp_name']);
		$stmt = $pdo->prepare ('UPDATE alunosPHP SET nome = :novoNome, curso = :novoCurso, foto = :novaFoto WHERE ra = :ra'); 
		$stmt->bindParam(':novoNome', $novoNome); //troca pelo que veio do form
		$stmt->bindParam(':novoCurso', $novoCurso);
		$stmt->bindParam(':novaFoto', $novaFoto);
		$stmt->bindParam(':ra', $ra);  
	}
	else {
		$stmt = $pdo->prepare ('UPDATE alunosPHP SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra'); 
	    	$stmt->bindParam(':novoNome', $novoNome); //troca pelo que veio do form
	    	$stmt->bindParam(':novoCurso', $novoCurso);
	    	$stmt->bindParam(':ra', $ra);  
	    }

	    try {
	    	$stm->execute();
	    	echo "Os dados do aluno de Ra $ra foram alterado!";		
	    } catch (PDOException $e) {
	    	echo 'Error: '.$e->getMessage();
	    }


	 /*try {
	    	include("BD_Cconexao.php"); //include: faz conexao com bd	
	    	$stmt = $pdo->prepare ('UPDATE alunosPHP SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra'); 
	    	$stmt->bindParam(':novoNome', $novoNome); //troca pelo que veio do form
	    	$stmt->bindParam(':novoCurso', $novoCurso);
	    	$stmt->bindParam(':ra', $ra);  
	    	$stmt->execute();

	    	echo "Os dados do aluno de Ra $ra foram alterado!";

	    } catch (PDOException $e) {
	    	echo 'Error: ' . $e->getMessage();
	    }*/

	    $pdo = null;
	    ?>
	</body>
	</html>