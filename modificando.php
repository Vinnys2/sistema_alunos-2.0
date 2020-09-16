<?php
	include('conexao2.php');

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$endereco = $_POST['endereco'];

	
	
	$SQL = "UPDATE pessoas SET nome='$nome', idade='$idade', endereco='$endereco' WHERE id=$id";
	
	$texto = "Aluno atualizado com sucesso";
	// echo "$SQL";
	include('rodape_conexao.php');
	
	header('location:cons_todos_alunos.php');
?>