<?php
        //capturei as informações do formulário
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $idade = $_POST["idade"];

        //abrindo conexao com BD
        include('conexao2.php');


        $SQL = "Insert INTO pessoas (nome, endereco, idade)
                   Value ('$nome', '$endereco', $idade)";

            // Executa o comando sql e adiciona os dados no banco


        $texto = "Aluno inserido com sucesso<br>";
   
        include('rodape_conexao.php');
 

?>