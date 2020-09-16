<?php
     $query = mysqli_query($con, $SQL);
    if ($query){
        echo $texto;
        Echo "<a href='menu.php'>Voltar ao menu</a>";
    }else {
        echo "mysqli_error($con)";
    }
    mysqli_close($con)
?>