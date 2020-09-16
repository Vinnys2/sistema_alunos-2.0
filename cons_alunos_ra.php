<?php
    include('consulta.inc.php');
    
    


    include('conexao2.php');
	
  if(!empty($_POST))
  {
    $idp = $_POST["idp"];
    $SQL = "SELECT ID,NOME, ENDERECO, IDADE FROM PESSOAS where id = " . $idp . " ";
	
    // Não usa o include do rodape_conexão para não ficar grande e os comandos também são diferentes.
    $dados_recuperados = mysqli_query($con, $SQL);
    if ($dados_recuperados){

        //mysqli_num_rows mostra o numero de linhas da seleção que é o parametro ideal de se usar.

      //$resultado =  mysqli_fetch_assoc($dados_recuperados);
       //echo $resultado['id'] . "-" . $resultado['nome'] . " - " . $resultado['idade'];
       // mysqli_fetch_assoc seleciona os dados 1 por vez, em conjunto. E ele usa o nome da coluna (id, nome, endereço, idade)

       // mysqli_fetch_array seleciona os dados 1 por vez, em conjunto. E ele usa indice numeri
       // exemplo de fetch_array echo $resultado['0'] . "-" . $resultado['1'] . " - " . $resultado['2'] . "<br>" .;
      

       while (($resultado =  mysqli_fetch_assoc($dados_recuperados)) != null )
       {

        echo "<fieldset>";
          
         echo  $resultado['ID'] . " - " . $resultado['NOME'] . " - ". $resultado['ENDERECO'] . " - ". $resultado['IDADE'] . "<br>";
         
         echo "</fieldset>";   

         //Esse comando está selecionando todos automaticamente (estrutura de repetição.) e o != null significa diferente de nulo.
       }
      }
    

    
  }
    mysqli_close($con)

  

?>