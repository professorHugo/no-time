<?php
    $IdDef   = $_POST['DefEditar'];
    $NomeDef = $_POST['NomeDef'];
    $TipoDef = $_POST['TipoDef'];
    echo "Ajustar BD para caber classe da Def: ".$ClasseDef = $_POST['ClasseDef'];
    $DanoDef = $_POST['DanoDef'];
    
    $QueryEditarDef = "
        UPDATE 
            tb_item_def 
        SET 
            descricao_item_Def = '$NomeDef',
            tipo_item_Def = '$TipoDef',
            dano_item_Def = '$DanoDef'
        WHERE id_item_Def = $IdDef
    ";

    if(mysqli_query($connection, $QueryEditarDef)){
        echo "Editado com sucesso!<br>Inserir Modal";
    }else{
        echo "Erro".mysqli_error($connection);
    }