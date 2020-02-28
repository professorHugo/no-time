<?php
    $IdArma   = $_POST['ArmaEditar'];
    $NomeArma = $_POST['NomeArma'];
    $TipoArma = $_POST['TipoArma'];
    echo "Ajustar BD para caber classe da arma: ".$ClasseArma = $_POST['ClasseArma'];
    $DanoArma = $_POST['DanoArma'];
    
    $QueryEditarRaca = "
        UPDATE 
            tb_item_armas 
        SET 
            descricao_item_arma = '$NomeArma',
            tipo_item_arma = '$TipoArma',
            dano_item_arma = '$DanoArma'
        WHERE id_item_arma = $IdArma
    ";

    if(mysqli_query($connection, $QueryEditarRaca)){
        echo "Editado com sucesso!<br>Inserir Modal";
    }else{
        echo "Erro".mysqli_error($connection);
    }