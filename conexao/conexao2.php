<?php

    //crio a conexão do php com o banco de dados (mysql)
    // endereço é entre aspas. E como está na mesma maquina o servidor então o endereço é localHost
    // 1 aspas endereço do servidor, 2 aspas usuario e 3 aspas senha
    $con = mysqli_connect("localhost", "root", "");

    if(!$con){

        // verificar se deu algum tipo de erro
        echo "mysqli_connect_error($con)"; //dentro do parentes é o link do servidor (endereço)
    }
    

    // Selecionar o banco de dados e usar o primeiro parametro a condição que criamos "$con" e depois o nome do banco
    // entre aspas é o nome do banco.
    $db = mysqli_select_DB($con, "alunos");

    if(!$db){

         echo "mysqli_error($con)";
        }



?>