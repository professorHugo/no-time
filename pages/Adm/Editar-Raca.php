<?php
    $IdRaca   = $_POST['RacaEditar'];
    $NomeRaca = $_POST['NomeRaca'];
    
    $QueryEditarRaca = "
        UPDATE 
            tb_racas 
        SET 
            nome_raca = '$NomeRaca'
        WHERE id_raca = $IdRaca
    ";

    if(mysqli_query($connection, $QueryEditarRaca)){
        echo "Editado com sucesso!";
    }else{
        echo "Erro".mysqli_error($connection);
    }