<?php
        include("cabecalho.inc.php");
?>

<?php


        echo '
           <form action =  "insere.php" method="POST">
                <fieldset>
                   <legend>Cadastrar  Aluno</legend> 
                   
                   
                        <label>Nome:</label>
                        <input type = "text" name = "nome" />
                        <br>

                        <label>Endereço:</label>
                        <input type = "text" name = "endereco" />
                        <br>

                        <label>Idade:</label>
                        <input type = "text" name = "idade" />
                        <br>
                                        
                        
                        
                        <input type = "submit" value = "Salvar" />
                </fieldset>
           </form>
        ';
?>

<?php
        include("rodape.inc.php");

?>