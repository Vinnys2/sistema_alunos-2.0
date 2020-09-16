<?php


    include('conexao2.php');

    $SQL = "SELECT * FROM PESSOAS";
    $dados_recuperados = mysqli_query($con, $SQL);
    // Não usa o include do rodape_conexão para não ficar grande e os comandos também são diferentes.
     if($dados_recuperados) {
    if(mysqli_num_rows($dados_recuperados) > 0){ // Aqui está mostrando que tem que ter pelo menos 1 linha já que estamos usando o primary key
                                                 //mysqli_num_rows mostra o numero de linhas da seleção que é o parametro ideal de se usar.
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Endereço</th>
                <th colspan='2'>Operações</th>
             </tr>";
     

       

      //$resultado =  mysqli_fetch_assoc($dados_recuperados);
       //echo $resultado['id'] . "-" . $resultado['nome'] . " - " . $resultado['idade'];
       // mysqli_fetch_assoc seleciona os dados 1 por vez, em conjunto. E ele usa o nome da coluna (id, nome, endereço, idade)

       // mysqli_fetch_array seleciona os dados 1 por vez, em conjunto. E ele usa indice numeri
       // exemplo de fetch_array echo $resultado['0'] . "-" . $resultado['1'] . " - " . $resultado['2'] . "<br>" .;
    


       while (($resultado =  mysqli_fetch_array($dados_recuperados)) != null ) //Esse comando está selecionando todos automaticamente (estrutura de repetição.) e o != null significa diferente de nulo.
       {

         echo "<tr>";
            echo  "<td>". $resultado[0]. "</td>";
            echo  "<td>". $resultado[1]. "</td>";
            echo  "<td>". $resultado[2]. "</td>";
            echo  "<td>". $resultado[3]. "</td>";
            echo  "<td><a href='editar_alunos.php?pront=$resultado[0]'>Editar</a></td>";
            echo  "<td><a href='remove_alunos.php?pront=$resultado[0]'>Remover</a></td>";
         echo "</tr>";

         
         
          

         
       }
       echo "</table>";
    }

    }else {
        echo "Problema de sintaxe SQL<br>";
        echo "mysqli_error($con)";
    }
    mysqli_close($con)


?>

<a href="menu.php">Voltar</a>

