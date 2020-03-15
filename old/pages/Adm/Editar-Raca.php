<?php
    $IdRaca   = $_POST['RacaEditar'];
    $NomeRaca = $_POST['NomeRaca'];
    $DescrRaca= $_POST['DescrRaca'];
    
    $QueryEditarRaca = "
        UPDATE 
            tb_racas 
        SET 
            nome_raca = '$NomeRaca',
            descr_raca = '$DescrRaca'
        WHERE id_raca = $IdRaca
    ";

    if(mysqli_query($connection, $QueryEditarRaca)){
        echo "Editado com sucesso!<br>Inserir Modal";
    }else{
        echo "Erro".mysqli_error($connection);
    }