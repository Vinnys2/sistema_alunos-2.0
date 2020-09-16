<?php
	
	include('conexao2.php'); // abrindo o banco
	$id = $_GET['pront'];
	$SQL = "SELECT * FROM pessoas WHERE id = $id";
	
	$editar = mysqli_query($con, $SQL); // Consultando e alterando a partir daqui
	
	if($editar){ //Verificando se o editar possui informações
		if(mysqli_num_rows($editar) == 1){
		
			while(($resultado = mysqli_fetch_assoc($editar)) != null){
				$id = $resultado['id'];
				$nome = $resultado['nome'];
				$idade = $resultado['idade'];
				$endereco = $resultado['endereco'];
			}		
		}
		else{
			echo "Não existe usuário com essas informações";
		}
	}
	else{
		echo mysqli_error ($con);
	}
	// formulario para enviar para uma outra pagina, e assim modificar através do update
	echo' 
	<form action="modificando.php" method="POST">
		<fieldset>
			<Legend>Modificar informações do aluno</legend>
				<input type="hidden" name="id" value="'.$id.'"/> 
				<br>
				
				<label>Nome:</label>
				<input type="text" name="nome" value="'.$nome.'"/>
				<br>
				
				<label>Idade:</label>
				<input type="number" name="idade" value="'.$idade.'"/>
				<br>
				
				<label>Endereco:</label>
				<input type="text" name="endereco" value="'.$endereco.'"/>
				<br>
				
				
			
		
			<input type="submit" value="Modificar">		
		</fieldset>
	</form>	
	';

	mysqli_close($con);

?>